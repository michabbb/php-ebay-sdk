<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSearchListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of favorite searches a user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSearchListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The total number of favorite searches saved.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The FavoriteSearch
     * Meta informations extracted from the WSDL
     * - documentation: A favorite search the user has saved, with a name and a search query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[]
     */
    public $FavoriteSearch;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyeBayFavoriteSearchListType
     * @uses MyeBayFavoriteSearchListType::setTotalAvailable()
     * @uses MyeBayFavoriteSearchListType::setFavoriteSearch()
     * @uses MyeBayFavoriteSearchListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @param \DOMDocument $any
     */
    public function __construct($totalAvailable = null, array $favoriteSearch = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalAvailable($totalAvailable)
            ->setFavoriteSearch($favoriteSearch)
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
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
     * Get FavoriteSearch value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[]|null
     */
    public function getFavoriteSearch()
    {
        return $this->FavoriteSearch;
    }
    /**
     * Set FavoriteSearch value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
     */
    public function setFavoriteSearch(array $favoriteSearch = array())
    {
        foreach ($favoriteSearch as $myeBayFavoriteSearchListTypeFavoriteSearchItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSearchListTypeFavoriteSearchItem instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType) {
                throw new \InvalidArgumentException(sprintf('The FavoriteSearch property can only contain items of \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType, "%s" given', is_object($myeBayFavoriteSearchListTypeFavoriteSearchItem) ? get_class($myeBayFavoriteSearchListTypeFavoriteSearchItem) : gettype($myeBayFavoriteSearchListTypeFavoriteSearchItem)), __LINE__);
            }
        }
        $this->FavoriteSearch = $favoriteSearch;
        return $this;
    }
    /**
     * Add item to FavoriteSearch value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
     */
    public function addToFavoriteSearch(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType) {
            throw new \InvalidArgumentException(sprintf('The FavoriteSearch property can only contain items of \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FavoriteSearch[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
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
