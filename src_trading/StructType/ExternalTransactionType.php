<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container consisting of details related to payment of an eBay order on an external system such as PayPal. This container is only returned if payment has been made on an order. For <b>GetSellerTransaactions</b> and
 * <b>GetItemTransactions</b>, this container is not returned for multiple line item orders.
 * @subpackage Structs
 */
class ExternalTransactionType extends AbstractStructBase
{
    /**
     * The ExternalTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a PayPal payment of an eBay order. If the order was purchased with a payment method other than PayPal, "SIS" is returned, which stands for "Send Information To Seller." This field is only returned after payment
     * has been made.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionID;
    /**
     * The ExternalTransactionTime
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp for payment transaction.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionTime;
    /**
     * The FeeOrCreditAmount
     * Meta informations extracted from the WSDL
     * - documentation: Fee Amount is a positive value and Credit Amount is a negative value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The PaymentOrRefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: If this dollar value is a positive amount, this is the amount that the buyer pays the seller through PayPal for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer. <br><br>
     * <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any Australia import tax charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the
     * seller. Australia import tax is only applicable to the Australia site. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PaymentOrRefundAmount;
    /**
     * The ExternalTransactionStatus
     * Meta informations extracted from the WSDL
     * - documentation: The current processing status of a PayPal payment for an eBay order.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExternalTransactionType
     * @uses ExternalTransactionType::setExternalTransactionID()
     * @uses ExternalTransactionType::setExternalTransactionTime()
     * @uses ExternalTransactionType::setFeeOrCreditAmount()
     * @uses ExternalTransactionType::setPaymentOrRefundAmount()
     * @uses ExternalTransactionType::setExternalTransactionStatus()
     * @uses ExternalTransactionType::setAny()
     * @param string $externalTransactionID
     * @param string $externalTransactionTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount
     * @param string $externalTransactionStatus
     * @param \DOMDocument $any
     */
    public function __construct($externalTransactionID = null, $externalTransactionTime = null, \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount = null, $externalTransactionStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setExternalTransactionID($externalTransactionID)
            ->setExternalTransactionTime($externalTransactionTime)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setPaymentOrRefundAmount($paymentOrRefundAmount)
            ->setExternalTransactionStatus($externalTransactionStatus)
            ->setAny($any);
    }
    /**
     * Get ExternalTransactionID value
     * @return string|null
     */
    public function getExternalTransactionID()
    {
        return $this->ExternalTransactionID;
    }
    /**
     * Set ExternalTransactionID value
     * @param string $externalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionID($externalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($externalTransactionID) && !is_string($externalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalTransactionID)), __LINE__);
        }
        $this->ExternalTransactionID = $externalTransactionID;
        return $this;
    }
    /**
     * Get ExternalTransactionTime value
     * @return string|null
     */
    public function getExternalTransactionTime()
    {
        return $this->ExternalTransactionTime;
    }
    /**
     * Set ExternalTransactionTime value
     * @param string $externalTransactionTime
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionTime($externalTransactionTime = null)
    {
        // validation for constraint: string
        if (!is_null($externalTransactionTime) && !is_string($externalTransactionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalTransactionTime)), __LINE__);
        }
        $this->ExternalTransactionTime = $externalTransactionTime;
        return $this;
    }
    /**
     * Get FeeOrCreditAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFeeOrCreditAmount()
    {
        return $this->FeeOrCreditAmount;
    }
    /**
     * Set FeeOrCreditAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setFeeOrCreditAmount(\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null)
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }
    /**
     * Get PaymentOrRefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPaymentOrRefundAmount()
    {
        return $this->PaymentOrRefundAmount;
    }
    /**
     * Set PaymentOrRefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setPaymentOrRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount = null)
    {
        $this->PaymentOrRefundAmount = $paymentOrRefundAmount;
        return $this;
    }
    /**
     * Get ExternalTransactionStatus value
     * @return string|null
     */
    public function getExternalTransactionStatus()
    {
        return $this->ExternalTransactionStatus;
    }
    /**
     * Set ExternalTransactionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $externalTransactionStatus
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionStatus($externalTransactionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid($externalTransactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $externalTransactionStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ExternalTransactionStatus = $externalTransactionStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ExternalTransactionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
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
