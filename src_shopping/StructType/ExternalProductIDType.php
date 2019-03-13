<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalProductIDType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated. </span>
 * @subpackage Structs
 */
class ExternalProductIDType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The ReturnSearchResultOnDuplicates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnSearchResultOnDuplicates;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The AlternateValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AlternateValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExternalProductIDType
     * @uses ExternalProductIDType::setValue()
     * @uses ExternalProductIDType::setReturnSearchResultOnDuplicates()
     * @uses ExternalProductIDType::setType()
     * @uses ExternalProductIDType::setAlternateValue()
     * @uses ExternalProductIDType::setAny()
     * @param string $value
     * @param bool $returnSearchResultOnDuplicates
     * @param string $type
     * @param string[] $alternateValue
     * @param \DOMDocument $any
     */
    public function __construct($value = null, $returnSearchResultOnDuplicates = null, $type = null, array $alternateValue = array(), \DOMDocument $any = null)
    {
        $this
            ->setValue($value)
            ->setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates)
            ->setType($type)
            ->setAlternateValue($alternateValue)
            ->setAny($any);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get ReturnSearchResultOnDuplicates value
     * @return bool|null
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->ReturnSearchResultOnDuplicates;
    }
    /**
     * Set ReturnSearchResultOnDuplicates value
     * @param bool $returnSearchResultOnDuplicates
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnSearchResultOnDuplicates) && !is_bool($returnSearchResultOnDuplicates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnSearchResultOnDuplicates)), __LINE__);
        }
        $this->ReturnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get AlternateValue value
     * @return string[]|null
     */
    public function getAlternateValue()
    {
        return $this->AlternateValue;
    }
    /**
     * Set AlternateValue value
     * @throws \InvalidArgumentException
     * @param string[] $alternateValue
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setAlternateValue(array $alternateValue = array())
    {
        foreach ($alternateValue as $externalProductIDTypeAlternateValueItem) {
            // validation for constraint: itemType
            if (!is_string($externalProductIDTypeAlternateValueItem)) {
                throw new \InvalidArgumentException(sprintf('The AlternateValue property can only contain items of string, "%s" given', is_object($externalProductIDTypeAlternateValueItem) ? get_class($externalProductIDTypeAlternateValueItem) : gettype($externalProductIDTypeAlternateValueItem)), __LINE__);
            }
        }
        $this->AlternateValue = $alternateValue;
        return $this;
    }
    /**
     * Add item to AlternateValue value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function addToAlternateValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AlternateValue property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AlternateValue[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ExternalProductIDType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
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
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
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
