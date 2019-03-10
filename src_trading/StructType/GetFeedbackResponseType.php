<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeedbackResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The <b>GetFeedback</b> response contains the feedback summary if a <b>TransactionID</b> or <b>ItemID</b> is specified, and contains the specified user's total feedback score and feedback summary data if a <b>UserID</b> is specified.
 * If no value is supplied, the feedback score and feedback summary for the requesting user will be returned. <br> If a detail level value of <b>ReturnAll</b> is specified, an array of all feedback records will be returned.
 * @subpackage Structs
 */
class GetFeedbackResponseType extends AbstractResponseType
{
    /**
     * The FeedbackDetailArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of
     * <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
     */
    public $FeedbackDetailArray;
    /**
     * The FeedbackDetailItemTotal
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of Feedback records returned in the the response. Only applicable if Feedback details are returned.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackDetailItemTotal;
    /**
     * The FeedbackSummary
     * Meta informations extracted from the WSDL
     * - documentation: Summary Feedback data for the user. Contains counts of positive, neutral, and negative Feedback for pre-defined time periods. Only applicable if Feedback details are returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackSummaryType
     */
    public $FeedbackSummary;
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total feedback score for the user.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackScore;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries. This is only applicable when a User ID or no ID (requester option) is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The EntriesPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of Feedback records that are being returned per page of data (i.e., per call). Only returned if entries are returned.
     * - minOccurs: 0
     * @var int
     */
    public $EntriesPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which page of data was just returned. Will be the same as the value specified in Pagination.PageNumber. (If the input is higher than the total number of pages, the call fails with an error.) Only returned if items are
     * returned.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * Constructor method for GetFeedbackResponseType
     * @uses GetFeedbackResponseType::setFeedbackDetailArray()
     * @uses GetFeedbackResponseType::setFeedbackDetailItemTotal()
     * @uses GetFeedbackResponseType::setFeedbackSummary()
     * @uses GetFeedbackResponseType::setFeedbackScore()
     * @uses GetFeedbackResponseType::setPaginationResult()
     * @uses GetFeedbackResponseType::setEntriesPerPage()
     * @uses GetFeedbackResponseType::setPageNumber()
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType $feedbackDetailArray
     * @param int $feedbackDetailItemTotal
     * @param \macropage\ebaysdk\trading\StructType\FeedbackSummaryType $feedbackSummary
     * @param int $feedbackScore
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param int $entriesPerPage
     * @param int $pageNumber
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType $feedbackDetailArray = null, $feedbackDetailItemTotal = null, \macropage\ebaysdk\trading\StructType\FeedbackSummaryType $feedbackSummary = null, $feedbackScore = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $entriesPerPage = null, $pageNumber = null)
    {
        $this
            ->setFeedbackDetailArray($feedbackDetailArray)
            ->setFeedbackDetailItemTotal($feedbackDetailItemTotal)
            ->setFeedbackSummary($feedbackSummary)
            ->setFeedbackScore($feedbackScore)
            ->setPaginationResult($paginationResult)
            ->setEntriesPerPage($entriesPerPage)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get FeedbackDetailArray value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType|null
     */
    public function getFeedbackDetailArray()
    {
        return $this->FeedbackDetailArray;
    }
    /**
     * Set FeedbackDetailArray value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType $feedbackDetailArray
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
     */
    public function setFeedbackDetailArray(\macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType $feedbackDetailArray = null)
    {
        $this->FeedbackDetailArray = $feedbackDetailArray;
        return $this;
    }
    /**
     * Get FeedbackDetailItemTotal value
     * @return int|null
     */
    public function getFeedbackDetailItemTotal()
    {
        return $this->FeedbackDetailItemTotal;
    }
    /**
     * Set FeedbackDetailItemTotal value
     * @param int $feedbackDetailItemTotal
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
     */
    public function setFeedbackDetailItemTotal($feedbackDetailItemTotal = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackDetailItemTotal) && !is_numeric($feedbackDetailItemTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feedbackDetailItemTotal)), __LINE__);
        }
        $this->FeedbackDetailItemTotal = $feedbackDetailItemTotal;
        return $this;
    }
    /**
     * Get FeedbackSummary value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackSummaryType|null
     */
    public function getFeedbackSummary()
    {
        return $this->FeedbackSummary;
    }
    /**
     * Set FeedbackSummary value
     * @param \macropage\ebaysdk\trading\StructType\FeedbackSummaryType $feedbackSummary
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
     */
    public function setFeedbackSummary(\macropage\ebaysdk\trading\StructType\FeedbackSummaryType $feedbackSummary = null)
    {
        $this->FeedbackSummary = $feedbackSummary;
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
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
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get EntriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage()
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
     */
    public function setEntriesPerPage($entriesPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !is_numeric($entriesPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackResponseType
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
