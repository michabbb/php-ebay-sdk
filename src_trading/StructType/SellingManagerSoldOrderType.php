<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldOrderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a sale record.
 * @subpackage Structs
 */
class SellingManagerSoldOrderType extends AbstractStructBase
{
    /**
     * The SellingManagerSoldTransaction
     * Meta information extracted from the WSDL
     * - documentation: Information about one line item in the order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[]
     */
    protected array $SellingManagerSoldTransaction = [];
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: Shipping address of a buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $ShippingDetails = null;
    /**
     * The CashOnDeliveryCost
     * Meta information extracted from the WSDL
     * - documentation: The cost of cash-on-delivery.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CashOnDeliveryCost = null;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: Total cost in the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalAmount = null;
    /**
     * The TotalQuantity
     * Meta information extracted from the WSDL
     * - documentation: Total item quantity.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalQuantity = null;
    /**
     * The ItemCost
     * Meta information extracted from the WSDL
     * - documentation: A SMPro seller can record the cost of the item, as calculated by the seller, in this field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ItemCost = null;
    /**
     * The VATRate
     * Meta information extracted from the WSDL
     * - documentation: Rate of applicable value added tax.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VATRateType[]
     */
    protected array $VATRate = [];
    /**
     * The NetInsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: Total cost of shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $NetInsuranceFee = null;
    /**
     * The VATInsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: Amount of applicable value added tax insurance fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $VATInsuranceFee = null;
    /**
     * The VATShippingFee
     * Meta information extracted from the WSDL
     * - documentation: VAT shipping fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $VATShippingFee = null;
    /**
     * The NetShippingFee
     * Meta information extracted from the WSDL
     * - documentation: Total shipping fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $NetShippingFee = null;
    /**
     * The NetTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The seller records in this field a net total amount obtained according to the seller's method of calculation. This field is returned for VAT transactions only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $NetTotalAmount = null;
    /**
     * The VATTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: VAT total amount.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $VATTotalAmount = null;
    /**
     * The ActualShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost paid by the seller to ship the order line item. <br/><br/> For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     * <br/><br/> <span class="tablenote"> <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ActualShippingCost = null;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: Discount, or charge, to which the buyer and seller have agreed. If this value is a positive value, the amount is the extra money that the buyer pays the seller. If this value is a negative value, the amount is a discount the seller
     * gives the buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AdjustmentAmount = null;
    /**
     * The NotesToBuyer
     * Meta information extracted from the WSDL
     * - documentation: Notes from the seller to the buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotesToBuyer = null;
    /**
     * The NotesFromBuyer
     * Meta information extracted from the WSDL
     * - documentation: Notes from the buyer to the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotesFromBuyer = null;
    /**
     * The NotesToSeller
     * Meta information extracted from the WSDL
     * - documentation: Notes to self from seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotesToSeller = null;
    /**
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the order regarding payment, shipping, feedback, and other communications.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $OrderStatus = null;
    /**
     * The UnpaidItemStatus
     * Meta information extracted from the WSDL
     * - documentation: The status of an unpaid item regarding final value, state of communications between buyer and seller, and the filing of an Unpaid Item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UnpaidItemStatus = null;
    /**
     * The SalePrice
     * Meta information extracted from the WSDL
     * - documentation: Amount of the accepted offer for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $SalePrice = null;
    /**
     * The EmailsSent
     * Meta information extracted from the WSDL
     * - documentation: Number of emails sent regarding this order.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EmailsSent = null;
    /**
     * The DaysSinceSale
     * Meta information extracted from the WSDL
     * - documentation: Number of days since the sale.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DaysSinceSale = null;
    /**
     * The BuyerID
     * Meta information extracted from the WSDL
     * - documentation: The user ID of the buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerID = null;
    /**
     * The BuyerEmail
     * Meta information extracted from the WSDL
     * - documentation: The email of the buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerEmail = null;
    /**
     * The SaleRecordID
     * Meta information extracted from the WSDL
     * - documentation: The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold
     * view in Selling Manager. Each sale record has a sale record ID. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In
     * the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleRecordID = null;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: The sale date.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationTime = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundAmount = null;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $sellingManagerSoldTransaction = [], ?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, ?\macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null, ?int $totalQuantity = null, ?\macropage\ebaysdk\trading\StructType\AmountType $itemCost = null, array $vATRate = [], ?\macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee = null, ?\macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee = null, ?\macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee = null, ?\macropage\ebaysdk\trading\StructType\AmountType $netShippingFee = null, ?\macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, ?string $notesToBuyer = null, ?string $notesFromBuyer = null, ?string $notesToSeller = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus = null, ?string $unpaidItemStatus = null, ?\macropage\ebaysdk\trading\StructType\AmountType $salePrice = null, ?int $emailsSent = null, ?int $daysSinceSale = null, ?string $buyerID = null, ?string $buyerEmail = null, ?int $saleRecordID = null, ?string $creationTime = null, ?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, ?string $refundStatus = null, $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[]
     */
    public function getSellingManagerSoldTransaction(): array
    {
        return $this->SellingManagerSoldTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setSellingManagerSoldTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellingManagerSoldTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellingManagerSoldTransactionForArrayConstraintsFromSetSellingManagerSoldTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType) {
                $invalidValues[] = is_object($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) ? get_class($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem) : sprintf('%s(%s)', gettype($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem), var_export($sellingManagerSoldOrderTypeSellingManagerSoldTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellingManagerSoldTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellingManagerSoldTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSellingManagerSoldTransaction(array $sellingManagerSoldTransaction = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellingManagerSoldTransactionArrayErrorMessage = self::validateSellingManagerSoldTransactionForArrayConstraintsFromSetSellingManagerSoldTransaction($sellingManagerSoldTransaction))) {
            throw new InvalidArgumentException($sellingManagerSoldTransactionArrayErrorMessage, __LINE__);
        }
        $this->SellingManagerSoldTransaction = $sellingManagerSoldTransaction;
        
        return $this;
    }
    /**
     * Add item to SellingManagerSoldTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function addToSellingManagerSoldTransaction(\macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType) {
            throw new InvalidArgumentException(sprintf('The SellingManagerSoldTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellingManagerSoldTransaction[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails(): ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setShippingDetails(?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null): self
    {
        $this->ShippingDetails = $shippingDetails;
        
        return $this;
    }
    /**
     * Get CashOnDeliveryCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCashOnDeliveryCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CashOnDeliveryCost;
    }
    /**
     * Set CashOnDeliveryCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setCashOnDeliveryCost(?\macropage\ebaysdk\trading\StructType\AmountType $cashOnDeliveryCost = null): self
    {
        $this->CashOnDeliveryCost = $cashOnDeliveryCost;
        
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setTotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null): self
    {
        $this->TotalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get TotalQuantity value
     * @return int|null
     */
    public function getTotalQuantity(): ?int
    {
        return $this->TotalQuantity;
    }
    /**
     * Set TotalQuantity value
     * @param int $totalQuantity
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setTotalQuantity(?int $totalQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($totalQuantity) && !(is_int($totalQuantity) || ctype_digit($totalQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalQuantity, true), gettype($totalQuantity)), __LINE__);
        }
        $this->TotalQuantity = $totalQuantity;
        
        return $this;
    }
    /**
     * Get ItemCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getItemCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ItemCost;
    }
    /**
     * Set ItemCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setItemCost(?\macropage\ebaysdk\trading\StructType\AmountType $itemCost = null): self
    {
        $this->ItemCost = $itemCost;
        
        return $this;
    }
    /**
     * Get VATRate value
     * @return \macropage\ebaysdk\trading\StructType\VATRateType[]
     */
    public function getVATRate(): array
    {
        return $this->VATRate;
    }
    /**
     * This method is responsible for validating the values passed to the setVATRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVATRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVATRateForArrayConstraintsFromSetVATRate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldOrderTypeVATRateItem) {
            // validation for constraint: itemType
            if (!$sellingManagerSoldOrderTypeVATRateItem instanceof \macropage\ebaysdk\trading\StructType\VATRateType) {
                $invalidValues[] = is_object($sellingManagerSoldOrderTypeVATRateItem) ? get_class($sellingManagerSoldOrderTypeVATRateItem) : sprintf('%s(%s)', gettype($sellingManagerSoldOrderTypeVATRateItem), var_export($sellingManagerSoldOrderTypeVATRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VATRate property can only contain items of type \macropage\ebaysdk\trading\StructType\VATRateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VATRate value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VATRateType[] $vATRate
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATRate(array $vATRate = []): self
    {
        // validation for constraint: array
        if ('' !== ($vATRateArrayErrorMessage = self::validateVATRateForArrayConstraintsFromSetVATRate($vATRate))) {
            throw new InvalidArgumentException($vATRateArrayErrorMessage, __LINE__);
        }
        $this->VATRate = $vATRate;
        
        return $this;
    }
    /**
     * Add item to VATRate value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VATRateType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function addToVATRate(\macropage\ebaysdk\trading\StructType\VATRateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VATRateType) {
            throw new InvalidArgumentException(sprintf('The VATRate property can only contain items of type \macropage\ebaysdk\trading\StructType\VATRateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VATRate[] = $item;
        
        return $this;
    }
    /**
     * Get NetInsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetInsuranceFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->NetInsuranceFee;
    }
    /**
     * Set NetInsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetInsuranceFee(?\macropage\ebaysdk\trading\StructType\AmountType $netInsuranceFee = null): self
    {
        $this->NetInsuranceFee = $netInsuranceFee;
        
        return $this;
    }
    /**
     * Get VATInsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATInsuranceFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->VATInsuranceFee;
    }
    /**
     * Set VATInsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATInsuranceFee(?\macropage\ebaysdk\trading\StructType\AmountType $vATInsuranceFee = null): self
    {
        $this->VATInsuranceFee = $vATInsuranceFee;
        
        return $this;
    }
    /**
     * Get VATShippingFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATShippingFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->VATShippingFee;
    }
    /**
     * Set VATShippingFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATShippingFee(?\macropage\ebaysdk\trading\StructType\AmountType $vATShippingFee = null): self
    {
        $this->VATShippingFee = $vATShippingFee;
        
        return $this;
    }
    /**
     * Get NetShippingFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetShippingFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->NetShippingFee;
    }
    /**
     * Set NetShippingFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netShippingFee
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetShippingFee(?\macropage\ebaysdk\trading\StructType\AmountType $netShippingFee = null): self
    {
        $this->NetShippingFee = $netShippingFee;
        
        return $this;
    }
    /**
     * Get NetTotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetTotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->NetTotalAmount;
    }
    /**
     * Set NetTotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNetTotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $netTotalAmount = null): self
    {
        $this->NetTotalAmount = $netTotalAmount;
        
        return $this;
    }
    /**
     * Get VATTotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getVATTotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->VATTotalAmount;
    }
    /**
     * Set VATTotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setVATTotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $vATTotalAmount = null): self
    {
        $this->VATTotalAmount = $vATTotalAmount;
        
        return $this;
    }
    /**
     * Get ActualShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getActualShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ActualShippingCost;
    }
    /**
     * Set ActualShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setActualShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null): self
    {
        $this->ActualShippingCost = $actualShippingCost;
        
        return $this;
    }
    /**
     * Get AdjustmentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAdjustmentAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AdjustmentAmount;
    }
    /**
     * Set AdjustmentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setAdjustmentAmount(?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null): self
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        
        return $this;
    }
    /**
     * Get NotesToBuyer value
     * @return string|null
     */
    public function getNotesToBuyer(): ?string
    {
        return $this->NotesToBuyer;
    }
    /**
     * Set NotesToBuyer value
     * @param string $notesToBuyer
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesToBuyer(?string $notesToBuyer = null): self
    {
        // validation for constraint: string
        if (!is_null($notesToBuyer) && !is_string($notesToBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesToBuyer, true), gettype($notesToBuyer)), __LINE__);
        }
        $this->NotesToBuyer = $notesToBuyer;
        
        return $this;
    }
    /**
     * Get NotesFromBuyer value
     * @return string|null
     */
    public function getNotesFromBuyer(): ?string
    {
        return $this->NotesFromBuyer;
    }
    /**
     * Set NotesFromBuyer value
     * @param string $notesFromBuyer
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesFromBuyer(?string $notesFromBuyer = null): self
    {
        // validation for constraint: string
        if (!is_null($notesFromBuyer) && !is_string($notesFromBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesFromBuyer, true), gettype($notesFromBuyer)), __LINE__);
        }
        $this->NotesFromBuyer = $notesFromBuyer;
        
        return $this;
    }
    /**
     * Get NotesToSeller value
     * @return string|null
     */
    public function getNotesToSeller(): ?string
    {
        return $this->NotesToSeller;
    }
    /**
     * Set NotesToSeller value
     * @param string $notesToSeller
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setNotesToSeller(?string $notesToSeller = null): self
    {
        // validation for constraint: string
        if (!is_null($notesToSeller) && !is_string($notesToSeller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notesToSeller, true), gettype($notesToSeller)), __LINE__);
        }
        $this->NotesToSeller = $notesToSeller;
        
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType|null
     */
    public function getOrderStatus(): ?\macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setOrderStatus(?\macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType $orderStatus = null): self
    {
        $this->OrderStatus = $orderStatus;
        
        return $this;
    }
    /**
     * Get UnpaidItemStatus value
     * @return string|null
     */
    public function getUnpaidItemStatus(): ?string
    {
        return $this->UnpaidItemStatus;
    }
    /**
     * Set UnpaidItemStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $unpaidItemStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setUnpaidItemStatus(?string $unpaidItemStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::valueIsValid($unpaidItemStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType', is_array($unpaidItemStatus) ? implode(', ', $unpaidItemStatus) : var_export($unpaidItemStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->UnpaidItemStatus = $unpaidItemStatus;
        
        return $this;
    }
    /**
     * Get SalePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalePrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->SalePrice;
    }
    /**
     * Set SalePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salePrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSalePrice(?\macropage\ebaysdk\trading\StructType\AmountType $salePrice = null): self
    {
        $this->SalePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get EmailsSent value
     * @return int|null
     */
    public function getEmailsSent(): ?int
    {
        return $this->EmailsSent;
    }
    /**
     * Set EmailsSent value
     * @param int $emailsSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setEmailsSent(?int $emailsSent = null): self
    {
        // validation for constraint: int
        if (!is_null($emailsSent) && !(is_int($emailsSent) || ctype_digit($emailsSent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailsSent, true), gettype($emailsSent)), __LINE__);
        }
        $this->EmailsSent = $emailsSent;
        
        return $this;
    }
    /**
     * Get DaysSinceSale value
     * @return int|null
     */
    public function getDaysSinceSale(): ?int
    {
        return $this->DaysSinceSale;
    }
    /**
     * Set DaysSinceSale value
     * @param int $daysSinceSale
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setDaysSinceSale(?int $daysSinceSale = null): self
    {
        // validation for constraint: int
        if (!is_null($daysSinceSale) && !(is_int($daysSinceSale) || ctype_digit($daysSinceSale))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysSinceSale, true), gettype($daysSinceSale)), __LINE__);
        }
        $this->DaysSinceSale = $daysSinceSale;
        
        return $this;
    }
    /**
     * Get BuyerID value
     * @return string|null
     */
    public function getBuyerID(): ?string
    {
        return $this->BuyerID;
    }
    /**
     * Set BuyerID value
     * @param string $buyerID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setBuyerID(?string $buyerID = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerID) && !is_string($buyerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerID, true), gettype($buyerID)), __LINE__);
        }
        $this->BuyerID = $buyerID;
        
        return $this;
    }
    /**
     * Get BuyerEmail value
     * @return string|null
     */
    public function getBuyerEmail(): ?string
    {
        return $this->BuyerEmail;
    }
    /**
     * Set BuyerEmail value
     * @param string $buyerEmail
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setBuyerEmail(?string $buyerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerEmail, true), gettype($buyerEmail)), __LINE__);
        }
        $this->BuyerEmail = $buyerEmail;
        
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID(): ?int
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setSaleRecordID(?int $saleRecordID = null): self
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !(is_int($saleRecordID) || ctype_digit($saleRecordID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleRecordID, true), gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
        
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus(): ?string
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setRefundStatus(?string $refundStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($refundStatus) && !is_string($refundStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundStatus, true), gettype($refundStatus)), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
