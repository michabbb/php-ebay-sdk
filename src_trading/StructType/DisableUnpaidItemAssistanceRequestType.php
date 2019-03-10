<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableUnpaidItemAssistanceRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller who has opted into the automated Unpaid Item Assistant mechanism to disable the Unpaid Item Assistant at the order line item level. This call can be made whether or not a Unpaid Item case exists for the order line
 * item. If an Unpaid Item case has already been created by the Unpaid Item Assistant, it is converted to a "manual" case for the seller to manage like any other manually-created case.
 * @subpackage Structs
 */
class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an
     * <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism,
     * either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The DisputeID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an Unpaid Item case that is filed against an order line item. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is used to identify an order line item, <b>DisputeID</b> cannot be used
     * and will be ignored if it is included in the request. | An identifier of a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. To identify a specific order line item
     * for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> is required in the request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for DisableUnpaidItemAssistanceRequestType
     * @uses DisableUnpaidItemAssistanceRequestType::setItemID()
     * @uses DisableUnpaidItemAssistanceRequestType::setTransactionID()
     * @uses DisableUnpaidItemAssistanceRequestType::setDisputeID()
     * @uses DisableUnpaidItemAssistanceRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $disputeID
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $disputeID = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setDisputeID($disputeID)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType
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
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType
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
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType
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
