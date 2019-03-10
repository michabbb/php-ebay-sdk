<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Distance StructType
 * Meta informations extracted from the WSDL
 * - documentation: Distance, used for local searches.
 * @subpackage Structs
 */
class Distance extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - documentation: Unit of measure used in a distance calculation. Units can be in either kilometers or miles, depending on the Global ID.
     * @var string
     */
    public $unit;
    /**
     * Constructor method for Distance
     * @uses Distance::set_()
     * @uses Distance::setUnit()
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
     * @return \macropage\ebaysdk\finding\StructType\Distance
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
     * @return \macropage\ebaysdk\finding\StructType\Distance
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
     * @return \macropage\ebaysdk\finding\StructType\Distance
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
