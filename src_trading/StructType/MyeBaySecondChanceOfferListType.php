<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySecondChanceOfferListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of possible My eBay Second Chance Offers.
 * @subpackage Structs
 */
class MyeBaySecondChanceOfferListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The total number of My eBay Second Chance Offers available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The SecondChanceOffer
     * Meta informations extracted from the WSDL
     * - documentation: A Second Chance Offer item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    public $SecondChanceOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBaySecondChanceOfferListType
     * @uses MyeBaySecondChanceOfferListType::setTotalAvailable()
     * @uses MyeBaySecondChanceOfferListType::setSecondChanceOffer()
     * @uses MyeBaySecondChanceOfferListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $secondChanceOffer = array(), \DOMDocument $any = null)
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
    public function getTotalAvailable()
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function setTotalAvailable($totalAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !is_numeric($totalAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \macropage\ebaysdk\trading\StructType\ItemType[]|null
     */
    public function getSecondChanceOffer()
    {
        return $this->SecondChanceOffer;
    }
    /**
     * Set SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function setSecondChanceOffer(array $secondChanceOffer = array())
    {
        foreach ($secondChanceOffer as $myeBaySecondChanceOfferListTypeSecondChanceOfferItem) {
            // validation for constraint: itemType
            if (!$myeBaySecondChanceOfferListTypeSecondChanceOfferItem instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
                throw new \InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of \macropage\ebaysdk\trading\StructType\ItemType, "%s" given', is_object($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) ? get_class($myeBaySecondChanceOfferListTypeSecondChanceOfferItem) : gettype($myeBaySecondChanceOfferListTypeSecondChanceOfferItem)), __LINE__);
            }
        }
        $this->SecondChanceOffer = $secondChanceOffer;
        return $this;
    }
    /**
     * Add item to SecondChanceOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
     */
    public function addToSecondChanceOffer(\macropage\ebaysdk\trading\StructType\ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
            throw new \InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of \macropage\ebaysdk\trading\StructType\ItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SecondChanceOffer[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySecondChanceOfferListType
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
