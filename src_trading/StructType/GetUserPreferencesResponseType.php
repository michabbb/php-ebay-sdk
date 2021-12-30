<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains some or all of the authenticated user's preferences. The preferences are grouped in sets and are returned according to the flag settings in the request.
 * @subpackage Structs
 */
class GetUserPreferencesResponseType extends AbstractResponseType
{
    /**
     * The BidderNoticePreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when <b>ShowBidderNoticePreferences</b> is included and set to <code>true</code> in the request.
     * This preference is only applicable for auction listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $BidderNoticePreferences = null;
    /**
     * The CombinedPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's Combined Invoice preferences. These preferences are used to allow Combined Invoice orders. This container is returned when <b>ShowCombinedPaymentPreferences</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $CombinedPaymentPreferences = null;
    /**
     * The CrossPromotionPreferences
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $CrossPromotionPreferences = null;
    /**
     * The SellerPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's payment preferences. This container is returned when <b>ShowSellerPaymentPreferences</b> is included and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $SellerPaymentPreferences = null;
    /**
     * The SellerFavoriteItemPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when <b>ShowSellerFavoriteItemPreferences</b> is included
     * and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences = null;
    /**
     * The EndOfAuctionEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when <b>ShowEndOfAuctionEmailPreferences</b> is included and set to <code>true</code> in the
     * request. These preferences are only applicable for auction listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences = null;
    /**
     * The EmailShipmentTrackingNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for sending an email to the buyer with the shipment tracking number. This container is returned when <b>ShowEmailShipmentTrackingNumberPreference</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EmailShipmentTrackingNumberPreference = null;
    /**
     * The RequiredShipPhoneNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when
     * <b>ShowRequiredShipPhoneNumberPreference</b> is included and set to <code>true</code> in the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RequiredShipPhoneNumberPreference = null;
    /**
     * The ProStoresPreference
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $ProStoresPreference = null;
    /**
     * The UnpaidItemAssistancePreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. This container is returned if
     * <b>ShowUnpaidItemAssistancePreference</b> is included and set to <code>true</code> in the request. <br><br> <span class="tablenote"><b>Note:</b> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the
     * <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences = null;
    /**
     * The SellerExcludeShipToLocationPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping
     * locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). <br/><br/> Sellers can override these default
     * settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences = null;
    /**
     * The PurchaseReminderEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the <b>ShowPurchaseReminderEmailPreferences</b> field is included and set to <code>true</code> in the
     * request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences = null;
    /**
     * The SellerThirdPartyCheckoutDisabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated along with third-party checkout.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerThirdPartyCheckoutDisabled = null;
    /**
     * The SellerProfilePreferences
     * Meta information extracted from the WSDL
     * - documentation: Parent response container consisting of high-level information for all Business Policies defined for the user's account. This container is returned if <b>ShowSellerProfilePreferences</b> is included and set to <code>true</code> in
     * the <b>GetUserPreferences</b> request (and one or more Business Policies are defined for the user's account).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType $SellerProfilePreferences = null;
    /**
     * The SellerReturnPreferences
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns. This container is only returned if <b>ShowSellerReturnPreferences</b> is included and set to
     * <code>true</code> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType $SellerReturnPreferences = null;
    /**
     * The OfferGlobalShippingProgramPreference
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether the seller has opted in to the Global Shipping Program and is able to offer global shipping to international buyers. Returned when <b>ShowGlobalShippingProgramPreference</b> is included and set to
     * <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OfferGlobalShippingProgramPreference = null;
    /**
     * The DispatchCutoffTimePreference
     * Meta information extracted from the WSDL
     * - documentation: Contains information about a seller's order cutoff time preferences for same-day shipping. If the seller specifies a value of '0' in <b>Item.DispatchTimeMax</b> to offer same-day handling when listing an item, the seller's shipping
     * time commitment depends on the order cutoff time set for the listing site, as indicated by <b>DispatchCutoffTimePreference.CutoffTime</b>. Returned when <b>ShowDispatchCutoffTimePreferences</b> is included and set to <code>true</code>. <br> <br>
     * <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in this container may not be accurate. In order for the seller to confirm the
     * actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span> <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference = null;
    /**
     * The GlobalShippingProgramListingPreference
     * Meta information extracted from the WSDL
     * - documentation: If the <b>ShowGlobalShippingProgramListingPreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global
     * Shipping Program by default.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalShippingProgramListingPreference = null;
    /**
     * The OverrideGSPServiceWithIntlServicePreference
     * Meta information extracted from the WSDL
     * - documentation: If the <b>ShowOverrideGSPServiceWithIntlServicePreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an
     * international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     * <br/><br/> A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global
     * Shipping-eligible country.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OverrideGSPServiceWithIntlServicePreference = null;
    /**
     * The PickupDropoffSellerPreference
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned if the <b>ShowPickupDropoffPreferences</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has enabled the Click and Collect
     * feature at the account level. All of the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature. With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local
     * store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites. <br/><br/> <span
     * class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PickupDropoffSellerPreference = null;
    /**
     * The OutOfStockControlPreference
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned if the <b>ShowOutOfStockControlPreference</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has set <a
     * href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OutOfStockControlPreference = null;
    /**
     * The eBayPLUSPreference
     * Meta information extracted from the WSDL
     * - documentation: Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for
     * each country. <br/><br/> eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a
     * per-listing basis. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a
     * listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType[]
     */
    protected ?array $eBayPLUSPreference = null;
    /**
     * Constructor method for GetUserPreferencesResponseType
     * @uses GetUserPreferencesResponseType::setBidderNoticePreferences()
     * @uses GetUserPreferencesResponseType::setCombinedPaymentPreferences()
     * @uses GetUserPreferencesResponseType::setCrossPromotionPreferences()
     * @uses GetUserPreferencesResponseType::setSellerPaymentPreferences()
     * @uses GetUserPreferencesResponseType::setSellerFavoriteItemPreferences()
     * @uses GetUserPreferencesResponseType::setEndOfAuctionEmailPreferences()
     * @uses GetUserPreferencesResponseType::setEmailShipmentTrackingNumberPreference()
     * @uses GetUserPreferencesResponseType::setRequiredShipPhoneNumberPreference()
     * @uses GetUserPreferencesResponseType::setProStoresPreference()
     * @uses GetUserPreferencesResponseType::setUnpaidItemAssistancePreferences()
     * @uses GetUserPreferencesResponseType::setSellerExcludeShipToLocationPreferences()
     * @uses GetUserPreferencesResponseType::setPurchaseReminderEmailPreferences()
     * @uses GetUserPreferencesResponseType::setSellerThirdPartyCheckoutDisabled()
     * @uses GetUserPreferencesResponseType::setSellerProfilePreferences()
     * @uses GetUserPreferencesResponseType::setSellerReturnPreferences()
     * @uses GetUserPreferencesResponseType::setOfferGlobalShippingProgramPreference()
     * @uses GetUserPreferencesResponseType::setDispatchCutoffTimePreference()
     * @uses GetUserPreferencesResponseType::setGlobalShippingProgramListingPreference()
     * @uses GetUserPreferencesResponseType::setOverrideGSPServiceWithIntlServicePreference()
     * @uses GetUserPreferencesResponseType::setPickupDropoffSellerPreference()
     * @uses GetUserPreferencesResponseType::setOutOfStockControlPreference()
     * @uses GetUserPreferencesResponseType::setEBayPLUSPreference()
     * @param \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @param \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @param \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @param bool $emailShipmentTrackingNumberPreference
     * @param bool $requiredShipPhoneNumberPreference
     * @param \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences
     * @param \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @param \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType $sellerProfilePreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType $sellerReturnPreferences
     * @param bool $offerGlobalShippingProgramPreference
     * @param \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @param bool $globalShippingProgramListingPreference
     * @param bool $overrideGSPServiceWithIntlServicePreference
     * @param bool $pickupDropoffSellerPreference
     * @param bool $outOfStockControlPreference
     * @param \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType[] $eBayPLUSPreference
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null, ?\macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null, ?\macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null, ?\macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null, ?\macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null, ?\macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null, ?bool $emailShipmentTrackingNumberPreference = null, ?bool $requiredShipPhoneNumberPreference = null, ?\macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null, ?\macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null, ?\macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences = null, ?\macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null, ?bool $sellerThirdPartyCheckoutDisabled = null, ?\macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType $sellerProfilePreferences = null, ?\macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType $sellerReturnPreferences = null, ?bool $offerGlobalShippingProgramPreference = null, ?\macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null, ?bool $globalShippingProgramListingPreference = null, ?bool $overrideGSPServiceWithIntlServicePreference = null, ?bool $pickupDropoffSellerPreference = null, ?bool $outOfStockControlPreference = null, ?array $eBayPLUSPreference = null)
    {
        $this
            ->setBidderNoticePreferences($bidderNoticePreferences)
            ->setCombinedPaymentPreferences($combinedPaymentPreferences)
            ->setCrossPromotionPreferences($crossPromotionPreferences)
            ->setSellerPaymentPreferences($sellerPaymentPreferences)
            ->setSellerFavoriteItemPreferences($sellerFavoriteItemPreferences)
            ->setEndOfAuctionEmailPreferences($endOfAuctionEmailPreferences)
            ->setEmailShipmentTrackingNumberPreference($emailShipmentTrackingNumberPreference)
            ->setRequiredShipPhoneNumberPreference($requiredShipPhoneNumberPreference)
            ->setProStoresPreference($proStoresPreference)
            ->setUnpaidItemAssistancePreferences($unpaidItemAssistancePreferences)
            ->setSellerExcludeShipToLocationPreferences($sellerExcludeShipToLocationPreferences)
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled)
            ->setSellerProfilePreferences($sellerProfilePreferences)
            ->setSellerReturnPreferences($sellerReturnPreferences)
            ->setOfferGlobalShippingProgramPreference($offerGlobalShippingProgramPreference)
            ->setDispatchCutoffTimePreference($dispatchCutoffTimePreference)
            ->setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference)
            ->setOverrideGSPServiceWithIntlServicePreference($overrideGSPServiceWithIntlServicePreference)
            ->setPickupDropoffSellerPreference($pickupDropoffSellerPreference)
            ->setOutOfStockControlPreference($outOfStockControlPreference)
            ->setEBayPLUSPreference($eBayPLUSPreference);
    }
    /**
     * Get BidderNoticePreferences value
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType|null
     */
    public function getBidderNoticePreferences(): ?\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
    {
        return $this->BidderNoticePreferences;
    }
    /**
     * Set BidderNoticePreferences value
     * @param \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setBidderNoticePreferences(?\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null): self
    {
        $this->BidderNoticePreferences = $bidderNoticePreferences;
        
        return $this;
    }
    /**
     * Get CombinedPaymentPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType|null
     */
    public function getCombinedPaymentPreferences(): ?\macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
    {
        return $this->CombinedPaymentPreferences;
    }
    /**
     * Set CombinedPaymentPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setCombinedPaymentPreferences(?\macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null): self
    {
        $this->CombinedPaymentPreferences = $combinedPaymentPreferences;
        
        return $this;
    }
    /**
     * Get CrossPromotionPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType|null
     */
    public function getCrossPromotionPreferences(): ?\macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
    {
        return $this->CrossPromotionPreferences;
    }
    /**
     * Set CrossPromotionPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setCrossPromotionPreferences(?\macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null): self
    {
        $this->CrossPromotionPreferences = $crossPromotionPreferences;
        
        return $this;
    }
    /**
     * Get SellerPaymentPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType|null
     */
    public function getSellerPaymentPreferences(): ?\macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
    {
        return $this->SellerPaymentPreferences;
    }
    /**
     * Set SellerPaymentPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerPaymentPreferences(?\macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null): self
    {
        $this->SellerPaymentPreferences = $sellerPaymentPreferences;
        
        return $this;
    }
    /**
     * Get SellerFavoriteItemPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType|null
     */
    public function getSellerFavoriteItemPreferences(): ?\macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
    {
        return $this->SellerFavoriteItemPreferences;
    }
    /**
     * Set SellerFavoriteItemPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerFavoriteItemPreferences(?\macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null): self
    {
        $this->SellerFavoriteItemPreferences = $sellerFavoriteItemPreferences;
        
        return $this;
    }
    /**
     * Get EndOfAuctionEmailPreferences value
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType|null
     */
    public function getEndOfAuctionEmailPreferences(): ?\macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
    {
        return $this->EndOfAuctionEmailPreferences;
    }
    /**
     * Set EndOfAuctionEmailPreferences value
     * @param \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setEndOfAuctionEmailPreferences(?\macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null): self
    {
        $this->EndOfAuctionEmailPreferences = $endOfAuctionEmailPreferences;
        
        return $this;
    }
    /**
     * Get EmailShipmentTrackingNumberPreference value
     * @return bool|null
     */
    public function getEmailShipmentTrackingNumberPreference(): ?bool
    {
        return $this->EmailShipmentTrackingNumberPreference;
    }
    /**
     * Set EmailShipmentTrackingNumberPreference value
     * @param bool $emailShipmentTrackingNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setEmailShipmentTrackingNumberPreference(?bool $emailShipmentTrackingNumberPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($emailShipmentTrackingNumberPreference) && !is_bool($emailShipmentTrackingNumberPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailShipmentTrackingNumberPreference, true), gettype($emailShipmentTrackingNumberPreference)), __LINE__);
        }
        $this->EmailShipmentTrackingNumberPreference = $emailShipmentTrackingNumberPreference;
        
        return $this;
    }
    /**
     * Get RequiredShipPhoneNumberPreference value
     * @return bool|null
     */
    public function getRequiredShipPhoneNumberPreference(): ?bool
    {
        return $this->RequiredShipPhoneNumberPreference;
    }
    /**
     * Set RequiredShipPhoneNumberPreference value
     * @param bool $requiredShipPhoneNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setRequiredShipPhoneNumberPreference(?bool $requiredShipPhoneNumberPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiredShipPhoneNumberPreference) && !is_bool($requiredShipPhoneNumberPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiredShipPhoneNumberPreference, true), gettype($requiredShipPhoneNumberPreference)), __LINE__);
        }
        $this->RequiredShipPhoneNumberPreference = $requiredShipPhoneNumberPreference;
        
        return $this;
    }
    /**
     * Get ProStoresPreference value
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType|null
     */
    public function getProStoresPreference(): ?\macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
    {
        return $this->ProStoresPreference;
    }
    /**
     * Set ProStoresPreference value
     * @param \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setProStoresPreference(?\macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null): self
    {
        $this->ProStoresPreference = $proStoresPreference;
        
        return $this;
    }
    /**
     * Get UnpaidItemAssistancePreferences value
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType|null
     */
    public function getUnpaidItemAssistancePreferences(): ?\macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
    {
        return $this->UnpaidItemAssistancePreferences;
    }
    /**
     * Set UnpaidItemAssistancePreferences value
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setUnpaidItemAssistancePreferences(?\macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null): self
    {
        $this->UnpaidItemAssistancePreferences = $unpaidItemAssistancePreferences;
        
        return $this;
    }
    /**
     * Get SellerExcludeShipToLocationPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType|null
     */
    public function getSellerExcludeShipToLocationPreferences(): ?\macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType
    {
        return $this->SellerExcludeShipToLocationPreferences;
    }
    /**
     * Set SellerExcludeShipToLocationPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerExcludeShipToLocationPreferences(?\macropage\ebaysdk\trading\StructType\SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences = null): self
    {
        $this->SellerExcludeShipToLocationPreferences = $sellerExcludeShipToLocationPreferences;
        
        return $this;
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType|null
     */
    public function getPurchaseReminderEmailPreferences(): ?\macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setPurchaseReminderEmailPreferences(?\macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null): self
    {
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        
        return $this;
    }
    /**
     * Get SellerThirdPartyCheckoutDisabled value
     * @return bool|null
     */
    public function getSellerThirdPartyCheckoutDisabled(): ?bool
    {
        return $this->SellerThirdPartyCheckoutDisabled;
    }
    /**
     * Set SellerThirdPartyCheckoutDisabled value
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerThirdPartyCheckoutDisabled(?bool $sellerThirdPartyCheckoutDisabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerThirdPartyCheckoutDisabled) && !is_bool($sellerThirdPartyCheckoutDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerThirdPartyCheckoutDisabled, true), gettype($sellerThirdPartyCheckoutDisabled)), __LINE__);
        }
        $this->SellerThirdPartyCheckoutDisabled = $sellerThirdPartyCheckoutDisabled;
        
        return $this;
    }
    /**
     * Get SellerProfilePreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType|null
     */
    public function getSellerProfilePreferences(): ?\macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
    {
        return $this->SellerProfilePreferences;
    }
    /**
     * Set SellerProfilePreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType $sellerProfilePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerProfilePreferences(?\macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType $sellerProfilePreferences = null): self
    {
        $this->SellerProfilePreferences = $sellerProfilePreferences;
        
        return $this;
    }
    /**
     * Get SellerReturnPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType|null
     */
    public function getSellerReturnPreferences(): ?\macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
    {
        return $this->SellerReturnPreferences;
    }
    /**
     * Set SellerReturnPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType $sellerReturnPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setSellerReturnPreferences(?\macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType $sellerReturnPreferences = null): self
    {
        $this->SellerReturnPreferences = $sellerReturnPreferences;
        
        return $this;
    }
    /**
     * Get OfferGlobalShippingProgramPreference value
     * @return bool|null
     */
    public function getOfferGlobalShippingProgramPreference(): ?bool
    {
        return $this->OfferGlobalShippingProgramPreference;
    }
    /**
     * Set OfferGlobalShippingProgramPreference value
     * @param bool $offerGlobalShippingProgramPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setOfferGlobalShippingProgramPreference(?bool $offerGlobalShippingProgramPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($offerGlobalShippingProgramPreference) && !is_bool($offerGlobalShippingProgramPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offerGlobalShippingProgramPreference, true), gettype($offerGlobalShippingProgramPreference)), __LINE__);
        }
        $this->OfferGlobalShippingProgramPreference = $offerGlobalShippingProgramPreference;
        
        return $this;
    }
    /**
     * Get DispatchCutoffTimePreference value
     * @return \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType|null
     */
    public function getDispatchCutoffTimePreference(): ?\macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType
    {
        return $this->DispatchCutoffTimePreference;
    }
    /**
     * Set DispatchCutoffTimePreference value
     * @param \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setDispatchCutoffTimePreference(?\macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null): self
    {
        $this->DispatchCutoffTimePreference = $dispatchCutoffTimePreference;
        
        return $this;
    }
    /**
     * Get GlobalShippingProgramListingPreference value
     * @return bool|null
     */
    public function getGlobalShippingProgramListingPreference(): ?bool
    {
        return $this->GlobalShippingProgramListingPreference;
    }
    /**
     * Set GlobalShippingProgramListingPreference value
     * @param bool $globalShippingProgramListingPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setGlobalShippingProgramListingPreference(?bool $globalShippingProgramListingPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingProgramListingPreference) && !is_bool($globalShippingProgramListingPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalShippingProgramListingPreference, true), gettype($globalShippingProgramListingPreference)), __LINE__);
        }
        $this->GlobalShippingProgramListingPreference = $globalShippingProgramListingPreference;
        
        return $this;
    }
    /**
     * Get OverrideGSPServiceWithIntlServicePreference value
     * @return bool|null
     */
    public function getOverrideGSPServiceWithIntlServicePreference(): ?bool
    {
        return $this->OverrideGSPServiceWithIntlServicePreference;
    }
    /**
     * Set OverrideGSPServiceWithIntlServicePreference value
     * @param bool $overrideGSPServiceWithIntlServicePreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setOverrideGSPServiceWithIntlServicePreference(?bool $overrideGSPServiceWithIntlServicePreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideGSPServiceWithIntlServicePreference) && !is_bool($overrideGSPServiceWithIntlServicePreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideGSPServiceWithIntlServicePreference, true), gettype($overrideGSPServiceWithIntlServicePreference)), __LINE__);
        }
        $this->OverrideGSPServiceWithIntlServicePreference = $overrideGSPServiceWithIntlServicePreference;
        
        return $this;
    }
    /**
     * Get PickupDropoffSellerPreference value
     * @return bool|null
     */
    public function getPickupDropoffSellerPreference(): ?bool
    {
        return $this->PickupDropoffSellerPreference;
    }
    /**
     * Set PickupDropoffSellerPreference value
     * @param bool $pickupDropoffSellerPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setPickupDropoffSellerPreference(?bool $pickupDropoffSellerPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pickupDropoffSellerPreference) && !is_bool($pickupDropoffSellerPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickupDropoffSellerPreference, true), gettype($pickupDropoffSellerPreference)), __LINE__);
        }
        $this->PickupDropoffSellerPreference = $pickupDropoffSellerPreference;
        
        return $this;
    }
    /**
     * Get OutOfStockControlPreference value
     * @return bool|null
     */
    public function getOutOfStockControlPreference(): ?bool
    {
        return $this->OutOfStockControlPreference;
    }
    /**
     * Set OutOfStockControlPreference value
     * @param bool $outOfStockControlPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setOutOfStockControlPreference(?bool $outOfStockControlPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outOfStockControlPreference) && !is_bool($outOfStockControlPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outOfStockControlPreference, true), gettype($outOfStockControlPreference)), __LINE__);
        }
        $this->OutOfStockControlPreference = $outOfStockControlPreference;
        
        return $this;
    }
    /**
     * Get eBayPLUSPreference value
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType[]
     */
    public function getEBayPLUSPreference(): ?array
    {
        return $this->eBayPLUSPreference;
    }
    /**
     * This method is responsible for validating the values passed to the setEBayPLUSPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEBayPLUSPreference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEBayPLUSPreferenceForArrayConstraintsFromSetEBayPLUSPreference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserPreferencesResponseTypeEBayPLUSPreferenceItem) {
            // validation for constraint: itemType
            if (!$getUserPreferencesResponseTypeEBayPLUSPreferenceItem instanceof \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType) {
                $invalidValues[] = is_object($getUserPreferencesResponseTypeEBayPLUSPreferenceItem) ? get_class($getUserPreferencesResponseTypeEBayPLUSPreferenceItem) : sprintf('%s(%s)', gettype($getUserPreferencesResponseTypeEBayPLUSPreferenceItem), var_export($getUserPreferencesResponseTypeEBayPLUSPreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eBayPLUSPreference property can only contain items of type \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eBayPLUSPreference value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType[] $eBayPLUSPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function setEBayPLUSPreference(?array $eBayPLUSPreference = null): self
    {
        // validation for constraint: array
        if ('' !== ($eBayPLUSPreferenceArrayErrorMessage = self::validateEBayPLUSPreferenceForArrayConstraintsFromSetEBayPLUSPreference($eBayPLUSPreference))) {
            throw new InvalidArgumentException($eBayPLUSPreferenceArrayErrorMessage, __LINE__);
        }
        $this->eBayPLUSPreference = $eBayPLUSPreference;
        
        return $this;
    }
    /**
     * Add item to eBayPLUSPreference value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType $item
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesResponseType
     */
    public function addToEBayPLUSPreference(\macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType) {
            throw new InvalidArgumentException(sprintf('The eBayPLUSPreference property can only contain items of type \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eBayPLUSPreference[] = $item;
        
        return $this;
    }
}
