<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AutomatedLeaveFeedbackEventCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible settings for the automated feedback mechanism embedded in the <b>SetSellingManagerFeedbackOptions</b> API call. This type is only applicable to Selling Manager Pro users.
 * @subpackage Enumerations
 */
class AutomatedLeaveFeedbackEventCodeType
{
    /**
     * Constant for value 'PositiveFeedbackReceived'
     * @return string 'PositiveFeedbackReceived'
     */
    const VALUE_POSITIVE_FEEDBACK_RECEIVED = 'PositiveFeedbackReceived';
    /**
     * Constant for value 'PaymentReceived'
     * @return string 'PaymentReceived'
     */
    const VALUE_PAYMENT_RECEIVED = 'PaymentReceived';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_POSITIVE_FEEDBACK_RECEIVED
     * @uses self::VALUE_PAYMENT_RECEIVED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POSITIVE_FEEDBACK_RECEIVED,
            self::VALUE_PAYMENT_RECEIVED,
            self::VALUE_NONE,
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
