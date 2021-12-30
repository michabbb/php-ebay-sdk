<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsDurationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for the return durations for domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsDurationCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsDuration
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $DomesticReturnsDuration = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DomesticReturnsDurationCodeType
     * @uses DomesticReturnsDurationCodeType::setDomesticReturnsDuration()
     * @uses DomesticReturnsDurationCodeType::setAny()
     * @param string[] $domesticReturnsDuration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $domesticReturnsDuration = null, $any = null)
    {
        $this
            ->setDomesticReturnsDuration($domesticReturnsDuration)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsDuration value
     * @return string[]
     */
    public function getDomesticReturnsDuration(): ?array
    {
        return $this->DomesticReturnsDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticReturnsDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticReturnsDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticReturnsDurationForArrayConstraintsFromSetDomesticReturnsDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem)) {
                $invalidValues[] = is_object($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) ? get_class($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem) : sprintf('%s(%s)', gettype($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem), var_export($domesticReturnsDurationCodeTypeDomesticReturnsDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DomesticReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $domesticReturnsDuration
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
     */
    public function setDomesticReturnsDuration(?array $domesticReturnsDuration = null): self
    {
        // validation for constraint: array
        if ('' !== ($domesticReturnsDurationArrayErrorMessage = self::validateDomesticReturnsDurationForArrayConstraintsFromSetDomesticReturnsDuration($domesticReturnsDuration))) {
            throw new InvalidArgumentException($domesticReturnsDurationArrayErrorMessage, __LINE__);
        }
        $this->DomesticReturnsDuration = $domesticReturnsDuration;
        
        return $this;
    }
    /**
     * Add item to DomesticReturnsDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
     */
    public function addToDomesticReturnsDuration(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsDurationCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsDuration[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
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
