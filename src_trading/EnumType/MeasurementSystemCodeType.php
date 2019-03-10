<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MeasurementSystemCodeType EnumType
 * @subpackage Enumerations
 */
class MeasurementSystemCodeType
{
    /**
     * Constant for value 'English'
     * @return string 'English'
     */
    const VALUE_ENGLISH = 'English';
    /**
     * Constant for value 'Metric'
     * @return string 'Metric'
     */
    const VALUE_METRIC = 'Metric';
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
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_METRIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENGLISH,
            self::VALUE_METRIC,
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
