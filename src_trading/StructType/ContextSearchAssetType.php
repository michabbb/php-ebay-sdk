<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContextSearchAssetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ContextSearchAsset</b> container that is returned in the <b>GetContextualKeywords</b> response for each keyword that is found.
 * @subpackage Structs
 */
class ContextSearchAssetType extends AbstractStructBase
{
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - documentation: The name of the keyword that was found in the search.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Keyword = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The eBay category in which the keyword is used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CategoryType $Category = null;
    /**
     * The Ranking
     * Meta information extracted from the WSDL
     * - documentation: The ranking of the corresponding keyword/category combination relative to other keywords that were returned in the response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Ranking = null;
    /**
     * Constructor method for ContextSearchAssetType
     * @uses ContextSearchAssetType::setKeyword()
     * @uses ContextSearchAssetType::setCategory()
     * @uses ContextSearchAssetType::setRanking()
     * @param string $keyword
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @param int $ranking
     */
    public function __construct(?string $keyword = null, ?\macropage\ebaysdk\trading\StructType\CategoryType $category = null, ?int $ranking = null)
    {
        $this
            ->setKeyword($keyword)
            ->setCategory($category)
            ->setRanking($ranking);
    }
    /**
     * Get Keyword value
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setKeyword(?string $keyword = null): self
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setCategory(?\macropage\ebaysdk\trading\StructType\CategoryType $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking(): ?int
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setRanking(?int $ranking = null): self
    {
        // validation for constraint: int
        if (!is_null($ranking) && !(is_int($ranking) || ctype_digit($ranking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ranking, true), gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        
        return $this;
    }
}
