<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetProductHistogramType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetProductHistogramType extends AbstractStructBase
{
    /**
     * The HistogramEntry
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HistogramEntryType[]
     */
    protected ?array $HistogramEntry = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharacteristicsSetProductHistogramType
     * @uses CharacteristicsSetProductHistogramType::setHistogramEntry()
     * @uses CharacteristicsSetProductHistogramType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType[] $histogramEntry
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $histogramEntry = null, $any = null)
    {
        $this
            ->setHistogramEntry($histogramEntry)
            ->setAny($any);
    }
    /**
     * Get HistogramEntry value
     * @return \macropage\ebaysdk\trading\StructType\HistogramEntryType[]
     */
    public function getHistogramEntry(): ?array
    {
        return $this->HistogramEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setHistogramEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistogramEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistogramEntryForArrayConstraintsFromSetHistogramEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicsSetProductHistogramTypeHistogramEntryItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetProductHistogramTypeHistogramEntryItem instanceof \macropage\ebaysdk\trading\StructType\HistogramEntryType) {
                $invalidValues[] = is_object($characteristicsSetProductHistogramTypeHistogramEntryItem) ? get_class($characteristicsSetProductHistogramTypeHistogramEntryItem) : sprintf('%s(%s)', gettype($characteristicsSetProductHistogramTypeHistogramEntryItem), var_export($characteristicsSetProductHistogramTypeHistogramEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HistogramEntry property can only contain items of type \macropage\ebaysdk\trading\StructType\HistogramEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HistogramEntry value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType[] $histogramEntry
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
     */
    public function setHistogramEntry(?array $histogramEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($histogramEntryArrayErrorMessage = self::validateHistogramEntryForArrayConstraintsFromSetHistogramEntry($histogramEntry))) {
            throw new InvalidArgumentException($histogramEntryArrayErrorMessage, __LINE__);
        }
        $this->HistogramEntry = $histogramEntry;
        
        return $this;
    }
    /**
     * Add item to HistogramEntry value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
     */
    public function addToHistogramEntry(\macropage\ebaysdk\trading\StructType\HistogramEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\HistogramEntryType) {
            throw new InvalidArgumentException(sprintf('The HistogramEntry property can only contain items of type \macropage\ebaysdk\trading\StructType\HistogramEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HistogramEntry[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
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
