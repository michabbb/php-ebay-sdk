<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DetailLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies standard subsets of data to return for each result within the set of results in the response payload. If no detail level is specified, a base set of data is returned. The base set of data varies per call.
 * @subpackage Enumerations
 */
class DetailLevelCodeType
{
    /**
     * Constant for value 'ReturnAll'
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ItemReturnDescription'
     * @return string 'ItemReturnDescription'
     */
    const VALUE_ITEM_RETURN_DESCRIPTION = 'ItemReturnDescription';
    /**
     * Constant for value 'ItemReturnAttributes'
     * @return string 'ItemReturnAttributes'
     */
    const VALUE_ITEM_RETURN_ATTRIBUTES = 'ItemReturnAttributes';
    /**
     * Constant for value 'ItemReturnCategories'
     * @return string 'ItemReturnCategories'
     */
    const VALUE_ITEM_RETURN_CATEGORIES = 'ItemReturnCategories';
    /**
     * Constant for value 'ReturnSummary'
     * @return string 'ReturnSummary'
     */
    const VALUE_RETURN_SUMMARY = 'ReturnSummary';
    /**
     * Constant for value 'ReturnHeaders'
     * @return string 'ReturnHeaders'
     */
    const VALUE_RETURN_HEADERS = 'ReturnHeaders';
    /**
     * Constant for value 'ReturnMessages'
     * @return string 'ReturnMessages'
     */
    const VALUE_RETURN_MESSAGES = 'ReturnMessages';
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
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_ITEM_RETURN_DESCRIPTION
     * @uses self::VALUE_ITEM_RETURN_ATTRIBUTES
     * @uses self::VALUE_ITEM_RETURN_CATEGORIES
     * @uses self::VALUE_RETURN_SUMMARY
     * @uses self::VALUE_RETURN_HEADERS
     * @uses self::VALUE_RETURN_MESSAGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURN_ALL,
            self::VALUE_ITEM_RETURN_DESCRIPTION,
            self::VALUE_ITEM_RETURN_ATTRIBUTES,
            self::VALUE_ITEM_RETURN_CATEGORIES,
            self::VALUE_RETURN_SUMMARY,
            self::VALUE_RETURN_HEADERS,
            self::VALUE_RETURN_MESSAGES,
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
