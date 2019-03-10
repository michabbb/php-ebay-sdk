<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSSubscriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: User data related to notifications. Note that SMS is currently reserved for future use.
 * @subpackage Structs
 */
class SMSSubscriptionType extends AbstractStructBase
{
    /**
     * The SMSPhone
     * Meta informations extracted from the WSDL
     * - documentation: The wireless phone number to be used for receiving SMS messages. Max length of phone number varies by country.
     * - minOccurs: 0
     * @var string
     */
    public $SMSPhone;
    /**
     * The UserStatus
     * Meta informations extracted from the WSDL
     * - documentation: Registered/Unregistered/Pending.
     * - minOccurs: 0
     * @var string
     */
    public $UserStatus;
    /**
     * The CarrierID
     * Meta informations extracted from the WSDL
     * - documentation: The wireless carrier ID.
     * - minOccurs: 0
     * @var string
     */
    public $CarrierID;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - documentation: Reason for SMS subscription error (postback from thired-party integrator).
     * - minOccurs: 0
     * @var string
     */
    public $ErrorCode;
    /**
     * The ItemToUnsubscribe
     * Meta informations extracted from the WSDL
     * - documentation: ID of item to unsubscribe from SMS notification. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemToUnsubscribe;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($sMSPhone = null, $userStatus = null, $carrierID = null, $errorCode = null, $itemToUnsubscribe = null, \DOMDocument $any = null)
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
    public function getSMSPhone()
    {
        return $this->SMSPhone;
    }
    /**
     * Set SMSPhone value
     * @param string $sMSPhone
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setSMSPhone($sMSPhone = null)
    {
        // validation for constraint: string
        if (!is_null($sMSPhone) && !is_string($sMSPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sMSPhone)), __LINE__);
        }
        $this->SMSPhone = $sMSPhone;
        return $this;
    }
    /**
     * Get UserStatus value
     * @return string|null
     */
    public function getUserStatus()
    {
        return $this->UserStatus;
    }
    /**
     * Set UserStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userStatus
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setUserStatus($userStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::valueIsValid($userStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\SMSSubscriptionUserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->UserStatus = $userStatus;
        return $this;
    }
    /**
     * Get CarrierID value
     * @return string|null
     */
    public function getCarrierID()
    {
        return $this->CarrierID;
    }
    /**
     * Set CarrierID value
     * @uses \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierID
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setCarrierID($carrierID = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::valueIsValid($carrierID)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierID, implode(', ', \macropage\ebaysdk\trading\EnumType\WirelessCarrierIDCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierID = $carrierID;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorCode, implode(', ', \macropage\ebaysdk\trading\EnumType\SMSSubscriptionErrorCodeCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ItemToUnsubscribe value
     * @return string|null
     */
    public function getItemToUnsubscribe()
    {
        return $this->ItemToUnsubscribe;
    }
    /**
     * Set ItemToUnsubscribe value
     * @param string $itemToUnsubscribe
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setItemToUnsubscribe($itemToUnsubscribe = null)
    {
        // validation for constraint: string
        if (!is_null($itemToUnsubscribe) && !is_string($itemToUnsubscribe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemToUnsubscribe)), __LINE__);
        }
        $this->ItemToUnsubscribe = $itemToUnsubscribe;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SMSSubscriptionType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
