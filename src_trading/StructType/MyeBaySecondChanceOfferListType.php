<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySecondChanceOfferListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of possible My eBay Second Chance Offers.
 * @subpackage Structs
 */
class MyeBaySecondChanceOfferListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of My eBay Second Chance Offers available.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAvailable = null;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: A Second Chance Offer item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    protected array $SecondChanceOffer = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBaySecondChanceOfferListType
     * @uses MyeBaySecondChanceOfferListType::setTotalAvailable()
     * @uses MyeBaySecondChanceOfferListType::setSecondChanceOffer()
     * @uses MyeBaySecondChanceOfferListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $totalAvailable = null, array $secondChanceOffer = [], $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setSecondChanceOffer($secondChanceOffer)
            ->setAny($any);
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable(): ?int
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function setTotalAvailable(?int $totalAvailable = null): self
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !(is_int($totalAvailable) || ctype_digit($totalAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAvailable, true), gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    public function getSecondChanceOffer(): array
    {
        return $this->SecondChanceOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondChanceOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondChanceOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBaySecondChanceOfferListTypeSecondChanceOfferItem) {
            // validation for constraint: itemType
            if (!$myeBaySecondChanceOfferListTypeSecondChanceOfferItem instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
                $invalidValues[] = is_object($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) ? get_class($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) : sprintf('%s(%s)', gettype($myeBaySecondChanceOfferListTypeSecondChanceOfferItem), var_export($myeBaySecondChanceOfferListTypeSecondChanceOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecondChanceOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SecondChanceOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function setSecondChanceOffer(array $secondChanceOffer = []): self
    {
        // validation for constraint: array
        if ('' !== ($secondChanceOfferArrayErrorMessage = self::validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer($secondChanceOffer))) {
            throw new InvalidArgumentException($secondChanceOfferArrayErrorMessage, __LINE__);
        }
        $this->SecondChanceOffer = $secondChanceOffer;
        
        return $this;
    }
    /**
     * Add item to SecondChanceOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function addToSecondChanceOffer(\macropage\ebaysdk\trading\StructType\ItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
            throw new InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SecondChanceOffer[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
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
