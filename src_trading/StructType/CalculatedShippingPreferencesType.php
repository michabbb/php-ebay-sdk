<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CalculatedShippingPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingAmountForEntireOrder
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CalculatedShippingAmountForEntireOrder;
    /**
     * The CalculatedShippingChargeOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CalculatedShippingChargeOption;
    /**
     * The CalculatedShippingRateOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CalculatedShippingRateOption;
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
     * Constructor method for CalculatedShippingPreferencesType
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingAmountForEntireOrder()
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingChargeOption()
     * @uses CalculatedShippingPreferencesType::setCalculatedShippingRateOption()
     * @uses CalculatedShippingPreferencesType::setInsuranceOption()
     * @uses CalculatedShippingPreferencesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder
     * @param string $calculatedShippingChargeOption
     * @param string $calculatedShippingRateOption
     * @param string $insuranceOption
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder = null, $calculatedShippingChargeOption = null, $calculatedShippingRateOption = null, $insuranceOption = null, \DOMDocument $any = null)
    {
        $this
            ->setCalculatedShippingAmountForEntireOrder($calculatedShippingAmountForEntireOrder)
            ->setCalculatedShippingChargeOption($calculatedShippingChargeOption)
            ->setCalculatedShippingRateOption($calculatedShippingRateOption)
            ->setInsuranceOption($insuranceOption)
            ->setAny($any);
    }
    /**
     * Get CalculatedShippingAmountForEntireOrder value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCalculatedShippingAmountForEntireOrder()
    {
        return $this->CalculatedShippingAmountForEntireOrder;
    }
    /**
     * Set CalculatedShippingAmountForEntireOrder value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingAmountForEntireOrder(\macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder = null)
    {
        $this->CalculatedShippingAmountForEntireOrder = $calculatedShippingAmountForEntireOrder;
        return $this;
    }
    /**
     * Get CalculatedShippingChargeOption value
     * @return string|null
     */
    public function getCalculatedShippingChargeOption()
    {
        return $this->CalculatedShippingChargeOption;
    }
    /**
     * Set CalculatedShippingChargeOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculatedShippingChargeOption
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingChargeOption($calculatedShippingChargeOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid($calculatedShippingChargeOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculatedShippingChargeOption, implode(', ', \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingChargeOption = $calculatedShippingChargeOption;
        return $this;
    }
    /**
     * Get CalculatedShippingRateOption value
     * @return string|null
     */
    public function getCalculatedShippingRateOption()
    {
        return $this->CalculatedShippingRateOption;
    }
    /**
     * Set CalculatedShippingRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculatedShippingRateOption
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingRateOption($calculatedShippingRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::valueIsValid($calculatedShippingRateOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculatedShippingRateOption, implode(', ', \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingRateOption = $calculatedShippingRateOption;
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
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
     * @uses \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
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
