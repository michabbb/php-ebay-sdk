<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns information about an eBay seller's own account.
 * @subpackage Structs
 */
class GetAccountResponseType extends AbstractResponseType
{
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the seller's unique account number.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountID = null;
    /**
     * The FeeNettingStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the seller's account for the fee netting mechanism. If the <code>Enabled</code> value is returned, the seller may include the <b>IncludeNettedEntries</b> field in the request to
     * retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown in the
     * <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeeNettingStatus = null;
    /**
     * The AccountSummary
     * Meta information extracted from the WSDL
     * - documentation: Contains summary data for the seller's account, such as the overall balance, bank account and credit card information, and amount and date of any past due balances. Can also contain data for one or more additional accounts, if the
     * user has changed country of residence.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AccountSummaryType $AccountSummary = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Indicates the currency used for monetary amounts in the report.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The AccountEntries
     * Meta information extracted from the WSDL
     * - documentation: This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b>
     * container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is
     * used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountEntriesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AccountEntriesType $AccountEntries = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly
     * controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The HasMoreEntries
     * Meta information extracted from the WSDL
     * - documentation: If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of
     * the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasMoreEntries = null;
    /**
     * The EntriesPerPage
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EntriesPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * Constructor method for GetAccountResponseType
     * @uses GetAccountResponseType::setAccountID()
     * @uses GetAccountResponseType::setFeeNettingStatus()
     * @uses GetAccountResponseType::setAccountSummary()
     * @uses GetAccountResponseType::setCurrency()
     * @uses GetAccountResponseType::setAccountEntries()
     * @uses GetAccountResponseType::setPaginationResult()
     * @uses GetAccountResponseType::setHasMoreEntries()
     * @uses GetAccountResponseType::setEntriesPerPage()
     * @uses GetAccountResponseType::setPageNumber()
     * @param string $accountID
     * @param string $feeNettingStatus
     * @param \macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary
     * @param string $currency
     * @param \macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreEntries
     * @param int $entriesPerPage
     * @param int $pageNumber
     */
    public function __construct(?string $accountID = null, ?string $feeNettingStatus = null, ?\macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary = null, ?string $currency = null, ?\macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, ?bool $hasMoreEntries = null, ?int $entriesPerPage = null, ?int $pageNumber = null)
    {
        $this
            ->setAccountID($accountID)
            ->setFeeNettingStatus($feeNettingStatus)
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
    public function getAccountID(): ?string
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountID(?string $accountID = null): self
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountID, true), gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        
        return $this;
    }
    /**
     * Get FeeNettingStatus value
     * @return string|null
     */
    public function getFeeNettingStatus(): ?string
    {
        return $this->FeeNettingStatus;
    }
    /**
     * Set FeeNettingStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\FeenettingStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeenettingStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feeNettingStatus
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setFeeNettingStatus(?string $feeNettingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeenettingStatusCodeType::valueIsValid($feeNettingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeenettingStatusCodeType', is_array($feeNettingStatus) ? implode(', ', $feeNettingStatus) : var_export($feeNettingStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeenettingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->FeeNettingStatus = $feeNettingStatus;
        
        return $this;
    }
    /**
     * Get AccountSummary value
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType|null
     */
    public function getAccountSummary(): ?\macropage\ebaysdk\trading\StructType\AccountSummaryType
    {
        return $this->AccountSummary;
    }
    /**
     * Set AccountSummary value
     * @param \macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountSummary(?\macropage\ebaysdk\trading\StructType\AccountSummaryType $accountSummary = null): self
    {
        $this->AccountSummary = $accountSummary;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get AccountEntries value
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType|null
     */
    public function getAccountEntries(): ?\macropage\ebaysdk\trading\StructType\AccountEntriesType
    {
        return $this->AccountEntries;
    }
    /**
     * Set AccountEntries value
     * @param \macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setAccountEntries(?\macropage\ebaysdk\trading\StructType\AccountEntriesType $accountEntries = null): self
    {
        $this->AccountEntries = $accountEntries;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
    /**
     * Get HasMoreEntries value
     * @return bool|null
     */
    public function getHasMoreEntries(): ?bool
    {
        return $this->HasMoreEntries;
    }
    /**
     * Set HasMoreEntries value
     * @param bool $hasMoreEntries
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setHasMoreEntries(?bool $hasMoreEntries = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreEntries) && !is_bool($hasMoreEntries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreEntries, true), gettype($hasMoreEntries)), __LINE__);
        }
        $this->HasMoreEntries = $hasMoreEntries;
        
        return $this;
    }
    /**
     * Get EntriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage(): ?int
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
     */
    public function setEntriesPerPage(?int $entriesPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !(is_int($entriesPerPage) || ctype_digit($entriesPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entriesPerPage, true), gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetAccountResponseType
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
}
