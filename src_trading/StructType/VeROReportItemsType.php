<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ReportItems</b> container in the <b>VeROReportItems</b> request. The <b>ReportItems</b> container is an array of one or more eBay items which, according to the product's owner, are infringing upon the product
 * owner's copyright, trademark, or intellectual property rights.
 * @subpackage Structs
 */
class VeROReportItemsType extends AbstractStructBase
{
    /**
     * The ReportItem
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b>
     * fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportItemType[]
     */
    public $ReportItem;
    /**
     * Constructor method for VeROReportItemsType
     * @uses VeROReportItemsType::setReportItem()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType[] $reportItem
     */
    public function __construct(array $reportItem = array())
    {
        $this
            ->setReportItem($reportItem);
    }
    /**
     * Get ReportItem value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType[]|null
     */
    public function getReportItem()
    {
        return $this->ReportItem;
    }
    /**
     * Set ReportItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType[] $reportItem
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType
     */
    public function setReportItem(array $reportItem = array())
    {
        foreach ($reportItem as $veROReportItemsTypeReportItemItem) {
            // validation for constraint: itemType
            if (!$veROReportItemsTypeReportItemItem instanceof \macropage\ebaysdk\trading\StructType\VeROReportItemType) {
                throw new \InvalidArgumentException(sprintf('The ReportItem property can only contain items of \macropage\ebaysdk\trading\StructType\VeROReportItemType, "%s" given', is_object($veROReportItemsTypeReportItemItem) ? get_class($veROReportItemsTypeReportItemItem) : gettype($veROReportItemsTypeReportItemItem)), __LINE__);
            }
        }
        $this->ReportItem = $reportItem;
        return $this;
    }
    /**
     * Add item to ReportItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType
     */
    public function addToReportItem(\macropage\ebaysdk\trading\StructType\VeROReportItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VeROReportItemType) {
            throw new \InvalidArgumentException(sprintf('The ReportItem property can only contain items of \macropage\ebaysdk\trading\StructType\VeROReportItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReportItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType
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
