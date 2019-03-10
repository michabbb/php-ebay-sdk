<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedTransactionArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a paginated list of order line items.
 * @subpackage Structs
 */
class PaginatedTransactionArrayType extends AbstractStructBase
{
    /**
     * The TransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains a list of Transaction objects. Returned as an empty tag if no applicable order line items exist.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Provides information about the list of order line items, including number of pages and number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for PaginatedTransactionArrayType
     * @uses PaginatedTransactionArrayType::setTransactionArray()
     * @uses PaginatedTransactionArrayType::setPaginationResult()
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setTransactionArray($transactionArray)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get TransactionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray()
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
     */
    public function setTransactionArray(\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
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
