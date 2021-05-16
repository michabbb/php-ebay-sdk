<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDispute</b> call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include mutually-cancelled transactions and unpaid items. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money
 * Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead. </span>
 * @subpackage Structs
 */
class GetDisputeResponseType extends AbstractResponseType
{
    /**
     * The Dispute
     * Meta information extracted from the WSDL
     * - documentation: If the dispute that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the dispute, the buyer and seller user IDs, and information
     * on the listing that is associated with the dispute.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DisputeType $Dispute = null;
    /**
     * Constructor method for GetDisputeResponseType
     * @uses GetDisputeResponseType::setDispute()
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $dispute
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\DisputeType $dispute = null)
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function getDispute(): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return $this->Dispute;
    }
    /**
     * Set Dispute value
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $dispute
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeResponseType
     */
    public function setDispute(?\macropage\ebaysdk\trading\StructType\DisputeType $dispute = null): self
    {
        $this->Dispute = $dispute;
        
        return $this;
    }
}
