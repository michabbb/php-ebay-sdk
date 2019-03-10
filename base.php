<?php
namespace macropage\ebaysdk\base;


class base {

	protected $appid;
	/**
	 * @var \macropage\ebaysdk\trading\ServiceType\Service
	 */
	protected $Service;
	/**
	 * @var int
	 */
	protected $version;
	/**
	 * @var \Psr\Log\LoggerInterface The logger for the service.
	 */
	protected $logger;
	protected $soap_url_location;
	/**
	 * @var string|int
	 */
	protected $siteId;
	protected $api_endpoint;

	public function setSOAPLocation($location) {
		$this->Service->setLocation($location);
		$this->soap_url_location = $location;
	}

	/**
	 *
	 * @param $logger \Psr\Log\LoggerInterface The logger instance the service will use.
	 *
	 * @return \Psr\Log\LoggerInterface The logger instance or null if one hasn't been assigned.
	 */
	public function setLogger(\Psr\Log\LoggerInterface $logger = null) {
		if ($logger) {
			$this->logger = $logger;
		}

		return $this->logger;
	}

	public function getLastRequest() {
		return $this->Service->getLastRequest();
	}

	public function getLastResponse() {
		return $this->Service->getLastResponse();
	}

	public function getLastRequestHeaders() {
		return $this->Service->getLastRequestHeaders();
	}

	public function getLastResponseHeaders() {
		return $this->Service->getLastResponseHeaders();
	}

	public function setSiteId($siteid) {
		$this->siteId = $siteid;
	}

	public function setVersion($version) {
		$this->version = $version;
	}

	/**
	 * @param $method
	 * @param $args
	 *
	 * @return mixed
	 */
	public function call($method, $args) {
		switch ((string)$this->Service) {
			case 'macropage\ebaysdk\finding\ServiceType\Service': //finding
				if (method_exists($this->Service, $method)) {
					$this->Service->setHttpHeader('X-EBAY-SOA-OPERATION-NAME',$method);
					if ($this->siteId) {
						$this->Service->setHttpHeader('X-EBAY-SOA-GLOBAL-ID',$this->siteId);
					}
//					$this->Service->setHttpHeader('X-EBAY-SOA-MESSAGE-PROTOCOL','SOAP11');
					$result = call_user_func_array([$this->Service, $method], $args);
					$this->log($method);

					return $result;
				}

				throw new \RuntimeException('unknow method ' . (string)$method);
				break;
			case 'macropage\ebaysdk\trading\ServiceType\Service': // Trading
				if (method_exists($this->Service, $method)) {
					try {
						if (
							is_object($args[0]) &&
							method_exists($args[0], 'setVersion')
						) {
							$args[0]->setVersion((string)$this->version);
						}
						$this->Service->setLocation($this->api_endpoint . '?callname=' . $method . '&siteid=' . $this->siteId . '&appid=' . $this->appid . '&version=' . $this->version . '&routing=new');
						$result = call_user_func_array([$this->Service, $method], $args);
						$this->log($method);

						return $result;
					} catch (\RuntimeException $e) {
						throw new \RuntimeException($e);
					}
				}
				throw new \RuntimeException('unknow method ' . (string)$method);
				break;
			default:
				throw new \RuntimeException('unknown Service: ' . (string)$this->Service);
				break;
		}
	}

	private function log($method) {
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
	 * @param string $name    The name of the operation.
	 * @param string $url     API endpoint.
	 * @param array  $headers Associative array of HTTP headers.
	 * @param string $body    The XML body of the POST request.
	 */
	private function logRequest($url, $name, $headers_request, $request_xml, $headers_response, $reponse_xml, $last_error) {
		if ($this->logger) {
			$faulstring        = '';
			$faulstring_detail = '';
			if (is_array($last_error)) {
				foreach ($last_error as $errentry) {
					if (is_object($errentry) && $errentry instanceof \SoapFault) {
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

			$this->logger->debug('Request', [
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

	function GmtTimeToLocalTime($datetime) {
		$default_timezone = date_default_timezone_get();
		date_default_timezone_set('UTC');
		try {
			$new_date = new \DateTime($datetime);
		} catch (\Exception $e) {
			throw new \RuntimeException('unable to parese date: ' . $datetime);
		}
		$new_date->setTimeZone(new \DateTimeZone($default_timezone));
		date_default_timezone_set($default_timezone);

		return $new_date->format("Y-m-d h:i:s");
	}

	protected function overrideSoapWsdlOptions($default, $new) {
		foreach ($new as $key => $value) {
			$default[$key] = $value;
		}

		return $default;
	}

}