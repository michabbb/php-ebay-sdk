<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PromotionalSaleArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> This type is used by the <strong>PromotionalSaleDetails</strong> container returned in the <strong>GetPromotionalSaleDetails</strong> call. The <strong>PromotionalSaleDetails</strong> container consists of one or
 * promotional sales that match the input criteria. <br/><br/> Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
 * @subpackage Arrays
 */
class PromotionalSaleArrayType extends AbstractStructArrayBase
{
    /**
     * The PromotionalSale
     * Meta information extracted from the WSDL
     * - documentation: Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned. <br/><br/> Promotional Sales are only available to
     * eBay sellers who are eBay Store subscribers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalSaleType[]
     */
    protected array $PromotionalSale = [];
    /**
     * Constructor method for PromotionalSaleArrayType
     * @uses PromotionalSaleArrayType::setPromotionalSale()
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType[] $promotionalSale
     */
    public function __construct(array $promotionalSale = [])
    {
        $this
            ->setPromotionalSale($promotionalSale);
    }
    /**
     * Get PromotionalSale value
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType[]
     */
    public function getPromotionalSale(): array
    {
        return $this->PromotionalSale;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionalSale method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionalSale method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionalSaleForArrayConstraintsFromSetPromotionalSale(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $promotionalSaleArrayTypePromotionalSaleItem) {
            // validation for constraint: itemType
            if (!$promotionalSaleArrayTypePromotionalSaleItem instanceof \macropage\ebaysdk\trading\StructType\PromotionalSaleType) {
                $invalidValues[] = is_object($promotionalSaleArrayTypePromotionalSaleItem) ? get_class($promotionalSaleArrayTypePromotionalSaleItem) : sprintf('%s(%s)', gettype($promotionalSaleArrayTypePromotionalSaleItem), var_export($promotionalSaleArrayTypePromotionalSaleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionalSale property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionalSaleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotionalSale value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType[] $promotionalSale
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
     */
    public function setPromotionalSale(array $promotionalSale = []): self
    {
        // validation for constraint: array
        if ('' !== ($promotionalSaleArrayErrorMessage = self::validatePromotionalSaleForArrayConstraintsFromSetPromotionalSale($promotionalSale))) {
            throw new InvalidArgumentException($promotionalSaleArrayErrorMessage, __LINE__);
        }
        $this->PromotionalSale = $promotionalSale;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType $item
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionalSaleType) {
            throw new InvalidArgumentException(sprintf('The PromotionalSale property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionalSaleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionalSale
     */
    public function getAttributeName(): string
    {
        return 'PromotionalSale';
    }
}
