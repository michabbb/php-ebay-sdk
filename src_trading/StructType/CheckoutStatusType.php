<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CheckoutStatus</b> container that is returned in <b>GetOrders</b> and <b>GetOrderTransactions</b> to indicate the current checkout status of the order.
 * @subpackage Structs
 */
class CheckoutStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the payment status of an order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayPaymentStatus = null;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the last time that there was a change in value of the <b>CheckoutStatus.Status</b> field, such as 'Pending' to 'Complete'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedTime = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order. <br><br> <span class="tablenote"><b>Note: </b> For sellers opted in to eBay managed payments, a payment method is not needed at listing time, but this field is still
     * returned. For eBay managed payments orders, the value returned in this field will be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the the value returned in
     * this field will be <code>CCAccepted</code>. Either of these two values will be returned for eBay managed payments orders, regardless of the actual payment method that the buyer uses. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads <code>Incomplete</code> when payment has yet to be initiated,
     * <code>Pending</code> when payment has been initiated but is in process, and <code>Complete</code> when the payment process has completed. <br><br> <b>Note</b>: If the <b>PaymentMethod</b> is <code>CashOnPickup</code>, the <b>Status</b> value will
     * read <code>Complete</code> right at checkout, even though the seller may not have been officially paid yet, and the <b>eBayPaymentStatus</b> field will read <code>NoPaymentFailure</code>. The <b>Status</b> value will remain as <code>Complete</code>
     * even if the seller uses <b>ReviseCheckoutStatus</b> to change the checkout status to <code>Pending</code>. However, the <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to
     * <code>PaymentInProcess</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field being returned as <code>true</code> indicates that the order can be paid for through the seller's payment gateway account. <br><br> <span class="tablenote"><b>Note: </b> As of May 1, 2019, no eBay marketplace support
     * electronic payments through a seller's Integrated Merchant Credit Card (IMCC) account. To accept online credit card payments from buyers, a seller must use accept PayPal, or opt in to eBay managed payments program (if available to seller). <br><br>
     * For sellers who are opted in to eBay managed payments, this field will actually be returned as <code>true</code>, but this will indicate that the seller is opted in to eBay managed payments, and does not indicate that the seller's IMCC account is
     * being used for payments. </span> <br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of
     * the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IntegratedMerchantCreditCardEnabled = null;
    /**
     * The eBayPaymentMismatchDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null;
    /**
     * The PaymentInstrument
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentInstrument = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CheckoutStatusType
     * @uses CheckoutStatusType::setEBayPaymentStatus()
     * @uses CheckoutStatusType::setLastModifiedTime()
     * @uses CheckoutStatusType::setPaymentMethod()
     * @uses CheckoutStatusType::setStatus()
     * @uses CheckoutStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses CheckoutStatusType::setEBayPaymentMismatchDetails()
     * @uses CheckoutStatusType::setPaymentInstrument()
     * @uses CheckoutStatusType::setAny()
     * @param string $eBayPaymentStatus
     * @param string $lastModifiedTime
     * @param string $paymentMethod
     * @param string $status
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $paymentInstrument
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eBayPaymentStatus = null, ?string $lastModifiedTime = null, ?string $paymentMethod = null, ?string $status = null, ?bool $integratedMerchantCreditCardEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, ?string $paymentInstrument = null, $any = null)
    {
        $this
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setLastModifiedTime($lastModifiedTime)
            ->setPaymentMethod($paymentMethod)
            ->setStatus($status)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setEBayPaymentMismatchDetails($eBayPaymentMismatchDetails)
            ->setPaymentInstrument($paymentInstrument)
            ->setAny($any);
    }
    /**
     * Get eBayPaymentStatus value
     * @return string|null
     */
    public function getEBayPaymentStatus(): ?string
    {
        return $this->eBayPaymentStatus;
    }
    /**
     * Set eBayPaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eBayPaymentStatus
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setEBayPaymentStatus(?string $eBayPaymentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::valueIsValid($eBayPaymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType', is_array($eBayPaymentStatus) ? implode(', ', $eBayPaymentStatus) : var_export($eBayPaymentStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->eBayPaymentStatus = $eBayPaymentStatus;
        
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime(): ?string
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setLastModifiedTime(?string $lastModifiedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled(): ?bool
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setIntegratedMerchantCreditCardEnabled(?bool $integratedMerchantCreditCardEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($integratedMerchantCreditCardEnabled, true), gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        
        return $this;
    }
    /**
     * Get eBayPaymentMismatchDetails value
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType|null
     */
    public function getEBayPaymentMismatchDetails(): ?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
    {
        return $this->eBayPaymentMismatchDetails;
    }
    /**
     * Set eBayPaymentMismatchDetails value
     * @param \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setEBayPaymentMismatchDetails(?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null): self
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
        
        return $this;
    }
    /**
     * Get PaymentInstrument value
     * @return string|null
     */
    public function getPaymentInstrument(): ?string
    {
        return $this->PaymentInstrument;
    }
    /**
     * Set PaymentInstrument value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentInstrument
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setPaymentInstrument(?string $paymentInstrument = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::valueIsValid($paymentInstrument)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType', is_array($paymentInstrument) ? implode(', ', $paymentInstrument) : var_export($paymentInstrument, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentInstrument = $paymentInstrument;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
