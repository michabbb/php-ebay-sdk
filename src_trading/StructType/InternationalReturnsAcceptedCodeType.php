<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsAcceptedCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options the seller has for accepting international returns.
 * @subpackage Structs
 */
class InternationalReturnsAcceptedCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $InternationalReturnsAccepted = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for InternationalReturnsAcceptedCodeType
     * @uses InternationalReturnsAcceptedCodeType::setInternationalReturnsAccepted()
     * @uses InternationalReturnsAcceptedCodeType::setAny()
     * @param string[] $internationalReturnsAccepted
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $internationalReturnsAccepted = [], $any = null)
    {
        $this
            ->setInternationalReturnsAccepted($internationalReturnsAccepted)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsAccepted value
     * @return string[]
     */
    public function getInternationalReturnsAccepted(): array
    {
        return $this->InternationalReturnsAccepted;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsAccepted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsAccepted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsAcceptedForArrayConstraintsFromSetInternationalReturnsAccepted(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem)) {
                $invalidValues[] = is_object($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) ? get_class($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem) : sprintf('%s(%s)', gettype($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem), var_export($internationalReturnsAcceptedCodeTypeInternationalReturnsAcceptedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalReturnsAccepted value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $internationalReturnsAccepted
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType
     */
    public function setInternationalReturnsAccepted(array $internationalReturnsAccepted = []): self
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsAcceptedArrayErrorMessage = self::validateInternationalReturnsAcceptedForArrayConstraintsFromSetInternationalReturnsAccepted($internationalReturnsAccepted))) {
            throw new InvalidArgumentException($internationalReturnsAcceptedArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsAccepted = $internationalReturnsAccepted;
        
        return $this;
    }
    /**
     * Add item to InternationalReturnsAccepted value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType
     */
    public function addToInternationalReturnsAccepted(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsAcceptedCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsAccepted[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType
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
