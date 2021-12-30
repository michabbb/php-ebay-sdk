<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSuggestionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides a list of products recommended by eBay, which match the item information provided by the seller.
 * @subpackage Structs
 */
class ProductSuggestionsType extends AbstractStructBase
{
    /**
     * The ProductSuggestion
     * Meta information extracted from the WSDL
     * - documentation: Contains details for one or more individual product suggestions. The product details include the EPID, Title, Stock photo url and whether or not the product is an exact match for the submitted item. This product information can be
     * used to list subsequent items.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSuggestionType[]
     */
    protected ?array $ProductSuggestion = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductSuggestionsType
     * @uses ProductSuggestionsType::setProductSuggestion()
     * @uses ProductSuggestionsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType[] $productSuggestion
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $productSuggestion = null, $any = null)
    {
        $this
            ->setProductSuggestion($productSuggestion)
            ->setAny($any);
    }
    /**
     * Get ProductSuggestion value
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionType[]
     */
    public function getProductSuggestion(): ?array
    {
        return $this->ProductSuggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setProductSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductSuggestionForArrayConstraintsFromSetProductSuggestion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSuggestionsTypeProductSuggestionItem) {
            // validation for constraint: itemType
            if (!$productSuggestionsTypeProductSuggestionItem instanceof \macropage\ebaysdk\trading\StructType\ProductSuggestionType) {
                $invalidValues[] = is_object($productSuggestionsTypeProductSuggestionItem) ? get_class($productSuggestionsTypeProductSuggestionItem) : sprintf('%s(%s)', gettype($productSuggestionsTypeProductSuggestionItem), var_export($productSuggestionsTypeProductSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductSuggestion property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductSuggestion value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType[] $productSuggestion
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
     */
    public function setProductSuggestion(?array $productSuggestion = null): self
    {
        // validation for constraint: array
        if ('' !== ($productSuggestionArrayErrorMessage = self::validateProductSuggestionForArrayConstraintsFromSetProductSuggestion($productSuggestion))) {
            throw new InvalidArgumentException($productSuggestionArrayErrorMessage, __LINE__);
        }
        $this->ProductSuggestion = $productSuggestion;
        
        return $this;
    }
    /**
     * Add item to ProductSuggestion value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
     */
    public function addToProductSuggestion(\macropage\ebaysdk\trading\StructType\ProductSuggestionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductSuggestionType) {
            throw new InvalidArgumentException(sprintf('The ProductSuggestion property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductSuggestion[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
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
