<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleUserType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type used to express the details for one eBay user. Which fields are returned in a call response will depend on the context, the API call, and whether the user is a buyer or seller (or both).
 * @subpackage Structs
 */
class SimpleUserType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay user. An eBay user ID is unique across all eBay marketplaces. <br /> <br /> This field is generally always returned, but it may be masked depending on the situation. For example, if anyone other than
     * the seller of the listing runs a <b>GetItemStatus</b> call on an active auction listing with one or or bids, the <b>UserID</b> value will be masked something like this - <code>b***r</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The FeedbackPrivate
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not the eBay user has chosen to make their Feedback Profile private in My eBay. A private Feedback Profile only means that individual Feedback comments are hidden, but other Feedback statistics
     * will still be displayed, including the total Feedback score and the Positive Feedback Percentage. <br /> <br /> Sellers on eBay marketplaces do not have the option of making their Feedback Profile private, and they will be blocked from listing if
     * they try to list items with a private Feedback Profile.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FeedbackPrivate = null;
    /**
     * The FeedbackRatingStar
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay user's Feedback Rating Star. A different colored star is associated with each Feedback Score range. For more details on the Feedback Score ranges (and colored stars associated with each
     * range), see <b>FeedbackRatingStarCodeType</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackRatingStar = null;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: The aggregate Feedback score of an eBay user. A user's Feedback score is determined by the total number of Positive Feedback ratings minus the total number of Negative Feedback ratings the user has received. Any Neutral Feedback
     * ratings do not affect the Feedback Score. <br> <br> A user's Feedback Score is a quantitative expression of the desirability of dealing with that user as a buyer or a seller. A buyer can leave Positive, Neutral, or Negative Feedback for the seller,
     * but a seller can only leave Positive Feedback for the buyer.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FeedbackScore = null;
    /**
     * The UserAnonymized
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether eBay has made this user's information anonymous. <br> <br> If <code>true</code>, certain other fields about this user are not returned, or their values are masked.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserAnonymized = null;
    /**
     * The NewUser
     * Meta information extracted from the WSDL
     * - documentation: If 'true', identifies a new user who has been a registered eBay user for 30 days or less. Always 'false' after the user has been registered for more than 30 days.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NewUser = null;
    /**
     * The RegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegistrationDate = null;
    /**
     * The RegistrationSite
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates the eBay site on which the user first created an eBay account. If a bidder's user information is made anonymous, the value -99 is returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegistrationSite = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates the current status of the eBay user. A value of <code>Confirmed</code> is typically returned for an active eBay user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The SellerBusinessType
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of seller account held by the eBay user - a <code>Private</code> (non-business) account or a <code>Commercial</code> (business) account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerBusinessType = null;
    /**
     * The StoreURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the seller's eBay Store page. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreURL = null;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: The name of the seller's eBay Store. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreName = null;
    /**
     * The SellerItemsURL
     * Meta information extracted from the WSDL
     * - documentation: The URL for an eBay marketplace page that displays a list of the seller's active listings.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerItemsURL = null;
    /**
     * The AboutMeURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to the eBay About Me page. Only returned if one exists for the eBay user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AboutMeURL = null;
    /**
     * The MyWorldURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to the eBay user's home page (formerly called 'My World'). The home page shows Feedback statistics and has multiple links, such as a link to the seller's eBay Store and a link to the seller's other items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MyWorldURL = null;
    /**
     * The MyWorldSmallImage
     * Meta information extracted from the WSDL
     * - documentation: The URL to the small version of the eBay user's profile image/logo. This field is only returned if available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MyWorldSmallImage = null;
    /**
     * The MyWorldLargeImage
     * Meta information extracted from the WSDL
     * - documentation: The URL to the large version of the eBay user's profile image/logo. This field is only returned if available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MyWorldLargeImage = null;
    /**
     * The ReviewsAndGuidesURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to a page where it shows any product reviews/ratings that have been given by the eBay user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReviewsAndGuidesURL = null;
    /**
     * The FeedbackDetailsURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to the eBay user's Feedback Profile page, which has full details of the eBay user's Feedback History, including Feedback Ratings, Feedback Comments, and Detailed Seller Ratings.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackDetailsURL = null;
    /**
     * The PositiveFeedbackPercent
     * Meta information extracted from the WSDL
     * - documentation: This value is the percentage value of a seller's Feedback entries that were marked by buyer's as 'Positive'. This number is calculated by dividing the total number of Feedback entries left for the seller (Positive, Neutral, and
     * Negative) by only the seller's 'Positive' Feedback ratings.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PositiveFeedbackPercent = null;
    /**
     * The SellerLevel
     * Meta information extracted from the WSDL
     * - documentation: The enumerated value in this field indicates the current Power Seller level of the eBay user. There are five Power Seller tiers, and each tier is based on average monthly sales. Available benefits and services to the seller vary for
     * each tier. <br/><br/> This field is only returned if the eBay user is a Power Seller, and is not returned at all on some eBay marketplaces.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerLevel = null;
    /**
     * The TopRatedSeller
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is only returned if <code>true</code>, and indicates if the eBay user has Top-Rated Seller status. Top-Rated sellers are eligible to get the 'Top-Rated Plus' badge on all of their active listings (meeting Top-Rated
     * Plus requirements), and qualify for other benefits such as Final Value Fee discounts and increased visibility in search results.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TopRatedSeller = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $userID = null, ?bool $feedbackPrivate = null, ?string $feedbackRatingStar = null, ?int $feedbackScore = null, ?bool $userAnonymized = null, ?bool $newUser = null, ?string $registrationDate = null, ?string $registrationSite = null, ?string $status = null, ?string $sellerBusinessType = null, ?string $storeURL = null, ?string $storeName = null, ?string $sellerItemsURL = null, ?string $aboutMeURL = null, ?string $myWorldURL = null, ?string $myWorldSmallImage = null, ?string $myWorldLargeImage = null, ?string $reviewsAndGuidesURL = null, ?string $feedbackDetailsURL = null, ?float $positiveFeedbackPercent = null, ?string $sellerLevel = null, ?bool $topRatedSeller = null, $any = null)
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
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setFeedbackRatingStar(?string $feedbackRatingStar = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType', is_array($feedbackRatingStar) ? implode(', ', $feedbackRatingStar) : var_export($feedbackRatingStar, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * Get RegistrationSite value
     * @return string|null
     */
    public function getRegistrationSite(): ?string
    {
        return $this->RegistrationSite;
    }
    /**
     * Set RegistrationSite value
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $registrationSite
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setRegistrationSite(?string $registrationSite = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid($registrationSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\SiteCodeType', is_array($registrationSite) ? implode(', ', $registrationSite) : var_export($registrationSite, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->RegistrationSite = $registrationSite;
        
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
     * @uses \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\UserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
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
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerBusinessType(?string $sellerBusinessType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType', is_array($sellerBusinessType) ? implode(', ', $sellerBusinessType) : var_export($sellerBusinessType, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL(): ?string
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStoreURL(?string $storeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeURL, true), gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setStoreName(?string $storeName = null): self
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        
        return $this;
    }
    /**
     * Get SellerItemsURL value
     * @return string|null
     */
    public function getSellerItemsURL(): ?string
    {
        return $this->SellerItemsURL;
    }
    /**
     * Set SellerItemsURL value
     * @param string $sellerItemsURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerItemsURL(?string $sellerItemsURL = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerItemsURL) && !is_string($sellerItemsURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerItemsURL, true), gettype($sellerItemsURL)), __LINE__);
        }
        $this->SellerItemsURL = $sellerItemsURL;
        
        return $this;
    }
    /**
     * Get AboutMeURL value
     * @return string|null
     */
    public function getAboutMeURL(): ?string
    {
        return $this->AboutMeURL;
    }
    /**
     * Set AboutMeURL value
     * @param string $aboutMeURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setAboutMeURL(?string $aboutMeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($aboutMeURL) && !is_string($aboutMeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aboutMeURL, true), gettype($aboutMeURL)), __LINE__);
        }
        $this->AboutMeURL = $aboutMeURL;
        
        return $this;
    }
    /**
     * Get MyWorldURL value
     * @return string|null
     */
    public function getMyWorldURL(): ?string
    {
        return $this->MyWorldURL;
    }
    /**
     * Set MyWorldURL value
     * @param string $myWorldURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldURL(?string $myWorldURL = null): self
    {
        // validation for constraint: string
        if (!is_null($myWorldURL) && !is_string($myWorldURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($myWorldURL, true), gettype($myWorldURL)), __LINE__);
        }
        $this->MyWorldURL = $myWorldURL;
        
        return $this;
    }
    /**
     * Get MyWorldSmallImage value
     * @return string|null
     */
    public function getMyWorldSmallImage(): ?string
    {
        return $this->MyWorldSmallImage;
    }
    /**
     * Set MyWorldSmallImage value
     * @param string $myWorldSmallImage
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldSmallImage(?string $myWorldSmallImage = null): self
    {
        // validation for constraint: string
        if (!is_null($myWorldSmallImage) && !is_string($myWorldSmallImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($myWorldSmallImage, true), gettype($myWorldSmallImage)), __LINE__);
        }
        $this->MyWorldSmallImage = $myWorldSmallImage;
        
        return $this;
    }
    /**
     * Get MyWorldLargeImage value
     * @return string|null
     */
    public function getMyWorldLargeImage(): ?string
    {
        return $this->MyWorldLargeImage;
    }
    /**
     * Set MyWorldLargeImage value
     * @param string $myWorldLargeImage
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setMyWorldLargeImage(?string $myWorldLargeImage = null): self
    {
        // validation for constraint: string
        if (!is_null($myWorldLargeImage) && !is_string($myWorldLargeImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($myWorldLargeImage, true), gettype($myWorldLargeImage)), __LINE__);
        }
        $this->MyWorldLargeImage = $myWorldLargeImage;
        
        return $this;
    }
    /**
     * Get ReviewsAndGuidesURL value
     * @return string|null
     */
    public function getReviewsAndGuidesURL(): ?string
    {
        return $this->ReviewsAndGuidesURL;
    }
    /**
     * Set ReviewsAndGuidesURL value
     * @param string $reviewsAndGuidesURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setReviewsAndGuidesURL(?string $reviewsAndGuidesURL = null): self
    {
        // validation for constraint: string
        if (!is_null($reviewsAndGuidesURL) && !is_string($reviewsAndGuidesURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reviewsAndGuidesURL, true), gettype($reviewsAndGuidesURL)), __LINE__);
        }
        $this->ReviewsAndGuidesURL = $reviewsAndGuidesURL;
        
        return $this;
    }
    /**
     * Get FeedbackDetailsURL value
     * @return string|null
     */
    public function getFeedbackDetailsURL(): ?string
    {
        return $this->FeedbackDetailsURL;
    }
    /**
     * Set FeedbackDetailsURL value
     * @param string $feedbackDetailsURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setFeedbackDetailsURL(?string $feedbackDetailsURL = null): self
    {
        // validation for constraint: string
        if (!is_null($feedbackDetailsURL) && !is_string($feedbackDetailsURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedbackDetailsURL, true), gettype($feedbackDetailsURL)), __LINE__);
        }
        $this->FeedbackDetailsURL = $feedbackDetailsURL;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
     * Get SellerLevel value
     * @return string|null
     */
    public function getSellerLevel(): ?string
    {
        return $this->SellerLevel;
    }
    /**
     * Set SellerLevel value
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellerLevel
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setSellerLevel(?string $sellerLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::valueIsValid($sellerLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType', is_array($sellerLevel) ? implode(', ', $sellerLevel) : var_export($sellerLevel, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SellerLevel = $sellerLevel;
        
        return $this;
    }
    /**
     * Get TopRatedSeller value
     * @return bool|null
     */
    public function getTopRatedSeller(): ?bool
    {
        return $this->TopRatedSeller;
    }
    /**
     * Set TopRatedSeller value
     * @param bool $topRatedSeller
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public function setTopRatedSeller(?bool $topRatedSeller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($topRatedSeller) && !is_bool($topRatedSeller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($topRatedSeller, true), gettype($topRatedSeller)), __LINE__);
        }
        $this->TopRatedSeller = $topRatedSeller;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType
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
