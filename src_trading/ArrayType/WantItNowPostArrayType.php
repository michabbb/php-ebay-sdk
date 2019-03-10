<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for WantItNowPostArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class WantItNowPostArrayType extends AbstractStructArrayBase
{
    /**
     * The WantItNowPost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WantItNowPostType[]
     */
    public $WantItNowPost;
    /**
     * Constructor method for WantItNowPostArrayType
     * @uses WantItNowPostArrayType::setWantItNowPost()
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType[] $wantItNowPost
     */
    public function __construct(array $wantItNowPost = array())
    {
        $this
            ->setWantItNowPost($wantItNowPost);
    }
    /**
     * Get WantItNowPost value
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType[]|null
     */
    public function getWantItNowPost()
    {
        return $this->WantItNowPost;
    }
    /**
     * Set WantItNowPost value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType[] $wantItNowPost
     * @return \macropage\ebaysdk\trading\ArrayType\WantItNowPostArrayType
     */
    public function setWantItNowPost(array $wantItNowPost = array())
    {
        foreach ($wantItNowPost as $wantItNowPostArrayTypeWantItNowPostItem) {
            // validation for constraint: itemType
            if (!$wantItNowPostArrayTypeWantItNowPostItem instanceof \macropage\ebaysdk\trading\StructType\WantItNowPostType) {
                throw new \InvalidArgumentException(sprintf('The WantItNowPost property can only contain items of \macropage\ebaysdk\trading\StructType\WantItNowPostType, "%s" given', is_object($wantItNowPostArrayTypeWantItNowPostItem) ? get_class($wantItNowPostArrayTypeWantItNowPostItem) : gettype($wantItNowPostArrayTypeWantItNowPostItem)), __LINE__);
            }
        }
        $this->WantItNowPost = $wantItNowPost;
        return $this;
    }
    /**
     * Add item to WantItNowPost value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WantItNowPostType $item
     * @return \macropage\ebaysdk\trading\ArrayType\WantItNowPostArrayType
     */
    public function addToWantItNowPost(\macropage\ebaysdk\trading\StructType\WantItNowPostType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WantItNowPostType) {
            throw new \InvalidArgumentException(sprintf('The WantItNowPost property can only contain items of \macropage\ebaysdk\trading\StructType\WantItNowPostType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WantItNowPost[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WantItNowPost
     */
    public function getAttributeName()
    {
        return 'WantItNowPost';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\WantItNowPostArrayType
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
