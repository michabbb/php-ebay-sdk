<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductFamilyType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductFamilyType extends AbstractStructBase
{
    /**
     * The ParentProduct
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductType $ParentProduct = null;
    /**
     * The FamilyMembers
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductType[]
     */
    protected array $FamilyMembers = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The hasMoreChildren
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool|null
     */
    protected ?bool $hasMoreChildren = null;
    /**
     * Constructor method for ProductFamilyType
     * @uses ProductFamilyType::setParentProduct()
     * @uses ProductFamilyType::setFamilyMembers()
     * @uses ProductFamilyType::setAny()
     * @uses ProductFamilyType::setHasMoreChildren()
     * @param \macropage\ebaysdk\trading\StructType\ProductType $parentProduct
     * @param \macropage\ebaysdk\trading\StructType\ProductType[] $familyMembers
     * @param \DOMDocument|string|null $any
     * @param bool $hasMoreChildren
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ProductType $parentProduct = null, array $familyMembers = [], $any = null, ?bool $hasMoreChildren = null)
    {
        $this
            ->setParentProduct($parentProduct)
            ->setFamilyMembers($familyMembers)
            ->setAny($any)
            ->setHasMoreChildren($hasMoreChildren);
    }
    /**
     * Get ParentProduct value
     * @return \macropage\ebaysdk\trading\StructType\ProductType|null
     */
    public function getParentProduct(): ?\macropage\ebaysdk\trading\StructType\ProductType
    {
        return $this->ParentProduct;
    }
    /**
     * Set ParentProduct value
     * @param \macropage\ebaysdk\trading\StructType\ProductType $parentProduct
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setParentProduct(?\macropage\ebaysdk\trading\StructType\ProductType $parentProduct = null): self
    {
        $this->ParentProduct = $parentProduct;
        
        return $this;
    }
    /**
     * Get FamilyMembers value
     * @return \macropage\ebaysdk\trading\StructType\ProductType[]
     */
    public function getFamilyMembers(): array
    {
        return $this->FamilyMembers;
    }
    /**
     * This method is responsible for validating the values passed to the setFamilyMembers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFamilyMembers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFamilyMembersForArrayConstraintsFromSetFamilyMembers(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productFamilyTypeFamilyMembersItem) {
            // validation for constraint: itemType
            if (!$productFamilyTypeFamilyMembersItem instanceof \macropage\ebaysdk\trading\StructType\ProductType) {
                $invalidValues[] = is_object($productFamilyTypeFamilyMembersItem) ? get_class($productFamilyTypeFamilyMembersItem) : sprintf('%s(%s)', gettype($productFamilyTypeFamilyMembersItem), var_export($productFamilyTypeFamilyMembersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FamilyMembers property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FamilyMembers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductType[] $familyMembers
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setFamilyMembers(array $familyMembers = []): self
    {
        // validation for constraint: array
        if ('' !== ($familyMembersArrayErrorMessage = self::validateFamilyMembersForArrayConstraintsFromSetFamilyMembers($familyMembers))) {
            throw new InvalidArgumentException($familyMembersArrayErrorMessage, __LINE__);
        }
        $this->FamilyMembers = $familyMembers;
        
        return $this;
    }
    /**
     * Add item to FamilyMembers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function addToFamilyMembers(\macropage\ebaysdk\trading\StructType\ProductType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductType) {
            throw new InvalidArgumentException(sprintf('The FamilyMembers property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FamilyMembers[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
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
    /**
     * Get hasMoreChildren value
     * @return bool|null
     */
    public function getHasMoreChildren(): ?bool
    {
        return $this->hasMoreChildren;
    }
    /**
     * Set hasMoreChildren value
     * @param bool $hasMoreChildren
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setHasMoreChildren(?bool $hasMoreChildren = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreChildren) && !is_bool($hasMoreChildren)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreChildren, true), gettype($hasMoreChildren)), __LINE__);
        }
        $this->hasMoreChildren = $hasMoreChildren;
        
        return $this;
    }
}
