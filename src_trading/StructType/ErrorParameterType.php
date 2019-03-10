<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorParameterType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
 * @subpackage Structs
 */
class ErrorParameterType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The ParamID
     * Meta informations extracted from the WSDL
     * - documentation: This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b>
     * field.
     * @var string
     */
    public $ParamID;
    /**
     * Constructor method for ErrorParameterType
     * @uses ErrorParameterType::setValue()
     * @uses ErrorParameterType::setAny()
     * @uses ErrorParameterType::setParamID()
     * @param string $value
     * @param \DOMDocument $any
     * @param string $paramID
     */
    public function __construct($value = null, \DOMDocument $any = null, $paramID = null)
    {
        $this
            ->setValue($value)
            ->setAny($any)
            ->setParamID($paramID);
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
     * @return \macropage\ebaysdk\trading\StructType\ErrorParameterType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ErrorParameterType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ErrorParameterType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get ParamID value
     * @return string|null
     */
    public function getParamID()
    {
        return $this->ParamID;
    }
    /**
     * Set ParamID value
     * @param string $paramID
     * @return \macropage\ebaysdk\trading\StructType\ErrorParameterType
     */
    public function setParamID($paramID = null)
    {
        // validation for constraint: string
        if (!is_null($paramID) && !is_string($paramID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramID)), __LINE__);
        }
        $this->ParamID = $paramID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ErrorParameterType
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
