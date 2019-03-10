<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetNotificationPreferencesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Manages notification and alert preferences for applications and users.
 * @subpackage Structs
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies application-level event preferences that have been enabled, including the URL to which notifications should be delivered and whether notifications should be enabled or disabled (although the
     * <b>UserDeliveryPreferenceArray</b> input property specifies specific notification subscriptions).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public $ApplicationDeliveryPreferences;
    /**
     * The UserDeliveryPreferenceArray
     * Meta informations extracted from the WSDL
     * - documentation: Specifies events and whether or not they are enabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
     */
    public $UserDeliveryPreferenceArray;
    /**
     * The UserData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies user data for notification settings, such as mobile phone number.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public $UserData;
    /**
     * The EventProperty
     * Meta informations extracted from the WSDL
     * - documentation: Characteristics or details of an event such as type, name and value. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]
     */
    public $EventProperty;
    /**
     * The DeliveryURLName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of
     * ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * Constructor method for SetNotificationPreferencesRequestType
     * @uses SetNotificationPreferencesRequestType::setApplicationDeliveryPreferences()
     * @uses SetNotificationPreferencesRequestType::setUserDeliveryPreferenceArray()
     * @uses SetNotificationPreferencesRequestType::setUserData()
     * @uses SetNotificationPreferencesRequestType::setEventProperty()
     * @uses SetNotificationPreferencesRequestType::setDeliveryURLName()
     * @param \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @param \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[] $eventProperty
     * @param string $deliveryURLName
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null, array $eventProperty = array(), $deliveryURLName = null)
    {
        $this
            ->setApplicationDeliveryPreferences($applicationDeliveryPreferences)
            ->setUserDeliveryPreferenceArray($userDeliveryPreferenceArray)
            ->setUserData($userData)
            ->setEventProperty($eventProperty)
            ->setDeliveryURLName($deliveryURLName);
    }
    /**
     * Get ApplicationDeliveryPreferences value
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType|null
     */
    public function getApplicationDeliveryPreferences()
    {
        return $this->ApplicationDeliveryPreferences;
    }
    /**
     * Set ApplicationDeliveryPreferences value
     * @param \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setApplicationDeliveryPreferences(\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null)
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
        return $this;
    }
    /**
     * Get UserDeliveryPreferenceArray value
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType|null
     */
    public function getUserDeliveryPreferenceArray()
    {
        return $this->UserDeliveryPreferenceArray;
    }
    /**
     * Set UserDeliveryPreferenceArray value
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setUserDeliveryPreferenceArray(\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null)
    {
        $this->UserDeliveryPreferenceArray = $userDeliveryPreferenceArray;
        return $this;
    }
    /**
     * Get UserData value
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType|null
     */
    public function getUserData()
    {
        return $this->UserData;
    }
    /**
     * Set UserData value
     * @param \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setUserData(\macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null)
    {
        $this->UserData = $userData;
        return $this;
    }
    /**
     * Get EventProperty value
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]|null
     */
    public function getEventProperty()
    {
        return $this->EventProperty;
    }
    /**
     * Set EventProperty value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[] $eventProperty
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setEventProperty(array $eventProperty = array())
    {
        foreach ($eventProperty as $setNotificationPreferencesRequestTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$setNotificationPreferencesRequestTypeEventPropertyItem instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
                throw new \InvalidArgumentException(sprintf('The EventProperty property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType, "%s" given', is_object($setNotificationPreferencesRequestTypeEventPropertyItem) ? get_class($setNotificationPreferencesRequestTypeEventPropertyItem) : gettype($setNotificationPreferencesRequestTypeEventPropertyItem)), __LINE__);
            }
        }
        $this->EventProperty = $eventProperty;
        return $this;
    }
    /**
     * Add item to EventProperty value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType $item
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function addToEventProperty(\macropage\ebaysdk\trading\StructType\NotificationEventPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
            throw new \InvalidArgumentException(sprintf('The EventProperty property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EventProperty[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
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
