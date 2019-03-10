<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TaxIdentifierCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is not currently used.
 * @subpackage Enumerations
 */
class TaxIdentifierCodeType
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
     * @uses self::VALUE_CODICE_FISCALE
     * @uses self::VALUE_DNI
     * @uses self::VALUE_RUSSIAN_PASSPORT
     * @uses self::VALUE_CPFTAX_ID
     * @uses self::VALUE_TURKEY_ID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CODICE_FISCALE,
            self::VALUE_DNI,
            self::VALUE_RUSSIAN_PASSPORT,
            self::VALUE_CPFTAX_ID,
            self::VALUE_TURKEY_ID,
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
