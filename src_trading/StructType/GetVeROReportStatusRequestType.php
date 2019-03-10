<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReportStatusRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves status information about VeRO reported items you have submitted. You can receive the status of individual items you have reported or, by specifying <strong>VeROReportPacketID</strong>, you can retrieve status for all items
 * reported with a given <strong>VeROReportItems</strong> request. You can also retrieve items that were reported during a given time period. If no input parameters are specified, status is returned on all items you have reported in the last two years.
 * You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @subpackage Structs
 */
class GetVeROReportStatusRequestType extends AbstractRequestType
{
    /**
     * The VeROReportPacketID
     * Meta informations extracted from the WSDL
     * - documentation: Packet identifier associated with the reported items for which you want to retrieve status. By default, reported item details are not returned when you specify the packet ID in the request. Applies only to items reported with the
     * <strong>VeROReportItems</strong> call.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReportPacketID;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing reported for alleged infringement. Applies to items reported with the <strong>VeROReportItems</strong> call or by other means (e.g., through the Web flow). | Type that represents the unique
     * identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The IncludeReportedItemDetails
     * Meta informations extracted from the WSDL
     * - documentation: Set to true to return reported item details when you specify <strong>VeROReportPacketID</strong> in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeReportedItemDetails;
    /**
     * The TimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Limits returned items to only those that were submited on or after the date-time specified. If specified, TimeTo must also be specified. Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to
     * convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission.
     * This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     * - minOccurs: 0
     * @var string
     */
    public $TimeFrom;
    /**
     * The TimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Limits returned items to only those that were submited on or before the date-time specified. If specified, TimeFrom must also be specified. Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to
     * convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission.
     * This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     * - minOccurs: 0
     * @var string
     */
    public $TimeTo;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data controlling the pagination of the returned values: how many items are returned per page of data (per call) and the number of the page to return with the current call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
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
    public function __construct($veROReportPacketID = null, $itemID = null, $includeReportedItemDetails = null, $timeFrom = null, $timeTo = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
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
    public function getVeROReportPacketID()
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
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
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get IncludeReportedItemDetails value
     * @return bool|null
     */
    public function getIncludeReportedItemDetails()
    {
        return $this->IncludeReportedItemDetails;
    }
    /**
     * Set IncludeReportedItemDetails value
     * @param bool $includeReportedItemDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setIncludeReportedItemDetails($includeReportedItemDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeReportedItemDetails) && !is_bool($includeReportedItemDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeReportedItemDetails)), __LINE__);
        }
        $this->IncludeReportedItemDetails = $includeReportedItemDetails;
        return $this;
    }
    /**
     * Get TimeFrom value
     * @return string|null
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }
    /**
     * Set TimeFrom value
     * @param string $timeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setTimeFrom($timeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($timeFrom) && !is_string($timeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        return $this;
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType
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
