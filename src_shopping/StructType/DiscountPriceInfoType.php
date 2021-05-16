<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountPriceInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the discount pricing details for an item, including the original retail price and the display treatment to be used for the item. The pricing treatment displayed for a discounted item depends on the values specified in this
 * container when the item is listed. Discount pricing treatments (Strikethrough Pricing and Minimum Advertised Price) apply to only fixed-price listings. Sellers can apply Discount Pricing to both MSKU and Non-MSKU items. <br><br> The Strikethrough
 * Pricing feature is only available on the US (including Motors), Canada (including Motors, and both English and French versions of site), UK, Germany, France, Italy, and Spain sites. The Minimum Advertised Price feature is only available on the US
 * site.
 * @subpackage Structs
 */
class DiscountPriceInfoType extends AbstractStructBase
{
    /**
     * The OriginalRetailPrice
     * Meta information extracted from the WSDL
     * - documentation: This field specifies the price to which the discounted-price display treatment will be applied (for example, a strikethrough price). The discounted price of an item is shown in the <b>CurrentPrice</b> field, and is always less than
     * the value in this field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $OriginalRetailPrice = null;
    /**
     * The MinimumAdvertisedPrice
     * Meta information extracted from the WSDL
     * - documentation: A value equal to the agreed upon minimum advertised price. <br><br> The minimum advertised price is an agreed upon price that is set by the suppliers/OEMs and the retailers/sellers. The minimum advertised price is the lowest price
     * for which an item can be advertised. Large volume sellers can negotiate with the suppliers/OEMs to offer certain items below the set minimum advertised price. eBay does not maintain or validate the agreed upon minimum advertised price; the seller is
     * responsible for setting this value in accordance with their agreement with the supplier/OEMs. MAP pricing treatments apply to only fixed-price, listings on the eBay US site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $MinimumAdvertisedPrice = null;
    /**
     * The MinimumAdvertisedPriceExposure
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned for US-based listings eligible for, and using the MAP feature. The enumeration value returned in this field indicates how/when the Minimum Advertised Price will be displayed to the buyer. See the
     * descriptions for each enumeration value for more information.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MinimumAdvertisedPriceExposure = null;
    /**
     * The PricingTreatment
     * Meta information extracted from the WSDL
     * - documentation: This field denotes whether or not an item qualifies for a discount pricing treatment display, such as STP or MAP. If this field is set to <code>MAP</code>, you must abide by the rules for displaying MAP items, as described in the
     * <b>MinimumAdvertisedPriceExposure</b> field. <br /> <br /> <span class="tablenote"><b>Important:</b> For listings that return PricingTreatment set to MAP, you are legally required to follow the rules for displaying the price of the item to potential
     * buyers. You are bound by the terms of the API License Agreement to follow these rules. Refer to the API License Agreement for consequences of non-compliance. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PricingTreatment = null;
    /**
     * The SoldOneBay
     * Meta information extracted from the WSDL
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (shown in <b>CurrentPrice</b> field) is the price for which the seller offered the same (or similar) item for sale on eBay within the
     * previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b> takes precedence.
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SoldOneBay = null;
    /**
     * The SoldOffeBay
     * Meta information extracted from the WSDL
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (shown in <b>CurrentPrice</b> field) is the price for which the seller offered the same item for sale on a web site or offline store other
     * than eBay in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b> takes precedence.
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SoldOffeBay = null;
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
     * @uses DiscountPriceInfoType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $originalRetailPrice
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minimumAdvertisedPrice
     * @param string $minimumAdvertisedPriceExposure
     * @param string $pricingTreatment
     * @param bool $soldOneBay
     * @param bool $soldOffeBay
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\shopping\StructType\AmountType $originalRetailPrice = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $minimumAdvertisedPrice = null, ?string $minimumAdvertisedPriceExposure = null, ?string $pricingTreatment = null, ?bool $soldOneBay = false, ?bool $soldOffeBay = false, $any = null)
    {
        $this
            ->setOriginalRetailPrice($originalRetailPrice)
            ->setMinimumAdvertisedPrice($minimumAdvertisedPrice)
            ->setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure)
            ->setPricingTreatment($pricingTreatment)
            ->setSoldOneBay($soldOneBay)
            ->setSoldOffeBay($soldOffeBay)
            ->setAny($any);
    }
    /**
     * Get OriginalRetailPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getOriginalRetailPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->OriginalRetailPrice;
    }
    /**
     * Set OriginalRetailPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $originalRetailPrice
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
     */
    public function setOriginalRetailPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $originalRetailPrice = null): self
    {
        $this->OriginalRetailPrice = $originalRetailPrice;
        
        return $this;
    }
    /**
     * Get MinimumAdvertisedPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getMinimumAdvertisedPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->MinimumAdvertisedPrice;
    }
    /**
     * Set MinimumAdvertisedPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minimumAdvertisedPrice
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $minimumAdvertisedPrice = null): self
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
     * @uses \macropage\ebaysdk\shopping\EnumType\MinimumAdvertisedPriceExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\MinimumAdvertisedPriceExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $minimumAdvertisedPriceExposure
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPriceExposure(?string $minimumAdvertisedPriceExposure = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\MinimumAdvertisedPriceExposureCodeType::valueIsValid($minimumAdvertisedPriceExposure)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\MinimumAdvertisedPriceExposureCodeType', is_array($minimumAdvertisedPriceExposure) ? implode(', ', $minimumAdvertisedPriceExposure) : var_export($minimumAdvertisedPriceExposure, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\MinimumAdvertisedPriceExposureCodeType::getValidValues())), __LINE__);
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
     * @uses \macropage\ebaysdk\shopping\EnumType\PricingTreatmentCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\PricingTreatmentCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pricingTreatment
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
     */
    public function setPricingTreatment(?string $pricingTreatment = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\PricingTreatmentCodeType::valueIsValid($pricingTreatment)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\PricingTreatmentCodeType', is_array($pricingTreatment) ? implode(', ', $pricingTreatment) : var_export($pricingTreatment, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\PricingTreatmentCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
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
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
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
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
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
