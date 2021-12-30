<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationPreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the requesting application's notification preferences. <b>GetNotificationPreferences</b> retrieves preferences that you have deliberately set. For example, if you enable the <b>EndOfAuction</b> event and then later disable
 * it, the response shows the <b>EndOfAuction</b> event preference as <b>Disabled</b>. But if you have never set a preference for the <b>EndOfAuction</b> event, no <b>EndOfAuction</b> preference is returned at all.
 * @subpackage Structs
 */
class GetNotificationPreferencesResponseType extends AbstractResponseType
{
    /**
     * The ApplicationDeliveryPreferences
     * Meta information extracted from the WSDL
     * - documentation: Specifies application-based event preferences that have been enabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences = null;
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: Specifies application delivery URL Name associated with this user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURLName = null;
    /**
     * The UserDeliveryPreferenceArray
     * Meta information extracted from the WSDL
     * - documentation: Specifies user-based event preferences that have been enabled or disabled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $UserDeliveryPreferenceArray = null;
    /**
     * The UserData
     * Meta information extracted from the WSDL
     * - documentation: Returns user data for notification settings, such as set mobile phone.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationUserDataType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NotificationUserDataType $UserData = null;
    /**
     * The EventProperty
     * Meta information extracted from the WSDL
     * - documentation: Contains names and values assigned to a notification event. Currently can only be set for wireless applications.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType[]
     */
    protected ?array $EventProperty = null;
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
    public function __construct(?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null, ?string $deliveryURLName = null, ?\macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType $userDeliveryPreferenceArray = null, ?\macropage\ebaysdk\trading\StructType\NotificationUserDataType $userData = null, ?array $eventProperty = null)
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
    public function getApplicationDeliveryPreferences(): ?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
    {
        return $this->ApplicationDeliveryPreferences;
    }
    /**
     * Set ApplicationDeliveryPreferences value
     * @param \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
     */
    public function setApplicationDeliveryPreferences(?\macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences = null): self
    {
        $this->ApplicationDeliveryPreferences = $applicationDeliveryPreferences;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
    public function getEventProperty(): ?array
    {
        return $this->EventProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setEventProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventPropertyForArrayConstraintsFromSetEventProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getNotificationPreferencesResponseTypeEventPropertyItem) {
            // validation for constraint: itemType
            if (!$getNotificationPreferencesResponseTypeEventPropertyItem instanceof \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType) {
                $invalidValues[] = is_object($getNotificationPreferencesResponseTypeEventPropertyItem) ? get_class($getNotificationPreferencesResponseTypeEventPropertyItem) : sprintf('%s(%s)', gettype($getNotificationPreferencesResponseTypeEventPropertyItem), var_export($getNotificationPreferencesResponseTypeEventPropertyItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
     */
    public function setEventProperty(?array $eventProperty = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesResponseType
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
}
