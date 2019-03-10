<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContextSearchAssetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ContextSearchAsset</b> container that is returned in the <b>GetContextualKeywords</b> response for each keyword that is found.
 * @subpackage Structs
 */
class ContextSearchAssetType extends AbstractStructBase
{
    /**
     * The Keyword
     * Meta informations extracted from the WSDL
     * - documentation: The name of the keyword that was found in the search.
     * - minOccurs: 0
     * @var string
     */
    public $Keyword;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: The eBay category in which the keyword is used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public $Category;
    /**
     * The Ranking
     * Meta informations extracted from the WSDL
     * - documentation: The ranking of the corresponding keyword/category combination relative to other keywords that were returned in the response.
     * - minOccurs: 0
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for ContextSearchAssetType
     * @uses ContextSearchAssetType::setKeyword()
     * @uses ContextSearchAssetType::setCategory()
     * @uses ContextSearchAssetType::setRanking()
     * @param string $keyword
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $category
     * @param int $ranking
     */
    public function __construct($keyword = null, \macropage\ebaysdk\trading\StructType\CategoryType $category = null, $ranking = null)
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
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setCategory(\macropage\ebaysdk\trading\StructType\CategoryType $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !is_numeric($ranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType
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
