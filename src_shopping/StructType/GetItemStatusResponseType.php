<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemStatusResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetItemStatus</b> call, which is a call that is used to retrieve the current status of up to 20 eBay listings.
 * @subpackage Structs
 */
class GetItemStatusResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType[]
     */
    public $Item;
    /**
     * Constructor method for GetItemStatusResponseType
     * @uses GetItemStatusResponseType::setItem()
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
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $getItemStatusResponseTypeItemItem) {
            // validation for constraint: itemType
            if (!$getItemStatusResponseTypeItemItem instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\shopping\StructType\SimpleItemType, "%s" given', is_object($getItemStatusResponseTypeItemItem) ? get_class($getItemStatusResponseTypeItemItem) : gettype($getItemStatusResponseTypeItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType
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
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusResponseType
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
