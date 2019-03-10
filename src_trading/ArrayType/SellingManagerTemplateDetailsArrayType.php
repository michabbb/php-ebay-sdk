<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SellingManagerTemplateDetailsArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <strong>SellingManagerTemplateDetailsArray</strong> container that is returned in the <strong>GetSellingManagerInventory</strong> and <strong>GetSellingManagerTemplates</strong> calls. The
 * <strong>SellingManagerTemplateDetailsArray</strong> container consists of one or more Selling Manager Templates that match the input criteria.
 * @subpackage Arrays
 */
class SellingManagerTemplateDetailsArrayType extends AbstractStructArrayBase
{
    /**
     * The SellingManagerTemplateDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information for one Selling Manager Template. <br/><br/> <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling
     * Manager Template that matches the input criteria. <br/><br/> <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the
     * corresponding Selling Manager Product (if any).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType[]
     */
    public $SellingManagerTemplateDetails;
    /**
     * Constructor method for SellingManagerTemplateDetailsArrayType
     * @uses SellingManagerTemplateDetailsArrayType::setSellingManagerTemplateDetails()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     */
    public function __construct(array $sellingManagerTemplateDetails = array())
    {
        $this
            ->setSellingManagerTemplateDetails($sellingManagerTemplateDetails);
    }
    /**
     * Get SellingManagerTemplateDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType[]|null
     */
    public function getSellingManagerTemplateDetails()
    {
        return $this->SellingManagerTemplateDetails;
    }
    /**
     * Set SellingManagerTemplateDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public function setSellingManagerTemplateDetails(array $sellingManagerTemplateDetails = array())
    {
        foreach ($sellingManagerTemplateDetails as $sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) {
            // validation for constraint: itemType
            if (!$sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType) {
                throw new \InvalidArgumentException(sprintf('The SellingManagerTemplateDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType, "%s" given', is_object($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) ? get_class($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem) : gettype($sellingManagerTemplateDetailsArrayTypeSellingManagerTemplateDetailsItem)), __LINE__);
            }
        }
        $this->SellingManagerTemplateDetails = $sellingManagerTemplateDetails;
        return $this;
    }
    /**
     * Add item to SellingManagerTemplateDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
     */
    public function addToSellingManagerTemplateDetails(\macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerTemplateDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellingManagerTemplateDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SellingManagerTemplateDetails
     */
    public function getAttributeName()
    {
        return 'SellingManagerTemplateDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
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
