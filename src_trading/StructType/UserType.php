<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type to contain the data for one eBay user. Depending on the context, the user might be the seller or the buyer on either side of an order, or the bidder or winning bidder in a listing. An object of this type is returned by a number
 * of calls, including the <b>GetUser</b> call.
 * @subpackage Structs
 */
class UserType extends AbstractStructBase
{
    /**
     * The AboutMePage
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, indicates that the user has set up an About Me page.
     * - minOccurs: 0
     * @var bool
     */
    public $AboutMePage;
    /**
     * The EIASToken
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: Email address for the user. Please see the links below to the topics related to anonymous user information and static email addresses. You cannot retrieve an email address for any user with whom you do not have an order relationship,
     * regardless of site. <br/><br/> An email address of another user is only returned if you and the other user are in an order relationship, within a certain time of order line item creation (although this limitation isn't applicable to the
     * <b>GetAllBidders</b> call in the case of motor vehicles categories.) Based on Trust and Safety policies, the time is unspecified and can vary by site. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     * and to the seller of an item that the user is bidding on. <br><br> For the order retrieval calls, the buyer's registration email address is only returned if the buyer is registered on the DE, AT, or CH sites, regardless of the seller's registration
     * site and the site to which the seller sends the request. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
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
     * @var int
     */
    public $FeedbackScore;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total count of negative Feedback entries received by the user, including weekly repeats.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * The UniquePositiveFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total count of positive Feedback entries received by the user, including weekly repeats. This contains the aggregate feedback score for a user. A member's feedback score is the net positive feedback minus the net negative feedback
     * left for the member. <br/><br/> Feedback scores are a quantitative expression of the desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for a given user
     * (the buyer can leave feedback for the seller, and the seller can leave feedback for the buyer). <br/><br/> Feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback
     * score (referred to as a "feedback rating" on the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
     * - minOccurs: 0
     * @var int
     */
    public $UniquePositiveFeedbackCount;
    /**
     * The PositiveFeedbackPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percent of total feedback that is positive. For example, if the member has 50 feedbacks, where 49 are positive and 1 is neutral or negative, the positive feedback percent could be 98.0. The value uses a max precision of 4 and a scale
     * of 1. If the user has feedback, this value can be returned regardless of whether the member has chosen to make their feedback private. Not returned if the user has no feedback. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Positive Feedback Percentage
     * value for the user is returned to the buyer or seller, but a dummy value of <code>0.0</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var float
     */
    public $PositiveFeedbackPercent;
    /**
     * The FeedbackPrivate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the user has chosen to make their feedback score and feedback details private (hidden from other users). The percentage of positive feedback can still be returned, even if other feedback details are private.
     * <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var bool
     */
    public $FeedbackPrivate;
    /**
     * The FeedbackRatingStar
     * Meta informations extracted from the WSDL
     * - documentation: Visual indicator of user's feedback score. See <b>FeedbackRatingStarCodeType</b> for specific values. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above,
     * this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Rating Star value for the user is returned to the buyer or seller, but a
     * dummy value of <code>None</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackRatingStar;
    /**
     * The IDVerified
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the user has been verified. For more information about the ID Verify program, see: <a href="http://pages.ebay.com/help/policies/identity-idverify.html">Protecting your account</a>
     * - minOccurs: 0
     * @var bool
     */
    public $IDVerified;
    /**
     * The eBayGoodStanding
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, indicates that the user is in good standing with eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayGoodStanding;
    /**
     * The NewUser
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, identifies a new user who has been a registered eBay user for 30 days or less. This is always <code>false</code> after the user has been registered for more than 30 days. Does not indicate an ID change (see
     * <b>UserIdChanged</b>).
     * - minOccurs: 0
     * @var bool
     */
    public $NewUser;
    /**
     * The RegistrationAddress
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the Registration address for the eBay user making the call.<br> <br> <b>GetUser:</b> eBay returns complete <b>RegistrationAddress</b> details (including Phone), as applicable to the registration site for
     * the eBay user making the call. <br><br> <b>GetItem and GetSellerTransactions:</b> <b>RegistrationAddress</b> for another user (except for Phone) is only returned if you have an order relationship with that user AND that user is registered on
     * DE/AT/CH, regardless of your registration site and the site to which you send the request. For example, the seller can see the buyer's registration address if the buyer is registered on DE/AT/CH, or the buyer can see the seller's registration address
     * if the seller is registered on DE/AT/CH. (The buyer and seller won't see their own registration addresses in <b>GetItem</b>.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $RegistrationAddress;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the date the specified user originally registered with eBay. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: eBay site the user is registered with. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the user's registration/user status.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: Unique eBay user ID for the user.<br> <br> Since a bidder's user info is anonymous, this tag contains the actual value of an ID only for that bidder, and for the seller of an item that the user is bidding on. For other users, the
     * actual value is replaced by an anonymous value, according to these rules: <br><br> When bidding on items, <b>UserID</b> is replaced with the value "a****b" where a and b are random characters from the <b>UserID</b>. For example, if the <b>UserID</b>
     * = <code>IBidALot</code>, it might be displayed as, "I****A". <br/><br/> <span class="tablenote"><b>Important: </b> In this format, the anonymous bidder ID can change for each auction. </span> For <b>GetMyeBayBuying</b> only, when bidding on items:
     * <b>UserID</b> is replaced with the value "a****b" where a and b are random characters from the <b>UserID</b>. <br><br> When bidding on items listed on the the Philippines site: <b>UserID</b> is replaced with the value "Bidder X" where X is a number
     * indicating the order of that user's first bid. For example, if the user was the third bidder, <b>UserID</b> = <code>Bidder 3</code>. Note that in this Philippines site format, the anonymous bidder ID stays the same for a given auction, but is
     * different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be
     * listed for that auction as "Bidder 1", not "Bidder 3". <br><br> For <b>GetMyeBayBuying</b> only, when bidding on items listed on the UK and AU sites: <b>UserID</b> is replaced with the string "High Bidder". <br><br> For <b>PlaceOffer</b>, see also
     * <b>SellingStatus.HighBidder</b>. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The UserIDChanged
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, identifies a user whose ID has changed within the last 30 days. Does not indicate a new user (see <b>NewUser</b>). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     * and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var bool
     */
    public $UserIDChanged;
    /**
     * The UserIDLastChanged
     * Meta informations extracted from the WSDL
     * - documentation: Date and time the user's data was last changed (in GMT). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string
     */
    public $UserIDLastChanged;
    /**
     * The VATStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
     * - minOccurs: 0
     * @var string
     */
    public $VATStatus;
    /**
     * The BuyerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the user as a buyer, such as the shipping address. See <b>BuyerType</b> for its child elements. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the
     * seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public $BuyerInfo;
    /**
     * The SellerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about a seller, including listing settings, listing preferences, seller rankings, and seller type. <br><br> This field is replaced by the <b>SellerBusinessType</b> field if the user is a business seller with a
     * site ID of 77 (Germany), ID of 3 (UK), ID of 205 (Ireland) or ID of 0 (US Motors). <br><br> See <b>SellerType</b> or <b>SellerBusinessCodeType</b> for the child elements.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerType
     */
    public $SellerInfo;
    /**
     * The BusinessRole
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates whether the user's account is enabled for buying and selling (indicated by <b>FullMarketPlaceParticipant</b>) on eBay, or if the account is a Partially Provisioned Account (indicated by <b>Shopper</b>) without
     * selling and buying privileges on eBay.
     * - minOccurs: 0
     * @var string
     */
    public $BusinessRole;
    /**
     * The CharityAffiliations
     * Meta informations extracted from the WSDL
     * - documentation: This type is deprecated. Use instead <b>User.SellerInfo.CharityAffiliationDetail</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
     */
    public $CharityAffiliations;
    /**
     * The PayPalAccountLevel
     * Meta informations extracted from the WSDL
     * - documentation: The user's PayPal account level. Only returned for the user identified in eBayAuthToken. That is, you cannot see someone else's PayPal account level. Use this information to check whether a seller is eligible to list digital
     * downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalAccountLevel;
    /**
     * The PayPalAccountType
     * Meta informations extracted from the WSDL
     * - documentation: The user's PayPal account type. Only returned for the user identified in <b>eBayAuthToken</b>. That is, you cannot see someone else's PayPal account type. Use this information to check whether a seller is likely to be eligible to
     * list digital downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalAccountType;
    /**
     * The PayPalAccountStatus
     * Meta informations extracted from the WSDL
     * - documentation: The user's PayPal account status. Only returned for the user identified in <b>eBayAuthToken</b>. That is, you cannot see someone else's PayPal account status. Use this information to check whether a seller is eligible to list digital
     * downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalAccountStatus;
    /**
     * The UserSubscription
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the subscription level for a user.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $UserSubscription;
    /**
     * The SiteVerified
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SiteVerified;
    /**
     * The SkypeID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SkypeID;
    /**
     * The eBayWikiReadOnly
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether a user has read-only access to the eBay Wiki (<code>true</code>) or whether the user is able contribute or edit articles on the eBay Wiki (<code>false</code>). By default, all registered eBay users have access to
     * contribute and edit articles on the eBay Wiki. All content contributed to the eBay Wiki is subject to the Community Content Policy.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayWikiReadOnly;
    /**
     * The TUVLevel
     * Meta informations extracted from the WSDL
     * - documentation: TUV level is a number allocated to a user based on various characteristics such as buyer, seller, new buyer, new seller, high risk, or bid limit. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var int
     */
    public $TUVLevel;
    /**
     * The VATID
     * Meta informations extracted from the WSDL
     * - documentation: The value added tax identifier (<b>VATID</b>) is applicable to the VAT-enabled sites. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var string
     */
    public $VATID;
    /**
     * The MotorsDealer
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if item is listed for sale by owner (FSBO) or listed by a dealer. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var bool
     */
    public $MotorsDealer;
    /**
     * The SellerPaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerPaymentMethod;
    /**
     * The BiddingSummary
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the user as a bidder on a certain item. Returned by <b>GetAllBidders</b> if <b>IncludeBiddingSummary</b> = <code>true</code> is included in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public $BiddingSummary;
    /**
     * The UserAnonymized
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the User container has been made anonymous. If <code>true</code>, some elements in the User container have either been removed, or had their values changed to remove identifying characteristics. If false, all
     * expected elements are returned, and no values are changed. <br><br> Since a bidder's user info is anonymous, this tag is returned as false only to the bidder, and to the seller of an item that the user is bidding on. For all other users, this tag is
     * returned as <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $UserAnonymized;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total count of neutral Feedback entries received by the user, including weekly repeats.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNeutralFeedbackCount;
    /**
     * The EnterpriseSeller
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var bool
     */
    public $EnterpriseSeller;
    /**
     * The BillingEmail
     * Meta informations extracted from the WSDL
     * - documentation: When a user has their billing option set to <code>email</code>, they can include this element in a <b>GetUser</b> request to retrieve their own email bills.
     * - minOccurs: 0
     * @var string
     */
    public $BillingEmail;
    /**
     * The QualifiesForSelling
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether or not the user is eligible to sell items on eBay. This field is only returned if the <b>IncludeFeatureEligibility</b> flag is included in the call request and set to <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForSelling;
    /**
     * The StaticAlias
     * Meta informations extracted from the WSDL
     * - documentation: Contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email address.)
     * - minOccurs: 0
     * @var string
     */
    public $StaticAlias;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contains the shipping address of a bidder who has made a Best Offer for an item. <br/><br/> You cannot retrieve a shipping address for any user with whom you do not have an order relationship, regardless of site. The shipping address
     * of another user is returned only if you and the other user are in an order relationship, within a certain time of order line item creation. <br><br> Because a bidder's user information is anonymous, this container is returned only to that bidder, and
     * to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The Membership
     * Meta informations extracted from the WSDL
     * - documentation: The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program,
     * and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable
     * membership programs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MembershipDetailsType
     */
    public $Membership;
    /**
     * The UserFirstName
     * Meta informations extracted from the WSDL
     * - documentation: The first name of the buyer who purchased the order.
     * - minOccurs: 0
     * @var string
     */
    public $UserFirstName;
    /**
     * The UserLastName
     * Meta informations extracted from the WSDL
     * - documentation: The last name of the buyer who purchased the order.
     * - minOccurs: 0
     * @var string
     */
    public $UserLastName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @uses UserType::setMotorsDealer()
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
     * @param bool $motorsDealer
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
     * @param \DOMDocument $any
     */
    public function __construct($aboutMePage = null, $eIASToken = null, $email = null, $feedbackScore = null, $uniqueNegativeFeedbackCount = null, $uniquePositiveFeedbackCount = null, $positiveFeedbackPercent = null, $feedbackPrivate = null, $feedbackRatingStar = null, $iDVerified = null, $eBayGoodStanding = null, $newUser = null, \macropage\ebaysdk\trading\StructType\AddressType $registrationAddress = null, $registrationDate = null, $site = null, $status = null, $userID = null, $userIDChanged = null, $userIDLastChanged = null, $vATStatus = null, \macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo = null, \macropage\ebaysdk\trading\StructType\SellerType $sellerInfo = null, $businessRole = null, \macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations = null, $payPalAccountLevel = null, $payPalAccountType = null, $payPalAccountStatus = null, array $userSubscription = array(), $siteVerified = null, array $skypeID = array(), $eBayWikiReadOnly = null, $tUVLevel = null, $vATID = null, $motorsDealer = null, $sellerPaymentMethod = null, \macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary = null, $userAnonymized = null, $uniqueNeutralFeedbackCount = null, $enterpriseSeller = null, $billingEmail = null, $qualifiesForSelling = null, $staticAlias = null, \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, \macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership = null, $userFirstName = null, $userLastName = null, \DOMDocument $any = null)
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
            ->setMotorsDealer($motorsDealer)
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
    public function getAboutMePage()
    {
        return $this->AboutMePage;
    }
    /**
     * Set AboutMePage value
     * @param bool $aboutMePage
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setAboutMePage($aboutMePage = null)
    {
        // validation for constraint: boolean
        if (!is_null($aboutMePage) && !is_bool($aboutMePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($aboutMePage)), __LINE__);
        }
        $this->AboutMePage = $aboutMePage;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !is_numeric($feedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Get UniqueNegativeFeedbackCount value
     * @return int|null
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->UniqueNegativeFeedbackCount;
    }
    /**
     * Set UniqueNegativeFeedbackCount value
     * @param int $uniqueNegativeFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNegativeFeedbackCount) && !is_numeric($uniqueNegativeFeedbackCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uniqueNegativeFeedbackCount)), __LINE__);
        }
        $this->UniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }
    /**
     * Get UniquePositiveFeedbackCount value
     * @return int|null
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->UniquePositiveFeedbackCount;
    }
    /**
     * Set UniquePositiveFeedbackCount value
     * @param int $uniquePositiveFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniquePositiveFeedbackCount) && !is_numeric($uniquePositiveFeedbackCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uniquePositiveFeedbackCount)), __LINE__);
        }
        $this->UniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }
    /**
     * Get PositiveFeedbackPercent value
     * @return float|null
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->PositiveFeedbackPercent;
    }
    /**
     * Set PositiveFeedbackPercent value
     * @param float $positiveFeedbackPercent
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPositiveFeedbackPercent($positiveFeedbackPercent = null)
    {
        $this->PositiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }
    /**
     * Get FeedbackPrivate value
     * @return bool|null
     */
    public function getFeedbackPrivate()
    {
        return $this->FeedbackPrivate;
    }
    /**
     * Set FeedbackPrivate value
     * @param bool $feedbackPrivate
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackPrivate($feedbackPrivate = null)
    {
        // validation for constraint: boolean
        if (!is_null($feedbackPrivate) && !is_bool($feedbackPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($feedbackPrivate)), __LINE__);
        }
        $this->FeedbackPrivate = $feedbackPrivate;
        return $this;
    }
    /**
     * Get FeedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar()
    {
        return $this->FeedbackRatingStar;
    }
    /**
     * Set FeedbackRatingStar value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setFeedbackRatingStar($feedbackRatingStar = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $feedbackRatingStar, implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        return $this;
    }
    /**
     * Get IDVerified value
     * @return bool|null
     */
    public function getIDVerified()
    {
        return $this->IDVerified;
    }
    /**
     * Set IDVerified value
     * @param bool $iDVerified
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setIDVerified($iDVerified = null)
    {
        // validation for constraint: boolean
        if (!is_null($iDVerified) && !is_bool($iDVerified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($iDVerified)), __LINE__);
        }
        $this->IDVerified = $iDVerified;
        return $this;
    }
    /**
     * Get eBayGoodStanding value
     * @return bool|null
     */
    public function getEBayGoodStanding()
    {
        return $this->eBayGoodStanding;
    }
    /**
     * Set eBayGoodStanding value
     * @param bool $eBayGoodStanding
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEBayGoodStanding($eBayGoodStanding = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayGoodStanding) && !is_bool($eBayGoodStanding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayGoodStanding)), __LINE__);
        }
        $this->eBayGoodStanding = $eBayGoodStanding;
        return $this;
    }
    /**
     * Get NewUser value
     * @return bool|null
     */
    public function getNewUser()
    {
        return $this->NewUser;
    }
    /**
     * Set NewUser value
     * @param bool $newUser
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setNewUser($newUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($newUser) && !is_bool($newUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newUser)), __LINE__);
        }
        $this->NewUser = $newUser;
        return $this;
    }
    /**
     * Get RegistrationAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getRegistrationAddress()
    {
        return $this->RegistrationAddress;
    }
    /**
     * Set RegistrationAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $registrationAddress
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setRegistrationAddress(\macropage\ebaysdk\trading\StructType\AddressType $registrationAddress = null)
    {
        $this->RegistrationAddress = $registrationAddress;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UserStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\UserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get UserIDChanged value
     * @return bool|null
     */
    public function getUserIDChanged()
    {
        return $this->UserIDChanged;
    }
    /**
     * Set UserIDChanged value
     * @param bool $userIDChanged
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserIDChanged($userIDChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($userIDChanged) && !is_bool($userIDChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userIDChanged)), __LINE__);
        }
        $this->UserIDChanged = $userIDChanged;
        return $this;
    }
    /**
     * Get UserIDLastChanged value
     * @return string|null
     */
    public function getUserIDLastChanged()
    {
        return $this->UserIDLastChanged;
    }
    /**
     * Set UserIDLastChanged value
     * @param string $userIDLastChanged
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserIDLastChanged($userIDLastChanged = null)
    {
        // validation for constraint: string
        if (!is_null($userIDLastChanged) && !is_string($userIDLastChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userIDLastChanged)), __LINE__);
        }
        $this->UserIDLastChanged = $userIDLastChanged;
        return $this;
    }
    /**
     * Get VATStatus value
     * @return string|null
     */
    public function getVATStatus()
    {
        return $this->VATStatus;
    }
    /**
     * Set VATStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vATStatus
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setVATStatus($vATStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VATStatusCodeType::valueIsValid($vATStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vATStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\VATStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VATStatus = $vATStatus;
        return $this;
    }
    /**
     * Get BuyerInfo value
     * @return \macropage\ebaysdk\trading\StructType\BuyerType|null
     */
    public function getBuyerInfo()
    {
        return $this->BuyerInfo;
    }
    /**
     * Set BuyerInfo value
     * @param \macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBuyerInfo(\macropage\ebaysdk\trading\StructType\BuyerType $buyerInfo = null)
    {
        $this->BuyerInfo = $buyerInfo;
        return $this;
    }
    /**
     * Get SellerInfo value
     * @return \macropage\ebaysdk\trading\StructType\SellerType|null
     */
    public function getSellerInfo()
    {
        return $this->SellerInfo;
    }
    /**
     * Set SellerInfo value
     * @param \macropage\ebaysdk\trading\StructType\SellerType $sellerInfo
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSellerInfo(\macropage\ebaysdk\trading\StructType\SellerType $sellerInfo = null)
    {
        $this->SellerInfo = $sellerInfo;
        return $this;
    }
    /**
     * Get BusinessRole value
     * @return string|null
     */
    public function getBusinessRole()
    {
        return $this->BusinessRole;
    }
    /**
     * Set BusinessRole value
     * @uses \macropage\ebaysdk\trading\EnumType\BusinessRoleType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BusinessRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $businessRole
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBusinessRole($businessRole = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BusinessRoleType::valueIsValid($businessRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $businessRole, implode(', ', \macropage\ebaysdk\trading\EnumType\BusinessRoleType::getValidValues())), __LINE__);
        }
        $this->BusinessRole = $businessRole;
        return $this;
    }
    /**
     * Get CharityAffiliations value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType|null
     */
    public function getCharityAffiliations()
    {
        return $this->CharityAffiliations;
    }
    /**
     * Set CharityAffiliations value
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setCharityAffiliations(\macropage\ebaysdk\trading\StructType\CharityAffiliationsType $charityAffiliations = null)
    {
        $this->CharityAffiliations = $charityAffiliations;
        return $this;
    }
    /**
     * Get PayPalAccountLevel value
     * @return string|null
     */
    public function getPayPalAccountLevel()
    {
        return $this->PayPalAccountLevel;
    }
    /**
     * Set PayPalAccountLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payPalAccountLevel
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountLevel($payPalAccountLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::valueIsValid($payPalAccountLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payPalAccountLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountLevelCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountLevel = $payPalAccountLevel;
        return $this;
    }
    /**
     * Get PayPalAccountType value
     * @return string|null
     */
    public function getPayPalAccountType()
    {
        return $this->PayPalAccountType;
    }
    /**
     * Set PayPalAccountType value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payPalAccountType
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountType($payPalAccountType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::valueIsValid($payPalAccountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payPalAccountType, implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountType = $payPalAccountType;
        return $this;
    }
    /**
     * Get PayPalAccountStatus value
     * @return string|null
     */
    public function getPayPalAccountStatus()
    {
        return $this->PayPalAccountStatus;
    }
    /**
     * Set PayPalAccountStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payPalAccountStatus
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setPayPalAccountStatus($payPalAccountStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::valueIsValid($payPalAccountStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payPalAccountStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PayPalAccountStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PayPalAccountStatus = $payPalAccountStatus;
        return $this;
    }
    /**
     * Get UserSubscription value
     * @return string[]|null
     */
    public function getUserSubscription()
    {
        return $this->UserSubscription;
    }
    /**
     * Set UserSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $userSubscription
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserSubscription(array $userSubscription = array())
    {
        $invalidValues = array();
        foreach ($userSubscription as $userTypeUserSubscriptionItem) {
            if (!\macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid($userTypeUserSubscriptionItem)) {
                $invalidValues[] = var_export($userTypeUserSubscriptionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UserSubscription = $userSubscription;
        return $this;
    }
    /**
     * Add item to UserSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function addToUserSubscription($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\EBaySubscriptionTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UserSubscription[] = $item;
        return $this;
    }
    /**
     * Get SiteVerified value
     * @return bool|null
     */
    public function getSiteVerified()
    {
        return $this->SiteVerified;
    }
    /**
     * Set SiteVerified value
     * @param bool $siteVerified
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSiteVerified($siteVerified = null)
    {
        // validation for constraint: boolean
        if (!is_null($siteVerified) && !is_bool($siteVerified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($siteVerified)), __LINE__);
        }
        $this->SiteVerified = $siteVerified;
        return $this;
    }
    /**
     * Get SkypeID value
     * @return string[]|null
     */
    public function getSkypeID()
    {
        return $this->SkypeID;
    }
    /**
     * Set SkypeID value
     * @throws \InvalidArgumentException
     * @param string[] $skypeID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSkypeID(array $skypeID = array())
    {
        foreach ($skypeID as $userTypeSkypeIDItem) {
            // validation for constraint: itemType
            if (!is_string($userTypeSkypeIDItem)) {
                throw new \InvalidArgumentException(sprintf('The SkypeID property can only contain items of string, "%s" given', is_object($userTypeSkypeIDItem) ? get_class($userTypeSkypeIDItem) : gettype($userTypeSkypeIDItem)), __LINE__);
            }
        }
        $this->SkypeID = $skypeID;
        return $this;
    }
    /**
     * Add item to SkypeID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function addToSkypeID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SkypeID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SkypeID[] = $item;
        return $this;
    }
    /**
     * Get eBayWikiReadOnly value
     * @return bool|null
     */
    public function getEBayWikiReadOnly()
    {
        return $this->eBayWikiReadOnly;
    }
    /**
     * Set eBayWikiReadOnly value
     * @param bool $eBayWikiReadOnly
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEBayWikiReadOnly($eBayWikiReadOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayWikiReadOnly) && !is_bool($eBayWikiReadOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayWikiReadOnly)), __LINE__);
        }
        $this->eBayWikiReadOnly = $eBayWikiReadOnly;
        return $this;
    }
    /**
     * Get TUVLevel value
     * @return int|null
     */
    public function getTUVLevel()
    {
        return $this->TUVLevel;
    }
    /**
     * Set TUVLevel value
     * @param int $tUVLevel
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setTUVLevel($tUVLevel = null)
    {
        // validation for constraint: int
        if (!is_null($tUVLevel) && !is_numeric($tUVLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tUVLevel)), __LINE__);
        }
        $this->TUVLevel = $tUVLevel;
        return $this;
    }
    /**
     * Get VATID value
     * @return string|null
     */
    public function getVATID()
    {
        return $this->VATID;
    }
    /**
     * Set VATID value
     * @param string $vATID
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setVATID($vATID = null)
    {
        // validation for constraint: string
        if (!is_null($vATID) && !is_string($vATID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vATID)), __LINE__);
        }
        $this->VATID = $vATID;
        return $this;
    }
    /**
     * Get MotorsDealer value
     * @return bool|null
     */
    public function getMotorsDealer()
    {
        return $this->MotorsDealer;
    }
    /**
     * Set MotorsDealer value
     * @param bool $motorsDealer
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setMotorsDealer($motorsDealer = null)
    {
        // validation for constraint: boolean
        if (!is_null($motorsDealer) && !is_bool($motorsDealer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($motorsDealer)), __LINE__);
        }
        $this->MotorsDealer = $motorsDealer;
        return $this;
    }
    /**
     * Get SellerPaymentMethod value
     * @return string|null
     */
    public function getSellerPaymentMethod()
    {
        return $this->SellerPaymentMethod;
    }
    /**
     * Set SellerPaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerPaymentMethod
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setSellerPaymentMethod($sellerPaymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid($sellerPaymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerPaymentMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->SellerPaymentMethod = $sellerPaymentMethod;
        return $this;
    }
    /**
     * Get BiddingSummary value
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType|null
     */
    public function getBiddingSummary()
    {
        return $this->BiddingSummary;
    }
    /**
     * Set BiddingSummary value
     * @param \macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBiddingSummary(\macropage\ebaysdk\trading\StructType\BiddingSummaryType $biddingSummary = null)
    {
        $this->BiddingSummary = $biddingSummary;
        return $this;
    }
    /**
     * Get UserAnonymized value
     * @return bool|null
     */
    public function getUserAnonymized()
    {
        return $this->UserAnonymized;
    }
    /**
     * Set UserAnonymized value
     * @param bool $userAnonymized
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserAnonymized($userAnonymized = null)
    {
        // validation for constraint: boolean
        if (!is_null($userAnonymized) && !is_bool($userAnonymized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userAnonymized)), __LINE__);
        }
        $this->UserAnonymized = $userAnonymized;
        return $this;
    }
    /**
     * Get UniqueNeutralFeedbackCount value
     * @return int|null
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->UniqueNeutralFeedbackCount;
    }
    /**
     * Set UniqueNeutralFeedbackCount value
     * @param int $uniqueNeutralFeedbackCount
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueNeutralFeedbackCount) && !is_numeric($uniqueNeutralFeedbackCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uniqueNeutralFeedbackCount)), __LINE__);
        }
        $this->UniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }
    /**
     * Get EnterpriseSeller value
     * @return bool|null
     */
    public function getEnterpriseSeller()
    {
        return $this->EnterpriseSeller;
    }
    /**
     * Set EnterpriseSeller value
     * @param bool $enterpriseSeller
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setEnterpriseSeller($enterpriseSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($enterpriseSeller) && !is_bool($enterpriseSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enterpriseSeller)), __LINE__);
        }
        $this->EnterpriseSeller = $enterpriseSeller;
        return $this;
    }
    /**
     * Get BillingEmail value
     * @return string|null
     */
    public function getBillingEmail()
    {
        return $this->BillingEmail;
    }
    /**
     * Set BillingEmail value
     * @param string $billingEmail
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setBillingEmail($billingEmail = null)
    {
        // validation for constraint: string
        if (!is_null($billingEmail) && !is_string($billingEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingEmail)), __LINE__);
        }
        $this->BillingEmail = $billingEmail;
        return $this;
    }
    /**
     * Get QualifiesForSelling value
     * @return bool|null
     */
    public function getQualifiesForSelling()
    {
        return $this->QualifiesForSelling;
    }
    /**
     * Set QualifiesForSelling value
     * @param bool $qualifiesForSelling
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setQualifiesForSelling($qualifiesForSelling = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForSelling) && !is_bool($qualifiesForSelling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForSelling)), __LINE__);
        }
        $this->QualifiesForSelling = $qualifiesForSelling;
        return $this;
    }
    /**
     * Get StaticAlias value
     * @return string|null
     */
    public function getStaticAlias()
    {
        return $this->StaticAlias;
    }
    /**
     * Set StaticAlias value
     * @param string $staticAlias
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setStaticAlias($staticAlias = null)
    {
        // validation for constraint: string
        if (!is_null($staticAlias) && !is_string($staticAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($staticAlias)), __LINE__);
        }
        $this->StaticAlias = $staticAlias;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get Membership value
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailsType|null
     */
    public function getMembership()
    {
        return $this->Membership;
    }
    /**
     * Set Membership value
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setMembership(\macropage\ebaysdk\trading\StructType\MembershipDetailsType $membership = null)
    {
        $this->Membership = $membership;
        return $this;
    }
    /**
     * Get UserFirstName value
     * @return string|null
     */
    public function getUserFirstName()
    {
        return $this->UserFirstName;
    }
    /**
     * Set UserFirstName value
     * @param string $userFirstName
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserFirstName($userFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($userFirstName) && !is_string($userFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userFirstName)), __LINE__);
        }
        $this->UserFirstName = $userFirstName;
        return $this;
    }
    /**
     * Get UserLastName value
     * @return string|null
     */
    public function getUserLastName()
    {
        return $this->UserLastName;
    }
    /**
     * Set UserLastName value
     * @param string $userLastName
     * @return \macropage\ebaysdk\trading\StructType\UserType
     */
    public function setUserLastName($userLastName = null)
    {
        // validation for constraint: string
        if (!is_null($userLastName) && !is_string($userLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userLastName)), __LINE__);
        }
        $this->UserLastName = $userLastName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UserType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UserType
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
     * @return \macropage\ebaysdk\trading\StructType\UserType
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
