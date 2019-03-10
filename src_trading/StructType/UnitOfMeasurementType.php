<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementType extends AbstractStructBase
{
    /**
     * The AlternateText
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AlternateText;
    /**
     * The SuggestedText
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SuggestedText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnitOfMeasurementType
     * @uses UnitOfMeasurementType::setAlternateText()
     * @uses UnitOfMeasurementType::setSuggestedText()
     * @uses UnitOfMeasurementType::setAny()
     * @param string[] $alternateText
     * @param string $suggestedText
     * @param \DOMDocument $any
     */
    public function __construct(array $alternateText = array(), $suggestedText = null, \DOMDocument $any = null)
    {
        $this
            ->setAlternateText($alternateText)
            ->setSuggestedText($suggestedText)
            ->setAny($any);
    }
    /**
     * Get AlternateText value
     * @return string[]|null
     */
    public function getAlternateText()
    {
        return $this->AlternateText;
    }
    /**
     * Set AlternateText value
     * @throws \InvalidArgumentException
     * @param string[] $alternateText
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function setAlternateText(array $alternateText = array())
    {
        foreach ($alternateText as $unitOfMeasurementTypeAlternateTextItem) {
            // validation for constraint: itemType
            if (!is_string($unitOfMeasurementTypeAlternateTextItem)) {
                throw new \InvalidArgumentException(sprintf('The AlternateText property can only contain items of string, "%s" given', is_object($unitOfMeasurementTypeAlternateTextItem) ? get_class($unitOfMeasurementTypeAlternateTextItem) : gettype($unitOfMeasurementTypeAlternateTextItem)), __LINE__);
            }
        }
        $this->AlternateText = $alternateText;
        return $this;
    }
    /**
     * Add item to AlternateText value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function addToAlternateText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AlternateText property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AlternateText[] = $item;
        return $this;
    }
    /**
     * Get SuggestedText value
     * @return string|null
     */
    public function getSuggestedText()
    {
        return $this->SuggestedText;
    }
    /**
     * Set SuggestedText value
     * @param string $suggestedText
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function setSuggestedText($suggestedText = null)
    {
        // validation for constraint: string
        if (!is_null($suggestedText) && !is_string($suggestedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suggestedText)), __LINE__);
        }
        $this->SuggestedText = $suggestedText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
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
