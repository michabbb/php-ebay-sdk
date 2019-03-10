<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BestOfferArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: An array of one or more Best Offers. This type is used in the responses of the <b>GetBestOffers</b> and <b>RespondToBestOffer</b> calls.
 * @subpackage Arrays
 */
class BestOfferArrayType extends AbstractStructArrayBase
{
    /**
     * The BestOffer
     * Meta informations extracted from the WSDL
     * - documentation: For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter
     * Offer, and status of Best Offer/Counter Offer. <br/><br/> For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a
     * href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferType[]
     */
    public $BestOffer;
    /**
     * Constructor method for BestOfferArrayType
     * @uses BestOfferArrayType::setBestOffer()
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType[] $bestOffer
     */
    public function __construct(array $bestOffer = array())
    {
        $this
            ->setBestOffer($bestOffer);
    }
    /**
     * Get BestOffer value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType[]|null
     */
    public function getBestOffer()
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType[] $bestOffer
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
     */
    public function setBestOffer(array $bestOffer = array())
    {
        foreach ($bestOffer as $bestOfferArrayTypeBestOfferItem) {
            // validation for constraint: itemType
            if (!$bestOfferArrayTypeBestOfferItem instanceof \macropage\ebaysdk\trading\StructType\BestOfferType) {
                throw new \InvalidArgumentException(sprintf('The BestOffer property can only contain items of \macropage\ebaysdk\trading\StructType\BestOfferType, "%s" given', is_object($bestOfferArrayTypeBestOfferItem) ? get_class($bestOfferArrayTypeBestOfferItem) : gettype($bestOfferArrayTypeBestOfferItem)), __LINE__);
            }
        }
        $this->BestOffer = $bestOffer;
        return $this;
    }
    /**
     * Add item to BestOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType $item
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
     */
    public function addToBestOffer(\macropage\ebaysdk\trading\StructType\BestOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BestOfferType) {
            throw new \InvalidArgumentException(sprintf('The BestOffer property can only contain items of \macropage\ebaysdk\trading\StructType\BestOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BestOffer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BestOffer
     */
    public function getAttributeName()
    {
        return 'BestOffer';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
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
