<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuggestedCategoriesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of a <b>GetSuggestedCategories</b> call. This response includes an array of categories with the highest number of listings whose listing titles or descriptions contain the keywords specified in the <b>Query</b>
 * field of the call request.
 * @subpackage Structs
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
    /**
     * The SuggestedCategoryArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container
     * will not returned if no eBay categories match the query in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
     */
    public $SuggestedCategoryArray;
    /**
     * The CategoryCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value Indicates the number of suggested categories that were found that matched the keywords.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryCount;
    /**
     * Constructor method for GetSuggestedCategoriesResponseType
     * @uses GetSuggestedCategoriesResponseType::setSuggestedCategoryArray()
     * @uses GetSuggestedCategoriesResponseType::setCategoryCount()
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @param int $categoryCount
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null, $categoryCount = null)
    {
        $this
            ->setSuggestedCategoryArray($suggestedCategoryArray)
            ->setCategoryCount($categoryCount);
    }
    /**
     * Get SuggestedCategoryArray value
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType|null
     */
    public function getSuggestedCategoryArray()
    {
        return $this->SuggestedCategoryArray;
    }
    /**
     * Set SuggestedCategoryArray value
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType
     */
    public function setSuggestedCategoryArray(\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null)
    {
        $this->SuggestedCategoryArray = $suggestedCategoryArray;
        return $this;
    }
    /**
     * Get CategoryCount value
     * @return int|null
     */
    public function getCategoryCount()
    {
        return $this->CategoryCount;
    }
    /**
     * Set CategoryCount value
     * @param int $categoryCount
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType
     */
    public function setCategoryCount($categoryCount = null)
    {
        // validation for constraint: int
        if (!is_null($categoryCount) && !is_numeric($categoryCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryCount)), __LINE__);
        }
        $this->CategoryCount = $categoryCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType
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
