<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReviewsAndGuidesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>FindReviewsAndGuides</b> call is deprecated. </span>
 * @subpackage Structs
 */
class FindReviewsAndGuidesRequestType extends AbstractRequestType
{
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public $ProductID;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The MaxResultsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $MaxResultsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReviewSort
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ReviewSort;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SortOrder;
    /**
     * Constructor method for FindReviewsAndGuidesRequestType
     * @uses FindReviewsAndGuidesRequestType::setProductID()
     * @uses FindReviewsAndGuidesRequestType::setUserID()
     * @uses FindReviewsAndGuidesRequestType::setCategoryID()
     * @uses FindReviewsAndGuidesRequestType::setMaxResultsPerPage()
     * @uses FindReviewsAndGuidesRequestType::setPageNumber()
     * @uses FindReviewsAndGuidesRequestType::setReviewSort()
     * @uses FindReviewsAndGuidesRequestType::setSortOrder()
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param string $userID
     * @param string $categoryID
     * @param int $maxResultsPerPage
     * @param int $pageNumber
     * @param string $reviewSort
     * @param string $sortOrder
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $userID = null, $categoryID = null, $maxResultsPerPage = null, $pageNumber = null, $reviewSort = null, $sortOrder = null)
    {
        $this
            ->setProductID($productID)
            ->setUserID($userID)
            ->setCategoryID($categoryID)
            ->setMaxResultsPerPage($maxResultsPerPage)
            ->setPageNumber($pageNumber)
            ->setReviewSort($reviewSort)
            ->setSortOrder($sortOrder);
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
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
     */
    public function setProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null)
    {
        $this->ProductID = $productID;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
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
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get MaxResultsPerPage value
     * @return int|null
     */
    public function getMaxResultsPerPage()
    {
        return $this->MaxResultsPerPage;
    }
    /**
     * Set MaxResultsPerPage value
     * @param int $maxResultsPerPage
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
     */
    public function setMaxResultsPerPage($maxResultsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($maxResultsPerPage) && !is_numeric($maxResultsPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxResultsPerPage)), __LINE__);
        }
        $this->MaxResultsPerPage = $maxResultsPerPage;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
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
     * Get ReviewSort value
     * @return string|null
     */
    public function getReviewSort()
    {
        return $this->ReviewSort;
    }
    /**
     * Set ReviewSort value
     * @uses \macropage\ebaysdk\shopping\EnumType\ReviewSortCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ReviewSortCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reviewSort
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
     */
    public function setReviewSort($reviewSort = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ReviewSortCodeType::valueIsValid($reviewSort)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reviewSort, implode(', ', \macropage\ebaysdk\shopping\EnumType\ReviewSortCodeType::getValidValues())), __LINE__);
        }
        $this->ReviewSort = $reviewSort;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \macropage\ebaysdk\shopping\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindReviewsAndGuidesRequestType
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
