<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PricingRecommendationsType extends AbstractStructBase
{
    /**
     * The ProductInfo
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductInfoType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductInfoType $ProductInfo = null;
    /**
     * Constructor method for PricingRecommendationsType
     * @uses PricingRecommendationsType::setProductInfo()
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType $productInfo
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ProductInfoType $productInfo = null)
    {
        $this
            ->setProductInfo($productInfo);
    }
    /**
     * Get ProductInfo value
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType|null
     */
    public function getProductInfo(): ?\macropage\ebaysdk\trading\StructType\ProductInfoType
    {
        return $this->ProductInfo;
    }
    /**
     * Set ProductInfo value
     * @param \macropage\ebaysdk\trading\StructType\ProductInfoType $productInfo
     * @return \macropage\ebaysdk\trading\StructType\PricingRecommendationsType
     */
    public function setProductInfo(?\macropage\ebaysdk\trading\StructType\ProductInfoType $productInfo = null): self
    {
        $this->ProductInfo = $productInfo;
        
        return $this;
    }
}
