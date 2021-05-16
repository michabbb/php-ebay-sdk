<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains information about one or more payments made by the buyer to pay for an order.
 * @subpackage Structs
 */
class PaymentInformationType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going
     * through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to
     * Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government. <br><br> <span class="tablenote"><b>Note: </b> Australia import tax is only applicable
     * to the Australia site. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentTransactionType[]
     */
    protected array $Payment = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentInformationType
     * @uses PaymentInformationType::setPayment()
     * @uses PaymentInformationType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType[] $payment
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $payment = [], $any = null)
    {
        $this
            ->setPayment($payment)
            ->setAny($any);
    }
    /**
     * Get Payment value
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType[]
     */
    public function getPayment(): array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentInformationTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInformationTypePaymentItem instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionType) {
                $invalidValues[] = is_object($paymentInformationTypePaymentItem) ? get_class($paymentInformationTypePaymentItem) : sprintf('%s(%s)', gettype($paymentInformationTypePaymentItem), var_export($paymentInformationTypePaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType[] $payment
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
     */
    public function setPayment(array $payment = []): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintsFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
     */
    public function addToPayment(\macropage\ebaysdk\trading\StructType\PaymentTransactionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionType) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Payment[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType
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
