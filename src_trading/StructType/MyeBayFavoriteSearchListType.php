<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSearchListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of favorite searches a user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSearchListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of favorite searches saved.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAvailable = null;
    /**
     * The FavoriteSearch
     * Meta information extracted from the WSDL
     * - documentation: A favorite search the user has saved, with a name and a search query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[]
     */
    protected ?array $FavoriteSearch = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBayFavoriteSearchListType
     * @uses MyeBayFavoriteSearchListType::setTotalAvailable()
     * @uses MyeBayFavoriteSearchListType::setFavoriteSearch()
     * @uses MyeBayFavoriteSearchListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $totalAvailable = null, ?array $favoriteSearch = null, $any = null)
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
    public function getTotalAvailable(): ?int
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
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
     * Get FavoriteSearch value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[]
     */
    public function getFavoriteSearch(): ?array
    {
        return $this->FavoriteSearch;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteSearch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteSearchForArrayConstraintsFromSetFavoriteSearch(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSearchListTypeFavoriteSearchItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSearchListTypeFavoriteSearchItem instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType) {
                $invalidValues[] = is_object($myeBayFavoriteSearchListTypeFavoriteSearchItem) ? get_class($myeBayFavoriteSearchListTypeFavoriteSearchItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSearchListTypeFavoriteSearchItem), var_export($myeBayFavoriteSearchListTypeFavoriteSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteSearch property can only contain items of type \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FavoriteSearch value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType[] $favoriteSearch
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
     */
    public function setFavoriteSearch(?array $favoriteSearch = null): self
    {
        // validation for constraint: array
        if ('' !== ($favoriteSearchArrayErrorMessage = self::validateFavoriteSearchForArrayConstraintsFromSetFavoriteSearch($favoriteSearch))) {
            throw new InvalidArgumentException($favoriteSearchArrayErrorMessage, __LINE__);
        }
        $this->FavoriteSearch = $favoriteSearch;
        
        return $this;
    }
    /**
     * Add item to FavoriteSearch value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
     */
    public function addToFavoriteSearch(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType) {
            throw new InvalidArgumentException(sprintf('The FavoriteSearch property can only contain items of type \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteSearch[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
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
