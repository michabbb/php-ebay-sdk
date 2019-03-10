<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
 * @subpackage Structs
 */
class ItemBestOffersArrayType extends AbstractStructBase
{
    /**
     * The ItemBestOffers
     * Meta informations extracted from the WSDL
     * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemBestOffersType[]
     */
    public $ItemBestOffers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemBestOffersArrayType
     * @uses ItemBestOffersArrayType::setItemBestOffers()
     * @uses ItemBestOffersArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType[] $itemBestOffers
     * @param \DOMDocument $any
     */
    public function __construct(array $itemBestOffers = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemBestOffers($itemBestOffers)
            ->setAny($any);
    }
    /**
     * Get ItemBestOffers value
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType[]|null
     */
    public function getItemBestOffers()
    {
        return $this->ItemBestOffers;
    }
    /**
     * Set ItemBestOffers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType[] $itemBestOffers
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
     */
    public function setItemBestOffers(array $itemBestOffers = array())
    {
        foreach ($itemBestOffers as $itemBestOffersArrayTypeItemBestOffersItem) {
            // validation for constraint: itemType
            if (!$itemBestOffersArrayTypeItemBestOffersItem instanceof \macropage\ebaysdk\trading\StructType\ItemBestOffersType) {
                throw new \InvalidArgumentException(sprintf('The ItemBestOffers property can only contain items of \macropage\ebaysdk\trading\StructType\ItemBestOffersType, "%s" given', is_object($itemBestOffersArrayTypeItemBestOffersItem) ? get_class($itemBestOffersArrayTypeItemBestOffersItem) : gettype($itemBestOffersArrayTypeItemBestOffersItem)), __LINE__);
            }
        }
        $this->ItemBestOffers = $itemBestOffers;
        return $this;
    }
    /**
     * Add item to ItemBestOffers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
     */
    public function addToItemBestOffers(\macropage\ebaysdk\trading\StructType\ItemBestOffersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemBestOffersType) {
            throw new \InvalidArgumentException(sprintf('The ItemBestOffers property can only contain items of \macropage\ebaysdk\trading\StructType\ItemBestOffersType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemBestOffers[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
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
