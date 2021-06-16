<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the set of orders that match the order IDs or filter criteria specified.
 * @subpackage Structs
 */
class GetOrdersResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The HasMoreOrders
     * Meta information extracted from the WSDL
     * - documentation: A true value indicates that there are more orders to be retrieved. Additional <b>GetOrders</b> calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or
     * no orders match the request (based on the input filters).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasMoreOrders = null;
    /**
     * The OrderArray
     * Meta information extracted from the WSDL
     * - documentation: The set of orders that match the order IDs or filter criteria specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\OrderArrayType $OrderArray = null;
    /**
     * The OrdersPerPage
     * Meta information extracted from the WSDL
     * - documentation: Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the <b>Pagination.EntriesPerPage</b> input (or the default value, if <b>EntriesPerPage</b> was not specified).
     * This is not necessarily the actual number of orders returned per page (see <b>ReturnedOrderCountActual</b>).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrdersPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates the page number of data returned in the response. This is the same value specified in the <b>Pagination.PageNumber</b> input. If orders are returned, the first page is 1.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The ReturnedOrderCountActual
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of orders returned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReturnedOrderCountActual = null;
    /**
     * Constructor method for GetOrdersResponseType
     * @uses GetOrdersResponseType::setPaginationResult()
     * @uses GetOrdersResponseType::setHasMoreOrders()
     * @uses GetOrdersResponseType::setOrderArray()
     * @uses GetOrdersResponseType::setOrdersPerPage()
     * @uses GetOrdersResponseType::setPageNumber()
     * @uses GetOrdersResponseType::setReturnedOrderCountActual()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreOrders
     * @param \macropage\ebaysdk\trading\StructType\OrderArrayType $orderArray
     * @param int $ordersPerPage
     * @param int $pageNumber
     * @param int $returnedOrderCountActual
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, ?bool $hasMoreOrders = null, ?\macropage\ebaysdk\trading\StructType\OrderArrayType $orderArray = null, ?int $ordersPerPage = null, ?int $pageNumber = null, ?int $returnedOrderCountActual = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreOrders($hasMoreOrders)
            ->setOrderArray($orderArray)
            ->setOrdersPerPage($ordersPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedOrderCountActual($returnedOrderCountActual);
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
    /**
     * Get HasMoreOrders value
     * @return bool|null
     */
    public function getHasMoreOrders(): ?bool
    {
        return $this->HasMoreOrders;
    }
    /**
     * Set HasMoreOrders value
     * @param bool $hasMoreOrders
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setHasMoreOrders(?bool $hasMoreOrders = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreOrders) && !is_bool($hasMoreOrders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreOrders, true), gettype($hasMoreOrders)), __LINE__);
        }
        $this->HasMoreOrders = $hasMoreOrders;
        
        return $this;
    }
    /**
     * Get OrderArray value
     * @return \macropage\ebaysdk\trading\StructType\OrderArrayType|null
     */
    public function getOrderArray(): ?\macropage\ebaysdk\trading\StructType\OrderArrayType
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \macropage\ebaysdk\trading\StructType\OrderArrayType $orderArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setOrderArray(?\macropage\ebaysdk\trading\StructType\OrderArrayType $orderArray = null): self
    {
        $this->OrderArray = $orderArray;
        
        return $this;
    }
    /**
     * Get OrdersPerPage value
     * @return int|null
     */
    public function getOrdersPerPage(): ?int
    {
        return $this->OrdersPerPage;
    }
    /**
     * Set OrdersPerPage value
     * @param int $ordersPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setOrdersPerPage(?int $ordersPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($ordersPerPage) && !(is_int($ordersPerPage) || ctype_digit($ordersPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ordersPerPage, true), gettype($ordersPerPage)), __LINE__);
        }
        $this->OrdersPerPage = $ordersPerPage;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get ReturnedOrderCountActual value
     * @return int|null
     */
    public function getReturnedOrderCountActual(): ?int
    {
        return $this->ReturnedOrderCountActual;
    }
    /**
     * Set ReturnedOrderCountActual value
     * @param int $returnedOrderCountActual
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setReturnedOrderCountActual(?int $returnedOrderCountActual = null): self
    {
        // validation for constraint: int
        if (!is_null($returnedOrderCountActual) && !(is_int($returnedOrderCountActual) || ctype_digit($returnedOrderCountActual))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnedOrderCountActual, true), gettype($returnedOrderCountActual)), __LINE__);
        }
        $this->ReturnedOrderCountActual = $returnedOrderCountActual;
        
        return $this;
    }
}
