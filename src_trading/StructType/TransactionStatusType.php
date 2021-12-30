<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is complete.
 * @subpackage Structs
 */
class TransactionStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayPaymentStatus = null;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current status of the checkout flow for the order. If the payment was successfuly processed, a value of <code>CheckoutComplete</code> will be returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CheckoutStatus = null;
    /**
     * The LastTimeModified
     * Meta information extracted from the WSDL
     * - documentation: Indicates date and time an order's status was last updated (in GMT).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastTimeModified = null;
    /**
     * The PaymentMethodUsed
     * Meta information extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order. <br><br> <span class="tablenote"><b>Note: </b> Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The
     * value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be
     * <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as
     * 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethodUsed = null;
    /**
     * The CompleteStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether checkout is complete, incomplete, or pending for an order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompleteStatus = null;
    /**
     * The BuyerSelectedShipping
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page,
     * he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyerSelectedShipping = null;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item. <br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and
     * <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentHoldStatus = null;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
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
     * The InquiryStatus
     * Meta information extracted from the WSDL
     * - documentation: This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InquiryStatus = null;
    /**
     * The ReturnStatus
     * Meta information extracted from the WSDL
     * - documentation: This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnStatus = null;
    /**
     * The PaymentInstrument
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentInstrument = null;
    /**
     * The DigitalStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then
     * to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DigitalStatus = null;
    /**
     * The CancelStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order
     * has already been cancelled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TransactionStatusType
     * @uses TransactionStatusType::setEBayPaymentStatus()
     * @uses TransactionStatusType::setCheckoutStatus()
     * @uses TransactionStatusType::setLastTimeModified()
     * @uses TransactionStatusType::setPaymentMethodUsed()
     * @uses TransactionStatusType::setCompleteStatus()
     * @uses TransactionStatusType::setBuyerSelectedShipping()
     * @uses TransactionStatusType::setPaymentHoldStatus()
     * @uses TransactionStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses TransactionStatusType::setEBayPaymentMismatchDetails()
     * @uses TransactionStatusType::setInquiryStatus()
     * @uses TransactionStatusType::setReturnStatus()
     * @uses TransactionStatusType::setPaymentInstrument()
     * @uses TransactionStatusType::setDigitalStatus()
     * @uses TransactionStatusType::setCancelStatus()
     * @uses TransactionStatusType::setAny()
     * @param string $eBayPaymentStatus
     * @param string $checkoutStatus
     * @param string $lastTimeModified
     * @param string $paymentMethodUsed
     * @param string $completeStatus
     * @param bool $buyerSelectedShipping
     * @param string $paymentHoldStatus
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $inquiryStatus
     * @param string $returnStatus
     * @param string $paymentInstrument
     * @param string $digitalStatus
     * @param string $cancelStatus
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eBayPaymentStatus = null, ?string $checkoutStatus = null, ?string $lastTimeModified = null, ?string $paymentMethodUsed = null, ?string $completeStatus = null, ?bool $buyerSelectedShipping = null, ?string $paymentHoldStatus = null, ?bool $integratedMerchantCreditCardEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, ?string $inquiryStatus = null, ?string $returnStatus = null, ?string $paymentInstrument = null, ?string $digitalStatus = null, ?string $cancelStatus = null, $any = null)
    {
        $this
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setCheckoutStatus($checkoutStatus)
            ->setLastTimeModified($lastTimeModified)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setCompleteStatus($completeStatus)
            ->setBuyerSelectedShipping($buyerSelectedShipping)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setEBayPaymentMismatchDetails($eBayPaymentMismatchDetails)
            ->setInquiryStatus($inquiryStatus)
            ->setReturnStatus($returnStatus)
            ->setPaymentInstrument($paymentInstrument)
            ->setDigitalStatus($digitalStatus)
            ->setCancelStatus($cancelStatus)
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus(): ?string
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCheckoutStatus(?string $checkoutStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType', is_array($checkoutStatus) ? implode(', ', $checkoutStatus) : var_export($checkoutStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        
        return $this;
    }
    /**
     * Get LastTimeModified value
     * @return string|null
     */
    public function getLastTimeModified(): ?string
    {
        return $this->LastTimeModified;
    }
    /**
     * Set LastTimeModified value
     * @param string $lastTimeModified
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setLastTimeModified(?string $lastTimeModified = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTimeModified) && !is_string($lastTimeModified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTimeModified, true), gettype($lastTimeModified)), __LINE__);
        }
        $this->LastTimeModified = $lastTimeModified;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
     * Get CompleteStatus value
     * @return string|null
     */
    public function getCompleteStatus(): ?string
    {
        return $this->CompleteStatus;
    }
    /**
     * Set CompleteStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $completeStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCompleteStatus(?string $completeStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($completeStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType', is_array($completeStatus) ? implode(', ', $completeStatus) : var_export($completeStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CompleteStatus = $completeStatus;
        
        return $this;
    }
    /**
     * Get BuyerSelectedShipping value
     * @return bool|null
     */
    public function getBuyerSelectedShipping(): ?bool
    {
        return $this->BuyerSelectedShipping;
    }
    /**
     * Set BuyerSelectedShipping value
     * @param bool $buyerSelectedShipping
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setBuyerSelectedShipping(?bool $buyerSelectedShipping = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyerSelectedShipping) && !is_bool($buyerSelectedShipping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyerSelectedShipping, true), gettype($buyerSelectedShipping)), __LINE__);
        }
        $this->BuyerSelectedShipping = $buyerSelectedShipping;
        
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus(): ?string
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setPaymentHoldStatus(?string $paymentHoldStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType', is_array($paymentHoldStatus) ? implode(', ', $paymentHoldStatus) : var_export($paymentHoldStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setEBayPaymentMismatchDetails(?\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null): self
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
        
        return $this;
    }
    /**
     * Get InquiryStatus value
     * @return string|null
     */
    public function getInquiryStatus(): ?string
    {
        return $this->InquiryStatus;
    }
    /**
     * Set InquiryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $inquiryStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setInquiryStatus(?string $inquiryStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::valueIsValid($inquiryStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType', is_array($inquiryStatus) ? implode(', ', $inquiryStatus) : var_export($inquiryStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->InquiryStatus = $inquiryStatus;
        
        return $this;
    }
    /**
     * Get ReturnStatus value
     * @return string|null
     */
    public function getReturnStatus(): ?string
    {
        return $this->ReturnStatus;
    }
    /**
     * Set ReturnStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $returnStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setReturnStatus(?string $returnStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::valueIsValid($returnStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType', is_array($returnStatus) ? implode(', ', $returnStatus) : var_export($returnStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnStatus = $returnStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
     * Get DigitalStatus value
     * @return string|null
     */
    public function getDigitalStatus(): ?string
    {
        return $this->DigitalStatus;
    }
    /**
     * Set DigitalStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $digitalStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setDigitalStatus(?string $digitalStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::valueIsValid($digitalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType', is_array($digitalStatus) ? implode(', ', $digitalStatus) : var_export($digitalStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DigitalStatus = $digitalStatus;
        
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus(): ?string
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cancelStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCancelStatus(?string $cancelStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType', is_array($cancelStatus) ? implode(', ', $cancelStatus) : var_export($cancelStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
