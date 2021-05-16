<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the specified user preferences for the authenticated caller.
 * @subpackage Structs
 */
class GetUserPreferencesRequestType extends AbstractRequestType
{
    /**
     * The ShowBidderNoticePreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preference for receiving contact information for unsuccessful bidders is returned in the response.
     * @var bool|null
     */
    protected ?bool $ShowBidderNoticePreferences = null;
    /**
     * The ShowCombinedPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's combined invoice preferences are returned in the response. These preferences are used to allow Combined Invoice orders. <br>
     * @var bool|null
     */
    protected ?bool $ShowCombinedPaymentPreferences = null;
    /**
     * The ShowCrossPromotionPreferences
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool|null
     */
    protected ?bool $ShowCrossPromotionPreferences = null;
    /**
     * The ShowSellerPaymentPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's payment preferences are returned in the response.
     * @var bool|null
     */
    protected ?bool $ShowSellerPaymentPreferences = null;
    /**
     * The ShowEndOfAuctionEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preferences for the end-of-auction email sent to the winning bidder is returned in the response. These preferences are only applicable for auction listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowEndOfAuctionEmailPreferences = null;
    /**
     * The ShowSellerFavoriteItemPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's favorite item preferences are returned in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowSellerFavoriteItemPreferences = null;
    /**
     * The ShowProStoresPreferences
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowProStoresPreferences = null;
    /**
     * The ShowEmailShipmentTrackingNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preference for sending an email to the buyer with the shipping tracking number is returned in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowEmailShipmentTrackingNumberPreference = null;
    /**
     * The ShowRequiredShipPhoneNumberPreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preference for requiring that the buyer supply a shipping phone number upon checkout is returned in the response. Some shipping carriers require the receiver's phone number.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowRequiredShipPhoneNumberPreference = null;
    /**
     * The ShowSellerExcludeShipToLocationPreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, all of the seller's excluded shipping locations are returned in the response. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences.
     * An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the
     * <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the <b>AddItem</b> family of calls.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowSellerExcludeShipToLocationPreference = null;
    /**
     * The ShowUnpaidItemAssistancePreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's Unpaid Item Assistant preferences are returned in the response. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. <br><br> <span
     * class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request.
     * Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowUnpaidItemAssistancePreference = null;
    /**
     * The ShowPurchaseReminderEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preference for sending a purchase reminder email to buyers is returned in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowPurchaseReminderEmailPreferences = null;
    /**
     * The ShowUnpaidItemAssistanceExclusionList
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item Assistant Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For
     * excluded users, an Unpaid Item dispute is not automatically filed through the UPI Assistance mechanism. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return
     * the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowUnpaidItemAssistanceExclusionList = null;
    /**
     * The ShowSellerProfilePreferences
     * Meta information extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, the seller's Business Policies profile information is returned in the response. This information includes a flag that indicates whether or not the seller has opted into Business
     * Policies, as well as Business Policies profiles (payment, shipping, and return policy) active on the seller's account.
     * @var bool|null
     */
    protected ?bool $ShowSellerProfilePreferences = null;
    /**
     * The ShowSellerReturnPreferences
     * Meta information extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, the <b>SellerReturnPreferences</b> container is returned in the response and indicates whether or not the seller has opted in to eBay Managed Returns. <br><br> eBay Managed
     * Returns are currently only available on the US, UK, DE, AU, and CA (English and French) sites.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowSellerReturnPreferences = null;
    /**
     * The ShowGlobalShippingProgramPreference
     * Meta information extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, the seller's preference for offering the Global Shipping Program to international buyers will be returned in <strong>OfferGlobalShippingProgramPreference</strong>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowGlobalShippingProgramPreference = null;
    /**
     * The ShowDispatchCutoffTimePreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's same-day handling cutoff time is returned in <strong>DispatchCutoffTimePreference.CutoffTime</strong>. <br> <br> <span class="tablenote"><b>Note:</b> For sellers opted in to the
     * feature that supports different order cutoff times for each business day, the order cutoff time returned in the response may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should
     * view Shipping Preferences in My eBay. </span> <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowDispatchCutoffTimePreferences = null;
    /**
     * The ShowGlobalShippingProgramListingPreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the <strong>GlobalShippingProgramListingPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping
     * Program by default.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowGlobalShippingProgramListingPreference = null;
    /**
     * The ShowOverrideGSPServiceWithIntlServicePreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the <strong>OverrideGSPServiceWithIntlServicePreference</strong> field is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an
     * international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     * <br/><br/> A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global
     * Shipping-eligible country.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowOverrideGSPServiceWithIntlServicePreference = null;
    /**
     * The ShowPickupDropoffPreferences
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the <strong>PickupDropoffSellerPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will by default be eligible to be
     * evaluated for the Click and Collect feature. <br/><br/> With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and
     * Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites. <br/><br/> <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers
     * to set the Click and Collect preference at the listing level. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowPickupDropoffPreferences = null;
    /**
     * The ShowOutOfStockControlPreference
     * Meta information extracted from the WSDL
     * - documentation: If included and set to <code>true</code>, the seller's preferences related to the Out-of-Stock feature will be returned. This feature is set using the <a
     * href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences</a> call.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowOutOfStockControlPreference = null;
    /**
     * The ShoweBayPLUSPreference
     * Meta information extracted from the WSDL
     * - documentation: To determine whether a seller can offer eBay Plus in qualified listings, include this field and set it to <code>true</code>. <br/><br/> eBay Plus is a premium account option for buyers, which provides benefits such as fast free
     * domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus, and can offer the program on a per-listing basis. <br/><br/> The <strong>eBayPLUSPreference</strong> container is returned in the response with
     * information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country. <br/><br/>
     * <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will
     * evaluate/determine whether a listing is eligible for eBay Plus. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShoweBayPLUSPreference = null;
    /**
     * Constructor method for GetUserPreferencesRequestType
     * @uses GetUserPreferencesRequestType::setShowBidderNoticePreferences()
     * @uses GetUserPreferencesRequestType::setShowCombinedPaymentPreferences()
     * @uses GetUserPreferencesRequestType::setShowCrossPromotionPreferences()
     * @uses GetUserPreferencesRequestType::setShowSellerPaymentPreferences()
     * @uses GetUserPreferencesRequestType::setShowEndOfAuctionEmailPreferences()
     * @uses GetUserPreferencesRequestType::setShowSellerFavoriteItemPreferences()
     * @uses GetUserPreferencesRequestType::setShowProStoresPreferences()
     * @uses GetUserPreferencesRequestType::setShowEmailShipmentTrackingNumberPreference()
     * @uses GetUserPreferencesRequestType::setShowRequiredShipPhoneNumberPreference()
     * @uses GetUserPreferencesRequestType::setShowSellerExcludeShipToLocationPreference()
     * @uses GetUserPreferencesRequestType::setShowUnpaidItemAssistancePreference()
     * @uses GetUserPreferencesRequestType::setShowPurchaseReminderEmailPreferences()
     * @uses GetUserPreferencesRequestType::setShowUnpaidItemAssistanceExclusionList()
     * @uses GetUserPreferencesRequestType::setShowSellerProfilePreferences()
     * @uses GetUserPreferencesRequestType::setShowSellerReturnPreferences()
     * @uses GetUserPreferencesRequestType::setShowGlobalShippingProgramPreference()
     * @uses GetUserPreferencesRequestType::setShowDispatchCutoffTimePreferences()
     * @uses GetUserPreferencesRequestType::setShowGlobalShippingProgramListingPreference()
     * @uses GetUserPreferencesRequestType::setShowOverrideGSPServiceWithIntlServicePreference()
     * @uses GetUserPreferencesRequestType::setShowPickupDropoffPreferences()
     * @uses GetUserPreferencesRequestType::setShowOutOfStockControlPreference()
     * @uses GetUserPreferencesRequestType::setShoweBayPLUSPreference()
     * @param bool $showBidderNoticePreferences
     * @param bool $showCombinedPaymentPreferences
     * @param bool $showCrossPromotionPreferences
     * @param bool $showSellerPaymentPreferences
     * @param bool $showEndOfAuctionEmailPreferences
     * @param bool $showSellerFavoriteItemPreferences
     * @param bool $showProStoresPreferences
     * @param bool $showEmailShipmentTrackingNumberPreference
     * @param bool $showRequiredShipPhoneNumberPreference
     * @param bool $showSellerExcludeShipToLocationPreference
     * @param bool $showUnpaidItemAssistancePreference
     * @param bool $showPurchaseReminderEmailPreferences
     * @param bool $showUnpaidItemAssistanceExclusionList
     * @param bool $showSellerProfilePreferences
     * @param bool $showSellerReturnPreferences
     * @param bool $showGlobalShippingProgramPreference
     * @param bool $showDispatchCutoffTimePreferences
     * @param bool $showGlobalShippingProgramListingPreference
     * @param bool $showOverrideGSPServiceWithIntlServicePreference
     * @param bool $showPickupDropoffPreferences
     * @param bool $showOutOfStockControlPreference
     * @param bool $showeBayPLUSPreference
     */
    public function __construct(?bool $showBidderNoticePreferences = null, ?bool $showCombinedPaymentPreferences = null, ?bool $showCrossPromotionPreferences = null, ?bool $showSellerPaymentPreferences = null, ?bool $showEndOfAuctionEmailPreferences = null, ?bool $showSellerFavoriteItemPreferences = null, ?bool $showProStoresPreferences = null, ?bool $showEmailShipmentTrackingNumberPreference = null, ?bool $showRequiredShipPhoneNumberPreference = null, ?bool $showSellerExcludeShipToLocationPreference = null, ?bool $showUnpaidItemAssistancePreference = null, ?bool $showPurchaseReminderEmailPreferences = null, ?bool $showUnpaidItemAssistanceExclusionList = null, ?bool $showSellerProfilePreferences = null, ?bool $showSellerReturnPreferences = null, ?bool $showGlobalShippingProgramPreference = null, ?bool $showDispatchCutoffTimePreferences = null, ?bool $showGlobalShippingProgramListingPreference = null, ?bool $showOverrideGSPServiceWithIntlServicePreference = null, ?bool $showPickupDropoffPreferences = null, ?bool $showOutOfStockControlPreference = null, ?bool $showeBayPLUSPreference = null)
    {
        $this
            ->setShowBidderNoticePreferences($showBidderNoticePreferences)
            ->setShowCombinedPaymentPreferences($showCombinedPaymentPreferences)
            ->setShowCrossPromotionPreferences($showCrossPromotionPreferences)
            ->setShowSellerPaymentPreferences($showSellerPaymentPreferences)
            ->setShowEndOfAuctionEmailPreferences($showEndOfAuctionEmailPreferences)
            ->setShowSellerFavoriteItemPreferences($showSellerFavoriteItemPreferences)
            ->setShowProStoresPreferences($showProStoresPreferences)
            ->setShowEmailShipmentTrackingNumberPreference($showEmailShipmentTrackingNumberPreference)
            ->setShowRequiredShipPhoneNumberPreference($showRequiredShipPhoneNumberPreference)
            ->setShowSellerExcludeShipToLocationPreference($showSellerExcludeShipToLocationPreference)
            ->setShowUnpaidItemAssistancePreference($showUnpaidItemAssistancePreference)
            ->setShowPurchaseReminderEmailPreferences($showPurchaseReminderEmailPreferences)
            ->setShowUnpaidItemAssistanceExclusionList($showUnpaidItemAssistanceExclusionList)
            ->setShowSellerProfilePreferences($showSellerProfilePreferences)
            ->setShowSellerReturnPreferences($showSellerReturnPreferences)
            ->setShowGlobalShippingProgramPreference($showGlobalShippingProgramPreference)
            ->setShowDispatchCutoffTimePreferences($showDispatchCutoffTimePreferences)
            ->setShowGlobalShippingProgramListingPreference($showGlobalShippingProgramListingPreference)
            ->setShowOverrideGSPServiceWithIntlServicePreference($showOverrideGSPServiceWithIntlServicePreference)
            ->setShowPickupDropoffPreferences($showPickupDropoffPreferences)
            ->setShowOutOfStockControlPreference($showOutOfStockControlPreference)
            ->setShoweBayPLUSPreference($showeBayPLUSPreference);
    }
    /**
     * Get ShowBidderNoticePreferences value
     * @return bool|null
     */
    public function getShowBidderNoticePreferences(): ?bool
    {
        return $this->ShowBidderNoticePreferences;
    }
    /**
     * Set ShowBidderNoticePreferences value
     * @param bool $showBidderNoticePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowBidderNoticePreferences(?bool $showBidderNoticePreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showBidderNoticePreferences) && !is_bool($showBidderNoticePreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showBidderNoticePreferences, true), gettype($showBidderNoticePreferences)), __LINE__);
        }
        $this->ShowBidderNoticePreferences = $showBidderNoticePreferences;
        
        return $this;
    }
    /**
     * Get ShowCombinedPaymentPreferences value
     * @return bool|null
     */
    public function getShowCombinedPaymentPreferences(): ?bool
    {
        return $this->ShowCombinedPaymentPreferences;
    }
    /**
     * Set ShowCombinedPaymentPreferences value
     * @param bool $showCombinedPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowCombinedPaymentPreferences(?bool $showCombinedPaymentPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showCombinedPaymentPreferences) && !is_bool($showCombinedPaymentPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showCombinedPaymentPreferences, true), gettype($showCombinedPaymentPreferences)), __LINE__);
        }
        $this->ShowCombinedPaymentPreferences = $showCombinedPaymentPreferences;
        
        return $this;
    }
    /**
     * Get ShowCrossPromotionPreferences value
     * @return bool|null
     */
    public function getShowCrossPromotionPreferences(): ?bool
    {
        return $this->ShowCrossPromotionPreferences;
    }
    /**
     * Set ShowCrossPromotionPreferences value
     * @param bool $showCrossPromotionPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowCrossPromotionPreferences(?bool $showCrossPromotionPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showCrossPromotionPreferences) && !is_bool($showCrossPromotionPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showCrossPromotionPreferences, true), gettype($showCrossPromotionPreferences)), __LINE__);
        }
        $this->ShowCrossPromotionPreferences = $showCrossPromotionPreferences;
        
        return $this;
    }
    /**
     * Get ShowSellerPaymentPreferences value
     * @return bool|null
     */
    public function getShowSellerPaymentPreferences(): ?bool
    {
        return $this->ShowSellerPaymentPreferences;
    }
    /**
     * Set ShowSellerPaymentPreferences value
     * @param bool $showSellerPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowSellerPaymentPreferences(?bool $showSellerPaymentPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSellerPaymentPreferences) && !is_bool($showSellerPaymentPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSellerPaymentPreferences, true), gettype($showSellerPaymentPreferences)), __LINE__);
        }
        $this->ShowSellerPaymentPreferences = $showSellerPaymentPreferences;
        
        return $this;
    }
    /**
     * Get ShowEndOfAuctionEmailPreferences value
     * @return bool|null
     */
    public function getShowEndOfAuctionEmailPreferences(): ?bool
    {
        return $this->ShowEndOfAuctionEmailPreferences;
    }
    /**
     * Set ShowEndOfAuctionEmailPreferences value
     * @param bool $showEndOfAuctionEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowEndOfAuctionEmailPreferences(?bool $showEndOfAuctionEmailPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showEndOfAuctionEmailPreferences) && !is_bool($showEndOfAuctionEmailPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showEndOfAuctionEmailPreferences, true), gettype($showEndOfAuctionEmailPreferences)), __LINE__);
        }
        $this->ShowEndOfAuctionEmailPreferences = $showEndOfAuctionEmailPreferences;
        
        return $this;
    }
    /**
     * Get ShowSellerFavoriteItemPreferences value
     * @return bool|null
     */
    public function getShowSellerFavoriteItemPreferences(): ?bool
    {
        return $this->ShowSellerFavoriteItemPreferences;
    }
    /**
     * Set ShowSellerFavoriteItemPreferences value
     * @param bool $showSellerFavoriteItemPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowSellerFavoriteItemPreferences(?bool $showSellerFavoriteItemPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSellerFavoriteItemPreferences) && !is_bool($showSellerFavoriteItemPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSellerFavoriteItemPreferences, true), gettype($showSellerFavoriteItemPreferences)), __LINE__);
        }
        $this->ShowSellerFavoriteItemPreferences = $showSellerFavoriteItemPreferences;
        
        return $this;
    }
    /**
     * Get ShowProStoresPreferences value
     * @return bool|null
     */
    public function getShowProStoresPreferences(): ?bool
    {
        return $this->ShowProStoresPreferences;
    }
    /**
     * Set ShowProStoresPreferences value
     * @param bool $showProStoresPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowProStoresPreferences(?bool $showProStoresPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showProStoresPreferences) && !is_bool($showProStoresPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showProStoresPreferences, true), gettype($showProStoresPreferences)), __LINE__);
        }
        $this->ShowProStoresPreferences = $showProStoresPreferences;
        
        return $this;
    }
    /**
     * Get ShowEmailShipmentTrackingNumberPreference value
     * @return bool|null
     */
    public function getShowEmailShipmentTrackingNumberPreference(): ?bool
    {
        return $this->ShowEmailShipmentTrackingNumberPreference;
    }
    /**
     * Set ShowEmailShipmentTrackingNumberPreference value
     * @param bool $showEmailShipmentTrackingNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowEmailShipmentTrackingNumberPreference(?bool $showEmailShipmentTrackingNumberPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showEmailShipmentTrackingNumberPreference) && !is_bool($showEmailShipmentTrackingNumberPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showEmailShipmentTrackingNumberPreference, true), gettype($showEmailShipmentTrackingNumberPreference)), __LINE__);
        }
        $this->ShowEmailShipmentTrackingNumberPreference = $showEmailShipmentTrackingNumberPreference;
        
        return $this;
    }
    /**
     * Get ShowRequiredShipPhoneNumberPreference value
     * @return bool|null
     */
    public function getShowRequiredShipPhoneNumberPreference(): ?bool
    {
        return $this->ShowRequiredShipPhoneNumberPreference;
    }
    /**
     * Set ShowRequiredShipPhoneNumberPreference value
     * @param bool $showRequiredShipPhoneNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowRequiredShipPhoneNumberPreference(?bool $showRequiredShipPhoneNumberPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showRequiredShipPhoneNumberPreference) && !is_bool($showRequiredShipPhoneNumberPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showRequiredShipPhoneNumberPreference, true), gettype($showRequiredShipPhoneNumberPreference)), __LINE__);
        }
        $this->ShowRequiredShipPhoneNumberPreference = $showRequiredShipPhoneNumberPreference;
        
        return $this;
    }
    /**
     * Get ShowSellerExcludeShipToLocationPreference value
     * @return bool|null
     */
    public function getShowSellerExcludeShipToLocationPreference(): ?bool
    {
        return $this->ShowSellerExcludeShipToLocationPreference;
    }
    /**
     * Set ShowSellerExcludeShipToLocationPreference value
     * @param bool $showSellerExcludeShipToLocationPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowSellerExcludeShipToLocationPreference(?bool $showSellerExcludeShipToLocationPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSellerExcludeShipToLocationPreference) && !is_bool($showSellerExcludeShipToLocationPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSellerExcludeShipToLocationPreference, true), gettype($showSellerExcludeShipToLocationPreference)), __LINE__);
        }
        $this->ShowSellerExcludeShipToLocationPreference = $showSellerExcludeShipToLocationPreference;
        
        return $this;
    }
    /**
     * Get ShowUnpaidItemAssistancePreference value
     * @return bool|null
     */
    public function getShowUnpaidItemAssistancePreference(): ?bool
    {
        return $this->ShowUnpaidItemAssistancePreference;
    }
    /**
     * Set ShowUnpaidItemAssistancePreference value
     * @param bool $showUnpaidItemAssistancePreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowUnpaidItemAssistancePreference(?bool $showUnpaidItemAssistancePreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showUnpaidItemAssistancePreference) && !is_bool($showUnpaidItemAssistancePreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showUnpaidItemAssistancePreference, true), gettype($showUnpaidItemAssistancePreference)), __LINE__);
        }
        $this->ShowUnpaidItemAssistancePreference = $showUnpaidItemAssistancePreference;
        
        return $this;
    }
    /**
     * Get ShowPurchaseReminderEmailPreferences value
     * @return bool|null
     */
    public function getShowPurchaseReminderEmailPreferences(): ?bool
    {
        return $this->ShowPurchaseReminderEmailPreferences;
    }
    /**
     * Set ShowPurchaseReminderEmailPreferences value
     * @param bool $showPurchaseReminderEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowPurchaseReminderEmailPreferences(?bool $showPurchaseReminderEmailPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showPurchaseReminderEmailPreferences) && !is_bool($showPurchaseReminderEmailPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showPurchaseReminderEmailPreferences, true), gettype($showPurchaseReminderEmailPreferences)), __LINE__);
        }
        $this->ShowPurchaseReminderEmailPreferences = $showPurchaseReminderEmailPreferences;
        
        return $this;
    }
    /**
     * Get ShowUnpaidItemAssistanceExclusionList value
     * @return bool|null
     */
    public function getShowUnpaidItemAssistanceExclusionList(): ?bool
    {
        return $this->ShowUnpaidItemAssistanceExclusionList;
    }
    /**
     * Set ShowUnpaidItemAssistanceExclusionList value
     * @param bool $showUnpaidItemAssistanceExclusionList
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowUnpaidItemAssistanceExclusionList(?bool $showUnpaidItemAssistanceExclusionList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showUnpaidItemAssistanceExclusionList) && !is_bool($showUnpaidItemAssistanceExclusionList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showUnpaidItemAssistanceExclusionList, true), gettype($showUnpaidItemAssistanceExclusionList)), __LINE__);
        }
        $this->ShowUnpaidItemAssistanceExclusionList = $showUnpaidItemAssistanceExclusionList;
        
        return $this;
    }
    /**
     * Get ShowSellerProfilePreferences value
     * @return bool|null
     */
    public function getShowSellerProfilePreferences(): ?bool
    {
        return $this->ShowSellerProfilePreferences;
    }
    /**
     * Set ShowSellerProfilePreferences value
     * @param bool $showSellerProfilePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowSellerProfilePreferences(?bool $showSellerProfilePreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSellerProfilePreferences) && !is_bool($showSellerProfilePreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSellerProfilePreferences, true), gettype($showSellerProfilePreferences)), __LINE__);
        }
        $this->ShowSellerProfilePreferences = $showSellerProfilePreferences;
        
        return $this;
    }
    /**
     * Get ShowSellerReturnPreferences value
     * @return bool|null
     */
    public function getShowSellerReturnPreferences(): ?bool
    {
        return $this->ShowSellerReturnPreferences;
    }
    /**
     * Set ShowSellerReturnPreferences value
     * @param bool $showSellerReturnPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowSellerReturnPreferences(?bool $showSellerReturnPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSellerReturnPreferences) && !is_bool($showSellerReturnPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSellerReturnPreferences, true), gettype($showSellerReturnPreferences)), __LINE__);
        }
        $this->ShowSellerReturnPreferences = $showSellerReturnPreferences;
        
        return $this;
    }
    /**
     * Get ShowGlobalShippingProgramPreference value
     * @return bool|null
     */
    public function getShowGlobalShippingProgramPreference(): ?bool
    {
        return $this->ShowGlobalShippingProgramPreference;
    }
    /**
     * Set ShowGlobalShippingProgramPreference value
     * @param bool $showGlobalShippingProgramPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowGlobalShippingProgramPreference(?bool $showGlobalShippingProgramPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showGlobalShippingProgramPreference) && !is_bool($showGlobalShippingProgramPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showGlobalShippingProgramPreference, true), gettype($showGlobalShippingProgramPreference)), __LINE__);
        }
        $this->ShowGlobalShippingProgramPreference = $showGlobalShippingProgramPreference;
        
        return $this;
    }
    /**
     * Get ShowDispatchCutoffTimePreferences value
     * @return bool|null
     */
    public function getShowDispatchCutoffTimePreferences(): ?bool
    {
        return $this->ShowDispatchCutoffTimePreferences;
    }
    /**
     * Set ShowDispatchCutoffTimePreferences value
     * @param bool $showDispatchCutoffTimePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowDispatchCutoffTimePreferences(?bool $showDispatchCutoffTimePreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showDispatchCutoffTimePreferences) && !is_bool($showDispatchCutoffTimePreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showDispatchCutoffTimePreferences, true), gettype($showDispatchCutoffTimePreferences)), __LINE__);
        }
        $this->ShowDispatchCutoffTimePreferences = $showDispatchCutoffTimePreferences;
        
        return $this;
    }
    /**
     * Get ShowGlobalShippingProgramListingPreference value
     * @return bool|null
     */
    public function getShowGlobalShippingProgramListingPreference(): ?bool
    {
        return $this->ShowGlobalShippingProgramListingPreference;
    }
    /**
     * Set ShowGlobalShippingProgramListingPreference value
     * @param bool $showGlobalShippingProgramListingPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowGlobalShippingProgramListingPreference(?bool $showGlobalShippingProgramListingPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showGlobalShippingProgramListingPreference) && !is_bool($showGlobalShippingProgramListingPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showGlobalShippingProgramListingPreference, true), gettype($showGlobalShippingProgramListingPreference)), __LINE__);
        }
        $this->ShowGlobalShippingProgramListingPreference = $showGlobalShippingProgramListingPreference;
        
        return $this;
    }
    /**
     * Get ShowOverrideGSPServiceWithIntlServicePreference value
     * @return bool|null
     */
    public function getShowOverrideGSPServiceWithIntlServicePreference(): ?bool
    {
        return $this->ShowOverrideGSPServiceWithIntlServicePreference;
    }
    /**
     * Set ShowOverrideGSPServiceWithIntlServicePreference value
     * @param bool $showOverrideGSPServiceWithIntlServicePreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowOverrideGSPServiceWithIntlServicePreference(?bool $showOverrideGSPServiceWithIntlServicePreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOverrideGSPServiceWithIntlServicePreference) && !is_bool($showOverrideGSPServiceWithIntlServicePreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOverrideGSPServiceWithIntlServicePreference, true), gettype($showOverrideGSPServiceWithIntlServicePreference)), __LINE__);
        }
        $this->ShowOverrideGSPServiceWithIntlServicePreference = $showOverrideGSPServiceWithIntlServicePreference;
        
        return $this;
    }
    /**
     * Get ShowPickupDropoffPreferences value
     * @return bool|null
     */
    public function getShowPickupDropoffPreferences(): ?bool
    {
        return $this->ShowPickupDropoffPreferences;
    }
    /**
     * Set ShowPickupDropoffPreferences value
     * @param bool $showPickupDropoffPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowPickupDropoffPreferences(?bool $showPickupDropoffPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showPickupDropoffPreferences) && !is_bool($showPickupDropoffPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showPickupDropoffPreferences, true), gettype($showPickupDropoffPreferences)), __LINE__);
        }
        $this->ShowPickupDropoffPreferences = $showPickupDropoffPreferences;
        
        return $this;
    }
    /**
     * Get ShowOutOfStockControlPreference value
     * @return bool|null
     */
    public function getShowOutOfStockControlPreference(): ?bool
    {
        return $this->ShowOutOfStockControlPreference;
    }
    /**
     * Set ShowOutOfStockControlPreference value
     * @param bool $showOutOfStockControlPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShowOutOfStockControlPreference(?bool $showOutOfStockControlPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showOutOfStockControlPreference) && !is_bool($showOutOfStockControlPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showOutOfStockControlPreference, true), gettype($showOutOfStockControlPreference)), __LINE__);
        }
        $this->ShowOutOfStockControlPreference = $showOutOfStockControlPreference;
        
        return $this;
    }
    /**
     * Get ShoweBayPLUSPreference value
     * @return bool|null
     */
    public function getShoweBayPLUSPreference(): ?bool
    {
        return $this->ShoweBayPLUSPreference;
    }
    /**
     * Set ShoweBayPLUSPreference value
     * @param bool $showeBayPLUSPreference
     * @return \macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType
     */
    public function setShoweBayPLUSPreference(?bool $showeBayPLUSPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showeBayPLUSPreference) && !is_bool($showeBayPLUSPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showeBayPLUSPreference, true), gettype($showeBayPLUSPreference)), __LINE__);
        }
        $this->ShoweBayPLUSPreference = $showeBayPLUSPreference;
        
        return $this;
    }
}
