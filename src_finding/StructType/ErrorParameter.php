<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorParameter StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contextual data associated with an error.
 * @subpackage Structs
 */
class ErrorParameter extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.
     * @var string
     */
    public $name;
    /**
     * Constructor method for ErrorParameter
     * @uses ErrorParameter::set_()
     * @uses ErrorParameter::setName()
     * @param string $_
     * @param string $name
     */
    public function __construct($_ = null, $name = null)
    {
        $this
            ->set_($_)
            ->setName($name);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \macropage\ebaysdk\finding\StructType\ErrorParameter
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \macropage\ebaysdk\finding\StructType\ErrorParameter
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ErrorParameter
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
