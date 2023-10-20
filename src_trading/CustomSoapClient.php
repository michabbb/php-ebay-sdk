<?php /** @noinspection UnknownInspectionInspection */

namespace macropage\ebaysdk\trading;

use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use SoapClient;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class CustomSoapClient extends SoapClient
{
    private Client  $guzzleClient;
    private ?string $lastRequest         = null;
    private ?string $lastResponse        = null;
    private ?array  $lastResponseHeaders = null;
    private array   $container           = [];
    public const OPTION_PREFIX = 'wsdl_';
    public const WSDL_URL      = 'wsdl_url';
    public const WSDL_URI      = 'wsdl_uri';
    public const WSDL_LOCATION = 'wsdl_location';
    private int $retry       = 0;
    private int $retry_delay = 3000;
    private int $retryCount  = 0;

    public function __construct($wsdl, $options = [])
    {
        $options = $this->parseOptions($options);
        parent::__construct($wsdl, $options);

        $history         = Middleware::history($this->container);  // Create a history middleware
        $stack           = HandlerStack::create();
        $retryMiddleware = Middleware::retry(
            $this->retryDecider(),
            $this->retryDelay()
        );
        $stack->push($retryMiddleware);
        $stack->push($this->createRetryCounterMiddleware(), 'retry_counter');
        $stack->push($history);

        $this->guzzleClient = new Client(['handler' => $stack]);
    }

    public function setRetry(int $retry): void
    {
        $this->retry = $retry;
    }

    private function parseOptions(array $options): array
    {
        $wsdlOptions        = [];
        $defaultWsdlOptions = AbstractSoapClientBase::getDefaultWsdlOptions();
        foreach ($defaultWsdlOptions as $optionName => $optionValue) {
            if (array_key_exists($optionName, $options) && !is_null($options[$optionName])) {
                $wsdlOptions[str_replace(self::OPTION_PREFIX, '', $optionName)] = $options[$optionName];
            } elseif (!is_null($optionValue)) {
                $wsdlOptions[str_replace(self::OPTION_PREFIX, '', $optionName)] = $optionValue;
            }
        }
        if ($this->canInstantiateSoapClientWithOptions($wsdlOptions) && array_key_exists(str_replace(self::OPTION_PREFIX, '', self::WSDL_URL), $wsdlOptions)) {
            $wsdlOptions[str_replace(self::OPTION_PREFIX, '', self::WSDL_URL)];
            unset($wsdlOptions[str_replace(self::OPTION_PREFIX, '', self::WSDL_URL)]);
        }
        return $wsdlOptions;
    }

    private function canInstantiateSoapClientWithOptions($wsdlOptions): bool
    {
        return (
            array_key_exists(str_replace(self::OPTION_PREFIX, '', self::WSDL_URL), $wsdlOptions) ||
            (
                array_key_exists(str_replace(self::OPTION_PREFIX, '', self::WSDL_URI), $wsdlOptions) &&
                array_key_exists(str_replace(self::OPTION_PREFIX, '', self::WSDL_LOCATION), $wsdlOptions)
            )
        );
    }

    /** @noinspection MagicMethodsValidityInspection */
    public function __default_headers(): array
    {
        return [
            'SOAPAction'      => "",
            'Content-Type'    => 'text/xml; charset=utf-8',
            'Accept-Encoding' => 'gzip, deflate',
        ];
    }

    public function __getLastRequest(): ?string
    {
        return $this->lastRequest;
    }

    public function __getLastRequestHeaders()
    {
        $lastRequest = end($this->container)['request'] ?? null;
        if ($lastRequest instanceof Request) {
            return $lastRequest->getHeaders();
        }

        return null;
    }

    public function __getLastResponseHeaders(): ?array
    {
        return $this->lastResponseHeaders;
    }

    public function __getLastResponse(): ?string
    {
        return $this->lastResponse;
    }

    /**
     * @throws SoapFault
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0): ?string
    {
        $this->lastRequest = $request;

        $guzzleOptions = $this->getGuzzleOptions();

        try {
            $response = $this->guzzleClient->post(
                $location,
                array_merge([
                                'headers' => $this->__default_headers(), 'body' => $request,
                            ], $guzzleOptions));

            $this->lastResponseHeaders = $response->getHeaders();

            $body = $response->getBody()->getContents();

            $transferEncoding = $response->getHeaderLine('Transfer-Encoding');
            if ($transferEncoding === 'chunked') {
                $body = $this->dechunk($body);
            }

            $this->lastResponse = $body;

            return $body;
        } catch (RequestException $e) {
            // Handle the exception as you see fit, for example by re-throwing it or logging it
            throw new SoapFault('Server', $e->getMessage());
        } catch (GuzzleException $e) {
            throw new SoapFault('Server', $e->getMessage());
        }
    }

    private function dechunk(string $body): string
    {
        $stream = fopen('php://memory', 'rb+');
        fwrite($stream, $body);
        rewind($stream);
        stream_filter_append($stream, 'dechunk', STREAM_FILTER_READ);
        return stream_get_contents($stream);
    }

    private function getGuzzleOptions(): array
    {
        $guzzleOptions = [];

        if (isset($this->soapOptions['compression'])) {
            $guzzleOptions['decode_content'] = 'gzip, deflate';
        }

        if (isset($this->soapOptions['connection_timeout'])) {
            $guzzleOptions['timeout'] = $this->soapOptions['connection_timeout'];
        }

        if (isset($this->soapOptions['exceptions'])) {
            $guzzleOptions['http_errors'] = $this->soapOptions['exceptions'];
        }

        if (isset($this->soapOptions['stream_context'])) {
            $contextOptions = stream_context_get_options($this->soapOptions['stream_context']);
            if (isset($contextOptions['ssl'])) {
                $guzzleOptions['verify'] = $contextOptions['ssl']['verify_peer'];
            }
        }

        if (isset($this->soapOptions['trace'])) {
            $guzzleOptions['debug'] = $this->soapOptions['trace'];
        }

        return $guzzleOptions;
    }

    private function retryDecider(): Closure
    {
        return function (
            $retries,
            Request $request,
            Response $response = null,
            RequestException $exception = null
        ) {
            $this->retryCount = $retries + 1;
            // Retry on connection exceptions and 5xx responses
            return $retries < $this->retry && ($exception instanceof RequestException || ($response && $response->getStatusCode() >= 500));
        };
    }

    private function retryDelay(): Closure
    {
        return function ($numberOfRetries) {
            return $this->retry_delay * $numberOfRetries;  // Delay in milliseconds
        };
    }

    public function setRetryDelay(int $retry_delay): void
    {
        $this->retry_delay = $retry_delay;
    }

    private function createRetryCounterMiddleware(): Closure
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                // Set the header based on the retry count
                $request = $request->withHeader('X-Retry-Count', $this->retryCount);
                return $handler($request, $options);
            };
        };
    }

}
