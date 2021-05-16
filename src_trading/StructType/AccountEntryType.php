<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AccountEntry</b> container returned in the <b>GetAccount</b> response. Each <b>AccountEntry</b> container consists of detailed information for a single credit or debit transaction, or an administrative action
 * which occurred on the eBay user's account.
 * @subpackage Structs
 */
class AccountEntryType extends AbstractStructBase
{
    /**
     * The AccountDetailsEntryType
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountDetailsEntryType = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The category of the monetary transaction or administrative action applied to an eBay account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Balance = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time that the entry was posted to the account, in GMT.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The GrossDetailAmount
     * Meta information extracted from the WSDL
     * - documentation: Gross fees that are assessed by eBay (net fees plus VAT, if any). Returned even if VAT does not apply. The value is positive for debits and negative for credits.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $GrossDetailAmount = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: If the account entry is associated with an eBay listing, this field shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field. | Type
     * that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Memo line for the account entry. It can be an empty string.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Memo = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: The rate used for the currency conversion for a transaction.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConversionRate = null;
    /**
     * The NetDetailAmount
     * Meta information extracted from the WSDL
     * - documentation: Net fees that are assessed by eBay, excluding additional surcharges and VAT (if any). Returned even if VAT does not apply. The value is positive for debits (user pays eBay) and negative for credits (eBay pays user).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $NetDetailAmount = null;
    /**
     * The RefNumber
     * Meta information extracted from the WSDL
     * - documentation: This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefNumber = null;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller
     * can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate;
     * it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $VATPercent = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. This field is only returned if the account entry is associated with an order line item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there
     * can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The ReceivedTopRatedDiscount
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount
     * percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a
     * href="https://www.ebay.com/help/selling/seller-levels-performance-standards/seller-levels-performance-standards?id=4080" target="_blank">Becoming a Top Rated Seller</a> help topic. <br/><br/> This field will not be returned until eBay bills the
     * seller for the Final Value Fee for the eligible order line item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReceivedTopRatedDiscount = null;
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if the account fee or credit is associated with an entire (single or multiple line item) order, and not necessarily for a single line item within the order. <br/><br/> <span class="tablenote"><b>Note: </b> In
     * June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading
     * WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned
     * in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to
     * this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally
     * unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and
     * used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or
     * <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderId = null;
    /**
     * The DiscountDetail
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     * @var \macropage\ebaysdk\trading\StructType\DiscountDetailType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DiscountDetailType $DiscountDetail = null;
    /**
     * The Netted
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned with each account entry if the <b>IncludeNettedEntries</b> field is included in the request and set to <code>true</code>. The value indicates whether or not the corresponding account entry value (charge
     * or credit) is a part of the 'Total Netted Charge Amount' or 'Total Netted Credit Amount' values returned in the <b>AccountSummary.NettedTransactionSummary</b> container. <br> <br> If this value is <code>true</code>, it indicates that the
     * corresponding fee was deducted from a seller payout. If the value is <code>false</code>, it indicates that the fee or credit was invoiced to the seller instead. <br> <br> <span class="tablenote"><b>Note: </b> For seller accounts not yet enabled for
     * eBay managed payments, the returned value will always be <code>false</code>. There may also be some seller accounts enabled for managed payments, but the fee netting mechanism may not yet be available for an account. A seller can check their status
     * for the fee netting mechanism by checking the value in the <b>FeeNettingStatus</b> field. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Netted = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AccountEntryType
     * @uses AccountEntryType::setAccountDetailsEntryType()
     * @uses AccountEntryType::setDescription()
     * @uses AccountEntryType::setBalance()
     * @uses AccountEntryType::setDate()
     * @uses AccountEntryType::setGrossDetailAmount()
     * @uses AccountEntryType::setItemID()
     * @uses AccountEntryType::setMemo()
     * @uses AccountEntryType::setConversionRate()
     * @uses AccountEntryType::setNetDetailAmount()
     * @uses AccountEntryType::setRefNumber()
     * @uses AccountEntryType::setVATPercent()
     * @uses AccountEntryType::setTitle()
     * @uses AccountEntryType::setOrderLineItemID()
     * @uses AccountEntryType::setTransactionID()
     * @uses AccountEntryType::setReceivedTopRatedDiscount()
     * @uses AccountEntryType::setOrderId()
     * @uses AccountEntryType::setDiscountDetail()
     * @uses AccountEntryType::setNetted()
     * @uses AccountEntryType::setAny()
     * @param string $accountDetailsEntryType
     * @param string $description
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @param string $date
     * @param \macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount
     * @param string $itemID
     * @param string $memo
     * @param \macropage\ebaysdk\trading\StructType\AmountType $conversionRate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount
     * @param string $refNumber
     * @param float $vATPercent
     * @param string $title
     * @param string $orderLineItemID
     * @param string $transactionID
     * @param bool $receivedTopRatedDiscount
     * @param string $orderId
     * @param \macropage\ebaysdk\trading\StructType\DiscountDetailType $discountDetail
     * @param bool $netted
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $accountDetailsEntryType = null, ?string $description = null, ?\macropage\ebaysdk\trading\StructType\AmountType $balance = null, ?string $date = null, ?\macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount = null, ?string $itemID = null, ?string $memo = null, ?\macropage\ebaysdk\trading\StructType\AmountType $conversionRate = null, ?\macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount = null, ?string $refNumber = null, ?float $vATPercent = null, ?string $title = null, ?string $orderLineItemID = null, ?string $transactionID = null, ?bool $receivedTopRatedDiscount = null, ?string $orderId = null, ?\macropage\ebaysdk\trading\StructType\DiscountDetailType $discountDetail = null, ?bool $netted = null, $any = null)
    {
        $this
            ->setAccountDetailsEntryType($accountDetailsEntryType)
            ->setDescription($description)
            ->setBalance($balance)
            ->setDate($date)
            ->setGrossDetailAmount($grossDetailAmount)
            ->setItemID($itemID)
            ->setMemo($memo)
            ->setConversionRate($conversionRate)
            ->setNetDetailAmount($netDetailAmount)
            ->setRefNumber($refNumber)
            ->setVATPercent($vATPercent)
            ->setTitle($title)
            ->setOrderLineItemID($orderLineItemID)
            ->setTransactionID($transactionID)
            ->setReceivedTopRatedDiscount($receivedTopRatedDiscount)
            ->setOrderId($orderId)
            ->setDiscountDetail($discountDetail)
            ->setNetted($netted)
            ->setAny($any);
    }
    /**
     * Get AccountDetailsEntryType value
     * @return string|null
     */
    public function getAccountDetailsEntryType(): ?string
    {
        return $this->AccountDetailsEntryType;
    }
    /**
     * Set AccountDetailsEntryType value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accountDetailsEntryType
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setAccountDetailsEntryType(?string $accountDetailsEntryType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::valueIsValid($accountDetailsEntryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType', is_array($accountDetailsEntryType) ? implode(', ', $accountDetailsEntryType) : var_export($accountDetailsEntryType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::getValidValues())), __LINE__);
        }
        $this->AccountDetailsEntryType = $accountDetailsEntryType;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Balance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBalance(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setBalance(?\macropage\ebaysdk\trading\StructType\AmountType $balance = null): self
    {
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get GrossDetailAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGrossDetailAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->GrossDetailAmount;
    }
    /**
     * Set GrossDetailAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setGrossDetailAmount(?\macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount = null): self
    {
        $this->GrossDetailAmount = $grossDetailAmount;
        
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get Memo value
     * @return string|null
     */
    public function getMemo(): ?string
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setMemo(?string $memo = null): self
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memo, true), gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConversionRate(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $conversionRate
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setConversionRate(?\macropage\ebaysdk\trading\StructType\AmountType $conversionRate = null): self
    {
        $this->ConversionRate = $conversionRate;
        
        return $this;
    }
    /**
     * Get NetDetailAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetDetailAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->NetDetailAmount;
    }
    /**
     * Set NetDetailAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setNetDetailAmount(?\macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount = null): self
    {
        $this->NetDetailAmount = $netDetailAmount;
        
        return $this;
    }
    /**
     * Get RefNumber value
     * @return string|null
     */
    public function getRefNumber(): ?string
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param string $refNumber
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setRefNumber(?string $refNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refNumber, true), gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent(): ?float
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setVATPercent(?float $vATPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID(): ?string
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setOrderLineItemID(?string $orderLineItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get ReceivedTopRatedDiscount value
     * @return bool|null
     */
    public function getReceivedTopRatedDiscount(): ?bool
    {
        return $this->ReceivedTopRatedDiscount;
    }
    /**
     * Set ReceivedTopRatedDiscount value
     * @param bool $receivedTopRatedDiscount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setReceivedTopRatedDiscount(?bool $receivedTopRatedDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($receivedTopRatedDiscount) && !is_bool($receivedTopRatedDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receivedTopRatedDiscount, true), gettype($receivedTopRatedDiscount)), __LINE__);
        }
        $this->ReceivedTopRatedDiscount = $receivedTopRatedDiscount;
        
        return $this;
    }
    /**
     * Get OrderId value
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param string $orderId
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setOrderId(?string $orderId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get DiscountDetail value
     * @return \macropage\ebaysdk\trading\StructType\DiscountDetailType|null
     */
    public function getDiscountDetail(): ?\macropage\ebaysdk\trading\StructType\DiscountDetailType
    {
        return $this->DiscountDetail;
    }
    /**
     * Set DiscountDetail value
     * @param \macropage\ebaysdk\trading\StructType\DiscountDetailType $discountDetail
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setDiscountDetail(?\macropage\ebaysdk\trading\StructType\DiscountDetailType $discountDetail = null): self
    {
        $this->DiscountDetail = $discountDetail;
        
        return $this;
    }
    /**
     * Get Netted value
     * @return bool|null
     */
    public function getNetted(): ?bool
    {
        return $this->Netted;
    }
    /**
     * Set Netted value
     * @param bool $netted
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setNetted(?bool $netted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($netted) && !is_bool($netted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($netted, true), gettype($netted)), __LINE__);
        }
        $this->Netted = $netted;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
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
