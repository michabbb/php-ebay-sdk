<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ModifyNameArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ModifyNameList</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename one or more Variation Specific names for a multiple-variation listing.
 * @subpackage Arrays
 */
class ModifyNameArrayType extends AbstractStructArrayBase
{
    /**
     * The ModifyName
     * Meta information extracted from the WSDL
     * - documentation: A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing. <br><br> You cannot change the name of an Item Specific that is required for the listing
     * category. Use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to determine which Item Specifics names are required for a category. <br><br> To get a current list of Variation Specifics defined for a multiple-variation listing, the
     * seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ModifyNameType[]
     */
    protected ?array $ModifyName = null;
    /**
     * Constructor method for ModifyNameArrayType
     * @uses ModifyNameArrayType::setModifyName()
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType[] $modifyName
     */
    public function __construct(?array $modifyName = null)
    {
        $this
            ->setModifyName($modifyName);
    }
    /**
     * Get ModifyName value
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType[]
     */
    public function getModifyName(): ?array
    {
        return $this->ModifyName;
    }
    /**
     * This method is responsible for validating the values passed to the setModifyName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifyName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateModifyNameForArrayConstraintsFromSetModifyName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $modifyNameArrayTypeModifyNameItem) {
            // validation for constraint: itemType
            if (!$modifyNameArrayTypeModifyNameItem instanceof \macropage\ebaysdk\trading\StructType\ModifyNameType) {
                $invalidValues[] = is_object($modifyNameArrayTypeModifyNameItem) ? get_class($modifyNameArrayTypeModifyNameItem) : sprintf('%s(%s)', gettype($modifyNameArrayTypeModifyNameItem), var_export($modifyNameArrayTypeModifyNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ModifyName property can only contain items of type \macropage\ebaysdk\trading\StructType\ModifyNameType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ModifyName value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType[] $modifyName
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
     */
    public function setModifyName(?array $modifyName = null): self
    {
        // validation for constraint: array
        if ('' !== ($modifyNameArrayErrorMessage = self::validateModifyNameForArrayConstraintsFromSetModifyName($modifyName))) {
            throw new InvalidArgumentException($modifyNameArrayErrorMessage, __LINE__);
        }
        $this->ModifyName = $modifyName;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\ModifyNameType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\ModifyNameType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\ModifyNameType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\ModifyNameType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\ModifyNameType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ModifyNameType) {
            throw new InvalidArgumentException(sprintf('The ModifyName property can only contain items of type \macropage\ebaysdk\trading\StructType\ModifyNameType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyName
     */
    public function getAttributeName(): string
    {
        return 'ModifyName';
    }
}
