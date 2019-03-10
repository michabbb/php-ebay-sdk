<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestedCategoryArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains an array of categories that contain listings with specified keywords in their titles or descriptions. The array can contain up to 10 categories.
 * @subpackage Structs
 */
class SuggestedCategoryArrayType extends AbstractStructBase
{
    /**
     * The SuggestedCategory
     * Meta informations extracted from the WSDL
     * - documentation: Describes a category that contains listings that match specified keywords in the query. Returned if a category matches the query.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[]
     */
    public $SuggestedCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SuggestedCategoryArrayType
     * @uses SuggestedCategoryArrayType::setSuggestedCategory()
     * @uses SuggestedCategoryArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[] $suggestedCategory
     * @param \DOMDocument $any
     */
    public function __construct(array $suggestedCategory = array(), \DOMDocument $any = null)
    {
        $this
            ->setSuggestedCategory($suggestedCategory)
            ->setAny($any);
    }
    /**
     * Get SuggestedCategory value
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[]|null
     */
    public function getSuggestedCategory()
    {
        return $this->SuggestedCategory;
    }
    /**
     * Set SuggestedCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType[] $suggestedCategory
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
     */
    public function setSuggestedCategory(array $suggestedCategory = array())
    {
        foreach ($suggestedCategory as $suggestedCategoryArrayTypeSuggestedCategoryItem) {
            // validation for constraint: itemType
            if (!$suggestedCategoryArrayTypeSuggestedCategoryItem instanceof \macropage\ebaysdk\trading\StructType\SuggestedCategoryType) {
                throw new \InvalidArgumentException(sprintf('The SuggestedCategory property can only contain items of \macropage\ebaysdk\trading\StructType\SuggestedCategoryType, "%s" given', is_object($suggestedCategoryArrayTypeSuggestedCategoryItem) ? get_class($suggestedCategoryArrayTypeSuggestedCategoryItem) : gettype($suggestedCategoryArrayTypeSuggestedCategoryItem)), __LINE__);
            }
        }
        $this->SuggestedCategory = $suggestedCategory;
        return $this;
    }
    /**
     * Add item to SuggestedCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryType $item
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
     */
    public function addToSuggestedCategory(\macropage\ebaysdk\trading\StructType\SuggestedCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SuggestedCategoryType) {
            throw new \InvalidArgumentException(sprintf('The SuggestedCategory property can only contain items of \macropage\ebaysdk\trading\StructType\SuggestedCategoryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SuggestedCategory[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
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
