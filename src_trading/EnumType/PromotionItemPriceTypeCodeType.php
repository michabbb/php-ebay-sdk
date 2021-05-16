<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionItemPriceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PromotionItemPriceTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AuctionPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AuctionPrice'
     */
    const VALUE_AUCTION_PRICE = 'AuctionPrice';
    /**
     * Constant for value 'BuyItNowPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BuyItNowPrice'
     */
    const VALUE_BUY_IT_NOW_PRICE = 'BuyItNowPrice';
    /**
     * Constant for value 'BestOfferOnlyPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BestOfferOnlyPrice'
     */
    const VALUE_BEST_OFFER_ONLY_PRICE = 'BestOfferOnlyPrice';
    /**
     * Constant for value 'ClassifiedAdPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ClassifiedAdPrice'
     */
    const VALUE_CLASSIFIED_AD_PRICE = 'ClassifiedAdPrice';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AUCTION_PRICE
     * @uses self::VALUE_BUY_IT_NOW_PRICE
     * @uses self::VALUE_BEST_OFFER_ONLY_PRICE
     * @uses self::VALUE_CLASSIFIED_AD_PRICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUCTION_PRICE,
            self::VALUE_BUY_IT_NOW_PRICE,
            self::VALUE_BEST_OFFER_ONLY_PRICE,
            self::VALUE_CLASSIFIED_AD_PRICE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
