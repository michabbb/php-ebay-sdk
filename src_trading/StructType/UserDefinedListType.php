<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDefinedListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the items, searches and sellers that the user has saved to this list using the "Add to list" feature. The name of the list is given by the "Name" element.
 * @subpackage Structs
 */
class UserDefinedListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The user's chosen name for this list.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates the total number of items in the user-defined list. The number of <b>Item</b> nodes in the <b>ItemArray</b> should match this value.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The FavoriteSearcheCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is not supported.
     * - minOccurs: 0
     * @var int
     */
    public $FavoriteSearcheCount;
    /**
     * The FavoriteSellerCount
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates the total number of favorite sellers in the user-defined list. The number of <b>FavoriteSeller</b> nodes returned in the response should match this value.
     * - minOccurs: 0
     * @var int
     */
    public $FavoriteSellerCount;
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: An array of Items that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The FavoriteSearches
     * Meta informations extracted from the WSDL
     * - documentation: An array of Favorite Searches that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
     */
    public $FavoriteSearches;
    /**
     * The FavoriteSellers
     * Meta informations extracted from the WSDL
     * - documentation: An array of Favorite Sellers that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
     */
    public $FavoriteSellers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserDefinedListType
     * @uses UserDefinedListType::setName()
     * @uses UserDefinedListType::setItemCount()
     * @uses UserDefinedListType::setFavoriteSearcheCount()
     * @uses UserDefinedListType::setFavoriteSellerCount()
     * @uses UserDefinedListType::setItemArray()
     * @uses UserDefinedListType::setFavoriteSearches()
     * @uses UserDefinedListType::setFavoriteSellers()
     * @uses UserDefinedListType::setAny()
     * @param string $name
     * @param int $itemCount
     * @param int $favoriteSearcheCount
     * @param int $favoriteSellerCount
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $itemCount = null, $favoriteSearcheCount = null, $favoriteSellerCount = null, \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null, \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setItemCount($itemCount)
            ->setFavoriteSearcheCount($favoriteSearcheCount)
            ->setFavoriteSellerCount($favoriteSellerCount)
            ->setItemArray($itemArray)
            ->setFavoriteSearches($favoriteSearches)
            ->setFavoriteSellers($favoriteSellers)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get FavoriteSearcheCount value
     * @return int|null
     */
    public function getFavoriteSearcheCount()
    {
        return $this->FavoriteSearcheCount;
    }
    /**
     * Set FavoriteSearcheCount value
     * @param int $favoriteSearcheCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSearcheCount($favoriteSearcheCount = null)
    {
        // validation for constraint: int
        if (!is_null($favoriteSearcheCount) && !is_numeric($favoriteSearcheCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($favoriteSearcheCount)), __LINE__);
        }
        $this->FavoriteSearcheCount = $favoriteSearcheCount;
        return $this;
    }
    /**
     * Get FavoriteSellerCount value
     * @return int|null
     */
    public function getFavoriteSellerCount()
    {
        return $this->FavoriteSellerCount;
    }
    /**
     * Set FavoriteSellerCount value
     * @param int $favoriteSellerCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSellerCount($favoriteSellerCount = null)
    {
        // validation for constraint: int
        if (!is_null($favoriteSellerCount) && !is_numeric($favoriteSellerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($favoriteSellerCount)), __LINE__);
        }
        $this->FavoriteSellerCount = $favoriteSellerCount;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setItemArray(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType|null
     */
    public function getFavoriteSearches()
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSearches(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null)
    {
        $this->FavoriteSearches = $favoriteSearches;
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType|null
     */
    public function getFavoriteSellers()
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSellers(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null)
    {
        $this->FavoriteSellers = $favoriteSellers;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UserDefinedListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
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
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
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
