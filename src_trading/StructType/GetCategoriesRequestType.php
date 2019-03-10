<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoriesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves the latest eBay category hierarchy for a given eBay site. Information returned for each category includes the category name and the unique ID for the category (unique within the eBay site for which categories are
 * retrieved). A category ID is a required input when you list most items.
 * @subpackage Structs
 */
class GetCategoriesRequestType extends AbstractRequestType
{
    /**
     * The CategorySiteID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the user wants to retrieve category data for another eBay site (other than the one specified in the <code>X-EBAY-API-SITEID</code> request header). <br> <br> If the user wishes to retrieve category data for the
     * US eBay Motors site, the user must set the Site ID in the <code>X-EBAY-API-SITEID</code> request header to <code>0</code>, and then set this field's value to <code>100</code>.
     * - minOccurs: 0
     * @var string
     */
    public $CategorySiteID;
    /**
     * The CategoryParent
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the ID of the highest-level category to return, along with its subcategories. If no parent category is specified, all categories are returned for the specified site. (Please do not pass a value of 0; zero (0) is an invalid
     * value for CategoryParent.) To determine available category IDs, call GetCategories with no filters and use a DetailLevel value of ReturnAll. If you specify multiple parent categories, the hierarchy for each one is returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryParent;
    /**
     * The LevelLimit
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum depth of the category hierarchy to retrieve, where the top-level categories (meta-categories) are at level 1. Retrieves all category nodes with a category level less than or equal to this value. If not
     * specified, retrieves categories at all applicable levels. As with all calls, the actual data returned will vary depending on how you configure other fields in the request (including <b>DetailLevel</b>).
     * - minOccurs: 0
     * @var int
     */
    public $LevelLimit;
    /**
     * The ViewAllNodes
     * Meta informations extracted from the WSDL
     * - documentation: This flag controls whether all eBay categories (that satisfy input filters) are returned, or only leaf categories (you can only list items in leaf categories) are returned. The default value is 'true', so if this field is omitted,
     * all eBay categories will be returned. If you only want to retrieve leaf categories, include this flag and set it to 'false'. The actual data returned will vary depending on how you configure other fields in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $ViewAllNodes;
    /**
     * Constructor method for GetCategoriesRequestType
     * @uses GetCategoriesRequestType::setCategorySiteID()
     * @uses GetCategoriesRequestType::setCategoryParent()
     * @uses GetCategoriesRequestType::setLevelLimit()
     * @uses GetCategoriesRequestType::setViewAllNodes()
     * @param string $categorySiteID
     * @param string[] $categoryParent
     * @param int $levelLimit
     * @param bool $viewAllNodes
     */
    public function __construct($categorySiteID = null, array $categoryParent = array(), $levelLimit = null, $viewAllNodes = null)
    {
        $this
            ->setCategorySiteID($categorySiteID)
            ->setCategoryParent($categoryParent)
            ->setLevelLimit($levelLimit)
            ->setViewAllNodes($viewAllNodes);
    }
    /**
     * Get CategorySiteID value
     * @return string|null
     */
    public function getCategorySiteID()
    {
        return $this->CategorySiteID;
    }
    /**
     * Set CategorySiteID value
     * @param string $categorySiteID
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setCategorySiteID($categorySiteID = null)
    {
        // validation for constraint: string
        if (!is_null($categorySiteID) && !is_string($categorySiteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categorySiteID)), __LINE__);
        }
        $this->CategorySiteID = $categorySiteID;
        return $this;
    }
    /**
     * Get CategoryParent value
     * @return string[]|null
     */
    public function getCategoryParent()
    {
        return $this->CategoryParent;
    }
    /**
     * Set CategoryParent value
     * @throws \InvalidArgumentException
     * @param string[] $categoryParent
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setCategoryParent(array $categoryParent = array())
    {
        foreach ($categoryParent as $getCategoriesRequestTypeCategoryParentItem) {
            // validation for constraint: itemType
            if (!is_string($getCategoriesRequestTypeCategoryParentItem)) {
                throw new \InvalidArgumentException(sprintf('The CategoryParent property can only contain items of string, "%s" given', is_object($getCategoriesRequestTypeCategoryParentItem) ? get_class($getCategoriesRequestTypeCategoryParentItem) : gettype($getCategoriesRequestTypeCategoryParentItem)), __LINE__);
            }
        }
        $this->CategoryParent = $categoryParent;
        return $this;
    }
    /**
     * Add item to CategoryParent value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function addToCategoryParent($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryParent property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryParent[] = $item;
        return $this;
    }
    /**
     * Get LevelLimit value
     * @return int|null
     */
    public function getLevelLimit()
    {
        return $this->LevelLimit;
    }
    /**
     * Set LevelLimit value
     * @param int $levelLimit
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setLevelLimit($levelLimit = null)
    {
        // validation for constraint: int
        if (!is_null($levelLimit) && !is_numeric($levelLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($levelLimit)), __LINE__);
        }
        $this->LevelLimit = $levelLimit;
        return $this;
    }
    /**
     * Get ViewAllNodes value
     * @return bool|null
     */
    public function getViewAllNodes()
    {
        return $this->ViewAllNodes;
    }
    /**
     * Set ViewAllNodes value
     * @param bool $viewAllNodes
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setViewAllNodes($viewAllNodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($viewAllNodes) && !is_bool($viewAllNodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($viewAllNodes)), __LINE__);
        }
        $this->ViewAllNodes = $viewAllNodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
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
