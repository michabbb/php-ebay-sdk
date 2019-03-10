<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <strong>PickupDetails</strong> container, which contains an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority.
 * <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
 * In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites. </span>
 * @subpackage Structs
 */
class PickupDetailsType extends AbstractStructBase
{
    /**
     * The PickupOptions
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View
     * Item and Checkout page. <br/><br/> This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in
     * the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the
     * response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only
     * available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupOptionsType[]
     */
    public $PickupOptions;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupDetailsType
     * @uses PickupDetailsType::setPickupOptions()
     * @uses PickupDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PickupOptionsType[] $pickupOptions
     * @param \DOMDocument $any
     */
    public function __construct(array $pickupOptions = array(), \DOMDocument $any = null)
    {
        $this
            ->setPickupOptions($pickupOptions)
            ->setAny($any);
    }
    /**
     * Get PickupOptions value
     * @return \macropage\ebaysdk\trading\StructType\PickupOptionsType[]|null
     */
    public function getPickupOptions()
    {
        return $this->PickupOptions;
    }
    /**
     * Set PickupOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PickupOptionsType[] $pickupOptions
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType
     */
    public function setPickupOptions(array $pickupOptions = array())
    {
        foreach ($pickupOptions as $pickupDetailsTypePickupOptionsItem) {
            // validation for constraint: itemType
            if (!$pickupDetailsTypePickupOptionsItem instanceof \macropage\ebaysdk\trading\StructType\PickupOptionsType) {
                throw new \InvalidArgumentException(sprintf('The PickupOptions property can only contain items of \macropage\ebaysdk\trading\StructType\PickupOptionsType, "%s" given', is_object($pickupDetailsTypePickupOptionsItem) ? get_class($pickupDetailsTypePickupOptionsItem) : gettype($pickupDetailsTypePickupOptionsItem)), __LINE__);
            }
        }
        $this->PickupOptions = $pickupOptions;
        return $this;
    }
    /**
     * Add item to PickupOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PickupOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType
     */
    public function addToPickupOptions(\macropage\ebaysdk\trading\StructType\PickupOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PickupOptionsType) {
            throw new \InvalidArgumentException(sprintf('The PickupOptions property can only contain items of \macropage\ebaysdk\trading\StructType\PickupOptionsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PickupOptions[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PickupDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType
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
