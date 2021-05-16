<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WirelessCarrierIDCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains a list of wireless carriers that may be providing SMS messages for a Platform Notifications subscriber.
 * @subpackage Enumerations
 */
class WirelessCarrierIDCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Cingular'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Cingular is no longer in existence.
     * @return string 'Cingular'
     */
    const VALUE_CINGULAR = 'Cingular';
    /**
     * Constant for value 'TMobile'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that T-Mobile is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'TMobile'
     */
    const VALUE_TMOBILE = 'TMobile';
    /**
     * Constant for value 'Sprint'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Sprint is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'Sprint'
     */
    const VALUE_SPRINT = 'Sprint';
    /**
     * Constant for value 'Nextel'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Nextel was purchased by Sprint.
     * @return string 'Nextel'
     */
    const VALUE_NEXTEL = 'Nextel';
    /**
     * Constant for value 'Verizon'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Verizon is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'Verizon'
     */
    const VALUE_VERIZON = 'Verizon';
    /**
     * Constant for value 'CincinnatiBell'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Cincinnati Bell is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'CincinnatiBell'
     */
    const VALUE_CINCINNATI_BELL = 'CincinnatiBell';
    /**
     * Constant for value 'Dobson'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Dobson is no longer in existence.
     * @return string 'Dobson'
     */
    const VALUE_DOBSON = 'Dobson';
    /**
     * Constant for value 'Alltel'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Alltel is no longer in existence.
     * @return string 'Alltel'
     */
    const VALUE_ALLTEL = 'Alltel';
    /**
     * Constant for value 'Leap'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Leap is no longer in existence.
     * @return string 'Leap'
     */
    const VALUE_LEAP = 'Leap';
    /**
     * Constant for value 'USCellular'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that US Cellular is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'USCellular'
     */
    const VALUE_USCELLULAR = 'USCellular';
    /**
     * Constant for value 'Movistar'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Movistar is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'Movistar'
     */
    const VALUE_MOVISTAR = 'Movistar';
    /**
     * Constant for value 'Amena'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, as Amena is no longer in existence.
     * @return string 'Amena'
     */
    const VALUE_AMENA = 'Amena';
    /**
     * Constant for value 'Vodafone'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that Vodafone is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'Vodafone'
     */
    const VALUE_VODAFONE = 'Vodafone';
    /**
     * Constant for value 'ATT'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that AT&T is providing SMS messages for the Platform Notifications subscriber.
     * @return string 'ATT'
     */
    const VALUE_ATT = 'ATT';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
