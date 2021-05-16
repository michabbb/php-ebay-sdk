<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceType extends AbstractStructBase
{
    /**
     * The RefundingSourceType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundingSourceType = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundAmount = null;
    /**
     * The SellerExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerExternalTransactionID = null;
    /**
     * The BuyerExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerExternalTransactionID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundFundingSourceType
     * @uses RefundFundingSourceType::setRefundingSourceType()
     * @uses RefundFundingSourceType::setAccountNumber()
     * @uses RefundFundingSourceType::setRefundAmount()
     * @uses RefundFundingSourceType::setSellerExternalTransactionID()
     * @uses RefundFundingSourceType::setBuyerExternalTransactionID()
     * @uses RefundFundingSourceType::setAny()
     * @param string $refundingSourceType
     * @param string $accountNumber
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param string $sellerExternalTransactionID
     * @param string $buyerExternalTransactionID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $refundingSourceType = null, ?string $accountNumber = null, ?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, ?string $sellerExternalTransactionID = null, ?string $buyerExternalTransactionID = null, $any = null)
    {
        $this
            ->setRefundingSourceType($refundingSourceType)
            ->setAccountNumber($accountNumber)
            ->setRefundAmount($refundAmount)
            ->setSellerExternalTransactionID($sellerExternalTransactionID)
            ->setBuyerExternalTransactionID($buyerExternalTransactionID)
            ->setAny($any);
    }
    /**
     * Get RefundingSourceType value
     * @return string|null
     */
    public function getRefundingSourceType(): ?string
    {
        return $this->RefundingSourceType;
    }
    /**
     * Set RefundingSourceType value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $refundingSourceType
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setRefundingSourceType(?string $refundingSourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::valueIsValid($refundingSourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType', is_array($refundingSourceType) ? implode(', ', $refundingSourceType) : var_export($refundingSourceType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->RefundingSourceType = $refundingSourceType;
        
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get SellerExternalTransactionID value
     * @return string|null
     */
    public function getSellerExternalTransactionID(): ?string
    {
        return $this->SellerExternalTransactionID;
    }
    /**
     * Set SellerExternalTransactionID value
     * @param string $sellerExternalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setSellerExternalTransactionID(?string $sellerExternalTransactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerExternalTransactionID) && !is_string($sellerExternalTransactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerExternalTransactionID, true), gettype($sellerExternalTransactionID)), __LINE__);
        }
        $this->SellerExternalTransactionID = $sellerExternalTransactionID;
        
        return $this;
    }
    /**
     * Get BuyerExternalTransactionID value
     * @return string|null
     */
    public function getBuyerExternalTransactionID(): ?string
    {
        return $this->BuyerExternalTransactionID;
    }
    /**
     * Set BuyerExternalTransactionID value
     * @param string $buyerExternalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setBuyerExternalTransactionID(?string $buyerExternalTransactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerExternalTransactionID) && !is_string($buyerExternalTransactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerExternalTransactionID, true), gettype($buyerExternalTransactionID)), __LINE__);
        }
        $this->BuyerExternalTransactionID = $buyerExternalTransactionID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
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
