<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPopularItemsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>This call is deprecated.</b>
 * @subpackage Structs
 */
class FindPopularItemsRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryID;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The CategoryIDExclude
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryIDExclude;
    /**
     * The MaxEntries
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $MaxEntries;
    /**
     * Constructor method for FindPopularItemsRequestType
     * @uses FindPopularItemsRequestType::setCategoryID()
     * @uses FindPopularItemsRequestType::setQueryKeywords()
     * @uses FindPopularItemsRequestType::setCategoryIDExclude()
     * @uses FindPopularItemsRequestType::setMaxEntries()
     * @param string[] $categoryID
     * @param string $queryKeywords
     * @param string[] $categoryIDExclude
     * @param int $maxEntries
     */
    public function __construct(array $categoryID = array(), $queryKeywords = null, array $categoryIDExclude = array(), $maxEntries = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setQueryKeywords($queryKeywords)
            ->setCategoryIDExclude($categoryIDExclude)
            ->setMaxEntries($maxEntries);
    }
    /**
     * Get CategoryID value
     * @return string[]|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @throws \InvalidArgumentException
     * @param string[] $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function setCategoryID(array $categoryID = array())
    {
        foreach ($categoryID as $findPopularItemsRequestTypeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($findPopularItemsRequestTypeCategoryIDItem)) {
                throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($findPopularItemsRequestTypeCategoryIDItem) ? get_class($findPopularItemsRequestTypeCategoryIDItem) : gettype($findPopularItemsRequestTypeCategoryIDItem)), __LINE__);
            }
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Add item to CategoryID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function addToCategoryID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryID[] = $item;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function setQueryKeywords($queryKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Get CategoryIDExclude value
     * @return string[]|null
     */
    public function getCategoryIDExclude()
    {
        return $this->CategoryIDExclude;
    }
    /**
     * Set CategoryIDExclude value
     * @throws \InvalidArgumentException
     * @param string[] $categoryIDExclude
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function setCategoryIDExclude(array $categoryIDExclude = array())
    {
        foreach ($categoryIDExclude as $findPopularItemsRequestTypeCategoryIDExcludeItem) {
            // validation for constraint: itemType
            if (!is_string($findPopularItemsRequestTypeCategoryIDExcludeItem)) {
                throw new \InvalidArgumentException(sprintf('The CategoryIDExclude property can only contain items of string, "%s" given', is_object($findPopularItemsRequestTypeCategoryIDExcludeItem) ? get_class($findPopularItemsRequestTypeCategoryIDExcludeItem) : gettype($findPopularItemsRequestTypeCategoryIDExcludeItem)), __LINE__);
            }
        }
        $this->CategoryIDExclude = $categoryIDExclude;
        return $this;
    }
    /**
     * Add item to CategoryIDExclude value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function addToCategoryIDExclude($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryIDExclude property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryIDExclude[] = $item;
        return $this;
    }
    /**
     * Get MaxEntries value
     * @return int|null
     */
    public function getMaxEntries()
    {
        return $this->MaxEntries;
    }
    /**
     * Set MaxEntries value
     * @param int $maxEntries
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
     */
    public function setMaxEntries($maxEntries = null)
    {
        // validation for constraint: int
        if (!is_null($maxEntries) && !is_numeric($maxEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxEntries)), __LINE__);
        }
        $this->MaxEntries = $maxEntries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindPopularItemsRequestType
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
