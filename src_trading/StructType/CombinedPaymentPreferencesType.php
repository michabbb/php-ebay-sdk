<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CombinedPaymentPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used to define all combined payment preferences, including preferences and rules for Calculated and Flat Rate shipping, a flag to allow or disallow <a
 * href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders, and the time period in which to allow buyers to combine multiple purchases from the seller into a Combined
 * Invoice order.
 * @subpackage Structs
 */
class CombinedPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingPreferences
     * Meta informations extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use SetShippingDiscountProfiles to set all Calculated Shipping rules and preferences, and use GetShippingDiscountProfiles to retrieve the same information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
     */
    public $CalculatedShippingPreferences;
    /**
     * The CombinedPaymentOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether or not a seller wants to allow buyers to combine single order line items into a Combined Invoice order. A Combined Invoice order can be created by the buyer or seller if multiple unpaid order line items exist
     * between the same buyer and seller. Often, a Combined Invoice order can reduce shipping and handling expenses for the buyer and seller.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedPaymentOption;
    /**
     * The CombinedPaymentPeriod
     * Meta informations extracted from the WSDL
     * - documentation: DO NOT USE THIS FIELD. As an alternative, use the CombinedDuration field in SetShippingDiscountProfiles to specify the time period in which to allow buyers to combine order line items into a Combined Invoice order. Use
     * GetShippingDiscountProfiles to retrieve the CombinedDuration value.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedPaymentPeriod;
    /**
     * The FlatShippingPreferences
     * Meta informations extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use SetShippingDiscountProfiles to set all Flat Rate Shipping rules and preferences, and use GetShippingDiscountProfiles to retrieve the same information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
     */
    public $FlatShippingPreferences;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CombinedPaymentPreferencesType
     * @uses CombinedPaymentPreferencesType::setCalculatedShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentOption()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentPeriod()
     * @uses CombinedPaymentPreferencesType::setFlatShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @param string $combinedPaymentOption
     * @param string $combinedPaymentPeriod
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null, $combinedPaymentOption = null, $combinedPaymentPeriod = null, \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences = null, \DOMDocument $any = null)
    {
        $this
            ->setCalculatedShippingPreferences($calculatedShippingPreferences)
            ->setCombinedPaymentOption($combinedPaymentOption)
            ->setCombinedPaymentPeriod($combinedPaymentPeriod)
            ->setFlatShippingPreferences($flatShippingPreferences)
            ->setAny($any);
    }
    /**
     * Get CalculatedShippingPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType|null
     */
    public function getCalculatedShippingPreferences()
    {
        return $this->CalculatedShippingPreferences;
    }
    /**
     * Set CalculatedShippingPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCalculatedShippingPreferences(\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null)
    {
        $this->CalculatedShippingPreferences = $calculatedShippingPreferences;
        return $this;
    }
    /**
     * Get CombinedPaymentOption value
     * @return string|null
     */
    public function getCombinedPaymentOption()
    {
        return $this->CombinedPaymentOption;
    }
    /**
     * Set CombinedPaymentOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedPaymentOption
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentOption($combinedPaymentOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid($combinedPaymentOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $combinedPaymentOption, implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentOption = $combinedPaymentOption;
        return $this;
    }
    /**
     * Get CombinedPaymentPeriod value
     * @return string|null
     */
    public function getCombinedPaymentPeriod()
    {
        return $this->CombinedPaymentPeriod;
    }
    /**
     * Set CombinedPaymentPeriod value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedPaymentPeriod
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentPeriod($combinedPaymentPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedPaymentPeriod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $combinedPaymentPeriod, implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentPeriod = $combinedPaymentPeriod;
        return $this;
    }
    /**
     * Get FlatShippingPreferences value
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType|null
     */
    public function getFlatShippingPreferences()
    {
        return $this->FlatShippingPreferences;
    }
    /**
     * Set FlatShippingPreferences value
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setFlatShippingPreferences(\macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences = null)
    {
        $this->FlatShippingPreferences = $flatShippingPreferences;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
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
