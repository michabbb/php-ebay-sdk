<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is complete.
 * @subpackage Structs
 */
class TransactionStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the success or failure of the buyer's online payment for an order. Applicable for the payment method that the buyer chose for the order. If the payment failed, the value returned indicates the reason for the failure.
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentStatus;
    /**
     * The CheckoutStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current status of the checkout flow for the order.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The LastTimeModified
     * Meta informations extracted from the WSDL
     * - documentation: Indicates date and time an order's status was last updated (in GMT).
     * - minOccurs: 0
     * @var string
     */
    public $LastTimeModified;
    /**
     * The PaymentMethodUsed
     * Meta informations extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order. If checkout is not yet complete, <b>PaymentMethodUsed</b>, which is returned by the <b>GetItemTransactions</b> call, is set to whatever the buyer selected as his or her
     * preference on the Review Your Purchase page.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodUsed;
    /**
     * The CompleteStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether checkout is complete, incomplete, or pending for an order.
     * - minOccurs: 0
     * @var string
     */
    public $CompleteStatus;
    /**
     * The BuyerSelectedShipping
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page,
     * he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     * - minOccurs: 0
     * @var bool
     */
    public $BuyerSelectedShipping;
    /**
     * The PaymentHoldStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldStatus;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item can be paid for through a payment gateway account. If <strong>IntegratedMerchantCreditCardEnabled</strong> is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller
     * has a payment gateway (Payflow) account. Therefore, if <strong>IntegratedMerchantCreditCardEnabled</strong> is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit card payment is processed through a payment
     * gateway account.
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The eBayPaymentMismatchDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is no longer used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public $eBayPaymentMismatchDetails;
    /**
     * The InquiryStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     * - minOccurs: 0
     * @var string
     */
    public $InquiryStatus;
    /**
     * The ReturnStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnStatus;
    /**
     * The PaymentInstrument
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInstrument;
    /**
     * The DigitalStatus
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then
     * to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     * - minOccurs: 0
     * @var string
     */
    public $DigitalStatus;
    /**
     * The CancelStatus
     * Meta informations extracted from the WSDL
     * - documentation: The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order
     * has already been cancelled.
     * - minOccurs: 0
     * @var string
     */
    public $CancelStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($eBayPaymentStatus = null, $checkoutStatus = null, $lastTimeModified = null, $paymentMethodUsed = null, $completeStatus = null, $buyerSelectedShipping = null, $paymentHoldStatus = null, $integratedMerchantCreditCardEnabled = null, \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, $inquiryStatus = null, $returnStatus = null, $paymentInstrument = null, $digitalStatus = null, $cancelStatus = null, \DOMDocument $any = null)
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
    public function getEBayPaymentStatus()
    {
        return $this->eBayPaymentStatus;
    }
    /**
     * Set eBayPaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayPaymentStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::valueIsValid($eBayPaymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eBayPaymentStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->eBayPaymentStatus = $eBayPaymentStatus;
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
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCheckoutStatus($checkoutStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkoutStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CheckoutStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get LastTimeModified value
     * @return string|null
     */
    public function getLastTimeModified()
    {
        return $this->LastTimeModified;
    }
    /**
     * Set LastTimeModified value
     * @param string $lastTimeModified
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setLastTimeModified($lastTimeModified = null)
    {
        // validation for constraint: string
        if (!is_null($lastTimeModified) && !is_string($lastTimeModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTimeModified)), __LINE__);
        }
        $this->LastTimeModified = $lastTimeModified;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
     * Get CompleteStatus value
     * @return string|null
     */
    public function getCompleteStatus()
    {
        return $this->CompleteStatus;
    }
    /**
     * Set CompleteStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $completeStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCompleteStatus($completeStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($completeStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $completeStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CompleteStatus = $completeStatus;
        return $this;
    }
    /**
     * Get BuyerSelectedShipping value
     * @return bool|null
     */
    public function getBuyerSelectedShipping()
    {
        return $this->BuyerSelectedShipping;
    }
    /**
     * Set BuyerSelectedShipping value
     * @param bool $buyerSelectedShipping
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setBuyerSelectedShipping($buyerSelectedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyerSelectedShipping) && !is_bool($buyerSelectedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyerSelectedShipping)), __LINE__);
        }
        $this->BuyerSelectedShipping = $buyerSelectedShipping;
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus()
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setPaymentHoldStatus($paymentHoldStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentHoldStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }
    /**
     * Get eBayPaymentMismatchDetails value
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType|null
     */
    public function getEBayPaymentMismatchDetails()
    {
        return $this->eBayPaymentMismatchDetails;
    }
    /**
     * Set eBayPaymentMismatchDetails value
     * @param \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setEBayPaymentMismatchDetails(\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null)
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
        return $this;
    }
    /**
     * Get InquiryStatus value
     * @return string|null
     */
    public function getInquiryStatus()
    {
        return $this->InquiryStatus;
    }
    /**
     * Set InquiryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inquiryStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setInquiryStatus($inquiryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::valueIsValid($inquiryStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inquiryStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\InquiryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->InquiryStatus = $inquiryStatus;
        return $this;
    }
    /**
     * Get ReturnStatus value
     * @return string|null
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }
    /**
     * Set ReturnStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::valueIsValid($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnStatus = $returnStatus;
        return $this;
    }
    /**
     * Get PaymentInstrument value
     * @return string|null
     */
    public function getPaymentInstrument()
    {
        return $this->PaymentInstrument;
    }
    /**
     * Set PaymentInstrument value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentInstrument
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setPaymentInstrument($paymentInstrument = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::valueIsValid($paymentInstrument)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentInstrument, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentInstrumentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentInstrument = $paymentInstrument;
        return $this;
    }
    /**
     * Get DigitalStatus value
     * @return string|null
     */
    public function getDigitalStatus()
    {
        return $this->DigitalStatus;
    }
    /**
     * Set DigitalStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $digitalStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setDigitalStatus($digitalStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::valueIsValid($digitalStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $digitalStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\DigitalStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DigitalStatus = $digitalStatus;
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus()
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cancelStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setCancelStatus($cancelStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cancelStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TransactionStatusType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType
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
