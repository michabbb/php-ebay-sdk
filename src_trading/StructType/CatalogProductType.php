<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CatalogProductType extends AbstractStructBase
{
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailsURL = null;
    /**
     * The StockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StockPhotoURL = null;
    /**
     * The DisplayStockPhotos
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DisplayStockPhotos = null;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemCount = null;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductReferenceID = null;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AttributeSetID = null;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $ItemSpecifics = null;
    /**
     * The ReviewCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReviewCount = null;
    /**
     * The ReviewDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviewDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReviewDetailsType $ReviewDetails = null;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductState = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $title = null, ?string $detailsURL = null, ?string $stockPhotoURL = null, ?bool $displayStockPhotos = null, ?int $itemCount = null, ?int $productReferenceID = null, ?int $attributeSetID = null, ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null, ?int $reviewCount = null, ?\macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails = null, ?string $productState = null, $any = null)
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
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * Get StockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL(): ?string
    {
        return $this->StockPhotoURL;
    }
    /**
     * Set StockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setStockPhotoURL(?string $stockPhotoURL = null): self
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhotoURL, true), gettype($stockPhotoURL)), __LINE__);
        }
        $this->StockPhotoURL = $stockPhotoURL;
        
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos(): ?bool
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setDisplayStockPhotos(?bool $displayStockPhotos = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayStockPhotos, true), gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
     * Get ProductReferenceID value
     * @return int|null
     */
    public function getProductReferenceID(): ?int
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param int $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setProductReferenceID(?int $productReferenceID = null): self
    {
        // validation for constraint: int
        if (!is_null($productReferenceID) && !(is_int($productReferenceID) || ctype_digit($productReferenceID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID(): ?int
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setAttributeSetID(?int $attributeSetID = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setItemSpecifics(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null): self
    {
        $this->ItemSpecifics = $itemSpecifics;
        
        return $this;
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount(): ?int
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setReviewCount(?int $reviewCount = null): self
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !(is_int($reviewCount) || ctype_digit($reviewCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reviewCount, true), gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
        
        return $this;
    }
    /**
     * Get ReviewDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType|null
     */
    public function getReviewDetails(): ?\macropage\ebaysdk\trading\StructType\ReviewDetailsType
    {
        return $this->ReviewDetails;
    }
    /**
     * Set ReviewDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setReviewDetails(?\macropage\ebaysdk\trading\StructType\ReviewDetailsType $reviewDetails = null): self
    {
        $this->ReviewDetails = $reviewDetails;
        
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState(): ?string
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
     */
    public function setProductState(?string $productState = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductStateCodeType', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CatalogProductType
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
