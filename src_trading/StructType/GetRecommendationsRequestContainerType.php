<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsRequestContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsRequestContainerType extends AbstractStructBase
{
    /**
     * The ListingFlow
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingFlow = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The RecommendationEngine
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $RecommendationEngine = null;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Query = null;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $DeletedField = null;
    /**
     * The ExcludeRelationships
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExcludeRelationships = null;
    /**
     * The IncludeConfidence
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeConfidence = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for GetRecommendationsRequestContainerType
     * @uses GetRecommendationsRequestContainerType::setListingFlow()
     * @uses GetRecommendationsRequestContainerType::setItem()
     * @uses GetRecommendationsRequestContainerType::setRecommendationEngine()
     * @uses GetRecommendationsRequestContainerType::setQuery()
     * @uses GetRecommendationsRequestContainerType::setCorrelationID()
     * @uses GetRecommendationsRequestContainerType::setDeletedField()
     * @uses GetRecommendationsRequestContainerType::setExcludeRelationships()
     * @uses GetRecommendationsRequestContainerType::setIncludeConfidence()
     * @uses GetRecommendationsRequestContainerType::setAny()
     * @param string $listingFlow
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string[] $recommendationEngine
     * @param string $query
     * @param string $correlationID
     * @param string[] $deletedField
     * @param bool $excludeRelationships
     * @param bool $includeConfidence
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $listingFlow = null, ?\macropage\ebaysdk\trading\StructType\ItemType $item = null, ?array $recommendationEngine = null, ?string $query = null, ?string $correlationID = null, ?array $deletedField = null, ?bool $excludeRelationships = null, ?bool $includeConfidence = null, $any = null)
    {
        $this
            ->setListingFlow($listingFlow)
            ->setItem($item)
            ->setRecommendationEngine($recommendationEngine)
            ->setQuery($query)
            ->setCorrelationID($correlationID)
            ->setDeletedField($deletedField)
            ->setExcludeRelationships($excludeRelationships)
            ->setIncludeConfidence($includeConfidence)
            ->setAny($any);
    }
    /**
     * Get ListingFlow value
     * @return string|null
     */
    public function getListingFlow(): ?string
    {
        return $this->ListingFlow;
    }
    /**
     * Set ListingFlow value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingFlow
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setListingFlow(?string $listingFlow = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::valueIsValid($listingFlow)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType', is_array($listingFlow) ? implode(', ', $listingFlow) : var_export($listingFlow, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::getValidValues())), __LINE__);
        }
        $this->ListingFlow = $listingFlow;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get RecommendationEngine value
     * @return string[]
     */
    public function getRecommendationEngine(): ?array
    {
        return $this->RecommendationEngine;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendationEngine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendationEngine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendationEngineForArrayConstraintsFromSetRecommendationEngine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecommendationsRequestContainerTypeRecommendationEngineItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid($getRecommendationsRequestContainerTypeRecommendationEngineItem)) {
                $invalidValues[] = is_object($getRecommendationsRequestContainerTypeRecommendationEngineItem) ? get_class($getRecommendationsRequestContainerTypeRecommendationEngineItem) : sprintf('%s(%s)', gettype($getRecommendationsRequestContainerTypeRecommendationEngineItem), var_export($getRecommendationsRequestContainerTypeRecommendationEngineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RecommendationEngine value
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $recommendationEngine
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setRecommendationEngine(?array $recommendationEngine = null): self
    {
        // validation for constraint: array
        if ('' !== ($recommendationEngineArrayErrorMessage = self::validateRecommendationEngineForArrayConstraintsFromSetRecommendationEngine($recommendationEngine))) {
            throw new InvalidArgumentException($recommendationEngineArrayErrorMessage, __LINE__);
        }
        $this->RecommendationEngine = $recommendationEngine;
        
        return $this;
    }
    /**
     * Add item to RecommendationEngine value
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function addToRecommendationEngine(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues())), __LINE__);
        }
        $this->RecommendationEngine[] = $item;
        
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID(): ?string
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setCorrelationID(?string $correlationID = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]
     */
    public function getDeletedField(): ?array
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecommendationsRequestContainerTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($getRecommendationsRequestContainerTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($getRecommendationsRequestContainerTypeDeletedFieldItem) ? get_class($getRecommendationsRequestContainerTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($getRecommendationsRequestContainerTypeDeletedFieldItem), var_export($getRecommendationsRequestContainerTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws InvalidArgumentException
     * @param string[] $deletedField
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setDeletedField(?array $deletedField = null): self
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function addToDeletedField(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        
        return $this;
    }
    /**
     * Get ExcludeRelationships value
     * @return bool|null
     */
    public function getExcludeRelationships(): ?bool
    {
        return $this->ExcludeRelationships;
    }
    /**
     * Set ExcludeRelationships value
     * @param bool $excludeRelationships
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setExcludeRelationships(?bool $excludeRelationships = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeRelationships) && !is_bool($excludeRelationships)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeRelationships, true), gettype($excludeRelationships)), __LINE__);
        }
        $this->ExcludeRelationships = $excludeRelationships;
        
        return $this;
    }
    /**
     * Get IncludeConfidence value
     * @return bool|null
     */
    public function getIncludeConfidence(): ?bool
    {
        return $this->IncludeConfidence;
    }
    /**
     * Set IncludeConfidence value
     * @param bool $includeConfidence
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setIncludeConfidence(?bool $includeConfidence = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeConfidence) && !is_bool($includeConfidence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeConfidence, true), gettype($includeConfidence)), __LINE__);
        }
        $this->IncludeConfidence = $includeConfidence;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
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
