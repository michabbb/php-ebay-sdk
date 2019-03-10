<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of the products created by the seller. The list of products is returned as a set of tags, in which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType object contains
 * the information about for one Selling Manager product and any Selling Manager templates the product contains.
 * @subpackage Structs
 */
class GetSellingManagerInventoryResponseType extends AbstractResponseType
{
    /**
     * The InventoryCountLastCalculatedDate
     * Meta informations extracted from the WSDL
     * - documentation: Returns the date the inventory counts were last calculated.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryCountLastCalculatedDate;
    /**
     * The SellingManagerProduct
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about the requested products and templates.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductType[]
     */
    public $SellingManagerProduct;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains the total number of pages (TotalNumberOfPages) and the total number of products entries (TotalNumberOfEntries) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetSellingManagerInventoryResponseType
     * @uses GetSellingManagerInventoryResponseType::setInventoryCountLastCalculatedDate()
     * @uses GetSellingManagerInventoryResponseType::setSellingManagerProduct()
     * @uses GetSellingManagerInventoryResponseType::setPaginationResult()
     * @param string $inventoryCountLastCalculatedDate
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType[] $sellingManagerProduct
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct($inventoryCountLastCalculatedDate = null, array $sellingManagerProduct = array(), \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setInventoryCountLastCalculatedDate($inventoryCountLastCalculatedDate)
            ->setSellingManagerProduct($sellingManagerProduct)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get InventoryCountLastCalculatedDate value
     * @return string|null
     */
    public function getInventoryCountLastCalculatedDate()
    {
        return $this->InventoryCountLastCalculatedDate;
    }
    /**
     * Set InventoryCountLastCalculatedDate value
     * @param string $inventoryCountLastCalculatedDate
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setInventoryCountLastCalculatedDate($inventoryCountLastCalculatedDate = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryCountLastCalculatedDate) && !is_string($inventoryCountLastCalculatedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventoryCountLastCalculatedDate)), __LINE__);
        }
        $this->InventoryCountLastCalculatedDate = $inventoryCountLastCalculatedDate;
        return $this;
    }
    /**
     * Get SellingManagerProduct value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType[]|null
     */
    public function getSellingManagerProduct()
    {
        return $this->SellingManagerProduct;
    }
    /**
     * Set SellingManagerProduct value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType[] $sellingManagerProduct
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setSellingManagerProduct(array $sellingManagerProduct = array())
    {
        foreach ($sellingManagerProduct as $getSellingManagerInventoryResponseTypeSellingManagerProductItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerInventoryResponseTypeSellingManagerProductItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerProductType) {
                throw new \InvalidArgumentException(sprintf('The SellingManagerProduct property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerProductType, "%s" given', is_object($getSellingManagerInventoryResponseTypeSellingManagerProductItem) ? get_class($getSellingManagerInventoryResponseTypeSellingManagerProductItem) : gettype($getSellingManagerInventoryResponseTypeSellingManagerProductItem)), __LINE__);
            }
        }
        $this->SellingManagerProduct = $sellingManagerProduct;
        return $this;
    }
    /**
     * Add item to SellingManagerProduct value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function addToSellingManagerProduct(\macropage\ebaysdk\trading\StructType\SellingManagerProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerProductType) {
            throw new \InvalidArgumentException(sprintf('The SellingManagerProduct property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellingManagerProduct[] = $item;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
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
