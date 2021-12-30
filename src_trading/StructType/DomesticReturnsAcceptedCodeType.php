<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomesticReturnsAcceptedCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for accepting domestic returns.
 * @subpackage Structs
 */
class DomesticReturnsAcceptedCodeType extends AbstractStructBase
{
    /**
     * The DomesticReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $DomesticReturnsAccepted = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DomesticReturnsAcceptedCodeType
     * @uses DomesticReturnsAcceptedCodeType::setDomesticReturnsAccepted()
     * @uses DomesticReturnsAcceptedCodeType::setAny()
     * @param string[] $domesticReturnsAccepted
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $domesticReturnsAccepted = null, $any = null)
    {
        $this
            ->setDomesticReturnsAccepted($domesticReturnsAccepted)
            ->setAny($any);
    }
    /**
     * Get DomesticReturnsAccepted value
     * @return string[]
     */
    public function getDomesticReturnsAccepted(): ?array
    {
        return $this->DomesticReturnsAccepted;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticReturnsAccepted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticReturnsAccepted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticReturnsAcceptedForArrayConstraintsFromSetDomesticReturnsAccepted(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem)) {
                $invalidValues[] = is_object($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) ? get_class($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem) : sprintf('%s(%s)', gettype($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem), var_export($domesticReturnsAcceptedCodeTypeDomesticReturnsAcceptedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DomesticReturnsAccepted value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $domesticReturnsAccepted
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType
     */
    public function setDomesticReturnsAccepted(?array $domesticReturnsAccepted = null): self
    {
        // validation for constraint: array
        if ('' !== ($domesticReturnsAcceptedArrayErrorMessage = self::validateDomesticReturnsAcceptedForArrayConstraintsFromSetDomesticReturnsAccepted($domesticReturnsAccepted))) {
            throw new InvalidArgumentException($domesticReturnsAcceptedArrayErrorMessage, __LINE__);
        }
        $this->DomesticReturnsAccepted = $domesticReturnsAccepted;
        
        return $this;
    }
    /**
     * Add item to DomesticReturnsAccepted value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType
     */
    public function addToDomesticReturnsAccepted(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues())), __LINE__);
        }
        $this->DomesticReturnsAccepted[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType
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
