<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary data for the requesting user's seller account as a whole. This includes a balance for the account, any past due amount and date, and defining data for additional accounts (if the user has changed country of residency while
 * having an active eBay account).
 * @subpackage Structs
 */
class AccountSummaryType extends AbstractStructBase
{
    /**
     * The AccountState
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current state of the account (such as active or inactive). Possible values are enumerated in <b>AccountStateCodeType</b>.
     * - minOccurs: 0
     * @var string
     */
    public $AccountState;
    /**
     * The InvoicePayment
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the payment amount that has been made by the user for the specified/last invoice. This field is only returned if a payment has been made towards the invoice, and if the <b>AccountHistorySelection</b> input
     * field's value was set to <code>LastInvoice</code> or <code>SpecifiedInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period
     * (overlapping multiple billing cycles) was specified. If a credit was issued by eBay to the user instead, this credit will be shown in the <b>InvoiceCredit</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InvoicePayment;
    /**
     * The InvoiceCredit
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the credit amount that has been issued to the user's account by eBay for the specified/last invoice. This field is only returned if a credit has been issued towards the invoice, and if the
     * <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code> or <code>SpecifiedInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to
     * <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a payment was made by the user instead, this payment amount will be shown in the <b>InvoicePayment</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InvoiceCredit;
    /**
     * The InvoiceNewFee
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the balance of any new fees that have been assessed toward the user's account since the last invoice was created. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to
     * <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> or <code>SpecifiedInvoice</code>. If there have been no fees since the last invoice was
     * created, this value will be <code>0.0</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InvoiceNewFee;
    /**
     * The AdditionalAccount
     * Meta informations extracted from the WSDL
     * - documentation: This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdditionalAccountType[]
     */
    public $AdditionalAccount;
    /**
     * The AmountPastDue
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the amount of money that is past due on the user's account. If no money is past due, this value will be <code>0.0</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPastDue;
    /**
     * The BankAccountInfo
     * Meta informations extracted from the WSDL
     * - documentation: This string value represents the first four digits of the bank account the associated with the user account. This field is only applicable if a bank account is being used to pay monthly invoices.
     * - minOccurs: 0
     * @var string
     */
    public $BankAccountInfo;
    /**
     * The BankModifyDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the owner of the account last changed the bank account on file as the primary payment method. This field may not be returned if the bank account on file has never been changed, or if
     * the primary payment method is not a bank account.
     * - minOccurs: 0
     * @var string
     */
    public $BankModifyDate;
    /**
     * The BillingCycleDate
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the day of the month on which eBay sends a billing invoice to the user. A value of <code>0</code> indicates that an invoice is sent on the last day of each month. A value of <code>15</code>15 indicates
     * that an invoice is sent on the 15th day of each month.
     * - minOccurs: 0
     * @var int
     */
    public $BillingCycleDate;
    /**
     * The CreditCardExpiration
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the expiration date for the credit card that is currently on file and used to pay monthly invoices. This field may not be returned if the primary method is not a credit card.
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardExpiration;
    /**
     * The CreditCardInfo
     * Meta informations extracted from the WSDL
     * - documentation: This string value represents the last four digits of the credit card that the user selected as payment method for the account. This field is only applicable if a credit card is being used to pay monthly invoices.
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardInfo;
    /**
     * The CreditCardModifyDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the owner of the account last changed the credit card on file as the primary payment method. This field may not be returned if the credit card on file has never been changed, or if the
     * primary payment method is not a credit card.
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardModifyDate;
    /**
     * The CurrentBalance
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the current balance for the user's account. This value can be <code>0.0</code>, a positive amount (debit), or a negative amount (credit). <br><br> This field is only returned if the <b>ExcludeBalance</b> flag is
     * included in the call request and set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CurrentBalance;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: Email address on file for the user account. You cannot retrieve an email address for any user with whom you do not have a transactional relationship, regardless of site. Email is only returned for applicable calls when you are
     * retrieving your own user data OR when you and the other user are in a transactional relationship and the call is being executed within a certain amount of time after the transaction is created.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The InvoiceBalance
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the balance for the specified/last invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code> or <code>SpecifiedInvoice</code>. This field
     * is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. The value is positive for debits and negative for
     * credits.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InvoiceBalance;
    /**
     * The InvoiceDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time of the specified/last invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code> or <code>SpecifiedInvoice</code>.
     * This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceDate;
    /**
     * The LastAmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the amount of the last payment that was made by the user.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $LastAmountPaid;
    /**
     * The LastPaymentDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp shows the date and time of the last payment that was made by the user.
     * - minOccurs: 0
     * @var string
     */
    public $LastPaymentDate;
    /**
     * The PastDue
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the account has a past due balance. A value of <code>true</code> indicates that the account is past due, and a value of <code>false</code> indicates that the account is current. If the
     * account is past due, the amount past due can be found in the <b>AmountPastDue</b> field.
     * - minOccurs: 0
     * @var bool
     */
    public $PastDue;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the primary payment method used by the user to pay monthly eBay invoices.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AccountSummaryType
     * @uses AccountSummaryType::setAccountState()
     * @uses AccountSummaryType::setInvoicePayment()
     * @uses AccountSummaryType::setInvoiceCredit()
     * @uses AccountSummaryType::setInvoiceNewFee()
     * @uses AccountSummaryType::setAdditionalAccount()
     * @uses AccountSummaryType::setAmountPastDue()
     * @uses AccountSummaryType::setBankAccountInfo()
     * @uses AccountSummaryType::setBankModifyDate()
     * @uses AccountSummaryType::setBillingCycleDate()
     * @uses AccountSummaryType::setCreditCardExpiration()
     * @uses AccountSummaryType::setCreditCardInfo()
     * @uses AccountSummaryType::setCreditCardModifyDate()
     * @uses AccountSummaryType::setCurrentBalance()
     * @uses AccountSummaryType::setEmail()
     * @uses AccountSummaryType::setInvoiceBalance()
     * @uses AccountSummaryType::setInvoiceDate()
     * @uses AccountSummaryType::setLastAmountPaid()
     * @uses AccountSummaryType::setLastPaymentDate()
     * @uses AccountSummaryType::setPastDue()
     * @uses AccountSummaryType::setPaymentMethod()
     * @uses AccountSummaryType::setAny()
     * @param string $accountState
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoicePayment
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee
     * @param \macropage\ebaysdk\trading\StructType\AdditionalAccountType[] $additionalAccount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPastDue
     * @param string $bankAccountInfo
     * @param string $bankModifyDate
     * @param int $billingCycleDate
     * @param string $creditCardExpiration
     * @param string $creditCardInfo
     * @param string $creditCardModifyDate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $currentBalance
     * @param string $email
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance
     * @param string $invoiceDate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid
     * @param string $lastPaymentDate
     * @param bool $pastDue
     * @param string $paymentMethod
     * @param \DOMDocument $any
     */
    public function __construct($accountState = null, \macropage\ebaysdk\trading\StructType\AmountType $invoicePayment = null, \macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit = null, \macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee = null, array $additionalAccount = array(), \macropage\ebaysdk\trading\StructType\AmountType $amountPastDue = null, $bankAccountInfo = null, $bankModifyDate = null, $billingCycleDate = null, $creditCardExpiration = null, $creditCardInfo = null, $creditCardModifyDate = null, \macropage\ebaysdk\trading\StructType\AmountType $currentBalance = null, $email = null, \macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance = null, $invoiceDate = null, \macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid = null, $lastPaymentDate = null, $pastDue = null, $paymentMethod = null, \DOMDocument $any = null)
    {
        $this
            ->setAccountState($accountState)
            ->setInvoicePayment($invoicePayment)
            ->setInvoiceCredit($invoiceCredit)
            ->setInvoiceNewFee($invoiceNewFee)
            ->setAdditionalAccount($additionalAccount)
            ->setAmountPastDue($amountPastDue)
            ->setBankAccountInfo($bankAccountInfo)
            ->setBankModifyDate($bankModifyDate)
            ->setBillingCycleDate($billingCycleDate)
            ->setCreditCardExpiration($creditCardExpiration)
            ->setCreditCardInfo($creditCardInfo)
            ->setCreditCardModifyDate($creditCardModifyDate)
            ->setCurrentBalance($currentBalance)
            ->setEmail($email)
            ->setInvoiceBalance($invoiceBalance)
            ->setInvoiceDate($invoiceDate)
            ->setLastAmountPaid($lastAmountPaid)
            ->setLastPaymentDate($lastPaymentDate)
            ->setPastDue($pastDue)
            ->setPaymentMethod($paymentMethod)
            ->setAny($any);
    }
    /**
     * Get AccountState value
     * @return string|null
     */
    public function getAccountState()
    {
        return $this->AccountState;
    }
    /**
     * Set AccountState value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountState
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAccountState($accountState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountStateCodeType::valueIsValid($accountState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountState, implode(', ', \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::getValidValues())), __LINE__);
        }
        $this->AccountState = $accountState;
        return $this;
    }
    /**
     * Get InvoicePayment value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoicePayment()
    {
        return $this->InvoicePayment;
    }
    /**
     * Set InvoicePayment value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoicePayment
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoicePayment(\macropage\ebaysdk\trading\StructType\AmountType $invoicePayment = null)
    {
        $this->InvoicePayment = $invoicePayment;
        return $this;
    }
    /**
     * Get InvoiceCredit value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceCredit()
    {
        return $this->InvoiceCredit;
    }
    /**
     * Set InvoiceCredit value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceCredit(\macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit = null)
    {
        $this->InvoiceCredit = $invoiceCredit;
        return $this;
    }
    /**
     * Get InvoiceNewFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceNewFee()
    {
        return $this->InvoiceNewFee;
    }
    /**
     * Set InvoiceNewFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceNewFee(\macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee = null)
    {
        $this->InvoiceNewFee = $invoiceNewFee;
        return $this;
    }
    /**
     * Get AdditionalAccount value
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType[]|null
     */
    public function getAdditionalAccount()
    {
        return $this->AdditionalAccount;
    }
    /**
     * Set AdditionalAccount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdditionalAccountType[] $additionalAccount
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAdditionalAccount(array $additionalAccount = array())
    {
        foreach ($additionalAccount as $accountSummaryTypeAdditionalAccountItem) {
            // validation for constraint: itemType
            if (!$accountSummaryTypeAdditionalAccountItem instanceof \macropage\ebaysdk\trading\StructType\AdditionalAccountType) {
                throw new \InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of \macropage\ebaysdk\trading\StructType\AdditionalAccountType, "%s" given', is_object($accountSummaryTypeAdditionalAccountItem) ? get_class($accountSummaryTypeAdditionalAccountItem) : gettype($accountSummaryTypeAdditionalAccountItem)), __LINE__);
            }
        }
        $this->AdditionalAccount = $additionalAccount;
        return $this;
    }
    /**
     * Add item to AdditionalAccount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdditionalAccountType $item
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function addToAdditionalAccount(\macropage\ebaysdk\trading\StructType\AdditionalAccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AdditionalAccountType) {
            throw new \InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of \macropage\ebaysdk\trading\StructType\AdditionalAccountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalAccount[] = $item;
        return $this;
    }
    /**
     * Get AmountPastDue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPastDue()
    {
        return $this->AmountPastDue;
    }
    /**
     * Set AmountPastDue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPastDue
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAmountPastDue(\macropage\ebaysdk\trading\StructType\AmountType $amountPastDue = null)
    {
        $this->AmountPastDue = $amountPastDue;
        return $this;
    }
    /**
     * Get BankAccountInfo value
     * @return string|null
     */
    public function getBankAccountInfo()
    {
        return $this->BankAccountInfo;
    }
    /**
     * Set BankAccountInfo value
     * @param string $bankAccountInfo
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBankAccountInfo($bankAccountInfo = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountInfo) && !is_string($bankAccountInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountInfo)), __LINE__);
        }
        $this->BankAccountInfo = $bankAccountInfo;
        return $this;
    }
    /**
     * Get BankModifyDate value
     * @return string|null
     */
    public function getBankModifyDate()
    {
        return $this->BankModifyDate;
    }
    /**
     * Set BankModifyDate value
     * @param string $bankModifyDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBankModifyDate($bankModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($bankModifyDate) && !is_string($bankModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankModifyDate)), __LINE__);
        }
        $this->BankModifyDate = $bankModifyDate;
        return $this;
    }
    /**
     * Get BillingCycleDate value
     * @return int|null
     */
    public function getBillingCycleDate()
    {
        return $this->BillingCycleDate;
    }
    /**
     * Set BillingCycleDate value
     * @param int $billingCycleDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBillingCycleDate($billingCycleDate = null)
    {
        // validation for constraint: int
        if (!is_null($billingCycleDate) && !is_numeric($billingCycleDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($billingCycleDate)), __LINE__);
        }
        $this->BillingCycleDate = $billingCycleDate;
        return $this;
    }
    /**
     * Get CreditCardExpiration value
     * @return string|null
     */
    public function getCreditCardExpiration()
    {
        return $this->CreditCardExpiration;
    }
    /**
     * Set CreditCardExpiration value
     * @param string $creditCardExpiration
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardExpiration($creditCardExpiration = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardExpiration) && !is_string($creditCardExpiration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardExpiration)), __LINE__);
        }
        $this->CreditCardExpiration = $creditCardExpiration;
        return $this;
    }
    /**
     * Get CreditCardInfo value
     * @return string|null
     */
    public function getCreditCardInfo()
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param string $creditCardInfo
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardInfo($creditCardInfo = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardInfo) && !is_string($creditCardInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardInfo)), __LINE__);
        }
        $this->CreditCardInfo = $creditCardInfo;
        return $this;
    }
    /**
     * Get CreditCardModifyDate value
     * @return string|null
     */
    public function getCreditCardModifyDate()
    {
        return $this->CreditCardModifyDate;
    }
    /**
     * Set CreditCardModifyDate value
     * @param string $creditCardModifyDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardModifyDate($creditCardModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardModifyDate) && !is_string($creditCardModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardModifyDate)), __LINE__);
        }
        $this->CreditCardModifyDate = $creditCardModifyDate;
        return $this;
    }
    /**
     * Get CurrentBalance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCurrentBalance()
    {
        return $this->CurrentBalance;
    }
    /**
     * Set CurrentBalance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $currentBalance
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCurrentBalance(\macropage\ebaysdk\trading\StructType\AmountType $currentBalance = null)
    {
        $this->CurrentBalance = $currentBalance;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get InvoiceBalance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceBalance()
    {
        return $this->InvoiceBalance;
    }
    /**
     * Set InvoiceBalance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceBalance(\macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance = null)
    {
        $this->InvoiceBalance = $invoiceBalance;
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
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
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
     * Get LastAmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getLastAmountPaid()
    {
        return $this->LastAmountPaid;
    }
    /**
     * Set LastAmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setLastAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid = null)
    {
        $this->LastAmountPaid = $lastAmountPaid;
        return $this;
    }
    /**
     * Get LastPaymentDate value
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return $this->LastPaymentDate;
    }
    /**
     * Set LastPaymentDate value
     * @param string $lastPaymentDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setLastPaymentDate($lastPaymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPaymentDate) && !is_string($lastPaymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastPaymentDate)), __LINE__);
        }
        $this->LastPaymentDate = $lastPaymentDate;
        return $this;
    }
    /**
     * Get PastDue value
     * @return bool|null
     */
    public function getPastDue()
    {
        return $this->PastDue;
    }
    /**
     * Set PastDue value
     * @param bool $pastDue
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setPastDue($pastDue = null)
    {
        // validation for constraint: boolean
        if (!is_null($pastDue) && !is_bool($pastDue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pastDue)), __LINE__);
        }
        $this->PastDue = $pastDue;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AccountSummaryType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
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
