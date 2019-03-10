<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsForFavoriteSearchResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reserved for future use.
 * @subpackage Structs
 */
class FindItemsForFavoriteSearchResponse extends BaseFindingServiceResponse
{
    /**
     * The categoryHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
     */
    public $categoryHistogramContainer;
    /**
     * The aspectHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public $aspectHistogramContainer;
    /**
     * The conditionHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public $conditionHistogramContainer;
    /**
     * Constructor method for FindItemsForFavoriteSearchResponse
     * @uses FindItemsForFavoriteSearchResponse::setCategoryHistogramContainer()
     * @uses FindItemsForFavoriteSearchResponse::setAspectHistogramContainer()
     * @uses FindItemsForFavoriteSearchResponse::setConditionHistogramContainer()
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer = null, \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null, \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this
            ->setCategoryHistogramContainer($categoryHistogramContainer)
            ->setAspectHistogramContainer($aspectHistogramContainer)
            ->setConditionHistogramContainer($conditionHistogramContainer);
    }
    /**
     * Get categoryHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer|null
     */
    public function getCategoryHistogramContainer()
    {
        return $this->categoryHistogramContainer;
    }
    /**
     * Set categoryHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse
     */
    public function setCategoryHistogramContainer(\macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer = null)
    {
        $this->categoryHistogramContainer = $categoryHistogramContainer;
        return $this;
    }
    /**
     * Get aspectHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer|null
     */
    public function getAspectHistogramContainer()
    {
        return $this->aspectHistogramContainer;
    }
    /**
     * Set aspectHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse
     */
    public function setAspectHistogramContainer(\macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null)
    {
        $this->aspectHistogramContainer = $aspectHistogramContainer;
        return $this;
    }
    /**
     * Get conditionHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer|null
     */
    public function getConditionHistogramContainer()
    {
        return $this->conditionHistogramContainer;
    }
    /**
     * Set conditionHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse
     */
    public function setConditionHistogramContainer(\macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this->conditionHistogramContainer = $conditionHistogramContainer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsForFavoriteSearchResponse
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
