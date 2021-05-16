<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VATStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
 * @subpackage Enumerations
 */
class VATStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoVATTax'
     * Meta information extracted from the WSDL
     * - documentation: (out) VAT is not applicable
     * @return string 'NoVATTax'
     */
    const VALUE_NO_VATTAX = 'NoVATTax';
    /**
     * Constant for value 'VATTax'
     * Meta information extracted from the WSDL
     * - documentation: (out) Residence in a country with VAT and user is not registered as VAT-exempt
     * @return string 'VATTax'
     */
    const VALUE_VATTAX = 'VATTax';
    /**
     * Constant for value 'VATExempt'
     * Meta information extracted from the WSDL
     * - documentation: (out) Residence in a country with VAT and user is registered as VAT-exempt
     * @return string 'VATExempt'
     */
    const VALUE_VATEXEMPT = 'VATExempt';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_VATTAX
     * @uses self::VALUE_VATTAX
     * @uses self::VALUE_VATEXEMPT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_VATTAX,
            self::VALUE_VATTAX,
            self::VALUE_VATEXEMPT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
