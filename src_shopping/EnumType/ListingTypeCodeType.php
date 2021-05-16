<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the valid selling formats for eBay listings.
 * @subpackage Enumerations
 */
class ListingTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the listing format cannot be determined.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Chinese'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned for auction listings.
     * @return string 'Chinese'
     */
    const VALUE_CHINESE = 'Chinese';
    /**
     * Constant for value 'Dutch'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as Dutch auctions are deprecated.
     * @return string 'Dutch'
     */
    const VALUE_DUTCH = 'Dutch';
    /**
     * Constant for value 'Live'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the original eBay live auctions are deprecated.
     * @return string 'Live'
     */
    const VALUE_LIVE = 'Live';
    /**
     * Constant for value 'Auction'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as <code>Chinese</code> is the enumeration value that is returned for all auction listings.
     * @return string 'Auction'
     */
    const VALUE_AUCTION = 'Auction';
    /**
     * Constant for value 'AdType'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned for advertisements to solicit inquiries on listings such as real estate. Permits no bidding on that item, service, or property. To express interest, a buyer fills out a contact form that eBay
     * forwards to the seller as a lead. This format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for ad format listings.
     * @return string 'AdType'
     */
    const VALUE_AD_TYPE = 'AdType';
    /**
     * Constant for value 'StoresFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and has been replaced by the <code>FixedPriceItem</code> value.
     * @return string 'StoresFixedPrice'
     */
    const VALUE_STORES_FIXED_PRICE = 'StoresFixedPrice';
    /**
     * Constant for value 'PersonalOffer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned for Second Chance Offers. A seller can propose a Second Chance Offer to a non-winning bidder on an ended listing. A seller can make an offer to a non-winning bidder when either the winning bidder
     * has failed to pay for an item, or the seller has a duplicate item. Second Chance Offer items are on eBay, but they do not appear when browsing or searching listings. You need to already know the item ID in order to retrieve a Second Chance Offer.
     * @return string 'PersonalOffer'
     */
    const VALUE_PERSONAL_OFFER = 'PersonalOffer';
    /**
     * Constant for value 'FixedPriceItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned for fixed-price listings.
     * @return string 'FixedPriceItem'
     */
    const VALUE_FIXED_PRICE_ITEM = 'FixedPriceItem';
    /**
     * Constant for value 'Half'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as the Half.com site has been shut down.
     * @return string 'Half'
     */
    const VALUE_HALF = 'Half';
    /**
     * Constant for value 'LeadGeneration'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned for Lead Generation listings.
     * @return string 'LeadGeneration'
     */
    const VALUE_LEAD_GENERATION = 'LeadGeneration';
    /**
     * Constant for value 'Express'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable as eBay Express listings have been deprecated.
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Placeholder value. See <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_CHINESE
     * @uses self::VALUE_DUTCH
     * @uses self::VALUE_LIVE
     * @uses self::VALUE_AUCTION
     * @uses self::VALUE_AD_TYPE
     * @uses self::VALUE_STORES_FIXED_PRICE
     * @uses self::VALUE_PERSONAL_OFFER
     * @uses self::VALUE_FIXED_PRICE_ITEM
     * @uses self::VALUE_HALF
     * @uses self::VALUE_LEAD_GENERATION
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_CHINESE,
            self::VALUE_DUTCH,
            self::VALUE_LIVE,
            self::VALUE_AUCTION,
            self::VALUE_AD_TYPE,
            self::VALUE_STORES_FIXED_PRICE,
            self::VALUE_PERSONAL_OFFER,
            self::VALUE_FIXED_PRICE_ITEM,
            self::VALUE_HALF,
            self::VALUE_LEAD_GENERATION,
            self::VALUE_EXPRESS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
