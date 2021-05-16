<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetNotificationPreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Manages notification and alert preferences for applications and users.
 * @subpackage Structs
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta information extracted from the WSDL
     * - documentation: Specifies application-level event preferences that have been enabled, including the URL to which notifications should be delivered and whether notifications should be enabled or disabled (although the
     * <b>UserDeliveryPreferenceArray</b> input property specifies specific notification subscriptions).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences = null;
    /**
     * The UserDeliveryPreferenceArray
     * Meta information extracted from the WSDL
     * - documentation: Specifies events and whether or not they are enabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $UserDeliveryPreferenceArray = null;
    /**
     * The UserData
     * Meta information extracted from the WSDL
     * - documentation: Specifies user data for notification settings, such as mobile phone number.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationUserDataType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NotificationUserDataType $UserData = null;
    /**
     * The EventProperty
     * Meta information extracted from the WSDL
     * - documentation: Characteristics or details of an event such as type, name and value. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]
     */
    protected array $EventProperty = [];
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of
     * ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURLName = null;
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
    public function __construct(?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, ?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, ?\macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null, array $eventProperty = [], ?string $deliveryURLName = null)
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
    public function getApplicationDeliveryPreferences(): ?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
    {
        return $this->ApplicationDeliveryPreferences;
    }
    /**
     * Set ApplicationDeliveryPreferences value
     * @param \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setApplicationDeliveryPreferences(?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null): self
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
        
        return $this;
    }
    /**
     * Get UserDeliveryPreferenceArray value
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType|null
     */
    public function getUserDeliveryPreferenceArray(): ?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
    {
        return $this->UserDeliveryPreferenceArray;
    }
    /**
     * Set UserDeliveryPreferenceArray value
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setUserDeliveryPreferenceArray(?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null): self
    {
        $this->UserDeliveryPreferenceArray = $userDeliveryPreferenceArray;
        
        return $this;
    }
    /**
     * Get UserData value
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType|null
     */
    public function getUserData(): ?\macropage\ebaysdk\trading\StructType\NotificationUserDataType
    {
        return $this->UserData;
    }
    /**
     * Set UserData value
     * @param \macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setUserData(?\macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null): self
    {
        $this->UserData = $userData;
        
        return $this;
    }
    /**
     * Get EventProperty value
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]
     */
    public function getEventProperty(): array
    {
        return $this->EventProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setEventProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventPropertyForArrayConstraintsFromSetEventProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setNotificationPreferencesRequestTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$setNotificationPreferencesRequestTypeEventPropertyItem instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
                $invalidValues[] = is_object($setNotificationPreferencesRequestTypeEventPropertyItem) ? get_class($setNotificationPreferencesRequestTypeEventPropertyItem) : sprintf('%s(%s)', gettype($setNotificationPreferencesRequestTypeEventPropertyItem), var_export($setNotificationPreferencesRequestTypeEventPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EventProperty property can only contain items of type \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EventProperty value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[] $eventProperty
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function setEventProperty(array $eventProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($eventPropertyArrayErrorMessage = self::validateEventPropertyForArrayConstraintsFromSetEventProperty($eventProperty))) {
            throw new InvalidArgumentException($eventPropertyArrayErrorMessage, __LINE__);
        }
        $this->EventProperty = $eventProperty;
        
        return $this;
    }
    /**
     * Add item to EventProperty value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType $item
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
     */
    public function addToEventProperty(\macropage\ebaysdk\trading\StructType\NotificationEventPropertyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
            throw new InvalidArgumentException(sprintf('The EventProperty property can only contain items of type \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EventProperty[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType
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
}
