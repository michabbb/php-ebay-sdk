<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellerDashboardAlertSeverityCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Alerts can be either informational or a warning that identifies a problem.
 * @subpackage Enumerations
 */
class SellerDashboardAlertSeverityCodeType
{
    /**
     * Constant for value 'Informational'
     * @return string 'Informational'
     */
    const VALUE_INFORMATIONAL = 'Informational';
    /**
     * Constant for value 'Warning'
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'StrongWarning'
     * @return string 'StrongWarning'
     */
    const VALUE_STRONG_WARNING = 'StrongWarning';
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
     * @uses self::VALUE_INFORMATIONAL
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_STRONG_WARNING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INFORMATIONAL,
            self::VALUE_WARNING,
            self::VALUE_STRONG_WARNING,
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
