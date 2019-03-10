<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SIFFTASRecommendationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SIFFTASRecommendationsType extends AbstractStructBase
{
    /**
     * The AttributeSetArray
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public $AttributeSetArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SIFFTASRecommendationsType
     * @uses SIFFTASRecommendationsType::setAttributeSetArray()
     * @uses SIFFTASRecommendationsType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray = null, \DOMDocument $any = null)
    {
        $this
            ->setAttributeSetArray($attributeSetArray)
            ->setAny($any);
    }
    /**
     * Get AttributeSetArray value
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType|null
     */
    public function getAttributeSetArray()
    {
        return $this->AttributeSetArray;
    }
    /**
     * Set AttributeSetArray value
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray
     * @return \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType
     */
    public function setAttributeSetArray(\macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray = null)
    {
        $this->AttributeSetArray = $attributeSetArray;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType
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
     * @return \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType
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
