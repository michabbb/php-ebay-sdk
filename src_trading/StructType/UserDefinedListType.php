<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDefinedListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the items, searches and sellers that the user has saved to this list using the "Add to list" feature. The name of the list is given by the "Name" element.
 * @subpackage Structs
 */
class UserDefinedListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The user's chosen name for this list.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the total number of items in the user-defined list. The number of <b>Item</b> nodes in the <b>ItemArray</b> should match this value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemCount = null;
    /**
     * The FavoriteSearcheCount
     * Meta information extracted from the WSDL
     * - documentation: This field is not supported.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FavoriteSearcheCount = null;
    /**
     * The FavoriteSellerCount
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the total number of favorite sellers in the user-defined list. The number of <b>FavoriteSeller</b> nodes returned in the response should match this value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FavoriteSellerCount = null;
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: An array of Items that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $ItemArray = null;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: An array of Favorite Searches that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $FavoriteSearches = null;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: An array of Favorite Sellers that the user has added to the user-defined list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $FavoriteSellers = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?int $itemCount = null, ?int $favoriteSearcheCount = null, ?int $favoriteSellerCount = null, ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null, ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount(): ?int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setItemCount(?int $itemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
        return $this;
    }
    /**
     * Get FavoriteSearcheCount value
     * @return int|null
     */
    public function getFavoriteSearcheCount(): ?int
    {
        return $this->FavoriteSearcheCount;
    }
    /**
     * Set FavoriteSearcheCount value
     * @param int $favoriteSearcheCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSearcheCount(?int $favoriteSearcheCount = null): self
    {
        // validation for constraint: int
        if (!is_null($favoriteSearcheCount) && !(is_int($favoriteSearcheCount) || ctype_digit($favoriteSearcheCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($favoriteSearcheCount, true), gettype($favoriteSearcheCount)), __LINE__);
        }
        $this->FavoriteSearcheCount = $favoriteSearcheCount;
        
        return $this;
    }
    /**
     * Get FavoriteSellerCount value
     * @return int|null
     */
    public function getFavoriteSellerCount(): ?int
    {
        return $this->FavoriteSellerCount;
    }
    /**
     * Set FavoriteSellerCount value
     * @param int $favoriteSellerCount
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSellerCount(?int $favoriteSellerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($favoriteSellerCount) && !(is_int($favoriteSellerCount) || ctype_digit($favoriteSellerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($favoriteSellerCount, true), gettype($favoriteSellerCount)), __LINE__);
        }
        $this->FavoriteSellerCount = $favoriteSellerCount;
        
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray(): ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setItemArray(?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null): self
    {
        $this->ItemArray = $itemArray;
        
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType|null
     */
    public function getFavoriteSearches(): ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSearches(?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null): self
    {
        $this->FavoriteSearches = $favoriteSearches;
        
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType|null
     */
    public function getFavoriteSellers(): ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
     */
    public function setFavoriteSellers(?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null): self
    {
        $this->FavoriteSellers = $favoriteSellers;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType
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
