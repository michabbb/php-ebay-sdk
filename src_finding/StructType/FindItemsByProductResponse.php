<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByProductResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response container for the findItemsByProduct call.
 * @subpackage Structs
 */
class FindItemsByProductResponse extends BaseFindingServiceResponse
{
    /**
     * The aspectHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for aspect histograms.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public $aspectHistogramContainer;
    /**
     * The conditionHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for condition histograms.<br> <br> Not returned when <b>Condition</b> is specified in <b>itemFilter</b>. That is, only returned when you have not yet narrowed your search based on specific conditions.<br> <br> Only
     * returned when you search the eBay US site. International items in US search results are included in the histogram counts.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public $conditionHistogramContainer;
    /**
     * Constructor method for FindItemsByProductResponse
     * @uses FindItemsByProductResponse::setAspectHistogramContainer()
     * @uses FindItemsByProductResponse::setConditionHistogramContainer()
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null, \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this
            ->setAspectHistogramContainer($aspectHistogramContainer)
            ->setConditionHistogramContainer($conditionHistogramContainer);
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductResponse
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductResponse
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
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByProductResponse
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
