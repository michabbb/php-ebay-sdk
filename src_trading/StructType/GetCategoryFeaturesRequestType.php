<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryFeaturesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns information about the features that are applicable to different categories, such as listing durations, shipping term requirements, and Best Offer support.
 * @subpackage Structs
 */
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the category for which you want to retrieve the feature settings. <br><br> Specify a CategoryID, set DetailLevel to ReturnAll, and set ViewAllNodes to true to return the default site settings, the overrides for the
     * specified category, plus all the child categories that have overrides on the features they inherit. <br><br> If you also set AllFeaturesForCategory to true, eBay returns the site defaults, plus all the settings for the specified category. Child
     * category information is not returned in this case. <br><br> If CategoryID is not specified, eBay returns the feature settings for the site. To return details on all categories that have overrides on the properties they inherit, set DetailLevel to
     * ReturnAll, and set ViewAllNodes to true. If you also set AllFeaturesForCategory to true, eBay returns only the site defaults with no child category information.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The LevelLimit
     * Meta informations extracted from the WSDL
     * - documentation: A level of depth in the category hierarchy. Retrieves all category nodes with a CategoryLevel less than or equal to the LevelLimit value.
     * - minOccurs: 0
     * @var int
     */
    public $LevelLimit;
    /**
     * The ViewAllNodes
     * Meta informations extracted from the WSDL
     * - documentation: You must set <b>DetailLevel</b> to <code>ReturnAll</code> in order to correctly populate the response when you set <b>ViewAllNodes</b> to true. In this case, eBay returns the site defaults along with all the categories that override
     * the feature settings they inherit. Here, each Category container shows only the features that it has overridden from its parent node. <br><br> If you also specify a <b>CategoryID</b>, eBay returns the details for that category, along with containers
     * for each of its child categories that have feature overrides. <br><br> Note that if <b>ViewAllNodes</b> is set to false (the default) and <b>DetailLevel</b> is set to <code>ReturnAll</code>, eBay returns only the leaf categories that have features
     * that override the settings they inherit. In this case, the call will not return leaf categories that do not have overrides.
     * - minOccurs: 0
     * @var bool
     */
    public $ViewAllNodes;
    /**
     * The FeatureID
     * Meta informations extracted from the WSDL
     * - documentation: Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data
     * for all features, as applicable to the other request parameters.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FeatureID;
    /**
     * The AllFeaturesForCategory
     * Meta informations extracted from the WSDL
     * - documentation: Use this switch to view all of the feature settings for a specific category. All feature settings are returned, regardless of the site default settings. This element works in conjunction with CategoryID--refer to the notes for that
     * element for more details. <br><br> If you also set FeatureID, eBay returns the status of the specified features only, for the specified category.
     * - minOccurs: 0
     * @var bool
     */
    public $AllFeaturesForCategory;
    /**
     * Constructor method for GetCategoryFeaturesRequestType
     * @uses GetCategoryFeaturesRequestType::setCategoryID()
     * @uses GetCategoryFeaturesRequestType::setLevelLimit()
     * @uses GetCategoryFeaturesRequestType::setViewAllNodes()
     * @uses GetCategoryFeaturesRequestType::setFeatureID()
     * @uses GetCategoryFeaturesRequestType::setAllFeaturesForCategory()
     * @param string $categoryID
     * @param int $levelLimit
     * @param bool $viewAllNodes
     * @param string[] $featureID
     * @param bool $allFeaturesForCategory
     */
    public function __construct($categoryID = null, $levelLimit = null, $viewAllNodes = null, array $featureID = array(), $allFeaturesForCategory = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setLevelLimit($levelLimit)
            ->setViewAllNodes($viewAllNodes)
            ->setFeatureID($featureID)
            ->setAllFeaturesForCategory($allFeaturesForCategory);
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
     * Get FeatureID value
     * @return string[]|null
     */
    public function getFeatureID()
    {
        return $this->FeatureID;
    }
    /**
     * Set FeatureID value
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $featureID
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function setFeatureID(array $featureID = array())
    {
        $invalidValues = array();
        foreach ($featureID as $getCategoryFeaturesRequestTypeFeatureIDItem) {
            if (!\macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid($getCategoryFeaturesRequestTypeFeatureIDItem)) {
                $invalidValues[] = var_export($getCategoryFeaturesRequestTypeFeatureIDItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues())), __LINE__);
        }
        $this->FeatureID = $featureID;
        return $this;
    }
    /**
     * Add item to FeatureID value
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function addToFeatureID($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues())), __LINE__);
        }
        $this->FeatureID[] = $item;
        return $this;
    }
    /**
     * Get AllFeaturesForCategory value
     * @return bool|null
     */
    public function getAllFeaturesForCategory()
    {
        return $this->AllFeaturesForCategory;
    }
    /**
     * Set AllFeaturesForCategory value
     * @param bool $allFeaturesForCategory
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function setAllFeaturesForCategory($allFeaturesForCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($allFeaturesForCategory) && !is_bool($allFeaturesForCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allFeaturesForCategory)), __LINE__);
        }
        $this->AllFeaturesForCategory = $allFeaturesForCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
