<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of order line items.
 * @subpackage Structs
 */
class PaginatedTransactionArrayType extends AbstractStructBase
{
    /**
     * The TransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Contains a list of Transaction objects. Returned as an empty tag if no applicable order line items exist.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $TransactionArray = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Provides information about the list of order line items, including number of pages and number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * Constructor method for PaginatedTransactionArrayType
     * @uses PaginatedTransactionArrayType::setTransactionArray()
     * @uses PaginatedTransactionArrayType::setPaginationResult()
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setTransactionArray($transactionArray)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get TransactionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray(): ?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
     */
    public function setTransactionArray(?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null): self
    {
        $this->TransactionArray = $transactionArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
}
