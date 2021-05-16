<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type indicates the quantity sold for each variation within a multiple-variation listing. This type is only applicable for multiple-variation listings, and is not returned at the listing level. To return data on individual
 * variations within the listing, you must include the <b>IncludeSelector</b> field and set its value to <code>Variations</code>.
 * @subpackage Structs
 */
class SellingStatusType extends AbstractStructBase
{
    /**
     * The ConvertedCurrentPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ConvertedCurrentPrice = null;
    /**
     * The CurrentPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned. See <b>Variation.StartPrice</b> instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $CurrentPrice = null;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the quantity sold for the corresponding variation. You can subtract this integer value from the value in the <b>Variation.Quantity</b> field to determine the quantity of the variation that is still
     * available for purchase.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySold = null;
    /**
     * The QuantitySoldByPickupInStore
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the total quantity of the corresponding variation sold and picked up by buyers using the In-Store Pickup or Click and Collect option. This value is the total quantity of this variation purchased by one or more
     * buyers using the In-Store Pickup or Click and Collect option, and is not the total number of In-Store Pickup or Click and Collect orders for that variation. So, if two buyers selected the In-Store Pickup or Click and Collect option, but each of these
     * buyers bought a quantity of five of these variations (in same purchase), the <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be <code>10</code> and not <code>2</code>. <br> <br> This field will only be returned
     * if the listing is eligible for In-Store Pickup or Click and Collect. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The In-Store Pickup feature is generally only available to large retail merchants in US, Canada, UK, Germany, and
     * Australia marketplaces, and the In-Store Pickup feature is generally only available to large retail merchants in UK, Australia, and Germany marketplaces. Both of these features can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySoldByPickupInStore = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingStatusType
     * @uses SellingStatusType::setConvertedCurrentPrice()
     * @uses SellingStatusType::setCurrentPrice()
     * @uses SellingStatusType::setQuantitySold()
     * @uses SellingStatusType::setQuantitySoldByPickupInStore()
     * @uses SellingStatusType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @param int $quantitySold
     * @param int $quantitySoldByPickupInStore
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null, ?int $quantitySold = null, ?int $quantitySoldByPickupInStore = null, $any = null)
    {
        $this
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setCurrentPrice($currentPrice)
            ->setQuantitySold($quantitySold)
            ->setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
            ->setAny($any);
    }
    /**
     * Get ConvertedCurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getConvertedCurrentPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ConvertedCurrentPrice;
    }
    /**
     * Set ConvertedCurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setConvertedCurrentPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null): self
    {
        $this->ConvertedCurrentPrice = $convertedCurrentPrice;
        
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getCurrentPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setCurrentPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null): self
    {
        $this->CurrentPrice = $currentPrice;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
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
     * Get QuantitySoldByPickupInStore value
     * @return int|null
     */
    public function getQuantitySoldByPickupInStore(): ?int
    {
        return $this->QuantitySoldByPickupInStore;
    }
    /**
     * Set QuantitySoldByPickupInStore value
     * @param int $quantitySoldByPickupInStore
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setQuantitySoldByPickupInStore(?int $quantitySoldByPickupInStore = null): self
    {
        // validation for constraint: int
        if (!is_null($quantitySoldByPickupInStore) && !(is_int($quantitySoldByPickupInStore) || ctype_digit($quantitySoldByPickupInStore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySoldByPickupInStore, true), gettype($quantitySoldByPickupInStore)), __LINE__);
        }
        $this->QuantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
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
