<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryMappingsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a map of old category IDs and corresponding active category IDs defined for the site to which the request was sent. Typically used to update an older item definition with a new category ID prior to listing the item.
 * @subpackage Structs
 */
class GetCategoryMappingsResponseType extends AbstractResponseType
{
    /**
     * The CategoryMapping
     * Meta information extracted from the WSDL
     * - documentation: Mapping between an old category ID and an active category ID. Returned when category mappings exist and the value of CategoryVersion is different from the current version on the site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryMappingType[]
     */
    protected ?array $CategoryMapping = null;
    /**
     * The CategoryVersion
     * Meta information extracted from the WSDL
     * - documentation: Version value assigned to the current category mapping data for the site. Compare this value to the version value the application stored with the mappings the last time the application executed the call. If the versions are the same,
     * the data has not changed since the last time the data was retrieved and stored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryVersion = null;
    /**
     * Constructor method for GetCategoryMappingsResponseType
     * @uses GetCategoryMappingsResponseType::setCategoryMapping()
     * @uses GetCategoryMappingsResponseType::setCategoryVersion()
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType[] $categoryMapping
     * @param string $categoryVersion
     */
    public function __construct(?array $categoryMapping = null, ?string $categoryVersion = null)
    {
        $this
            ->setCategoryMapping($categoryMapping)
            ->setCategoryVersion($categoryVersion);
    }
    /**
     * Get CategoryMapping value
     * @return \macropage\ebaysdk\trading\StructType\CategoryMappingType[]
     */
    public function getCategoryMapping(): ?array
    {
        return $this->CategoryMapping;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryMapping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryMapping method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryMappingForArrayConstraintsFromSetCategoryMapping(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategoryMappingsResponseTypeCategoryMappingItem) {
            // validation for constraint: itemType
            if (!$getCategoryMappingsResponseTypeCategoryMappingItem instanceof \macropage\ebaysdk\trading\StructType\CategoryMappingType) {
                $invalidValues[] = is_object($getCategoryMappingsResponseTypeCategoryMappingItem) ? get_class($getCategoryMappingsResponseTypeCategoryMappingItem) : sprintf('%s(%s)', gettype($getCategoryMappingsResponseTypeCategoryMappingItem), var_export($getCategoryMappingsResponseTypeCategoryMappingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryMapping property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryMappingType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryMapping value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType[] $categoryMapping
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function setCategoryMapping(?array $categoryMapping = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryMappingArrayErrorMessage = self::validateCategoryMappingForArrayConstraintsFromSetCategoryMapping($categoryMapping))) {
            throw new InvalidArgumentException($categoryMappingArrayErrorMessage, __LINE__);
        }
        $this->CategoryMapping = $categoryMapping;
        
        return $this;
    }
    /**
     * Add item to CategoryMapping value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryMappingType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function addToCategoryMapping(\macropage\ebaysdk\trading\StructType\CategoryMappingType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryMappingType) {
            throw new InvalidArgumentException(sprintf('The CategoryMapping property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryMappingType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryMapping[] = $item;
        
        return $this;
    }
    /**
     * Get CategoryVersion value
     * @return string|null
     */
    public function getCategoryVersion(): ?string
    {
        return $this->CategoryVersion;
    }
    /**
     * Set CategoryVersion value
     * @param string $categoryVersion
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryMappingsResponseType
     */
    public function setCategoryVersion(?string $categoryVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryVersion) && !is_string($categoryVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryVersion, true), gettype($categoryVersion)), __LINE__);
        }
        $this->CategoryVersion = $categoryVersion;
        
        return $this;
    }
}
