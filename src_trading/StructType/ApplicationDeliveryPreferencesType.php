<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationDeliveryPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ApplicationDeliveryPreferences</b> container to control/indicate where and how Platform Notifications and/or Client Alerts are delivered to a user application, server, and/or email address.
 * @subpackage Structs
 */
class ApplicationDeliveryPreferencesType extends AbstractStructBase
{
    /**
     * The ApplicationURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to which eBay delivers all Platform Notifications and Client Alerts sent to the application. For delivery to a server, the URL must begin with "<code>https://</code>" and must be well formed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApplicationURL = null;
    /**
     * The ApplicationEnable
     * Meta information extracted from the WSDL
     * - documentation: This field allows the user to enable or disable Platform Notifications and Client Alerts. Notice that disabling Platform Notifications and Client Alerts will not affect others preferences set in this container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApplicationEnable = null;
    /**
     * The AlertEmail
     * Meta information extracted from the WSDL
     * - documentation: The email address to which eBay sends all application markup and markdown event notifications. When setting the email address, input must be in the format "<code>mailto://youremailaddress@yoursite.com</code>". Note that the
     * <b>AlertEnable</b> field must be set to <code>Enable</code> for alert emails to be sent.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AlertEmail = null;
    /**
     * The AlertEnable
     * Meta information extracted from the WSDL
     * - documentation: <b>For SetNotificationPreferences</b>: include and set <b>AlertEnable</b> to <code>Enable</code> to receive application markup and markdown alerts, or set to <code>Disable</code> to disable the alerts. If not included, the
     * <b>AlertEnable</b> defaults to its current value. <br/><br/> <b>For GetNotificationPreferences</b>: this field's value indicates whether application markup and markdown alerts are enabled or disabled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AlertEnable = null;
    /**
     * The NotificationPayloadType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated and should no longer be used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotificationPayloadType = null;
    /**
     * The DeviceType
     * Meta information extracted from the WSDL
     * - documentation: The means of receipt of notification. In most cases, it is Platform (typical API calls and web interaction), so this is the default, if not specified. For wireless applications, use SMS. Do not test Client Alerts in production if you
     * are currently using Platform Notifications.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeviceType = null;
    /**
     * The PayloadVersion
     * Meta information extracted from the WSDL
     * - documentation: Use this field to specify the API version for all notifications for the calling application. If you do not specify PayloadVersion in SetNotificationPreferences, the API version for notifications will be based on the API version
     * specified in your SetNotificationPreferences call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayloadVersion = null;
    /**
     * The DeliveryURLDetails
     * Meta information extracted from the WSDL
     * - documentation: Defines settings for notification URLs (including the URL name in DeliveryURLName). You define settings for up to 25 notification URLs (including the URL name in DeliveryURLName) in separate DeliveryURLDetails containers. Associate a
     * user token with notification URLs by using the token in a SetNotificationPreferences request that specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use comma-separated format to specify multiple URL names in
     * SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[]
     */
    protected array $DeliveryURLDetails = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ApplicationDeliveryPreferencesType
     * @uses ApplicationDeliveryPreferencesType::setApplicationURL()
     * @uses ApplicationDeliveryPreferencesType::setApplicationEnable()
     * @uses ApplicationDeliveryPreferencesType::setAlertEmail()
     * @uses ApplicationDeliveryPreferencesType::setAlertEnable()
     * @uses ApplicationDeliveryPreferencesType::setNotificationPayloadType()
     * @uses ApplicationDeliveryPreferencesType::setDeviceType()
     * @uses ApplicationDeliveryPreferencesType::setPayloadVersion()
     * @uses ApplicationDeliveryPreferencesType::setDeliveryURLDetails()
     * @uses ApplicationDeliveryPreferencesType::setAny()
     * @param string $applicationURL
     * @param string $applicationEnable
     * @param string $alertEmail
     * @param string $alertEnable
     * @param string $notificationPayloadType
     * @param string $deviceType
     * @param string $payloadVersion
     * @param \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[] $deliveryURLDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $applicationURL = null, ?string $applicationEnable = null, ?string $alertEmail = null, ?string $alertEnable = null, ?string $notificationPayloadType = null, ?string $deviceType = null, ?string $payloadVersion = null, array $deliveryURLDetails = [], $any = null)
    {
        $this
            ->setApplicationURL($applicationURL)
            ->setApplicationEnable($applicationEnable)
            ->setAlertEmail($alertEmail)
            ->setAlertEnable($alertEnable)
            ->setNotificationPayloadType($notificationPayloadType)
            ->setDeviceType($deviceType)
            ->setPayloadVersion($payloadVersion)
            ->setDeliveryURLDetails($deliveryURLDetails)
            ->setAny($any);
    }
    /**
     * Get ApplicationURL value
     * @return string|null
     */
    public function getApplicationURL(): ?string
    {
        return $this->ApplicationURL;
    }
    /**
     * Set ApplicationURL value
     * @param string $applicationURL
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setApplicationURL(?string $applicationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationURL) && !is_string($applicationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationURL, true), gettype($applicationURL)), __LINE__);
        }
        $this->ApplicationURL = $applicationURL;
        
        return $this;
    }
    /**
     * Get ApplicationEnable value
     * @return string|null
     */
    public function getApplicationEnable(): ?string
    {
        return $this->ApplicationEnable;
    }
    /**
     * Set ApplicationEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $applicationEnable
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setApplicationEnable(?string $applicationEnable = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($applicationEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EnableCodeType', is_array($applicationEnable) ? implode(', ', $applicationEnable) : var_export($applicationEnable, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->ApplicationEnable = $applicationEnable;
        
        return $this;
    }
    /**
     * Get AlertEmail value
     * @return string|null
     */
    public function getAlertEmail(): ?string
    {
        return $this->AlertEmail;
    }
    /**
     * Set AlertEmail value
     * @param string $alertEmail
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setAlertEmail(?string $alertEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($alertEmail) && !is_string($alertEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alertEmail, true), gettype($alertEmail)), __LINE__);
        }
        $this->AlertEmail = $alertEmail;
        
        return $this;
    }
    /**
     * Get AlertEnable value
     * @return string|null
     */
    public function getAlertEnable(): ?string
    {
        return $this->AlertEnable;
    }
    /**
     * Set AlertEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $alertEnable
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setAlertEnable(?string $alertEnable = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($alertEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EnableCodeType', is_array($alertEnable) ? implode(', ', $alertEnable) : var_export($alertEnable, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->AlertEnable = $alertEnable;
        
        return $this;
    }
    /**
     * Get NotificationPayloadType value
     * @return string|null
     */
    public function getNotificationPayloadType(): ?string
    {
        return $this->NotificationPayloadType;
    }
    /**
     * Set NotificationPayloadType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $notificationPayloadType
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setNotificationPayloadType(?string $notificationPayloadType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::valueIsValid($notificationPayloadType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType', is_array($notificationPayloadType) ? implode(', ', $notificationPayloadType) : var_export($notificationPayloadType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::getValidValues())), __LINE__);
        }
        $this->NotificationPayloadType = $notificationPayloadType;
        
        return $this;
    }
    /**
     * Get DeviceType value
     * @return string|null
     */
    public function getDeviceType(): ?string
    {
        return $this->DeviceType;
    }
    /**
     * Set DeviceType value
     * @uses \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deviceType
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setDeviceType(?string $deviceType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::valueIsValid($deviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType', is_array($deviceType) ? implode(', ', $deviceType) : var_export($deviceType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DeviceType = $deviceType;
        
        return $this;
    }
    /**
     * Get PayloadVersion value
     * @return string|null
     */
    public function getPayloadVersion(): ?string
    {
        return $this->PayloadVersion;
    }
    /**
     * Set PayloadVersion value
     * @param string $payloadVersion
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setPayloadVersion(?string $payloadVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($payloadVersion) && !is_string($payloadVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payloadVersion, true), gettype($payloadVersion)), __LINE__);
        }
        $this->PayloadVersion = $payloadVersion;
        
        return $this;
    }
    /**
     * Get DeliveryURLDetails value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[]
     */
    public function getDeliveryURLDetails(): array
    {
        return $this->DeliveryURLDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setDeliveryURLDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryURLDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeliveryURLDetailsForArrayConstraintsFromSetDeliveryURLDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) {
            // validation for constraint: itemType
            if (!$applicationDeliveryPreferencesTypeDeliveryURLDetailsItem instanceof \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType) {
                $invalidValues[] = is_object($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) ? get_class($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) : sprintf('%s(%s)', gettype($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem), var_export($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeliveryURLDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeliveryURLDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[] $deliveryURLDetails
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setDeliveryURLDetails(array $deliveryURLDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($deliveryURLDetailsArrayErrorMessage = self::validateDeliveryURLDetailsForArrayConstraintsFromSetDeliveryURLDetails($deliveryURLDetails))) {
            throw new InvalidArgumentException($deliveryURLDetailsArrayErrorMessage, __LINE__);
        }
        $this->DeliveryURLDetails = $deliveryURLDetails;
        
        return $this;
    }
    /**
     * Add item to DeliveryURLDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function addToDeliveryURLDetails(\macropage\ebaysdk\trading\StructType\DeliveryURLDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType) {
            throw new InvalidArgumentException(sprintf('The DeliveryURLDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeliveryURLDetails[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
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
