<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportedItemDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for a list of reported items. Can contain zero, one, or multiple VeROReportedItemType objects, each of which conveys the data for one item listing.
 * @subpackage Structs
 */
class VeROReportedItemDetailsType extends AbstractStructBase
{
    /**
     * The ReportedItem
     * Meta information extracted from the WSDL
     * - documentation: Contains the data and status of a reported item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportedItemType[]
     */
    protected array $ReportedItem = [];
    /**
     * Constructor method for VeROReportedItemDetailsType
     * @uses VeROReportedItemDetailsType::setReportedItem()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType[] $reportedItem
     */
    public function __construct(array $reportedItem = [])
    {
        $this
            ->setReportedItem($reportedItem);
    }
    /**
     * Get ReportedItem value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType[]
     */
    public function getReportedItem(): array
    {
        return $this->ReportedItem;
    }
    /**
     * This method is responsible for validating the values passed to the setReportedItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReportedItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReportedItemForArrayConstraintsFromSetReportedItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReportedItemDetailsTypeReportedItemItem) {
            // validation for constraint: itemType
            if (!$veROReportedItemDetailsTypeReportedItemItem instanceof \macropage\ebaysdk\trading\StructType\VeROReportedItemType) {
                $invalidValues[] = is_object($veROReportedItemDetailsTypeReportedItemItem) ? get_class($veROReportedItemDetailsTypeReportedItemItem) : sprintf('%s(%s)', gettype($veROReportedItemDetailsTypeReportedItemItem), var_export($veROReportedItemDetailsTypeReportedItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReportedItem property can only contain items of type \macropage\ebaysdk\trading\StructType\VeROReportedItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReportedItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType[] $reportedItem
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
     */
    public function setReportedItem(array $reportedItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($reportedItemArrayErrorMessage = self::validateReportedItemForArrayConstraintsFromSetReportedItem($reportedItem))) {
            throw new InvalidArgumentException($reportedItemArrayErrorMessage, __LINE__);
        }
        $this->ReportedItem = $reportedItem;
        
        return $this;
    }
    /**
     * Add item to ReportedItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportedItemType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemDetailsType
     */
    public function addToReportedItem(\macropage\ebaysdk\trading\StructType\VeROReportedItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VeROReportedItemType) {
            throw new InvalidArgumentException(sprintf('The ReportedItem property can only contain items of type \macropage\ebaysdk\trading\StructType\VeROReportedItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReportedItem[] = $item;
        
        return $this;
    }
}
