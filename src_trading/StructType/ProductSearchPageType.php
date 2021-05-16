<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchPageType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchPageType extends AbstractStructBase
{
    /**
     * The SearchCharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $SearchCharacteristicsSet = null;
    /**
     * The SearchType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchType = null;
    /**
     * The SortCharacteristics
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    protected array $SortCharacteristics = [];
    /**
     * The DataElementSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DataElementSetType[]
     */
    protected array $DataElementSet = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductSearchPageType
     * @uses ProductSearchPageType::setSearchCharacteristicsSet()
     * @uses ProductSearchPageType::setSearchType()
     * @uses ProductSearchPageType::setSortCharacteristics()
     * @uses ProductSearchPageType::setDataElementSet()
     * @uses ProductSearchPageType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet
     * @param string $searchType
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $sortCharacteristics
     * @param \macropage\ebaysdk\trading\StructType\DataElementSetType[] $dataElementSet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet = null, ?string $searchType = null, array $sortCharacteristics = [], array $dataElementSet = [], $any = null)
    {
        $this
            ->setSearchCharacteristicsSet($searchCharacteristicsSet)
            ->setSearchType($searchType)
            ->setSortCharacteristics($sortCharacteristics)
            ->setDataElementSet($dataElementSet)
            ->setAny($any);
    }
    /**
     * Get SearchCharacteristicsSet value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    public function getSearchCharacteristicsSet(): ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType
    {
        return $this->SearchCharacteristicsSet;
    }
    /**
     * Set SearchCharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSearchCharacteristicsSet(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet = null): self
    {
        $this->SearchCharacteristicsSet = $searchCharacteristicsSet;
        
        return $this;
    }
    /**
     * Get SearchType value
     * @return string|null
     */
    public function getSearchType(): ?string
    {
        return $this->SearchType;
    }
    /**
     * Set SearchType value
     * @uses \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchType
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSearchType(?string $searchType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::valueIsValid($searchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType', is_array($searchType) ? implode(', ', $searchType) : var_export($searchType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        
        return $this;
    }
    /**
     * Get SortCharacteristics value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    public function getSortCharacteristics(): array
    {
        return $this->SortCharacteristics;
    }
    /**
     * This method is responsible for validating the values passed to the setSortCharacteristics method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSortCharacteristics method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSortCharacteristicsForArrayConstraintsFromSetSortCharacteristics(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchPageTypeSortCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeSortCharacteristicsItem instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
                $invalidValues[] = is_object($productSearchPageTypeSortCharacteristicsItem) ? get_class($productSearchPageTypeSortCharacteristicsItem) : sprintf('%s(%s)', gettype($productSearchPageTypeSortCharacteristicsItem), var_export($productSearchPageTypeSortCharacteristicsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SortCharacteristics property can only contain items of type \macropage\ebaysdk\trading\StructType\CharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SortCharacteristics value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $sortCharacteristics
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSortCharacteristics(array $sortCharacteristics = []): self
    {
        // validation for constraint: array
        if ('' !== ($sortCharacteristicsArrayErrorMessage = self::validateSortCharacteristicsForArrayConstraintsFromSetSortCharacteristics($sortCharacteristics))) {
            throw new InvalidArgumentException($sortCharacteristicsArrayErrorMessage, __LINE__);
        }
        $this->SortCharacteristics = $sortCharacteristics;
        
        return $this;
    }
    /**
     * Add item to SortCharacteristics value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function addToSortCharacteristics(\macropage\ebaysdk\trading\StructType\CharacteristicType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
            throw new InvalidArgumentException(sprintf('The SortCharacteristics property can only contain items of type \macropage\ebaysdk\trading\StructType\CharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SortCharacteristics[] = $item;
        
        return $this;
    }
    /**
     * Get DataElementSet value
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType[]
     */
    public function getDataElementSet(): array
    {
        return $this->DataElementSet;
    }
    /**
     * This method is responsible for validating the values passed to the setDataElementSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataElementSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataElementSetForArrayConstraintsFromSetDataElementSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchPageTypeDataElementSetItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeDataElementSetItem instanceof \macropage\ebaysdk\trading\StructType\DataElementSetType) {
                $invalidValues[] = is_object($productSearchPageTypeDataElementSetItem) ? get_class($productSearchPageTypeDataElementSetItem) : sprintf('%s(%s)', gettype($productSearchPageTypeDataElementSetItem), var_export($productSearchPageTypeDataElementSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataElementSet property can only contain items of type \macropage\ebaysdk\trading\StructType\DataElementSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DataElementSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DataElementSetType[] $dataElementSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setDataElementSet(array $dataElementSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataElementSetArrayErrorMessage = self::validateDataElementSetForArrayConstraintsFromSetDataElementSet($dataElementSet))) {
            throw new InvalidArgumentException($dataElementSetArrayErrorMessage, __LINE__);
        }
        $this->DataElementSet = $dataElementSet;
        
        return $this;
    }
    /**
     * Add item to DataElementSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DataElementSetType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function addToDataElementSet(\macropage\ebaysdk\trading\StructType\DataElementSetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DataElementSetType) {
            throw new InvalidArgumentException(sprintf('The DataElementSet property can only contain items of type \macropage\ebaysdk\trading\StructType\DataElementSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DataElementSet[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
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
