<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $AttributeID = null;
    /**
     * The DateFormat
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateFormat = null;
    /**
     * The DisplaySequence
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplaySequence = null;
    /**
     * The DisplayUOM
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayUOM = null;
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LabelType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LabelType $Label = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortOrder = null;
    /**
     * The ValueList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValType[]
     */
    protected array $ValueList = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharacteristicType
     * @uses CharacteristicType::setAttributeID()
     * @uses CharacteristicType::setDateFormat()
     * @uses CharacteristicType::setDisplaySequence()
     * @uses CharacteristicType::setDisplayUOM()
     * @uses CharacteristicType::setLabel()
     * @uses CharacteristicType::setSortOrder()
     * @uses CharacteristicType::setValueList()
     * @uses CharacteristicType::setAny()
     * @param int $attributeID
     * @param string $dateFormat
     * @param string $displaySequence
     * @param string $displayUOM
     * @param \macropage\ebaysdk\trading\StructType\LabelType $label
     * @param string $sortOrder
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $attributeID = null, ?string $dateFormat = null, ?string $displaySequence = null, ?string $displayUOM = null, ?\macropage\ebaysdk\trading\StructType\LabelType $label = null, ?string $sortOrder = null, array $valueList = [], $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateFormat($dateFormat)
            ->setDisplaySequence($displaySequence)
            ->setDisplayUOM($displayUOM)
            ->setLabel($label)
            ->setSortOrder($sortOrder)
            ->setValueList($valueList)
            ->setAny($any);
    }
    /**
     * Get AttributeID value
     * @return int|null
     */
    public function getAttributeID(): ?int
    {
        return $this->AttributeID;
    }
    /**
     * Set AttributeID value
     * @param int $attributeID
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setAttributeID(?int $attributeID = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeID) && !(is_int($attributeID) || ctype_digit($attributeID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeID, true), gettype($attributeID)), __LINE__);
        }
        $this->AttributeID = $attributeID;
        
        return $this;
    }
    /**
     * Get DateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->DateFormat;
    }
    /**
     * Set DateFormat value
     * @param string $dateFormat
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->DateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get DisplaySequence value
     * @return string|null
     */
    public function getDisplaySequence(): ?string
    {
        return $this->DisplaySequence;
    }
    /**
     * Set DisplaySequence value
     * @param string $displaySequence
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDisplaySequence(?string $displaySequence = null): self
    {
        // validation for constraint: string
        if (!is_null($displaySequence) && !is_string($displaySequence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displaySequence, true), gettype($displaySequence)), __LINE__);
        }
        $this->DisplaySequence = $displaySequence;
        
        return $this;
    }
    /**
     * Get DisplayUOM value
     * @return string|null
     */
    public function getDisplayUOM(): ?string
    {
        return $this->DisplayUOM;
    }
    /**
     * Set DisplayUOM value
     * @param string $displayUOM
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setDisplayUOM(?string $displayUOM = null): self
    {
        // validation for constraint: string
        if (!is_null($displayUOM) && !is_string($displayUOM)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayUOM, true), gettype($displayUOM)), __LINE__);
        }
        $this->DisplayUOM = $displayUOM;
        
        return $this;
    }
    /**
     * Get Label value
     * @return \macropage\ebaysdk\trading\StructType\LabelType|null
     */
    public function getLabel(): ?\macropage\ebaysdk\trading\StructType\LabelType
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \macropage\ebaysdk\trading\StructType\LabelType $label
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setLabel(?\macropage\ebaysdk\trading\StructType\LabelType $label = null): self
    {
        $this->Label = $label;
        
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SortOrderCodeType', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get ValueList value
     * @return \macropage\ebaysdk\trading\StructType\ValType[]
     */
    public function getValueList(): array
    {
        return $this->ValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueListForArrayConstraintsFromSetValueList(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicTypeValueListItem) {
            // validation for constraint: itemType
            if (!$characteristicTypeValueListItem instanceof \macropage\ebaysdk\trading\StructType\ValType) {
                $invalidValues[] = is_object($characteristicTypeValueListItem) ? get_class($characteristicTypeValueListItem) : sprintf('%s(%s)', gettype($characteristicTypeValueListItem), var_export($characteristicTypeValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValueList property can only contain items of type \macropage\ebaysdk\trading\StructType\ValType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function setValueList(array $valueList = []): self
    {
        // validation for constraint: array
        if ('' !== ($valueListArrayErrorMessage = self::validateValueListForArrayConstraintsFromSetValueList($valueList))) {
            throw new InvalidArgumentException($valueListArrayErrorMessage, __LINE__);
        }
        $this->ValueList = $valueList;
        
        return $this;
    }
    /**
     * Add item to ValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValType $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
     */
    public function addToValueList(\macropage\ebaysdk\trading\StructType\ValType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ValType) {
            throw new InvalidArgumentException(sprintf('The ValueList property can only contain items of type \macropage\ebaysdk\trading\StructType\ValType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValueList[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType
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
