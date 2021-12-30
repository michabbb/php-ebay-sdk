<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the response of the <b>AddDispute</b> call. Upon a successful call, the response contains a newly created <b>DisputeID</b> value, which confirms that an Unpaid Item case was created.
 * @subpackage Structs
 */
class AddDisputeResponseType extends AbstractResponseType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: This field will show the unique identifier of an Unpaid Item case that was created. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the
     * name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. These calls no
     * longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls
     * also do not support eBay Money Back Guarantee cases. <br/><br/> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of
     * the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeID = null;
    /**
     * Constructor method for AddDisputeResponseType
     * @uses AddDisputeResponseType::setDisputeID()
     * @param string $disputeID
     */
    public function __construct(?string $disputeID = null)
    {
        $this
            ->setDisputeID($disputeID);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID(): ?string
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseType
     */
    public function setDisputeID(?string $disputeID = null): self
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeID, true), gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        
        return $this;
    }
}
