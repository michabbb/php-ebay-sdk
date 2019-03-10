<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalDeliverySelectedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>DigitalDeliverySelected</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DigitalDeliverySelected</b> container is only applicable and returned if the buyer
 * purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift.
 * @subpackage Structs
 */
class DigitalDeliverySelectedType extends AbstractStructBase
{
    /**
     * The DeliveryMethod
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryMethod;
    /**
     * The DeliveryStatus
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryStatusType
     */
    public $DeliveryStatus;
    /**
     * The DeliveryDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is
     * buying a digital gift card and giving that gift card to another person.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
     */
    public $DeliveryDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DigitalDeliverySelectedType
     * @uses DigitalDeliverySelectedType::setDeliveryMethod()
     * @uses DigitalDeliverySelectedType::setDeliveryStatus()
     * @uses DigitalDeliverySelectedType::setDeliveryDetails()
     * @uses DigitalDeliverySelectedType::setAny()
     * @param string $deliveryMethod
     * @param \macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus
     * @param \macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails
     * @param \DOMDocument $any
     */
    public function __construct($deliveryMethod = null, \macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus = null, \macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveryMethod($deliveryMethod)
            ->setDeliveryStatus($deliveryStatus)
            ->setDeliveryDetails($deliveryDetails)
            ->setAny($any);
    }
    /**
     * Get DeliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod()
    {
        return $this->DeliveryMethod;
    }
    /**
     * Set DeliveryMethod value
     * @param string $deliveryMethod
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryMethod($deliveryMethod = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryMethod)), __LINE__);
        }
        $this->DeliveryMethod = $deliveryMethod;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryStatusType|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @param \macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryStatus(\macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus = null)
    {
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get DeliveryDetails value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType|null
     */
    public function getDeliveryDetails()
    {
        return $this->DeliveryDetails;
    }
    /**
     * Set DeliveryDetails value
     * @param \macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryDetails(\macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails = null)
    {
        $this->DeliveryDetails = $deliveryDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
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
