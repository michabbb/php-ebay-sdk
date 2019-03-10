<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ScheduleType extends AbstractStructBase
{
    /**
     * The ScheduleID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ScheduleID;
    /**
     * The ScheduleTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ScheduleType
     * @uses ScheduleType::setScheduleID()
     * @uses ScheduleType::setScheduleTime()
     * @uses ScheduleType::setAny()
     * @param int $scheduleID
     * @param string $scheduleTime
     * @param \DOMDocument $any
     */
    public function __construct($scheduleID = null, $scheduleTime = null, \DOMDocument $any = null)
    {
        $this
            ->setScheduleID($scheduleID)
            ->setScheduleTime($scheduleTime)
            ->setAny($any);
    }
    /**
     * Get ScheduleID value
     * @return int|null
     */
    public function getScheduleID()
    {
        return $this->ScheduleID;
    }
    /**
     * Set ScheduleID value
     * @param int $scheduleID
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
     */
    public function setScheduleID($scheduleID = null)
    {
        // validation for constraint: int
        if (!is_null($scheduleID) && !is_numeric($scheduleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scheduleID)), __LINE__);
        }
        $this->ScheduleID = $scheduleID;
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime()
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
     */
    public function setScheduleTime($scheduleTime = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ScheduleType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
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
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
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
