<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoriesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the latest eBay category hierarchy for a given eBay site. Information returned for each category includes the category name and the unique ID for the category (unique within the eBay site for which categories are
 * retrieved). A category ID is a required input when you list most items.
 * @subpackage Structs
 */
class GetCategoriesRequestType extends AbstractRequestType
{
    /**
     * The CategorySiteID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the user wants to retrieve category data for another eBay site (other than the one specified in the <code>X-EBAY-API-SITEID</code> request header). <br> <br> If this field is omitted, the categories from the
     * site specified in the required <code>X-EBAY-API-SITEID</code> request header are returned. If this field is included, the site specified in this field overrides the site ID in the request header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategorySiteID = null;
    /**
     * The CategoryParent
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of
     * children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of
     * <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category
     * (<em>Home & Garden</em>) and all of its L2 categories to appear in the response. <br> <br> If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the
     * <b>LevelLimit</b> field and set its value to <code>1</code>. <br> <br> <span class="tablenote"><b>Note:</b> Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple
     * <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.). </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $CategoryParent = null;
    /**
     * The LevelLimit
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, every eBay
     * category from the root on down will be returned, or, if a <b>CategoryParent</b> category is specified, the specified category and all of its children (down to the leaf categories) are returned. <br> <br> If the <b>CategoryParent</b> is not used, but
     * the <b>LevelLimit</b> field is used and set to <code>1</code>, only the top-level categories (also known as L1 categories) are returned in the response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LevelLimit = null;
    /**
     * The ViewAllNodes
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether all eBay categories (that satisfy input filters) are returned, or only leaf categories (you can only list items in leaf categories) are returned. The default value is 'true', so if this field is omitted,
     * all eBay categories will be returned. If you only want to retrieve leaf categories, include this flag and set it to <code>false</code>. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ViewAllNodes = null;
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
    public function __construct(?string $categorySiteID = null, ?array $categoryParent = null, ?int $levelLimit = null, ?bool $viewAllNodes = null)
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
    public function getCategorySiteID(): ?string
    {
        return $this->CategorySiteID;
    }
    /**
     * Set CategorySiteID value
     * @param string $categorySiteID
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setCategorySiteID(?string $categorySiteID = null): self
    {
        // validation for constraint: string
        if (!is_null($categorySiteID) && !is_string($categorySiteID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categorySiteID, true), gettype($categorySiteID)), __LINE__);
        }
        $this->CategorySiteID = $categorySiteID;
        
        return $this;
    }
    /**
     * Get CategoryParent value
     * @return string[]
     */
    public function getCategoryParent(): ?array
    {
        return $this->CategoryParent;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentForArrayConstraintsFromSetCategoryParent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategoriesRequestTypeCategoryParentItem) {
            // validation for constraint: itemType
            if (!is_string($getCategoriesRequestTypeCategoryParentItem)) {
                $invalidValues[] = is_object($getCategoriesRequestTypeCategoryParentItem) ? get_class($getCategoriesRequestTypeCategoryParentItem) : sprintf('%s(%s)', gettype($getCategoriesRequestTypeCategoryParentItem), var_export($getCategoriesRequestTypeCategoryParentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParent property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryParent value
     * @throws InvalidArgumentException
     * @param string[] $categoryParent
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setCategoryParent(?array $categoryParent = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryParentArrayErrorMessage = self::validateCategoryParentForArrayConstraintsFromSetCategoryParent($categoryParent))) {
            throw new InvalidArgumentException($categoryParentArrayErrorMessage, __LINE__);
        }
        $this->CategoryParent = $categoryParent;
        
        return $this;
    }
    /**
     * Add item to CategoryParent value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function addToCategoryParent(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CategoryParent property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParent[] = $item;
        
        return $this;
    }
    /**
     * Get LevelLimit value
     * @return int|null
     */
    public function getLevelLimit(): ?int
    {
        return $this->LevelLimit;
    }
    /**
     * Set LevelLimit value
     * @param int $levelLimit
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setLevelLimit(?int $levelLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($levelLimit) && !(is_int($levelLimit) || ctype_digit($levelLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelLimit, true), gettype($levelLimit)), __LINE__);
        }
        $this->LevelLimit = $levelLimit;
        
        return $this;
    }
    /**
     * Get ViewAllNodes value
     * @return bool|null
     */
    public function getViewAllNodes(): ?bool
    {
        return $this->ViewAllNodes;
    }
    /**
     * Set ViewAllNodes value
     * @param bool $viewAllNodes
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesRequestType
     */
    public function setViewAllNodes(?bool $viewAllNodes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($viewAllNodes) && !is_bool($viewAllNodes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewAllNodes, true), gettype($viewAllNodes)), __LINE__);
        }
        $this->ViewAllNodes = $viewAllNodes;
        
        return $this;
    }
}
