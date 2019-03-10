<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about a single notification. Notification information includes the reference ID, notification type, current status, time delivered, error code, and error message for the notification. If notification details are included
 * in the response, all of the detail fields are returned.
 * @subpackage Structs
 */
class NotificationDetailsType extends AbstractStructBase
{
    /**
     * The DeliveryURL
     * Meta informations extracted from the WSDL
     * - documentation: Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURL;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: Reference identifier for the notification.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceID;
    /**
     * The ExpirationTime
     * Meta informations extracted from the WSDL
     * - documentation: Date and time when this notification will be removed from the eBay system.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationTime;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived,
     * MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Retries
     * Meta informations extracted from the WSDL
     * - documentation: Returns the total number of retries for the given notification.
     * - minOccurs: 0
     * @var int
     */
    public $Retries;
    /**
     * The DeliveryStatus
     * Meta informations extracted from the WSDL
     * - documentation: Returns the notification status. Possible values include Delivered, Failed, Rejected, and MarkedDown.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryStatus;
    /**
     * The NextRetryTime
     * Meta informations extracted from the WSDL
     * - documentation: Returns the time when the notification is scheduled for retry. This won't be included if the DeliveryStatus is Delivered.
     * - minOccurs: 0
     * @var string
     */
    public $NextRetryTime;
    /**
     * The DeliveryTime
     * Meta informations extracted from the WSDL
     * - documentation: Returns the time when the notification was delivered.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryTime;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - documentation: Returns the error message.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * The DeliveryURLName
     * Meta informations extracted from the WSDL
     * - documentation: Returns the delivery URL name for the notification. This is the value set using SetNotificationPreferences.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationDetailsType
     * @uses NotificationDetailsType::setDeliveryURL()
     * @uses NotificationDetailsType::setReferenceID()
     * @uses NotificationDetailsType::setExpirationTime()
     * @uses NotificationDetailsType::setType()
     * @uses NotificationDetailsType::setRetries()
     * @uses NotificationDetailsType::setDeliveryStatus()
     * @uses NotificationDetailsType::setNextRetryTime()
     * @uses NotificationDetailsType::setDeliveryTime()
     * @uses NotificationDetailsType::setErrorMessage()
     * @uses NotificationDetailsType::setDeliveryURLName()
     * @uses NotificationDetailsType::setAny()
     * @param string $deliveryURL
     * @param string $referenceID
     * @param string $expirationTime
     * @param string $type
     * @param int $retries
     * @param string $deliveryStatus
     * @param string $nextRetryTime
     * @param string $deliveryTime
     * @param string $errorMessage
     * @param string $deliveryURLName
     * @param \DOMDocument $any
     */
    public function __construct($deliveryURL = null, $referenceID = null, $expirationTime = null, $type = null, $retries = null, $deliveryStatus = null, $nextRetryTime = null, $deliveryTime = null, $errorMessage = null, $deliveryURLName = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveryURL($deliveryURL)
            ->setReferenceID($referenceID)
            ->setExpirationTime($expirationTime)
            ->setType($type)
            ->setRetries($retries)
            ->setDeliveryStatus($deliveryStatus)
            ->setNextRetryTime($nextRetryTime)
            ->setDeliveryTime($deliveryTime)
            ->setErrorMessage($errorMessage)
            ->setDeliveryURLName($deliveryURLName)
            ->setAny($any);
    }
    /**
     * Get DeliveryURL value
     * @return string|null
     */
    public function getDeliveryURL()
    {
        return $this->DeliveryURL;
    }
    /**
     * Set DeliveryURL value
     * @param string $deliveryURL
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryURL($deliveryURL = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryURL) && !is_string($deliveryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryURL)), __LINE__);
        }
        $this->DeliveryURL = $deliveryURL;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setExpirationTime($expirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Retries value
     * @return int|null
     */
    public function getRetries()
    {
        return $this->Retries;
    }
    /**
     * Set Retries value
     * @param int $retries
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setRetries($retries = null)
    {
        // validation for constraint: int
        if (!is_null($retries) && !is_numeric($retries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($retries)), __LINE__);
        }
        $this->Retries = $retries;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryStatus($deliveryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::valueIsValid($deliveryStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::getValidValues())), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get NextRetryTime value
     * @return string|null
     */
    public function getNextRetryTime()
    {
        return $this->NextRetryTime;
    }
    /**
     * Set NextRetryTime value
     * @param string $nextRetryTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setNextRetryTime($nextRetryTime = null)
    {
        // validation for constraint: string
        if (!is_null($nextRetryTime) && !is_string($nextRetryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextRetryTime)), __LINE__);
        }
        $this->NextRetryTime = $nextRetryTime;
        return $this;
    }
    /**
     * Get DeliveryTime value
     * @return string|null
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }
    /**
     * Set DeliveryTime value
     * @param string $deliveryTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryTime($deliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryTime) && !is_string($deliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryTime)), __LINE__);
        }
        $this->DeliveryTime = $deliveryTime;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get DeliveryURLName value
     * @return string|null
     */
    public function getDeliveryURLName()
    {
        return $this->DeliveryURLName;
    }
    /**
     * Set DeliveryURLName value
     * @param string $deliveryURLName
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryURLName($deliveryURLName = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryURLName) && !is_string($deliveryURLName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryURLName)), __LINE__);
        }
        $this->DeliveryURLName = $deliveryURLName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NotificationDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
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
