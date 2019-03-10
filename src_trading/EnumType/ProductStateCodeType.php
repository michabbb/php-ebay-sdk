<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ProductStateCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ProductStateCodeType
{
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'UpdateMajor'
     * @return string 'UpdateMajor'
     */
    const VALUE_UPDATE_MAJOR = 'UpdateMajor';
    /**
     * Constant for value 'UpdateNoDetails'
     * @return string 'UpdateNoDetails'
     */
    const VALUE_UPDATE_NO_DETAILS = 'UpdateNoDetails';
    /**
     * Constant for value 'Merge'
     * @return string 'Merge'
     */
    const VALUE_MERGE = 'Merge';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
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
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_UPDATE_MAJOR
     * @uses self::VALUE_UPDATE_NO_DETAILS
     * @uses self::VALUE_MERGE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UPDATE,
            self::VALUE_UPDATE_MAJOR,
            self::VALUE_UPDATE_NO_DETAILS,
            self::VALUE_MERGE,
            self::VALUE_DELETE,
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
