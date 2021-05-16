<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAttributesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchAttributesType extends AbstractStructBase
{
    /**
     * The AttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $AttributeID = null;
    /**
     * The DateSpecifier
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateSpecifier = null;
    /**
     * The RangeSpecifier
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RangeSpecifier = null;
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
     * Constructor method for SearchAttributesType
     * @uses SearchAttributesType::setAttributeID()
     * @uses SearchAttributesType::setDateSpecifier()
     * @uses SearchAttributesType::setRangeSpecifier()
     * @uses SearchAttributesType::setValueList()
     * @uses SearchAttributesType::setAny()
     * @param int $attributeID
     * @param string $dateSpecifier
     * @param string $rangeSpecifier
     * @param \macropage\ebaysdk\trading\StructType\ValType[] $valueList
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $attributeID = null, ?string $dateSpecifier = null, ?string $rangeSpecifier = null, array $valueList = [], $any = null)
    {
        $this
            ->setAttributeID($attributeID)
            ->setDateSpecifier($dateSpecifier)
            ->setRangeSpecifier($rangeSpecifier)
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
     * Get DateSpecifier value
     * @return string|null
     */
    public function getDateSpecifier(): ?string
    {
        return $this->DateSpecifier;
    }
    /**
     * Set DateSpecifier value
     * @uses \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dateSpecifier
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setDateSpecifier(?string $dateSpecifier = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::valueIsValid($dateSpecifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType', is_array($dateSpecifier) ? implode(', ', $dateSpecifier) : var_export($dateSpecifier, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DateSpecifierCodeType::getValidValues())), __LINE__);
        }
        $this->DateSpecifier = $dateSpecifier;
        
        return $this;
    }
    /**
     * Get RangeSpecifier value
     * @return string|null
     */
    public function getRangeSpecifier(): ?string
    {
        return $this->RangeSpecifier;
    }
    /**
     * Set RangeSpecifier value
     * @uses \macropage\ebaysdk\trading\EnumType\RangeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RangeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rangeSpecifier
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
     */
    public function setRangeSpecifier(?string $rangeSpecifier = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RangeCodeType::valueIsValid($rangeSpecifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RangeCodeType', is_array($rangeSpecifier) ? implode(', ', $rangeSpecifier) : var_export($rangeSpecifier, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RangeCodeType::getValidValues())), __LINE__);
        }
        $this->RangeSpecifier = $rangeSpecifier;
        
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
        foreach ($values as $searchAttributesTypeValueListItem) {
            // validation for constraint: itemType
            if (!$searchAttributesTypeValueListItem instanceof \macropage\ebaysdk\trading\StructType\ValType) {
                $invalidValues[] = is_object($searchAttributesTypeValueListItem) ? get_class($searchAttributesTypeValueListItem) : sprintf('%s(%s)', gettype($searchAttributesTypeValueListItem), var_export($searchAttributesTypeValueListItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType
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
