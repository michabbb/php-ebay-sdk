<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSellerListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of favorite sellers the user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSellerListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The total number of favorite sellers saved.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The FavoriteSeller
     * Meta informations extracted from the WSDL
     * - documentation: A favorite seller the user has saved, with a user ID and store name.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[]
     */
    public $FavoriteSeller;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBayFavoriteSellerListType
     * @uses MyeBayFavoriteSellerListType::setTotalAvailable()
     * @uses MyeBayFavoriteSellerListType::setFavoriteSeller()
     * @uses MyeBayFavoriteSellerListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $favoriteSeller = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setFavoriteSeller($favoriteSeller)
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
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
     * Get FavoriteSeller value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[]|null
     */
    public function getFavoriteSeller()
    {
        return $this->FavoriteSeller;
    }
    /**
     * Set FavoriteSeller value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
     */
    public function setFavoriteSeller(array $favoriteSeller = array())
    {
        foreach ($favoriteSeller as $myeBayFavoriteSellerListTypeFavoriteSellerItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSellerListTypeFavoriteSellerItem instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType) {
                throw new \InvalidArgumentException(sprintf('The FavoriteSeller property can only contain items of \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType, "%s" given', is_object($myeBayFavoriteSellerListTypeFavoriteSellerItem) ? get_class($myeBayFavoriteSellerListTypeFavoriteSellerItem) : gettype($myeBayFavoriteSellerListTypeFavoriteSellerItem)), __LINE__);
            }
        }
        $this->FavoriteSeller = $favoriteSeller;
        return $this;
    }
    /**
     * Add item to FavoriteSeller value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
     */
    public function addToFavoriteSeller(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType) {
            throw new \InvalidArgumentException(sprintf('The FavoriteSeller property can only contain items of \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FavoriteSeller[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
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
