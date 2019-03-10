<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for URLTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type consists of the different eBay URLs that can be returned under the <b>URLDetails</b> containers of a <b>GeteBayDetails</b> response.
 * @subpackage Enumerations
 */
class URLTypeCodeType
{
    /**
     * Constant for value 'ViewItemURL'
     * @return string 'ViewItemURL'
     */
    const VALUE_VIEW_ITEM_URL = 'ViewItemURL';
    /**
     * Constant for value 'ViewUserURL'
     * @return string 'ViewUserURL'
     */
    const VALUE_VIEW_USER_URL = 'ViewUserURL';
    /**
     * Constant for value 'MyeBayURL'
     * @return string 'MyeBayURL'
     */
    const VALUE_MYE_BAY_URL = 'MyeBayURL';
    /**
     * Constant for value 'MyeBayBiddingURL'
     * @return string 'MyeBayBiddingURL'
     */
    const VALUE_MYE_BAY_BIDDING_URL = 'MyeBayBiddingURL';
    /**
     * Constant for value 'MyeBayNotWonURL'
     * @return string 'MyeBayNotWonURL'
     */
    const VALUE_MYE_BAY_NOT_WON_URL = 'MyeBayNotWonURL';
    /**
     * Constant for value 'MyeBayWonURL'
     * @return string 'MyeBayWonURL'
     */
    const VALUE_MYE_BAY_WON_URL = 'MyeBayWonURL';
    /**
     * Constant for value 'MyeBayWatchingURL'
     * @return string 'MyeBayWatchingURL'
     */
    const VALUE_MYE_BAY_WATCHING_URL = 'MyeBayWatchingURL';
    /**
     * Constant for value 'eBayStoreURL'
     * @return string 'eBayStoreURL'
     */
    const VALUE_E_BAY_STORE_URL = 'eBayStoreURL';
    /**
     * Constant for value 'SmallLogoURL'
     * @return string 'SmallLogoURL'
     */
    const VALUE_SMALL_LOGO_URL = 'SmallLogoURL';
    /**
     * Constant for value 'MediumLogoURL'
     * @return string 'MediumLogoURL'
     */
    const VALUE_MEDIUM_LOGO_URL = 'MediumLogoURL';
    /**
     * Constant for value 'LargeLogoURL'
     * @return string 'LargeLogoURL'
     */
    const VALUE_LARGE_LOGO_URL = 'LargeLogoURL';
    /**
     * Constant for value 'CreateProductUrl'
     * @return string 'CreateProductUrl'
     */
    const VALUE_CREATE_PRODUCT_URL = 'CreateProductUrl';
    /**
     * Constant for value 'AppealProductUrl'
     * @return string 'AppealProductUrl'
     */
    const VALUE_APPEAL_PRODUCT_URL = 'AppealProductUrl';
    /**
     * Constant for value 'ManageProductUrl'
     * @return string 'ManageProductUrl'
     */
    const VALUE_MANAGE_PRODUCT_URL = 'ManageProductUrl';
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
     * @uses self::VALUE_VIEW_ITEM_URL
     * @uses self::VALUE_VIEW_USER_URL
     * @uses self::VALUE_MYE_BAY_URL
     * @uses self::VALUE_MYE_BAY_BIDDING_URL
     * @uses self::VALUE_MYE_BAY_NOT_WON_URL
     * @uses self::VALUE_MYE_BAY_WON_URL
     * @uses self::VALUE_MYE_BAY_WATCHING_URL
     * @uses self::VALUE_E_BAY_STORE_URL
     * @uses self::VALUE_SMALL_LOGO_URL
     * @uses self::VALUE_MEDIUM_LOGO_URL
     * @uses self::VALUE_LARGE_LOGO_URL
     * @uses self::VALUE_CREATE_PRODUCT_URL
     * @uses self::VALUE_APPEAL_PRODUCT_URL
     * @uses self::VALUE_MANAGE_PRODUCT_URL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VIEW_ITEM_URL,
            self::VALUE_VIEW_USER_URL,
            self::VALUE_MYE_BAY_URL,
            self::VALUE_MYE_BAY_BIDDING_URL,
            self::VALUE_MYE_BAY_NOT_WON_URL,
            self::VALUE_MYE_BAY_WON_URL,
            self::VALUE_MYE_BAY_WATCHING_URL,
            self::VALUE_E_BAY_STORE_URL,
            self::VALUE_SMALL_LOGO_URL,
            self::VALUE_MEDIUM_LOGO_URL,
            self::VALUE_LARGE_LOGO_URL,
            self::VALUE_CREATE_PRODUCT_URL,
            self::VALUE_APPEAL_PRODUCT_URL,
            self::VALUE_MANAGE_PRODUCT_URL,
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
