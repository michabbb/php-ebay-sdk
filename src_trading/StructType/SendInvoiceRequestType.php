<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendInvoiceRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to send an order invoice to a buyer. Where applicable, updates to shipping, payment methods, and sales tax made in this request are applied to the specified order as a whole and to the individual order line items
 * whose data are stored in individual <b>Transaction</b> objects.
 * @subpackage Structs
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is required and must be paired with the corresponding <b>TransactionID</b> to
     * identify a single line item order. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to
     * identify a single line item order. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item (Combined Invoice) order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated
     * upon creation of the order line item. For a Combined Invoice order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Invoice order. A
     * Combined Invoice order can also be created by the seller through the <b>AddOrder</b> call. <br><br> Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to identify a
     * single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request. | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The InternationalShippingServiceOptions
     * Meta informations extracted from the WSDL
     * - documentation: If the buyer has an International shipping address, use this container to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International shipping services are offered,
     * (domestic) <b>ShippingServiceOptions</b> should not be included in the request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]
     */
    public $InternationalShippingServiceOptions;
    /**
     * The ShippingServiceOptions
     * Meta informations extracted from the WSDL
     * - documentation: If the buyer has a domestic shipping address, use this container to offer up to four domestic shipping services. If domestic shipping services are offered, <b>InternationalShippingServiceOptions</b> should not be included in the
     * request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]
     */
    public $ShippingServiceOptions;
    /**
     * The SalesTax
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller wishes to apply sales tax to the order. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of
     * the order only or the cost of the order plus shipping and handling.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SalesTaxType
     */
    public $SalesTax;
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The InsuranceFee
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InsuranceFee;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - documentation: This optional field allows a US or German seller to add specific payment methods that were not in the original item listing. The only valid values for this field are 'PayPal' for a US listing, or 'MoneyXferAcceptedInCheckout' (CIP+)
     * for a DE listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The PayPalEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: If the <b>PaymentMethods</b> field is used and set to <code>PayPal</code>, the seller provides his/her PayPal email address in this field.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The CheckoutInstructions
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the seller to provide a message or instructions regarding checkout/payment, or the return policy.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutInstructions;
    /**
     * The EmailCopyToSeller
     * Meta informations extracted from the WSDL
     * - documentation: Flag indicating whether or not the seller wishes to receive an email copy of the invoice sent to the buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $EmailCopyToSeller;
    /**
     * The CODCost
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the <b>SendInvoice</b> request if 'COD' (cash-on-delivery) was the payment method selected by the
     * buyer and it is included as the <b>PaymentMethods</b> value in the same request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CODCost;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to
     * uniquely identify a single line item order. For a multiple line item (Combined Payment) order, <b>OrderID</b> must be used. <br> <br> This field can only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b>
     * or <b>RelistFixedPriceItem</b> calls) is set to SKU. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in
     * between these two IDs. <br> <br> Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Invoice)
     * order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present
     * in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The AdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br> The currency used in this field must be the same currency of the listing site. A
     * positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * Constructor method for SendInvoiceRequestType
     * @uses SendInvoiceRequestType::setItemID()
     * @uses SendInvoiceRequestType::setTransactionID()
     * @uses SendInvoiceRequestType::setOrderID()
     * @uses SendInvoiceRequestType::setInternationalShippingServiceOptions()
     * @uses SendInvoiceRequestType::setShippingServiceOptions()
     * @uses SendInvoiceRequestType::setSalesTax()
     * @uses SendInvoiceRequestType::setInsuranceOption()
     * @uses SendInvoiceRequestType::setInsuranceFee()
     * @uses SendInvoiceRequestType::setPaymentMethods()
     * @uses SendInvoiceRequestType::setPayPalEmailAddress()
     * @uses SendInvoiceRequestType::setCheckoutInstructions()
     * @uses SendInvoiceRequestType::setEmailCopyToSeller()
     * @uses SendInvoiceRequestType::setCODCost()
     * @uses SendInvoiceRequestType::setSKU()
     * @uses SendInvoiceRequestType::setOrderLineItemID()
     * @uses SendInvoiceRequestType::setAdjustmentAmount()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @param \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax
     * @param string $insuranceOption
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceFee
     * @param string[] $paymentMethods
     * @param string $payPalEmailAddress
     * @param string $checkoutInstructions
     * @param bool $emailCopyToSeller
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @param string $sKU
     * @param string $orderLineItemID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, array $internationalShippingServiceOptions = array(), array $shippingServiceOptions = array(), \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null, $insuranceOption = null, \macropage\ebaysdk\trading\StructType\AmountType $insuranceFee = null, array $paymentMethods = array(), $payPalEmailAddress = null, $checkoutInstructions = null, $emailCopyToSeller = null, \macropage\ebaysdk\trading\StructType\AmountType $cODCost = null, $sKU = null, $orderLineItemID = null, \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setInternationalShippingServiceOptions($internationalShippingServiceOptions)
            ->setShippingServiceOptions($shippingServiceOptions)
            ->setSalesTax($salesTax)
            ->setInsuranceOption($insuranceOption)
            ->setInsuranceFee($insuranceFee)
            ->setPaymentMethods($paymentMethods)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setCheckoutInstructions($checkoutInstructions)
            ->setEmailCopyToSeller($emailCopyToSeller)
            ->setCODCost($cODCost)
            ->setSKU($sKU)
            ->setOrderLineItemID($orderLineItemID)
            ->setAdjustmentAmount($adjustmentAmount);
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * Get InternationalShippingServiceOptions value
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]|null
     */
    public function getInternationalShippingServiceOptions()
    {
        return $this->InternationalShippingServiceOptions;
    }
    /**
     * Set InternationalShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInternationalShippingServiceOptions(array $internationalShippingServiceOptions = array())
    {
        foreach ($internationalShippingServiceOptions as $sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeInternationalShippingServiceOptionsItem instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
                throw new \InvalidArgumentException(sprintf('The InternationalShippingServiceOptions property can only contain items of \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, "%s" given', is_object($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) : gettype($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem)), __LINE__);
            }
        }
        $this->InternationalShippingServiceOptions = $internationalShippingServiceOptions;
        return $this;
    }
    /**
     * Add item to InternationalShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToInternationalShippingServiceOptions(\macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
            throw new \InvalidArgumentException(sprintf('The InternationalShippingServiceOptions property can only contain items of \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InternationalShippingServiceOptions[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceOptions value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]|null
     */
    public function getShippingServiceOptions()
    {
        return $this->ShippingServiceOptions;
    }
    /**
     * Set ShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setShippingServiceOptions(array $shippingServiceOptions = array())
    {
        foreach ($shippingServiceOptions as $sendInvoiceRequestTypeShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeShippingServiceOptionsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingServiceOptions property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, "%s" given', is_object($sendInvoiceRequestTypeShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeShippingServiceOptionsItem) : gettype($sendInvoiceRequestTypeShippingServiceOptionsItem)), __LINE__);
            }
        }
        $this->ShippingServiceOptions = $shippingServiceOptions;
        return $this;
    }
    /**
     * Add item to ShippingServiceOptions value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToShippingServiceOptions(\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceOptions property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingServiceOptions[] = $item;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setSalesTax(\macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null)
    {
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceOption, implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get InsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuranceFee()
    {
        return $this->InsuranceFee;
    }
    /**
     * Set InsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInsuranceFee(\macropage\ebaysdk\trading\StructType\AmountType $insuranceFee = null)
    {
        $this->InsuranceFee = $insuranceFee;
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        $invalidValues = array();
        foreach ($paymentMethods as $sendInvoiceRequestTypePaymentMethodsItem) {
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($sendInvoiceRequestTypePaymentMethodsItem)) {
                $invalidValues[] = var_export($sendInvoiceRequestTypePaymentMethodsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress()
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setPayPalEmailAddress($payPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        return $this;
    }
    /**
     * Get CheckoutInstructions value
     * @return string|null
     */
    public function getCheckoutInstructions()
    {
        return $this->CheckoutInstructions;
    }
    /**
     * Set CheckoutInstructions value
     * @param string $checkoutInstructions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setCheckoutInstructions($checkoutInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($checkoutInstructions) && !is_string($checkoutInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkoutInstructions)), __LINE__);
        }
        $this->CheckoutInstructions = $checkoutInstructions;
        return $this;
    }
    /**
     * Get EmailCopyToSeller value
     * @return bool|null
     */
    public function getEmailCopyToSeller()
    {
        return $this->EmailCopyToSeller;
    }
    /**
     * Set EmailCopyToSeller value
     * @param bool $emailCopyToSeller
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setEmailCopyToSeller($emailCopyToSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($emailCopyToSeller) && !is_bool($emailCopyToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($emailCopyToSeller)), __LINE__);
        }
        $this->EmailCopyToSeller = $emailCopyToSeller;
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setCODCost(\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null)
    {
        $this->CODCost = $cODCost;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
