<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProductFinderIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ExtendedProductFinderIDType extends AbstractStructBase
{
    /**
     * The ProductFinderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductFinderID = null;
    /**
     * The ProductFinderBuySide
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProductFinderBuySide = null;
    /**
     * Constructor method for ExtendedProductFinderIDType
     * @uses ExtendedProductFinderIDType::setProductFinderID()
     * @uses ExtendedProductFinderIDType::setProductFinderBuySide()
     * @param int $productFinderID
     * @param bool $productFinderBuySide
     */
    public function __construct(?int $productFinderID = null, ?bool $productFinderBuySide = null)
    {
        $this
            ->setProductFinderID($productFinderID)
            ->setProductFinderBuySide($productFinderBuySide);
    }
    /**
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID(): ?int
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderID(?int $productFinderID = null): self
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !(is_int($productFinderID) || ctype_digit($productFinderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productFinderID, true), gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        
        return $this;
    }
    /**
     * Get ProductFinderBuySide value
     * @return bool|null
     */
    public function getProductFinderBuySide(): ?bool
    {
        return $this->ProductFinderBuySide;
    }
    /**
     * Set ProductFinderBuySide value
     * @param bool $productFinderBuySide
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProductFinderIDType
     */
    public function setProductFinderBuySide(?bool $productFinderBuySide = null): self
    {
        // validation for constraint: boolean
        if (!is_null($productFinderBuySide) && !is_bool($productFinderBuySide)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($productFinderBuySide, true), gettype($productFinderBuySide)), __LINE__);
        }
        $this->ProductFinderBuySide = $productFinderBuySide;
        
        return $this;
    }
}
