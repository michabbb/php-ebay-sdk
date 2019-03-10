<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type contains information about one or more payments made by the buyer to pay for an order.
 * @subpackage Structs
 */
class PaymentInformationType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going
     * through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to
     * Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government. <br><br> <span class="tablenote"><b>Note: </b> Australia import tax is only applicable
     * to the Australia site. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentTransactionType[]
     */
    public $Payment;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentInformationType
     * @uses PaymentInformationType::setPayment()
     * @uses PaymentInformationType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType[] $payment
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType[] $payment
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $paymentInformationTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInformationTypePaymentItem instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionType) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentTransactionType, "%s" given', is_object($paymentInformationTypePaymentItem) ? get_class($paymentInformationTypePaymentItem) : gettype($paymentInformationTypePaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
     */
    public function addToPayment(\macropage\ebaysdk\trading\StructType\PaymentTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionType) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentTransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @uses \macropage\ebaysdk\trading\StructType\PaymentInformationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
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
