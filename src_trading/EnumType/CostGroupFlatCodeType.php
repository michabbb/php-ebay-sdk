<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CostGroupFlatCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is not used.
 * @subpackage Enumerations
 */
class CostGroupFlatCodeType
{
    /**
     * Constant for value 'Group1MaxFlatShippingCost'
     * @return string 'Group1MaxFlatShippingCost'
     */
    const VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';
    /**
     * Constant for value 'Group2MaxFlatShippingCost'
     * @return string 'Group2MaxFlatShippingCost'
     */
    const VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';
    /**
     * Constant for value 'Group3MaxFlatShippingCost'
     * @return string 'Group3MaxFlatShippingCost'
     */
    const VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';
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
     * @uses self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST,
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
