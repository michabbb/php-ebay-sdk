<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedBidValueType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>SuggestedBidValues</b> container that is returned if the buyer is attempting to bid on an auction item through the <b>PlaceOffer</b> call.
 * @subpackage Structs
 */
class SuggestedBidValueType extends AbstractStructBase
{
    /**
     * The BidValue
     * Meta informations extracted from the WSDL
     * - documentation: The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the
     * <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid
     * increment, and the buyer's specified max bid amount.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType[]
     */
    public $BidValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedBidValueType
     * @uses SuggestedBidValueType::setBidValue()
     * @uses SuggestedBidValueType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType[] $bidValue
     * @param \DOMDocument $any
     */
    public function __construct(array $bidValue = array(), \DOMDocument $any = null)
    {
        $this
            ->setBidValue($bidValue)
            ->setAny($any);
    }
    /**
     * Get BidValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType[]|null
     */
    public function getBidValue()
    {
        return $this->BidValue;
    }
    /**
     * Set BidValue value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AmountType[] $bidValue
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function setBidValue(array $bidValue = array())
    {
        foreach ($bidValue as $suggestedBidValueTypeBidValueItem) {
            // validation for constraint: itemType
            if (!$suggestedBidValueTypeBidValueItem instanceof \macropage\ebaysdk\trading\StructType\AmountType) {
                throw new \InvalidArgumentException(sprintf('The BidValue property can only contain items of \macropage\ebaysdk\trading\StructType\AmountType, "%s" given', is_object($suggestedBidValueTypeBidValueItem) ? get_class($suggestedBidValueTypeBidValueItem) : gettype($suggestedBidValueTypeBidValueItem)), __LINE__);
            }
        }
        $this->BidValue = $bidValue;
        return $this;
    }
    /**
     * Add item to BidValue value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AmountType $item
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function addToBidValue(\macropage\ebaysdk\trading\StructType\AmountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AmountType) {
            throw new \InvalidArgumentException(sprintf('The BidValue property can only contain items of \macropage\ebaysdk\trading\StructType\AmountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BidValue[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SuggestedBidValueType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
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
