<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * Meta information extracted from the WSDL
 * - documentation: An eBay-defined complex type for specifying monetary amounts. <br><br> A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of the currency, in which case the value specifies the
 * amount in that currency. An <b>AmountType</b> expresses both the value (a double) and the currency. <br><br> The <b>AmountType</b> data type is typically used to specify details such as prices, fees, costs, and payments. In some cases, a whole number
 * (i.e., without a period) can be passed or returned as a monetary value. This is necessary to support certain currencies that are only expressed as whole numbers. <br><br> Because a double is used to represent the amount, this also means whole
 * monetary amounts may be returned with only one 0 after the decimal. For example, a dollar value could be returned as 1.0 instead of 1.00 in calls like <b>AddItem</b>.
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The currencyID
     * Meta information extracted from the WSDL
     * - documentation: Three-digit code representing the currency type being used. <br> <br> In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, the currency can be specified in the <b>Item.Currency</b> field in requests instead. If you do specify this
     * attribute in <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, the value must match the site currency (i.e., it must be the same as the value in <b>Item.Currency</b>) unless otherwise stated.<br> <br> In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls,
     * listing fees are returned in the currency of the user's registration site. For example, a user who is registered on the eBay US site always sees their fees returned in USD, even when their listing request is sent to another site, such as eBay UK or
     * eBay Germany.
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
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currencyID
     * @return \macropage\ebaysdk\trading\StructType\AmountType
     */
    public function setCurrencyID(string $currencyID): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\AmountType
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
