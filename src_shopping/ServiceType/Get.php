<?php

namespace macropage\ebaysdk\shopping\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetCategoryInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType|bool
     */
    public function GetCategoryInfo(\macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType $getCategoryInfoRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategoryInfo($getCategoryInfoRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType|bool
     */
    public function GetItemStatus(\macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType $getItemStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemStatus($getItemStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMultipleItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType|bool
     */
    public function GetMultipleItems(\macropage\ebaysdk\shopping\StructType\GetMultipleItemsRequestType $getMultipleItemsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMultipleItems($getMultipleItemsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShippingCosts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType|bool
     */
    public function GetShippingCosts(\macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType $getShippingCostsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShippingCosts($getShippingCostsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSingleItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType|bool
     */
    public function GetSingleItem(\macropage\ebaysdk\shopping\StructType\GetSingleItemRequestType $getSingleItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSingleItem($getSingleItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType|bool
     */
    public function GetUserProfile(\macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType $getUserProfileRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserProfile($getUserProfileRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType|\macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType|\macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType|\macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType|\macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType|\macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
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
