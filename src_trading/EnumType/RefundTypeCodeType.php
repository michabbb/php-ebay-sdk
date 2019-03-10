<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RefundTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Explanation of the reason that the refund is being
 * issued. Applicable to Half.com refunds only.
 * @subpackage Enumerations
 */
class RefundTypeCodeType
{
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'FullPlusShipping'
     * @return string 'FullPlusShipping'
     */
    const VALUE_FULL_PLUS_SHIPPING = 'FullPlusShipping';
    /**
     * Constant for value 'CustomOrPartial'
     * @return string 'CustomOrPartial'
     */
    const VALUE_CUSTOM_OR_PARTIAL = 'CustomOrPartial';
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
     * @uses self::VALUE_FULL
     * @uses self::VALUE_FULL_PLUS_SHIPPING
     * @uses self::VALUE_CUSTOM_OR_PARTIAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL,
            self::VALUE_FULL_PLUS_SHIPPING,
            self::VALUE_CUSTOM_OR_PARTIAL,
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
