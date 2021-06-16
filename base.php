<?php
/** @noinspection ClassConstantCanBeUsedInspection */

namespace macropage\ebaysdk\base;

use DateTime;
use DateTimeZone;
use DOMDocument;
use Exception;
use JetBrains\PhpStorm\ArrayShape;
use macropage\ebaysdk\finding\ServiceType\Service as FindingService;
use macropage\ebaysdk\trading\ServiceType\Service as TradingService;
use macropage\ebaysdk\shopping\ServiceType\Service as ShoppingService;
use Psr\Log\LoggerInterface;
use RuntimeException;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class base
{

    protected string                 $appid;
    protected AbstractSoapClientBase $Service;
    protected int                    $version;
    protected LoggerInterface        $logger;
    protected string                 $soap_url_location = '';
    protected string                 $siteId;
    protected string                 $api_endpoint;

    public function setSOAPLocation($location): void
    {
        $this->Service->setLocation($location);
        $this->soap_url_location = $location;
    }

    /**
     *
     * @param LoggerInterface|null $logger LoggerInterface The logger instance the service will use.
     *
     * @return LoggerInterface The logger instance or null if one hasn't been assigned.
     */
    public function setLogger(?LoggerInterface $logger): LoggerInterface
    {
        if ($logger) {
            $this->logger = $logger;
        }

        return $this->logger;
    }

    /**
     * @return DOMDocument|string|null
     */
    public function getLastRequest()
    {
        return $this->Service->getLastRequest();
    }

    /**
     * @return DOMDocument|string|null
     */
    public function getLastResponse()
    {
        return $this->Service->getLastResponse();
    }

    /**
     * @return array|string|null
     */
    public function getLastRequestHeaders()
    {
        return $this->Service->getLastRequestHeaders();
    }

    /**
     * @return array|string|null
     */
    public function getLastResponseHeaders()
    {
        return $this->Service->getLastResponseHeaders();
    }

    public function setSiteId(string $siteid): void
    {
        $this->siteId = $siteid;
    }

    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param $method
     * @param $args
     *
     * @return mixed
     * @throws SoapFault
     */
    public function call($method, $args)
    {
        switch ((string)$this->Service) {
            case 'macropage\ebaysdk\finding\ServiceType\Service': //finding
                if (method_exists($this->Service, $method)) {
                    $this->Service->setHttpHeader('X-EBAY-SOA-OPERATION-NAME', $method);
                    if ($this->siteId) {
                        $this->Service->setHttpHeader('X-EBAY-SOA-GLOBAL-ID', $this->siteId);
                    }
//					$this->Service->setHttpHeader('X-EBAY-SOA-MESSAGE-PROTOCOL','SOAP11');
                    $result = call_user_func_array(
                        [
                            $this->Service,
                            $method
                        ], $args);
                    $this->log($method);

                    return $result;
                }

                throw new RuntimeException('unknow method ' . $method);
            case 'macropage\ebaysdk\shopping\ServiceType\Service':    // Shopping
            case 'macropage\ebaysdk\trading\ServiceType\Service':  // Trading
                if (method_exists($this->Service, $method)) {
                    try {
                        if (
                            is_object($args[0]) &&
                            method_exists($args[0], 'setVersion')
                        ) {
                            $args[0]->setVersion((string)$this->version);
                        }

                        $this->Service->setLocation($this->api_endpoint . '?callname=' . $method . '&siteid=' . $this->siteId . '&appid=' . $this->appid . '&version=' . $this->version . '&routing=new');
                        $result = call_user_func_array(
                            [
                                $this->Service,
                                $method
                            ], $args);
                        $this->log($method);

                        if (!$result && count($this->Service->getLastError())) {
                            $Errors = $this->Service->getLastError();
                            if (is_array($Errors)) {
                                $Error = reset($Errors);
                                if (is_object($Error) && $Error instanceof SoapFault) {
                                    throw $Error;
                                }
                                throw new RuntimeException('unknown error type: ' . get_class($Error));
                            }
                            throw new RuntimeException('unknown error type: please check your logs');
                        }

                        return $result;
                    } catch (RuntimeException $e) {
                        throw new RuntimeException($e);
                    }
                }
                throw new RuntimeException('unknow method ' . $method);
            default:
                throw new RuntimeException('unknown Service: ' . $this->Service);
        }
    }

    protected function getDebugInfos(): array
    {
        return [
            'ApiEndpoint'         => $this->api_endpoint,
            'SoapUrlLocation'     => $this->soap_url_location,
            'LastRequestHeaders'  => $this->Service->getLastRequestHeaders(),
            'LastRequest'         => $this->Service->getLastRequest(),
            'LastResponseHeaders' => $this->Service->getLastResponseHeaders(),
            'LastResponse'        => $this->Service->getLastResponse(),
            'LastError'           => $this->Service->getLastError() ?: null
        ];
    }

    private function log($method): void
    {
        $this->logRequest(
            $this->soap_url_location,
            $method,
            $this->Service->getLastRequestHeaders(),
            $this->Service->getLastRequest(),
            $this->Service->getLastResponseHeaders(),
            $this->Service->getLastResponse(),
            $this->Service->getLastError() ?: null
        );
    }

    /**
     * Logs the request details.
     *
     * @param string $url  API endpoint.
     * @param string $name The name of the operation.
     * @param string $headers_request
     * @param string $request_xml
     * @param string $headers_response
     * @param string $reponse_xml
     * @param mixed  $last_error
     */
    private function logRequest(string $url, string $name, string $headers_request, string $request_xml, string $headers_response, string $reponse_xml, $last_error): void
    {
        if ($this->logger) {
            $faulstring        = '';
            $faulstring_detail = '';
            if (is_array($last_error)) {
                foreach ($last_error as $errentry) {
                    if (is_object($errentry) && $errentry instanceof SoapFault) {
                        $faulstring = $errentry->getMessage();
                        if (is_object($errentry->detail)) {
                            if ($errentry->detail->FaultDetail->DetailedMessage) {
                                $faulstring_detail = $errentry->detail->FaultDetail->DetailedMessage;
                            }
                        } else {
                            $faulstring_detail = $errentry->detail;
                        }
                    }
                }
            }

            $this->logger->debug(
                'Request', [
                'url'                => $url,
                'name'               => $name,
                'headers_request'    => $headers_request,
                'headers_response'   => $headers_response,
                'request_xml'        => $request_xml,
                'response_xml'       => $reponse_xml,
                'last_error'         => $last_error,
                'faultstring'        => $faulstring,
                'faultstring_detail' => $faulstring_detail
            ]);
        }
    }

    /**
     * @param $datetime
     *
     * @return string
     *
     * in case u are workinh with docker, don´t forget
     * to mount your ini with your correct timezone entry, like:
     *
     *  [Date]
     *  date.timezone = "Europe/Berlin"
     *
     * otherwise, LOCAL = UTC = EBAY-Time
     */
    public function GmtTimeToLocalTime($datetime): string
    {
        $default_timezone = date_default_timezone_get();
        date_default_timezone_set('UTC');
        try {
            $new_date = new DateTime($datetime);
        } catch (Exception $e) {
            throw new RuntimeException('unable to parese date: ' . $datetime.' Error: '.$e->getMessage());
        }
        $new_date->setTimezone(new DateTimeZone($default_timezone));
        date_default_timezone_set($default_timezone);

        return $new_date->format('Y-m-d H:i:s');
    }

    protected function overrideSoapWsdlOptions($default, $new)
    {
        foreach ($new as $key => $value) {
            $default[$key] = $value;
        }

        return $default;
    }

}
