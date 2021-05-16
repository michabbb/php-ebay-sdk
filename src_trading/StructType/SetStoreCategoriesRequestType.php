<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCategoriesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call allows you to set or modify the category structure of an eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStoreCategoriesRequestType extends AbstractRequestType
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of action (Add, Move, Delete, or Rename) to carry out for the specified eBay Store categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The ItemDestinationCategoryID
     * Meta information extracted from the WSDL
     * - documentation: Items can only be contained within child categories. A parent category cannot contain items. If adding, moving, or deleting categories displaces items, you must specify a destination child category under which the displaced items
     * will be moved. The destination category must have no child categories.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemDestinationCategoryID = null;
    /**
     * The DestinationParentCategoryID
     * Meta information extracted from the WSDL
     * - documentation: When adding or moving store categories, specifies the category under which the listed categories will be located. To add or move categories to the top level, set the value to -999.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DestinationParentCategoryID = null;
    /**
     * The StoreCategories
     * Meta information extracted from the WSDL
     * - documentation: Specifies the store categories on which to act.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $StoreCategories = null;
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
    public function __construct(?string $action = null, ?int $itemDestinationCategoryID = null, ?int $destinationParentCategoryID = null, ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories = null)
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
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCategoryUpdateActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get ItemDestinationCategoryID value
     * @return int|null
     */
    public function getItemDestinationCategoryID(): ?int
    {
        return $this->ItemDestinationCategoryID;
    }
    /**
     * Set ItemDestinationCategoryID value
     * @param int $itemDestinationCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setItemDestinationCategoryID(?int $itemDestinationCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($itemDestinationCategoryID) && !(is_int($itemDestinationCategoryID) || ctype_digit($itemDestinationCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemDestinationCategoryID, true), gettype($itemDestinationCategoryID)), __LINE__);
        }
        $this->ItemDestinationCategoryID = $itemDestinationCategoryID;
        
        return $this;
    }
    /**
     * Get DestinationParentCategoryID value
     * @return int|null
     */
    public function getDestinationParentCategoryID(): ?int
    {
        return $this->DestinationParentCategoryID;
    }
    /**
     * Set DestinationParentCategoryID value
     * @param int $destinationParentCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setDestinationParentCategoryID(?int $destinationParentCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationParentCategoryID) && !(is_int($destinationParentCategoryID) || ctype_digit($destinationParentCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationParentCategoryID, true), gettype($destinationParentCategoryID)), __LINE__);
        }
        $this->DestinationParentCategoryID = $destinationParentCategoryID;
        
        return $this;
    }
    /**
     * Get StoreCategories value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getStoreCategories(): ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
    {
        return $this->StoreCategories;
    }
    /**
     * Set StoreCategories value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType
     */
    public function setStoreCategories(?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $storeCategories = null): self
    {
        $this->StoreCategories = $storeCategories;
        
        return $this;
    }
}
