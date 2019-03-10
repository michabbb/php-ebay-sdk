<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TaxTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that lists the types of taxes that may be charged to the buyer for each order line item purchased.
 * @subpackage Enumerations
 */
class TaxTypeCodeType
{
    /**
     * Constant for value 'SalesTax'
     * @return string 'SalesTax'
     */
    const VALUE_SALES_TAX = 'SalesTax';
    /**
     * Constant for value 'WasteRecyclingFee'
     * @return string 'WasteRecyclingFee'
     */
    const VALUE_WASTE_RECYCLING_FEE = 'WasteRecyclingFee';
    /**
     * Constant for value 'GST'
     * @return string 'GST'
     */
    const VALUE_GST = 'GST';
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
     * @uses self::VALUE_SALES_TAX
     * @uses self::VALUE_WASTE_RECYCLING_FEE
     * @uses self::VALUE_GST
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SALES_TAX,
            self::VALUE_WASTE_RECYCLING_FEE,
            self::VALUE_GST,
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
