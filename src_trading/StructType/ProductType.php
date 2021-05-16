<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $CharacteristicsSet = null;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailsURL = null;
    /**
     * The NumItems
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumItems = null;
    /**
     * The MinPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MinPrice = null;
    /**
     * The MaxPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxPrice = null;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductReferenceID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The productID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string|null
     */
    protected ?string $productID = null;
    /**
     * The stockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string|null
     */
    protected ?string $stockPhotoURL = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * Constructor method for ProductType
     * @uses ProductType::setCharacteristicsSet()
     * @uses ProductType::setDetailsURL()
     * @uses ProductType::setNumItems()
     * @uses ProductType::setMinPrice()
     * @uses ProductType::setMaxPrice()
     * @uses ProductType::setProductReferenceID()
     * @uses ProductType::setAny()
     * @uses ProductType::setProductID()
     * @uses ProductType::setStockPhotoURL()
     * @uses ProductType::setTitle()
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @param string $detailsURL
     * @param int $numItems
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @param string $productReferenceID
     * @param \DOMDocument|string|null $any
     * @param string $productID
     * @param string $stockPhotoURL
     * @param string $title
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null, ?string $detailsURL = null, ?int $numItems = null, ?\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null, ?string $productReferenceID = null, $any = null, ?string $productID = null, ?string $stockPhotoURL = null, ?string $title = null)
    {
        $this
            ->setCharacteristicsSet($characteristicsSet)
            ->setDetailsURL($detailsURL)
            ->setNumItems($numItems)
            ->setMinPrice($minPrice)
            ->setMaxPrice($maxPrice)
            ->setProductReferenceID($productReferenceID)
            ->setAny($any)
            ->setProductID($productID)
            ->setStockPhotoURL($stockPhotoURL)
            ->setTitle($title);
    }
    /**
     * Get CharacteristicsSet value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    public function getCharacteristicsSet(): ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setCharacteristicsSet(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null): self
    {
        $this->CharacteristicsSet = $characteristicsSet;
        
        return $this;
    }
    /**
     * Get DetailsURL value
     * @return string|null
     */
    public function getDetailsURL(): ?string
    {
        return $this->DetailsURL;
    }
    /**
     * Set DetailsURL value
     * @param string $detailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setDetailsURL(?string $detailsURL = null): self
    {
        // validation for constraint: string
        if (!is_null($detailsURL) && !is_string($detailsURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailsURL, true), gettype($detailsURL)), __LINE__);
        }
        $this->DetailsURL = $detailsURL;
        
        return $this;
    }
    /**
     * Get NumItems value
     * @return int|null
     */
    public function getNumItems(): ?int
    {
        return $this->NumItems;
    }
    /**
     * Set NumItems value
     * @param int $numItems
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setNumItems(?int $numItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numItems) && !(is_int($numItems) || ctype_digit($numItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numItems, true), gettype($numItems)), __LINE__);
        }
        $this->NumItems = $numItems;
        
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setMinPrice(?\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null): self
    {
        $this->MinPrice = $minPrice;
        
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setMaxPrice(?\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null): self
    {
        $this->MaxPrice = $maxPrice;
        
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID(): ?string
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setProductReferenceID(?string $productReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductType
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
    /**
     * Get productID value
     * @return string|null
     */
    public function getProductID(): ?string
    {
        return $this->productID;
    }
    /**
     * Set productID value
     * @param string $productID
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setProductID(?string $productID = null): self
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->productID = $productID;
        
        return $this;
    }
    /**
     * Get stockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL(): ?string
    {
        return $this->stockPhotoURL;
    }
    /**
     * Set stockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setStockPhotoURL(?string $stockPhotoURL = null): self
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhotoURL, true), gettype($stockPhotoURL)), __LINE__);
        }
        $this->stockPhotoURL = $stockPhotoURL;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
}
