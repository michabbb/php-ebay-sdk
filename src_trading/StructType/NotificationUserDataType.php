<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationUserDataType StructType
 * Meta informations extracted from the WSDL
 * - documentation: User data related to notifications.
 * @subpackage Structs
 */
class NotificationUserDataType extends AbstractStructBase
{
    /**
     * The SMSSubscription
     * Meta informations extracted from the WSDL
     * - documentation: User data related to SMS notifications. SMS is currently reserved for future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SMSSubscriptionType
     */
    public $SMSSubscription;
    /**
     * The SummarySchedule
     * Meta informations extracted from the WSDL
     * - documentation: User account activity summary alert delivery schedule. Returned if PreferenceLevel is set to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for instructions on "Informational Alerts".
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[]
     */
    public $SummarySchedule;
    /**
     * The ExternalUserData
     * Meta informations extracted from the WSDL
     * - documentation: An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned in the notification payload. The string can contain user-specific information to identify a
     * particular user. Any sensitive information should be passed with due caution and proper encryption.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalUserData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationUserDataType
     * @uses NotificationUserDataType::setSMSSubscription()
     * @uses NotificationUserDataType::setSummarySchedule()
     * @uses NotificationUserDataType::setExternalUserData()
     * @uses NotificationUserDataType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[] $summarySchedule
     * @param string $externalUserData
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription = null, array $summarySchedule = array(), $externalUserData = null, \DOMDocument $any = null)
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
    public function getSMSSubscription()
    {
        return $this->SMSSubscription;
    }
    /**
     * Set SMSSubscription value
     * @param \macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setSMSSubscription(\macropage\ebaysdk\trading\StructType\SMSSubscriptionType $sMSSubscription = null)
    {
        $this->SMSSubscription = $sMSSubscription;
        return $this;
    }
    /**
     * Get SummarySchedule value
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[]|null
     */
    public function getSummarySchedule()
    {
        return $this->SummarySchedule;
    }
    /**
     * Set SummarySchedule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType[] $summarySchedule
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setSummarySchedule(array $summarySchedule = array())
    {
        foreach ($summarySchedule as $notificationUserDataTypeSummaryScheduleItem) {
            // validation for constraint: itemType
            if (!$notificationUserDataTypeSummaryScheduleItem instanceof \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType) {
                throw new \InvalidArgumentException(sprintf('The SummarySchedule property can only contain items of \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType, "%s" given', is_object($notificationUserDataTypeSummaryScheduleItem) ? get_class($notificationUserDataTypeSummaryScheduleItem) : gettype($notificationUserDataTypeSummaryScheduleItem)), __LINE__);
            }
        }
        $this->SummarySchedule = $summarySchedule;
        return $this;
    }
    /**
     * Add item to SummarySchedule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType $item
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function addToSummarySchedule(\macropage\ebaysdk\trading\StructType\SummaryEventScheduleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType) {
            throw new \InvalidArgumentException(sprintf('The SummarySchedule property can only contain items of \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SummarySchedule[] = $item;
        return $this;
    }
    /**
     * Get ExternalUserData value
     * @return string|null
     */
    public function getExternalUserData()
    {
        return $this->ExternalUserData;
    }
    /**
     * Set ExternalUserData value
     * @param string $externalUserData
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setExternalUserData($externalUserData = null)
    {
        // validation for constraint: string
        if (!is_null($externalUserData) && !is_string($externalUserData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalUserData)), __LINE__);
        }
        $this->ExternalUserData = $externalUserData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NotificationUserDataType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
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
