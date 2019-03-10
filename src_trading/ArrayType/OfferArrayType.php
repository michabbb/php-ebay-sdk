<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OfferArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>BidArray</b> container that is returned in the <b>GetAllBidders</b> response. The <b>BidArray</b> container is an array of all bids made on an auction listing that is specified in the call request.
 * @subpackage Arrays
 */
class OfferArrayType extends AbstractStructArrayBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data
     * for the user making the bid.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferType[]
     */
    public $Offer;
    /**
     * Constructor method for OfferArrayType
     * @uses OfferArrayType::setOffer()
     * @param \macropage\ebaysdk\trading\StructType\OfferType[] $offer
     */
    public function __construct(array $offer = array())
    {
        $this
            ->setOffer($offer);
    }
    /**
     * Get Offer value
     * @return \macropage\ebaysdk\trading\StructType\OfferType[]|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OfferType[] $offer
     * @return \macropage\ebaysdk\trading\ArrayType\OfferArrayType
     */
    public function setOffer(array $offer = array())
    {
        foreach ($offer as $offerArrayTypeOfferItem) {
            // validation for constraint: itemType
            if (!$offerArrayTypeOfferItem instanceof \macropage\ebaysdk\trading\StructType\OfferType) {
                throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \macropage\ebaysdk\trading\StructType\OfferType, "%s" given', is_object($offerArrayTypeOfferItem) ? get_class($offerArrayTypeOfferItem) : gettype($offerArrayTypeOfferItem)), __LINE__);
            }
        }
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Add item to Offer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OfferType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OfferArrayType
     */
    public function addToOffer(\macropage\ebaysdk\trading\StructType\OfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OfferType) {
            throw new \InvalidArgumentException(sprintf('The Offer property can only contain items of \macropage\ebaysdk\trading\StructType\OfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Offer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Offer
     */
    public function getAttributeName()
    {
        return 'Offer';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\OfferArrayType
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
