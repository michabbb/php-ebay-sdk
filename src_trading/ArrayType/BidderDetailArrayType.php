<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidderDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidderDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The BidderDetail
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidderDetailType[]
     */
    protected ?array $BidderDetail = null;
    /**
     * Constructor method for BidderDetailArrayType
     * @uses BidderDetailArrayType::setBidderDetail()
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType[] $bidderDetail
     */
    public function __construct(?array $bidderDetail = null)
    {
        $this
            ->setBidderDetail($bidderDetail);
    }
    /**
     * Get BidderDetail value
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType[]
     */
    public function getBidderDetail(): ?array
    {
        return $this->BidderDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setBidderDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidderDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidderDetailForArrayConstraintsFromSetBidderDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidderDetailArrayTypeBidderDetailItem) {
            // validation for constraint: itemType
            if (!$bidderDetailArrayTypeBidderDetailItem instanceof \macropage\ebaysdk\trading\StructType\BidderDetailType) {
                $invalidValues[] = is_object($bidderDetailArrayTypeBidderDetailItem) ? get_class($bidderDetailArrayTypeBidderDetailItem) : sprintf('%s(%s)', gettype($bidderDetailArrayTypeBidderDetailItem), var_export($bidderDetailArrayTypeBidderDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidderDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\BidderDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BidderDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType[] $bidderDetail
     * @return \macropage\ebaysdk\trading\ArrayType\BidderDetailArrayType
     */
    public function setBidderDetail(?array $bidderDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($bidderDetailArrayErrorMessage = self::validateBidderDetailForArrayConstraintsFromSetBidderDetail($bidderDetail))) {
            throw new InvalidArgumentException($bidderDetailArrayErrorMessage, __LINE__);
        }
        $this->BidderDetail = $bidderDetail;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\BidderDetailType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\BidderDetailType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\BidderDetailType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\BidderDetailType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\BidderDetailType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType $item
     * @return \macropage\ebaysdk\trading\ArrayType\BidderDetailArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidderDetailType) {
            throw new InvalidArgumentException(sprintf('The BidderDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\BidderDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidderDetail
     */
    public function getAttributeName(): string
    {
        return 'BidderDetail';
    }
}
