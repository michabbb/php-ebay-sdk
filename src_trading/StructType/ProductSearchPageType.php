<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchPageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchPageType extends AbstractStructBase
{
    /**
     * The SearchCharacteristicsSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType
     */
    public $SearchCharacteristicsSet;
    /**
     * The SearchType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SearchType;
    /**
     * The SortCharacteristics
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicType[]
     */
    public $SortCharacteristics;
    /**
     * The DataElementSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DataElementSetType[]
     */
    public $DataElementSet;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet = null, $searchType = null, array $sortCharacteristics = array(), array $dataElementSet = array(), \DOMDocument $any = null)
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
    public function getSearchCharacteristicsSet()
    {
        return $this->SearchCharacteristicsSet;
    }
    /**
     * Set SearchCharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSearchCharacteristicsSet(\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $searchCharacteristicsSet = null)
    {
        $this->SearchCharacteristicsSet = $searchCharacteristicsSet;
        return $this;
    }
    /**
     * Get SearchType value
     * @return string|null
     */
    public function getSearchType()
    {
        return $this->SearchType;
    }
    /**
     * Set SearchType value
     * @uses \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchType
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSearchType($searchType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::valueIsValid($searchType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $searchType, implode(', ', \macropage\ebaysdk\trading\EnumType\CharacteristicsSearchCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        return $this;
    }
    /**
     * Get SortCharacteristics value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicType[]|null
     */
    public function getSortCharacteristics()
    {
        return $this->SortCharacteristics;
    }
    /**
     * Set SortCharacteristics value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType[] $sortCharacteristics
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setSortCharacteristics(array $sortCharacteristics = array())
    {
        foreach ($sortCharacteristics as $productSearchPageTypeSortCharacteristicsItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeSortCharacteristicsItem instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
                throw new \InvalidArgumentException(sprintf('The SortCharacteristics property can only contain items of \macropage\ebaysdk\trading\StructType\CharacteristicType, "%s" given', is_object($productSearchPageTypeSortCharacteristicsItem) ? get_class($productSearchPageTypeSortCharacteristicsItem) : gettype($productSearchPageTypeSortCharacteristicsItem)), __LINE__);
            }
        }
        $this->SortCharacteristics = $sortCharacteristics;
        return $this;
    }
    /**
     * Add item to SortCharacteristics value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function addToSortCharacteristics(\macropage\ebaysdk\trading\StructType\CharacteristicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharacteristicType) {
            throw new \InvalidArgumentException(sprintf('The SortCharacteristics property can only contain items of \macropage\ebaysdk\trading\StructType\CharacteristicType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SortCharacteristics[] = $item;
        return $this;
    }
    /**
     * Get DataElementSet value
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType[]|null
     */
    public function getDataElementSet()
    {
        return $this->DataElementSet;
    }
    /**
     * Set DataElementSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DataElementSetType[] $dataElementSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function setDataElementSet(array $dataElementSet = array())
    {
        foreach ($dataElementSet as $productSearchPageTypeDataElementSetItem) {
            // validation for constraint: itemType
            if (!$productSearchPageTypeDataElementSetItem instanceof \macropage\ebaysdk\trading\StructType\DataElementSetType) {
                throw new \InvalidArgumentException(sprintf('The DataElementSet property can only contain items of \macropage\ebaysdk\trading\StructType\DataElementSetType, "%s" given', is_object($productSearchPageTypeDataElementSetItem) ? get_class($productSearchPageTypeDataElementSetItem) : gettype($productSearchPageTypeDataElementSetItem)), __LINE__);
            }
        }
        $this->DataElementSet = $dataElementSet;
        return $this;
    }
    /**
     * Add item to DataElementSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DataElementSetType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
     */
    public function addToDataElementSet(\macropage\ebaysdk\trading\StructType\DataElementSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DataElementSetType) {
            throw new \InvalidArgumentException(sprintf('The DataElementSet property can only contain items of \macropage\ebaysdk\trading\StructType\DataElementSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DataElementSet[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductSearchPageType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchPageType
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
