<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportedItemDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for a list of reported items. Can contain zero, one, or multiple VeROReportedItemType objects, each of which conveys the data for one item listing.
 * @subpackage Structs
 */
class VeROReportedItemDetailsType extends AbstractStructBase
{
    /**
     * The ReportedItem
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data and status of a reported item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportedItemType[]
     */
    public $ReportedItem;
    /**
     * Constructor method for VeROReportedItemDetailsType
     * @uses VeROReportedItemDetailsType::setReportedItem()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType[] $reportedItem
     */
    public function __construct(array $reportedItem = array())
    {
        $this
            ->setReportedItem($reportedItem);
    }
    /**
     * Get ReportedItem value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType[]|null
     */
    public function getReportedItem()
    {
        return $this->ReportedItem;
    }
    /**
     * Set ReportedItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType[] $reportedItem
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
     */
    public function setReportedItem(array $reportedItem = array())
    {
        foreach ($reportedItem as $veROReportedItemDetailsTypeReportedItemItem) {
            // validation for constraint: itemType
            if (!$veROReportedItemDetailsTypeReportedItemItem instanceof \macropage\ebaysdk\trading\StructType\VeROReportedItemType) {
                throw new \InvalidArgumentException(sprintf('The ReportedItem property can only contain items of \macropage\ebaysdk\trading\StructType\VeROReportedItemType, "%s" given', is_object($veROReportedItemDetailsTypeReportedItemItem) ? get_class($veROReportedItemDetailsTypeReportedItemItem) : gettype($veROReportedItemDetailsTypeReportedItemItem)), __LINE__);
            }
        }
        $this->ReportedItem = $reportedItem;
        return $this;
    }
    /**
     * Add item to ReportedItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
     */
    public function addToReportedItem(\macropage\ebaysdk\trading\StructType\VeROReportedItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VeROReportedItemType) {
            throw new \InvalidArgumentException(sprintf('The ReportedItem property can only contain items of \macropage\ebaysdk\trading\StructType\VeROReportedItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReportedItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
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
