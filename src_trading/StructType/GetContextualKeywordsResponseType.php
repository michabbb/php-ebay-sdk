<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContextualKeywordsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response to a <b>GetContextualKeywords</b> request.
 * @subpackage Structs
 */
class GetContextualKeywordsResponseType extends AbstractResponseType
{
    /**
     * The ContextSearchAsset
     * Meta informations extracted from the WSDL
     * - documentation: An array of either keyword/category pairs or categories, with ranking and score.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[]
     */
    public $ContextSearchAsset;
    /**
     * Constructor method for GetContextualKeywordsResponseType
     * @uses GetContextualKeywordsResponseType::setContextSearchAsset()
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[] $contextSearchAsset
     */
    public function __construct(array $contextSearchAsset = array())
    {
        $this
            ->setContextSearchAsset($contextSearchAsset);
    }
    /**
     * Get ContextSearchAsset value
     * @return \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[]|null
     */
    public function getContextSearchAsset()
    {
        return $this->ContextSearchAsset;
    }
    /**
     * Set ContextSearchAsset value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType[] $contextSearchAsset
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType
     */
    public function setContextSearchAsset(array $contextSearchAsset = array())
    {
        foreach ($contextSearchAsset as $getContextualKeywordsResponseTypeContextSearchAssetItem) {
            // validation for constraint: itemType
            if (!$getContextualKeywordsResponseTypeContextSearchAssetItem instanceof \macropage\ebaysdk\trading\StructType\ContextSearchAssetType) {
                throw new \InvalidArgumentException(sprintf('The ContextSearchAsset property can only contain items of \macropage\ebaysdk\trading\StructType\ContextSearchAssetType, "%s" given', is_object($getContextualKeywordsResponseTypeContextSearchAssetItem) ? get_class($getContextualKeywordsResponseTypeContextSearchAssetItem) : gettype($getContextualKeywordsResponseTypeContextSearchAssetItem)), __LINE__);
            }
        }
        $this->ContextSearchAsset = $contextSearchAsset;
        return $this;
    }
    /**
     * Add item to ContextSearchAsset value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ContextSearchAssetType $item
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType
     */
    public function addToContextSearchAsset(\macropage\ebaysdk\trading\StructType\ContextSearchAssetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ContextSearchAssetType) {
            throw new \InvalidArgumentException(sprintf('The ContextSearchAsset property can only contain items of \macropage\ebaysdk\trading\StructType\ContextSearchAssetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContextSearchAsset[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsResponseType
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
