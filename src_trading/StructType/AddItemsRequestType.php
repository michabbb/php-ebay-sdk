<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base request type for the <b>AddItems</b> call, which is used to create one to five fixed-price, auction, or classified ad listings. The <b>AddItems</b> call does not support multiple-variation listings, so multiple-variation
 * listings cannot be created with this call.
 * @subpackage Structs
 */
class AddItemsRequestType extends AbstractRequestType
{
    /**
     * The AddItemRequestContainer
     * Meta information extracted from the WSDL
     * - documentation: An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[]
     */
    protected array $AddItemRequestContainer = [];
    /**
     * Constructor method for AddItemsRequestType
     * @uses AddItemsRequestType::setAddItemRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[] $addItemRequestContainer
     */
    public function __construct(array $addItemRequestContainer = [])
    {
        $this
            ->setAddItemRequestContainer($addItemRequestContainer);
    }
    /**
     * Get AddItemRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[]
     */
    public function getAddItemRequestContainer(): array
    {
        return $this->AddItemRequestContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setAddItemRequestContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddItemRequestContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddItemRequestContainerForArrayConstraintsFromSetAddItemRequestContainer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemsRequestTypeAddItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$addItemsRequestTypeAddItemRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType) {
                $invalidValues[] = is_object($addItemsRequestTypeAddItemRequestContainerItem) ? get_class($addItemsRequestTypeAddItemRequestContainerItem) : sprintf('%s(%s)', gettype($addItemsRequestTypeAddItemRequestContainerItem), var_export($addItemsRequestTypeAddItemRequestContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddItemRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddItemRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType[] $addItemRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\AddItemsRequestType
     */
    public function setAddItemRequestContainer(array $addItemRequestContainer = []): self
    {
        // validation for constraint: array
        if ('' !== ($addItemRequestContainerArrayErrorMessage = self::validateAddItemRequestContainerForArrayConstraintsFromSetAddItemRequestContainer($addItemRequestContainer))) {
            throw new InvalidArgumentException($addItemRequestContainerArrayErrorMessage, __LINE__);
        }
        $this->AddItemRequestContainer = $addItemRequestContainer;
        
        return $this;
    }
    /**
     * Add item to AddItemRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemsRequestType
     */
    public function addToAddItemRequestContainer(\macropage\ebaysdk\trading\StructType\AddItemRequestContainerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType) {
            throw new InvalidArgumentException(sprintf('The AddItemRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddItemRequestContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddItemRequestContainer[] = $item;
        
        return $this;
    }
}
