<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a response of the resulting status of ending each item.
 * @subpackage Structs
 */
class EndItemsResponseType extends AbstractResponseType
{
    /**
     * The EndItemResponseContainer
     * Meta informations extracted from the WSDL
     * - documentation: Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[]
     */
    public $EndItemResponseContainer;
    /**
     * Constructor method for EndItemsResponseType
     * @uses EndItemsResponseType::setEndItemResponseContainer()
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[] $endItemResponseContainer
     */
    public function __construct(array $endItemResponseContainer = array())
    {
        $this
            ->setEndItemResponseContainer($endItemResponseContainer);
    }
    /**
     * Get EndItemResponseContainer value
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[]|null
     */
    public function getEndItemResponseContainer()
    {
        return $this->EndItemResponseContainer;
    }
    /**
     * Set EndItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[] $endItemResponseContainer
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType
     */
    public function setEndItemResponseContainer(array $endItemResponseContainer = array())
    {
        foreach ($endItemResponseContainer as $endItemsResponseTypeEndItemResponseContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsResponseTypeEndItemResponseContainerItem instanceof \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType) {
                throw new \InvalidArgumentException(sprintf('The EndItemResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType, "%s" given', is_object($endItemsResponseTypeEndItemResponseContainerItem) ? get_class($endItemsResponseTypeEndItemResponseContainerItem) : gettype($endItemsResponseTypeEndItemResponseContainerItem)), __LINE__);
            }
        }
        $this->EndItemResponseContainer = $endItemResponseContainer;
        return $this;
    }
    /**
     * Add item to EndItemResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType
     */
    public function addToEndItemResponseContainer(\macropage\ebaysdk\trading\StructType\EndItemResponseContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType) {
            throw new \InvalidArgumentException(sprintf('The EndItemResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EndItemResponseContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType
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
