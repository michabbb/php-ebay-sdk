<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContextualKeywordsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to a <b>GetContextualKeywords</b> request.
 * @subpackage Structs
 */
class GetContextualKeywordsResponseType extends AbstractResponseType
{
    /**
     * The ContextSearchAsset
     * Meta information extracted from the WSDL
     * - documentation: An array of either keyword/category pairs or categories, with ranking and score.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[]
     */
    protected array $ContextSearchAsset = [];
    /**
     * Constructor method for GetContextualKeywordsResponseType
     * @uses GetContextualKeywordsResponseType::setContextSearchAsset()
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[] $contextSearchAsset
     */
    public function __construct(array $contextSearchAsset = [])
    {
        $this
            ->setContextSearchAsset($contextSearchAsset);
    }
    /**
     * Get ContextSearchAsset value
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[]
     */
    public function getContextSearchAsset(): array
    {
        return $this->ContextSearchAsset;
    }
    /**
     * This method is responsible for validating the values passed to the setContextSearchAsset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextSearchAsset method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextSearchAssetForArrayConstraintsFromSetContextSearchAsset(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContextualKeywordsResponseTypeContextSearchAssetItem) {
            // validation for constraint: itemType
            if (!$getContextualKeywordsResponseTypeContextSearchAssetItem instanceof \macropage\ebaysdk\trading\StructType\ContextSearchAssetType) {
                $invalidValues[] = is_object($getContextualKeywordsResponseTypeContextSearchAssetItem) ? get_class($getContextualKeywordsResponseTypeContextSearchAssetItem) : sprintf('%s(%s)', gettype($getContextualKeywordsResponseTypeContextSearchAssetItem), var_export($getContextualKeywordsResponseTypeContextSearchAssetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContextSearchAsset property can only contain items of type \macropage\ebaysdk\trading\StructType\ContextSearchAssetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContextSearchAsset value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[] $contextSearchAsset
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType
     */
    public function setContextSearchAsset(array $contextSearchAsset = []): self
    {
        // validation for constraint: array
        if ('' !== ($contextSearchAssetArrayErrorMessage = self::validateContextSearchAssetForArrayConstraintsFromSetContextSearchAsset($contextSearchAsset))) {
            throw new InvalidArgumentException($contextSearchAssetArrayErrorMessage, __LINE__);
        }
        $this->ContextSearchAsset = $contextSearchAsset;
        
        return $this;
    }
    /**
     * Add item to ContextSearchAsset value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType $item
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType
     */
    public function addToContextSearchAsset(\macropage\ebaysdk\trading\StructType\ContextSearchAssetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ContextSearchAssetType) {
            throw new InvalidArgumentException(sprintf('The ContextSearchAsset property can only contain items of type \macropage\ebaysdk\trading\StructType\ContextSearchAssetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContextSearchAsset[] = $item;
        
        return $this;
    }
}
