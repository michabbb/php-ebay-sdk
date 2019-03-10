<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for VeROItemStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The VeRO reporting status for an item.
 * @subpackage Enumerations
 */
class VeROItemStatusCodeType
{
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Submitted'
     * @return string 'Submitted'
     */
    const VALUE_SUBMITTED = 'Submitted';
    /**
     * Constant for value 'Removed'
     * @return string 'Removed'
     */
    const VALUE_REMOVED = 'Removed';
    /**
     * Constant for value 'SubmissionFailed'
     * @return string 'SubmissionFailed'
     */
    const VALUE_SUBMISSION_FAILED = 'SubmissionFailed';
    /**
     * Constant for value 'ClarificationRequired'
     * @return string 'ClarificationRequired'
     */
    const VALUE_CLARIFICATION_REQUIRED = 'ClarificationRequired';
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
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_SUBMITTED
     * @uses self::VALUE_REMOVED
     * @uses self::VALUE_SUBMISSION_FAILED
     * @uses self::VALUE_CLARIFICATION_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RECEIVED,
            self::VALUE_SUBMITTED,
            self::VALUE_REMOVED,
            self::VALUE_SUBMISSION_FAILED,
            self::VALUE_CLARIFICATION_REQUIRED,
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
