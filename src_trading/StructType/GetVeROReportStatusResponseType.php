<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReportStatusResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReportStatus</strong> call. This response contains status information for items reported by the VeRO Program member.
 * @subpackage Structs
 */
class GetVeROReportStatusResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta informations extracted from the WSDL
     * - documentation: If true, there are more items yet to be retrieved. Additional calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * The ItemsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the maximum number of Reported Item objects that can be returned in any given call. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The VeROReportPacketID
     * Meta informations extracted from the WSDL
     * - documentation: The packet ID for status being returned.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReportPacketID;
    /**
     * The VeROReportPacketStatus
     * Meta informations extracted from the WSDL
     * - documentation: Status of the packet.
     * - minOccurs: 0
     * @var string
     */
    public $VeROReportPacketStatus;
    /**
     * The ReportedItemDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
     */
    public $ReportedItemDetails;
    /**
     * Constructor method for GetVeROReportStatusResponseType
     * @uses GetVeROReportStatusResponseType::setPaginationResult()
     * @uses GetVeROReportStatusResponseType::setHasMoreItems()
     * @uses GetVeROReportStatusResponseType::setItemsPerPage()
     * @uses GetVeROReportStatusResponseType::setPageNumber()
     * @uses GetVeROReportStatusResponseType::setVeROReportPacketID()
     * @uses GetVeROReportStatusResponseType::setVeROReportPacketStatus()
     * @uses GetVeROReportStatusResponseType::setReportedItemDetails()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param int $veROReportPacketID
     * @param string $veROReportPacketStatus
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null, $itemsPerPage = null, $pageNumber = null, $veROReportPacketID = null, $veROReportPacketStatus = null, \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setVeROReportPacketID($veROReportPacketID)
            ->setVeROReportPacketStatus($veROReportPacketStatus)
            ->setReportedItemDetails($reportedItemDetails);
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
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems()
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setHasMoreItems($hasMoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
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
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
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
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID()
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketID($veROReportPacketID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !is_numeric($veROReportPacketID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus()
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $veROReportPacketStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }
    /**
     * Get ReportedItemDetails value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType|null
     */
    public function getReportedItemDetails()
    {
        return $this->ReportedItemDetails;
    }
    /**
     * Set ReportedItemDetails value
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setReportedItemDetails(\macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails = null)
    {
        $this->ReportedItemDetails = $reportedItemDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
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
