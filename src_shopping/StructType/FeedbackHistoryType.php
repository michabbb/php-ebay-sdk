<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackHistoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>FeedbackHistory</b> container that is returned in the <b>GetUserProfile</b> response. The <b>FeedbackHistory</b> container is only returned if an <b>IncludeSelector</b> field is included in the request with a
 * value set to <code>FeedbackHistory</code>. <br/><br/> The <b>FeedbackHistory</b> container consists of various statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral, and Negative, and Withdrawn
 * Feedback entries for predefined time periods, as well as Detaled Seller Ratings (if applicable to the eBay seller).
 * @subpackage Structs
 */
class FeedbackHistoryType extends AbstractStructBase
{
    /**
     * The BidRetractionFeedbackPeriods
     * Meta informations extracted from the WSDL
     * - documentation: A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public $BidRetractionFeedbackPeriods;
    /**
     * The NegativeFeedbackPeriods
     * Meta informations extracted from the WSDL
     * - documentation: A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public $NegativeFeedbackPeriods;
    /**
     * The NeutralFeedbackPeriods
     * Meta informations extracted from the WSDL
     * - documentation: A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public $NeutralFeedbackPeriods;
    /**
     * The PositiveFeedbackPeriods
     * Meta informations extracted from the WSDL
     * - documentation: A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public $PositiveFeedbackPeriods;
    /**
     * The TotalFeedbackPeriods
     * Meta informations extracted from the WSDL
     * - documentation: A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public $TotalFeedbackPeriods;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Negative Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay
     * since eBay buyers cannot receive Negative feedback from their order partners.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * The UniquePositiveFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Positive Feedback entries that the specified eBay user has received (as a buyer or seller) from unique users, ever since the eBay user first registered on eBay.
     * - minOccurs: 0
     * @var int
     */
    public $UniquePositiveFeedbackCount;
    /**
     * The AverageRatingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for
     * this particular Detailed Seller Rating type. <br/><br/> This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable
     * for all sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[]
     */
    public $AverageRatingDetails;
    /**
     * The NeutralCommentCountFromSuspendedUsers
     * Meta informations extracted from the WSDL
     * - documentation: Number of Neutral comments received from suspended users. This field is only returned if applicable.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralCommentCountFromSuspendedUsers;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Neutral Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay
     * since eBay buyers cannot receive Neutral feedback from their order partners. This field is only returned if applicable.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNeutralFeedbackCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackHistoryType
     * @uses FeedbackHistoryType::setBidRetractionFeedbackPeriods()
     * @uses FeedbackHistoryType::setNegativeFeedbackPeriods()
     * @uses FeedbackHistoryType::setNeutralFeedbackPeriods()
     * @uses FeedbackHistoryType::setPositiveFeedbackPeriods()
     * @uses FeedbackHistoryType::setTotalFeedbackPeriods()
     * @uses FeedbackHistoryType::setUniqueNegativeFeedbackCount()
     * @uses FeedbackHistoryType::setUniquePositiveFeedbackCount()
     * @uses FeedbackHistoryType::setAverageRatingDetails()
     * @uses FeedbackHistoryType::setNeutralCommentCountFromSuspendedUsers()
     * @uses FeedbackHistoryType::setUniqueNeutralFeedbackCount()
     * @uses FeedbackHistoryType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $bidRetractionFeedbackPeriods
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $negativeFeedbackPeriods
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $neutralFeedbackPeriods
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $positiveFeedbackPeriods
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $totalFeedbackPeriods
     * @param int $uniqueNegativeFeedbackCount
     * @param int $uniquePositiveFeedbackCount
     * @param \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @param int $neutralCommentCountFromSuspendedUsers
     * @param int $uniqueNeutralFeedbackCount
     * @param \DOMDocument $any
     */
    public function __construct(array $bidRetractionFeedbackPeriods = array(), array $negativeFeedbackPeriods = array(), array $neutralFeedbackPeriods = array(), array $positiveFeedbackPeriods = array(), array $totalFeedbackPeriods = array(), $uniqueNegativeFeedbackCount = null, $uniquePositiveFeedbackCount = null, array $averageRatingDetails = array(), $neutralCommentCountFromSuspendedUsers = null, $uniqueNeutralFeedbackCount = null, \DOMDocument $any = null)
    {
        $this
            ->setBidRetractionFeedbackPeriods($bidRetractionFeedbackPeriods)
            ->setNegativeFeedbackPeriods($negativeFeedbackPeriods)
            ->setNeutralFeedbackPeriods($neutralFeedbackPeriods)
            ->setPositiveFeedbackPeriods($positiveFeedbackPeriods)
            ->setTotalFeedbackPeriods($totalFeedbackPeriods)
            ->setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
            ->setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
            ->setAverageRatingDetails($averageRatingDetails)
            ->setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers)
            ->setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
            ->setAny($any);
    }
    /**
     * Get BidRetractionFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]|null
     */
    public function getBidRetractionFeedbackPeriods()
    {
        return $this->BidRetractionFeedbackPeriods;
    }
    /**
     * Set BidRetractionFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $bidRetractionFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setBidRetractionFeedbackPeriods(array $bidRetractionFeedbackPeriods = array())
    {
        foreach ($bidRetractionFeedbackPeriods as $feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeBidRetractionFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The BidRetractionFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) : gettype($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem)), __LINE__);
            }
        }
        $this->BidRetractionFeedbackPeriods = $bidRetractionFeedbackPeriods;
        return $this;
    }
    /**
     * Add item to BidRetractionFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToBidRetractionFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The BidRetractionFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BidRetractionFeedbackPeriods[] = $item;
        return $this;
    }
    /**
     * Get NegativeFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]|null
     */
    public function getNegativeFeedbackPeriods()
    {
        return $this->NegativeFeedbackPeriods;
    }
    /**
     * Set NegativeFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $negativeFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNegativeFeedbackPeriods(array $negativeFeedbackPeriods = array())
    {
        foreach ($negativeFeedbackPeriods as $feedbackHistoryTypeNegativeFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeNegativeFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The NegativeFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackHistoryTypeNegativeFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeNegativeFeedbackPeriodsItem) : gettype($feedbackHistoryTypeNegativeFeedbackPeriodsItem)), __LINE__);
            }
        }
        $this->NegativeFeedbackPeriods = $negativeFeedbackPeriods;
        return $this;
    }
    /**
     * Add item to NegativeFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToNegativeFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The NegativeFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NegativeFeedbackPeriods[] = $item;
        return $this;
    }
    /**
     * Get NeutralFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]|null
     */
    public function getNeutralFeedbackPeriods()
    {
        return $this->NeutralFeedbackPeriods;
    }
    /**
     * Set NeutralFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $neutralFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNeutralFeedbackPeriods(array $neutralFeedbackPeriods = array())
    {
        foreach ($neutralFeedbackPeriods as $feedbackHistoryTypeNeutralFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeNeutralFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The NeutralFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackHistoryTypeNeutralFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeNeutralFeedbackPeriodsItem) : gettype($feedbackHistoryTypeNeutralFeedbackPeriodsItem)), __LINE__);
            }
        }
        $this->NeutralFeedbackPeriods = $neutralFeedbackPeriods;
        return $this;
    }
    /**
     * Add item to NeutralFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToNeutralFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The NeutralFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NeutralFeedbackPeriods[] = $item;
        return $this;
    }
    /**
     * Get PositiveFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]|null
     */
    public function getPositiveFeedbackPeriods()
    {
        return $this->PositiveFeedbackPeriods;
    }
    /**
     * Set PositiveFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $positiveFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setPositiveFeedbackPeriods(array $positiveFeedbackPeriods = array())
    {
        foreach ($positiveFeedbackPeriods as $feedbackHistoryTypePositiveFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypePositiveFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The PositiveFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackHistoryTypePositiveFeedbackPeriodsItem) ? get_class($feedbackHistoryTypePositiveFeedbackPeriodsItem) : gettype($feedbackHistoryTypePositiveFeedbackPeriodsItem)), __LINE__);
            }
        }
        $this->PositiveFeedbackPeriods = $positiveFeedbackPeriods;
        return $this;
    }
    /**
     * Add item to PositiveFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToPositiveFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The PositiveFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PositiveFeedbackPeriods[] = $item;
        return $this;
    }
    /**
     * Get TotalFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]|null
     */
    public function getTotalFeedbackPeriods()
    {
        return $this->TotalFeedbackPeriods;
    }
    /**
     * Set TotalFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $totalFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setTotalFeedbackPeriods(array $totalFeedbackPeriods = array())
    {
        foreach ($totalFeedbackPeriods as $feedbackHistoryTypeTotalFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeTotalFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The TotalFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackHistoryTypeTotalFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeTotalFeedbackPeriodsItem) : gettype($feedbackHistoryTypeTotalFeedbackPeriodsItem)), __LINE__);
            }
        }
        $this->TotalFeedbackPeriods = $totalFeedbackPeriods;
        return $this;
    }
    /**
     * Add item to TotalFeedbackPeriods value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToTotalFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The TotalFeedbackPeriods property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TotalFeedbackPeriods[] = $item;
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * Get AverageRatingDetails value
     * @return \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[]|null
     */
    public function getAverageRatingDetails()
    {
        return $this->AverageRatingDetails;
    }
    /**
     * Set AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = array())
    {
        foreach ($averageRatingDetails as $feedbackHistoryTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeAverageRatingDetailsItem instanceof \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType, "%s" given', is_object($feedbackHistoryTypeAverageRatingDetailsItem) ? get_class($feedbackHistoryTypeAverageRatingDetailsItem) : gettype($feedbackHistoryTypeAverageRatingDetailsItem)), __LINE__);
            }
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToAverageRatingDetails(\macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
        return $this;
    }
    /**
     * Get NeutralCommentCountFromSuspendedUsers value
     * @return int|null
     */
    public function getNeutralCommentCountFromSuspendedUsers()
    {
        return $this->NeutralCommentCountFromSuspendedUsers;
    }
    /**
     * Set NeutralCommentCountFromSuspendedUsers value
     * @param int $neutralCommentCountFromSuspendedUsers
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers = null)
    {
        // validation for constraint: int
        if (!is_null($neutralCommentCountFromSuspendedUsers) && !is_numeric($neutralCommentCountFromSuspendedUsers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($neutralCommentCountFromSuspendedUsers)), __LINE__);
        }
        $this->NeutralCommentCountFromSuspendedUsers = $neutralCommentCountFromSuspendedUsers;
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
