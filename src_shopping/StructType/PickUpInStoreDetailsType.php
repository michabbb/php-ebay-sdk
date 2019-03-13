<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickUpInStoreDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type defining the <b>PickupInStoreDetails</b> container, that is returned in <b>GetShippingCosts</b> if the In-Store Pickup option is enabled for the listing. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this
 * time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PickUpInStoreDetailsType extends AbstractStructBase
{
    /**
     * The EligibleForPickupInStore
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned (as <code>true</code>) if the listing is enabled for In-Store Pickup. A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the
     * In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings. <br/><br/> When a seller is successful at listing an item with the In-Store Pickup feature enabled,
     * prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the "Available for In-Store Pickup" option on the View Item page, along with information on the closest phsical store
     * that has the item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForPickupInStore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickUpInStoreDetailsType
     * @uses PickUpInStoreDetailsType::setEligibleForPickupInStore()
     * @uses PickUpInStoreDetailsType::setAny()
     * @param bool $eligibleForPickupInStore
     * @param \DOMDocument $any
     */
    public function __construct($eligibleForPickupInStore = null, \DOMDocument $any = null)
    {
        $this
            ->setEligibleForPickupInStore($eligibleForPickupInStore)
            ->setAny($any);
    }
    /**
     * Get EligibleForPickupInStore value
     * @return bool|null
     */
    public function getEligibleForPickupInStore()
    {
        return $this->EligibleForPickupInStore;
    }
    /**
     * Set EligibleForPickupInStore value
     * @param bool $eligibleForPickupInStore
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
     */
    public function setEligibleForPickupInStore($eligibleForPickupInStore = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForPickupInStore) && !is_bool($eligibleForPickupInStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleForPickupInStore)), __LINE__);
        }
        $this->EligibleForPickupInStore = $eligibleForPickupInStore;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
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
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
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
