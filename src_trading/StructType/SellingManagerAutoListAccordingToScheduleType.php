<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListAccordingToScheduleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the options available for an Automated Listing Rule that keeps a fixed number of items on the site
 * @subpackage Structs
 */
class SellingManagerAutoListAccordingToScheduleType extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The day of the week on which items should be listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DayOfWeek;
    /**
     * The ListingPeriodInWeeks
     * Meta informations extracted from the WSDL
     * - documentation: The number of weeks between rule executions.
     * - minOccurs: 0
     * @var int
     */
    public $ListingPeriodInWeeks;
    /**
     * The ListAtSpecificTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time at which items should be listed.
     * - minOccurs: 0
     * @var string
     */
    public $ListAtSpecificTimeOfDay;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: The date from which the rule is active.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: The date after which the rule is disabled.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The MaxActiveItemCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of current, listed items required for the rule to no longer be run.
     * - minOccurs: 0
     * @var int
     */
    public $MaxActiveItemCount;
    /**
     * The ListingHoldInventoryLevel
     * Meta informations extracted from the WSDL
     * - documentation: Sets a minimum inventory level for listings of associated products to occur.
     * - minOccurs: 0
     * @var int
     */
    public $ListingHoldInventoryLevel;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoListAccordingToScheduleType
     * @uses SellingManagerAutoListAccordingToScheduleType::setDayOfWeek()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListingPeriodInWeeks()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListAtSpecificTimeOfDay()
     * @uses SellingManagerAutoListAccordingToScheduleType::setStartTime()
     * @uses SellingManagerAutoListAccordingToScheduleType::setEndTime()
     * @uses SellingManagerAutoListAccordingToScheduleType::setMaxActiveItemCount()
     * @uses SellingManagerAutoListAccordingToScheduleType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoListAccordingToScheduleType::setAny()
     * @param string[] $dayOfWeek
     * @param int $listingPeriodInWeeks
     * @param string $listAtSpecificTimeOfDay
     * @param string $startTime
     * @param string $endTime
     * @param int $maxActiveItemCount
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct(array $dayOfWeek = array(), $listingPeriodInWeeks = null, $listAtSpecificTimeOfDay = null, $startTime = null, $endTime = null, $maxActiveItemCount = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setListingPeriodInWeeks($listingPeriodInWeeks)
            ->setListAtSpecificTimeOfDay($listAtSpecificTimeOfDay)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setMaxActiveItemCount($maxActiveItemCount)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get DayOfWeek value
     * @return string[]|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $dayOfWeek
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setDayOfWeek(array $dayOfWeek = array())
    {
        $invalidValues = array();
        foreach ($dayOfWeek as $sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::valueIsValid($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem)) {
                $invalidValues[] = var_export($sellingManagerAutoListAccordingToScheduleTypeDayOfWeekItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Add item to DayOfWeek value
     * @uses \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function addToDayOfWeek($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\DayOfWeekCodeType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek[] = $item;
        return $this;
    }
    /**
     * Get ListingPeriodInWeeks value
     * @return int|null
     */
    public function getListingPeriodInWeeks()
    {
        return $this->ListingPeriodInWeeks;
    }
    /**
     * Set ListingPeriodInWeeks value
     * @param int $listingPeriodInWeeks
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingPeriodInWeeks($listingPeriodInWeeks = null)
    {
        // validation for constraint: int
        if (!is_null($listingPeriodInWeeks) && !is_numeric($listingPeriodInWeeks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listingPeriodInWeeks)), __LINE__);
        }
        $this->ListingPeriodInWeeks = $listingPeriodInWeeks;
        return $this;
    }
    /**
     * Get ListAtSpecificTimeOfDay value
     * @return string|null
     */
    public function getListAtSpecificTimeOfDay()
    {
        return $this->ListAtSpecificTimeOfDay;
    }
    /**
     * Set ListAtSpecificTimeOfDay value
     * @param string $listAtSpecificTimeOfDay
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListAtSpecificTimeOfDay($listAtSpecificTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($listAtSpecificTimeOfDay) && !is_string($listAtSpecificTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listAtSpecificTimeOfDay)), __LINE__);
        }
        $this->ListAtSpecificTimeOfDay = $listAtSpecificTimeOfDay;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get MaxActiveItemCount value
     * @return int|null
     */
    public function getMaxActiveItemCount()
    {
        return $this->MaxActiveItemCount;
    }
    /**
     * Set MaxActiveItemCount value
     * @param int $maxActiveItemCount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setMaxActiveItemCount($maxActiveItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxActiveItemCount) && !is_numeric($maxActiveItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxActiveItemCount)), __LINE__);
        }
        $this->MaxActiveItemCount = $maxActiveItemCount;
        return $this;
    }
    /**
     * Get ListingHoldInventoryLevel value
     * @return int|null
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->ListingHoldInventoryLevel;
    }
    /**
     * Set ListingHoldInventoryLevel value
     * @param int $listingHoldInventoryLevel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($listingHoldInventoryLevel) && !is_numeric($listingHoldInventoryLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listingHoldInventoryLevel)), __LINE__);
        }
        $this->ListingHoldInventoryLevel = $listingHoldInventoryLevel;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
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
