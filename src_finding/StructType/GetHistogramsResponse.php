<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistogramsResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response container for the getHistogram call.
 * @subpackage Structs
 */
class GetHistogramsResponse extends BaseServiceResponse
{
    /**
     * The categoryHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for category histograms. This container is returned only when the specified category has children categories. <br><br> <span class="tablenote"><strong>Note:</strong> Category histograms may not be available for
     * some parent categories on the eBay Motors site. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
     */
    public $categoryHistogramContainer;
    /**
     * The aspectHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for aspect histograms. Aspect histograms are returned for categories only.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public $aspectHistogramContainer;
    /**
     * The conditionHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for condition histograms. Returned for leaf and parent categories.<br> <br> Only returned when you search the eBay US site. International items in US search results are included in the histogram counts.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public $conditionHistogramContainer;
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
     * Constructor method for GetHistogramsResponse
     * @uses GetHistogramsResponse::setCategoryHistogramContainer()
     * @uses GetHistogramsResponse::setAspectHistogramContainer()
     * @uses GetHistogramsResponse::setConditionHistogramContainer()
     * @uses GetHistogramsResponse::setExtension()
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType[] $extension
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer = null, \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null, \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null, array $extension = array())
    {
        $this
            ->setCategoryHistogramContainer($categoryHistogramContainer)
            ->setAspectHistogramContainer($aspectHistogramContainer)
            ->setConditionHistogramContainer($conditionHistogramContainer)
            ->setExtension($extension);
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
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
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
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
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
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
     */
    public function setConditionHistogramContainer(\macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this->conditionHistogramContainer = $conditionHistogramContainer;
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
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
     */
    public function setExtension(array $extension = array())
    {
        foreach ($extension as $getHistogramsResponseExtensionItem) {
            // validation for constraint: itemType
            if (!$getHistogramsResponseExtensionItem instanceof \macropage\ebaysdk\finding\StructType\ExtensionType) {
                throw new \InvalidArgumentException(sprintf('The extension property can only contain items of \macropage\ebaysdk\finding\StructType\ExtensionType, "%s" given', is_object($getHistogramsResponseExtensionItem) ? get_class($getHistogramsResponseExtensionItem) : gettype($getHistogramsResponseExtensionItem)), __LINE__);
            }
        }
        $this->extension = $extension;
        return $this;
    }
    /**
     * Add item to extension value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType $item
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
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
     * @return \macropage\ebaysdk\finding\StructType\GetHistogramsResponse
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
