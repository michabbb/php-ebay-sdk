<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for CommentTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type list the Feedback ratings that can be left by one eBay user for another user regarding that user's experience with the another user during the purchase/checkout flow of an order line item.
 * @subpackage Enumerations
 */
class CommentTypeCodeType
{
    /**
     * Constant for value 'Positive'
     * @return string 'Positive'
     */
    const VALUE_POSITIVE = 'Positive';
    /**
     * Constant for value 'Neutral'
     * @return string 'Neutral'
     */
    const VALUE_NEUTRAL = 'Neutral';
    /**
     * Constant for value 'Negative'
     * @return string 'Negative'
     */
    const VALUE_NEGATIVE = 'Negative';
    /**
     * Constant for value 'Withdrawn'
     * @return string 'Withdrawn'
     */
    const VALUE_WITHDRAWN = 'Withdrawn';
    /**
     * Constant for value 'IndependentlyWithdrawn'
     * @return string 'IndependentlyWithdrawn'
     */
    const VALUE_INDEPENDENTLY_WITHDRAWN = 'IndependentlyWithdrawn';
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
     * @uses self::VALUE_POSITIVE
     * @uses self::VALUE_NEUTRAL
     * @uses self::VALUE_NEGATIVE
     * @uses self::VALUE_WITHDRAWN
     * @uses self::VALUE_INDEPENDENTLY_WITHDRAWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POSITIVE,
            self::VALUE_NEUTRAL,
            self::VALUE_NEGATIVE,
            self::VALUE_WITHDRAWN,
            self::VALUE_INDEPENDENTLY_WITHDRAWN,
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
