<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultipleItemsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>GetMultipleItems</b> call, which includes an array of eBay items.
 * @subpackage Structs
 */
class GetMultipleItemsResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType[]
     */
    public $Item;
    /**
     * Constructor method for GetMultipleItemsResponseType
     * @uses GetMultipleItemsResponseType::setItem()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $getMultipleItemsResponseTypeItemItem) {
            // validation for constraint: itemType
            if (!$getMultipleItemsResponseTypeItemItem instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\shopping\StructType\SimpleItemType, "%s" given', is_object($getMultipleItemsResponseTypeItemItem) ? get_class($getMultipleItemsResponseTypeItemItem) : gettype($getMultipleItemsResponseTypeItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType
     */
    public function addToItem(\macropage\ebaysdk\shopping\StructType\SimpleItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\shopping\StructType\SimpleItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetMultipleItemsResponseType
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
