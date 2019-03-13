<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPopularSearchesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>This call is deprecated.</b>
 * @subpackage Structs
 */
class FindPopularSearchesResponseType extends AbstractResponseType
{
    /**
     * The PopularSearchResult
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\PopularSearchesType[]
     */
    public $PopularSearchResult;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The TotalPages
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $TotalPages;
    /**
     * Constructor method for FindPopularSearchesResponseType
     * @uses FindPopularSearchesResponseType::setPopularSearchResult()
     * @uses FindPopularSearchesResponseType::setPageNumber()
     * @uses FindPopularSearchesResponseType::setTotalPages()
     * @param \macropage\ebaysdk\shopping\StructType\PopularSearchesType[] $popularSearchResult
     * @param int $pageNumber
     * @param int $totalPages
     */
    public function __construct(array $popularSearchResult = array(), $pageNumber = null, $totalPages = null)
    {
        $this
            ->setPopularSearchResult($popularSearchResult)
            ->setPageNumber($pageNumber)
            ->setTotalPages($totalPages);
    }
    /**
     * Get PopularSearchResult value
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType[]|null
     */
    public function getPopularSearchResult()
    {
        return $this->PopularSearchResult;
    }
    /**
     * Set PopularSearchResult value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PopularSearchesType[] $popularSearchResult
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesResponseType
     */
    public function setPopularSearchResult(array $popularSearchResult = array())
    {
        foreach ($popularSearchResult as $findPopularSearchesResponseTypePopularSearchResultItem) {
            // validation for constraint: itemType
            if (!$findPopularSearchesResponseTypePopularSearchResultItem instanceof \macropage\ebaysdk\shopping\StructType\PopularSearchesType) {
                throw new \InvalidArgumentException(sprintf('The PopularSearchResult property can only contain items of \macropage\ebaysdk\shopping\StructType\PopularSearchesType, "%s" given', is_object($findPopularSearchesResponseTypePopularSearchResultItem) ? get_class($findPopularSearchesResponseTypePopularSearchResultItem) : gettype($findPopularSearchesResponseTypePopularSearchResultItem)), __LINE__);
            }
        }
        $this->PopularSearchResult = $popularSearchResult;
        return $this;
    }
    /**
     * Add item to PopularSearchResult value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PopularSearchesType $item
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesResponseType
     */
    public function addToPopularSearchResult(\macropage\ebaysdk\shopping\StructType\PopularSearchesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\PopularSearchesType) {
            throw new \InvalidArgumentException(sprintf('The PopularSearchResult property can only contain items of \macropage\ebaysdk\shopping\StructType\PopularSearchesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PopularSearchResult[] = $item;
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
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesResponseType
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
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularSearchesResponseType
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
