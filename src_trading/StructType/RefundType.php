<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Contains information about a single Half.com refund.
 * @subpackage Structs
 */
class RefundType extends AbstractStructBase
{
    /**
     * The RefundFromSeller
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded by the seller for this order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundFromSeller = null;
    /**
     * The TotalRefundToBuyer
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded to the buyer for this order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalRefundToBuyer = null;
    /**
     * The RefundTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The date and time at which the refund was issued.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundTime = null;
    /**
     * The RefundID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The unique identifier of the refund. <br/><br/> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundID = null;
    /**
     * The RefundTransactionArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $RefundTransactionArray = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The total amount of the refund requested.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundAmount = null;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundStatus = null;
    /**
     * The RefundFailureReason
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFailureReasonType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RefundFailureReasonType $RefundFailureReason = null;
    /**
     * The RefundFundingSourceArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $RefundFundingSourceArray = null;
    /**
     * The ExternalReferenceID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalReferenceID = null;
    /**
     * The RefundRequestedTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundRequestedTime = null;
    /**
     * The RefundCompletionTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundCompletionTime = null;
    /**
     * The EstimatedRefundCompletionTime
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedRefundCompletionTime = null;
    /**
     * The SellerNoteToBuyer
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerNoteToBuyer = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundType
     * @uses RefundType::setRefundFromSeller()
     * @uses RefundType::setTotalRefundToBuyer()
     * @uses RefundType::setRefundTime()
     * @uses RefundType::setRefundID()
     * @uses RefundType::setRefundTransactionArray()
     * @uses RefundType::setRefundAmount()
     * @uses RefundType::setRefundStatus()
     * @uses RefundType::setRefundFailureReason()
     * @uses RefundType::setRefundFundingSourceArray()
     * @uses RefundType::setExternalReferenceID()
     * @uses RefundType::setRefundRequestedTime()
     * @uses RefundType::setRefundCompletionTime()
     * @uses RefundType::setEstimatedRefundCompletionTime()
     * @uses RefundType::setSellerNoteToBuyer()
     * @uses RefundType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer
     * @param string $refundTime
     * @param string $refundID
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray
     * @param string $externalReferenceID
     * @param string $refundRequestedTime
     * @param string $refundCompletionTime
     * @param string $estimatedRefundCompletionTime
     * @param string $sellerNoteToBuyer
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer = null, ?string $refundTime = null, ?string $refundID = null, ?\macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray = null, ?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, ?string $refundStatus = null, ?\macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason = null, ?\macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null, ?string $externalReferenceID = null, ?string $refundRequestedTime = null, ?string $refundCompletionTime = null, ?string $estimatedRefundCompletionTime = null, ?string $sellerNoteToBuyer = null, $any = null)
    {
        $this
            ->setRefundFromSeller($refundFromSeller)
            ->setTotalRefundToBuyer($totalRefundToBuyer)
            ->setRefundTime($refundTime)
            ->setRefundID($refundID)
            ->setRefundTransactionArray($refundTransactionArray)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setRefundFailureReason($refundFailureReason)
            ->setRefundFundingSourceArray($refundFundingSourceArray)
            ->setExternalReferenceID($externalReferenceID)
            ->setRefundRequestedTime($refundRequestedTime)
            ->setRefundCompletionTime($refundCompletionTime)
            ->setEstimatedRefundCompletionTime($estimatedRefundCompletionTime)
            ->setSellerNoteToBuyer($sellerNoteToBuyer)
            ->setAny($any);
    }
    /**
     * Get RefundFromSeller value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundFromSeller(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->RefundFromSeller;
    }
    /**
     * Set RefundFromSeller value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFromSeller(?\macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller = null): self
    {
        $this->RefundFromSeller = $refundFromSeller;
        
        return $this;
    }
    /**
     * Get TotalRefundToBuyer value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalRefundToBuyer(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalRefundToBuyer;
    }
    /**
     * Set TotalRefundToBuyer value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setTotalRefundToBuyer(?\macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer = null): self
    {
        $this->TotalRefundToBuyer = $totalRefundToBuyer;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
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
     * Get RefundID value
     * @return string|null
     */
    public function getRefundID(): ?string
    {
        return $this->RefundID;
    }
    /**
     * Set RefundID value
     * @param string $refundID
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundID(?string $refundID = null): self
    {
        // validation for constraint: string
        if (!is_null($refundID) && !is_string($refundID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundID, true), gettype($refundID)), __LINE__);
        }
        $this->RefundID = $refundID;
        
        return $this;
    }
    /**
     * Get RefundTransactionArray value
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType|null
     */
    public function getRefundTransactionArray(): ?\macropage\ebaysdk\trading\StructType\RefundTransactionArrayType
    {
        return $this->RefundTransactionArray;
    }
    /**
     * Set RefundTransactionArray value
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundTransactionArray(?\macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray = null): self
    {
        $this->RefundTransactionArray = $refundTransactionArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus(): ?string
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundStatus(?string $refundStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::valueIsValid($refundStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType', is_array($refundStatus) ? implode(', ', $refundStatus) : var_export($refundStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        
        return $this;
    }
    /**
     * Get RefundFailureReason value
     * @return \macropage\ebaysdk\trading\StructType\RefundFailureReasonType|null
     */
    public function getRefundFailureReason(): ?\macropage\ebaysdk\trading\StructType\RefundFailureReasonType
    {
        return $this->RefundFailureReason;
    }
    /**
     * Set RefundFailureReason value
     * @param \macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFailureReason(?\macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason = null): self
    {
        $this->RefundFailureReason = $refundFailureReason;
        
        return $this;
    }
    /**
     * Get RefundFundingSourceArray value
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType|null
     */
    public function getRefundFundingSourceArray(): ?\macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
    {
        return $this->RefundFundingSourceArray;
    }
    /**
     * Set RefundFundingSourceArray value
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFundingSourceArray(?\macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null): self
    {
        $this->RefundFundingSourceArray = $refundFundingSourceArray;
        
        return $this;
    }
    /**
     * Get ExternalReferenceID value
     * @return string|null
     */
    public function getExternalReferenceID(): ?string
    {
        return $this->ExternalReferenceID;
    }
    /**
     * Set ExternalReferenceID value
     * @param string $externalReferenceID
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setExternalReferenceID(?string $externalReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReferenceID) && !is_string($externalReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReferenceID, true), gettype($externalReferenceID)), __LINE__);
        }
        $this->ExternalReferenceID = $externalReferenceID;
        
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime(): ?string
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundRequestedTime(?string $refundRequestedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundRequestedTime, true), gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
        
        return $this;
    }
    /**
     * Get RefundCompletionTime value
     * @return string|null
     */
    public function getRefundCompletionTime(): ?string
    {
        return $this->RefundCompletionTime;
    }
    /**
     * Set RefundCompletionTime value
     * @param string $refundCompletionTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundCompletionTime(?string $refundCompletionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundCompletionTime) && !is_string($refundCompletionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundCompletionTime, true), gettype($refundCompletionTime)), __LINE__);
        }
        $this->RefundCompletionTime = $refundCompletionTime;
        
        return $this;
    }
    /**
     * Get EstimatedRefundCompletionTime value
     * @return string|null
     */
    public function getEstimatedRefundCompletionTime(): ?string
    {
        return $this->EstimatedRefundCompletionTime;
    }
    /**
     * Set EstimatedRefundCompletionTime value
     * @param string $estimatedRefundCompletionTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setEstimatedRefundCompletionTime(?string $estimatedRefundCompletionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedRefundCompletionTime) && !is_string($estimatedRefundCompletionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedRefundCompletionTime, true), gettype($estimatedRefundCompletionTime)), __LINE__);
        }
        $this->EstimatedRefundCompletionTime = $estimatedRefundCompletionTime;
        
        return $this;
    }
    /**
     * Get SellerNoteToBuyer value
     * @return string|null
     */
    public function getSellerNoteToBuyer(): ?string
    {
        return $this->SellerNoteToBuyer;
    }
    /**
     * Set SellerNoteToBuyer value
     * @param string $sellerNoteToBuyer
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setSellerNoteToBuyer(?string $sellerNoteToBuyer = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerNoteToBuyer) && !is_string($sellerNoteToBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerNoteToBuyer, true), gettype($sellerNoteToBuyer)), __LINE__);
        }
        $this->SellerNoteToBuyer = $sellerNoteToBuyer;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
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
