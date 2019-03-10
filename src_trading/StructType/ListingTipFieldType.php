<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipFieldType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipFieldType extends AbstractStructBase
{
    /**
     * The ListingTipFieldID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipFieldID;
    /**
     * The FieldTip
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FieldTip;
    /**
     * The CurrentFieldText
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CurrentFieldText;
    /**
     * The CurrentFieldValue
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CurrentFieldValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipFieldType
     * @uses ListingTipFieldType::setListingTipFieldID()
     * @uses ListingTipFieldType::setFieldTip()
     * @uses ListingTipFieldType::setCurrentFieldText()
     * @uses ListingTipFieldType::setCurrentFieldValue()
     * @uses ListingTipFieldType::setAny()
     * @param string $listingTipFieldID
     * @param string $fieldTip
     * @param string $currentFieldText
     * @param string $currentFieldValue
     * @param \DOMDocument $any
     */
    public function __construct($listingTipFieldID = null, $fieldTip = null, $currentFieldText = null, $currentFieldValue = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipFieldID($listingTipFieldID)
            ->setFieldTip($fieldTip)
            ->setCurrentFieldText($currentFieldText)
            ->setCurrentFieldValue($currentFieldValue)
            ->setAny($any);
    }
    /**
     * Get ListingTipFieldID value
     * @return string|null
     */
    public function getListingTipFieldID()
    {
        return $this->ListingTipFieldID;
    }
    /**
     * Set ListingTipFieldID value
     * @param string $listingTipFieldID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setListingTipFieldID($listingTipFieldID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipFieldID) && !is_string($listingTipFieldID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingTipFieldID)), __LINE__);
        }
        $this->ListingTipFieldID = $listingTipFieldID;
        return $this;
    }
    /**
     * Get FieldTip value
     * @return string|null
     */
    public function getFieldTip()
    {
        return $this->FieldTip;
    }
    /**
     * Set FieldTip value
     * @param string $fieldTip
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setFieldTip($fieldTip = null)
    {
        // validation for constraint: string
        if (!is_null($fieldTip) && !is_string($fieldTip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldTip)), __LINE__);
        }
        $this->FieldTip = $fieldTip;
        return $this;
    }
    /**
     * Get CurrentFieldText value
     * @return string|null
     */
    public function getCurrentFieldText()
    {
        return $this->CurrentFieldText;
    }
    /**
     * Set CurrentFieldText value
     * @param string $currentFieldText
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setCurrentFieldText($currentFieldText = null)
    {
        // validation for constraint: string
        if (!is_null($currentFieldText) && !is_string($currentFieldText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentFieldText)), __LINE__);
        }
        $this->CurrentFieldText = $currentFieldText;
        return $this;
    }
    /**
     * Get CurrentFieldValue value
     * @return string|null
     */
    public function getCurrentFieldValue()
    {
        return $this->CurrentFieldValue;
    }
    /**
     * Set CurrentFieldValue value
     * @param string $currentFieldValue
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setCurrentFieldValue($currentFieldValue = null)
    {
        // validation for constraint: string
        if (!is_null($currentFieldValue) && !is_string($currentFieldValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentFieldValue)), __LINE__);
        }
        $this->CurrentFieldValue = $currentFieldValue;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingTipFieldType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
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
