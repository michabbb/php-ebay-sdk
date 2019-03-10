<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a list of disputes that involve the calling user as buyer or seller, in response to a <b>GetUserDisputesRequest</b>.
 * @subpackage Structs
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * The StartingDisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are
     * returned per page: The first page returns a <b>StartingDisputeID</b> value of 1 and the second page returns a <b>StartingDisputeID</b> value of 201. | An identifier of a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not
     * eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $StartingDisputeID;
    /**
     * The EndingDisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned
     * per page: The first page returns an <b>EndingDisputeID</b> value of 200 and the second page returns an <b>EndingDisputeID</b> value of 228. | An identifier of a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay
     * money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EndingDisputeID;
    /**
     * The DisputeArray
     * Meta informations extracted from the WSDL
     * - documentation: The array of disputes returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
     */
    public $DisputeArray;
    /**
     * The ItemsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: The number of disputes on each virtual page in the result set. The virtual page returned is determined by <b>PageNumber</b>.
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: The page of the total result set returned in the call. The entire result set is virtual and the call returns only one page of it.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The DisputeFilterCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of disputes that involve the requester as buyer or seller and match a given filter type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[]
     */
    public $DisputeFilterCount;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: The result of the pagination, including the total number of virtual pages in the result set and the total number of disputes returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetUserDisputesResponseType
     * @uses GetUserDisputesResponseType::setStartingDisputeID()
     * @uses GetUserDisputesResponseType::setEndingDisputeID()
     * @uses GetUserDisputesResponseType::setDisputeArray()
     * @uses GetUserDisputesResponseType::setItemsPerPage()
     * @uses GetUserDisputesResponseType::setPageNumber()
     * @uses GetUserDisputesResponseType::setDisputeFilterCount()
     * @uses GetUserDisputesResponseType::setPaginationResult()
     * @param string $startingDisputeID
     * @param string $endingDisputeID
     * @param \macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[] $disputeFilterCount
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct($startingDisputeID = null, $endingDisputeID = null, \macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray = null, $itemsPerPage = null, $pageNumber = null, array $disputeFilterCount = array(), \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setStartingDisputeID($startingDisputeID)
            ->setEndingDisputeID($endingDisputeID)
            ->setDisputeArray($disputeArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setDisputeFilterCount($disputeFilterCount)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get StartingDisputeID value
     * @return string|null
     */
    public function getStartingDisputeID()
    {
        return $this->StartingDisputeID;
    }
    /**
     * Set StartingDisputeID value
     * @param string $startingDisputeID
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setStartingDisputeID($startingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($startingDisputeID) && !is_string($startingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startingDisputeID)), __LINE__);
        }
        $this->StartingDisputeID = $startingDisputeID;
        return $this;
    }
    /**
     * Get EndingDisputeID value
     * @return string|null
     */
    public function getEndingDisputeID()
    {
        return $this->EndingDisputeID;
    }
    /**
     * Set EndingDisputeID value
     * @param string $endingDisputeID
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setEndingDisputeID($endingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($endingDisputeID) && !is_string($endingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endingDisputeID)), __LINE__);
        }
        $this->EndingDisputeID = $endingDisputeID;
        return $this;
    }
    /**
     * Get DisputeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType|null
     */
    public function getDisputeArray()
    {
        return $this->DisputeArray;
    }
    /**
     * Set DisputeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setDisputeArray(\macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray = null)
    {
        $this->DisputeArray = $disputeArray;
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setItemsPerPage($itemsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !is_numeric($itemsPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
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
     * Get DisputeFilterCount value
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[]|null
     */
    public function getDisputeFilterCount()
    {
        return $this->DisputeFilterCount;
    }
    /**
     * Set DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[] $disputeFilterCount
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setDisputeFilterCount(array $disputeFilterCount = array())
    {
        foreach ($disputeFilterCount as $getUserDisputesResponseTypeDisputeFilterCountItem) {
            // validation for constraint: itemType
            if (!$getUserDisputesResponseTypeDisputeFilterCountItem instanceof \macropage\ebaysdk\trading\StructType\DisputeFilterCountType) {
                throw new \InvalidArgumentException(sprintf('The DisputeFilterCount property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeFilterCountType, "%s" given', is_object($getUserDisputesResponseTypeDisputeFilterCountItem) ? get_class($getUserDisputesResponseTypeDisputeFilterCountItem) : gettype($getUserDisputesResponseTypeDisputeFilterCountItem)), __LINE__);
            }
        }
        $this->DisputeFilterCount = $disputeFilterCount;
        return $this;
    }
    /**
     * Add item to DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType $item
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function addToDisputeFilterCount(\macropage\ebaysdk\trading\StructType\DisputeFilterCountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeFilterCountType) {
            throw new \InvalidArgumentException(sprintf('The DisputeFilterCount property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeFilterCountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisputeFilterCount[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
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
