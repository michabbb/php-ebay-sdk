<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryURLDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * @subpackage Structs
 */
class DeliveryURLDetailType extends AbstractStructBase
{
    /**
     * The DeliveryURLName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a notification delivery URL. You can list up to 25 instances of DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma- separated format in the DeliveryURLName element outside of
     * ApplicationDeliveryPreferences.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURLName;
    /**
     * The DeliveryURL
     * Meta informations extracted from the WSDL
     * - documentation: The address of a notification delivery URL. This address applies to the DeliveryURLName within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. For delivery to a server, the URL begins with http:// or https://
     * and must be well formed. Use a URL that is functional at the time of the call. For delivery to an email address, the URL begins with mailto: and specifies a valid email address.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryURL;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The status of a notification delivery URL. This status applies to the DeliveryURLName and delivery URL within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. If the status is disabled, then notifications will
     * not be sent to the delivery URL.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DeliveryURLDetailType
     * @uses DeliveryURLDetailType::setDeliveryURLName()
     * @uses DeliveryURLDetailType::setDeliveryURL()
     * @uses DeliveryURLDetailType::setStatus()
     * @uses DeliveryURLDetailType::setAny()
     * @param string $deliveryURLName
     * @param string $deliveryURL
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($deliveryURLName = null, $deliveryURL = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveryURLName($deliveryURLName)
            ->setDeliveryURL($deliveryURL)
            ->setStatus($status)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
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
