<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductRecommendationsType extends AbstractStructBase
{
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductInfoType[]
     */
    protected ?array $Product = null;
    /**
     * Constructor method for ProductRecommendationsType
     * @uses ProductRecommendationsType::setProduct()
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType[] $product
     */
    public function __construct(?array $product = null)
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType[]
     */
    public function getProduct(): ?array
    {
        return $this->Product;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productRecommendationsTypeProductItem) {
            // validation for constraint: itemType
            if (!$productRecommendationsTypeProductItem instanceof \macropage\ebaysdk\trading\StructType\ProductInfoType) {
                $invalidValues[] = is_object($productRecommendationsTypeProductItem) ? get_class($productRecommendationsTypeProductItem) : sprintf('%s(%s)', gettype($productRecommendationsTypeProductItem), var_export($productRecommendationsTypeProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Product value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType[] $product
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
     */
    public function setProduct(?array $product = null): self
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        $this->Product = $product;
        
        return $this;
    }
    /**
     * Add item to Product value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
     */
    public function addToProduct(\macropage\ebaysdk\trading\StructType\ProductInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductInfoType) {
            throw new InvalidArgumentException(sprintf('The Product property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Product[] = $item;
        
        return $this;
    }
}
