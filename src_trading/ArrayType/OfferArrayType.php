<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OfferArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BidArray</b> container that is returned in the <b>GetAllBidders</b> response. The <b>BidArray</b> container is an array of all bids made on an auction listing that is specified in the call request.
 * @subpackage Arrays
 */
class OfferArrayType extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data
     * for the user making the bid.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferType[]
     */
    protected array $Offer = [];
    /**
     * Constructor method for OfferArrayType
     * @uses OfferArrayType::setOffer()
     * @param \macropage\ebaysdk\trading\StructType\OfferType[] $offer
     */
    public function __construct(array $offer = [])
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \macropage\ebaysdk\trading\StructType\OfferType[]
     */
    public function getOffer(): array
    {
        return $this->Offer;
    }
    /**
     * This method is responsible for validating the values passed to the setOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOfferForArrayConstraintsFromSetOffer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerArrayTypeOfferItem) {
            // validation for constraint: itemType
            if (!$offerArrayTypeOfferItem instanceof \macropage\ebaysdk\trading\StructType\OfferType) {
                $invalidValues[] = is_object($offerArrayTypeOfferItem) ? get_class($offerArrayTypeOfferItem) : sprintf('%s(%s)', gettype($offerArrayTypeOfferItem), var_export($offerArrayTypeOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Offer property can only contain items of type \macropage\ebaysdk\trading\StructType\OfferType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Offer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OfferType[] $offer
     * @return \macropage\ebaysdk\trading\ArrayType\OfferArrayType
     */
    public function setOffer(array $offer = []): self
    {
        // validation for constraint: array
        if ('' !== ($offerArrayErrorMessage = self::validateOfferForArrayConstraintsFromSetOffer($offer))) {
            throw new InvalidArgumentException($offerArrayErrorMessage, __LINE__);
        }
        $this->Offer = $offer;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OfferType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OfferArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OfferType) {
            throw new InvalidArgumentException(sprintf('The Offer property can only contain items of type \macropage\ebaysdk\trading\StructType\OfferType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Offer
     */
    public function getAttributeName(): string
    {
        return 'Offer';
    }
}
