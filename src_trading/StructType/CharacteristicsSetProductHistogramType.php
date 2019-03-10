<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetProductHistogramType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetProductHistogramType extends AbstractStructBase
{
    /**
     * The HistogramEntry
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HistogramEntryType[]
     */
    public $HistogramEntry;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharacteristicsSetProductHistogramType
     * @uses CharacteristicsSetProductHistogramType::setHistogramEntry()
     * @uses CharacteristicsSetProductHistogramType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType[] $histogramEntry
     * @param \DOMDocument $any
     */
    public function __construct(array $histogramEntry = array(), \DOMDocument $any = null)
    {
        $this
            ->setHistogramEntry($histogramEntry)
            ->setAny($any);
    }
    /**
     * Get HistogramEntry value
     * @return \macropage\ebaysdk\trading\StructType\HistogramEntryType[]|null
     */
    public function getHistogramEntry()
    {
        return $this->HistogramEntry;
    }
    /**
     * Set HistogramEntry value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType[] $histogramEntry
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
     */
    public function setHistogramEntry(array $histogramEntry = array())
    {
        foreach ($histogramEntry as $characteristicsSetProductHistogramTypeHistogramEntryItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetProductHistogramTypeHistogramEntryItem instanceof \macropage\ebaysdk\trading\StructType\HistogramEntryType) {
                throw new \InvalidArgumentException(sprintf('The HistogramEntry property can only contain items of \macropage\ebaysdk\trading\StructType\HistogramEntryType, "%s" given', is_object($characteristicsSetProductHistogramTypeHistogramEntryItem) ? get_class($characteristicsSetProductHistogramTypeHistogramEntryItem) : gettype($characteristicsSetProductHistogramTypeHistogramEntryItem)), __LINE__);
            }
        }
        $this->HistogramEntry = $histogramEntry;
        return $this;
    }
    /**
     * Add item to HistogramEntry value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\HistogramEntryType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
     */
    public function addToHistogramEntry(\macropage\ebaysdk\trading\StructType\HistogramEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\HistogramEntryType) {
            throw new \InvalidArgumentException(sprintf('The HistogramEntry property can only contain items of \macropage\ebaysdk\trading\StructType\HistogramEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HistogramEntry[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetProductHistogramType
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
