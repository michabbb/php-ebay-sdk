<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInsuranceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs. orders.
 * @subpackage Structs
 */
class ShippingInsuranceType extends AbstractStructBase
{
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceOption = null;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta information extracted from the WSDL
     * - documentation: A pairing of range of item price total and insurance cost. For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must submit all range pairs. For those ranges that do not apply, set the cost to 0.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    protected array $FlatRateInsuranceRangeCost = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShippingInsuranceType
     * @uses ShippingInsuranceType::setInsuranceOption()
     * @uses ShippingInsuranceType::setFlatRateInsuranceRangeCost()
     * @uses ShippingInsuranceType::setAny()
     * @param string $insuranceOption
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $insuranceOption = null, array $flatRateInsuranceRangeCost = [], $any = null)
    {
        $this
            ->setInsuranceOption($insuranceOption)
            ->setFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost)
            ->setAny($any);
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption(): ?string
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public function setInsuranceOption(?string $insuranceOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        
        return $this;
    }
    /**
     * Get FlatRateInsuranceRangeCost value
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    public function getFlatRateInsuranceRangeCost(): array
    {
        return $this->FlatRateInsuranceRangeCost;
    }
    /**
     * This method is responsible for validating the values passed to the setFlatRateInsuranceRangeCost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlatRateInsuranceRangeCost method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingInsuranceTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$shippingInsuranceTypeFlatRateInsuranceRangeCostItem instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
                $invalidValues[] = is_object($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) ? get_class($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) : sprintf('%s(%s)', gettype($shippingInsuranceTypeFlatRateInsuranceRangeCostItem), var_export($shippingInsuranceTypeFlatRateInsuranceRangeCostItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlatRateInsuranceRangeCost value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost = []): self
    {
        // validation for constraint: array
        if ('' !== ($flatRateInsuranceRangeCostArrayErrorMessage = self::validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost))) {
            throw new InvalidArgumentException($flatRateInsuranceRangeCostArrayErrorMessage, __LINE__);
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public function addToFlatRateInsuranceRangeCost(\macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
            throw new InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
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
