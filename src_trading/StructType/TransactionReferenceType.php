<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionReferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>ReferenceID</strong> element, which is used to display the unique identifier of a payment (and payment type through the <strong>type</strong> attribute.
 * @subpackage Structs
 */
class TransactionReferenceType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the type of payment.
     * @var string
     */
    public $type;
    /**
     * Constructor method for TransactionReferenceType
     * @uses TransactionReferenceType::set_()
     * @uses TransactionReferenceType::setType()
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType
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
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionReferenceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionReferenceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionReferenceCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionReferenceCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionReferenceType
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
