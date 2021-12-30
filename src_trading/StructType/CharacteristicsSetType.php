<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicsSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicsSetType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AttributeSetID = null;
    /**
     * The AttributeSetVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttributeSetVersion = null;
    /**
     * The Characteristics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    protected ?array $Characteristics = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharacteristicsSetType
     * @uses CharacteristicsSetType::setName()
     * @uses CharacteristicsSetType::setAttributeSetID()
     * @uses CharacteristicsSetType::setAttributeSetVersion()
     * @uses CharacteristicsSetType::setCharacteristics()
     * @uses CharacteristicsSetType::setAny()
     * @param string $name
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $characteristics
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?int $attributeSetID = null, ?string $attributeSetVersion = null, ?array $characteristics = null, $any = null)
    {
        $this
            ->setName($name)
            ->setAttributeSetID($attributeSetID)
            ->setAttributeSetVersion($attributeSetVersion)
            ->setCharacteristics($characteristics)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID(): ?int
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setAttributeSetID(?int $attributeSetID = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        
        return $this;
    }
    /**
     * Get AttributeSetVersion value
     * @return string|null
     */
    public function getAttributeSetVersion(): ?string
    {
        return $this->AttributeSetVersion;
    }
    /**
     * Set AttributeSetVersion value
     * @param string $attributeSetVersion
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setAttributeSetVersion(?string $attributeSetVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeSetVersion) && !is_string($attributeSetVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeSetVersion, true), gettype($attributeSetVersion)), __LINE__);
        }
        $this->AttributeSetVersion = $attributeSetVersion;
        
        return $this;
    }
    /**
     * Get Characteristics value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    public function getCharacteristics(): ?array
    {
        return $this->Characteristics;
    }
    /**
     * This method is responsible for validating the values passed to the setCharacteristics method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristics method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicsForArrayConstraintsFromSetCharacteristics(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicsSetTypeCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$characteristicsSetTypeCharacteristicsItem instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
                $invalidValues[] = is_object($characteristicsSetTypeCharacteristicsItem) ? get_class($characteristicsSetTypeCharacteristicsItem) : sprintf('%s(%s)', gettype($characteristicsSetTypeCharacteristicsItem), var_export($characteristicsSetTypeCharacteristicsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Characteristics property can only contain items of type \macropage\ebaysdk\trading\StructType\CharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Characteristics value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $characteristics
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function setCharacteristics(?array $characteristics = null): self
    {
        // validation for constraint: array
        if ('' !== ($characteristicsArrayErrorMessage = self::validateCharacteristicsForArrayConstraintsFromSetCharacteristics($characteristics))) {
            throw new InvalidArgumentException($characteristicsArrayErrorMessage, __LINE__);
        }
        $this->Characteristics = $characteristics;
        
        return $this;
    }
    /**
     * Add item to Characteristics value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public function addToCharacteristics(\macropage\ebaysdk\trading\StructType\CharacteristicType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
            throw new InvalidArgumentException(sprintf('The Characteristics property can only contain items of type \macropage\ebaysdk\trading\StructType\CharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Characteristics[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
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
