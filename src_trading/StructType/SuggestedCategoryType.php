<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines a suggested category, returned in response to a search for categories that contain listings with certain keywords in their titles and descriptions.
 * @subpackage Structs
 */
class SuggestedCategoryType extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Describes a category that contains items that match the query.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CategoryType $Category = null;
    /**
     * The PercentItemFound
     * Meta information extracted from the WSDL
     * - documentation: Percentage of the matching items that were found in this category, relative to other categories in which matching items were also found. Indicates the distribution of matching items across the suggested categories.
     * @var int|null
     */
    protected ?int $PercentItemFound = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SuggestedCategoryType
     * @uses SuggestedCategoryType::setCategory()
     * @uses SuggestedCategoryType::setPercentItemFound()
     * @uses SuggestedCategoryType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @param int $percentItemFound
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\CategoryType $category = null, ?int $percentItemFound = null, $any = null)
    {
        $this
            ->setCategory($category)
            ->setPercentItemFound($percentItemFound)
            ->setAny($any);
    }
    /**
     * Get Category value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function getCategory(): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
     */
    public function setCategory(?\macropage\ebaysdk\trading\StructType\CategoryType $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get PercentItemFound value
     * @return int|null
     */
    public function getPercentItemFound(): ?int
    {
        return $this->PercentItemFound;
    }
    /**
     * Set PercentItemFound value
     * @param int $percentItemFound
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
     */
    public function setPercentItemFound(?int $percentItemFound = null): self
    {
        // validation for constraint: int
        if (!is_null($percentItemFound) && !(is_int($percentItemFound) || ctype_digit($percentItemFound))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($percentItemFound, true), gettype($percentItemFound)), __LINE__);
        }
        $this->PercentItemFound = $percentItemFound;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
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
