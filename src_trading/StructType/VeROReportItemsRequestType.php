<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reports items that allegedly infringe your copyright, trademark, or other intellectual property rights. You can report one or more items at a time with this call. You must be a member of the Verified Rights Owner (VeRO) Program to
 * use this call.
 * @subpackage Structs
 */
class VeROReportItemsRequestType extends AbstractRequestType
{
    /**
     * The RightsOwnerID
     * Meta informations extracted from the WSDL
     * - documentation: User ID of the VeRO member reporting the items. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $RightsOwnerID;
    /**
     * The ReportItems
     * Meta informations extracted from the WSDL
     * - documentation: Container (packet) for items being reported. You can report the same item more than once in a packet if a different reason code is used each time.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportItemsType
     */
    public $ReportItems;
    /**
     * Constructor method for VeROReportItemsRequestType
     * @uses VeROReportItemsRequestType::setRightsOwnerID()
     * @uses VeROReportItemsRequestType::setReportItems()
     * @param string $rightsOwnerID
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems
     */
    public function __construct($rightsOwnerID = null, \macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems = null)
    {
        $this
            ->setRightsOwnerID($rightsOwnerID)
            ->setReportItems($reportItems);
    }
    /**
     * Get RightsOwnerID value
     * @return string|null
     */
    public function getRightsOwnerID()
    {
        return $this->RightsOwnerID;
    }
    /**
     * Set RightsOwnerID value
     * @param string $rightsOwnerID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType
     */
    public function setRightsOwnerID($rightsOwnerID = null)
    {
        // validation for constraint: string
        if (!is_null($rightsOwnerID) && !is_string($rightsOwnerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rightsOwnerID)), __LINE__);
        }
        $this->RightsOwnerID = $rightsOwnerID;
        return $this;
    }
    /**
     * Get ReportItems value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType|null
     */
    public function getReportItems()
    {
        return $this->ReportItems;
    }
    /**
     * Set ReportItems value
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType
     */
    public function setReportItems(\macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems = null)
    {
        $this->ReportItems = $reportItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType
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
