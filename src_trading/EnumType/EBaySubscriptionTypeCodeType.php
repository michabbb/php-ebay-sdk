<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EBaySubscriptionTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains a list of eBay subscriptions that an eBay user may be subscribed to.
 * @subpackage Enumerations
 */
class EBaySubscriptionTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SellerAssistant'
     * Meta information extracted from the WSDL
     * - documentation: This eBay subscription is no longer available.
     * @return string 'SellerAssistant'
     */
    const VALUE_SELLER_ASSISTANT = 'SellerAssistant';
    /**
     * Constant for value 'SellerAssistantPro'
     * Meta information extracted from the WSDL
     * - documentation: This eBay subscription is no longer available.
     * @return string 'SellerAssistantPro'
     */
    const VALUE_SELLER_ASSISTANT_PRO = 'SellerAssistantPro';
    /**
     * Constant for value 'EBayStoreBasic'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Basic eBay Store membership. See the <a href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     * @return string 'EBayStoreBasic'
     */
    const VALUE_EBAY_STORE_BASIC = 'EBayStoreBasic';
    /**
     * Constant for value 'EBayStoreFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Premium eBay Store membership. See the <a href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     * @return string 'EBayStoreFeatured'
     */
    const VALUE_EBAY_STORE_FEATURED = 'EBayStoreFeatured';
    /**
     * Constant for value 'EBayStoreAnchor'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Anchor eBay Store membership. See the <a href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     * @return string 'EBayStoreAnchor'
     */
    const VALUE_EBAY_STORE_ANCHOR = 'EBayStoreAnchor';
    /**
     * Constant for value 'SellingManager'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Selling Manager subscription. Selling Manager is free to all sellers and can be subscribed to through the <b>Subscriptions</b> section of My eBay. See the <a
     * href="http://pages.ebay.com/help/sell/selling-manager-subscription.html target="_blank">Selling Manager and Selling Manager Pro</a> help page for more information on Selling Manager.
     * @return string 'SellingManager'
     */
    const VALUE_SELLING_MANAGER = 'SellingManager';
    /**
     * Constant for value 'SellingManagerPro'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Selling Manager Pro subscription. Selling Manager Pro is free to all sellers for the first 30 days, and a Selling Manager Pro subscription is included at no charge for eBay Store Premium and
     * Anchor subscriptions. Selling Manager Pro can be subscribed to through the <b>Subscriptions</b> section of My eBay. See the <a href="http://pages.ebay.com/help/sell/selling-manager-subscription.html target="_blank">Selling Manager and Selling Manager
     * Pro</a> help page for more information on Selling Manager Pro.
     * @return string 'SellingManagerPro'
     */
    const VALUE_SELLING_MANAGER_PRO = 'SellingManagerPro';
    /**
     * Constant for value 'PictureManagerLevel1'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel1'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_1 = 'PictureManagerLevel1';
    /**
     * Constant for value 'PictureManagerLevel2'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel2'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_2 = 'PictureManagerLevel2';
    /**
     * Constant for value 'PictureManagerLevel3'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel3'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_3 = 'PictureManagerLevel3';
    /**
     * Constant for value 'PictureManagerLevel4'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel4'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_4 = 'PictureManagerLevel4';
    /**
     * Constant for value 'PictureManagerLevel5'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel5'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_5 = 'PictureManagerLevel5';
    /**
     * Constant for value 'PictureManagerLevel6'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel6'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_6 = 'PictureManagerLevel6';
    /**
     * Constant for value 'PictureManagerLevel7'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable because Picture Manager has been EOLed.
     * @return string 'PictureManagerLevel7'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_7 = 'PictureManagerLevel7';
    /**
     * Constant for value 'SellerReportsBasic'
     * Meta information extracted from the WSDL
     * - documentation: Basic Sales Reports are no longer available. Sellers should subsribe to Sales Reports Plus instead.
     * @return string 'SellerReportsBasic'
     */
    const VALUE_SELLER_REPORTS_BASIC = 'SellerReportsBasic';
    /**
     * Constant for value 'SellerReportsPlus'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Sales Reports Plus subscription. A user can subscribe to Sales Report Plus through the <b>Subscriptions</b> section of My eBay. See the <a
     * href="http://pages.ebay.com/help/sell/viewing-sales-reports.html target="_blank">Sales Report Plus</a> help page for more information.
     * @return string 'SellerReportsPlus'
     */
    const VALUE_SELLER_REPORTS_PLUS = 'SellerReportsPlus';
    /**
     * Constant for value 'FileExchange'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a File Exchange subscription. A user can subscribe to File Exchange through the <b>Subscriptions</b> section of My eBay. See the <a
     * href="http://pages.ebay.com/sellerinformation/sellingresources/fileexchange.html target="_blank">File Exchange</a> help page for more information.
     * @return string 'FileExchange'
     */
    const VALUE_FILE_EXCHANGE = 'FileExchange';
    /**
     * Constant for value 'LocalMarketSpecialty'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Motors Dealer has a Local Market Specialty subscription. This type of account is used to sell in the Motorcycles, Powersports, and Other Vehicles and Trailers categories. Not Cars and Trucks.
     * @return string 'LocalMarketSpecialty'
     */
    const VALUE_LOCAL_MARKET_SPECIALTY = 'LocalMarketSpecialty';
    /**
     * Constant for value 'LocalMarketRegular'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Motors Dealer has a Local Market Regular subscription. This type of account is used to sell in all eBay Motors categories.
     * @return string 'LocalMarketRegular'
     */
    const VALUE_LOCAL_MARKET_REGULAR = 'LocalMarketRegular';
    /**
     * Constant for value 'LocalMarketPremium'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Motors Dealer has a Local Market Premium subscription. This type of account is used to sell in all eBay Motors categories.
     * @return string 'LocalMarketPremium'
     */
    const VALUE_LOCAL_MARKET_PREMIUM = 'LocalMarketPremium';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SELLER_ASSISTANT
     * @uses self::VALUE_SELLER_ASSISTANT_PRO
     * @uses self::VALUE_EBAY_STORE_BASIC
     * @uses self::VALUE_EBAY_STORE_FEATURED
     * @uses self::VALUE_EBAY_STORE_ANCHOR
     * @uses self::VALUE_SELLING_MANAGER
     * @uses self::VALUE_SELLING_MANAGER_PRO
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_1
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_2
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_3
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_4
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_5
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_6
     * @uses self::VALUE_PICTURE_MANAGER_LEVEL_7
     * @uses self::VALUE_SELLER_REPORTS_BASIC
     * @uses self::VALUE_SELLER_REPORTS_PLUS
     * @uses self::VALUE_FILE_EXCHANGE
     * @uses self::VALUE_LOCAL_MARKET_SPECIALTY
     * @uses self::VALUE_LOCAL_MARKET_REGULAR
     * @uses self::VALUE_LOCAL_MARKET_PREMIUM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SELLER_ASSISTANT,
            self::VALUE_SELLER_ASSISTANT_PRO,
            self::VALUE_EBAY_STORE_BASIC,
            self::VALUE_EBAY_STORE_FEATURED,
            self::VALUE_EBAY_STORE_ANCHOR,
            self::VALUE_SELLING_MANAGER,
            self::VALUE_SELLING_MANAGER_PRO,
            self::VALUE_PICTURE_MANAGER_LEVEL_1,
            self::VALUE_PICTURE_MANAGER_LEVEL_2,
            self::VALUE_PICTURE_MANAGER_LEVEL_3,
            self::VALUE_PICTURE_MANAGER_LEVEL_4,
            self::VALUE_PICTURE_MANAGER_LEVEL_5,
            self::VALUE_PICTURE_MANAGER_LEVEL_6,
            self::VALUE_PICTURE_MANAGER_LEVEL_7,
            self::VALUE_SELLER_REPORTS_BASIC,
            self::VALUE_SELLER_REPORTS_PLUS,
            self::VALUE_FILE_EXCHANGE,
            self::VALUE_LOCAL_MARKET_SPECIALTY,
            self::VALUE_LOCAL_MARKET_REGULAR,
            self::VALUE_LOCAL_MARKET_PREMIUM,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
