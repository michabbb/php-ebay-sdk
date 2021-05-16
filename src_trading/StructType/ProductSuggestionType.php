<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSuggestionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if it is an exact match.
 * @subpackage Structs
 */
class ProductSuggestionType extends AbstractStructBase
{
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: The title of the product from the eBay catalog.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The EPID
     * Meta information extracted from the WSDL
     * - documentation: The product reference Id of the product The eBay Product ID, a global reference ID for an eBay catalog product. The ePID is a fixed reference to a product (regardless of version).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EPID = null;
    /**
     * The StockPhoto
     * Meta information extracted from the WSDL
     * - documentation: Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the
     * dimensions of the photo programmatically before displaying it.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StockPhoto = null;
    /**
     * The Recommended
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that the product is an exact match, suitable for listing the item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Recommended = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductSuggestionType
     * @uses ProductSuggestionType::setTitle()
     * @uses ProductSuggestionType::setEPID()
     * @uses ProductSuggestionType::setStockPhoto()
     * @uses ProductSuggestionType::setRecommended()
     * @uses ProductSuggestionType::setAny()
     * @param string $title
     * @param string $ePID
     * @param string $stockPhoto
     * @param bool $recommended
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $title = null, ?string $ePID = null, ?string $stockPhoto = null, ?bool $recommended = null, $any = null)
    {
        $this
            ->setTitle($title)
            ->setEPID($ePID)
            ->setStockPhoto($stockPhoto)
            ->setRecommended($recommended)
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
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
     * Get EPID value
     * @return string|null
     */
    public function getEPID(): ?string
    {
        return $this->EPID;
    }
    /**
     * Set EPID value
     * @param string $ePID
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setEPID(?string $ePID = null): self
    {
        // validation for constraint: string
        if (!is_null($ePID) && !is_string($ePID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ePID, true), gettype($ePID)), __LINE__);
        }
        $this->EPID = $ePID;
        
        return $this;
    }
    /**
     * Get StockPhoto value
     * @return string|null
     */
    public function getStockPhoto(): ?string
    {
        return $this->StockPhoto;
    }
    /**
     * Set StockPhoto value
     * @param string $stockPhoto
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setStockPhoto(?string $stockPhoto = null): self
    {
        // validation for constraint: string
        if (!is_null($stockPhoto) && !is_string($stockPhoto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhoto, true), gettype($stockPhoto)), __LINE__);
        }
        $this->StockPhoto = $stockPhoto;
        
        return $this;
    }
    /**
     * Get Recommended value
     * @return bool|null
     */
    public function getRecommended(): ?bool
    {
        return $this->Recommended;
    }
    /**
     * Set Recommended value
     * @param bool $recommended
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setRecommended(?bool $recommended = null): self
    {
        // validation for constraint: boolean
        if (!is_null($recommended) && !is_bool($recommended)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recommended, true), gettype($recommended)), __LINE__);
        }
        $this->Recommended = $recommended;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
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
