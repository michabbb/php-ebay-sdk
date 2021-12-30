<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBayFavoriteSellerListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of favorite sellers the user has saved on the My eBay page.
 * @subpackage Structs
 */
class MyeBayFavoriteSellerListType extends AbstractStructBase
{
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: The total number of favorite sellers saved.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAvailable = null;
    /**
     * The FavoriteSeller
     * Meta information extracted from the WSDL
     * - documentation: A favorite seller the user has saved, with a user ID and store name.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[]
     */
    protected ?array $FavoriteSeller = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBayFavoriteSellerListType
     * @uses MyeBayFavoriteSellerListType::setTotalAvailable()
     * @uses MyeBayFavoriteSellerListType::setFavoriteSeller()
     * @uses MyeBayFavoriteSellerListType::setAny()
     * @param int $totalAvailable
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $totalAvailable = null, ?array $favoriteSeller = null, $any = null)
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
    public function getTotalAvailable(): ?int
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
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
     * Get FavoriteSeller value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[]
     */
    public function getFavoriteSeller(): ?array
    {
        return $this->FavoriteSeller;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteSeller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteSeller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteSellerForArrayConstraintsFromSetFavoriteSeller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $myeBayFavoriteSellerListTypeFavoriteSellerItem) {
            // validation for constraint: itemType
            if (!$myeBayFavoriteSellerListTypeFavoriteSellerItem instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType) {
                $invalidValues[] = is_object($myeBayFavoriteSellerListTypeFavoriteSellerItem) ? get_class($myeBayFavoriteSellerListTypeFavoriteSellerItem) : sprintf('%s(%s)', gettype($myeBayFavoriteSellerListTypeFavoriteSellerItem), var_export($myeBayFavoriteSellerListTypeFavoriteSellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteSeller property can only contain items of type \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FavoriteSeller value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType[] $favoriteSeller
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
     */
    public function setFavoriteSeller(?array $favoriteSeller = null): self
    {
        // validation for constraint: array
        if ('' !== ($favoriteSellerArrayErrorMessage = self::validateFavoriteSellerForArrayConstraintsFromSetFavoriteSeller($favoriteSeller))) {
            throw new InvalidArgumentException($favoriteSellerArrayErrorMessage, __LINE__);
        }
        $this->FavoriteSeller = $favoriteSeller;
        
        return $this;
    }
    /**
     * Add item to FavoriteSeller value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType $item
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
     */
    public function addToFavoriteSeller(\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType) {
            throw new InvalidArgumentException(sprintf('The FavoriteSeller property can only contain items of type \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FavoriteSeller[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
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
