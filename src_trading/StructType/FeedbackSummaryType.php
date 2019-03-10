<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also
 * conveys counts of bid retractions for the predefined time periods.
 * @subpackage Structs
 */
class FeedbackSummaryType extends AbstractStructBase
{
    /**
     * The BidRetractionFeedbackPeriodArray
     * Meta informations extracted from the WSDL
     * - documentation: Bid retractions count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public $BidRetractionFeedbackPeriodArray;
    /**
     * The NegativeFeedbackPeriodArray
     * Meta informations extracted from the WSDL
     * - documentation: Negative feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public $NegativeFeedbackPeriodArray;
    /**
     * The NeutralFeedbackPeriodArray
     * Meta informations extracted from the WSDL
     * - documentation: Neutral feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public $NeutralFeedbackPeriodArray;
    /**
     * The PositiveFeedbackPeriodArray
     * Meta informations extracted from the WSDL
     * - documentation: Positive feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public $PositiveFeedbackPeriodArray;
    /**
     * The TotalFeedbackPeriodArray
     * Meta informations extracted from the WSDL
     * - documentation: Total feedback score, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public $TotalFeedbackPeriodArray;
    /**
     * The NeutralCommentCountFromSuspendedUsers
     * Meta informations extracted from the WSDL
     * - documentation: Number of neutral comments received from suspended users. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralCommentCountFromSuspendedUsers;
    /**
     * The UniqueNegativeFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * The UniquePositiveFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniquePositiveFeedbackCount;
    /**
     * The UniqueNeutralFeedbackCount
     * Meta informations extracted from the WSDL
     * - documentation: Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueNeutralFeedbackCount;
    /**
     * The SellerRatingSummaryArray
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area
     * (i.e., to the average of ratings in the item-description area, etc.). The DSR feature is available on the United Kingdom site and on the following other sites: AU (site ID 15), BEFR (site ID 23), BENL (site ID 123), FR (site ID 71), IE (site ID 205),
     * IN (site ID 203), IT (site ID 101), and PL (site ID 212). The DSR feature is available on the other API-enabled country sites, including the US site (site ID 0).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
     */
    public $SellerRatingSummaryArray;
    /**
     * The SellerRoleMetrics
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public $SellerRoleMetrics;
    /**
     * The BuyerRoleMetrics
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about 1 year feedback metric as buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
     */
    public $BuyerRoleMetrics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null, \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null, \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null, \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null, \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null, $neutralCommentCountFromSuspendedUsers = null, $uniqueNegativeFeedbackCount = null, $uniquePositiveFeedbackCount = null, $uniqueNeutralFeedbackCount = null, \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null, \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics = null, \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics = null, \DOMDocument $any = null)
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
    public function getBidRetractionFeedbackPeriodArray()
    {
        return $this->BidRetractionFeedbackPeriodArray;
    }
    /**
     * Set BidRetractionFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setBidRetractionFeedbackPeriodArray(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $bidRetractionFeedbackPeriodArray = null)
    {
        $this->BidRetractionFeedbackPeriodArray = $bidRetractionFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get NegativeFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNegativeFeedbackPeriodArray()
    {
        return $this->NegativeFeedbackPeriodArray;
    }
    /**
     * Set NegativeFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setNegativeFeedbackPeriodArray(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $negativeFeedbackPeriodArray = null)
    {
        $this->NegativeFeedbackPeriodArray = $negativeFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get NeutralFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getNeutralFeedbackPeriodArray()
    {
        return $this->NeutralFeedbackPeriodArray;
    }
    /**
     * Set NeutralFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setNeutralFeedbackPeriodArray(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $neutralFeedbackPeriodArray = null)
    {
        $this->NeutralFeedbackPeriodArray = $neutralFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get PositiveFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getPositiveFeedbackPeriodArray()
    {
        return $this->PositiveFeedbackPeriodArray;
    }
    /**
     * Set PositiveFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setPositiveFeedbackPeriodArray(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $positiveFeedbackPeriodArray = null)
    {
        $this->PositiveFeedbackPeriodArray = $positiveFeedbackPeriodArray;
        return $this;
    }
    /**
     * Get TotalFeedbackPeriodArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType|null
     */
    public function getTotalFeedbackPeriodArray()
    {
        return $this->TotalFeedbackPeriodArray;
    }
    /**
     * Set TotalFeedbackPeriodArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setTotalFeedbackPeriodArray(\macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType $totalFeedbackPeriodArray = null)
    {
        $this->TotalFeedbackPeriodArray = $totalFeedbackPeriodArray;
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * Get SellerRatingSummaryArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType|null
     */
    public function getSellerRatingSummaryArray()
    {
        return $this->SellerRatingSummaryArray;
    }
    /**
     * Set SellerRatingSummaryArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setSellerRatingSummaryArray(\macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType $sellerRatingSummaryArray = null)
    {
        $this->SellerRatingSummaryArray = $sellerRatingSummaryArray;
        return $this;
    }
    /**
     * Get SellerRoleMetrics value
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType|null
     */
    public function getSellerRoleMetrics()
    {
        return $this->SellerRoleMetrics;
    }
    /**
     * Set SellerRoleMetrics value
     * @param \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setSellerRoleMetrics(\macropage\ebaysdk\trading\StructType\SellerRoleMetricsType $sellerRoleMetrics = null)
    {
        $this->SellerRoleMetrics = $sellerRoleMetrics;
        return $this;
    }
    /**
     * Get BuyerRoleMetrics value
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType|null
     */
    public function getBuyerRoleMetrics()
    {
        return $this->BuyerRoleMetrics;
    }
    /**
     * Set BuyerRoleMetrics value
     * @param \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public function setBuyerRoleMetrics(\macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType $buyerRoleMetrics = null)
    {
        $this->BuyerRoleMetrics = $buyerRoleMetrics;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeedbackSummaryType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
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
