<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalRefundMethodCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for handling international returns.
 * @subpackage Structs
 */
class InternationalRefundMethodCodeType extends AbstractStructBase
{
    /**
     * The InternationalRefundMethod
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for handling international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $InternationalRefundMethod = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for InternationalRefundMethodCodeType
     * @uses InternationalRefundMethodCodeType::setInternationalRefundMethod()
     * @uses InternationalRefundMethodCodeType::setAny()
     * @param string[] $internationalRefundMethod
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $internationalRefundMethod = null, $any = null)
    {
        $this
            ->setInternationalRefundMethod($internationalRefundMethod)
            ->setAny($any);
    }
    /**
     * Get InternationalRefundMethod value
     * @return string[]
     */
    public function getInternationalRefundMethod(): ?array
    {
        return $this->InternationalRefundMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalRefundMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalRefundMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalRefundMethodForArrayConstraintsFromSetInternationalRefundMethod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalRefundMethodCodeTypeInternationalRefundMethodItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($internationalRefundMethodCodeTypeInternationalRefundMethodItem)) {
                $invalidValues[] = is_object($internationalRefundMethodCodeTypeInternationalRefundMethodItem) ? get_class($internationalRefundMethodCodeTypeInternationalRefundMethodItem) : sprintf('%s(%s)', gettype($internationalRefundMethodCodeTypeInternationalRefundMethodItem), var_export($internationalRefundMethodCodeTypeInternationalRefundMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $internationalRefundMethod
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public function setInternationalRefundMethod(?array $internationalRefundMethod = null): self
    {
        // validation for constraint: array
        if ('' !== ($internationalRefundMethodArrayErrorMessage = self::validateInternationalRefundMethodForArrayConstraintsFromSetInternationalRefundMethod($internationalRefundMethod))) {
            throw new InvalidArgumentException($internationalRefundMethodArrayErrorMessage, __LINE__);
        }
        $this->InternationalRefundMethod = $internationalRefundMethod;
        
        return $this;
    }
    /**
     * Add item to InternationalRefundMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public function addToInternationalRefundMethod(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsRefundMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalRefundMethod[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
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
