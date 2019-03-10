<?php

namespace macropage\ebaysdk\finding\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getSearchKeywordsRecommendation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse|bool
     */
    public function getSearchKeywordsRecommendation(\macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSearchKeywordsRecommendation($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsByKeywords
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse|bool
     */
    public function findItemsByKeywords(\macropage\ebaysdk\finding\StructType\FindItemsByKeywordsRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsByKeywords($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsByCategory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByCategoryResponse|bool
     */
    public function findItemsByCategory(\macropage\ebaysdk\finding\StructType\FindItemsByCategoryRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsByCategory($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsAdvanced
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsAdvancedRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsAdvancedResponse|bool
     */
    public function findItemsAdvanced(\macropage\ebaysdk\finding\StructType\FindItemsAdvancedRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsAdvanced($messageParameters));
            d($this->getSoapClient()->__getLastRequest());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsByProduct
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsByProductRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductResponse|bool
     */
    public function findItemsByProduct(\macropage\ebaysdk\finding\StructType\FindItemsByProductRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsByProduct($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsIneBayStores
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresResponse|bool
     */
    public function findItemsIneBayStores(\macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsIneBayStores($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsByImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsByImageRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByImageResponse|bool
     */
    public function findItemsByImage(\macropage\ebaysdk\finding\StructType\FindItemsByImageRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsByImage($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHistograms
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\GetHistogramsRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse|bool
     */
    public function getHistograms(\macropage\ebaysdk\finding\StructType\GetHistogramsRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getHistograms($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findCompletedItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsResponse|bool
     */
    public function findCompletedItems(\macropage\ebaysdk\finding\StructType\FindCompletedItemsRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findCompletedItems($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\GetVersionRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\GetVersionResponse|bool
     */
    public function getVersion(\macropage\ebaysdk\finding\StructType\GetVersionRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getVersion($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findItemsForFavoriteSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest $messageParameters
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse|bool
     */
    public function findItemsForFavoriteSearch(\macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest $messageParameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findItemsForFavoriteSearch($messageParameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\finding\StructType\FindCompletedItemsResponse|\macropage\ebaysdk\finding\StructType\FindItemsAdvancedResponse|\macropage\ebaysdk\finding\StructType\FindItemsByCategoryResponse|\macropage\ebaysdk\finding\StructType\FindItemsByImageResponse|\macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse|\macropage\ebaysdk\finding\StructType\FindItemsByProductResponse|\macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse|\macropage\ebaysdk\finding\StructType\FindItemsIneBayStoresResponse|\macropage\ebaysdk\finding\StructType\GetHistogramsResponse|\macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse|\macropage\ebaysdk\finding\StructType\GetVersionResponse
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
