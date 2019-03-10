<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReasonCodeDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for reason code details for all sites.
 * @subpackage Structs
 */
class VeROReasonCodeDetailsType extends AbstractStructBase
{
    /**
     * The VeROSiteDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains reason code details for a site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROSiteDetailType[]
     */
    public $VeROSiteDetail;
    /**
     * Constructor method for VeROReasonCodeDetailsType
     * @uses VeROReasonCodeDetailsType::setVeROSiteDetail()
     * @param \macropage\ebaysdk\trading\StructType\VeROSiteDetailType[] $veROSiteDetail
     */
    public function __construct(array $veROSiteDetail = array())
    {
        $this
            ->setVeROSiteDetail($veROSiteDetail);
    }
    /**
     * Get VeROSiteDetail value
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType[]|null
     */
    public function getVeROSiteDetail()
    {
        return $this->VeROSiteDetail;
    }
    /**
     * Set VeROSiteDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROSiteDetailType[] $veROSiteDetail
     * @return \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType
     */
    public function setVeROSiteDetail(array $veROSiteDetail = array())
    {
        foreach ($veROSiteDetail as $veROReasonCodeDetailsTypeVeROSiteDetailItem) {
            // validation for constraint: itemType
            if (!$veROReasonCodeDetailsTypeVeROSiteDetailItem instanceof \macropage\ebaysdk\trading\StructType\VeROSiteDetailType) {
                throw new \InvalidArgumentException(sprintf('The VeROSiteDetail property can only contain items of \macropage\ebaysdk\trading\StructType\VeROSiteDetailType, "%s" given', is_object($veROReasonCodeDetailsTypeVeROSiteDetailItem) ? get_class($veROReasonCodeDetailsTypeVeROSiteDetailItem) : gettype($veROReasonCodeDetailsTypeVeROSiteDetailItem)), __LINE__);
            }
        }
        $this->VeROSiteDetail = $veROSiteDetail;
        return $this;
    }
    /**
     * Add item to VeROSiteDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROSiteDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType
     */
    public function addToVeROSiteDetail(\macropage\ebaysdk\trading\StructType\VeROSiteDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VeROSiteDetailType) {
            throw new \InvalidArgumentException(sprintf('The VeROSiteDetail property can only contain items of \macropage\ebaysdk\trading\StructType\VeROSiteDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VeROSiteDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType
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
