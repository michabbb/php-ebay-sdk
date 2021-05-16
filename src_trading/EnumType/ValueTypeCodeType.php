<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ValueTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type is used by multiple Trading API calls, including <b>GetCategorySpecifics</b> call and order management calls (like <b>GetOrders</b>). <br/><br/> The values used by <b>GetCategorySpecifics</b> is the data type of
 * the recommended Item Specific called out in the <b>NameRecommendation.Name</b> field. <br/><br/> The values used by <b>GetOrders</b> (and other order management calls) is the type of tax ID used in the <strong>BuyerTaxIdentifier</strong> container.
 * @subpackage Enumerations
 */
class ValueTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Decimal'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the recommended Item Specific should have numeric values with a decimal point, like 3.14159. Item Specific values cannot be expressed as float or double types.
     * @return string 'Decimal'
     */
    const VALUE_DECIMAL = 'Decimal';
    /**
     * Constant for value 'Numeric'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the recommended Item Specific should have integer values (no decimal point), like 3. Item Specific values cannot be expressed as float or double types.
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Constant for value 'Text'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the value(s) of the recommended Item Specific should be free-form text. This is the default value. The maximum length of a text-based Item Specific is general 65 characters, but instance aspects (like
     * 'Bundle Description' or 'California Prop 65 Warning') are allowed longer lengths.
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'ISBN'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the recommended Item Specific is an International Standard Book Number (ISBN) value. ISBNs can contain either 10 or 13 characters.
     * @return string 'ISBN'
     */
    const VALUE_ISBN = 'ISBN';
    /**
     * Constant for value 'UPC'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the recommended Item Specific is a Universal Product Code (UPC) value. UPCs contain 12 characters.
     * @return string 'UPC'
     */
    const VALUE_UPC = 'UPC';
    /**
     * Constant for value 'EAN'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the recommended Item Specific is a European Article Number (EAN). EANs contain 13 characters.
     * @return string 'EAN'
     */
    const VALUE_EAN = 'EAN';
    /**
     * Constant for value 'Date'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the value(s) of the recommended Item Specific is a date value, which will should use the date format specified in the <b>ValueFormat</b> field.
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'CodiceFiscale'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Codice Fiscale ID, which is an identifier used by the Italian government to identify taxpayers in Italy.
     * @return string 'CodiceFiscale'
     */
    const VALUE_CODICE_FISCALE = 'CodiceFiscale';
    /**
     * Constant for value 'DNI'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Spanish National Identity Number, which is one identifier used by the Spanish government to identify taxpayers in Spain. In Spanish, this ID is known as the 'Documento
     * nacional de identidad'. The other tax identifier for Spanish residents is the NIE number, or 'Numero de Identidad de Extranjero'.
     * @return string 'DNI'
     */
    const VALUE_DNI = 'DNI';
    /**
     * Constant for value 'RussianPassport'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Russian Passport number.
     * @return string 'RussianPassport'
     */
    const VALUE_RUSSIAN_PASSPORT = 'RussianPassport';
    /**
     * Constant for value 'CPFTaxID'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Tax Registration Number, which is an identifier used by the Brazilian government to identify taxpayers in Brazil. In Portuguese, this ID is known as the 'Cadastro de
     * Pessoas Fisicas', or 'CPF'.
     * @return string 'CPFTaxID'
     */
    const VALUE_CPFTAX_ID = 'CPFTaxID';
    /**
     * Constant for value 'TurkeyID'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Turkish Identification Number, which is an identifier used by the Turkish government to identify taxpayers in Turkey. In Turkish, this ID is known as the 'Turkiye
     * Cumhuriyeti Kimlik Numarasi', often abbreviated as T.C. Kimlik No.
     * @return string 'TurkeyID'
     */
    const VALUE_TURKEY_ID = 'TurkeyID';
    /**
     * Constant for value 'NIE'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a NIE Number, which is one identifier used by the Spanish government to identify taxpayers in Spain. 'NIE' stands for 'Numero de Identidad de Extranjero'. The other tax
     * identifier for Spanish residents is the DNI number, or 'Documento nacional de identidad'. Spanish residents can also be identified by their Spanish VAT (Value-Added Tax) number, which is also called the 'Numero de Identificacion Fiscal' or NIF.
     * @return string 'NIE'
     */
    const VALUE_NIE = 'NIE';
    /**
     * Constant for value 'NIF'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the ID in the <b>ID</b> field is an NIF Number, which is also known as their Spanish VAT (Value-Added Tax) number. 'NIF' stands for 'Numero de Identificacion Fiscal'. Spanish residents can also be identified
     * by their DNI ('Documento nacional de identidad') number or their NIE ('Numero de Identidad de Extranjero') number.
     * @return string 'NIF'
     */
    const VALUE_NIF = 'NIF';
    /**
     * Constant for value 'CEDULA'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a Cedula number, which is an identifier used by the Chilean, Columbian, and Dominican Republic governments to identify taxpayers in those countries. This ID is sometimes
     * referred to as a 'Cedula de Identidad'.
     * @return string 'CEDULA'
     */
    const VALUE_CEDULA = 'CEDULA';
    /**
     * Constant for value 'NIT'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a NIT number, which is an identifier used by the Guatemalan government to identify taxpayers in Guatemala. In Spanish, this ID is known as the 'Numero de identificacion
     * tributaria'.
     * @return string 'NIT'
     */
    const VALUE_NIT = 'NIT';
    /**
     * Constant for value 'DriverLicense'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the identifier in the <b>ID</b> field is a driver's license number.
     * @return string 'DriverLicense'
     */
    const VALUE_DRIVER_LICENSE = 'DriverLicense';
    /**
     * Constant for value 'CNPJ'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the tax ID in the <b>ID</b> field is a CNPJ number, which is an identifier used by the Brazilian government to identify taxpayers in Brazil. In Portuguese, this ID is known as the 'Cadastro Nacional da
     * Pessoa Juridica'.
     * @return string 'CNPJ'
     */
    const VALUE_CNPJ = 'CNPJ';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
