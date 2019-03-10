<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AverageRatingDetailArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type has been deprecated.
 * @subpackage Arrays
 */
class AverageRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]
     */
    public $AverageRatingDetails;
    /**
     * Constructor method for AverageRatingDetailArrayType
     * @uses AverageRatingDetailArrayType::setAverageRatingDetails()
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     */
    public function __construct(array $averageRatingDetails = array())
    {
        $this
            ->setAverageRatingDetails($averageRatingDetails);
    }
    /**
     * Get AverageRatingDetails value
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]|null
     */
    public function getAverageRatingDetails()
    {
        return $this->AverageRatingDetails;
    }
    /**
     * Set AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \macropage\ebaysdk\trading\ArrayType\AverageRatingDetailArrayType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = array())
    {
        foreach ($averageRatingDetails as $averageRatingDetailArrayTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$averageRatingDetailArrayTypeAverageRatingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, "%s" given', is_object($averageRatingDetailArrayTypeAverageRatingDetailsItem) ? get_class($averageRatingDetailArrayTypeAverageRatingDetailsItem) : gettype($averageRatingDetailArrayTypeAverageRatingDetailsItem)), __LINE__);
            }
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AverageRatingDetailArrayType
     */
    public function addToAverageRatingDetails(\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingDetails
     */
    public function getAttributeName()
    {
        return 'AverageRatingDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\AverageRatingDetailArrayType
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
