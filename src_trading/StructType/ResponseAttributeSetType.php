<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseAttributeSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ResponseAttributeSetType extends AbstractStructBase
{
    /**
     * The ApproximatePages
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $ApproximatePages = null;
    /**
     * The AttributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $AttributeSetID = null;
    /**
     * The HasMore
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool|null
     */
    protected ?bool $HasMore = null;
    /**
     * The ProductFamilies
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductFamilyType[]
     */
    protected array $ProductFamilies = [];
    /**
     * The ProductFinderConstraints
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[]
     */
    protected array $ProductFinderConstraints = [];
    /**
     * The TooManyMatchesFound
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool|null
     */
    protected ?bool $TooManyMatchesFound = null;
    /**
     * The TotalProducts
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $TotalProducts = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ResponseAttributeSetType
     * @uses ResponseAttributeSetType::setApproximatePages()
     * @uses ResponseAttributeSetType::setAttributeSetID()
     * @uses ResponseAttributeSetType::setHasMore()
     * @uses ResponseAttributeSetType::setProductFamilies()
     * @uses ResponseAttributeSetType::setProductFinderConstraints()
     * @uses ResponseAttributeSetType::setTooManyMatchesFound()
     * @uses ResponseAttributeSetType::setTotalProducts()
     * @uses ResponseAttributeSetType::setAny()
     * @param int $approximatePages
     * @param int $attributeSetID
     * @param bool $hasMore
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType[] $productFamilies
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @param bool $tooManyMatchesFound
     * @param int $totalProducts
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $approximatePages = null, ?int $attributeSetID = null, ?bool $hasMore = null, array $productFamilies = [], array $productFinderConstraints = [], ?bool $tooManyMatchesFound = null, ?int $totalProducts = null, $any = null)
    {
        $this
            ->setApproximatePages($approximatePages)
            ->setAttributeSetID($attributeSetID)
            ->setHasMore($hasMore)
            ->setProductFamilies($productFamilies)
            ->setProductFinderConstraints($productFinderConstraints)
            ->setTooManyMatchesFound($tooManyMatchesFound)
            ->setTotalProducts($totalProducts)
            ->setAny($any);
    }
    /**
     * Get ApproximatePages value
     * @return int|null
     */
    public function getApproximatePages(): ?int
    {
        return $this->ApproximatePages;
    }
    /**
     * Set ApproximatePages value
     * @param int $approximatePages
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setApproximatePages(?int $approximatePages = null): self
    {
        // validation for constraint: int
        if (!is_null($approximatePages) && !(is_int($approximatePages) || ctype_digit($approximatePages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approximatePages, true), gettype($approximatePages)), __LINE__);
        }
        $this->ApproximatePages = $approximatePages;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
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
     * Get HasMore value
     * @return bool|null
     */
    public function getHasMore(): ?bool
    {
        return $this->HasMore;
    }
    /**
     * Set HasMore value
     * @param bool $hasMore
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setHasMore(?bool $hasMore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMore) && !is_bool($hasMore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMore, true), gettype($hasMore)), __LINE__);
        }
        $this->HasMore = $hasMore;
        
        return $this;
    }
    /**
     * Get ProductFamilies value
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType[]
     */
    public function getProductFamilies(): array
    {
        return $this->ProductFamilies;
    }
    /**
     * This method is responsible for validating the values passed to the setProductFamilies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductFamilies method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductFamiliesForArrayConstraintsFromSetProductFamilies(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseAttributeSetTypeProductFamiliesItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFamiliesItem instanceof \macropage\ebaysdk\trading\StructType\ProductFamilyType) {
                $invalidValues[] = is_object($responseAttributeSetTypeProductFamiliesItem) ? get_class($responseAttributeSetTypeProductFamiliesItem) : sprintf('%s(%s)', gettype($responseAttributeSetTypeProductFamiliesItem), var_export($responseAttributeSetTypeProductFamiliesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductFamilies property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductFamilyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductFamilies value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType[] $productFamilies
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setProductFamilies(array $productFamilies = []): self
    {
        // validation for constraint: array
        if ('' !== ($productFamiliesArrayErrorMessage = self::validateProductFamiliesForArrayConstraintsFromSetProductFamilies($productFamilies))) {
            throw new InvalidArgumentException($productFamiliesArrayErrorMessage, __LINE__);
        }
        $this->ProductFamilies = $productFamilies;
        
        return $this;
    }
    /**
     * Add item to ProductFamilies value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType $item
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function addToProductFamilies(\macropage\ebaysdk\trading\StructType\ProductFamilyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductFamilyType) {
            throw new InvalidArgumentException(sprintf('The ProductFamilies property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductFamilyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductFamilies[] = $item;
        
        return $this;
    }
    /**
     * Get ProductFinderConstraints value
     * @return \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[]
     */
    public function getProductFinderConstraints(): array
    {
        return $this->ProductFinderConstraints;
    }
    /**
     * This method is responsible for validating the values passed to the setProductFinderConstraints method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductFinderConstraints method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductFinderConstraintsForArrayConstraintsFromSetProductFinderConstraints(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseAttributeSetTypeProductFinderConstraintsItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFinderConstraintsItem instanceof \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType) {
                $invalidValues[] = is_object($responseAttributeSetTypeProductFinderConstraintsItem) ? get_class($responseAttributeSetTypeProductFinderConstraintsItem) : sprintf('%s(%s)', gettype($responseAttributeSetTypeProductFinderConstraintsItem), var_export($responseAttributeSetTypeProductFinderConstraintsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductFinderConstraints property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductFinderConstraints value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setProductFinderConstraints(array $productFinderConstraints = []): self
    {
        // validation for constraint: array
        if ('' !== ($productFinderConstraintsArrayErrorMessage = self::validateProductFinderConstraintsForArrayConstraintsFromSetProductFinderConstraints($productFinderConstraints))) {
            throw new InvalidArgumentException($productFinderConstraintsArrayErrorMessage, __LINE__);
        }
        $this->ProductFinderConstraints = $productFinderConstraints;
        
        return $this;
    }
    /**
     * Add item to ProductFinderConstraints value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType $item
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function addToProductFinderConstraints(\macropage\ebaysdk\trading\StructType\ProductFinderConstraintType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType) {
            throw new InvalidArgumentException(sprintf('The ProductFinderConstraints property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductFinderConstraints[] = $item;
        
        return $this;
    }
    /**
     * Get TooManyMatchesFound value
     * @return bool|null
     */
    public function getTooManyMatchesFound(): ?bool
    {
        return $this->TooManyMatchesFound;
    }
    /**
     * Set TooManyMatchesFound value
     * @param bool $tooManyMatchesFound
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setTooManyMatchesFound(?bool $tooManyMatchesFound = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tooManyMatchesFound) && !is_bool($tooManyMatchesFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tooManyMatchesFound, true), gettype($tooManyMatchesFound)), __LINE__);
        }
        $this->TooManyMatchesFound = $tooManyMatchesFound;
        
        return $this;
    }
    /**
     * Get TotalProducts value
     * @return int|null
     */
    public function getTotalProducts(): ?int
    {
        return $this->TotalProducts;
    }
    /**
     * Set TotalProducts value
     * @param int $totalProducts
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setTotalProducts(?int $totalProducts = null): self
    {
        // validation for constraint: int
        if (!is_null($totalProducts) && !(is_int($totalProducts) || ctype_digit($totalProducts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalProducts, true), gettype($totalProducts)), __LINE__);
        }
        $this->TotalProducts = $totalProducts;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
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
