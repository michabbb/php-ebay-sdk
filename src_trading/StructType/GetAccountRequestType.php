<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a seller's invoice data for their eBay account, including the account's summary data.
 * @subpackage Structs
 */
class GetAccountRequestType extends AbstractRequestType
{
    /**
     * The AccountHistorySelection
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the report format in which to return account entries.
     * - minOccurs: 0
     * @var string
     */
    public $AccountHistorySelection;
    /**
     * The InvoiceDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries from a specific invoice, which is identified through this <b>InvoiceDate</b> field with the timestamp of the account invoice. This field is only applicable if the
     * <b>AccountHistorySelection</b> value is set to 'SpecifiedInvoice'; otherwise, this field will be ignored.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceDate;
    /**
     * The BeginDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries dating back to the timestamp passed into this <b>BeginDate</b> field up until the timestamp passed into the <b>EndDate</b> field. The <b>BeginDate</b> value can not be set back any
     * further than four months into the past. <br/><br/> The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>BeginDate</b> value must be less than or equal to the <b>EndDate</b> value. The user might use the same values
     * in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used). <br/><br/> This field is only
     * applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. fiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     * - minOccurs: 0
     * @var string
     */
    public $BeginDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to retrieve all account entries dating up to the timestamp passed into this <b>EndDate</b> field dating back to the timestamp passed into the <b>BeginDate</b> field. The <b>EndDate</b> value can not be set for a
     * future date. <br/><br/> The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>EndDate</b> value must be more than or equal to the <b>BeginDate</b> value. The user might use the same values in both fields if that
     * user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used). <br/><br/> This field is only applicable if the
     * <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. If 'BetweenSpecifiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to control how many account entries are returned on each page of data in the response. <b>PaginationType</b> is used by numerous Trading API calls, and the default and maximum values for the
     * <b>EntriesPerPage</b> field differs with each call. For the <b>GetAccount</b> call, the default value is 500 (account entries) per page, and maximum allowed value is 2000 (account entries) per page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The ExcludeBalance
     * Meta informations extracted from the WSDL
     * - documentation: By default, the current balance of the user's account will not be returned in the call response. To retrieve the current balance of their account, the user should include the <b>ExcludeBalance</b> flag in the request and set its
     * value to 'false'. The current balance on the account will be shown in the <b>AccountSummary.CurrentBalance</b> field in the call response.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeBalance;
    /**
     * The ExcludeSummary
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to return account summary information in an AccountSummary node. Default is true, to return AccountSummary.
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeSummary;
    /**
     * The IncludeConversionRate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeConversionRate;
    /**
     * The AccountEntrySortType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how account entries should be sorted in the response, by an element and then in ascending or descending order.
     * - minOccurs: 0
     * @var string
     */
    public $AccountEntrySortType;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the currency used in the account report. Do not specify Currency in the request unless the following conditions are met. First, the user has or had multiple accounts under the same UserID. Second, the account identified in
     * the request uses the currency you specify in the request. An error is returned if no account is found that uses the currency you specify in the request.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the item ID for which to return account entries. If ItemID is used, all other filters in the request are ignored. If the specified item does not exist or if the requesting user is not the seller of the item, an error is
     * returned. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * Constructor method for GetAccountRequestType
     * @uses GetAccountRequestType::setAccountHistorySelection()
     * @uses GetAccountRequestType::setInvoiceDate()
     * @uses GetAccountRequestType::setBeginDate()
     * @uses GetAccountRequestType::setEndDate()
     * @uses GetAccountRequestType::setPagination()
     * @uses GetAccountRequestType::setExcludeBalance()
     * @uses GetAccountRequestType::setExcludeSummary()
     * @uses GetAccountRequestType::setIncludeConversionRate()
     * @uses GetAccountRequestType::setAccountEntrySortType()
     * @uses GetAccountRequestType::setCurrency()
     * @uses GetAccountRequestType::setItemID()
     * @param string $accountHistorySelection
     * @param string $invoiceDate
     * @param string $beginDate
     * @param string $endDate
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param bool $excludeBalance
     * @param bool $excludeSummary
     * @param bool $includeConversionRate
     * @param string $accountEntrySortType
     * @param string $currency
     * @param string $itemID
     */
    public function __construct($accountHistorySelection = null, $invoiceDate = null, $beginDate = null, $endDate = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $excludeBalance = null, $excludeSummary = null, $includeConversionRate = null, $accountEntrySortType = null, $currency = null, $itemID = null)
    {
        $this
            ->setAccountHistorySelection($accountHistorySelection)
            ->setInvoiceDate($invoiceDate)
            ->setBeginDate($beginDate)
            ->setEndDate($endDate)
            ->setPagination($pagination)
            ->setExcludeBalance($excludeBalance)
            ->setExcludeSummary($excludeSummary)
            ->setIncludeConversionRate($includeConversionRate)
            ->setAccountEntrySortType($accountEntrySortType)
            ->setCurrency($currency)
            ->setItemID($itemID);
    }
    /**
     * Get AccountHistorySelection value
     * @return string|null
     */
    public function getAccountHistorySelection()
    {
        return $this->AccountHistorySelection;
    }
    /**
     * Set AccountHistorySelection value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountHistorySelectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountHistorySelectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountHistorySelection
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setAccountHistorySelection($accountHistorySelection = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountHistorySelectionCodeType::valueIsValid($accountHistorySelection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountHistorySelection, implode(', ', \macropage\ebaysdk\trading\EnumType\AccountHistorySelectionCodeType::getValidValues())), __LINE__);
        }
        $this->AccountHistorySelection = $accountHistorySelection;
        return $this;
    }
    /**
     * Get InvoiceDate value
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }
    /**
     * Set InvoiceDate value
     * @param string $invoiceDate
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setInvoiceDate($invoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceDate)), __LINE__);
        }
        $this->InvoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * Get BeginDate value
     * @return string|null
     */
    public function getBeginDate()
    {
        return $this->BeginDate;
    }
    /**
     * Set BeginDate value
     * @param string $beginDate
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setBeginDate($beginDate = null)
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beginDate)), __LINE__);
        }
        $this->BeginDate = $beginDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get ExcludeBalance value
     * @return bool|null
     */
    public function getExcludeBalance()
    {
        return $this->ExcludeBalance;
    }
    /**
     * Set ExcludeBalance value
     * @param bool $excludeBalance
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setExcludeBalance($excludeBalance = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeBalance) && !is_bool($excludeBalance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeBalance)), __LINE__);
        }
        $this->ExcludeBalance = $excludeBalance;
        return $this;
    }
    /**
     * Get ExcludeSummary value
     * @return bool|null
     */
    public function getExcludeSummary()
    {
        return $this->ExcludeSummary;
    }
    /**
     * Set ExcludeSummary value
     * @param bool $excludeSummary
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setExcludeSummary($excludeSummary = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeSummary) && !is_bool($excludeSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeSummary)), __LINE__);
        }
        $this->ExcludeSummary = $excludeSummary;
        return $this;
    }
    /**
     * Get IncludeConversionRate value
     * @return bool|null
     */
    public function getIncludeConversionRate()
    {
        return $this->IncludeConversionRate;
    }
    /**
     * Set IncludeConversionRate value
     * @param bool $includeConversionRate
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setIncludeConversionRate($includeConversionRate = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeConversionRate) && !is_bool($includeConversionRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeConversionRate)), __LINE__);
        }
        $this->IncludeConversionRate = $includeConversionRate;
        return $this;
    }
    /**
     * Get AccountEntrySortType value
     * @return string|null
     */
    public function getAccountEntrySortType()
    {
        return $this->AccountEntrySortType;
    }
    /**
     * Set AccountEntrySortType value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountEntrySortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountEntrySortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountEntrySortType
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setAccountEntrySortType($accountEntrySortType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountEntrySortTypeCodeType::valueIsValid($accountEntrySortType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountEntrySortType, implode(', ', \macropage\ebaysdk\trading\EnumType\AccountEntrySortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AccountEntrySortType = $accountEntrySortType;
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
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
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
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetAccountRequestType
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
