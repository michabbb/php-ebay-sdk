<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuggestedCategoriesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call returns a list of up to 10 eBay categories that have the highest percentage of listings whose listing titles or descriptions contain the keywords you specify.
 * @subpackage Structs
 */
class GetSuggestedCategoriesRequestType extends AbstractRequestType
{
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the search query, consisting of one or more keywords to search for in listing titles and descriptions. The words "and" and "or" are treated like any other word.
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * Constructor method for GetSuggestedCategoriesRequestType
     * @uses GetSuggestedCategoriesRequestType::setQuery()
     * @param string $query
     */
    public function __construct($query = null)
    {
        $this
            ->setQuery($query);
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType
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
