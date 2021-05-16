<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticRefundMethodCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling domestic returns.
 * @subpackage Structs
 */
class DomesticRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The DomesticRefundMethod
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DomesticRefundMethod = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DomesticRefundMethodCodeType
     * @uses DomesticRefundMethodCodeType::setDomesticRefundMethod()
     * @uses DomesticRefundMethodCodeType::setAny()
     * @param string[] $domesticRefundMethod
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $domesticRefundMethod = [], $any = null)
    {
        $this
            ->setDomesticRefundMethod($domesticRefundMethod)
            ->setAny($any);
    }
    /**
     * Get DomesticRefundMethod value
     * @return string[]
     */
    public function getDomesticRefundMethod(): array
    {
        return $this->DomesticRefundMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticRefundMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticRefundMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticRefundMethodForArrayConstraintsFromSetDomesticRefundMethod(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticRefundMethodCodeTypeDomesticRefundMethodItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($domesticRefundMethodCodeTypeDomesticRefundMethodItem)) {
                $invalidValues[] = is_object($domesticRefundMethodCodeTypeDomesticRefundMethodItem) ? get_class($domesticRefundMethodCodeTypeDomesticRefundMethodItem) : sprintf('%s(%s)', gettype($domesticRefundMethodCodeTypeDomesticRefundMethodItem), var_export($domesticRefundMethodCodeTypeDomesticRefundMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DomesticRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $domesticRefundMethod
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public function setDomesticRefundMethod(array $domesticRefundMethod = []): self
    {
        // validation for constraint: array
        if ('' !== ($domesticRefundMethodArrayErrorMessage = self::validateDomesticRefundMethodForArrayConstraintsFromSetDomesticRefundMethod($domesticRefundMethod))) {
            throw new InvalidArgumentException($domesticRefundMethodArrayErrorMessage, __LINE__);
        }
        $this->DomesticRefundMethod = $domesticRefundMethod;
        
        return $this;
    }
    /**
     * Add item to DomesticRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public function addToDomesticRefundMethod(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticRefundMethod[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
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
