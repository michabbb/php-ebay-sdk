<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackRequirementsType StructType
 * @subpackage Structs
 */
class FeedbackRequirementsType extends AbstractStructBase
{
    /**
     * The _
     * @var bool
     */
    public $_;
    /**
     * The minimum
     * Meta informations extracted from the WSDL
     * - documentation: This type is deprecated.
     * @var string
     */
    public $minimum;
    /**
     * Constructor method for FeedbackRequirementsType
     * @uses FeedbackRequirementsType::set_()
     * @uses FeedbackRequirementsType::setMinimum()
     * @param bool $_
     * @param string $minimum
     */
    public function __construct($_ = null, $minimum = null)
    {
        $this
            ->set_($_)
            ->setMinimum($minimum);
    }
    /**
     * Get _ value
     * @return bool|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param bool $_
     * @return \macropage\ebaysdk\trading\StructType\FeedbackRequirementsType
     */
    public function set_($_ = null)
    {
        // validation for constraint: boolean
        if (!is_null($_) && !is_bool($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get minimum value
     * @return string|null
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
    /**
     * Set minimum value
     * @param string $minimum
     * @return \macropage\ebaysdk\trading\StructType\FeedbackRequirementsType
     */
    public function setMinimum($minimum = null)
    {
        // validation for constraint: string
        if (!is_null($minimum) && !is_string($minimum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimum)), __LINE__);
        }
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FeedbackRequirementsType
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
