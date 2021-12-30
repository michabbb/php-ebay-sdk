<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NameValueListArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: A list of one or more valid names and corresponding values used to identify Item Specifics at the listing level and at the variation level for individual variations within a multiple-variation listing. For the <b>FindProducts</b>
 * call, this container is also used to express the Item Specifics for an eBay Catalog product.
 * @subpackage Arrays
 */
class NameValueListArrayType extends AbstractStructArrayBase
{
    /**
     * The NameValueList
     * Meta information extracted from the WSDL
     * - documentation: This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a
     * multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used). <br><br> For example, Item Specifics for a motor vehicle might include a field like Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and
     * <code>Toyota</code> is returned in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br> <br> In multiple-variation listings, the same name
     * cannot appear in both the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual
     * variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes. <br><br> For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more
     * variations to retrieve from a specific multiple-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    protected ?array $NameValueList = null;
    /**
     * Constructor method for NameValueListArrayType
     * @uses NameValueListArrayType::setNameValueList()
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     */
    public function __construct(?array $nameValueList = null)
    {
        $this
            ->setNameValueList($nameValueList);
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    public function getNameValueList(): ?array
    {
        return $this->NameValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setNameValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameValueListForArrayConstraintsFromSetNameValueList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $nameValueListArrayTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$nameValueListArrayTypeNameValueListItem instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
                $invalidValues[] = is_object($nameValueListArrayTypeNameValueListItem) ? get_class($nameValueListArrayTypeNameValueListItem) : sprintf('%s(%s)', gettype($nameValueListArrayTypeNameValueListItem), var_export($nameValueListArrayTypeNameValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\shopping\StructType\NameValueListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public function setNameValueList(?array $nameValueList = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameValueListArrayErrorMessage = self::validateNameValueListForArrayConstraintsFromSetNameValueList($nameValueList))) {
            throw new InvalidArgumentException($nameValueListArrayErrorMessage, __LINE__);
        }
        $this->NameValueList = $nameValueList;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function current(): ?\macropage\ebaysdk\shopping\StructType\NameValueListType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function item($index): ?\macropage\ebaysdk\shopping\StructType\NameValueListType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function first(): ?\macropage\ebaysdk\shopping\StructType\NameValueListType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function last(): ?\macropage\ebaysdk\shopping\StructType\NameValueListType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\shopping\StructType\NameValueListType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
            throw new InvalidArgumentException(sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\shopping\StructType\NameValueListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NameValueList
     */
    public function getAttributeName(): string
    {
        return 'NameValueList';
    }
}
