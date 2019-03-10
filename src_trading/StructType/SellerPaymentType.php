<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only applicable to the <b>GetSellerPayments</b> call, and since the Half.com site was shut down, this type is also being deprecated. </span> A payment between Half.com and a seller.
 * The financial value of a payment is typically based on an amount that a buyer paid to Half.com for one order line item, plus the buyer's shipping cost, minus Half.com's commission.
 * @subpackage Structs
 */
class SellerPaymentType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Unique identifier for the Half.com item listing. | Type that represents the
     * unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Unique identifier for a Half.com order line item (transaction). An order
     * line item is created once there is a commitment from a buyer to purchase an item. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> A unique identifier that identifies a single line item or multiple line item
     * (Combined Invoice) Half.com order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Invoice order, the
     * <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Invoice order through the Half.com site. | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The SellerInventoryID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> An ID that the seller specified when they listed the Half.com item, if any.
     * It can be used for the seller's SKU. Note that <b>SellerInventoryID</b> is not returned if no ID was specified. (Note: The SKU field used for eBay.com listings is not applicable to Half.com listings.)
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * The PrivateNotes
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> A text note that the seller specified for the Half.com item, if any. Only
     * visible to the seller. Not returned if the seller specified no notes.
     * - minOccurs: 0
     * @var string
     */
    public $PrivateNotes;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> The title of the item listing as it appears on Half.com.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Indicates whether the payment is for a Half.com sale or a refund.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The TransactionPrice
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Price of the order line item (transaction) before shipping and other costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TransactionPrice;
    /**
     * The ShippingReimbursement
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> The adjusted shipping cost that Half.com pays the seller. For a multiple
     * line item (Combined Invoice) order, the total shipping cost may be less than the cost to ship the items individually, which makes the adjustment necessary. The shipping cost may also be adjusted due to Half.com handling charges. <br><br> <b>Note</b>:
     * Due to the way shipping costs are calculated, this value may be different for identical items in different orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingReimbursement;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Amount of commission charged by Half.com.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Commission;
    /**
     * The AmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> Total amount paid by buyer for the Half.com order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The PaidTime
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> The time and date when Half.com created the payment. Half.com creates a
     * payment when the buyer pays for an order. This time is specified in GMT (not Pacific time). See <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Basics/DataTypes.html#ConvertingBetweenUTCGMTandLocalTime"> eBay Features Guide</a> for
     * information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> A unique identifier for a Half.com order line item. This field is created as
     * soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the <b>OrderLineItemID</b> value is
     * identical to the <b>OrderID</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerPaymentType
     * @uses SellerPaymentType::setItemID()
     * @uses SellerPaymentType::setTransactionID()
     * @uses SellerPaymentType::setOrderID()
     * @uses SellerPaymentType::setSellerInventoryID()
     * @uses SellerPaymentType::setPrivateNotes()
     * @uses SellerPaymentType::setTitle()
     * @uses SellerPaymentType::setPaymentType()
     * @uses SellerPaymentType::setTransactionPrice()
     * @uses SellerPaymentType::setShippingReimbursement()
     * @uses SellerPaymentType::setCommission()
     * @uses SellerPaymentType::setAmountPaid()
     * @uses SellerPaymentType::setPaidTime()
     * @uses SellerPaymentType::setOrderLineItemID()
     * @uses SellerPaymentType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param string $sellerInventoryID
     * @param string $privateNotes
     * @param string $title
     * @param string $paymentType
     * @param \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement
     * @param \macropage\ebaysdk\trading\StructType\AmountType $commission
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @param string $paidTime
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, $sellerInventoryID = null, $privateNotes = null, $title = null, $paymentType = null, \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement = null, \macropage\ebaysdk\trading\StructType\AmountType $commission = null, \macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, $paidTime = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setSellerInventoryID($sellerInventoryID)
            ->setPrivateNotes($privateNotes)
            ->setTitle($title)
            ->setPaymentType($paymentType)
            ->setTransactionPrice($transactionPrice)
            ->setShippingReimbursement($shippingReimbursement)
            ->setCommission($commission)
            ->setAmountPaid($amountPaid)
            ->setPaidTime($paidTime)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
    /**
     * Get PrivateNotes value
     * @return string|null
     */
    public function getPrivateNotes()
    {
        return $this->PrivateNotes;
    }
    /**
     * Set PrivateNotes value
     * @param string $privateNotes
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPrivateNotes($privateNotes = null)
    {
        // validation for constraint: string
        if (!is_null($privateNotes) && !is_string($privateNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($privateNotes)), __LINE__);
        }
        $this->PrivateNotes = $privateNotes;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get TransactionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTransactionPrice()
    {
        return $this->TransactionPrice;
    }
    /**
     * Set TransactionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setTransactionPrice(\macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null)
    {
        $this->TransactionPrice = $transactionPrice;
        return $this;
    }
    /**
     * Get ShippingReimbursement value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingReimbursement()
    {
        return $this->ShippingReimbursement;
    }
    /**
     * Set ShippingReimbursement value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setShippingReimbursement(\macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement = null)
    {
        $this->ShippingReimbursement = $shippingReimbursement;
        return $this;
    }
    /**
     * Get Commission value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $commission
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setCommission(\macropage\ebaysdk\trading\StructType\AmountType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get PaidTime value
     * @return string|null
     */
    public function getPaidTime()
    {
        return $this->PaidTime;
    }
    /**
     * Set PaidTime value
     * @param string $paidTime
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPaidTime($paidTime = null)
    {
        // validation for constraint: string
        if (!is_null($paidTime) && !is_string($paidTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paidTime)), __LINE__);
        }
        $this->PaidTime = $paidTime;
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerPaymentType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
