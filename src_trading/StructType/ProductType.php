<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public $CharacteristicsSet;
    /**
     * The DetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The NumItems
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $NumItems;
    /**
     * The MinPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MinPrice;
    /**
     * The MaxPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxPrice;
    /**
     * The ProductReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The productID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string
     */
    public $productID;
    /**
     * The stockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $stockPhotoURL;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $title;
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
     * @param \DOMDocument $any
     * @param string $productID
     * @param string $stockPhotoURL
     * @param string $title
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null, $detailsURL = null, $numItems = null, \macropage\ebaysdk\trading\StructType\AmountType $minPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null, $productReferenceID = null, \DOMDocument $any = null, $productID = null, $stockPhotoURL = null, $title = null)
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
    public function getCharacteristicsSet()
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setCharacteristicsSet(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null)
    {
        $this->CharacteristicsSet = $characteristicsSet;
        return $this;
    }
    /**
     * Get DetailsURL value
     * @return string|null
     */
    public function getDetailsURL()
    {
        return $this->DetailsURL;
    }
    /**
     * Set DetailsURL value
     * @param string $detailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setDetailsURL($detailsURL = null)
    {
        // validation for constraint: string
        if (!is_null($detailsURL) && !is_string($detailsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailsURL)), __LINE__);
        }
        $this->DetailsURL = $detailsURL;
        return $this;
    }
    /**
     * Get NumItems value
     * @return int|null
     */
    public function getNumItems()
    {
        return $this->NumItems;
    }
    /**
     * Set NumItems value
     * @param int $numItems
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setNumItems($numItems = null)
    {
        // validation for constraint: int
        if (!is_null($numItems) && !is_numeric($numItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numItems)), __LINE__);
        }
        $this->NumItems = $numItems;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $minPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setMinPrice(\macropage\ebaysdk\trading\StructType\AmountType $minPrice = null)
    {
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Get MaxPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }
    /**
     * Set MaxPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxPrice
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setMaxPrice(\macropage\ebaysdk\trading\StructType\AmountType $maxPrice = null)
    {
        $this->MaxPrice = $maxPrice;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get productID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->productID;
    }
    /**
     * Set productID value
     * @param string $productID
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productID)), __LINE__);
        }
        $this->productID = $productID;
        return $this;
    }
    /**
     * Get stockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL()
    {
        return $this->stockPhotoURL;
    }
    /**
     * Set stockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setStockPhotoURL($stockPhotoURL = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stockPhotoURL)), __LINE__);
        }
        $this->stockPhotoURL = $stockPhotoURL;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\ProductType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductType
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
