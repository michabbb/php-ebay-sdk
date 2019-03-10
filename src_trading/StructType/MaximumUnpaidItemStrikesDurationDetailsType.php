<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesDurationDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>MaximumUnpaidItemStrikesDuration</b> container that is returned in <b>GeteBayDetails</b>. The <b>MaximumUnpaidItemStrikesDuration</b> container indicates the periods of time that can be used when evaluating how
 * many unpaid item strikes against a buyer during this given period will exclude the prospective buyer from purchasing the line item.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesDurationDetailsType extends AbstractStructBase
{
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - documentation: The period is the number of days (last 60 days, last 180 days, etc.) during which the buyer's unpaid item strikes are calculated. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string
     */
    public $Period;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The description of the period, such as 'month', 'quarter', or 'half a year'. The data in this field can be used as a label in your application's display. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesDurationDetailsType
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setPeriod()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setDescription()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setAny()
     * @param string $period
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($period = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setPeriod($period)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @uses \macropage\ebaysdk\trading\EnumType\PeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $period
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PeriodCodeType::valueIsValid($period)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $period, implode(', ', \macropage\ebaysdk\trading\EnumType\PeriodCodeType::getValidValues())), __LINE__);
        }
        $this->Period = $period;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
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
