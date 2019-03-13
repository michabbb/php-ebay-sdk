<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSingleItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>GetSingleItem</b> call, which contains detailed information about one eBay item.
 * @subpackage Structs
 */
class GetSingleItemResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Contains details about the listing whose ID was specified in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public $Item;
    /**
     * Constructor method for GetSingleItemResponseType
     * @uses GetSingleItemResponseType::setItem()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\SimpleItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType
     */
    public function setItem(\macropage\ebaysdk\shopping\StructType\SimpleItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType
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
