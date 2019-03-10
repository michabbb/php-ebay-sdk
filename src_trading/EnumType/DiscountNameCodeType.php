<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DiscountNameCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used by the seller to set the shipping discount type. Some of these shipping discount types apply to flat-rate shipping and others apply to calculated shipping.
 * @subpackage Enumerations
 */
class DiscountNameCodeType
{
    /**
     * Constant for value 'EachAdditionalAmount'
     * @return string 'EachAdditionalAmount'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT = 'EachAdditionalAmount';
    /**
     * Constant for value 'EachAdditionalAmountOff'
     * @return string 'EachAdditionalAmountOff'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT_OFF = 'EachAdditionalAmountOff';
    /**
     * Constant for value 'EachAdditionalPercentOff'
     * @return string 'EachAdditionalPercentOff'
     */
    const VALUE_EACH_ADDITIONAL_PERCENT_OFF = 'EachAdditionalPercentOff';
    /**
     * Constant for value 'IndividualItemWeight'
     * @return string 'IndividualItemWeight'
     */
    const VALUE_INDIVIDUAL_ITEM_WEIGHT = 'IndividualItemWeight';
    /**
     * Constant for value 'CombinedItemWeight'
     * @return string 'CombinedItemWeight'
     */
    const VALUE_COMBINED_ITEM_WEIGHT = 'CombinedItemWeight';
    /**
     * Constant for value 'WeightOff'
     * @return string 'WeightOff'
     */
    const VALUE_WEIGHT_OFF = 'WeightOff';
    /**
     * Constant for value 'ShippingCostXForAmountY'
     * @return string 'ShippingCostXForAmountY'
     */
    const VALUE_SHIPPING_COST_XFOR_AMOUNT_Y = 'ShippingCostXForAmountY';
    /**
     * Constant for value 'ShippingCostXForItemCountN'
     * @return string 'ShippingCostXForItemCountN'
     */
    const VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N = 'ShippingCostXForItemCountN';
    /**
     * Constant for value 'MaximumShippingCostPerOrder'
     * @return string 'MaximumShippingCostPerOrder'
     */
    const VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER = 'MaximumShippingCostPerOrder';
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
     * @uses self::VALUE_EACH_ADDITIONAL_AMOUNT
     * @uses self::VALUE_EACH_ADDITIONAL_AMOUNT_OFF
     * @uses self::VALUE_EACH_ADDITIONAL_PERCENT_OFF
     * @uses self::VALUE_INDIVIDUAL_ITEM_WEIGHT
     * @uses self::VALUE_COMBINED_ITEM_WEIGHT
     * @uses self::VALUE_WEIGHT_OFF
     * @uses self::VALUE_SHIPPING_COST_XFOR_AMOUNT_Y
     * @uses self::VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N
     * @uses self::VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EACH_ADDITIONAL_AMOUNT,
            self::VALUE_EACH_ADDITIONAL_AMOUNT_OFF,
            self::VALUE_EACH_ADDITIONAL_PERCENT_OFF,
            self::VALUE_INDIVIDUAL_ITEM_WEIGHT,
            self::VALUE_COMBINED_ITEM_WEIGHT,
            self::VALUE_WEIGHT_OFF,
            self::VALUE_SHIPPING_COST_XFOR_AMOUNT_Y,
            self::VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N,
            self::VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER,
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
