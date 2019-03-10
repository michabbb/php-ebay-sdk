<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnsDurationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying the available return durations. This is the amount of time the seller gives the buyer for initiating a return once they receive the item.
 * @subpackage Enumerations
 */
class ReturnsDurationCodeType
{
    /**
     * Constant for value 'Days_14'
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_30'
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_60'
     * @return string 'Days_60'
     */
    const VALUE_DAYS_60 = 'Days_60';
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
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
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
