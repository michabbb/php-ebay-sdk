<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineType extends AmountType
{
    /**
     * The _
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $_;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $type;
    /**
     * Constructor method for RefundLineType
     * @uses RefundLineType::set_()
     * @uses RefundLineType::setType()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $_
     * @param string $type
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $_
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType
     */
    public function set_(\macropage\ebaysdk\trading\StructType\AmountType $_ = null)
    {
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
     * @uses \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType
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
