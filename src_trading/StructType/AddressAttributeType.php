<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressAttributeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to display the value of the <b>type</b> attribute of the <b>AddressAttribute</b> field.
 * @subpackage Structs
 */
class AddressAttributeType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click
     * and Collect orders are only available on the eBay UK and eBay Australia sites.
     * @var string
     */
    public $type;
    /**
     * Constructor method for AddressAttributeType
     * @uses AddressAttributeType::set_()
     * @uses AddressAttributeType::setType()
     * @param string $_
     * @param string $type
     */
    public function __construct($_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
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
     * @return \macropage\ebaysdk\trading\StructType\AddressAttributeType
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressAttributeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressAttributeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\AddressAttributeType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressAttributeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\AddressAttributeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddressAttributeType
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
