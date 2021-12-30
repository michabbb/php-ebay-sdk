<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendInvoiceRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call enables a seller to send an order invoice to a buyer. Optionally, and when applicable, this call can also be used to update the shipping service options available for shipment, to provide payment or checkout instructions to
 * the buyer, to make a cost adjustment for the order/order line item, or to provide one or more offline payment methods (for orders where offline payment is an option).
 * @subpackage Structs
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> value (or <b>SKU</b> value) is conditionally required and must be paired with the corresponding
     * <b>TransactionID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing,
     * the <b>TransactionID</b> value for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> value is required and must be paired with the corresponding
     * <b>ItemID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order. <br><br> Unless the <b>ItemID</b> value (or <b>SKU</b> value) and corresponding <b>TransactionID</b> value, or the <b>OrderLineItemID</b> value is
     * provided in the request to identify a single line item order, the <b>OrderID</b> value must be specified. If <b>OrderID</b> value is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields are ignored if present
     * in the same request. <br><br> <span class="tablenote"><b>Note: </b> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all Trading API calls that
     * accept Order ID values as filters in the request payload will support the identifiers for both unpaid and paid orders. <br><br> Sellers can check to see if an order has been paid by looking for a value of <code>Complete</code> in the
     * <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers
     * should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay order. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values.
     * The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique
     * order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your
     * integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order).
     * Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications
     * must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether
     * the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and
     * even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading
     * API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an
     * order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or
     * <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific
     * order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The InternationalShippingServiceOptions
     * Meta information extracted from the WSDL
     * - documentation: If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of them is Global Shipping Program). If one or more international shipping service
     * options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]
     */
    protected ?array $InternationalShippingServiceOptions = null;
    /**
     * The ShippingServiceOptions
     * Meta information extracted from the WSDL
     * - documentation: If the buyer has a domestic shipping address, use this container to offer up to four domestic shipping service options. If one or more domestic shipping service options are offered through this container, the
     * <b>InternationalShippingServiceOptions</b> container should not be included in the same request. <br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]
     */
    protected ?array $ShippingServiceOptions = null;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller wishes to apply sales tax to the order if the buyer lives in a state/jurisdiction where sales tax is not already collected automatically by eBay and remitted to the tax authority. The amount of
     * sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling. <br><br> <span class="tablenote"><b>Note:
     * </b> As of November 4, 2021, eBay now collects and remits sales tax to the tax authorities for all but one US state (Missouri) and five US territories. So, in most cases, this container will not be applicable and should not be used in a request. For
     * more information, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SalesTaxType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SalesTaxType $SalesTax = null;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceOption = null;
    /**
     * The InsuranceFee
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InsuranceFee = null;
    /**
     * The PaymentMethods
     * Meta information extracted from the WSDL
     * - documentation: This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the
     * available online payment options that are available to buyers, and not the seller. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $PaymentMethods = null;
    /**
     * The PayPalEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE</b>. This field is no longer applicable, as eBay now controls the available online payment options that are available to buyers, and not the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalEmailAddress = null;
    /**
     * The CheckoutInstructions
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to provide a message or instructions regarding checkout/payment, or the return policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CheckoutInstructions = null;
    /**
     * The EmailCopyToSeller
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wishes to receive an email copy of the invoice sent to the buyer.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EmailCopyToSeller = null;
    /**
     * The CODCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the <b>SendInvoice</b> request if 'COD' (cash-on-delivery) was the payment method selected by the
     * buyer and it is included as the <b>PaymentMethods</b> value in the same request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CODCost = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to
     * uniquely identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used. <br> <br> This field should only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> calls) is set to <code>SKU</code>. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this
     * type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). <br> <br>
     * Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item order, the <b>OrderLineItemID</b> must be
     * specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br> The currency used in this field must be the same currency of the listing site. A
     * positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AdjustmentAmount = null;
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
    public function __construct(?string $itemID = null, ?string $transactionID = null, ?string $orderID = null, ?array $internationalShippingServiceOptions = null, ?array $shippingServiceOptions = null, ?\macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null, ?string $insuranceOption = null, ?\macropage\ebaysdk\trading\StructType\AmountType $insuranceFee = null, ?array $paymentMethods = null, ?string $payPalEmailAddress = null, ?string $checkoutInstructions = null, ?bool $emailCopyToSeller = null, ?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null, ?string $sKU = null, ?string $orderLineItemID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * Get InternationalShippingServiceOptions value
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]
     */
    public function getInternationalShippingServiceOptions(): ?array
    {
        return $this->InternationalShippingServiceOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalShippingServiceOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalShippingServiceOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalShippingServiceOptionsForArrayConstraintsFromSetInternationalShippingServiceOptions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeInternationalShippingServiceOptionsItem instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
                $invalidValues[] = is_object($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem), var_export($sendInvoiceRequestTypeInternationalShippingServiceOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InternationalShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInternationalShippingServiceOptions(?array $internationalShippingServiceOptions = null): self
    {
        // validation for constraint: array
        if ('' !== ($internationalShippingServiceOptionsArrayErrorMessage = self::validateInternationalShippingServiceOptionsForArrayConstraintsFromSetInternationalShippingServiceOptions($internationalShippingServiceOptions))) {
            throw new InvalidArgumentException($internationalShippingServiceOptionsArrayErrorMessage, __LINE__);
        }
        $this->InternationalShippingServiceOptions = $internationalShippingServiceOptions;
        
        return $this;
    }
    /**
     * Add item to InternationalShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToInternationalShippingServiceOptions(\macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
            throw new InvalidArgumentException(sprintf('The InternationalShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InternationalShippingServiceOptions[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingServiceOptions value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions(): ?array
    {
        return $this->ShippingServiceOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypeShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$sendInvoiceRequestTypeShippingServiceOptionsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
                $invalidValues[] = is_object($sendInvoiceRequestTypeShippingServiceOptionsItem) ? get_class($sendInvoiceRequestTypeShippingServiceOptionsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypeShippingServiceOptionsItem), var_export($sendInvoiceRequestTypeShippingServiceOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setShippingServiceOptions(?array $shippingServiceOptions = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceOptionsArrayErrorMessage = self::validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions($shippingServiceOptions))) {
            throw new InvalidArgumentException($shippingServiceOptionsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceOptions = $shippingServiceOptions;
        
        return $this;
    }
    /**
     * Add item to ShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToShippingServiceOptions(\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
            throw new InvalidArgumentException(sprintf('The ShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceOptions[] = $item;
        
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType|null
     */
    public function getSalesTax(): ?\macropage\ebaysdk\trading\StructType\SalesTaxType
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setSalesTax(?\macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null): self
    {
        $this->SalesTax = $salesTax;
        
        return $this;
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption(): ?string
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInsuranceOption(?string $insuranceOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        
        return $this;
    }
    /**
     * Get InsuranceFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuranceFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InsuranceFee;
    }
    /**
     * Set InsuranceFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuranceFee
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setInsuranceFee(?\macropage\ebaysdk\trading\StructType\AmountType $insuranceFee = null): self
    {
        $this->InsuranceFee = $insuranceFee;
        
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]
     */
    public function getPaymentMethods(): ?array
    {
        return $this->PaymentMethods;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendInvoiceRequestTypePaymentMethodsItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($sendInvoiceRequestTypePaymentMethodsItem)) {
                $invalidValues[] = is_object($sendInvoiceRequestTypePaymentMethodsItem) ? get_class($sendInvoiceRequestTypePaymentMethodsItem) : sprintf('%s(%s)', gettype($sendInvoiceRequestTypePaymentMethodsItem), var_export($sendInvoiceRequestTypePaymentMethodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setPaymentMethods(?array $paymentMethods = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodsArrayErrorMessage = self::validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods($paymentMethods))) {
            throw new InvalidArgumentException($paymentMethodsArrayErrorMessage, __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function addToPaymentMethods(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress(): ?string
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setPayPalEmailAddress(?string $payPalEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalEmailAddress, true), gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        
        return $this;
    }
    /**
     * Get CheckoutInstructions value
     * @return string|null
     */
    public function getCheckoutInstructions(): ?string
    {
        return $this->CheckoutInstructions;
    }
    /**
     * Set CheckoutInstructions value
     * @param string $checkoutInstructions
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setCheckoutInstructions(?string $checkoutInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($checkoutInstructions) && !is_string($checkoutInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutInstructions, true), gettype($checkoutInstructions)), __LINE__);
        }
        $this->CheckoutInstructions = $checkoutInstructions;
        
        return $this;
    }
    /**
     * Get EmailCopyToSeller value
     * @return bool|null
     */
    public function getEmailCopyToSeller(): ?bool
    {
        return $this->EmailCopyToSeller;
    }
    /**
     * Set EmailCopyToSeller value
     * @param bool $emailCopyToSeller
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setEmailCopyToSeller(?bool $emailCopyToSeller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($emailCopyToSeller) && !is_bool($emailCopyToSeller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailCopyToSeller, true), gettype($emailCopyToSeller)), __LINE__);
        }
        $this->EmailCopyToSeller = $emailCopyToSeller;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setCODCost(?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null): self
    {
        $this->CODCost = $cODCost;
        
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SendInvoiceRequestType
     */
    public function setAdjustmentAmount(?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null): self
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        
        return $this;
    }
}
