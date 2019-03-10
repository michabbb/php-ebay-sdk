<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchType extends AbstractStructBase
{
    /**
     * The ProductSearchID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductSearchID;
    /**
     * The AttributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeSetID;
    /**
     * The ProductFinderID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ProductFinderID;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductID;
    /**
     * The SortAttributeID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $SortAttributeID;
    /**
     * The MaxChildrenPerFamily
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $MaxChildrenPerFamily;
    /**
     * The SearchAttributes
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SearchAttributesType[]
     */
    public $SearchAttributes;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The AvailableItemsOnly
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableItemsOnly;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The CharacteristicSetIDs
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
     */
    public $CharacteristicSetIDs;
    /**
     * The ProductReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSearchType
     * @uses ProductSearchType::setProductSearchID()
     * @uses ProductSearchType::setAttributeSetID()
     * @uses ProductSearchType::setProductFinderID()
     * @uses ProductSearchType::setProductID()
     * @uses ProductSearchType::setSortAttributeID()
     * @uses ProductSearchType::setMaxChildrenPerFamily()
     * @uses ProductSearchType::setSearchAttributes()
     * @uses ProductSearchType::setPagination()
     * @uses ProductSearchType::setAvailableItemsOnly()
     * @uses ProductSearchType::setQueryKeywords()
     * @uses ProductSearchType::setCharacteristicSetIDs()
     * @uses ProductSearchType::setProductReferenceID()
     * @uses ProductSearchType::setAny()
     * @param string $productSearchID
     * @param int $attributeSetID
     * @param int $productFinderID
     * @param string $productID
     * @param int $sortAttributeID
     * @param int $maxChildrenPerFamily
     * @param \macropage\ebaysdk\trading\StructType\SearchAttributesType[] $searchAttributes
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param bool $availableItemsOnly
     * @param string $queryKeywords
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs
     * @param string $productReferenceID
     * @param \DOMDocument $any
     */
    public function __construct($productSearchID = null, $attributeSetID = null, $productFinderID = null, $productID = null, $sortAttributeID = null, $maxChildrenPerFamily = null, array $searchAttributes = array(), \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $availableItemsOnly = null, $queryKeywords = null, \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs = null, $productReferenceID = null, \DOMDocument $any = null)
    {
        $this
            ->setProductSearchID($productSearchID)
            ->setAttributeSetID($attributeSetID)
            ->setProductFinderID($productFinderID)
            ->setProductID($productID)
            ->setSortAttributeID($sortAttributeID)
            ->setMaxChildrenPerFamily($maxChildrenPerFamily)
            ->setSearchAttributes($searchAttributes)
            ->setPagination($pagination)
            ->setAvailableItemsOnly($availableItemsOnly)
            ->setQueryKeywords($queryKeywords)
            ->setCharacteristicSetIDs($characteristicSetIDs)
            ->setProductReferenceID($productReferenceID)
            ->setAny($any);
    }
    /**
     * Get ProductSearchID value
     * @return string|null
     */
    public function getProductSearchID()
    {
        return $this->ProductSearchID;
    }
    /**
     * Set ProductSearchID value
     * @param string $productSearchID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductSearchID($productSearchID = null)
    {
        // validation for constraint: string
        if (!is_null($productSearchID) && !is_string($productSearchID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productSearchID)), __LINE__);
        }
        $this->ProductSearchID = $productSearchID;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID()
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductFinderID($productFinderID = null)
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !is_numeric($productFinderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        return $this;
    }
    /**
     * Get ProductID value
     * @return string|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param string $productID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get SortAttributeID value
     * @return int|null
     */
    public function getSortAttributeID()
    {
        return $this->SortAttributeID;
    }
    /**
     * Set SortAttributeID value
     * @param int $sortAttributeID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setSortAttributeID($sortAttributeID = null)
    {
        // validation for constraint: int
        if (!is_null($sortAttributeID) && !is_numeric($sortAttributeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sortAttributeID)), __LINE__);
        }
        $this->SortAttributeID = $sortAttributeID;
        return $this;
    }
    /**
     * Get MaxChildrenPerFamily value
     * @return int|null
     */
    public function getMaxChildrenPerFamily()
    {
        return $this->MaxChildrenPerFamily;
    }
    /**
     * Set MaxChildrenPerFamily value
     * @param int $maxChildrenPerFamily
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setMaxChildrenPerFamily($maxChildrenPerFamily = null)
    {
        // validation for constraint: int
        if (!is_null($maxChildrenPerFamily) && !is_numeric($maxChildrenPerFamily)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxChildrenPerFamily)), __LINE__);
        }
        $this->MaxChildrenPerFamily = $maxChildrenPerFamily;
        return $this;
    }
    /**
     * Get SearchAttributes value
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType[]|null
     */
    public function getSearchAttributes()
    {
        return $this->SearchAttributes;
    }
    /**
     * Set SearchAttributes value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SearchAttributesType[] $searchAttributes
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setSearchAttributes(array $searchAttributes = array())
    {
        foreach ($searchAttributes as $productSearchTypeSearchAttributesItem) {
            // validation for constraint: itemType
            if (!$productSearchTypeSearchAttributesItem instanceof \macropage\ebaysdk\trading\StructType\SearchAttributesType) {
                throw new \InvalidArgumentException(sprintf('The SearchAttributes property can only contain items of \macropage\ebaysdk\trading\StructType\SearchAttributesType, "%s" given', is_object($productSearchTypeSearchAttributesItem) ? get_class($productSearchTypeSearchAttributesItem) : gettype($productSearchTypeSearchAttributesItem)), __LINE__);
            }
        }
        $this->SearchAttributes = $searchAttributes;
        return $this;
    }
    /**
     * Add item to SearchAttributes value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SearchAttributesType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function addToSearchAttributes(\macropage\ebaysdk\trading\StructType\SearchAttributesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SearchAttributesType) {
            throw new \InvalidArgumentException(sprintf('The SearchAttributes property can only contain items of \macropage\ebaysdk\trading\StructType\SearchAttributesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchAttributes[] = $item;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get AvailableItemsOnly value
     * @return bool|null
     */
    public function getAvailableItemsOnly()
    {
        return $this->AvailableItemsOnly;
    }
    /**
     * Set AvailableItemsOnly value
     * @param bool $availableItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setAvailableItemsOnly($availableItemsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableItemsOnly) && !is_bool($availableItemsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableItemsOnly)), __LINE__);
        }
        $this->AvailableItemsOnly = $availableItemsOnly;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setQueryKeywords($queryKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Get CharacteristicSetIDs value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType|null
     */
    public function getCharacteristicSetIDs()
    {
        return $this->CharacteristicSetIDs;
    }
    /**
     * Set CharacteristicSetIDs value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setCharacteristicSetIDs(\macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs = null)
    {
        $this->CharacteristicSetIDs = $characteristicSetIDs;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductSearchType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
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
