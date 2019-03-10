<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserPreferencesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call allows an eBay user to set/modify numerous seller account preferences.
 * @subpackage Structs
 */
class SetUserPreferencesRequestType extends AbstractRequestType
{
    /**
     * The BidderNoticePreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to receive contact information for unsuccessful bidders. This preference is only applicable for auction listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
     */
    public $BidderNoticePreferences;
    /**
     * The CombinedPaymentPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set the preference for allowing Combined Invoice orders for cases where the buyer has multiple unpaid order line items from the same seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public $CombinedPaymentPreferences;
    /**
     * The CrossPromotionPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType
     */
    public $CrossPromotionPreferences;
    /**
     * The SellerPaymentPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set various payment preferences. One or more preferences may be set or modified under this container. Payment preferences specified in a <b>SetUserPreferences</b> call override the
     * settings in My eBay payment preferences.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public $SellerPaymentPreferences;
    /**
     * The SellerFavoriteItemPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. One or more preferences may be set or modified under this container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType
     */
    public $SellerFavoriteItemPreferences;
    /**
     * The EndOfAuctionEmailPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set preferences for the end-of-auction email sent to the winning bidder. These preferences allow the seller to customize the Email that is sent to buyer at the end of the auction.
     * One or more preferences may be set or modified under this container. These preferences are only applicable for auction listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public $EndOfAuctionEmailPreferences;
    /**
     * The EmailShipmentTrackingNumberPreference
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wishes to email the shipment's tracking number to the buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $EmailShipmentTrackingNumberPreference;
    /**
     * The RequiredShipPhoneNumberPreference
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wishes to require the buyer to provide a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number.
     * - minOccurs: 0
     * @var bool
     */
    public $RequiredShipPhoneNumberPreference;
    /**
     * The UnpaidItemAssistancePreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item case on the behalf of the seller if the buyer has not paid for the order after a
     * specified number of days. One or more preferences may be set or modified under this container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public $UnpaidItemAssistancePreferences;
    /**
     * The PurchaseReminderEmailPreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set the preference for sending a purchase reminder email to buyers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
     */
    public $PurchaseReminderEmailPreferences;
    /**
     * The SellerThirdPartyCheckoutDisabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as third-party checkout on eBay is no longer possible.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerThirdPartyCheckoutDisabled;
    /**
     * The DispatchCutoffTimePreference
     * Meta informations extracted from the WSDL
     * - documentation: This container is included if the seller wishes to set the order cut off time for same-day shipping. If the seller specifies a value of <code>0</code> in <strong>Item.DispatchTimeMax</strong> to offer same day handling when listing
     * an item, the seller's shipping time commitment depends on the order cut off time set for the listing site, as indicated by the <strong>DispatchCutoffTimePreference.CutoffTime</strong> field. <br> <br> <span class="tablenote"><b>Note:</b> This field
     * is not applicable for sellers who have opted into the Handling Time Option of eBay Guaranteed Delivery, as this field only shows a single order cutoff time, but with the Handling Time Option, a seller can set a different order cutoff time for each
     * business day. Currently, eBay Guaranteed Delivery is only available in the US.</span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType
     */
    public $DispatchCutoffTimePreference;
    /**
     * The GlobalShippingProgramListingPreference
     * Meta informations extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, the seller's new listings will enable the Global Shipping Program by default. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This field is ignored for sellers who are
     * not opted in to the Global Shipping Program (when GetUserPreferences returns <strong>OfferGlobalShippingProgramPreference</strong> with a value of <code>false</code>). </span>
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalShippingProgramListingPreference;
    /**
     * The OverrideGSPserviceWithIntlService
     * Meta informations extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, and the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default
     * international shipping option for buyers in that country, rather than the Global Shipping Program. The Global Shipping Program will still be the listing's default option for shipping to any Global Shipping-eligible country for which the seller does
     * <em>not</em> specify an international shipping service. <br/><br/> If this flag is set to <code>false</code>, the Global Shipping Program will be each Global Shipping-eligible listing's default option for shipping to any Global Shipping-eligible
     * country, regardless of any international shipping service that the seller specifies for the listing.
     * - minOccurs: 0
     * @var bool
     */
    public $OverrideGSPserviceWithIntlService;
    /**
     * The OutOfStockControlPreference
     * Meta informations extracted from the WSDL
     * - documentation: If this flag is included and set to <code>true</code>, it enables the Out-of-Stock feature. A seller would use this feature to keep Fixed-Price GTC (Good 'Til Canceled) listings alive even when the "quantity available" value goes to
     * 0 (zero). This is useful when waiting for additional stock and eliminates the need to end the listing and then recreating it when stock arrives. <br/><br/> While the "quantity available" value is 0, the listing would be hidden from eBay search and if
     * that item was specifically searched for with <b>GetItem</b> (or related call), the element <b>HideFromSearch</b> would be returned as 'true' and <b>ReasonHideFromSearch</b> would be returned as 'OutOfStock'. <br/><br/> When stock is available, the
     * seller can use the <b>Revise</b> calls to update the inventory of the item (through the <b>Item.Quantity</b> or <b>Item.Variations.Variation.Quantity</b> fields) and the listing would appear again. <br/><br/> You can return the value of this flag
     * using the <a href="GetUserPreferences.html#Request.ShowOutOfStockControlPreference">GetUserPreferences</a> call and setting the <b>ShowOutOfStockControlPreference</b> field to 'true'. <br/><br/> <span class="tablenote"><b>IMPORTANT: </b> When a
     * listing using the Out-of-Stock feature has zero quantity, the seller has 90 days to add inventory without incurring a listing fee. Fees are changed at the end of each the billing cycle but are then refunded if the item is out-of-stock for an entire
     * billing period. See <a href="../../../../guides/ebayfeatures/Development/Listings-UseOutOfStock.html#FeesForaListingWithZeroQuantity">Fees For a Listing With Zero Quantity</a> for details. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $OutOfStockControlPreference;
    /**
     * Constructor method for SetUserPreferencesRequestType
     * @uses SetUserPreferencesRequestType::setBidderNoticePreferences()
     * @uses SetUserPreferencesRequestType::setCombinedPaymentPreferences()
     * @uses SetUserPreferencesRequestType::setCrossPromotionPreferences()
     * @uses SetUserPreferencesRequestType::setSellerPaymentPreferences()
     * @uses SetUserPreferencesRequestType::setSellerFavoriteItemPreferences()
     * @uses SetUserPreferencesRequestType::setEndOfAuctionEmailPreferences()
     * @uses SetUserPreferencesRequestType::setEmailShipmentTrackingNumberPreference()
     * @uses SetUserPreferencesRequestType::setRequiredShipPhoneNumberPreference()
     * @uses SetUserPreferencesRequestType::setUnpaidItemAssistancePreferences()
     * @uses SetUserPreferencesRequestType::setPurchaseReminderEmailPreferences()
     * @uses SetUserPreferencesRequestType::setSellerThirdPartyCheckoutDisabled()
     * @uses SetUserPreferencesRequestType::setDispatchCutoffTimePreference()
     * @uses SetUserPreferencesRequestType::setGlobalShippingProgramListingPreference()
     * @uses SetUserPreferencesRequestType::setOverrideGSPserviceWithIntlService()
     * @uses SetUserPreferencesRequestType::setOutOfStockControlPreference()
     * @param \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @param \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @param \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @param \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @param bool $emailShipmentTrackingNumberPreference
     * @param bool $requiredShipPhoneNumberPreference
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @param \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @param \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @param bool $globalShippingProgramListingPreference
     * @param bool $overrideGSPserviceWithIntlService
     * @param bool $outOfStockControlPreference
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null, \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null, \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null, \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null, \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null, \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null, $emailShipmentTrackingNumberPreference = null, $requiredShipPhoneNumberPreference = null, \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null, \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null, $sellerThirdPartyCheckoutDisabled = null, \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null, $globalShippingProgramListingPreference = null, $overrideGSPserviceWithIntlService = null, $outOfStockControlPreference = null)
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
            ->setUnpaidItemAssistancePreferences($unpaidItemAssistancePreferences)
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled)
            ->setDispatchCutoffTimePreference($dispatchCutoffTimePreference)
            ->setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference)
            ->setOverrideGSPserviceWithIntlService($overrideGSPserviceWithIntlService)
            ->setOutOfStockControlPreference($outOfStockControlPreference);
    }
    /**
     * Get BidderNoticePreferences value
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType|null
     */
    public function getBidderNoticePreferences()
    {
        return $this->BidderNoticePreferences;
    }
    /**
     * Set BidderNoticePreferences value
     * @param \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setBidderNoticePreferences(\macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType $bidderNoticePreferences = null)
    {
        $this->BidderNoticePreferences = $bidderNoticePreferences;
        return $this;
    }
    /**
     * Get CombinedPaymentPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType|null
     */
    public function getCombinedPaymentPreferences()
    {
        return $this->CombinedPaymentPreferences;
    }
    /**
     * Set CombinedPaymentPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setCombinedPaymentPreferences(\macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType $combinedPaymentPreferences = null)
    {
        $this->CombinedPaymentPreferences = $combinedPaymentPreferences;
        return $this;
    }
    /**
     * Get CrossPromotionPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType|null
     */
    public function getCrossPromotionPreferences()
    {
        return $this->CrossPromotionPreferences;
    }
    /**
     * Set CrossPromotionPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setCrossPromotionPreferences(\macropage\ebaysdk\trading\StructType\CrossPromotionPreferencesType $crossPromotionPreferences = null)
    {
        $this->CrossPromotionPreferences = $crossPromotionPreferences;
        return $this;
    }
    /**
     * Get SellerPaymentPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType|null
     */
    public function getSellerPaymentPreferences()
    {
        return $this->SellerPaymentPreferences;
    }
    /**
     * Set SellerPaymentPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setSellerPaymentPreferences(\macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType $sellerPaymentPreferences = null)
    {
        $this->SellerPaymentPreferences = $sellerPaymentPreferences;
        return $this;
    }
    /**
     * Get SellerFavoriteItemPreferences value
     * @return \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType|null
     */
    public function getSellerFavoriteItemPreferences()
    {
        return $this->SellerFavoriteItemPreferences;
    }
    /**
     * Set SellerFavoriteItemPreferences value
     * @param \macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setSellerFavoriteItemPreferences(\macropage\ebaysdk\trading\StructType\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences = null)
    {
        $this->SellerFavoriteItemPreferences = $sellerFavoriteItemPreferences;
        return $this;
    }
    /**
     * Get EndOfAuctionEmailPreferences value
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType|null
     */
    public function getEndOfAuctionEmailPreferences()
    {
        return $this->EndOfAuctionEmailPreferences;
    }
    /**
     * Set EndOfAuctionEmailPreferences value
     * @param \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setEndOfAuctionEmailPreferences(\macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null)
    {
        $this->EndOfAuctionEmailPreferences = $endOfAuctionEmailPreferences;
        return $this;
    }
    /**
     * Get EmailShipmentTrackingNumberPreference value
     * @return bool|null
     */
    public function getEmailShipmentTrackingNumberPreference()
    {
        return $this->EmailShipmentTrackingNumberPreference;
    }
    /**
     * Set EmailShipmentTrackingNumberPreference value
     * @param bool $emailShipmentTrackingNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setEmailShipmentTrackingNumberPreference($emailShipmentTrackingNumberPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($emailShipmentTrackingNumberPreference) && !is_bool($emailShipmentTrackingNumberPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($emailShipmentTrackingNumberPreference)), __LINE__);
        }
        $this->EmailShipmentTrackingNumberPreference = $emailShipmentTrackingNumberPreference;
        return $this;
    }
    /**
     * Get RequiredShipPhoneNumberPreference value
     * @return bool|null
     */
    public function getRequiredShipPhoneNumberPreference()
    {
        return $this->RequiredShipPhoneNumberPreference;
    }
    /**
     * Set RequiredShipPhoneNumberPreference value
     * @param bool $requiredShipPhoneNumberPreference
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setRequiredShipPhoneNumberPreference($requiredShipPhoneNumberPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiredShipPhoneNumberPreference) && !is_bool($requiredShipPhoneNumberPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requiredShipPhoneNumberPreference)), __LINE__);
        }
        $this->RequiredShipPhoneNumberPreference = $requiredShipPhoneNumberPreference;
        return $this;
    }
    /**
     * Get UnpaidItemAssistancePreferences value
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType|null
     */
    public function getUnpaidItemAssistancePreferences()
    {
        return $this->UnpaidItemAssistancePreferences;
    }
    /**
     * Set UnpaidItemAssistancePreferences value
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setUnpaidItemAssistancePreferences(\macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences = null)
    {
        $this->UnpaidItemAssistancePreferences = $unpaidItemAssistancePreferences;
        return $this;
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType|null
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setPurchaseReminderEmailPreferences(\macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences = null)
    {
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        return $this;
    }
    /**
     * Get SellerThirdPartyCheckoutDisabled value
     * @return bool|null
     */
    public function getSellerThirdPartyCheckoutDisabled()
    {
        return $this->SellerThirdPartyCheckoutDisabled;
    }
    /**
     * Set SellerThirdPartyCheckoutDisabled value
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerThirdPartyCheckoutDisabled) && !is_bool($sellerThirdPartyCheckoutDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerThirdPartyCheckoutDisabled)), __LINE__);
        }
        $this->SellerThirdPartyCheckoutDisabled = $sellerThirdPartyCheckoutDisabled;
        return $this;
    }
    /**
     * Get DispatchCutoffTimePreference value
     * @return \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType|null
     */
    public function getDispatchCutoffTimePreference()
    {
        return $this->DispatchCutoffTimePreference;
    }
    /**
     * Set DispatchCutoffTimePreference value
     * @param \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setDispatchCutoffTimePreference(\macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null)
    {
        $this->DispatchCutoffTimePreference = $dispatchCutoffTimePreference;
        return $this;
    }
    /**
     * Get GlobalShippingProgramListingPreference value
     * @return bool|null
     */
    public function getGlobalShippingProgramListingPreference()
    {
        return $this->GlobalShippingProgramListingPreference;
    }
    /**
     * Set GlobalShippingProgramListingPreference value
     * @param bool $globalShippingProgramListingPreference
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingProgramListingPreference) && !is_bool($globalShippingProgramListingPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($globalShippingProgramListingPreference)), __LINE__);
        }
        $this->GlobalShippingProgramListingPreference = $globalShippingProgramListingPreference;
        return $this;
    }
    /**
     * Get OverrideGSPserviceWithIntlService value
     * @return bool|null
     */
    public function getOverrideGSPserviceWithIntlService()
    {
        return $this->OverrideGSPserviceWithIntlService;
    }
    /**
     * Set OverrideGSPserviceWithIntlService value
     * @param bool $overrideGSPserviceWithIntlService
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setOverrideGSPserviceWithIntlService($overrideGSPserviceWithIntlService = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideGSPserviceWithIntlService) && !is_bool($overrideGSPserviceWithIntlService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideGSPserviceWithIntlService)), __LINE__);
        }
        $this->OverrideGSPserviceWithIntlService = $overrideGSPserviceWithIntlService;
        return $this;
    }
    /**
     * Get OutOfStockControlPreference value
     * @return bool|null
     */
    public function getOutOfStockControlPreference()
    {
        return $this->OutOfStockControlPreference;
    }
    /**
     * Set OutOfStockControlPreference value
     * @param bool $outOfStockControlPreference
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public function setOutOfStockControlPreference($outOfStockControlPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($outOfStockControlPreference) && !is_bool($outOfStockControlPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($outOfStockControlPreference)), __LINE__);
        }
        $this->OutOfStockControlPreference = $outOfStockControlPreference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
