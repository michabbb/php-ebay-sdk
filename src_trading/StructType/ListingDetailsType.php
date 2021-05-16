<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Various details about a listing. Some of the details are calculated or derived after an item is listed. The details in this type include the start and end time and the converted (localized) prices. The details in this type also
 * include input values applicable to the Best Offer feature. Additional details in this type include flags indicating if a seller specified fields whose values are not visible to the requesting user.
 * @subpackage Structs
 */
class ListingDetailsType extends AbstractStructBase
{
    /**
     * The Adult
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, the item is listed in a Mature category. Users must accept the Mature Category agreement on the eBay site to retrieve items listed in Mature categories. (Users do not need to sign this agreement to be able to
     * list items in Mature Categories.)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Adult = null;
    /**
     * The BindingAuction
     * Meta information extracted from the WSDL
     * - documentation: Applicable for Real Estate auctions only. If <code>true</code>, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BindingAuction = null;
    /**
     * The CheckoutEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled, a Pay Now button
     * will appear in checkout flow pages and in the email notifications that are sent to buyers. This preferance is enabled by default if PayPal is one of the payment methods.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CheckoutEnabled = null;
    /**
     * The ConvertedBuyItNowPrice
     * Meta information extracted from the WSDL
     * - documentation: Converted value of the <b>BuyItNowPrice</b> in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedBuyItNowPrice = null;
    /**
     * The ConvertedStartPrice
     * Meta information extracted from the WSDL
     * - documentation: Converted value of the <b>StartPrice</b> in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.<br> <br> In multi-variation listings, this
     * value matches the lowest-priced variation that is still available for sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedStartPrice = null;
    /**
     * The ConvertedReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Converted value of the <b>ReservePrice</b> in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this
     * value every 24 hours to pick up the current conversion rates. Not applicable to Fixed Price listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedReservePrice = null;
    /**
     * The HasReservePrice
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, the seller specified a value in <b>ReservePrice</b>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasReservePrice = null;
    /**
     * The RelistedItemID
     * Meta information extracted from the WSDL
     * - documentation: Indicates the new item ID for a re-listed item. When an item is re-listed, the item ID for the new item is added to the old listing, so buyers can navigate to the new listing. This value only appears when the old listing is
     * retrieved. The <b>RelistedItemID</b> of the original item will reflect the last relist. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelistedItemID = null;
    /**
     * The SecondChanceOriginalItemID
     * Meta information extracted from the WSDL
     * - documentation: The item ID for the original listing from which a second chance offer is made. This value is only returned when the data for the second chance offer listing is retrieved. Output only. | Type that represents the unique identifier for
     * an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SecondChanceOriginalItemID = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: The <b>StartTime</b> value returned by non-search calls such as <b>GetItem</b> is the time stamp (in GMT) for when the item was listed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values of <b>StartTime</b> and <b>ListingDuration</b> ) or the actual end time if the item has ended.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The ViewItemURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the Web page where a user can view the listing. On the US site, this is called the View Item page. If you enabled affiliate tracking in a search-related call (for example, if you used the <b>AffiliateTrackingDetails</b>
     * container in an applicable call), <b>ViewItemURL</b> contains a string that includes affiliate tracking information (see the <a href= "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ViewItemURL = null;
    /**
     * The HasUnansweredQuestions
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the item has any unanswered questions. Use <b>GetMemberMessages</b> to retrieve unanswered questions for the item if this flag indicates that there are any.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasUnansweredQuestions = null;
    /**
     * The HasPublicMessages
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the item has any publicly displayed messages. Use <b>GetMemberMessages</b> to retrieve public messages for the item if this flag indicates that there are any.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasPublicMessages = null;
    /**
     * The BuyItNowAvailable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Buy It Now feature is available for an auction listing. As a general rule, once an auction listing has bids (and the high bid exceeds the reserve price, if any), the Buy It Now feature becomes disabled for the
     * listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyItNowAvailable = null;
    /**
     * The SellerBusinessType
     * Meta information extracted from the WSDL
     * - documentation: Type of seller account. This value is not returned for most sites. This value is not returned for the German site (site ID 77) or US eBay Motors site (site ID 0).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerBusinessType = null;
    /**
     * The MinimumBestOfferPrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the minimum acceptable Best Offer price. If a buyer submits a Best Offer that is below this value, the offer is automatically declined. This applies only to items listed in categories that support the Best Offer
     * auto-decline feature. <br/><br/> In order for this setting to have an effect, Best Offer must be enabled for the listing, and this value will only be exposed to the seller who listed the item. <br/><br/> <b>For Revise and Relist calls:</b> If a
     * seller wanted to disable the Best Offer auto-accept and/or Best Offer auto-reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the
     * following: <br/> <pre><code> <DeletedField>Item.ListingDetails.MinimumBestOfferPrice</DeletedField> </code></pre> <br> <span class="tablenote"><b>Note:</b> The Best Offer feature is now available for auction listings on the following sites: US,
     * Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. As of January 2019, the value set
     * in this field for an auction listing can be more than the auction start price. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MinimumBestOfferPrice = null;
    /**
     * The MinimumBestOfferMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MinimumBestOfferMessage = null;
    /**
     * The LocalListingDistance
     * Meta information extracted from the WSDL
     * - documentation: This field is needed if the seller is selling a motor vehicle through a Motors Local Listing. The string value supplied in this field actually sets the radius of the area (in miles) in which the vehicle will be available and exposed
     * to interested local buyers. The seller's supplied <b>PostalCode</b> or <b>Location</b> field value will be used as the center point for this radius. <br/><br/> There is a closed set of radius values that can be set in this field, and it depends on
     * the seller's subscription level. The user can call <b>GetCategoryFeatures</b>, including <code>LocalListingDistances</code> as a <b>FeatureID</b> value to retrieve the local listing distances supported by a given site, category, and Local Market
     * subscription level.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalListingDistance = null;
    /**
     * The TCROriginalItemID
     * Meta information extracted from the WSDL
     * - documentation: Indicates the item ID of the original item listing from which a Transaction Confirmation Request (TCR) was created. This value is only returned when the data for a TCR is retrieved. | Type that represents the unique identifier for an
     * eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TCROriginalItemID = null;
    /**
     * The ViewItemURLForNaturalSearch
     * Meta information extracted from the WSDL
     * - documentation: This URL takes you to the same View Item page as ViewItemURL, but this URL is optimized to support natural search. That is, this URL is designed to make items on eBay easier to find via popular Internet search engines. The URL
     * includes the item title along with other optimizations. To note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes to "QQ", and "=" (equals sign) optimizes to "Z". <br><br> If you are an eBay affiliate, use this URL to promote your
     * affiliate information. <br><br> <span class="tablenote"><b>Note:</b> This URL may include additional query parameters that don't appear in <b>ViewItemURL</b> and vice versa. You should not modify the query syntax. For example, eBay won't recognize
     * the URL if you change QQ to ?. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ViewItemURLForNaturalSearch = null;
    /**
     * The PayPerLeadEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPerLeadEnabled = null;
    /**
     * The BestOfferAutoAcceptPrice
     * Meta information extracted from the WSDL
     * - documentation: The price at which Best Offers are automatically accepted. Similar in use to <b>MinimumBestOfferPrice</b>. If a buyer submits a Best Offer that is at or above this value, the offer is automatically accepted by the seller. This
     * applies only to items listed in categories that support the <b>BestOfferAutoAcceptPrice</b> feature. <br/><br/> For this setting to have an effect, the Best Offer feature must be enabled for the listing, and only the seller who listed the item will
     * see <b>BestOfferAutoAcceptPrice</b> in a call response. <br/><br/> <b>For Revise and Relist calls:</b> If a seller wanted to disable the Best Offer Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full path to
     * one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/> <pre><code> <DeletedField>Item.ListingDetails.BestOfferAutoAcceptPrice</DeletedField> </code></pre>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $BestOfferAutoAcceptPrice = null;
    /**
     * The EndingReason
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if the item was ended early (before listing duration expired) by the seller (through an API call or on the Web site) or ended administratively by eBay. The value in this field indicates the seller's reason
     * for ending the listing early.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndingReason = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $adult = null, ?bool $bindingAuction = null, ?bool $checkoutEnabled = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice = null, ?bool $hasReservePrice = null, ?string $relistedItemID = null, ?string $secondChanceOriginalItemID = null, ?string $startTime = null, ?string $endTime = null, ?string $viewItemURL = null, ?bool $hasUnansweredQuestions = null, ?bool $hasPublicMessages = null, ?bool $buyItNowAvailable = null, ?string $sellerBusinessType = null, ?\macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice = null, ?string $minimumBestOfferMessage = null, ?string $localListingDistance = null, ?string $tCROriginalItemID = null, ?string $viewItemURLForNaturalSearch = null, ?bool $payPerLeadEnabled = null, ?\macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice = null, ?string $endingReason = null, $any = null)
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
    public function getAdult(): ?bool
    {
        return $this->Adult;
    }
    /**
     * Set Adult value
     * @param bool $adult
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setAdult(?bool $adult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($adult) && !is_bool($adult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adult, true), gettype($adult)), __LINE__);
        }
        $this->Adult = $adult;
        
        return $this;
    }
    /**
     * Get BindingAuction value
     * @return bool|null
     */
    public function getBindingAuction(): ?bool
    {
        return $this->BindingAuction;
    }
    /**
     * Set BindingAuction value
     * @param bool $bindingAuction
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBindingAuction(?bool $bindingAuction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bindingAuction) && !is_bool($bindingAuction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bindingAuction, true), gettype($bindingAuction)), __LINE__);
        }
        $this->BindingAuction = $bindingAuction;
        
        return $this;
    }
    /**
     * Get CheckoutEnabled value
     * @return bool|null
     */
    public function getCheckoutEnabled(): ?bool
    {
        return $this->CheckoutEnabled;
    }
    /**
     * Set CheckoutEnabled value
     * @param bool $checkoutEnabled
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setCheckoutEnabled(?bool $checkoutEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkoutEnabled) && !is_bool($checkoutEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkoutEnabled, true), gettype($checkoutEnabled)), __LINE__);
        }
        $this->CheckoutEnabled = $checkoutEnabled;
        
        return $this;
    }
    /**
     * Get ConvertedBuyItNowPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedBuyItNowPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedBuyItNowPrice;
    }
    /**
     * Set ConvertedBuyItNowPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedBuyItNowPrice(?\macropage\ebaysdk\trading\StructType\AmountType $convertedBuyItNowPrice = null): self
    {
        $this->ConvertedBuyItNowPrice = $convertedBuyItNowPrice;
        
        return $this;
    }
    /**
     * Get ConvertedStartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedStartPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedStartPrice;
    }
    /**
     * Set ConvertedStartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedStartPrice(?\macropage\ebaysdk\trading\StructType\AmountType $convertedStartPrice = null): self
    {
        $this->ConvertedStartPrice = $convertedStartPrice;
        
        return $this;
    }
    /**
     * Get ConvertedReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedReservePrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedReservePrice;
    }
    /**
     * Set ConvertedReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setConvertedReservePrice(?\macropage\ebaysdk\trading\StructType\AmountType $convertedReservePrice = null): self
    {
        $this->ConvertedReservePrice = $convertedReservePrice;
        
        return $this;
    }
    /**
     * Get HasReservePrice value
     * @return bool|null
     */
    public function getHasReservePrice(): ?bool
    {
        return $this->HasReservePrice;
    }
    /**
     * Set HasReservePrice value
     * @param bool $hasReservePrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasReservePrice(?bool $hasReservePrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasReservePrice) && !is_bool($hasReservePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasReservePrice, true), gettype($hasReservePrice)), __LINE__);
        }
        $this->HasReservePrice = $hasReservePrice;
        
        return $this;
    }
    /**
     * Get RelistedItemID value
     * @return string|null
     */
    public function getRelistedItemID(): ?string
    {
        return $this->RelistedItemID;
    }
    /**
     * Set RelistedItemID value
     * @param string $relistedItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setRelistedItemID(?string $relistedItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($relistedItemID) && !is_string($relistedItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relistedItemID, true), gettype($relistedItemID)), __LINE__);
        }
        $this->RelistedItemID = $relistedItemID;
        
        return $this;
    }
    /**
     * Get SecondChanceOriginalItemID value
     * @return string|null
     */
    public function getSecondChanceOriginalItemID(): ?string
    {
        return $this->SecondChanceOriginalItemID;
    }
    /**
     * Set SecondChanceOriginalItemID value
     * @param string $secondChanceOriginalItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setSecondChanceOriginalItemID(?string $secondChanceOriginalItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($secondChanceOriginalItemID) && !is_string($secondChanceOriginalItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondChanceOriginalItemID, true), gettype($secondChanceOriginalItemID)), __LINE__);
        }
        $this->SecondChanceOriginalItemID = $secondChanceOriginalItemID;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get ViewItemURL value
     * @return string|null
     */
    public function getViewItemURL(): ?string
    {
        return $this->ViewItemURL;
    }
    /**
     * Set ViewItemURL value
     * @param string $viewItemURL
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setViewItemURL(?string $viewItemURL = null): self
    {
        // validation for constraint: string
        if (!is_null($viewItemURL) && !is_string($viewItemURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($viewItemURL, true), gettype($viewItemURL)), __LINE__);
        }
        $this->ViewItemURL = $viewItemURL;
        
        return $this;
    }
    /**
     * Get HasUnansweredQuestions value
     * @return bool|null
     */
    public function getHasUnansweredQuestions(): ?bool
    {
        return $this->HasUnansweredQuestions;
    }
    /**
     * Set HasUnansweredQuestions value
     * @param bool $hasUnansweredQuestions
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasUnansweredQuestions(?bool $hasUnansweredQuestions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasUnansweredQuestions) && !is_bool($hasUnansweredQuestions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasUnansweredQuestions, true), gettype($hasUnansweredQuestions)), __LINE__);
        }
        $this->HasUnansweredQuestions = $hasUnansweredQuestions;
        
        return $this;
    }
    /**
     * Get HasPublicMessages value
     * @return bool|null
     */
    public function getHasPublicMessages(): ?bool
    {
        return $this->HasPublicMessages;
    }
    /**
     * Set HasPublicMessages value
     * @param bool $hasPublicMessages
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setHasPublicMessages(?bool $hasPublicMessages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasPublicMessages) && !is_bool($hasPublicMessages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPublicMessages, true), gettype($hasPublicMessages)), __LINE__);
        }
        $this->HasPublicMessages = $hasPublicMessages;
        
        return $this;
    }
    /**
     * Get BuyItNowAvailable value
     * @return bool|null
     */
    public function getBuyItNowAvailable(): ?bool
    {
        return $this->BuyItNowAvailable;
    }
    /**
     * Set BuyItNowAvailable value
     * @param bool $buyItNowAvailable
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBuyItNowAvailable(?bool $buyItNowAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAvailable) && !is_bool($buyItNowAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowAvailable, true), gettype($buyItNowAvailable)), __LINE__);
        }
        $this->BuyItNowAvailable = $buyItNowAvailable;
        
        return $this;
    }
    /**
     * Get SellerBusinessType value
     * @return string|null
     */
    public function getSellerBusinessType(): ?string
    {
        return $this->SellerBusinessType;
    }
    /**
     * Set SellerBusinessType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setSellerBusinessType(?string $sellerBusinessType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType', is_array($sellerBusinessType) ? implode(', ', $sellerBusinessType) : var_export($sellerBusinessType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        
        return $this;
    }
    /**
     * Get MinimumBestOfferPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinimumBestOfferPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MinimumBestOfferPrice;
    }
    /**
     * Set MinimumBestOfferPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setMinimumBestOfferPrice(?\macropage\ebaysdk\trading\StructType\AmountType $minimumBestOfferPrice = null): self
    {
        $this->MinimumBestOfferPrice = $minimumBestOfferPrice;
        
        return $this;
    }
    /**
     * Get MinimumBestOfferMessage value
     * @return string|null
     */
    public function getMinimumBestOfferMessage(): ?string
    {
        return $this->MinimumBestOfferMessage;
    }
    /**
     * Set MinimumBestOfferMessage value
     * @param string $minimumBestOfferMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setMinimumBestOfferMessage(?string $minimumBestOfferMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($minimumBestOfferMessage) && !is_string($minimumBestOfferMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minimumBestOfferMessage, true), gettype($minimumBestOfferMessage)), __LINE__);
        }
        $this->MinimumBestOfferMessage = $minimumBestOfferMessage;
        
        return $this;
    }
    /**
     * Get LocalListingDistance value
     * @return string|null
     */
    public function getLocalListingDistance(): ?string
    {
        return $this->LocalListingDistance;
    }
    /**
     * Set LocalListingDistance value
     * @param string $localListingDistance
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setLocalListingDistance(?string $localListingDistance = null): self
    {
        // validation for constraint: string
        if (!is_null($localListingDistance) && !is_string($localListingDistance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistance, true), gettype($localListingDistance)), __LINE__);
        }
        $this->LocalListingDistance = $localListingDistance;
        
        return $this;
    }
    /**
     * Get TCROriginalItemID value
     * @return string|null
     */
    public function getTCROriginalItemID(): ?string
    {
        return $this->TCROriginalItemID;
    }
    /**
     * Set TCROriginalItemID value
     * @param string $tCROriginalItemID
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setTCROriginalItemID(?string $tCROriginalItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($tCROriginalItemID) && !is_string($tCROriginalItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tCROriginalItemID, true), gettype($tCROriginalItemID)), __LINE__);
        }
        $this->TCROriginalItemID = $tCROriginalItemID;
        
        return $this;
    }
    /**
     * Get ViewItemURLForNaturalSearch value
     * @return string|null
     */
    public function getViewItemURLForNaturalSearch(): ?string
    {
        return $this->ViewItemURLForNaturalSearch;
    }
    /**
     * Set ViewItemURLForNaturalSearch value
     * @param string $viewItemURLForNaturalSearch
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setViewItemURLForNaturalSearch(?string $viewItemURLForNaturalSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($viewItemURLForNaturalSearch) && !is_string($viewItemURLForNaturalSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($viewItemURLForNaturalSearch, true), gettype($viewItemURLForNaturalSearch)), __LINE__);
        }
        $this->ViewItemURLForNaturalSearch = $viewItemURLForNaturalSearch;
        
        return $this;
    }
    /**
     * Get PayPerLeadEnabled value
     * @return bool|null
     */
    public function getPayPerLeadEnabled(): ?bool
    {
        return $this->PayPerLeadEnabled;
    }
    /**
     * Set PayPerLeadEnabled value
     * @param bool $payPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setPayPerLeadEnabled(?bool $payPerLeadEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPerLeadEnabled) && !is_bool($payPerLeadEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPerLeadEnabled, true), gettype($payPerLeadEnabled)), __LINE__);
        }
        $this->PayPerLeadEnabled = $payPerLeadEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBestOfferAutoAcceptPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->BestOfferAutoAcceptPrice;
    }
    /**
     * Set BestOfferAutoAcceptPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setBestOfferAutoAcceptPrice(?\macropage\ebaysdk\trading\StructType\AmountType $bestOfferAutoAcceptPrice = null): self
    {
        $this->BestOfferAutoAcceptPrice = $bestOfferAutoAcceptPrice;
        
        return $this;
    }
    /**
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason(): ?string
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $endingReason
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setEndingReason(?string $endingReason = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EndReasonCodeType', is_array($endingReason) ? implode(', ', $endingReason) : var_export($endingReason, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
