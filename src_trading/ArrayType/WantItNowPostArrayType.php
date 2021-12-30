<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for WantItNowPostArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class WantItNowPostArrayType extends AbstractStructArrayBase
{
    /**
     * The WantItNowPost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WantItNowPostType[]
     */
    protected ?array $WantItNowPost = null;
    /**
     * Constructor method for WantItNowPostArrayType
     * @uses WantItNowPostArrayType::setWantItNowPost()
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType[] $wantItNowPost
     */
    public function __construct(?array $wantItNowPost = null)
    {
        $this
            ->setWantItNowPost($wantItNowPost);
    }
    /**
     * Get WantItNowPost value
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType[]
     */
    public function getWantItNowPost(): ?array
    {
        return $this->WantItNowPost;
    }
    /**
     * This method is responsible for validating the values passed to the setWantItNowPost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWantItNowPost method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWantItNowPostForArrayConstraintsFromSetWantItNowPost(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $wantItNowPostArrayTypeWantItNowPostItem) {
            // validation for constraint: itemType
            if (!$wantItNowPostArrayTypeWantItNowPostItem instanceof \macropage\ebaysdk\trading\StructType\WantItNowPostType) {
                $invalidValues[] = is_object($wantItNowPostArrayTypeWantItNowPostItem) ? get_class($wantItNowPostArrayTypeWantItNowPostItem) : sprintf('%s(%s)', gettype($wantItNowPostArrayTypeWantItNowPostItem), var_export($wantItNowPostArrayTypeWantItNowPostItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WantItNowPost property can only contain items of type \macropage\ebaysdk\trading\StructType\WantItNowPostType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WantItNowPost value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType[] $wantItNowPost
     * @return \macropage\ebaysdk\trading\ArrayType\WantItNowPostArrayType
     */
    public function setWantItNowPost(?array $wantItNowPost = null): self
    {
        // validation for constraint: array
        if ('' !== ($wantItNowPostArrayErrorMessage = self::validateWantItNowPostForArrayConstraintsFromSetWantItNowPost($wantItNowPost))) {
            throw new InvalidArgumentException($wantItNowPostArrayErrorMessage, __LINE__);
        }
        $this->WantItNowPost = $wantItNowPost;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\WantItNowPostType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\WantItNowPostType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\WantItNowPostType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\WantItNowPostType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\WantItNowPostType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType $item
     * @return \macropage\ebaysdk\trading\ArrayType\WantItNowPostArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WantItNowPostType) {
            throw new InvalidArgumentException(sprintf('The WantItNowPost property can only contain items of type \macropage\ebaysdk\trading\StructType\WantItNowPostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WantItNowPost
     */
    public function getAttributeName(): string
    {
        return 'WantItNowPost';
    }
}
