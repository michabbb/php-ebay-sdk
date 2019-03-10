<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines year, month, and day as individual components of a date. Only applicable to use cases that support incomplete dates. Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 * @subpackage Structs
 */
class DateType extends AbstractStructBase
{
    /**
     * The Year
     * Meta informations extracted from the WSDL
     * - documentation: A year in the form YYYY.
     * - minOccurs: 0
     * @var int
     */
    public $Year;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - documentation: A calendar month (e.g., 2 or 02 for February). For ticket searches, Month is required if Day is specified.
     * - minOccurs: 0
     * @var int
     */
    public $Month;
    /**
     * The Day
     * Meta informations extracted from the WSDL
     * - documentation: A calendar day (e.g., 2 or 02). For ticket searches, Day is only valid if Month is also specified.
     * - minOccurs: 0
     * @var int
     */
    public $Day;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DateType
     * @uses DateType::setYear()
     * @uses DateType::setMonth()
     * @uses DateType::setDay()
     * @uses DateType::setAny()
     * @param int $year
     * @param int $month
     * @param int $day
     * @param \DOMDocument $any
     */
    public function __construct($year = null, $month = null, $day = null, \DOMDocument $any = null)
    {
        $this
            ->setYear($year)
            ->setMonth($month)
            ->setDay($day)
            ->setAny($any);
    }
    /**
     * Get Year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !is_numeric($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($day)), __LINE__);
        }
        $this->Day = $day;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DateType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DateType
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
     * @return \macropage\ebaysdk\trading\StructType\DateType
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
