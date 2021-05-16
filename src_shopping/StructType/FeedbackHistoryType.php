<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackHistoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>FeedbackHistory</b> container that is returned in the <b>GetUserProfile</b> response. The <b>FeedbackHistory</b> container is only returned if an <b>IncludeSelector</b> field is included in the request with a
 * value set to <code>FeedbackHistory</code>. <br/><br/> The <b>FeedbackHistory</b> container consists of various statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral, and Negative, and Withdrawn
 * Feedback entries for predefined time periods, as well as Detaled Seller Ratings (if applicable to the eBay seller).
 * @subpackage Structs
 */
class FeedbackHistoryType extends AbstractStructBase
{
    /**
     * The BidRetractionFeedbackPeriods
     * Meta information extracted from the WSDL
     * - documentation: A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    protected array $BidRetractionFeedbackPeriods = [];
    /**
     * The NegativeFeedbackPeriods
     * Meta information extracted from the WSDL
     * - documentation: A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    protected array $NegativeFeedbackPeriods = [];
    /**
     * The NeutralFeedbackPeriods
     * Meta information extracted from the WSDL
     * - documentation: A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    protected array $NeutralFeedbackPeriods = [];
    /**
     * The PositiveFeedbackPeriods
     * Meta information extracted from the WSDL
     * - documentation: A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    protected array $PositiveFeedbackPeriods = [];
    /**
     * The TotalFeedbackPeriods
     * Meta information extracted from the WSDL
     * - documentation: A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    protected array $TotalFeedbackPeriods = [];
    /**
     * The UniqueNegativeFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Negative Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay
     * since eBay buyers cannot receive Negative feedback from their order partners.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNegativeFeedbackCount = null;
    /**
     * The UniquePositiveFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Positive Feedback entries that the specified eBay user has received (as a buyer or seller) from unique users, ever since the eBay user first registered on eBay.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniquePositiveFeedbackCount = null;
    /**
     * The AverageRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for
     * this particular Detailed Seller Rating type. <br/><br/> This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable
     * for all sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[]
     */
    protected array $AverageRatingDetails = [];
    /**
     * The NeutralCommentCountFromSuspendedUsers
     * Meta information extracted from the WSDL
     * - documentation: Number of Neutral comments received from suspended users. This field is only returned if applicable.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NeutralCommentCountFromSuspendedUsers = null;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Neutral Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay
     * since eBay buyers cannot receive Neutral feedback from their order partners. This field is only returned if applicable.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNeutralFeedbackCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $bidRetractionFeedbackPeriods = [], array $negativeFeedbackPeriods = [], array $neutralFeedbackPeriods = [], array $positiveFeedbackPeriods = [], array $totalFeedbackPeriods = [], ?int $uniqueNegativeFeedbackCount = null, ?int $uniquePositiveFeedbackCount = null, array $averageRatingDetails = [], ?int $neutralCommentCountFromSuspendedUsers = null, ?int $uniqueNeutralFeedbackCount = null, $any = null)
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public function getBidRetractionFeedbackPeriods(): array
    {
        return $this->BidRetractionFeedbackPeriods;
    }
    /**
     * This method is responsible for validating the values passed to the setBidRetractionFeedbackPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidRetractionFeedbackPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidRetractionFeedbackPeriodsForArrayConstraintsFromSetBidRetractionFeedbackPeriods(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeBidRetractionFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem), var_export($feedbackHistoryTypeBidRetractionFeedbackPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidRetractionFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BidRetractionFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $bidRetractionFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setBidRetractionFeedbackPeriods(array $bidRetractionFeedbackPeriods = []): self
    {
        // validation for constraint: array
        if ('' !== ($bidRetractionFeedbackPeriodsArrayErrorMessage = self::validateBidRetractionFeedbackPeriodsForArrayConstraintsFromSetBidRetractionFeedbackPeriods($bidRetractionFeedbackPeriods))) {
            throw new InvalidArgumentException($bidRetractionFeedbackPeriodsArrayErrorMessage, __LINE__);
        }
        $this->BidRetractionFeedbackPeriods = $bidRetractionFeedbackPeriods;
        
        return $this;
    }
    /**
     * Add item to BidRetractionFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToBidRetractionFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new InvalidArgumentException(sprintf('The BidRetractionFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidRetractionFeedbackPeriods[] = $item;
        
        return $this;
    }
    /**
     * Get NegativeFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public function getNegativeFeedbackPeriods(): array
    {
        return $this->NegativeFeedbackPeriods;
    }
    /**
     * This method is responsible for validating the values passed to the setNegativeFeedbackPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNegativeFeedbackPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNegativeFeedbackPeriodsForArrayConstraintsFromSetNegativeFeedbackPeriods(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypeNegativeFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeNegativeFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackHistoryTypeNegativeFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeNegativeFeedbackPeriodsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypeNegativeFeedbackPeriodsItem), var_export($feedbackHistoryTypeNegativeFeedbackPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NegativeFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NegativeFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $negativeFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNegativeFeedbackPeriods(array $negativeFeedbackPeriods = []): self
    {
        // validation for constraint: array
        if ('' !== ($negativeFeedbackPeriodsArrayErrorMessage = self::validateNegativeFeedbackPeriodsForArrayConstraintsFromSetNegativeFeedbackPeriods($negativeFeedbackPeriods))) {
            throw new InvalidArgumentException($negativeFeedbackPeriodsArrayErrorMessage, __LINE__);
        }
        $this->NegativeFeedbackPeriods = $negativeFeedbackPeriods;
        
        return $this;
    }
    /**
     * Add item to NegativeFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToNegativeFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new InvalidArgumentException(sprintf('The NegativeFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NegativeFeedbackPeriods[] = $item;
        
        return $this;
    }
    /**
     * Get NeutralFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public function getNeutralFeedbackPeriods(): array
    {
        return $this->NeutralFeedbackPeriods;
    }
    /**
     * This method is responsible for validating the values passed to the setNeutralFeedbackPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNeutralFeedbackPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNeutralFeedbackPeriodsForArrayConstraintsFromSetNeutralFeedbackPeriods(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypeNeutralFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeNeutralFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackHistoryTypeNeutralFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeNeutralFeedbackPeriodsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypeNeutralFeedbackPeriodsItem), var_export($feedbackHistoryTypeNeutralFeedbackPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NeutralFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NeutralFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $neutralFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNeutralFeedbackPeriods(array $neutralFeedbackPeriods = []): self
    {
        // validation for constraint: array
        if ('' !== ($neutralFeedbackPeriodsArrayErrorMessage = self::validateNeutralFeedbackPeriodsForArrayConstraintsFromSetNeutralFeedbackPeriods($neutralFeedbackPeriods))) {
            throw new InvalidArgumentException($neutralFeedbackPeriodsArrayErrorMessage, __LINE__);
        }
        $this->NeutralFeedbackPeriods = $neutralFeedbackPeriods;
        
        return $this;
    }
    /**
     * Add item to NeutralFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToNeutralFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new InvalidArgumentException(sprintf('The NeutralFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NeutralFeedbackPeriods[] = $item;
        
        return $this;
    }
    /**
     * Get PositiveFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public function getPositiveFeedbackPeriods(): array
    {
        return $this->PositiveFeedbackPeriods;
    }
    /**
     * This method is responsible for validating the values passed to the setPositiveFeedbackPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPositiveFeedbackPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositiveFeedbackPeriodsForArrayConstraintsFromSetPositiveFeedbackPeriods(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypePositiveFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypePositiveFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackHistoryTypePositiveFeedbackPeriodsItem) ? get_class($feedbackHistoryTypePositiveFeedbackPeriodsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypePositiveFeedbackPeriodsItem), var_export($feedbackHistoryTypePositiveFeedbackPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PositiveFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PositiveFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $positiveFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setPositiveFeedbackPeriods(array $positiveFeedbackPeriods = []): self
    {
        // validation for constraint: array
        if ('' !== ($positiveFeedbackPeriodsArrayErrorMessage = self::validatePositiveFeedbackPeriodsForArrayConstraintsFromSetPositiveFeedbackPeriods($positiveFeedbackPeriods))) {
            throw new InvalidArgumentException($positiveFeedbackPeriodsArrayErrorMessage, __LINE__);
        }
        $this->PositiveFeedbackPeriods = $positiveFeedbackPeriods;
        
        return $this;
    }
    /**
     * Add item to PositiveFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToPositiveFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new InvalidArgumentException(sprintf('The PositiveFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PositiveFeedbackPeriods[] = $item;
        
        return $this;
    }
    /**
     * Get TotalFeedbackPeriods value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[]
     */
    public function getTotalFeedbackPeriods(): array
    {
        return $this->TotalFeedbackPeriods;
    }
    /**
     * This method is responsible for validating the values passed to the setTotalFeedbackPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTotalFeedbackPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTotalFeedbackPeriodsForArrayConstraintsFromSetTotalFeedbackPeriods(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypeTotalFeedbackPeriodsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeTotalFeedbackPeriodsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
                $invalidValues[] = is_object($feedbackHistoryTypeTotalFeedbackPeriodsItem) ? get_class($feedbackHistoryTypeTotalFeedbackPeriodsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypeTotalFeedbackPeriodsItem), var_export($feedbackHistoryTypeTotalFeedbackPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TotalFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TotalFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType[] $totalFeedbackPeriods
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setTotalFeedbackPeriods(array $totalFeedbackPeriods = []): self
    {
        // validation for constraint: array
        if ('' !== ($totalFeedbackPeriodsArrayErrorMessage = self::validateTotalFeedbackPeriodsForArrayConstraintsFromSetTotalFeedbackPeriods($totalFeedbackPeriods))) {
            throw new InvalidArgumentException($totalFeedbackPeriodsArrayErrorMessage, __LINE__);
        }
        $this->TotalFeedbackPeriods = $totalFeedbackPeriods;
        
        return $this;
    }
    /**
     * Add item to TotalFeedbackPeriods value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToTotalFeedbackPeriods(\macropage\ebaysdk\shopping\StructType\FeedbackPeriodType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType) {
            throw new InvalidArgumentException(sprintf('The TotalFeedbackPeriods property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TotalFeedbackPeriods[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * Get AverageRatingDetails value
     * @return \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails(): array
    {
        return $this->AverageRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackHistoryTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$feedbackHistoryTypeAverageRatingDetailsItem instanceof \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType) {
                $invalidValues[] = is_object($feedbackHistoryTypeAverageRatingDetailsItem) ? get_class($feedbackHistoryTypeAverageRatingDetailsItem) : sprintf('%s(%s)', gettype($feedbackHistoryTypeAverageRatingDetailsItem), var_export($feedbackHistoryTypeAverageRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingDetails property can only contain items of type \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AverageRatingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($averageRatingDetailsArrayErrorMessage = self::validateAverageRatingDetailsForArrayConstraintsFromSetAverageRatingDetails($averageRatingDetails))) {
            throw new InvalidArgumentException($averageRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType $item
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function addToAverageRatingDetails(\macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType) {
            throw new InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of type \macropage\ebaysdk\shopping\StructType\AverageRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
        
        return $this;
    }
    /**
     * Get NeutralCommentCountFromSuspendedUsers value
     * @return int|null
     */
    public function getNeutralCommentCountFromSuspendedUsers(): ?int
    {
        return $this->NeutralCommentCountFromSuspendedUsers;
    }
    /**
     * Set NeutralCommentCountFromSuspendedUsers value
     * @param int $neutralCommentCountFromSuspendedUsers
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public function setNeutralCommentCountFromSuspendedUsers(?int $neutralCommentCountFromSuspendedUsers = null): self
    {
        // validation for constraint: int
        if (!is_null($neutralCommentCountFromSuspendedUsers) && !(is_int($neutralCommentCountFromSuspendedUsers) || ctype_digit($neutralCommentCountFromSuspendedUsers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($neutralCommentCountFromSuspendedUsers, true), gettype($neutralCommentCountFromSuspendedUsers)), __LINE__);
        }
        $this->NeutralCommentCountFromSuspendedUsers = $neutralCommentCountFromSuspendedUsers;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
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
