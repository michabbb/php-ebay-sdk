<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationDeliveryPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>ApplicationDeliveryPreferences</b> container to control/indicate where and how Platform Notifications and/or Client Alerts are delivered to a user application, server, and/or email address.
 * @subpackage Structs
 */
class ApplicationDeliveryPreferencesType extends AbstractStructBase
{
    /**
     * The ApplicationURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to which eBay delivers all Platform Notifications and Client Alerts sent to the application. For delivery to a server, the URL begins with "<code>http://</code>" or "<code>https://</code>" and must be well formed. For
     * delivery to an email address, the URL begins with ""<code>mailto://</code>" and specifies a valid email address.
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationURL;
    /**
     * The ApplicationEnable
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the user to enable or disable Platform Notifications and Client Alerts. Notice that disabling Platform Notifications and Client Alerts will not affect others preferences set in this container.
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationEnable;
    /**
     * The AlertEmail
     * Meta informations extracted from the WSDL
     * - documentation: The email address to which eBay sends all application markup and markdown event notifications. When setting the email address, input must be in the format "<code>mailto://youremailaddress@yoursite.com</code>". Note that the
     * <b>AlertEnable</b> field must be set to <code>Enable</code> for alert emails to be sent.
     * - minOccurs: 0
     * @var string
     */
    public $AlertEmail;
    /**
     * The AlertEnable
     * Meta informations extracted from the WSDL
     * - documentation: <b>For SetNotificationPreferences</b>: include and set <b>AlertEnable</b> to <code>Enable</code> to receive application markup and markdown alerts, or set to <code>Disable</code> to disable the alerts. If not included, the
     * <b>AlertEnable</b> defaults to its current value. <br/><br/> <b>For GetNotificationPreferences</b>: this field's value indicates whether application markup and markdown alerts are enabled or disabled.
     * - minOccurs: 0
     * @var string
     */
    public $AlertEnable;
    /**
     * The NotificationPayloadType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated and should no longer be used.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationPayloadType;
    /**
     * The DeviceType
     * Meta informations extracted from the WSDL
     * - documentation: The means of receipt of notification. In most cases, it is Platform (typical API calls and web interaction), so this is the default, if not specified. For wireless applications, use SMS. Do not test Client Alerts in production if you
     * are currently using Platform Notifications.
     * - minOccurs: 0
     * @var string
     */
    public $DeviceType;
    /**
     * The PayloadVersion
     * Meta informations extracted from the WSDL
     * - documentation: Use this field to specify the API version for all notifications for the calling application. If you do not specify PayloadVersion in SetNotificationPreferences, the API version for notifications will be based on the API version
     * specified in your SetNotificationPreferences call.
     * - minOccurs: 0
     * @var string
     */
    public $PayloadVersion;
    /**
     * The DeliveryURLDetails
     * Meta informations extracted from the WSDL
     * - documentation: Defines settings for notification URLs (including the URL name in DeliveryURLName). You define settings for up to 25 notification URLs (including the URL name in DeliveryURLName) in separate DeliveryURLDetails containers. Associate a
     * user token with notification URLs by using the token in a SetNotificationPreferences request that specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use comma-separated format to specify multiple URL names in
     * SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[]
     */
    public $DeliveryURLDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($applicationURL = null, $applicationEnable = null, $alertEmail = null, $alertEnable = null, $notificationPayloadType = null, $deviceType = null, $payloadVersion = null, array $deliveryURLDetails = array(), \DOMDocument $any = null)
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
    public function getApplicationURL()
    {
        return $this->ApplicationURL;
    }
    /**
     * Set ApplicationURL value
     * @param string $applicationURL
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setApplicationURL($applicationURL = null)
    {
        // validation for constraint: string
        if (!is_null($applicationURL) && !is_string($applicationURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationURL)), __LINE__);
        }
        $this->ApplicationURL = $applicationURL;
        return $this;
    }
    /**
     * Get ApplicationEnable value
     * @return string|null
     */
    public function getApplicationEnable()
    {
        return $this->ApplicationEnable;
    }
    /**
     * Set ApplicationEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $applicationEnable
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setApplicationEnable($applicationEnable = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($applicationEnable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $applicationEnable, implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->ApplicationEnable = $applicationEnable;
        return $this;
    }
    /**
     * Get AlertEmail value
     * @return string|null
     */
    public function getAlertEmail()
    {
        return $this->AlertEmail;
    }
    /**
     * Set AlertEmail value
     * @param string $alertEmail
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setAlertEmail($alertEmail = null)
    {
        // validation for constraint: string
        if (!is_null($alertEmail) && !is_string($alertEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertEmail)), __LINE__);
        }
        $this->AlertEmail = $alertEmail;
        return $this;
    }
    /**
     * Get AlertEnable value
     * @return string|null
     */
    public function getAlertEnable()
    {
        return $this->AlertEnable;
    }
    /**
     * Set AlertEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $alertEnable
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setAlertEnable($alertEnable = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($alertEnable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $alertEnable, implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->AlertEnable = $alertEnable;
        return $this;
    }
    /**
     * Get NotificationPayloadType value
     * @return string|null
     */
    public function getNotificationPayloadType()
    {
        return $this->NotificationPayloadType;
    }
    /**
     * Set NotificationPayloadType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationPayloadType
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setNotificationPayloadType($notificationPayloadType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::valueIsValid($notificationPayloadType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationPayloadType, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationPayloadTypeCodeType::getValidValues())), __LINE__);
        }
        $this->NotificationPayloadType = $notificationPayloadType;
        return $this;
    }
    /**
     * Get DeviceType value
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }
    /**
     * Set DeviceType value
     * @uses \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deviceType
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setDeviceType($deviceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::valueIsValid($deviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deviceType, implode(', ', \macropage\ebaysdk\trading\EnumType\DeviceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DeviceType = $deviceType;
        return $this;
    }
    /**
     * Get PayloadVersion value
     * @return string|null
     */
    public function getPayloadVersion()
    {
        return $this->PayloadVersion;
    }
    /**
     * Set PayloadVersion value
     * @param string $payloadVersion
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setPayloadVersion($payloadVersion = null)
    {
        // validation for constraint: string
        if (!is_null($payloadVersion) && !is_string($payloadVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payloadVersion)), __LINE__);
        }
        $this->PayloadVersion = $payloadVersion;
        return $this;
    }
    /**
     * Get DeliveryURLDetails value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[]|null
     */
    public function getDeliveryURLDetails()
    {
        return $this->DeliveryURLDetails;
    }
    /**
     * Set DeliveryURLDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType[] $deliveryURLDetails
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function setDeliveryURLDetails(array $deliveryURLDetails = array())
    {
        foreach ($deliveryURLDetails as $applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) {
            // validation for constraint: itemType
            if (!$applicationDeliveryPreferencesTypeDeliveryURLDetailsItem instanceof \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType) {
                throw new \InvalidArgumentException(sprintf('The DeliveryURLDetails property can only contain items of \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType, "%s" given', is_object($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) ? get_class($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem) : gettype($applicationDeliveryPreferencesTypeDeliveryURLDetailsItem)), __LINE__);
            }
        }
        $this->DeliveryURLDetails = $deliveryURLDetails;
        return $this;
    }
    /**
     * Add item to DeliveryURLDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
     */
    public function addToDeliveryURLDetails(\macropage\ebaysdk\trading\StructType\DeliveryURLDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType) {
            throw new \InvalidArgumentException(sprintf('The DeliveryURLDetails property can only contain items of \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryURLDetails[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\ApplicationDeliveryPreferencesType
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
