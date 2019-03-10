<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUpMarkDownEventType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes an individual mark-up or mark-down event. eBay will automatically mark an application as down if attempts to deliver a notification fail repeatedly. eBay may mark an application down manually under certain circumstances.
 * @subpackage Structs
 */
class MarkUpMarkDownEventType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Whether the application has been marked up or marked down.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Time when the application was marked up or marked down.
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - documentation: Describes how the application was marked down, automatically or manually. When an application is automatically marked down, eBay will ping the application periodically, and if communication is restored, eBay will automatically mark
     * the application up. If your application is marked down manually, you must contact eBay Developer Support to get your application marked up. A Reason is not provided for mark up events.
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MarkUpMarkDownEventType
     * @uses MarkUpMarkDownEventType::setType()
     * @uses MarkUpMarkDownEventType::setTime()
     * @uses MarkUpMarkDownEventType::setReason()
     * @uses MarkUpMarkDownEventType::setAny()
     * @param string $type
     * @param string $time
     * @param string $reason
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $time = null, $reason = null, \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setTime($time)
            ->setReason($reason)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
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
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
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
