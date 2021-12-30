<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class FlatShippingPreferencesType extends AbstractStructBase
{
    /**
     * The AmountPerAdditionalItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountPerAdditionalItem = null;
    /**
     * The DeductionAmountPerAdditionalItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $DeductionAmountPerAdditionalItem = null;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    protected ?array $FlatRateInsuranceRangeCost = null;
    /**
     * The FlatShippingRateOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlatShippingRateOption = null;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceOption = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FlatShippingPreferencesType
     * @uses FlatShippingPreferencesType::setAmountPerAdditionalItem()
     * @uses FlatShippingPreferencesType::setDeductionAmountPerAdditionalItem()
     * @uses FlatShippingPreferencesType::setFlatRateInsuranceRangeCost()
     * @uses FlatShippingPreferencesType::setFlatShippingRateOption()
     * @uses FlatShippingPreferencesType::setInsuranceOption()
     * @uses FlatShippingPreferencesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem
     * @param \macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @param string $flatShippingRateOption
     * @param string $insuranceOption
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem = null, ?\macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem = null, ?array $flatRateInsuranceRangeCost = null, ?string $flatShippingRateOption = null, ?string $insuranceOption = null, $any = null)
    {
        $this
            ->setAmountPerAdditionalItem($amountPerAdditionalItem)
            ->setDeductionAmountPerAdditionalItem($deductionAmountPerAdditionalItem)
            ->setFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost)
            ->setFlatShippingRateOption($flatShippingRateOption)
            ->setInsuranceOption($insuranceOption)
            ->setAny($any);
    }
    /**
     * Get AmountPerAdditionalItem value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPerAdditionalItem(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountPerAdditionalItem;
    }
    /**
     * Set AmountPerAdditionalItem value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setAmountPerAdditionalItem(?\macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem = null): self
    {
        $this->AmountPerAdditionalItem = $amountPerAdditionalItem;
        
        return $this;
    }
    /**
     * Get DeductionAmountPerAdditionalItem value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDeductionAmountPerAdditionalItem(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->DeductionAmountPerAdditionalItem;
    }
    /**
     * Set DeductionAmountPerAdditionalItem value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setDeductionAmountPerAdditionalItem(?\macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem = null): self
    {
        $this->DeductionAmountPerAdditionalItem = $deductionAmountPerAdditionalItem;
        
        return $this;
    }
    /**
     * Get FlatRateInsuranceRangeCost value
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    public function getFlatRateInsuranceRangeCost(): ?array
    {
        return $this->FlatRateInsuranceRangeCost;
    }
    /**
     * This method is responsible for validating the values passed to the setFlatRateInsuranceRangeCost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlatRateInsuranceRangeCost method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
                $invalidValues[] = is_object($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) ? get_class($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) : sprintf('%s(%s)', gettype($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem), var_export($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setFlatRateInsuranceRangeCost(?array $flatRateInsuranceRangeCost = null): self
    {
        // validation for constraint: array
        if ('' !== ($flatRateInsuranceRangeCostArrayErrorMessage = self::validateFlatRateInsuranceRangeCostForArrayConstraintsFromSetFlatRateInsuranceRangeCost($flatRateInsuranceRangeCost))) {
            throw new InvalidArgumentException($flatRateInsuranceRangeCostArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($flatRateInsuranceRangeCost) && count($flatRateInsuranceRangeCost) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($flatRateInsuranceRangeCost)), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function addToFlatRateInsuranceRangeCost(\macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
            throw new InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of type \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->FlatRateInsuranceRangeCost) && count($this->FlatRateInsuranceRangeCost) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->FlatRateInsuranceRangeCost)), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost[] = $item;
        
        return $this;
    }
    /**
     * Get FlatShippingRateOption value
     * @return string|null
     */
    public function getFlatShippingRateOption(): ?string
    {
        return $this->FlatShippingRateOption;
    }
    /**
     * Set FlatShippingRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flatShippingRateOption
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setFlatShippingRateOption(?string $flatShippingRateOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::valueIsValid($flatShippingRateOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType', is_array($flatShippingRateOption) ? implode(', ', $flatShippingRateOption) : var_export($flatShippingRateOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FlatShippingRateOption = $flatShippingRateOption;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
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
