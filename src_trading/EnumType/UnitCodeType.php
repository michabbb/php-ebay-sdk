<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UnitCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Units of measure that you can use to specify properties such as weight and size dimensions.
 * @subpackage Enumerations
 */
class UnitCodeType
{
    /**
     * Constant for value 'kg'
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
    /**
     * Constant for value 'gm'
     * @return string 'gm'
     */
    const VALUE_GM = 'gm';
    /**
     * Constant for value 'lbs'
     * @return string 'lbs'
     */
    const VALUE_LBS = 'lbs';
    /**
     * Constant for value 'oz'
     * @return string 'oz'
     */
    const VALUE_OZ = 'oz';
    /**
     * Constant for value 'cm'
     * @return string 'cm'
     */
    const VALUE_CM = 'cm';
    /**
     * Constant for value 'mm'
     * @return string 'mm'
     */
    const VALUE_MM = 'mm';
    /**
     * Constant for value 'inches'
     * @return string 'inches'
     */
    const VALUE_INCHES = 'inches';
    /**
     * Constant for value 'ft'
     * @return string 'ft'
     */
    const VALUE_FT = 'ft';
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
     * @uses self::VALUE_KG
     * @uses self::VALUE_GM
     * @uses self::VALUE_LBS
     * @uses self::VALUE_OZ
     * @uses self::VALUE_CM
     * @uses self::VALUE_MM
     * @uses self::VALUE_INCHES
     * @uses self::VALUE_FT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_KG,
            self::VALUE_GM,
            self::VALUE_LBS,
            self::VALUE_OZ,
            self::VALUE_CM,
            self::VALUE_MM,
            self::VALUE_INCHES,
            self::VALUE_FT,
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
