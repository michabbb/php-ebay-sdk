<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for EBaySubscriptionTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains a list of eBay subscriptions that an eBay user may be subscribed to.
 * @subpackage Enumerations
 */
class EBaySubscriptionTypeCodeType
{
    /**
     * Constant for value 'SellerAssistant'
     * @return string 'SellerAssistant'
     */
    const VALUE_SELLER_ASSISTANT = 'SellerAssistant';
    /**
     * Constant for value 'SellerAssistantPro'
     * @return string 'SellerAssistantPro'
     */
    const VALUE_SELLER_ASSISTANT_PRO = 'SellerAssistantPro';
    /**
     * Constant for value 'EBayStoreBasic'
     * @return string 'EBayStoreBasic'
     */
    const VALUE_EBAY_STORE_BASIC = 'EBayStoreBasic';
    /**
     * Constant for value 'EBayStoreFeatured'
     * @return string 'EBayStoreFeatured'
     */
    const VALUE_EBAY_STORE_FEATURED = 'EBayStoreFeatured';
    /**
     * Constant for value 'EBayStoreAnchor'
     * @return string 'EBayStoreAnchor'
     */
    const VALUE_EBAY_STORE_ANCHOR = 'EBayStoreAnchor';
    /**
     * Constant for value 'SellingManager'
     * @return string 'SellingManager'
     */
    const VALUE_SELLING_MANAGER = 'SellingManager';
    /**
     * Constant for value 'SellingManagerPro'
     * @return string 'SellingManagerPro'
     */
    const VALUE_SELLING_MANAGER_PRO = 'SellingManagerPro';
    /**
     * Constant for value 'PictureManagerLevel1'
     * @return string 'PictureManagerLevel1'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_1 = 'PictureManagerLevel1';
    /**
     * Constant for value 'PictureManagerLevel2'
     * @return string 'PictureManagerLevel2'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_2 = 'PictureManagerLevel2';
    /**
     * Constant for value 'PictureManagerLevel3'
     * @return string 'PictureManagerLevel3'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_3 = 'PictureManagerLevel3';
    /**
     * Constant for value 'PictureManagerLevel4'
     * @return string 'PictureManagerLevel4'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_4 = 'PictureManagerLevel4';
    /**
     * Constant for value 'PictureManagerLevel5'
     * @return string 'PictureManagerLevel5'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_5 = 'PictureManagerLevel5';
    /**
     * Constant for value 'PictureManagerLevel6'
     * @return string 'PictureManagerLevel6'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_6 = 'PictureManagerLevel6';
    /**
     * Constant for value 'PictureManagerLevel7'
     * @return string 'PictureManagerLevel7'
     */
    const VALUE_PICTURE_MANAGER_LEVEL_7 = 'PictureManagerLevel7';
    /**
     * Constant for value 'SellerReportsBasic'
     * @return string 'SellerReportsBasic'
     */
    const VALUE_SELLER_REPORTS_BASIC = 'SellerReportsBasic';
    /**
     * Constant for value 'SellerReportsPlus'
     * @return string 'SellerReportsPlus'
     */
    const VALUE_SELLER_REPORTS_PLUS = 'SellerReportsPlus';
    /**
     * Constant for value 'FileExchange'
     * @return string 'FileExchange'
     */
    const VALUE_FILE_EXCHANGE = 'FileExchange';
    /**
     * Constant for value 'LocalMarketSpecialty'
     * @return string 'LocalMarketSpecialty'
     */
    const VALUE_LOCAL_MARKET_SPECIALTY = 'LocalMarketSpecialty';
    /**
     * Constant for value 'LocalMarketRegular'
     * @return string 'LocalMarketRegular'
     */
    const VALUE_LOCAL_MARKET_REGULAR = 'LocalMarketRegular';
    /**
     * Constant for value 'LocalMarketPremium'
     * @return string 'LocalMarketPremium'
     */
    const VALUE_LOCAL_MARKET_PREMIUM = 'LocalMarketPremium';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
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
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
