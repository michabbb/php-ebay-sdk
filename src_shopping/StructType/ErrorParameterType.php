<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorParameterType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
 * @subpackage Structs
 */
class ErrorParameterType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The ParamID
     * Meta information extracted from the WSDL
     * - documentation: This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b>
     * field.
     * @var string|null
     */
    protected ?string $ParamID = null;
    /**
     * Constructor method for ErrorParameterType
     * @uses ErrorParameterType::setValue()
     * @uses ErrorParameterType::setAny()
     * @uses ErrorParameterType::setParamID()
     * @param string $value
     * @param \DOMDocument|string|null $any
     * @param string $paramID
     */
    public function __construct(?string $value = null, $any = null, ?string $paramID = null)
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
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\shopping\StructType\ErrorParameterType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ErrorParameterType
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
    /**
     * Get ParamID value
     * @return string|null
     */
    public function getParamID(): ?string
    {
        return $this->ParamID;
    }
    /**
     * Set ParamID value
     * @param string $paramID
     * @return \macropage\ebaysdk\shopping\StructType\ErrorParameterType
     */
    public function setParamID(?string $paramID = null): self
    {
        // validation for constraint: string
        if (!is_null($paramID) && !is_string($paramID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramID, true), gettype($paramID)), __LINE__);
        }
        $this->ParamID = $paramID;
        
        return $this;
    }
}
