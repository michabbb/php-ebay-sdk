<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CharityAffiliationTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type defines the possible values that can be returned for the <b>CharityAffiliationDetail.AffiliationType</b> field in the <b>GetUser</b> response.
 * @subpackage Enumerations
 */
class CharityAffiliationTypeCodeType
{
    /**
     * Constant for value 'Community'
     * @return string 'Community'
     */
    const VALUE_COMMUNITY = 'Community';
    /**
     * Constant for value 'Direct'
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'Remove'
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
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
     * @uses self::VALUE_COMMUNITY
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMUNITY,
            self::VALUE_DIRECT,
            self::VALUE_REMOVE,
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
