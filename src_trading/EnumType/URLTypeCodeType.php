<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for URLTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type consists of the different eBay URLs that can be returned under the <b>URLDetails</b> containers of a <b>GeteBayDetails</b> response.
 * @subpackage Enumerations
 */
class URLTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ViewItemURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL for the View Item page. The user will just input the Item ID for a listing at the end of the URL to retrieve the View Item page for that listing.
     * @return string 'ViewItemURL'
     */
    const VALUE_VIEW_ITEM_URL = 'ViewItemURL';
    /**
     * Constant for value 'ViewUserURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL for the eBay User page. The user will just input the user ID for an eBay user at the end of the URL to retrieve the eBay User page.
     * @return string 'ViewUserURL'
     */
    const VALUE_VIEW_USER_URL = 'ViewUserURL';
    /**
     * Constant for value 'MyeBayURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the URL for the My eBay home page.
     * @return string 'MyeBayURL'
     */
    const VALUE_MYE_BAY_URL = 'MyeBayURL';
    /**
     * Constant for value 'MyeBayBiddingURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the URL for the user's My eBay Bids/Offer page.
     * @return string 'MyeBayBiddingURL'
     */
    const VALUE_MYE_BAY_BIDDING_URL = 'MyeBayBiddingURL';
    /**
     * Constant for value 'MyeBayNotWonURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the URL to the 'Didn't Win' section on the user's My eBay Bids/Offer page.
     * @return string 'MyeBayNotWonURL'
     */
    const VALUE_MYE_BAY_NOT_WON_URL = 'MyeBayNotWonURL';
    /**
     * Constant for value 'MyeBayWonURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the URL to the 'Bidding' section on the user's My eBay Bids/Offer page.
     * @return string 'MyeBayWonURL'
     */
    const VALUE_MYE_BAY_WON_URL = 'MyeBayWonURL';
    /**
     * Constant for value 'MyeBayWatchingURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the URL to the user's My eBay Watch List page.
     * @return string 'MyeBayWatchingURL'
     */
    const VALUE_MYE_BAY_WATCHING_URL = 'MyeBayWatchingURL';
    /**
     * Constant for value 'eBayStoreURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL to the user's eBay Store page. The seller will just add a forward slash (/) and their eBay Store name to get to their eBay Store home page.
     * @return string 'eBayStoreURL'
     */
    const VALUE_E_BAY_STORE_URL = 'eBayStoreURL';
    /**
     * Constant for value 'SmallLogoURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the full URL to the small version of the eBay Marketplace logo.
     * @return string 'SmallLogoURL'
     */
    const VALUE_SMALL_LOGO_URL = 'SmallLogoURL';
    /**
     * Constant for value 'MediumLogoURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the full URL to the medium version of the eBay Marketplace logo.
     * @return string 'MediumLogoURL'
     */
    const VALUE_MEDIUM_LOGO_URL = 'MediumLogoURL';
    /**
     * Constant for value 'LargeLogoURL'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the full URL to the large version of the eBay Marketplace logo.
     * @return string 'LargeLogoURL'
     */
    const VALUE_LARGE_LOGO_URL = 'LargeLogoURL';
    /**
     * Constant for value 'CreateProductUrl'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL that a seller needs to enter the UI flow to make a request that a missing product be added to the eBay Catalog. <br> <br> <span
     * class="tablenote"><b>Note:</b> Catalog change requests through the UI flow are currently not available, so this URL will not be returned in <b>GeteBayDetails</b>. </span>
     * @return string 'CreateProductUrl'
     */
    const VALUE_CREATE_PRODUCT_URL = 'CreateProductUrl';
    /**
     * Constant for value 'AppealProductUrl'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL that a seller needs to enter the UI flow to make a request that an existing eBay Catalog product be revised. The seller will have to append the
     * ePID value of the catalog product to the end of the URL. <br> <br> <span class="tablenote"><b>Note:</b> Catalog change requests through the UI flow are currently not available, so this URL will not be returned in <b>GeteBayDetails</b>. </span>
     * @return string 'AppealProductUrl'
     */
    const VALUE_APPEAL_PRODUCT_URL = 'AppealProductUrl';
    /**
     * Constant for value 'ManageProductUrl'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the URL in the corresponding <b>URL</b> field is the base URL that a seller needs to enter the UI flow to get the status of a catalog change request (request for a new catalog product or request to revise an
     * existing product). The seller will have to append the identifier of the catalog change request to the end of the URL. <br> <br> <span class="tablenote"><b>Note:</b> Catalog change requests through the UI flow are currently not available, so this URL
     * will not be returned in <b>GeteBayDetails</b>. </span>
     * @return string 'ManageProductUrl'
     */
    const VALUE_MANAGE_PRODUCT_URL = 'ManageProductUrl';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
