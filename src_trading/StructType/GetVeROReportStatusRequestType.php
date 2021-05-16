<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReportStatusRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves status information about VeRO reported items you have submitted. You can receive the status of individual items you have reported or, by specifying <strong>VeROReportPacketID</strong>, you can retrieve status for all items
 * reported with a given <strong>VeROReportItems</strong> request. You can also retrieve items that were reported during a given time period. If no input parameters are specified, status is returned on all items you have reported in the last two years.
 * You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @subpackage Structs
 */
class GetVeROReportStatusRequestType extends AbstractRequestType
{
    /**
     * The VeROReportPacketID
     * Meta information extracted from the WSDL
     * - documentation: Packet identifier associated with the reported items for which you want to retrieve status. By default, reported item details are not returned when you specify the packet ID in the request. Applies only to items reported with the
     * <strong>VeROReportItems</strong> call.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VeROReportPacketID = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing reported for alleged infringement. Applies to items reported with the <strong>VeROReportItems</strong> call or by other means (e.g., through the Web flow). | Type that represents the unique
     * identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The IncludeReportedItemDetails
     * Meta information extracted from the WSDL
     * - documentation: Set to true to return reported item details when you specify <strong>VeROReportPacketID</strong> in the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeReportedItemDetails = null;
    /**
     * The TimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Limits returned items to only those that were submited on or after the date-time specified. If specified, TimeTo must also be specified. Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to
     * convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission.
     * This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeFrom = null;
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - documentation: Limits returned items to only those that were submited on or before the date-time specified. If specified, TimeFrom must also be specified. Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to
     * convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission.
     * This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeTo = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Contains the data controlling the pagination of the returned values: how many items are returned per page of data (per call) and the number of the page to return with the current call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * Constructor method for GetVeROReportStatusRequestType
     * @uses GetVeROReportStatusRequestType::setVeROReportPacketID()
     * @uses GetVeROReportStatusRequestType::setItemID()
     * @uses GetVeROReportStatusRequestType::setIncludeReportedItemDetails()
     * @uses GetVeROReportStatusRequestType::setTimeFrom()
     * @uses GetVeROReportStatusRequestType::setTimeTo()
     * @uses GetVeROReportStatusRequestType::setPagination()
     * @param int $veROReportPacketID
     * @param string $itemID
     * @param bool $includeReportedItemDetails
     * @param string $timeFrom
     * @param string $timeTo
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     */
    public function __construct(?int $veROReportPacketID = null, ?string $itemID = null, ?bool $includeReportedItemDetails = null, ?string $timeFrom = null, ?string $timeTo = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this
            ->setVeROReportPacketID($veROReportPacketID)
            ->setItemID($itemID)
            ->setIncludeReportedItemDetails($includeReportedItemDetails)
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
            ->setPagination($pagination);
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
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
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
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get IncludeReportedItemDetails value
     * @return bool|null
     */
    public function getIncludeReportedItemDetails(): ?bool
    {
        return $this->IncludeReportedItemDetails;
    }
    /**
     * Set IncludeReportedItemDetails value
     * @param bool $includeReportedItemDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setIncludeReportedItemDetails(?bool $includeReportedItemDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeReportedItemDetails) && !is_bool($includeReportedItemDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeReportedItemDetails, true), gettype($includeReportedItemDetails)), __LINE__);
        }
        $this->IncludeReportedItemDetails = $includeReportedItemDetails;
        
        return $this;
    }
    /**
     * Get TimeFrom value
     * @return string|null
     */
    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom;
    }
    /**
     * Set TimeFrom value
     * @param string $timeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setTimeFrom(?string $timeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($timeFrom) && !is_string($timeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFrom, true), gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        
        return $this;
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo(): ?string
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setTimeTo(?string $timeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
}
