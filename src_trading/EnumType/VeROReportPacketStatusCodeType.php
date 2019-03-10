<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for VeROReportPacketStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the possible states of a VeRO Report packet. A VeRO Report packet is a set of one or more items that have been reported by a Verified Rights Owner as infringing upon the owner's intellectual property
 * rights.
 * @subpackage Enumerations
 */
class VeROReportPacketStatusCodeType
{
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'InProcess'
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
    /**
     * Constant for value 'Processed'
     * @return string 'Processed'
     */
    const VALUE_PROCESSED = 'Processed';
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
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_PROCESSED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RECEIVED,
            self::VALUE_IN_PROCESS,
            self::VALUE_PROCESSED,
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
