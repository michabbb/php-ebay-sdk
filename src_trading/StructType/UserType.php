<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type to contain the data for one eBay user. Depending on the context, the user might be the seller or the buyer on either side of an order, or the bidder or winning bidder in a listing. An object of this type is returned by a number
 * of calls, including the <b>GetUser</b> call.
 * @subpackage Structs
 */
class UserType extends AbstractStructBase
{
    /**
     * The AboutMePage
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, indicates that the user has set up an About Me page.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AboutMePage = null;
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EIASToken = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: Email address for the user. Please see the links below to the topics related to anonymous user information and static email addresses. You cannot retrieve an email address for any user with whom you do not have an order relationship,
     * regardless of site. <br/><br/> An email address of another user is only returned if you and the other user are in an order relationship, within a certain time of order line item creation (although this limitation isn't applicable to the
     * <b>GetAllBidders</b> call in the case of motor vehicles categories.) Based on Trust and Safety policies, the time is unspecified and can vary by site. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     * and to the seller of an item that the user is bidding on. <br><br> For the <b>GetOrders</b> call, the buyer's email address will be returned (to the seller only) for orders less than two weeks old, but for orders that occurred more than two weeks in
     * the past, the buyer's email address will no longer be returned. This <b>Email</b> field will still be returned, but 'dummy data', such as <code>Invalid Request</code> will replace the actual email address. <br> <br> <span
     * class="tablenote"><b>Note:</b> For the <b>GetItemTransactions</b> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: The aggregate feedback score for a user. A user's feedback score is the net positive feedback minus the net negative feedback left for the user. Feedback scores are a quantitative expression of the desirability of dealing with a user
     * as a buyer or a seller in either side of an order. <br/><br/> Each order line item can result in one feedback entry for a given user (the buyer can leave feedback for the seller, and the seller can leave feedback for the buyer.). That one feedback
     * can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback score (referred to as a "feedback rating" on the eBay site). <br/><br/> If the user has chosen to make their feedback
     * private and that user is not the user identified in the request's authentication token, <b>FeedbackScore</b> is not returned and <b>FeedbackPrivate</b> is returned with a value of <code>true</code>. <br/><br/> In <b>GetMyeBayBuying</b> and
     * <b>GetMyeBaySelling</b>, feedback information (<b>FeedbackScore</b> and <b>FeedbackRatingStar</b>) is returned in <b>BidList.ItemArray.Item.Seller</b>. For <b>GetMyeBayBuying</b>, the feedback score of each seller with an item having received a bid
     * from the buyer is returned. For <b>GetMyeBaySelling</b>, the feedback score of the seller is returned. <br> <br> <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> also return feedback information (<b>FeedbackScore</b> and <b>FeedbackRatingStar</b>)
     * in <b>BidList.ItemArray.Item.SellingStatus.HighBidder</b>. <b>GetMyeBayBuying</b> returns feedback information on the high bidder of each item the buyer is bidding on. <b>GetMyeBaySelling</b> returns feedback information on the high bidder of each
     * item the seller is selling.<br> <br> Since a bidder's user info is anonymous, the real feedback score will be returned only to that bidder, and to the seller of an item that the user is bidding on. For all other users, the value -99 is returned.
     * <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a
     * Trading WSDL older than Version 1019, the accurate Feedback Score for the user is returned to the buyer or seller, but a dummy value of <code>0</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FeedbackScore = null;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total count of negative Feedback entries received by the user, including weekly repeats.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNegativeFeedbackCount = null;
    /**
     * The UniquePositiveFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total count of positive Feedback entries received by the user, including weekly repeats. This contains the aggregate feedback score for a user. A member's feedback score is the net positive feedback minus the net negative feedback
     * left for the member. <br/><br/> Feedback scores are a quantitative expression of the desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for a given user
     * (the buyer can leave feedback for the seller, and the seller can leave feedback for the buyer). <br/><br/> Feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback
     * score (referred to as a "feedback rating" on the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniquePositiveFeedbackCount = null;
    /**
     * The PositiveFeedbackPercent
     * Meta information extracted from the WSDL
     * - documentation: Percent of total feedback that is positive. For example, if the member has 50 feedbacks, where 49 are positive and 1 is neutral or negative, the positive feedback percent could be 98.0. The value uses a max precision of 4 and a scale
     * of 1. If the user has feedback, this value can be returned regardless of whether the member has chosen to make their feedback private. Not returned if the user has no feedback. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Positive Feedback Percentage
     * value for the user is returned to the buyer or seller, but a dummy value of <code>0.0</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PositiveFeedbackPercent = null;
    /**
     * The FeedbackPrivate
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the user has chosen to make their feedback score and feedback details private (hidden from other users). The percentage of positive feedback can still be returned, even if other feedback details are private.
     * <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FeedbackPrivate = null;
    /**
     * The FeedbackRatingStar
     * Meta information extracted from the WSDL
     * - documentation: Visual indicator of user's feedback score. See <b>FeedbackRatingStarCodeType</b> for specific values. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above,
     * this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Rating Star value for the user is returned to the buyer or seller, but a
     * dummy value of <code>None</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackRatingStar = null;
    /**
     * The IDVerified
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the user has been verified. For more information about the ID Verify program, see: <a href="http://pages.ebay.com/help/policies/identity-idverify.html">Protecting your account</a>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IDVerified = null;
    /**
     * The eBayGoodStanding
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, indicates that the user is in good standing with eBay.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayGoodStanding = null;
    /**
     * The NewUser
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, identifies a new user who has been a registered eBay user for 30 days or less. This is always <code>false</code> after the user has been registered for more than 30 days. Does not indicate an ID change (see
     * <b>UserIdChanged</b>).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NewUser = null;
    /**
     * The RegistrationAddress
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the Registration address for the eBay user making the call.<br> <br> <b>GetUser:</b> eBay returns complete <b>RegistrationAddress</b> details (including Phone), as applicable to the registration site for
     * the eBay user making the call. <br><br> <b>GetItem and GetSellerTransactions:</b> <b>RegistrationAddress</b> for another user (except for Phone) is only returned if you have an order relationship with that user AND that user is registered on
     * DE/AT/CH, regardless of your registration site and the site to which you send the request. For example, the seller can see the buyer's registration address if the buyer is registered on DE/AT/CH, or the buyer can see the seller's registration address
     * if the seller is registered on DE/AT/CH. (The buyer and seller won't see their own registration addresses in <b>GetItem</b>.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $RegistrationAddress = null;
    /**
     * The RegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date the specified user originally registered with eBay. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegistrationDate = null;
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: eBay site the user is registered with. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Site = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Indicates the user's registration/user status.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: Unique eBay user ID for the user.<br> <br> Since a bidder's user info is anonymous, this tag contains the actual value of an ID only for that bidder, and for the seller of an item that the user is bidding on. For other users, the
     * actual value is replaced by an anonymous value, according to these rules: <br><br> When bidding on items, <b>UserID</b> is replaced with the value "a****b" where a and b are random characters from the <b>UserID</b>. For example, if the <b>UserID</b>
     * = <code>IBidALot</code>, it might be displayed as, "I****A". <br/><br/> <span class="tablenote"><b>Important: </b> In this format, the anonymous bidder ID can change for each auction. </span> For <b>GetMyeBayBuying</b> only, when bidding on items:
     * <b>UserID</b> is replaced with the value "a****b" where a and b are random characters from the <b>UserID</b>. <br><br> When bidding on items listed on the Philippines site: <b>UserID</b> is replaced with the value "Bidder X" where X is a number
     * indicating the order of that user's first bid. For example, if the user was the third bidder, <b>UserID</b> = <code>Bidder 3</code>. Note that in this Philippines site format, the anonymous bidder ID stays the same for a given auction, but is
     * different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be
     * listed for that auction as "Bidder 1", not "Bidder 3". <br><br> For <b>GetMyeBayBuying</b> only, when bidding on items listed on the UK and AU sites: <b>UserID</b> is replaced with the string "High Bidder". <br><br> For <b>PlaceOffer</b>, see also
     * <b>SellingStatus.HighBidder</b>. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The UserIDChanged
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, identifies a user whose ID has changed within the last 30 days. Does not indicate a new user (see <b>NewUser</b>). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     * and to the seller of an item that the user is bidding on. <br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the
     * buyer or third party. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserIDChanged = null;
    /**
     * The UserIDLastChanged
     * Meta information extracted from the WSDL
     * - documentation: Date and time the user's data was last changed (in GMT). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on. <br> <br> <span
     * class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserIDLastChanged = null;
    /**
     * The VATStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VATStatus = null;
    /**
     * The BuyerInfo
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the user as a buyer, such as the shipping address. See <b>BuyerType</b> for its child elements. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the
     * seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BuyerType $BuyerInfo = null;
    /**
     * The SellerInfo
     * Meta information extracted from the WSDL
     * - documentation: Contains information about a seller, including listing settings, listing preferences, seller rankings, and seller type. <br><br> This field is replaced by the <b>SellerBusinessType</b> field if the user is a business seller with a
     * site ID of 77 (Germany), ID of 3 (UK), ID of 205 (Ireland) or ID of 0 (US Motors). <br><br> See <b>SellerType</b> or <b>SellerBusinessCodeType</b> for the child elements.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerType $SellerInfo = null;
    /**
     * The BusinessRole
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether the user's account is enabled for buying and selling (indicated by <b>FullMarketPlaceParticipant</b>) on eBay, or if the account is a Partially Provisioned Account (indicated by <b>Shopper</b>) without
     * selling and buying privileges on eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BusinessRole = null;
    /**
     * The CharityAffiliations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CharityAffiliationsType $CharityAffiliations = null;
    /**
     * The PayPalAccountLevel
     * Meta information extracted from the WSDL
     * - documentation: This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalAccountLevel = null;
    /**
     * The PayPalAccountType
     * Meta information extracted from the WSDL
     * - documentation: This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalAccountType = null;
    /**
     * The PayPalAccountStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalAccountStatus = null;
    /**
     * The UserSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the subscription level for a user.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $UserSubscription = null;
    /**
     * The SiteVerified
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SiteVerified = null;
    /**
     * The SkypeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $SkypeID = null;
    /**
     * The eBayWikiReadOnly
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a user has read-only access to the eBay Wiki (<code>true</code>) or whether the user is able contribute or edit articles on the eBay Wiki (<code>false</code>). By default, all registered eBay users have access to
     * contribute and edit articles on the eBay Wiki. All content contributed to the eBay Wiki is subject to the Community Content Policy.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayWikiReadOnly = null;
    /**
     * The TUVLevel
     * Meta information extracted from the WSDL
     * - documentation: TUV level is a number allocated to a user based on various characteristics such as buyer, seller, new buyer, new seller, high risk, or bid limit. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TUVLevel = null;
    /**
     * The VATID
     * Meta information extracted from the WSDL
     * - documentation: The value added tax identifier (<b>VATID</b>) is applicable to the VAT-enabled sites. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VATID = null;
    /**
     * The SellerPaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerPaymentMethod = null;
    /**
     * The BiddingSummary
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the user as a bidder on a certain item. Returned by <b>GetAllBidders</b> if <b>IncludeBiddingSummary</b> = <code>true</code> is included in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BiddingSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BiddingSummaryType $BiddingSummary = null;
    /**
     * The UserAnonymized
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the User container has been made anonymous. If <code>true</code>, some elements in the User container have either been removed, or had their values changed to remove identifying characteristics. If false, all
     * expected elements are returned, and no values are changed. <br><br> Since a bidder's user info is anonymous, this tag is returned as false only to the bidder, and to the seller of an item that the user is bidding on. For all other users, this tag is
     * returned as <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserAnonymized = null;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total count of neutral Feedback entries received by the user, including weekly repeats.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNeutralFeedbackCount = null;
    /**
     * The EnterpriseSeller
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnterpriseSeller = null;
    /**
     * The BillingEmail
     * Meta information extracted from the WSDL
     * - documentation: When a user has their billing option set to <code>email</code>, they can include this element in a <b>GetUser</b> request to retrieve their own email bills.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BillingEmail = null;
    /**
     * The QualifiesForSelling
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not the user is eligible to sell items on eBay. This field is only returned if the <b>IncludeFeatureEligibility</b> flag is included in the call request and set to <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiesForSelling = null;
    /**
     * The StaticAlias
     * Meta information extracted from the WSDL
     * - documentation: Contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email address.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StaticAlias = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: Contains the shipping address of a bidder who has made a Best Offer for an item. <br/><br/> You cannot retrieve a shipping address for any user with whom you do not have an order relationship, regardless of site. The shipping address
     * of another user is returned only if you and the other user are in an order relationship, within a certain time of order line item creation. <br><br> Because a bidder's user information is anonymous, this container is returned only to that bidder, and
     * to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The Membership
     * Meta information extracted from the WSDL
     * - documentation: The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program,
     * and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable
     * membership programs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MembershipDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MembershipDetailsType $Membership = null;
    /**
     * The UserFirstName
     * Meta information extracted from the WSDL
     * - documentation: The first name of the buyer who purchased the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserFirstName = null;
    /**
     * The UserLastName
     * Meta information extracted from the WSDL
     * - documentation: The last name of the buyer who purchased the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserLastName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for UserType
     * @uses UserType::setAboutMePage()
     * @uses UserType::setEIASToken()
     * @uses UserType::setEmail()
     * @uses UserType::setFeedbackScore()
     * @uses UserType::setUniqueNegativeFeedbackCount()
     * @uses UserType::setUniquePositiveFeedbackCount()
     * @uses UserType::setPositiveFeedbackPercent()
     * @uses UserType::setFeedbackPrivate()
     * @uses UserType::setFeedbackRatingStar()
     * @uses UserType::setIDVerified()
     * @uses UserType::setEBayGoodStanding()
     * @uses UserType::setNewUser()
     * @uses UserType::setRegistrationAddress()
     * @uses UserType::setRegistrationDate()
     * @uses UserType::setSite()
     * @uses UserType::setStatus()
     * @uses UserType::setUserID()
     * @uses UserType::setUserIDChanged()
     * @uses UserType::setUserIDLastChanged()
     * @uses UserType::setVATStatus()
     * @uses UserType::setBuyerInfo()
     * @uses UserType::setSellerInfo()
     * @uses UserType::setBusinessRole()
     * @uses UserType::setCharityAffiliations()
     * @uses UserType::setPayPalAccountLevel()
     * @uses UserType::setPayPalAccountType()
     * @uses UserType::setPayPalAccountStatus()
     * @uses UserType::setUserSubscription()
     * @uses UserType::setSiteVerified()
     * @uses UserType::setSkypeID()
     * @uses UserType::setEBayWikiReadOnly()
     * @uses UserType::setTUVLevel()
     * @uses UserType::setVATID()
     * @uses UserType::setSellerPaymentMethod()
     * @uses UserType::setBiddingSummary()
     * @uses UserType::setUserAnonymized()
     * @uses UserType::setUniqueNeutralFeedbackCount()
     * @uses UserType::setEnterpriseSeller()
     * @uses UserType::setBillingEmail()
     * @uses UserType::setQualifiesForSelling()
     * @uses UserType::setStaticAlias()
     * @uses UserType::setShippingAddress()
     * @uses UserType::setMembership()
     * @uses UserType::setUserFirstName()
     * @uses UserType::setUserLastName()
     * @uses UserType::setAny()
     * @param bool $aboutMePage
     * @param string $eIASToken
     * @param string $email
     * @param int $feedbackScore
     * @param int $uniqueNegativeFeedbackCount
     * @param int $uniquePositiveFeedbackCount
     * @param float $positiveFeedbackPercent
     * @param bool $feedbackPrivate
     * @param string $feedbackRatingStar
     * @param bool $iDVerified
     * @param bool $eBayGoodStanding
     * @param bool $newUser
     * @param \macropage\ebaysdk\trading\StructType\AddressType $registrationAddress
     * @param string $registrationDate
     * @param string $site
     * @param string $status
     * @param string $userID
     * @param bool $userIDChanged
     * @param string $userIDLastChanged
     * @param string $vATStatus
     * @param \macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo
     * @param \macropage\ebaysdk\trading\StructType\SellerType $sellerInfo
     * @param string $businessRole
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations
     * @param string $payPalAccountLevel
     * @param string $payPalAccountType
     * @param string $payPalAccountStatus
     * @param string[] $userSubscription
     * @param bool $siteVerified
     * @param string[] $skypeID
     * @param bool $eBayWikiReadOnly
     * @param int $tUVLevel
     * @param string $vATID
     * @param string $sellerPaymentMethod
     * @param \macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary
     * @param bool $userAnonymized
     * @param int $uniqueNeutralFeedbackCount
     * @param bool $enterpriseSeller
     * @param string $billingEmail
     * @param bool $qualifiesForSelling
     * @param string $staticAlias
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership
     * @param string $userFirstName
     * @param string $userLastName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $aboutMePage = null, ?string $eIASToken = null, ?string $email = null, ?int $feedbackScore = null, ?int $uniqueNegativeFeedbackCount = null, ?int $uniquePositiveFeedbackCount = null, ?float $positiveFeedbackPercent = null, ?bool $feedbackPrivate = null, ?string $feedbackRatingStar = null, ?bool $iDVerified = null, ?bool $eBayGoodStanding = null, ?bool $newUser = null, ?\macropage\ebaysdk\trading\StructType\AddressType $registrationAddress = null, ?string $registrationDate = null, ?string $site = null, ?string $status = null, ?string $userID = null, ?bool $userIDChanged = null, ?string $userIDLastChanged = null, ?string $vATStatus = null, ?\macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo = null, ?\macropage\ebaysdk\trading\StructType\SellerType $sellerInfo = null, ?string $businessRole = null, ?\macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations = null, ?string $payPalAccountLevel = null, ?string $payPalAccountType = null, ?string $payPalAccountStatus = null, ?array $userSubscription = null, ?bool $siteVerified = null, ?array $skypeID = null, ?bool $eBayWikiReadOnly = null, ?int $tUVLevel = null, ?string $vATID = null, ?string $sellerPaymentMethod = null, ?\macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary = null, ?bool $userAnonymized = null, ?int $uniqueNeutralFeedbackCount = null, ?bool $enterpriseSeller = null, ?string $billingEmail = null, ?bool $qualifiesForSelling = null, ?string $staticAlias = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?\macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership = null, ?string $userFirstName = null, ?string $userLastName = null, $any = null)
    {
        $this
            ->setAboutMePage($aboutMePage)
            ->setEIASToken($eIASToken)
            ->setEmail($email)
            ->setFeedbackScore($feedbackScore)
            ->setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
            ->setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
            ->setPositiveFeedbackPercent($positiveFeedbackPercent)
            ->setFeedbackPrivate($feedbackPrivate)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setIDVerified($iDVerified)
            ->setEBayGoodStanding($eBayGoodStanding)
            ->setNewUser($newUser)
            ->setRegistrationAddress($registrationAddress)
            ->setRegistrationDate($registrationDate)
            ->setSite($site)
            ->setStatus($status)
            ->setUserID($userID)
            ->setUserIDChanged($userIDChanged)
            ->setUserIDLastChanged($userIDLastChanged)
            ->setVATStatus($vATStatus)
            ->setBuyerInfo($buyerInfo)
            ->setSellerInfo($sellerInfo)
            ->setBusinessRole($businessRole)
            ->setCharityAffiliations($charityAffiliations)
            ->setPayPalAccountLevel($payPalAccountLevel)
            ->setPayPalAccountType($payPalAccountType)
            ->setPayPalAccountStatus($payPalAccountStatus)
            ->setUserSubscription($userSubscription)
            ->setSiteVerified($siteVerified)
            ->setSkypeID($skypeID)
            ->setEBayWikiReadOnly($eBayWikiReadOnly)
            ->setTUVLevel($tUVLevel)
            ->setVATID($vATID)
            ->setSellerPaymentMethod($sellerPaymentMethod)
            ->setBiddingSummary($biddingSummary)
            ->setUserAnonymized($userAnonymized)
            ->setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
            ->setEnterpriseSeller($enterpriseSeller)
            ->setBillingEmail($billingEmail)
            ->setQualifiesForSelling($qualifiesForSelling)
            ->setStaticAlias($staticAlias)
            ->setShippingAddress($shippingAddress)
            ->setMembership($membership)
            ->setUserFirstName($userFirstName)
            ->setUserLastName($userLastName)
            ->setAny($any);
    }
    /**
     * Get AboutMePage value
     * @return bool|null
     */
    public function getAboutMePage(): ?bool
    {
        return $this->AboutMePage;
    }
    /**
     * Set AboutMePage value
     * @param bool $aboutMePage
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setAboutMePage(?bool $aboutMePage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($aboutMePage) && !is_bool($aboutMePage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aboutMePage, true), gettype($aboutMePage)), __LINE__);
        }
        $this->AboutMePage = $aboutMePage;
        
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken(): ?string
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEIASToken(?string $eIASToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore(): ?int
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackScore(?int $feedbackScore = null): self
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !(is_int($feedbackScore) || ctype_digit($feedbackScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackScore, true), gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        
        return $this;
    }
    /**
     * Get UniqueNegativeFeedbackCount value
     * @return int|null
     */
    public function getUniqueNegativeFeedbackCount(): ?int
    {
        return $this->UniqueNegativeFeedbackCount;
    }
    /**
     * Set UniqueNegativeFeedbackCount value
     * @param int $uniqueNegativeFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniqueNegativeFeedbackCount(?int $uniqueNegativeFeedbackCount = null): self
    {
        // validation for constraint: int
        if (!is_null($uniqueNegativeFeedbackCount) && !(is_int($uniqueNegativeFeedbackCount) || ctype_digit($uniqueNegativeFeedbackCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNegativeFeedbackCount, true), gettype($uniqueNegativeFeedbackCount)), __LINE__);
        }
        $this->UniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        
        return $this;
    }
    /**
     * Get UniquePositiveFeedbackCount value
     * @return int|null
     */
    public function getUniquePositiveFeedbackCount(): ?int
    {
        return $this->UniquePositiveFeedbackCount;
    }
    /**
     * Set UniquePositiveFeedbackCount value
     * @param int $uniquePositiveFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniquePositiveFeedbackCount(?int $uniquePositiveFeedbackCount = null): self
    {
        // validation for constraint: int
        if (!is_null($uniquePositiveFeedbackCount) && !(is_int($uniquePositiveFeedbackCount) || ctype_digit($uniquePositiveFeedbackCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniquePositiveFeedbackCount, true), gettype($uniquePositiveFeedbackCount)), __LINE__);
        }
        $this->UniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        
        return $this;
    }
    /**
     * Get PositiveFeedbackPercent value
     * @return float|null
     */
    public function getPositiveFeedbackPercent(): ?float
    {
        return $this->PositiveFeedbackPercent;
    }
    /**
     * Set PositiveFeedbackPercent value
     * @param float $positiveFeedbackPercent
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPositiveFeedbackPercent(?float $positiveFeedbackPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($positiveFeedbackPercent) && !(is_float($positiveFeedbackPercent) || is_numeric($positiveFeedbackPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($positiveFeedbackPercent, true), gettype($positiveFeedbackPercent)), __LINE__);
        }
        $this->PositiveFeedbackPercent = $positiveFeedbackPercent;
        
        return $this;
    }
    /**
     * Get FeedbackPrivate value
     * @return bool|null
     */
    public function getFeedbackPrivate(): ?bool
    {
        return $this->FeedbackPrivate;
    }
    /**
     * Set FeedbackPrivate value
     * @param bool $feedbackPrivate
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackPrivate(?bool $feedbackPrivate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feedbackPrivate) && !is_bool($feedbackPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedbackPrivate, true), gettype($feedbackPrivate)), __LINE__);
        }
        $this->FeedbackPrivate = $feedbackPrivate;
        
        return $this;
    }
    /**
     * Get FeedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar(): ?string
    {
        return $this->FeedbackRatingStar;
    }
    /**
     * Set FeedbackRatingStar value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackRatingStar(?string $feedbackRatingStar = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType', is_array($feedbackRatingStar) ? implode(', ', $feedbackRatingStar) : var_export($feedbackRatingStar, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        
        return $this;
    }
    /**
     * Get IDVerified value
     * @return bool|null
     */
    public function getIDVerified(): ?bool
    {
        return $this->IDVerified;
    }
    /**
     * Set IDVerified value
     * @param bool $iDVerified
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setIDVerified(?bool $iDVerified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($iDVerified) && !is_bool($iDVerified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($iDVerified, true), gettype($iDVerified)), __LINE__);
        }
        $this->IDVerified = $iDVerified;
        
        return $this;
    }
    /**
     * Get eBayGoodStanding value
     * @return bool|null
     */
    public function getEBayGoodStanding(): ?bool
    {
        return $this->eBayGoodStanding;
    }
    /**
     * Set eBayGoodStanding value
     * @param bool $eBayGoodStanding
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEBayGoodStanding(?bool $eBayGoodStanding = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayGoodStanding) && !is_bool($eBayGoodStanding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayGoodStanding, true), gettype($eBayGoodStanding)), __LINE__);
        }
        $this->eBayGoodStanding = $eBayGoodStanding;
        
        return $this;
    }
    /**
     * Get NewUser value
     * @return bool|null
     */
    public function getNewUser(): ?bool
    {
        return $this->NewUser;
    }
    /**
     * Set NewUser value
     * @param bool $newUser
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setNewUser(?bool $newUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newUser) && !is_bool($newUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newUser, true), gettype($newUser)), __LINE__);
        }
        $this->NewUser = $newUser;
        
        return $this;
    }
    /**
     * Get RegistrationAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getRegistrationAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->RegistrationAddress;
    }
    /**
     * Set RegistrationAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $registrationAddress
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setRegistrationAddress(?\macropage\ebaysdk\trading\StructType\AddressType $registrationAddress = null): self
    {
        $this->RegistrationAddress = $registrationAddress;
        
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setRegistrationDate(?string $registrationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSite(?string $site = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UserStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UserStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
    /**
     * Get UserIDChanged value
     * @return bool|null
     */
    public function getUserIDChanged(): ?bool
    {
        return $this->UserIDChanged;
    }
    /**
     * Set UserIDChanged value
     * @param bool $userIDChanged
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserIDChanged(?bool $userIDChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userIDChanged) && !is_bool($userIDChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userIDChanged, true), gettype($userIDChanged)), __LINE__);
        }
        $this->UserIDChanged = $userIDChanged;
        
        return $this;
    }
    /**
     * Get UserIDLastChanged value
     * @return string|null
     */
    public function getUserIDLastChanged(): ?string
    {
        return $this->UserIDLastChanged;
    }
    /**
     * Set UserIDLastChanged value
     * @param string $userIDLastChanged
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserIDLastChanged(?string $userIDLastChanged = null): self
    {
        // validation for constraint: string
        if (!is_null($userIDLastChanged) && !is_string($userIDLastChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userIDLastChanged, true), gettype($userIDLastChanged)), __LINE__);
        }
        $this->UserIDLastChanged = $userIDLastChanged;
        
        return $this;
    }
    /**
     * Get VATStatus value
     * @return string|null
     */
    public function getVATStatus(): ?string
    {
        return $this->VATStatus;
    }
    /**
     * Set VATStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vATStatus
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setVATStatus(?string $vATStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VATStatusCodeType::valueIsValid($vATStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VATStatusCodeType', is_array($vATStatus) ? implode(', ', $vATStatus) : var_export($vATStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VATStatus = $vATStatus;
        
        return $this;
    }
    /**
     * Get BuyerInfo value
     * @return \macropage\ebaysdk\trading\StructType\BuyerType|null
     */
    public function getBuyerInfo(): ?\macropage\ebaysdk\trading\StructType\BuyerType
    {
        return $this->BuyerInfo;
    }
    /**
     * Set BuyerInfo value
     * @param \macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBuyerInfo(?\macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo = null): self
    {
        $this->BuyerInfo = $buyerInfo;
        
        return $this;
    }
    /**
     * Get SellerInfo value
     * @return \macropage\ebaysdk\trading\StructType\SellerType|null
     */
    public function getSellerInfo(): ?\macropage\ebaysdk\trading\StructType\SellerType
    {
        return $this->SellerInfo;
    }
    /**
     * Set SellerInfo value
     * @param \macropage\ebaysdk\trading\StructType\SellerType $sellerInfo
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSellerInfo(?\macropage\ebaysdk\trading\StructType\SellerType $sellerInfo = null): self
    {
        $this->SellerInfo = $sellerInfo;
        
        return $this;
    }
    /**
     * Get BusinessRole value
     * @return string|null
     */
    public function getBusinessRole(): ?string
    {
        return $this->BusinessRole;
    }
    /**
     * Set BusinessRole value
     * @uses \macropage\ebaysdk\trading\EnumType\BusinessRoleType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BusinessRoleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $businessRole
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBusinessRole(?string $businessRole = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BusinessRoleType::valueIsValid($businessRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BusinessRoleType', is_array($businessRole) ? implode(', ', $businessRole) : var_export($businessRole, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BusinessRoleType::getValidValues())), __LINE__);
        }
        $this->BusinessRole = $businessRole;
        
        return $this;
    }
    /**
     * Get CharityAffiliations value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType|null
     */
    public function getCharityAffiliations(): ?\macropage\ebaysdk\trading\StructType\CharityAffiliationsType
    {
        return $this->CharityAffiliations;
    }
    /**
     * Set CharityAffiliations value
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setCharityAffiliations(?\macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations = null): self
    {
        $this->CharityAffiliations = $charityAffiliations;
        
        return $this;
    }
    /**
     * Get PayPalAccountLevel value
     * @return string|null
     */
    public function getPayPalAccountLevel(): ?string
    {
        return $this->PayPalAccountLevel;
    }
    /**
     * Set PayPalAccountLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payPalAccountLevel
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountLevel(?string $payPalAccountLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::valueIsValid($payPalAccountLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType', is_array($payPalAccountLevel) ? implode(', ', $payPalAccountLevel) : var_export($payPalAccountLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountLevel = $payPalAccountLevel;
        
        return $this;
    }
    /**
     * Get PayPalAccountType value
     * @return string|null
     */
    public function getPayPalAccountType(): ?string
    {
        return $this->PayPalAccountType;
    }
    /**
     * Set PayPalAccountType value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payPalAccountType
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountType(?string $payPalAccountType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::valueIsValid($payPalAccountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType', is_array($payPalAccountType) ? implode(', ', $payPalAccountType) : var_export($payPalAccountType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountType = $payPalAccountType;
        
        return $this;
    }
    /**
     * Get PayPalAccountStatus value
     * @return string|null
     */
    public function getPayPalAccountStatus(): ?string
    {
        return $this->PayPalAccountStatus;
    }
    /**
     * Set PayPalAccountStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payPalAccountStatus
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountStatus(?string $payPalAccountStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::valueIsValid($payPalAccountStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType', is_array($payPalAccountStatus) ? implode(', ', $payPalAccountStatus) : var_export($payPalAccountStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountStatus = $payPalAccountStatus;
        
        return $this;
    }
    /**
     * Get UserSubscription value
     * @return string[]
     */
    public function getUserSubscription(): ?array
    {
        return $this->UserSubscription;
    }
    /**
     * This method is responsible for validating the values passed to the setUserSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserSubscription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserSubscriptionForArrayConstraintsFromSetUserSubscription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $userTypeUserSubscriptionItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid($userTypeUserSubscriptionItem)) {
                $invalidValues[] = is_object($userTypeUserSubscriptionItem) ? get_class($userTypeUserSubscriptionItem) : sprintf('%s(%s)', gettype($userTypeUserSubscriptionItem), var_export($userTypeUserSubscriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $userSubscription
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserSubscription(?array $userSubscription = null): self
    {
        // validation for constraint: array
        if ('' !== ($userSubscriptionArrayErrorMessage = self::validateUserSubscriptionForArrayConstraintsFromSetUserSubscription($userSubscription))) {
            throw new InvalidArgumentException($userSubscriptionArrayErrorMessage, __LINE__);
        }
        $this->UserSubscription = $userSubscription;
        
        return $this;
    }
    /**
     * Add item to UserSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function addToUserSubscription(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UserSubscription[] = $item;
        
        return $this;
    }
    /**
     * Get SiteVerified value
     * @return bool|null
     */
    public function getSiteVerified(): ?bool
    {
        return $this->SiteVerified;
    }
    /**
     * Set SiteVerified value
     * @param bool $siteVerified
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSiteVerified(?bool $siteVerified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($siteVerified) && !is_bool($siteVerified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($siteVerified, true), gettype($siteVerified)), __LINE__);
        }
        $this->SiteVerified = $siteVerified;
        
        return $this;
    }
    /**
     * Get SkypeID value
     * @return string[]
     */
    public function getSkypeID(): ?array
    {
        return $this->SkypeID;
    }
    /**
     * This method is responsible for validating the values passed to the setSkypeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkypeID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkypeIDForArrayConstraintsFromSetSkypeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $userTypeSkypeIDItem) {
            // validation for constraint: itemType
            if (!is_string($userTypeSkypeIDItem)) {
                $invalidValues[] = is_object($userTypeSkypeIDItem) ? get_class($userTypeSkypeIDItem) : sprintf('%s(%s)', gettype($userTypeSkypeIDItem), var_export($userTypeSkypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SkypeID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SkypeID value
     * @throws InvalidArgumentException
     * @param string[] $skypeID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSkypeID(?array $skypeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($skypeIDArrayErrorMessage = self::validateSkypeIDForArrayConstraintsFromSetSkypeID($skypeID))) {
            throw new InvalidArgumentException($skypeIDArrayErrorMessage, __LINE__);
        }
        $this->SkypeID = $skypeID;
        
        return $this;
    }
    /**
     * Add item to SkypeID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function addToSkypeID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SkypeID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SkypeID[] = $item;
        
        return $this;
    }
    /**
     * Get eBayWikiReadOnly value
     * @return bool|null
     */
    public function getEBayWikiReadOnly(): ?bool
    {
        return $this->eBayWikiReadOnly;
    }
    /**
     * Set eBayWikiReadOnly value
     * @param bool $eBayWikiReadOnly
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEBayWikiReadOnly(?bool $eBayWikiReadOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayWikiReadOnly) && !is_bool($eBayWikiReadOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayWikiReadOnly, true), gettype($eBayWikiReadOnly)), __LINE__);
        }
        $this->eBayWikiReadOnly = $eBayWikiReadOnly;
        
        return $this;
    }
    /**
     * Get TUVLevel value
     * @return int|null
     */
    public function getTUVLevel(): ?int
    {
        return $this->TUVLevel;
    }
    /**
     * Set TUVLevel value
     * @param int $tUVLevel
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setTUVLevel(?int $tUVLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($tUVLevel) && !(is_int($tUVLevel) || ctype_digit($tUVLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tUVLevel, true), gettype($tUVLevel)), __LINE__);
        }
        $this->TUVLevel = $tUVLevel;
        
        return $this;
    }
    /**
     * Get VATID value
     * @return string|null
     */
    public function getVATID(): ?string
    {
        return $this->VATID;
    }
    /**
     * Set VATID value
     * @param string $vATID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setVATID(?string $vATID = null): self
    {
        // validation for constraint: string
        if (!is_null($vATID) && !is_string($vATID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vATID, true), gettype($vATID)), __LINE__);
        }
        $this->VATID = $vATID;
        
        return $this;
    }
    /**
     * Get SellerPaymentMethod value
     * @return string|null
     */
    public function getSellerPaymentMethod(): ?string
    {
        return $this->SellerPaymentMethod;
    }
    /**
     * Set SellerPaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellerPaymentMethod
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSellerPaymentMethod(?string $sellerPaymentMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid($sellerPaymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType', is_array($sellerPaymentMethod) ? implode(', ', $sellerPaymentMethod) : var_export($sellerPaymentMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->SellerPaymentMethod = $sellerPaymentMethod;
        
        return $this;
    }
    /**
     * Get BiddingSummary value
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType|null
     */
    public function getBiddingSummary(): ?\macropage\ebaysdk\trading\StructType\BiddingSummaryType
    {
        return $this->BiddingSummary;
    }
    /**
     * Set BiddingSummary value
     * @param \macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBiddingSummary(?\macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary = null): self
    {
        $this->BiddingSummary = $biddingSummary;
        
        return $this;
    }
    /**
     * Get UserAnonymized value
     * @return bool|null
     */
    public function getUserAnonymized(): ?bool
    {
        return $this->UserAnonymized;
    }
    /**
     * Set UserAnonymized value
     * @param bool $userAnonymized
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserAnonymized(?bool $userAnonymized = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userAnonymized) && !is_bool($userAnonymized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userAnonymized, true), gettype($userAnonymized)), __LINE__);
        }
        $this->UserAnonymized = $userAnonymized;
        
        return $this;
    }
    /**
     * Get UniqueNeutralFeedbackCount value
     * @return int|null
     */
    public function getUniqueNeutralFeedbackCount(): ?int
    {
        return $this->UniqueNeutralFeedbackCount;
    }
    /**
     * Set UniqueNeutralFeedbackCount value
     * @param int $uniqueNeutralFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniqueNeutralFeedbackCount(?int $uniqueNeutralFeedbackCount = null): self
    {
        // validation for constraint: int
        if (!is_null($uniqueNeutralFeedbackCount) && !(is_int($uniqueNeutralFeedbackCount) || ctype_digit($uniqueNeutralFeedbackCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueNeutralFeedbackCount, true), gettype($uniqueNeutralFeedbackCount)), __LINE__);
        }
        $this->UniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        
        return $this;
    }
    /**
     * Get EnterpriseSeller value
     * @return bool|null
     */
    public function getEnterpriseSeller(): ?bool
    {
        return $this->EnterpriseSeller;
    }
    /**
     * Set EnterpriseSeller value
     * @param bool $enterpriseSeller
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEnterpriseSeller(?bool $enterpriseSeller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enterpriseSeller) && !is_bool($enterpriseSeller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enterpriseSeller, true), gettype($enterpriseSeller)), __LINE__);
        }
        $this->EnterpriseSeller = $enterpriseSeller;
        
        return $this;
    }
    /**
     * Get BillingEmail value
     * @return string|null
     */
    public function getBillingEmail(): ?string
    {
        return $this->BillingEmail;
    }
    /**
     * Set BillingEmail value
     * @param string $billingEmail
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBillingEmail(?string $billingEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($billingEmail) && !is_string($billingEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingEmail, true), gettype($billingEmail)), __LINE__);
        }
        $this->BillingEmail = $billingEmail;
        
        return $this;
    }
    /**
     * Get QualifiesForSelling value
     * @return bool|null
     */
    public function getQualifiesForSelling(): ?bool
    {
        return $this->QualifiesForSelling;
    }
    /**
     * Set QualifiesForSelling value
     * @param bool $qualifiesForSelling
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setQualifiesForSelling(?bool $qualifiesForSelling = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForSelling) && !is_bool($qualifiesForSelling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForSelling, true), gettype($qualifiesForSelling)), __LINE__);
        }
        $this->QualifiesForSelling = $qualifiesForSelling;
        
        return $this;
    }
    /**
     * Get StaticAlias value
     * @return string|null
     */
    public function getStaticAlias(): ?string
    {
        return $this->StaticAlias;
    }
    /**
     * Set StaticAlias value
     * @param string $staticAlias
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setStaticAlias(?string $staticAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($staticAlias) && !is_string($staticAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staticAlias, true), gettype($staticAlias)), __LINE__);
        }
        $this->StaticAlias = $staticAlias;
        
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get Membership value
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailsType|null
     */
    public function getMembership(): ?\macropage\ebaysdk\trading\StructType\MembershipDetailsType
    {
        return $this->Membership;
    }
    /**
     * Set Membership value
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setMembership(?\macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership = null): self
    {
        $this->Membership = $membership;
        
        return $this;
    }
    /**
     * Get UserFirstName value
     * @return string|null
     */
    public function getUserFirstName(): ?string
    {
        return $this->UserFirstName;
    }
    /**
     * Set UserFirstName value
     * @param string $userFirstName
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserFirstName(?string $userFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($userFirstName) && !is_string($userFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userFirstName, true), gettype($userFirstName)), __LINE__);
        }
        $this->UserFirstName = $userFirstName;
        
        return $this;
    }
    /**
     * Get UserLastName value
     * @return string|null
     */
    public function getUserLastName(): ?string
    {
        return $this->UserLastName;
    }
    /**
     * Set UserLastName value
     * @param string $userLastName
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserLastName(?string $userLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($userLastName) && !is_string($userLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLastName, true), gettype($userLastName)), __LINE__);
        }
        $this->UserLastName = $userLastName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UserType
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
