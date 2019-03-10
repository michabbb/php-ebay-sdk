<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSuggestionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if it is an exact match.
 * @subpackage Structs
 */
class ProductSuggestionType extends AbstractStructBase
{
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: The title of the product from the eBay catalog.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The EPID
     * Meta informations extracted from the WSDL
     * - documentation: The product reference Id of the product The eBay Product ID, a global reference ID for an eBay catalog product. The ePID is a fixed reference to a product (regardless of version).
     * - minOccurs: 0
     * @var string
     */
    public $EPID;
    /**
     * The StockPhoto
     * Meta informations extracted from the WSDL
     * - documentation: Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the
     * dimensions of the photo programmatically before displaying it.
     * - minOccurs: 0
     * @var string
     */
    public $StockPhoto;
    /**
     * The Recommended
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that the product is an exact match, suitable for listing the item.
     * - minOccurs: 0
     * @var bool
     */
    public $Recommended;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($title = null, $ePID = null, $stockPhoto = null, $recommended = null, \DOMDocument $any = null)
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
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
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
     * Get EPID value
     * @return string|null
     */
    public function getEPID()
    {
        return $this->EPID;
    }
    /**
     * Set EPID value
     * @param string $ePID
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setEPID($ePID = null)
    {
        // validation for constraint: string
        if (!is_null($ePID) && !is_string($ePID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ePID)), __LINE__);
        }
        $this->EPID = $ePID;
        return $this;
    }
    /**
     * Get StockPhoto value
     * @return string|null
     */
    public function getStockPhoto()
    {
        return $this->StockPhoto;
    }
    /**
     * Set StockPhoto value
     * @param string $stockPhoto
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setStockPhoto($stockPhoto = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhoto) && !is_string($stockPhoto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stockPhoto)), __LINE__);
        }
        $this->StockPhoto = $stockPhoto;
        return $this;
    }
    /**
     * Get Recommended value
     * @return bool|null
     */
    public function getRecommended()
    {
        return $this->Recommended;
    }
    /**
     * Set Recommended value
     * @param bool $recommended
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
     */
    public function setRecommended($recommended = null)
    {
        // validation for constraint: boolean
        if (!is_null($recommended) && !is_bool($recommended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($recommended)), __LINE__);
        }
        $this->Recommended = $recommended;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductSuggestionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType
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
