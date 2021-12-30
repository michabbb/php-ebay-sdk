<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReportItems</b> container in the <b>VeROReportItems</b> request. The <b>ReportItems</b> container is an array of one or more eBay items which, according to the product's owner, are infringing upon the product
 * owner's copyright, trademark, or intellectual property rights.
 * @subpackage Structs
 */
class VeROReportItemsType extends AbstractStructBase
{
    /**
     * The ReportItem
     * Meta information extracted from the WSDL
     * - documentation: A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b>
     * fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReportItemType[]
     */
    protected ?array $ReportItem = null;
    /**
     * Constructor method for VeROReportItemsType
     * @uses VeROReportItemsType::setReportItem()
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType[] $reportItem
     */
    public function __construct(?array $reportItem = null)
    {
        $this
            ->setReportItem($reportItem);
    }
    /**
     * Get ReportItem value
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType[]
     */
    public function getReportItem(): ?array
    {
        return $this->ReportItem;
    }
    /**
     * This method is responsible for validating the values passed to the setReportItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReportItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReportItemForArrayConstraintsFromSetReportItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReportItemsTypeReportItemItem) {
            // validation for constraint: itemType
            if (!$veROReportItemsTypeReportItemItem instanceof \macropage\ebaysdk\trading\StructType\VeROReportItemType) {
                $invalidValues[] = is_object($veROReportItemsTypeReportItemItem) ? get_class($veROReportItemsTypeReportItemItem) : sprintf('%s(%s)', gettype($veROReportItemsTypeReportItemItem), var_export($veROReportItemsTypeReportItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReportItem property can only contain items of type \macropage\ebaysdk\trading\StructType\VeROReportItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReportItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType[] $reportItem
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType
     */
    public function setReportItem(?array $reportItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($reportItemArrayErrorMessage = self::validateReportItemForArrayConstraintsFromSetReportItem($reportItem))) {
            throw new InvalidArgumentException($reportItemArrayErrorMessage, __LINE__);
        }
        $this->ReportItem = $reportItem;
        
        return $this;
    }
    /**
     * Add item to ReportItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VeROReportItemType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsType
     */
    public function addToReportItem(\macropage\ebaysdk\trading\StructType\VeROReportItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VeROReportItemType) {
            throw new InvalidArgumentException(sprintf('The ReportItem property can only contain items of type \macropage\ebaysdk\trading\StructType\VeROReportItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReportItem[] = $item;
        
        return $this;
    }
}
