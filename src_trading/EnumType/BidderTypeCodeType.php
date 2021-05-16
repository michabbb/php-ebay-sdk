<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BidderTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidderTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AllBidder'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AllBidder'
     */
    const VALUE_ALL_BIDDER = 'AllBidder';
    /**
     * Constant for value 'HighBidder'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'HighBidder'
     */
    const VALUE_HIGH_BIDDER = 'HighBidder';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL_BIDDER
     * @uses self::VALUE_HIGH_BIDDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL_BIDDER,
            self::VALUE_HIGH_BIDDER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
