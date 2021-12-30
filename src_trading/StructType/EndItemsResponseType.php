<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a response of the resulting status of ending each item.
 * @subpackage Structs
 */
class EndItemsResponseType extends AbstractResponseType
{
    /**
     * The EndItemResponseContainer
     * Meta information extracted from the WSDL
     * - documentation: Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[]
     */
    protected ?array $EndItemResponseContainer = null;
    /**
     * Constructor method for EndItemsResponseType
     * @uses EndItemsResponseType::setEndItemResponseContainer()
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[] $endItemResponseContainer
     */
    public function __construct(?array $endItemResponseContainer = null)
    {
        $this
            ->setEndItemResponseContainer($endItemResponseContainer);
    }
    /**
     * Get EndItemResponseContainer value
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[]
     */
    public function getEndItemResponseContainer(): ?array
    {
        return $this->EndItemResponseContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setEndItemResponseContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndItemResponseContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndItemResponseContainerForArrayConstraintsFromSetEndItemResponseContainer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $endItemsResponseTypeEndItemResponseContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsResponseTypeEndItemResponseContainerItem instanceof \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType) {
                $invalidValues[] = is_object($endItemsResponseTypeEndItemResponseContainerItem) ? get_class($endItemsResponseTypeEndItemResponseContainerItem) : sprintf('%s(%s)', gettype($endItemsResponseTypeEndItemResponseContainerItem), var_export($endItemsResponseTypeEndItemResponseContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EndItemResponseContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EndItemResponseContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType[] $endItemResponseContainer
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType
     */
    public function setEndItemResponseContainer(?array $endItemResponseContainer = null): self
    {
        // validation for constraint: array
        if ('' !== ($endItemResponseContainerArrayErrorMessage = self::validateEndItemResponseContainerForArrayConstraintsFromSetEndItemResponseContainer($endItemResponseContainer))) {
            throw new InvalidArgumentException($endItemResponseContainerArrayErrorMessage, __LINE__);
        }
        $this->EndItemResponseContainer = $endItemResponseContainer;
        
        return $this;
    }
    /**
     * Add item to EndItemResponseContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\EndItemsResponseType
     */
    public function addToEndItemResponseContainer(\macropage\ebaysdk\trading\StructType\EndItemResponseContainerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType) {
            throw new InvalidArgumentException(sprintf('The EndItemResponseContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EndItemResponseContainer[] = $item;
        
        return $this;
    }
}
