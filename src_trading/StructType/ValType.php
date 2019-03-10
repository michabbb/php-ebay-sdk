<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site has been shut down, this type is no longer applicable.
 * @subpackage Structs
 */
class ValType extends AbstractStructBase
{
    /**
     * The ValueLiteral
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> For Half.com, use <b>AttributeArray.Attribute.Value.ValueLiteral</b> in listing
     * requests. <br/><br/> <b>AttributeArray.Attribute.Value.ValueLiteral</b> is required when you use <b>AddItem</b>. For the Half.com Notes attribute, the max length is 500 characters. You can revise <b>AttributeArray.Attribute.Value.ValueLiteral</b> for
     * Half.com listings.
     * - minOccurs: 0
     * @var string
     */
    public $ValueLiteral;
    /**
     * The SuggestedValueLiteral
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SuggestedValueLiteral;
    /**
     * The ValueID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     * - minOccurs: 0
     * @var int
     */
    public $ValueID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ValType
     * @uses ValType::setValueLiteral()
     * @uses ValType::setSuggestedValueLiteral()
     * @uses ValType::setValueID()
     * @uses ValType::setAny()
     * @param string $valueLiteral
     * @param string[] $suggestedValueLiteral
     * @param int $valueID
     * @param \DOMDocument $any
     */
    public function __construct($valueLiteral = null, array $suggestedValueLiteral = array(), $valueID = null, \DOMDocument $any = null)
    {
        $this
            ->setValueLiteral($valueLiteral)
            ->setSuggestedValueLiteral($suggestedValueLiteral)
            ->setValueID($valueID)
            ->setAny($any);
    }
    /**
     * Get ValueLiteral value
     * @return string|null
     */
    public function getValueLiteral()
    {
        return $this->ValueLiteral;
    }
    /**
     * Set ValueLiteral value
     * @param string $valueLiteral
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setValueLiteral($valueLiteral = null)
    {
        // validation for constraint: string
        if (!is_null($valueLiteral) && !is_string($valueLiteral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueLiteral)), __LINE__);
        }
        $this->ValueLiteral = $valueLiteral;
        return $this;
    }
    /**
     * Get SuggestedValueLiteral value
     * @return string[]|null
     */
    public function getSuggestedValueLiteral()
    {
        return $this->SuggestedValueLiteral;
    }
    /**
     * Set SuggestedValueLiteral value
     * @throws \InvalidArgumentException
     * @param string[] $suggestedValueLiteral
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setSuggestedValueLiteral(array $suggestedValueLiteral = array())
    {
        foreach ($suggestedValueLiteral as $valTypeSuggestedValueLiteralItem) {
            // validation for constraint: itemType
            if (!is_string($valTypeSuggestedValueLiteralItem)) {
                throw new \InvalidArgumentException(sprintf('The SuggestedValueLiteral property can only contain items of string, "%s" given', is_object($valTypeSuggestedValueLiteralItem) ? get_class($valTypeSuggestedValueLiteralItem) : gettype($valTypeSuggestedValueLiteralItem)), __LINE__);
            }
        }
        $this->SuggestedValueLiteral = $suggestedValueLiteral;
        return $this;
    }
    /**
     * Add item to SuggestedValueLiteral value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function addToSuggestedValueLiteral($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SuggestedValueLiteral property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SuggestedValueLiteral[] = $item;
        return $this;
    }
    /**
     * Get ValueID value
     * @return int|null
     */
    public function getValueID()
    {
        return $this->ValueID;
    }
    /**
     * Set ValueID value
     * @param int $valueID
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setValueID($valueID = null)
    {
        // validation for constraint: int
        if (!is_null($valueID) && !is_numeric($valueID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($valueID)), __LINE__);
        }
        $this->ValueID = $valueID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ValType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ValType
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
     * @return \macropage\ebaysdk\trading\StructType\ValType
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
