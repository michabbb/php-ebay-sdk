<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class FlatShippingPreferencesType extends AbstractStructBase
{
    /**
     * The AmountPerAdditionalItem
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPerAdditionalItem;
    /**
     * The DeductionAmountPerAdditionalItem
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $DeductionAmountPerAdditionalItem;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    public $FlatRateInsuranceRangeCost;
    /**
     * The FlatShippingRateOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FlatShippingRateOption;
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem = null, \macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem = null, array $flatRateInsuranceRangeCost = array(), $flatShippingRateOption = null, $insuranceOption = null, \DOMDocument $any = null)
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
    public function getAmountPerAdditionalItem()
    {
        return $this->AmountPerAdditionalItem;
    }
    /**
     * Set AmountPerAdditionalItem value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setAmountPerAdditionalItem(\macropage\ebaysdk\trading\StructType\AmountType $amountPerAdditionalItem = null)
    {
        $this->AmountPerAdditionalItem = $amountPerAdditionalItem;
        return $this;
    }
    /**
     * Get DeductionAmountPerAdditionalItem value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDeductionAmountPerAdditionalItem()
    {
        return $this->DeductionAmountPerAdditionalItem;
    }
    /**
     * Set DeductionAmountPerAdditionalItem value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setDeductionAmountPerAdditionalItem(\macropage\ebaysdk\trading\StructType\AmountType $deductionAmountPerAdditionalItem = null)
    {
        $this->DeductionAmountPerAdditionalItem = $deductionAmountPerAdditionalItem;
        return $this;
    }
    /**
     * Get FlatRateInsuranceRangeCost value
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]|null
     */
    public function getFlatRateInsuranceRangeCost()
    {
        return $this->FlatRateInsuranceRangeCost;
    }
    /**
     * Set FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost = array())
    {
        foreach ($flatRateInsuranceRangeCost as $flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
                throw new \InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, "%s" given', is_object($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) ? get_class($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem) : gettype($flatShippingPreferencesTypeFlatRateInsuranceRangeCostItem)), __LINE__);
            }
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function addToFlatRateInsuranceRangeCost(\macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
            throw new \InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlatRateInsuranceRangeCost[] = $item;
        return $this;
    }
    /**
     * Get FlatShippingRateOption value
     * @return string|null
     */
    public function getFlatShippingRateOption()
    {
        return $this->FlatShippingRateOption;
    }
    /**
     * Set FlatShippingRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flatShippingRateOption
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setFlatShippingRateOption($flatShippingRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::valueIsValid($flatShippingRateOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flatShippingRateOption, implode(', ', \macropage\ebaysdk\trading\EnumType\FlatShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FlatShippingRateOption = $flatShippingRateOption;
        return $this;
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceOption, implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
