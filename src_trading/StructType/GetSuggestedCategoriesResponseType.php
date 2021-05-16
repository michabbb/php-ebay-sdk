<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuggestedCategoriesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of a <b>GetSuggestedCategories</b> call. This response includes an array of categories with the highest number of listings whose listing titles or descriptions contain the keywords specified in the <b>Query</b>
 * field of the call request.
 * @subpackage Structs
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
    /**
     * The SuggestedCategoryArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container
     * will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $SuggestedCategoryArray = null;
    /**
     * The CategoryCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of suggested categories that were found that matched the keywords.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryCount = null;
    /**
     * Constructor method for GetSuggestedCategoriesResponseType
     * @uses GetSuggestedCategoriesResponseType::setSuggestedCategoryArray()
     * @uses GetSuggestedCategoriesResponseType::setCategoryCount()
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @param int $categoryCount
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null, ?int $categoryCount = null)
    {
        $this
            ->setSuggestedCategoryArray($suggestedCategoryArray)
            ->setCategoryCount($categoryCount);
    }
    /**
     * Get SuggestedCategoryArray value
     * @return \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType|null
     */
    public function getSuggestedCategoryArray(): ?\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType
    {
        return $this->SuggestedCategoryArray;
    }
    /**
     * Set SuggestedCategoryArray value
     * @param \macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType
     */
    public function setSuggestedCategoryArray(?\macropage\ebaysdk\trading\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null): self
    {
        $this->SuggestedCategoryArray = $suggestedCategoryArray;
        
        return $this;
    }
    /**
     * Get CategoryCount value
     * @return int|null
     */
    public function getCategoryCount(): ?int
    {
        return $this->CategoryCount;
    }
    /**
     * Set CategoryCount value
     * @param int $categoryCount
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesResponseType
     */
    public function setCategoryCount(?int $categoryCount = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryCount) && !(is_int($categoryCount) || ctype_digit($categoryCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryCount, true), gettype($categoryCount)), __LINE__);
        }
        $this->CategoryCount = $categoryCount;
        
        return $this;
    }
}
