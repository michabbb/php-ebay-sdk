<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnpaidItemCaseOpenTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that indicates the method used to open an Unpaid Item case.
 * @subpackage Enumerations
 */
class UnpaidItemCaseOpenTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Auto'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Unpaid Item case was opened automatically through eBay's Unpaid Item Assistant feature.
     * @return string 'Auto'
     */
    const VALUE_AUTO = 'Auto';
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller opened an Unpaid Item case manually through the Resolution Center or by using the Trading API's <strong>AddDispute</strong> call.
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTO
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUTO,
            self::VALUE_MANUAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
