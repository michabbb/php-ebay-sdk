<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. Response can be filtered by date, search values, and stores.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{
    /**
     * The SaleRecord
     * Meta informations extracted from the WSDL
     * - documentation: A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[]
     */
    public $SaleRecord;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetSellingManagerSoldListingsResponseType
     * @uses GetSellingManagerSoldListingsResponseType::setSaleRecord()
     * @uses GetSellingManagerSoldListingsResponseType::setPaginationResult()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[] $saleRecord
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(array $saleRecord = array(), \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setSaleRecord($saleRecord)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get SaleRecord value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[]|null
     */
    public function getSaleRecord()
    {
        return $this->SaleRecord;
    }
    /**
     * Set SaleRecord value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[] $saleRecord
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
     */
    public function setSaleRecord(array $saleRecord = array())
    {
        foreach ($saleRecord as $getSellingManagerSoldListingsResponseTypeSaleRecordItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerSoldListingsResponseTypeSaleRecordItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType) {
                throw new \InvalidArgumentException(sprintf('The SaleRecord property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType, "%s" given', is_object($getSellingManagerSoldListingsResponseTypeSaleRecordItem) ? get_class($getSellingManagerSoldListingsResponseTypeSaleRecordItem) : gettype($getSellingManagerSoldListingsResponseTypeSaleRecordItem)), __LINE__);
            }
        }
        $this->SaleRecord = $saleRecord;
        return $this;
    }
    /**
     * Add item to SaleRecord value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
     */
    public function addToSaleRecord(\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType) {
            throw new \InvalidArgumentException(sprintf('The SaleRecord property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SaleRecord[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
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
