<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RefundArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable. </span> Type used by the <strong>RefundArray</strong>
 * container, which consists of an array of Half.com refunds.
 * @subpackage Arrays
 */
class RefundArrayType extends AbstractStructArrayBase
{
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down. </span> This container consists of information about a Half.com refund. It
     * is only returned if a Half.com order is going through (or has completed) the refund process.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundType[]
     */
    protected ?array $Refund = null;
    /**
     * Constructor method for RefundArrayType
     * @uses RefundArrayType::setRefund()
     * @param \macropage\ebaysdk\trading\StructType\RefundType[] $refund
     */
    public function __construct(?array $refund = null)
    {
        $this
            ->setRefund($refund);
    }
    /**
     * Get Refund value
     * @return \macropage\ebaysdk\trading\StructType\RefundType[]
     */
    public function getRefund(): ?array
    {
        return $this->Refund;
    }
    /**
     * This method is responsible for validating the values passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundForArrayConstraintsFromSetRefund(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundArrayTypeRefundItem) {
            // validation for constraint: itemType
            if (!$refundArrayTypeRefundItem instanceof \macropage\ebaysdk\trading\StructType\RefundType) {
                $invalidValues[] = is_object($refundArrayTypeRefundItem) ? get_class($refundArrayTypeRefundItem) : sprintf('%s(%s)', gettype($refundArrayTypeRefundItem), var_export($refundArrayTypeRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refund property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Refund value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundType[] $refund
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public function setRefund(?array $refund = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintsFromSetRefund($refund))) {
            throw new InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        $this->Refund = $refund;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\RefundType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\RefundType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\RefundType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\RefundType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\RefundType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundType $item
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundType) {
            throw new InvalidArgumentException(sprintf('The Refund property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Refund
     */
    public function getAttributeName(): string
    {
        return 'Refund';
    }
}
