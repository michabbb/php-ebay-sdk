<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreCustomListingHeaderLinkCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of link in the custom listing header.
 * @subpackage Enumerations
 */
class StoreCustomListingHeaderLinkCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AboutMePage'
     * @return string 'AboutMePage'
     */
    const VALUE_ABOUT_ME_PAGE = 'AboutMePage';
    /**
     * Constant for value 'CustomPage'
     * @return string 'CustomPage'
     */
    const VALUE_CUSTOM_PAGE = 'CustomPage';
    /**
     * Constant for value 'CustomCategory'
     * @return string 'CustomCategory'
     */
    const VALUE_CUSTOM_CATEGORY = 'CustomCategory';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ABOUT_ME_PAGE
     * @uses self::VALUE_CUSTOM_PAGE
     * @uses self::VALUE_CUSTOM_CATEGORY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ABOUT_ME_PAGE,
            self::VALUE_CUSTOM_PAGE,
            self::VALUE_CUSTOM_CATEGORY,
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
