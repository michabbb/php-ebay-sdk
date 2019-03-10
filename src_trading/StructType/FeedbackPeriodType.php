<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackPeriodType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>FeedbackPeriod</b> containers that are returned in the <b>GetFeedback</b> call to indicate how many Negative, Neutral, Positive, Retracted, and Total Feedback entries a user has received within different
 * periods of time, typically 30 days, 180 days, and 365 days.
 * @subpackage Structs
 */
class FeedbackPeriodType extends AbstractStructBase
{
    /**
     * The PeriodInDays
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 30 days, 180 days, and 365 days. This field is always returned with the <b>FeedbackPeriod</b>
     * container.
     * - minOccurs: 0
     * @var int
     */
    public $PeriodInDays;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field. This field is always returned with the <b>FeedbackPeriod</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackPeriodType
     * @uses FeedbackPeriodType::setPeriodInDays()
     * @uses FeedbackPeriodType::setCount()
     * @uses FeedbackPeriodType::setAny()
     * @param int $periodInDays
     * @param int $count
     * @param \DOMDocument $any
     */
    public function __construct($periodInDays = null, $count = null, \DOMDocument $any = null)
    {
        $this
            ->setPeriodInDays($periodInDays)
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get PeriodInDays value
     * @return int|null
     */
    public function getPeriodInDays()
    {
        return $this->PeriodInDays;
    }
    /**
     * Set PeriodInDays value
     * @param int $periodInDays
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType
     */
    public function setPeriodInDays($periodInDays = null)
    {
        // validation for constraint: int
        if (!is_null($periodInDays) && !is_numeric($periodInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($periodInDays)), __LINE__);
        }
        $this->PeriodInDays = $periodInDays;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeedbackPeriodType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType
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
