<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ReviewSortCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> <b>ReviewSortCodeType</b> and all of its enumeration values are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
 * @subpackage Enumerations
 */
class ReviewSortCodeType
{
    /**
     * Constant for value 'CreationTime'
     * @return string 'CreationTime'
     */
    const VALUE_CREATION_TIME = 'CreationTime';
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
     * @uses self::VALUE_CREATION_TIME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATION_TIME,
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
