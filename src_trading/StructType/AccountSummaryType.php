<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary data for the requesting user's seller account as a whole. This includes a balance for the account, any past due amount and date, and defining data for additional accounts (if the user has changed country of residency while
 * having an active eBay account).
 * @subpackage Structs
 */
class AccountSummaryType extends AbstractStructBase
{
    /**
     * The AccountState
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current state of the account (such as active or inactive). Possible values are enumerated in <b>AccountStateCodeType</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountState = null;
    /**
     * The InvoicePayment
     * Meta information extracted from the WSDL
     * - documentation: This field specifies the payment amount that has been made by the user for the invoice. This field is only returned if a payment has been made towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set
     * to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a credit
     * was issued by eBay to the user instead, this credit will be shown in the <b>InvoiceCredit</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InvoicePayment = null;
    /**
     * The InvoiceCredit
     * Meta information extracted from the WSDL
     * - documentation: This field specifies the credit amount that has been issued to the user's account by eBay for the invoice. This field is only returned if a credit has been issued towards the invoice, and if the <b>AccountHistorySelection</b> input
     * field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was
     * specified. If a payment was made by the user instead, this payment amount will be shown in the <b>InvoicePayment</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InvoiceCredit = null;
    /**
     * The InvoiceNewFee
     * Meta information extracted from the WSDL
     * - documentation: This field specifies the balance of any new fees that have been assessed toward the user's account since the last invoice was created. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to
     * <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> or <code>OrderId</code>. If there have been no fees since the last invoice was created, this
     * value will be <code>0.0</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InvoiceNewFee = null;
    /**
     * The AdditionalAccount
     * Meta information extracted from the WSDL
     * - documentation: This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdditionalAccountType[]
     */
    protected ?array $AdditionalAccount = null;
    /**
     * The AmountPastDue
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the amount of money that is past due on the user's account. If no money is past due, this value will be <code>0.0</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountPastDue = null;
    /**
     * The BankAccountInfo
     * Meta information extracted from the WSDL
     * - documentation: This string value represents the first four digits of the bank account the associated with the user account. This field is only applicable if a bank account is being used to pay monthly invoices.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BankAccountInfo = null;
    /**
     * The BankModifyDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the owner of the account last changed the bank account on file as the primary payment method. This field may not be returned if the bank account on file has never been changed, or if
     * the primary payment method is not a bank account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BankModifyDate = null;
    /**
     * The BillingCycleDate
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the day of the month on which eBay sends a billing invoice to the user. A value of <code>0</code> indicates that an invoice is sent on the last day of each month. A value of <code>15</code>15 indicates
     * that an invoice is sent on the 15th day of each month.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BillingCycleDate = null;
    /**
     * The CreditCardExpiration
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the expiration date for the credit card that is currently on file and used to pay monthly invoices. This field may not be returned if the primary method is not a credit card.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreditCardExpiration = null;
    /**
     * The CreditCardInfo
     * Meta information extracted from the WSDL
     * - documentation: This string value represents the last four digits of the credit card that the user selected as payment method for the account. This field is only applicable if a credit card is being used to pay monthly invoices.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreditCardInfo = null;
    /**
     * The CreditCardModifyDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the owner of the account last changed the credit card on file as the primary payment method. This field may not be returned if the credit card on file has never been changed, or if the
     * primary payment method is not a credit card.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreditCardModifyDate = null;
    /**
     * The CurrentBalance
     * Meta information extracted from the WSDL
     * - documentation: This field shows the current balance for the user's account. This value can be <code>0.0</code>, a positive amount (debit), or a negative amount (credit). <br><br> This field is only returned if the <b>ExcludeBalance</b> flag is
     * included in the call request and set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CurrentBalance = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: Email address on file for the user account. You cannot retrieve an email address for any user with whom you do not have a transactional relationship, regardless of site. Email is only returned for applicable calls when you are
     * retrieving your own user data OR when you and the other user are in a transactional relationship and the call is being executed within a certain amount of time after the transaction is created.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The InvoiceBalance
     * Meta information extracted from the WSDL
     * - documentation: This field specifies the balance for the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the
     * <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. The value is positive for debits and negative for credits.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InvoiceBalance = null;
    /**
     * The InvoiceDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time of the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the
     * <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceDate = null;
    /**
     * The LastAmountPaid
     * Meta information extracted from the WSDL
     * - documentation: This field shows the amount of the last payment that was made by the user.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $LastAmountPaid = null;
    /**
     * The LastPaymentDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp shows the date and time of the last payment that was made by the user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastPaymentDate = null;
    /**
     * The PastDue
     * Meta information extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the account has a past due balance. A value of <code>true</code> indicates that the account is past due, and a value of <code>false</code> indicates that the account is current. If the
     * account is past due, the amount past due can be found in the <b>AmountPastDue</b> field.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PastDue = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the primary payment method used by the user to pay monthly eBay invoices.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * The NettedTransactionSummary
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions. The seller must include the <b>IncludeNettedEntries</b> field in the request and set it to
     * <code>true</code> in order for this container to be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType $NettedTransactionSummary = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @uses AccountSummaryType::setNettedTransactionSummary()
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
     * @param \macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType $nettedTransactionSummary
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $accountState = null, ?\macropage\ebaysdk\trading\StructType\AmountType $invoicePayment = null, ?\macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit = null, ?\macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee = null, ?array $additionalAccount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountPastDue = null, ?string $bankAccountInfo = null, ?string $bankModifyDate = null, ?int $billingCycleDate = null, ?string $creditCardExpiration = null, ?string $creditCardInfo = null, ?string $creditCardModifyDate = null, ?\macropage\ebaysdk\trading\StructType\AmountType $currentBalance = null, ?string $email = null, ?\macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance = null, ?string $invoiceDate = null, ?\macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid = null, ?string $lastPaymentDate = null, ?bool $pastDue = null, ?string $paymentMethod = null, ?\macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType $nettedTransactionSummary = null, $any = null)
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
            ->setNettedTransactionSummary($nettedTransactionSummary)
            ->setAny($any);
    }
    /**
     * Get AccountState value
     * @return string|null
     */
    public function getAccountState(): ?string
    {
        return $this->AccountState;
    }
    /**
     * Set AccountState value
     * @uses \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accountState
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAccountState(?string $accountState = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccountStateCodeType::valueIsValid($accountState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AccountStateCodeType', is_array($accountState) ? implode(', ', $accountState) : var_export($accountState, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AccountStateCodeType::getValidValues())), __LINE__);
        }
        $this->AccountState = $accountState;
        
        return $this;
    }
    /**
     * Get InvoicePayment value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoicePayment(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InvoicePayment;
    }
    /**
     * Set InvoicePayment value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoicePayment
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoicePayment(?\macropage\ebaysdk\trading\StructType\AmountType $invoicePayment = null): self
    {
        $this->InvoicePayment = $invoicePayment;
        
        return $this;
    }
    /**
     * Get InvoiceCredit value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceCredit(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InvoiceCredit;
    }
    /**
     * Set InvoiceCredit value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceCredit(?\macropage\ebaysdk\trading\StructType\AmountType $invoiceCredit = null): self
    {
        $this->InvoiceCredit = $invoiceCredit;
        
        return $this;
    }
    /**
     * Get InvoiceNewFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceNewFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InvoiceNewFee;
    }
    /**
     * Set InvoiceNewFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceNewFee(?\macropage\ebaysdk\trading\StructType\AmountType $invoiceNewFee = null): self
    {
        $this->InvoiceNewFee = $invoiceNewFee;
        
        return $this;
    }
    /**
     * Get AdditionalAccount value
     * @return \macropage\ebaysdk\trading\StructType\AdditionalAccountType[]
     */
    public function getAdditionalAccount(): ?array
    {
        return $this->AdditionalAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalAccountForArrayConstraintsFromSetAdditionalAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountSummaryTypeAdditionalAccountItem) {
            // validation for constraint: itemType
            if (!$accountSummaryTypeAdditionalAccountItem instanceof \macropage\ebaysdk\trading\StructType\AdditionalAccountType) {
                $invalidValues[] = is_object($accountSummaryTypeAdditionalAccountItem) ? get_class($accountSummaryTypeAdditionalAccountItem) : sprintf('%s(%s)', gettype($accountSummaryTypeAdditionalAccountItem), var_export($accountSummaryTypeAdditionalAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalAccount property can only contain items of type \macropage\ebaysdk\trading\StructType\AdditionalAccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalAccount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdditionalAccountType[] $additionalAccount
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAdditionalAccount(?array $additionalAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalAccountArrayErrorMessage = self::validateAdditionalAccountForArrayConstraintsFromSetAdditionalAccount($additionalAccount))) {
            throw new InvalidArgumentException($additionalAccountArrayErrorMessage, __LINE__);
        }
        $this->AdditionalAccount = $additionalAccount;
        
        return $this;
    }
    /**
     * Add item to AdditionalAccount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdditionalAccountType $item
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function addToAdditionalAccount(\macropage\ebaysdk\trading\StructType\AdditionalAccountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AdditionalAccountType) {
            throw new InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of type \macropage\ebaysdk\trading\StructType\AdditionalAccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalAccount[] = $item;
        
        return $this;
    }
    /**
     * Get AmountPastDue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPastDue(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountPastDue;
    }
    /**
     * Set AmountPastDue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPastDue
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAmountPastDue(?\macropage\ebaysdk\trading\StructType\AmountType $amountPastDue = null): self
    {
        $this->AmountPastDue = $amountPastDue;
        
        return $this;
    }
    /**
     * Get BankAccountInfo value
     * @return string|null
     */
    public function getBankAccountInfo(): ?string
    {
        return $this->BankAccountInfo;
    }
    /**
     * Set BankAccountInfo value
     * @param string $bankAccountInfo
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBankAccountInfo(?string $bankAccountInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountInfo) && !is_string($bankAccountInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountInfo, true), gettype($bankAccountInfo)), __LINE__);
        }
        $this->BankAccountInfo = $bankAccountInfo;
        
        return $this;
    }
    /**
     * Get BankModifyDate value
     * @return string|null
     */
    public function getBankModifyDate(): ?string
    {
        return $this->BankModifyDate;
    }
    /**
     * Set BankModifyDate value
     * @param string $bankModifyDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBankModifyDate(?string $bankModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bankModifyDate) && !is_string($bankModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankModifyDate, true), gettype($bankModifyDate)), __LINE__);
        }
        $this->BankModifyDate = $bankModifyDate;
        
        return $this;
    }
    /**
     * Get BillingCycleDate value
     * @return int|null
     */
    public function getBillingCycleDate(): ?int
    {
        return $this->BillingCycleDate;
    }
    /**
     * Set BillingCycleDate value
     * @param int $billingCycleDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setBillingCycleDate(?int $billingCycleDate = null): self
    {
        // validation for constraint: int
        if (!is_null($billingCycleDate) && !(is_int($billingCycleDate) || ctype_digit($billingCycleDate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingCycleDate, true), gettype($billingCycleDate)), __LINE__);
        }
        $this->BillingCycleDate = $billingCycleDate;
        
        return $this;
    }
    /**
     * Get CreditCardExpiration value
     * @return string|null
     */
    public function getCreditCardExpiration(): ?string
    {
        return $this->CreditCardExpiration;
    }
    /**
     * Set CreditCardExpiration value
     * @param string $creditCardExpiration
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardExpiration(?string $creditCardExpiration = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardExpiration) && !is_string($creditCardExpiration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardExpiration, true), gettype($creditCardExpiration)), __LINE__);
        }
        $this->CreditCardExpiration = $creditCardExpiration;
        
        return $this;
    }
    /**
     * Get CreditCardInfo value
     * @return string|null
     */
    public function getCreditCardInfo(): ?string
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param string $creditCardInfo
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardInfo(?string $creditCardInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardInfo) && !is_string($creditCardInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardInfo, true), gettype($creditCardInfo)), __LINE__);
        }
        $this->CreditCardInfo = $creditCardInfo;
        
        return $this;
    }
    /**
     * Get CreditCardModifyDate value
     * @return string|null
     */
    public function getCreditCardModifyDate(): ?string
    {
        return $this->CreditCardModifyDate;
    }
    /**
     * Set CreditCardModifyDate value
     * @param string $creditCardModifyDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCreditCardModifyDate(?string $creditCardModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardModifyDate) && !is_string($creditCardModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardModifyDate, true), gettype($creditCardModifyDate)), __LINE__);
        }
        $this->CreditCardModifyDate = $creditCardModifyDate;
        
        return $this;
    }
    /**
     * Get CurrentBalance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCurrentBalance(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CurrentBalance;
    }
    /**
     * Set CurrentBalance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $currentBalance
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setCurrentBalance(?\macropage\ebaysdk\trading\StructType\AmountType $currentBalance = null): self
    {
        $this->CurrentBalance = $currentBalance;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get InvoiceBalance value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInvoiceBalance(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InvoiceBalance;
    }
    /**
     * Set InvoiceBalance value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceBalance(?\macropage\ebaysdk\trading\StructType\AmountType $invoiceBalance = null): self
    {
        $this->InvoiceBalance = $invoiceBalance;
        
        return $this;
    }
    /**
     * Get InvoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->InvoiceDate;
    }
    /**
     * Set InvoiceDate value
     * @param string $invoiceDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->InvoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get LastAmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getLastAmountPaid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->LastAmountPaid;
    }
    /**
     * Set LastAmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setLastAmountPaid(?\macropage\ebaysdk\trading\StructType\AmountType $lastAmountPaid = null): self
    {
        $this->LastAmountPaid = $lastAmountPaid;
        
        return $this;
    }
    /**
     * Get LastPaymentDate value
     * @return string|null
     */
    public function getLastPaymentDate(): ?string
    {
        return $this->LastPaymentDate;
    }
    /**
     * Set LastPaymentDate value
     * @param string $lastPaymentDate
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setLastPaymentDate(?string $lastPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastPaymentDate) && !is_string($lastPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastPaymentDate, true), gettype($lastPaymentDate)), __LINE__);
        }
        $this->LastPaymentDate = $lastPaymentDate;
        
        return $this;
    }
    /**
     * Get PastDue value
     * @return bool|null
     */
    public function getPastDue(): ?bool
    {
        return $this->PastDue;
    }
    /**
     * Set PastDue value
     * @param bool $pastDue
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setPastDue(?bool $pastDue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pastDue) && !is_bool($pastDue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pastDue, true), gettype($pastDue)), __LINE__);
        }
        $this->PastDue = $pastDue;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get NettedTransactionSummary value
     * @return \macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType|null
     */
    public function getNettedTransactionSummary(): ?\macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType
    {
        return $this->NettedTransactionSummary;
    }
    /**
     * Set NettedTransactionSummary value
     * @param \macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType $nettedTransactionSummary
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setNettedTransactionSummary(?\macropage\ebaysdk\trading\StructType\NettedTransactionSummaryType $nettedTransactionSummary = null): self
    {
        $this->NettedTransactionSummary = $nettedTransactionSummary;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\AccountSummaryType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
