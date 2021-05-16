<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TaxIdentifierCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is not currently used.
 * @subpackage Enumerations
 */
class TaxIdentifierCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CodiceFiscale'
     * @return string 'CodiceFiscale'
     */
    const VALUE_CODICE_FISCALE = 'CodiceFiscale';
    /**
     * Constant for value 'DNI'
     * @return string 'DNI'
     */
    const VALUE_DNI = 'DNI';
    /**
     * Constant for value 'RussianPassport'
     * @return string 'RussianPassport'
     */
    const VALUE_RUSSIAN_PASSPORT = 'RussianPassport';
    /**
     * Constant for value 'CPFTaxID'
     * @return string 'CPFTaxID'
     */
    const VALUE_CPFTAX_ID = 'CPFTaxID';
    /**
     * Constant for value 'TurkeyID'
     * @return string 'TurkeyID'
     */
    const VALUE_TURKEY_ID = 'TurkeyID';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CODICE_FISCALE
     * @uses self::VALUE_DNI
     * @uses self::VALUE_RUSSIAN_PASSPORT
     * @uses self::VALUE_CPFTAX_ID
     * @uses self::VALUE_TURKEY_ID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CODICE_FISCALE,
            self::VALUE_DNI,
            self::VALUE_RUSSIAN_PASSPORT,
            self::VALUE_CPFTAX_ID,
            self::VALUE_TURKEY_ID,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
