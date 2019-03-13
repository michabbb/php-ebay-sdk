<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: All information corresponding to an individual compatibility by application. <br><br> Each <b>Compatibility</b> container consists of the specifications for a motor vehicle that is compatible with the motor part or accessory.
 * @subpackage Structs
 */
class ItemCompatibilityType extends AbstractStructBase
{
    /**
     * The NameValueList
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and
     * 'Engine'.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * The CompatibilityNotes
     * Meta informations extracted from the WSDL
     * - documentation: This field contains any notes pertaining to the compatibility being specified. This field is only returned if set for the compatible vehicle.
     * - minOccurs: 0
     * @var string
     */
    public $CompatibilityNotes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityType
     * @uses ItemCompatibilityType::setNameValueList()
     * @uses ItemCompatibilityType::setCompatibilityNotes()
     * @uses ItemCompatibilityType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @param string $compatibilityNotes
     * @param \DOMDocument $any
     */
    public function __construct(array $nameValueList = array(), $compatibilityNotes = null, \DOMDocument $any = null)
    {
        $this
            ->setNameValueList($nameValueList)
            ->setCompatibilityNotes($compatibilityNotes)
            ->setAny($any);
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        foreach ($nameValueList as $itemCompatibilityTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityTypeNameValueListItem instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
                throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\shopping\StructType\NameValueListType, "%s" given', is_object($itemCompatibilityTypeNameValueListItem) ? get_class($itemCompatibilityTypeNameValueListItem) : gettype($itemCompatibilityTypeNameValueListItem)), __LINE__);
            }
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function addToNameValueList(\macropage\ebaysdk\shopping\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\shopping\StructType\NameValueListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Get CompatibilityNotes value
     * @return string|null
     */
    public function getCompatibilityNotes()
    {
        return $this->CompatibilityNotes;
    }
    /**
     * Set CompatibilityNotes value
     * @param string $compatibilityNotes
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function setCompatibilityNotes($compatibilityNotes = null)
    {
        // validation for constraint: string
        if (!is_null($compatibilityNotes) && !is_string($compatibilityNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compatibilityNotes)), __LINE__);
        }
        $this->CompatibilityNotes = $compatibilityNotes;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
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
