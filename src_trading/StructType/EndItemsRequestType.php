<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>EndItems</b> call is used to end up to 10 specified eBay listings before the date and time at which those listings would normally end per the listing duration.
 * @subpackage Structs
 */
class EndItemsRequestType extends AbstractRequestType
{
    /**
     * The EndItemRequestContainer
     * Meta information extracted from the WSDL
     * - documentation: An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[]
     */
    protected ?array $EndItemRequestContainer = null;
    /**
     * Constructor method for EndItemsRequestType
     * @uses EndItemsRequestType::setEndItemRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[] $endItemRequestContainer
     */
    public function __construct(?array $endItemRequestContainer = null)
    {
        $this
            ->setEndItemRequestContainer($endItemRequestContainer);
    }
    /**
     * Get EndItemRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[]
     */
    public function getEndItemRequestContainer(): ?array
    {
        return $this->EndItemRequestContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setEndItemRequestContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndItemRequestContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndItemRequestContainerForArrayConstraintsFromSetEndItemRequestContainer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $endItemsRequestTypeEndItemRequestContainerItem) {
            // validation for constraint: itemType
            if (!$endItemsRequestTypeEndItemRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType) {
                $invalidValues[] = is_object($endItemsRequestTypeEndItemRequestContainerItem) ? get_class($endItemsRequestTypeEndItemRequestContainerItem) : sprintf('%s(%s)', gettype($endItemsRequestTypeEndItemRequestContainerItem), var_export($endItemsRequestTypeEndItemRequestContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EndItemRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EndItemRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType[] $endItemRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\EndItemsRequestType
     */
    public function setEndItemRequestContainer(?array $endItemRequestContainer = null): self
    {
        // validation for constraint: array
        if ('' !== ($endItemRequestContainerArrayErrorMessage = self::validateEndItemRequestContainerForArrayConstraintsFromSetEndItemRequestContainer($endItemRequestContainer))) {
            throw new InvalidArgumentException($endItemRequestContainerArrayErrorMessage, __LINE__);
        }
        $this->EndItemRequestContainer = $endItemRequestContainer;
        
        return $this;
    }
    /**
     * Add item to EndItemRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\EndItemsRequestType
     */
    public function addToEndItemRequestContainer(\macropage\ebaysdk\trading\StructType\EndItemRequestContainerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType) {
            throw new InvalidArgumentException(sprintf('The EndItemRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EndItemRequestContainer[] = $item;
        
        return $this;
    }
}
