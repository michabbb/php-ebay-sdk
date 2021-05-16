<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BidGroupItemStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BidGroupItemStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CurrentBid'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CurrentBid'
     */
    const VALUE_CURRENT_BID = 'CurrentBid';
    /**
     * Constant for value 'Cancelled'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Skipped'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Skipped'
     */
    const VALUE_SKIPPED = 'Skipped';
    /**
     * Constant for value 'Ended'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Won'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Won'
     */
    const VALUE_WON = 'Won';
    /**
     * Constant for value 'GroupClosed'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'GroupClosed'
     */
    const VALUE_GROUP_CLOSED = 'GroupClosed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CURRENT_BID
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_SKIPPED
     * @uses self::VALUE_ENDED
     * @uses self::VALUE_WON
     * @uses self::VALUE_GROUP_CLOSED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CURRENT_BID,
            self::VALUE_CANCELLED,
            self::VALUE_PENDING,
            self::VALUE_SKIPPED,
            self::VALUE_ENDED,
            self::VALUE_WON,
            self::VALUE_GROUP_CLOSED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
