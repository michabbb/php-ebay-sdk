<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategorySpecificsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetCategorySpecifics</b> call. This call retrieves recommended Item Specifics names and values for one or multiple eBay Categories.
 * @subpackage Structs
 */
class GetCategorySpecificsResponseType extends AbstractResponseType
{
    /**
     * The Recommendations
     * Meta information extracted from the WSDL
     * - documentation: This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for
     * the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are
     * returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product. <br> <br> As mentioned above, the most relevant Item Specifics are returned
     * first, and similarly, if an Item Specific has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br> <br> This node returns empty (or it's not returned) for a category if there is no
     * applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet, or a duplicate category that was already returned). If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no matching
     * values are found for the name, eBay returns the name with no values (even if the name is not recommended).<br> <br> If <b>GetCategoryFeatures</b> indicates that Item Specifics are enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     * return any recommendations for that category, the seller can still specify their own Item Specifics in that category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationsType[]
     */
    protected array $Recommendations = [];
    /**
     * The TaskReferenceID
     * Meta information extracted from the WSDL
     * - documentation: A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the
     * <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call
     * downloads a .zip file as an attachment.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TaskReferenceID = null;
    /**
     * The FileReferenceID
     * Meta information extracted from the WSDL
     * - documentation: A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the
     * <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call
     * downloads a .zip file as an attachment.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileReferenceID = null;
    /**
     * Constructor method for GetCategorySpecificsResponseType
     * @uses GetCategorySpecificsResponseType::setRecommendations()
     * @uses GetCategorySpecificsResponseType::setTaskReferenceID()
     * @uses GetCategorySpecificsResponseType::setFileReferenceID()
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType[] $recommendations
     * @param string $taskReferenceID
     * @param string $fileReferenceID
     */
    public function __construct(array $recommendations = [], ?string $taskReferenceID = null, ?string $fileReferenceID = null)
    {
        $this
            ->setRecommendations($recommendations)
            ->setTaskReferenceID($taskReferenceID)
            ->setFileReferenceID($fileReferenceID);
    }
    /**
     * Get Recommendations value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType[]
     */
    public function getRecommendations(): array
    {
        return $this->Recommendations;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendations method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendationsForArrayConstraintsFromSetRecommendations(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCategorySpecificsResponseTypeRecommendationsItem) {
            // validation for constraint: itemType
            if (!$getCategorySpecificsResponseTypeRecommendationsItem instanceof \macropage\ebaysdk\trading\StructType\RecommendationsType) {
                $invalidValues[] = is_object($getCategorySpecificsResponseTypeRecommendationsItem) ? get_class($getCategorySpecificsResponseTypeRecommendationsItem) : sprintf('%s(%s)', gettype($getCategorySpecificsResponseTypeRecommendationsItem), var_export($getCategorySpecificsResponseTypeRecommendationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Recommendations property can only contain items of type \macropage\ebaysdk\trading\StructType\RecommendationsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Recommendations value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType[] $recommendations
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setRecommendations(array $recommendations = []): self
    {
        // validation for constraint: array
        if ('' !== ($recommendationsArrayErrorMessage = self::validateRecommendationsForArrayConstraintsFromSetRecommendations($recommendations))) {
            throw new InvalidArgumentException($recommendationsArrayErrorMessage, __LINE__);
        }
        $this->Recommendations = $recommendations;
        
        return $this;
    }
    /**
     * Add item to Recommendations value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function addToRecommendations(\macropage\ebaysdk\trading\StructType\RecommendationsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RecommendationsType) {
            throw new InvalidArgumentException(sprintf('The Recommendations property can only contain items of type \macropage\ebaysdk\trading\StructType\RecommendationsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Recommendations[] = $item;
        
        return $this;
    }
    /**
     * Get TaskReferenceID value
     * @return string|null
     */
    public function getTaskReferenceID(): ?string
    {
        return $this->TaskReferenceID;
    }
    /**
     * Set TaskReferenceID value
     * @param string $taskReferenceID
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setTaskReferenceID(?string $taskReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($taskReferenceID) && !is_string($taskReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskReferenceID, true), gettype($taskReferenceID)), __LINE__);
        }
        $this->TaskReferenceID = $taskReferenceID;
        
        return $this;
    }
    /**
     * Get FileReferenceID value
     * @return string|null
     */
    public function getFileReferenceID(): ?string
    {
        return $this->FileReferenceID;
    }
    /**
     * Set FileReferenceID value
     * @param string $fileReferenceID
     * @return \macropage\ebaysdk\trading\StructType\GetCategorySpecificsResponseType
     */
    public function setFileReferenceID(?string $fileReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($fileReferenceID) && !is_string($fileReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileReferenceID, true), gettype($fileReferenceID)), __LINE__);
        }
        $this->FileReferenceID = $fileReferenceID;
        
        return $this;
    }
}
