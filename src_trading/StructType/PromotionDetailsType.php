<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionDetailsType extends AbstractStructBase
{
    /**
     * The PromotionPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PromotionPrice = null;
    /**
     * The PromotionPriceType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionPriceType = null;
    /**
     * The BidCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidCount = null;
    /**
     * The ConvertedPromotionPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedPromotionPrice = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotionDetailsType
     * @uses PromotionDetailsType::setPromotionPrice()
     * @uses PromotionDetailsType::setPromotionPriceType()
     * @uses PromotionDetailsType::setBidCount()
     * @uses PromotionDetailsType::setConvertedPromotionPrice()
     * @uses PromotionDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionPrice
     * @param string $promotionPriceType
     * @param int $bidCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $promotionPrice = null, ?string $promotionPriceType = null, ?int $bidCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice = null, $any = null)
    {
        $this
            ->setPromotionPrice($promotionPrice)
            ->setPromotionPriceType($promotionPriceType)
            ->setBidCount($bidCount)
            ->setConvertedPromotionPrice($convertedPromotionPrice)
            ->setAny($any);
    }
    /**
     * Get PromotionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPromotionPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PromotionPrice;
    }
    /**
     * Set PromotionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setPromotionPrice(?\macropage\ebaysdk\trading\StructType\AmountType $promotionPrice = null): self
    {
        $this->PromotionPrice = $promotionPrice;
        
        return $this;
    }
    /**
     * Get PromotionPriceType value
     * @return string|null
     */
    public function getPromotionPriceType(): ?string
    {
        return $this->PromotionPriceType;
    }
    /**
     * Set PromotionPriceType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionPriceType
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setPromotionPriceType(?string $promotionPriceType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::valueIsValid($promotionPriceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType', is_array($promotionPriceType) ? implode(', ', $promotionPriceType) : var_export($promotionPriceType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionPriceType = $promotionPriceType;
        
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount(): ?int
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setBidCount(?int $bidCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !(is_int($bidCount) || ctype_digit($bidCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCount, true), gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        
        return $this;
    }
    /**
     * Get ConvertedPromotionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedPromotionPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedPromotionPrice;
    }
    /**
     * Set ConvertedPromotionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setConvertedPromotionPrice(?\macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice = null): self
    {
        $this->ConvertedPromotionPrice = $convertedPromotionPrice;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
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
