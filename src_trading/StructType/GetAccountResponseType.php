<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns information about an eBay seller's own account.
 * @subpackage Structs
 */
class GetAccountResponseType extends AbstractResponseType
{
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the seller's unique account number.
     * - minOccurs: 0
     * @var string
     */
    public $AccountID;
    /**
     * The AccountSummary
     * Meta informations extracted from the WSDL
     * - documentation: Contains summary data for the seller's account, such as the overall balance, bank account and credit card information, and amount and date of any past due balances. Can also contain data for one or more additional accounts, if the
     * user has changed country of residence.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public $AccountSummary;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the currency used for monetary amounts in the report.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The AccountEntries
     * Meta informations extracted from the WSDL
     * - documentation: This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b>
     * container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if 'LastInvoice' value is used),
     * between the specified dates (if 'BetweenSpecifiedDates' value is used), or on a specified invoice (if 'SpecifiedInvoice' value is used).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountEntriesType
     */
    public $AccountEntries;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly
     * controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreEntries
     * Meta informations extracted from the WSDL
     * - documentation: If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of
     * the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreEntries;
    /**
     * The EntriesPerPage
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $EntriesPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * Constructor method for GetAccountResponseType
     * @uses GetAccountResponseType::setAccountID()
     * @uses GetAccountResponseType::setAccountSummary()
     * @uses GetAccountResponseType::setCurrency()
     * @uses GetAccountResponseType::setAccountEntries()
     * @uses GetAccountResponseType::setPaginationResult()
     * @uses GetAccountResponseType::setHasMoreEntries()
     * @uses GetAccountResponseType::setEntriesPerPage()
     * @uses GetAccountResponseType::setPageNumber()
     * @param string $accountID
     * @param \macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary
     * @param string $currency
     * @param \macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreEntries
     * @param int $entriesPerPage
     * @param int $pageNumber
     */
    public function __construct($accountID = null, \macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary = null, $currency = null, \macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreEntries = null, $entriesPerPage = null, $pageNumber = null)
    {
        $this
            ->setAccountID($accountID)
            ->setAccountSummary($accountSummary)
            ->setCurrency($currency)
            ->setAccountEntries($accountEntries)
            ->setPaginationResult($paginationResult)
            ->setHasMoreEntries($hasMoreEntries)
            ->setEntriesPerPage($entriesPerPage)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get AccountSummary value
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType|null
     */
    public function getAccountSummary()
    {
        return $this->AccountSummary;
    }
    /**
     * Set AccountSummary value
     * @param \macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountSummary(\macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary = null)
    {
        $this->AccountSummary = $accountSummary;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AccountEntries value
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType|null
     */
    public function getAccountEntries()
    {
        return $this->AccountEntries;
    }
    /**
     * Set AccountEntries value
     * @param \macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountEntries(\macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries = null)
    {
        $this->AccountEntries = $accountEntries;
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
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreEntries value
     * @return bool|null
     */
    public function getHasMoreEntries()
    {
        return $this->HasMoreEntries;
    }
    /**
     * Set HasMoreEntries value
     * @param bool $hasMoreEntries
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreEntries) && !is_bool($hasMoreEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreEntries)), __LINE__);
        }
        $this->HasMoreEntries = $hasMoreEntries;
        return $this;
    }
    /**
     * Get EntriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage()
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setEntriesPerPage($entriesPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !is_numeric($entriesPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
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
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
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
