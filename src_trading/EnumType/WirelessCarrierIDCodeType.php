<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for WirelessCarrierIDCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains a list of wireless carriers that may be providing SMS messages for a Platform Notifications subscriber.
 * @subpackage Enumerations
 */
class WirelessCarrierIDCodeType
{
    /**
     * Constant for value 'Cingular'
     * @return string 'Cingular'
     */
    const VALUE_CINGULAR = 'Cingular';
    /**
     * Constant for value 'TMobile'
     * @return string 'TMobile'
     */
    const VALUE_TMOBILE = 'TMobile';
    /**
     * Constant for value 'Sprint'
     * @return string 'Sprint'
     */
    const VALUE_SPRINT = 'Sprint';
    /**
     * Constant for value 'Nextel'
     * @return string 'Nextel'
     */
    const VALUE_NEXTEL = 'Nextel';
    /**
     * Constant for value 'Verizon'
     * @return string 'Verizon'
     */
    const VALUE_VERIZON = 'Verizon';
    /**
     * Constant for value 'CincinnatiBell'
     * @return string 'CincinnatiBell'
     */
    const VALUE_CINCINNATI_BELL = 'CincinnatiBell';
    /**
     * Constant for value 'Dobson'
     * @return string 'Dobson'
     */
    const VALUE_DOBSON = 'Dobson';
    /**
     * Constant for value 'Alltel'
     * @return string 'Alltel'
     */
    const VALUE_ALLTEL = 'Alltel';
    /**
     * Constant for value 'Leap'
     * @return string 'Leap'
     */
    const VALUE_LEAP = 'Leap';
    /**
     * Constant for value 'USCellular'
     * @return string 'USCellular'
     */
    const VALUE_USCELLULAR = 'USCellular';
    /**
     * Constant for value 'Movistar'
     * @return string 'Movistar'
     */
    const VALUE_MOVISTAR = 'Movistar';
    /**
     * Constant for value 'Amena'
     * @return string 'Amena'
     */
    const VALUE_AMENA = 'Amena';
    /**
     * Constant for value 'Vodafone'
     * @return string 'Vodafone'
     */
    const VALUE_VODAFONE = 'Vodafone';
    /**
     * Constant for value 'ATT'
     * @return string 'ATT'
     */
    const VALUE_ATT = 'ATT';
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
     * @uses self::VALUE_CINGULAR
     * @uses self::VALUE_TMOBILE
     * @uses self::VALUE_SPRINT
     * @uses self::VALUE_NEXTEL
     * @uses self::VALUE_VERIZON
     * @uses self::VALUE_CINCINNATI_BELL
     * @uses self::VALUE_DOBSON
     * @uses self::VALUE_ALLTEL
     * @uses self::VALUE_LEAP
     * @uses self::VALUE_USCELLULAR
     * @uses self::VALUE_MOVISTAR
     * @uses self::VALUE_AMENA
     * @uses self::VALUE_VODAFONE
     * @uses self::VALUE_ATT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CINGULAR,
            self::VALUE_TMOBILE,
            self::VALUE_SPRINT,
            self::VALUE_NEXTEL,
            self::VALUE_VERIZON,
            self::VALUE_CINCINNATI_BELL,
            self::VALUE_DOBSON,
            self::VALUE_ALLTEL,
            self::VALUE_LEAP,
            self::VALUE_USCELLULAR,
            self::VALUE_MOVISTAR,
            self::VALUE_AMENA,
            self::VALUE_VODAFONE,
            self::VALUE_ATT,
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
