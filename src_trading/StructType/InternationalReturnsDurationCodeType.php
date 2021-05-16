<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsDurationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for the return durations for international returns.
 * @subpackage Structs
 */
class InternationalReturnsDurationCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsDuration
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $InternationalReturnsDuration = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for InternationalReturnsDurationCodeType
     * @uses InternationalReturnsDurationCodeType::setInternationalReturnsDuration()
     * @uses InternationalReturnsDurationCodeType::setAny()
     * @param string[] $internationalReturnsDuration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $internationalReturnsDuration = [], $any = null)
    {
        $this
            ->setInternationalReturnsDuration($internationalReturnsDuration)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsDuration value
     * @return string[]
     */
    public function getInternationalReturnsDuration(): array
    {
        return $this->InternationalReturnsDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsDurationForArrayConstraintsFromSetInternationalReturnsDuration(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem)) {
                $invalidValues[] = is_object($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) ? get_class($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem) : sprintf('%s(%s)', gettype($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem), var_export($internationalReturnsDurationCodeTypeInternationalReturnsDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $internationalReturnsDuration
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType
     */
    public function setInternationalReturnsDuration(array $internationalReturnsDuration = []): self
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsDurationArrayErrorMessage = self::validateInternationalReturnsDurationForArrayConstraintsFromSetInternationalReturnsDuration($internationalReturnsDuration))) {
            throw new InvalidArgumentException($internationalReturnsDurationArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsDuration = $internationalReturnsDuration;
        
        return $this;
    }
    /**
     * Add item to InternationalReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType
     */
    public function addToInternationalReturnsDuration(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsDuration[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType
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
