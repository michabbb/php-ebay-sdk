<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryMappingsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a map of old category IDs and corresponding active category IDs defined for the site to which the request was sent. Typically used to update an older item definition with a new category ID prior to listing the item.
 * @subpackage Structs
 */
class GetCategoryMappingsResponseType extends AbstractResponseType
{
    /**
     * The CategoryMapping
     * Meta informations extracted from the WSDL
     * - documentation: Mapping between an old category ID and an active category ID. Returned when category mappings exist and the value of CategoryVersion is different from the current version on the site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryMappingType[]
     */
    public $CategoryMapping;
    /**
     * The CategoryVersion
     * Meta informations extracted from the WSDL
     * - documentation: Version value assigned to the current category mapping data for the site. Compare this value to the version value the application stored with the mappings the last time the application executed the call. If the versions are the same,
     * the data has not changed since the last time the data was retrieved and stored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CategoryVersion;
    /**
     * Constructor method for GetCategoryMappingsResponseType
     * @uses GetCategoryMappingsResponseType::setCategoryMapping()
     * @uses GetCategoryMappingsResponseType::setCategoryVersion()
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType[] $categoryMapping
     * @param string $categoryVersion
     */
    public function __construct(array $categoryMapping = array(), $categoryVersion = null)
    {
        $this
            ->setCategoryMapping($categoryMapping)
            ->setCategoryVersion($categoryVersion);
    }
    /**
     * Get CategoryMapping value
     * @return \macropage\ebaysdk\trading\StructType\CategoryMappingType[]|null
     */
    public function getCategoryMapping()
    {
        return $this->CategoryMapping;
    }
    /**
     * Set CategoryMapping value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType[] $categoryMapping
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function setCategoryMapping(array $categoryMapping = array())
    {
        foreach ($categoryMapping as $getCategoryMappingsResponseTypeCategoryMappingItem) {
            // validation for constraint: itemType
            if (!$getCategoryMappingsResponseTypeCategoryMappingItem instanceof \macropage\ebaysdk\trading\StructType\CategoryMappingType) {
                throw new \InvalidArgumentException(sprintf('The CategoryMapping property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryMappingType, "%s" given', is_object($getCategoryMappingsResponseTypeCategoryMappingItem) ? get_class($getCategoryMappingsResponseTypeCategoryMappingItem) : gettype($getCategoryMappingsResponseTypeCategoryMappingItem)), __LINE__);
            }
        }
        $this->CategoryMapping = $categoryMapping;
        return $this;
    }
    /**
     * Add item to CategoryMapping value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function addToCategoryMapping(\macropage\ebaysdk\trading\StructType\CategoryMappingType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryMappingType) {
            throw new \InvalidArgumentException(sprintf('The CategoryMapping property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryMappingType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryMapping[] = $item;
        return $this;
    }
    /**
     * Get CategoryVersion value
     * @return string|null
     */
    public function getCategoryVersion()
    {
        return $this->CategoryVersion;
    }
    /**
     * Set CategoryVersion value
     * @param string $categoryVersion
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function setCategoryVersion($categoryVersion = null)
    {
        // validation for constraint: string
        if (!is_null($categoryVersion) && !is_string($categoryVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryVersion)), __LINE__);
        }
        $this->CategoryVersion = $categoryVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
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
