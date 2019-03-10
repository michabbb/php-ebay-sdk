<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Category StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains details about a category.
 * @subpackage Structs
 */
class Category extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: The unique ID of a category on the specified eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $categoryId;
    /**
     * The categoryName
     * Meta informations extracted from the WSDL
     * - documentation: Display name of a category as it appears on the eBay Web site.
     * - minOccurs: 0
     * @var string
     */
    public $categoryName;
    /**
     * Constructor method for Category
     * @uses Category::setCategoryId()
     * @uses Category::setCategoryName()
     * @param string $categoryId
     * @param string $categoryName
     */
    public function __construct($categoryId = null, $categoryName = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCategoryName($categoryName);
    }
    /**
     * Get categoryId value
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param string $categoryId
     * @return \macropage\ebaysdk\finding\StructType\Category
     */
    public function setCategoryId($categoryId = null)
    {
        // validation for constraint: string
        if (!is_null($categoryId) && !is_string($categoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Get categoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * Set categoryName value
     * @param string $categoryName
     * @return \macropage\ebaysdk\finding\StructType\Category
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryName)), __LINE__);
        }
        $this->categoryName = $categoryName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\Category
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
