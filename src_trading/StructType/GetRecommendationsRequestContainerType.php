<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsRequestContainerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsRequestContainerType extends AbstractStructBase
{
    /**
     * The ListingFlow
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingFlow;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The RecommendationEngine
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RecommendationEngine;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The DeletedField
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The ExcludeRelationships
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeRelationships;
    /**
     * The IncludeConfidence
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeConfidence;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($listingFlow = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, array $recommendationEngine = array(), $query = null, $correlationID = null, array $deletedField = array(), $excludeRelationships = null, $includeConfidence = null, \DOMDocument $any = null)
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
    public function getListingFlow()
    {
        return $this->ListingFlow;
    }
    /**
     * Set ListingFlow value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingFlow
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setListingFlow($listingFlow = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::valueIsValid($listingFlow)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingFlow, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingFlowCodeType::getValidValues())), __LINE__);
        }
        $this->ListingFlow = $listingFlow;
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get RecommendationEngine value
     * @return string[]|null
     */
    public function getRecommendationEngine()
    {
        return $this->RecommendationEngine;
    }
    /**
     * Set RecommendationEngine value
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $recommendationEngine
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setRecommendationEngine(array $recommendationEngine = array())
    {
        $invalidValues = array();
        foreach ($recommendationEngine as $getRecommendationsRequestContainerTypeRecommendationEngineItem) {
            if (!\macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid($getRecommendationsRequestContainerTypeRecommendationEngineItem)) {
                $invalidValues[] = var_export($getRecommendationsRequestContainerTypeRecommendationEngineItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues())), __LINE__);
        }
        $this->RecommendationEngine = $recommendationEngine;
        return $this;
    }
    /**
     * Add item to RecommendationEngine value
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function addToRecommendationEngine($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\RecommendationEngineCodeType::getValidValues())), __LINE__);
        }
        $this->RecommendationEngine[] = $item;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setDeletedField(array $deletedField = array())
    {
        foreach ($deletedField as $getRecommendationsRequestContainerTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($getRecommendationsRequestContainerTypeDeletedFieldItem)) {
                throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($getRecommendationsRequestContainerTypeDeletedFieldItem) ? get_class($getRecommendationsRequestContainerTypeDeletedFieldItem) : gettype($getRecommendationsRequestContainerTypeDeletedFieldItem)), __LINE__);
            }
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
    /**
     * Get ExcludeRelationships value
     * @return bool|null
     */
    public function getExcludeRelationships()
    {
        return $this->ExcludeRelationships;
    }
    /**
     * Set ExcludeRelationships value
     * @param bool $excludeRelationships
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setExcludeRelationships($excludeRelationships = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeRelationships) && !is_bool($excludeRelationships)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeRelationships)), __LINE__);
        }
        $this->ExcludeRelationships = $excludeRelationships;
        return $this;
    }
    /**
     * Get IncludeConfidence value
     * @return bool|null
     */
    public function getIncludeConfidence()
    {
        return $this->IncludeConfidence;
    }
    /**
     * Set IncludeConfidence value
     * @param bool $includeConfidence
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setIncludeConfidence($includeConfidence = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeConfidence) && !is_bool($includeConfidence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeConfidence)), __LINE__);
        }
        $this->IncludeConfidence = $includeConfidence;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsRequestContainerType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
