<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerTransactionsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns an array of order line item (transaction) data for the seller specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. <br/><br/> Zero, one, or many
 * <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTimeTo</b> filters. The
 * order line items returned are sorted by <b>Transaction.Status.LastTimeModified</b>, ascending order (that is, order line items that more recently were modified are returned last). This call also returns information about the seller whose order line
 * items were requested. <br/><br/> If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls.
 * @subpackage Structs
 */
class GetSellerTransactionsResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the total number of order line items that match the input criteria and the total number of pages that must be scrolled through to view all order line items. To scroll through each page of order line item data,
     * make subsequent <b>GetSellerTransactions</b> calls, incrementing the <b>Pagination.PageNumber</b> field by a value of '1' each time.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreTransactions
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether there are additional pages of order line items to view. This field will be returned as <code>true</code> if there are additional pages or order line items to <code>view</code>, or <code>false</code> if the
     * current page of order line item data is the last page of data.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreTransactions;
    /**
     * The TransactionsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the number of order line items returned per page (per call) and is controlled by the <b>Pagination.EntriesPerPage</b> value passed in the call request. Unless it is the last (or possibly only) page of data
     * (<b>HasMoreTransactions=false</b>), the <b>TransactionsPerPage</b> value should equal the <b>Pagination.EntriesPerPage</b> value passed in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay
     * platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3,
     * and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time)
     * until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TransactionsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the page number of retrieved order line items that match the input criteria. This value is controlled by the <b>Pagination.PageNumber</b> value passed in the call request. To scroll through all pages of order
     * line items that match the input criteria, you increment the <b>Pagination.PageNumber</b> value by <code>1</code> with each subsequent <b>GetSellerTransactions</b> call.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedTransactionCountActual
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the total number of (non-empty) order line items retrieved in the current page of results. The <b>ReturnedTransactionCountActual</b> value will be lower than the <b>TransactionsPerPage</b> value if one or more
     * empty order line items are retrieved on the page. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain
     * no data. For pages that contain no order line item data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll
     * through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedTransactionCountActual;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the seller whose order line items are being returned. See the reference guide for information about the <b>Seller</b> object fields that are returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $Seller;
    /**
     * The TransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: List of <b>Transaction</b> objects representing the seller's recent sales. Each <b>Transaction</b> object contains the data for one purchase (of one or more items in the same listing). See the reference guide for more information
     * about the fields that are returned for each order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The PayPalPreferred
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller has the preference enabled that shows that the seller prefers PayPal as the method of payment for an item. This preference is indicated on an item's View Item page and is intended to influence a buyer to
     * use PayPal to pay for the item.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalPreferred;
    /**
     * Constructor method for GetSellerTransactionsResponseType
     * @uses GetSellerTransactionsResponseType::setPaginationResult()
     * @uses GetSellerTransactionsResponseType::setHasMoreTransactions()
     * @uses GetSellerTransactionsResponseType::setTransactionsPerPage()
     * @uses GetSellerTransactionsResponseType::setPageNumber()
     * @uses GetSellerTransactionsResponseType::setReturnedTransactionCountActual()
     * @uses GetSellerTransactionsResponseType::setSeller()
     * @uses GetSellerTransactionsResponseType::setTransactionArray()
     * @uses GetSellerTransactionsResponseType::setPayPalPreferred()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreTransactions
     * @param int $transactionsPerPage
     * @param int $pageNumber
     * @param int $returnedTransactionCountActual
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @param bool $payPalPreferred
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreTransactions = null, $transactionsPerPage = null, $pageNumber = null, $returnedTransactionCountActual = null, \macropage\ebaysdk\trading\StructType\UserType $seller = null, \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, $payPalPreferred = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreTransactions($hasMoreTransactions)
            ->setTransactionsPerPage($transactionsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedTransactionCountActual($returnedTransactionCountActual)
            ->setSeller($seller)
            ->setTransactionArray($transactionArray)
            ->setPayPalPreferred($payPalPreferred);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreTransactions value
     * @return bool|null
     */
    public function getHasMoreTransactions()
    {
        return $this->HasMoreTransactions;
    }
    /**
     * Set HasMoreTransactions value
     * @param bool $hasMoreTransactions
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setHasMoreTransactions($hasMoreTransactions = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreTransactions) && !is_bool($hasMoreTransactions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreTransactions)), __LINE__);
        }
        $this->HasMoreTransactions = $hasMoreTransactions;
        return $this;
    }
    /**
     * Get TransactionsPerPage value
     * @return int|null
     */
    public function getTransactionsPerPage()
    {
        return $this->TransactionsPerPage;
    }
    /**
     * Set TransactionsPerPage value
     * @param int $transactionsPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setTransactionsPerPage($transactionsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($transactionsPerPage) && !is_numeric($transactionsPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionsPerPage)), __LINE__);
        }
        $this->TransactionsPerPage = $transactionsPerPage;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
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
     * Get ReturnedTransactionCountActual value
     * @return int|null
     */
    public function getReturnedTransactionCountActual()
    {
        return $this->ReturnedTransactionCountActual;
    }
    /**
     * Set ReturnedTransactionCountActual value
     * @param int $returnedTransactionCountActual
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setReturnedTransactionCountActual($returnedTransactionCountActual = null)
    {
        // validation for constraint: int
        if (!is_null($returnedTransactionCountActual) && !is_numeric($returnedTransactionCountActual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnedTransactionCountActual)), __LINE__);
        }
        $this->ReturnedTransactionCountActual = $returnedTransactionCountActual;
        return $this;
    }
    /**
     * Get Seller value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setSeller(\macropage\ebaysdk\trading\StructType\UserType $seller = null)
    {
        $this->Seller = $seller;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setTransactionArray(\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
        return $this;
    }
    /**
     * Get PayPalPreferred value
     * @return bool|null
     */
    public function getPayPalPreferred()
    {
        return $this->PayPalPreferred;
    }
    /**
     * Set PayPalPreferred value
     * @param bool $payPalPreferred
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
     */
    public function setPayPalPreferred($payPalPreferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalPreferred) && !is_bool($payPalPreferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalPreferred)), __LINE__);
        }
        $this->PayPalPreferred = $payPalPreferred;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsResponseType
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
