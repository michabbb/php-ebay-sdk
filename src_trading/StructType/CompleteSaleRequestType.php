<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteSaleRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to do various tasks after the creation of a single line item or multiple line item (Combined Invoice) order. Typically, this call is used after the order has been paid by the buyer, but it can be called by the seller
 * beforehand. Typical post- payment tasks available to this call include marking the order as paid, marking the order as shipped, providing shipment tracking details, and leaving feedback for the buyer.
 * @subpackage Structs
 */
class CompleteSaleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay item listing. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used in the <b>CompleteSale</b> request to identify a single line item order. <br><br> Unless an
     * <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Invoice) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line
     * item (Combined Invoice) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. | Type that represents the unique identifier
     * for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. The <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> and used in the <b>CompleteSale</b> request to identify a single line item order. <br><br> Unless an
     * <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Invoice) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line
     * item (Combined Invoice) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The FeedbackInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container is used by the seller to leave feedback for the buyer for the order line item identified in the call request. The seller must include and specify all fields of this type, including the buyer's eBay User ID, the
     * Feedback rating (a seller can only leave a buyer a 'Positive' rating), and a comment, which helps justify the Feedback rating. The eBay User ID must match the buyer who bought the order line item, or an error will occur. An error will also occur if
     * Feedback has already been left for the buyer (either through API or the Web flow). <br><br> To determine if Feedback has already been left for an order line item, you can call <b class="con">GetFeedback</b>, passing in the <b
     * class="con">OrderLineItemID</b> value in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public $FeedbackInfo;
    /**
     * The Shipped
     * Meta informations extracted from the WSDL
     * - documentation: The seller includes and sets this field to true if the order has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay. <br><br> If the seller includes and sets this field to false, the
     * order line item(s) are marked (or remain) as Not Shipped in My eBay. <br><br> If this field is not included, the shipped status of the order line item(s) remain unchanged in My eBay. <br><br> If shipment tracking information is provided through the
     * Shipment container in the same request, the <b>Shipped</b> status is set to True automatically and the <b>Shipped</b> field is not required.
     * - minOccurs: 0
     * @var bool
     */
    public $Shipped;
    /**
     * The Paid
     * Meta informations extracted from the WSDL
     * - documentation: The seller includes and sets this field to true if the order has been paid for by the buyer. If the call is successful, the order line item(s) are marked as Paid in My eBay. <br><br> If the seller includes and sets this field to
     * false, the order line item(s) are marked (or remain) as Not Paid in My eBay. <br><br> If this field is not included, the paid status of the order line item(s) remain unchanged in My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $Paid;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> DO NOT USE THIS FIELD. Previously, this field's only purpose was to classify the order to be updated as a Half.com order. However, since the Half.com site has been shut down, this field is no
     * longer applicable. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Shipment
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the item as shipped and
     * the <b>Shipped</b> field is not required. <br><br> If you supply <b>ShipmentTrackingNumber</b>, you must also supply <b>ShippingCarrierUsed</b>; otherwise you will get an error. <br><br> To modify the shipping tracking number and/or carrier, supply
     * the new number in <b>ShipmentTrackingNumber</b> or supply the value for <b>ShippingCarrierUsed</b>, or both. The old number and carrier are deleted and the new ones are added. <br><br> To simply delete the current tracking details altogether, supply
     * empty <b>Shipment</b> tags. <br> <br> <span class="tablenote"><b>Note:</b> Top-Rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 95 percent of their order line items (purchased by
     * U.S. buyers) to keep their status as Top-Rated sellers. For more information on the requirements to becoming a Top-Rated Seller, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top-Rated Seller and qualifying for Top-Rated
     * Plus</a> customer support page. </span> <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public $Shipment;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of
     * the order line item. For multiple line item orders, the <b>OrderID</b> value is created by eBay when the buyer is purchasing multiple order line items from the same seller at the same time. For multiple line item orders not going through the eBay
     * Cart flow, a Combined Invoice order can be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used in the <b>CompleteSale</b> request to identify a single or multiple line item order. <br><br> <b>OrderID</b> overrides
     * an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the
     * <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field in the <b>CompleteSale</b> request. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is used to
     * identify a single or multiple line item (Combined Invoice) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> must be used. If <b>OrderLineItemID</b> is specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for CompleteSaleRequestType
     * @uses CompleteSaleRequestType::setItemID()
     * @uses CompleteSaleRequestType::setTransactionID()
     * @uses CompleteSaleRequestType::setFeedbackInfo()
     * @uses CompleteSaleRequestType::setShipped()
     * @uses CompleteSaleRequestType::setPaid()
     * @uses CompleteSaleRequestType::setListingType()
     * @uses CompleteSaleRequestType::setShipment()
     * @uses CompleteSaleRequestType::setOrderID()
     * @uses CompleteSaleRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackInfo
     * @param bool $shipped
     * @param bool $paid
     * @param string $listingType
     * @param \macropage\ebaysdk\trading\StructType\ShipmentType $shipment
     * @param string $orderID
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackInfo = null, $shipped = null, $paid = null, $listingType = null, \macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null, $orderID = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setFeedbackInfo($feedbackInfo)
            ->setShipped($shipped)
            ->setPaid($paid)
            ->setListingType($listingType)
            ->setShipment($shipment)
            ->setOrderID($orderID)
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
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
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
     * Get FeedbackInfo value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType|null
     */
    public function getFeedbackInfo()
    {
        return $this->FeedbackInfo;
    }
    /**
     * Set FeedbackInfo value
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackInfo
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setFeedbackInfo(\macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackInfo = null)
    {
        $this->FeedbackInfo = $feedbackInfo;
        return $this;
    }
    /**
     * Get Shipped value
     * @return bool|null
     */
    public function getShipped()
    {
        return $this->Shipped;
    }
    /**
     * Set Shipped value
     * @param bool $shipped
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setShipped($shipped = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipped) && !is_bool($shipped)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shipped)), __LINE__);
        }
        $this->Shipped = $shipped;
        return $this;
    }
    /**
     * Get Paid value
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->Paid;
    }
    /**
     * Set Paid value
     * @param bool $paid
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setPaid($paid = null)
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($paid)), __LINE__);
        }
        $this->Paid = $paid;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \macropage\ebaysdk\trading\StructType\ShipmentType $shipment
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setShipment(\macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
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
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleRequestType
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
