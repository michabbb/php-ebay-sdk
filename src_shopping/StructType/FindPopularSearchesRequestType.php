<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPopularSearchesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>This call is deprecated.</b>
 * @subpackage Structs
 */
class FindPopularSearchesRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryID;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $QueryKeywords;
    /**
     * The MaxKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $MaxKeywords;
    /**
     * The MaxResultsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $MaxResultsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The IncludeChildCategories
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeChildCategories;
    /**
     * Constructor method for FindPopularSearchesRequestType
     * @uses FindPopularSearchesRequestType::setCategoryID()
     * @uses FindPopularSearchesRequestType::setQueryKeywords()
     * @uses FindPopularSearchesRequestType::setMaxKeywords()
     * @uses FindPopularSearchesRequestType::setMaxResultsPerPage()
     * @uses FindPopularSearchesRequestType::setPageNumber()
     * @uses FindPopularSearchesRequestType::setIncludeChildCategories()
     * @param string[] $categoryID
     * @param string[] $queryKeywords
     * @param int $maxKeywords
     * @param int $maxResultsPerPage
     * @param int $pageNumber
     * @param bool $includeChildCategories
     */
    public function __construct(array $categoryID = array(), array $queryKeywords = array(), $maxKeywords = null, $maxResultsPerPage = null, $pageNumber = null, $includeChildCategories = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setQueryKeywords($queryKeywords)
            ->setMaxKeywords($maxKeywords)
            ->setMaxResultsPerPage($maxResultsPerPage)
            ->setPageNumber($pageNumber)
            ->setIncludeChildCategories($includeChildCategories);
    }
    /**
     * Get CategoryID value
     * @return string[]|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @throws \InvalidArgumentException
     * @param string[] $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function setCategoryID(array $categoryID = array())
    {
        foreach ($categoryID as $findPopularSearchesRequestTypeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($findPopularSearchesRequestTypeCategoryIDItem)) {
                throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($findPopularSearchesRequestTypeCategoryIDItem) ? get_class($findPopularSearchesRequestTypeCategoryIDItem) : gettype($findPopularSearchesRequestTypeCategoryIDItem)), __LINE__);
            }
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Add item to CategoryID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function addToCategoryID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryID[] = $item;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string[]|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @throws \InvalidArgumentException
     * @param string[] $queryKeywords
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function setQueryKeywords(array $queryKeywords = array())
    {
        foreach ($queryKeywords as $findPopularSearchesRequestTypeQueryKeywordsItem) {
            // validation for constraint: itemType
            if (!is_string($findPopularSearchesRequestTypeQueryKeywordsItem)) {
                throw new \InvalidArgumentException(sprintf('The QueryKeywords property can only contain items of string, "%s" given', is_object($findPopularSearchesRequestTypeQueryKeywordsItem) ? get_class($findPopularSearchesRequestTypeQueryKeywordsItem) : gettype($findPopularSearchesRequestTypeQueryKeywordsItem)), __LINE__);
            }
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Add item to QueryKeywords value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function addToQueryKeywords($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The QueryKeywords property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueryKeywords[] = $item;
        return $this;
    }
    /**
     * Get MaxKeywords value
     * @return int|null
     */
    public function getMaxKeywords()
    {
        return $this->MaxKeywords;
    }
    /**
     * Set MaxKeywords value
     * @param int $maxKeywords
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function setMaxKeywords($maxKeywords = null)
    {
        // validation for constraint: int
        if (!is_null($maxKeywords) && !is_numeric($maxKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxKeywords)), __LINE__);
        }
        $this->MaxKeywords = $maxKeywords;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
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
     * Get IncludeChildCategories value
     * @return bool|null
     */
    public function getIncludeChildCategories()
    {
        return $this->IncludeChildCategories;
    }
    /**
     * Set IncludeChildCategories value
     * @param bool $includeChildCategories
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
     */
    public function setIncludeChildCategories($includeChildCategories = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeChildCategories) && !is_bool($includeChildCategories)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeChildCategories)), __LINE__);
        }
        $this->IncludeChildCategories = $includeChildCategories;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesRequestType
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
