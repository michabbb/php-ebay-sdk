<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesInfoDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to sellers.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesInfoDetailsType extends AbstractStructBase
{
    /**
     * The MaximumUnpaidItemStrikesCount
     * Meta information extracted from the WSDL
     * - documentation: The number of the maximum unpaid item strikes. This is applicable only to sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $MaximumUnpaidItemStrikesCount = null;
    /**
     * The MaximumUnpaidItemStrikesDuration
     * Meta information extracted from the WSDL
     * - documentation: Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    protected ?array $MaximumUnpaidItemStrikesDuration = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaximumUnpaidItemStrikesInfoDetailsType
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesCount()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesDuration()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null, ?array $maximumUnpaidItemStrikesDuration = null, $any = null)
    {
        $this
            ->setMaximumUnpaidItemStrikesCount($maximumUnpaidItemStrikesCount)
            ->setMaximumUnpaidItemStrikesDuration($maximumUnpaidItemStrikesDuration)
            ->setAny($any);
    }
    /**
     * Get MaximumUnpaidItemStrikesCount value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType|null
     */
    public function getMaximumUnpaidItemStrikesCount(): ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
    {
        return $this->MaximumUnpaidItemStrikesCount;
    }
    /**
     * Set MaximumUnpaidItemStrikesCount value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesCount(?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null): self
    {
        $this->MaximumUnpaidItemStrikesCount = $maximumUnpaidItemStrikesCount;
        
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesDuration value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    public function getMaximumUnpaidItemStrikesDuration(): ?array
    {
        return $this->MaximumUnpaidItemStrikesDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setMaximumUnpaidItemStrikesDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaximumUnpaidItemStrikesDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaximumUnpaidItemStrikesDurationForArrayConstraintsFromSetMaximumUnpaidItemStrikesDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) {
            // validation for constraint: itemType
            if (!$maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem instanceof \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
                $invalidValues[] = is_object($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) ? get_class($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) : sprintf('%s(%s)', gettype($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem), var_export($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MaximumUnpaidItemStrikesDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesDuration(?array $maximumUnpaidItemStrikesDuration = null): self
    {
        // validation for constraint: array
        if ('' !== ($maximumUnpaidItemStrikesDurationArrayErrorMessage = self::validateMaximumUnpaidItemStrikesDurationForArrayConstraintsFromSetMaximumUnpaidItemStrikesDuration($maximumUnpaidItemStrikesDuration))) {
            throw new InvalidArgumentException($maximumUnpaidItemStrikesDurationArrayErrorMessage, __LINE__);
        }
        $this->MaximumUnpaidItemStrikesDuration = $maximumUnpaidItemStrikesDuration;
        
        return $this;
    }
    /**
     * Add item to MaximumUnpaidItemStrikesDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function addToMaximumUnpaidItemStrikesDuration(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
            throw new InvalidArgumentException(sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MaximumUnpaidItemStrikesDuration[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
