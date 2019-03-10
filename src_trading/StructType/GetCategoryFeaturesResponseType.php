<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryFeaturesResponseType StructType
 * @subpackage Structs
 */
class GetCategoryFeaturesResponseType extends AbstractResponseType
{
    /**
     * The CategoryVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the current version of the set of feature meta-data. Compare this value to the version of the last version you downloaded to determine whether the data may have changed.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the category hierarchy were last updated.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: A category whose feature settings are different from the settings of its parent category.<br> <br> For example, suppose there is a branch of the category tree with 5 category levels (L1, L2, L3, L4, and L5). Suppose the feature
     * settings for SiteDefaults, L1, L4, and L5 are all "A", and the settings for L2 and L3 are "B". In this case:<br> L1's settings (A) match the site default, so L1 is not returned.<br> L2's settings (B) are different from L1's, so L2 is returned.<br>
     * L3's settings (B) are the same as L2's, so L3 is not returned<br> L4's settings (A) are different from L3's, so L4 is returned<br> L5's settings (A) are the same as L4's, so L5 is not returned.<br> <br> If you specified a particular FeatureID in the
     * request, this field only returns feature settings for that feature. Only returned when the category is different from its parent. If the category has children and they aren't returned, it means the children inherit the category's feature settings.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryFeatureType[]
     */
    public $Category;
    /**
     * The SiteDefaults
     * Meta informations extracted from the WSDL
     * - documentation: Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public $SiteDefaults;
    /**
     * The FeatureDefinitions
     * Meta informations extracted from the WSDL
     * - documentation: Returns definitions of the various features on the site, or the features you requested in FeatureID (if any). Each feature has a node within FeatureDefinitions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public $FeatureDefinitions;
    /**
     * Constructor method for GetCategoryFeaturesResponseType
     * @uses GetCategoryFeaturesResponseType::setCategoryVersion()
     * @uses GetCategoryFeaturesResponseType::setUpdateTime()
     * @uses GetCategoryFeaturesResponseType::setCategory()
     * @uses GetCategoryFeaturesResponseType::setSiteDefaults()
     * @uses GetCategoryFeaturesResponseType::setFeatureDefinitions()
     * @param string $categoryVersion
     * @param string $updateTime
     * @param \macropage\ebaysdk\trading\StructType\CategoryFeatureType[] $category
     * @param \macropage\ebaysdk\trading\StructType\SiteDefaultsType $siteDefaults
     * @param \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType $featureDefinitions
     */
    public function __construct($categoryVersion = null, $updateTime = null, array $category = array(), \macropage\ebaysdk\trading\StructType\SiteDefaultsType $siteDefaults = null, \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType $featureDefinitions = null)
    {
        $this
            ->setCategoryVersion($categoryVersion)
            ->setUpdateTime($updateTime)
            ->setCategory($category)
            ->setSiteDefaults($siteDefaults)
            ->setFeatureDefinitions($featureDefinitions);
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
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
     * Get Category value
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType[]|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryFeatureType[] $category
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
     */
    public function setCategory(array $category = array())
    {
        foreach ($category as $getCategoryFeaturesResponseTypeCategoryItem) {
            // validation for constraint: itemType
            if (!$getCategoryFeaturesResponseTypeCategoryItem instanceof \macropage\ebaysdk\trading\StructType\CategoryFeatureType) {
                throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryFeatureType, "%s" given', is_object($getCategoryFeaturesResponseTypeCategoryItem) ? get_class($getCategoryFeaturesResponseTypeCategoryItem) : gettype($getCategoryFeaturesResponseTypeCategoryItem)), __LINE__);
            }
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Add item to Category value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryFeatureType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
     */
    public function addToCategory(\macropage\ebaysdk\trading\StructType\CategoryFeatureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryFeatureType) {
            throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryFeatureType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Category[] = $item;
        return $this;
    }
    /**
     * Get SiteDefaults value
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType|null
     */
    public function getSiteDefaults()
    {
        return $this->SiteDefaults;
    }
    /**
     * Set SiteDefaults value
     * @param \macropage\ebaysdk\trading\StructType\SiteDefaultsType $siteDefaults
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
     */
    public function setSiteDefaults(\macropage\ebaysdk\trading\StructType\SiteDefaultsType $siteDefaults = null)
    {
        $this->SiteDefaults = $siteDefaults;
        return $this;
    }
    /**
     * Get FeatureDefinitions value
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType|null
     */
    public function getFeatureDefinitions()
    {
        return $this->FeatureDefinitions;
    }
    /**
     * Set FeatureDefinitions value
     * @param \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType $featureDefinitions
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
     */
    public function setFeatureDefinitions(\macropage\ebaysdk\trading\StructType\FeatureDefinitionsType $featureDefinitions = null)
    {
        $this->FeatureDefinitions = $featureDefinitions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesResponseType
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
