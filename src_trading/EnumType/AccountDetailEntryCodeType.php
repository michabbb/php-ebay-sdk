<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AccountDetailEntryCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the debit and credit transactions that occur on an eBay user's account. These values are returned in the <b>AccountEntry.AccountDetailsEntryType</b> output field of the <b>GetAccount</b> call.
 * @subpackage Enumerations
 */
class AccountDetailEntryCodeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'FeeInsertion'
     * @return string 'FeeInsertion'
     */
    const VALUE_FEE_INSERTION = 'FeeInsertion';
    /**
     * Constant for value 'FeeBold'
     * @return string 'FeeBold'
     */
    const VALUE_FEE_BOLD = 'FeeBold';
    /**
     * Constant for value 'FeeFeatured'
     * @return string 'FeeFeatured'
     */
    const VALUE_FEE_FEATURED = 'FeeFeatured';
    /**
     * Constant for value 'FeeCategoryFeatured'
     * @return string 'FeeCategoryFeatured'
     */
    const VALUE_FEE_CATEGORY_FEATURED = 'FeeCategoryFeatured';
    /**
     * Constant for value 'FeeFinalValue'
     * @return string 'FeeFinalValue'
     */
    const VALUE_FEE_FINAL_VALUE = 'FeeFinalValue';
    /**
     * Constant for value 'PaymentCheck'
     * @return string 'PaymentCheck'
     */
    const VALUE_PAYMENT_CHECK = 'PaymentCheck';
    /**
     * Constant for value 'PaymentCC'
     * @return string 'PaymentCC'
     */
    const VALUE_PAYMENT_CC = 'PaymentCC';
    /**
     * Constant for value 'CreditCourtesy'
     * @return string 'CreditCourtesy'
     */
    const VALUE_CREDIT_COURTESY = 'CreditCourtesy';
    /**
     * Constant for value 'CreditNoSale'
     * @return string 'CreditNoSale'
     */
    const VALUE_CREDIT_NO_SALE = 'CreditNoSale';
    /**
     * Constant for value 'CreditPartialSale'
     * @return string 'CreditPartialSale'
     */
    const VALUE_CREDIT_PARTIAL_SALE = 'CreditPartialSale';
    /**
     * Constant for value 'RefundCC'
     * @return string 'RefundCC'
     */
    const VALUE_REFUND_CC = 'RefundCC';
    /**
     * Constant for value 'RefundCheck'
     * @return string 'RefundCheck'
     */
    const VALUE_REFUND_CHECK = 'RefundCheck';
    /**
     * Constant for value 'FinanceCharge'
     * @return string 'FinanceCharge'
     */
    const VALUE_FINANCE_CHARGE = 'FinanceCharge';
    /**
     * Constant for value 'AWDebit'
     * @return string 'AWDebit'
     */
    const VALUE_AWDEBIT = 'AWDebit';
    /**
     * Constant for value 'AWCredit'
     * @return string 'AWCredit'
     */
    const VALUE_AWCREDIT = 'AWCredit';
    /**
     * Constant for value 'AWMemo'
     * @return string 'AWMemo'
     */
    const VALUE_AWMEMO = 'AWMemo';
    /**
     * Constant for value 'CreditDuplicateListing'
     * @return string 'CreditDuplicateListing'
     */
    const VALUE_CREDIT_DUPLICATE_LISTING = 'CreditDuplicateListing';
    /**
     * Constant for value 'FeePartialSale'
     * @return string 'FeePartialSale'
     */
    const VALUE_FEE_PARTIAL_SALE = 'FeePartialSale';
    /**
     * Constant for value 'PaymentElectronicTransferReversal'
     * @return string 'PaymentElectronicTransferReversal'
     */
    const VALUE_PAYMENT_ELECTRONIC_TRANSFER_REVERSAL = 'PaymentElectronicTransferReversal';
    /**
     * Constant for value 'PaymentCCOnce'
     * @return string 'PaymentCCOnce'
     */
    const VALUE_PAYMENT_CCONCE = 'PaymentCCOnce';
    /**
     * Constant for value 'FeeReturnedCheck'
     * @return string 'FeeReturnedCheck'
     */
    const VALUE_FEE_RETURNED_CHECK = 'FeeReturnedCheck';
    /**
     * Constant for value 'FeeRedepositCheck'
     * @return string 'FeeRedepositCheck'
     */
    const VALUE_FEE_REDEPOSIT_CHECK = 'FeeRedepositCheck';
    /**
     * Constant for value 'PaymentCash'
     * @return string 'PaymentCash'
     */
    const VALUE_PAYMENT_CASH = 'PaymentCash';
    /**
     * Constant for value 'CreditInsertion'
     * @return string 'CreditInsertion'
     */
    const VALUE_CREDIT_INSERTION = 'CreditInsertion';
    /**
     * Constant for value 'CreditBold'
     * @return string 'CreditBold'
     */
    const VALUE_CREDIT_BOLD = 'CreditBold';
    /**
     * Constant for value 'CreditFeatured'
     * @return string 'CreditFeatured'
     */
    const VALUE_CREDIT_FEATURED = 'CreditFeatured';
    /**
     * Constant for value 'CreditCategoryFeatured'
     * @return string 'CreditCategoryFeatured'
     */
    const VALUE_CREDIT_CATEGORY_FEATURED = 'CreditCategoryFeatured';
    /**
     * Constant for value 'CreditFinalValue'
     * @return string 'CreditFinalValue'
     */
    const VALUE_CREDIT_FINAL_VALUE = 'CreditFinalValue';
    /**
     * Constant for value 'FeeNSFCheck'
     * @return string 'FeeNSFCheck'
     */
    const VALUE_FEE_NSFCHECK = 'FeeNSFCheck';
    /**
     * Constant for value 'FeeReturnCheckClose'
     * @return string 'FeeReturnCheckClose'
     */
    const VALUE_FEE_RETURN_CHECK_CLOSE = 'FeeReturnCheckClose';
    /**
     * Constant for value 'Memo'
     * @return string 'Memo'
     */
    const VALUE_MEMO = 'Memo';
    /**
     * Constant for value 'PaymentMoneyOrder'
     * @return string 'PaymentMoneyOrder'
     */
    const VALUE_PAYMENT_MONEY_ORDER = 'PaymentMoneyOrder';
    /**
     * Constant for value 'CreditCardOnFile'
     * @return string 'CreditCardOnFile'
     */
    const VALUE_CREDIT_CARD_ON_FILE = 'CreditCardOnFile';
    /**
     * Constant for value 'CreditCardNotOnFile'
     * @return string 'CreditCardNotOnFile'
     */
    const VALUE_CREDIT_CARD_NOT_ON_FILE = 'CreditCardNotOnFile';
    /**
     * Constant for value 'Invoiced'
     * @return string 'Invoiced'
     */
    const VALUE_INVOICED = 'Invoiced';
    /**
     * Constant for value 'InvoicedCreditCard'
     * @return string 'InvoicedCreditCard'
     */
    const VALUE_INVOICED_CREDIT_CARD = 'InvoicedCreditCard';
    /**
     * Constant for value 'CreditTransferFrom'
     * @return string 'CreditTransferFrom'
     */
    const VALUE_CREDIT_TRANSFER_FROM = 'CreditTransferFrom';
    /**
     * Constant for value 'DebitTransferTo'
     * @return string 'DebitTransferTo'
     */
    const VALUE_DEBIT_TRANSFER_TO = 'DebitTransferTo';
    /**
     * Constant for value 'InvoiceCreditBalance'
     * @return string 'InvoiceCreditBalance'
     */
    const VALUE_INVOICE_CREDIT_BALANCE = 'InvoiceCreditBalance';
    /**
     * Constant for value 'eBayDebit'
     * @return string 'eBayDebit'
     */
    const VALUE_E_BAY_DEBIT = 'eBayDebit';
    /**
     * Constant for value 'eBayCredit'
     * @return string 'eBayCredit'
     */
    const VALUE_E_BAY_CREDIT = 'eBayCredit';
    /**
     * Constant for value 'PromotionalCredit'
     * @return string 'PromotionalCredit'
     */
    const VALUE_PROMOTIONAL_CREDIT = 'PromotionalCredit';
    /**
     * Constant for value 'CCNotOnFilePerCustReq'
     * @return string 'CCNotOnFilePerCustReq'
     */
    const VALUE_CCNOT_ON_FILE_PER_CUST_REQ = 'CCNotOnFilePerCustReq';
    /**
     * Constant for value 'CreditInsertionFee'
     * @return string 'CreditInsertionFee'
     */
    const VALUE_CREDIT_INSERTION_FEE = 'CreditInsertionFee';
    /**
     * Constant for value 'CCPaymentRejected'
     * @return string 'CCPaymentRejected'
     */
    const VALUE_CCPAYMENT_REJECTED = 'CCPaymentRejected';
    /**
     * Constant for value 'FeeGiftIcon'
     * @return string 'FeeGiftIcon'
     */
    const VALUE_FEE_GIFT_ICON = 'FeeGiftIcon';
    /**
     * Constant for value 'CreditGiftIcon'
     * @return string 'CreditGiftIcon'
     */
    const VALUE_CREDIT_GIFT_ICON = 'CreditGiftIcon';
    /**
     * Constant for value 'FeeGallery'
     * @return string 'FeeGallery'
     */
    const VALUE_FEE_GALLERY = 'FeeGallery';
    /**
     * Constant for value 'FeeFeaturedGallery'
     * @return string 'FeeFeaturedGallery'
     */
    const VALUE_FEE_FEATURED_GALLERY = 'FeeFeaturedGallery';
    /**
     * Constant for value 'CreditGallery'
     * @return string 'CreditGallery'
     */
    const VALUE_CREDIT_GALLERY = 'CreditGallery';
    /**
     * Constant for value 'CreditFeaturedGallery'
     * @return string 'CreditFeaturedGallery'
     */
    const VALUE_CREDIT_FEATURED_GALLERY = 'CreditFeaturedGallery';
    /**
     * Constant for value 'ItemMoveFee'
     * @return string 'ItemMoveFee'
     */
    const VALUE_ITEM_MOVE_FEE = 'ItemMoveFee';
    /**
     * Constant for value 'OutageCredit'
     * @return string 'OutageCredit'
     */
    const VALUE_OUTAGE_CREDIT = 'OutageCredit';
    /**
     * Constant for value 'CreditPSA'
     * @return string 'CreditPSA'
     */
    const VALUE_CREDIT_PSA = 'CreditPSA';
    /**
     * Constant for value 'CreditPCGS'
     * @return string 'CreditPCGS'
     */
    const VALUE_CREDIT_PCGS = 'CreditPCGS';
    /**
     * Constant for value 'FeeReserve'
     * @return string 'FeeReserve'
     */
    const VALUE_FEE_RESERVE = 'FeeReserve';
    /**
     * Constant for value 'CreditReserve'
     * @return string 'CreditReserve'
     */
    const VALUE_CREDIT_RESERVE = 'CreditReserve';
    /**
     * Constant for value 'eBayVISACredit'
     * @return string 'eBayVISACredit'
     */
    const VALUE_E_BAY_VISACREDIT = 'eBayVISACredit';
    /**
     * Constant for value 'BBAdminCredit'
     * @return string 'BBAdminCredit'
     */
    const VALUE_BBADMIN_CREDIT = 'BBAdminCredit';
    /**
     * Constant for value 'BBAdminDebit'
     * @return string 'BBAdminDebit'
     */
    const VALUE_BBADMIN_DEBIT = 'BBAdminDebit';
    /**
     * Constant for value 'ReferrerCredit'
     * @return string 'ReferrerCredit'
     */
    const VALUE_REFERRER_CREDIT = 'ReferrerCredit';
    /**
     * Constant for value 'ReferrerDebit'
     * @return string 'ReferrerDebit'
     */
    const VALUE_REFERRER_DEBIT = 'ReferrerDebit';
    /**
     * Constant for value 'SwitchCurrency'
     * @return string 'SwitchCurrency'
     */
    const VALUE_SWITCH_CURRENCY = 'SwitchCurrency';
    /**
     * Constant for value 'PaymentGiftCertificate'
     * @return string 'PaymentGiftCertificate'
     */
    const VALUE_PAYMENT_GIFT_CERTIFICATE = 'PaymentGiftCertificate';
    /**
     * Constant for value 'PaymentWireTransfer'
     * @return string 'PaymentWireTransfer'
     */
    const VALUE_PAYMENT_WIRE_TRANSFER = 'PaymentWireTransfer';
    /**
     * Constant for value 'PaymentHomeBanking'
     * @return string 'PaymentHomeBanking'
     */
    const VALUE_PAYMENT_HOME_BANKING = 'PaymentHomeBanking';
    /**
     * Constant for value 'PaymentElectronicTransfer'
     * @return string 'PaymentElectronicTransfer'
     */
    const VALUE_PAYMENT_ELECTRONIC_TRANSFER = 'PaymentElectronicTransfer';
    /**
     * Constant for value 'PaymentAdjustmentCredit'
     * @return string 'PaymentAdjustmentCredit'
     */
    const VALUE_PAYMENT_ADJUSTMENT_CREDIT = 'PaymentAdjustmentCredit';
    /**
     * Constant for value 'PaymentAdjustmentDebit'
     * @return string 'PaymentAdjustmentDebit'
     */
    const VALUE_PAYMENT_ADJUSTMENT_DEBIT = 'PaymentAdjustmentDebit';
    /**
     * Constant for value 'Chargeoff'
     * @return string 'Chargeoff'
     */
    const VALUE_CHARGEOFF = 'Chargeoff';
    /**
     * Constant for value 'ChargeoffRecovery'
     * @return string 'ChargeoffRecovery'
     */
    const VALUE_CHARGEOFF_RECOVERY = 'ChargeoffRecovery';
    /**
     * Constant for value 'ChargeoffBankruptcy'
     * @return string 'ChargeoffBankruptcy'
     */
    const VALUE_CHARGEOFF_BANKRUPTCY = 'ChargeoffBankruptcy';
    /**
     * Constant for value 'ChargeoffSuspended'
     * @return string 'ChargeoffSuspended'
     */
    const VALUE_CHARGEOFF_SUSPENDED = 'ChargeoffSuspended';
    /**
     * Constant for value 'ChargeoffDeceased'
     * @return string 'ChargeoffDeceased'
     */
    const VALUE_CHARGEOFF_DECEASED = 'ChargeoffDeceased';
    /**
     * Constant for value 'ChargeoffOther'
     * @return string 'ChargeoffOther'
     */
    const VALUE_CHARGEOFF_OTHER = 'ChargeoffOther';
    /**
     * Constant for value 'ChargeoffWacko'
     * @return string 'ChargeoffWacko'
     */
    const VALUE_CHARGEOFF_WACKO = 'ChargeoffWacko';
    /**
     * Constant for value 'FinanceChargeReversal'
     * @return string 'FinanceChargeReversal'
     */
    const VALUE_FINANCE_CHARGE_REVERSAL = 'FinanceChargeReversal';
    /**
     * Constant for value 'FVFCreditReversal'
     * @return string 'FVFCreditReversal'
     */
    const VALUE_FVFCREDIT_REVERSAL = 'FVFCreditReversal';
    /**
     * Constant for value 'ForeignFundsConvert'
     * @return string 'ForeignFundsConvert'
     */
    const VALUE_FOREIGN_FUNDS_CONVERT = 'ForeignFundsConvert';
    /**
     * Constant for value 'ForeignFundsCheckReversal'
     * @return string 'ForeignFundsCheckReversal'
     */
    const VALUE_FOREIGN_FUNDS_CHECK_REVERSAL = 'ForeignFundsCheckReversal';
    /**
     * Constant for value 'EOMRestriction'
     * @return string 'EOMRestriction'
     */
    const VALUE_EOMRESTRICTION = 'EOMRestriction';
    /**
     * Constant for value 'AllFeesCredit'
     * @return string 'AllFeesCredit'
     */
    const VALUE_ALL_FEES_CREDIT = 'AllFeesCredit';
    /**
     * Constant for value 'SetOnHold'
     * @return string 'SetOnHold'
     */
    const VALUE_SET_ON_HOLD = 'SetOnHold';
    /**
     * Constant for value 'RevertUserState'
     * @return string 'RevertUserState'
     */
    const VALUE_REVERT_USER_STATE = 'RevertUserState';
    /**
     * Constant for value 'DirectDebitOnFile'
     * @return string 'DirectDebitOnFile'
     */
    const VALUE_DIRECT_DEBIT_ON_FILE = 'DirectDebitOnFile';
    /**
     * Constant for value 'DirectDebitNotOnFile'
     * @return string 'DirectDebitNotOnFile'
     */
    const VALUE_DIRECT_DEBIT_NOT_ON_FILE = 'DirectDebitNotOnFile';
    /**
     * Constant for value 'PaymentDirectDebit'
     * @return string 'PaymentDirectDebit'
     */
    const VALUE_PAYMENT_DIRECT_DEBIT = 'PaymentDirectDebit';
    /**
     * Constant for value 'DirectDebitReversal'
     * @return string 'DirectDebitReversal'
     */
    const VALUE_DIRECT_DEBIT_REVERSAL = 'DirectDebitReversal';
    /**
     * Constant for value 'DirectDebitReturnedItem'
     * @return string 'DirectDebitReturnedItem'
     */
    const VALUE_DIRECT_DEBIT_RETURNED_ITEM = 'DirectDebitReturnedItem';
    /**
     * Constant for value 'FeeHighlight'
     * @return string 'FeeHighlight'
     */
    const VALUE_FEE_HIGHLIGHT = 'FeeHighlight';
    /**
     * Constant for value 'CreditHighlight'
     * @return string 'CreditHighlight'
     */
    const VALUE_CREDIT_HIGHLIGHT = 'CreditHighlight';
    /**
     * Constant for value 'BulkUserSuspension'
     * @return string 'BulkUserSuspension'
     */
    const VALUE_BULK_USER_SUSPENSION = 'BulkUserSuspension';
    /**
     * Constant for value 'FeeRealEstate30DaysListing'
     * @return string 'FeeRealEstate30DaysListing'
     */
    const VALUE_FEE_REAL_ESTATE_30_DAYS_LISTING = 'FeeRealEstate30DaysListing';
    /**
     * Constant for value 'CreditRealEstate30DaysListing'
     * @return string 'CreditRealEstate30DaysListing'
     */
    const VALUE_CREDIT_REAL_ESTATE_30_DAYS_LISTING = 'CreditRealEstate30DaysListing';
    /**
     * Constant for value 'TradingLimitOverrideOn'
     * @return string 'TradingLimitOverrideOn'
     */
    const VALUE_TRADING_LIMIT_OVERRIDE_ON = 'TradingLimitOverrideOn';
    /**
     * Constant for value 'TradingLimitOverrideOff'
     * @return string 'TradingLimitOverrideOff'
     */
    const VALUE_TRADING_LIMIT_OVERRIDE_OFF = 'TradingLimitOverrideOff';
    /**
     * Constant for value 'EquifaxRealtimeFee'
     * @return string 'EquifaxRealtimeFee'
     */
    const VALUE_EQUIFAX_REALTIME_FEE = 'EquifaxRealtimeFee';
    /**
     * Constant for value 'CreditEquifaxRealtimeFee'
     * @return string 'CreditEquifaxRealtimeFee'
     */
    const VALUE_CREDIT_EQUIFAX_REALTIME_FEE = 'CreditEquifaxRealtimeFee';
    /**
     * Constant for value 'PaymentEquifaxDebit'
     * @return string 'PaymentEquifaxDebit'
     */
    const VALUE_PAYMENT_EQUIFAX_DEBIT = 'PaymentEquifaxDebit';
    /**
     * Constant for value 'PaymentEquifaxCredit'
     * @return string 'PaymentEquifaxCredit'
     */
    const VALUE_PAYMENT_EQUIFAX_CREDIT = 'PaymentEquifaxCredit';
    /**
     * Constant for value 'Merged'
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'AutoTraderOn'
     * @return string 'AutoTraderOn'
     */
    const VALUE_AUTO_TRADER_ON = 'AutoTraderOn';
    /**
     * Constant for value 'AutoTraderOff'
     * @return string 'AutoTraderOff'
     */
    const VALUE_AUTO_TRADER_OFF = 'AutoTraderOff';
    /**
     * Constant for value 'PaperInvoiceOn'
     * @return string 'PaperInvoiceOn'
     */
    const VALUE_PAPER_INVOICE_ON = 'PaperInvoiceOn';
    /**
     * Constant for value 'PaperInvoiceOff'
     * @return string 'PaperInvoiceOff'
     */
    const VALUE_PAPER_INVOICE_OFF = 'PaperInvoiceOff';
    /**
     * Constant for value 'AccountStateSwitch'
     * @return string 'AccountStateSwitch'
     */
    const VALUE_ACCOUNT_STATE_SWITCH = 'AccountStateSwitch';
    /**
     * Constant for value 'FVFCreditReversalAutomatic'
     * @return string 'FVFCreditReversalAutomatic'
     */
    const VALUE_FVFCREDIT_REVERSAL_AUTOMATIC = 'FVFCreditReversalAutomatic';
    /**
     * Constant for value 'CreditSoftOutage'
     * @return string 'CreditSoftOutage'
     */
    const VALUE_CREDIT_SOFT_OUTAGE = 'CreditSoftOutage';
    /**
     * Constant for value 'LACatalogFee'
     * @return string 'LACatalogFee'
     */
    const VALUE_LACATALOG_FEE = 'LACatalogFee';
    /**
     * Constant for value 'LAExtraItem'
     * @return string 'LAExtraItem'
     */
    const VALUE_LAEXTRA_ITEM = 'LAExtraItem';
    /**
     * Constant for value 'LACatalogItemFeeRefund'
     * @return string 'LACatalogItemFeeRefund'
     */
    const VALUE_LACATALOG_ITEM_FEE_REFUND = 'LACatalogItemFeeRefund';
    /**
     * Constant for value 'LACatalogInsertionRefund'
     * @return string 'LACatalogInsertionRefund'
     */
    const VALUE_LACATALOG_INSERTION_REFUND = 'LACatalogInsertionRefund';
    /**
     * Constant for value 'LAFinalValueFee'
     * @return string 'LAFinalValueFee'
     */
    const VALUE_LAFINAL_VALUE_FEE = 'LAFinalValueFee';
    /**
     * Constant for value 'LAFinalValueFeeRefund'
     * @return string 'LAFinalValueFeeRefund'
     */
    const VALUE_LAFINAL_VALUE_FEE_REFUND = 'LAFinalValueFeeRefund';
    /**
     * Constant for value 'LABuyerPremiumPercentageFee'
     * @return string 'LABuyerPremiumPercentageFee'
     */
    const VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE = 'LABuyerPremiumPercentageFee';
    /**
     * Constant for value 'LABuyerPremiumPercentageFeeRefund'
     * @return string 'LABuyerPremiumPercentageFeeRefund'
     */
    const VALUE_LABUYER_PREMIUM_PERCENTAGE_FEE_REFUND = 'LABuyerPremiumPercentageFeeRefund';
    /**
     * Constant for value 'LAAudioVideoFee'
     * @return string 'LAAudioVideoFee'
     */
    const VALUE_LAAUDIO_VIDEO_FEE = 'LAAudioVideoFee';
    /**
     * Constant for value 'LAAudioVideoFeeRefund'
     * @return string 'LAAudioVideoFeeRefund'
     */
    const VALUE_LAAUDIO_VIDEO_FEE_REFUND = 'LAAudioVideoFeeRefund';
    /**
     * Constant for value 'FeeIPIXPhoto'
     * @return string 'FeeIPIXPhoto'
     */
    const VALUE_FEE_IPIXPHOTO = 'FeeIPIXPhoto';
    /**
     * Constant for value 'FeeIPIXSlideShow'
     * @return string 'FeeIPIXSlideShow'
     */
    const VALUE_FEE_IPIXSLIDE_SHOW = 'FeeIPIXSlideShow';
    /**
     * Constant for value 'CreditIPIXPhoto'
     * @return string 'CreditIPIXPhoto'
     */
    const VALUE_CREDIT_IPIXPHOTO = 'CreditIPIXPhoto';
    /**
     * Constant for value 'CreditIPIXSlideShow'
     * @return string 'CreditIPIXSlideShow'
     */
    const VALUE_CREDIT_IPIXSLIDE_SHOW = 'CreditIPIXSlideShow';
    /**
     * Constant for value 'FeeTenDayAuction'
     * @return string 'FeeTenDayAuction'
     */
    const VALUE_FEE_TEN_DAY_AUCTION = 'FeeTenDayAuction';
    /**
     * Constant for value 'CreditTenDayAuction'
     * @return string 'CreditTenDayAuction'
     */
    const VALUE_CREDIT_TEN_DAY_AUCTION = 'CreditTenDayAuction';
    /**
     * Constant for value 'TemporaryCredit'
     * @return string 'TemporaryCredit'
     */
    const VALUE_TEMPORARY_CREDIT = 'TemporaryCredit';
    /**
     * Constant for value 'TemporaryCreditReversal'
     * @return string 'TemporaryCreditReversal'
     */
    const VALUE_TEMPORARY_CREDIT_REVERSAL = 'TemporaryCreditReversal';
    /**
     * Constant for value 'SubscriptionAABasic'
     * @return string 'SubscriptionAABasic'
     */
    const VALUE_SUBSCRIPTION_AABASIC = 'SubscriptionAABasic';
    /**
     * Constant for value 'SubscriptionAAPro'
     * @return string 'SubscriptionAAPro'
     */
    const VALUE_SUBSCRIPTION_AAPRO = 'SubscriptionAAPro';
    /**
     * Constant for value 'CreditAABasic'
     * @return string 'CreditAABasic'
     */
    const VALUE_CREDIT_AABASIC = 'CreditAABasic';
    /**
     * Constant for value 'CreditAAPro'
     * @return string 'CreditAAPro'
     */
    const VALUE_CREDIT_AAPRO = 'CreditAAPro';
    /**
     * Constant for value 'FeeLargePicture'
     * @return string 'FeeLargePicture'
     */
    const VALUE_FEE_LARGE_PICTURE = 'FeeLargePicture';
    /**
     * Constant for value 'CreditLargePicture'
     * @return string 'CreditLargePicture'
     */
    const VALUE_CREDIT_LARGE_PICTURE = 'CreditLargePicture';
    /**
     * Constant for value 'FeePicturePack'
     * @return string 'FeePicturePack'
     */
    const VALUE_FEE_PICTURE_PACK = 'FeePicturePack';
    /**
     * Constant for value 'CreditPicturePackPartial'
     * @return string 'CreditPicturePackPartial'
     */
    const VALUE_CREDIT_PICTURE_PACK_PARTIAL = 'CreditPicturePackPartial';
    /**
     * Constant for value 'CreditPicturePackFull'
     * @return string 'CreditPicturePackFull'
     */
    const VALUE_CREDIT_PICTURE_PACK_FULL = 'CreditPicturePackFull';
    /**
     * Constant for value 'SubscriptioneBayStores'
     * @return string 'SubscriptioneBayStores'
     */
    const VALUE_SUBSCRIPTIONE_BAY_STORES = 'SubscriptioneBayStores';
    /**
     * Constant for value 'CrediteBayStores'
     * @return string 'CrediteBayStores'
     */
    const VALUE_CREDITE_BAY_STORES = 'CrediteBayStores';
    /**
     * Constant for value 'FeeInsertionFixedPrice'
     * @return string 'FeeInsertionFixedPrice'
     */
    const VALUE_FEE_INSERTION_FIXED_PRICE = 'FeeInsertionFixedPrice';
    /**
     * Constant for value 'CreditInsertionFixedPrice'
     * @return string 'CreditInsertionFixedPrice'
     */
    const VALUE_CREDIT_INSERTION_FIXED_PRICE = 'CreditInsertionFixedPrice';
    /**
     * Constant for value 'FeeFinalValueFixedPrice'
     * @return string 'FeeFinalValueFixedPrice'
     */
    const VALUE_FEE_FINAL_VALUE_FIXED_PRICE = 'FeeFinalValueFixedPrice';
    /**
     * Constant for value 'CreditFinalValueFixedPrice'
     * @return string 'CreditFinalValueFixedPrice'
     */
    const VALUE_CREDIT_FINAL_VALUE_FIXED_PRICE = 'CreditFinalValueFixedPrice';
    /**
     * Constant for value 'ElectronicInvoiceOn'
     * @return string 'ElectronicInvoiceOn'
     */
    const VALUE_ELECTRONIC_INVOICE_ON = 'ElectronicInvoiceOn';
    /**
     * Constant for value 'ElectronicInvoiceOff'
     * @return string 'ElectronicInvoiceOff'
     */
    const VALUE_ELECTRONIC_INVOICE_OFF = 'ElectronicInvoiceOff';
    /**
     * Constant for value 'FlagDDDDPending'
     * @return string 'FlagDDDDPending'
     */
    const VALUE_FLAG_DDDDPENDING = 'FlagDDDDPending';
    /**
     * Constant for value 'FlagDDPaymentConfirmed'
     * @return string 'FlagDDPaymentConfirmed'
     */
    const VALUE_FLAG_DDPAYMENT_CONFIRMED = 'FlagDDPaymentConfirmed';
    /**
     * Constant for value 'FixedPriceDurationFee'
     * @return string 'FixedPriceDurationFee'
     */
    const VALUE_FIXED_PRICE_DURATION_FEE = 'FixedPriceDurationFee';
    /**
     * Constant for value 'FixedPriceDurationCredit'
     * @return string 'FixedPriceDurationCredit'
     */
    const VALUE_FIXED_PRICE_DURATION_CREDIT = 'FixedPriceDurationCredit';
    /**
     * Constant for value 'BuyItNowFee'
     * @return string 'BuyItNowFee'
     */
    const VALUE_BUY_IT_NOW_FEE = 'BuyItNowFee';
    /**
     * Constant for value 'BuyItNowCredit'
     * @return string 'BuyItNowCredit'
     */
    const VALUE_BUY_IT_NOW_CREDIT = 'BuyItNowCredit';
    /**
     * Constant for value 'FeeSchedule'
     * @return string 'FeeSchedule'
     */
    const VALUE_FEE_SCHEDULE = 'FeeSchedule';
    /**
     * Constant for value 'CreditSchedule'
     * @return string 'CreditSchedule'
     */
    const VALUE_CREDIT_SCHEDULE = 'CreditSchedule';
    /**
     * Constant for value 'SubscriptionSMBasic'
     * @return string 'SubscriptionSMBasic'
     */
    const VALUE_SUBSCRIPTION_SMBASIC = 'SubscriptionSMBasic';
    /**
     * Constant for value 'SubscriptionSMBasicPro'
     * @return string 'SubscriptionSMBasicPro'
     */
    const VALUE_SUBSCRIPTION_SMBASIC_PRO = 'SubscriptionSMBasicPro';
    /**
     * Constant for value 'CreditSMBasic'
     * @return string 'CreditSMBasic'
     */
    const VALUE_CREDIT_SMBASIC = 'CreditSMBasic';
    /**
     * Constant for value 'CreditSMBasicPro'
     * @return string 'CreditSMBasicPro'
     */
    const VALUE_CREDIT_SMBASIC_PRO = 'CreditSMBasicPro';
    /**
     * Constant for value 'StoresGTCFee'
     * @return string 'StoresGTCFee'
     */
    const VALUE_STORES_GTCFEE = 'StoresGTCFee';
    /**
     * Constant for value 'StoresGTCCredit'
     * @return string 'StoresGTCCredit'
     */
    const VALUE_STORES_GTCCREDIT = 'StoresGTCCredit';
    /**
     * Constant for value 'ListingDesignerFee'
     * @return string 'ListingDesignerFee'
     */
    const VALUE_LISTING_DESIGNER_FEE = 'ListingDesignerFee';
    /**
     * Constant for value 'ListingDesignerCredit'
     * @return string 'ListingDesignerCredit'
     */
    const VALUE_LISTING_DESIGNER_CREDIT = 'ListingDesignerCredit';
    /**
     * Constant for value 'ExtendedAuctionFee'
     * @return string 'ExtendedAuctionFee'
     */
    const VALUE_EXTENDED_AUCTION_FEE = 'ExtendedAuctionFee';
    /**
     * Constant for value 'ExtendedAcutionCredit'
     * @return string 'ExtendedAcutionCredit'
     */
    const VALUE_EXTENDED_ACUTION_CREDIT = 'ExtendedAcutionCredit';
    /**
     * Constant for value 'PayPalOTPSucc'
     * @return string 'PayPalOTPSucc'
     */
    const VALUE_PAY_PAL_OTPSUCC = 'PayPalOTPSucc';
    /**
     * Constant for value 'PayPalOTPPend'
     * @return string 'PayPalOTPPend'
     */
    const VALUE_PAY_PAL_OTPPEND = 'PayPalOTPPend';
    /**
     * Constant for value 'PayPalFailed'
     * @return string 'PayPalFailed'
     */
    const VALUE_PAY_PAL_FAILED = 'PayPalFailed';
    /**
     * Constant for value 'PayPalChargeBack'
     * @return string 'PayPalChargeBack'
     */
    const VALUE_PAY_PAL_CHARGE_BACK = 'PayPalChargeBack';
    /**
     * Constant for value 'ChargeBack'
     * @return string 'ChargeBack'
     */
    const VALUE_CHARGE_BACK = 'ChargeBack';
    /**
     * Constant for value 'ChargeBackReversal'
     * @return string 'ChargeBackReversal'
     */
    const VALUE_CHARGE_BACK_REVERSAL = 'ChargeBackReversal';
    /**
     * Constant for value 'PayPalRefund'
     * @return string 'PayPalRefund'
     */
    const VALUE_PAY_PAL_REFUND = 'PayPalRefund';
    /**
     * Constant for value 'BonusPointsAddition'
     * @return string 'BonusPointsAddition'
     */
    const VALUE_BONUS_POINTS_ADDITION = 'BonusPointsAddition';
    /**
     * Constant for value 'BonusPointsReduction'
     * @return string 'BonusPointsReduction'
     */
    const VALUE_BONUS_POINTS_REDUCTION = 'BonusPointsReduction';
    /**
     * Constant for value 'BonusPointsPaymentAutomatic'
     * @return string 'BonusPointsPaymentAutomatic'
     */
    const VALUE_BONUS_POINTS_PAYMENT_AUTOMATIC = 'BonusPointsPaymentAutomatic';
    /**
     * Constant for value 'BonusPointsPaymentManual'
     * @return string 'BonusPointsPaymentManual'
     */
    const VALUE_BONUS_POINTS_PAYMENT_MANUAL = 'BonusPointsPaymentManual';
    /**
     * Constant for value 'BonusPointsPaymentReversal'
     * @return string 'BonusPointsPaymentReversal'
     */
    const VALUE_BONUS_POINTS_PAYMENT_REVERSAL = 'BonusPointsPaymentReversal';
    /**
     * Constant for value 'BonusPointsCashPayout'
     * @return string 'BonusPointsCashPayout'
     */
    const VALUE_BONUS_POINTS_CASH_PAYOUT = 'BonusPointsCashPayout';
    /**
     * Constant for value 'VATCredit'
     * @return string 'VATCredit'
     */
    const VALUE_VATCREDIT = 'VATCredit';
    /**
     * Constant for value 'VATDebit'
     * @return string 'VATDebit'
     */
    const VALUE_VATDEBIT = 'VATDebit';
    /**
     * Constant for value 'VATStatusChangePending'
     * @return string 'VATStatusChangePending'
     */
    const VALUE_VATSTATUS_CHANGE_PENDING = 'VATStatusChangePending';
    /**
     * Constant for value 'VATStatusChangeApproved'
     * @return string 'VATStatusChangeApproved'
     */
    const VALUE_VATSTATUS_CHANGE_APPROVED = 'VATStatusChangeApproved';
    /**
     * Constant for value 'VATStatusChange_Denied'
     * @return string 'VATStatusChange_Denied'
     */
    const VALUE_VATSTATUS_CHANGE_DENIED = 'VATStatusChange_Denied';
    /**
     * Constant for value 'VATStatusDeletedByCSR'
     * @return string 'VATStatusDeletedByCSR'
     */
    const VALUE_VATSTATUS_DELETED_BY_CSR = 'VATStatusDeletedByCSR';
    /**
     * Constant for value 'VATStatusDeletedByUser'
     * @return string 'VATStatusDeletedByUser'
     */
    const VALUE_VATSTATUS_DELETED_BY_USER = 'VATStatusDeletedByUser';
    /**
     * Constant for value 'SMProListingDesignerFee'
     * @return string 'SMProListingDesignerFee'
     */
    const VALUE_SMPRO_LISTING_DESIGNER_FEE = 'SMProListingDesignerFee';
    /**
     * Constant for value 'SMProListingDesignerCredit'
     * @return string 'SMProListingDesignerCredit'
     */
    const VALUE_SMPRO_LISTING_DESIGNER_CREDIT = 'SMProListingDesignerCredit';
    /**
     * Constant for value 'StoresSuccessfulListingFee'
     * @return string 'StoresSuccessfulListingFee'
     */
    const VALUE_STORES_SUCCESSFUL_LISTING_FEE = 'StoresSuccessfulListingFee';
    /**
     * Constant for value 'StoresSuccessfulListingFeeCredit'
     * @return string 'StoresSuccessfulListingFeeCredit'
     */
    const VALUE_STORES_SUCCESSFUL_LISTING_FEE_CREDIT = 'StoresSuccessfulListingFeeCredit';
    /**
     * Constant for value 'StoresReferralFee'
     * @return string 'StoresReferralFee'
     */
    const VALUE_STORES_REFERRAL_FEE = 'StoresReferralFee';
    /**
     * Constant for value 'StoresReferralCredit'
     * @return string 'StoresReferralCredit'
     */
    const VALUE_STORES_REFERRAL_CREDIT = 'StoresReferralCredit';
    /**
     * Constant for value 'SubtitleFee'
     * @return string 'SubtitleFee'
     */
    const VALUE_SUBTITLE_FEE = 'SubtitleFee';
    /**
     * Constant for value 'SubtitleFeeCredit'
     * @return string 'SubtitleFeeCredit'
     */
    const VALUE_SUBTITLE_FEE_CREDIT = 'SubtitleFeeCredit';
    /**
     * Constant for value 'eBayStoreInventorySubscriptionCredit'
     * @return string 'eBayStoreInventorySubscriptionCredit'
     */
    const VALUE_E_BAY_STORE_INVENTORY_SUBSCRIPTION_CREDIT = 'eBayStoreInventorySubscriptionCredit';
    /**
     * Constant for value 'AutoPmntReqExempt'
     * @return string 'AutoPmntReqExempt'
     */
    const VALUE_AUTO_PMNT_REQ_EXEMPT = 'AutoPmntReqExempt';
    /**
     * Constant for value 'AutoPmntReqRein'
     * @return string 'AutoPmntReqRein'
     */
    const VALUE_AUTO_PMNT_REQ_REIN = 'AutoPmntReqRein';
    /**
     * Constant for value 'PictureManagerSubscriptionFee'
     * @return string 'PictureManagerSubscriptionFee'
     */
    const VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE = 'PictureManagerSubscriptionFee';
    /**
     * Constant for value 'PictureManagerSubscriptionFeeCredit'
     * @return string 'PictureManagerSubscriptionFeeCredit'
     */
    const VALUE_PICTURE_MANAGER_SUBSCRIPTION_FEE_CREDIT = 'PictureManagerSubscriptionFeeCredit';
    /**
     * Constant for value 'SellerReportsBasicFee'
     * @return string 'SellerReportsBasicFee'
     */
    const VALUE_SELLER_REPORTS_BASIC_FEE = 'SellerReportsBasicFee';
    /**
     * Constant for value 'SellerReportsBasicCredit'
     * @return string 'SellerReportsBasicCredit'
     */
    const VALUE_SELLER_REPORTS_BASIC_CREDIT = 'SellerReportsBasicCredit';
    /**
     * Constant for value 'SellerReportsPlusFee'
     * @return string 'SellerReportsPlusFee'
     */
    const VALUE_SELLER_REPORTS_PLUS_FEE = 'SellerReportsPlusFee';
    /**
     * Constant for value 'SellerReportsPlusCredit'
     * @return string 'SellerReportsPlusCredit'
     */
    const VALUE_SELLER_REPORTS_PLUS_CREDIT = 'SellerReportsPlusCredit';
    /**
     * Constant for value 'PaypalOnFile'
     * @return string 'PaypalOnFile'
     */
    const VALUE_PAYPAL_ON_FILE = 'PaypalOnFile';
    /**
     * Constant for value 'PaypalOnFileByCSR'
     * @return string 'PaypalOnFileByCSR'
     */
    const VALUE_PAYPAL_ON_FILE_BY_CSR = 'PaypalOnFileByCSR';
    /**
     * Constant for value 'PaypalOffFile'
     * @return string 'PaypalOffFile'
     */
    const VALUE_PAYPAL_OFF_FILE = 'PaypalOffFile';
    /**
     * Constant for value 'BorderFee'
     * @return string 'BorderFee'
     */
    const VALUE_BORDER_FEE = 'BorderFee';
    /**
     * Constant for value 'BorderFeeCredit'
     * @return string 'BorderFeeCredit'
     */
    const VALUE_BORDER_FEE_CREDIT = 'BorderFeeCredit';
    /**
     * Constant for value 'FeeSearchableMobileDE'
     * @return string 'FeeSearchableMobileDE'
     */
    const VALUE_FEE_SEARCHABLE_MOBILE_DE = 'FeeSearchableMobileDE';
    /**
     * Constant for value 'SalesReportsPlusFee'
     * @return string 'SalesReportsPlusFee'
     */
    const VALUE_SALES_REPORTS_PLUS_FEE = 'SalesReportsPlusFee';
    /**
     * Constant for value 'SalesReportsPlusCredit'
     * @return string 'SalesReportsPlusCredit'
     */
    const VALUE_SALES_REPORTS_PLUS_CREDIT = 'SalesReportsPlusCredit';
    /**
     * Constant for value 'CreditSearchableMobileDE'
     * @return string 'CreditSearchableMobileDE'
     */
    const VALUE_CREDIT_SEARCHABLE_MOBILE_DE = 'CreditSearchableMobileDE';
    /**
     * Constant for value 'EmailMarketingFee'
     * @return string 'EmailMarketingFee'
     */
    const VALUE_EMAIL_MARKETING_FEE = 'EmailMarketingFee';
    /**
     * Constant for value 'EmailMarketingCredit'
     * @return string 'EmailMarketingCredit'
     */
    const VALUE_EMAIL_MARKETING_CREDIT = 'EmailMarketingCredit';
    /**
     * Constant for value 'FeePictureShow'
     * @return string 'FeePictureShow'
     */
    const VALUE_FEE_PICTURE_SHOW = 'FeePictureShow';
    /**
     * Constant for value 'CreditPictureShow'
     * @return string 'CreditPictureShow'
     */
    const VALUE_CREDIT_PICTURE_SHOW = 'CreditPictureShow';
    /**
     * Constant for value 'ProPackBundleFee'
     * @return string 'ProPackBundleFee'
     */
    const VALUE_PRO_PACK_BUNDLE_FEE = 'ProPackBundleFee';
    /**
     * Constant for value 'ProPackBundleFeeCredit'
     * @return string 'ProPackBundleFeeCredit'
     */
    const VALUE_PRO_PACK_BUNDLE_FEE_CREDIT = 'ProPackBundleFeeCredit';
    /**
     * Constant for value 'BasicUpgradePackBundleFee'
     * @return string 'BasicUpgradePackBundleFee'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE = 'BasicUpgradePackBundleFee';
    /**
     * Constant for value 'BasicUpgradePackBundleFeeCredit'
     * @return string 'BasicUpgradePackBundleFeeCredit'
     */
    const VALUE_BASIC_UPGRADE_PACK_BUNDLE_FEE_CREDIT = 'BasicUpgradePackBundleFeeCredit';
    /**
     * Constant for value 'ValuePackBundleFee'
     * @return string 'ValuePackBundleFee'
     */
    const VALUE_VALUE_PACK_BUNDLE_FEE = 'ValuePackBundleFee';
    /**
     * Constant for value 'ValuePackBundleFeeCredit'
     * @return string 'ValuePackBundleFeeCredit'
     */
    const VALUE_VALUE_PACK_BUNDLE_FEE_CREDIT = 'ValuePackBundleFeeCredit';
    /**
     * Constant for value 'ProPackPlusBundleFee'
     * @return string 'ProPackPlusBundleFee'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE_FEE = 'ProPackPlusBundleFee';
    /**
     * Constant for value 'ProPackPlusBundleFeeCredit'
     * @return string 'ProPackPlusBundleFeeCredit'
     */
    const VALUE_PRO_PACK_PLUS_BUNDLE_FEE_CREDIT = 'ProPackPlusBundleFeeCredit';
    /**
     * Constant for value 'FinalEntry'
     * @return string 'FinalEntry'
     */
    const VALUE_FINAL_ENTRY = 'FinalEntry';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ExtendedDurationFee'
     * @return string 'ExtendedDurationFee'
     */
    const VALUE_EXTENDED_DURATION_FEE = 'ExtendedDurationFee';
    /**
     * Constant for value 'ExtendedDurationFeeCredit'
     * @return string 'ExtendedDurationFeeCredit'
     */
    const VALUE_EXTENDED_DURATION_FEE_CREDIT = 'ExtendedDurationFeeCredit';
    /**
     * Constant for value 'InternationalListingFee'
     * @return string 'InternationalListingFee'
     */
    const VALUE_INTERNATIONAL_LISTING_FEE = 'InternationalListingFee';
    /**
     * Constant for value 'InternationalListingCredit'
     * @return string 'InternationalListingCredit'
     */
    const VALUE_INTERNATIONAL_LISTING_CREDIT = 'InternationalListingCredit';
    /**
     * Constant for value 'MarketplaceResearchExpiredSubscriptionFee'
     * @return string 'MarketplaceResearchExpiredSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE = 'MarketplaceResearchExpiredSubscriptionFee';
    /**
     * Constant for value 'MarketplaceResearchExpiredSubscriptionFeeCredit'
     * @return string 'MarketplaceResearchExpiredSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchExpiredSubscriptionFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchBasicSubscriptionFee'
     * @return string 'MarketplaceResearchBasicSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE = 'MarketplaceResearchBasicSubscriptionFee';
    /**
     * Constant for value 'MarketplaceResearchBasicSubscriptionFeeCredit'
     * @return string 'MarketplaceResearchBasicSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchBasicSubscriptionFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchProSubscriptionFee'
     * @return string 'MarketplaceResearchProSubscriptionFee'
     */
    const VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE = 'MarketplaceResearchProSubscriptionFee';
    /**
     * Constant for value 'BasicBundleFee'
     * @return string 'BasicBundleFee'
     */
    const VALUE_BASIC_BUNDLE_FEE = 'BasicBundleFee';
    /**
     * Constant for value 'BasicBundleFeeCredit'
     * @return string 'BasicBundleFeeCredit'
     */
    const VALUE_BASIC_BUNDLE_FEE_CREDIT = 'BasicBundleFeeCredit';
    /**
     * Constant for value 'MarketplaceResearchProSubscriptionFeeCredit'
     * @return string 'MarketplaceResearchProSubscriptionFeeCredit'
     */
    const VALUE_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchProSubscriptionFeeCredit';
    /**
     * Constant for value 'VehicleLocalSubscriptionFee'
     * @return string 'VehicleLocalSubscriptionFee'
     */
    const VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE = 'VehicleLocalSubscriptionFee';
    /**
     * Constant for value 'VehicleLocalSubscriptionFeeCredit'
     * @return string 'VehicleLocalSubscriptionFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_SUBSCRIPTION_FEE_CREDIT = 'VehicleLocalSubscriptionFeeCredit';
    /**
     * Constant for value 'VehicleLocalInsertionFee'
     * @return string 'VehicleLocalInsertionFee'
     */
    const VALUE_VEHICLE_LOCAL_INSERTION_FEE = 'VehicleLocalInsertionFee';
    /**
     * Constant for value 'VehicleLocalInsertionFeeCredit'
     * @return string 'VehicleLocalInsertionFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_INSERTION_FEE_CREDIT = 'VehicleLocalInsertionFeeCredit';
    /**
     * Constant for value 'VehicleLocalFinalValueFee'
     * @return string 'VehicleLocalFinalValueFee'
     */
    const VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE = 'VehicleLocalFinalValueFee';
    /**
     * Constant for value 'VehicleLocalFinalValueFeeCredit'
     * @return string 'VehicleLocalFinalValueFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_FINAL_VALUE_FEE_CREDIT = 'VehicleLocalFinalValueFeeCredit';
    /**
     * Constant for value 'VehicleLocalGTCFee'
     * @return string 'VehicleLocalGTCFee'
     */
    const VALUE_VEHICLE_LOCAL_GTCFEE = 'VehicleLocalGTCFee';
    /**
     * Constant for value 'VehicleLocalGTCFeeCredit'
     * @return string 'VehicleLocalGTCFeeCredit'
     */
    const VALUE_VEHICLE_LOCAL_GTCFEE_CREDIT = 'VehicleLocalGTCFeeCredit';
    /**
     * Constant for value 'eBayMotorsProFee'
     * @return string 'eBayMotorsProFee'
     */
    const VALUE_E_BAY_MOTORS_PRO_FEE = 'eBayMotorsProFee';
    /**
     * Constant for value 'CrediteBayMotorsProFee'
     * @return string 'CrediteBayMotorsProFee'
     */
    const VALUE_CREDITE_BAY_MOTORS_PRO_FEE = 'CrediteBayMotorsProFee';
    /**
     * Constant for value 'eBayMotorsProFeatureFee'
     * @return string 'eBayMotorsProFeatureFee'
     */
    const VALUE_E_BAY_MOTORS_PRO_FEATURE_FEE = 'eBayMotorsProFeatureFee';
    /**
     * Constant for value 'CrediteBayMotorsProFeatureFee'
     * @return string 'CrediteBayMotorsProFeatureFee'
     */
    const VALUE_CREDITE_BAY_MOTORS_PRO_FEATURE_FEE = 'CrediteBayMotorsProFeatureFee';
    /**
     * Constant for value 'FeeGalleryPlus'
     * @return string 'FeeGalleryPlus'
     */
    const VALUE_FEE_GALLERY_PLUS = 'FeeGalleryPlus';
    /**
     * Constant for value 'CreditGalleryPlus'
     * @return string 'CreditGalleryPlus'
     */
    const VALUE_CREDIT_GALLERY_PLUS = 'CreditGalleryPlus';
    /**
     * Constant for value 'PrivateListing'
     * @return string 'PrivateListing'
     */
    const VALUE_PRIVATE_LISTING = 'PrivateListing';
    /**
     * Constant for value 'CreditPrivateListing'
     * @return string 'CreditPrivateListing'
     */
    const VALUE_CREDIT_PRIVATE_LISTING = 'CreditPrivateListing';
    /**
     * Constant for value 'ImmoProFee'
     * @return string 'ImmoProFee'
     */
    const VALUE_IMMO_PRO_FEE = 'ImmoProFee';
    /**
     * Constant for value 'CreditImmoProFee'
     * @return string 'CreditImmoProFee'
     */
    const VALUE_CREDIT_IMMO_PRO_FEE = 'CreditImmoProFee';
    /**
     * Constant for value 'ImmoProFeatureFee'
     * @return string 'ImmoProFeatureFee'
     */
    const VALUE_IMMO_PRO_FEATURE_FEE = 'ImmoProFeatureFee';
    /**
     * Constant for value 'CreditImmoProFeatureFee'
     * @return string 'CreditImmoProFeatureFee'
     */
    const VALUE_CREDIT_IMMO_PRO_FEATURE_FEE = 'CreditImmoProFeatureFee';
    /**
     * Constant for value 'RealEstateProFee'
     * @return string 'RealEstateProFee'
     */
    const VALUE_REAL_ESTATE_PRO_FEE = 'RealEstateProFee';
    /**
     * Constant for value 'CreditRealEstateProFee'
     * @return string 'CreditRealEstateProFee'
     */
    const VALUE_CREDIT_REAL_ESTATE_PRO_FEE = 'CreditRealEstateProFee';
    /**
     * Constant for value 'RealEstateProFeatureFee'
     * @return string 'RealEstateProFeatureFee'
     */
    const VALUE_REAL_ESTATE_PRO_FEATURE_FEE = 'RealEstateProFeatureFee';
    /**
     * Constant for value 'CreditRealEstateProFeatureFee'
     * @return string 'CreditRealEstateProFeatureFee'
     */
    const VALUE_CREDIT_REAL_ESTATE_PRO_FEATURE_FEE = 'CreditRealEstateProFeatureFee';
    /**
     * Constant for value 'Discount'
     * @return string 'Discount'
     */
    const VALUE_DISCOUNT = 'Discount';
    /**
     * Constant for value 'CreditFinalValueShipping'
     * @return string 'CreditFinalValueShipping'
     */
    const VALUE_CREDIT_FINAL_VALUE_SHIPPING = 'CreditFinalValueShipping';
    /**
     * Constant for value 'FeeFinalValueShipping'
     * @return string 'FeeFinalValueShipping'
     */
    const VALUE_FEE_FINAL_VALUE_SHIPPING = 'FeeFinalValueShipping';
    /**
     * Constant for value 'FeeReturnShipping'
     * @return string 'FeeReturnShipping'
     */
    const VALUE_FEE_RETURN_SHIPPING = 'FeeReturnShipping';
    /**
     * Constant for value 'CreditReturnShipping'
     * @return string 'CreditReturnShipping'
     */
    const VALUE_CREDIT_RETURN_SHIPPING = 'CreditReturnShipping';
    /**
     * Constant for value 'FeeGlobalShippingProgram'
     * @return string 'FeeGlobalShippingProgram'
     */
    const VALUE_FEE_GLOBAL_SHIPPING_PROGRAM = 'FeeGlobalShippingProgram';
    /**
     * Constant for value 'CreditGlobalShippingProgram'
     * @return string 'CreditGlobalShippingProgram'
     */
    const VALUE_CREDIT_GLOBAL_SHIPPING_PROGRAM = 'CreditGlobalShippingProgram';
    /**
     * Constant for value 'FeeAuctionEndEarly'
     * @return string 'FeeAuctionEndEarly'
     */
    const VALUE_FEE_AUCTION_END_EARLY = 'FeeAuctionEndEarly';
    /**
     * Constant for value 'CreditAuctionEndEarly'
     * @return string 'CreditAuctionEndEarly'
     */
    const VALUE_CREDIT_AUCTION_END_EARLY = 'CreditAuctionEndEarly';
    /**
     * Constant for value 'FeeFedExShippingLabel'
     * @return string 'FeeFedExShippingLabel'
     */
    const VALUE_FEE_FED_EX_SHIPPING_LABEL = 'FeeFedExShippingLabel';
    /**
     * Constant for value 'CreditFedExShippingLabel'
     * @return string 'CreditFedExShippingLabel'
     */
    const VALUE_CREDIT_FED_EX_SHIPPING_LABEL = 'CreditFedExShippingLabel';
    /**
     * Constant for value 'FeeReturnRefund'
     * @return string 'FeeReturnRefund'
     */
    const VALUE_FEE_RETURN_REFUND = 'FeeReturnRefund';
    /**
     * Constant for value 'CreditReturnRefund'
     * @return string 'CreditReturnRefund'
     */
    const VALUE_CREDIT_RETURN_REFUND = 'CreditReturnRefund';
    /**
     * Constant for value 'FeeStoresSubscriptionEarlyTermination'
     * @return string 'FeeStoresSubscriptionEarlyTermination'
     */
    const VALUE_FEE_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'FeeStoresSubscriptionEarlyTermination';
    /**
     * Constant for value 'CreditStoresSubscriptionEarlyTermination'
     * @return string 'CreditStoresSubscriptionEarlyTermination'
     */
    const VALUE_CREDIT_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'CreditStoresSubscriptionEarlyTermination';
    /**
     * Constant for value 'FeeVehicleSubscriptionEarlyTermination'
     * @return string 'FeeVehicleSubscriptionEarlyTermination'
     */
    const VALUE_FEE_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'FeeVehicleSubscriptionEarlyTermination';
    /**
     * Constant for value 'CreditVehicleSubscriptionEarlyTermination'
     * @return string 'CreditVehicleSubscriptionEarlyTermination'
     */
    const VALUE_CREDIT_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'CreditVehicleSubscriptionEarlyTermination';
    /**
     * Constant for value 'FeeVehicleSubscription'
     * @return string 'FeeVehicleSubscription'
     */
    const VALUE_FEE_VEHICLE_SUBSCRIPTION = 'FeeVehicleSubscription';
    /**
     * Constant for value 'CreditVehicleSubscription'
     * @return string 'CreditVehicleSubscription'
     */
    const VALUE_CREDIT_VEHICLE_SUBSCRIPTION = 'CreditVehicleSubscription';
    /**
     * Constant for value 'FeeAUPostShippingLabel'
     * @return string 'FeeAUPostShippingLabel'
     */
    const VALUE_FEE_AUPOST_SHIPPING_LABEL = 'FeeAUPostShippingLabel';
    /**
     * Constant for value 'CreditAUPostShippingLabel'
     * @return string 'CreditAUPostShippingLabel'
     */
    const VALUE_CREDIT_AUPOST_SHIPPING_LABEL = 'CreditAUPostShippingLabel';
    /**
     * Constant for value 'FeeAPACFedExShippingLabel'
     * @return string 'FeeAPACFedExShippingLabel'
     */
    const VALUE_FEE_APACFED_EX_SHIPPING_LABEL = 'FeeAPACFedExShippingLabel';
    /**
     * Constant for value 'CreditAPACFedExShippingLabel'
     * @return string 'CreditAPACFedExShippingLabel'
     */
    const VALUE_CREDIT_APACFED_EX_SHIPPING_LABEL = 'CreditAPACFedExShippingLabel';
    /**
     * Constant for value 'FeeAPACTNTShippingLabel'
     * @return string 'FeeAPACTNTShippingLabel'
     */
    const VALUE_FEE_APACTNTSHIPPING_LABEL = 'FeeAPACTNTShippingLabel';
    /**
     * Constant for value 'CreditAPACTNTShippingLabel'
     * @return string 'CreditAPACTNTShippingLabel'
     */
    const VALUE_CREDIT_APACTNTSHIPPING_LABEL = 'CreditAPACTNTShippingLabel';
    /**
     * Constant for value 'FeeEBPReimbursement'
     * @return string 'FeeEBPReimbursement'
     */
    const VALUE_FEE_EBPREIMBURSEMENT = 'FeeEBPReimbursement';
    /**
     * Constant for value 'CreditEBPReimbursement'
     * @return string 'CreditEBPReimbursement'
     */
    const VALUE_CREDIT_EBPREIMBURSEMENT = 'CreditEBPReimbursement';
    /**
     * Constant for value 'FeePromotedListingFeature'
     * @return string 'FeePromotedListingFeature'
     */
    const VALUE_FEE_PROMOTED_LISTING_FEATURE = 'FeePromotedListingFeature';
    /**
     * Constant for value 'CreditPromotedListingFeature'
     * @return string 'CreditPromotedListingFeature'
     */
    const VALUE_CREDIT_PROMOTED_LISTING_FEATURE = 'CreditPromotedListingFeature';
    /**
     * Constant for value 'FeeAd'
     * @return string 'FeeAd'
     */
    const VALUE_FEE_AD = 'FeeAd';
    /**
     * Constant for value 'CreditAd'
     * @return string 'CreditAd'
     */
    const VALUE_CREDIT_AD = 'CreditAd';
    /**
     * Constant for value 'FeeUBIShippingLabel'
     * @return string 'FeeUBIShippingLabel'
     */
    const VALUE_FEE_UBISHIPPING_LABEL = 'FeeUBIShippingLabel';
    /**
     * Constant for value 'CreditUBIShippingLabel'
     * @return string 'CreditUBIShippingLabel'
     */
    const VALUE_CREDIT_UBISHIPPING_LABEL = 'CreditUBIShippingLabel';
    /**
     * Constant for value 'FeeeBayPlusSubscription'
     * @return string 'FeeeBayPlusSubscription'
     */
    const VALUE_FEEE_BAY_PLUS_SUBSCRIPTION = 'FeeeBayPlusSubscription';
    /**
     * Constant for value 'CrediteBayPlusSubscription'
     * @return string 'CrediteBayPlusSubscription'
     */
    const VALUE_CREDITE_BAY_PLUS_SUBSCRIPTION = 'CrediteBayPlusSubscription';
    /**
     * Constant for value 'PaymentIntermediationFee'
     * @return string 'PaymentIntermediationFee'
     */
    const VALUE_PAYMENT_INTERMEDIATION_FEE = 'PaymentIntermediationFee';
    /**
     * Constant for value 'FeePaymentIntermediationRVI'
     * @return string 'FeePaymentIntermediationRVI'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_RVI = 'FeePaymentIntermediationRVI';
    /**
     * Constant for value 'FeePaymentIntermediationChargeback'
     * @return string 'FeePaymentIntermediationChargeback'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK = 'FeePaymentIntermediationChargeback';
    /**
     * Constant for value 'FeePaymentIntermediationChargebackRVI'
     * @return string 'FeePaymentIntermediationChargebackRVI'
     */
    const VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI = 'FeePaymentIntermediationChargebackRVI';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_RVI
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK
     * @uses self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
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
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_RVI,
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK,
            self::VALUE_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI,
        );
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
