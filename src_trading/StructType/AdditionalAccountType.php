<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAccountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data for one additional account. An additional account is created when the user has an active account and changes country of registry (i.e., registers with the eBay site for the new country). A new account is created and
 * the old account becomes inactive as an additional account. A user who never changes country of residency while having an account will never have any additional accounts.
 * @subpackage Structs
 */
class AdditionalAccountType extends AbstractStructBase
{
    /**
     * The Balance
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current balance of the additional account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Balance;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the currency in which monetary amounts for the additional account are expressed.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the unique identifier for the additional account (the account ID).
     * - minOccurs: 0
     * @var string
     */
    public $AccountCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AdditionalAccountType
     * @uses AdditionalAccountType::setBalance()
     * @uses AdditionalAccountType::setCurrency()
     * @uses AdditionalAccountType::setAccountCode()
     * @uses AdditionalAccountType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @param string $currency
     * @param string $accountCode
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $balance = null, $currency = null, $accountCode = null, \DOMDocument $any = null)
    {
        $this
            ->setBalance($balance)
            ->setCurrency($currency)
            ->setAccountCode($accountCode)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setBalance(\macropage\ebaysdk\trading\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AdditionalAccountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
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
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
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
