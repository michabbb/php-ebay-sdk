<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The <b>EndItems</b> call is used to end up to 10 specified eBay listings before the date and time at which those listings would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemsRequestType extends AbstractRequestType
{
    /**
     * The EndItemRequestContainer
     * Meta informations extracted from the WSDL
     * - documentation: An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[]
     */
    public $EndItemRequestContainer;
    /**
     * Constructor method for EndItemsRequestType
     * @uses EndItemsRequestType::setEndItemRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[] $endItemRequestContainer
     */
    public function __construct(array $endItemRequestContainer = array())
    {
        $this
            ->setEndItemRequestContainer($endItemRequestContainer);
    }
    /**
     * Get EndItemRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[]|null
     */
    public function getEndItemRequestContainer()
    {
        return $this->EndItemRequestContainer;
    }
    /**
     * Set EndItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[] $endItemRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\EndItemsRequestType
     */
    public function setEndItemRequestContainer(array $endItemRequestContainer = array())
    {
        foreach ($endItemRequestContainer as $endItemsRequestTypeEndItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsRequestTypeEndItemRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType) {
                throw new \InvalidArgumentException(sprintf('The EndItemRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType, "%s" given', is_object($endItemsRequestTypeEndItemRequestContainerItem) ? get_class($endItemsRequestTypeEndItemRequestContainerItem) : gettype($endItemsRequestTypeEndItemRequestContainerItem)), __LINE__);
            }
        }
        $this->EndItemRequestContainer = $endItemRequestContainer;
        return $this;
    }
    /**
     * Add item to EndItemRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\EndItemsRequestType
     */
    public function addToEndItemRequestContainer(\macropage\ebaysdk\trading\StructType\EndItemRequestContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType) {
            throw new \InvalidArgumentException(sprintf('The EndItemRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EndItemRequestContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\EndItemsRequestType
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
