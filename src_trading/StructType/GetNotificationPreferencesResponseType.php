<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationPreferencesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the requesting application's notification preferences. <b>GetNotificationPreferences</b> retrieves preferences that you have deliberately set. For example, if you enable the <b>EndOfAuction</b> event and then later disable
 * it, the response shows the <b>EndOfAuction</b> event preference as <b>Disabled</b>. But if you have never set a preference for the <b>EndOfAuction</b> event, no <b>EndOfAuction</b> preference is returned at all.
 * @subpackage Structs
 */
class GetNotificationPreferencesResponseType extends AbstractResponseType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies application-based event preferences that have been enabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public $ApplicationDeliveryPreferences;
    /**
     * The DeliveryURLName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies application delivery URL Name associated with this user.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * The UserDeliveryPreferenceArray
     * Meta informations extracted from the WSDL
     * - documentation: Specifies user-based event preferences that have been enabled or disabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
     */
    public $UserDeliveryPreferenceArray;
    /**
     * The UserData
     * Meta informations extracted from the WSDL
     * - documentation: Returns user data for notification settings, such as set mobile phone.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public $UserData;
    /**
     * The EventProperty
     * Meta informations extracted from the WSDL
     * - documentation: Contains names and values assigned to a notification event. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]
     */
    public $EventProperty;
    /**
     * Constructor method for GetNotificationPreferencesResponseType
     * @uses GetNotificationPreferencesResponseType::setApplicationDeliveryPreferences()
     * @uses GetNotificationPreferencesResponseType::setDeliveryURLName()
     * @uses GetNotificationPreferencesResponseType::setUserDeliveryPreferenceArray()
     * @uses GetNotificationPreferencesResponseType::setUserData()
     * @uses GetNotificationPreferencesResponseType::setEventProperty()
     * @param \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @param string $deliveryURLName
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @param \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[] $eventProperty
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, $deliveryURLName = null, \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null, array $eventProperty = array())
    {
        $this
            ->setApplicationDeliveryPreferences($applicationDeliveryPreferences)
            ->setDeliveryURLName($deliveryURLName)
            ->setUserDeliveryPreferenceArray($userDeliveryPreferenceArray)
            ->setUserData($userData)
            ->setEventProperty($eventProperty);
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
     */
    public function setApplicationDeliveryPreferences(\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null)
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
     */
    public function setEventProperty(array $eventProperty = array())
    {
        foreach ($eventProperty as $getNotificationPreferencesResponseTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$getNotificationPreferencesResponseTypeEventPropertyItem instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
                throw new \InvalidArgumentException(sprintf('The EventProperty property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType, "%s" given', is_object($getNotificationPreferencesResponseTypeEventPropertyItem) ? get_class($getNotificationPreferencesResponseTypeEventPropertyItem) : gettype($getNotificationPreferencesResponseTypeEventPropertyItem)), __LINE__);
            }
        }
        $this->EventProperty = $eventProperty;
        return $this;
    }
    /**
     * Add item to EventProperty value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType $item
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
