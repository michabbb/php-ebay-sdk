<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReviewsAndGuidesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>FindReviewsAndGuides</b> call is deprecated. </span>
 * @subpackage Structs
 */
class FindReviewsAndGuidesResponseType extends AbstractResponseType
{
    /**
     * The ReviewCount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ReviewCount;
    /**
     * The BuyingGuideCount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $BuyingGuideCount;
    /**
     * The ReviewerRank
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ReviewerRank;
    /**
     * The TotalHelpfulnessVotes
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TotalHelpfulnessVotes;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public $ProductID;
    /**
     * The ReviewsAndGuidesURL
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ReviewsAndGuidesURL;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The TotalPages
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TotalPages;
    /**
     * The BuyingGuideDetails
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public $BuyingGuideDetails;
    /**
     * The ReviewDetails
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ReviewDetailsType
     */
    public $ReviewDetails;
    /**
     * The PositiveHelpfulnessVotes
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PositiveHelpfulnessVotes;
    /**
     * Constructor method for FindReviewsAndGuidesResponseType
     * @uses FindReviewsAndGuidesResponseType::setReviewCount()
     * @uses FindReviewsAndGuidesResponseType::setBuyingGuideCount()
     * @uses FindReviewsAndGuidesResponseType::setReviewerRank()
     * @uses FindReviewsAndGuidesResponseType::setTotalHelpfulnessVotes()
     * @uses FindReviewsAndGuidesResponseType::setProductID()
     * @uses FindReviewsAndGuidesResponseType::setReviewsAndGuidesURL()
     * @uses FindReviewsAndGuidesResponseType::setPageNumber()
     * @uses FindReviewsAndGuidesResponseType::setTotalPages()
     * @uses FindReviewsAndGuidesResponseType::setBuyingGuideDetails()
     * @uses FindReviewsAndGuidesResponseType::setReviewDetails()
     * @uses FindReviewsAndGuidesResponseType::setPositiveHelpfulnessVotes()
     * @param int $reviewCount
     * @param int $buyingGuideCount
     * @param int $reviewerRank
     * @param int $totalHelpfulnessVotes
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param string $reviewsAndGuidesURL
     * @param int $pageNumber
     * @param int $totalPages
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType $buyingGuideDetails
     * @param \macropage\ebaysdk\shopping\StructType\ReviewDetailsType $reviewDetails
     * @param int $positiveHelpfulnessVotes
     */
    public function __construct($reviewCount = null, $buyingGuideCount = null, $reviewerRank = null, $totalHelpfulnessVotes = null, \macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $reviewsAndGuidesURL = null, $pageNumber = null, $totalPages = null, \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType $buyingGuideDetails = null, \macropage\ebaysdk\shopping\StructType\ReviewDetailsType $reviewDetails = null, $positiveHelpfulnessVotes = null)
    {
        $this
            ->setReviewCount($reviewCount)
            ->setBuyingGuideCount($buyingGuideCount)
            ->setReviewerRank($reviewerRank)
            ->setTotalHelpfulnessVotes($totalHelpfulnessVotes)
            ->setProductID($productID)
            ->setReviewsAndGuidesURL($reviewsAndGuidesURL)
            ->setPageNumber($pageNumber)
            ->setTotalPages($totalPages)
            ->setBuyingGuideDetails($buyingGuideDetails)
            ->setReviewDetails($reviewDetails)
            ->setPositiveHelpfulnessVotes($positiveHelpfulnessVotes);
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setReviewCount($reviewCount = null)
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !is_numeric($reviewCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
        return $this;
    }
    /**
     * Get BuyingGuideCount value
     * @return int|null
     */
    public function getBuyingGuideCount()
    {
        return $this->BuyingGuideCount;
    }
    /**
     * Set BuyingGuideCount value
     * @param int $buyingGuideCount
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setBuyingGuideCount($buyingGuideCount = null)
    {
        // validation for constraint: int
        if (!is_null($buyingGuideCount) && !is_numeric($buyingGuideCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buyingGuideCount)), __LINE__);
        }
        $this->BuyingGuideCount = $buyingGuideCount;
        return $this;
    }
    /**
     * Get ReviewerRank value
     * @return int|null
     */
    public function getReviewerRank()
    {
        return $this->ReviewerRank;
    }
    /**
     * Set ReviewerRank value
     * @param int $reviewerRank
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setReviewerRank($reviewerRank = null)
    {
        // validation for constraint: int
        if (!is_null($reviewerRank) && !is_numeric($reviewerRank)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reviewerRank)), __LINE__);
        }
        $this->ReviewerRank = $reviewerRank;
        return $this;
    }
    /**
     * Get TotalHelpfulnessVotes value
     * @return int|null
     */
    public function getTotalHelpfulnessVotes()
    {
        return $this->TotalHelpfulnessVotes;
    }
    /**
     * Set TotalHelpfulnessVotes value
     * @param int $totalHelpfulnessVotes
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setTotalHelpfulnessVotes($totalHelpfulnessVotes = null)
    {
        // validation for constraint: int
        if (!is_null($totalHelpfulnessVotes) && !is_numeric($totalHelpfulnessVotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalHelpfulnessVotes)), __LINE__);
        }
        $this->TotalHelpfulnessVotes = $totalHelpfulnessVotes;
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null)
    {
        $this->ProductID = $productID;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
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
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get TotalPages value
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->TotalPages;
    }
    /**
     * Set TotalPages value
     * @param int $totalPages
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setTotalPages($totalPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalPages) && !is_numeric($totalPages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPages)), __LINE__);
        }
        $this->TotalPages = $totalPages;
        return $this;
    }
    /**
     * Get BuyingGuideDetails value
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType|null
     */
    public function getBuyingGuideDetails()
    {
        return $this->BuyingGuideDetails;
    }
    /**
     * Set BuyingGuideDetails value
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType $buyingGuideDetails
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setBuyingGuideDetails(\macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType $buyingGuideDetails = null)
    {
        $this->BuyingGuideDetails = $buyingGuideDetails;
        return $this;
    }
    /**
     * Get ReviewDetails value
     * @return \macropage\ebaysdk\shopping\StructType\ReviewDetailsType|null
     */
    public function getReviewDetails()
    {
        return $this->ReviewDetails;
    }
    /**
     * Set ReviewDetails value
     * @param \macropage\ebaysdk\shopping\StructType\ReviewDetailsType $reviewDetails
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setReviewDetails(\macropage\ebaysdk\shopping\StructType\ReviewDetailsType $reviewDetails = null)
    {
        $this->ReviewDetails = $reviewDetails;
        return $this;
    }
    /**
     * Get PositiveHelpfulnessVotes value
     * @return int|null
     */
    public function getPositiveHelpfulnessVotes()
    {
        return $this->PositiveHelpfulnessVotes;
    }
    /**
     * Set PositiveHelpfulnessVotes value
     * @param int $positiveHelpfulnessVotes
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
     */
    public function setPositiveHelpfulnessVotes($positiveHelpfulnessVotes = null)
    {
        // validation for constraint: int
        if (!is_null($positiveHelpfulnessVotes) && !is_numeric($positiveHelpfulnessVotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($positiveHelpfulnessVotes)), __LINE__);
        }
        $this->PositiveHelpfulnessVotes = $positiveHelpfulnessVotes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesResponseType
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
