<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * @subpackage Structs
 */
class PaymentTransactionType extends AbstractStructBase
{
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status of a buyer payment that is allocated to a specified payee.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentStatus = null;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the eBay user or eBay partner who submitted the payment. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be
     * returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserIdentityType $Payer = null;
    /**
     * The Payee
     * Meta information extracted from the WSDL
     * - documentation: The person or organization who is to receive the payment allocation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserIdentityType $Payee = null;
    /**
     * The PaymentTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time when the payment is received by the payee.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentTime = null;
    /**
     * The PaymentAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the payment that is allocated to the payee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PaymentAmount = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: A unique transaction ID for the payment. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>. <br><br> <b>For GetOrders, GetOrderTransactions, and
     * GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment
     * identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TransactionReferenceType $ReferenceID = null;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: Fee Amount is a positive value and Credit Amount is a negative value. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $FeeOrCreditAmount = null;
    /**
     * The PaymentReferenceID
     * Meta information extracted from the WSDL
     * - documentation: The payment transaction ID. <br/><br/> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer
     * returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType[]
     */
    protected ?array $PaymentReferenceID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentTransactionType
     * @uses PaymentTransactionType::setPaymentStatus()
     * @uses PaymentTransactionType::setPayer()
     * @uses PaymentTransactionType::setPayee()
     * @uses PaymentTransactionType::setPaymentTime()
     * @uses PaymentTransactionType::setPaymentAmount()
     * @uses PaymentTransactionType::setReferenceID()
     * @uses PaymentTransactionType::setFeeOrCreditAmount()
     * @uses PaymentTransactionType::setPaymentReferenceID()
     * @uses PaymentTransactionType::setAny()
     * @param string $paymentStatus
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payer
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payee
     * @param string $paymentTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentAmount
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType[] $paymentReferenceID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $paymentStatus = null, ?\macropage\ebaysdk\trading\StructType\UserIdentityType $payer = null, ?\macropage\ebaysdk\trading\StructType\UserIdentityType $payee = null, ?string $paymentTime = null, ?\macropage\ebaysdk\trading\StructType\AmountType $paymentAmount = null, ?\macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, ?array $paymentReferenceID = null, $any = null)
    {
        $this
            ->setPaymentStatus($paymentStatus)
            ->setPayer($payer)
            ->setPayee($payee)
            ->setPaymentTime($paymentTime)
            ->setPaymentAmount($paymentAmount)
            ->setReferenceID($referenceID)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setPaymentReferenceID($paymentReferenceID)
            ->setAny($any);
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentStatus
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentStatus(?string $paymentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid($paymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType', is_array($paymentStatus) ? implode(', ', $paymentStatus) : var_export($paymentStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        
        return $this;
    }
    /**
     * Get Payer value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getPayer(): ?\macropage\ebaysdk\trading\StructType\UserIdentityType
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payer
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPayer(?\macropage\ebaysdk\trading\StructType\UserIdentityType $payer = null): self
    {
        $this->Payer = $payer;
        
        return $this;
    }
    /**
     * Get Payee value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getPayee(): ?\macropage\ebaysdk\trading\StructType\UserIdentityType
    {
        return $this->Payee;
    }
    /**
     * Set Payee value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payee
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPayee(?\macropage\ebaysdk\trading\StructType\UserIdentityType $payee = null): self
    {
        $this->Payee = $payee;
        
        return $this;
    }
    /**
     * Get PaymentTime value
     * @return string|null
     */
    public function getPaymentTime(): ?string
    {
        return $this->PaymentTime;
    }
    /**
     * Set PaymentTime value
     * @param string $paymentTime
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentTime(?string $paymentTime = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentTime) && !is_string($paymentTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTime, true), gettype($paymentTime)), __LINE__);
        }
        $this->PaymentTime = $paymentTime;
        
        return $this;
    }
    /**
     * Get PaymentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPaymentAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentAmount
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentAmount(?\macropage\ebaysdk\trading\StructType\AmountType $paymentAmount = null): self
    {
        $this->PaymentAmount = $paymentAmount;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType|null
     */
    public function getReferenceID(): ?\macropage\ebaysdk\trading\StructType\TransactionReferenceType
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setReferenceID(?\macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null): self
    {
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
    /**
     * Get FeeOrCreditAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFeeOrCreditAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->FeeOrCreditAmount;
    }
    /**
     * Set FeeOrCreditAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setFeeOrCreditAmount(?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null): self
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        
        return $this;
    }
    /**
     * Get PaymentReferenceID value
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType[]
     */
    public function getPaymentReferenceID(): ?array
    {
        return $this->PaymentReferenceID;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentReferenceID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentReferenceID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentReferenceIDForArrayConstraintsFromSetPaymentReferenceID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentTransactionTypePaymentReferenceIDItem) {
            // validation for constraint: itemType
            if (!$paymentTransactionTypePaymentReferenceIDItem instanceof \macropage\ebaysdk\trading\StructType\TransactionReferenceType) {
                $invalidValues[] = is_object($paymentTransactionTypePaymentReferenceIDItem) ? get_class($paymentTransactionTypePaymentReferenceIDItem) : sprintf('%s(%s)', gettype($paymentTransactionTypePaymentReferenceIDItem), var_export($paymentTransactionTypePaymentReferenceIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentReferenceID property can only contain items of type \macropage\ebaysdk\trading\StructType\TransactionReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentReferenceID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType[] $paymentReferenceID
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentReferenceID(?array $paymentReferenceID = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentReferenceIDArrayErrorMessage = self::validatePaymentReferenceIDForArrayConstraintsFromSetPaymentReferenceID($paymentReferenceID))) {
            throw new InvalidArgumentException($paymentReferenceIDArrayErrorMessage, __LINE__);
        }
        $this->PaymentReferenceID = $paymentReferenceID;
        
        return $this;
    }
    /**
     * Add item to PaymentReferenceID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function addToPaymentReferenceID(\macropage\ebaysdk\trading\StructType\TransactionReferenceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TransactionReferenceType) {
            throw new InvalidArgumentException(sprintf('The PaymentReferenceID property can only contain items of type \macropage\ebaysdk\trading\StructType\TransactionReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentReferenceID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
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
