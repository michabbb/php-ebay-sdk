<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ShippingTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the different shipping cost models that can be offered by the seller for domestic and international shipping destinations.
 * @subpackage Enumerations
 */
class ShippingTypeCodeType
{
    /**
     * Constant for value 'Flat'
     * @return string 'Flat'
     */
    const VALUE_FLAT = 'Flat';
    /**
     * Constant for value 'Calculated'
     * @return string 'Calculated'
     */
    const VALUE_CALCULATED = 'Calculated';
    /**
     * Constant for value 'Freight'
     * @return string 'Freight'
     */
    const VALUE_FREIGHT = 'Freight';
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'NotSpecified'
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'FlatDomesticCalculatedInternational'
     * @return string 'FlatDomesticCalculatedInternational'
     */
    const VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL = 'FlatDomesticCalculatedInternational';
    /**
     * Constant for value 'CalculatedDomesticFlatInternational'
     * @return string 'CalculatedDomesticFlatInternational'
     */
    const VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL = 'CalculatedDomesticFlatInternational';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_CALCULATED
     * @uses self::VALUE_FREIGHT
     * @uses self::VALUE_FREE
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL
     * @uses self::VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FLAT,
            self::VALUE_CALCULATED,
            self::VALUE_FREIGHT,
            self::VALUE_FREE,
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL,
            self::VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL,
            self::VALUE_CUSTOM_CODE,
        );
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
