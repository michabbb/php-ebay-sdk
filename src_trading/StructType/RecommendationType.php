<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type was replaced by <b>ListingRecommendationType</b>
 * @subpackage Structs
 */
class RecommendationType extends AbstractStructBase
{
    /**
     * The FieldGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FieldGroup = null;
    /**
     * The FieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FieldName = null;
    /**
     * The RecommendationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecommendationCode = null;
    /**
     * The RecommendedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $RecommendedValue = [];
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RecommendationType
     * @uses RecommendationType::setFieldGroup()
     * @uses RecommendationType::setFieldName()
     * @uses RecommendationType::setRecommendationCode()
     * @uses RecommendationType::setRecommendedValue()
     * @uses RecommendationType::setMessage()
     * @uses RecommendationType::setAny()
     * @param string $fieldGroup
     * @param string $fieldName
     * @param string $recommendationCode
     * @param string[] $recommendedValue
     * @param string $message
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $fieldGroup = null, ?string $fieldName = null, ?string $recommendationCode = null, array $recommendedValue = [], ?string $message = null, $any = null)
    {
        $this
            ->setFieldGroup($fieldGroup)
            ->setFieldName($fieldName)
            ->setRecommendationCode($recommendationCode)
            ->setRecommendedValue($recommendedValue)
            ->setMessage($message)
            ->setAny($any);
    }
    /**
     * Get FieldGroup value
     * @return string|null
     */
    public function getFieldGroup(): ?string
    {
        return $this->FieldGroup;
    }
    /**
     * Set FieldGroup value
     * @param string $fieldGroup
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setFieldGroup(?string $fieldGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldGroup) && !is_string($fieldGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldGroup, true), gettype($fieldGroup)), __LINE__);
        }
        $this->FieldGroup = $fieldGroup;
        
        return $this;
    }
    /**
     * Get FieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->FieldName;
    }
    /**
     * Set FieldName value
     * @param string $fieldName
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get RecommendationCode value
     * @return string|null
     */
    public function getRecommendationCode(): ?string
    {
        return $this->RecommendationCode;
    }
    /**
     * Set RecommendationCode value
     * @param string $recommendationCode
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setRecommendationCode(?string $recommendationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recommendationCode) && !is_string($recommendationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recommendationCode, true), gettype($recommendationCode)), __LINE__);
        }
        $this->RecommendationCode = $recommendationCode;
        
        return $this;
    }
    /**
     * Get RecommendedValue value
     * @return string[]
     */
    public function getRecommendedValue(): array
    {
        return $this->RecommendedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendedValueForArrayConstraintsFromSetRecommendedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recommendationTypeRecommendedValueItem) {
            // validation for constraint: itemType
            if (!is_string($recommendationTypeRecommendedValueItem)) {
                $invalidValues[] = is_object($recommendationTypeRecommendedValueItem) ? get_class($recommendationTypeRecommendedValueItem) : sprintf('%s(%s)', gettype($recommendationTypeRecommendedValueItem), var_export($recommendationTypeRecommendedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecommendedValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RecommendedValue value
     * @throws InvalidArgumentException
     * @param string[] $recommendedValue
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setRecommendedValue(array $recommendedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($recommendedValueArrayErrorMessage = self::validateRecommendedValueForArrayConstraintsFromSetRecommendedValue($recommendedValue))) {
            throw new InvalidArgumentException($recommendedValueArrayErrorMessage, __LINE__);
        }
        $this->RecommendedValue = $recommendedValue;
        
        return $this;
    }
    /**
     * Add item to RecommendedValue value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function addToRecommendedValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RecommendedValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecommendedValue[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
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
