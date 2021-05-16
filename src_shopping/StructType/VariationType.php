<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>Variation</b> container, which provides full details on each item variation in a multiple-variation listing. A <b>Variation</b> container is returned for each product variation within a multiple-variation
 * listing.
 * @subpackage Structs
 */
class VariationType extends AbstractStructBase
{
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not necessarily for buyers). A SKU value is not required, but many large sellers like to add SKU values for their products. If SKU
     * values are defined for variations in a multiple-variation listing, the seller can specify a variation's SKU value in the <b>VariationSKU</b> field of a <b>GetSingleItem</b> call to retrieve details on that particular variation. The
     * <b>VariationSKU</b> field is not available in the <b>GetMultipleItems</b> call. <br> <br> If specified, all SKU values must be unique within the <b>Variations</b> node. That is, no two variations within the same listing can have the same SKU. <br>
     * <br> This field is only returned if the seller specified a SKU for the variation.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: The fixed price for this item variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 8.00.<br> <br> The <b>StartPrice</b> is mandatory for each variation,
     * regardless of whether the price is the same for all variations, or if the price differs for different variations. This field will be returned for each <b>Variation</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $StartPrice = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: This field shows the total quantity associated with the variation, including the quantity available and the quantity sold. To calculate the quantity available for sale, subtract the corresponding
     * <b>Variation.SellingStatus.QuantitySold</b> value from this value. <br> <br> Generally, this integer value will be '1' or greater, but it is possible that the value will be '0' if the variation is currently out of stock, but the seller is using the
     * 'Out-of-Stock Control' feature. When the seller uses the 'Out-of-Stock Control' feature, an item (or item variation) will still surface in search results, although that particular item (or item variation) will not be purchasable.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: A list of name/value pairs that uniquely identify the variation within the listing. All variations specify the same set of names, and each variation provides a unique combination of values for those names. For example, if the items
     * vary by color and size, then every variation specifies Color and Size as names, and no two variations can specify the same combination of color and size values. Use this information to identify a variation of interest when you communicate with the
     * seller. <br> <br> If your application supports PlaceOffer (in the Trading API), you use this information to uniquely identify the variation that you want to purchase.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $VariationSpecifics = null;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer Not used. The quantity sold for the variation is now shown in the <b>Variation.SellingStatus.QuantitySold</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySold = null;
    /**
     * The SellingStatus
     * Meta information extracted from the WSDL
     * - documentation: This container shows the quantity sold for the variation, including the quantity that is sold through 'In-Store Pickup' (a logistics option that is only available to a select number of large US sellers with 'brick and mortar'
     * stores). The <b>SellingStatus</b> container is returned for each item variation, even if the quantity sold value is '0'.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SellingStatusType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\SellingStatusType $SellingStatus = null;
    /**
     * The DiscountPriceInfo
     * Meta information extracted from the WSDL
     * - documentation: This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to
     * fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and
     * their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is
     * intended for eBay partners and their sellers only. <br><br> As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $DiscountPriceInfo = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: This field is the unique identifier of the product variation. This identfier can either be an eBay Product ID (also known as an ePID), or a Global Trade Item Number (GTIN) such as UPC, EAN, or ISBN. This field is only returned if the
     * seller has supplied an ePID or GTIN value for the each variation within a multiple-variation listing. <br><br> The <b>type</b> attribute's value indicates the type of product identifier.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\ProductIDType $ProductID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationType
     * @uses VariationType::setSKU()
     * @uses VariationType::setStartPrice()
     * @uses VariationType::setQuantity()
     * @uses VariationType::setVariationSpecifics()
     * @uses VariationType::setQuantitySold()
     * @uses VariationType::setSellingStatus()
     * @uses VariationType::setDiscountPriceInfo()
     * @uses VariationType::setProductID()
     * @uses VariationType::setAny()
     * @param string $sKU
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $startPrice
     * @param int $quantity
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics
     * @param int $quantitySold
     * @param \macropage\ebaysdk\shopping\StructType\SellingStatusType $sellingStatus
     * @param \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $sKU = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $startPrice = null, ?int $quantity = null, ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics = null, ?int $quantitySold = null, ?\macropage\ebaysdk\shopping\StructType\SellingStatusType $sellingStatus = null, ?\macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo = null, ?\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $any = null)
    {
        $this
            ->setSKU($sKU)
            ->setStartPrice($startPrice)
            ->setQuantity($quantity)
            ->setVariationSpecifics($variationSpecifics)
            ->setQuantitySold($quantitySold)
            ->setSellingStatus($sellingStatus)
            ->setDiscountPriceInfo($discountPriceInfo)
            ->setProductID($productID)
            ->setAny($any);
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getStartPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setStartPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $startPrice = null): self
    {
        $this->StartPrice = $startPrice;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics(): ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setVariationSpecifics(?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecifics = null): self
    {
        $this->VariationSpecifics = $variationSpecifics;
        
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold(): ?int
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setQuantitySold(?int $quantitySold = null): self
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        
        return $this;
    }
    /**
     * Get SellingStatus value
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType|null
     */
    public function getSellingStatus(): ?\macropage\ebaysdk\shopping\StructType\SellingStatusType
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \macropage\ebaysdk\shopping\StructType\SellingStatusType $sellingStatus
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setSellingStatus(?\macropage\ebaysdk\shopping\StructType\SellingStatusType $sellingStatus = null): self
    {
        $this->SellingStatus = $sellingStatus;
        
        return $this;
    }
    /**
     * Get DiscountPriceInfo value
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType|null
     */
    public function getDiscountPriceInfo(): ?\macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
    {
        return $this->DiscountPriceInfo;
    }
    /**
     * Set DiscountPriceInfo value
     * @param \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setDiscountPriceInfo(?\macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo = null): self
    {
        $this->DiscountPriceInfo = $discountPriceInfo;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType|null
     */
    public function getProductID(): ?\macropage\ebaysdk\shopping\StructType\ProductIDType
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
     */
    public function setProductID(?\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null): self
    {
        $this->ProductID = $productID;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationType
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
