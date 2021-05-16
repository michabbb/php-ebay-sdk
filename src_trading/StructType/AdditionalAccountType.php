<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAccountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for one additional account. An additional account is created when the user has an active account and changes country of registry (i.e., registers with the eBay site for the new country). A new account is created and
 * the old account becomes inactive as an additional account. A user who never changes country of residency while having an account will never have any additional accounts.
 * @subpackage Structs
 */
class AdditionalAccountType extends AbstractStructBase
{
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current balance of the additional account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Balance = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Indicates the currency in which monetary amounts for the additional account are expressed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates the unique identifier for the additional account (the account ID).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountCode = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AdditionalAccountType
     * @uses AdditionalAccountType::setBalance()
     * @uses AdditionalAccountType::setCurrency()
     * @uses AdditionalAccountType::setAccountCode()
     * @uses AdditionalAccountType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @param string $currency
     * @param string $accountCode
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $balance = null, ?string $currency = null, ?string $accountCode = null, $any = null)
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
    public function getBalance(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $balance
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setBalance(?\macropage\ebaysdk\trading\StructType\AmountType $balance = null): self
    {
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType
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
