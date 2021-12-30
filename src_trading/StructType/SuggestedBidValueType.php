<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedBidValueType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>SuggestedBidValues</b> container that is returned if the buyer is attempting to bid on an auction item through the <b>PlaceOffer</b> call.
 * @subpackage Structs
 */
class SuggestedBidValueType extends AbstractStructBase
{
    /**
     * The BidValue
     * Meta information extracted from the WSDL
     * - documentation: The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the
     * <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid
     * increment, and the buyer's specified max bid amount.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType[]
     */
    protected ?array $BidValue = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SuggestedBidValueType
     * @uses SuggestedBidValueType::setBidValue()
     * @uses SuggestedBidValueType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType[] $bidValue
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $bidValue = null, $any = null)
    {
        $this
            ->setBidValue($bidValue)
            ->setAny($any);
    }
    /**
     * Get BidValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType[]
     */
    public function getBidValue(): ?array
    {
        return $this->BidValue;
    }
    /**
     * This method is responsible for validating the values passed to the setBidValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidValueForArrayConstraintsFromSetBidValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $suggestedBidValueTypeBidValueItem) {
            // validation for constraint: itemType
            if (!$suggestedBidValueTypeBidValueItem instanceof \macropage\ebaysdk\trading\StructType\AmountType) {
                $invalidValues[] = is_object($suggestedBidValueTypeBidValueItem) ? get_class($suggestedBidValueTypeBidValueItem) : sprintf('%s(%s)', gettype($suggestedBidValueTypeBidValueItem), var_export($suggestedBidValueTypeBidValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidValue property can only contain items of type \macropage\ebaysdk\trading\StructType\AmountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BidValue value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AmountType[] $bidValue
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function setBidValue(?array $bidValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($bidValueArrayErrorMessage = self::validateBidValueForArrayConstraintsFromSetBidValue($bidValue))) {
            throw new InvalidArgumentException($bidValueArrayErrorMessage, __LINE__);
        }
        $this->BidValue = $bidValue;
        
        return $this;
    }
    /**
     * Add item to BidValue value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AmountType $item
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function addToBidValue(\macropage\ebaysdk\trading\StructType\AmountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AmountType) {
            throw new InvalidArgumentException(sprintf('The BidValue property can only contain items of type \macropage\ebaysdk\trading\StructType\AmountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidValue[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\SuggestedBidValueType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
