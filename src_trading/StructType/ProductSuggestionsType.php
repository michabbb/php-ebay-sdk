<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSuggestionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides a list of products recommended by eBay, which match the item information provided by the seller.
 * @subpackage Structs
 */
class ProductSuggestionsType extends AbstractStructBase
{
    /**
     * The ProductSuggestion
     * Meta informations extracted from the WSDL
     * - documentation: Contains details for one or more individual product suggestions. The product details include the EPID, Title, Stock photo url and whether or not the product is an exact match for the submitted item. This product information can be
     * used to list subsequent items.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSuggestionType[]
     */
    public $ProductSuggestion;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSuggestionsType
     * @uses ProductSuggestionsType::setProductSuggestion()
     * @uses ProductSuggestionsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType[] $productSuggestion
     * @param \DOMDocument $any
     */
    public function __construct(array $productSuggestion = array(), \DOMDocument $any = null)
    {
        $this
            ->setProductSuggestion($productSuggestion)
            ->setAny($any);
    }
    /**
     * Get ProductSuggestion value
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType[]|null
     */
    public function getProductSuggestion()
    {
        return $this->ProductSuggestion;
    }
    /**
     * Set ProductSuggestion value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType[] $productSuggestion
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
     */
    public function setProductSuggestion(array $productSuggestion = array())
    {
        foreach ($productSuggestion as $productSuggestionsTypeProductSuggestionItem) {
            // validation for constraint: itemType
            if (!$productSuggestionsTypeProductSuggestionItem instanceof \macropage\ebaysdk\trading\StructType\ProductSuggestionType) {
                throw new \InvalidArgumentException(sprintf('The ProductSuggestion property can only contain items of \macropage\ebaysdk\trading\StructType\ProductSuggestionType, "%s" given', is_object($productSuggestionsTypeProductSuggestionItem) ? get_class($productSuggestionsTypeProductSuggestionItem) : gettype($productSuggestionsTypeProductSuggestionItem)), __LINE__);
            }
        }
        $this->ProductSuggestion = $productSuggestion;
        return $this;
    }
    /**
     * Add item to ProductSuggestion value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
     */
    public function addToProductSuggestion(\macropage\ebaysdk\trading\StructType\ProductSuggestionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductSuggestionType) {
            throw new \InvalidArgumentException(sprintf('The ProductSuggestion property can only contain items of \macropage\ebaysdk\trading\StructType\ProductSuggestionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductSuggestion[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductSuggestionsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
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
