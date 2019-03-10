<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUpMarkDownHistoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of objects representing markup or markdown events for a given application and time period. If no time period is specified in the request, the information for only one day (24 hours before the time the call is made to the time
 * the call is made) is included. The maximum time period is allowed is 3 days (72 hours before the call is made to the time the call is made).
 * @subpackage Structs
 */
class MarkUpMarkDownHistoryType extends AbstractStructBase
{
    /**
     * The MarkUpMarkDownEvent
     * Meta informations extracted from the WSDL
     * - documentation: Details for a MarkDown or MarkUp event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType[]
     */
    public $MarkUpMarkDownEvent;
    /**
     * Constructor method for MarkUpMarkDownHistoryType
     * @uses MarkUpMarkDownHistoryType::setMarkUpMarkDownEvent()
     * @param \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     */
    public function __construct(array $markUpMarkDownEvent = array())
    {
        $this
            ->setMarkUpMarkDownEvent($markUpMarkDownEvent);
    }
    /**
     * Get MarkUpMarkDownEvent value
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType[]|null
     */
    public function getMarkUpMarkDownEvent()
    {
        return $this->MarkUpMarkDownEvent;
    }
    /**
     * Set MarkUpMarkDownEvent value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType
     */
    public function setMarkUpMarkDownEvent(array $markUpMarkDownEvent = array())
    {
        foreach ($markUpMarkDownEvent as $markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) {
            // validation for constraint: itemType
            if (!$markUpMarkDownHistoryTypeMarkUpMarkDownEventItem instanceof \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType) {
                throw new \InvalidArgumentException(sprintf('The MarkUpMarkDownEvent property can only contain items of \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType, "%s" given', is_object($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) ? get_class($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem) : gettype($markUpMarkDownHistoryTypeMarkUpMarkDownEventItem)), __LINE__);
            }
        }
        $this->MarkUpMarkDownEvent = $markUpMarkDownEvent;
        return $this;
    }
    /**
     * Add item to MarkUpMarkDownEvent value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType $item
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType
     */
    public function addToMarkUpMarkDownEvent(\macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType) {
            throw new \InvalidArgumentException(sprintf('The MarkUpMarkDownEvent property can only contain items of \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MarkUpMarkDownEvent[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType
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
