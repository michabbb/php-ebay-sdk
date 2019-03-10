<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsForFavoriteSearchRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reserved for future use.
 * @subpackage Structs
 */
class FindItemsForFavoriteSearchRequest extends BaseServiceRequest
{
    /**
     * The searchId
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $searchId;
    /**
     * The searchName
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $searchName;
    /**
     * The startTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $startTimeFrom;
    /**
     * The paginationInput
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\PaginationInput
     */
    public $paginationInput;
    /**
     * Constructor method for FindItemsForFavoriteSearchRequest
     * @uses FindItemsForFavoriteSearchRequest::setSearchId()
     * @uses FindItemsForFavoriteSearchRequest::setSearchName()
     * @uses FindItemsForFavoriteSearchRequest::setStartTimeFrom()
     * @uses FindItemsForFavoriteSearchRequest::setPaginationInput()
     * @param int $searchId
     * @param string $searchName
     * @param string $startTimeFrom
     * @param \macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput
     */
    public function __construct($searchId = null, $searchName = null, $startTimeFrom = null, \macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput = null)
    {
        $this
            ->setSearchId($searchId)
            ->setSearchName($searchName)
            ->setStartTimeFrom($startTimeFrom)
            ->setPaginationInput($paginationInput);
    }
    /**
     * Get searchId value
     * @return int|null
     */
    public function getSearchId()
    {
        return $this->searchId;
    }
    /**
     * Set searchId value
     * @param int $searchId
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest
     */
    public function setSearchId($searchId = null)
    {
        // validation for constraint: int
        if (!is_null($searchId) && !is_numeric($searchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($searchId)), __LINE__);
        }
        $this->searchId = $searchId;
        return $this;
    }
    /**
     * Get searchName value
     * @return string|null
     */
    public function getSearchName()
    {
        return $this->searchName;
    }
    /**
     * Set searchName value
     * @param string $searchName
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest
     */
    public function setSearchName($searchName = null)
    {
        // validation for constraint: string
        if (!is_null($searchName) && !is_string($searchName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchName)), __LINE__);
        }
        $this->searchName = $searchName;
        return $this;
    }
    /**
     * Get startTimeFrom value
     * @return string|null
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }
    /**
     * Set startTimeFrom value
     * @param string $startTimeFrom
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest
     */
    public function setStartTimeFrom($startTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom) && !is_string($startTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTimeFrom)), __LINE__);
        }
        $this->startTimeFrom = $startTimeFrom;
        return $this;
    }
    /**
     * Get paginationInput value
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput|null
     */
    public function getPaginationInput()
    {
        return $this->paginationInput;
    }
    /**
     * Set paginationInput value
     * @param \macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest
     */
    public function setPaginationInput(\macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput = null)
    {
        $this->paginationInput = $paginationInput;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchRequest
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
