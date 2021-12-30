<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an array of categories that contain listings with specified keywords in their titles or descriptions. The array can contain up to 10 categories.
 * @subpackage Structs
 */
class SuggestedCategoryArrayType extends AbstractStructBase
{
    /**
     * The SuggestedCategory
     * Meta information extracted from the WSDL
     * - documentation: Describes a category that contains listings that match specified keywords in the query. Returned if a category matches the query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[]
     */
    protected ?array $SuggestedCategory = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SuggestedCategoryArrayType
     * @uses SuggestedCategoryArrayType::setSuggestedCategory()
     * @uses SuggestedCategoryArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[] $suggestedCategory
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $suggestedCategory = null, $any = null)
    {
        $this
            ->setSuggestedCategory($suggestedCategory)
            ->setAny($any);
    }
    /**
     * Get SuggestedCategory value
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[]
     */
    public function getSuggestedCategory(): ?array
    {
        return $this->SuggestedCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestedCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestedCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestedCategoryForArrayConstraintsFromSetSuggestedCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $suggestedCategoryArrayTypeSuggestedCategoryItem) {
            // validation for constraint: itemType
            if (!$suggestedCategoryArrayTypeSuggestedCategoryItem instanceof \macropage\ebaysdk\trading\StructType\SuggestedCategoryType) {
                $invalidValues[] = is_object($suggestedCategoryArrayTypeSuggestedCategoryItem) ? get_class($suggestedCategoryArrayTypeSuggestedCategoryItem) : sprintf('%s(%s)', gettype($suggestedCategoryArrayTypeSuggestedCategoryItem), var_export($suggestedCategoryArrayTypeSuggestedCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuggestedCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\SuggestedCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SuggestedCategory value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[] $suggestedCategory
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
     */
    public function setSuggestedCategory(?array $suggestedCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($suggestedCategoryArrayErrorMessage = self::validateSuggestedCategoryForArrayConstraintsFromSetSuggestedCategory($suggestedCategory))) {
            throw new InvalidArgumentException($suggestedCategoryArrayErrorMessage, __LINE__);
        }
        $this->SuggestedCategory = $suggestedCategory;
        
        return $this;
    }
    /**
     * Add item to SuggestedCategory value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType $item
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
     */
    public function addToSuggestedCategory(\macropage\ebaysdk\trading\StructType\SuggestedCategoryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SuggestedCategoryType) {
            throw new InvalidArgumentException(sprintf('The SuggestedCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\SuggestedCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuggestedCategory[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
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
