<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about a single notification. Notification information includes the reference ID, notification type, current status, time delivered, error code, and error message for the notification. If notification details are included
 * in the response, all of the detail fields are returned.
 * @subpackage Structs
 */
class NotificationDetailsType extends AbstractStructBase
{
    /**
     * The DeliveryURL
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURL = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: Reference identifier for the notification.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferenceID = null;
    /**
     * The ExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time when this notification will be removed from the eBay system.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationTime = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived,
     * MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Retries
     * Meta information extracted from the WSDL
     * - documentation: Returns the total number of retries for the given notification.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Retries = null;
    /**
     * The DeliveryStatus
     * Meta information extracted from the WSDL
     * - documentation: Returns the notification status. Possible values include Delivered, Failed, Rejected, and MarkedDown.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryStatus = null;
    /**
     * The NextRetryTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the time when the notification is scheduled for retry. This won't be included if the DeliveryStatus is Delivered.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NextRetryTime = null;
    /**
     * The DeliveryTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the time when the notification was delivered.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryTime = null;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: Returns the error message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: Returns the delivery URL name for the notification. This is the value set using SetNotificationPreferences.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURLName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $deliveryURL = null, ?string $referenceID = null, ?string $expirationTime = null, ?string $type = null, ?int $retries = null, ?string $deliveryStatus = null, ?string $nextRetryTime = null, ?string $deliveryTime = null, ?string $errorMessage = null, ?string $deliveryURLName = null, $any = null)
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
    public function getDeliveryURL(): ?string
    {
        return $this->DeliveryURL;
    }
    /**
     * Set DeliveryURL value
     * @param string $deliveryURL
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryURL(?string $deliveryURL = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryURL) && !is_string($deliveryURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURL, true), gettype($deliveryURL)), __LINE__);
        }
        $this->DeliveryURL = $deliveryURL;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID(): ?string
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setReferenceID(?string $referenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime(): ?string
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setExpirationTime(?string $expirationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Retries value
     * @return int|null
     */
    public function getRetries(): ?int
    {
        return $this->Retries;
    }
    /**
     * Set Retries value
     * @param int $retries
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setRetries(?int $retries = null): self
    {
        // validation for constraint: int
        if (!is_null($retries) && !(is_int($retries) || ctype_digit($retries))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($retries, true), gettype($retries)), __LINE__);
        }
        $this->Retries = $retries;
        
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryStatus(?string $deliveryStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::valueIsValid($deliveryStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType', is_array($deliveryStatus) ? implode(', ', $deliveryStatus) : var_export($deliveryStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventStateCodeType::getValidValues())), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        
        return $this;
    }
    /**
     * Get NextRetryTime value
     * @return string|null
     */
    public function getNextRetryTime(): ?string
    {
        return $this->NextRetryTime;
    }
    /**
     * Set NextRetryTime value
     * @param string $nextRetryTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setNextRetryTime(?string $nextRetryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($nextRetryTime) && !is_string($nextRetryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextRetryTime, true), gettype($nextRetryTime)), __LINE__);
        }
        $this->NextRetryTime = $nextRetryTime;
        
        return $this;
    }
    /**
     * Get DeliveryTime value
     * @return string|null
     */
    public function getDeliveryTime(): ?string
    {
        return $this->DeliveryTime;
    }
    /**
     * Set DeliveryTime value
     * @param string $deliveryTime
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryTime(?string $deliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTime) && !is_string($deliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTime, true), gettype($deliveryTime)), __LINE__);
        }
        $this->DeliveryTime = $deliveryTime;
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get DeliveryURLName value
     * @return string|null
     */
    public function getDeliveryURLName(): ?string
    {
        return $this->DeliveryURLName;
    }
    /**
     * Set DeliveryURLName value
     * @param string $deliveryURLName
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
     */
    public function setDeliveryURLName(?string $deliveryURLName = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryURLName) && !is_string($deliveryURLName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURLName, true), gettype($deliveryURLName)), __LINE__);
        }
        $this->DeliveryURLName = $deliveryURLName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType
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
