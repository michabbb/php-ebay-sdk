<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Basic type for specifying monetary amounts. A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of the currency, in which case the value specifies the amount in that currency. An
 * AmountType expresses both the value (a double) and the currency. Details such as prices, fees, costs, and payments are specified as amount types.
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The currencyID
     * Meta information extracted from the WSDL
     * - documentation: Three-digit ISO 4217 code representing the currency type being used.
     * - use: required
     * @var string
     */
    protected string $currencyID;
    /**
     * The _
     * @var float|null
     */
    protected ?float $_ = null;
    /**
     * Constructor method for AmountType
     * @uses AmountType::setCurrencyID()
     * @uses AmountType::set_()
     * @param string $currencyID
     * @param float $_
     */
    public function __construct(string $currencyID, ?float $_ = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->set_($_);
    }
    /**
     * Get currencyID value
     * @return string
     */
    public function getCurrencyID(): string
    {
        return $this->currencyID;
    }
    /**
     * Set currencyID value
     * @uses \macropage\ebaysdk\shopping\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currencyID
     * @return \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public function setCurrencyID(string $currencyID): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->currencyID = $currencyID;
        
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_(): ?float
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public function set_(?float $_ = null): self
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
