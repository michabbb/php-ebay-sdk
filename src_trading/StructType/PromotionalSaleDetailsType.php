<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalSaleDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: If a seller has reduced the price of a listed item with the Promotional Price Display feature, this type contains the original price of the discounted item and other information.
 * @subpackage Structs
 */
class PromotionalSaleDetailsType extends AbstractStructBase
{
    /**
     * The OriginalPrice
     * Meta information extracted from the WSDL
     * - documentation: Original price of an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $OriginalPrice = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Start time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: End time of a discount for an item whose price a seller has reduced with the Promotional Price Display feature.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotionalSaleDetailsType
     * @uses PromotionalSaleDetailsType::setOriginalPrice()
     * @uses PromotionalSaleDetailsType::setStartTime()
     * @uses PromotionalSaleDetailsType::setEndTime()
     * @uses PromotionalSaleDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalPrice
     * @param string $startTime
     * @param string $endTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $originalPrice = null, ?string $startTime = null, ?string $endTime = null, $any = null)
    {
        $this
            ->setOriginalPrice($originalPrice)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setAny($any);
    }
    /**
     * Get OriginalPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setOriginalPrice(?\macropage\ebaysdk\trading\StructType\AmountType $originalPrice = null): self
    {
        $this->OriginalPrice = $originalPrice;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleDetailsType
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
