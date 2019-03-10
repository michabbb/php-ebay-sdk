<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AddressAttributeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be returned in the <b>type</b> attribute of the <b>AddressAttribute</b> field. Currently, this type only contains one enumeration value, but in the future, other address
 * attributes may be created for this type.
 * @subpackage Enumerations
 */
class AddressAttributeCodeType
{
    /**
     * Constant for value 'ReferenceNumber'
     * @return string 'ReferenceNumber'
     */
    const VALUE_REFERENCE_NUMBER = 'ReferenceNumber';
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
     * @uses self::VALUE_REFERENCE_NUMBER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REFERENCE_NUMBER,
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
