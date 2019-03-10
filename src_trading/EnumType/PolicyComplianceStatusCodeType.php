<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PolicyComplianceStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PolicyComplianceStatusCodeType
{
    /**
     * Constant for value 'Good'
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'Fair'
     * @return string 'Fair'
     */
    const VALUE_FAIR = 'Fair';
    /**
     * Constant for value 'Poor'
     * @return string 'Poor'
     */
    const VALUE_POOR = 'Poor';
    /**
     * Constant for value 'Failing'
     * @return string 'Failing'
     */
    const VALUE_FAILING = 'Failing';
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
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_FAIR
     * @uses self::VALUE_POOR
     * @uses self::VALUE_FAILING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GOOD,
            self::VALUE_FAIR,
            self::VALUE_POOR,
            self::VALUE_FAILING,
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
