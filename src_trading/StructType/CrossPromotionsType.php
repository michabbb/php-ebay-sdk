<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionsType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The PrimaryScheme
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryScheme;
    /**
     * The PromotionMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionMethod;
    /**
     * The SellerID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The ShippingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $ShippingDiscount;
    /**
     * The StoreName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The PromotedItem
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotedItemType[]
     */
    public $PromotedItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CrossPromotionsType
     * @uses CrossPromotionsType::setItemID()
     * @uses CrossPromotionsType::setPrimaryScheme()
     * @uses CrossPromotionsType::setPromotionMethod()
     * @uses CrossPromotionsType::setSellerID()
     * @uses CrossPromotionsType::setShippingDiscount()
     * @uses CrossPromotionsType::setStoreName()
     * @uses CrossPromotionsType::setPromotedItem()
     * @uses CrossPromotionsType::setAny()
     * @param string $itemID
     * @param string $primaryScheme
     * @param string $promotionMethod
     * @param string $sellerID
     * @param bool $shippingDiscount
     * @param string $storeName
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType[] $promotedItem
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $primaryScheme = null, $promotionMethod = null, $sellerID = null, $shippingDiscount = null, $storeName = null, array $promotedItem = array(), \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setPrimaryScheme($primaryScheme)
            ->setPromotionMethod($promotionMethod)
            ->setSellerID($sellerID)
            ->setShippingDiscount($shippingDiscount)
            ->setStoreName($storeName)
            ->setPromotedItem($promotedItem)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get PrimaryScheme value
     * @return string|null
     */
    public function getPrimaryScheme()
    {
        return $this->PrimaryScheme;
    }
    /**
     * Set PrimaryScheme value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $primaryScheme
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPrimaryScheme($primaryScheme = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid($primaryScheme)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $primaryScheme, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PrimaryScheme = $primaryScheme;
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod()
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionMethod
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPromotionMethod($promotionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $promotionMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return bool|null
     */
    public function getShippingDiscount()
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param bool $shippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setShippingDiscount($shippingDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingDiscount) && !is_bool($shippingDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingDiscount)), __LINE__);
        }
        $this->ShippingDiscount = $shippingDiscount;
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        return $this;
    }
    /**
     * Get PromotedItem value
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType[]|null
     */
    public function getPromotedItem()
    {
        return $this->PromotedItem;
    }
    /**
     * Set PromotedItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType[] $promotedItem
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPromotedItem(array $promotedItem = array())
    {
        foreach ($promotedItem as $crossPromotionsTypePromotedItemItem) {
            // validation for constraint: itemType
            if (!$crossPromotionsTypePromotedItemItem instanceof \macropage\ebaysdk\trading\StructType\PromotedItemType) {
                throw new \InvalidArgumentException(sprintf('The PromotedItem property can only contain items of \macropage\ebaysdk\trading\StructType\PromotedItemType, "%s" given', is_object($crossPromotionsTypePromotedItemItem) ? get_class($crossPromotionsTypePromotedItemItem) : gettype($crossPromotionsTypePromotedItemItem)), __LINE__);
            }
        }
        $this->PromotedItem = $promotedItem;
        return $this;
    }
    /**
     * Add item to PromotedItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType $item
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function addToPromotedItem(\macropage\ebaysdk\trading\StructType\PromotedItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotedItemType) {
            throw new \InvalidArgumentException(sprintf('The PromotedItem property can only contain items of \macropage\ebaysdk\trading\StructType\PromotedItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromotedItem[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CrossPromotionsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
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
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
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
