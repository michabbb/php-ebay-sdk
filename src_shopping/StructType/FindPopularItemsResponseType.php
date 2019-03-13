<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPopularItemsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>This call is deprecated.</b>
 * @subpackage Structs
 */
class FindPopularItemsResponseType extends AbstractResponseType
{
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType
     */
    public $ItemArray;
    /**
     * Constructor method for FindPopularItemsResponseType
     * @uses FindPopularItemsResponseType::setItemArray()
     * @param \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray
     */
    public function __construct(\macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray = null)
    {
        $this
            ->setItemArray($itemArray);
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsResponseType
     */
    public function setItemArray(\macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsResponseType
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
