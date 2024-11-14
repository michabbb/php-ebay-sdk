<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the transaction fees.
 * @subpackage Enumerations
 */
class ListingStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: The listing is still active or the listing has ended with a sale but eBay has not completed processing the sale details. If the listing has ended with a sale but this Active status is returned, please allow several minutes for eBay
     * to finish processing the listing.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Ended'
     * Meta information extracted from the WSDL
     * - documentation: The listing has ended. If the listing ended with a sale, eBay has completed processing of the sale. All sale information returned from eBay should be considered accurate and complete. However, the transaction fees are not yet
     * available.
     * @return string 'Ended'
     */
    const VALUE_ENDED = 'Ended';
    /**
     * Constant for value 'Completed'
     * Meta information extracted from the WSDL
     * - documentation: The listing has closed and eBay has completed processing the sale. All sale information returned from eBay should be considered accurate and complete. In this state, all transaction fees should be calculated.
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
