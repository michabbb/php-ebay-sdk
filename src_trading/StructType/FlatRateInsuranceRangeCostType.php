<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatRateInsuranceRangeCostType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class FlatRateInsuranceRangeCostType extends AbstractStructBase
{
    /**
     * The FlatRateInsuranceRange
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FlatRateInsuranceRange;
    /**
     * The InsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InsuranceCost;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FlatRateInsuranceRangeCostType
     * @uses FlatRateInsuranceRangeCostType::setFlatRateInsuranceRange()
     * @uses FlatRateInsuranceRangeCostType::setInsuranceCost()
     * @uses FlatRateInsuranceRangeCostType::setAny()
     * @param string $flatRateInsuranceRange
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceCost
     * @param \DOMDocument $any
     */
    public function __construct($flatRateInsuranceRange = null, \macropage\ebaysdk\trading\StructType\AmountType $insuranceCost = null, \DOMDocument $any = null)
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
    public function getFlatRateInsuranceRange()
    {
        return $this->FlatRateInsuranceRange;
    }
    /**
     * Set FlatRateInsuranceRange value
     * @uses \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flatRateInsuranceRange
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
     */
    public function setFlatRateInsuranceRange($flatRateInsuranceRange = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::valueIsValid($flatRateInsuranceRange)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flatRateInsuranceRange, implode(', ', \macropage\ebaysdk\trading\EnumType\FlatRateInsuranceRangeCodeType::getValidValues())), __LINE__);
        }
        $this->FlatRateInsuranceRange = $flatRateInsuranceRange;
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuranceCost()
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceCost
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
     */
    public function setInsuranceCost(\macropage\ebaysdk\trading\StructType\AmountType $insuranceCost = null)
    {
        $this->InsuranceCost = $insuranceCost;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
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
     * @return \macropage\ebaysdk\trading\StructType\FlatRateInsuranceRangeCostType
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
