<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatRateInsuranceRangeCostType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class FlatRateInsuranceRangeCostType extends AbstractStructBase
{
    /**
     * The FlatRateInsuranceRange
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlatRateInsuranceRange = null;
    /**
     * The InsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InsuranceCost = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FlatRateInsuranceRangeCostType
     * @uses FlatRateInsuranceRangeCostType::setFlatRateInsuranceRange()
     * @uses FlatRateInsuranceRangeCostType::setInsuranceCost()
     * @uses FlatRateInsuranceRangeCostType::setAny()
     * @param string $flatRateInsuranceRange
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceCost
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $flatRateInsuranceRange = null, ?\macropage\ebaysdk\trading\StructType\AmountType $insuranceCost = null, $any = null)
    {
        $this
            ->setFlatRateInsuranceRange($flatRateInsuranceRange)
            ->setInsuranceCost($insuranceCost)
            ->setAny($any);
    }
    /**
     * Get FlatRateInsuranceRange value
     * @return string|null
     */
    public function getFlatRateInsuranceRange(): ?string
    {
        return $this->FlatRateInsuranceRange;
    }
    /**
     * Set FlatRateInsuranceRange value
     * @uses \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flatRateInsuranceRange
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
     */
    public function setFlatRateInsuranceRange(?string $flatRateInsuranceRange = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::valueIsValid($flatRateInsuranceRange)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType', is_array($flatRateInsuranceRange) ? implode(', ', $flatRateInsuranceRange) : var_export($flatRateInsuranceRange, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::getValidValues())), __LINE__);
        }
        $this->FlatRateInsuranceRange = $flatRateInsuranceRange;
        
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuranceCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceCost
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
     */
    public function setInsuranceCost(?\macropage\ebaysdk\trading\StructType\AmountType $insuranceCost = null): self
    {
        $this->InsuranceCost = $insuranceCost;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
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
