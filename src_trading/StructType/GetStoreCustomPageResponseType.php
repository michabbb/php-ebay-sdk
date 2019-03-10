<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCustomPageResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreCustomPage</b> call.
 * @subpackage Structs
 */
class GetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPageArray
     * Meta informations extracted from the WSDL
     * - documentation: This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
     */
    public $CustomPageArray;
    /**
     * Constructor method for GetStoreCustomPageResponseType
     * @uses GetStoreCustomPageResponseType::setCustomPageArray()
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray = null)
    {
        $this
            ->setCustomPageArray($customPageArray);
    }
    /**
     * Get CustomPageArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType|null
     */
    public function getCustomPageArray()
    {
        return $this->CustomPageArray;
    }
    /**
     * Set CustomPageArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType
     */
    public function setCustomPageArray(\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray = null)
    {
        $this->CustomPageArray = $customPageArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType
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
