<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactHoursDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ContactHoursDetails</b> container, which is used in Add/Revise/Relist calls to provide contact hours for the owner of a Classified Ad. The <b>ContactHoursDetails</b> container is only applicable to Classified Ad
 * listings.
 * @subpackage Structs
 */
class ContactHoursDetailsType extends AbstractStructBase
{
    /**
     * The TimeZoneID
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the local time zone of the values provided for Hours1From/Hours1To and Hours2From/Hours2To. If you specify a contact hours time range with Hours1From and Hours1To, you must provide a local time zone. To retrieve a complete
     * list of the TimeZoneID values supported by eBay, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>TimeZoneDetails</b>.
     * - minOccurs: 0
     * @var string
     */
    public $TimeZoneID;
    /**
     * The Hours1Days
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the range of days for which the primary contact hours specified by Hours1AnyTime or Hours1From and Hours1To apply. If a value of None is provided for this field, the values provided for Hours1AnyTime, Hours1From, Hours1To
     * are ignored.
     * - minOccurs: 0
     * @var string
     */
    public $Hours1Days;
    /**
     * The Hours1AnyTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not a user is available to be contacted 24 hours a day during the range of days specified using the Hours1Days element. True indicates the user is available 24 hours a day, false indicates otherwise. In the case
     * of this field being true, all values provided for Hours1From and Hours1To will be ignored. In the case of this field being false, the values provided Hours1From and Hours1To will be considered.
     * - minOccurs: 0
     * @var bool
     */
    public $Hours1AnyTime;
    /**
     * The Hours1From
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the starting time of day this eBay user is available for other eBay members to contact for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values
     * either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
     * - minOccurs: 0
     * @var string
     */
    public $Hours1From;
    /**
     * The Hours1To
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the ending time of day this eBay user is available for other eBay members to contact them for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values
     * either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
     * - minOccurs: 0
     * @var string
     */
    public $Hours1To;
    /**
     * The Hours2Days
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the range of days for which the secondary contact hours specified by Hours2AnyTime or Hours2From and Hours2To apply. If a value of None is provided for this field, the values provided for Hours2AnyTime, Hours2From, Hours2To
     * are ignored. <br> <b>Note:</b> You cannot set Hours2Days to EveryDay. If Hours1Days is set to EveryDay, secondary contact hours do not apply. Hours2Days cannot be set to the same value as Hours1Days.
     * - minOccurs: 0
     * @var string
     */
    public $Hours2Days;
    /**
     * The Hours2AnyTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not a user is available to be contacted 24 hours a day during the range of days specified using the Hours2Days element. True indicates the user is available 24 hours a day, false indicates otherwise. In the case
     * of this field being true, all values provided for Hours2From and Hours2To will be ignored. In the case of this field being false, the values provided Hours2From and Hours2To will be considered.
     * - minOccurs: 0
     * @var bool
     */
    public $Hours2AnyTime;
    /**
     * The Hours2From
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the starting time of day this eBay user is available for other eBay members to contact for the range of days specified using Hours2Days. Enter times in 30 minute increments from the top of the hour. That is, enter values
     * either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
     * - minOccurs: 0
     * @var string
     */
    public $Hours2From;
    /**
     * The Hours2To
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the ending time of day this eBay user is available for other eBay members to contact them for the range of days specified using Hours1Days. Enter times in 30 minute increments from the top of the hour. That is, enter values
     * either on the hour (:00) or 30 minutes past the hour (:30). Other values will be will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for TimeZoneID.
     * - minOccurs: 0
     * @var string
     */
    public $Hours2To;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ContactHoursDetailsType
     * @uses ContactHoursDetailsType::setTimeZoneID()
     * @uses ContactHoursDetailsType::setHours1Days()
     * @uses ContactHoursDetailsType::setHours1AnyTime()
     * @uses ContactHoursDetailsType::setHours1From()
     * @uses ContactHoursDetailsType::setHours1To()
     * @uses ContactHoursDetailsType::setHours2Days()
     * @uses ContactHoursDetailsType::setHours2AnyTime()
     * @uses ContactHoursDetailsType::setHours2From()
     * @uses ContactHoursDetailsType::setHours2To()
     * @uses ContactHoursDetailsType::setAny()
     * @param string $timeZoneID
     * @param string $hours1Days
     * @param bool $hours1AnyTime
     * @param string $hours1From
     * @param string $hours1To
     * @param string $hours2Days
     * @param bool $hours2AnyTime
     * @param string $hours2From
     * @param string $hours2To
     * @param \DOMDocument $any
     */
    public function __construct($timeZoneID = null, $hours1Days = null, $hours1AnyTime = null, $hours1From = null, $hours1To = null, $hours2Days = null, $hours2AnyTime = null, $hours2From = null, $hours2To = null, \DOMDocument $any = null)
    {
        $this
            ->setTimeZoneID($timeZoneID)
            ->setHours1Days($hours1Days)
            ->setHours1AnyTime($hours1AnyTime)
            ->setHours1From($hours1From)
            ->setHours1To($hours1To)
            ->setHours2Days($hours2Days)
            ->setHours2AnyTime($hours2AnyTime)
            ->setHours2From($hours2From)
            ->setHours2To($hours2To)
            ->setAny($any);
    }
    /**
     * Get TimeZoneID value
     * @return string|null
     */
    public function getTimeZoneID()
    {
        return $this->TimeZoneID;
    }
    /**
     * Set TimeZoneID value
     * @param string $timeZoneID
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setTimeZoneID($timeZoneID = null)
    {
        // validation for constraint: string
        if (!is_null($timeZoneID) && !is_string($timeZoneID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZoneID)), __LINE__);
        }
        $this->TimeZoneID = $timeZoneID;
        return $this;
    }
    /**
     * Get Hours1Days value
     * @return string|null
     */
    public function getHours1Days()
    {
        return $this->Hours1Days;
    }
    /**
     * Set Hours1Days value
     * @uses \macropage\ebaysdk\trading\EnumType\DaysCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DaysCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hours1Days
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours1Days($hours1Days = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DaysCodeType::valueIsValid($hours1Days)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hours1Days, implode(', ', \macropage\ebaysdk\trading\EnumType\DaysCodeType::getValidValues())), __LINE__);
        }
        $this->Hours1Days = $hours1Days;
        return $this;
    }
    /**
     * Get Hours1AnyTime value
     * @return bool|null
     */
    public function getHours1AnyTime()
    {
        return $this->Hours1AnyTime;
    }
    /**
     * Set Hours1AnyTime value
     * @param bool $hours1AnyTime
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours1AnyTime($hours1AnyTime = null)
    {
        // validation for constraint: boolean
        if (!is_null($hours1AnyTime) && !is_bool($hours1AnyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hours1AnyTime)), __LINE__);
        }
        $this->Hours1AnyTime = $hours1AnyTime;
        return $this;
    }
    /**
     * Get Hours1From value
     * @return string|null
     */
    public function getHours1From()
    {
        return $this->Hours1From;
    }
    /**
     * Set Hours1From value
     * @param string $hours1From
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours1From($hours1From = null)
    {
        // validation for constraint: string
        if (!is_null($hours1From) && !is_string($hours1From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hours1From)), __LINE__);
        }
        $this->Hours1From = $hours1From;
        return $this;
    }
    /**
     * Get Hours1To value
     * @return string|null
     */
    public function getHours1To()
    {
        return $this->Hours1To;
    }
    /**
     * Set Hours1To value
     * @param string $hours1To
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours1To($hours1To = null)
    {
        // validation for constraint: string
        if (!is_null($hours1To) && !is_string($hours1To)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hours1To)), __LINE__);
        }
        $this->Hours1To = $hours1To;
        return $this;
    }
    /**
     * Get Hours2Days value
     * @return string|null
     */
    public function getHours2Days()
    {
        return $this->Hours2Days;
    }
    /**
     * Set Hours2Days value
     * @uses \macropage\ebaysdk\trading\EnumType\DaysCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DaysCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hours2Days
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours2Days($hours2Days = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DaysCodeType::valueIsValid($hours2Days)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hours2Days, implode(', ', \macropage\ebaysdk\trading\EnumType\DaysCodeType::getValidValues())), __LINE__);
        }
        $this->Hours2Days = $hours2Days;
        return $this;
    }
    /**
     * Get Hours2AnyTime value
     * @return bool|null
     */
    public function getHours2AnyTime()
    {
        return $this->Hours2AnyTime;
    }
    /**
     * Set Hours2AnyTime value
     * @param bool $hours2AnyTime
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours2AnyTime($hours2AnyTime = null)
    {
        // validation for constraint: boolean
        if (!is_null($hours2AnyTime) && !is_bool($hours2AnyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hours2AnyTime)), __LINE__);
        }
        $this->Hours2AnyTime = $hours2AnyTime;
        return $this;
    }
    /**
     * Get Hours2From value
     * @return string|null
     */
    public function getHours2From()
    {
        return $this->Hours2From;
    }
    /**
     * Set Hours2From value
     * @param string $hours2From
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours2From($hours2From = null)
    {
        // validation for constraint: string
        if (!is_null($hours2From) && !is_string($hours2From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hours2From)), __LINE__);
        }
        $this->Hours2From = $hours2From;
        return $this;
    }
    /**
     * Get Hours2To value
     * @return string|null
     */
    public function getHours2To()
    {
        return $this->Hours2To;
    }
    /**
     * Set Hours2To value
     * @param string $hours2To
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public function setHours2To($hours2To = null)
    {
        // validation for constraint: string
        if (!is_null($hours2To) && !is_string($hours2To)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hours2To)), __LINE__);
        }
        $this->Hours2To = $hours2To;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
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
