<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Contains information about a single Half.com refund.
 * @subpackage Structs
 */
class RefundType extends AbstractStructBase
{
    /**
     * The RefundFromSeller
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded by the seller for this order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundFromSeller;
    /**
     * The TotalRefundToBuyer
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> Total amount refunded to the buyer for this order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalRefundToBuyer;
    /**
     * The RefundTime
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The date and time at which the refund was issued.
     * - minOccurs: 0
     * @var string
     */
    public $RefundTime;
    /**
     * The RefundID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The unique identifier of the refund. <br/><br/> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $RefundID;
    /**
     * The RefundTransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType
     */
    public $RefundTransactionArray;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> The total amount of the refund requested.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The RefundFailureReason
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFailureReasonType
     */
    public $RefundFailureReason;
    /**
     * The RefundFundingSourceArray
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
     */
    public $RefundFundingSourceArray;
    /**
     * The ExternalReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalReferenceID;
    /**
     * The RefundRequestedTime
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundRequestedTime;
    /**
     * The RefundCompletionTime
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundCompletionTime;
    /**
     * The EstimatedRefundCompletionTime
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedRefundCompletionTime;
    /**
     * The SellerNoteToBuyer
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - minOccurs: 0
     * @var string
     */
    public $SellerNoteToBuyer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller = null, \macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer = null, $refundTime = null, $refundID = null, \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, $refundStatus = null, \macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason = null, \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null, $externalReferenceID = null, $refundRequestedTime = null, $refundCompletionTime = null, $estimatedRefundCompletionTime = null, $sellerNoteToBuyer = null, \DOMDocument $any = null)
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
    public function getRefundFromSeller()
    {
        return $this->RefundFromSeller;
    }
    /**
     * Set RefundFromSeller value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFromSeller(\macropage\ebaysdk\trading\StructType\AmountType $refundFromSeller = null)
    {
        $this->RefundFromSeller = $refundFromSeller;
        return $this;
    }
    /**
     * Get TotalRefundToBuyer value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalRefundToBuyer()
    {
        return $this->TotalRefundToBuyer;
    }
    /**
     * Set TotalRefundToBuyer value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setTotalRefundToBuyer(\macropage\ebaysdk\trading\StructType\AmountType $totalRefundToBuyer = null)
    {
        $this->TotalRefundToBuyer = $totalRefundToBuyer;
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
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
     * Get RefundID value
     * @return string|null
     */
    public function getRefundID()
    {
        return $this->RefundID;
    }
    /**
     * Set RefundID value
     * @param string $refundID
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundID($refundID = null)
    {
        // validation for constraint: string
        if (!is_null($refundID) && !is_string($refundID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundID)), __LINE__);
        }
        $this->RefundID = $refundID;
        return $this;
    }
    /**
     * Get RefundTransactionArray value
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType|null
     */
    public function getRefundTransactionArray()
    {
        return $this->RefundTransactionArray;
    }
    /**
     * Set RefundTransactionArray value
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundTransactionArray(\macropage\ebaysdk\trading\StructType\RefundTransactionArrayType $refundTransactionArray = null)
    {
        $this->RefundTransactionArray = $refundTransactionArray;
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
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
     * @uses \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::valueIsValid($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\RefundStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        return $this;
    }
    /**
     * Get RefundFailureReason value
     * @return \macropage\ebaysdk\trading\StructType\RefundFailureReasonType|null
     */
    public function getRefundFailureReason()
    {
        return $this->RefundFailureReason;
    }
    /**
     * Set RefundFailureReason value
     * @param \macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFailureReason(\macropage\ebaysdk\trading\StructType\RefundFailureReasonType $refundFailureReason = null)
    {
        $this->RefundFailureReason = $refundFailureReason;
        return $this;
    }
    /**
     * Get RefundFundingSourceArray value
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType|null
     */
    public function getRefundFundingSourceArray()
    {
        return $this->RefundFundingSourceArray;
    }
    /**
     * Set RefundFundingSourceArray value
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundFundingSourceArray(\macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType $refundFundingSourceArray = null)
    {
        $this->RefundFundingSourceArray = $refundFundingSourceArray;
        return $this;
    }
    /**
     * Get ExternalReferenceID value
     * @return string|null
     */
    public function getExternalReferenceID()
    {
        return $this->ExternalReferenceID;
    }
    /**
     * Set ExternalReferenceID value
     * @param string $externalReferenceID
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setExternalReferenceID($externalReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($externalReferenceID) && !is_string($externalReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalReferenceID)), __LINE__);
        }
        $this->ExternalReferenceID = $externalReferenceID;
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime()
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundRequestedTime($refundRequestedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
        return $this;
    }
    /**
     * Get RefundCompletionTime value
     * @return string|null
     */
    public function getRefundCompletionTime()
    {
        return $this->RefundCompletionTime;
    }
    /**
     * Set RefundCompletionTime value
     * @param string $refundCompletionTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setRefundCompletionTime($refundCompletionTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundCompletionTime) && !is_string($refundCompletionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundCompletionTime)), __LINE__);
        }
        $this->RefundCompletionTime = $refundCompletionTime;
        return $this;
    }
    /**
     * Get EstimatedRefundCompletionTime value
     * @return string|null
     */
    public function getEstimatedRefundCompletionTime()
    {
        return $this->EstimatedRefundCompletionTime;
    }
    /**
     * Set EstimatedRefundCompletionTime value
     * @param string $estimatedRefundCompletionTime
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setEstimatedRefundCompletionTime($estimatedRefundCompletionTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedRefundCompletionTime) && !is_string($estimatedRefundCompletionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedRefundCompletionTime)), __LINE__);
        }
        $this->EstimatedRefundCompletionTime = $estimatedRefundCompletionTime;
        return $this;
    }
    /**
     * Get SellerNoteToBuyer value
     * @return string|null
     */
    public function getSellerNoteToBuyer()
    {
        return $this->SellerNoteToBuyer;
    }
    /**
     * Set SellerNoteToBuyer value
     * @param string $sellerNoteToBuyer
     * @return \macropage\ebaysdk\trading\StructType\RefundType
     */
    public function setSellerNoteToBuyer($sellerNoteToBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($sellerNoteToBuyer) && !is_string($sellerNoteToBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerNoteToBuyer)), __LINE__);
        }
        $this->SellerNoteToBuyer = $sellerNoteToBuyer;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundType
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
