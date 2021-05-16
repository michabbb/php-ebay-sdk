<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionalSaleTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> Values specify or indicate the type of promotional sale offered. Promotional sales give store owners the ability to apply discounts and/or free shipping across many listings for a specific duration.
 * @subpackage Enumerations
 */
class PromotionalSaleTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PriceDiscountOnly'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers price discount only.
     * @return string 'PriceDiscountOnly'
     */
    const VALUE_PRICE_DISCOUNT_ONLY = 'PriceDiscountOnly';
    /**
     * Constant for value 'FreeShippingOnly'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers free shipping only.
     * @return string 'FreeShippingOnly'
     */
    const VALUE_FREE_SHIPPING_ONLY = 'FreeShippingOnly';
    /**
     * Constant for value 'PriceDiscountAndFreeShipping'
     * Meta information extracted from the WSDL
     * - documentation: Sale offers both price discount and free shipping.
     * @return string 'PriceDiscountAndFreeShipping'
     */
    const VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING = 'PriceDiscountAndFreeShipping';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PRICE_DISCOUNT_ONLY
     * @uses self::VALUE_FREE_SHIPPING_ONLY
     * @uses self::VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRICE_DISCOUNT_ONLY,
            self::VALUE_FREE_SHIPPING_ONLY,
            self::VALUE_PRICE_DISCOUNT_AND_FREE_SHIPPING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
