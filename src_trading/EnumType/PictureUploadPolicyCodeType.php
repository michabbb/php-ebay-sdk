<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureUploadPolicyCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Values to be used in choosing that an uploaded picture is added to the available pictures on the eBay site.
 * @subpackage Enumerations
 */
class PictureUploadPolicyCodeType
{
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'ClearAndAdd'
     * @return string 'ClearAndAdd'
     */
    const VALUE_CLEAR_AND_ADD = 'ClearAndAdd';
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
     * @uses self::VALUE_ADD
     * @uses self::VALUE_CLEAR_AND_ADD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_CLEAR_AND_ADD,
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
