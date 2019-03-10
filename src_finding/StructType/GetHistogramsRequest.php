<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistogramsRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a a histogram for the supplied category or aspect.
 * @subpackage Structs
 */
class GetHistogramsRequest extends BaseServiceRequest
{
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category from which you want to retrieve histogram information. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid
     * categories, use the Shopping API <b class="con">GetCategoryInfo</b> call. <br><br> Retrieving histograms by category is not supported on the eBay Italy site (global ID EBAY-IT) at this time.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $categoryId;
    /**
     * Constructor method for GetHistogramsRequest
     * @uses GetHistogramsRequest::setCategoryId()
     * @param string $categoryId
     */
    public function __construct($categoryId = null)
    {
        $this
            ->setCategoryId($categoryId);
    }
    /**
     * Get categoryId value
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param string $categoryId
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsRequest
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
