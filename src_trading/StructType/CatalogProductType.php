<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProductType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CatalogProductType extends AbstractStructBase
{
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The DetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The StockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StockPhotoURL;
    /**
     * The DisplayStockPhotos
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The ProductReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductReferenceID;
    /**
     * The AttributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $AttributeSetID;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The ReviewCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ReviewCount;
    /**
     * The ReviewDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public $ReviewDetails;
    /**
     * The ProductState
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CatalogProductType
     * @uses CatalogProductType::setTitle()
     * @uses CatalogProductType::setDetailsURL()
     * @uses CatalogProductType::setStockPhotoURL()
     * @uses CatalogProductType::setDisplayStockPhotos()
     * @uses CatalogProductType::setItemCount()
     * @uses CatalogProductType::setProductReferenceID()
     * @uses CatalogProductType::setAttributeSetID()
     * @uses CatalogProductType::setItemSpecifics()
     * @uses CatalogProductType::setReviewCount()
     * @uses CatalogProductType::setReviewDetails()
     * @uses CatalogProductType::setProductState()
     * @uses CatalogProductType::setAny()
     * @param string $title
     * @param string $detailsURL
     * @param string $stockPhotoURL
     * @param bool $displayStockPhotos
     * @param int $itemCount
     * @param int $productReferenceID
     * @param int $attributeSetID
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @param int $reviewCount
     * @param \macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails
     * @param string $productState
     * @param \DOMDocument $any
     */
    public function __construct($title = null, $detailsURL = null, $stockPhotoURL = null, $displayStockPhotos = null, $itemCount = null, $productReferenceID = null, $attributeSetID = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null, $reviewCount = null, \macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails = null, $productState = null, \DOMDocument $any = null)
    {
        $this
            ->setTitle($title)
            ->setDetailsURL($detailsURL)
            ->setStockPhotoURL($stockPhotoURL)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setItemCount($itemCount)
            ->setProductReferenceID($productReferenceID)
            ->setAttributeSetID($attributeSetID)
            ->setItemSpecifics($itemSpecifics)
            ->setReviewCount($reviewCount)
            ->setReviewDetails($reviewDetails)
            ->setProductState($productState)
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * Get ProductReferenceID value
     * @return int|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param int $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: int
        if (!is_null($productReferenceID) && !is_numeric($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setItemSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * Get ReviewDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType|null
     */
    public function getReviewDetails()
    {
        return $this->ReviewDetails;
    }
    /**
     * Set ReviewDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setReviewDetails(\macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails = null)
    {
        $this->ReviewDetails = $reviewDetails;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productState, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CatalogProductType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
