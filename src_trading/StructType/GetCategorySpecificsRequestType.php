<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategorySpecificsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetCategorySpecifics</b> call. This call is used to retrieve required, recommended, and optional Item Specifics names and values for one or multiple eBay Categories.
 * @subpackage Structs
 */
class GetCategorySpecificsRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics
     * metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing
     * categories they use. <br><br> A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the <b>CategorySpecificsFileInfo</b> field with its value set
     * to <code>true</code>. <b>CategoryID</b> values and <b>CategorySpecific.CategoryID</b> values can both be used in the same request. <br><br> Keep in mind that a high number of specified categories can result in longer response times and larger result
     * sets. If your call request happens to time out, you might want specify fewer categories. If any <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $CategoryID = [];
    /**
     * The LastUpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This dateTime filter can be included and used if the user only wants to check for recently-added Item Specifics names and values for one or more categories. If this filter is used, the Item Specifics recommendation engine will only
     * check for Item Specifics names and values that have been added/changed since the date that was passed in to this field. If this field is used, the call will not return any Item Specifics data; it will only return the <b>Recommendations.Updated</b>
     * boolean field for each specified eBay category. A <code>true</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have changed since the timestamp passed in the <b>LastUpdateTime</b> field,
     * and a <code>false</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have not changed since the timestamp passed in the <b>LastUpdateTime</b> field. <br><br> Typically, you will pass in the
     * timestamp value that was returned the last time you refreshed the list of Item Specifics names and values for the same categories. If the <b>Recommendations.Updated</b> flag returns <code>true</code> for any eBay categories in the response, you will
     * want to call <b>GetCategorySpecifics</b> again for those eBay categories to get the latest names and values. As downloading all the data may affect your application's performance, it may help to only download Item Specifics data for an eBay category
     * if the data has changed since you last checked.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastUpdateTime = null;
    /**
     * The MaxNames
     * Meta information extracted from the WSDL
     * - documentation: This field can be used if you want to control the number of Item Specifics that are returned for each specified eBay category. If you only wanted to retrieve the 10 most popular Item Specifics per category, you would include this
     * field and set its value to <code>10</code>. Note that mandatory Item Specifics are always returned first in the response. If this field is omitted, all available Item Specifics names for each specified category are returned. If this field's value is
     * set to a value that is higher than the number of Item Specific names available, all Item Specific names are still returned. <br> <br> <span class="tablenote"><b>Note:</b> In October 2019, eBay updated the <b>GetCategorySpecifics</b> call to retrieve
     * all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be
     * returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or
     * <b>MaxValuesPerName</b> filters to do this. </span> <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxNames = null;
    /**
     * The MaxValuesPerName
     * Meta information extracted from the WSDL
     * - documentation: This field can be used if you want to control the number of corresponding values that are returned for each returned Item Specific name in each specified eBay category. If you only wanted to retrieve the 10 most popular
     * values/options for each returned Item Specific name in each category, you would include this field and set its value to <code>10</code>. If this field is omitted, all available values for the corresponding Item Specifics name for each category are
     * returned. If this field's value is set to a value that is higher than the number of Item Specific values available for any Item Specific name, all Item Specific values are still returned. <br> <br> <span class="tablenote"><b>Note:</b> In October
     * 2019, eBay has updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b>
     * filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are
     * returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this. </span> <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxValuesPerName = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field can be used if you already have an Item Specific name in mind, and you only want the recommended values for this Item Specifics name. If you specify multiple eBay categories in the request, the recommendation engine may
     * find a matching Item Specifics name for some categories, but not for others. For eBay categories where the Item Specifics name is not found, recommended Item Specifics names and values will be returned. The Item Specifics name passed in this field is
     * case-sensitive, and wildcards are not supported. <br><br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The CategorySpecific
     * Meta information extracted from the WSDL
     * - documentation: This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple
     * Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used. <br><br> A <b>GetCategorySpecifics</b> call request requires at least one of the
     * following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and <b>CategorySpecific.CategoryID</b> values can both
     * be used in the same request. <br><br> Keep in mind that a high number of specified categories can result in longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     * <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType[]
     */
    protected array $CategorySpecific = [];
    /**
     * The ExcludeRelationships
     * Meta information extracted from the WSDL
     * - documentation: If this boolean field is included and set to <code>true</code>, the <b>Relationship</b> container will not be returned for any Item Specifics name or value recommendations. Relationship recommendations tell you whether an Item
     * Specific has a logical dependency another Item Specific. <br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=Small would mean something different to buyers depending on whether Size
     * Type=Petite or Size Type=Plus.<br> <br> In general, it is a good idea to retrieve and use relationship recommendations, as this data can help buyers find the items they want more easily.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExcludeRelationships = null;
    /**
     * The IncludeConfidence
     * Meta information extracted from the WSDL
     * - documentation: If this boolean field is included and set to <code>true</code>, eBay's level of confidence in the popularity of each Item Specific name and value for the specified category is returned in the response. Some sellers may find this
     * useful when choosing whether to use eBay's recommendation or their own Item Specifics names or values. <br> <br> If this field is used, either one or more <b>CategoryID</b> values and/or one or more <b>CategorySpecific.CategoryID</b> values must be
     * specified. If you try to use this field solely with the <b>CategorySpecificsFileInfo</b> field, the request fails and no <b>TaskReferenceID</b> or <b>FileReferenceID</b> values are returned.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeConfidence = null;
    /**
     * The CategorySpecificsFileInfo
     * Meta information extracted from the WSDL
     * - documentation: If this boolean field is included and set to <code>true</code>, the response includes a <b>FileReferenceID</b> and <b>TaskReferenceID</b> value. Use these identifiers as inputs to the <b>downloadFile</b> call in the eBay File
     * Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)<br>
     * <br> Either the <b>CategorySpecificsFileInfo</b> field or one or more <b>CategoryID</b> and/or <b>CategorySpecific.CategoryID</b> values are required in a <b>GetCategorySpecifics</b> call. <br> <br> <span class="tablenote"><b>Note:</b> You can use
     * the File Transfer API without using or learning about the Bulk Data Exchange API or other Large Merchant Services APIs. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CategorySpecificsFileInfo = null;
    /**
     * Constructor method for GetCategorySpecificsRequestType
     * @uses GetCategorySpecificsRequestType::setCategoryID()
     * @uses GetCategorySpecificsRequestType::setLastUpdateTime()
     * @uses GetCategorySpecificsRequestType::setMaxNames()
     * @uses GetCategorySpecificsRequestType::setMaxValuesPerName()
     * @uses GetCategorySpecificsRequestType::setName()
     * @uses GetCategorySpecificsRequestType::setCategorySpecific()
     * @uses GetCategorySpecificsRequestType::setExcludeRelationships()
     * @uses GetCategorySpecificsRequestType::setIncludeConfidence()
     * @uses GetCategorySpecificsRequestType::setCategorySpecificsFileInfo()
     * @param string[] $categoryID
     * @param string $lastUpdateTime
     * @param int $maxNames
     * @param int $maxValuesPerName
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType[] $categorySpecific
     * @param bool $excludeRelationships
     * @param bool $includeConfidence
     * @param bool $categorySpecificsFileInfo
     */
    public function __construct(array $categoryID = [], ?string $lastUpdateTime = null, ?int $maxNames = null, ?int $maxValuesPerName = null, ?string $name = null, array $categorySpecific = [], ?bool $excludeRelationships = null, ?bool $includeConfidence = null, ?bool $categorySpecificsFileInfo = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setLastUpdateTime($lastUpdateTime)
            ->setMaxNames($maxNames)
            ->setMaxValuesPerName($maxValuesPerName)
            ->setName($name)
            ->setCategorySpecific($categorySpecific)
            ->setExcludeRelationships($excludeRelationships)
            ->setIncludeConfidence($includeConfidence)
            ->setCategorySpecificsFileInfo($categorySpecificsFileInfo);
    }
    /**
     * Get CategoryID value
     * @return string[]
     */
    public function getCategoryID(): array
    {
        return $this->CategoryID;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryIDForArrayConstraintsFromSetCategoryID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategorySpecificsRequestTypeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($getCategorySpecificsRequestTypeCategoryIDItem)) {
                $invalidValues[] = is_object($getCategorySpecificsRequestTypeCategoryIDItem) ? get_class($getCategorySpecificsRequestTypeCategoryIDItem) : sprintf('%s(%s)', gettype($getCategorySpecificsRequestTypeCategoryIDItem), var_export($getCategorySpecificsRequestTypeCategoryIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryID value
     * @throws InvalidArgumentException
     * @param string[] $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setCategoryID(array $categoryID = []): self
    {
        // validation for constraint: array
        if ('' !== ($categoryIDArrayErrorMessage = self::validateCategoryIDForArrayConstraintsFromSetCategoryID($categoryID))) {
            throw new InvalidArgumentException($categoryIDArrayErrorMessage, __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Add item to CategoryID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function addToCategoryID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CategoryID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryID[] = $item;
        
        return $this;
    }
    /**
     * Get LastUpdateTime value
     * @return string|null
     */
    public function getLastUpdateTime(): ?string
    {
        return $this->LastUpdateTime;
    }
    /**
     * Set LastUpdateTime value
     * @param string $lastUpdateTime
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setLastUpdateTime(?string $lastUpdateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdateTime) && !is_string($lastUpdateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdateTime, true), gettype($lastUpdateTime)), __LINE__);
        }
        $this->LastUpdateTime = $lastUpdateTime;
        
        return $this;
    }
    /**
     * Get MaxNames value
     * @return int|null
     */
    public function getMaxNames(): ?int
    {
        return $this->MaxNames;
    }
    /**
     * Set MaxNames value
     * @param int $maxNames
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setMaxNames(?int $maxNames = null): self
    {
        // validation for constraint: int
        if (!is_null($maxNames) && !(is_int($maxNames) || ctype_digit($maxNames))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxNames, true), gettype($maxNames)), __LINE__);
        }
        $this->MaxNames = $maxNames;
        
        return $this;
    }
    /**
     * Get MaxValuesPerName value
     * @return int|null
     */
    public function getMaxValuesPerName(): ?int
    {
        return $this->MaxValuesPerName;
    }
    /**
     * Set MaxValuesPerName value
     * @param int $maxValuesPerName
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setMaxValuesPerName(?int $maxValuesPerName = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerName) && !(is_int($maxValuesPerName) || ctype_digit($maxValuesPerName))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValuesPerName, true), gettype($maxValuesPerName)), __LINE__);
        }
        $this->MaxValuesPerName = $maxValuesPerName;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get CategorySpecific value
     * @return \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType[]
     */
    public function getCategorySpecific(): array
    {
        return $this->CategorySpecific;
    }
    /**
     * This method is responsible for validating the values passed to the setCategorySpecific method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategorySpecific method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategorySpecificForArrayConstraintsFromSetCategorySpecific(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategorySpecificsRequestTypeCategorySpecificItem) {
            // validation for constraint: itemType
            if (!$getCategorySpecificsRequestTypeCategorySpecificItem instanceof \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType) {
                $invalidValues[] = is_object($getCategorySpecificsRequestTypeCategorySpecificItem) ? get_class($getCategorySpecificsRequestTypeCategorySpecificItem) : sprintf('%s(%s)', gettype($getCategorySpecificsRequestTypeCategorySpecificItem), var_export($getCategorySpecificsRequestTypeCategorySpecificItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategorySpecific property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategorySpecific value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType[] $categorySpecific
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setCategorySpecific(array $categorySpecific = []): self
    {
        // validation for constraint: array
        if ('' !== ($categorySpecificArrayErrorMessage = self::validateCategorySpecificForArrayConstraintsFromSetCategorySpecific($categorySpecific))) {
            throw new InvalidArgumentException($categorySpecificArrayErrorMessage, __LINE__);
        }
        $this->CategorySpecific = $categorySpecific;
        
        return $this;
    }
    /**
     * Add item to CategorySpecific value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function addToCategorySpecific(\macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType) {
            throw new InvalidArgumentException(sprintf('The CategorySpecific property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategorySpecific[] = $item;
        
        return $this;
    }
    /**
     * Get ExcludeRelationships value
     * @return bool|null
     */
    public function getExcludeRelationships(): ?bool
    {
        return $this->ExcludeRelationships;
    }
    /**
     * Set ExcludeRelationships value
     * @param bool $excludeRelationships
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setExcludeRelationships(?bool $excludeRelationships = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeRelationships) && !is_bool($excludeRelationships)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeRelationships, true), gettype($excludeRelationships)), __LINE__);
        }
        $this->ExcludeRelationships = $excludeRelationships;
        
        return $this;
    }
    /**
     * Get IncludeConfidence value
     * @return bool|null
     */
    public function getIncludeConfidence(): ?bool
    {
        return $this->IncludeConfidence;
    }
    /**
     * Set IncludeConfidence value
     * @param bool $includeConfidence
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setIncludeConfidence(?bool $includeConfidence = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeConfidence) && !is_bool($includeConfidence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeConfidence, true), gettype($includeConfidence)), __LINE__);
        }
        $this->IncludeConfidence = $includeConfidence;
        
        return $this;
    }
    /**
     * Get CategorySpecificsFileInfo value
     * @return bool|null
     */
    public function getCategorySpecificsFileInfo(): ?bool
    {
        return $this->CategorySpecificsFileInfo;
    }
    /**
     * Set CategorySpecificsFileInfo value
     * @param bool $categorySpecificsFileInfo
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType
     */
    public function setCategorySpecificsFileInfo(?bool $categorySpecificsFileInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($categorySpecificsFileInfo) && !is_bool($categorySpecificsFileInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($categorySpecificsFileInfo, true), gettype($categorySpecificsFileInfo)), __LINE__);
        }
        $this->CategorySpecificsFileInfo = $categorySpecificsFileInfo;
        
        return $this;
    }
}
