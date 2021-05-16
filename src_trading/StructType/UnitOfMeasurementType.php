<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementType extends AbstractStructBase
{
    /**
     * The AlternateText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $AlternateText = [];
    /**
     * The SuggestedText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SuggestedText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for UnitOfMeasurementType
     * @uses UnitOfMeasurementType::setAlternateText()
     * @uses UnitOfMeasurementType::setSuggestedText()
     * @uses UnitOfMeasurementType::setAny()
     * @param string[] $alternateText
     * @param string $suggestedText
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $alternateText = [], ?string $suggestedText = null, $any = null)
    {
        $this
            ->setAlternateText($alternateText)
            ->setSuggestedText($suggestedText)
            ->setAny($any);
    }
    /**
     * Get AlternateText value
     * @return string[]
     */
    public function getAlternateText(): array
    {
        return $this->AlternateText;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateTextForArrayConstraintsFromSetAlternateText(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitOfMeasurementTypeAlternateTextItem) {
            // validation for constraint: itemType
            if (!is_string($unitOfMeasurementTypeAlternateTextItem)) {
                $invalidValues[] = is_object($unitOfMeasurementTypeAlternateTextItem) ? get_class($unitOfMeasurementTypeAlternateTextItem) : sprintf('%s(%s)', gettype($unitOfMeasurementTypeAlternateTextItem), var_export($unitOfMeasurementTypeAlternateTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateText property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlternateText value
     * @throws InvalidArgumentException
     * @param string[] $alternateText
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function setAlternateText(array $alternateText = []): self
    {
        // validation for constraint: array
        if ('' !== ($alternateTextArrayErrorMessage = self::validateAlternateTextForArrayConstraintsFromSetAlternateText($alternateText))) {
            throw new InvalidArgumentException($alternateTextArrayErrorMessage, __LINE__);
        }
        $this->AlternateText = $alternateText;
        
        return $this;
    }
    /**
     * Add item to AlternateText value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function addToAlternateText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AlternateText property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AlternateText[] = $item;
        
        return $this;
    }
    /**
     * Get SuggestedText value
     * @return string|null
     */
    public function getSuggestedText(): ?string
    {
        return $this->SuggestedText;
    }
    /**
     * Set SuggestedText value
     * @param string $suggestedText
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
     */
    public function setSuggestedText(?string $suggestedText = null): self
    {
        // validation for constraint: string
        if (!is_null($suggestedText) && !is_string($suggestedText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedText, true), gettype($suggestedText)), __LINE__);
        }
        $this->SuggestedText = $suggestedText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType
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
