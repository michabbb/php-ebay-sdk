<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reports items that allegedly infringe your copyright, trademark, or other intellectual property rights. You can report one or more items at a time with this call. You must be a member of the Verified Rights Owner (VeRO) Program to
 * use this call.
 * @subpackage Structs
 */
class VeROReportItemsRequestType extends AbstractRequestType
{
    /**
     * The RightsOwnerID
     * Meta information extracted from the WSDL
     * - documentation: User ID of the VeRO member reporting the items. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RightsOwnerID = null;
    /**
     * The ReportItems
     * Meta information extracted from the WSDL
     * - documentation: Container (packet) for items being reported. You can report the same item more than once in a packet if a different reason code is used each time.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportItemsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VeROReportItemsType $ReportItems = null;
    /**
     * Constructor method for VeROReportItemsRequestType
     * @uses VeROReportItemsRequestType::setRightsOwnerID()
     * @uses VeROReportItemsRequestType::setReportItems()
     * @param string $rightsOwnerID
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems
     */
    public function __construct(?string $rightsOwnerID = null, ?\macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems = null)
    {
        $this
            ->setRightsOwnerID($rightsOwnerID)
            ->setReportItems($reportItems);
    }
    /**
     * Get RightsOwnerID value
     * @return string|null
     */
    public function getRightsOwnerID(): ?string
    {
        return $this->RightsOwnerID;
    }
    /**
     * Set RightsOwnerID value
     * @param string $rightsOwnerID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType
     */
    public function setRightsOwnerID(?string $rightsOwnerID = null): self
    {
        // validation for constraint: string
        if (!is_null($rightsOwnerID) && !is_string($rightsOwnerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightsOwnerID, true), gettype($rightsOwnerID)), __LINE__);
        }
        $this->RightsOwnerID = $rightsOwnerID;
        
        return $this;
    }
    /**
     * Get ReportItems value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType|null
     */
    public function getReportItems(): ?\macropage\ebaysdk\trading\StructType\VeROReportItemsType
    {
        return $this->ReportItems;
    }
    /**
     * Set ReportItems value
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType
     */
    public function setReportItems(?\macropage\ebaysdk\trading\StructType\VeROReportItemsType $reportItems = null): self
    {
        $this->ReportItems = $reportItems;
        
        return $this;
    }
}
