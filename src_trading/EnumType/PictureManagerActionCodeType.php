<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureManagerActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerActionCodeType
{
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Rename'
     * @return string 'Rename'
     */
    const VALUE_RENAME = 'Rename';
    /**
     * Constant for value 'Move'
     * @return string 'Move'
     */
    const VALUE_MOVE = 'Move';
    /**
     * Constant for value 'Change'
     * @return string 'Change'
     */
    const VALUE_CHANGE = 'Change';
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
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_RENAME
     * @uses self::VALUE_MOVE
     * @uses self::VALUE_CHANGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_DELETE,
            self::VALUE_RENAME,
            self::VALUE_MOVE,
            self::VALUE_CHANGE,
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
