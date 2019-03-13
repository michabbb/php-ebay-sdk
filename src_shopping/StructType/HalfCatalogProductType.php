<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HalfCatalogProductType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
 * @subpackage Structs
 */
class HalfCatalogProductType extends AbstractStructBase
{
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The DetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The StockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $StockPhotoURL;
    /**
     * The ShippingCostSummary
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public $ShippingCostSummary;
    /**
     * The DisplayStockPhotos
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType[]
     */
    public $ProductID;
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DomainName;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType
     */
    public $ItemArray;
    /**
     * The ReviewCount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ReviewCount;
    /**
     * The MinPrice
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $MinPrice;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for HalfCatalogProductType
     * @uses HalfCatalogProductType::setTitle()
     * @uses HalfCatalogProductType::setDetailsURL()
     * @uses HalfCatalogProductType::setStockPhotoURL()
     * @uses HalfCatalogProductType::setShippingCostSummary()
     * @uses HalfCatalogProductType::setDisplayStockPhotos()
     * @uses HalfCatalogProductType::setItemCount()
     * @uses HalfCatalogProductType::setProductID()
     * @uses HalfCatalogProductType::setDomainName()
     * @uses HalfCatalogProductType::setItemSpecifics()
     * @uses HalfCatalogProductType::setItemArray()
     * @uses HalfCatalogProductType::setReviewCount()
     * @uses HalfCatalogProductType::setMinPrice()
     * @uses HalfCatalogProductType::setAny()
     * @param string $title
     * @param string $detailsURL
     * @param string $stockPhotoURL
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @param bool $displayStockPhotos
     * @param int $itemCount
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType[] $productID
     * @param string $domainName
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @param \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray
     * @param int $reviewCount
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minPrice
     * @param \DOMDocument $any
     */
    public function __construct($title = null, $detailsURL = null, $stockPhotoURL = null, \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null, $displayStockPhotos = null, $itemCount = null, array $productID = array(), $domainName = null, \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null, \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray = null, $reviewCount = null, \macropage\ebaysdk\shopping\StructType\AmountType $minPrice = null, \DOMDocument $any = null)
    {
        $this
            ->setTitle($title)
            ->setDetailsURL($detailsURL)
            ->setStockPhotoURL($stockPhotoURL)
            ->setShippingCostSummary($shippingCostSummary)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setItemCount($itemCount)
            ->setProductID($productID)
            ->setDomainName($domainName)
            ->setItemSpecifics($itemSpecifics)
            ->setItemArray($itemArray)
            ->setReviewCount($reviewCount)
            ->setMinPrice($minPrice)
            ->setAny($any);
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
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
     * Get StockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL()
    {
        return $this->StockPhotoURL;
    }
    /**
     * Set StockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setStockPhotoURL($stockPhotoURL = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stockPhotoURL)), __LINE__);
        }
        $this->StockPhotoURL = $stockPhotoURL;
        return $this;
    }
    /**
     * Get ShippingCostSummary value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType|null
     */
    public function getShippingCostSummary()
    {
        return $this->ShippingCostSummary;
    }
    /**
     * Set ShippingCostSummary value
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setShippingCostSummary(\macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null)
    {
        $this->ShippingCostSummary = $shippingCostSummary;
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos()
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setDisplayStockPhotos($displayStockPhotos = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
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
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType[]|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType[] $productID
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setProductID(array $productID = array())
    {
        foreach ($productID as $halfCatalogProductTypeProductIDItem) {
            // validation for constraint: itemType
            if (!$halfCatalogProductTypeProductIDItem instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
                throw new \InvalidArgumentException(sprintf('The ProductID property can only contain items of \macropage\ebaysdk\shopping\StructType\ProductIDType, "%s" given', is_object($halfCatalogProductTypeProductIDItem) ? get_class($halfCatalogProductTypeProductIDItem) : gettype($halfCatalogProductTypeProductIDItem)), __LINE__);
            }
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Add item to ProductID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $item
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function addToProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
            throw new \InvalidArgumentException(sprintf('The ProductID property can only contain items of \macropage\ebaysdk\shopping\StructType\ProductIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductID[] = $item;
        return $this;
    }
    /**
     * Get DomainName value
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @param string $domainName
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setDomainName($domainName = null)
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainName)), __LINE__);
        }
        $this->DomainName = $domainName;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setItemSpecifics(\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setItemArray(\macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setReviewCount($reviewCount = null)
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !is_numeric($reviewCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
        return $this;
    }
    /**
     * Get MinPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }
    /**
     * Set MinPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minPrice
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
     */
    public function setMinPrice(\macropage\ebaysdk\shopping\StructType\AmountType $minPrice = null)
    {
        $this->MinPrice = $minPrice;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType
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
