<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIDArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>PromotionalSaleItemIDArray</b> container, which consists of an array of listings to which a Promotional Sale applies.
 * @subpackage Structs
 */
class ItemIDArrayType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an item listing. <br/><br/> For <b>SetPromotionalSaleListings</b>, the seller passes in the <b>ItemID</b> value for each listing that he/she wishes to become part of the Promotional Sale identified by the
     * <b>PromotionalSaleID</b> value. <br/><br/> For <b>GetPromotionalSaleDetails</b>, each listing returned in the response is a part of the Promotional Sale identified by the <b>PromotionalSaleID</b> value. | Type that represents the unique identifier
     * for an eBay listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemIDArrayType
     * @uses ItemIDArrayType::setItemID()
     * @uses ItemIDArrayType::setAny()
     * @param string[] $itemID
     * @param \DOMDocument $any
     */
    public function __construct(array $itemID = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public function setItemID(array $itemID = array())
    {
        foreach ($itemID as $itemIDArrayTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($itemIDArrayTypeItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($itemIDArrayTypeItemIDItem) ? get_class($itemIDArrayTypeItemIDItem) : gettype($itemIDArrayTypeItemIDItem)), __LINE__);
            }
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemIDArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType
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
