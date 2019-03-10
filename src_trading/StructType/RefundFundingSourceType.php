<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceType extends AbstractStructBase
{
    /**
     * The RefundingSourceType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RefundingSourceType;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The SellerExternalTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerExternalTransactionID;
    /**
     * The BuyerExternalTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerExternalTransactionID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($refundingSourceType = null, $accountNumber = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, $sellerExternalTransactionID = null, $buyerExternalTransactionID = null, \DOMDocument $any = null)
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
    public function getRefundingSourceType()
    {
        return $this->RefundingSourceType;
    }
    /**
     * Set RefundingSourceType value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundingSourceType
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setRefundingSourceType($refundingSourceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::valueIsValid($refundingSourceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundingSourceType, implode(', ', \macropage\ebaysdk\trading\EnumType\RefundingSourceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->RefundingSourceType = $refundingSourceType;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get SellerExternalTransactionID value
     * @return string|null
     */
    public function getSellerExternalTransactionID()
    {
        return $this->SellerExternalTransactionID;
    }
    /**
     * Set SellerExternalTransactionID value
     * @param string $sellerExternalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setSellerExternalTransactionID($sellerExternalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerExternalTransactionID) && !is_string($sellerExternalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerExternalTransactionID)), __LINE__);
        }
        $this->SellerExternalTransactionID = $sellerExternalTransactionID;
        return $this;
    }
    /**
     * Get BuyerExternalTransactionID value
     * @return string|null
     */
    public function getBuyerExternalTransactionID()
    {
        return $this->BuyerExternalTransactionID;
    }
    /**
     * Set BuyerExternalTransactionID value
     * @param string $buyerExternalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
     */
    public function setBuyerExternalTransactionID($buyerExternalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerExternalTransactionID) && !is_string($buyerExternalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerExternalTransactionID)), __LINE__);
        }
        $this->BuyerExternalTransactionID = $buyerExternalTransactionID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundFundingSourceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType
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
