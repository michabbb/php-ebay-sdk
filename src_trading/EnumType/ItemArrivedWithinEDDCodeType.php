<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemArrivedWithinEDDCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type list the possible status values regarding whether or not a buyer received an order line item within the estimated delivery date timeframe.
 * @subpackage Enumerations
 */
class ItemArrivedWithinEDDCodeType
{
    /**
     * Constant for value 'EddQuestionWasNotAsked'
     * @return string 'EddQuestionWasNotAsked'
     */
    const VALUE_EDD_QUESTION_WAS_NOT_ASKED = 'EddQuestionWasNotAsked';
    /**
     * Constant for value 'BuyerDidntProvideAnswer'
     * @return string 'BuyerDidntProvideAnswer'
     */
    const VALUE_BUYER_DIDNT_PROVIDE_ANSWER = 'BuyerDidntProvideAnswer';
    /**
     * Constant for value 'BuyerIndicatedItemArrivedWithinEDDRange'
     * @return string 'BuyerIndicatedItemArrivedWithinEDDRange'
     */
    const VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemArrivedWithinEDDRange';
    /**
     * Constant for value 'BuyerIndicatedItemNotArrivedWithinEDDRange'
     * @return string 'BuyerIndicatedItemNotArrivedWithinEDDRange'
     */
    const VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemNotArrivedWithinEDDRange';
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
     * @uses self::VALUE_EDD_QUESTION_WAS_NOT_ASKED
     * @uses self::VALUE_BUYER_DIDNT_PROVIDE_ANSWER
     * @uses self::VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE
     * @uses self::VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EDD_QUESTION_WAS_NOT_ASKED,
            self::VALUE_BUYER_DIDNT_PROVIDE_ANSWER,
            self::VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE,
            self::VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE,
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
