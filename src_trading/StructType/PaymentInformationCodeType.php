<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformationCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentInformationCodeType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[]
     */
    public $Payment;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentInformationCodeType
     * @uses PaymentInformationCodeType::setPayment()
     * @uses PaymentInformationCodeType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[] $payment
     * @param \DOMDocument $any
     */
    public function __construct(array $payment = array(), \DOMDocument $any = null)
    {
        $this
            ->setPayment($payment)
            ->setAny($any);
    }
    /**
     * Get Payment value
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[] $payment
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $paymentInformationCodeTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInformationCodeTypePaymentItem instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType, "%s" given', is_object($paymentInformationCodeTypePaymentItem) ? get_class($paymentInformationCodeTypePaymentItem) : gettype($paymentInformationCodeTypePaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
     */
    public function addToPayment(\macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payment[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
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
