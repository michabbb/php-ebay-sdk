<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryInfoRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve high-level data for a specified eBay category, including category name, Category ID value, and full category path (category names and category IDs). There is also an option to retrieve all of the
 * specified category's children categories (one category level down in eBay categorical hierarchy). <br> <br> If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> would be passed into the <b>CategoryID</b>
 * field in the request, and the user would also include the <b>IncludeSelector</b> field and set its value to <code>ChildCategories</code>
 * @subpackage Structs
 */
class GetCategoryInfoRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: In this required field, the user specifies the unique identifier of an eBay category. Detailed information is returned for this category. <br> <br> If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of
     * <code>-1</code> is passed into this field, and the user also includes the <b>IncludeSelector</b> field and sets its value to <code>ChildCategories</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The IncludeSelector
     * Meta information extracted from the WSDL
     * - documentation: This field is included and its value is set to <code>ChildCategories</code> if the user wishes to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy). <br> <br> If the
     * specified category is a leaf category (and has no children), this filter has no effect on the output.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IncludeSelector = null;
    /**
     * Constructor method for GetCategoryInfoRequestType
     * @uses GetCategoryInfoRequestType::setCategoryID()
     * @uses GetCategoryInfoRequestType::setIncludeSelector()
     * @param string $categoryID
     * @param string $includeSelector
     */
    public function __construct(?string $categoryID = null, ?string $includeSelector = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setIncludeSelector($includeSelector);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get IncludeSelector value
     * @return string|null
     */
    public function getIncludeSelector(): ?string
    {
        return $this->IncludeSelector;
    }
    /**
     * Set IncludeSelector value
     * @param string $includeSelector
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType
     */
    public function setIncludeSelector(?string $includeSelector = null): self
    {
        // validation for constraint: string
        if (!is_null($includeSelector) && !is_string($includeSelector)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($includeSelector, true), gettype($includeSelector)), __LINE__);
        }
        $this->IncludeSelector = $includeSelector;
        
        return $this;
    }
}
