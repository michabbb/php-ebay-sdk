<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InsuranceOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Shipping insurance is no longer applicable or supported in eBay APIs, but the <b>InsuranceOption</b> field is still getting returned with the <code>NotOfferedOnSite</code> value.
 * @subpackage Enumerations
 */
class InsuranceOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Optional'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NotOffered'
     * Meta information extracted from the WSDL
     * - documentation: A seller can no longer offer shipping insurance to the buyer, but the <b>InsuranceOption</b> or <b>InternationalInsuranceOption</b> fields may still be returned with this value.
     * @return string 'NotOffered'
     */
    const VALUE_NOT_OFFERED = 'NotOffered';
    /**
     * Constant for value 'IncludedInShippingHandling'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'IncludedInShippingHandling'
     */
    const VALUE_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    /**
     * Constant for value 'NotOfferedOnSite'
     * Meta information extracted from the WSDL
     * - documentation: A seller can no longer offer shipping insurance to the buyer, but the <b>InsuranceOption</b> field is still returned with this value.
     * @return string 'NotOfferedOnSite'
     */
    const VALUE_NOT_OFFERED_ON_SITE = 'NotOfferedOnSite';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Placeholder value.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_NOT_OFFERED
     * @uses self::VALUE_INCLUDED_IN_SHIPPING_HANDLING
     * @uses self::VALUE_NOT_OFFERED_ON_SITE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPTIONAL,
            self::VALUE_REQUIRED,
            self::VALUE_NOT_OFFERED,
            self::VALUE_INCLUDED_IN_SHIPPING_HANDLING,
            self::VALUE_NOT_OFFERED_ON_SITE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
