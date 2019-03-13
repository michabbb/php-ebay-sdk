<?php

namespace macropage\ebaysdk\shopping\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Gete ServiceType
 * @subpackage Services
 */
class Gete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GeteBayTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest
     * @return \macropage\ebaysdk\shopping\StructType\GeteBayTimeResponseType|bool
     */
    public function GeteBayTime(\macropage\ebaysdk\shopping\StructType\GeteBayTimeRequestType $geteBayTimeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GeteBayTime($geteBayTimeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\shopping\StructType\GeteBayTimeResponseType
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
