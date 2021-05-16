<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also
 * conveys counts of bid retractions for the predefined time periods.
 * @subpackage Structs
 */
class FeedbackSummaryType extends AbstractStructBase
{
    /**
     * The BidRetractionFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Bid retractions count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray = null;
    /**
     * The NegativeFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Negative feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $NegativeFeedbackPeriodArray = null;
    /**
     * The NeutralFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Neutral feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $NeutralFeedbackPeriodArray = null;
    /**
     * The PositiveFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Positive feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $PositiveFeedbackPeriodArray = null;
    /**
     * The TotalFeedbackPeriodArray
     * Meta information extracted from the WSDL
     * - documentation: Total feedback score, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $TotalFeedbackPeriodArray = null;
    /**
     * The NeutralCommentCountFromSuspendedUsers
     * Meta information extracted from the WSDL
     * - documentation: Number of neutral comments received from suspended users. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NeutralCommentCountFromSuspendedUsers = null;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNegativeFeedbackCount = null;
    /**
     * The UniquePositiveFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniquePositiveFeedbackCount = null;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta information extracted from the WSDL
     * - documentation: Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueNeutralFeedbackCount = null;
    /**
     * The SellerRatingSummaryArray
     * Meta information extracted from the WSDL
     * - documentation: Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area
     * (i.e., to the average of ratings in the item-description area, etc.). The DSR feature is available on the United Kingdom site and on the following other sites: AU (site ID 15), BEFR (site ID 23), BENL (site ID 123), FR (site ID 71), IE (site ID 205),
     * IN (site ID 203), IT (site ID 101), and PL (site ID 212). The DSR feature is available on the other API-enabled country sites, including the US site (site ID 0).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $SellerRatingSummaryArray = null;
    /**
     * The SellerRoleMetrics
     * Meta information extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $SellerRoleMetrics = null;
    /**
     * The BuyerRoleMetrics
     * Meta information extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $BuyerRoleMetrics = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FeedbackSummaryType
     * @uses FeedbackSummaryType::setBidRetractionFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNegativeFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNeutralFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setPositiveFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setTotalFeedbackPeriodArray()
     * @uses FeedbackSummaryType::setNeutralCommentCountFromSuspendedUsers()
     * @uses FeedbackSummaryType::setUniqueNegativeFeedbackCount()
     * @uses FeedbackSummaryType::setUniquePositiveFeedbackCount()
     * @uses FeedbackSummaryType::setUniqueNeutralFeedbackCount()
     * @uses FeedbackSummaryType::setSellerRatingSummaryArray()
     * @uses FeedbackSummaryType::setSellerRoleMetrics()
     * @uses FeedbackSummaryType::setBuyerRoleMetrics()
     * @uses FeedbackSummaryType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray
     * @param int $neutralCommentCountFromSuspendedUsers
     * @param int $uniqueNegativeFeedbackCount
     * @param int $uniquePositiveFeedbackCount
     * @param int $uniqueNeutralFeedbackCount
     * @param \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray
     * @param \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics
     * @param \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null, ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null, ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null, ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null, ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null, ?int $neutralCommentCountFromSuspendedUsers = null, ?int $uniqueNegativeFeedbackCount = null, ?int $uniquePositiveFeedbackCount = null, ?int $uniqueNeutralFeedbackCount = null, ?\macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null, ?\macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics = null, ?\macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics = null, $any = null)
    {
        $this
            ->setBidRetractionFeedbackPeriodArray($bidRetractionFeedbackPeriodArray)
            ->setNegativeFeedbackPeriodArray($negativeFeedbackPeriodArray)
            ->setNeutralFeedbackPeriodArray($neutralFeedbackPeriodArray)
            ->setPositiveFeedbackPeriodArray($positiveFeedbackPeriodArray)
            ->setTotalFeedbackPeriodArray($totalFeedbackPeriodArray)
            ->setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers)
            ->setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
            ->setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
            ->setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
            ->setSellerRatingSummaryArray($sellerRatingSummaryArray)
            ->setSellerRoleMetrics($sellerRoleMetrics)
            ->setBuyerRoleMetrics($buyerRoleMetrics)
            ->setAny($any);
    }
    /**
     * Get BidRetractionFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getBidRetractionFeedbackPeriodArray(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
    {
        return $this->BidRetractionFeedbackPeriodArray;
    }
    /**
     * Set BidRetractionFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setBidRetractionFeedbackPeriodArray(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null): self
    {
        $this->BidRetractionFeedbackPeriodArray = $bidRetractionFeedbackPeriodArray;
        
        return $this;
    }
    /**
     * Get NegativeFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNegativeFeedbackPeriodArray(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
    {
        return $this->NegativeFeedbackPeriodArray;
    }
    /**
     * Set NegativeFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setNegativeFeedbackPeriodArray(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null): self
    {
        $this->NegativeFeedbackPeriodArray = $negativeFeedbackPeriodArray;
        
        return $this;
    }
    /**
     * Get NeutralFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNeutralFeedbackPeriodArray(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
    {
        return $this->NeutralFeedbackPeriodArray;
    }
    /**
     * Set NeutralFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setNeutralFeedbackPeriodArray(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null): self
    {
        $this->NeutralFeedbackPeriodArray = $neutralFeedbackPeriodArray;
        
        return $this;
    }
    /**
     * Get PositiveFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getPositiveFeedbackPeriodArray(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
    {
        return $this->PositiveFeedbackPeriodArray;
    }
    /**
     * Set PositiveFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setPositiveFeedbackPeriodArray(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null): self
    {
        $this->PositiveFeedbackPeriodArray = $positiveFeedbackPeriodArray;
        
        return $this;
    }
    /**
     * Get TotalFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getTotalFeedbackPeriodArray(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
    {
        return $this->TotalFeedbackPeriodArray;
    }
    /**
     * Set TotalFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setTotalFeedbackPeriodArray(?\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null): self
    {
        $this->TotalFeedbackPeriodArray = $totalFeedbackPeriodArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * Get SellerRatingSummaryArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType|null
     */
    public function getSellerRatingSummaryArray(): ?\macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
    {
        return $this->SellerRatingSummaryArray;
    }
    /**
     * Set SellerRatingSummaryArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setSellerRatingSummaryArray(?\macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null): self
    {
        $this->SellerRatingSummaryArray = $sellerRatingSummaryArray;
        
        return $this;
    }
    /**
     * Get SellerRoleMetrics value
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType|null
     */
    public function getSellerRoleMetrics(): ?\macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
    {
        return $this->SellerRoleMetrics;
    }
    /**
     * Set SellerRoleMetrics value
     * @param \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setSellerRoleMetrics(?\macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics = null): self
    {
        $this->SellerRoleMetrics = $sellerRoleMetrics;
        
        return $this;
    }
    /**
     * Get BuyerRoleMetrics value
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType|null
     */
    public function getBuyerRoleMetrics(): ?\macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
    {
        return $this->BuyerRoleMetrics;
    }
    /**
     * Set BuyerRoleMetrics value
     * @param \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setBuyerRoleMetrics(?\macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics = null): self
    {
        $this->BuyerRoleMetrics = $buyerRoleMetrics;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
