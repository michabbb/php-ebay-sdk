<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccountDetailEntryCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the fee/charge and credit transactions that occur on an eBay user's account. These values are returned in the <b>AccountEntry.AccountDetailsEntryType</b> output field of the <b>GetAccount</b> call.
 * @subpackage Enumerations
 */
class AccountDetailEntryCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account transaction type is unknown. Sometimes this value will get returned, but the corresponding <b>Description</b> field may provide more details, and the corresponding
     * <b>GrossDetailAmount</b> field will indicate whether the transaction was a charge or a credit (indicated with a negative dollar value).
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'FeeInsertion'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee for a listing.
     * @return string 'FeeInsertion'
     */
    const VALUE_FEE_INSERTION = 'FeeInsertion';
    /**
     * Constant for value 'FeeBold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a listing upgrade fee for a listing title in boldface font.
     * @return string 'FeeBold'
     */
    const VALUE_FEE_BOLD = 'FeeBold';
    /**
     * Constant for value 'FeeFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a listing upgrade fee for featuring the listing on an eBay marketplace's home page. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no longer available to most
     * marketplaces and sellers. </span>
     * @return string 'FeeFeatured'
     */
    const VALUE_FEE_FEATURED = 'FeeFeatured';
    /**
     * Constant for value 'FeeCategoryFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a listing upgrade fee for featuring the listing on an eBay category page relevant to the item. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no longer
     * available to most marketplaces and sellers. </span>
     * @return string 'FeeCategoryFeatured'
     */
    const VALUE_FEE_CATEGORY_FEATURED = 'FeeCategoryFeatured';
    /**
     * Constant for value 'FeeFinalValue'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a final value fee for a sale on the listing. This fee is charged when a listed item sells, and is a percentage of the final sale price. This fee does not take in account any
     * shipping costs. The final value fee associated with shipping costs is returned in <b>FeeFinalValueShipping</b> entry.
     * @return string 'FeeFinalValue'
     */
    const VALUE_FEE_FINAL_VALUE = 'FeeFinalValue';
    /**
     * Constant for value 'PaymentCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment by check made by a user to eBay.
     * @return string 'PaymentCheck'
     */
    const VALUE_PAYMENT_CHECK = 'PaymentCheck';
    /**
     * Constant for value 'PaymentCC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment by credit card made by a user to eBay.
     * @return string 'PaymentCC'
     */
    const VALUE_PAYMENT_CC = 'PaymentCC';
    /**
     * Constant for value 'CreditCourtesy'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a courtesy credit issued by eBay to the user.
     * @return string 'CreditCourtesy'
     */
    const VALUE_CREDIT_COURTESY = 'CreditCourtesy';
    /**
     * Constant for value 'CreditNoSale'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the user due to no sale.
     * @return string 'CreditNoSale'
     */
    const VALUE_CREDIT_NO_SALE = 'CreditNoSale';
    /**
     * Constant for value 'CreditPartialSale'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the user due to a partial sale.
     * @return string 'CreditPartialSale'
     */
    const VALUE_CREDIT_PARTIAL_SALE = 'CreditPartialSale';
    /**
     * Constant for value 'RefundCC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a refund to a user's credit card issued by eBay.
     * @return string 'RefundCC'
     */
    const VALUE_REFUND_CC = 'RefundCC';
    /**
     * Constant for value 'RefundCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a refund check to a user issued by eBay.
     * @return string 'RefundCheck'
     */
    const VALUE_REFUND_CHECK = 'RefundCheck';
    /**
     * Constant for value 'FinanceCharge'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a finance charge to the user's account. A finance charge may be applicable if the user's monthly invoice balance is not paid in full by the due date.
     * @return string 'FinanceCharge'
     */
    const VALUE_FINANCE_CHARGE = 'FinanceCharge';
    /**
     * Constant for value 'AWDebit'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'AWDebit'
     */
    const VALUE_AWDEBIT = 'AWDebit';
    /**
     * Constant for value 'AWCredit'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'AWCredit'
     */
    const VALUE_AWCREDIT = 'AWCredit';
    /**
     * Constant for value 'AWMemo'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable, and should not be returned.
     * @return string 'AWMemo'
     */
    const VALUE_AWMEMO = 'AWMemo';
    /**
     * Constant for value 'CreditDuplicateListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued to the seller for any listing fees for a duplicate listing that was removed by eBay.
     * @return string 'CreditDuplicateListing'
     */
    const VALUE_CREDIT_DUPLICATE_LISTING = 'CreditDuplicateListing';
    /**
     * Constant for value 'FeePartialSale'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for a partial sale.
     * @return string 'FeePartialSale'
     */
    const VALUE_FEE_PARTIAL_SALE = 'FeePartialSale';
    /**
     * Constant for value 'PaymentElectronicTransferReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of an electronic transfer payment.
     * @return string 'PaymentElectronicTransferReversal'
     */
    const VALUE_PAYMENT_ELECTRONIC_TRANSFER_REVERSAL = 'PaymentElectronicTransferReversal';
    /**
     * Constant for value 'PaymentCCOnce'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a one-time payment made by a credit card.
     * @return string 'PaymentCCOnce'
     */
    const VALUE_PAYMENT_CCONCE = 'PaymentCCOnce';
    /**
     * Constant for value 'FeeReturnedCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for a returned check.
     * @return string 'FeeReturnedCheck'
     */
    const VALUE_FEE_RETURNED_CHECK = 'FeeReturnedCheck';
    /**
     * Constant for value 'FeeRedepositCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay when a check must be redeposited to collect funds.
     * @return string 'FeeRedepositCheck'
     */
    const VALUE_FEE_REDEPOSIT_CHECK = 'FeeRedepositCheck';
    /**
     * Constant for value 'PaymentCash'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a cash payment made on the user's account.
     * @return string 'PaymentCash'
     */
    const VALUE_PAYMENT_CASH = 'PaymentCash';
    /**
     * Constant for value 'CreditInsertion'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee credit issued by eBay to the seller. If a listed item does not sell or results in an Unpaid Item case/dispute, the seller can relist the item with no
     * additional charge.
     * @return string 'CreditInsertion'
     */
    const VALUE_CREDIT_INSERTION = 'CreditInsertion';
    /**
     * Constant for value 'CreditBold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a Bold title listing upgrade.
     * @return string 'CreditBold'
     */
    const VALUE_CREDIT_BOLD = 'CreditBold';
    /**
     * Constant for value 'CreditFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a listing upgrade fee for featuring the listing on an eBay marketplace's home page. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no longer
     * available to most marketplaces and sellers. </span>
     * @return string 'CreditFeatured'
     */
    const VALUE_CREDIT_FEATURED = 'CreditFeatured';
    /**
     * Constant for value 'CreditCategoryFeatured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a listing upgrade fee for featuring the listing on an eBay category page relevant to the item. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no
     * longer available to most marketplaces and sellers. </span>
     * @return string 'CreditCategoryFeatured'
     */
    const VALUE_CREDIT_CATEGORY_FEATURED = 'CreditCategoryFeatured';
    /**
     * Constant for value 'CreditFinalValue'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a final value fee for a sale on the listing. A final value fee may be credited back to a seller's account if the buyer never pays for the line item, or if the
     * buyer cancels the order.
     * @return string 'CreditFinalValue'
     */
    const VALUE_CREDIT_FINAL_VALUE = 'CreditFinalValue';
    /**
     * Constant for value 'FeeNSFCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay when the seller's check does not clear due to insufficient funds.
     * @return string 'FeeNSFCheck'
     */
    const VALUE_FEE_NSFCHECK = 'FeeNSFCheck';
    /**
     * Constant for value 'FeeReturnCheckClose'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay when the seller's check does not clear because the account has been closed.
     * @return string 'FeeReturnCheckClose'
     */
    const VALUE_FEE_RETURN_CHECK_CLOSE = 'FeeReturnCheckClose';
    /**
     * Constant for value 'Memo'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the account entry is just a memo/note, or if the account entry cannot be properly classified. The corresponding <b>Description</b> field may provide more details, and the corresponding
     * <b>GrossDetailAmount</b> field will indicate whether the transaction was a charge or a credit (indicate with a negative dollar value).
     * @return string 'Memo'
     */
    const VALUE_MEMO = 'Memo';
    /**
     * Constant for value 'PaymentMoneyOrder'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the account entry is a payment made to the account by money order.
     * @return string 'PaymentMoneyOrder'
     */
    const VALUE_PAYMENT_MONEY_ORDER = 'PaymentMoneyOrder';
    /**
     * Constant for value 'CreditCardOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the account entry is an automatic monthly charge of the seller's invoice amount made by eBay to a credit card the seller has placed on file.
     * @return string 'CreditCardOnFile'
     */
    const VALUE_CREDIT_CARD_ON_FILE = 'CreditCardOnFile';
    /**
     * Constant for value 'CreditCardNotOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the account entry is a one-time payment made with a user's credit card that is not on file with eBay for automatic monthly payments.
     * @return string 'CreditCardNotOnFile'
     */
    const VALUE_CREDIT_CARD_NOT_ON_FILE = 'CreditCardNotOnFile';
    /**
     * Constant for value 'Invoiced'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user has been invoiced.
     * @return string 'Invoiced'
     */
    const VALUE_INVOICED = 'Invoiced';
    /**
     * Constant for value 'InvoicedCreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user has been invoiced and that the balance will be charged to the credit card on file on the due date.
     * @return string 'InvoicedCreditCard'
     */
    const VALUE_INVOICED_CREDIT_CARD = 'InvoicedCreditCard';
    /**
     * Constant for value 'CreditTransferFrom'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the account entry is a credit transferred from another account to this account.
     * @return string 'CreditTransferFrom'
     */
    const VALUE_CREDIT_TRANSFER_FROM = 'CreditTransferFrom';
    /**
     * Constant for value 'DebitTransferTo'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a debit transferred from this account to another account.
     * @return string 'DebitTransferTo'
     */
    const VALUE_DEBIT_TRANSFER_TO = 'DebitTransferTo';
    /**
     * Constant for value 'InvoiceCreditBalance'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit balance for an account's invoice period, meaning that the seller should not pay.
     * @return string 'InvoiceCreditBalance'
     */
    const VALUE_INVOICE_CREDIT_BALANCE = 'InvoiceCreditBalance';
    /**
     * Constant for value 'eBayDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned for debits issued by eBay that are manually applied to the user's account, and not necessarily tied to a specific listing/line item.
     * @return string 'eBayDebit'
     */
    const VALUE_E_BAY_DEBIT = 'eBayDebit';
    /**
     * Constant for value 'eBayCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned for credits issued by eBay that are manually applied to the user's account, and not necessarily tied to a specific listing/line item.
     * @return string 'eBayCredit'
     */
    const VALUE_E_BAY_CREDIT = 'eBayCredit';
    /**
     * Constant for value 'PromotionalCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a promotional credit issued by eBay.
     * @return string 'PromotionalCredit'
     */
    const VALUE_PROMOTIONAL_CREDIT = 'PromotionalCredit';
    /**
     * Constant for value 'CCNotOnFilePerCustReq'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned as a note that the user's credit card is not with eBay.
     * @return string 'CCNotOnFilePerCustReq'
     */
    const VALUE_CCNOT_ON_FILE_PER_CUST_REQ = 'CCNotOnFilePerCustReq';
    /**
     * Constant for value 'CreditInsertionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee credit. If a listed item does not sell or results in an Unpaid Item case/dispute, the seller can relist the item with no additional charge.
     * @return string 'CreditInsertionFee'
     */
    const VALUE_CREDIT_INSERTION_FEE = 'CreditInsertionFee';
    /**
     * Constant for value 'CCPaymentRejected'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned as a note if a user's credit card payment is rejected.
     * @return string 'CCPaymentRejected'
     */
    const VALUE_CCPAYMENT_REJECTED = 'CCPaymentRejected';
    /**
     * Constant for value 'FeeGiftIcon'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable and should not be returned since gift services and the gift icon are no longer supported in any eBay marketplaces.
     * @return string 'FeeGiftIcon'
     */
    const VALUE_FEE_GIFT_ICON = 'FeeGiftIcon';
    /**
     * Constant for value 'CreditGiftIcon'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable and should not be returned since gift services and the gift icon are no longer supported in any eBay marketplaces.
     * @return string 'CreditGiftIcon'
     */
    const VALUE_CREDIT_GIFT_ICON = 'CreditGiftIcon';
    /**
     * Constant for value 'FeeGallery'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for listing an item in the Picture Gallery. A buyer sees a picture of the item when browsing a category, before moving to the item's listing page.
     * @return string 'FeeGallery'
     */
    const VALUE_FEE_GALLERY = 'FeeGallery';
    /**
     * Constant for value 'FeeFeaturedGallery'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for listing an item in the Featured section at the top of the Picture Gallery page.
     * @return string 'FeeFeaturedGallery'
     */
    const VALUE_FEE_FEATURED_GALLERY = 'FeeFeaturedGallery';
    /**
     * Constant for value 'CreditGallery'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay for the Gallery fee charged when the item was listed.
     * @return string 'CreditGallery'
     */
    const VALUE_CREDIT_GALLERY = 'CreditGallery';
    /**
     * Constant for value 'CreditFeaturedGallery'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay for the Featured Gallery fee charged when the item was listed.
     * @return string 'CreditFeaturedGallery'
     */
    const VALUE_CREDIT_FEATURED_GALLERY = 'CreditFeaturedGallery';
    /**
     * Constant for value 'ItemMoveFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for moving the item.
     * @return string 'ItemMoveFee'
     */
    const VALUE_ITEM_MOVE_FEE = 'ItemMoveFee';
    /**
     * Constant for value 'OutageCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit that may be issued by eBay when listings are not available due to system downtime. The downtime can be a title search outage or a hard outage.
     * @return string 'OutageCredit'
     */
    const VALUE_OUTAGE_CREDIT = 'OutageCredit';
    /**
     * Constant for value 'CreditPSA'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a PSA payment.
     * @return string 'CreditPSA'
     */
    const VALUE_CREDIT_PSA = 'CreditPSA';
    /**
     * Constant for value 'CreditPCGS'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a PCGS fee.
     * @return string 'CreditPCGS'
     */
    const VALUE_CREDIT_PCGS = 'CreditPCGS';
    /**
     * Constant for value 'FeeReserve'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay when the seller sets a reserve price for an auction listing.
     * @return string 'FeeReserve'
     */
    const VALUE_FEE_RESERVE = 'FeeReserve';
    /**
     * Constant for value 'CreditReserve'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit refunded to the seller for a reserve price that was set for an auction listing.
     * @return string 'CreditReserve'
     */
    const VALUE_CREDIT_RESERVE = 'CreditReserve';
    /**
     * Constant for value 'eBayVISACredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the user's Visa credit card.
     * @return string 'eBayVISACredit'
     */
    const VALUE_E_BAY_VISACREDIT = 'eBayVISACredit';
    /**
     * Constant for value 'BBAdminCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued administratively.
     * @return string 'BBAdminCredit'
     */
    const VALUE_BBADMIN_CREDIT = 'BBAdminCredit';
    /**
     * Constant for value 'BBAdminDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a charge issued administratively.
     * @return string 'BBAdminDebit'
     */
    const VALUE_BBADMIN_DEBIT = 'BBAdminDebit';
    /**
     * Constant for value 'ReferrerCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to a Store owner who has promoted items outside of eBay.
     * @return string 'ReferrerCredit'
     */
    const VALUE_REFERRER_CREDIT = 'ReferrerCredit';
    /**
     * Constant for value 'ReferrerDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a charge issued by eBay to a Store owner who has promoted items outside of eBay.
     * @return string 'ReferrerDebit'
     */
    const VALUE_REFERRER_DEBIT = 'ReferrerDebit';
    /**
     * Constant for value 'SwitchCurrency'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned as a note about switching from one billing currency to another.
     * @return string 'SwitchCurrency'
     */
    const VALUE_SWITCH_CURRENCY = 'SwitchCurrency';
    /**
     * Constant for value 'PaymentGiftCertificate'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment made to the account by a gift certificate.
     * @return string 'PaymentGiftCertificate'
     */
    const VALUE_PAYMENT_GIFT_CERTIFICATE = 'PaymentGiftCertificate';
    /**
     * Constant for value 'PaymentWireTransfer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment made to the account by wire transfer.
     * @return string 'PaymentWireTransfer'
     */
    const VALUE_PAYMENT_WIRE_TRANSFER = 'PaymentWireTransfer';
    /**
     * Constant for value 'PaymentHomeBanking'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment made to the account through home bank.
     * @return string 'PaymentHomeBanking'
     */
    const VALUE_PAYMENT_HOME_BANKING = 'PaymentHomeBanking';
    /**
     * Constant for value 'PaymentElectronicTransfer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a one-time payment made to the account by electronic transfer.
     * @return string 'PaymentElectronicTransfer'
     */
    const VALUE_PAYMENT_ELECTRONIC_TRANSFER = 'PaymentElectronicTransfer';
    /**
     * Constant for value 'PaymentAdjustmentCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit made by eBay to the seller's account when a payment needs to be adjusted.
     * @return string 'PaymentAdjustmentCredit'
     */
    const VALUE_PAYMENT_ADJUSTMENT_CREDIT = 'PaymentAdjustmentCredit';
    /**
     * Constant for value 'PaymentAdjustmentDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a debit (deduction) made by eBay to the seller's account when a payment needs to be adjusted.
     * @return string 'PaymentAdjustmentDebit'
     */
    const VALUE_PAYMENT_ADJUSTMENT_DEBIT = 'PaymentAdjustmentDebit';
    /**
     * Constant for value 'Chargeoff'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay write-off of an account charge.
     * @return string 'Chargeoff'
     */
    const VALUE_CHARGEOFF = 'Chargeoff';
    /**
     * Constant for value 'ChargeoffRecovery'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is the recovery of an eBay write-off of an acccount charge.
     * @return string 'ChargeoffRecovery'
     */
    const VALUE_CHARGEOFF_RECOVERY = 'ChargeoffRecovery';
    /**
     * Constant for value 'ChargeoffBankruptcy'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due to the seller declaring bankruptcy.
     * @return string 'ChargeoffBankruptcy'
     */
    const VALUE_CHARGEOFF_BANKRUPTCY = 'ChargeoffBankruptcy';
    /**
     * Constant for value 'ChargeoffSuspended'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned as a note that the eBay write-off of an account charge has been suspended.
     * @return string 'ChargeoffSuspended'
     */
    const VALUE_CHARGEOFF_SUSPENDED = 'ChargeoffSuspended';
    /**
     * Constant for value 'ChargeoffDeceased'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due to the decease of the seller.
     * @return string 'ChargeoffDeceased'
     */
    const VALUE_CHARGEOFF_DECEASED = 'ChargeoffDeceased';
    /**
     * Constant for value 'ChargeoffOther'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due to the decease of the seller.
     * @return string 'ChargeoffOther'
     */
    const VALUE_CHARGEOFF_OTHER = 'ChargeoffOther';
    /**
     * Constant for value 'ChargeoffWacko'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay write-off of the account charges by eBay due to the wackiness of the seller.
     * @return string 'ChargeoffWacko'
     */
    const VALUE_CHARGEOFF_WACKO = 'ChargeoffWacko';
    /**
     * Constant for value 'FinanceChargeReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of the finance charge to the user's account. A finance charge may be applicable if the user's monthly invoice balance is not paid in full by the due date.
     * @return string 'FinanceChargeReversal'
     */
    const VALUE_FINANCE_CHARGE_REVERSAL = 'FinanceChargeReversal';
    /**
     * Constant for value 'FVFCreditReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of a Final Value Fee credit, resulting in the fee again being charged to the seller. The Final Value Fee can be credited as a result of an Unpaid Item Dispute, but
     * if the buyer ultimately pays for the line item, the Final Value Fee will apply once again.
     * @return string 'FVFCreditReversal'
     */
    const VALUE_FVFCREDIT_REVERSAL = 'FVFCreditReversal';
    /**
     * Constant for value 'ForeignFundsConvert'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for currency conversion.
     * @return string 'ForeignFundsConvert'
     */
    const VALUE_FOREIGN_FUNDS_CONVERT = 'ForeignFundsConvert';
    /**
     * Constant for value 'ForeignFundsCheckReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of a check payment made with foreign funds.
     * @return string 'ForeignFundsCheckReversal'
     */
    const VALUE_FOREIGN_FUNDS_CHECK_REVERSAL = 'ForeignFundsCheckReversal';
    /**
     * Constant for value 'EOMRestriction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note that there is an 'End of the Month' restriction for account activity.
     * @return string 'EOMRestriction'
     */
    const VALUE_EOMRESTRICTION = 'EOMRestriction';
    /**
     * Constant for value 'AllFeesCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if eBay is issuing a credit to the seller for multiple listing fees.
     * @return string 'AllFeesCredit'
     */
    const VALUE_ALL_FEES_CREDIT = 'AllFeesCredit';
    /**
     * Constant for value 'SetOnHold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note that the user's account is on hold.
     * @return string 'SetOnHold'
     */
    const VALUE_SET_ON_HOLD = 'SetOnHold';
    /**
     * Constant for value 'RevertUserState'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note to indicate that the state of the user's account has been reverted.
     * @return string 'RevertUserState'
     */
    const VALUE_REVERT_USER_STATE = 'RevertUserState';
    /**
     * Constant for value 'DirectDebitOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a monthly payment made by automatic direct debit to the seller's checking account, when the account information is on file.
     * @return string 'DirectDebitOnFile'
     */
    const VALUE_DIRECT_DEBIT_ON_FILE = 'DirectDebitOnFile';
    /**
     * Constant for value 'DirectDebitNotOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a one-time payment made by direct debit to the seller's checking account, when the account information is not on file, but is provided for this payment.
     * @return string 'DirectDebitNotOnFile'
     */
    const VALUE_DIRECT_DEBIT_NOT_ON_FILE = 'DirectDebitNotOnFile';
    /**
     * Constant for value 'PaymentDirectDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment made by direct debit from the seller's checking account when the seller has requested automatic monthly invoice payments.
     * @return string 'PaymentDirectDebit'
     */
    const VALUE_PAYMENT_DIRECT_DEBIT = 'PaymentDirectDebit';
    /**
     * Constant for value 'DirectDebitReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of a payment made by direct debit from the seller's checking account.
     * @return string 'DirectDebitReversal'
     */
    const VALUE_DIRECT_DEBIT_REVERSAL = 'DirectDebitReversal';
    /**
     * Constant for value 'DirectDebitReturnedItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a reversal of a payment made by direct debit from a seller's checking account when an item is returned by the buyer.
     * @return string 'DirectDebitReturnedItem'
     */
    const VALUE_DIRECT_DEBIT_RETURNED_ITEM = 'DirectDebitReturnedItem';
    /**
     * Constant for value 'FeeHighlight'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for adding a colored band to emphasize a listing. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no longer available to most
     * marketplaces and sellers. </span>
     * @return string 'FeeHighlight'
     */
    const VALUE_FEE_HIGHLIGHT = 'FeeHighlight';
    /**
     * Constant for value 'CreditHighlight'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued to the seller by eBay for adding a colored band to emphasize a listing. <br> <br> <span class="tablenote"><b>Note:</b> This feature is no longer available to
     * most marketplaces and sellers. </span>
     * @return string 'CreditHighlight'
     */
    const VALUE_CREDIT_HIGHLIGHT = 'CreditHighlight';
    /**
     * Constant for value 'BulkUserSuspension'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note to indicate that the user's account has been suspended as part of a bulk suspension initiated by eBay.
     * @return string 'BulkUserSuspension'
     */
    const VALUE_BULK_USER_SUSPENSION = 'BulkUserSuspension';
    /**
     * Constant for value 'FeeRealEstate30DaysListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for a 30-day classified ad listing in a Real Estate category.
     * @return string 'FeeRealEstate30DaysListing'
     */
    const VALUE_FEE_REAL_ESTATE_30_DAYS_LISTING = 'FeeRealEstate30DaysListing';
    /**
     * Constant for value 'CreditRealEstate30DaysListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issue to a seller for a 30-day classified ad listing in a Real Estate category.
     * @return string 'CreditRealEstate30DaysListing'
     */
    const VALUE_CREDIT_REAL_ESTATE_30_DAYS_LISTING = 'CreditRealEstate30DaysListing';
    /**
     * Constant for value 'TradingLimitOverrideOn'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only used internally.
     * @return string 'TradingLimitOverrideOn'
     */
    const VALUE_TRADING_LIMIT_OVERRIDE_ON = 'TradingLimitOverrideOn';
    /**
     * Constant for value 'TradingLimitOverrideOff'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only used internally.
     * @return string 'TradingLimitOverrideOff'
     */
    const VALUE_TRADING_LIMIT_OVERRIDE_OFF = 'TradingLimitOverrideOff';
    /**
     * Constant for value 'EquifaxRealtimeFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to a seller who did not provide a credit card or checking account number to verify identify.
     * @return string 'EquifaxRealtimeFee'
     */
    const VALUE_EQUIFAX_REALTIME_FEE = 'EquifaxRealtimeFee';
    /**
     * Constant for value 'CreditEquifaxRealtimeFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued to a seller who was charged an Equifax fee.
     * @return string 'CreditEquifaxRealtimeFee'
     */
    const VALUE_CREDIT_EQUIFAX_REALTIME_FEE = 'CreditEquifaxRealtimeFee';
    /**
     * Constant for value 'PaymentEquifaxDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment made by the seller for an Equifax fee.
     * @return string 'PaymentEquifaxDebit'
     */
    const VALUE_PAYMENT_EQUIFAX_DEBIT = 'PaymentEquifaxDebit';
    /**
     * Constant for value 'PaymentEquifaxCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller for a payment made on an Equifax fee.
     * @return string 'PaymentEquifaxCredit'
     */
    const VALUE_PAYMENT_EQUIFAX_CREDIT = 'PaymentEquifaxCredit';
    /**
     * Constant for value 'Merged'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note to indicate that the user's two accounts (same owner, but different user IDs) have been merged into one account.
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'AutoTraderOn'
     * Meta information extracted from the WSDL
     * - documentation: The Auto Trader feature is no longer available for motor vehicle listings.
     * @return string 'AutoTraderOn'
     */
    const VALUE_AUTO_TRADER_ON = 'AutoTraderOn';
    /**
     * Constant for value 'AutoTraderOff'
     * Meta information extracted from the WSDL
     * - documentation: The Auto Trader feature is no longer available for motor vehicle listings.
     * @return string 'AutoTraderOff'
     */
    const VALUE_AUTO_TRADER_OFF = 'AutoTraderOff';
    /**
     * Constant for value 'PaperInvoiceOn'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as paper invoices are no longer available. Users must download their invoices from My eBay.
     * @return string 'PaperInvoiceOn'
     */
    const VALUE_PAPER_INVOICE_ON = 'PaperInvoiceOn';
    /**
     * Constant for value 'PaperInvoiceOff'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as paper invoices are no longer available. Users must download their invoices from My eBay.
     * @return string 'PaperInvoiceOff'
     */
    const VALUE_PAPER_INVOICE_OFF = 'PaperInvoiceOff';
    /**
     * Constant for value 'AccountStateSwitch'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned to act as a note to indicate that there has been a change in the status of the user's account.
     * @return string 'AccountStateSwitch'
     */
    const VALUE_ACCOUNT_STATE_SWITCH = 'AccountStateSwitch';
    /**
     * Constant for value 'FVFCreditReversalAutomatic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an automatic reversal of a Final Value Fee credit.
     * @return string 'FVFCreditReversalAutomatic'
     */
    const VALUE_FVFCREDIT_REVERSAL_AUTOMATIC = 'FVFCreditReversalAutomatic';
    /**
     * Constant for value 'CreditSoftOutage'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller if a title search outage of one hour or longer occurs on the site.
     * @return string 'CreditSoftOutage'
     */
    const VALUE_CREDIT_SOFT_OUTAGE = 'CreditSoftOutage';
    /**
     * Constant for value 'LACatalogFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LACatalogFee'
     */
    const VALUE_LACATALOG_FEE = 'LACatalogFee';
    /**
     * Constant for value 'LAExtraItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LAExtraItem'
     */
    const VALUE_LAEXTRA_ITEM = 'LAExtraItem';
    /**
     * Constant for value 'LACatalogItemFeeRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LACatalogItemFeeRefund'
     */
    const VALUE_LACATALOG_ITEM_FEE_REFUND = 'LACatalogItemFeeRefund';
    /**
     * Constant for value 'LACatalogInsertionRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LACatalogInsertionRefund'
     */
    const VALUE_LACATALOG_INSERTION_REFUND = 'LACatalogInsertionRefund';
    /**
     * Constant for value 'LAFinalValueFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LAFinalValueFee'
     */
    const VALUE_LAFINAL_VALUE_FEE = 'LAFinalValueFee';
    /**
     * Constant for value 'LAFinalValueFeeRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LAFinalValueFeeRefund'
     */
    const VALUE_LAFINAL_VALUE_FEE_REFUND = 'LAFinalValueFeeRefund';
    /**
     * Constant for value 'LABuyerPremiumPercentageFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LABuyerPremiumPercentageFee'
     */
    const VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE = 'LABuyerPremiumPercentageFee';
    /**
     * Constant for value 'LABuyerPremiumPercentageFeeRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LABuyerPremiumPercentageFeeRefund'
     */
    const VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE_REFUND = 'LABuyerPremiumPercentageFeeRefund';
    /**
     * Constant for value 'LAAudioVideoFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LAAudioVideoFee'
     */
    const VALUE_LAAUDIO_VIDEO_FEE = 'LAAudioVideoFee';
    /**
     * Constant for value 'LAAudioVideoFeeRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Live Auction listings are no longer available on any eBay marketplace.
     * @return string 'LAAudioVideoFeeRefund'
     */
    const VALUE_LAAUDIO_VIDEO_FEE_REFUND = 'LAAudioVideoFeeRefund';
    /**
     * Constant for value 'FeeIPIXPhoto'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the iPix photo feature is no longer available on any eBay marketplace.
     * @return string 'FeeIPIXPhoto'
     */
    const VALUE_FEE_IPIXPHOTO = 'FeeIPIXPhoto';
    /**
     * Constant for value 'FeeIPIXSlideShow'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the iPix photo feature is no longer available on any eBay marketplace.
     * @return string 'FeeIPIXSlideShow'
     */
    const VALUE_FEE_IPIXSLIDE_SHOW = 'FeeIPIXSlideShow';
    /**
     * Constant for value 'CreditIPIXPhoto'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the iPix photo feature is no longer available on any eBay marketplace.
     * @return string 'CreditIPIXPhoto'
     */
    const VALUE_CREDIT_IPIXPHOTO = 'CreditIPIXPhoto';
    /**
     * Constant for value 'CreditIPIXSlideShow'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the iPix photo feature is no longer available on any eBay marketplace.
     * @return string 'CreditIPIXSlideShow'
     */
    const VALUE_CREDIT_IPIXSLIDE_SHOW = 'CreditIPIXSlideShow';
    /**
     * Constant for value 'FeeTenDayAuction'
     * Meta information extracted from the WSDL
     * - documentation: A fee charged for listing an item for 10 days, rather than one, three, five, or seven days.
     * @return string 'FeeTenDayAuction'
     */
    const VALUE_FEE_TEN_DAY_AUCTION = 'FeeTenDayAuction';
    /**
     * Constant for value 'CreditTenDayAuction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued to a seller for a 10-day auction listing.
     * @return string 'CreditTenDayAuction'
     */
    const VALUE_CREDIT_TEN_DAY_AUCTION = 'CreditTenDayAuction';
    /**
     * Constant for value 'TemporaryCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a temporary credit from eBay to the user.
     * @return string 'TemporaryCredit'
     */
    const VALUE_TEMPORARY_CREDIT = 'TemporaryCredit';
    /**
     * Constant for value 'TemporaryCreditReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is the reversal of a temporary credit from eBay to the user.
     * @return string 'TemporaryCreditReversal'
     */
    const VALUE_TEMPORARY_CREDIT_REVERSAL = 'TemporaryCreditReversal';
    /**
     * Constant for value 'SubscriptionAABasic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any eBay marketplace.
     * @return string 'SubscriptionAABasic'
     */
    const VALUE_SUBSCRIPTION_AABASIC = 'SubscriptionAABasic';
    /**
     * Constant for value 'SubscriptionAAPro'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any eBay marketplace.
     * @return string 'SubscriptionAAPro'
     */
    const VALUE_SUBSCRIPTION_AAPRO = 'SubscriptionAAPro';
    /**
     * Constant for value 'CreditAABasic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any eBay marketplace.
     * @return string 'CreditAABasic'
     */
    const VALUE_CREDIT_AABASIC = 'CreditAABasic';
    /**
     * Constant for value 'CreditAAPro'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Auction Assistant feature is no longer available on any eBay marketplace.
     * @return string 'CreditAAPro'
     */
    const VALUE_CREDIT_AAPRO = 'CreditAAPro';
    /**
     * Constant for value 'FeeLargePicture'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for a super-sized picture in a listing.
     * @return string 'FeeLargePicture'
     */
    const VALUE_FEE_LARGE_PICTURE = 'FeeLargePicture';
    /**
     * Constant for value 'CreditLargePicture'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller for a super-sized picture in a listing.
     * @return string 'CreditLargePicture'
     */
    const VALUE_CREDIT_LARGE_PICTURE = 'CreditLargePicture';
    /**
     * Constant for value 'FeePicturePack'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     * @return string 'FeePicturePack'
     */
    const VALUE_FEE_PICTURE_PACK = 'FeePicturePack';
    /**
     * Constant for value 'CreditPicturePackPartial'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     * @return string 'CreditPicturePackPartial'
     */
    const VALUE_CREDIT_PICTURE_PACK_PARTIAL = 'CreditPicturePackPartial';
    /**
     * Constant for value 'CreditPicturePackFull'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as eBay no longer charges a fee for adding photos to listings.
     * @return string 'CreditPicturePackFull'
     */
    const VALUE_CREDIT_PICTURE_PACK_FULL = 'CreditPicturePackFull';
    /**
     * Constant for value 'SubscriptioneBayStores'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a monthly subscription fee charged for the user's eBay Store.
     * @return string 'SubscriptioneBayStores'
     */
    const VALUE_SUBSCRIPTIONE_BAY_STORES = 'SubscriptioneBayStores';
    /**
     * Constant for value 'CrediteBayStores'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward the user's eBay Store subscription fee.
     * @return string 'CrediteBayStores'
     */
    const VALUE_CREDITE_BAY_STORES = 'CrediteBayStores';
    /**
     * Constant for value 'FeeInsertionFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee for a fixed-price listing.
     * @return string 'FeeInsertionFixedPrice'
     */
    const VALUE_FEE_INSERTION_FIXED_PRICE = 'FeeInsertionFixedPrice';
    /**
     * Constant for value 'CreditInsertionFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee credit for a fixed-price listing. If a listed item does not sell or results in an Unpaid Item case/dispute, the seller can relist the item with no additional
     * charge.
     * @return string 'CreditInsertionFixedPrice'
     */
    const VALUE_CREDIT_INSERTION_FIXED_PRICE = 'CreditInsertionFixedPrice';
    /**
     * Constant for value 'FeeFinalValueFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a final value fee for a sale on the fixed-price listing. This fee is charged when a listed item sells, and is a percentage of the final sale price.
     * @return string 'FeeFinalValueFixedPrice'
     */
    const VALUE_FEE_FINAL_VALUE_FIXED_PRICE = 'FeeFinalValueFixedPrice';
    /**
     * Constant for value 'CreditFinalValueFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for a final value fee for a sale on the fixed-price listing. A final value fee may be credited back to a seller's account if the buyer never pays for the line item,
     * or if the buyer cancels the order.
     * @return string 'CreditFinalValueFixedPrice'
     */
    const VALUE_CREDIT_FINAL_VALUE_FIXED_PRICE = 'CreditFinalValueFixedPrice';
    /**
     * Constant for value 'ElectronicInvoiceOn'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since paper invoices are no longer available, so electronic invoices are the only option. Users must download their invoices from My eBay.
     * @return string 'ElectronicInvoiceOn'
     */
    const VALUE_ELECTRONIC_INVOICE_ON = 'ElectronicInvoiceOn';
    /**
     * Constant for value 'ElectronicInvoiceOff'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since paper invoices are no longer available, so electronic invoices are the only option. Users must download their invoices from My eBay.
     * @return string 'ElectronicInvoiceOff'
     */
    const VALUE_ELECTRONIC_INVOICE_OFF = 'ElectronicInvoiceOff';
    /**
     * Constant for value 'FlagDDDDPending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a direct debit payment is pending.
     * @return string 'FlagDDDDPending'
     */
    const VALUE_FLAG_DDDDPENDING = 'FlagDDDDPending';
    /**
     * Constant for value 'FlagDDPaymentConfirmed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a direct debit payment is confirmed.
     * @return string 'FlagDDPaymentConfirmed'
     */
    const VALUE_FLAG_DDPAYMENT_CONFIRMED = 'FlagDDPaymentConfirmed';
    /**
     * Constant for value 'FixedPriceDurationFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for creating a fixed-price listing with a 10-day duration. <br> <br> <span class="tablenote"><b>Note:</b> This charge may only be applicable to motor
     * vehicle listings on eBay Motors, eBay Canada (English and French versions), eBay UK, and eBay Italy. For all non-motor vehicle categories, the only available listing duration is 'GTC', or 'Good 'til Cancelled'. </span>
     * @return string 'FixedPriceDurationFee'
     */
    const VALUE_FIXED_PRICE_DURATION_FEE = 'FixedPriceDurationFee';
    /**
     * Constant for value 'FixedPriceDurationCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller for creating a fixed-price listing with a 10-day duration. <br> <br> <span class="tablenote"><b>Note:</b> The 10-day duration fee is
     * only applicable to motor vehicle listings on eBay Motors, eBay Canada (English and French versions), eBay UK, and eBay Italy. For all non-motor vehicle categories, the only available listing duration is 'GTC', or 'Good 'til Cancelled'. </span>
     * @return string 'FixedPriceDurationCredit'
     */
    const VALUE_FIXED_PRICE_DURATION_CREDIT = 'FixedPriceDurationCredit';
    /**
     * Constant for value 'BuyItNowFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay if the seller uses the 'Buy It Now' feature on an auction listing.
     * @return string 'BuyItNowFee'
     */
    const VALUE_BUY_IT_NOW_FEE = 'BuyItNowFee';
    /**
     * Constant for value 'BuyItNowCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay if the seller uses the 'Buy It Now' feature on an auction listing.
     * @return string 'BuyItNowCredit'
     */
    const VALUE_BUY_IT_NOW_CREDIT = 'BuyItNowCredit';
    /**
     * Constant for value 'FeeSchedule'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay if the seller uses the scheduled listing feature for a listing. With scheduled listings, the seller schedules a listing to start at some later time (up
     * to 3 weeks after) instead of immediately.
     * @return string 'FeeSchedule'
     */
    const VALUE_FEE_SCHEDULE = 'FeeSchedule';
    /**
     * Constant for value 'CreditSchedule'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller if the seller needs to be refunded for a scheduled listing. With scheduled listings, the seller schedules a listing to start at some
     * later time (up to 3 weeks after) instead of immediately.
     * @return string 'CreditSchedule'
     */
    const VALUE_CREDIT_SCHEDULE = 'CreditSchedule';
    /**
     * Constant for value 'SubscriptionSMBasic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is the monthly subscription fee charged for the basic version of Selling Manager. For most eBay marketplaces and sellers, there is no subscription charge to use the basic
     * version of Selling Manager.
     * @return string 'SubscriptionSMBasic'
     */
    const VALUE_SUBSCRIPTION_SMBASIC = 'SubscriptionSMBasic';
    /**
     * Constant for value 'SubscriptionSMBasicPro'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is the monthly subscription fee charged for using the Selling Manager Pro product.
     * @return string 'SubscriptionSMBasicPro'
     */
    const VALUE_SUBSCRIPTION_SMBASIC_PRO = 'SubscriptionSMBasicPro';
    /**
     * Constant for value 'CreditSMBasic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for the monthly subscription fee charged for the basic version of Selling Manager. For most eBay marketplaces and sellers, there is no subscription charge to use the
     * basic version of Selling Manager.
     * @return string 'CreditSMBasic'
     */
    const VALUE_CREDIT_SMBASIC = 'CreditSMBasic';
    /**
     * Constant for value 'CreditSMBasicPro'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for the monthly subscription fee charged for using the Selling Manager Pro product.
     * @return string 'CreditSMBasicPro'
     */
    const VALUE_CREDIT_SMBASIC_PRO = 'CreditSMBasicPro';
    /**
     * Constant for value 'StoresGTCFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller when a 'Good 'til Cancelled', fixed-price listing automatically renews after each month (as long as inventory is still available or 'out-of-stock'
     * feature is on). This fee is similar to an insertion fee when a listing is first created. 'GTC' listings automatically renew each month, and these renewed listings may incur insertion fees unless the seller has 'zero insertion fee' credits. eBay
     * sellers with stores get more 'zero insertion fee' credits than other sellers. <br><br> <span class="tablenote"><b>Note: </b> On July 1, 2019, the Good 'Til Cancelled renewal schedule was modified from every 30 days to once per calendar month. For
     * example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month.
     * Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * @return string 'StoresGTCFee'
     */
    const VALUE_STORES_GTCFEE = 'StoresGTCFee';
    /**
     * Constant for value 'StoresGTCCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to refund the seller for a 'Good 'til Cancelled' listing renewal/insertion fee. 'GTC' listings automatically renew each, and these renewed listings
     * may incur insertion fees unless the seller has 'zero insertion fee' credits. eBay sellers with stores get more 'zero insertion fee' credits than other sellers. <br><br> <span class="tablenote"><b>Note: </b> On July 1, 2019, the Good 'Til Cancelled
     * renewal schedule was modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following
     * month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * @return string 'StoresGTCCredit'
     */
    const VALUE_STORES_GTCCREDIT = 'StoresGTCCredit';
    /**
     * Constant for value 'ListingDesignerFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for the seller using a Listing Designer theme and layout template for a listing. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no
     * longer able to use Listing Designer templates when they create or revise listings, so this fee will soon become inapplicable.</span>
     * @return string 'ListingDesignerFee'
     */
    const VALUE_LISTING_DESIGNER_FEE = 'ListingDesignerFee';
    /**
     * Constant for value 'ListingDesignerCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to refund the seller using a Listing Designer theme and layout template for a listing. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31,
     * 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings, so this credit will soon become inapplicable.</span>
     * @return string 'ListingDesignerCredit'
     */
    const VALUE_LISTING_DESIGNER_CREDIT = 'ListingDesignerCredit';
    /**
     * Constant for value 'ExtendedAuctionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there is no additional fee charged to the seller for creating a 10-day auction listing.
     * @return string 'ExtendedAuctionFee'
     */
    const VALUE_EXTENDED_AUCTION_FEE = 'ExtendedAuctionFee';
    /**
     * Constant for value 'ExtendedAcutionCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there is no additional fee charged to the seller for creating a 10-day auction listing.
     * @return string 'ExtendedAcutionCredit'
     */
    const VALUE_EXTENDED_ACUTION_CREDIT = 'ExtendedAcutionCredit';
    /**
     * Constant for value 'PayPalOTPSucc'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only for internal use, and indicates that the login attempt to PayPal using OTP ('One-Time Pin' or two-factor authentication) was successful.
     * @return string 'PayPalOTPSucc'
     */
    const VALUE_PAY_PAL_OTPSUCC = 'PayPalOTPSucc';
    /**
     * Constant for value 'PayPalOTPPend'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only for internal use, and indicates that the login attempt to PayPal using OTP ('One-Time Pin' or two-factor authentication) is pending.
     * @return string 'PayPalOTPPend'
     */
    const VALUE_PAY_PAL_OTPPEND = 'PayPalOTPPend';
    /**
     * Constant for value 'PayPalFailed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is only for internal use, and indicates that the login attempt to PayPal failed.
     * @return string 'PayPalFailed'
     */
    const VALUE_PAY_PAL_FAILED = 'PayPalFailed';
    /**
     * Constant for value 'PayPalChargeBack'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a charge back using PayPal as the payment method.
     * @return string 'PayPalChargeBack'
     */
    const VALUE_PAY_PAL_CHARGE_BACK = 'PayPalChargeBack';
    /**
     * Constant for value 'ChargeBack'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a charge back.
     * @return string 'ChargeBack'
     */
    const VALUE_CHARGE_BACK = 'ChargeBack';
    /**
     * Constant for value 'ChargeBackReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is the reversal of a charge back.
     * @return string 'ChargeBackReversal'
     */
    const VALUE_CHARGE_BACK_REVERSAL = 'ChargeBackReversal';
    /**
     * Constant for value 'PayPalRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a refund using PayPal as the payment method.
     * @return string 'PayPalRefund'
     */
    const VALUE_PAY_PAL_REFUND = 'PayPalRefund';
    /**
     * Constant for value 'BonusPointsAddition'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsAddition'
     */
    const VALUE_BONUS_POINTS_ADDITION = 'BonusPointsAddition';
    /**
     * Constant for value 'BonusPointsReduction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsReduction'
     */
    const VALUE_BONUS_POINTS_REDUCTION = 'BonusPointsReduction';
    /**
     * Constant for value 'BonusPointsPaymentAutomatic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsPaymentAutomatic'
     */
    const VALUE_BONUS_POINTS_PAYMENT_AUTOMATIC = 'BonusPointsPaymentAutomatic';
    /**
     * Constant for value 'BonusPointsPaymentManual'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsPaymentManual'
     */
    const VALUE_BONUS_POINTS_PAYMENT_MANUAL = 'BonusPointsPaymentManual';
    /**
     * Constant for value 'BonusPointsPaymentReversal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsPaymentReversal'
     */
    const VALUE_BONUS_POINTS_PAYMENT_REVERSAL = 'BonusPointsPaymentReversal';
    /**
     * Constant for value 'BonusPointsCashPayout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the 'Anything Points' program is no longer available.
     * @return string 'BonusPointsCashPayout'
     */
    const VALUE_BONUS_POINTS_CASH_PAYOUT = 'BonusPointsCashPayout';
    /**
     * Constant for value 'VATCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit to the seller's account for Value-Added Tax (VAT) previously paid by the seller.
     * @return string 'VATCredit'
     */
    const VALUE_VATCREDIT = 'VATCredit';
    /**
     * Constant for value 'VATDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a debit to the seller's account for a Value-Added Tax (VAT) charge.
     * @return string 'VATDebit'
     */
    const VALUE_VATDEBIT = 'VATDebit';
    /**
     * Constant for value 'VATStatusChangePending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a VAT status change to the seller's account is pending.
     * @return string 'VATStatusChangePending'
     */
    const VALUE_VATSTATUS_CHANGE_PENDING = 'VATStatusChangePending';
    /**
     * Constant for value 'VATStatusChangeApproved'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a VAT status change to the seller's account is approved.
     * @return string 'VATStatusChangeApproved'
     */
    const VALUE_VATSTATUS_CHANGE_APPROVED = 'VATStatusChangeApproved';
    /**
     * Constant for value 'VATStatusChange_Denied'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a VAT status change to the seller's account was denied.
     * @return string 'VATStatusChange_Denied'
     */
    const VALUE_VATSTATUS_CHANGE_DENIED = 'VATStatusChange_Denied';
    /**
     * Constant for value 'VATStatusDeletedByCSR'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a VAT status change to the seller's account was cancelled by an eBay customer support representative.
     * @return string 'VATStatusDeletedByCSR'
     */
    const VALUE_VATSTATUS_DELETED_BY_CSR = 'VATStatusDeletedByCSR';
    /**
     * Constant for value 'VATStatusDeletedByUser'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that a VAT status change to the seller's account was cancelled by the user.
     * @return string 'VATStatusDeletedByUser'
     */
    const VALUE_VATSTATUS_DELETED_BY_USER = 'VATStatusDeletedByUser';
    /**
     * Constant for value 'SMProListingDesignerFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for the seller using a Listing Designer theme and layout template through the Selling Manager Pro UI, or through a Selling Manager Pro API call. <br> <br> <span
     * class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings, so this fee will soon become inapplicable.</span>
     * @return string 'SMProListingDesignerFee'
     */
    const VALUE_SMPRO_LISTING_DESIGNER_FEE = 'SMProListingDesignerFee';
    /**
     * Constant for value 'SMProListingDesignerCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller for a fee that was charged to the seller for using a Listing Designer theme and layout template through the Selling Manager Pro UI, or
     * through a Selling Manager Pro API call. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings, so this credit will soon become
     * inapplicable.</span>
     * @return string 'SMProListingDesignerCredit'
     */
    const VALUE_SMPRO_LISTING_DESIGNER_CREDIT = 'SMProListingDesignerCredit';
    /**
     * Constant for value 'StoresSuccessfulListingFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing type.
     * @return string 'StoresSuccessfulListingFee'
     */
    const VALUE_STORES_SUCCESSFUL_LISTING_FEE = 'StoresSuccessfulListingFee';
    /**
     * Constant for value 'StoresSuccessfulListingFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing type.
     * @return string 'StoresSuccessfulListingFeeCredit'
     */
    const VALUE_STORES_SUCCESSFUL_LISTING_FEE_CREDIT = 'StoresSuccessfulListingFeeCredit';
    /**
     * Constant for value 'StoresReferralFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there is no longer a referral fee charged to sellers when buyers are routed to their store through printed materials or emails.
     * @return string 'StoresReferralFee'
     */
    const VALUE_STORES_REFERRAL_FEE = 'StoresReferralFee';
    /**
     * Constant for value 'StoresReferralCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there is no longer a referral fee charged to sellers when buyers are routed to their store through printed materials or emails.
     * @return string 'StoresReferralCredit'
     */
    const VALUE_STORES_REFERRAL_CREDIT = 'StoresReferralCredit';
    /**
     * Constant for value 'SubtitleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a fee charged to the seller for adding a subtitle to a listing. Subtitles allow sellers to provide more keywords and/or descriptive information, and may increase buyers' interest.
     * @return string 'SubtitleFee'
     */
    const VALUE_SUBTITLE_FEE = 'SubtitleFee';
    /**
     * Constant for value 'SubtitleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a credit issued from eBay to compensate the seller for a subtitle fee charged to their account.
     * @return string 'SubtitleFeeCredit'
     */
    const VALUE_SUBTITLE_FEE_CREDIT = 'SubtitleFeeCredit';
    /**
     * Constant for value 'eBayStoreInventorySubscriptionCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as <code>StoresFixedPrice</code> is no longer a valid listing type.
     * @return string 'eBayStoreInventorySubscriptionCredit'
     */
    const VALUE_E_BAY_STORE_INVENTORY_SUBSCRIPTION_CREDIT = 'eBayStoreInventorySubscriptionCredit';
    /**
     * Constant for value 'AutoPmntReqExempt'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable.
     * @return string 'AutoPmntReqExempt'
     */
    const VALUE_AUTO_PMNT_REQ_EXEMPT = 'AutoPmntReqExempt';
    /**
     * Constant for value 'AutoPmntReqRein'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable.
     * @return string 'AutoPmntReqRein'
     */
    const VALUE_AUTO_PMNT_REQ_REIN = 'AutoPmntReqRein';
    /**
     * Constant for value 'PictureManagerSubscriptionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Picture Manager feature is no longer available.
     * @return string 'PictureManagerSubscriptionFee'
     */
    const VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE = 'PictureManagerSubscriptionFee';
    /**
     * Constant for value 'PictureManagerSubscriptionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Picture Manager feature is no longer available.
     * @return string 'PictureManagerSubscriptionFeeCredit'
     */
    const VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE_CREDIT = 'PictureManagerSubscriptionFeeCredit';
    /**
     * Constant for value 'SellerReportsBasicFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     * @return string 'SellerReportsBasicFee'
     */
    const VALUE_SELLER_REPORTS_BASIC_FEE = 'SellerReportsBasicFee';
    /**
     * Constant for value 'SellerReportsBasicCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     * @return string 'SellerReportsBasicCredit'
     */
    const VALUE_SELLER_REPORTS_BASIC_CREDIT = 'SellerReportsBasicCredit';
    /**
     * Constant for value 'SellerReportsPlusFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     * @return string 'SellerReportsPlusFee'
     */
    const VALUE_SELLER_REPORTS_PLUS_FEE = 'SellerReportsPlusFee';
    /**
     * Constant for value 'SellerReportsPlusCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Seller Reports feature is no longer available.
     * @return string 'SellerReportsPlusCredit'
     */
    const VALUE_SELLER_REPORTS_PLUS_CREDIT = 'SellerReportsPlusCredit';
    /**
     * Constant for value 'PaypalOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that the user's PayPal account information is linked with their eBay account.
     * @return string 'PaypalOnFile'
     */
    const VALUE_PAYPAL_ON_FILE = 'PaypalOnFile';
    /**
     * Constant for value 'PaypalOnFileByCSR'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that the user's PayPal account information was linked with their eBay account by an eBay customer support represenative.
     * @return string 'PaypalOnFileByCSR'
     */
    const VALUE_PAYPAL_ON_FILE_BY_CSR = 'PaypalOnFileByCSR';
    /**
     * Constant for value 'PaypalOffFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value acts as a note to indicate that the user's PayPal account information is not linked with their eBay account.
     * @return string 'PaypalOffFile'
     */
    const VALUE_PAYPAL_OFF_FILE = 'PaypalOffFile';
    /**
     * Constant for value 'BorderFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as borders around listing photos are no longer supported on any eBay marketplace.
     * @return string 'BorderFee'
     */
    const VALUE_BORDER_FEE = 'BorderFee';
    /**
     * Constant for value 'BorderFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as borders around listing photos are no longer supported on any eBay marketplace.
     * @return string 'BorderFeeCredit'
     */
    const VALUE_BORDER_FEE_CREDIT = 'BorderFeeCredit';
    /**
     * Constant for value 'FeeSearchableMobileDE'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since placing eBay Germany motor vehicle listings on the mobile.de site is no longer supported.
     * @return string 'FeeSearchableMobileDE'
     */
    const VALUE_FEE_SEARCHABLE_MOBILE_DE = 'FeeSearchableMobileDE';
    /**
     * Constant for value 'SalesReportsPlusFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a monthly subscription fee charged for Sales Reports Plus.
     * @return string 'SalesReportsPlusFee'
     */
    const VALUE_SALES_REPORTS_PLUS_FEE = 'SalesReportsPlusFee';
    /**
     * Constant for value 'SalesReportsPlusCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a credit to the seller applied towards the monthly subscription fee charged for Sales Reports Plus.
     * @return string 'SalesReportsPlusCredit'
     */
    const VALUE_SALES_REPORTS_PLUS_CREDIT = 'SalesReportsPlusCredit';
    /**
     * Constant for value 'CreditSearchableMobileDE'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since placing eBay Germany motor vehicle listings on the mobile.de site is no longer supported.
     * @return string 'CreditSearchableMobileDE'
     */
    const VALUE_CREDIT_SEARCHABLE_MOBILE_DE = 'CreditSearchableMobileDE';
    /**
     * Constant for value 'EmailMarketingFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since this eBay Stores marketing feature is no longer supported.
     * @return string 'EmailMarketingFee'
     */
    const VALUE_EMAIL_MARKETING_FEE = 'EmailMarketingFee';
    /**
     * Constant for value 'EmailMarketingCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since this eBay Stores marketing feature is no longer supported.
     * @return string 'EmailMarketingCredit'
     */
    const VALUE_EMAIL_MARKETING_CREDIT = 'EmailMarketingCredit';
    /**
     * Constant for value 'FeePictureShow'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the picture slide show feature is no longer available.
     * @return string 'FeePictureShow'
     */
    const VALUE_FEE_PICTURE_SHOW = 'FeePictureShow';
    /**
     * Constant for value 'CreditPictureShow'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the picture slide show feature is no longer available.
     * @return string 'CreditPictureShow'
     */
    const VALUE_CREDIT_PICTURE_SHOW = 'CreditPictureShow';
    /**
     * Constant for value 'ProPackBundleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a fee charged to the seller for using the Pro Pack Bundle feature pack (currently available to US and Canada eBay motor vehicle sellers).
     * @return string 'ProPackBundleFee'
     */
    const VALUE_PRO_PACK_BUNDLE_FEE = 'ProPackBundleFee';
    /**
     * Constant for value 'ProPackBundleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a credit towards the fee charged to the seller for using the Pro Pack Bundle feature pack (currently available to US and Canada eBay motor vehicle sellers).
     * @return string 'ProPackBundleFeeCredit'
     */
    const VALUE_PRO_PACK_BUNDLE_FEE_CREDIT = 'ProPackBundleFeeCredit';
    /**
     * Constant for value 'BasicUpgradePackBundleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since this bundle pack is no longer available on any eBay marketplaces.
     * @return string 'BasicUpgradePackBundleFee'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE = 'BasicUpgradePackBundleFee';
    /**
     * Constant for value 'BasicUpgradePackBundleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since this bundle pack is no longer available on any eBay marketplaces.
     * @return string 'BasicUpgradePackBundleFeeCredit'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE_CREDIT = 'BasicUpgradePackBundleFeeCredit';
    /**
     * Constant for value 'ValuePackBundleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a fee charged by eBay to the seller for using the Value Pack Bundle feature pack.
     * @return string 'ValuePackBundleFee'
     */
    const VALUE_VALUE_PACK_BUNDLE_FEE = 'ValuePackBundleFee';
    /**
     * Constant for value 'ValuePackBundleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a credit towards the fee charged to the seller for using the Value Pack Bundle feature pack.
     * @return string 'ValuePackBundleFeeCredit'
     */
    const VALUE_VALUE_PACK_BUNDLE_FEE_CREDIT = 'ValuePackBundleFeeCredit';
    /**
     * Constant for value 'ProPackPlusBundleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a fee charged by eBay to the seller for using the Pro Pack Plus Bundle feature pack.
     * @return string 'ProPackPlusBundleFee'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE_FEE = 'ProPackPlusBundleFee';
    /**
     * Constant for value 'ProPackPlusBundleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is a credit towards the fee charged by eBay to the seller for using the Pro Pack Plus Bundle feature pack.
     * @return string 'ProPackPlusBundleFeeCredit'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE_FEE_CREDIT = 'ProPackPlusBundleFeeCredit';
    /**
     * Constant for value 'FinalEntry'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the account entry is the final entry in a user's account before it is closed or merged with another account.
     * @return string 'FinalEntry'
     */
    const VALUE_FINAL_ENTRY = 'FinalEntry';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ExtendedDurationFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for using an extended listing duration.
     * @return string 'ExtendedDurationFee'
     */
    const VALUE_EXTENDED_DURATION_FEE = 'ExtendedDurationFee';
    /**
     * Constant for value 'ExtendedDurationFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee charged to the seller for using an extended listing duration.
     * @return string 'ExtendedDurationFeeCredit'
     */
    const VALUE_EXTENDED_DURATION_FEE_CREDIT = 'ExtendedDurationFeeCredit';
    /**
     * Constant for value 'InternationalListingFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a 'cross-border trade' fee, where the seller pays an additional listing fee to have his/her listing surface in the search on another eBay marketplace.
     * @return string 'InternationalListingFee'
     */
    const VALUE_INTERNATIONAL_LISTING_FEE = 'InternationalListingFee';
    /**
     * Constant for value 'InternationalListingCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a 'cross-border trade' fee, where the seller pays an additional listing fee to have his/her listing surface in the search on another eBay marketplace.
     * @return string 'InternationalListingCredit'
     */
    const VALUE_INTERNATIONAL_LISTING_CREDIT = 'InternationalListingCredit';
    /**
     * Constant for value 'MarketplaceResearchExpiredSubscriptionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for an expired Terapeak Research subscription.
     * @return string 'MarketplaceResearchExpiredSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE = 'MarketplaceResearchExpiredSubscriptionFee';
    /**
     * Constant for value 'MarketplaceResearchExpiredSubscriptionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee for an expired Terapeak Research subscription.
     * @return string 'MarketplaceResearchExpiredSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchExpiredSubscriptionFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchBasicSubscriptionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for a Terapeak Research basic subscription.
     * @return string 'MarketplaceResearchBasicSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE = 'MarketplaceResearchBasicSubscriptionFee';
    /**
     * Constant for value 'MarketplaceResearchBasicSubscriptionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee for a Terapeak Research basic subscription.
     * @return string 'MarketplaceResearchBasicSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchBasicSubscriptionFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchProSubscriptionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for a Terapeak Research pro subscription.
     * @return string 'MarketplaceResearchProSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE = 'MarketplaceResearchProSubscriptionFee';
    /**
     * Constant for value 'BasicBundleFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since a basic bundle pack is no longer available on any eBay marketplace.
     * @return string 'BasicBundleFee'
     */
    const VALUE_BASIC_BUNDLE_FEE = 'BasicBundleFee';
    /**
     * Constant for value 'BasicBundleFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since a basic bundle pack is no longer available on any eBay marketplace.
     * @return string 'BasicBundleFeeCredit'
     */
    const VALUE_BASIC_BUNDLE_FEE_CREDIT = 'BasicBundleFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchProSubscriptionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee for a Terapeak Research pro subscription.
     * @return string 'MarketplaceResearchProSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchProSubscriptionFeeCredit';
    /**
     * Constant for value 'VehicleLocalSubscriptionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there are no longer any subscription fees to sell motor vehicles through Motors local listings.
     * @return string 'VehicleLocalSubscriptionFee'
     */
    const VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE = 'VehicleLocalSubscriptionFee';
    /**
     * Constant for value 'VehicleLocalSubscriptionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as there are no longer any subscription fees to sell motor vehicles through Motors local listings.
     * @return string 'VehicleLocalSubscriptionFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE_CREDIT = 'VehicleLocalSubscriptionFeeCredit';
    /**
     * Constant for value 'VehicleLocalInsertionFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an insertion fee for a Motors local listing.
     * @return string 'VehicleLocalInsertionFee'
     */
    const VALUE_VEHICLE_LOCAL_INSERTION_FEE = 'VehicleLocalInsertionFee';
    /**
     * Constant for value 'VehicleLocalInsertionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards an insertion fee for a Motors local listing.
     * @return string 'VehicleLocalInsertionFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_INSERTION_FEE_CREDIT = 'VehicleLocalInsertionFeeCredit';
    /**
     * Constant for value 'VehicleLocalFinalValueFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a final value fee for the sale of a motor vehicle through a Motors local listing.
     * @return string 'VehicleLocalFinalValueFee'
     */
    const VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE = 'VehicleLocalFinalValueFee';
    /**
     * Constant for value 'VehicleLocalFinalValueFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is credit towards a final value fee for the sale of a motor vehicle through a Motors local listing.
     * @return string 'VehicleLocalFinalValueFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE_CREDIT = 'VehicleLocalFinalValueFeeCredit';
    /**
     * Constant for value 'VehicleLocalGTCFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a 'GTC' duration listing fee for a Motors local listing.
     * @return string 'VehicleLocalGTCFee'
     */
    const VALUE_VEHICLE_LOCAL_GTCFEE = 'VehicleLocalGTCFee';
    /**
     * Constant for value 'VehicleLocalGTCFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a 'GTC' duration listing fee for a Motors local listing.
     * @return string 'VehicleLocalGTCFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_GTCFEE_CREDIT = 'VehicleLocalGTCFeeCredit';
    /**
     * Constant for value 'eBayMotorsProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay Motors Pro fee. Applies to eBay Motors Pro registered dealers only.
     * @return string 'eBayMotorsProFee'
     */
    const VALUE_E_BAY_MOTORS_PRO_FEE = 'eBayMotorsProFee';
    /**
     * Constant for value 'CrediteBayMotorsProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards an eBay Motors Pro fee. Applies to eBay Motors Pro registered dealers only.
     * @return string 'CrediteBayMotorsProFee'
     */
    const VALUE_CREDITE_BAY_MOTORS_PRO_FEE = 'CrediteBayMotorsProFee';
    /**
     * Constant for value 'eBayMotorsProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an eBay Motors Pro fee for a Feature pack. Applies to eBay Motors Pro registered dealers only.
     * @return string 'eBayMotorsProFeatureFee'
     */
    const VALUE_E_BAY_MOTORS_PRO_FEATURE_FEE = 'eBayMotorsProFeatureFee';
    /**
     * Constant for value 'CrediteBayMotorsProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards an eBay Motors Pro fee for a Feature pack. Applies to eBay Motors Pro registered dealers only.
     * @return string 'CrediteBayMotorsProFeatureFee'
     */
    const VALUE_CREDITE_BAY_MOTORS_PRO_FEATURE_FEE = 'CrediteBayMotorsProFeatureFee';
    /**
     * Constant for value 'FeeGalleryPlus'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay for listing an item with the Gallery Plus feature.
     * @return string 'FeeGalleryPlus'
     */
    const VALUE_FEE_GALLERY_PLUS = 'FeeGalleryPlus';
    /**
     * Constant for value 'CreditGalleryPlus'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee charged by eBay for listing an item with the Gallery Plus feature.
     * @return string 'CreditGalleryPlus'
     */
    const VALUE_CREDIT_GALLERY_PLUS = 'CreditGalleryPlus';
    /**
     * Constant for value 'PrivateListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for a private listing. With a private listing, bidders/buyers remain anonymous to other eBay users (besides the seller).
     * @return string 'PrivateListing'
     */
    const VALUE_PRIVATE_LISTING = 'PrivateListing';
    /**
     * Constant for value 'CreditPrivateListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee for a private listing. With a private listing, bidders/buyers remain anonymous to other eBay users (besides the seller).
     * @return string 'CreditPrivateListing'
     */
    const VALUE_CREDIT_PRIVATE_LISTING = 'CreditPrivateListing';
    /**
     * Constant for value 'ImmoProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'ImmoProFee'
     */
    const VALUE_IMMO_PRO_FEE = 'ImmoProFee';
    /**
     * Constant for value 'CreditImmoProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'CreditImmoProFee'
     */
    const VALUE_CREDIT_IMMO_PRO_FEE = 'CreditImmoProFee';
    /**
     * Constant for value 'ImmoProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'ImmoProFeatureFee'
     */
    const VALUE_IMMO_PRO_FEATURE_FEE = 'ImmoProFeatureFee';
    /**
     * Constant for value 'CreditImmoProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'CreditImmoProFeatureFee'
     */
    const VALUE_CREDIT_IMMO_PRO_FEATURE_FEE = 'CreditImmoProFeatureFee';
    /**
     * Constant for value 'RealEstateProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'RealEstateProFee'
     */
    const VALUE_REAL_ESTATE_PRO_FEE = 'RealEstateProFee';
    /**
     * Constant for value 'CreditRealEstateProFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'CreditRealEstateProFee'
     */
    const VALUE_CREDIT_REAL_ESTATE_PRO_FEE = 'CreditRealEstateProFee';
    /**
     * Constant for value 'RealEstateProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'RealEstateProFeatureFee'
     */
    const VALUE_REAL_ESTATE_PRO_FEATURE_FEE = 'RealEstateProFeatureFee';
    /**
     * Constant for value 'CreditRealEstateProFeatureFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, and should not be returned.
     * @return string 'CreditRealEstateProFeatureFee'
     */
    const VALUE_CREDIT_REAL_ESTATE_PRO_FEATURE_FEE = 'CreditRealEstateProFeatureFee';
    /**
     * Constant for value 'Discount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a seller discount against a final value fee, an insertion fee, a subscription fee, or other fee. See the corresponding <b>Description</b> and/or <b>Memo</b> fields for more
     * information on the type of discount.
     * @return string 'Discount'
     */
    const VALUE_DISCOUNT = 'Discount';
    /**
     * Constant for value 'CreditFinalValueShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a final value fee for the shipping cost of an order. This fee is charged when a listed item sells, and is a percentage of the shipping cost. The final value
     * fee associated with the final sale price is returned in a <b>FeeFinalValue</b> entry.
     * @return string 'CreditFinalValueShipping'
     */
    const VALUE_CREDIT_FINAL_VALUE_SHIPPING = 'CreditFinalValueShipping';
    /**
     * Constant for value 'FeeFinalValueShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a final value fee for the shipping cost of an order. This fee is charged when a listed item sells, and is a percentage of the shipping cost. The final value fee associated
     * with the final sale price is returned in a <b>FeeFinalValue</b> entry.
     * @return string 'FeeFinalValueShipping'
     */
    const VALUE_FEE_FINAL_VALUE_SHIPPING = 'FeeFinalValueShipping';
    /**
     * Constant for value 'FeeReturnShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a return shipping fee if an item is returned by the buyer.
     * @return string 'FeeReturnShipping'
     */
    const VALUE_FEE_RETURN_SHIPPING = 'FeeReturnShipping';
    /**
     * Constant for value 'CreditReturnShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a return shipping fee if an item is returned by the buyer.
     * @return string 'CreditReturnShipping'
     */
    const VALUE_CREDIT_RETURN_SHIPPING = 'CreditReturnShipping';
    /**
     * Constant for value 'FeeGlobalShippingProgram'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged by eBay if the seller is using the Global Shipping Program to ship an item internationally.
     * @return string 'FeeGlobalShippingProgram'
     */
    const VALUE_FEE_GLOBAL_SHIPPING_PROGRAM = 'FeeGlobalShippingProgram';
    /**
     * Constant for value 'CreditGlobalShippingProgram'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit towards a fee charged by eBay if the seller is using the Global Shipping Program to ship an item internationally.
     * @return string 'CreditGlobalShippingProgram'
     */
    const VALUE_CREDIT_GLOBAL_SHIPPING_PROGRAM = 'CreditGlobalShippingProgram';
    /**
     * Constant for value 'FeeAuctionEndEarly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller's account if the seller ends an auction (with bids) early.
     * @return string 'FeeAuctionEndEarly'
     */
    const VALUE_FEE_AUCTION_END_EARLY = 'FeeAuctionEndEarly';
    /**
     * Constant for value 'CreditAuctionEndEarly'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to the seller's account if a duplicate auction listing is ended administratively by eBay. A seller is only eligible for this credit if the auction
     * listing had zero bids and was never surfaced in Search.
     * @return string 'CreditAuctionEndEarly'
     */
    const VALUE_CREDIT_AUCTION_END_EARLY = 'CreditAuctionEndEarly';
    /**
     * Constant for value 'FeeFedExShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using a FedEx shipping label from eBay.
     * @return string 'FeeFedExShippingLabel'
     */
    const VALUE_FEE_FED_EX_SHIPPING_LABEL = 'FeeFedExShippingLabel';
    /**
     * Constant for value 'CreditFedExShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to reimburse the seller for a FedEx shipping label. In some cases, this credit may be issued to the seller as a result of an Unpaid Item case that the
     * seller has won against a buyer.
     * @return string 'CreditFedExShippingLabel'
     */
    const VALUE_CREDIT_FED_EX_SHIPPING_LABEL = 'CreditFedExShippingLabel';
    /**
     * Constant for value 'FeeReturnRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller's account if eBay is forced to refund the buyer in a case where the buyer has used the eBay US Managed Returns process and return shipped the item
     * to the seller, but the seller has not issued a refund to the buyer within seven business days after receiving the returned item. <br/><br/> This value is equal to the refund ("CreditReturnRefund") issued to the buyer.
     * @return string 'FeeReturnRefund'
     */
    const VALUE_FEE_RETURN_REFUND = 'FeeReturnRefund';
    /**
     * Constant for value 'CreditReturnRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued to the buyer's account by eBay in a case where the buyer has used the eBay US Managed Returns process and return shipped the item to the seller, but the
     * seller has not issued a refund to the buyer within seven business days after receiving the returned item. The buyer credit amounts to the total purchase price plus any shipping costs if the item was "not as described". <br/><br/> eBay then charges
     * this expense to the seller's account, and this charge is attached to the "FeeReturnRefund" value.
     * @return string 'CreditReturnRefund'
     */
    const VALUE_CREDIT_RETURN_REFUND = 'CreditReturnRefund';
    /**
     * Constant for value 'FeeStoresSubscriptionEarlyTermination'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for early termination of an eBay Stores subscription.
     * @return string 'FeeStoresSubscriptionEarlyTermination'
     */
    const VALUE_FEE_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'FeeStoresSubscriptionEarlyTermination';
    /**
     * Constant for value 'CreditStoresSubscriptionEarlyTermination'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged for early termination of an eBay Stores subscription.
     * @return string 'CreditStoresSubscriptionEarlyTermination'
     */
    const VALUE_CREDIT_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'CreditStoresSubscriptionEarlyTermination';
    /**
     * Constant for value 'FeeVehicleSubscriptionEarlyTermination'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for early termination of a National Vehicle subscription.
     * @return string 'FeeVehicleSubscriptionEarlyTermination'
     */
    const VALUE_FEE_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'FeeVehicleSubscriptionEarlyTermination';
    /**
     * Constant for value 'CreditVehicleSubscriptionEarlyTermination'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged for early termination of a National Vehicle subscription.
     * @return string 'CreditVehicleSubscriptionEarlyTermination'
     */
    const VALUE_CREDIT_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'CreditVehicleSubscriptionEarlyTermination';
    /**
     * Constant for value 'FeeVehicleSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a monthly subscription fee charged for a National Vehicle subscription.
     * @return string 'FeeVehicleSubscription'
     */
    const VALUE_FEE_VEHICLE_SUBSCRIPTION = 'FeeVehicleSubscription';
    /**
     * Constant for value 'CreditVehicleSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a monthly subscription fee charged for a National Vehicle subscription.
     * @return string 'CreditVehicleSubscription'
     */
    const VALUE_CREDIT_VEHICLE_SUBSCRIPTION = 'CreditVehicleSubscription';
    /**
     * Constant for value 'FeeAUPostShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using an Australia Post shipping label from eBay.
     * @return string 'FeeAUPostShippingLabel'
     */
    const VALUE_FEE_AUPOST_SHIPPING_LABEL = 'FeeAUPostShippingLabel';
    /**
     * Constant for value 'CreditAUPostShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for printing out and using an Australia Post shipping label from eBay. In some cases, this credit may be issued to the seller as a
     * result of an Unpaid Item case that the seller has won against a buyer.
     * @return string 'CreditAUPostShippingLabel'
     */
    const VALUE_CREDIT_AUPOST_SHIPPING_LABEL = 'CreditAUPostShippingLabel';
    /**
     * Constant for value 'FeeAPACFedExShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using an FedEx shipping label from eBay in the Asia-Pacific geographical region.
     * @return string 'FeeAPACFedExShippingLabel'
     */
    const VALUE_FEE_APACFED_EX_SHIPPING_LABEL = 'FeeAPACFedExShippingLabel';
    /**
     * Constant for value 'CreditAPACFedExShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for printing out and using an FedEx shipping label from eBay in the Asia-Pacific geographical region. In some cases, this credit
     * may be issued to the seller as a result of an Unpaid Item case that the seller has won against a buyer.
     * @return string 'CreditAPACFedExShippingLabel'
     */
    const VALUE_CREDIT_APACFED_EX_SHIPPING_LABEL = 'CreditAPACFedExShippingLabel';
    /**
     * Constant for value 'FeeAPACTNTShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using an Track & Trace (TNT) shipping label from eBay in the Asia-Pacific geographical region.
     * @return string 'FeeAPACTNTShippingLabel'
     */
    const VALUE_FEE_APACTNTSHIPPING_LABEL = 'FeeAPACTNTShippingLabel';
    /**
     * Constant for value 'CreditAPACTNTShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged to the seller for printing out and using an Track & Trace (TNT) shipping label from eBay in the Asia-Pacific geographical region.In some cases,
     * this credit may be issued to the seller as a result of an Unpaid Item case that the seller has won against a buyer.
     * @return string 'CreditAPACTNTShippingLabel'
     */
    const VALUE_CREDIT_APACTNTSHIPPING_LABEL = 'CreditAPACTNTShippingLabel';
    /**
     * Constant for value 'FeeEBPReimbursement'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for eBay Money Back Guarantee reimbursement.
     * @return string 'FeeEBPReimbursement'
     */
    const VALUE_FEE_EBPREIMBURSEMENT = 'FeeEBPReimbursement';
    /**
     * Constant for value 'CreditEBPReimbursement'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward a fee charged for eBay Money Back Guarantee reimbursement.
     * @return string 'CreditEBPReimbursement'
     */
    const VALUE_CREDIT_EBPREIMBURSEMENT = 'CreditEBPReimbursement';
    /**
     * Constant for value 'FeePromotedListingFeature'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'FeePromotedListingFeature'
     */
    const VALUE_FEE_PROMOTED_LISTING_FEATURE = 'FeePromotedListingFeature';
    /**
     * Constant for value 'CreditPromotedListingFeature'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'CreditPromotedListingFeature'
     */
    const VALUE_CREDIT_PROMOTED_LISTING_FEATURE = 'CreditPromotedListingFeature';
    /**
     * Constant for value 'FeeAd'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for a Standard Promoted Listing ad on eBay. With Standard Promoted Listings, the seller is charged a fee when a buyer clicks on the ad and then goes on to
     * purchase that same item within 30 days of that click. The seller chooses the bid percentage for the ad, and this rate is applied toward the total purchase price.
     * @return string 'FeeAd'
     */
    const VALUE_FEE_AD = 'FeeAd';
    /**
     * Constant for value 'CreditAd'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued toward a Standard Promoted Listing ad fee.
     * @return string 'CreditAd'
     */
    const VALUE_CREDIT_AD = 'CreditAd';
    /**
     * Constant for value 'FeeUBIShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged to the seller for printing out and using a Universal Business Integration (UBI) shipping label from eBay.
     * @return string 'FeeUBIShippingLabel'
     */
    const VALUE_FEE_UBISHIPPING_LABEL = 'FeeUBIShippingLabel';
    /**
     * Constant for value 'CreditUBIShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit issued by eBay to reimburse the seller for a Universal Business Integration (UBI) shipping label. In some cases, this credit may be issued to the seller as a result
     * of an Unpaid Item case that the seller has won against a buyer.
     * @return string 'CreditUBIShippingLabel'
     */
    const VALUE_CREDIT_UBISHIPPING_LABEL = 'CreditUBIShippingLabel';
    /**
     * Constant for value 'FeeeBayPlusSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an annual subscription fee charged for an eBay Plus subscription.
     * @return string 'FeeeBayPlusSubscription'
     */
    const VALUE_FEEE_BAY_PLUS_SUBSCRIPTION = 'FeeeBayPlusSubscription';
    /**
     * Constant for value 'CrediteBayPlusSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit toward an annual subscription fee charged for an eBay Plus subscription.
     * @return string 'CrediteBayPlusSubscription'
     */
    const VALUE_CREDITE_BAY_PLUS_SUBSCRIPTION = 'CrediteBayPlusSubscription';
    /**
     * Constant for value 'PaymentIntermediationFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the charge is an eBay payment intermediation fee. This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments
     * has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'PaymentIntermediationFee'
     */
    const VALUE_PAYMENT_INTERMEDIATION_FEE = 'PaymentIntermediationFee';
    /**
     * Constant for value 'PaymentIntermediationFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: (out) Payment Intermediation Fee Credit
     * @return string 'PaymentIntermediationFeeCredit'
     */
    const VALUE_PAYMENT_INTERMEDIATION_FEE_CREDIT = 'PaymentIntermediationFeeCredit';
    /**
     * Constant for value 'FeePaymentIntermediationRVI'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is an eBay payment intermediation fee. This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed
     * payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'FeePaymentIntermediationRVI'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_RVI = 'FeePaymentIntermediationRVI';
    /**
     * Constant for value 'FeePaymentIntermediationChargeback'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the credit is a seller reimbursement for an eBay payment intermediation fee.
     * @return string 'FeePaymentIntermediationChargeback'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK = 'FeePaymentIntermediationChargeback';
    /**
     * Constant for value 'FeePaymentIntermediationChargebackRVI'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice credit is a seller reimbursement for an eBay payment intermediation fee.
     * @return string 'FeePaymentIntermediationChargebackRVI'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI = 'FeePaymentIntermediationChargebackRVI';
    /**
     * Constant for value 'SnadOutlierFinalValueFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is a Final Value Fee (for item cost) charged to the seller's account after a buyer creates and wins a 'significantly not as described' (SNAD) case against the seller.
     * @return string 'SnadOutlierFinalValueFee'
     */
    const VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE = 'SnadOutlierFinalValueFee';
    /**
     * Constant for value 'SnadOutlierFinalValueFeeOnShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is a Final Value Fee (for shipping cost) charged to the seller's account after a buyer creates and wins a 'significantly not as described' (SNAD) case against the seller.
     * @return string 'SnadOutlierFinalValueFeeOnShipping'
     */
    const VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING = 'SnadOutlierFinalValueFeeOnShipping';
    /**
     * Constant for value 'HighlineSearchFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a 'Highline Search' fee, which is a capability that allows sellers to advertise multiple products at the same time, with ads appearing prominently on top of eBay's search
     * results.
     * @return string 'HighlineSearchFee'
     */
    const VALUE_HIGHLINE_SEARCH_FEE = 'HighlineSearchFee';
    /**
     * Constant for value 'HighlineSearchFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice credit is for a 'Highline Search' fee that was charged to the seller's account. The 'Highline Search' capability allows sellers to advertise multiple products at the same time, with ads
     * appearing prominently on top of eBay's search results.
     * @return string 'HighlineSearchFeeCredit'
     */
    const VALUE_HIGHLINE_SEARCH_FEE_CREDIT = 'HighlineSearchFeeCredit';
    /**
     * Constant for value 'SnadOutlierFinalValueFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice credit is for a Final Value Fee (for item cost) that was charged to the seller's account after a buyer created a 'significantly not as described' (SNAD) case against the seller, but the
     * seller won the dispute.
     * @return string 'SnadOutlierFinalValueFeeCredit'
     */
    const VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_CREDIT = 'SnadOutlierFinalValueFeeCredit';
    /**
     * Constant for value 'SnadOutlierFinalValueFeeOnShippingCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice credit is for a Final Value Fee (for shipping cost) that was charged to the seller's account after a buyer created a 'significantly not as described' (SNAD) case against the seller, but
     * the seller won the dispute.
     * @return string 'SnadOutlierFinalValueFeeOnShippingCredit'
     */
    const VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING_CREDIT = 'SnadOutlierFinalValueFeeOnShippingCredit';
    /**
     * Constant for value 'AdFeePremium'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a fee charged for a Advanced Promoted Listing ad on eBay. With Advanced Promoted Listings, the seller uses keywords to promote the listing, and if buyers find the listing
     * based on a keyword defined in the seller's Promoted Listings campaign, the seller is charged a fee each time the ad is clicked. The seller chooses the bid percentage rate for the ad, and this rate is charged for each click on the ad.
     * @return string 'AdFeePremium'
     */
    const VALUE_AD_FEE_PREMIUM = 'AdFeePremium';
    /**
     * Constant for value 'AdFeePremiumCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued toward an Advanced Promoted Listing ad fee.
     * @return string 'AdFeePremiumCredit'
     */
    const VALUE_AD_FEE_PREMIUM_CREDIT = 'AdFeePremiumCredit';
    /**
     * Constant for value 'PerListingPaymentsFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Per Listing Payments fee.
     * @return string 'PerListingPaymentsFee'
     */
    const VALUE_PER_LISTING_PAYMENTS_FEE = 'PerListingPaymentsFee';
    /**
     * Constant for value 'PerListingPaymentsFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Per Listing Payments Fee charge.
     * @return string 'PerListingPaymentsFeeCredit'
     */
    const VALUE_PER_LISTING_PAYMENTS_FEE_CREDIT = 'PerListingPaymentsFeeCredit';
    /**
     * Constant for value 'VehiclesListingBasicPackageFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Vehicles Listing Basic Package fee.
     * @return string 'VehiclesListingBasicPackageFee'
     */
    const VALUE_VEHICLES_LISTING_BASIC_PACKAGE_FEE = 'VehiclesListingBasicPackageFee';
    /**
     * Constant for value 'VehiclesListingBasicPackageCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Vehicles Listing Basic Package fee charge.
     * @return string 'VehiclesListingBasicPackageCredit'
     */
    const VALUE_VEHICLES_LISTING_BASIC_PACKAGE_CREDIT = 'VehiclesListingBasicPackageCredit';
    /**
     * Constant for value 'VehiclesListingPlusPackageFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Vehicles Listing Plus Package fee.
     * @return string 'VehiclesListingPlusPackageFee'
     */
    const VALUE_VEHICLES_LISTING_PLUS_PACKAGE_FEE = 'VehiclesListingPlusPackageFee';
    /**
     * Constant for value 'VehiclesListingPlusPackageCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Vehicles Listing Plus Package fee charge.
     * @return string 'VehiclesListingPlusPackageCredit'
     */
    const VALUE_VEHICLES_LISTING_PLUS_PACKAGE_CREDIT = 'VehiclesListingPlusPackageCredit';
    /**
     * Constant for value 'VehiclesListingPremiumPackageFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Vehicles Listing Premium Package fee.
     * @return string 'VehiclesListingPremiumPackageFee'
     */
    const VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_FEE = 'VehiclesListingPremiumPackageFee';
    /**
     * Constant for value 'VehiclesListingPremiumPackageCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Vehicles Listing Premium Package fee charge.
     * @return string 'VehiclesListingPremiumPackageCredit'
     */
    const VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_CREDIT = 'VehiclesListingPremiumPackageCredit';
    /**
     * Constant for value 'SendLabelFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Send Label fee.
     * @return string 'SendLabelFee'
     */
    const VALUE_SEND_LABEL_FEE = 'SendLabelFee';
    /**
     * Constant for value 'SendLabelFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Send Label fee charge.
     * @return string 'SendLabelFeeCredit'
     */
    const VALUE_SEND_LABEL_FEE_CREDIT = 'SendLabelFeeCredit';
    /**
     * Constant for value 'UpsLabelFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a UPS Label fee.
     * @return string 'UpsLabelFee'
     */
    const VALUE_UPS_LABEL_FEE = 'UpsLabelFee';
    /**
     * Constant for value 'UpsLabelFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a UPS Label fee charge.
     * @return string 'UpsLabelFeeCredit'
     */
    const VALUE_UPS_LABEL_FEE_CREDIT = 'UpsLabelFeeCredit';
    /**
     * Constant for value 'CanadaPostLabelFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for a Canada Post Label fee.
     * @return string 'CanadaPostLabelFee'
     */
    const VALUE_CANADA_POST_LABEL_FEE = 'CanadaPostLabelFee';
    /**
     * Constant for value 'CanadaPostLabelFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for a Canada Post Label fee charge.
     * @return string 'CanadaPostLabelFeeCredit'
     */
    const VALUE_CANADA_POST_LABEL_FEE_CREDIT = 'CanadaPostLabelFeeCredit';
    /**
     * Constant for value 'EbaySendLabelFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the invoice charge is for eBay having to resend/regenerate a shipping label for a seller. Sellers typically have 24 hours to reprint a shipping label 24 hours after the purchase of the shipping label.
     * If a seller tries to reprint a purchased shipping label after this time, a small fee may apply.
     * @return string 'EbaySendLabelFee'
     */
    const VALUE_EBAY_SEND_LABEL_FEE = 'EbaySendLabelFee';
    /**
     * Constant for value 'EbaySendLabelFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit was issued for the fee charged by eBay to resend/regenerate a shipping label for the seller.
     * @return string 'EbaySendLabelFeeCredit'
     */
    const VALUE_EBAY_SEND_LABEL_FEE_CREDIT = 'EbaySendLabelFeeCredit';
    /**
     * Constant for value 'USInternetSalesTax'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has pulled out the 'Collect and Remit' sales tax amount that was originally deposited to the seller's account. This enumeration value is only applicable to US sellers not opted in to eBay
     * managed payments, and for orders that are subject to eBay 'Collect and Remit' sales tax. See the corresponding <b>OrderId</b> value to determine which eBay order this sales tax pertains to. <br><br> <span class="tablenote"><b>Note: </b> For US
     * sellers not enabled for eBay managed payments, PayPal will now deposit the entire order amount, including the 'Collect and Remit' sales tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the seller's
     * account and submitted to the proper tax authority. This change went into effect on October 24, 2019. Previous to this date, PayPal pulled out the 'Collect and Remit' sales tax before distributing order funds to the seller. </span>
     * @return string 'USInternetSalesTax'
     */
    const VALUE_USINTERNET_SALES_TAX = 'USInternetSalesTax';
    /**
     * Constant for value 'USInternetSalesTaxCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has deposited the 'Collect and Remit' sales tax amount (for the order identified by the corresponding <b>OrderId</b> field) to the seller's account. This enumeration value is only
     * applicable to US sellers not enabled for eBay managed payments, and for orders that are subject to eBay 'Collect and Remit' sales tax. This sales tax will actually get pulled from the seller's account shortly after the order funds clear, and the
     * seller should then see a <b>USInternetSalesTax</b> account entry with a matching amount. <br><br> <span class="tablenote"><b>Note: </b> For US sellers not enabled for eBay managed payments, PayPal will now deposit the entire order amount, including
     * the 'Collect and Remit' sales tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the seller's account and submitted to the proper tax authority. This change went into effect on October 24, 2019.
     * Previous to this date, PayPal pulled out the 'Collect and Remit' sales tax before distributing order funds to the seller. </span>
     * @return string 'USInternetSalesTaxCredit'
     */
    const VALUE_USINTERNET_SALES_TAX_CREDIT = 'USInternetSalesTaxCredit';
    /**
     * Constant for value 'NewZealandGST'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has pulled out the 'Goods and Services' tax amount that was originally deposited to the seller's account. This enumeration value is only applicable to New Zealand sellers for orders that
     * are subject to 'Goods and Services' tax. See the corresponding <b>OrderId</b> value to determine which eBay order this tax pertains to. <br><br> <span class="tablenote"><b>Note: </b> PayPal will now deposit the entire order amount, including the
     * 'Goods and Services' tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the seller's account and submitted to the proper tax authority. This change just went into effect on October 24, 2019. Previous to
     * this date, PayPal pulled out the 'Goods and Services' tax before distributing order funds to the seller. </span>
     * @return string 'NewZealandGST'
     */
    const VALUE_NEW_ZEALAND_GST = 'NewZealandGST';
    /**
     * Constant for value 'NewZealandGSTCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has deposited the 'Goods and Services' tax amount (for the order identified by the corresponding <b>OrderId</b> field) to the seller's account. This enumeration value is only applicable to
     * New Zealand sellers for orders that are subject to 'Goods and Services' tax. This tax will actually get pulled from the seller's account shortly after the order funds clear, and the seller should then see a <b>NewZealandGST</b> account entry with a
     * matching amount. <br><br> <span class="tablenote"><b>Note: </b> PayPal will now deposit the entire order amount, including the 'Goods and Services' tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the
     * seller's account and submitted to the proper tax authority. This change just went into effect on October 24, 2019. Previous to this date, PayPal pulled out the 'Goods and Services' tax before distributing order funds to the seller. </span>
     * @return string 'NewZealandGSTCredit'
     */
    const VALUE_NEW_ZEALAND_GSTCREDIT = 'NewZealandGSTCredit';
    /**
     * Constant for value 'AustraliaGST'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has pulled out the 'Goods and Services' tax amount that was originally deposited to the seller's account. This enumeration value is only applicable to Australian sellers for orders that
     * are subject to 'Goods and Services' tax. See the corresponding <b>OrderId</b> value to determine which eBay order this tax pertains to. <br><br> <span class="tablenote"><b>Note: </b> PayPal will now deposit the entire order amount, including the
     * 'Goods and Services' tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the seller's account and submitted to the proper tax authority. This change just went into effect on October 24, 2019. Previous to
     * this date, PayPal pulled out the 'Goods and Services' tax before distributing order funds to the seller. </span>
     * @return string 'AustraliaGST'
     */
    const VALUE_AUSTRALIA_GST = 'AustraliaGST';
    /**
     * Constant for value 'AustraliaGSTCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal has deposited the 'Goods and Services' tax amount (for the order identified by the corresponding <b>OrderId</b> field) to the seller's account. This enumeration value is only applicable to
     * Australia sellers for orders that are subject to 'Goods and Services' tax. This tax will actually get pulled from the seller's account shortly after the order funds clear, and the seller should then see a <b>AustraliaGST</b> account entry with a
     * matching amount. <br><br> <span class="tablenote"><b>Note: </b> PayPal will now deposit the entire order amount, including the 'Goods and Services' tax, into the seller's account, and once the order funds clear, this sales tax will be pulled from the
     * seller's account and submitted to the proper tax authority. This change just went into effect on October 24, 2019. Previous to this date, PayPal pulled out the 'Goods and Services' tax before distributing order funds to the seller. </span>
     * @return string 'AustraliaGSTCredit'
     */
    const VALUE_AUSTRALIA_GSTCREDIT = 'AustraliaGSTCredit';
    /**
     * Constant for value 'UspsLabelFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is billing the seller for a USPS shipping label that was purchased through the seller's eBay account. <br><br> This fee is only applicable for sellers in the eBay managed payments program.
     * For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'UspsLabelFee'
     */
    const VALUE_USPS_LABEL_FEE = 'UspsLabelFee';
    /**
     * Constant for value 'UspsLabelFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is giving a credit to the seller for a USPS shipping label that was purchased through the seller's eBay account. <br><br> This fee is only applicable for sellers in the eBay managed payments
     * program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'UspsLabelFeeCredit'
     */
    const VALUE_USPS_LABEL_FEE_CREDIT = 'UspsLabelFeeCredit';
    /**
     * Constant for value 'ShippingInsuranceFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is billing the seller for shipping insurance (such as ShipCover through USPS) that was purchased through the seller's eBay account. <br><br> This fee is only applicable for sellers in the
     * eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'ShippingInsuranceFee'
     */
    const VALUE_SHIPPING_INSURANCE_FEE = 'ShippingInsuranceFee';
    /**
     * Constant for value 'ShippingInsuranceFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is giving a credit to the seller for shipping insurance (such as ShipCover through USPS) that was purchased through the seller's eBay account. <br><br> This fee is only applicable for
     * sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing
     * page.
     * @return string 'ShippingInsuranceFeeCredit'
     */
    const VALUE_SHIPPING_INSURANCE_FEE_CREDIT = 'ShippingInsuranceFeeCredit';
    /**
     * Constant for value 'UspsShortpaidFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is billing the seller for underpayment for a USPS shipping label that was purchased through the seller's eBay account. Underpayment may occur if the seller paid for a shipping label based on
     * specific package weight and dimensions, but either or both package weight and dimensions were not accurate, hence the seller owes more money to USPS for postage. <br><br> This fee is only applicable for sellers in the eBay managed payments program.
     * For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'UspsShortpaidFee'
     */
    const VALUE_USPS_SHORTPAID_FEE = 'UspsShortpaidFee';
    /**
     * Constant for value 'UspsShortpaidFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is giving credit to the seller for underpayment for a USPS shipping label that was purchased through the seller's eBay account. Underpayment may occur if the seller paid for a shipping label
     * based on specific package weight and dimensions, but either or both package weight and dimensions were not accurate, hence the seller owes more money to USPS for postage. <br><br> This fee is only applicable for sellers in the eBay managed payments
     * program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     * @return string 'UspsShortpaidFeeCredit'
     */
    const VALUE_USPS_SHORTPAID_FEE_CREDIT = 'UspsShortpaidFeeCredit';
    /**
     * Constant for value 'CoFundingCharge'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is billing the seller for a co-funding charge.
     * @return string 'CoFundingCharge'
     */
    const VALUE_CO_FUNDING_CHARGE = 'CoFundingCharge';
    /**
     * Constant for value 'CoFundingChargeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay is giving credit to the seller for a co-funding charge.
     * @return string 'CoFundingChargeCredit'
     */
    const VALUE_CO_FUNDING_CHARGE_CREDIT = 'CoFundingChargeCredit';
    /**
     * Constant for value 'FinalValueFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a final value fee that has already been deducted from the seller payout associated with the order. This fee is calculated as a percentage of the total amount of the order,
     * including the purchase price and any shipping and handling charges. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay
     * managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about how final value fees are handled for managed payments sellers, see the
     * <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFee'
     */
    const VALUE_FINAL_VALUE_FEE = 'FinalValueFee';
    /**
     * Constant for value 'FinalValueFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit for final value fee that has already been deducted from the seller payout associated with the order. The seller may get this credit for different reasons, including
     * if the buyer cancels the order, or the buyer doesn't pay for the order and the sellers files and wins an Unpaid Item case. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program.
     * For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about how final value
     * fees are handled for managed payments sellers, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFeeCredit'
     */
    const VALUE_FINAL_VALUE_FEE_CREDIT = 'FinalValueFeeCredit';
    /**
     * Constant for value 'InternationalFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an international fee that has already been deducted from the seller payout associated with an order that is being shipped to another country. This fee is calculated as a
     * percentage of the total amount of the sale. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments has
     * rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about this new international fee for managed payments sellers, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section8" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'InternationalFee'
     */
    const VALUE_INTERNATIONAL_FEE = 'InternationalFee';
    /**
     * Constant for value 'InternationalFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit against an international fee that has already been deducted from the seller payout. This fee is calculated as a percentage of the total amount of the sale. The
     * seller may get this credit for different reasons, including if the buyer cancels the order, or the buyer doesn't pay for the order and the sellers files and wins an Unpaid Item case. <br><br> <span class="tablenote"><b>Note: </b> This fee is only
     * applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed
     * Payments</a> landing page. For more information about this new international fee for managed payments sellers, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section8" target="_blank">Selling fees for
     * managed payments sellers</a> page. </span>
     * @return string 'InternationalFeeCredit'
     */
    const VALUE_INTERNATIONAL_FEE_CREDIT = 'InternationalFeeCredit';
    /**
     * Constant for value 'FinalValueFeeFixedFeePerOrder'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a payment processing fee that has already been deducted from the seller payout associated with the order. This is a fixed fee that is charged for all orders. This fixed fee
     * may vary by country, but it is current $0.30 in the US. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed
     * payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about how final value fees are handled for managed payments sellers, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFeeFixedFeePerOrder'
     */
    const VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER = 'FinalValueFeeFixedFeePerOrder';
    /**
     * Constant for value 'FinalValueFeeFixedFeePerOrderCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit against a payment processing fee that has already been deducted from the seller payout associated with the order. Except for perhaps a very unlikely and unusual
     * situation, the payment processing fee will not be refunded to the seller. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which
     * eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about how final value fees are handled for managed payments sellers, see
     * the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section2" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFeeFixedFeePerOrderCredit'
     */
    const VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER_CREDIT = 'FinalValueFeeFixedFeePerOrderCredit';
    /**
     * Constant for value 'FinalValueFeeBelowStandard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is an additional final value fee for a Below Standard seller that has already been deducted from the seller payout associated with the order. Typically, this fee will be an
     * additional 5 percent (on top of standard final value fee) of the total amount of the order, including the purchase price and any shipping and handling charges. It is possible that this fee may also be charged to an Above Standard or Top-rated seller
     * if that seller is having an issue with 'item not as described' return requests. <br><br> <span class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in
     * which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about this additional final value fee for managed payments sellers,
     * see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section6" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFeeBelowStandard'
     */
    const VALUE_FINAL_VALUE_FEE_BELOW_STANDARD = 'FinalValueFeeBelowStandard';
    /**
     * Constant for value 'FinalValueFeeBelowStandardCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit against an additional final value fee for a Below Standard seller that has already been deducted from the seller payout associated with the order. <br><br> <span
     * class="tablenote"><b>Note: </b> This fee is only applicable for sellers in the eBay managed payments program. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a
     * href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page. For more information about this additional final value fee for managed payments sellers, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822#section6" target="_blank">Selling fees for managed payments sellers</a> page. </span>
     * @return string 'FinalValueFeeBelowStandardCredit'
     */
    const VALUE_FINAL_VALUE_FEE_BELOW_STANDARD_CREDIT = 'FinalValueFeeBelowStandardCredit';
    /**
     * Constant for value 'AdFeeExpress'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a Promoted Listing Express fee.
     * @return string 'AdFeeExpress'
     */
    const VALUE_AD_FEE_EXPRESS = 'AdFeeExpress';
    /**
     * Constant for value 'AdFeeExpressCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit applied against a Promoted Listing Express fee.
     * @return string 'AdFeeExpressCredit'
     */
    const VALUE_AD_FEE_EXPRESS_CREDIT = 'AdFeeExpressCredit';
    /**
     * Constant for value 'DepositProcessingVariableFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a Deposit Processing Variable fee.
     * @return string 'DepositProcessingVariableFee'
     */
    const VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE = 'DepositProcessingVariableFee';
    /**
     * Constant for value 'DepositProcessingVariableFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit applied against a Deposit Processing Variable fee.
     * @return string 'DepositProcessingVariableFeeCredit'
     */
    const VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE_CREDIT = 'DepositProcessingVariableFeeCredit';
    /**
     * Constant for value 'DepositProcessingFixedFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a Deposit Processing Fixed fee.
     * @return string 'DepositProcessingFixedFee'
     */
    const VALUE_DEPOSIT_PROCESSING_FIXED_FEE = 'DepositProcessingFixedFee';
    /**
     * Constant for value 'DepositProcessingFixedFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the account entry is a credit applied against a Deposit Processing Fixed fee.
     * @return string 'DepositProcessingFixedFeeCredit'
     */
    const VALUE_DEPOSIT_PROCESSING_FIXED_FEE_CREDIT = 'DepositProcessingFixedFeeCredit';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_FEE_INSERTION
     * @uses self::VALUE_FEE_BOLD
     * @uses self::VALUE_FEE_FEATURED
     * @uses self::VALUE_FEE_CATEGORY_FEATURED
     * @uses self::VALUE_FEE_FINAL_VALUE
     * @uses self::VALUE_PAYMENT_CHECK
     * @uses self::VALUE_PAYMENT_CC
     * @uses self::VALUE_CREDIT_COURTESY
     * @uses self::VALUE_CREDIT_NO_SALE
     * @uses self::VALUE_CREDIT_PARTIAL_SALE
     * @uses self::VALUE_REFUND_CC
     * @uses self::VALUE_REFUND_CHECK
     * @uses self::VALUE_FINANCE_CHARGE
     * @uses self::VALUE_AWDEBIT
     * @uses self::VALUE_AWCREDIT
     * @uses self::VALUE_AWMEMO
     * @uses self::VALUE_CREDIT_DUPLICATE_LISTING
     * @uses self::VALUE_FEE_PARTIAL_SALE
     * @uses self::VALUE_PAYMENT_ELECTRONIC_TRANSFER_REVERSAL
     * @uses self::VALUE_PAYMENT_CCONCE
     * @uses self::VALUE_FEE_RETURNED_CHECK
     * @uses self::VALUE_FEE_REDEPOSIT_CHECK
     * @uses self::VALUE_PAYMENT_CASH
     * @uses self::VALUE_CREDIT_INSERTION
     * @uses self::VALUE_CREDIT_BOLD
     * @uses self::VALUE_CREDIT_FEATURED
     * @uses self::VALUE_CREDIT_CATEGORY_FEATURED
     * @uses self::VALUE_CREDIT_FINAL_VALUE
     * @uses self::VALUE_FEE_NSFCHECK
     * @uses self::VALUE_FEE_RETURN_CHECK_CLOSE
     * @uses self::VALUE_MEMO
     * @uses self::VALUE_PAYMENT_MONEY_ORDER
     * @uses self::VALUE_CREDIT_CARD_ON_FILE
     * @uses self::VALUE_CREDIT_CARD_NOT_ON_FILE
     * @uses self::VALUE_INVOICED
     * @uses self::VALUE_INVOICED_CREDIT_CARD
     * @uses self::VALUE_CREDIT_TRANSFER_FROM
     * @uses self::VALUE_DEBIT_TRANSFER_TO
     * @uses self::VALUE_INVOICE_CREDIT_BALANCE
     * @uses self::VALUE_E_BAY_DEBIT
     * @uses self::VALUE_E_BAY_CREDIT
     * @uses self::VALUE_PROMOTIONAL_CREDIT
     * @uses self::VALUE_CCNOT_ON_FILE_PER_CUST_REQ
     * @uses self::VALUE_CREDIT_INSERTION_FEE
     * @uses self::VALUE_CCPAYMENT_REJECTED
     * @uses self::VALUE_FEE_GIFT_ICON
     * @uses self::VALUE_CREDIT_GIFT_ICON
     * @uses self::VALUE_FEE_GALLERY
     * @uses self::VALUE_FEE_FEATURED_GALLERY
     * @uses self::VALUE_CREDIT_GALLERY
     * @uses self::VALUE_CREDIT_FEATURED_GALLERY
     * @uses self::VALUE_ITEM_MOVE_FEE
     * @uses self::VALUE_OUTAGE_CREDIT
     * @uses self::VALUE_CREDIT_PSA
     * @uses self::VALUE_CREDIT_PCGS
     * @uses self::VALUE_FEE_RESERVE
     * @uses self::VALUE_CREDIT_RESERVE
     * @uses self::VALUE_E_BAY_VISACREDIT
     * @uses self::VALUE_BBADMIN_CREDIT
     * @uses self::VALUE_BBADMIN_DEBIT
     * @uses self::VALUE_REFERRER_CREDIT
     * @uses self::VALUE_REFERRER_DEBIT
     * @uses self::VALUE_SWITCH_CURRENCY
     * @uses self::VALUE_PAYMENT_GIFT_CERTIFICATE
     * @uses self::VALUE_PAYMENT_WIRE_TRANSFER
     * @uses self::VALUE_PAYMENT_HOME_BANKING
     * @uses self::VALUE_PAYMENT_ELECTRONIC_TRANSFER
     * @uses self::VALUE_PAYMENT_ADJUSTMENT_CREDIT
     * @uses self::VALUE_PAYMENT_ADJUSTMENT_DEBIT
     * @uses self::VALUE_CHARGEOFF
     * @uses self::VALUE_CHARGEOFF_RECOVERY
     * @uses self::VALUE_CHARGEOFF_BANKRUPTCY
     * @uses self::VALUE_CHARGEOFF_SUSPENDED
     * @uses self::VALUE_CHARGEOFF_DECEASED
     * @uses self::VALUE_CHARGEOFF_OTHER
     * @uses self::VALUE_CHARGEOFF_WACKO
     * @uses self::VALUE_FINANCE_CHARGE_REVERSAL
     * @uses self::VALUE_FVFCREDIT_REVERSAL
     * @uses self::VALUE_FOREIGN_FUNDS_CONVERT
     * @uses self::VALUE_FOREIGN_FUNDS_CHECK_REVERSAL
     * @uses self::VALUE_EOMRESTRICTION
     * @uses self::VALUE_ALL_FEES_CREDIT
     * @uses self::VALUE_SET_ON_HOLD
     * @uses self::VALUE_REVERT_USER_STATE
     * @uses self::VALUE_DIRECT_DEBIT_ON_FILE
     * @uses self::VALUE_DIRECT_DEBIT_NOT_ON_FILE
     * @uses self::VALUE_PAYMENT_DIRECT_DEBIT
     * @uses self::VALUE_DIRECT_DEBIT_REVERSAL
     * @uses self::VALUE_DIRECT_DEBIT_RETURNED_ITEM
     * @uses self::VALUE_FEE_HIGHLIGHT
     * @uses self::VALUE_CREDIT_HIGHLIGHT
     * @uses self::VALUE_BULK_USER_SUSPENSION
     * @uses self::VALUE_FEE_REAL_ESTATE_30_DAYS_LISTING
     * @uses self::VALUE_CREDIT_REAL_ESTATE_30_DAYS_LISTING
     * @uses self::VALUE_TRADING_LIMIT_OVERRIDE_ON
     * @uses self::VALUE_TRADING_LIMIT_OVERRIDE_OFF
     * @uses self::VALUE_EQUIFAX_REALTIME_FEE
     * @uses self::VALUE_CREDIT_EQUIFAX_REALTIME_FEE
     * @uses self::VALUE_PAYMENT_EQUIFAX_DEBIT
     * @uses self::VALUE_PAYMENT_EQUIFAX_CREDIT
     * @uses self::VALUE_MERGED
     * @uses self::VALUE_AUTO_TRADER_ON
     * @uses self::VALUE_AUTO_TRADER_OFF
     * @uses self::VALUE_PAPER_INVOICE_ON
     * @uses self::VALUE_PAPER_INVOICE_OFF
     * @uses self::VALUE_ACCOUNT_STATE_SWITCH
     * @uses self::VALUE_FVFCREDIT_REVERSAL_AUTOMATIC
     * @uses self::VALUE_CREDIT_SOFT_OUTAGE
     * @uses self::VALUE_LACATALOG_FEE
     * @uses self::VALUE_LAEXTRA_ITEM
     * @uses self::VALUE_LACATALOG_ITEM_FEE_REFUND
     * @uses self::VALUE_LACATALOG_INSERTION_REFUND
     * @uses self::VALUE_LAFINAL_VALUE_FEE
     * @uses self::VALUE_LAFINAL_VALUE_FEE_REFUND
     * @uses self::VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE
     * @uses self::VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE_REFUND
     * @uses self::VALUE_LAAUDIO_VIDEO_FEE
     * @uses self::VALUE_LAAUDIO_VIDEO_FEE_REFUND
     * @uses self::VALUE_FEE_IPIXPHOTO
     * @uses self::VALUE_FEE_IPIXSLIDE_SHOW
     * @uses self::VALUE_CREDIT_IPIXPHOTO
     * @uses self::VALUE_CREDIT_IPIXSLIDE_SHOW
     * @uses self::VALUE_FEE_TEN_DAY_AUCTION
     * @uses self::VALUE_CREDIT_TEN_DAY_AUCTION
     * @uses self::VALUE_TEMPORARY_CREDIT
     * @uses self::VALUE_TEMPORARY_CREDIT_REVERSAL
     * @uses self::VALUE_SUBSCRIPTION_AABASIC
     * @uses self::VALUE_SUBSCRIPTION_AAPRO
     * @uses self::VALUE_CREDIT_AABASIC
     * @uses self::VALUE_CREDIT_AAPRO
     * @uses self::VALUE_FEE_LARGE_PICTURE
     * @uses self::VALUE_CREDIT_LARGE_PICTURE
     * @uses self::VALUE_FEE_PICTURE_PACK
     * @uses self::VALUE_CREDIT_PICTURE_PACK_PARTIAL
     * @uses self::VALUE_CREDIT_PICTURE_PACK_FULL
     * @uses self::VALUE_SUBSCRIPTIONE_BAY_STORES
     * @uses self::VALUE_CREDITE_BAY_STORES
     * @uses self::VALUE_FEE_INSERTION_FIXED_PRICE
     * @uses self::VALUE_CREDIT_INSERTION_FIXED_PRICE
     * @uses self::VALUE_FEE_FINAL_VALUE_FIXED_PRICE
     * @uses self::VALUE_CREDIT_FINAL_VALUE_FIXED_PRICE
     * @uses self::VALUE_ELECTRONIC_INVOICE_ON
     * @uses self::VALUE_ELECTRONIC_INVOICE_OFF
     * @uses self::VALUE_FLAG_DDDDPENDING
     * @uses self::VALUE_FLAG_DDPAYMENT_CONFIRMED
     * @uses self::VALUE_FIXED_PRICE_DURATION_FEE
     * @uses self::VALUE_FIXED_PRICE_DURATION_CREDIT
     * @uses self::VALUE_BUY_IT_NOW_FEE
     * @uses self::VALUE_BUY_IT_NOW_CREDIT
     * @uses self::VALUE_FEE_SCHEDULE
     * @uses self::VALUE_CREDIT_SCHEDULE
     * @uses self::VALUE_SUBSCRIPTION_SMBASIC
     * @uses self::VALUE_SUBSCRIPTION_SMBASIC_PRO
     * @uses self::VALUE_CREDIT_SMBASIC
     * @uses self::VALUE_CREDIT_SMBASIC_PRO
     * @uses self::VALUE_STORES_GTCFEE
     * @uses self::VALUE_STORES_GTCCREDIT
     * @uses self::VALUE_LISTING_DESIGNER_FEE
     * @uses self::VALUE_LISTING_DESIGNER_CREDIT
     * @uses self::VALUE_EXTENDED_AUCTION_FEE
     * @uses self::VALUE_EXTENDED_ACUTION_CREDIT
     * @uses self::VALUE_PAY_PAL_OTPSUCC
     * @uses self::VALUE_PAY_PAL_OTPPEND
     * @uses self::VALUE_PAY_PAL_FAILED
     * @uses self::VALUE_PAY_PAL_CHARGE_BACK
     * @uses self::VALUE_CHARGE_BACK
     * @uses self::VALUE_CHARGE_BACK_REVERSAL
     * @uses self::VALUE_PAY_PAL_REFUND
     * @uses self::VALUE_BONUS_POINTS_ADDITION
     * @uses self::VALUE_BONUS_POINTS_REDUCTION
     * @uses self::VALUE_BONUS_POINTS_PAYMENT_AUTOMATIC
     * @uses self::VALUE_BONUS_POINTS_PAYMENT_MANUAL
     * @uses self::VALUE_BONUS_POINTS_PAYMENT_REVERSAL
     * @uses self::VALUE_BONUS_POINTS_CASH_PAYOUT
     * @uses self::VALUE_VATCREDIT
     * @uses self::VALUE_VATDEBIT
     * @uses self::VALUE_VATSTATUS_CHANGE_PENDING
     * @uses self::VALUE_VATSTATUS_CHANGE_APPROVED
     * @uses self::VALUE_VATSTATUS_CHANGE_DENIED
     * @uses self::VALUE_VATSTATUS_DELETED_BY_CSR
     * @uses self::VALUE_VATSTATUS_DELETED_BY_USER
     * @uses self::VALUE_SMPRO_LISTING_DESIGNER_FEE
     * @uses self::VALUE_SMPRO_LISTING_DESIGNER_CREDIT
     * @uses self::VALUE_STORES_SUCCESSFUL_LISTING_FEE
     * @uses self::VALUE_STORES_SUCCESSFUL_LISTING_FEE_CREDIT
     * @uses self::VALUE_STORES_REFERRAL_FEE
     * @uses self::VALUE_STORES_REFERRAL_CREDIT
     * @uses self::VALUE_SUBTITLE_FEE
     * @uses self::VALUE_SUBTITLE_FEE_CREDIT
     * @uses self::VALUE_E_BAY_STORE_INVENTORY_SUBSCRIPTION_CREDIT
     * @uses self::VALUE_AUTO_PMNT_REQ_EXEMPT
     * @uses self::VALUE_AUTO_PMNT_REQ_REIN
     * @uses self::VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE
     * @uses self::VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE_CREDIT
     * @uses self::VALUE_SELLER_REPORTS_BASIC_FEE
     * @uses self::VALUE_SELLER_REPORTS_BASIC_CREDIT
     * @uses self::VALUE_SELLER_REPORTS_PLUS_FEE
     * @uses self::VALUE_SELLER_REPORTS_PLUS_CREDIT
     * @uses self::VALUE_PAYPAL_ON_FILE
     * @uses self::VALUE_PAYPAL_ON_FILE_BY_CSR
     * @uses self::VALUE_PAYPAL_OFF_FILE
     * @uses self::VALUE_BORDER_FEE
     * @uses self::VALUE_BORDER_FEE_CREDIT
     * @uses self::VALUE_FEE_SEARCHABLE_MOBILE_DE
     * @uses self::VALUE_SALES_REPORTS_PLUS_FEE
     * @uses self::VALUE_SALES_REPORTS_PLUS_CREDIT
     * @uses self::VALUE_CREDIT_SEARCHABLE_MOBILE_DE
     * @uses self::VALUE_EMAIL_MARKETING_FEE
     * @uses self::VALUE_EMAIL_MARKETING_CREDIT
     * @uses self::VALUE_FEE_PICTURE_SHOW
     * @uses self::VALUE_CREDIT_PICTURE_SHOW
     * @uses self::VALUE_PRO_PACK_BUNDLE_FEE
     * @uses self::VALUE_PRO_PACK_BUNDLE_FEE_CREDIT
     * @uses self::VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE
     * @uses self::VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE_CREDIT
     * @uses self::VALUE_VALUE_PACK_BUNDLE_FEE
     * @uses self::VALUE_VALUE_PACK_BUNDLE_FEE_CREDIT
     * @uses self::VALUE_PRO_PACK_PLUS_BUNDLE_FEE
     * @uses self::VALUE_PRO_PACK_PLUS_BUNDLE_FEE_CREDIT
     * @uses self::VALUE_FINAL_ENTRY
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_EXTENDED_DURATION_FEE
     * @uses self::VALUE_EXTENDED_DURATION_FEE_CREDIT
     * @uses self::VALUE_INTERNATIONAL_LISTING_FEE
     * @uses self::VALUE_INTERNATIONAL_LISTING_CREDIT
     * @uses self::VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE
     * @uses self::VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE_CREDIT
     * @uses self::VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE
     * @uses self::VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE_CREDIT
     * @uses self::VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE
     * @uses self::VALUE_BASIC_BUNDLE_FEE
     * @uses self::VALUE_BASIC_BUNDLE_FEE_CREDIT
     * @uses self::VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE_CREDIT
     * @uses self::VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE
     * @uses self::VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE_CREDIT
     * @uses self::VALUE_VEHICLE_LOCAL_INSERTION_FEE
     * @uses self::VALUE_VEHICLE_LOCAL_INSERTION_FEE_CREDIT
     * @uses self::VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE
     * @uses self::VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE_CREDIT
     * @uses self::VALUE_VEHICLE_LOCAL_GTCFEE
     * @uses self::VALUE_VEHICLE_LOCAL_GTCFEE_CREDIT
     * @uses self::VALUE_E_BAY_MOTORS_PRO_FEE
     * @uses self::VALUE_CREDITE_BAY_MOTORS_PRO_FEE
     * @uses self::VALUE_E_BAY_MOTORS_PRO_FEATURE_FEE
     * @uses self::VALUE_CREDITE_BAY_MOTORS_PRO_FEATURE_FEE
     * @uses self::VALUE_FEE_GALLERY_PLUS
     * @uses self::VALUE_CREDIT_GALLERY_PLUS
     * @uses self::VALUE_PRIVATE_LISTING
     * @uses self::VALUE_CREDIT_PRIVATE_LISTING
     * @uses self::VALUE_IMMO_PRO_FEE
     * @uses self::VALUE_CREDIT_IMMO_PRO_FEE
     * @uses self::VALUE_IMMO_PRO_FEATURE_FEE
     * @uses self::VALUE_CREDIT_IMMO_PRO_FEATURE_FEE
     * @uses self::VALUE_REAL_ESTATE_PRO_FEE
     * @uses self::VALUE_CREDIT_REAL_ESTATE_PRO_FEE
     * @uses self::VALUE_REAL_ESTATE_PRO_FEATURE_FEE
     * @uses self::VALUE_CREDIT_REAL_ESTATE_PRO_FEATURE_FEE
     * @uses self::VALUE_DISCOUNT
     * @uses self::VALUE_CREDIT_FINAL_VALUE_SHIPPING
     * @uses self::VALUE_FEE_FINAL_VALUE_SHIPPING
     * @uses self::VALUE_FEE_RETURN_SHIPPING
     * @uses self::VALUE_CREDIT_RETURN_SHIPPING
     * @uses self::VALUE_FEE_GLOBAL_SHIPPING_PROGRAM
     * @uses self::VALUE_CREDIT_GLOBAL_SHIPPING_PROGRAM
     * @uses self::VALUE_FEE_AUCTION_END_EARLY
     * @uses self::VALUE_CREDIT_AUCTION_END_EARLY
     * @uses self::VALUE_FEE_FED_EX_SHIPPING_LABEL
     * @uses self::VALUE_CREDIT_FED_EX_SHIPPING_LABEL
     * @uses self::VALUE_FEE_RETURN_REFUND
     * @uses self::VALUE_CREDIT_RETURN_REFUND
     * @uses self::VALUE_FEE_STORES_SUBSCRIPTION_EARLY_TERMINATION
     * @uses self::VALUE_CREDIT_STORES_SUBSCRIPTION_EARLY_TERMINATION
     * @uses self::VALUE_FEE_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION
     * @uses self::VALUE_CREDIT_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION
     * @uses self::VALUE_FEE_VEHICLE_SUBSCRIPTION
     * @uses self::VALUE_CREDIT_VEHICLE_SUBSCRIPTION
     * @uses self::VALUE_FEE_AUPOST_SHIPPING_LABEL
     * @uses self::VALUE_CREDIT_AUPOST_SHIPPING_LABEL
     * @uses self::VALUE_FEE_APACFED_EX_SHIPPING_LABEL
     * @uses self::VALUE_CREDIT_APACFED_EX_SHIPPING_LABEL
     * @uses self::VALUE_FEE_APACTNTSHIPPING_LABEL
     * @uses self::VALUE_CREDIT_APACTNTSHIPPING_LABEL
     * @uses self::VALUE_FEE_EBPREIMBURSEMENT
     * @uses self::VALUE_CREDIT_EBPREIMBURSEMENT
     * @uses self::VALUE_FEE_PROMOTED_LISTING_FEATURE
     * @uses self::VALUE_CREDIT_PROMOTED_LISTING_FEATURE
     * @uses self::VALUE_FEE_AD
     * @uses self::VALUE_CREDIT_AD
     * @uses self::VALUE_FEE_UBISHIPPING_LABEL
     * @uses self::VALUE_CREDIT_UBISHIPPING_LABEL
     * @uses self::VALUE_FEEE_BAY_PLUS_SUBSCRIPTION
     * @uses self::VALUE_CREDITE_BAY_PLUS_SUBSCRIPTION
     * @uses self::VALUE_PAYMENT_INTERMEDIATION_FEE
     * @uses self::VALUE_PAYMENT_INTERMEDIATION_FEE_CREDIT
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_RVI
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI
     * @uses self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE
     * @uses self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING
     * @uses self::VALUE_HIGHLINE_SEARCH_FEE
     * @uses self::VALUE_HIGHLINE_SEARCH_FEE_CREDIT
     * @uses self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_CREDIT
     * @uses self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING_CREDIT
     * @uses self::VALUE_AD_FEE_PREMIUM
     * @uses self::VALUE_AD_FEE_PREMIUM_CREDIT
     * @uses self::VALUE_PER_LISTING_PAYMENTS_FEE
     * @uses self::VALUE_PER_LISTING_PAYMENTS_FEE_CREDIT
     * @uses self::VALUE_VEHICLES_LISTING_BASIC_PACKAGE_FEE
     * @uses self::VALUE_VEHICLES_LISTING_BASIC_PACKAGE_CREDIT
     * @uses self::VALUE_VEHICLES_LISTING_PLUS_PACKAGE_FEE
     * @uses self::VALUE_VEHICLES_LISTING_PLUS_PACKAGE_CREDIT
     * @uses self::VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_FEE
     * @uses self::VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_CREDIT
     * @uses self::VALUE_SEND_LABEL_FEE
     * @uses self::VALUE_SEND_LABEL_FEE_CREDIT
     * @uses self::VALUE_UPS_LABEL_FEE
     * @uses self::VALUE_UPS_LABEL_FEE_CREDIT
     * @uses self::VALUE_CANADA_POST_LABEL_FEE
     * @uses self::VALUE_CANADA_POST_LABEL_FEE_CREDIT
     * @uses self::VALUE_EBAY_SEND_LABEL_FEE
     * @uses self::VALUE_EBAY_SEND_LABEL_FEE_CREDIT
     * @uses self::VALUE_USINTERNET_SALES_TAX
     * @uses self::VALUE_USINTERNET_SALES_TAX_CREDIT
     * @uses self::VALUE_NEW_ZEALAND_GST
     * @uses self::VALUE_NEW_ZEALAND_GSTCREDIT
     * @uses self::VALUE_AUSTRALIA_GST
     * @uses self::VALUE_AUSTRALIA_GSTCREDIT
     * @uses self::VALUE_USPS_LABEL_FEE
     * @uses self::VALUE_USPS_LABEL_FEE_CREDIT
     * @uses self::VALUE_SHIPPING_INSURANCE_FEE
     * @uses self::VALUE_SHIPPING_INSURANCE_FEE_CREDIT
     * @uses self::VALUE_USPS_SHORTPAID_FEE
     * @uses self::VALUE_USPS_SHORTPAID_FEE_CREDIT
     * @uses self::VALUE_CO_FUNDING_CHARGE
     * @uses self::VALUE_CO_FUNDING_CHARGE_CREDIT
     * @uses self::VALUE_FINAL_VALUE_FEE
     * @uses self::VALUE_FINAL_VALUE_FEE_CREDIT
     * @uses self::VALUE_INTERNATIONAL_FEE
     * @uses self::VALUE_INTERNATIONAL_FEE_CREDIT
     * @uses self::VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER
     * @uses self::VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER_CREDIT
     * @uses self::VALUE_FINAL_VALUE_FEE_BELOW_STANDARD
     * @uses self::VALUE_FINAL_VALUE_FEE_BELOW_STANDARD_CREDIT
     * @uses self::VALUE_AD_FEE_EXPRESS
     * @uses self::VALUE_AD_FEE_EXPRESS_CREDIT
     * @uses self::VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE
     * @uses self::VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE_CREDIT
     * @uses self::VALUE_DEPOSIT_PROCESSING_FIXED_FEE
     * @uses self::VALUE_DEPOSIT_PROCESSING_FIXED_FEE_CREDIT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_FEE_INSERTION,
            self::VALUE_FEE_BOLD,
            self::VALUE_FEE_FEATURED,
            self::VALUE_FEE_CATEGORY_FEATURED,
            self::VALUE_FEE_FINAL_VALUE,
            self::VALUE_PAYMENT_CHECK,
            self::VALUE_PAYMENT_CC,
            self::VALUE_CREDIT_COURTESY,
            self::VALUE_CREDIT_NO_SALE,
            self::VALUE_CREDIT_PARTIAL_SALE,
            self::VALUE_REFUND_CC,
            self::VALUE_REFUND_CHECK,
            self::VALUE_FINANCE_CHARGE,
            self::VALUE_AWDEBIT,
            self::VALUE_AWCREDIT,
            self::VALUE_AWMEMO,
            self::VALUE_CREDIT_DUPLICATE_LISTING,
            self::VALUE_FEE_PARTIAL_SALE,
            self::VALUE_PAYMENT_ELECTRONIC_TRANSFER_REVERSAL,
            self::VALUE_PAYMENT_CCONCE,
            self::VALUE_FEE_RETURNED_CHECK,
            self::VALUE_FEE_REDEPOSIT_CHECK,
            self::VALUE_PAYMENT_CASH,
            self::VALUE_CREDIT_INSERTION,
            self::VALUE_CREDIT_BOLD,
            self::VALUE_CREDIT_FEATURED,
            self::VALUE_CREDIT_CATEGORY_FEATURED,
            self::VALUE_CREDIT_FINAL_VALUE,
            self::VALUE_FEE_NSFCHECK,
            self::VALUE_FEE_RETURN_CHECK_CLOSE,
            self::VALUE_MEMO,
            self::VALUE_PAYMENT_MONEY_ORDER,
            self::VALUE_CREDIT_CARD_ON_FILE,
            self::VALUE_CREDIT_CARD_NOT_ON_FILE,
            self::VALUE_INVOICED,
            self::VALUE_INVOICED_CREDIT_CARD,
            self::VALUE_CREDIT_TRANSFER_FROM,
            self::VALUE_DEBIT_TRANSFER_TO,
            self::VALUE_INVOICE_CREDIT_BALANCE,
            self::VALUE_E_BAY_DEBIT,
            self::VALUE_E_BAY_CREDIT,
            self::VALUE_PROMOTIONAL_CREDIT,
            self::VALUE_CCNOT_ON_FILE_PER_CUST_REQ,
            self::VALUE_CREDIT_INSERTION_FEE,
            self::VALUE_CCPAYMENT_REJECTED,
            self::VALUE_FEE_GIFT_ICON,
            self::VALUE_CREDIT_GIFT_ICON,
            self::VALUE_FEE_GALLERY,
            self::VALUE_FEE_FEATURED_GALLERY,
            self::VALUE_CREDIT_GALLERY,
            self::VALUE_CREDIT_FEATURED_GALLERY,
            self::VALUE_ITEM_MOVE_FEE,
            self::VALUE_OUTAGE_CREDIT,
            self::VALUE_CREDIT_PSA,
            self::VALUE_CREDIT_PCGS,
            self::VALUE_FEE_RESERVE,
            self::VALUE_CREDIT_RESERVE,
            self::VALUE_E_BAY_VISACREDIT,
            self::VALUE_BBADMIN_CREDIT,
            self::VALUE_BBADMIN_DEBIT,
            self::VALUE_REFERRER_CREDIT,
            self::VALUE_REFERRER_DEBIT,
            self::VALUE_SWITCH_CURRENCY,
            self::VALUE_PAYMENT_GIFT_CERTIFICATE,
            self::VALUE_PAYMENT_WIRE_TRANSFER,
            self::VALUE_PAYMENT_HOME_BANKING,
            self::VALUE_PAYMENT_ELECTRONIC_TRANSFER,
            self::VALUE_PAYMENT_ADJUSTMENT_CREDIT,
            self::VALUE_PAYMENT_ADJUSTMENT_DEBIT,
            self::VALUE_CHARGEOFF,
            self::VALUE_CHARGEOFF_RECOVERY,
            self::VALUE_CHARGEOFF_BANKRUPTCY,
            self::VALUE_CHARGEOFF_SUSPENDED,
            self::VALUE_CHARGEOFF_DECEASED,
            self::VALUE_CHARGEOFF_OTHER,
            self::VALUE_CHARGEOFF_WACKO,
            self::VALUE_FINANCE_CHARGE_REVERSAL,
            self::VALUE_FVFCREDIT_REVERSAL,
            self::VALUE_FOREIGN_FUNDS_CONVERT,
            self::VALUE_FOREIGN_FUNDS_CHECK_REVERSAL,
            self::VALUE_EOMRESTRICTION,
            self::VALUE_ALL_FEES_CREDIT,
            self::VALUE_SET_ON_HOLD,
            self::VALUE_REVERT_USER_STATE,
            self::VALUE_DIRECT_DEBIT_ON_FILE,
            self::VALUE_DIRECT_DEBIT_NOT_ON_FILE,
            self::VALUE_PAYMENT_DIRECT_DEBIT,
            self::VALUE_DIRECT_DEBIT_REVERSAL,
            self::VALUE_DIRECT_DEBIT_RETURNED_ITEM,
            self::VALUE_FEE_HIGHLIGHT,
            self::VALUE_CREDIT_HIGHLIGHT,
            self::VALUE_BULK_USER_SUSPENSION,
            self::VALUE_FEE_REAL_ESTATE_30_DAYS_LISTING,
            self::VALUE_CREDIT_REAL_ESTATE_30_DAYS_LISTING,
            self::VALUE_TRADING_LIMIT_OVERRIDE_ON,
            self::VALUE_TRADING_LIMIT_OVERRIDE_OFF,
            self::VALUE_EQUIFAX_REALTIME_FEE,
            self::VALUE_CREDIT_EQUIFAX_REALTIME_FEE,
            self::VALUE_PAYMENT_EQUIFAX_DEBIT,
            self::VALUE_PAYMENT_EQUIFAX_CREDIT,
            self::VALUE_MERGED,
            self::VALUE_AUTO_TRADER_ON,
            self::VALUE_AUTO_TRADER_OFF,
            self::VALUE_PAPER_INVOICE_ON,
            self::VALUE_PAPER_INVOICE_OFF,
            self::VALUE_ACCOUNT_STATE_SWITCH,
            self::VALUE_FVFCREDIT_REVERSAL_AUTOMATIC,
            self::VALUE_CREDIT_SOFT_OUTAGE,
            self::VALUE_LACATALOG_FEE,
            self::VALUE_LAEXTRA_ITEM,
            self::VALUE_LACATALOG_ITEM_FEE_REFUND,
            self::VALUE_LACATALOG_INSERTION_REFUND,
            self::VALUE_LAFINAL_VALUE_FEE,
            self::VALUE_LAFINAL_VALUE_FEE_REFUND,
            self::VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE,
            self::VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE_REFUND,
            self::VALUE_LAAUDIO_VIDEO_FEE,
            self::VALUE_LAAUDIO_VIDEO_FEE_REFUND,
            self::VALUE_FEE_IPIXPHOTO,
            self::VALUE_FEE_IPIXSLIDE_SHOW,
            self::VALUE_CREDIT_IPIXPHOTO,
            self::VALUE_CREDIT_IPIXSLIDE_SHOW,
            self::VALUE_FEE_TEN_DAY_AUCTION,
            self::VALUE_CREDIT_TEN_DAY_AUCTION,
            self::VALUE_TEMPORARY_CREDIT,
            self::VALUE_TEMPORARY_CREDIT_REVERSAL,
            self::VALUE_SUBSCRIPTION_AABASIC,
            self::VALUE_SUBSCRIPTION_AAPRO,
            self::VALUE_CREDIT_AABASIC,
            self::VALUE_CREDIT_AAPRO,
            self::VALUE_FEE_LARGE_PICTURE,
            self::VALUE_CREDIT_LARGE_PICTURE,
            self::VALUE_FEE_PICTURE_PACK,
            self::VALUE_CREDIT_PICTURE_PACK_PARTIAL,
            self::VALUE_CREDIT_PICTURE_PACK_FULL,
            self::VALUE_SUBSCRIPTIONE_BAY_STORES,
            self::VALUE_CREDITE_BAY_STORES,
            self::VALUE_FEE_INSERTION_FIXED_PRICE,
            self::VALUE_CREDIT_INSERTION_FIXED_PRICE,
            self::VALUE_FEE_FINAL_VALUE_FIXED_PRICE,
            self::VALUE_CREDIT_FINAL_VALUE_FIXED_PRICE,
            self::VALUE_ELECTRONIC_INVOICE_ON,
            self::VALUE_ELECTRONIC_INVOICE_OFF,
            self::VALUE_FLAG_DDDDPENDING,
            self::VALUE_FLAG_DDPAYMENT_CONFIRMED,
            self::VALUE_FIXED_PRICE_DURATION_FEE,
            self::VALUE_FIXED_PRICE_DURATION_CREDIT,
            self::VALUE_BUY_IT_NOW_FEE,
            self::VALUE_BUY_IT_NOW_CREDIT,
            self::VALUE_FEE_SCHEDULE,
            self::VALUE_CREDIT_SCHEDULE,
            self::VALUE_SUBSCRIPTION_SMBASIC,
            self::VALUE_SUBSCRIPTION_SMBASIC_PRO,
            self::VALUE_CREDIT_SMBASIC,
            self::VALUE_CREDIT_SMBASIC_PRO,
            self::VALUE_STORES_GTCFEE,
            self::VALUE_STORES_GTCCREDIT,
            self::VALUE_LISTING_DESIGNER_FEE,
            self::VALUE_LISTING_DESIGNER_CREDIT,
            self::VALUE_EXTENDED_AUCTION_FEE,
            self::VALUE_EXTENDED_ACUTION_CREDIT,
            self::VALUE_PAY_PAL_OTPSUCC,
            self::VALUE_PAY_PAL_OTPPEND,
            self::VALUE_PAY_PAL_FAILED,
            self::VALUE_PAY_PAL_CHARGE_BACK,
            self::VALUE_CHARGE_BACK,
            self::VALUE_CHARGE_BACK_REVERSAL,
            self::VALUE_PAY_PAL_REFUND,
            self::VALUE_BONUS_POINTS_ADDITION,
            self::VALUE_BONUS_POINTS_REDUCTION,
            self::VALUE_BONUS_POINTS_PAYMENT_AUTOMATIC,
            self::VALUE_BONUS_POINTS_PAYMENT_MANUAL,
            self::VALUE_BONUS_POINTS_PAYMENT_REVERSAL,
            self::VALUE_BONUS_POINTS_CASH_PAYOUT,
            self::VALUE_VATCREDIT,
            self::VALUE_VATDEBIT,
            self::VALUE_VATSTATUS_CHANGE_PENDING,
            self::VALUE_VATSTATUS_CHANGE_APPROVED,
            self::VALUE_VATSTATUS_CHANGE_DENIED,
            self::VALUE_VATSTATUS_DELETED_BY_CSR,
            self::VALUE_VATSTATUS_DELETED_BY_USER,
            self::VALUE_SMPRO_LISTING_DESIGNER_FEE,
            self::VALUE_SMPRO_LISTING_DESIGNER_CREDIT,
            self::VALUE_STORES_SUCCESSFUL_LISTING_FEE,
            self::VALUE_STORES_SUCCESSFUL_LISTING_FEE_CREDIT,
            self::VALUE_STORES_REFERRAL_FEE,
            self::VALUE_STORES_REFERRAL_CREDIT,
            self::VALUE_SUBTITLE_FEE,
            self::VALUE_SUBTITLE_FEE_CREDIT,
            self::VALUE_E_BAY_STORE_INVENTORY_SUBSCRIPTION_CREDIT,
            self::VALUE_AUTO_PMNT_REQ_EXEMPT,
            self::VALUE_AUTO_PMNT_REQ_REIN,
            self::VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE,
            self::VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE_CREDIT,
            self::VALUE_SELLER_REPORTS_BASIC_FEE,
            self::VALUE_SELLER_REPORTS_BASIC_CREDIT,
            self::VALUE_SELLER_REPORTS_PLUS_FEE,
            self::VALUE_SELLER_REPORTS_PLUS_CREDIT,
            self::VALUE_PAYPAL_ON_FILE,
            self::VALUE_PAYPAL_ON_FILE_BY_CSR,
            self::VALUE_PAYPAL_OFF_FILE,
            self::VALUE_BORDER_FEE,
            self::VALUE_BORDER_FEE_CREDIT,
            self::VALUE_FEE_SEARCHABLE_MOBILE_DE,
            self::VALUE_SALES_REPORTS_PLUS_FEE,
            self::VALUE_SALES_REPORTS_PLUS_CREDIT,
            self::VALUE_CREDIT_SEARCHABLE_MOBILE_DE,
            self::VALUE_EMAIL_MARKETING_FEE,
            self::VALUE_EMAIL_MARKETING_CREDIT,
            self::VALUE_FEE_PICTURE_SHOW,
            self::VALUE_CREDIT_PICTURE_SHOW,
            self::VALUE_PRO_PACK_BUNDLE_FEE,
            self::VALUE_PRO_PACK_BUNDLE_FEE_CREDIT,
            self::VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE,
            self::VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE_CREDIT,
            self::VALUE_VALUE_PACK_BUNDLE_FEE,
            self::VALUE_VALUE_PACK_BUNDLE_FEE_CREDIT,
            self::VALUE_PRO_PACK_PLUS_BUNDLE_FEE,
            self::VALUE_PRO_PACK_PLUS_BUNDLE_FEE_CREDIT,
            self::VALUE_FINAL_ENTRY,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_EXTENDED_DURATION_FEE,
            self::VALUE_EXTENDED_DURATION_FEE_CREDIT,
            self::VALUE_INTERNATIONAL_LISTING_FEE,
            self::VALUE_INTERNATIONAL_LISTING_CREDIT,
            self::VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE,
            self::VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE_CREDIT,
            self::VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE,
            self::VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE_CREDIT,
            self::VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE,
            self::VALUE_BASIC_BUNDLE_FEE,
            self::VALUE_BASIC_BUNDLE_FEE_CREDIT,
            self::VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE_CREDIT,
            self::VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE,
            self::VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE_CREDIT,
            self::VALUE_VEHICLE_LOCAL_INSERTION_FEE,
            self::VALUE_VEHICLE_LOCAL_INSERTION_FEE_CREDIT,
            self::VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE,
            self::VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE_CREDIT,
            self::VALUE_VEHICLE_LOCAL_GTCFEE,
            self::VALUE_VEHICLE_LOCAL_GTCFEE_CREDIT,
            self::VALUE_E_BAY_MOTORS_PRO_FEE,
            self::VALUE_CREDITE_BAY_MOTORS_PRO_FEE,
            self::VALUE_E_BAY_MOTORS_PRO_FEATURE_FEE,
            self::VALUE_CREDITE_BAY_MOTORS_PRO_FEATURE_FEE,
            self::VALUE_FEE_GALLERY_PLUS,
            self::VALUE_CREDIT_GALLERY_PLUS,
            self::VALUE_PRIVATE_LISTING,
            self::VALUE_CREDIT_PRIVATE_LISTING,
            self::VALUE_IMMO_PRO_FEE,
            self::VALUE_CREDIT_IMMO_PRO_FEE,
            self::VALUE_IMMO_PRO_FEATURE_FEE,
            self::VALUE_CREDIT_IMMO_PRO_FEATURE_FEE,
            self::VALUE_REAL_ESTATE_PRO_FEE,
            self::VALUE_CREDIT_REAL_ESTATE_PRO_FEE,
            self::VALUE_REAL_ESTATE_PRO_FEATURE_FEE,
            self::VALUE_CREDIT_REAL_ESTATE_PRO_FEATURE_FEE,
            self::VALUE_DISCOUNT,
            self::VALUE_CREDIT_FINAL_VALUE_SHIPPING,
            self::VALUE_FEE_FINAL_VALUE_SHIPPING,
            self::VALUE_FEE_RETURN_SHIPPING,
            self::VALUE_CREDIT_RETURN_SHIPPING,
            self::VALUE_FEE_GLOBAL_SHIPPING_PROGRAM,
            self::VALUE_CREDIT_GLOBAL_SHIPPING_PROGRAM,
            self::VALUE_FEE_AUCTION_END_EARLY,
            self::VALUE_CREDIT_AUCTION_END_EARLY,
            self::VALUE_FEE_FED_EX_SHIPPING_LABEL,
            self::VALUE_CREDIT_FED_EX_SHIPPING_LABEL,
            self::VALUE_FEE_RETURN_REFUND,
            self::VALUE_CREDIT_RETURN_REFUND,
            self::VALUE_FEE_STORES_SUBSCRIPTION_EARLY_TERMINATION,
            self::VALUE_CREDIT_STORES_SUBSCRIPTION_EARLY_TERMINATION,
            self::VALUE_FEE_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION,
            self::VALUE_CREDIT_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION,
            self::VALUE_FEE_VEHICLE_SUBSCRIPTION,
            self::VALUE_CREDIT_VEHICLE_SUBSCRIPTION,
            self::VALUE_FEE_AUPOST_SHIPPING_LABEL,
            self::VALUE_CREDIT_AUPOST_SHIPPING_LABEL,
            self::VALUE_FEE_APACFED_EX_SHIPPING_LABEL,
            self::VALUE_CREDIT_APACFED_EX_SHIPPING_LABEL,
            self::VALUE_FEE_APACTNTSHIPPING_LABEL,
            self::VALUE_CREDIT_APACTNTSHIPPING_LABEL,
            self::VALUE_FEE_EBPREIMBURSEMENT,
            self::VALUE_CREDIT_EBPREIMBURSEMENT,
            self::VALUE_FEE_PROMOTED_LISTING_FEATURE,
            self::VALUE_CREDIT_PROMOTED_LISTING_FEATURE,
            self::VALUE_FEE_AD,
            self::VALUE_CREDIT_AD,
            self::VALUE_FEE_UBISHIPPING_LABEL,
            self::VALUE_CREDIT_UBISHIPPING_LABEL,
            self::VALUE_FEEE_BAY_PLUS_SUBSCRIPTION,
            self::VALUE_CREDITE_BAY_PLUS_SUBSCRIPTION,
            self::VALUE_PAYMENT_INTERMEDIATION_FEE,
            self::VALUE_PAYMENT_INTERMEDIATION_FEE_CREDIT,
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_RVI,
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK,
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI,
            self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE,
            self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING,
            self::VALUE_HIGHLINE_SEARCH_FEE,
            self::VALUE_HIGHLINE_SEARCH_FEE_CREDIT,
            self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_CREDIT,
            self::VALUE_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING_CREDIT,
            self::VALUE_AD_FEE_PREMIUM,
            self::VALUE_AD_FEE_PREMIUM_CREDIT,
            self::VALUE_PER_LISTING_PAYMENTS_FEE,
            self::VALUE_PER_LISTING_PAYMENTS_FEE_CREDIT,
            self::VALUE_VEHICLES_LISTING_BASIC_PACKAGE_FEE,
            self::VALUE_VEHICLES_LISTING_BASIC_PACKAGE_CREDIT,
            self::VALUE_VEHICLES_LISTING_PLUS_PACKAGE_FEE,
            self::VALUE_VEHICLES_LISTING_PLUS_PACKAGE_CREDIT,
            self::VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_FEE,
            self::VALUE_VEHICLES_LISTING_PREMIUM_PACKAGE_CREDIT,
            self::VALUE_SEND_LABEL_FEE,
            self::VALUE_SEND_LABEL_FEE_CREDIT,
            self::VALUE_UPS_LABEL_FEE,
            self::VALUE_UPS_LABEL_FEE_CREDIT,
            self::VALUE_CANADA_POST_LABEL_FEE,
            self::VALUE_CANADA_POST_LABEL_FEE_CREDIT,
            self::VALUE_EBAY_SEND_LABEL_FEE,
            self::VALUE_EBAY_SEND_LABEL_FEE_CREDIT,
            self::VALUE_USINTERNET_SALES_TAX,
            self::VALUE_USINTERNET_SALES_TAX_CREDIT,
            self::VALUE_NEW_ZEALAND_GST,
            self::VALUE_NEW_ZEALAND_GSTCREDIT,
            self::VALUE_AUSTRALIA_GST,
            self::VALUE_AUSTRALIA_GSTCREDIT,
            self::VALUE_USPS_LABEL_FEE,
            self::VALUE_USPS_LABEL_FEE_CREDIT,
            self::VALUE_SHIPPING_INSURANCE_FEE,
            self::VALUE_SHIPPING_INSURANCE_FEE_CREDIT,
            self::VALUE_USPS_SHORTPAID_FEE,
            self::VALUE_USPS_SHORTPAID_FEE_CREDIT,
            self::VALUE_CO_FUNDING_CHARGE,
            self::VALUE_CO_FUNDING_CHARGE_CREDIT,
            self::VALUE_FINAL_VALUE_FEE,
            self::VALUE_FINAL_VALUE_FEE_CREDIT,
            self::VALUE_INTERNATIONAL_FEE,
            self::VALUE_INTERNATIONAL_FEE_CREDIT,
            self::VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER,
            self::VALUE_FINAL_VALUE_FEE_FIXED_FEE_PER_ORDER_CREDIT,
            self::VALUE_FINAL_VALUE_FEE_BELOW_STANDARD,
            self::VALUE_FINAL_VALUE_FEE_BELOW_STANDARD_CREDIT,
            self::VALUE_AD_FEE_EXPRESS,
            self::VALUE_AD_FEE_EXPRESS_CREDIT,
            self::VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE,
            self::VALUE_DEPOSIT_PROCESSING_VARIABLE_FEE_CREDIT,
            self::VALUE_DEPOSIT_PROCESSING_FIXED_FEE,
            self::VALUE_DEPOSIT_PROCESSING_FIXED_FEE_CREDIT,
        ];
    }
}
