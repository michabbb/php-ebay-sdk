<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchType extends AbstractStructBase
{
    /**
     * The ProductSearchID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductSearchID = null;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $AttributeSetID = null;
    /**
     * The ProductFinderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductFinderID = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductID = null;
    /**
     * The SortAttributeID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SortAttributeID = null;
    /**
     * The MaxChildrenPerFamily
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxChildrenPerFamily = null;
    /**
     * The SearchAttributes
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SearchAttributesType[]
     */
    protected ?array $SearchAttributes = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The AvailableItemsOnly
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AvailableItemsOnly = null;
    /**
     * The QueryKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QueryKeywords = null;
    /**
     * The CharacteristicSetIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $CharacteristicSetIDs = null;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductReferenceID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $productSearchID = null, ?int $attributeSetID = null, ?int $productFinderID = null, ?string $productID = null, ?int $sortAttributeID = null, ?int $maxChildrenPerFamily = null, ?array $searchAttributes = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?bool $availableItemsOnly = null, ?string $queryKeywords = null, ?\macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs = null, ?string $productReferenceID = null, $any = null)
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
    public function getProductSearchID(): ?string
    {
        return $this->ProductSearchID;
    }
    /**
     * Set ProductSearchID value
     * @param string $productSearchID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductSearchID(?string $productSearchID = null): self
    {
        // validation for constraint: string
        if (!is_null($productSearchID) && !is_string($productSearchID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSearchID, true), gettype($productSearchID)), __LINE__);
        }
        $this->ProductSearchID = $productSearchID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
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
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID(): ?int
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductFinderID(?int $productFinderID = null): self
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !(is_int($productFinderID) || ctype_digit($productFinderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productFinderID, true), gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return string|null
     */
    public function getProductID(): ?string
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param string $productID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductID(?string $productID = null): self
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
    /**
     * Get SortAttributeID value
     * @return int|null
     */
    public function getSortAttributeID(): ?int
    {
        return $this->SortAttributeID;
    }
    /**
     * Set SortAttributeID value
     * @param int $sortAttributeID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setSortAttributeID(?int $sortAttributeID = null): self
    {
        // validation for constraint: int
        if (!is_null($sortAttributeID) && !(is_int($sortAttributeID) || ctype_digit($sortAttributeID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortAttributeID, true), gettype($sortAttributeID)), __LINE__);
        }
        $this->SortAttributeID = $sortAttributeID;
        
        return $this;
    }
    /**
     * Get MaxChildrenPerFamily value
     * @return int|null
     */
    public function getMaxChildrenPerFamily(): ?int
    {
        return $this->MaxChildrenPerFamily;
    }
    /**
     * Set MaxChildrenPerFamily value
     * @param int $maxChildrenPerFamily
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setMaxChildrenPerFamily(?int $maxChildrenPerFamily = null): self
    {
        // validation for constraint: int
        if (!is_null($maxChildrenPerFamily) && !(is_int($maxChildrenPerFamily) || ctype_digit($maxChildrenPerFamily))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxChildrenPerFamily, true), gettype($maxChildrenPerFamily)), __LINE__);
        }
        $this->MaxChildrenPerFamily = $maxChildrenPerFamily;
        
        return $this;
    }
    /**
     * Get SearchAttributes value
     * @return \macropage\ebaysdk\trading\StructType\SearchAttributesType[]
     */
    public function getSearchAttributes(): ?array
    {
        return $this->SearchAttributes;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchAttributes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchAttributes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchAttributesForArrayConstraintsFromSetSearchAttributes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchTypeSearchAttributesItem) {
            // validation for constraint: itemType
            if (!$productSearchTypeSearchAttributesItem instanceof \macropage\ebaysdk\trading\StructType\SearchAttributesType) {
                $invalidValues[] = is_object($productSearchTypeSearchAttributesItem) ? get_class($productSearchTypeSearchAttributesItem) : sprintf('%s(%s)', gettype($productSearchTypeSearchAttributesItem), var_export($productSearchTypeSearchAttributesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchAttributes property can only contain items of type \macropage\ebaysdk\trading\StructType\SearchAttributesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchAttributes value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SearchAttributesType[] $searchAttributes
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setSearchAttributes(?array $searchAttributes = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchAttributesArrayErrorMessage = self::validateSearchAttributesForArrayConstraintsFromSetSearchAttributes($searchAttributes))) {
            throw new InvalidArgumentException($searchAttributesArrayErrorMessage, __LINE__);
        }
        $this->SearchAttributes = $searchAttributes;
        
        return $this;
    }
    /**
     * Add item to SearchAttributes value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SearchAttributesType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function addToSearchAttributes(\macropage\ebaysdk\trading\StructType\SearchAttributesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SearchAttributesType) {
            throw new InvalidArgumentException(sprintf('The SearchAttributes property can only contain items of type \macropage\ebaysdk\trading\StructType\SearchAttributesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SearchAttributes[] = $item;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get AvailableItemsOnly value
     * @return bool|null
     */
    public function getAvailableItemsOnly(): ?bool
    {
        return $this->AvailableItemsOnly;
    }
    /**
     * Set AvailableItemsOnly value
     * @param bool $availableItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setAvailableItemsOnly(?bool $availableItemsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($availableItemsOnly) && !is_bool($availableItemsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableItemsOnly, true), gettype($availableItemsOnly)), __LINE__);
        }
        $this->AvailableItemsOnly = $availableItemsOnly;
        
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords(): ?string
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setQueryKeywords(?string $queryKeywords = null): self
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryKeywords, true), gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        
        return $this;
    }
    /**
     * Get CharacteristicSetIDs value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType|null
     */
    public function getCharacteristicSetIDs(): ?\macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
    {
        return $this->CharacteristicSetIDs;
    }
    /**
     * Set CharacteristicSetIDs value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setCharacteristicSetIDs(?\macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType $characteristicSetIDs = null): self
    {
        $this->CharacteristicSetIDs = $characteristicSetIDs;
        
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID(): ?string
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
     */
    public function setProductReferenceID(?string $productReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchType
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
