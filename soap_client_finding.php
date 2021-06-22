<?php
declare(strict_types=1);

namespace macropage\ebaysdk\base;

class soap_client_finding extends \SoapClient {

    public function __construct(string $wsdl, array $options = []) {
        $new_options = [];
        foreach ($options as $key => $data) {
            if (strpos($key, 'wsdl_') !== false) {
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
     * @noinspection CallableParameterUseCaseInTypeContextInspection
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0): string
    {
        $request = str_replace('xmlns:ns1=', 'xmlns=', $request);
        preg_match_all('/(<\/ns1:?(\w*)>)/',$request,$matches);
        $toreplace = array_unique($matches[2]);
        foreach ($toreplace as $node) {
            $request = preg_replace('/<ns1:' . $node . '>/', '<' . $node . '>', $request);
            $request = preg_replace('/<\/ns1:' . $node . '>/', '</' . $node . '>', $request);
        }
        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

}
