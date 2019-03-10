<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the set of orders that match the order IDs or filter criteria specified.
 * @subpackage Structs
 */
class GetOrdersResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreOrders
     * Meta informations extracted from the WSDL
     * - documentation: A true value indicates that there are more orders to be retrieved. Additional <b>GetOrders</b> calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or
     * no orders match the request (based on the input filters).
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreOrders;
    /**
     * The OrderArray
     * Meta informations extracted from the WSDL
     * - documentation: The set of orders that match the order IDs or filter criteria specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public $OrderArray;
    /**
     * The OrdersPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the <b>Pagination.EntriesPerPage</b> input (or the default value, if <b>EntriesPerPage</b> was not specified).
     * This is not necessarily the actual number of orders returned per page (see <b>ReturnedOrderCountActual</b>).
     * - minOccurs: 0
     * @var int
     */
    public $OrdersPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the page number of data returned in the response. This is the same value specified in the <b>Pagination.PageNumber</b> input. If orders are returned, the first page is 1.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedOrderCountActual
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of orders returned.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedOrderCountActual;
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
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     * @param int $ordersPerPage
     * @param int $pageNumber
     * @param int $returnedOrderCountActual
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreOrders = null, \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null, $ordersPerPage = null, $pageNumber = null, $returnedOrderCountActual = null)
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
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreOrders value
     * @return bool|null
     */
    public function getHasMoreOrders()
    {
        return $this->HasMoreOrders;
    }
    /**
     * Set HasMoreOrders value
     * @param bool $hasMoreOrders
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setHasMoreOrders($hasMoreOrders = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreOrders) && !is_bool($hasMoreOrders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreOrders)), __LINE__);
        }
        $this->HasMoreOrders = $hasMoreOrders;
        return $this;
    }
    /**
     * Get OrderArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType|null
     */
    public function getOrderArray()
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setOrderArray(\macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null)
    {
        $this->OrderArray = $orderArray;
        return $this;
    }
    /**
     * Get OrdersPerPage value
     * @return int|null
     */
    public function getOrdersPerPage()
    {
        return $this->OrdersPerPage;
    }
    /**
     * Set OrdersPerPage value
     * @param int $ordersPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setOrdersPerPage($ordersPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($ordersPerPage) && !is_numeric($ordersPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ordersPerPage)), __LINE__);
        }
        $this->OrdersPerPage = $ordersPerPage;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get ReturnedOrderCountActual value
     * @return int|null
     */
    public function getReturnedOrderCountActual()
    {
        return $this->ReturnedOrderCountActual;
    }
    /**
     * Set ReturnedOrderCountActual value
     * @param int $returnedOrderCountActual
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
     */
    public function setReturnedOrderCountActual($returnedOrderCountActual = null)
    {
        // validation for constraint: int
        if (!is_null($returnedOrderCountActual) && !is_numeric($returnedOrderCountActual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnedOrderCountActual)), __LINE__);
        }
        $this->ReturnedOrderCountActual = $returnedOrderCountActual;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersResponseType
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
