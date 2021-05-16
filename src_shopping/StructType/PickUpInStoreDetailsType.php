<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickUpInStoreDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type defining the <b>PickupInStoreDetails</b> container, that is returned in <b>GetShippingCosts</b> if the listing is eligible for the In-Store Pickup or Click and Collect features, and additionally, if the In-Store
 * Pickup/Click and Collect option is a possibility for the destination country/postal code specified in the request. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to
 * large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PickUpInStoreDetailsType extends AbstractStructBase
{
    /**
     * The EligibleForPickupInStore
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect features. A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is
     * eligible for these features. At this time, the In-Store Pickup feature is generally only available to large retail merchants in the US, Canada, UK, Germany, and Australia, and the Click and Collect feature is generally only available to large retail
     * merchants in the UK, Australia, and Germany. Both of these features can only be applied to multiple-quantity, fixed-price listings. <br/><br/> When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled,
     * prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has
     * the item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleForPickupInStore = null;
    /**
     * The AvailableForPickupInStore
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect feature (<b>EligibleForPickupInStore</b> returned as <code>true</code>), and the listing has inventory in a store near
     * the destination country/postal code specified in the request. It is quite possible that the listing is eligible for In-Store Pickup/Click and Collect, but no stores near the specified destination has inventory, in which case, this field will return
     * as <code>false</code>. <br/><br/> When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has
     * stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AvailableForPickupInStore = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PickUpInStoreDetailsType
     * @uses PickUpInStoreDetailsType::setEligibleForPickupInStore()
     * @uses PickUpInStoreDetailsType::setAvailableForPickupInStore()
     * @uses PickUpInStoreDetailsType::setAny()
     * @param bool $eligibleForPickupInStore
     * @param bool $availableForPickupInStore
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $eligibleForPickupInStore = null, ?bool $availableForPickupInStore = null, $any = null)
    {
        $this
            ->setEligibleForPickupInStore($eligibleForPickupInStore)
            ->setAvailableForPickupInStore($availableForPickupInStore)
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
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
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
     * Get AvailableForPickupInStore value
     * @return bool|null
     */
    public function getAvailableForPickupInStore(): ?bool
    {
        return $this->AvailableForPickupInStore;
    }
    /**
     * Set AvailableForPickupInStore value
     * @param bool $availableForPickupInStore
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
     */
    public function setAvailableForPickupInStore(?bool $availableForPickupInStore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($availableForPickupInStore) && !is_bool($availableForPickupInStore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableForPickupInStore, true), gettype($availableForPickupInStore)), __LINE__);
        }
        $this->AvailableForPickupInStore = $availableForPickupInStore;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
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
