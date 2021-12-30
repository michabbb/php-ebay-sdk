<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class AttributeSetType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    protected ?array $Attribute = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The attributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $attributeSetID = null;
    /**
     * The attributeSetVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - use: optional
     * @var string|null
     */
    protected ?string $attributeSetVersion = null;
    /**
     * Constructor method for AttributeSetType
     * @uses AttributeSetType::setAttribute()
     * @uses AttributeSetType::setAny()
     * @uses AttributeSetType::setAttributeSetID()
     * @uses AttributeSetType::setAttributeSetVersion()
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @param \DOMDocument|string|null $any
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     */
    public function __construct(?array $attribute = null, $any = null, ?int $attributeSetID = null, ?string $attributeSetVersion = null)
    {
        $this
            ->setAttribute($attribute)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion);
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    public function getAttribute(): ?array
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeSetTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeSetTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
                $invalidValues[] = is_object($attributeSetTypeAttributeItem) ? get_class($attributeSetTypeAttributeItem) : sprintf('%s(%s)', gettype($attributeSetTypeAttributeItem), var_export($attributeSetTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function addToAttribute(\macropage\ebaysdk\trading\StructType\AttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
            throw new InvalidArgumentException(sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
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
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID(): ?int
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttributeSetID(?int $attributeSetID = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        
        return $this;
    }
    /**
     * Get attributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion(): ?string
    {
        return $this->attributeSetVersion;
    }
    /**
     * Set attributeSetVersion value
     * @param string $attributeSetVersion
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType
     */
    public function setAttributeSetVersion(?string $attributeSetVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeSetVersion, true), gettype($attributeSetVersion)), __LINE__);
        }
        $this->attributeSetVersion = $attributeSetVersion;
        
        return $this;
    }
}
