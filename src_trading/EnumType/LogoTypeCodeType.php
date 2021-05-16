<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogoTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class LogoTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WinningBidderNotice'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'WinningBidderNotice'
     */
    const VALUE_WINNING_BIDDER_NOTICE = 'WinningBidderNotice';
    /**
     * Constant for value 'Store'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'Custom'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_WINNING_BIDDER_NOTICE
     * @uses self::VALUE_STORE
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WINNING_BIDDER_NOTICE,
            self::VALUE_STORE,
            self::VALUE_CUSTOM,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
