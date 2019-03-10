<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AdFormatLeadStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that indicates to the owner of a classified ad whether or not an email correspondence from a prospective buyer has been answered.
 * @subpackage Enumerations
 */
class AdFormatLeadStatusCodeType
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Responded'
     * @return string 'Responded'
     */
    const VALUE_RESPONDED = 'Responded';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_RESPONDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_RESPONDED,
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
