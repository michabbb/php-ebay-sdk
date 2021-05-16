<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type contains the different states of an eBay listing in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the
 * Final Value Fee.
 * @subpackage Enumerations
 */
class ListingStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the listing is still active. A multiple-quantity, fixed-price listing is considered active until the quantity available is '0', or the listing's scheduled end time has passed.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Ended'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the listing has ended and eBay has completed processing any sales/winning bids. The next state after 'Ended' is 'Completed'.
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Completed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the listing has ended and eBay has completed processing any sales/winning bids, and the calculation of the seller's Final Value Fee.
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration is reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_ENDED
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_ENDED,
            self::VALUE_COMPLETED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
