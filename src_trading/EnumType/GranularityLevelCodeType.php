<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for GranularityLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a predefined subset of fields to return. The predefined set of fields can vary for different calls. Only applicable to certain calls (see request types that include a GranularityLevel property). For calls that support this
 * filter, see the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Basics/eBay-SelectingFields.html">eBay Features Guide</a> for a list of the output fields that are returned for each level. Only one level can be specified at a time. For
 * GetSellerList, use DetailLevel or GranularityLevel in a given request, but not both. For GetSellerList, if GranularityLevel is specified, DetailLevel is ignored.
 * @subpackage Enumerations
 */
class GranularityLevelCodeType
{
    /**
     * Constant for value 'Coarse'
     * @return string 'Coarse'
     */
    const VALUE_COARSE = 'Coarse';
    /**
     * Constant for value 'Fine'
     * @return string 'Fine'
     */
    const VALUE_FINE = 'Fine';
    /**
     * Constant for value 'Medium'
     * @return string 'Medium'
     */
    const VALUE_MEDIUM = 'Medium';
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
     * @uses self::VALUE_COARSE
     * @uses self::VALUE_FINE
     * @uses self::VALUE_MEDIUM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COARSE,
            self::VALUE_FINE,
            self::VALUE_MEDIUM,
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
