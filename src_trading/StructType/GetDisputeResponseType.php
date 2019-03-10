<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisputeResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDispute</b> call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include mutually-cancelled transactions and unpaid items. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money
 * Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead. </span>
 * @subpackage Structs
 */
class GetDisputeResponseType extends AbstractResponseType
{
    /**
     * The Dispute
     * Meta informations extracted from the WSDL
     * - documentation: If the dispute that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the dispute, the buyer and seller user IDs, and information
     * on the listing that is associated with the dispute.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public $Dispute;
    /**
     * Constructor method for GetDisputeResponseType
     * @uses GetDisputeResponseType::setDispute()
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $dispute
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\DisputeType $dispute = null)
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function getDispute()
    {
        return $this->Dispute;
    }
    /**
     * Set Dispute value
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $dispute
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeResponseType
     */
    public function setDispute(\macropage\ebaysdk\trading\StructType\DisputeType $dispute = null)
    {
        $this->Dispute = $dispute;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeResponseType
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
