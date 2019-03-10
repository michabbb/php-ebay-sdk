<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RefundOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the possible refund, exchange, or store credit options that a seller may offer a buyer when the buyer wants to return the item.
 * @subpackage Enumerations
 */
class RefundOptionsCodeType
{
    /**
     * Constant for value 'MoneyBack'
     * @return string 'MoneyBack'
     */
    const VALUE_MONEY_BACK = 'MoneyBack';
    /**
     * Constant for value 'Exchange'
     * @return string 'Exchange'
     */
    const VALUE_EXCHANGE = 'Exchange';
    /**
     * Constant for value 'MerchandiseCredit'
     * @return string 'MerchandiseCredit'
     */
    const VALUE_MERCHANDISE_CREDIT = 'MerchandiseCredit';
    /**
     * Constant for value 'MoneyBackOrExchange'
     * @return string 'MoneyBackOrExchange'
     */
    const VALUE_MONEY_BACK_OR_EXCHANGE = 'MoneyBackOrExchange';
    /**
     * Constant for value 'MoneyBackOrReplacement'
     * @return string 'MoneyBackOrReplacement'
     */
    const VALUE_MONEY_BACK_OR_REPLACEMENT = 'MoneyBackOrReplacement';
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
     * @uses self::VALUE_MONEY_BACK
     * @uses self::VALUE_EXCHANGE
     * @uses self::VALUE_MERCHANDISE_CREDIT
     * @uses self::VALUE_MONEY_BACK_OR_EXCHANGE
     * @uses self::VALUE_MONEY_BACK_OR_REPLACEMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MONEY_BACK,
            self::VALUE_EXCHANGE,
            self::VALUE_MERCHANDISE_CREDIT,
            self::VALUE_MONEY_BACK_OR_EXCHANGE,
            self::VALUE_MONEY_BACK_OR_REPLACEMENT,
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
