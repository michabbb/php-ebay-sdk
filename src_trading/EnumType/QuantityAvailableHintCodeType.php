<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for QuantityAvailableHintCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the text message type of the item's quantity availability.
 * @subpackage Enumerations
 */
class QuantityAvailableHintCodeType
{
    /**
     * Constant for value 'Limited'
     * @return string 'Limited'
     */
    const VALUE_LIMITED = 'Limited';
    /**
     * Constant for value 'MoreThan'
     * @return string 'MoreThan'
     */
    const VALUE_MORE_THAN = 'MoreThan';
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
     * @uses self::VALUE_LIMITED
     * @uses self::VALUE_MORE_THAN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIMITED,
            self::VALUE_MORE_THAN,
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
