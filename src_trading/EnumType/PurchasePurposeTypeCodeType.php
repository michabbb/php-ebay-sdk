<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PurchasePurposeTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PurchasePurposeTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'BuyNowItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BuyNowItem'
     */
    const VALUE_BUY_NOW_ITEM = 'BuyNowItem';
    /**
     * Constant for value 'ShoppingCart'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShoppingCart'
     */
    const VALUE_SHOPPING_CART = 'ShoppingCart';
    /**
     * Constant for value 'AuctionItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AuctionItem'
     */
    const VALUE_AUCTION_ITEM = 'AuctionItem';
    /**
     * Constant for value 'GiftCertificates'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'GiftCertificates'
     */
    const VALUE_GIFT_CERTIFICATES = 'GiftCertificates';
    /**
     * Constant for value 'Subscription'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Subscription'
     */
    const VALUE_SUBSCRIPTION = 'Subscription';
    /**
     * Constant for value 'Donation'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Donation'
     */
    const VALUE_DONATION = 'Donation';
    /**
     * Constant for value 'eBayBilling'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'eBayBilling'
     */
    const VALUE_E_BAY_BILLING = 'eBayBilling';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_BUY_NOW_ITEM
     * @uses self::VALUE_SHOPPING_CART
     * @uses self::VALUE_AUCTION_ITEM
     * @uses self::VALUE_GIFT_CERTIFICATES
     * @uses self::VALUE_SUBSCRIPTION
     * @uses self::VALUE_DONATION
     * @uses self::VALUE_E_BAY_BILLING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OTHER,
            self::VALUE_BUY_NOW_ITEM,
            self::VALUE_SHOPPING_CART,
            self::VALUE_AUCTION_ITEM,
            self::VALUE_GIFT_CERTIFICATES,
            self::VALUE_SUBSCRIPTION,
            self::VALUE_DONATION,
            self::VALUE_E_BAY_BILLING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
