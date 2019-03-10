<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeRangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the Date range.
 * @subpackage Structs
 */
class TimeRangeType extends AbstractStructBase
{
    /**
     * The TimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to be used in a date range.
     * - minOccurs: 0
     * @var string
     */
    public $TimeFrom;
    /**
     * The TimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to be used in a date range.
     * - minOccurs: 0
     * @var string
     */
    public $TimeTo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TimeRangeType
     * @uses TimeRangeType::setTimeFrom()
     * @uses TimeRangeType::setTimeTo()
     * @uses TimeRangeType::setAny()
     * @param string $timeFrom
     * @param string $timeTo
     * @param \DOMDocument $any
     */
    public function __construct($timeFrom = null, $timeTo = null, \DOMDocument $any = null)
    {
        $this
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
            ->setAny($any);
    }
    /**
     * Get TimeFrom value
     * @return string|null
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }
    /**
     * Set TimeFrom value
     * @param string $timeFrom
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public function setTimeFrom($timeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($timeFrom) && !is_string($timeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        return $this;
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TimeRangeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
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
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
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
