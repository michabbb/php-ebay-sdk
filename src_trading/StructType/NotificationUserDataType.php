<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationUserDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: User data related to notifications.
 * @subpackage Structs
 */
class NotificationUserDataType extends AbstractStructBase
{
    /**
     * The SMSSubscription
     * Meta information extracted from the WSDL
     * - documentation: User data related to SMS notifications. SMS is currently reserved for future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SMSSubscriptionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SMSSubscriptionType $SMSSubscription = null;
    /**
     * The SummarySchedule
     * Meta information extracted from the WSDL
     * - documentation: User account activity summary alert delivery schedule. Returned if PreferenceLevel is set to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for instructions on "Informational Alerts".
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[]
     */
    protected ?array $SummarySchedule = null;
    /**
     * The ExternalUserData
     * Meta information extracted from the WSDL
     * - documentation: An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned in the notification payload. The string can contain user-specific information to identify a
     * particular user. Any sensitive information should be passed with due caution and proper encryption.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalUserData = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NotificationUserDataType
     * @uses NotificationUserDataType::setSMSSubscription()
     * @uses NotificationUserDataType::setSummarySchedule()
     * @uses NotificationUserDataType::setExternalUserData()
     * @uses NotificationUserDataType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[] $summarySchedule
     * @param string $externalUserData
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription = null, ?array $summarySchedule = null, ?string $externalUserData = null, $any = null)
    {
        $this
            ->setSMSSubscription($sMSSubscription)
            ->setSummarySchedule($summarySchedule)
            ->setExternalUserData($externalUserData)
            ->setAny($any);
    }
    /**
     * Get SMSSubscription value
     * @return \macropage\ebaysdk\trading\StructType\SMSSubscriptionType|null
     */
    public function getSMSSubscription(): ?\macropage\ebaysdk\trading\StructType\SMSSubscriptionType
    {
        return $this->SMSSubscription;
    }
    /**
     * Set SMSSubscription value
     * @param \macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setSMSSubscription(?\macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription = null): self
    {
        $this->SMSSubscription = $sMSSubscription;
        
        return $this;
    }
    /**
     * Get SummarySchedule value
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[]
     */
    public function getSummarySchedule(): ?array
    {
        return $this->SummarySchedule;
    }
    /**
     * This method is responsible for validating the values passed to the setSummarySchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSummarySchedule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSummaryScheduleForArrayConstraintsFromSetSummarySchedule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationUserDataTypeSummaryScheduleItem) {
            // validation for constraint: itemType
            if (!$notificationUserDataTypeSummaryScheduleItem instanceof \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType) {
                $invalidValues[] = is_object($notificationUserDataTypeSummaryScheduleItem) ? get_class($notificationUserDataTypeSummaryScheduleItem) : sprintf('%s(%s)', gettype($notificationUserDataTypeSummaryScheduleItem), var_export($notificationUserDataTypeSummaryScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SummarySchedule property can only contain items of type \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SummarySchedule value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[] $summarySchedule
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setSummarySchedule(?array $summarySchedule = null): self
    {
        // validation for constraint: array
        if ('' !== ($summaryScheduleArrayErrorMessage = self::validateSummaryScheduleForArrayConstraintsFromSetSummarySchedule($summarySchedule))) {
            throw new InvalidArgumentException($summaryScheduleArrayErrorMessage, __LINE__);
        }
        $this->SummarySchedule = $summarySchedule;
        
        return $this;
    }
    /**
     * Add item to SummarySchedule value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType $item
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function addToSummarySchedule(\macropage\ebaysdk\trading\StructType\SummaryEventScheduleType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType) {
            throw new InvalidArgumentException(sprintf('The SummarySchedule property can only contain items of type \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SummarySchedule[] = $item;
        
        return $this;
    }
    /**
     * Get ExternalUserData value
     * @return string|null
     */
    public function getExternalUserData(): ?string
    {
        return $this->ExternalUserData;
    }
    /**
     * Set ExternalUserData value
     * @param string $externalUserData
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setExternalUserData(?string $externalUserData = null): self
    {
        // validation for constraint: string
        if (!is_null($externalUserData) && !is_string($externalUserData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalUserData, true), gettype($externalUserData)), __LINE__);
        }
        $this->ExternalUserData = $externalUserData;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
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
