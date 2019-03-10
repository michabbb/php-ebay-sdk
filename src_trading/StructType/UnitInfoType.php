<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare
 * prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * @subpackage Structs
 */
class UnitInfoType extends AbstractStructBase
{
    /**
     * The UnitType
     * Meta informations extracted from the WSDL
     * - documentation: Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following: <br/> <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre> With <b>GetItem</b>, this field is
     * returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var string
     */
    public $UnitType;
    /**
     * The UnitQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes. <br/><br/>
     * With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var float
     */
    public $UnitQuantity;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnitInfoType
     * @uses UnitInfoType::setUnitType()
     * @uses UnitInfoType::setUnitQuantity()
     * @uses UnitInfoType::setAny()
     * @param string $unitType
     * @param float $unitQuantity
     * @param \DOMDocument $any
     */
    public function __construct($unitType = null, $unitQuantity = null, \DOMDocument $any = null)
    {
        $this
            ->setUnitType($unitType)
            ->setUnitQuantity($unitQuantity)
            ->setAny($any);
    }
    /**
     * Get UnitType value
     * @return string|null
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }
    /**
     * Set UnitType value
     * @param string $unitType
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
     */
    public function setUnitType($unitType = null)
    {
        // validation for constraint: string
        if (!is_null($unitType) && !is_string($unitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitType)), __LINE__);
        }
        $this->UnitType = $unitType;
        return $this;
    }
    /**
     * Get UnitQuantity value
     * @return float|null
     */
    public function getUnitQuantity()
    {
        return $this->UnitQuantity;
    }
    /**
     * Set UnitQuantity value
     * @param float $unitQuantity
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
     */
    public function setUnitQuantity($unitQuantity = null)
    {
        $this->UnitQuantity = $unitQuantity;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UnitInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
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
