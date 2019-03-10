<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SetUserNotesActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the action to take for an item's My eBay notes.
 * @subpackage Enumerations
 */
class SetUserNotesActionCodeType
{
    /**
     * Constant for value 'AddOrUpdate'
     * @return string 'AddOrUpdate'
     */
    const VALUE_ADD_OR_UPDATE = 'AddOrUpdate';
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
     * @uses self::VALUE_ADD_OR_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD_OR_UPDATE,
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
