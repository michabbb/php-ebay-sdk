<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductInfoType extends AbstractStructBase
{
    /**
     * The AverageStartPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AverageStartPrice = null;
    /**
     * The AverageSoldPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AverageSoldPrice = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductState = null;
    /**
     * The productInfoID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string|null
     */
    protected ?string $productInfoID = null;
    /**
     * Constructor method for ProductInfoType
     * @uses ProductInfoType::setAverageStartPrice()
     * @uses ProductInfoType::setAverageSoldPrice()
     * @uses ProductInfoType::setTitle()
     * @uses ProductInfoType::setProductState()
     * @uses ProductInfoType::setProductInfoID()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice
     * @param string $title
     * @param string $productState
     * @param string $productInfoID
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice = null, ?string $title = null, ?string $productState = null, ?string $productInfoID = null)
    {
        $this
            ->setAverageStartPrice($averageStartPrice)
            ->setAverageSoldPrice($averageSoldPrice)
            ->setTitle($title)
            ->setProductState($productState)
            ->setProductInfoID($productInfoID);
    }
    /**
     * Get AverageStartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAverageStartPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AverageStartPrice;
    }
    /**
     * Set AverageStartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setAverageStartPrice(?\macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice = null): self
    {
        $this->AverageStartPrice = $averageStartPrice;
        
        return $this;
    }
    /**
     * Get AverageSoldPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAverageSoldPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AverageSoldPrice;
    }
    /**
     * Set AverageSoldPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setAverageSoldPrice(?\macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice = null): self
    {
        $this->AverageSoldPrice = $averageSoldPrice;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState(): ?string
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setProductState(?string $productState = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductStateCodeType', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        
        return $this;
    }
    /**
     * Get productInfoID value
     * @return string|null
     */
    public function getProductInfoID(): ?string
    {
        return $this->productInfoID;
    }
    /**
     * Set productInfoID value
     * @param string $productInfoID
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setProductInfoID(?string $productInfoID = null): self
    {
        // validation for constraint: string
        if (!is_null($productInfoID) && !is_string($productInfoID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productInfoID, true), gettype($productInfoID)), __LINE__);
        }
        $this->productInfoID = $productInfoID;
        
        return $this;
    }
}
