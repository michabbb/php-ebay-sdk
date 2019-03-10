<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductRecommendationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductRecommendationsType extends AbstractStructBase
{
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductInfoType[]
     */
    public $Product;
    /**
     * Constructor method for ProductRecommendationsType
     * @uses ProductRecommendationsType::setProduct()
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType[] $product
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $productRecommendationsTypeProductItem) {
            // validation for constraint: itemType
            if (!$productRecommendationsTypeProductItem instanceof \macropage\ebaysdk\trading\StructType\ProductInfoType) {
                throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \macropage\ebaysdk\trading\StructType\ProductInfoType, "%s" given', is_object($productRecommendationsTypeProductItem) ? get_class($productRecommendationsTypeProductItem) : gettype($productRecommendationsTypeProductItem)), __LINE__);
            }
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
     */
    public function addToProduct(\macropage\ebaysdk\trading\StructType\ProductInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductInfoType) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \macropage\ebaysdk\trading\StructType\ProductInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
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
