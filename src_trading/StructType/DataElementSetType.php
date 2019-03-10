<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataElementSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DataElementSetType extends AbstractStructBase
{
    /**
     * The DataElement
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DataElement;
    /**
     * The DataElementID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $DataElementID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The attributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is deprecated.
     * @var int
     */
    public $attributeSetID;
    /**
     * Constructor method for DataElementSetType
     * @uses DataElementSetType::setDataElement()
     * @uses DataElementSetType::setDataElementID()
     * @uses DataElementSetType::setAny()
     * @uses DataElementSetType::setAttributeSetID()
     * @param string $dataElement
     * @param int $dataElementID
     * @param \DOMDocument $any
     * @param int $attributeSetID
     */
    public function __construct($dataElement = null, $dataElementID = null, \DOMDocument $any = null, $attributeSetID = null)
    {
        $this
            ->setDataElement($dataElement)
            ->setDataElementID($dataElementID)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID);
    }
    /**
     * Get DataElement value
     * @return string|null
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }
    /**
     * Set DataElement value
     * @param string $dataElement
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setDataElement($dataElement = null)
    {
        // validation for constraint: string
        if (!is_null($dataElement) && !is_string($dataElement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataElement)), __LINE__);
        }
        $this->DataElement = $dataElement;
        return $this;
    }
    /**
     * Get DataElementID value
     * @return int|null
     */
    public function getDataElementID()
    {
        return $this->DataElementID;
    }
    /**
     * Set DataElementID value
     * @param int $dataElementID
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setDataElementID($dataElementID = null)
    {
        // validation for constraint: int
        if (!is_null($dataElementID) && !is_numeric($dataElementID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataElementID)), __LINE__);
        }
        $this->DataElementID = $dataElementID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DataElementSetType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
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
