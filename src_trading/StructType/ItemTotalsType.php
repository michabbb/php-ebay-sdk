<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTotalsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ItemTotalsType extends AbstractStructBase
{
    /**
     * The TotalQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalQuantity = null;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalValue = null;
    /**
     * Constructor method for ItemTotalsType
     * @uses ItemTotalsType::setTotalQuantity()
     * @uses ItemTotalsType::setTotalValue()
     * @param int $totalQuantity
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalValue
     */
    public function __construct(?int $totalQuantity = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalValue = null)
    {
        $this
            ->setTotalQuantity($totalQuantity)
            ->setTotalValue($totalValue);
    }
    /**
     * Get TotalQuantity value
     * @return int|null
     */
    public function getTotalQuantity(): ?int
    {
        return $this->TotalQuantity;
    }
    /**
     * Set TotalQuantity value
     * @param int $totalQuantity
     * @return \macropage\ebaysdk\trading\StructType\ItemTotalsType
     */
    public function setTotalQuantity(?int $totalQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($totalQuantity) && !(is_int($totalQuantity) || ctype_digit($totalQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalQuantity, true), gettype($totalQuantity)), __LINE__);
        }
        $this->TotalQuantity = $totalQuantity;
        
        return $this;
    }
    /**
     * Get TotalValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalValue(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalValue
     * @return \macropage\ebaysdk\trading\StructType\ItemTotalsType
     */
    public function setTotalValue(?\macropage\ebaysdk\trading\StructType\AmountType $totalValue = null): self
    {
        $this->TotalValue = $totalValue;
        
        return $this;
    }
}
