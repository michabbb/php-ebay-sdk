<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Basic type for specifying quantities.
 * @subpackage Structs
 */
class QuantityType extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $unit;
    /**
     * Constructor method for QuantityType
     * @uses QuantityType::set_()
     * @uses QuantityType::setUnit()
     * @param float $_
     * @param string $unit
     */
    public function __construct($_ = null, $unit = null)
    {
        $this
            ->set_($_)
            ->setUnit($unit);
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityType
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \macropage\ebaysdk\trading\StructType\QuantityType
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\QuantityType
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
