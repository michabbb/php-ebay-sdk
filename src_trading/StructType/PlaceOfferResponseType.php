<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlaceOfferResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The <b>PlaceOffer</b> response notifies you about the success and result of the call.
 * @subpackage Structs
 */
class PlaceOfferResponseType extends AbstractResponseType
{
    /**
     * The SellingStatus
     * Meta informations extracted from the WSDL
     * - documentation: This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the
     * results of that action.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingStatusType
     */
    public $SellingStatus;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. The <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set to <b>Purchase</b> in the input and the purchase was successful. A Purchase action in
     * <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The BestOffer
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the status for a Best Offer. This container is only returned if applicable based on the listing and the value set for <b>Offer.Action</b> field in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public $BestOffer;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. The <b>OrderLineItemID</b> field is only
     * returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and the purchase is successful. A Purchase action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is
     * available. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for PlaceOfferResponseType
     * @uses PlaceOfferResponseType::setSellingStatus()
     * @uses PlaceOfferResponseType::setTransactionID()
     * @uses PlaceOfferResponseType::setBestOffer()
     * @uses PlaceOfferResponseType::setOrderLineItemID()
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer
     * @param string $orderLineItemID
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer = null, $orderLineItemID = null)
    {
        $this
            ->setSellingStatus($sellingStatus)
            ->setTransactionID($transactionID)
            ->setBestOffer($bestOffer)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get SellingStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    public function getSellingStatus()
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setSellingStatus(\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null)
    {
        $this->SellingStatus = $sellingStatus;
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
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
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
     * Get BestOffer value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setBestOffer(\macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer = null)
    {
        $this->BestOffer = $bestOffer;
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
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
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
