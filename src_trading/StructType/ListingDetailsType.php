<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Various details about a listing. Some of the details are calculated or derived after an item is listed. The details in this type include the start and end time and the converted (localized) prices. The details in this type also
 * include input values applicable to the Best Offer feature. Additional details in this type include flags indicating if a seller specified fields whose values are not visible to the requesting user.
 * @subpackage Structs
 */
class ListingDetailsType extends AbstractStructBase
{
    /**
     * The Adult
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, the item is listed in a Mature category. Users must accept the Mature Category agreement on the eBay site to retrieve items listed in Mature categories. (Users do not need to sign this agreement to be able to
     * list items in Mature Categories.)
     * - minOccurs: 0
     * @var bool
     */
    public $Adult;
    /**
     * The BindingAuction
     * Meta informations extracted from the WSDL
     * - documentation: Applicable for Real Estate auctions only. If <code>true</code>, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
     * - minOccurs: 0
     * @var bool
     */
    public $BindingAuction;
    /**
     * The CheckoutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled, a Pay Now button
     * will appear in checkout flow pages and in the email notifications that are sent to buyers. This preferance is enabled by default if PayPal is one of the payment methods.
     * - minOccurs: 0
     * @var bool
     */
    public $CheckoutEnabled;
    /**
     * The ConvertedBuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of the <b>BuyItNowPrice</b> in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedBuyItNowPrice;
    /**
     * The ConvertedStartPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of the <b>StartPrice</b> in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.<br> <br> In multi-variation listings, this
     * value matches the lowest-priced variation that is still available for sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedStartPrice;
    /**
     * The ConvertedReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of the <b>ReservePrice</b> in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this
     * value every 24 hours to pick up the current conversion rates. Not applicable to Fixed Price listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedReservePrice;
    /**
     * The HasReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, the seller specified a value in <b>ReservePrice</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $HasReservePrice;
    /**
     * The RelistedItemID
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the new item ID for a re-listed item. When an item is re-listed, the item ID for the new item is added to the old listing, so buyers can navigate to the new listing. This value only appears when the old listing is
     * retrieved. The <b>RelistedItemID</b> of the original item will reflect the last relist. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $RelistedItemID;
    /**
     * The SecondChanceOriginalItemID
     * Meta informations extracted from the WSDL
     * - documentation: The item ID for the original listing from which a second chance offer is made. This value is only returned when the data for the second chance offer listing is retrieved. Output only. | Type that represents the unique identifier for
     * an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $SecondChanceOriginalItemID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: The <b>StartTime</b> value returned by non-search calls such as <b>GetItem</b> is the time stamp (in GMT) for when the item was listed.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values of <b>StartTime</b> and <b>ListingDuration</b> ) or the actual end time if the item has ended.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The ViewItemURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the Web page where a user can view the listing. On the US site, this is called the View Item page. If you enabled affiliate tracking in a search-related call (for example, if you used the <b>AffiliateTrackingDetails</b>
     * container in an applicable call), <b>ViewItemURL</b> contains a string that includes affiliate tracking information (see the <a href= "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
     * - minOccurs: 0
     * @var string
     */
    public $ViewItemURL;
    /**
     * The HasUnansweredQuestions
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item has any unanswered questions. Use <b>GetMemberMessages</b> to retrieve unanswered questions for the item if this flag indicates that there are any.
     * - minOccurs: 0
     * @var bool
     */
    public $HasUnansweredQuestions;
    /**
     * The HasPublicMessages
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item has any publicly displayed messages. Use <b>GetMemberMessages</b> to retrieve public messages for the item if this flag indicates that there are any.
     * - minOccurs: 0
     * @var bool
     */
    public $HasPublicMessages;
    /**
     * The BuyItNowAvailable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the Buy It Now feature is available for an auction listing. As a general rule, once an auction listing has bids (and the high bid exceeds the reserve price, if any), the Buy It Now feature becomes disabled for the
     * listing.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowAvailable;
    /**
     * The SellerBusinessType
     * Meta informations extracted from the WSDL
     * - documentation: Type of seller account. This value is not returned for most sites. This value is not returned for the German site (site ID 77) or US eBay Motors site (site ID 0).
     * - minOccurs: 0
     * @var string
     */
    public $SellerBusinessType;
    /**
     * The MinimumBestOfferPrice
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the minimum acceptable Best Offer price. If a buyer submits a Best Offer that is below this value, the offer is automatically declined by the seller. This applies only to items listed in categories that support the Best
     * Offer Auto-Decline feature. <br/><br/> Best Offer must be enabled for the item, and only the seller who listed the item can see this value. For a <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> call on US eBay Motors site, prior use of a minimum
     * Best Offer price on eBay.com is ignored. <br/><br/> <b>For ReviseFixedPriceItem and ReviseItem:</b> If the price for a fixed-price item (set in the <b>StartPrice</b> field) is changed with a Revise call, the <b>BestOfferAutoAcceptPrice</b> and/or
     * <b>MinimumBestOfferPrice</b> values will be retained (if set for the listing) as long as they are still considered valid against the new fixed price. <br/><br/> <b>For Revise and Relist calls:</b> If a seller wanted to disable the Best Offer
     * Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/> <pre><code>
     * <DeletedField>Item.ListingDetails.MinimumBestOfferPrice</DeletedField> </code></pre>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MinimumBestOfferPrice;
    /**
     * The MinimumBestOfferMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $MinimumBestOfferMessage;
    /**
     * The LocalListingDistance
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a distance (in miles) used as the radius of the area about the supplied postal code that constitutes the local market. <br/><br/> Use <b>GetCategoryFeatures</b> to determine the local listing distances supported by a given
     * site, category, and Local Market subscription level.
     * - minOccurs: 0
     * @var string
     */
    public $LocalListingDistance;
    /**
     * The TCROriginalItemID
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the item ID of the original item listing from which a Transaction Confirmation Request (TCR) was created. This value is only returned when the data for a TCR is retrieved. | Type that represents the unique identifier for an
     * eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $TCROriginalItemID;
    /**
     * The ViewItemURLForNaturalSearch
     * Meta informations extracted from the WSDL
     * - documentation: This URL takes you to the same View Item page as ViewItemURL, but this URL is optimized to support natural search. That is, this URL is designed to make items on eBay easier to find via popular Internet search engines. The URL
     * includes the item title along with other optimizations. To note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes to "QQ", and "=" (equals sign) optimizes to "Z". <br><br> If you are an eBay affiliate, use this URL to promote your
     * affiliate information. <br><br> <span class="tablenote"><b>Note:</b> This URL may include additional query parameters that don't appear in <b>ViewItemURL</b> and vice versa. You should not modify the query syntax. For example, eBay won't recognize
     * the URL if you change QQ to ?. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ViewItemURLForNaturalSearch;
    /**
     * The PayPerLeadEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPerLeadEnabled;
    /**
     * The BestOfferAutoAcceptPrice
     * Meta informations extracted from the WSDL
     * - documentation: The price at which Best Offers are automatically accepted. Similar in use to <b>MinimumBestOfferPrice</b>. If a buyer submits a Best Offer that is above this value, the offer is automatically accepted by the seller. This applies only
     * to items listed in categories that support the <b>BestOfferAutoAcceptPrice</b> feature. <br/><br/> Best Offer must be enabled for the item, and only the seller who listed the item will see <b>BestOfferAutoAcceptPrice</b> in a call response. On the US
     * eBay Motors site (site ID 0), you cannot use the API to add a minimum Best Offer price. For a <b>ReviseItem</b> call on US eBay Motors, prior use of a minimum Best Offer price on eBay.com is ignored. <br/><br/> <b>For ReviseFixedPriceItem and
     * ReviseItem:</b> If the price for a fixed-price item (set in the <b>StartPrice</b> field) is changed with a Revise call, the <b>BestOfferAutoAcceptPrice</b> and/or <b>MinimumBestOfferPrice</b> values will be retained (if set for the listing) as long
     * as they are still considered valid against the new fixed price. <br/><br/> <b>For Revise and Relist calls:</b> If a seller wanted to disable the Best Offer Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full
     * path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/> <pre><code> <DeletedField>Item.ListingDetails.BestOfferAutoAcceptPrice</DeletedField> </code></pre>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BestOfferAutoAcceptPrice;
    /**
     * The EndingReason
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if the item was ended early (before listing duration expired) by the seller (through an API call or on the Web site) or ended administratively by eBay. The value in this field indicates the seller's reason
     * for ending the listing early.
     * - minOccurs: 0
     * @var string
     */
    public $EndingReason;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingDetailsType
     * @uses ListingDetailsType::setAdult()
     * @uses ListingDetailsType::setBindingAuction()
     * @uses ListingDetailsType::setCheckoutEnabled()
     * @uses ListingDetailsType::setConvertedBuyItNowPrice()
     * @uses ListingDetailsType::setConvertedStartPrice()
     * @uses ListingDetailsType::setConvertedReservePrice()
     * @uses ListingDetailsType::setHasReservePrice()
     * @uses ListingDetailsType::setRelistedItemID()
     * @uses ListingDetailsType::setSecondChanceOriginalItemID()
     * @uses ListingDetailsType::setStartTime()
     * @uses ListingDetailsType::setEndTime()
     * @uses ListingDetailsType::setViewItemURL()
     * @uses ListingDetailsType::setHasUnansweredQuestions()
     * @uses ListingDetailsType::setHasPublicMessages()
     * @uses ListingDetailsType::setBuyItNowAvailable()
     * @uses ListingDetailsType::setSellerBusinessType()
     * @uses ListingDetailsType::setMinimumBestOfferPrice()
     * @uses ListingDetailsType::setMinimumBestOfferMessage()
     * @uses ListingDetailsType::setLocalListingDistance()
     * @uses ListingDetailsType::setTCROriginalItemID()
     * @uses ListingDetailsType::setViewItemURLForNaturalSearch()
     * @uses ListingDetailsType::setPayPerLeadEnabled()
     * @uses ListingDetailsType::setBestOfferAutoAcceptPrice()
     * @uses ListingDetailsType::setEndingReason()
     * @uses ListingDetailsType::setAny()
     * @param bool $adult
     * @param bool $bindingAuction
     * @param bool $checkoutEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice
     * @param bool $hasReservePrice
     * @param string $relistedItemID
     * @param string $secondChanceOriginalItemID
     * @param string $startTime
     * @param string $endTime
     * @param string $viewItemURL
     * @param bool $hasUnansweredQuestions
     * @param bool $hasPublicMessages
     * @param bool $buyItNowAvailable
     * @param string $sellerBusinessType
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice
     * @param string $minimumBestOfferMessage
     * @param string $localListingDistance
     * @param string $tCROriginalItemID
     * @param string $viewItemURLForNaturalSearch
     * @param bool $payPerLeadEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice
     * @param string $endingReason
     * @param \DOMDocument $any
     */
    public function __construct($adult = null, $bindingAuction = null, $checkoutEnabled = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice = null, $hasReservePrice = null, $relistedItemID = null, $secondChanceOriginalItemID = null, $startTime = null, $endTime = null, $viewItemURL = null, $hasUnansweredQuestions = null, $hasPublicMessages = null, $buyItNowAvailable = null, $sellerBusinessType = null, \macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice = null, $minimumBestOfferMessage = null, $localListingDistance = null, $tCROriginalItemID = null, $viewItemURLForNaturalSearch = null, $payPerLeadEnabled = null, \macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice = null, $endingReason = null, \DOMDocument $any = null)
    {
        $this
            ->setAdult($adult)
            ->setBindingAuction($bindingAuction)
            ->setCheckoutEnabled($checkoutEnabled)
            ->setConvertedBuyItNowPrice($convertedBuyItNowPrice)
            ->setConvertedStartPrice($convertedStartPrice)
            ->setConvertedReservePrice($convertedReservePrice)
            ->setHasReservePrice($hasReservePrice)
            ->setRelistedItemID($relistedItemID)
            ->setSecondChanceOriginalItemID($secondChanceOriginalItemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setViewItemURL($viewItemURL)
            ->setHasUnansweredQuestions($hasUnansweredQuestions)
            ->setHasPublicMessages($hasPublicMessages)
            ->setBuyItNowAvailable($buyItNowAvailable)
            ->setSellerBusinessType($sellerBusinessType)
            ->setMinimumBestOfferPrice($minimumBestOfferPrice)
            ->setMinimumBestOfferMessage($minimumBestOfferMessage)
            ->setLocalListingDistance($localListingDistance)
            ->setTCROriginalItemID($tCROriginalItemID)
            ->setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch)
            ->setPayPerLeadEnabled($payPerLeadEnabled)
            ->setBestOfferAutoAcceptPrice($bestOfferAutoAcceptPrice)
            ->setEndingReason($endingReason)
            ->setAny($any);
    }
    /**
     * Get Adult value
     * @return bool|null
     */
    public function getAdult()
    {
        return $this->Adult;
    }
    /**
     * Set Adult value
     * @param bool $adult
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setAdult($adult = null)
    {
        // validation for constraint: boolean
        if (!is_null($adult) && !is_bool($adult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($adult)), __LINE__);
        }
        $this->Adult = $adult;
        return $this;
    }
    /**
     * Get BindingAuction value
     * @return bool|null
     */
    public function getBindingAuction()
    {
        return $this->BindingAuction;
    }
    /**
     * Set BindingAuction value
     * @param bool $bindingAuction
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBindingAuction($bindingAuction = null)
    {
        // validation for constraint: boolean
        if (!is_null($bindingAuction) && !is_bool($bindingAuction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bindingAuction)), __LINE__);
        }
        $this->BindingAuction = $bindingAuction;
        return $this;
    }
    /**
     * Get CheckoutEnabled value
     * @return bool|null
     */
    public function getCheckoutEnabled()
    {
        return $this->CheckoutEnabled;
    }
    /**
     * Set CheckoutEnabled value
     * @param bool $checkoutEnabled
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setCheckoutEnabled($checkoutEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutEnabled) && !is_bool($checkoutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkoutEnabled)), __LINE__);
        }
        $this->CheckoutEnabled = $checkoutEnabled;
        return $this;
    }
    /**
     * Get ConvertedBuyItNowPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->ConvertedBuyItNowPrice;
    }
    /**
     * Set ConvertedBuyItNowPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedBuyItNowPrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice = null)
    {
        $this->ConvertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }
    /**
     * Get ConvertedStartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedStartPrice()
    {
        return $this->ConvertedStartPrice;
    }
    /**
     * Set ConvertedStartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice = null)
    {
        $this->ConvertedStartPrice = $convertedStartPrice;
        return $this;
    }
    /**
     * Get ConvertedReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedReservePrice()
    {
        return $this->ConvertedReservePrice;
    }
    /**
     * Set ConvertedReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedReservePrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice = null)
    {
        $this->ConvertedReservePrice = $convertedReservePrice;
        return $this;
    }
    /**
     * Get HasReservePrice value
     * @return bool|null
     */
    public function getHasReservePrice()
    {
        return $this->HasReservePrice;
    }
    /**
     * Set HasReservePrice value
     * @param bool $hasReservePrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasReservePrice($hasReservePrice = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasReservePrice) && !is_bool($hasReservePrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasReservePrice)), __LINE__);
        }
        $this->HasReservePrice = $hasReservePrice;
        return $this;
    }
    /**
     * Get RelistedItemID value
     * @return string|null
     */
    public function getRelistedItemID()
    {
        return $this->RelistedItemID;
    }
    /**
     * Set RelistedItemID value
     * @param string $relistedItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setRelistedItemID($relistedItemID = null)
    {
        // validation for constraint: string
        if (!is_null($relistedItemID) && !is_string($relistedItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relistedItemID)), __LINE__);
        }
        $this->RelistedItemID = $relistedItemID;
        return $this;
    }
    /**
     * Get SecondChanceOriginalItemID value
     * @return string|null
     */
    public function getSecondChanceOriginalItemID()
    {
        return $this->SecondChanceOriginalItemID;
    }
    /**
     * Set SecondChanceOriginalItemID value
     * @param string $secondChanceOriginalItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setSecondChanceOriginalItemID($secondChanceOriginalItemID = null)
    {
        // validation for constraint: string
        if (!is_null($secondChanceOriginalItemID) && !is_string($secondChanceOriginalItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondChanceOriginalItemID)), __LINE__);
        }
        $this->SecondChanceOriginalItemID = $secondChanceOriginalItemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get ViewItemURL value
     * @return string|null
     */
    public function getViewItemURL()
    {
        return $this->ViewItemURL;
    }
    /**
     * Set ViewItemURL value
     * @param string $viewItemURL
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setViewItemURL($viewItemURL = null)
    {
        // validation for constraint: string
        if (!is_null($viewItemURL) && !is_string($viewItemURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewItemURL)), __LINE__);
        }
        $this->ViewItemURL = $viewItemURL;
        return $this;
    }
    /**
     * Get HasUnansweredQuestions value
     * @return bool|null
     */
    public function getHasUnansweredQuestions()
    {
        return $this->HasUnansweredQuestions;
    }
    /**
     * Set HasUnansweredQuestions value
     * @param bool $hasUnansweredQuestions
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasUnansweredQuestions($hasUnansweredQuestions = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasUnansweredQuestions) && !is_bool($hasUnansweredQuestions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasUnansweredQuestions)), __LINE__);
        }
        $this->HasUnansweredQuestions = $hasUnansweredQuestions;
        return $this;
    }
    /**
     * Get HasPublicMessages value
     * @return bool|null
     */
    public function getHasPublicMessages()
    {
        return $this->HasPublicMessages;
    }
    /**
     * Set HasPublicMessages value
     * @param bool $hasPublicMessages
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasPublicMessages($hasPublicMessages = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPublicMessages) && !is_bool($hasPublicMessages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasPublicMessages)), __LINE__);
        }
        $this->HasPublicMessages = $hasPublicMessages;
        return $this;
    }
    /**
     * Get BuyItNowAvailable value
     * @return bool|null
     */
    public function getBuyItNowAvailable()
    {
        return $this->BuyItNowAvailable;
    }
    /**
     * Set BuyItNowAvailable value
     * @param bool $buyItNowAvailable
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBuyItNowAvailable($buyItNowAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAvailable) && !is_bool($buyItNowAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyItNowAvailable)), __LINE__);
        }
        $this->BuyItNowAvailable = $buyItNowAvailable;
        return $this;
    }
    /**
     * Get SellerBusinessType value
     * @return string|null
     */
    public function getSellerBusinessType()
    {
        return $this->SellerBusinessType;
    }
    /**
     * Set SellerBusinessType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setSellerBusinessType($sellerBusinessType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerBusinessType, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        return $this;
    }
    /**
     * Get MinimumBestOfferPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinimumBestOfferPrice()
    {
        return $this->MinimumBestOfferPrice;
    }
    /**
     * Set MinimumBestOfferPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setMinimumBestOfferPrice(\macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice = null)
    {
        $this->MinimumBestOfferPrice = $minimumBestOfferPrice;
        return $this;
    }
    /**
     * Get MinimumBestOfferMessage value
     * @return string|null
     */
    public function getMinimumBestOfferMessage()
    {
        return $this->MinimumBestOfferMessage;
    }
    /**
     * Set MinimumBestOfferMessage value
     * @param string $minimumBestOfferMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setMinimumBestOfferMessage($minimumBestOfferMessage = null)
    {
        // validation for constraint: string
        if (!is_null($minimumBestOfferMessage) && !is_string($minimumBestOfferMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumBestOfferMessage)), __LINE__);
        }
        $this->MinimumBestOfferMessage = $minimumBestOfferMessage;
        return $this;
    }
    /**
     * Get LocalListingDistance value
     * @return string|null
     */
    public function getLocalListingDistance()
    {
        return $this->LocalListingDistance;
    }
    /**
     * Set LocalListingDistance value
     * @param string $localListingDistance
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setLocalListingDistance($localListingDistance = null)
    {
        // validation for constraint: string
        if (!is_null($localListingDistance) && !is_string($localListingDistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localListingDistance)), __LINE__);
        }
        $this->LocalListingDistance = $localListingDistance;
        return $this;
    }
    /**
     * Get TCROriginalItemID value
     * @return string|null
     */
    public function getTCROriginalItemID()
    {
        return $this->TCROriginalItemID;
    }
    /**
     * Set TCROriginalItemID value
     * @param string $tCROriginalItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setTCROriginalItemID($tCROriginalItemID = null)
    {
        // validation for constraint: string
        if (!is_null($tCROriginalItemID) && !is_string($tCROriginalItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tCROriginalItemID)), __LINE__);
        }
        $this->TCROriginalItemID = $tCROriginalItemID;
        return $this;
    }
    /**
     * Get ViewItemURLForNaturalSearch value
     * @return string|null
     */
    public function getViewItemURLForNaturalSearch()
    {
        return $this->ViewItemURLForNaturalSearch;
    }
    /**
     * Set ViewItemURLForNaturalSearch value
     * @param string $viewItemURLForNaturalSearch
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch = null)
    {
        // validation for constraint: string
        if (!is_null($viewItemURLForNaturalSearch) && !is_string($viewItemURLForNaturalSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewItemURLForNaturalSearch)), __LINE__);
        }
        $this->ViewItemURLForNaturalSearch = $viewItemURLForNaturalSearch;
        return $this;
    }
    /**
     * Get PayPerLeadEnabled value
     * @return bool|null
     */
    public function getPayPerLeadEnabled()
    {
        return $this->PayPerLeadEnabled;
    }
    /**
     * Set PayPerLeadEnabled value
     * @param bool $payPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setPayPerLeadEnabled($payPerLeadEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPerLeadEnabled) && !is_bool($payPerLeadEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPerLeadEnabled)), __LINE__);
        }
        $this->PayPerLeadEnabled = $payPerLeadEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBestOfferAutoAcceptPrice()
    {
        return $this->BestOfferAutoAcceptPrice;
    }
    /**
     * Set BestOfferAutoAcceptPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBestOfferAutoAcceptPrice(\macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice = null)
    {
        $this->BestOfferAutoAcceptPrice = $bestOfferAutoAcceptPrice;
        return $this;
    }
    /**
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason()
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $endingReason
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setEndingReason($endingReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $endingReason, implode(', ', \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingDetailsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
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
