<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ServiceType;

use macropage\ebaysdk\trading\SoapClientBase;
use SoapFault;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends SoapClientBase
{
    /**
     * Sets the RequesterCredentials SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType $requesterCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \macropage\ebaysdk\trading\ServiceType\Service
     */
    public function setSoapHeaderRequesterCredentials(\macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType $requesterCredentials, string $namespace = 'urn:ebay:apis:eBLBaseComponents', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequesterCredentials', $requesterCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named AddDispute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddDisputeRequestType $addDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseType|bool
     */
    public function AddDispute(\macropage\ebaysdk\trading\StructType\AddDisputeRequestType $addDisputeRequest)
    {
        try {
            $this->setResult($resultAddDispute = $this->getSoapClient()->__soapCall('AddDispute', [
                $addDisputeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDispute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDisputeResponse
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseResponseType|bool
     */
    public function AddDisputeResponse(\macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest)
    {
        try {
            $this->setResult($resultAddDisputeResponse = $this->getSoapClient()->__soapCall('AddDisputeResponse', [
                $addDisputeResponseRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDisputeResponse;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddFixedPriceItemResponseType|bool
     */
    public function AddFixedPriceItem(\macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
    {
        try {
            $this->setResult($resultAddFixedPriceItem = $this->getSoapClient()->__soapCall('AddFixedPriceItem', [
                $addFixedPriceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddFixedPriceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseType|bool
     */
    public function AddItem(\macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest)
    {
        try {
            $this->setResult($resultAddItem = $this->getSoapClient()->__soapCall('AddItem', [
                $addItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\AddItemsResponseType|bool
     */
    public function AddItems(\macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest)
    {
        try {
            $this->setResult($resultAddItems = $this->getSoapClient()->__soapCall('AddItems', [
                $addItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageAAQToPartner
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerResponseType|bool
     */
    public function AddMemberMessageAAQToPartner(\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest)
    {
        try {
            $this->setResult($resultAddMemberMessageAAQToPartner = $this->getSoapClient()->__soapCall('AddMemberMessageAAQToPartner', [
                $addMemberMessageAAQToPartnerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddMemberMessageAAQToPartner;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageRTQ
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQResponseType|bool
     */
    public function AddMemberMessageRTQ(\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest)
    {
        try {
            $this->setResult($resultAddMemberMessageRTQ = $this->getSoapClient()->__soapCall('AddMemberMessageRTQ', [
                $addMemberMessageRTQRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddMemberMessageRTQ;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessagesAAQToBidder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType|bool
     */
    public function AddMemberMessagesAAQToBidder(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest)
    {
        try {
            $this->setResult($resultAddMemberMessagesAAQToBidder = $this->getSoapClient()->__soapCall('AddMemberMessagesAAQToBidder', [
                $addMemberMessagesAAQToBidderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddMemberMessagesAAQToBidder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest
     * @return \macropage\ebaysdk\trading\StructType\AddOrderResponseType|bool
     */
    public function AddOrder(\macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest)
    {
        try {
            $this->setResult($resultAddOrder = $this->getSoapClient()->__soapCall('AddOrder', [
                $addOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSecondChanceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemResponseType|bool
     */
    public function AddSecondChanceItem(\macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest)
    {
        try {
            $this->setResult($resultAddSecondChanceItem = $this->getSoapClient()->__soapCall('AddSecondChanceItem', [
                $addSecondChanceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSecondChanceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToItemDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionResponseType|bool
     */
    public function AddToItemDescription(\macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest)
    {
        try {
            $this->setResult($resultAddToItemDescription = $this->getSoapClient()->__soapCall('AddToItemDescription', [
                $addToItemDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddToItemDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToWatchList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListResponseType|bool
     */
    public function AddToWatchList(\macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest)
    {
        try {
            $this->setResult($resultAddToWatchList = $this->getSoapClient()->__soapCall('AddToWatchList', [
                $addToWatchListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddToWatchList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddTransactionConfirmationItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType|bool
     */
    public function AddTransactionConfirmationItem(\macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest)
    {
        try {
            $this->setResult($resultAddTransactionConfirmationItem = $this->getSoapClient()->__soapCall('AddTransactionConfirmationItem', [
                $addTransactionConfirmationItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddTransactionConfirmationItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CompleteSale
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleResponseType|bool
     */
    public function CompleteSale(\macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest)
    {
        try {
            $this->setResult($resultCompleteSale = $this->getSoapClient()->__soapCall('CompleteSale', [
                $completeSaleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCompleteSale;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConfirmIdentity
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType|bool
     */
    public function ConfirmIdentity(\macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest)
    {
        try {
            $this->setResult($resultConfirmIdentity = $this->getSoapClient()->__soapCall('ConfirmIdentity', [
                $confirmIdentityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmIdentity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesResponseType|bool
     */
    public function DeleteMyMessages(\macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest)
    {
        try {
            $this->setResult($resultDeleteMyMessages = $this->getSoapClient()->__soapCall('DeleteMyMessages', [
                $deleteMyMessagesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMyMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DisableUnpaidItemAssistance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceResponseType|bool
     */
    public function DisableUnpaidItemAssistance(\macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest)
    {
        try {
            $this->setResult($resultDisableUnpaidItemAssistance = $this->getSoapClient()->__soapCall('DisableUnpaidItemAssistance', [
                $disableUnpaidItemAssistanceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDisableUnpaidItemAssistance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType|bool
     */
    public function EndFixedPriceItem(\macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
    {
        try {
            $this->setResult($resultEndFixedPriceItem = $this->getSoapClient()->__soapCall('EndFixedPriceItem', [
                $endFixedPriceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEndFixedPriceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseType|bool
     */
    public function EndItem(\macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest)
    {
        try {
            $this->setResult($resultEndItem = $this->getSoapClient()->__soapCall('EndItem', [
                $endItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEndItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType|bool
     */
    public function EndItems(\macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest)
    {
        try {
            $this->setResult($resultEndItems = $this->getSoapClient()->__soapCall('EndItems', [
                $endItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEndItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExtendSiteHostedPictures
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType|bool
     */
    public function ExtendSiteHostedPictures(\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest)
    {
        try {
            $this->setResult($resultExtendSiteHostedPictures = $this->getSoapClient()->__soapCall('ExtendSiteHostedPictures', [
                $extendSiteHostedPicturesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExtendSiteHostedPictures;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named FetchToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType|bool
     */
    public function FetchToken(\macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest)
    {
        try {
            $this->setResult($resultFetchToken = $this->getSoapClient()->__soapCall('FetchToken', [
                $fetchTokenRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFetchToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType|bool
     */
    public function GetAccount(\macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest)
    {
        try {
            $this->setResult($resultGetAccount = $this->getSoapClient()->__soapCall('GetAccount', [
                $getAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdFormatLeads
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType|bool
     */
    public function GetAdFormatLeads(\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest)
    {
        try {
            $this->setResult($resultGetAdFormatLeads = $this->getSoapClient()->__soapCall('GetAdFormatLeads', [
                $getAdFormatLeadsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdFormatLeads;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllBidders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersResponseType|bool
     */
    public function GetAllBidders(\macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest)
    {
        try {
            $this->setResult($resultGetAllBidders = $this->getSoapClient()->__soapCall('GetAllBidders', [
                $getAllBiddersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllBidders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetApiAccessRules
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetApiAccessRulesRequestType $getApiAccessRulesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType|bool
     */
    public function GetApiAccessRules(\macropage\ebaysdk\trading\StructType\GetApiAccessRulesRequestType $getApiAccessRulesRequest)
    {
        try {
            $this->setResult($resultGetApiAccessRules = $this->getSoapClient()->__soapCall('GetApiAccessRules', [
                $getApiAccessRulesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApiAccessRules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBestOffers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType|bool
     */
    public function GetBestOffers(\macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest)
    {
        try {
            $this->setResult($resultGetBestOffers = $this->getSoapClient()->__soapCall('GetBestOffers', [
                $getBestOffersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBestOffers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBidderList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType|bool
     */
    public function GetBidderList(\macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest)
    {
        try {
            $this->setResult($resultGetBidderList = $this->getSoapClient()->__soapCall('GetBidderList', [
                $getBidderListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBidderList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType|bool
     */
    public function GetCategories(\macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest)
    {
        try {
            $this->setResult($resultGetCategories = $this->getSoapClient()->__soapCall('GetCategories', [
                $getCategoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCategories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryFeatures
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType|bool
     */
    public function GetCategoryFeatures(\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest)
    {
        try {
            $this->setResult($resultGetCategoryFeatures = $this->getSoapClient()->__soapCall('GetCategoryFeatures', [
                $getCategoryFeaturesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCategoryFeatures;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryMappings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType|bool
     */
    public function GetCategoryMappings(\macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest)
    {
        try {
            $this->setResult($resultGetCategoryMappings = $this->getSoapClient()->__soapCall('GetCategoryMappings', [
                $getCategoryMappingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCategoryMappings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategorySpecifics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType $getCategorySpecificsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType|bool
     */
    public function GetCategorySpecifics(\macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType $getCategorySpecificsRequest)
    {
        try {
            $this->setResult($resultGetCategorySpecifics = $this->getSoapClient()->__soapCall('GetCategorySpecifics', [
                $getCategorySpecificsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCategorySpecifics;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChallengeToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType|bool
     */
    public function GetChallengeToken(\macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest)
    {
        try {
            $this->setResult($resultGetChallengeToken = $this->getSoapClient()->__soapCall('GetChallengeToken', [
                $getChallengeTokenRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChallengeToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCharities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType $getCharitiesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType|bool
     */
    public function GetCharities(\macropage\ebaysdk\trading\StructType\GetCharitiesRequestType $getCharitiesRequest)
    {
        try {
            $this->setResult($resultGetCharities = $this->getSoapClient()->__soapCall('GetCharities', [
                $getCharitiesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCharities;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientAlertsAuthToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType|bool
     */
    public function GetClientAlertsAuthToken(\macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest)
    {
        try {
            $this->setResult($resultGetClientAlertsAuthToken = $this->getSoapClient()->__soapCall('GetClientAlertsAuthToken', [
                $getClientAlertsAuthTokenRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetClientAlertsAuthToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContextualKeywords
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType $getContextualKeywordsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType|bool
     */
    public function GetContextualKeywords(\macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType $getContextualKeywordsRequest)
    {
        try {
            $this->setResult($resultGetContextualKeywords = $this->getSoapClient()->__soapCall('GetContextualKeywords', [
                $getContextualKeywordsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContextualKeywords;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDescriptionTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType|bool
     */
    public function GetDescriptionTemplates(\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest)
    {
        try {
            $this->setResult($resultGetDescriptionTemplates = $this->getSoapClient()->__soapCall('GetDescriptionTemplates', [
                $getDescriptionTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDescriptionTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDispute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetDisputeRequestType $getDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeResponseType|bool
     */
    public function GetDispute(\macropage\ebaysdk\trading\StructType\GetDisputeRequestType $getDisputeRequest)
    {
        try {
            $this->setResult($resultGetDispute = $this->getSoapClient()->__soapCall('GetDispute', [
                $getDisputeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDispute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType|bool
     */
    public function GetFeedback(\macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest)
    {
        try {
            $this->setResult($resultGetFeedback = $this->getSoapClient()->__soapCall('GetFeedback', [
                $getFeedbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeedback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemResponseType|bool
     */
    public function GetItem(\macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest)
    {
        try {
            $this->setResult($resultGetItem = $this->getSoapClient()->__soapCall('GetItem', [
                $getItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingResponseType|bool
     */
    public function GetItemShipping(\macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest)
    {
        try {
            $this->setResult($resultGetItemShipping = $this->getSoapClient()->__soapCall('GetItemShipping', [
                $getItemShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItemShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType|bool
     */
    public function GetItemTransactions(\macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest)
    {
        try {
            $this->setResult($resultGetItemTransactions = $this->getSoapClient()->__soapCall('GetItemTransactions', [
                $getItemTransactionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItemTransactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemsAwaitingFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType|bool
     */
    public function GetItemsAwaitingFeedback(\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest)
    {
        try {
            $this->setResult($resultGetItemsAwaitingFeedback = $this->getSoapClient()->__soapCall('GetItemsAwaitingFeedback', [
                $getItemsAwaitingFeedbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetItemsAwaitingFeedback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMemberMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType|bool
     */
    public function GetMemberMessages(\macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest)
    {
        try {
            $this->setResult($resultGetMemberMessages = $this->getSoapClient()->__soapCall('GetMemberMessages', [
                $getMemberMessagesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMemberMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessagePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesResponseType|bool
     */
    public function GetMessagePreferences(\macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest)
    {
        try {
            $this->setResult($resultGetMessagePreferences = $this->getSoapClient()->__soapCall('GetMessagePreferences', [
                $getMessagePreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMessagePreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType|bool
     */
    public function GetMyMessages(\macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest)
    {
        try {
            $this->setResult($resultGetMyMessages = $this->getSoapClient()->__soapCall('GetMyMessages', [
                $getMyMessagesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayBuying
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType|bool
     */
    public function GetMyeBayBuying(\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest)
    {
        try {
            $this->setResult($resultGetMyeBayBuying = $this->getSoapClient()->__soapCall('GetMyeBayBuying', [
                $getMyeBayBuyingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyeBayBuying;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayReminders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType|bool
     */
    public function GetMyeBayReminders(\macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest)
    {
        try {
            $this->setResult($resultGetMyeBayReminders = $this->getSoapClient()->__soapCall('GetMyeBayReminders', [
                $getMyeBayRemindersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyeBayReminders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBaySelling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType|bool
     */
    public function GetMyeBaySelling(\macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest)
    {
        try {
            $this->setResult($resultGetMyeBaySelling = $this->getSoapClient()->__soapCall('GetMyeBaySelling', [
                $getMyeBaySellingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyeBaySelling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType|bool
     */
    public function GetNotificationPreferences(\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest)
    {
        try {
            $this->setResult($resultGetNotificationPreferences = $this->getSoapClient()->__soapCall('GetNotificationPreferences', [
                $getNotificationPreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNotificationPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationsUsage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType|bool
     */
    public function GetNotificationsUsage(\macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest)
    {
        try {
            $this->setResult($resultGetNotificationsUsage = $this->getSoapClient()->__soapCall('GetNotificationsUsage', [
                $getNotificationsUsageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNotificationsUsage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType|bool
     */
    public function GetOrderTransactions(\macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest)
    {
        try {
            $this->setResult($resultGetOrderTransactions = $this->getSoapClient()->__soapCall('GetOrderTransactions', [
                $getOrderTransactionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderTransactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType|bool
     */
    public function GetOrders(\macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest)
    {
        try {
            $this->setResult($resultGetOrders = $this->getSoapClient()->__soapCall('GetOrders', [
                $getOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerDashboard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerDashboardResponseType|bool
     */
    public function GetSellerDashboard(\macropage\ebaysdk\trading\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest)
    {
        try {
            $this->setResult($resultGetSellerDashboard = $this->getSoapClient()->__soapCall('GetSellerDashboard', [
                $getSellerDashboardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerDashboard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType|bool
     */
    public function GetSellerEvents(\macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest)
    {
        try {
            $this->setResult($resultGetSellerEvents = $this->getSoapClient()->__soapCall('GetSellerEvents', [
                $getSellerEventsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerEvents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType|bool
     */
    public function GetSellerList(\macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest)
    {
        try {
            $this->setResult($resultGetSellerList = $this->getSoapClient()->__soapCall('GetSellerList', [
                $getSellerListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType|bool
     */
    public function GetSellerTransactions(\macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest)
    {
        try {
            $this->setResult($resultGetSellerTransactions = $this->getSoapClient()->__soapCall('GetSellerTransactions', [
                $getSellerTransactionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellerTransactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSessionID
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDResponseType|bool
     */
    public function GetSessionID(\macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest)
    {
        try {
            $this->setResult($resultGetSessionID = $this->getSoapClient()->__soapCall('GetSessionID', [
                $getSessionIDRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShippingDiscountProfiles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType|bool
     */
    public function GetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($resultGetShippingDiscountProfiles = $this->getSoapClient()->__soapCall('GetShippingDiscountProfiles', [
                $getShippingDiscountProfilesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShippingDiscountProfiles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStore
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreResponseType|bool
     */
    public function GetStore(\macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest)
    {
        try {
            $this->setResult($resultGetStore = $this->getSoapClient()->__soapCall('GetStore', [
                $getStoreRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStore;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreCategoryUpdateStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType|bool
     */
    public function GetStoreCategoryUpdateStatus(\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest)
    {
        try {
            $this->setResult($resultGetStoreCategoryUpdateStatus = $this->getSoapClient()->__soapCall('GetStoreCategoryUpdateStatus', [
                $getStoreCategoryUpdateStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStoreCategoryUpdateStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreCustomPage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreCustomPageRequestType $getStoreCustomPageRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType|bool
     */
    public function GetStoreCustomPage(\macropage\ebaysdk\trading\StructType\GetStoreCustomPageRequestType $getStoreCustomPageRequest)
    {
        try {
            $this->setResult($resultGetStoreCustomPage = $this->getSoapClient()->__soapCall('GetStoreCustomPage', [
                $getStoreCustomPageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStoreCustomPage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreOptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreOptionsRequestType $getStoreOptionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType|bool
     */
    public function GetStoreOptions(\macropage\ebaysdk\trading\StructType\GetStoreOptionsRequestType $getStoreOptionsRequest)
    {
        try {
            $this->setResult($resultGetStoreOptions = $this->getSoapClient()->__soapCall('GetStoreOptions', [
                $getStoreOptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStoreOptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStorePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType $getStorePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType|bool
     */
    public function GetStorePreferences(\macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType $getStorePreferencesRequest)
    {
        try {
            $this->setResult($resultGetStorePreferences = $this->getSoapClient()->__soapCall('GetStorePreferences', [
                $getStorePreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetStorePreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSuggestedCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType|bool
     */
    public function GetSuggestedCategories(\macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest)
    {
        try {
            $this->setResult($resultGetSuggestedCategories = $this->getSoapClient()->__soapCall('GetSuggestedCategories', [
                $getSuggestedCategoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSuggestedCategories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaxTable
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableResponseType|bool
     */
    public function GetTaxTable(\macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest)
    {
        try {
            $this->setResult($resultGetTaxTable = $this->getSoapClient()->__soapCall('GetTaxTable', [
                $getTaxTableRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaxTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTokenStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetTokenStatusResponseType|bool
     */
    public function GetTokenStatus(\macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest)
    {
        try {
            $this->setResult($resultGetTokenStatus = $this->getSoapClient()->__soapCall('GetTokenStatus', [
                $getTokenStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTokenStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserResponseType|bool
     */
    public function GetUser(\macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest)
    {
        try {
            $this->setResult($resultGetUser = $this->getSoapClient()->__soapCall('GetUser', [
                $getUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserContactDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType|bool
     */
    public function GetUserContactDetails(\macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest)
    {
        try {
            $this->setResult($resultGetUserContactDetails = $this->getSoapClient()->__soapCall('GetUserContactDetails', [
                $getUserContactDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserContactDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserDisputes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType $getUserDisputesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType|bool
     */
    public function GetUserDisputes(\macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType $getUserDisputesRequest)
    {
        try {
            $this->setResult($resultGetUserDisputes = $this->getSoapClient()->__soapCall('GetUserDisputes', [
                $getUserDisputesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserDisputes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType|bool
     */
    public function GetUserPreferences(\macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest)
    {
        try {
            $this->setResult($resultGetUserPreferences = $this->getSoapClient()->__soapCall('GetUserPreferences', [
                $getUserPreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReasonCodeDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType|bool
     */
    public function GetVeROReasonCodeDetails(\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest)
    {
        try {
            $this->setResult($resultGetVeROReasonCodeDetails = $this->getSoapClient()->__soapCall('GetVeROReasonCodeDetails', [
                $getVeROReasonCodeDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVeROReasonCodeDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReportStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType|bool
     */
    public function GetVeROReportStatus(\macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest)
    {
        try {
            $this->setResult($resultGetVeROReportStatus = $this->getSoapClient()->__soapCall('GetVeROReportStatus', [
                $getVeROReportStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVeROReportStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeteBayDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType|bool
     */
    public function GeteBayDetails(\macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest)
    {
        try {
            $this->setResult($resultGeteBayDetails = $this->getSoapClient()->__soapCall('GeteBayDetails', [
                $geteBayDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGeteBayDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeteBayOfficialTime
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest
     * @return \macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeResponseType|bool
     */
    public function GeteBayOfficialTime(\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest)
    {
        try {
            $this->setResult($resultGeteBayOfficialTime = $this->getSoapClient()->__soapCall('GeteBayOfficialTime', [
                $geteBayOfficialTimeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGeteBayOfficialTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named LeaveFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType|bool
     */
    public function LeaveFeedback(\macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest)
    {
        try {
            $this->setResult($resultLeaveFeedback = $this->getSoapClient()->__soapCall('LeaveFeedback', [
                $leaveFeedbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultLeaveFeedback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PlaceOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType|bool
     */
    public function PlaceOffer(\macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest)
    {
        try {
            $this->setResult($resultPlaceOffer = $this->getSoapClient()->__soapCall('PlaceOffer', [
                $placeOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPlaceOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RelistFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\RelistFixedPriceItemResponseType|bool
     */
    public function RelistFixedPriceItem(\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
    {
        try {
            $this->setResult($resultRelistFixedPriceItem = $this->getSoapClient()->__soapCall('RelistFixedPriceItem', [
                $relistFixedPriceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRelistFixedPriceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RelistItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType|bool
     */
    public function RelistItem(\macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest)
    {
        try {
            $this->setResult($resultRelistItem = $this->getSoapClient()->__soapCall('RelistItem', [
                $relistItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRelistItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveFromWatchList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType|bool
     */
    public function RemoveFromWatchList(\macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest)
    {
        try {
            $this->setResult($resultRemoveFromWatchList = $this->getSoapClient()->__soapCall('RemoveFromWatchList', [
                $removeFromWatchListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveFromWatchList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RespondToBestOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType|bool
     */
    public function RespondToBestOffer(\macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest)
    {
        try {
            $this->setResult($resultRespondToBestOffer = $this->getSoapClient()->__soapCall('RespondToBestOffer', [
                $respondToBestOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRespondToBestOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RespondToFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackResponseType|bool
     */
    public function RespondToFeedback(\macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest)
    {
        try {
            $this->setResult($resultRespondToFeedback = $this->getSoapClient()->__soapCall('RespondToFeedback', [
                $respondToFeedbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRespondToFeedback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemResponseType|bool
     */
    public function ReviseFixedPriceItem(\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
    {
        try {
            $this->setResult($resultReviseFixedPriceItem = $this->getSoapClient()->__soapCall('ReviseFixedPriceItem', [
                $reviseFixedPriceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReviseFixedPriceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseInventoryStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType|bool
     */
    public function ReviseInventoryStatus(\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
    {
        try {
            $this->setResult($resultReviseInventoryStatus = $this->getSoapClient()->__soapCall('ReviseInventoryStatus', [
                $reviseInventoryStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReviseInventoryStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType|bool
     */
    public function ReviseItem(\macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest)
    {
        try {
            $this->setResult($resultReviseItem = $this->getSoapClient()->__soapCall('ReviseItem', [
                $reviseItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReviseItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesResponseType|bool
     */
    public function ReviseMyMessages(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest)
    {
        try {
            $this->setResult($resultReviseMyMessages = $this->getSoapClient()->__soapCall('ReviseMyMessages', [
                $reviseMyMessagesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReviseMyMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessagesFolders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersResponseType|bool
     */
    public function ReviseMyMessagesFolders(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest)
    {
        try {
            $this->setResult($resultReviseMyMessagesFolders = $this->getSoapClient()->__soapCall('ReviseMyMessagesFolders', [
                $reviseMyMessagesFoldersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReviseMyMessagesFolders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RevokeToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\RevokeTokenResponseType|bool
     */
    public function RevokeToken(\macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest)
    {
        try {
            $this->setResult($resultRevokeToken = $this->getSoapClient()->__soapCall('RevokeToken', [
                $revokeTokenRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRevokeToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SellerReverseDispute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeResponseType|bool
     */
    public function SellerReverseDispute(\macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest)
    {
        try {
            $this->setResult($resultSellerReverseDispute = $this->getSoapClient()->__soapCall('SellerReverseDispute', [
                $sellerReverseDisputeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSellerReverseDispute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceResponseType|bool
     */
    public function SendInvoice(\macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest)
    {
        try {
            $this->setResult($resultSendInvoice = $this->getSoapClient()->__soapCall('SendInvoice', [
                $sendInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSendInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetMessagePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetMessagePreferencesResponseType|bool
     */
    public function SetMessagePreferences(\macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest)
    {
        try {
            $this->setResult($resultSetMessagePreferences = $this->getSoapClient()->__soapCall('SetMessagePreferences', [
                $setMessagePreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetMessagePreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetNotificationPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesResponseType|bool
     */
    public function SetNotificationPreferences(\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest)
    {
        try {
            $this->setResult($resultSetNotificationPreferences = $this->getSoapClient()->__soapCall('SetNotificationPreferences', [
                $setNotificationPreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetNotificationPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetShippingDiscountProfiles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesResponseType|bool
     */
    public function SetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($resultSetShippingDiscountProfiles = $this->getSoapClient()->__soapCall('SetShippingDiscountProfiles', [
                $setShippingDiscountProfilesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetShippingDiscountProfiles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStore
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreRequestType $setStoreRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreResponseType|bool
     */
    public function SetStore(\macropage\ebaysdk\trading\StructType\SetStoreRequestType $setStoreRequest)
    {
        try {
            $this->setResult($resultSetStore = $this->getSoapClient()->__soapCall('SetStore', [
                $setStoreRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStore;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStoreCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType|bool
     */
    public function SetStoreCategories(\macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest)
    {
        try {
            $this->setResult($resultSetStoreCategories = $this->getSoapClient()->__soapCall('SetStoreCategories', [
                $setStoreCategoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStoreCategories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStoreCustomPage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType $setStoreCustomPageRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType|bool
     */
    public function SetStoreCustomPage(\macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType $setStoreCustomPageRequest)
    {
        try {
            $this->setResult($resultSetStoreCustomPage = $this->getSoapClient()->__soapCall('SetStoreCustomPage', [
                $setStoreCustomPageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStoreCustomPage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStorePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType $setStorePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStorePreferencesResponseType|bool
     */
    public function SetStorePreferences(\macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType $setStorePreferencesRequest)
    {
        try {
            $this->setResult($resultSetStorePreferences = $this->getSoapClient()->__soapCall('SetStorePreferences', [
                $setStorePreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStorePreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTaxTable
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetTaxTableRequestType $setTaxTableRequest
     * @return \macropage\ebaysdk\trading\StructType\SetTaxTableResponseType|bool
     */
    public function SetTaxTable(\macropage\ebaysdk\trading\StructType\SetTaxTableRequestType $setTaxTableRequest)
    {
        try {
            $this->setResult($resultSetTaxTable = $this->getSoapClient()->__soapCall('SetTaxTable', [
                $setTaxTableRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetTaxTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserNotes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType $setUserNotesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesResponseType|bool
     */
    public function SetUserNotes(\macropage\ebaysdk\trading\StructType\SetUserNotesRequestType $setUserNotesRequest)
    {
        try {
            $this->setResult($resultSetUserNotes = $this->getSoapClient()->__soapCall('SetUserNotes', [
                $setUserNotesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUserNotes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesResponseType|bool
     */
    public function SetUserPreferences(\macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest)
    {
        try {
            $this->setResult($resultSetUserPreferences = $this->getSoapClient()->__soapCall('SetUserPreferences', [
                $setUserPreferencesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetUserPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadSiteHostedPictures
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType|bool
     */
    public function UploadSiteHostedPictures(\macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest)
    {
        try {
            $this->setResult($resultUploadSiteHostedPictures = $this->getSoapClient()->__soapCall('UploadSiteHostedPictures', [
                $uploadSiteHostedPicturesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadSiteHostedPictures;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateChallengeInput
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType|bool
     */
    public function ValidateChallengeInput(\macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest)
    {
        try {
            $this->setResult($resultValidateChallengeInput = $this->getSoapClient()->__soapCall('ValidateChallengeInput', [
                $validateChallengeInputRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateChallengeInput;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateTestUserRegistration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationResponseType|bool
     */
    public function ValidateTestUserRegistration(\macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest)
    {
        try {
            $this->setResult($resultValidateTestUserRegistration = $this->getSoapClient()->__soapCall('ValidateTestUserRegistration', [
                $validateTestUserRegistrationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateTestUserRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named VeROReportItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType $veROReportItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType|bool
     */
    public function VeROReportItems(\macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType $veROReportItemsRequest)
    {
        try {
            $this->setResult($resultVeROReportItems = $this->getSoapClient()->__soapCall('VeROReportItems', [
                $veROReportItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVeROReportItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType|bool
     */
    public function VerifyAddFixedPriceItem(\macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
    {
        try {
            $this->setResult($resultVerifyAddFixedPriceItem = $this->getSoapClient()->__soapCall('VerifyAddFixedPriceItem', [
                $verifyAddFixedPriceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyAddFixedPriceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType $verifyAddItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType|bool
     */
    public function VerifyAddItem(\macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType $verifyAddItemRequest)
    {
        try {
            $this->setResult($resultVerifyAddItem = $this->getSoapClient()->__soapCall('VerifyAddItem', [
                $verifyAddItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyAddItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddSecondChanceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType|bool
     */
    public function VerifyAddSecondChanceItem(\macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest)
    {
        try {
            $this->setResult($resultVerifyAddSecondChanceItem = $this->getSoapClient()->__soapCall('VerifyAddSecondChanceItem', [
                $verifyAddSecondChanceItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyAddSecondChanceItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyRelistItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType|bool
     */
    public function VerifyRelistItem(\macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest)
    {
        try {
            $this->setResult($resultVerifyRelistItem = $this->getSoapClient()->__soapCall('VerifyRelistItem', [
                $verifyRelistItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyRelistItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseResponseType|\macropage\ebaysdk\trading\StructType\AddDisputeResponseType|\macropage\ebaysdk\trading\StructType\AddFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\AddItemResponseType|\macropage\ebaysdk\trading\StructType\AddItemsResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType|\macropage\ebaysdk\trading\StructType\AddOrderResponseType|\macropage\ebaysdk\trading\StructType\AddSecondChanceItemResponseType|\macropage\ebaysdk\trading\StructType\AddToItemDescriptionResponseType|\macropage\ebaysdk\trading\StructType\AddToWatchListResponseType|\macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType|\macropage\ebaysdk\trading\StructType\CompleteSaleResponseType|\macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType|\macropage\ebaysdk\trading\StructType\DeleteMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceResponseType|\macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\EndItemResponseType|\macropage\ebaysdk\trading\StructType\EndItemsResponseType|\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType|\macropage\ebaysdk\trading\StructType\FetchTokenResponseType|\macropage\ebaysdk\trading\StructType\GetAccountResponseType|\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType|\macropage\ebaysdk\trading\StructType\GetAllBiddersResponseType|\macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType|\macropage\ebaysdk\trading\StructType\GetBestOffersResponseType|\macropage\ebaysdk\trading\StructType\GetBidderListResponseType|\macropage\ebaysdk\trading\StructType\GetCategoriesResponseType|\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType|\macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType|\macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType|\macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType|\macropage\ebaysdk\trading\StructType\GetCharitiesResponseType|\macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType|\macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType|\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType|\macropage\ebaysdk\trading\StructType\GetDisputeResponseType|\macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType|\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeResponseType|\macropage\ebaysdk\trading\StructType\GetFeedbackResponseType|\macropage\ebaysdk\trading\StructType\GetItemResponseType|\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType|\macropage\ebaysdk\trading\StructType\GetItemShippingResponseType|\macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType|\macropage\ebaysdk\trading\StructType\GetMessagePreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType|\macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType|\macropage\ebaysdk\trading\StructType\GetOrdersResponseType|\macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetSellerDashboardResponseType|\macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType|\macropage\ebaysdk\trading\StructType\GetSellerListResponseType|\macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetSessionIDResponseType|\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType|\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType|\macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType|\macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType|\macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetStoreResponseType|\macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType|\macropage\ebaysdk\trading\StructType\GetTaxTableResponseType|\macropage\ebaysdk\trading\StructType\GetTokenStatusResponseType|\macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType|\macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType|\macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetUserResponseType|\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType|\macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType|\macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType|\macropage\ebaysdk\trading\StructType\PlaceOfferResponseType|\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\RelistItemResponseType|\macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType|\macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType|\macropage\ebaysdk\trading\StructType\RespondToFeedbackResponseType|\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType|\macropage\ebaysdk\trading\StructType\ReviseItemResponseType|\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersResponseType|\macropage\ebaysdk\trading\StructType\ReviseMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\RevokeTokenResponseType|\macropage\ebaysdk\trading\StructType\SellerReverseDisputeResponseType|\macropage\ebaysdk\trading\StructType\SendInvoiceResponseType|\macropage\ebaysdk\trading\StructType\SetMessagePreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType|\macropage\ebaysdk\trading\StructType\SetStorePreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreResponseType|\macropage\ebaysdk\trading\StructType\SetTaxTableResponseType|\macropage\ebaysdk\trading\StructType\SetUserNotesResponseType|\macropage\ebaysdk\trading\StructType\SetUserPreferencesResponseType|\macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType|\macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType|\macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType|\macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
