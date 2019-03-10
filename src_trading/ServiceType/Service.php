<?php

namespace macropage\ebaysdk\trading\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Sets the RequesterCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType $requesterCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequesterCredentials(\macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType $requesterCredentials, $nameSpace = 'urn:ebay:apis:eBLBaseComponents', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequesterCredentials', $requesterCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named AddDispute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddDisputeRequestType $addDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseType|bool
     */
    public function AddDispute(\macropage\ebaysdk\trading\StructType\AddDisputeRequestType $addDisputeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddDispute($addDisputeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDisputeResponse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseResponseType|bool
     */
    public function AddDisputeResponse(\macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddDisputeResponse($addDisputeResponseRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFixedPriceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddFixedPriceItemResponseType|bool
     */
    public function AddFixedPriceItem(\macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddFixedPriceItem($addFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseType|bool
     */
    public function AddItem(\macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddItem($addItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItemFromSellingManagerTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType $addItemFromSellingManagerTemplateRequest
     * @return \macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateResponseType|bool
     */
    public function AddItemFromSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType $addItemFromSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddItemFromSellingManagerTemplate($addItemFromSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\AddItemsResponseType|bool
     */
    public function AddItems(\macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddItems($addItemsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageAAQToPartner
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerResponseType|bool
     */
    public function AddMemberMessageAAQToPartner(\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessageAAQToPartner($addMemberMessageAAQToPartnerRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageRTQ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQResponseType|bool
     */
    public function AddMemberMessageRTQ(\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessageRTQ($addMemberMessageRTQRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessagesAAQToBidder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType|bool
     */
    public function AddMemberMessagesAAQToBidder(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessagesAAQToBidder($addMemberMessagesAAQToBidderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddOrder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest
     * @return \macropage\ebaysdk\trading\StructType\AddOrderResponseType|bool
     */
    public function AddOrder(\macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddOrder($addOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSecondChanceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemResponseType|bool
     */
    public function AddSecondChanceItem(\macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddSecondChanceItem($addSecondChanceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSellingManagerInventoryFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType $addSellingManagerInventoryFolderRequest
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderResponseType|bool
     */
    public function AddSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType $addSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddSellingManagerInventoryFolder($addSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSellingManagerProduct
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType $addSellingManagerProductRequest
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductResponseType|bool
     */
    public function AddSellingManagerProduct(\macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType $addSellingManagerProductRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddSellingManagerProduct($addSellingManagerProductRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSellingManagerTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType $addSellingManagerTemplateRequest
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType|bool
     */
    public function AddSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType $addSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddSellingManagerTemplate($addSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToItemDescription
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionResponseType|bool
     */
    public function AddToItemDescription(\macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddToItemDescription($addToItemDescriptionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToWatchList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListResponseType|bool
     */
    public function AddToWatchList(\macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddToWatchList($addToWatchListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddTransactionConfirmationItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType|bool
     */
    public function AddTransactionConfirmationItem(\macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddTransactionConfirmationItem($addTransactionConfirmationItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CompleteSale
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleResponseType|bool
     */
    public function CompleteSale(\macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->CompleteSale($completeSaleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConfirmIdentity
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType|bool
     */
    public function ConfirmIdentity(\macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ConfirmIdentity($confirmIdentityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteMyMessages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesResponseType|bool
     */
    public function DeleteMyMessages(\macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteMyMessages($deleteMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerInventoryFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderRequestType $deleteSellingManagerInventoryFolderRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderResponseType|bool
     */
    public function DeleteSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderRequestType $deleteSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerInventoryFolder($deleteSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerItemAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType $deleteSellingManagerItemAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleResponseType|bool
     */
    public function DeleteSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType $deleteSellingManagerItemAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerItemAutomationRule($deleteSellingManagerItemAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteSellingManagerProduct
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductRequestType $deleteSellingManagerProductRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductResponseType|bool
     */
    public function DeleteSellingManagerProduct(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductRequestType $deleteSellingManagerProductRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerProduct($deleteSellingManagerProductRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteSellingManagerTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateRequestType $deleteSellingManagerTemplateRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType|bool
     */
    public function DeleteSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateRequestType $deleteSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerTemplate($deleteSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * DeleteSellingManagerTemplateAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType $deleteSellingManagerTemplateAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleResponseType|bool
     */
    public function DeleteSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType $deleteSellingManagerTemplateAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteSellingManagerTemplateAutomationRule($deleteSellingManagerTemplateAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DisableUnpaidItemAssistance
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceResponseType|bool
     */
    public function DisableUnpaidItemAssistance(\macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->DisableUnpaidItemAssistance($disableUnpaidItemAssistanceRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndFixedPriceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType|bool
     */
    public function EndFixedPriceItem(\macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->EndFixedPriceItem($endFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseType|bool
     */
    public function EndItem(\macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->EndItem($endItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named EndItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType|bool
     */
    public function EndItems(\macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->EndItems($endItemsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExtendSiteHostedPictures
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType|bool
     */
    public function ExtendSiteHostedPictures(\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ExtendSiteHostedPictures($extendSiteHostedPicturesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named FetchToken
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType|bool
     */
    public function FetchToken(\macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->FetchToken($fetchTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccount
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType|bool
     */
    public function GetAccount(\macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAccount($getAccountRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdFormatLeads
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType|bool
     */
    public function GetAdFormatLeads(\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAdFormatLeads($getAdFormatLeadsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllBidders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersResponseType|bool
     */
    public function GetAllBidders(\macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAllBidders($getAllBiddersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetApiAccessRules
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetApiAccessRulesRequestType $getApiAccessRulesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType|bool
     */
    public function GetApiAccessRules(\macropage\ebaysdk\trading\StructType\GetApiAccessRulesRequestType $getApiAccessRulesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetApiAccessRules($getApiAccessRulesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBestOffers
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType|bool
     */
    public function GetBestOffers(\macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBestOffers($getBestOffersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBidderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType|bool
     */
    public function GetBidderList(\macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBidderList($getBidderListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategories
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType|bool
     */
    public function GetCategories(\macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategories($getCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryFeatures
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType|bool
     */
    public function GetCategoryFeatures(\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategoryFeatures($getCategoryFeaturesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryMappings
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType|bool
     */
    public function GetCategoryMappings(\macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategoryMappings($getCategoryMappingsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategorySpecifics
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType $getCategorySpecificsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType|bool
     */
    public function GetCategorySpecifics(\macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType $getCategorySpecificsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategorySpecifics($getCategorySpecificsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChallengeToken
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType|bool
     */
    public function GetChallengeToken(\macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetChallengeToken($getChallengeTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCharities
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType $getCharitiesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType|bool
     */
    public function GetCharities(\macropage\ebaysdk\trading\StructType\GetCharitiesRequestType $getCharitiesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCharities($getCharitiesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientAlertsAuthToken
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType|bool
     */
    public function GetClientAlertsAuthToken(\macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetClientAlertsAuthToken($getClientAlertsAuthTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContextualKeywords
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType $getContextualKeywordsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType|bool
     */
    public function GetContextualKeywords(\macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType $getContextualKeywordsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetContextualKeywords($getContextualKeywordsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDescriptionTemplates
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType|bool
     */
    public function GetDescriptionTemplates(\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDescriptionTemplates($getDescriptionTemplatesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDispute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetDisputeRequestType $getDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeResponseType|bool
     */
    public function GetDispute(\macropage\ebaysdk\trading\StructType\GetDisputeRequestType $getDisputeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDispute($getDisputeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFeedback
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType|bool
     */
    public function GetFeedback(\macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFeedback($getFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemResponseType|bool
     */
    public function GetItem(\macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItem($getItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemShipping
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingResponseType|bool
     */
    public function GetItemShipping(\macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemShipping($getItemShippingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemTransactions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType|bool
     */
    public function GetItemTransactions(\macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemTransactions($getItemTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemsAwaitingFeedback
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType|bool
     */
    public function GetItemsAwaitingFeedback(\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemsAwaitingFeedback($getItemsAwaitingFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMemberMessages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType|bool
     */
    public function GetMemberMessages(\macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMemberMessages($getMemberMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessagePreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesResponseType|bool
     */
    public function GetMessagePreferences(\macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMessagePreferences($getMessagePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyMessages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType|bool
     */
    public function GetMyMessages(\macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyMessages($getMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayBuying
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType|bool
     */
    public function GetMyeBayBuying(\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBayBuying($getMyeBayBuyingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayReminders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType|bool
     */
    public function GetMyeBayReminders(\macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBayReminders($getMyeBayRemindersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBaySelling
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType|bool
     */
    public function GetMyeBaySelling(\macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBaySelling($getMyeBaySellingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationPreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType|bool
     */
    public function GetNotificationPreferences(\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNotificationPreferences($getNotificationPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationsUsage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType|bool
     */
    public function GetNotificationsUsage(\macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNotificationsUsage($getNotificationsUsageRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderTransactions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType|bool
     */
    public function GetOrderTransactions(\macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOrderTransactions($getOrderTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType|bool
     */
    public function GetOrders(\macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOrders($getOrdersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPromotionalSaleDetails
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType $getPromotionalSaleDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsResponseType|bool
     */
    public function GetPromotionalSaleDetails(\macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType $getPromotionalSaleDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPromotionalSaleDetails($getPromotionalSaleDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerDashboard
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerDashboardResponseType|bool
     */
    public function GetSellerDashboard(\macropage\ebaysdk\trading\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerDashboard($getSellerDashboardRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerEvents
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType|bool
     */
    public function GetSellerEvents(\macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerEvents($getSellerEventsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType|bool
     */
    public function GetSellerList(\macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerList($getSellerListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerTransactions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType|bool
     */
    public function GetSellerTransactions(\macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerTransactions($getSellerTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerAlerts
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsRequestType $getSellingManagerAlertsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType|bool
     */
    public function GetSellingManagerAlerts(\macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsRequestType $getSellingManagerAlertsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerAlerts($getSellingManagerAlertsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerEmailLog
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType $getSellingManagerEmailLogRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogResponseType|bool
     */
    public function GetSellingManagerEmailLog(\macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType $getSellingManagerEmailLogRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerEmailLog($getSellingManagerEmailLogRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerInventory
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType $getSellingManagerInventoryRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType|bool
     */
    public function GetSellingManagerInventory(\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType $getSellingManagerInventoryRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerInventory($getSellingManagerInventoryRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerInventoryFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType $getSellingManagerInventoryFolderRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderResponseType|bool
     */
    public function GetSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType $getSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerInventoryFolder($getSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetSellingManagerItemAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleRequestType $getSellingManagerItemAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType|bool
     */
    public function GetSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleRequestType $getSellingManagerItemAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerItemAutomationRule($getSellingManagerItemAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerSaleRecord
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType $getSellingManagerSaleRecordRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordResponseType|bool
     */
    public function GetSellingManagerSaleRecord(\macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType $getSellingManagerSaleRecordRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerSaleRecord($getSellingManagerSaleRecordRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerSoldListings
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType $getSellingManagerSoldListingsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType|bool
     */
    public function GetSellingManagerSoldListings(\macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType $getSellingManagerSoldListingsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerSoldListings($getSellingManagerSoldListingsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetSellingManagerTemplateAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleRequestType $getSellingManagerTemplateAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleResponseType|bool
     */
    public function GetSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleRequestType $getSellingManagerTemplateAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerTemplateAutomationRule($getSellingManagerTemplateAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellingManagerTemplates
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType $getSellingManagerTemplatesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesResponseType|bool
     */
    public function GetSellingManagerTemplates(\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType $getSellingManagerTemplatesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellingManagerTemplates($getSellingManagerTemplatesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSessionID
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDResponseType|bool
     */
    public function GetSessionID(\macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSessionID($getSessionIDRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShippingDiscountProfiles
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType|bool
     */
    public function GetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShippingDiscountProfiles($getShippingDiscountProfilesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStore
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreResponseType|bool
     */
    public function GetStore(\macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStore($getStoreRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreCategoryUpdateStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType|bool
     */
    public function GetStoreCategoryUpdateStatus(\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStoreCategoryUpdateStatus($getStoreCategoryUpdateStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreCustomPage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreCustomPageRequestType $getStoreCustomPageRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType|bool
     */
    public function GetStoreCustomPage(\macropage\ebaysdk\trading\StructType\GetStoreCustomPageRequestType $getStoreCustomPageRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStoreCustomPage($getStoreCustomPageRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreOptions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStoreOptionsRequestType $getStoreOptionsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType|bool
     */
    public function GetStoreOptions(\macropage\ebaysdk\trading\StructType\GetStoreOptionsRequestType $getStoreOptionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStoreOptions($getStoreOptionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStorePreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType $getStorePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType|bool
     */
    public function GetStorePreferences(\macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType $getStorePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStorePreferences($getStorePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSuggestedCategories
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType|bool
     */
    public function GetSuggestedCategories(\macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSuggestedCategories($getSuggestedCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaxTable
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableResponseType|bool
     */
    public function GetTaxTable(\macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaxTable($getTaxTableRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTokenStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetTokenStatusResponseType|bool
     */
    public function GetTokenStatus(\macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTokenStatus($getTokenStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserResponseType|bool
     */
    public function GetUser(\macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUser($getUserRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserContactDetails
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType|bool
     */
    public function GetUserContactDetails(\macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserContactDetails($getUserContactDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserDisputes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType $getUserDisputesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType|bool
     */
    public function GetUserDisputes(\macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType $getUserDisputesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserDisputes($getUserDisputesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType|bool
     */
    public function GetUserPreferences(\macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserPreferences($getUserPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReasonCodeDetails
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType|bool
     */
    public function GetVeROReasonCodeDetails(\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetVeROReasonCodeDetails($getVeROReasonCodeDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReportStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType|bool
     */
    public function GetVeROReportStatus(\macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetVeROReportStatus($getVeROReportStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeteBayDetails
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType|bool
     */
    public function GeteBayDetails(\macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GeteBayDetails($geteBayDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GeteBayOfficialTime
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest
     * @return \macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeResponseType|bool
     */
    public function GeteBayOfficialTime(\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GeteBayOfficialTime($geteBayOfficialTimeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named LeaveFeedback
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType|bool
     */
    public function LeaveFeedback(\macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->LeaveFeedback($leaveFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named MoveSellingManagerInventoryFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType $moveSellingManagerInventoryFolderRequest
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderResponseType|bool
     */
    public function MoveSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType $moveSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->MoveSellingManagerInventoryFolder($moveSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PlaceOffer
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType|bool
     */
    public function PlaceOffer(\macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->PlaceOffer($placeOfferRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RelistFixedPriceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\RelistFixedPriceItemResponseType|bool
     */
    public function RelistFixedPriceItem(\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RelistFixedPriceItem($relistFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RelistItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType|bool
     */
    public function RelistItem(\macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RelistItem($relistItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveFromWatchList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType|bool
     */
    public function RemoveFromWatchList(\macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RemoveFromWatchList($removeFromWatchListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RespondToBestOffer
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType|bool
     */
    public function RespondToBestOffer(\macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RespondToBestOffer($respondToBestOfferRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RespondToFeedback
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackResponseType|bool
     */
    public function RespondToFeedback(\macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RespondToFeedback($respondToFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseCheckoutStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType $reviseCheckoutStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusResponseType|bool
     */
    public function ReviseCheckoutStatus(\macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType $reviseCheckoutStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseCheckoutStatus($reviseCheckoutStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseFixedPriceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemResponseType|bool
     */
    public function ReviseFixedPriceItem(\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseFixedPriceItem($reviseFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseInventoryStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType|bool
     */
    public function ReviseInventoryStatus(\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseInventoryStatus($reviseInventoryStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType|bool
     */
    public function ReviseItem(\macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseItem($reviseItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesResponseType|bool
     */
    public function ReviseMyMessages(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseMyMessages($reviseMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseMyMessagesFolders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersResponseType|bool
     */
    public function ReviseMyMessagesFolders(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseMyMessagesFolders($reviseMyMessagesFoldersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReviseSellingManagerInventoryFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType $reviseSellingManagerInventoryFolderRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderResponseType|bool
     */
    public function ReviseSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType $reviseSellingManagerInventoryFolderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerInventoryFolder($reviseSellingManagerInventoryFolderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerProduct
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType $reviseSellingManagerProductRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductResponseType|bool
     */
    public function ReviseSellingManagerProduct(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType $reviseSellingManagerProductRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerProduct($reviseSellingManagerProductRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerSaleRecord
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType $reviseSellingManagerSaleRecordRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordResponseType|bool
     */
    public function ReviseSellingManagerSaleRecord(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType $reviseSellingManagerSaleRecordRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerSaleRecord($reviseSellingManagerSaleRecordRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReviseSellingManagerTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType $reviseSellingManagerTemplateRequest
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType|bool
     */
    public function ReviseSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType $reviseSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ReviseSellingManagerTemplate($reviseSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RevokeToken
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest
     * @return \macropage\ebaysdk\trading\StructType\RevokeTokenResponseType|bool
     */
    public function RevokeToken(\macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RevokeToken($revokeTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveItemToSellingManagerTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType $saveItemToSellingManagerTemplateRequest
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateResponseType|bool
     */
    public function SaveItemToSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType $saveItemToSellingManagerTemplateRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SaveItemToSellingManagerTemplate($saveItemToSellingManagerTemplateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SellerReverseDispute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeResponseType|bool
     */
    public function SellerReverseDispute(\macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SellerReverseDispute($sellerReverseDisputeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendInvoice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceResponseType|bool
     */
    public function SendInvoice(\macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SendInvoice($sendInvoiceRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetMessagePreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetMessagePreferencesResponseType|bool
     */
    public function SetMessagePreferences(\macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetMessagePreferences($setMessagePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetNotificationPreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesResponseType|bool
     */
    public function SetNotificationPreferences(\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetNotificationPreferences($setNotificationPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPromotionalSale
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetPromotionalSaleRequestType $setPromotionalSaleRequest
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleResponseType|bool
     */
    public function SetPromotionalSale(\macropage\ebaysdk\trading\StructType\SetPromotionalSaleRequestType $setPromotionalSaleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetPromotionalSale($setPromotionalSaleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPromotionalSaleListings
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType $setPromotionalSaleListingsRequest
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsResponseType|bool
     */
    public function SetPromotionalSaleListings(\macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType $setPromotionalSaleListingsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetPromotionalSaleListings($setPromotionalSaleListingsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetSellingManagerFeedbackOptions
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsRequestType $setSellingManagerFeedbackOptionsRequest
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsResponseType|bool
     */
    public function SetSellingManagerFeedbackOptions(\macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsRequestType $setSellingManagerFeedbackOptionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetSellingManagerFeedbackOptions($setSellingManagerFeedbackOptionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetSellingManagerItemAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType $setSellingManagerItemAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType|bool
     */
    public function SetSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType $setSellingManagerItemAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetSellingManagerItemAutomationRule($setSellingManagerItemAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * SetSellingManagerTemplateAutomationRule
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType $setSellingManagerTemplateAutomationRuleRequest
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleResponseType|bool
     */
    public function SetSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType $setSellingManagerTemplateAutomationRuleRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetSellingManagerTemplateAutomationRule($setSellingManagerTemplateAutomationRuleRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetShippingDiscountProfiles
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesResponseType|bool
     */
    public function SetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetShippingDiscountProfiles($setShippingDiscountProfilesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStore
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreRequestType $setStoreRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreResponseType|bool
     */
    public function SetStore(\macropage\ebaysdk\trading\StructType\SetStoreRequestType $setStoreRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetStore($setStoreRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStoreCategories
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType|bool
     */
    public function SetStoreCategories(\macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetStoreCategories($setStoreCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStoreCustomPage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType $setStoreCustomPageRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType|bool
     */
    public function SetStoreCustomPage(\macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType $setStoreCustomPageRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetStoreCustomPage($setStoreCustomPageRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStorePreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType $setStorePreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetStorePreferencesResponseType|bool
     */
    public function SetStorePreferences(\macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType $setStorePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetStorePreferences($setStorePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTaxTable
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetTaxTableRequestType $setTaxTableRequest
     * @return \macropage\ebaysdk\trading\StructType\SetTaxTableResponseType|bool
     */
    public function SetTaxTable(\macropage\ebaysdk\trading\StructType\SetTaxTableRequestType $setTaxTableRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetTaxTable($setTaxTableRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserNotes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType $setUserNotesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesResponseType|bool
     */
    public function SetUserNotes(\macropage\ebaysdk\trading\StructType\SetUserNotesRequestType $setUserNotesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetUserNotes($setUserNotesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserPreferences
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesResponseType|bool
     */
    public function SetUserPreferences(\macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetUserPreferences($setUserPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadSiteHostedPictures
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType|bool
     */
    public function UploadSiteHostedPictures(\macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->UploadSiteHostedPictures($uploadSiteHostedPicturesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateChallengeInput
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType|bool
     */
    public function ValidateChallengeInput(\macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateChallengeInput($validateChallengeInputRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateTestUserRegistration
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationResponseType|bool
     */
    public function ValidateTestUserRegistration(\macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateTestUserRegistration($validateTestUserRegistrationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VeROReportItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType $veROReportItemsRequest
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType|bool
     */
    public function VeROReportItems(\macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType $veROReportItemsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VeROReportItems($veROReportItemsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddFixedPriceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType|bool
     */
    public function VerifyAddFixedPriceItem(\macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddFixedPriceItem($verifyAddFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType $verifyAddItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType|bool
     */
    public function VerifyAddItem(\macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType $verifyAddItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddItem($verifyAddItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyAddSecondChanceItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType|bool
     */
    public function VerifyAddSecondChanceItem(\macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyAddSecondChanceItem($verifyAddSecondChanceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VerifyRelistItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType|bool
     */
    public function VerifyRelistItem(\macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyRelistItem($verifyRelistItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseResponseType|\macropage\ebaysdk\trading\StructType\AddDisputeResponseType|\macropage\ebaysdk\trading\StructType\AddFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateResponseType|\macropage\ebaysdk\trading\StructType\AddItemResponseType|\macropage\ebaysdk\trading\StructType\AddItemsResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQResponseType|\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType|\macropage\ebaysdk\trading\StructType\AddOrderResponseType|\macropage\ebaysdk\trading\StructType\AddSecondChanceItemResponseType|\macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderResponseType|\macropage\ebaysdk\trading\StructType\AddSellingManagerProductResponseType|\macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType|\macropage\ebaysdk\trading\StructType\AddToItemDescriptionResponseType|\macropage\ebaysdk\trading\StructType\AddToWatchListResponseType|\macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType|\macropage\ebaysdk\trading\StructType\CompleteSaleResponseType|\macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType|\macropage\ebaysdk\trading\StructType\DeleteMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderResponseType|\macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductResponseType|\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType|\macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceResponseType|\macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\EndItemResponseType|\macropage\ebaysdk\trading\StructType\EndItemsResponseType|\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType|\macropage\ebaysdk\trading\StructType\FetchTokenResponseType|\macropage\ebaysdk\trading\StructType\GetAccountResponseType|\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType|\macropage\ebaysdk\trading\StructType\GetAllBiddersResponseType|\macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType|\macropage\ebaysdk\trading\StructType\GetBestOffersResponseType|\macropage\ebaysdk\trading\StructType\GetBidderListResponseType|\macropage\ebaysdk\trading\StructType\GetCategoriesResponseType|\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType|\macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType|\macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType|\macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType|\macropage\ebaysdk\trading\StructType\GetCharitiesResponseType|\macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType|\macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType|\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType|\macropage\ebaysdk\trading\StructType\GetDisputeResponseType|\macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType|\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeResponseType|\macropage\ebaysdk\trading\StructType\GetFeedbackResponseType|\macropage\ebaysdk\trading\StructType\GetItemResponseType|\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType|\macropage\ebaysdk\trading\StructType\GetItemShippingResponseType|\macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType|\macropage\ebaysdk\trading\StructType\GetMessagePreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType|\macropage\ebaysdk\trading\StructType\GetMyeBaySellingResponseType|\macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType|\macropage\ebaysdk\trading\StructType\GetOrdersResponseType|\macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsResponseType|\macropage\ebaysdk\trading\StructType\GetSellerDashboardResponseType|\macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType|\macropage\ebaysdk\trading\StructType\GetSellerListResponseType|\macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesResponseType|\macropage\ebaysdk\trading\StructType\GetSessionIDResponseType|\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType|\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType|\macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType|\macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType|\macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetStoreResponseType|\macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType|\macropage\ebaysdk\trading\StructType\GetTaxTableResponseType|\macropage\ebaysdk\trading\StructType\GetTokenStatusResponseType|\macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType|\macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType|\macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType|\macropage\ebaysdk\trading\StructType\GetUserResponseType|\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType|\macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType|\macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType|\macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderResponseType|\macropage\ebaysdk\trading\StructType\PlaceOfferResponseType|\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\RelistItemResponseType|\macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType|\macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType|\macropage\ebaysdk\trading\StructType\RespondToFeedbackResponseType|\macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusResponseType|\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusResponseType|\macropage\ebaysdk\trading\StructType\ReviseItemResponseType|\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersResponseType|\macropage\ebaysdk\trading\StructType\ReviseMyMessagesResponseType|\macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderResponseType|\macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductResponseType|\macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordResponseType|\macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType|\macropage\ebaysdk\trading\StructType\RevokeTokenResponseType|\macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateResponseType|\macropage\ebaysdk\trading\StructType\SellerReverseDisputeResponseType|\macropage\ebaysdk\trading\StructType\SendInvoiceResponseType|\macropage\ebaysdk\trading\StructType\SetMessagePreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsResponseType|\macropage\ebaysdk\trading\StructType\SetPromotionalSaleResponseType|\macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsResponseType|\macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleResponseType|\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType|\macropage\ebaysdk\trading\StructType\SetStorePreferencesResponseType|\macropage\ebaysdk\trading\StructType\SetStoreResponseType|\macropage\ebaysdk\trading\StructType\SetTaxTableResponseType|\macropage\ebaysdk\trading\StructType\SetUserNotesResponseType|\macropage\ebaysdk\trading\StructType\SetUserPreferencesResponseType|\macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType|\macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType|\macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType|\macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType|\macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
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
