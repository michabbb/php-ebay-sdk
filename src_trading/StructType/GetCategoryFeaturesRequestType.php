<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryFeaturesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns information about the features that are applicable to different categories, such as listing durations, shipping term requirements, and Best Offer support.
 * @subpackage Structs
 */
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the category for which you want to retrieve the feature settings. <br><br> Specify a CategoryID, set DetailLevel to ReturnAll, and set ViewAllNodes to true to return the default site settings, the overrides for the
     * specified category, plus all the child categories that have overrides on the features they inherit. <br><br> If you also set AllFeaturesForCategory to true, eBay returns the site defaults, plus all the settings for the specified category. Child
     * category information is not returned in this case. <br><br> If CategoryID is not specified, eBay returns the feature settings for the site. To return details on all categories that have overrides on the properties they inherit, set DetailLevel to
     * ReturnAll, and set ViewAllNodes to true. If you also set AllFeaturesForCategory to true, eBay returns only the site defaults with no child category information.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The LevelLimit
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, and no
     * <b>CategoryID</b> is specified, eBay feature metadata for every eBay category from the root on down will be returned. If this field is omitted, but a <b>CategoryID</b> is specified, the specified category and all of its children (down to the leaf
     * categories) are returned. <br> <br> If the <b>CategoryID</b> field is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, eBay feature metadata is only returned for the top-level categories (also known as L1 categories).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LevelLimit = null;
    /**
     * The ViewAllNodes
     * Meta information extracted from the WSDL
     * - documentation: You must set <b>DetailLevel</b> to <code>ReturnAll</code> in order to correctly populate the response when you set <b>ViewAllNodes</b> to true. In this case, eBay returns the site defaults along with all the categories that override
     * the feature settings they inherit. Here, each Category container shows only the features that it has overridden from its parent node. <br><br> If you also specify a <b>CategoryID</b>, eBay returns the details for that category, along with containers
     * for each of its child categories that have feature overrides. <br><br> Note that if <b>ViewAllNodes</b> is set to false (the default) and <b>DetailLevel</b> is set to <code>ReturnAll</code>, eBay returns only the leaf categories that have features
     * that override the settings they inherit. In this case, the call will not return leaf categories that do not have overrides.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ViewAllNodes = null;
    /**
     * The FeatureID
     * Meta information extracted from the WSDL
     * - documentation: Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data
     * for all features, as applicable to the other request parameters.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $FeatureID = [];
    /**
     * The AllFeaturesForCategory
     * Meta information extracted from the WSDL
     * - documentation: Use this switch to view all of the feature settings for a specific category. All feature settings are returned, regardless of the site default settings. This element works in conjunction with CategoryID--refer to the notes for that
     * element for more details. <br><br> If you also set FeatureID, eBay returns the status of the specified features only, for the specified category.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllFeaturesForCategory = null;
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
    public function __construct(?string $categoryID = null, ?int $levelLimit = null, ?bool $viewAllNodes = null, array $featureID = [], ?bool $allFeaturesForCategory = null)
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
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
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
    /**
     * Get FeatureID value
     * @return string[]
     */
    public function getFeatureID(): array
    {
        return $this->FeatureID;
    }
    /**
     * This method is responsible for validating the values passed to the setFeatureID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeatureID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeatureIDForArrayConstraintsFromSetFeatureID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategoryFeaturesRequestTypeFeatureIDItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid($getCategoryFeaturesRequestTypeFeatureIDItem)) {
                $invalidValues[] = is_object($getCategoryFeaturesRequestTypeFeatureIDItem) ? get_class($getCategoryFeaturesRequestTypeFeatureIDItem) : sprintf('%s(%s)', gettype($getCategoryFeaturesRequestTypeFeatureIDItem), var_export($getCategoryFeaturesRequestTypeFeatureIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeatureID value
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $featureID
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function setFeatureID(array $featureID = []): self
    {
        // validation for constraint: array
        if ('' !== ($featureIDArrayErrorMessage = self::validateFeatureIDForArrayConstraintsFromSetFeatureID($featureID))) {
            throw new InvalidArgumentException($featureIDArrayErrorMessage, __LINE__);
        }
        $this->FeatureID = $featureID;
        
        return $this;
    }
    /**
     * Add item to FeatureID value
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function addToFeatureID(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeatureIDCodeType::getValidValues())), __LINE__);
        }
        $this->FeatureID[] = $item;
        
        return $this;
    }
    /**
     * Get AllFeaturesForCategory value
     * @return bool|null
     */
    public function getAllFeaturesForCategory(): ?bool
    {
        return $this->AllFeaturesForCategory;
    }
    /**
     * Set AllFeaturesForCategory value
     * @param bool $allFeaturesForCategory
     * @return \macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType
     */
    public function setAllFeaturesForCategory(?bool $allFeaturesForCategory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allFeaturesForCategory) && !is_bool($allFeaturesForCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allFeaturesForCategory, true), gettype($allFeaturesForCategory)), __LINE__);
        }
        $this->AllFeaturesForCategory = $allFeaturesForCategory;
        
        return $this;
    }
}
