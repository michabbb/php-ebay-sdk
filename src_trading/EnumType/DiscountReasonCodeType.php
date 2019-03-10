<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DiscountReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used in the response of Add/Revise/Relist item calls to indicate if eBay has applied a Special offer or Promotional discount to the order line item.
 * @subpackage Enumerations
 */
class DiscountReasonCodeType
{
    /**
     * Constant for value 'SpecialOffer'
     * @return string 'SpecialOffer'
     */
    const VALUE_SPECIAL_OFFER = 'SpecialOffer';
    /**
     * Constant for value 'Promotion'
     * @return string 'Promotion'
     */
    const VALUE_PROMOTION = 'Promotion';
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
     * @uses self::VALUE_SPECIAL_OFFER
     * @uses self::VALUE_PROMOTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SPECIAL_OFFER,
            self::VALUE_PROMOTION,
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
