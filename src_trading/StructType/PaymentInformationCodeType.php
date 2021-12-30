<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentInformationCodeType extends AbstractStructBase
{
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[]
     */
    protected ?array $Payment = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentInformationCodeType
     * @uses PaymentInformationCodeType::setPayment()
     * @uses PaymentInformationCodeType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[] $payment
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $payment = null, $any = null)
    {
        $this
            ->setPayment($payment)
            ->setAny($any);
    }
    /**
     * Get Payment value
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentInformationCodeTypePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInformationCodeTypePaymentItem instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType) {
                $invalidValues[] = is_object($paymentInformationCodeTypePaymentItem) ? get_class($paymentInformationCodeTypePaymentItem) : sprintf('%s(%s)', gettype($paymentInformationCodeTypePaymentItem), var_export($paymentInformationCodeTypePaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType[] $payment
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
     */
    public function setPayment(?array $payment = null): self
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
     * @param \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
     */
    public function addToPayment(\macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentTransactionCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
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
