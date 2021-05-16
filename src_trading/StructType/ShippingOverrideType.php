<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingOverrideType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is reserved for internal or future use.
 * @subpackage Structs
 */
class ShippingOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServiceCostOverrideList
     * Meta information extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList = null;
    /**
     * The DispatchTimeMaxOverride
     * Meta information extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DispatchTimeMaxOverride = null;
    /**
     * Constructor method for ShippingOverrideType
     * @uses ShippingOverrideType::setShippingServiceCostOverrideList()
     * @uses ShippingOverrideType::setDispatchTimeMaxOverride()
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @param int $dispatchTimeMaxOverride
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null, ?int $dispatchTimeMaxOverride = null)
    {
        $this
            ->setShippingServiceCostOverrideList($shippingServiceCostOverrideList)
            ->setDispatchTimeMaxOverride($dispatchTimeMaxOverride);
    }
    /**
     * Get ShippingServiceCostOverrideList value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType|null
     */
    public function getShippingServiceCostOverrideList(): ?\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
    {
        return $this->ShippingServiceCostOverrideList;
    }
    /**
     * Set ShippingServiceCostOverrideList value
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType
     */
    public function setShippingServiceCostOverrideList(?\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null): self
    {
        $this->ShippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        
        return $this;
    }
    /**
     * Get DispatchTimeMaxOverride value
     * @return int|null
     */
    public function getDispatchTimeMaxOverride(): ?int
    {
        return $this->DispatchTimeMaxOverride;
    }
    /**
     * Set DispatchTimeMaxOverride value
     * @param int $dispatchTimeMaxOverride
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType
     */
    public function setDispatchTimeMaxOverride(?int $dispatchTimeMaxOverride = null): self
    {
        // validation for constraint: int
        if (!is_null($dispatchTimeMaxOverride) && !(is_int($dispatchTimeMaxOverride) || ctype_digit($dispatchTimeMaxOverride))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dispatchTimeMaxOverride, true), gettype($dispatchTimeMaxOverride)), __LINE__);
        }
        $this->DispatchTimeMaxOverride = $dispatchTimeMaxOverride;
        
        return $this;
    }
}
