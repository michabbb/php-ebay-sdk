<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryInfoRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to retrieve high-level data for a specified eBay category, including category name, Category ID value, and full category path (category names and category IDs). There is also an option to retrieve all of the
 * specified category's children categories (one category level down in eBay categorical hierarchy). <br> <br> If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> would be passed into the <b>CategoryID</b>
 * field in the request, and the user would also include the <b>IncludeSelector</b> field and set its value to <code>ChildCategories</code>
 * @subpackage Structs
 */
class GetCategoryInfoRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: In this required field, the user specifies the unique identifier of an eBay category. Detailed information is returned for this category. <br> <br> If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of
     * <code>-1</code> is passed into this field, and the user also includes the <b>IncludeSelector</b> field and sets its value to <code>ChildCategories</code>.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The IncludeSelector
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and its value is set to <code>ChildCategories</code> if the user wishes to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy). <br> <br> If the
     * specified category is a leaf category (and has no children), this filter has no effect on the output.
     * - minOccurs: 0
     * @var string
     */
    public $IncludeSelector;
    /**
     * Constructor method for GetCategoryInfoRequestType
     * @uses GetCategoryInfoRequestType::setCategoryID()
     * @uses GetCategoryInfoRequestType::setIncludeSelector()
     * @param string $categoryID
     * @param string $includeSelector
     */
    public function __construct($categoryID = null, $includeSelector = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setIncludeSelector($includeSelector);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get IncludeSelector value
     * @return string|null
     */
    public function getIncludeSelector()
    {
        return $this->IncludeSelector;
    }
    /**
     * Set IncludeSelector value
     * @param string $includeSelector
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType
     */
    public function setIncludeSelector($includeSelector = null)
    {
        // validation for constraint: string
        if (!is_null($includeSelector) && !is_string($includeSelector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($includeSelector)), __LINE__);
        }
        $this->IncludeSelector = $includeSelector;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetCategoryInfoRequestType
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
