<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductInfoType extends AbstractStructBase
{
    /**
     * The AverageStartPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AverageStartPrice;
    /**
     * The AverageSoldPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AverageSoldPrice;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ProductState
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The productInfoID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $productInfoID;
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
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice = null, $title = null, $productState = null, $productInfoID = null)
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
    public function getAverageStartPrice()
    {
        return $this->AverageStartPrice;
    }
    /**
     * Set AverageStartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setAverageStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $averageStartPrice = null)
    {
        $this->AverageStartPrice = $averageStartPrice;
        return $this;
    }
    /**
     * Get AverageSoldPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAverageSoldPrice()
    {
        return $this->AverageSoldPrice;
    }
    /**
     * Set AverageSoldPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setAverageSoldPrice(\macropage\ebaysdk\trading\StructType\AmountType $averageSoldPrice = null)
    {
        $this->AverageSoldPrice = $averageSoldPrice;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productState, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get productInfoID value
     * @return string|null
     */
    public function getProductInfoID()
    {
        return $this->productInfoID;
    }
    /**
     * Set productInfoID value
     * @param string $productInfoID
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
     */
    public function setProductInfoID($productInfoID = null)
    {
        // validation for constraint: string
        if (!is_null($productInfoID) && !is_string($productInfoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productInfoID)), __LINE__);
        }
        $this->productInfoID = $productInfoID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductInfoType
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
