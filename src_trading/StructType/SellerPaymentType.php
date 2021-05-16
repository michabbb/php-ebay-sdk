<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated since it was only applicable to the Half.com, and the Half.com site was shut down. </span>
 * @subpackage Structs
 */
class SellerPaymentType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span> | Type that represents the unique identifier for an eBay order. <br><br>
     * <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and
     * multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers
     * who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from
     * the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API
     * change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version
     * 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After
     * the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span
     * class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a
     * value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or
     * <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The SellerInventoryID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerInventoryID = null;
    /**
     * The PrivateNotes
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrivateNotes = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentType = null;
    /**
     * The TransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TransactionPrice = null;
    /**
     * The ShippingReimbursement
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingReimbursement = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Commission = null;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountPaid = null;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaidTime = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, ?string $transactionID = null, ?string $orderID = null, ?string $sellerInventoryID = null, ?string $privateNotes = null, ?string $title = null, ?string $paymentType = null, ?\macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement = null, ?\macropage\ebaysdk\trading\StructType\AmountType $commission = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, ?string $paidTime = null, ?string $orderLineItemID = null, $any = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID(): ?string
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setSellerInventoryID(?string $sellerInventoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInventoryID, true), gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        
        return $this;
    }
    /**
     * Get PrivateNotes value
     * @return string|null
     */
    public function getPrivateNotes(): ?string
    {
        return $this->PrivateNotes;
    }
    /**
     * Set PrivateNotes value
     * @param string $privateNotes
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPrivateNotes(?string $privateNotes = null): self
    {
        // validation for constraint: string
        if (!is_null($privateNotes) && !is_string($privateNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateNotes, true), gettype($privateNotes)), __LINE__);
        }
        $this->PrivateNotes = $privateNotes;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get TransactionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTransactionPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TransactionPrice;
    }
    /**
     * Set TransactionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setTransactionPrice(?\macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null): self
    {
        $this->TransactionPrice = $transactionPrice;
        
        return $this;
    }
    /**
     * Get ShippingReimbursement value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingReimbursement(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingReimbursement;
    }
    /**
     * Set ShippingReimbursement value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setShippingReimbursement(?\macropage\ebaysdk\trading\StructType\AmountType $shippingReimbursement = null): self
    {
        $this->ShippingReimbursement = $shippingReimbursement;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCommission(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $commission
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setCommission(?\macropage\ebaysdk\trading\StructType\AmountType $commission = null): self
    {
        $this->Commission = $commission;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setAmountPaid(?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null): self
    {
        $this->AmountPaid = $amountPaid;
        
        return $this;
    }
    /**
     * Get PaidTime value
     * @return string|null
     */
    public function getPaidTime(): ?string
    {
        return $this->PaidTime;
    }
    /**
     * Set PaidTime value
     * @param string $paidTime
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
     */
    public function setPaidTime(?string $paidTime = null): self
    {
        // validation for constraint: string
        if (!is_null($paidTime) && !is_string($paidTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidTime, true), gettype($paidTime)), __LINE__);
        }
        $this->PaidTime = $paidTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentType
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
