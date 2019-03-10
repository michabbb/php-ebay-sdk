<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupInStoreDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type defining the <b>PickupInStoreDetails</b> container, that is used in Add/Revise/Relist calls to enable the listing for In-Store Pickup or Click and Collect. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At
 * this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. The Click and Collect feature is only available to large merchants on the UK (site ID
 * - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. </span>
 * @subpackage Structs
 */
class PickupInStoreDetailsType extends AbstractStructBase
{
    /**
     * The EligibleForPickupInStore
     * Meta informations extracted from the WSDL
     * - documentation: This field is used in <b>Add/Revise/Relist/Verify</b> calls to enable the listing for In-Store Pickup. To enable the listing for In-Store Pickup, the seller includes this boolean field and sets its value to <code>true</code>. A
     * seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to
     * multiple-quantity, fixed-price listings. <br/><br/> In addition to setting the <b>EligibleForPickupInStore</b> boolean field to <code>true</code>, the merchant must also perform the following actions in an <b>Add/Revise/Relist/Verify</b> call to
     * enable the In-Store Pickup option on a multiple-quantity, fixed-price listing: <ul> <li>Have inventory for the product at one or more physical stores tied to the seller's account. By using the REST-based <b>Inventory API</b>, sellers can associate
     * physical stores to their account by using the <b>Create Inventory Location</b> call, and then, using the <b>Create Inventory Item</b> call, they can add inventory to specific stores;</li> <li>Include the seller-defined SKU value of the product(s) in
     * the call request. For a single-variation listing, the SKU value would be specified in the <b>Item.SKU</b> field, and for a multiple-variation listing, the SKU value(s) would be specified in the <b>Item.Variations.Variation.SKU</b> field(s);</li>
     * <li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: <ul> <li>Include the <b>Item.AutoPay</b> flag in the call request and set its value to <code>true</code>;</li> <li>Include only one
     * <b>Item.PaymentMethods</b> field in the call request and set its value to '<code>PayPal</code>;</li> <li>Include a valid PayPal payment address in the <b>Item.PayPalEmailAddress</b> field.</li> </ul> </li> </ul> When a seller is successful at listing
     * an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the "Available for In-Store Pickup" option on the listing, along
     * with information on the closest store that has the item. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the
     * In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForPickupInStore;
    /**
     * The EligibleForPickupDropOff
     * Meta informations extracted from the WSDL
     * - documentation: For 'Click and Collect' eligible sellers, this field was once used to set 'Click and Collect' eligibility at the listing level. However, now the seller can only opt in to 'Click and Collect' at the account level, and then each of
     * their listings will be automatically evaluated for 'Click and Collect' eligibility. <br/><br/> <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be
     * used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is available for the 'Click and Collect' logistics type. Instead,
     * the <b>Item.AvailableForPickupDropOff</b> field should be referenced. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForPickupDropOff;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupInStoreDetailsType
     * @uses PickupInStoreDetailsType::setEligibleForPickupInStore()
     * @uses PickupInStoreDetailsType::setEligibleForPickupDropOff()
     * @uses PickupInStoreDetailsType::setAny()
     * @param bool $eligibleForPickupInStore
     * @param bool $eligibleForPickupDropOff
     * @param \DOMDocument $any
     */
    public function __construct($eligibleForPickupInStore = null, $eligibleForPickupDropOff = null, \DOMDocument $any = null)
    {
        $this
            ->setEligibleForPickupInStore($eligibleForPickupInStore)
            ->setEligibleForPickupDropOff($eligibleForPickupDropOff)
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
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
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
     * Get EligibleForPickupDropOff value
     * @return bool|null
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->EligibleForPickupDropOff;
    }
    /**
     * Set EligibleForPickupDropOff value
     * @param bool $eligibleForPickupDropOff
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForPickupDropOff) && !is_bool($eligibleForPickupDropOff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleForPickupDropOff)), __LINE__);
        }
        $this->EligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
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
