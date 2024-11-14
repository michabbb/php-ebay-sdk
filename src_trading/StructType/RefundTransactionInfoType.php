<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>Refund</strong> container, which consists of detailed information on an In-Store Pickup item refund. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is
 * generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class RefundTransactionInfoType extends AbstractStructBase
{
    /**
     * The RefundType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether the merchant refunded or provided a store credit to the buyer for the returned In-Store Pickup item. Applicable values are 'REFUND' and 'STORE_CREDIT'. This value is picked up by eBay when the merchant
     * passes in the <strong>REFUND_TYPE</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup
     * feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers
     * can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay
     * of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundType = null;
    /**
     * The RefundTo
     * Meta information extracted from the WSDL
     * - documentation: This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container. <br/><br/> <b>For GetOrders and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned
     * to the buyer or seller, but the refund recipient will be masked to all third parties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store
     * Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox
     * environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound
     * Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserIdentityType $RefundTo = null;
    /**
     * The RefundTime
     * Meta information extracted from the WSDL
     * - documentation: This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED). <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible
     * for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price
     * listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory
     * Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundTime = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for In-Store Pick or Click and Collect orders where the merchant issued the buyer a store credit instead of a
     * refund (RefundType=STORE_CREDIT). <br/> <span class="tablenote"> <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the
     * sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount. <br/><br/> The logic will remain the same for <strong>GetItemTransactions</strong> and
     * <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up
     * this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to
     * 1311 or above. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundAmount = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This value is a merchant-defined identifier used to track In-Store Pickup refunds. This value is picked up by eBay when the merchant passes in the <strong>REFUND_ID</strong> parameter through the payload of an
     * <strong>ORDER.RETURNED</strong> notification sent to eBay. This field is not returned if the merchant does not set this value through <strong>ORDER.RETURNED</strong> notification. <br/><br/> <b>For GetOrders and GetItemTransactions only:</b> If using
     * Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or
     * seller, but the payment identifier will be masked to all third parties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this
     * time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment,
     * including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications
     * API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionReferenceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TransactionReferenceType $ReferenceID = null;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: This dollar value is the total amount of the refund to the buyer for the In-Store Pickup order. Typically, this dollar value will be the same as the <strong>RefundAmount</strong> value, unless the merchant is issuing multiple refund
     * transactions to the buyer, in which case, the <strong>FeeOrCreditAmount</strong> value will be the cumulative amount for multiple refund transactions. This field is not returned if the merchant issued the buyer a store credit instead of a refund
     * (RefundType=STORE_CREDIT). <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is
     * generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with
     * the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $FeeOrCreditAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundTransactionInfoType
     * @uses RefundTransactionInfoType::setRefundType()
     * @uses RefundTransactionInfoType::setRefundTo()
     * @uses RefundTransactionInfoType::setRefundTime()
     * @uses RefundTransactionInfoType::setRefundAmount()
     * @uses RefundTransactionInfoType::setReferenceID()
     * @uses RefundTransactionInfoType::setFeeOrCreditAmount()
     * @uses RefundTransactionInfoType::setAny()
     * @param string $refundType
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo
     * @param string $refundTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param \macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $refundType = null, ?\macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo = null, ?string $refundTime = null, ?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, ?\macropage\ebaysdk\trading\StructType\TransactionReferenceType $referenceID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, $any = null)
    {
        $this
            ->setRefundType($refundType)
            ->setRefundTo($refundTo)
            ->setRefundTime($refundTime)
            ->setRefundAmount($refundAmount)
            ->setReferenceID($referenceID)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setAny($any);
    }
    /**
     * Get RefundType value
     * @return string|null
     */
    public function getRefundType(): ?string
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $refundType
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundType(?string $refundType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::valueIsValid($refundType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType', is_array($refundType) ? implode(', ', $refundType) : var_export($refundType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RefundSourceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->RefundType = $refundType;
        
        return $this;
    }
    /**
     * Get RefundTo value
     * @return \macropage\ebaysdk\trading\StructType\UserIdentityType|null
     */
    public function getRefundTo(): ?\macropage\ebaysdk\trading\StructType\UserIdentityType
    {
        return $this->RefundTo;
    }
    /**
     * Set RefundTo value
     * @param \macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundTo(?\macropage\ebaysdk\trading\StructType\UserIdentityType $refundTo = null): self
    {
        $this->RefundTo = $refundTo;
        
        return $this;
    }
    /**
     * Get RefundTime value
     * @return string|null
     */
    public function getRefundTime(): ?string
    {
        return $this->RefundTime;
    }
    /**
     * Set RefundTime value
     * @param string $refundTime
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundTime(?string $refundTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundTime) && !is_string($refundTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundTime, true), gettype($refundTime)), __LINE__);
        }
        $this->RefundTime = $refundTime;
        
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
     */
    public function setFeeOrCreditAmount(?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null): self
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType
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
