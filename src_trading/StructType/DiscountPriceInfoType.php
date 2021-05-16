<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountPriceInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Using this container, a seller can supply original retail price and discount price for an item to clarify the discount treatment (also known as strike-through pricing). This only applies to fixed-price listings and auction listings
 * with the Buy It Now option. This feature is available for large enterprise sellers via white list. A seller can provide discount treatment regardless of whether the listing includes a SKU.
 * @subpackage Structs
 */
class DiscountPriceInfoType extends AbstractStructBase
{
    /**
     * The OriginalRetailPrice
     * Meta information extracted from the WSDL
     * - documentation: The actual retail price set by the manufacturer (OEM). eBay does not maintain or validate the <b>OriginalRetailPrice</b> supplied by the seller. <b>OriginalRetailPrice</b> should always be more than <b>StartPrice</b>. Compare the
     * <b>StartPrice</b>/<b>BuyItNowPrice</b> to <b>OriginalRetailPrice</b> to determine the amount of savings to the buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $OriginalRetailPrice = null;
    /**
     * The MinimumAdvertisedPrice
     * Meta information extracted from the WSDL
     * - documentation: Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the lowest price an item is allowed to be advertised at. Sellers can offer prices below MAP by means of
     * other discounts. This only applies to fixed-price listings and auction listings with the Buy It Now option.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MinimumAdvertisedPrice = null;
    /**
     * The MinimumAdvertisedPriceExposure
     * Meta information extracted from the WSDL
     * - documentation: For MinimumAdvertisedPrice (MAP) listings only. A seller cannot show the actual discounted price on eBay's View Item page. Instead, the buyer can either click on a pop-up on eBay's View Item page, or the discount price will be shown
     * during checkout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MinimumAdvertisedPriceExposure = null;
    /**
     * The PricingTreatment
     * Meta information extracted from the WSDL
     * - documentation: Based on <b>OriginalRetailPrice</b>, <b>MinimumAdvertisedPrice</b>, and <b>StartPrice</b> values, eBay identifies whether the listing falls under MAP or STP (aka <b>OriginalRetailPrice</b>). <b>GetItem</b> returns this for items
     * listed with one of these discount pricing treatments. <b>GetSellerList</b> returns the <b>DiscountPriceInfo</b> container. This field is not applicable for Add/Revise/Relist calls.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PricingTreatment = null;
    /**
     * The SoldOneBay
     * Meta information extracted from the WSDL
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount price (specified as <b>StartPrice</b>) is the price for which the seller offered the same (or similar) item for sale on eBay within the previous
     * 30 days. The discount price is always in reference to the seller's own price for the item. <br><br> If this field is set to <code>true</code>, eBay displays 'Was' in the UK and 'Ursprunglich' in Germany, next to the discounted price of the item. In
     * the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set to <code>true</code>, <b>SoldOneBay</b> takes precedence. <br>
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SoldOneBay = null;
    /**
     * The SoldOffeBay
     * Meta information extracted from the WSDL
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount price (specified as StartPrice) is the price for which the seller offered the same (or similar) item for sale on a Web site or offline store other
     * than eBay in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br><br> If this field is set to <code>true</code>, eBay displays 'Was*' in the UK and 'Ursprunglich*' in Germany, next to the
     * discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set to <code>true</code>, <b>SoldOneBay</b> takes precedence. <br>
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SoldOffeBay = null;
    /**
     * The MadeForOutletComparisonPrice
     * Meta information extracted from the WSDL
     * - documentation: Applicable only if the item was specifically made for sale through dedicated eBay outlet pages (e.g., eBay Fashion Outlet).<br> <br> The comparison price is the price of a comparable product sold through non-outlet channels on eBay
     * (or elsewhere), or not specifically made for the outlet.<br> <br> In fashion, a "comparable" product shares the same design, but is not considered an identical product. Some products are specifically made for outlets, and may have a different SKU
     * than the "comparable" product. These made-for-outlet products may be manufactured in a different place, with different materials, or according to different specifications (i.e. different stitch pattern, seam reinforcement, button quality, etc.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MadeForOutletComparisonPrice = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DiscountPriceInfoType
     * @uses DiscountPriceInfoType::setOriginalRetailPrice()
     * @uses DiscountPriceInfoType::setMinimumAdvertisedPrice()
     * @uses DiscountPriceInfoType::setMinimumAdvertisedPriceExposure()
     * @uses DiscountPriceInfoType::setPricingTreatment()
     * @uses DiscountPriceInfoType::setSoldOneBay()
     * @uses DiscountPriceInfoType::setSoldOffeBay()
     * @uses DiscountPriceInfoType::setMadeForOutletComparisonPrice()
     * @uses DiscountPriceInfoType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalRetailPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minimumAdvertisedPrice
     * @param string $minimumAdvertisedPriceExposure
     * @param string $pricingTreatment
     * @param bool $soldOneBay
     * @param bool $soldOffeBay
     * @param \macropage\ebaysdk\trading\StructType\AmountType $madeForOutletComparisonPrice
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $originalRetailPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $minimumAdvertisedPrice = null, ?string $minimumAdvertisedPriceExposure = null, ?string $pricingTreatment = null, ?bool $soldOneBay = false, ?bool $soldOffeBay = false, ?\macropage\ebaysdk\trading\StructType\AmountType $madeForOutletComparisonPrice = null, $any = null)
    {
        $this
            ->setOriginalRetailPrice($originalRetailPrice)
            ->setMinimumAdvertisedPrice($minimumAdvertisedPrice)
            ->setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure)
            ->setPricingTreatment($pricingTreatment)
            ->setSoldOneBay($soldOneBay)
            ->setSoldOffeBay($soldOffeBay)
            ->setMadeForOutletComparisonPrice($madeForOutletComparisonPrice)
            ->setAny($any);
    }
    /**
     * Get OriginalRetailPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalRetailPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->OriginalRetailPrice;
    }
    /**
     * Set OriginalRetailPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalRetailPrice
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setOriginalRetailPrice(?\macropage\ebaysdk\trading\StructType\AmountType $originalRetailPrice = null): self
    {
        $this->OriginalRetailPrice = $originalRetailPrice;
        
        return $this;
    }
    /**
     * Get MinimumAdvertisedPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinimumAdvertisedPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MinimumAdvertisedPrice;
    }
    /**
     * Set MinimumAdvertisedPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minimumAdvertisedPrice
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPrice(?\macropage\ebaysdk\trading\StructType\AmountType $minimumAdvertisedPrice = null): self
    {
        $this->MinimumAdvertisedPrice = $minimumAdvertisedPrice;
        
        return $this;
    }
    /**
     * Get MinimumAdvertisedPriceExposure value
     * @return string|null
     */
    public function getMinimumAdvertisedPriceExposure(): ?string
    {
        return $this->MinimumAdvertisedPriceExposure;
    }
    /**
     * Set MinimumAdvertisedPriceExposure value
     * @uses \macropage\ebaysdk\trading\EnumType\MinimumAdvertisedPriceExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MinimumAdvertisedPriceExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $minimumAdvertisedPriceExposure
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPriceExposure(?string $minimumAdvertisedPriceExposure = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MinimumAdvertisedPriceExposureCodeType::valueIsValid($minimumAdvertisedPriceExposure)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MinimumAdvertisedPriceExposureCodeType', is_array($minimumAdvertisedPriceExposure) ? implode(', ', $minimumAdvertisedPriceExposure) : var_export($minimumAdvertisedPriceExposure, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MinimumAdvertisedPriceExposureCodeType::getValidValues())), __LINE__);
        }
        $this->MinimumAdvertisedPriceExposure = $minimumAdvertisedPriceExposure;
        
        return $this;
    }
    /**
     * Get PricingTreatment value
     * @return string|null
     */
    public function getPricingTreatment(): ?string
    {
        return $this->PricingTreatment;
    }
    /**
     * Set PricingTreatment value
     * @uses \macropage\ebaysdk\trading\EnumType\PricingTreatmentCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PricingTreatmentCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pricingTreatment
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setPricingTreatment(?string $pricingTreatment = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PricingTreatmentCodeType::valueIsValid($pricingTreatment)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PricingTreatmentCodeType', is_array($pricingTreatment) ? implode(', ', $pricingTreatment) : var_export($pricingTreatment, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PricingTreatmentCodeType::getValidValues())), __LINE__);
        }
        $this->PricingTreatment = $pricingTreatment;
        
        return $this;
    }
    /**
     * Get SoldOneBay value
     * @return bool|null
     */
    public function getSoldOneBay(): ?bool
    {
        return $this->SoldOneBay;
    }
    /**
     * Set SoldOneBay value
     * @param bool $soldOneBay
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setSoldOneBay(?bool $soldOneBay = false): self
    {
        // validation for constraint: boolean
        if (!is_null($soldOneBay) && !is_bool($soldOneBay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($soldOneBay, true), gettype($soldOneBay)), __LINE__);
        }
        $this->SoldOneBay = $soldOneBay;
        
        return $this;
    }
    /**
     * Get SoldOffeBay value
     * @return bool|null
     */
    public function getSoldOffeBay(): ?bool
    {
        return $this->SoldOffeBay;
    }
    /**
     * Set SoldOffeBay value
     * @param bool $soldOffeBay
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setSoldOffeBay(?bool $soldOffeBay = false): self
    {
        // validation for constraint: boolean
        if (!is_null($soldOffeBay) && !is_bool($soldOffeBay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($soldOffeBay, true), gettype($soldOffeBay)), __LINE__);
        }
        $this->SoldOffeBay = $soldOffeBay;
        
        return $this;
    }
    /**
     * Get MadeForOutletComparisonPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMadeForOutletComparisonPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MadeForOutletComparisonPrice;
    }
    /**
     * Set MadeForOutletComparisonPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $madeForOutletComparisonPrice
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public function setMadeForOutletComparisonPrice(?\macropage\ebaysdk\trading\StructType\AmountType $madeForOutletComparisonPrice = null): self
    {
        $this->MadeForOutletComparisonPrice = $madeForOutletComparisonPrice;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
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
