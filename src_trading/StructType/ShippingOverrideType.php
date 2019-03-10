<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingOverrideType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is reserved for internal or future use.
 * @subpackage Structs
 */
class ShippingOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServiceCostOverrideList
     * Meta informations extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
     */
    public $ShippingServiceCostOverrideList;
    /**
     * The DispatchTimeMaxOverride
     * Meta informations extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var int
     */
    public $DispatchTimeMaxOverride;
    /**
     * Constructor method for ShippingOverrideType
     * @uses ShippingOverrideType::setShippingServiceCostOverrideList()
     * @uses ShippingOverrideType::setDispatchTimeMaxOverride()
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @param int $dispatchTimeMaxOverride
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null, $dispatchTimeMaxOverride = null)
    {
        $this
            ->setShippingServiceCostOverrideList($shippingServiceCostOverrideList)
            ->setDispatchTimeMaxOverride($dispatchTimeMaxOverride);
    }
    /**
     * Get ShippingServiceCostOverrideList value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType|null
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->ShippingServiceCostOverrideList;
    }
    /**
     * Set ShippingServiceCostOverrideList value
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType
     */
    public function setShippingServiceCostOverrideList(\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null)
    {
        $this->ShippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        return $this;
    }
    /**
     * Get DispatchTimeMaxOverride value
     * @return int|null
     */
    public function getDispatchTimeMaxOverride()
    {
        return $this->DispatchTimeMaxOverride;
    }
    /**
     * Set DispatchTimeMaxOverride value
     * @param int $dispatchTimeMaxOverride
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType
     */
    public function setDispatchTimeMaxOverride($dispatchTimeMaxOverride = null)
    {
        // validation for constraint: int
        if (!is_null($dispatchTimeMaxOverride) && !is_numeric($dispatchTimeMaxOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dispatchTimeMaxOverride)), __LINE__);
        }
        $this->DispatchTimeMaxOverride = $dispatchTimeMaxOverride;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType
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
