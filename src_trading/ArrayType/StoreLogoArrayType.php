<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreLogoArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Set of Store logos.
 * @subpackage Arrays
 */
class StoreLogoArrayType extends AbstractStructArrayBase
{
    /**
     * The Logo
     * Meta informations extracted from the WSDL
     * - documentation: A Store logo.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreLogoType[]
     */
    public $Logo;
    /**
     * Constructor method for StoreLogoArrayType
     * @uses StoreLogoArrayType::setLogo()
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType[] $logo
     */
    public function __construct(array $logo = array())
    {
        $this
            ->setLogo($logo);
    }
    /**
     * Get Logo value
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType[]|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType[] $logo
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
     */
    public function setLogo(array $logo = array())
    {
        foreach ($logo as $storeLogoArrayTypeLogoItem) {
            // validation for constraint: itemType
            if (!$storeLogoArrayTypeLogoItem instanceof \macropage\ebaysdk\trading\StructType\StoreLogoType) {
                throw new \InvalidArgumentException(sprintf('The Logo property can only contain items of \macropage\ebaysdk\trading\StructType\StoreLogoType, "%s" given', is_object($storeLogoArrayTypeLogoItem) ? get_class($storeLogoArrayTypeLogoItem) : gettype($storeLogoArrayTypeLogoItem)), __LINE__);
            }
        }
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Add item to Logo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
     */
    public function addToLogo(\macropage\ebaysdk\trading\StructType\StoreLogoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreLogoType) {
            throw new \InvalidArgumentException(sprintf('The Logo property can only contain items of \macropage\ebaysdk\trading\StructType\StoreLogoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Logo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Logo
     */
    public function getAttributeName()
    {
        return 'Logo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
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
