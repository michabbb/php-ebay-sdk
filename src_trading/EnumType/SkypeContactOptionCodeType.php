<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SkypeContactOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is no longer applicable as member communication through Skype has been disabled in API calls.
 * @subpackage Enumerations
 */
class SkypeContactOptionCodeType
{
    /**
     * Constant for value 'Chat'
     * @return string 'Chat'
     */
    const VALUE_CHAT = 'Chat';
    /**
     * Constant for value 'Voice'
     * @return string 'Voice'
     */
    const VALUE_VOICE = 'Voice';
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
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_VOICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHAT,
            self::VALUE_VOICE,
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
