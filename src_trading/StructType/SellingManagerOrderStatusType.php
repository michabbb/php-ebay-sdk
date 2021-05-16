<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerOrderStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details on the status of an order.
 * @subpackage Structs
 */
class SellingManagerOrderStatusType extends AbstractStructBase
{
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current status of the checkout flow for the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CheckoutStatus = null;
    /**
     * The PaidStatus
     * Meta information extracted from the WSDL
     * - documentation: The paid status of the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaidStatus = null;
    /**
     * The ShippedStatus
     * Meta information extracted from the WSDL
     * - documentation: The shipped status of the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippedStatus = null;
    /**
     * The eBayPaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: The success or failure of a buyer's online payment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayPaymentStatus = null;
    /**
     * The PayPalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the PayPal transaction for the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalTransactionID = null;
    /**
     * The PaymentMethodUsed
     * Meta information extracted from the WSDL
     * - documentation: The payment method the buyer selected for paying the seller for the order. If checkout is incomplete, PaymentMethodUsed is set to whatever the buyer selected as his or her preference on the Review Your Purchase page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethodUsed = null;
    /**
     * The FeedbackReceived
     * Meta information extracted from the WSDL
     * - documentation: The type of feedback received (if feedback was received).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackReceived = null;
    /**
     * The FeedbackSent
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller has left feedback.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FeedbackSent = null;
    /**
     * The TotalEmailsSent
     * Meta information extracted from the WSDL
     * - documentation: The total emails sent.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalEmailsSent = null;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: Contains the current status of a hold on a PayPal payment. The payment hold that is referred to as a "payment review" hold results from a possible issue with a buyer. The payment hold referred to as a "merchant hold" results from a
     * possible issue with a seller. For more information, please see the link below.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentHoldStatus = null;
    /**
     * The SellerInvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: The custom invoice number.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerInvoiceNumber = null;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which the seller marks the item as shipped, either set by default as the date date the item was marked shipped or set explicitly by the seller using the Edit Sales Record page. Note that sellers have the ability to set
     * this value up to 3 calendar days in the future.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippedTime = null;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: Date on which the order was paid.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaidTime = null;
    /**
     * The LastEmailSentTime
     * Meta information extracted from the WSDL
     * - documentation: The time that the last email was sent.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastEmailSentTime = null;
    /**
     * The SellerInvoiceTime
     * Meta information extracted from the WSDL
     * - documentation: The time the invoice was sent. This is a seller-entered value for VAT-enabled sites. It is returned only for business sellers in VAT-enabled sites.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerInvoiceTime = null;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the order can be paid for through a payment gateway (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then integrated merchant credit card (IMCC) is enabled for credit cards
     * because the seller has a payment gateway account. Therefore, if <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed
     * through a payment gateway account. A payment gateway account is used by sellers to accept online credit cards (Visa, MasterCard, American Express, and Discover). <br><br> <span class="tablenote"><b>Note: </b> Beginning on May 1, 2019, eBay will no
     * longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the
     * program is available to that seller). </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IntegratedMerchantCreditCardEnabled = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerOrderStatusType
     * @uses SellingManagerOrderStatusType::setCheckoutStatus()
     * @uses SellingManagerOrderStatusType::setPaidStatus()
     * @uses SellingManagerOrderStatusType::setShippedStatus()
     * @uses SellingManagerOrderStatusType::setEBayPaymentStatus()
     * @uses SellingManagerOrderStatusType::setPayPalTransactionID()
     * @uses SellingManagerOrderStatusType::setPaymentMethodUsed()
     * @uses SellingManagerOrderStatusType::setFeedbackReceived()
     * @uses SellingManagerOrderStatusType::setFeedbackSent()
     * @uses SellingManagerOrderStatusType::setTotalEmailsSent()
     * @uses SellingManagerOrderStatusType::setPaymentHoldStatus()
     * @uses SellingManagerOrderStatusType::setSellerInvoiceNumber()
     * @uses SellingManagerOrderStatusType::setShippedTime()
     * @uses SellingManagerOrderStatusType::setPaidTime()
     * @uses SellingManagerOrderStatusType::setLastEmailSentTime()
     * @uses SellingManagerOrderStatusType::setSellerInvoiceTime()
     * @uses SellingManagerOrderStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses SellingManagerOrderStatusType::setAny()
     * @param string $checkoutStatus
     * @param string $paidStatus
     * @param string $shippedStatus
     * @param string $eBayPaymentStatus
     * @param string $payPalTransactionID
     * @param string $paymentMethodUsed
     * @param string $feedbackReceived
     * @param bool $feedbackSent
     * @param int $totalEmailsSent
     * @param string $paymentHoldStatus
     * @param string $sellerInvoiceNumber
     * @param string $shippedTime
     * @param string $paidTime
     * @param string $lastEmailSentTime
     * @param string $sellerInvoiceTime
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $checkoutStatus = null, ?string $paidStatus = null, ?string $shippedStatus = null, ?string $eBayPaymentStatus = null, ?string $payPalTransactionID = null, ?string $paymentMethodUsed = null, ?string $feedbackReceived = null, ?bool $feedbackSent = null, ?int $totalEmailsSent = null, ?string $paymentHoldStatus = null, ?string $sellerInvoiceNumber = null, ?string $shippedTime = null, ?string $paidTime = null, ?string $lastEmailSentTime = null, ?string $sellerInvoiceTime = null, ?bool $integratedMerchantCreditCardEnabled = null, $any = null)
    {
        $this
            ->setCheckoutStatus($checkoutStatus)
            ->setPaidStatus($paidStatus)
            ->setShippedStatus($shippedStatus)
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setPayPalTransactionID($payPalTransactionID)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setFeedbackReceived($feedbackReceived)
            ->setFeedbackSent($feedbackSent)
            ->setTotalEmailsSent($totalEmailsSent)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setSellerInvoiceNumber($sellerInvoiceNumber)
            ->setShippedTime($shippedTime)
            ->setPaidTime($paidTime)
            ->setLastEmailSentTime($lastEmailSentTime)
            ->setSellerInvoiceTime($sellerInvoiceTime)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * Get PaidStatus value
     * @return string|null
     */
    public function getPaidStatus(): ?string
    {
        return $this->PaidStatus;
    }
    /**
     * Set PaidStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaidStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaidStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paidStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setPaidStatus(?string $paidStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerPaidStatusCodeType::valueIsValid($paidStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerPaidStatusCodeType', is_array($paidStatus) ? implode(', ', $paidStatus) : var_export($paidStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerPaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaidStatus = $paidStatus;
        
        return $this;
    }
    /**
     * Get ShippedStatus value
     * @return string|null
     */
    public function getShippedStatus(): ?string
    {
        return $this->ShippedStatus;
    }
    /**
     * Set ShippedStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerShippedStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerShippedStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippedStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setShippedStatus(?string $shippedStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerShippedStatusCodeType::valueIsValid($shippedStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerShippedStatusCodeType', is_array($shippedStatus) ? implode(', ', $shippedStatus) : var_export($shippedStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerShippedStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ShippedStatus = $shippedStatus;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * Get PayPalTransactionID value
     * @return string|null
     */
    public function getPayPalTransactionID(): ?string
    {
        return $this->PayPalTransactionID;
    }
    /**
     * Set PayPalTransactionID value
     * @param string $payPalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setPayPalTransactionID(?string $payPalTransactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($payPalTransactionID) && !is_string($payPalTransactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalTransactionID, true), gettype($payPalTransactionID)), __LINE__);
        }
        $this->PayPalTransactionID = $payPalTransactionID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * Get FeedbackReceived value
     * @return string|null
     */
    public function getFeedbackReceived(): ?string
    {
        return $this->FeedbackReceived;
    }
    /**
     * Set FeedbackReceived value
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackReceived
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setFeedbackReceived(?string $feedbackReceived = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid($feedbackReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType', is_array($feedbackReceived) ? implode(', ', $feedbackReceived) : var_export($feedbackReceived, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackReceived = $feedbackReceived;
        
        return $this;
    }
    /**
     * Get FeedbackSent value
     * @return bool|null
     */
    public function getFeedbackSent(): ?bool
    {
        return $this->FeedbackSent;
    }
    /**
     * Set FeedbackSent value
     * @param bool $feedbackSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setFeedbackSent(?bool $feedbackSent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feedbackSent) && !is_bool($feedbackSent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedbackSent, true), gettype($feedbackSent)), __LINE__);
        }
        $this->FeedbackSent = $feedbackSent;
        
        return $this;
    }
    /**
     * Get TotalEmailsSent value
     * @return int|null
     */
    public function getTotalEmailsSent(): ?int
    {
        return $this->TotalEmailsSent;
    }
    /**
     * Set TotalEmailsSent value
     * @param int $totalEmailsSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setTotalEmailsSent(?int $totalEmailsSent = null): self
    {
        // validation for constraint: int
        if (!is_null($totalEmailsSent) && !(is_int($totalEmailsSent) || ctype_digit($totalEmailsSent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalEmailsSent, true), gettype($totalEmailsSent)), __LINE__);
        }
        $this->TotalEmailsSent = $totalEmailsSent;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * Get SellerInvoiceNumber value
     * @return string|null
     */
    public function getSellerInvoiceNumber(): ?string
    {
        return $this->SellerInvoiceNumber;
    }
    /**
     * Set SellerInvoiceNumber value
     * @param string $sellerInvoiceNumber
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceNumber(?string $sellerInvoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerInvoiceNumber) && !is_string($sellerInvoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInvoiceNumber, true), gettype($sellerInvoiceNumber)), __LINE__);
        }
        $this->SellerInvoiceNumber = $sellerInvoiceNumber;
        
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime(): ?string
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setShippedTime(?string $shippedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippedTime, true), gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * Get LastEmailSentTime value
     * @return string|null
     */
    public function getLastEmailSentTime(): ?string
    {
        return $this->LastEmailSentTime;
    }
    /**
     * Set LastEmailSentTime value
     * @param string $lastEmailSentTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setLastEmailSentTime(?string $lastEmailSentTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastEmailSentTime) && !is_string($lastEmailSentTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastEmailSentTime, true), gettype($lastEmailSentTime)), __LINE__);
        }
        $this->LastEmailSentTime = $lastEmailSentTime;
        
        return $this;
    }
    /**
     * Get SellerInvoiceTime value
     * @return string|null
     */
    public function getSellerInvoiceTime(): ?string
    {
        return $this->SellerInvoiceTime;
    }
    /**
     * Set SellerInvoiceTime value
     * @param string $sellerInvoiceTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceTime(?string $sellerInvoiceTime = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerInvoiceTime) && !is_string($sellerInvoiceTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerInvoiceTime, true), gettype($sellerInvoiceTime)), __LINE__);
        }
        $this->SellerInvoiceTime = $sellerInvoiceTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerOrderStatusType
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
