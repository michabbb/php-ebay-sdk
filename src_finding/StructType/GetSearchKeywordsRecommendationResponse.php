<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchKeywordsRecommendationResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response container for the spelling check and correction for keywords.
 * @subpackage Structs
 */
class GetSearchKeywordsRecommendationResponse extends BaseServiceResponse
{
    /**
     * The keywords
     * Meta informations extracted from the WSDL
     * - documentation: Contains a spell-checked version of the submitted keywords. If no recommended spelling can be identified for the submitted keywords, the response contains a warning to that effect and an empty keywords field is returned.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $keywords;
    /**
     * The extension
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ExtensionType[]
     */
    public $extension;
    /**
     * Constructor method for GetSearchKeywordsRecommendationResponse
     * @uses GetSearchKeywordsRecommendationResponse::setKeywords()
     * @uses GetSearchKeywordsRecommendationResponse::setExtension()
     * @param string $keywords
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType[] $extension
     */
    public function __construct($keywords = null, array $extension = array())
    {
        $this
            ->setKeywords($keywords)
            ->setExtension($extension);
    }
    /**
     * Get keywords value
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    /**
     * Set keywords value
     * @param string $keywords
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse
     */
    public function setKeywords($keywords = null)
    {
        // validation for constraint: string
        if (!is_null($keywords) && !is_string($keywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keywords)), __LINE__);
        }
        $this->keywords = $keywords;
        return $this;
    }
    /**
     * Get extension value
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType[]|null
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType[] $extension
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse
     */
    public function setExtension(array $extension = array())
    {
        foreach ($extension as $getSearchKeywordsRecommendationResponseExtensionItem) {
            // validation for constraint: itemType
            if (!$getSearchKeywordsRecommendationResponseExtensionItem instanceof \macropage\ebaysdk\finding\StructType\ExtensionType) {
                throw new \InvalidArgumentException(sprintf('The extension property can only contain items of \macropage\ebaysdk\finding\StructType\ExtensionType, "%s" given', is_object($getSearchKeywordsRecommendationResponseExtensionItem) ? get_class($getSearchKeywordsRecommendationResponseExtensionItem) : gettype($getSearchKeywordsRecommendationResponseExtensionItem)), __LINE__);
            }
        }
        $this->extension = $extension;
        return $this;
    }
    /**
     * Add item to extension value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType $item
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse
     */
    public function addToExtension(\macropage\ebaysdk\finding\StructType\ExtensionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ExtensionType) {
            throw new \InvalidArgumentException(sprintf('The extension property can only contain items of \macropage\ebaysdk\finding\StructType\ExtensionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->extension[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationResponse
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
