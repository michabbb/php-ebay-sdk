<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>CheckoutStatus</b> container that is returned in <b>GetOrders</b> and <b>GetOrderTransactions</b> to indicate the current checkout status of the order.
 * @subpackage Structs
 */
class CheckoutStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the payment status of an order.
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentStatus;
    /**
     * The LastModifiedTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the last time that there was a change in value of the <b>CheckoutStatus.Status</b> field, such as 'Pending' to 'Complete'.
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethod;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads 'Incomplete' when payment has yet to be initiated, 'Pending' when payment
     * has been initiated but is in process, and 'Complete' when the payment process has completed. <br><br> <b>Note</b>: If the PaymentMethod is CashOnPickup, the Status value will read Complete right at Checkout, even though the seller may not have been
     * officially paid yet, and the eBayPaymentStatus field will read NoPaymentFailure. The CheckoutStatus.Status value will remain as Complete even if the seller uses ReviseCheckoutStatus to change the checkout status to Pending. However, the
     * eBayPaymentStatus value in GetOrders will change from NoPaymentFailure to PaymentInProcess.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item can be paid for through a payment gateway (Payflow) account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a
     * payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
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
     * The PaymentInstrument
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInstrument;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($eBayPaymentStatus = null, $lastModifiedTime = null, $paymentMethod = null, $status = null, $integratedMerchantCreditCardEnabled = null, \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, $paymentInstrument = null, \DOMDocument $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public function setEBayPaymentMismatchDetails(\macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null)
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CheckoutStatusType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType
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
