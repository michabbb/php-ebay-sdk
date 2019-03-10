<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistanceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DistanceType extends AbstractStructBase
{
    /**
     * The DistanceMeasurement
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $DistanceMeasurement;
    /**
     * The DistanceUnit
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DistanceUnit;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DistanceType
     * @uses DistanceType::setDistanceMeasurement()
     * @uses DistanceType::setDistanceUnit()
     * @uses DistanceType::setAny()
     * @param int $distanceMeasurement
     * @param string $distanceUnit
     * @param \DOMDocument $any
     */
    public function __construct($distanceMeasurement = null, $distanceUnit = null, \DOMDocument $any = null)
    {
        $this
            ->setDistanceMeasurement($distanceMeasurement)
            ->setDistanceUnit($distanceUnit)
            ->setAny($any);
    }
    /**
     * Get DistanceMeasurement value
     * @return int|null
     */
    public function getDistanceMeasurement()
    {
        return $this->DistanceMeasurement;
    }
    /**
     * Set DistanceMeasurement value
     * @param int $distanceMeasurement
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
     */
    public function setDistanceMeasurement($distanceMeasurement = null)
    {
        // validation for constraint: int
        if (!is_null($distanceMeasurement) && !is_numeric($distanceMeasurement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distanceMeasurement)), __LINE__);
        }
        $this->DistanceMeasurement = $distanceMeasurement;
        return $this;
    }
    /**
     * Get DistanceUnit value
     * @return string|null
     */
    public function getDistanceUnit()
    {
        return $this->DistanceUnit;
    }
    /**
     * Set DistanceUnit value
     * @param string $distanceUnit
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
     */
    public function setDistanceUnit($distanceUnit = null)
    {
        // validation for constraint: string
        if (!is_null($distanceUnit) && !is_string($distanceUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distanceUnit)), __LINE__);
        }
        $this->DistanceUnit = $distanceUnit;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DistanceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
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
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
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
