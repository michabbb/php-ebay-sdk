<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SchedulingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information for scheduling limits for the user.
 * @subpackage Structs
 */
class SchedulingInfoType extends AbstractStructBase
{
    /**
     * The MaxScheduledMinutes
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledMinutes;
    /**
     * The MinScheduledMinutes
     * Meta informations extracted from the WSDL
     * - documentation: Minimum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int
     */
    public $MinScheduledMinutes;
    /**
     * The MaxScheduledItems
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of Items that a user may schedule.
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledItems;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SchedulingInfoType
     * @uses SchedulingInfoType::setMaxScheduledMinutes()
     * @uses SchedulingInfoType::setMinScheduledMinutes()
     * @uses SchedulingInfoType::setMaxScheduledItems()
     * @uses SchedulingInfoType::setAny()
     * @param int $maxScheduledMinutes
     * @param int $minScheduledMinutes
     * @param int $maxScheduledItems
     * @param \DOMDocument $any
     */
    public function __construct($maxScheduledMinutes = null, $minScheduledMinutes = null, $maxScheduledItems = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxScheduledMinutes($maxScheduledMinutes)
            ->setMinScheduledMinutes($minScheduledMinutes)
            ->setMaxScheduledItems($maxScheduledItems)
            ->setAny($any);
    }
    /**
     * Get MaxScheduledMinutes value
     * @return int|null
     */
    public function getMaxScheduledMinutes()
    {
        return $this->MaxScheduledMinutes;
    }
    /**
     * Set MaxScheduledMinutes value
     * @param int $maxScheduledMinutes
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMaxScheduledMinutes($maxScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledMinutes) && !is_numeric($maxScheduledMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxScheduledMinutes)), __LINE__);
        }
        $this->MaxScheduledMinutes = $maxScheduledMinutes;
        return $this;
    }
    /**
     * Get MinScheduledMinutes value
     * @return int|null
     */
    public function getMinScheduledMinutes()
    {
        return $this->MinScheduledMinutes;
    }
    /**
     * Set MinScheduledMinutes value
     * @param int $minScheduledMinutes
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMinScheduledMinutes($minScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($minScheduledMinutes) && !is_numeric($minScheduledMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minScheduledMinutes)), __LINE__);
        }
        $this->MinScheduledMinutes = $minScheduledMinutes;
        return $this;
    }
    /**
     * Get MaxScheduledItems value
     * @return int|null
     */
    public function getMaxScheduledItems()
    {
        return $this->MaxScheduledItems;
    }
    /**
     * Set MaxScheduledItems value
     * @param int $maxScheduledItems
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMaxScheduledItems($maxScheduledItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledItems) && !is_numeric($maxScheduledItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxScheduledItems)), __LINE__);
        }
        $this->MaxScheduledItems = $maxScheduledItems;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SchedulingInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
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
