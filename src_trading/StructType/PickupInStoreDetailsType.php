<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupInStoreDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type defining the <b>PickupInStoreDetails</b> container, that is used in Add/Revise/Relist calls to enable the listing for In-Store Pickup or Click and Collect. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At
 * this time, In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces, and can only be applied to multiple-quantity, fixed-price listings. The
 * Click and Collect feature is only available to large merchants on the UK, Australia, and Germany marketplaces. </span>
 * @subpackage Structs
 */
class PickupInStoreDetailsType extends AbstractStructBase
{
    /**
     * The EligibleForPickupInStore
     * Meta information extracted from the WSDL
     * - documentation: <b>For Add/Revise/Relist/Verify calls</b>: this field is included to enable the listing for In-Store Pickup. To enable the listing for In-Store Pickup, the seller includes this boolean field and sets its value to <code>true</code>.
     * In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces. The In-Store Pickup feature can only be applied to multiple-quantity, fixed-price
     * listings. <br/><br/> In addition to setting the <b>EligibleForPickupInStore</b> boolean field to <code>true</code>, the merchant must also perform the following actions in an <b>Add/Revise/Relist/Verify</b> call to enable the In-Store Pickup option
     * on a multiple-quantity, fixed-price listing: <ul> <li>Have inventory for the product at one or more physical stores tied to the seller's account. By using the REST-based <b>Inventory API</b>, sellers can associate physical stores to their account by
     * using the <b>Create Inventory Location</b> call, and then, using the <b>Create Inventory Item</b> call, they can add inventory to specific stores;</li> <li>Include the seller-defined SKU value of the product(s) in the call request. For a
     * single-variation listing, the SKU value would be specified in the <b>Item.SKU</b> field, and for a multiple-variation listing, the SKU value(s) would be specified in the <b>Item.Variations.Variation.SKU</b> field(s);</li> <li>Set an immediate payment
     * requirement on the item. </li> </ul> When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available)
     * will see the "Available for In-Store Pickup" option on the listing, along with information on the closest store that has the item. <br/><br/> This field is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature. <br/>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleForPickupInStore = null;
    /**
     * The EligibleForPickupDropOff
     * Meta information extracted from the WSDL
     * - documentation: For sellers opted in to Click and Collect, this field was once used to set Click and Collect eligibility at the listing level. However, now the seller can only opt in to Click and Collect at the account level, and then each of their
     * listings will be automatically evaluated by eBay for Click and Collect eligibility. <br/><br/> <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be
     * used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is actually available for the Click and Collect fulfillment method.
     * Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the listing actually has inventory that is available for pickup via the Click and Collect fulfillment method. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleForPickupDropOff = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PickupInStoreDetailsType
     * @uses PickupInStoreDetailsType::setEligibleForPickupInStore()
     * @uses PickupInStoreDetailsType::setEligibleForPickupDropOff()
     * @uses PickupInStoreDetailsType::setAny()
     * @param bool $eligibleForPickupInStore
     * @param bool $eligibleForPickupDropOff
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $eligibleForPickupInStore = null, ?bool $eligibleForPickupDropOff = null, $any = null)
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
    public function getEligibleForPickupInStore(): ?bool
    {
        return $this->EligibleForPickupInStore;
    }
    /**
     * Set EligibleForPickupInStore value
     * @param bool $eligibleForPickupInStore
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
     */
    public function setEligibleForPickupInStore(?bool $eligibleForPickupInStore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForPickupInStore) && !is_bool($eligibleForPickupInStore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleForPickupInStore, true), gettype($eligibleForPickupInStore)), __LINE__);
        }
        $this->EligibleForPickupInStore = $eligibleForPickupInStore;
        
        return $this;
    }
    /**
     * Get EligibleForPickupDropOff value
     * @return bool|null
     */
    public function getEligibleForPickupDropOff(): ?bool
    {
        return $this->EligibleForPickupDropOff;
    }
    /**
     * Set EligibleForPickupDropOff value
     * @param bool $eligibleForPickupDropOff
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
     */
    public function setEligibleForPickupDropOff(?bool $eligibleForPickupDropOff = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForPickupDropOff) && !is_bool($eligibleForPickupDropOff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleForPickupDropOff, true), gettype($eligibleForPickupDropOff)), __LINE__);
        }
        $this->EligibleForPickupDropOff = $eligibleForPickupDropOff;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
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
