<?php
declare(strict_types=1);

namespace macropage\ebaysdk\base;

class soap_client_finding extends \SoapClient {

    public function __construct(string $wsdl, array $options = []) {
        $new_options = [];
        foreach ($options as $key => $data) {
            if (str_contains($key, 'wsdl_')) {
                $new_options[substr($key,5)] = $data;
            } else {
                $new_options[$key] = $data;
            }
        }
        parent::__construct($wsdl, $new_options);
    }

    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int    $version
     * @param int    $oneWay
     *
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0): string
    {
        preg_match_all('/(<\/?(\w*)>)/',$request,$matches);
        $toreplace = array_unique($matches[2]);
        foreach ($toreplace as $node) {
            /** @noinspection CallableParameterUseCaseInTypeContextInspection */
            $request = preg_replace('/<' . $node . '>/', '<ns1:' . $node . '>', $request);
            /** @noinspection CallableParameterUseCaseInTypeContextInspection */
            $request = preg_replace('/<\/' . $node . '>/', '</ns1:' . $node . '>', $request);
        }
        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

}
