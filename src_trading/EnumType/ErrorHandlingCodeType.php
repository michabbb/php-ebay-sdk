<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ErrorHandlingCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Preferences that specify how eBay should handle certain requests that contain invalid data or that could partially fail. These preferences give you some control over whether eBay returns warnings or errors in response to invalid data
 * and how eBay handles listing requests when such data is passed in. For example, these preferences are applicable to <b>AddItem</b> and related calls when Item Specifics are specified, and to <b>CompleteSale</b>. See <a
 * href="http://developer.ebay.com/devzone/guides/ebayfeatures/Basics/Call-ErrorHandling.htmll">Error Handling</a> for details about these preferences and their effects.
 * @subpackage Enumerations
 */
class ErrorHandlingCodeType
{
    /**
     * Constant for value 'Legacy'
     * @return string 'Legacy'
     */
    const VALUE_LEGACY = 'Legacy';
    /**
     * Constant for value 'BestEffort'
     * @return string 'BestEffort'
     */
    const VALUE_BEST_EFFORT = 'BestEffort';
    /**
     * Constant for value 'AllOrNothing'
     * @return string 'AllOrNothing'
     */
    const VALUE_ALL_OR_NOTHING = 'AllOrNothing';
    /**
     * Constant for value 'FailOnError'
     * @return string 'FailOnError'
     */
    const VALUE_FAIL_ON_ERROR = 'FailOnError';
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
     * @uses self::VALUE_LEGACY
     * @uses self::VALUE_BEST_EFFORT
     * @uses self::VALUE_ALL_OR_NOTHING
     * @uses self::VALUE_FAIL_ON_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEGACY,
            self::VALUE_BEST_EFFORT,
            self::VALUE_ALL_OR_NOTHING,
            self::VALUE_FAIL_ON_ERROR,
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
