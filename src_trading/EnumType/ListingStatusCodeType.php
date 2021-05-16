<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This
 * processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the
 * listing.
 * @subpackage Enumerations
 */
class ListingStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: The listing is still active or the listing has ended with a sale but eBay has not completed processing the sale details (e.g., total price and high bidder). A multi-item listing is considered active until all items have winning bids
     * or purchases or the listing ends with at least one winning bid or purchase. If the listing has ended with a sale but this Active status is returned, please allow several minutes for eBay to finish processing the listing.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Ended'
     * Meta information extracted from the WSDL
     * - documentation: The listing has ended. If the listing ended with a sale, eBay has completed processing of the sale. All sale information returned from eBay (e.g., total price and high bidder) should be considered accurate and complete. However, the
     * final value fee is not yet available.
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Completed'
     * Meta information extracted from the WSDL
     * - documentation: The listing has closed and eBay has completed processing the sale. All sale information returned from eBay (e.g., total price and high bidder) should be considered accurate and complete. Although the Final Value Fee (FVF) for
     * FixedPriceItem and StoresFixedPrice items is returned by GetSellerTransactions and GetItemTransactions, all other listing types (excluding Buy It Now purchases) require the listing status to be Completed before the Final Value Fee is returned.
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Custom'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_ENDED
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_ENDED,
            self::VALUE_COMPLETED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_CUSTOM,
        ];
    }
}
