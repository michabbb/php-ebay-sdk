<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCategoriesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call allows you to set or modify the category structure of an eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStoreCategoriesRequestType extends AbstractRequestType
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of action (Add, Move, Delete, or Rename) to carry out for the specified eBay Store categories.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The ItemDestinationCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Items can only be contained within child categories. A parent category cannot contain items. If adding, moving, or deleting categories displaces items, you must specify a destination child category under which the displaced items
     * will be moved. The destination category must have no child categories.
     * - minOccurs: 0
     * @var int
     */
    public $ItemDestinationCategoryID;
    /**
     * The DestinationParentCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: When adding or moving store categories, specifies the category under which the listed categories will be located. To add or move categories to the top level, set the value to -999.
     * - minOccurs: 0
     * @var int
     */
    public $DestinationParentCategoryID;
    /**
     * The StoreCategories
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the store categories on which to act.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public $StoreCategories;
    /**
     * Constructor method for SetStoreCategoriesRequestType
     * @uses SetStoreCategoriesRequestType::setAction()
     * @uses SetStoreCategoriesRequestType::setItemDestinationCategoryID()
     * @uses SetStoreCategoriesRequestType::setDestinationParentCategoryID()
     * @uses SetStoreCategoriesRequestType::setStoreCategories()
     * @param string $action
     * @param int $itemDestinationCategoryID
     * @param int $destinationParentCategoryID
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories
     */
    public function __construct($action = null, $itemDestinationCategoryID = null, $destinationParentCategoryID = null, \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories = null)
    {
        $this
            ->setAction($action)
            ->setItemDestinationCategoryID($itemDestinationCategoryID)
            ->setDestinationParentCategoryID($destinationParentCategoryID)
            ->setStoreCategories($storeCategories);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get ItemDestinationCategoryID value
     * @return int|null
     */
    public function getItemDestinationCategoryID()
    {
        return $this->ItemDestinationCategoryID;
    }
    /**
     * Set ItemDestinationCategoryID value
     * @param int $itemDestinationCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setItemDestinationCategoryID($itemDestinationCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($itemDestinationCategoryID) && !is_numeric($itemDestinationCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemDestinationCategoryID)), __LINE__);
        }
        $this->ItemDestinationCategoryID = $itemDestinationCategoryID;
        return $this;
    }
    /**
     * Get DestinationParentCategoryID value
     * @return int|null
     */
    public function getDestinationParentCategoryID()
    {
        return $this->DestinationParentCategoryID;
    }
    /**
     * Set DestinationParentCategoryID value
     * @param int $destinationParentCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setDestinationParentCategoryID($destinationParentCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($destinationParentCategoryID) && !is_numeric($destinationParentCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destinationParentCategoryID)), __LINE__);
        }
        $this->DestinationParentCategoryID = $destinationParentCategoryID;
        return $this;
    }
    /**
     * Get StoreCategories value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getStoreCategories()
    {
        return $this->StoreCategories;
    }
    /**
     * Set StoreCategories value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setStoreCategories(\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories = null)
    {
        $this->StoreCategories = $storeCategories;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
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
