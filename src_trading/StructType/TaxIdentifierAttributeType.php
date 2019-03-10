<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierAttributeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to display the value of the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field.
 * @subpackage Structs
 */
class TaxIdentifierAttributeType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     * @var string
     */
    public $name;
    /**
     * Constructor method for TaxIdentifierAttributeType
     * @uses TaxIdentifierAttributeType::set_()
     * @uses TaxIdentifierAttributeType::setName()
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
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType
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
     * @uses \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType
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
