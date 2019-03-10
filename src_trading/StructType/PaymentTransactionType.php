<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * @subpackage Structs
 */
class PaymentTransactionType extends AbstractStructBase
{
    /**
     * The PaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: The current status of a buyer payment that is allocated to a specified payee.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentStatus;
    /**
     * The Payer
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the eBay user or eBay partner who submitted the payment. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be
     * returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType
     */
    public $Payer;
    /**
     * The Payee
     * Meta informations extracted from the WSDL
     * - documentation: The person or organization who is to receive the payment allocation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType
     */
    public $Payee;
    /**
     * The PaymentTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the payment is received by the payee.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTime;
    /**
     * The PaymentAmount
     * Meta informations extracted from the WSDL
     * - documentation: The amount of the payment that is allocated to the payee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PaymentAmount;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: A unique transaction ID for the payment. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>. <br><br> <b>For GetOrders, GetOrderTransactions, and
     * GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment
     * identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType
     */
    public $ReferenceID;
    /**
     * The FeeOrCreditAmount
     * Meta informations extracted from the WSDL
     * - documentation: Fee Amount is a positive value and Credit Amount is a negative value. <br/><br/> This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The PaymentReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: The payment transaction ID. <br/><br/> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer
     * returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType[]
     */
    public $PaymentReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($paymentStatus = null, \macropage\ebaysdk\trading\StructType\UserIdentityType $payer = null, \macropage\ebaysdk\trading\StructType\UserIdentityType $payee = null, $paymentTime = null, \macropage\ebaysdk\trading\StructType\AmountType $paymentAmount = null, \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null, \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, array $paymentReferenceID = array(), \DOMDocument $any = null)
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
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get Payer value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getPayer()
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payer
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPayer(\macropage\ebaysdk\trading\StructType\UserIdentityType $payer = null)
    {
        $this->Payer = $payer;
        return $this;
    }
    /**
     * Get Payee value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getPayee()
    {
        return $this->Payee;
    }
    /**
     * Set Payee value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $payee
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPayee(\macropage\ebaysdk\trading\StructType\UserIdentityType $payee = null)
    {
        $this->Payee = $payee;
        return $this;
    }
    /**
     * Get PaymentTime value
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->PaymentTime;
    }
    /**
     * Set PaymentTime value
     * @param string $paymentTime
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentTime($paymentTime = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTime) && !is_string($paymentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTime)), __LINE__);
        }
        $this->PaymentTime = $paymentTime;
        return $this;
    }
    /**
     * Get PaymentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentAmount
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentAmount(\macropage\ebaysdk\trading\StructType\AmountType $paymentAmount = null)
    {
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setReferenceID(\macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null)
    {
        $this->ReferenceID = $referenceID;
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setFeeOrCreditAmount(\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null)
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }
    /**
     * Get PaymentReferenceID value
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType[]|null
     */
    public function getPaymentReferenceID()
    {
        return $this->PaymentReferenceID;
    }
    /**
     * Set PaymentReferenceID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType[] $paymentReferenceID
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function setPaymentReferenceID(array $paymentReferenceID = array())
    {
        foreach ($paymentReferenceID as $paymentTransactionTypePaymentReferenceIDItem) {
            // validation for constraint: itemType
            if (!$paymentTransactionTypePaymentReferenceIDItem instanceof \macropage\ebaysdk\trading\StructType\TransactionReferenceType) {
                throw new \InvalidArgumentException(sprintf('The PaymentReferenceID property can only contain items of \macropage\ebaysdk\trading\StructType\TransactionReferenceType, "%s" given', is_object($paymentTransactionTypePaymentReferenceIDItem) ? get_class($paymentTransactionTypePaymentReferenceIDItem) : gettype($paymentTransactionTypePaymentReferenceIDItem)), __LINE__);
            }
        }
        $this->PaymentReferenceID = $paymentReferenceID;
        return $this;
    }
    /**
     * Add item to PaymentReferenceID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $item
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
     */
    public function addToPaymentReferenceID(\macropage\ebaysdk\trading\StructType\TransactionReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TransactionReferenceType) {
            throw new \InvalidArgumentException(sprintf('The PaymentReferenceID property can only contain items of \macropage\ebaysdk\trading\StructType\TransactionReferenceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentReferenceID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaymentTransactionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentTransactionType
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
