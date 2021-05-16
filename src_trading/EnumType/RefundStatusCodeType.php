<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Successful'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Successful'
     */
    const VALUE_SUCCESSFUL = 'Successful';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESSFUL
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESSFUL,
            self::VALUE_PENDING,
            self::VALUE_FAILED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
