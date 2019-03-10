<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines from one to five items and lists them on a specified eBay site.
 * @subpackage Structs
 */
class AddItemsRequestType extends AbstractRequestType
{
    /**
     * The AddItemRequestContainer
     * Meta informations extracted from the WSDL
     * - documentation: Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[]
     */
    public $AddItemRequestContainer;
    /**
     * Constructor method for AddItemsRequestType
     * @uses AddItemsRequestType::setAddItemRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[] $addItemRequestContainer
     */
    public function __construct(array $addItemRequestContainer = array())
    {
        $this
            ->setAddItemRequestContainer($addItemRequestContainer);
    }
    /**
     * Get AddItemRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[]|null
     */
    public function getAddItemRequestContainer()
    {
        return $this->AddItemRequestContainer;
    }
    /**
     * Set AddItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[] $addItemRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\AddItemsRequestType
     */
    public function setAddItemRequestContainer(array $addItemRequestContainer = array())
    {
        foreach ($addItemRequestContainer as $addItemsRequestTypeAddItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$addItemsRequestTypeAddItemRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType) {
                throw new \InvalidArgumentException(sprintf('The AddItemRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType, "%s" given', is_object($addItemsRequestTypeAddItemRequestContainerItem) ? get_class($addItemsRequestTypeAddItemRequestContainerItem) : gettype($addItemsRequestTypeAddItemRequestContainerItem)), __LINE__);
            }
        }
        $this->AddItemRequestContainer = $addItemRequestContainer;
        return $this;
    }
    /**
     * Add item to AddItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemsRequestType
     */
    public function addToAddItemRequestContainer(\macropage\ebaysdk\trading\StructType\AddItemRequestContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddItemRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddItemRequestContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddItemsRequestType
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
