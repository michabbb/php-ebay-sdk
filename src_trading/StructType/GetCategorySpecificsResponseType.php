<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategorySpecificsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetCategorySpecifics</b> call. This call retrieves recommended Item Specifics names and values for one or multiple eBay Categories.
 * @subpackage Structs
 */
class GetCategorySpecificsResponseType extends AbstractResponseType
{
    /**
     * The Recommendations
     * Meta informations extracted from the WSDL
     * - documentation: This container provide details about recommended Item Specifics and Product Identifier types. Contains the most popular Item Specifics and supported/required Product Identifier types, if any, for a category specified in the request,
     * or contains information about whether the recommendations have changed for that category since the <b>LastUpdateTime</b> you requested. <br> <br> The most relevant Item Specifics are returned first. If a name has multiple values, the first value is
     * more popular.<br> <br> This node returns empty (or it's not returned) for a category if there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet, or a duplicate category that was
     * already returned). If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no matching values are found for the name, eBay returns the name with no values (even if the name is not recommended).<br> <br> If <b>GetCategoryFeatures</b>
     * indicates that custom Item Specifics are enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't return any recommendations for that category, the seller can still specify their own custom Item Specifics in that category. <br> <br> <span
     * class="tablenote"><b>Note:</b> The <b>ProductIdentifiers</b> container is for future use, and is not currently returned in the <b>GetCategorySpecifics</b> call. Until the <b>ProductIdentifiers</b> container is wired on and returned, an alternative
     * way to see if a Product Identifier type is required for a category is to identify the Product Identifier type through the <b>Recommendations.NameRecommendation.Name</b> field in the <b>GetCategorySpecifics</b> response, and then look at the
     * corresponding <b>Recommendations.NameRecommendation.ValidationRules.MinValues</b> field. The <b>GetCategoryFeatures</b> call can also be used, and the seller will look for the values returned for that category under the <b>EANEnabled</b>,
     * <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>BrandMPNIdentifierEnabled</b> fields that indicate the Product Identifier types that are supported/required for the category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationsType[]
     */
    public $Recommendations;
    /**
     * The TaskReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the
     * <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call
     * downloads a .zip file as an attachment.)
     * - minOccurs: 0
     * @var string
     */
    public $TaskReferenceID;
    /**
     * The FileReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the
     * <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call
     * downloads a .zip file as an attachment.)
     * - minOccurs: 0
     * @var string
     */
    public $FileReferenceID;
    /**
     * Constructor method for GetCategorySpecificsResponseType
     * @uses GetCategorySpecificsResponseType::setRecommendations()
     * @uses GetCategorySpecificsResponseType::setTaskReferenceID()
     * @uses GetCategorySpecificsResponseType::setFileReferenceID()
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType[] $recommendations
     * @param string $taskReferenceID
     * @param string $fileReferenceID
     */
    public function __construct(array $recommendations = array(), $taskReferenceID = null, $fileReferenceID = null)
    {
        $this
            ->setRecommendations($recommendations)
            ->setTaskReferenceID($taskReferenceID)
            ->setFileReferenceID($fileReferenceID);
    }
    /**
     * Get Recommendations value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType[]|null
     */
    public function getRecommendations()
    {
        return $this->Recommendations;
    }
    /**
     * Set Recommendations value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType[] $recommendations
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setRecommendations(array $recommendations = array())
    {
        foreach ($recommendations as $getCategorySpecificsResponseTypeRecommendationsItem) {
            // validation for constraint: itemType
            if (!$getCategorySpecificsResponseTypeRecommendationsItem instanceof \macropage\ebaysdk\trading\StructType\RecommendationsType) {
                throw new \InvalidArgumentException(sprintf('The Recommendations property can only contain items of \macropage\ebaysdk\trading\StructType\RecommendationsType, "%s" given', is_object($getCategorySpecificsResponseTypeRecommendationsItem) ? get_class($getCategorySpecificsResponseTypeRecommendationsItem) : gettype($getCategorySpecificsResponseTypeRecommendationsItem)), __LINE__);
            }
        }
        $this->Recommendations = $recommendations;
        return $this;
    }
    /**
     * Add item to Recommendations value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function addToRecommendations(\macropage\ebaysdk\trading\StructType\RecommendationsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RecommendationsType) {
            throw new \InvalidArgumentException(sprintf('The Recommendations property can only contain items of \macropage\ebaysdk\trading\StructType\RecommendationsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recommendations[] = $item;
        return $this;
    }
    /**
     * Get TaskReferenceID value
     * @return string|null
     */
    public function getTaskReferenceID()
    {
        return $this->TaskReferenceID;
    }
    /**
     * Set TaskReferenceID value
     * @param string $taskReferenceID
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setTaskReferenceID($taskReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($taskReferenceID) && !is_string($taskReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taskReferenceID)), __LINE__);
        }
        $this->TaskReferenceID = $taskReferenceID;
        return $this;
    }
    /**
     * Get FileReferenceID value
     * @return string|null
     */
    public function getFileReferenceID()
    {
        return $this->FileReferenceID;
    }
    /**
     * Set FileReferenceID value
     * @param string $fileReferenceID
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setFileReferenceID($fileReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($fileReferenceID) && !is_string($fileReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileReferenceID)), __LINE__);
        }
        $this->FileReferenceID = $fileReferenceID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
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
