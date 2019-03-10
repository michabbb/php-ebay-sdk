<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a suggested category, returned in response to a search for categories that contain listings with certain keywords in their titles and descriptions.
 * @subpackage Structs
 */
class SuggestedCategoryType extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: Describes a category that contains items that match the query.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public $Category;
    /**
     * The PercentItemFound
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of the matching items that were found in this category, relative to other categories in which matching items were also found. Indicates the distribution of matching items across the suggested categories.
     * @var int
     */
    public $PercentItemFound;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedCategoryType
     * @uses SuggestedCategoryType::setCategory()
     * @uses SuggestedCategoryType::setPercentItemFound()
     * @uses SuggestedCategoryType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @param int $percentItemFound
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\CategoryType $category = null, $percentItemFound = null, \DOMDocument $any = null)
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
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
     */
    public function setCategory(\macropage\ebaysdk\trading\StructType\CategoryType $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get PercentItemFound value
     * @return int|null
     */
    public function getPercentItemFound()
    {
        return $this->PercentItemFound;
    }
    /**
     * Set PercentItemFound value
     * @param int $percentItemFound
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
     */
    public function setPercentItemFound($percentItemFound = null)
    {
        // validation for constraint: int
        if (!is_null($percentItemFound) && !is_numeric($percentItemFound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentItemFound)), __LINE__);
        }
        $this->PercentItemFound = $percentItemFound;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SuggestedCategoryType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType
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
