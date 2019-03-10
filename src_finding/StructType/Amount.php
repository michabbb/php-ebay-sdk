<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Monetary amount.
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The currencyId
     * Meta informations extracted from the WSDL
     * - documentation: Currency in which the monetary amount is specified.
     * - use: required
     * @var string
     */
    public $currencyId;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for Amount
     * @uses Amount::setCurrencyId()
     * @uses Amount::set_()
     * @param string $currencyId
     * @param float $_
     */
    public function __construct($currencyId = null, $_ = null)
    {
        $this
            ->setCurrencyId($currencyId)
            ->set_($_);
    }
    /**
     * Get currencyId value
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }
    /**
     * Set currencyId value
     * @param string $currencyId
     * @return \macropage\ebaysdk\finding\StructType\Amount
     */
    public function setCurrencyId($currencyId = null)
    {
        // validation for constraint: string
        if (!is_null($currencyId) && !is_string($currencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyId)), __LINE__);
        }
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \macropage\ebaysdk\finding\StructType\Amount
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\Amount
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
