<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemTransactionsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns an array of order line item data for the item specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. Zero, one, or many <b>Transaction</b> objects can be
 * returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters. Also returns the <b>Item</b> object that
 * spawned the order line items. If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls. <br><br>
 * Data from the <b>TransactionArray</b> may be used to trigger the following Platform Notifications: EndOfAuction, AuctionCheckoutComplete, FixedPriceEndOfTransaction, CheckoutBuyerRequestTotal, FixedPriceTransaction, Checkout,
 * FixedPriceTransactionForSeller, FixedPriceTransactionForBuyer, ItemMarkedAsShipped, and ItemMarkedAsPaid. Each notification will be based on the state of the item (a 'snapshot' of the item) at the time the order line item was created.
 * @subpackage Structs
 */
class GetItemTransactionsResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls that use the same selection criteria as the call that returned
     * this response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreTransactions
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there are additional order line items to retrieve. That is, indicates whether more pages of data are available to be returned, given the filters that were specified in the request. Returns false for the last page of
     * data.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreTransactions;
    /**
     * The TransactionsPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Number of order line items returned per page (per call). May be a higher value than <b>ReturnedTransactionCountActual</b> if the page returned is the last page and more than one page of data exists.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionsPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Page number for the page of order line items the response returned.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedTransactionCountActual
     * Meta informations extracted from the WSDL
     * - documentation: Number of order line items retrieved in the current page of results just returned. May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last page and more than one page of data exists.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedTransactionCountActual;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing that the order line item represents.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The TransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: List of <b>Transaction</b> objects representing the order line items resulting from the listing. Each <b>Transaction</b> object contains the data for one purchase (of one or more items in the same listing). The
     * <b>Transaction.Item</b> field is not returned because the <b>Item</b> object is returned at the root level of the response. See the reference guide for more information about the fields that are returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The PayPalPreferred
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item's seller has the preference enabled that shows that the seller prefers PayPal as the method of payment for an item. This preference is indicated on an item's View Item page and is intended to influence a
     * buyer to use PayPal to pay for the item.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalPreferred;
    /**
     * Constructor method for GetItemTransactionsResponseType
     * @uses GetItemTransactionsResponseType::setPaginationResult()
     * @uses GetItemTransactionsResponseType::setHasMoreTransactions()
     * @uses GetItemTransactionsResponseType::setTransactionsPerPage()
     * @uses GetItemTransactionsResponseType::setPageNumber()
     * @uses GetItemTransactionsResponseType::setReturnedTransactionCountActual()
     * @uses GetItemTransactionsResponseType::setItem()
     * @uses GetItemTransactionsResponseType::setTransactionArray()
     * @uses GetItemTransactionsResponseType::setPayPalPreferred()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreTransactions
     * @param int $transactionsPerPage
     * @param int $pageNumber
     * @param int $returnedTransactionCountActual
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @param bool $payPalPreferred
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreTransactions = null, $transactionsPerPage = null, $pageNumber = null, $returnedTransactionCountActual = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, $payPalPreferred = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreTransactions($hasMoreTransactions)
            ->setTransactionsPerPage($transactionsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedTransactionCountActual($returnedTransactionCountActual)
            ->setItem($item)
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsResponseType
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
