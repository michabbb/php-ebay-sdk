<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>AccountEntry</b> container returned in the <b>GetAccount</b> response. Each <b>AccountEntry</b> container consists of detailed information for a single credit or debit transaction, or an administrative action
 * which occurred on the eBay user's account.
 * @subpackage Structs
 */
class AccountEntryType extends AbstractStructBase
{
    /**
     * The AccountDetailsEntryType
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     * - minOccurs: 0
     * @var string
     */
    public $AccountDetailsEntryType;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The category of the monetary transaction or administrative action applied to an eBay account.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Balance
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Balance;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating the date and time that the entry was posted to the account, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The GrossDetailAmount
     * Meta informations extracted from the WSDL
     * - documentation: Gross fees that are assessed by eBay (net fees plus VAT, if any). Returned even if VAT does not apply. The value is positive for debits and negative for credits.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $GrossDetailAmount;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: If the account entry is associated with an eBay listing, this field shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field. | Type
     * that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Memo
     * Meta informations extracted from the WSDL
     * - documentation: Memo line for the account entry. It can be an empty string.
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The ConversionRate
     * Meta informations extracted from the WSDL
     * - documentation: The rate used for the currency conversion for a transaction.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConversionRate;
    /**
     * The NetDetailAmount
     * Meta informations extracted from the WSDL
     * - documentation: Net fees that are assessed by eBay, excluding additional surcharges and VAT (if any). Returned even if VAT does not apply. The value is positive for debits (user pays eBay) and negative for credits (eBay pays user).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $NetDetailAmount;
    /**
     * The RefNumber
     * Meta informations extracted from the WSDL
     * - documentation: This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     * - minOccurs: 0
     * @var string
     */
    public $RefNumber;
    /**
     * The VATPercent
     * Meta informations extracted from the WSDL
     * - documentation: The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller
     * can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate;
     * it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. This field is only returned if the
     * account entry is associated with an order line item.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The ReceivedTopRatedDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount
     * percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a href="http://pages.ebay.com/help/sell/top-rated.html" target="_blank">Becoming a Top Rated Seller
     * and qualifying for Top Rated Plus</a> eBay Customer Support topic. <br/><br/> This field will not be returned until eBay bills the seller for the Final Value Fee for the eligible order line item.
     * - minOccurs: 0
     * @var bool
     */
    public $ReceivedTopRatedDiscount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AccountEntryType
     * @uses AccountEntryType::setAccountDetailsEntryType()
     * @uses AccountEntryType::setDescription()
     * @uses AccountEntryType::setBalance()
     * @uses AccountEntryType::setDate()
     * @uses AccountEntryType::setGrossDetailAmount()
     * @uses AccountEntryType::setItemID()
     * @uses AccountEntryType::setMemo()
     * @uses AccountEntryType::setConversionRate()
     * @uses AccountEntryType::setNetDetailAmount()
     * @uses AccountEntryType::setRefNumber()
     * @uses AccountEntryType::setVATPercent()
     * @uses AccountEntryType::setTitle()
     * @uses AccountEntryType::setOrderLineItemID()
     * @uses AccountEntryType::setTransactionID()
     * @uses AccountEntryType::setReceivedTopRatedDiscount()
     * @uses AccountEntryType::setAny()
     * @param string $accountDetailsEntryType
     * @param string $description
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @param string $date
     * @param \macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount
     * @param string $itemID
     * @param string $memo
     * @param \macropage\ebaysdk\trading\StructType\AmountType $conversionRate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount
     * @param string $refNumber
     * @param float $vATPercent
     * @param string $title
     * @param string $orderLineItemID
     * @param string $transactionID
     * @param bool $receivedTopRatedDiscount
     * @param \DOMDocument $any
     */
    public function __construct($accountDetailsEntryType = null, $description = null, \macropage\ebaysdk\trading\StructType\AmountType $balance = null, $date = null, \macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount = null, $itemID = null, $memo = null, \macropage\ebaysdk\trading\StructType\AmountType $conversionRate = null, \macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount = null, $refNumber = null, $vATPercent = null, $title = null, $orderLineItemID = null, $transactionID = null, $receivedTopRatedDiscount = null, \DOMDocument $any = null)
    {
        $this
            ->setAccountDetailsEntryType($accountDetailsEntryType)
            ->setDescription($description)
            ->setBalance($balance)
            ->setDate($date)
            ->setGrossDetailAmount($grossDetailAmount)
            ->setItemID($itemID)
            ->setMemo($memo)
            ->setConversionRate($conversionRate)
            ->setNetDetailAmount($netDetailAmount)
            ->setRefNumber($refNumber)
            ->setVATPercent($vATPercent)
            ->setTitle($title)
            ->setOrderLineItemID($orderLineItemID)
            ->setTransactionID($transactionID)
            ->setReceivedTopRatedDiscount($receivedTopRatedDiscount)
            ->setAny($any);
    }
    /**
     * Get AccountDetailsEntryType value
     * @return string|null
     */
    public function getAccountDetailsEntryType()
    {
        return $this->AccountDetailsEntryType;
    }
    /**
     * Set AccountDetailsEntryType value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountDetailsEntryType
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setAccountDetailsEntryType($accountDetailsEntryType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::valueIsValid($accountDetailsEntryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountDetailsEntryType, implode(', ', \macropage\ebaysdk\trading\EnumType\AccountDetailEntryCodeType::getValidValues())), __LINE__);
        }
        $this->AccountDetailsEntryType = $accountDetailsEntryType;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Balance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setBalance(\macropage\ebaysdk\trading\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get GrossDetailAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGrossDetailAmount()
    {
        return $this->GrossDetailAmount;
    }
    /**
     * Set GrossDetailAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setGrossDetailAmount(\macropage\ebaysdk\trading\StructType\AmountType $grossDetailAmount = null)
    {
        $this->GrossDetailAmount = $grossDetailAmount;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setMemo($memo = null)
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConversionRate()
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $conversionRate
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setConversionRate(\macropage\ebaysdk\trading\StructType\AmountType $conversionRate = null)
    {
        $this->ConversionRate = $conversionRate;
        return $this;
    }
    /**
     * Get NetDetailAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNetDetailAmount()
    {
        return $this->NetDetailAmount;
    }
    /**
     * Set NetDetailAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setNetDetailAmount(\macropage\ebaysdk\trading\StructType\AmountType $netDetailAmount = null)
    {
        $this->NetDetailAmount = $netDetailAmount;
        return $this;
    }
    /**
     * Get RefNumber value
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param string $refNumber
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setVATPercent($vATPercent = null)
    {
        $this->VATPercent = $vATPercent;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get ReceivedTopRatedDiscount value
     * @return bool|null
     */
    public function getReceivedTopRatedDiscount()
    {
        return $this->ReceivedTopRatedDiscount;
    }
    /**
     * Set ReceivedTopRatedDiscount value
     * @param bool $receivedTopRatedDiscount
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
     */
    public function setReceivedTopRatedDiscount($receivedTopRatedDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($receivedTopRatedDiscount) && !is_bool($receivedTopRatedDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($receivedTopRatedDiscount)), __LINE__);
        }
        $this->ReceivedTopRatedDiscount = $receivedTopRatedDiscount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AccountEntryType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType
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
