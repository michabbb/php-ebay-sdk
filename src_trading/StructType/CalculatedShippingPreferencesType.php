<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CalculatedShippingPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingAmountForEntireOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CalculatedShippingAmountForEntireOrder = null;
    /**
     * The CalculatedShippingChargeOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalculatedShippingChargeOption = null;
    /**
     * The CalculatedShippingRateOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalculatedShippingRateOption = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder = null, ?string $calculatedShippingChargeOption = null, ?string $calculatedShippingRateOption = null, ?string $insuranceOption = null, $any = null)
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
    public function getCalculatedShippingAmountForEntireOrder(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CalculatedShippingAmountForEntireOrder;
    }
    /**
     * Set CalculatedShippingAmountForEntireOrder value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingAmountForEntireOrder(?\macropage\ebaysdk\trading\StructType\AmountType $calculatedShippingAmountForEntireOrder = null): self
    {
        $this->CalculatedShippingAmountForEntireOrder = $calculatedShippingAmountForEntireOrder;
        
        return $this;
    }
    /**
     * Get CalculatedShippingChargeOption value
     * @return string|null
     */
    public function getCalculatedShippingChargeOption(): ?string
    {
        return $this->CalculatedShippingChargeOption;
    }
    /**
     * Set CalculatedShippingChargeOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $calculatedShippingChargeOption
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingChargeOption(?string $calculatedShippingChargeOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::valueIsValid($calculatedShippingChargeOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType', is_array($calculatedShippingChargeOption) ? implode(', ', $calculatedShippingChargeOption) : var_export($calculatedShippingChargeOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CalculatedShippingChargeOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingChargeOption = $calculatedShippingChargeOption;
        
        return $this;
    }
    /**
     * Get CalculatedShippingRateOption value
     * @return string|null
     */
    public function getCalculatedShippingRateOption(): ?string
    {
        return $this->CalculatedShippingRateOption;
    }
    /**
     * Set CalculatedShippingRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $calculatedShippingRateOption
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingRateOption(?string $calculatedShippingRateOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::valueIsValid($calculatedShippingRateOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType', is_array($calculatedShippingRateOption) ? implode(', ', $calculatedShippingRateOption) : var_export($calculatedShippingRateOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CalculatedShippingRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CalculatedShippingRateOption = $calculatedShippingRateOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
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
