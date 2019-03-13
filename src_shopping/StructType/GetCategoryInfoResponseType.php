<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryInfoResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>GetCategoryInfo</b> call. As long as the specified eBay category is found, the <b>GetCategoryInfo</b> response includes at least one <b>Category</b> node with details about the specified category. If
 * the <b>IncludeSelector</b> field is included and set to <code>ChildCategories</code>, a <b>Category</b> node is returned for each of the specified category's child categories. <br> <br> The response also includes the timestamp and version number of
 * the last category hierarchy update for the eBay site, as well as the total number of eBay categories returned in the response.
 * @subpackage Structs
 */
class GetCategoryInfoResponseType extends AbstractResponseType
{
    /**
     * The CategoryArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional
     * <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType
     */
    public $CategoryArray;
    /**
     * The CategoryCount
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the number of categories returned in the response. If child categories were not included in the request, this value should be '1', but if child categories were included in the request, this value is the
     * cumulative amount of the specified category and all of its child categories.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryCount;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The CategoryVersion
     * Meta informations extracted from the WSDL
     * - documentation: This string indicates the version number of the current category hierarchy on the specified eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryVersion;
    /**
     * Constructor method for GetCategoryInfoResponseType
     * @uses GetCategoryInfoResponseType::setCategoryArray()
     * @uses GetCategoryInfoResponseType::setCategoryCount()
     * @uses GetCategoryInfoResponseType::setUpdateTime()
     * @uses GetCategoryInfoResponseType::setCategoryVersion()
     * @param \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType $categoryArray
     * @param int $categoryCount
     * @param string $updateTime
     * @param string $categoryVersion
     */
    public function __construct(\macropage\ebaysdk\shopping\ArrayType\CategoryArrayType $categoryArray = null, $categoryCount = null, $updateTime = null, $categoryVersion = null)
    {
        $this
            ->setCategoryArray($categoryArray)
            ->setCategoryCount($categoryCount)
            ->setUpdateTime($updateTime)
            ->setCategoryVersion($categoryVersion);
    }
    /**
     * Get CategoryArray value
     * @return \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType|null
     */
    public function getCategoryArray()
    {
        return $this->CategoryArray;
    }
    /**
     * Set CategoryArray value
     * @param \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType $categoryArray
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType
     */
    public function setCategoryArray(\macropage\ebaysdk\shopping\ArrayType\CategoryArrayType $categoryArray = null)
    {
        $this->CategoryArray = $categoryArray;
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
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType
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
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType
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
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoResponseType
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
