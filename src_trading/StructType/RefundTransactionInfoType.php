<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>Refund</strong> container, which consists of detailed information on an In-Store Pickup item refund. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is
 * generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class RefundTransactionInfoType extends AbstractStructBase
{
    /**
     * The RefundStatus
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the success or failure of the attempt by the merchant to refund or provide store credit to the buyer for a returned In-Store Pickup item. This field is always returned with the <strong>Refund</strong> container.
     * <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large
     * retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature,
     * creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The RefundType
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates whether the merchant refunded or provided a store credit to the buyer for the returned In-Store Pickup item. Applicable values are 'REFUND' and 'STORE_CREDIT'. This value is picked up by eBay when the merchant
     * passes in the <strong>REFUND_TYPE</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup
     * feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers
     * can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay
     * of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundType;
    /**
     * The RefundTo
     * Meta informations extracted from the WSDL
     * - documentation: This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container. <br/><br/> <b>For GetOrders, GetOrderTransactions,
     * and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct
     * refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item
     * that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store
     * Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup
     * status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType
     */
    public $RefundTo;
    /**
     * The RefundTime
     * Meta informations extracted from the WSDL
     * - documentation: This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED). <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible
     * for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price
     * listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory
     * Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundTime;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned if the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT). <br/><br/>
     * <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail
     * merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store
     * locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This value is a merchant-defined identifier used to track In-Store Pickup refunds. This value is picked up by eBay when the merchant passes in the <strong>REFUND_ID</strong> parameter through the payload of an
     * <strong>ORDER.RETURNED</strong> notification sent to eBay. This field is not returned if the merchant does not set this value through <strong>ORDER.RETURNED</strong> notification. <br/><br/> <b>For GetOrders, GetOrderTransactions, and
     * GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment
     * identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that
     * is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup
     * functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status
     * changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType
     */
    public $ReferenceID;
    /**
     * The FeeOrCreditAmount
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value is the total amount of the refund to the buyer for the In-Store Pickup order. Typically, this dollar value will be the same as the <strong>RefundAmount</strong> value, unless the merchant is issuing multiple refund
     * transactions to the buyer, in which case, the <strong>FeeOrCreditAmount</strong> value will be the cumulative amount for multiple refund transactions. This field is not returned if the merchant issued the buyer a store credit instead of a refund
     * (RefundType=STORE_CREDIT). <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is
     * generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with
     * the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundTransactionInfoType
     * @uses RefundTransactionInfoType::setRefundStatus()
     * @uses RefundTransactionInfoType::setRefundType()
     * @uses RefundTransactionInfoType::setRefundTo()
     * @uses RefundTransactionInfoType::setRefundTime()
     * @uses RefundTransactionInfoType::setRefundAmount()
     * @uses RefundTransactionInfoType::setReferenceID()
     * @uses RefundTransactionInfoType::setFeeOrCreditAmount()
     * @uses RefundTransactionInfoType::setAny()
     * @param string $refundStatus
     * @param string $refundType
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo
     * @param string $refundTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @param \DOMDocument $any
     */
    public function __construct($refundStatus = null, $refundType = null, \macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo = null, $refundTime = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null, \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundStatus($refundStatus)
            ->setRefundType($refundType)
            ->setRefundTo($refundTo)
            ->setRefundTime($refundTime)
            ->setRefundAmount($refundAmount)
            ->setReferenceID($referenceID)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setAny($any);
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        return $this;
    }
    /**
     * Get RefundType value
     * @return string|null
     */
    public function getRefundType()
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundType
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundType($refundType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::valueIsValid($refundType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundType, implode(', ', \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->RefundType = $refundType;
        return $this;
    }
    /**
     * Get RefundTo value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getRefundTo()
    {
        return $this->RefundTo;
    }
    /**
     * Set RefundTo value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundTo(\macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo = null)
    {
        $this->RefundTo = $refundTo;
        return $this;
    }
    /**
     * Get RefundTime value
     * @return string|null
     */
    public function getRefundTime()
    {
        return $this->RefundTime;
    }
    /**
     * Set RefundTime value
     * @param string $refundTime
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundTime($refundTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundTime) && !is_string($refundTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundTime)), __LINE__);
        }
        $this->RefundTime = $refundTime;
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount()
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setFeeOrCreditAmount(\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null)
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
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
