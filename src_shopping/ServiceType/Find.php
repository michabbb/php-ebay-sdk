<?php

namespace macropage\ebaysdk\shopping\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FindProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType|bool
     */
    public function FindProducts(\macropage\ebaysdk\shopping\StructType\FindProductsRequestType $findProductsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->FindProducts($findProductsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
