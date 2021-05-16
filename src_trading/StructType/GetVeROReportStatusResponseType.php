<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReportStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReportStatus</strong> call. This response contains status information for items reported by the VeRO Program member.
 * @subpackage Structs
 */
class GetVeROReportStatusResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: If true, there are more items yet to be retrieved. Additional calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasMoreItems = null;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: Indicates the maximum number of Reported Item objects that can be returned in any given call. <br/>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemsPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one. <br/>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The VeROReportPacketID
     * Meta information extracted from the WSDL
     * - documentation: The packet ID for status being returned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VeROReportPacketID = null;
    /**
     * The VeROReportPacketStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the packet.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VeROReportPacketStatus = null;
    /**
     * The ReportedItemDetails
     * Meta information extracted from the WSDL
     * - documentation: This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $ReportedItemDetails = null;
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
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, ?bool $hasMoreItems = null, ?int $itemsPerPage = null, ?int $pageNumber = null, ?int $veROReportPacketID = null, ?string $veROReportPacketStatus = null, ?\macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails = null)
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
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems(): ?bool
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setHasMoreItems(?bool $hasMoreItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreItems, true), gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage(): ?int
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setItemsPerPage(?int $itemsPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !(is_int($itemsPerPage) || ctype_digit($itemsPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemsPerPage, true), gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID(): ?int
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketID(?int $veROReportPacketID = null): self
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !(is_int($veROReportPacketID) || ctype_digit($veROReportPacketID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($veROReportPacketID, true), gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus(): ?string
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketStatus(?string $veROReportPacketStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType', is_array($veROReportPacketStatus) ? implode(', ', $veROReportPacketStatus) : var_export($veROReportPacketStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        
        return $this;
    }
    /**
     * Get ReportedItemDetails value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType|null
     */
    public function getReportedItemDetails(): ?\macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
    {
        return $this->ReportedItemDetails;
    }
    /**
     * Set ReportedItemDetails value
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusResponseType
     */
    public function setReportedItemDetails(?\macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType $reportedItemDetails = null): self
    {
        $this->ReportedItemDetails = $reportedItemDetails;
        
        return $this;
    }
}
