<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupOptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>PickupOptions</strong> container, which consists of a pickup method and the priority of the pickup method. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and
 * Click and Collect features are generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PickupOptionsType extends AbstractStructBase
{
    /**
     * The PickupMethod
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates an available pickup method. This field is always returned with the <strong>PickupOptions</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, 'InStorePickup' and
     * 'PickUpDropOff' are the only available pickup methods; however, additional pickup methods may be added to the list in future releases. </span> <br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or
     * Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to
     * large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PickupMethod;
    /**
     * The PickupPriority
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and
     * Checkout page. This field is always returned with the <strong>PickupOptions</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item
     * that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID -
     * 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PickupPriority;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupOptionsType
     * @uses PickupOptionsType::setPickupMethod()
     * @uses PickupOptionsType::setPickupPriority()
     * @uses PickupOptionsType::setAny()
     * @param string $pickupMethod
     * @param int $pickupPriority
     * @param \DOMDocument $any
     */
    public function __construct($pickupMethod = null, $pickupPriority = null, \DOMDocument $any = null)
    {
        $this
            ->setPickupMethod($pickupMethod)
            ->setPickupPriority($pickupPriority)
            ->setAny($any);
    }
    /**
     * Get PickupMethod value
     * @return string|null
     */
    public function getPickupMethod()
    {
        return $this->PickupMethod;
    }
    /**
     * Set PickupMethod value
     * @param string $pickupMethod
     * @return \macropage\ebaysdk\trading\StructType\PickupOptionsType
     */
    public function setPickupMethod($pickupMethod = null)
    {
        // validation for constraint: string
        if (!is_null($pickupMethod) && !is_string($pickupMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupMethod)), __LINE__);
        }
        $this->PickupMethod = $pickupMethod;
        return $this;
    }
    /**
     * Get PickupPriority value
     * @return int|null
     */
    public function getPickupPriority()
    {
        return $this->PickupPriority;
    }
    /**
     * Set PickupPriority value
     * @param int $pickupPriority
     * @return \macropage\ebaysdk\trading\StructType\PickupOptionsType
     */
    public function setPickupPriority($pickupPriority = null)
    {
        // validation for constraint: int
        if (!is_null($pickupPriority) && !is_numeric($pickupPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pickupPriority)), __LINE__);
        }
        $this->PickupPriority = $pickupPriority;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PickupOptionsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PickupOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\PickupOptionsType
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
