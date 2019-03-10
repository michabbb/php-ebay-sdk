<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseCheckoutStatusRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to update the payment details, the shipping details, and the status of an order.
 * @subpackage Structs
 */
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     * <b>ReviseCheckoutStatus</b>. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Invoice) order, the
     * <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is
     * ignored if present in the same request. <br/> <br/> It is also possible to identify a single line item order with a <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple
     * order line items for that combination. <br/> | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always <code>0</code>. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. The
     * <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseCheckoutStatus</b>. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or
     * multiple line item (Combined Invoice) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. <br>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item (Combined Invoice) order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated
     * upon creation of the order line item. For a Combined Invoice order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Invoice order
     * through the eBay site. A Combined Invoice order can also be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used as an input filter for <b>ReviseCheckoutStatus</b>. <br><br> <b>OrderID</b> overrides an
     * <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The AmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: The total amount paid by the buyer. For a US eBay Motors item, <b>AmountPaid</b> is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is Incomplete and required if it is
     * Complete.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The PaymentMethodUsed
     * Meta informations extracted from the WSDL
     * - documentation: Payment method used by the buyer. This field is required if <b> CheckoutStatus</b> is Complete and the payment method is a trusted payment method other than PayPal. See eBay's <a
     * href="http://pages.ebay.com/help/policies/accepted-payments-policy.html">Accepted Payments Policy</a>. If the payment method is PayPal, this field should not be used since only PayPal can set this field's value to "PayPal". ReviseCheckoutStatus
     * cannot be used for a non-trusted payment method. <b>Note:</b>Required or allowed payment methods vary by site and category.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodUsed;
    /**
     * The CheckoutStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and its value is set to <code>Complete</code> if the seller is using the <b>ReviseCheckoutStatus</b> call to mark the order as 'Paid' by including the <b>PaymentStatus</b> field and setting its value to
     * <code>Paid</code>.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The ShippingService
     * Meta informations extracted from the WSDL
     * - documentation: The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call GeteBayDetails with DetailName set to ShippingServiceDetails. The
     * ShippingServiceDetails.ValidForSellingFlow flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br/><br/> <span class="tablenote"> <strong>Note:</strong>
     * <strong>ReviseCheckoutStatus</strong> is not available for the Global Shipping program; specifying <code>InternationalPriorityShipping</code> as a value for this field will produce an error. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingIncludedInTax
     * Meta informations extracted from the WSDL
     * - documentation: An indicator of whether shipping costs were included in the taxable amount.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * The CheckoutMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutMethod;
    /**
     * The InsuranceType
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceType;
    /**
     * The PaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to mark the order as paid or awaiting payment in My eBay. If you specify 'Paid', My eBay displays an icon for each line item in the order to indicate that the order status is Paid. If you specify 'Pending', this
     * indicates that the order is awaiting payment (some applications may use 'Pending' when the buyer has paid, but the funds have not yet been sent to the seller's financial institution). <br> <br> <b>ReviseCheckoutStatus</b> cannot be used to update
     * payment and checkout status for a non-trusted payment method. See eBay's <a href=" http://pages.ebay.com/help/policies/accepted-payments-policy.html"> Accepted Payments Policy</a> for more information on trusted payment methods. If the payment method
     * is PayPal, this field should not be used since PayPal automatically set this field's value to "Paid" upon receiving the buyer's payment.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentStatus;
    /**
     * The AdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: Discount or charge agreed to by the buyer and seller. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates that the amount is a discount given to the buyer by
     * the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: For internal use only. Do not use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The BuyerID
     * Meta informations extracted from the WSDL
     * - documentation: eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error is returned if there are multiple order line items
     * for that combination. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerID;
    /**
     * The ShippingInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The SalesTax
     * Meta informations extracted from the WSDL
     * - documentation: The sales tax amount for the order. This field should be used if sales tax was applied to the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $SalesTax;
    /**
     * The ShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: Amount of money paid for shipping.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingCost;
    /**
     * The EncryptedID
     * Meta informations extracted from the WSDL
     * - documentation: Not supported.
     * - minOccurs: 0
     * @var string
     */
    public $EncryptedID;
    /**
     * The ExternalTransaction
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if payment for the order occurred off of eBay, and the seller wants to pass in the external payment reference ID.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public $ExternalTransaction;
    /**
     * The MultipleSellerPaymentID
     * Meta informations extracted from the WSDL
     * - documentation: Not supported.
     * - minOccurs: 0
     * @var string
     */
    public $MultipleSellerPaymentID;
    /**
     * The CODCost
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the <b>ReviseCheckoutStatus</b> request if 'COD' (cash-on-delivery) was the payment method selected
     * by the buyer and it is included as the <b>PaymentMethodUsed</b> value in the same request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CODCost;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the
     * <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field to revise the checkout status of the order. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is
     * used to identify a single or multiple line item (Combined Invoice) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
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
    public function __construct($itemID = null, $transactionID = null, $orderID = null, \macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, $paymentMethodUsed = null, $checkoutStatus = null, $shippingService = null, $shippingIncludedInTax = null, $checkoutMethod = null, $insuranceType = null, $paymentStatus = null, \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, $buyerID = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null, \macropage\ebaysdk\trading\StructType\AmountType $salesTax = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null, $encryptedID = null, \macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction = null, $multipleSellerPaymentID = null, \macropage\ebaysdk\trading\StructType\AmountType $cODCost = null, $orderLineItemID = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get PaymentMethodUsed value
     * @return string|null
     */
    public function getPaymentMethodUsed()
    {
        return $this->PaymentMethodUsed;
    }
    /**
     * Set PaymentMethodUsed value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethodUsed
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setPaymentMethodUsed($paymentMethodUsed = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethodUsed)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethodUsed, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodUsed = $paymentMethodUsed;
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutStatus($checkoutStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkoutStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax()
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingIncludedInTax($shippingIncludedInTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }
    /**
     * Get CheckoutMethod value
     * @return string|null
     */
    public function getCheckoutMethod()
    {
        return $this->CheckoutMethod;
    }
    /**
     * Set CheckoutMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutMethod
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutMethod($checkoutMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::valueIsValid($checkoutMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkoutMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\CheckoutMethodCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutMethod = $checkoutMethod;
        return $this;
    }
    /**
     * Get InsuranceType value
     * @return string|null
     */
    public function getInsuranceType()
    {
        return $this->InsuranceType;
    }
    /**
     * Set InsuranceType value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceType
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setInsuranceType($insuranceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::valueIsValid($insuranceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceType, implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceSelectedCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceType = $insuranceType;
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\RCSPaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingInsuranceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTax
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setSalesTax(\macropage\ebaysdk\trading\StructType\AmountType $salesTax = null)
    {
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingCost()
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null)
    {
        $this->ShippingCost = $shippingCost;
        return $this;
    }
    /**
     * Get EncryptedID value
     * @return string|null
     */
    public function getEncryptedID()
    {
        return $this->EncryptedID;
    }
    /**
     * Set EncryptedID value
     * @param string $encryptedID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setEncryptedID($encryptedID = null)
    {
        // validation for constraint: string
        if (!is_null($encryptedID) && !is_string($encryptedID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptedID)), __LINE__);
        }
        $this->EncryptedID = $encryptedID;
        return $this;
    }
    /**
     * Get ExternalTransaction value
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType|null
     */
    public function getExternalTransaction()
    {
        return $this->ExternalTransaction;
    }
    /**
     * Set ExternalTransaction value
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setExternalTransaction(\macropage\ebaysdk\trading\StructType\ExternalTransactionType $externalTransaction = null)
    {
        $this->ExternalTransaction = $externalTransaction;
        return $this;
    }
    /**
     * Get MultipleSellerPaymentID value
     * @return string|null
     */
    public function getMultipleSellerPaymentID()
    {
        return $this->MultipleSellerPaymentID;
    }
    /**
     * Set MultipleSellerPaymentID value
     * @param string $multipleSellerPaymentID
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setMultipleSellerPaymentID($multipleSellerPaymentID = null)
    {
        // validation for constraint: string
        if (!is_null($multipleSellerPaymentID) && !is_string($multipleSellerPaymentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multipleSellerPaymentID)), __LINE__);
        }
        $this->MultipleSellerPaymentID = $multipleSellerPaymentID;
        return $this;
    }
    /**
     * Get CODCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCODCost()
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
     */
    public function setCODCost(\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null)
    {
        $this->CODCost = $cODCost;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType
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
