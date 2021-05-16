<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BidderStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidderStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Approved'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'Denied'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Denied'
     */
    const VALUE_DENIED = 'Denied';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_DENIED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_APPROVED,
            self::VALUE_DENIED,
            self::VALUE_PENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
