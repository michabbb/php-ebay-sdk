<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The response of the <b>AddItems</b> call. The response includes the Item IDs of the newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for
 * each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
 * @subpackage Structs
 */
class AddItemsResponseType extends AbstractResponseType
{
    /**
     * The AddItemResponseContainer
     * Meta informations extracted from the WSDL
     * - documentation: One <b>AddItemResponseContainer</b> container is returned for each listing that is being created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is
     * listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType[]
     */
    public $AddItemResponseContainer;
    /**
     * Constructor method for AddItemsResponseType
     * @uses AddItemsResponseType::setAddItemResponseContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType[] $addItemResponseContainer
     */
    public function __construct(array $addItemResponseContainer = array())
    {
        $this
            ->setAddItemResponseContainer($addItemResponseContainer);
    }
    /**
     * Get AddItemResponseContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType[]|null
     */
    public function getAddItemResponseContainer()
    {
        return $this->AddItemResponseContainer;
    }
    /**
     * Set AddItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType[] $addItemResponseContainer
     * @return \macropage\ebaysdk\trading\StructType\AddItemsResponseType
     */
    public function setAddItemResponseContainer(array $addItemResponseContainer = array())
    {
        foreach ($addItemResponseContainer as $addItemsResponseTypeAddItemResponseContainerItem) {
            // validation for constraint: itemType
            if (!$addItemsResponseTypeAddItemResponseContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType) {
                throw new \InvalidArgumentException(sprintf('The AddItemResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType, "%s" given', is_object($addItemsResponseTypeAddItemResponseContainerItem) ? get_class($addItemsResponseTypeAddItemResponseContainerItem) : gettype($addItemsResponseTypeAddItemResponseContainerItem)), __LINE__);
            }
        }
        $this->AddItemResponseContainer = $addItemResponseContainer;
        return $this;
    }
    /**
     * Add item to AddItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemsResponseType
     */
    public function addToAddItemResponseContainer(\macropage\ebaysdk\trading\StructType\AddItemResponseContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddItemResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddItemResponseContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddItemsResponseType
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
