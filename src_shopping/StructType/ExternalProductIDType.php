<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalProductIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated. </span>
 * @subpackage Structs
 */
class ExternalProductIDType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The ReturnSearchResultOnDuplicates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnSearchResultOnDuplicates = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The AlternateValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $AlternateValue = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $value = null, ?bool $returnSearchResultOnDuplicates = null, ?string $type = null, ?array $alternateValue = null, $any = null)
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
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
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
     * Get ReturnSearchResultOnDuplicates value
     * @return bool|null
     */
    public function getReturnSearchResultOnDuplicates(): ?bool
    {
        return $this->ReturnSearchResultOnDuplicates;
    }
    /**
     * Set ReturnSearchResultOnDuplicates value
     * @param bool $returnSearchResultOnDuplicates
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setReturnSearchResultOnDuplicates(?bool $returnSearchResultOnDuplicates = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnSearchResultOnDuplicates) && !is_bool($returnSearchResultOnDuplicates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnSearchResultOnDuplicates, true), gettype($returnSearchResultOnDuplicates)), __LINE__);
        }
        $this->ReturnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\ExternalProductCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get AlternateValue value
     * @return string[]
     */
    public function getAlternateValue(): ?array
    {
        return $this->AlternateValue;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateValueForArrayConstraintsFromSetAlternateValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalProductIDTypeAlternateValueItem) {
            // validation for constraint: itemType
            if (!is_string($externalProductIDTypeAlternateValueItem)) {
                $invalidValues[] = is_object($externalProductIDTypeAlternateValueItem) ? get_class($externalProductIDTypeAlternateValueItem) : sprintf('%s(%s)', gettype($externalProductIDTypeAlternateValueItem), var_export($externalProductIDTypeAlternateValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlternateValue value
     * @throws InvalidArgumentException
     * @param string[] $alternateValue
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function setAlternateValue(?array $alternateValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($alternateValueArrayErrorMessage = self::validateAlternateValueForArrayConstraintsFromSetAlternateValue($alternateValue))) {
            throw new InvalidArgumentException($alternateValueArrayErrorMessage, __LINE__);
        }
        $this->AlternateValue = $alternateValue;
        
        return $this;
    }
    /**
     * Add item to AlternateValue value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
     */
    public function addToAlternateValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AlternateValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AlternateValue[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ExternalProductIDType
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
}
