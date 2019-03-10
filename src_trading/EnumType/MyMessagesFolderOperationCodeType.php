<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MyMessagesFolderOperationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: MyMessagesFolderOperationCodeType - Indicates the type of operation to perform on a specified My Messsages folder. Operations cannot be performed on the Inbox or Sent folders.
 * @subpackage Enumerations
 */
class MyMessagesFolderOperationCodeType
{
    /**
     * Constant for value 'Display'
     * @return string 'Display'
     */
    const VALUE_DISPLAY = 'Display';
    /**
     * Constant for value 'Rename'
     * @return string 'Rename'
     */
    const VALUE_RENAME = 'Rename';
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
     * @uses self::VALUE_DISPLAY
     * @uses self::VALUE_RENAME
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISPLAY,
            self::VALUE_RENAME,
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
