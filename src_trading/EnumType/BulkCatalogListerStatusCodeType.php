<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BulkCatalogListerStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BulkCatalogListerStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Preapproved'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Preapproved'
     */
    const VALUE_PREAPPROVED = 'Preapproved';
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'OnWatch'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'OnWatch'
     */
    const VALUE_ON_WATCH = 'OnWatch';
    /**
     * Constant for value 'OnHold'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
    /**
     * Constant for value 'Suspended'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'WatchWarn'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'WatchWarn'
     */
    const VALUE_WATCH_WARN = 'WatchWarn';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PREAPPROVED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_ON_WATCH
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_WATCH_WARN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PREAPPROVED,
            self::VALUE_ACTIVE,
            self::VALUE_ON_WATCH,
            self::VALUE_ON_HOLD,
            self::VALUE_SUSPENDED,
            self::VALUE_WATCH_WARN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
