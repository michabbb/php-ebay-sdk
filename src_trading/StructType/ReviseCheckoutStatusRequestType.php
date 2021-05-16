<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseCheckoutStatusRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to update the payment details, the shipping details, and the status of an order.
 * @subpackage Structs
 */
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value to identify and order line
     * item in a <b>ReviseCheckoutStatus</b> call. <br><br> Unless an <b>OrderLineItemID</b> value is used to identify a an order line item, or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     * specified. <br><br> If an <b>OrderID</b> or an <b>OrderLineItemID</b> value is specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. <br/> <br/> It is also possible to identify an order line item with a
     * <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple order line items for that combination. <br/> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a sales transaction. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an
     * auction listing can only have one sale/winning bidder during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. An <b>ItemID</b>/<b>TransactionID</b> pair can be used to identify an order line
     * item in a <b>ReviseCheckoutStatus</b> call. <br><br> Unless an <b>OrderLineItemID</b> is used to identify an order line item, or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For
     * a multiple line item order, <b>OrderID</b> should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order. <br><br> If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are
     * specified in the same request. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the
     * old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in
     * API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate
     * payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>ReviseCheckoutStatus</b> call, will support the identifiers
     * for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known
     * and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the
     * <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers
     * should not fulfill orders until buyer has made payment. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: The total amount paid by the buyer. For a motor vehicle listing that requires a deposit, the <b>AmountPaid</b> value is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is
     * <code>Incomplete</code> and required if it is <code>Complete</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountPaid = null;
    /**
     * The PaymentMethodUsed
     * Meta information extracted from the WSDL
     * - documentation: Payment method used by the buyer. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary. <br><br> See
     * eBay's <a href="https://www.ebay.com/help/policies/payment-policies/accepted-payments-policy?id=4269" target="_blank">Accepted Payments Policy</a> for more information about safe offline payment methods. Accepted payment methods will vary by category
     * and by country.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethodUsed = null;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is included and its value is set to <code>Complete</code> if the seller is using the <b>ReviseCheckoutStatus</b> call to mark the order as 'Paid' by including the <b>PaymentStatus</b> field and setting its value to
     * <code>Paid</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CheckoutStatus = null;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call <b>GeteBayDetails</b> with the <b>DetailName</b> field set to
     * <code>ShippingServiceDetails</code>. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present in the response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a
     * listing. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This field should not be used for orders being shipping through the Global Shipping program; specifying <code>InternationalPriorityShipping</code> as a value for this field will
     * produce an error. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingService = null;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if sales tax for the order is applied against shipping costs (in addition to the item cost).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIncludedInTax = null;
    /**
     * The CheckoutMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CheckoutMethod = null;
    /**
     * The InsuranceType
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceType = null;
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is used to mark the order as paid or awaiting payment in eBay's system. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform,
     * this field will not be necessary. A user specifies <code>Pending</code> to indicate that the order is awaiting payment or if the the buyer has initiated payment, but the funds have not yet been sent to the seller's financial institution.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentStatus = null;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This field may be used if the buyer and seller have agreed on making an adjustment to the order total. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates
     * that the amount is a discount given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AdjustmentAmount = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: For internal use only. Do not use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The BuyerID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error may occur if there are multiple order line items
     * between the buyer and seller. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerID = null;
    /**
     * The ShippingInsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingInsuranceCost = null;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: This field is used if sales tax is being applied to the order. If the sales tax amount is also being applied to the shipping charges (in addition to the item cost), the <b>ShippingIncludedInTax</b> boolean field should be included in
     * the call request and set to <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $SalesTax = null;
    /**
     * The ShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is used to show the cost of shipping being applied to the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingCost = null;
    /**
     * The EncryptedID
     * Meta information extracted from the WSDL
     * - documentation: Not supported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EncryptedID = null;
    /**
     * The ExternalTransaction
     * Meta information extracted from the WSDL
     * - documentation: This container is used if payment for the order occurred off of eBay, and the seller wants to pass in the external payment reference ID.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExternalTransactionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExternalTransactionType $ExternalTransaction = null;
    /**
     * The MultipleSellerPaymentID
     * Meta information extracted from the WSDL
     * - documentation: Not supported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MultipleSellerPaymentID = null;
    /**
     * The CODCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the <b>ReviseCheckoutStatus</b> request if 'COD' (cash-on-delivery) was the payment method selected
     * by the buyer and it is included as the <b>PaymentMethodUsed</b> value in the same request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CODCost = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). <br><br> Unless
     * an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If
     * <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * Constructor method for ReviseCheckoutStatusRequestType
     * @uses ReviseCheckoutStatusRequestType::setItemID()
     * @uses ReviseCheckoutStatusRequestType::setTransactionID()
     * @uses ReviseCheckoutStatusRequestType::setOrderID()
     * @uses ReviseCheckoutStatusRequestType::setAmountPaid()
     * @uses ReviseCheckoutStatusRequestType::setPaymentMethodUsed()
     * @uses ReviseCheckoutStatusRequestType::setCheckoutStatus()
     * @uses ReviseCheckoutStatusRequestType::setShippingService()
     * @uses ReviseCheckoutStatusRequestType::setShippingIncludedInTax()
     * @uses ReviseCheckoutStatusRequestType::setCheckoutMethod()
     * @uses ReviseCheckoutStatusRequestType::setInsuranceType()
     * @uses ReviseCheckoutStatusRequestType::setPaymentStatus()
     * @uses ReviseCheckoutStatusRequestType::setAdjustmentAmount()
     * @uses ReviseCheckoutStatusRequestType::setShippingAddress()
     * @uses ReviseCheckoutStatusRequestType::setBuyerID()
     * @uses ReviseCheckoutStatusRequestType::setShippingInsuranceCost()
     * @uses ReviseCheckoutStatusRequestType::setSalesTax()
     * @uses ReviseCheckoutStatusRequestType::setShippingCost()
     * @uses ReviseCheckoutStatusRequestType::setEncryptedID()
     * @uses ReviseCheckoutStatusRequestType::setExternalTransaction()
     * @uses ReviseCheckoutStatusRequestType::setMultipleSellerPaymentID()
     * @uses ReviseCheckoutStatusRequestType::setCODCost()
     * @uses ReviseCheckoutStatusRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @param string $paymentMethodUsed
     * @param string $checkoutStatus
     * @param string $shippingService
     * @param bool $shippingIncludedInTax
     * @param string $checkoutMethod
     * @param string $insuranceType
     * @param string $paymentStatus
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param string $buyerID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTax
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @param string $encryptedID
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction
     * @param string $multipleSellerPaymentID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @param string $orderLineItemID
     */
    public function __construct(?string $itemID = null, ?string $transactionID = null, ?string $orderID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, ?string $paymentMethodUsed = null, ?string $checkoutStatus = null, ?string $shippingService = null, ?bool $shippingIncludedInTax = null, ?string $checkoutMethod = null, ?string $insuranceType = null, ?string $paymentStatus = null, ?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?string $buyerID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $salesTax = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null, ?string $encryptedID = null, ?\macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction = null, ?string $multipleSellerPaymentID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null, ?string $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setAmountPaid($amountPaid)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setCheckoutStatus($checkoutStatus)
            ->setShippingService($shippingService)
            ->setShippingIncludedInTax($shippingIncludedInTax)
            ->setCheckoutMethod($checkoutMethod)
            ->setInsuranceType($insuranceType)
            ->setPaymentStatus($paymentStatus)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setShippingAddress($shippingAddress)
            ->setBuyerID($buyerID)
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setSalesTax($salesTax)
            ->setShippingCost($shippingCost)
            ->setEncryptedID($encryptedID)
            ->setExternalTransaction($externalTransaction)
            ->setMultipleSellerPaymentID($multipleSellerPaymentID)
            ->setCODCost($cODCost)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPaid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setAmountPaid(?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null): self
    {
        $this->AmountPaid = $amountPaid;
        
        return $this;
    }
    /**
     * Get PaymentMethodUsed value
     * @return string|null
     */
    public function getPaymentMethodUsed(): ?string
    {
        return $this->PaymentMethodUsed;
    }
    /**
     * Set PaymentMethodUsed value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentMethodUsed
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setPaymentMethodUsed(?string $paymentMethodUsed = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethodUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($paymentMethodUsed) ? implode(', ', $paymentMethodUsed) : var_export($paymentMethodUsed, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodUsed = $paymentMethodUsed;
        
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus(): ?string
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutStatus(?string $checkoutStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType', is_array($checkoutStatus) ? implode(', ', $checkoutStatus) : var_export($checkoutStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService(): ?string
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingService(?string $shippingService = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingService, true), gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax(): ?bool
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingIncludedInTax(?bool $shippingIncludedInTax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIncludedInTax, true), gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        
        return $this;
    }
    /**
     * Get CheckoutMethod value
     * @return string|null
     */
    public function getCheckoutMethod(): ?string
    {
        return $this->CheckoutMethod;
    }
    /**
     * Set CheckoutMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $checkoutMethod
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutMethod(?string $checkoutMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::valueIsValid($checkoutMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType', is_array($checkoutMethod) ? implode(', ', $checkoutMethod) : var_export($checkoutMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutMethod = $checkoutMethod;
        
        return $this;
    }
    /**
     * Get InsuranceType value
     * @return string|null
     */
    public function getInsuranceType(): ?string
    {
        return $this->InsuranceType;
    }
    /**
     * Set InsuranceType value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $insuranceType
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setInsuranceType(?string $insuranceType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::valueIsValid($insuranceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType', is_array($insuranceType) ? implode(', ', $insuranceType) : var_export($insuranceType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceType = $insuranceType;
        
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setPaymentStatus(?string $paymentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::valueIsValid($paymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType', is_array($paymentStatus) ? implode(', ', $paymentStatus) : var_export($paymentStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setAdjustmentAmount(?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null): self
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingInsuranceCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingInsuranceCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null): self
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalesTax(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTax
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setSalesTax(?\macropage\ebaysdk\trading\StructType\AmountType $salesTax = null): self
    {
        $this->SalesTax = $salesTax;
        
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null): self
    {
        $this->ShippingCost = $shippingCost;
        
        return $this;
    }
    /**
     * Get EncryptedID value
     * @return string|null
     */
    public function getEncryptedID(): ?string
    {
        return $this->EncryptedID;
    }
    /**
     * Set EncryptedID value
     * @param string $encryptedID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setEncryptedID(?string $encryptedID = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptedID) && !is_string($encryptedID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptedID, true), gettype($encryptedID)), __LINE__);
        }
        $this->EncryptedID = $encryptedID;
        
        return $this;
    }
    /**
     * Get ExternalTransaction value
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType|null
     */
    public function getExternalTransaction(): ?\macropage\ebaysdk\trading\StructType\ExternalTransactionType
    {
        return $this->ExternalTransaction;
    }
    /**
     * Set ExternalTransaction value
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setExternalTransaction(?\macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction = null): self
    {
        $this->ExternalTransaction = $externalTransaction;
        
        return $this;
    }
    /**
     * Get MultipleSellerPaymentID value
     * @return string|null
     */
    public function getMultipleSellerPaymentID(): ?string
    {
        return $this->MultipleSellerPaymentID;
    }
    /**
     * Set MultipleSellerPaymentID value
     * @param string $multipleSellerPaymentID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setMultipleSellerPaymentID(?string $multipleSellerPaymentID = null): self
    {
        // validation for constraint: string
        if (!is_null($multipleSellerPaymentID) && !is_string($multipleSellerPaymentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multipleSellerPaymentID, true), gettype($multipleSellerPaymentID)), __LINE__);
        }
        $this->MultipleSellerPaymentID = $multipleSellerPaymentID;
        
        return $this;
    }
    /**
     * Get CODCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCODCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCODCost(?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null): self
    {
        $this->CODCost = $cODCost;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
}
