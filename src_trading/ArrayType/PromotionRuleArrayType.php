<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PromotionRuleArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class PromotionRuleArrayType extends AbstractStructArrayBase
{
    /**
     * The PromotionRule
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionRuleType[]
     */
    protected array $PromotionRule = [];
    /**
     * Constructor method for PromotionRuleArrayType
     * @uses PromotionRuleArrayType::setPromotionRule()
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType[] $promotionRule
     */
    public function __construct(array $promotionRule = [])
    {
        $this
            ->setPromotionRule($promotionRule);
    }
    /**
     * Get PromotionRule value
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType[]
     */
    public function getPromotionRule(): array
    {
        return $this->PromotionRule;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionRuleForArrayConstraintsFromSetPromotionRule(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $promotionRuleArrayTypePromotionRuleItem) {
            // validation for constraint: itemType
            if (!$promotionRuleArrayTypePromotionRuleItem instanceof \macropage\ebaysdk\trading\StructType\PromotionRuleType) {
                $invalidValues[] = is_object($promotionRuleArrayTypePromotionRuleItem) ? get_class($promotionRuleArrayTypePromotionRuleItem) : sprintf('%s(%s)', gettype($promotionRuleArrayTypePromotionRuleItem), var_export($promotionRuleArrayTypePromotionRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionRule property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotionRule value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType[] $promotionRule
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionRuleArrayType
     */
    public function setPromotionRule(array $promotionRule = []): self
    {
        // validation for constraint: array
        if ('' !== ($promotionRuleArrayErrorMessage = self::validatePromotionRuleForArrayConstraintsFromSetPromotionRule($promotionRule))) {
            throw new InvalidArgumentException($promotionRuleArrayErrorMessage, __LINE__);
        }
        $this->PromotionRule = $promotionRule;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\PromotionRuleType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\PromotionRuleType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\PromotionRuleType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\PromotionRuleType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\PromotionRuleType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType $item
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionRuleArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionRuleType) {
            throw new InvalidArgumentException(sprintf('The PromotionRule property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionRule
     */
    public function getAttributeName(): string
    {
        return 'PromotionRule';
    }
}
