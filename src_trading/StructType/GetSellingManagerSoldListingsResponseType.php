<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSoldListingsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a Selling Manager user's sold listings. Response can be filtered by date, search values, and stores.
 * @subpackage Structs
 */
class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{
    /**
     * The SaleRecord
     * Meta information extracted from the WSDL
     * - documentation: A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[]
     */
    protected array $SaleRecord = [];
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * Constructor method for GetSellingManagerSoldListingsResponseType
     * @uses GetSellingManagerSoldListingsResponseType::setSaleRecord()
     * @uses GetSellingManagerSoldListingsResponseType::setPaginationResult()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[] $saleRecord
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(array $saleRecord = [], ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setSaleRecord($saleRecord)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get SaleRecord value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[]
     */
    public function getSaleRecord(): array
    {
        return $this->SaleRecord;
    }
    /**
     * This method is responsible for validating the values passed to the setSaleRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaleRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSaleRecordForArrayConstraintsFromSetSaleRecord(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerSoldListingsResponseTypeSaleRecordItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerSoldListingsResponseTypeSaleRecordItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType) {
                $invalidValues[] = is_object($getSellingManagerSoldListingsResponseTypeSaleRecordItem) ? get_class($getSellingManagerSoldListingsResponseTypeSaleRecordItem) : sprintf('%s(%s)', gettype($getSellingManagerSoldListingsResponseTypeSaleRecordItem), var_export($getSellingManagerSoldListingsResponseTypeSaleRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SaleRecord property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SaleRecord value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType[] $saleRecord
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
     */
    public function setSaleRecord(array $saleRecord = []): self
    {
        // validation for constraint: array
        if ('' !== ($saleRecordArrayErrorMessage = self::validateSaleRecordForArrayConstraintsFromSetSaleRecord($saleRecord))) {
            throw new InvalidArgumentException($saleRecordArrayErrorMessage, __LINE__);
        }
        $this->SaleRecord = $saleRecord;
        
        return $this;
    }
    /**
     * Add item to SaleRecord value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
     */
    public function addToSaleRecord(\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType) {
            throw new InvalidArgumentException(sprintf('The SaleRecord property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SaleRecord[] = $item;
        
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
}
