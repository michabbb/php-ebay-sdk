<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisputeRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetDispute</b> call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include mutually-cancelled transactions and unpaid items. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money
 * Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead. </span>
 * @subpackage Structs
 */
class GetDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an seller-initiated dispute. The caller passes in this value to retrieve detailed information on a specific dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> Buyer-initiated Money Back
     * Guarantee cases are not supported with this call. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be
     * used instead. </span> | An identifier of a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * Constructor method for GetDisputeRequestType
     * @uses GetDisputeRequestType::setDisputeID()
     * @param string $disputeID
     */
    public function __construct($disputeID = null)
    {
        $this
            ->setDisputeID($disputeID);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetDisputeRequestType
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
