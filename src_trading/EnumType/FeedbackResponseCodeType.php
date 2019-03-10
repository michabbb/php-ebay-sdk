<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FeedbackResponseCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used to indicate the type of response to a Feedback entry.
 * @subpackage Enumerations
 */
class FeedbackResponseCodeType
{
    /**
     * Constant for value 'Reply'
     * @return string 'Reply'
     */
    const VALUE_REPLY = 'Reply';
    /**
     * Constant for value 'FollowUp'
     * @return string 'FollowUp'
     */
    const VALUE_FOLLOW_UP = 'FollowUp';
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
     * @uses self::VALUE_REPLY
     * @uses self::VALUE_FOLLOW_UP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REPLY,
            self::VALUE_FOLLOW_UP,
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
