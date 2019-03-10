<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ValueTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type is used by multiple Trading API calls, including <b>GetCategorySpecifics</b> call and order management calls (like <b>GetOrders</b>). <br/><br/> The values used by <b>GetCategorySpecifics</b> is the data type of
 * the recommended Item Specific called out in the <b>NameRecommendation.Name</b> field. <br/><br/> The values used by <b>GetOrders</b> (and other order management calls) is the type of tax ID used in the <strong>BuyerTaxIdentifier</strong> container.
 * @subpackage Enumerations
 */
class ValueTypeCodeType
{
    /**
     * Constant for value 'Decimal'
     * @return string 'Decimal'
     */
    const VALUE_DECIMAL = 'Decimal';
    /**
     * Constant for value 'Numeric'
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'ISBN'
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'UPC'
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'EAN'
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
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
     * Constant for value 'NIE'
     * @return string 'NIE'
     */
    const VALUE_NIE = 'NIE';
    /**
     * Constant for value 'NIF'
     * @return string 'NIF'
     */
    const VALUE_NIF = 'NIF';
    /**
     * Constant for value 'CEDULA'
     * @return string 'CEDULA'
     */
    const VALUE_CEDULA = 'CEDULA';
    /**
     * Constant for value 'NIT'
     * @return string 'NIT'
     */
    const VALUE_NIT = 'NIT';
    /**
     * Constant for value 'DriverLicense'
     * @return string 'DriverLicense'
     */
    const VALUE_DRIVER_LICENSE = 'DriverLicense';
    /**
     * Constant for value 'CNPJ'
     * @return string 'CNPJ'
     */
    const VALUE_CNPJ = 'CNPJ';
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
     * @uses self::VALUE_DECIMAL
     * @uses self::VALUE_NUMERIC
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_ISBN
     * @uses self::VALUE_UPC
     * @uses self::VALUE_EAN
     * @uses self::VALUE_DATE
     * @uses self::VALUE_CODICE_FISCALE
     * @uses self::VALUE_DNI
     * @uses self::VALUE_RUSSIAN_PASSPORT
     * @uses self::VALUE_CPFTAX_ID
     * @uses self::VALUE_TURKEY_ID
     * @uses self::VALUE_NIE
     * @uses self::VALUE_NIF
     * @uses self::VALUE_CEDULA
     * @uses self::VALUE_NIT
     * @uses self::VALUE_DRIVER_LICENSE
     * @uses self::VALUE_CNPJ
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DECIMAL,
            self::VALUE_NUMERIC,
            self::VALUE_TEXT,
            self::VALUE_ISBN,
            self::VALUE_UPC,
            self::VALUE_EAN,
            self::VALUE_DATE,
            self::VALUE_CODICE_FISCALE,
            self::VALUE_DNI,
            self::VALUE_RUSSIAN_PASSPORT,
            self::VALUE_CPFTAX_ID,
            self::VALUE_TURKEY_ID,
            self::VALUE_NIE,
            self::VALUE_NIF,
            self::VALUE_CEDULA,
            self::VALUE_NIT,
            self::VALUE_DRIVER_LICENSE,
            self::VALUE_CNPJ,
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
