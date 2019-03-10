<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProductFinderIDType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ExtendedProductFinderIDType extends AbstractStructBase
{
    /**
     * The ProductFinderID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductFinderID;
    /**
     * The ProductFinderBuySide
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ProductFinderBuySide;
    /**
     * Constructor method for ExtendedProductFinderIDType
     * @uses ExtendedProductFinderIDType::setProductFinderID()
     * @uses ExtendedProductFinderIDType::setProductFinderBuySide()
     * @param int $productFinderID
     * @param bool $productFinderBuySide
     */
    public function __construct($productFinderID = null, $productFinderBuySide = null)
    {
        $this
            ->setProductFinderID($productFinderID)
            ->setProductFinderBuySide($productFinderBuySide);
    }
    /**
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID()
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderID($productFinderID = null)
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !is_numeric($productFinderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        return $this;
    }
    /**
     * Get ProductFinderBuySide value
     * @return bool|null
     */
    public function getProductFinderBuySide()
    {
        return $this->ProductFinderBuySide;
    }
    /**
     * Set ProductFinderBuySide value
     * @param bool $productFinderBuySide
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderBuySide($productFinderBuySide = null)
    {
        // validation for constraint: boolean
        if (!is_null($productFinderBuySide) && !is_bool($productFinderBuySide)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($productFinderBuySide)), __LINE__);
        }
        $this->ProductFinderBuySide = $productFinderBuySide;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProductFinderIDType
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
