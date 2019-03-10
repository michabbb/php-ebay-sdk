<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemAttribute StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type contains the item attribute name and value.
 * @subpackage Structs
 */
class ItemAttribute extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: The name of an item attribute.
     * @var string
     */
    public $name;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: The value of the item attribute identified by the <strong>name</strong> field.
     * @var string
     */
    public $value;
    /**
     * Constructor method for ItemAttribute
     * @uses ItemAttribute::setName()
     * @uses ItemAttribute::setValue()
     * @param string $name
     * @param string $value
     */
    public function __construct($name = null, $value = null)
    {
        $this
            ->setName($name)
            ->setValue($value);
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
     * @return \macropage\ebaysdk\finding\StructType\ItemAttribute
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \macropage\ebaysdk\finding\StructType\ItemAttribute
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ItemAttribute
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
