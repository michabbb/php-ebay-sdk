<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionalSaleStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> Values indicate the status of a sale. Used for the Promotional Price Display feature, which enables sellers to apply discounts across many listings.
 * @subpackage Enumerations
 */
class PromotionalSaleStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is active.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Scheduled'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is scheduled. That is, the start time is in the future.
     * @return string 'Scheduled'
     */
    const VALUE_SCHEDULED = 'Scheduled';
    /**
     * Constant for value 'Processing'
     * Meta information extracted from the WSDL
     * - documentation: The status of the promotional sale is pending. When first scheduling a Sale, if you select over 200 listings to be in any given Sale, it will take some time for eBay to process the request.
     * @return string 'Processing'
     */
    const VALUE_PROCESSING = 'Processing';
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale is inactive, the sale has ended. You can reschedule a sale once it has ended, but you will need to wait at least 24 hours before it can become active.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Deleted'
     * Meta information extracted from the WSDL
     * - documentation: The promotional sale has been deleted. Deleted promotional sales cannot be updated or reactivated.
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_SCHEDULED
     * @uses self::VALUE_PROCESSING
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_SCHEDULED,
            self::VALUE_PROCESSING,
            self::VALUE_INACTIVE,
            self::VALUE_DELETED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
