<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: User data related to notifications. Note that SMS is currently reserved for future use.
 * @subpackage Structs
 */
class SMSSubscriptionType extends AbstractStructBase
{
    /**
     * The SMSPhone
     * Meta information extracted from the WSDL
     * - documentation: The wireless phone number to be used for receiving SMS messages. Max length of phone number varies by country.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SMSPhone = null;
    /**
     * The UserStatus
     * Meta information extracted from the WSDL
     * - documentation: Registered/Unregistered/Pending.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserStatus = null;
    /**
     * The CarrierID
     * Meta information extracted from the WSDL
     * - documentation: The wireless carrier ID.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CarrierID = null;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - documentation: Reason for SMS subscription error (postback from thired-party integrator).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorCode = null;
    /**
     * The ItemToUnsubscribe
     * Meta information extracted from the WSDL
     * - documentation: ID of item to unsubscribe from SMS notification. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemToUnsubscribe = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SMSSubscriptionType
     * @uses SMSSubscriptionType::setSMSPhone()
     * @uses SMSSubscriptionType::setUserStatus()
     * @uses SMSSubscriptionType::setCarrierID()
     * @uses SMSSubscriptionType::setErrorCode()
     * @uses SMSSubscriptionType::setItemToUnsubscribe()
     * @uses SMSSubscriptionType::setAny()
     * @param string $sMSPhone
     * @param string $userStatus
     * @param string $carrierID
     * @param string $errorCode
     * @param string $itemToUnsubscribe
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $sMSPhone = null, ?string $userStatus = null, ?string $carrierID = null, ?string $errorCode = null, ?string $itemToUnsubscribe = null, $any = null)
    {
        $this
            ->setSMSPhone($sMSPhone)
            ->setUserStatus($userStatus)
            ->setCarrierID($carrierID)
            ->setErrorCode($errorCode)
            ->setItemToUnsubscribe($itemToUnsubscribe)
            ->setAny($any);
    }
    /**
     * Get SMSPhone value
     * @return string|null
     */
    public function getSMSPhone(): ?string
    {
        return $this->SMSPhone;
    }
    /**
     * Set SMSPhone value
     * @param string $sMSPhone
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setSMSPhone(?string $sMSPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($sMSPhone) && !is_string($sMSPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMSPhone, true), gettype($sMSPhone)), __LINE__);
        }
        $this->SMSPhone = $sMSPhone;
        
        return $this;
    }
    /**
     * Get UserStatus value
     * @return string|null
     */
    public function getUserStatus(): ?string
    {
        return $this->UserStatus;
    }
    /**
     * Set UserStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $userStatus
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setUserStatus(?string $userStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid($userStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType', is_array($userStatus) ? implode(', ', $userStatus) : var_export($userStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->UserStatus = $userStatus;
        
        return $this;
    }
    /**
     * Get CarrierID value
     * @return string|null
     */
    public function getCarrierID(): ?string
    {
        return $this->CarrierID;
    }
    /**
     * Set CarrierID value
     * @uses \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $carrierID
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setCarrierID(?string $carrierID = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::valueIsValid($carrierID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType', is_array($carrierID) ? implode(', ', $carrierID) : var_export($carrierID, true), implode(', ', \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierID = $carrierID;
        
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorCode
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get ItemToUnsubscribe value
     * @return string|null
     */
    public function getItemToUnsubscribe(): ?string
    {
        return $this->ItemToUnsubscribe;
    }
    /**
     * Set ItemToUnsubscribe value
     * @param string $itemToUnsubscribe
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setItemToUnsubscribe(?string $itemToUnsubscribe = null): self
    {
        // validation for constraint: string
        if (!is_null($itemToUnsubscribe) && !is_string($itemToUnsubscribe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemToUnsubscribe, true), gettype($itemToUnsubscribe)), __LINE__);
        }
        $this->ItemToUnsubscribe = $itemToUnsubscribe;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
