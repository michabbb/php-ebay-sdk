<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleUserType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type used to express the details for one eBay user. Which fields are returned in a call response will depend on the context, the API call, and whether the user is a buyer or seller (or both).
 * @subpackage Structs
 */
class SimpleUserType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay user. An eBay user ID is unique across all eBay marketplaces. <br /> <br /> This field is generally always returned, but it may be masked depending on the situation. For example, if anyone other than
     * the seller of the listing runs a <b>GetItemStatus</b> call on an active auction listing with one or or bids, the <b>UserID</b> value will be masked something like this - <code>b***r</code>.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The FeedbackPrivate
     * Meta informations extracted from the WSDL
     * - documentation: This boolean value indicates whether or not the eBay user has chosen to make their Feedback Profile private in My eBay. A private Feedback Profile only means that individual Feedback comments are hidden, but other Feedback statistics
     * will still be displayed, including the total Feedback score and the Positive Feedback Percentage. <br /> <br /> Sellers on eBay marketplaces do not have the option of making their Feedback Profile private, and they will be blocked from listing if
     * they try to list items with a private Feedback Profile.
     * - minOccurs: 0
     * @var bool
     */
    public $FeedbackPrivate;
    /**
     * The FeedbackRatingStar
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay user's Feedback Rating Star. A different colored star is associated with each Feedback Score range. For more details on the Feedback Score ranges (and colored stars associated with each
     * range), see <b>FeedbackRatingStarCodeType</b>.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackRatingStar;
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: The aggregate Feedback score of an eBay user. A user's Feedback score is determined by the total number of Positive Feedback ratings minus the total number of Negative Feedback ratings the user has received. Any Neutral Feedback
     * ratings do not affect the Feedback Score. <br> <br> A user's Feedback Score is a quantitative expression of the desirability of dealing with that user as a buyer or a seller. A buyer can leave Positive, Neutral, or Negative Feedback for the seller,
     * but a seller can only leave Positive Feedback for the buyer.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackScore;
    /**
     * The UserAnonymized
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether eBay has made this user's information anonymous. <br> <br> If <code>true</code>, certain other fields about this user are not returned, or their values are masked.
     * - minOccurs: 0
     * @var bool
     */
    public $UserAnonymized;
    /**
     * The NewUser
     * Meta informations extracted from the WSDL
     * - documentation: If 'true', identifies a new user who has been a registered eBay user for 30 days or less. Always 'false' after the user has been registered for more than 30 days.
     * - minOccurs: 0
     * @var bool
     */
    public $NewUser;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates when the user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * The RegistrationSite
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates the eBay site on which the user first created an eBay account. If a bidder's user information is made anonymous, the value -99 is returned.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationSite;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates the current status of the eBay user. A value of <code>Confirmed</code> is typically returned for an active eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The SellerBusinessType
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the type of seller account held by the eBay user - a <code>Private</code> (non-business) account or a <code>Commercial</code> (business) account.
     * - minOccurs: 0
     * @var string
     */
    public $SellerBusinessType;
    /**
     * The StoreURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the seller's eBay Store page. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     * - minOccurs: 0
     * @var string
     */
    public $StoreURL;
    /**
     * The StoreName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the seller's eBay Store. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The SellerItemsURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL for an eBay marketplace page that displays a list of the seller's active listings.
     * - minOccurs: 0
     * @var string
     */
    public $SellerItemsURL;
    /**
     * The AboutMeURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to the eBay About Me page. Only returned if one exists for the eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $AboutMeURL;
    /**
     * The MyWorldURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to the eBay user's home page (formerly called 'My World'). The home page shows Feedback statistics and has multiple links, such as a link to the seller's eBay Store and a link to the seller's other items.
     * - minOccurs: 0
     * @var string
     */
    public $MyWorldURL;
    /**
     * The MyWorldSmallImage
     * Meta informations extracted from the WSDL
     * - documentation: The URL to the small version of the eBay user's profile image/logo. This field is only returned if available.
     * - minOccurs: 0
     * @var string
     */
    public $MyWorldSmallImage;
    /**
     * The MyWorldLargeImage
     * Meta informations extracted from the WSDL
     * - documentation: The URL to the large version of the eBay user's profile image/logo. This field is only returned if available.
     * - minOccurs: 0
     * @var string
     */
    public $MyWorldLargeImage;
    /**
     * The ReviewsAndGuidesURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to a page where it shows any product reviews/ratings that have been given by the eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $ReviewsAndGuidesURL;
    /**
     * The FeedbackDetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to the eBay user's Feedback Profile page, which has full details of the eBay user's Feedback History, including Feedback Ratings, Feedback Comments, and Detailed Seller Ratings.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackDetailsURL;
    /**
     * The PositiveFeedbackPercent
     * Meta informations extracted from the WSDL
     * - documentation: This value is the percentage value of a seller's Feedback entries that were marked by buyer's as 'Positive'. This number is calculated by dividing the total number of Feedback entries left for the seller (Positive, Neutral, and
     * Negative) by only the seller's 'Positive' Feedback ratings.
     * - minOccurs: 0
     * @var float
     */
    public $PositiveFeedbackPercent;
    /**
     * The SellerLevel
     * Meta informations extracted from the WSDL
     * - documentation: The enumerated value in this field indicates the current Power Seller level of the eBay user. There are five Power Seller tiers, and each tier is based on average monthly sales. Available benefits and services to the seller vary for
     * each tier. <br/><br/> This field is only returned if the eBay user is a Power Seller, and is not returned at all on some eBay marketplaces.
     * - minOccurs: 0
     * @var string
     */
    public $SellerLevel;
    /**
     * The TopRatedSeller
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is only returned if <code>true</code>, and indicates if the eBay user has Top-Rated Seller status. Top-Rated sellers are eligible to get the 'Top-Rated Plus' badge on all of their active listings (meeting Top-Rated
     * Plus requirements), and qualify for other benefits such as Final Value Fee discounts and increased visibility in search results.
     * - minOccurs: 0
     * @var bool
     */
    public $TopRatedSeller;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SimpleUserType
     * @uses SimpleUserType::setUserID()
     * @uses SimpleUserType::setFeedbackPrivate()
     * @uses SimpleUserType::setFeedbackRatingStar()
     * @uses SimpleUserType::setFeedbackScore()
     * @uses SimpleUserType::setUserAnonymized()
     * @uses SimpleUserType::setNewUser()
     * @uses SimpleUserType::setRegistrationDate()
     * @uses SimpleUserType::setRegistrationSite()
     * @uses SimpleUserType::setStatus()
     * @uses SimpleUserType::setSellerBusinessType()
     * @uses SimpleUserType::setStoreURL()
     * @uses SimpleUserType::setStoreName()
     * @uses SimpleUserType::setSellerItemsURL()
     * @uses SimpleUserType::setAboutMeURL()
     * @uses SimpleUserType::setMyWorldURL()
     * @uses SimpleUserType::setMyWorldSmallImage()
     * @uses SimpleUserType::setMyWorldLargeImage()
     * @uses SimpleUserType::setReviewsAndGuidesURL()
     * @uses SimpleUserType::setFeedbackDetailsURL()
     * @uses SimpleUserType::setPositiveFeedbackPercent()
     * @uses SimpleUserType::setSellerLevel()
     * @uses SimpleUserType::setTopRatedSeller()
     * @uses SimpleUserType::setAny()
     * @param string $userID
     * @param bool $feedbackPrivate
     * @param string $feedbackRatingStar
     * @param int $feedbackScore
     * @param bool $userAnonymized
     * @param bool $newUser
     * @param string $registrationDate
     * @param string $registrationSite
     * @param string $status
     * @param string $sellerBusinessType
     * @param string $storeURL
     * @param string $storeName
     * @param string $sellerItemsURL
     * @param string $aboutMeURL
     * @param string $myWorldURL
     * @param string $myWorldSmallImage
     * @param string $myWorldLargeImage
     * @param string $reviewsAndGuidesURL
     * @param string $feedbackDetailsURL
     * @param float $positiveFeedbackPercent
     * @param string $sellerLevel
     * @param bool $topRatedSeller
     * @param \DOMDocument $any
     */
    public function __construct($userID = null, $feedbackPrivate = null, $feedbackRatingStar = null, $feedbackScore = null, $userAnonymized = null, $newUser = null, $registrationDate = null, $registrationSite = null, $status = null, $sellerBusinessType = null, $storeURL = null, $storeName = null, $sellerItemsURL = null, $aboutMeURL = null, $myWorldURL = null, $myWorldSmallImage = null, $myWorldLargeImage = null, $reviewsAndGuidesURL = null, $feedbackDetailsURL = null, $positiveFeedbackPercent = null, $sellerLevel = null, $topRatedSeller = null, \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setFeedbackPrivate($feedbackPrivate)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setFeedbackScore($feedbackScore)
            ->setUserAnonymized($userAnonymized)
            ->setNewUser($newUser)
            ->setRegistrationDate($registrationDate)
            ->setRegistrationSite($registrationSite)
            ->setStatus($status)
            ->setSellerBusinessType($sellerBusinessType)
            ->setStoreURL($storeURL)
            ->setStoreName($storeName)
            ->setSellerItemsURL($sellerItemsURL)
            ->setAboutMeURL($aboutMeURL)
            ->setMyWorldURL($myWorldURL)
            ->setMyWorldSmallImage($myWorldSmallImage)
            ->setMyWorldLargeImage($myWorldLargeImage)
            ->setReviewsAndGuidesURL($reviewsAndGuidesURL)
            ->setFeedbackDetailsURL($feedbackDetailsURL)
            ->setPositiveFeedbackPercent($positiveFeedbackPercent)
            ->setSellerLevel($sellerLevel)
            ->setTopRatedSeller($topRatedSeller)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setFeedbackRatingStar($feedbackRatingStar = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $feedbackRatingStar, implode(', ', \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * Get RegistrationSite value
     * @return string|null
     */
    public function getRegistrationSite()
    {
        return $this->RegistrationSite;
    }
    /**
     * Set RegistrationSite value
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $registrationSite
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setRegistrationSite($registrationSite = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid($registrationSite)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $registrationSite, implode(', ', \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->RegistrationSite = $registrationSite;
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
     * @uses \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerBusinessType($sellerBusinessType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerBusinessType, implode(', ', \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        return $this;
    }
    /**
     * Get SellerItemsURL value
     * @return string|null
     */
    public function getSellerItemsURL()
    {
        return $this->SellerItemsURL;
    }
    /**
     * Set SellerItemsURL value
     * @param string $sellerItemsURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerItemsURL($sellerItemsURL = null)
    {
        // validation for constraint: string
        if (!is_null($sellerItemsURL) && !is_string($sellerItemsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerItemsURL)), __LINE__);
        }
        $this->SellerItemsURL = $sellerItemsURL;
        return $this;
    }
    /**
     * Get AboutMeURL value
     * @return string|null
     */
    public function getAboutMeURL()
    {
        return $this->AboutMeURL;
    }
    /**
     * Set AboutMeURL value
     * @param string $aboutMeURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setAboutMeURL($aboutMeURL = null)
    {
        // validation for constraint: string
        if (!is_null($aboutMeURL) && !is_string($aboutMeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aboutMeURL)), __LINE__);
        }
        $this->AboutMeURL = $aboutMeURL;
        return $this;
    }
    /**
     * Get MyWorldURL value
     * @return string|null
     */
    public function getMyWorldURL()
    {
        return $this->MyWorldURL;
    }
    /**
     * Set MyWorldURL value
     * @param string $myWorldURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldURL($myWorldURL = null)
    {
        // validation for constraint: string
        if (!is_null($myWorldURL) && !is_string($myWorldURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($myWorldURL)), __LINE__);
        }
        $this->MyWorldURL = $myWorldURL;
        return $this;
    }
    /**
     * Get MyWorldSmallImage value
     * @return string|null
     */
    public function getMyWorldSmallImage()
    {
        return $this->MyWorldSmallImage;
    }
    /**
     * Set MyWorldSmallImage value
     * @param string $myWorldSmallImage
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldSmallImage($myWorldSmallImage = null)
    {
        // validation for constraint: string
        if (!is_null($myWorldSmallImage) && !is_string($myWorldSmallImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($myWorldSmallImage)), __LINE__);
        }
        $this->MyWorldSmallImage = $myWorldSmallImage;
        return $this;
    }
    /**
     * Get MyWorldLargeImage value
     * @return string|null
     */
    public function getMyWorldLargeImage()
    {
        return $this->MyWorldLargeImage;
    }
    /**
     * Set MyWorldLargeImage value
     * @param string $myWorldLargeImage
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldLargeImage($myWorldLargeImage = null)
    {
        // validation for constraint: string
        if (!is_null($myWorldLargeImage) && !is_string($myWorldLargeImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($myWorldLargeImage)), __LINE__);
        }
        $this->MyWorldLargeImage = $myWorldLargeImage;
        return $this;
    }
    /**
     * Get ReviewsAndGuidesURL value
     * @return string|null
     */
    public function getReviewsAndGuidesURL()
    {
        return $this->ReviewsAndGuidesURL;
    }
    /**
     * Set ReviewsAndGuidesURL value
     * @param string $reviewsAndGuidesURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setReviewsAndGuidesURL($reviewsAndGuidesURL = null)
    {
        // validation for constraint: string
        if (!is_null($reviewsAndGuidesURL) && !is_string($reviewsAndGuidesURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reviewsAndGuidesURL)), __LINE__);
        }
        $this->ReviewsAndGuidesURL = $reviewsAndGuidesURL;
        return $this;
    }
    /**
     * Get FeedbackDetailsURL value
     * @return string|null
     */
    public function getFeedbackDetailsURL()
    {
        return $this->FeedbackDetailsURL;
    }
    /**
     * Set FeedbackDetailsURL value
     * @param string $feedbackDetailsURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setFeedbackDetailsURL($feedbackDetailsURL = null)
    {
        // validation for constraint: string
        if (!is_null($feedbackDetailsURL) && !is_string($feedbackDetailsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feedbackDetailsURL)), __LINE__);
        }
        $this->FeedbackDetailsURL = $feedbackDetailsURL;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setPositiveFeedbackPercent($positiveFeedbackPercent = null)
    {
        $this->PositiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }
    /**
     * Get SellerLevel value
     * @return string|null
     */
    public function getSellerLevel()
    {
        return $this->SellerLevel;
    }
    /**
     * Set SellerLevel value
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerLevel
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerLevel($sellerLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::valueIsValid($sellerLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerLevel, implode(', ', \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SellerLevel = $sellerLevel;
        return $this;
    }
    /**
     * Get TopRatedSeller value
     * @return bool|null
     */
    public function getTopRatedSeller()
    {
        return $this->TopRatedSeller;
    }
    /**
     * Set TopRatedSeller value
     * @param bool $topRatedSeller
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setTopRatedSeller($topRatedSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($topRatedSeller) && !is_bool($topRatedSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($topRatedSeller)), __LINE__);
        }
        $this->TopRatedSeller = $topRatedSeller;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\SimpleUserType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
