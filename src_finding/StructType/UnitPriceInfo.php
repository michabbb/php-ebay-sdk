<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitPriceInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare
 * prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * @subpackage Structs
 */
class UnitPriceInfo extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following: <br/><br/> <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre>
     * @var string
     */
    public $type;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes.
     * @var float
     */
    public $quantity;
    /**
     * Constructor method for UnitPriceInfo
     * @uses UnitPriceInfo::setType()
     * @uses UnitPriceInfo::setQuantity()
     * @param string $type
     * @param float $quantity
     */
    public function __construct($type = null, $quantity = null)
    {
        $this
            ->setType($type)
            ->setQuantity($quantity);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \macropage\ebaysdk\finding\StructType\UnitPriceInfo
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get quantity value
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param float $quantity
     * @return \macropage\ebaysdk\finding\StructType\UnitPriceInfo
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\UnitPriceInfo
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
