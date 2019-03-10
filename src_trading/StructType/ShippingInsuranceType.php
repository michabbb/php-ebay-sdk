<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInsuranceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs. orders.
 * @subpackage Structs
 */
class ShippingInsuranceType extends AbstractStructBase
{
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The FlatRateInsuranceRangeCost
     * Meta informations extracted from the WSDL
     * - documentation: A pairing of range of item price total and insurance cost. For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must submit all range pairs. For those ranges that do not apply, set the cost to 0.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[]
     */
    public $FlatRateInsuranceRangeCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingInsuranceType
     * @uses ShippingInsuranceType::setInsuranceOption()
     * @uses ShippingInsuranceType::setFlatRateInsuranceRangeCost()
     * @uses ShippingInsuranceType::setAny()
     * @param string $insuranceOption
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @param \DOMDocument $any
     */
    public function __construct($insuranceOption = null, array $flatRateInsuranceRangeCost = array(), \DOMDocument $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost = array())
    {
        foreach ($flatRateInsuranceRangeCost as $shippingInsuranceTypeFlatRateInsuranceRangeCostItem) {
            // validation for constraint: itemType
            if (!$shippingInsuranceTypeFlatRateInsuranceRangeCostItem instanceof \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType) {
                throw new \InvalidArgumentException(sprintf('The FlatRateInsuranceRangeCost property can only contain items of \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType, "%s" given', is_object($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) ? get_class($shippingInsuranceTypeFlatRateInsuranceRangeCostItem) : gettype($shippingInsuranceTypeFlatRateInsuranceRangeCostItem)), __LINE__);
            }
        }
        $this->FlatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        return $this;
    }
    /**
     * Add item to FlatRateInsuranceRangeCost value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingInsuranceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
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
