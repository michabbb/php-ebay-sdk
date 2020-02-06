<?php

namespace macropage\ebaysdk\base;

class soap_client_finding extends \SoapClient {

    public function __construct($wsdl, array $options = null) {
        $new_options = [];
        foreach ($options as $key => $data) {
            if (strpos($key,'wsdl_',0)!==false) {
                $new_options[substr($key,5)] = $data;
            } else {
                $new_options[$key] = $data;
            }
        }
        parent::__construct($wsdl, $new_options);
    }

    public function __doRequest($request, $location, $action, $version, $one_way = 0) {
        preg_match_all('/(<\/?(\w*)>)/',$request,$matches);
        $toreplace = array_unique($matches[2]);
        foreach ($toreplace as $node) {
            $request = preg_replace('/<'.$node.'>/','<ns1:'.$node.'>',$request);
            $request = preg_replace('/<\/'.$node.'>/','</ns1:'.$node.'>',$request);
        }
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

}
