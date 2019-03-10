<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldOrderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a sale record.
 * @subpackage Structs
 */
class SellingManagerSoldOrderType extends AbstractStructBase
{
    /**
     * The SellingManagerSoldTransaction
     * Meta informations extracted from the WSDL
     * - documentation: Information about one line item in the order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[]
     */
    public $SellingManagerSoldTransaction;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: Shipping address of a buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The CashOnDeliveryCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost of cash-on-delivery.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CashOnDeliveryCost;
    /**
     * The TotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: Total cost in the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalAmount;
    /**
     * The TotalQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Total item quantity.
     * - minOccurs: 0
     * @var int
     */
    public $TotalQuantity;
    /**
     * The ItemCost
     * Meta informations extracted from the WSDL
     * - documentation: A SMPro seller can record the cost of the item, as calculated by the seller, in this field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ItemCost;
    /**
     * The VATRate
     * Meta informations extracted from the WSDL
     * - documentation: Rate of applicable value added tax.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VATRateType[]
     */
    public $VATRate;
    /**
     * The NetInsuranceFee
     * Meta informations extracted from the WSDL
     * - documentation: Total cost of shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $NetInsuranceFee;
    /**
     * The VATInsuranceFee
     * Meta informations extracted from the WSDL
     * - documentation: Amount of applicable value added tax insurance fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $VATInsuranceFee;
    /**
     * The VATShippingFee
     * Meta informations extracted from the WSDL
     * - documentation: VAT shipping fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $VATShippingFee;
    /**
     * The NetShippingFee
     * Meta informations extracted from the WSDL
     * - documentation: Total shipping fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $NetShippingFee;
    /**
     * The NetTotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: The seller records in this field a net total amount obtained according to the seller's method of calculation. This field is returned for VAT transactions only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $NetTotalAmount;
    /**
     * The VATTotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: VAT total amount.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $VATTotalAmount;
    /**
     * The ActualShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: The shipping cost paid by the seller to ship the order line item. <br/><br/> For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     * <br/><br/> <span class="tablenote"> <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ActualShippingCost;
    /**
     * The AdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: Discount, or charge, to which the buyer and seller have agreed. If this value is a positive value, the amount is the extra money that the buyer pays the seller. If this value is a negative value, the amount is a discount the seller
     * gives the buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The NotesToBuyer
     * Meta informations extracted from the WSDL
     * - documentation: Notes from the seller to the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $NotesToBuyer;
    /**
     * The NotesFromBuyer
     * Meta informations extracted from the WSDL
     * - documentation: Notes from the buyer to the seller.
     * - minOccurs: 0
     * @var string
     */
    public $NotesFromBuyer;
    /**
     * The NotesToSeller
     * Meta informations extracted from the WSDL
     * - documentation: Notes to self from seller.
     * - minOccurs: 0
     * @var string
     */
    public $NotesToSeller;
    /**
     * The OrderStatus
     * Meta informations extracted from the WSDL
     * - documentation: Status of the order regarding payment, shipping, feedback, and other communications.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public $OrderStatus;
    /**
     * The UnpaidItemStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of an unpaid item regarding final value, state of communications between buyer and seller, and the filing of an Unpaid Item.
     * - minOccurs: 0
     * @var string
     */
    public $UnpaidItemStatus;
    /**
     * The SalePrice
     * Meta informations extracted from the WSDL
     * - documentation: Amount of the accepted offer for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $SalePrice;
    /**
     * The EmailsSent
     * Meta informations extracted from the WSDL
     * - documentation: Number of emails sent regarding this order.
     * - minOccurs: 0
     * @var int
     */
    public $EmailsSent;
    /**
     * The DaysSinceSale
     * Meta informations extracted from the WSDL
     * - documentation: Number of days since the sale.
     * - minOccurs: 0
     * @var int
     */
    public $DaysSinceSale;
    /**
     * The BuyerID
     * Meta informations extracted from the WSDL
     * - documentation: The user ID of the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerID;
    /**
     * The BuyerEmail
     * Meta informations extracted from the WSDL
     * - documentation: The email of the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmail;
    /**
     * The SaleRecordID
     * Meta informations extracted from the WSDL
     * - documentation: The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold
     * view in Selling Manager. Each sale record has a sale record ID. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In
     * the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     * - minOccurs: 0
     * @var int
     */
    public $SaleRecordID;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - documentation: The sale date.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSoldOrderType
     * @uses SellingManagerSoldOrderType::setSellingManagerSoldTransaction()
     * @uses SellingManagerSoldOrderType::setShippingAddress()
     * @uses SellingManagerSoldOrderType::setShippingDetails()
     * @uses SellingManagerSoldOrderType::setCashOnDeliveryCost()
     * @uses SellingManagerSoldOrderType::setTotalAmount()
     * @uses SellingManagerSoldOrderType::setTotalQuantity()
     * @uses SellingManagerSoldOrderType::setItemCost()
     * @uses SellingManagerSoldOrderType::setVATRate()
     * @uses SellingManagerSoldOrderType::setNetInsuranceFee()
     * @uses SellingManagerSoldOrderType::setVATInsuranceFee()
     * @uses SellingManagerSoldOrderType::setVATShippingFee()
     * @uses SellingManagerSoldOrderType::setNetShippingFee()
     * @uses SellingManagerSoldOrderType::setNetTotalAmount()
     * @uses SellingManagerSoldOrderType::setVATTotalAmount()
     * @uses SellingManagerSoldOrderType::setActualShippingCost()
     * @uses SellingManagerSoldOrderType::setAdjustmentAmount()
     * @uses SellingManagerSoldOrderType::setNotesToBuyer()
     * @uses SellingManagerSoldOrderType::setNotesFromBuyer()
     * @uses SellingManagerSoldOrderType::setNotesToSeller()
     * @uses SellingManagerSoldOrderType::setOrderStatus()
     * @uses SellingManagerSoldOrderType::setUnpaidItemStatus()
     * @uses SellingManagerSoldOrderType::setSalePrice()
     * @uses SellingManagerSoldOrderType::setEmailsSent()
     * @uses SellingManagerSoldOrderType::setDaysSinceSale()
     * @uses SellingManagerSoldOrderType::setBuyerID()
     * @uses SellingManagerSoldOrderType::setBuyerEmail()
     * @uses SellingManagerSoldOrderType::setSaleRecordID()
     * @uses SellingManagerSoldOrderType::setCreationTime()
     * @uses SellingManagerSoldOrderType::setRefundAmount()
     * @uses SellingManagerSoldOrderType::setRefundStatus()
     * @uses SellingManagerSoldOrderType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @param int $totalQuantity
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemCost
     * @param \macropage\ebaysdk\trading\StructType\VATRateType[] $vATRate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netShippingFee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @param string $notesToBuyer
     * @param string $notesFromBuyer
     * @param string $notesToSeller
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus
     * @param string $unpaidItemStatus
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salePrice
     * @param int $emailsSent
     * @param int $daysSinceSale
     * @param string $buyerID
     * @param string $buyerEmail
     * @param int $saleRecordID
     * @param string $creationTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \DOMDocument $any
     */
    public function __construct(array $sellingManagerSoldTransaction = array(), \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, \macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost = null, \macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null, $totalQuantity = null, \macropage\ebaysdk\trading\StructType\AmountType $itemCost = null, array $vATRate = array(), \macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee = null, \macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee = null, \macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee = null, \macropage\ebaysdk\trading\StructType\AmountType $netShippingFee = null, \macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, $notesToBuyer = null, $notesFromBuyer = null, $notesToSeller = null, \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus = null, $unpaidItemStatus = null, \macropage\ebaysdk\trading\StructType\AmountType $salePrice = null, $emailsSent = null, $daysSinceSale = null, $buyerID = null, $buyerEmail = null, $saleRecordID = null, $creationTime = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, $refundStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setSellingManagerSoldTransaction($sellingManagerSoldTransaction)
            ->setShippingAddress($shippingAddress)
            ->setShippingDetails($shippingDetails)
            ->setCashOnDeliveryCost($cashOnDeliveryCost)
            ->setTotalAmount($totalAmount)
            ->setTotalQuantity($totalQuantity)
            ->setItemCost($itemCost)
            ->setVATRate($vATRate)
            ->setNetInsuranceFee($netInsuranceFee)
            ->setVATInsuranceFee($vATInsuranceFee)
            ->setVATShippingFee($vATShippingFee)
            ->setNetShippingFee($netShippingFee)
            ->setNetTotalAmount($netTotalAmount)
            ->setVATTotalAmount($vATTotalAmount)
            ->setActualShippingCost($actualShippingCost)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setNotesToBuyer($notesToBuyer)
            ->setNotesFromBuyer($notesFromBuyer)
            ->setNotesToSeller($notesToSeller)
            ->setOrderStatus($orderStatus)
            ->setUnpaidItemStatus($unpaidItemStatus)
            ->setSalePrice($salePrice)
            ->setEmailsSent($emailsSent)
            ->setDaysSinceSale($daysSinceSale)
            ->setBuyerID($buyerID)
            ->setBuyerEmail($buyerEmail)
            ->setSaleRecordID($saleRecordID)
            ->setCreationTime($creationTime)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setAny($any);
    }
    /**
     * Get SellingManagerSoldTransaction value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[]|null
     */
    public function getSellingManagerSoldTransaction()
    {
        return $this->SellingManagerSoldTransaction;
    }
    /**
     * Set SellingManagerSoldTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSellingManagerSoldTransaction(array $sellingManagerSoldTransaction = array())
    {
        foreach ($sellingManagerSoldTransaction as $sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType) {
                throw new \InvalidArgumentException(sprintf('The SellingManagerSoldTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType, "%s" given', is_object($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) ? get_class($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) : gettype($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem)), __LINE__);
            }
        }
        $this->SellingManagerSoldTransaction = $sellingManagerSoldTransaction;
        return $this;
    }
    /**
     * Add item to SellingManagerSoldTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function addToSellingManagerSoldTransaction(\macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerSoldTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellingManagerSoldTransaction[] = $item;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setShippingDetails(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get CashOnDeliveryCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCashOnDeliveryCost()
    {
        return $this->CashOnDeliveryCost;
    }
    /**
     * Set CashOnDeliveryCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setCashOnDeliveryCost(\macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost = null)
    {
        $this->CashOnDeliveryCost = $cashOnDeliveryCost;
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setTotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null)
    {
        $this->TotalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get TotalQuantity value
     * @return int|null
     */
    public function getTotalQuantity()
    {
        return $this->TotalQuantity;
    }
    /**
     * Set TotalQuantity value
     * @param int $totalQuantity
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setTotalQuantity($totalQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($totalQuantity) && !is_numeric($totalQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalQuantity)), __LINE__);
        }
        $this->TotalQuantity = $totalQuantity;
        return $this;
    }
    /**
     * Get ItemCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getItemCost()
    {
        return $this->ItemCost;
    }
    /**
     * Set ItemCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setItemCost(\macropage\ebaysdk\trading\StructType\AmountType $itemCost = null)
    {
        $this->ItemCost = $itemCost;
        return $this;
    }
    /**
     * Get VATRate value
     * @return \macropage\ebaysdk\trading\StructType\VATRateType[]|null
     */
    public function getVATRate()
    {
        return $this->VATRate;
    }
    /**
     * Set VATRate value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VATRateType[] $vATRate
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATRate(array $vATRate = array())
    {
        foreach ($vATRate as $sellingManagerSoldOrderTypeVATRateItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeVATRateItem instanceof \macropage\ebaysdk\trading\StructType\VATRateType) {
                throw new \InvalidArgumentException(sprintf('The VATRate property can only contain items of \macropage\ebaysdk\trading\StructType\VATRateType, "%s" given', is_object($sellingManagerSoldOrderTypeVATRateItem) ? get_class($sellingManagerSoldOrderTypeVATRateItem) : gettype($sellingManagerSoldOrderTypeVATRateItem)), __LINE__);
            }
        }
        $this->VATRate = $vATRate;
        return $this;
    }
    /**
     * Add item to VATRate value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VATRateType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function addToVATRate(\macropage\ebaysdk\trading\StructType\VATRateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VATRateType) {
            throw new \InvalidArgumentException(sprintf('The VATRate property can only contain items of \macropage\ebaysdk\trading\StructType\VATRateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VATRate[] = $item;
        return $this;
    }
    /**
     * Get NetInsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetInsuranceFee()
    {
        return $this->NetInsuranceFee;
    }
    /**
     * Set NetInsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetInsuranceFee(\macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee = null)
    {
        $this->NetInsuranceFee = $netInsuranceFee;
        return $this;
    }
    /**
     * Get VATInsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATInsuranceFee()
    {
        return $this->VATInsuranceFee;
    }
    /**
     * Set VATInsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATInsuranceFee(\macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee = null)
    {
        $this->VATInsuranceFee = $vATInsuranceFee;
        return $this;
    }
    /**
     * Get VATShippingFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATShippingFee()
    {
        return $this->VATShippingFee;
    }
    /**
     * Set VATShippingFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATShippingFee(\macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee = null)
    {
        $this->VATShippingFee = $vATShippingFee;
        return $this;
    }
    /**
     * Get NetShippingFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetShippingFee()
    {
        return $this->NetShippingFee;
    }
    /**
     * Set NetShippingFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netShippingFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetShippingFee(\macropage\ebaysdk\trading\StructType\AmountType $netShippingFee = null)
    {
        $this->NetShippingFee = $netShippingFee;
        return $this;
    }
    /**
     * Get NetTotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetTotalAmount()
    {
        return $this->NetTotalAmount;
    }
    /**
     * Set NetTotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetTotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount = null)
    {
        $this->NetTotalAmount = $netTotalAmount;
        return $this;
    }
    /**
     * Get VATTotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATTotalAmount()
    {
        return $this->VATTotalAmount;
    }
    /**
     * Set VATTotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATTotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount = null)
    {
        $this->VATTotalAmount = $vATTotalAmount;
        return $this;
    }
    /**
     * Get ActualShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getActualShippingCost()
    {
        return $this->ActualShippingCost;
    }
    /**
     * Set ActualShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setActualShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null)
    {
        $this->ActualShippingCost = $actualShippingCost;
        return $this;
    }
    /**
     * Get AdjustmentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAdjustmentAmount()
    {
        return $this->AdjustmentAmount;
    }
    /**
     * Set AdjustmentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Get NotesToBuyer value
     * @return string|null
     */
    public function getNotesToBuyer()
    {
        return $this->NotesToBuyer;
    }
    /**
     * Set NotesToBuyer value
     * @param string $notesToBuyer
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesToBuyer($notesToBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($notesToBuyer) && !is_string($notesToBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notesToBuyer)), __LINE__);
        }
        $this->NotesToBuyer = $notesToBuyer;
        return $this;
    }
    /**
     * Get NotesFromBuyer value
     * @return string|null
     */
    public function getNotesFromBuyer()
    {
        return $this->NotesFromBuyer;
    }
    /**
     * Set NotesFromBuyer value
     * @param string $notesFromBuyer
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesFromBuyer($notesFromBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($notesFromBuyer) && !is_string($notesFromBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notesFromBuyer)), __LINE__);
        }
        $this->NotesFromBuyer = $notesFromBuyer;
        return $this;
    }
    /**
     * Get NotesToSeller value
     * @return string|null
     */
    public function getNotesToSeller()
    {
        return $this->NotesToSeller;
    }
    /**
     * Set NotesToSeller value
     * @param string $notesToSeller
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesToSeller($notesToSeller = null)
    {
        // validation for constraint: string
        if (!is_null($notesToSeller) && !is_string($notesToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notesToSeller)), __LINE__);
        }
        $this->NotesToSeller = $notesToSeller;
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setOrderStatus(\macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus = null)
    {
        $this->OrderStatus = $orderStatus;
        return $this;
    }
    /**
     * Get UnpaidItemStatus value
     * @return string|null
     */
    public function getUnpaidItemStatus()
    {
        return $this->UnpaidItemStatus;
    }
    /**
     * Set UnpaidItemStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unpaidItemStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setUnpaidItemStatus($unpaidItemStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::valueIsValid($unpaidItemStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unpaidItemStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UnpaidItemStatus = $unpaidItemStatus;
        return $this;
    }
    /**
     * Get SalePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalePrice()
    {
        return $this->SalePrice;
    }
    /**
     * Set SalePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salePrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSalePrice(\macropage\ebaysdk\trading\StructType\AmountType $salePrice = null)
    {
        $this->SalePrice = $salePrice;
        return $this;
    }
    /**
     * Get EmailsSent value
     * @return int|null
     */
    public function getEmailsSent()
    {
        return $this->EmailsSent;
    }
    /**
     * Set EmailsSent value
     * @param int $emailsSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setEmailsSent($emailsSent = null)
    {
        // validation for constraint: int
        if (!is_null($emailsSent) && !is_numeric($emailsSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($emailsSent)), __LINE__);
        }
        $this->EmailsSent = $emailsSent;
        return $this;
    }
    /**
     * Get DaysSinceSale value
     * @return int|null
     */
    public function getDaysSinceSale()
    {
        return $this->DaysSinceSale;
    }
    /**
     * Set DaysSinceSale value
     * @param int $daysSinceSale
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setDaysSinceSale($daysSinceSale = null)
    {
        // validation for constraint: int
        if (!is_null($daysSinceSale) && !is_numeric($daysSinceSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($daysSinceSale)), __LINE__);
        }
        $this->DaysSinceSale = $daysSinceSale;
        return $this;
    }
    /**
     * Get BuyerID value
     * @return string|null
     */
    public function getBuyerID()
    {
        return $this->BuyerID;
    }
    /**
     * Set BuyerID value
     * @param string $buyerID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setBuyerID($buyerID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerID) && !is_string($buyerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerID)), __LINE__);
        }
        $this->BuyerID = $buyerID;
        return $this;
    }
    /**
     * Get BuyerEmail value
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->BuyerEmail;
    }
    /**
     * Set BuyerEmail value
     * @param string $buyerEmail
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setBuyerEmail($buyerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmail)), __LINE__);
        }
        $this->BuyerEmail = $buyerEmail;
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID()
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSaleRecordID($saleRecordID = null)
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !is_numeric($saleRecordID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount()
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: string
        if (!is_null($refundStatus) && !is_string($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundStatus)), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
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
