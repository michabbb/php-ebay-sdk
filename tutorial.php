<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://developer.ebay.com/webservices/latest/ebaysvc.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://developer.ebay.com/webservices/latest/ebaysvc.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Add ServiceType
 */
$add = new \ServiceType\Add($options);
$add->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for AddDispute operation/method
 */
if ($add->AddDispute(new \StructType\AddDisputeRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddDisputeResponse operation/method
 */
if ($add->AddDisputeResponse(new \StructType\AddDisputeResponseRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddFixedPriceItem operation/method
 */
if ($add->AddFixedPriceItem(new \StructType\AddFixedPriceItemRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddItem operation/method
 */
if ($add->AddItem(new \StructType\AddItemRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddItemFromSellingManagerTemplate operation/method
 */
if ($add->AddItemFromSellingManagerTemplate(new \StructType\AddItemFromSellingManagerTemplateRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddItems operation/method
 */
if ($add->AddItems(new \StructType\AddItemsRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddMemberMessageAAQToPartner operation/method
 */
if ($add->AddMemberMessageAAQToPartner(new \StructType\AddMemberMessageAAQToPartnerRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddMemberMessageRTQ operation/method
 */
if ($add->AddMemberMessageRTQ(new \StructType\AddMemberMessageRTQRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddMemberMessagesAAQToBidder operation/method
 */
if ($add->AddMemberMessagesAAQToBidder(new \StructType\AddMemberMessagesAAQToBidderRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddOrder operation/method
 */
if ($add->AddOrder(new \StructType\AddOrderRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddSecondChanceItem operation/method
 */
if ($add->AddSecondChanceItem(new \StructType\AddSecondChanceItemRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddSellingManagerInventoryFolder operation/method
 */
if ($add->AddSellingManagerInventoryFolder(new \StructType\AddSellingManagerInventoryFolderRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddSellingManagerProduct operation/method
 */
if ($add->AddSellingManagerProduct(new \StructType\AddSellingManagerProductRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddSellingManagerTemplate operation/method
 */
if ($add->AddSellingManagerTemplate(new \StructType\AddSellingManagerTemplateRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddToItemDescription operation/method
 */
if ($add->AddToItemDescription(new \StructType\AddToItemDescriptionRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddToWatchList operation/method
 */
if ($add->AddToWatchList(new \StructType\AddToWatchListRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddTransactionConfirmationItem operation/method
 */
if ($add->AddTransactionConfirmationItem(new \StructType\AddTransactionConfirmationItemRequestType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Complete ServiceType
 */
$complete = new \ServiceType\Complete($options);
$complete->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for CompleteSale operation/method
 */
if ($complete->CompleteSale(new \StructType\CompleteSaleRequestType()) !== false) {
    print_r($complete->getResult());
} else {
    print_r($complete->getLastError());
}
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \ServiceType\Confirm($options);
$confirm->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ConfirmIdentity operation/method
 */
if ($confirm->ConfirmIdentity(new \StructType\ConfirmIdentityRequestType()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\Delete($options);
$delete->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for DeleteMyMessages operation/method
 */
if ($delete->DeleteMyMessages(new \StructType\DeleteMyMessagesRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSellingManagerInventoryFolder operation/method
 */
if ($delete->DeleteSellingManagerInventoryFolder(new \StructType\DeleteSellingManagerInventoryFolderRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSellingManagerItemAutomationRule operation/method
 */
if ($delete->DeleteSellingManagerItemAutomationRule(new \StructType\DeleteSellingManagerItemAutomationRuleRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSellingManagerProduct operation/method
 */
if ($delete->DeleteSellingManagerProduct(new \StructType\DeleteSellingManagerProductRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSellingManagerTemplate operation/method
 */
if ($delete->DeleteSellingManagerTemplate(new \StructType\DeleteSellingManagerTemplateRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSellingManagerTemplateAutomationRule operation/method
 */
if ($delete->DeleteSellingManagerTemplateAutomationRule(new \StructType\DeleteSellingManagerTemplateAutomationRuleRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Disable ServiceType
 */
$disable = new \ServiceType\Disable($options);
$disable->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for DisableUnpaidItemAssistance operation/method
 */
if ($disable->DisableUnpaidItemAssistance(new \StructType\DisableUnpaidItemAssistanceRequestType()) !== false) {
    print_r($disable->getResult());
} else {
    print_r($disable->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \ServiceType\End($options);
$end->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for EndFixedPriceItem operation/method
 */
if ($end->EndFixedPriceItem(new \StructType\EndFixedPriceItemRequestType()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Sample call for EndItem operation/method
 */
if ($end->EndItem(new \StructType\EndItemRequestType()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Sample call for EndItems operation/method
 */
if ($end->EndItems(new \StructType\EndItemsRequestType()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for Extend ServiceType
 */
$extend = new \ServiceType\Extend($options);
$extend->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ExtendSiteHostedPictures operation/method
 */
if ($extend->ExtendSiteHostedPictures(new \StructType\ExtendSiteHostedPicturesRequestType()) !== false) {
    print_r($extend->getResult());
} else {
    print_r($extend->getLastError());
}
/**
 * Samples for Fetch ServiceType
 */
$fetch = new \ServiceType\Fetch($options);
$fetch->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for FetchToken operation/method
 */
if ($fetch->FetchToken(new \StructType\FetchTokenRequestType()) !== false) {
    print_r($fetch->getResult());
} else {
    print_r($fetch->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for GetAccount operation/method
 */
if ($get->GetAccount(new \StructType\GetAccountRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAdFormatLeads operation/method
 */
if ($get->GetAdFormatLeads(new \StructType\GetAdFormatLeadsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllBidders operation/method
 */
if ($get->GetAllBidders(new \StructType\GetAllBiddersRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetApiAccessRules operation/method
 */
if ($get->GetApiAccessRules(new \StructType\GetApiAccessRulesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBestOffers operation/method
 */
if ($get->GetBestOffers(new \StructType\GetBestOffersRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBidderList operation/method
 */
if ($get->GetBidderList(new \StructType\GetBidderListRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCategories operation/method
 */
if ($get->GetCategories(new \StructType\GetCategoriesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCategoryFeatures operation/method
 */
if ($get->GetCategoryFeatures(new \StructType\GetCategoryFeaturesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCategoryMappings operation/method
 */
if ($get->GetCategoryMappings(new \StructType\GetCategoryMappingsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCategorySpecifics operation/method
 */
if ($get->GetCategorySpecifics(new \StructType\GetCategorySpecificsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetChallengeToken operation/method
 */
if ($get->GetChallengeToken(new \StructType\GetChallengeTokenRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCharities operation/method
 */
if ($get->GetCharities(new \StructType\GetCharitiesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetClientAlertsAuthToken operation/method
 */
if ($get->GetClientAlertsAuthToken(new \StructType\GetClientAlertsAuthTokenRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContextualKeywords operation/method
 */
if ($get->GetContextualKeywords(new \StructType\GetContextualKeywordsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDescriptionTemplates operation/method
 */
if ($get->GetDescriptionTemplates(new \StructType\GetDescriptionTemplatesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDispute operation/method
 */
if ($get->GetDispute(new \StructType\GetDisputeRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFeedback operation/method
 */
if ($get->GetFeedback(new \StructType\GetFeedbackRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItem operation/method
 */
if ($get->GetItem(new \StructType\GetItemRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemShipping operation/method
 */
if ($get->GetItemShipping(new \StructType\GetItemShippingRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemTransactions operation/method
 */
if ($get->GetItemTransactions(new \StructType\GetItemTransactionsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemsAwaitingFeedback operation/method
 */
if ($get->GetItemsAwaitingFeedback(new \StructType\GetItemsAwaitingFeedbackRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMemberMessages operation/method
 */
if ($get->GetMemberMessages(new \StructType\GetMemberMessagesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessagePreferences operation/method
 */
if ($get->GetMessagePreferences(new \StructType\GetMessagePreferencesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMyMessages operation/method
 */
if ($get->GetMyMessages(new \StructType\GetMyMessagesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMyeBayBuying operation/method
 */
if ($get->GetMyeBayBuying(new \StructType\GetMyeBayBuyingRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMyeBayReminders operation/method
 */
if ($get->GetMyeBayReminders(new \StructType\GetMyeBayRemindersRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMyeBaySelling operation/method
 */
if ($get->GetMyeBaySelling(new \StructType\GetMyeBaySellingRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNotificationPreferences operation/method
 */
if ($get->GetNotificationPreferences(new \StructType\GetNotificationPreferencesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNotificationsUsage operation/method
 */
if ($get->GetNotificationsUsage(new \StructType\GetNotificationsUsageRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrderTransactions operation/method
 */
if ($get->GetOrderTransactions(new \StructType\GetOrderTransactionsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrders operation/method
 */
if ($get->GetOrders(new \StructType\GetOrdersRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPromotionalSaleDetails operation/method
 */
if ($get->GetPromotionalSaleDetails(new \StructType\GetPromotionalSaleDetailsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerDashboard operation/method
 */
if ($get->GetSellerDashboard(new \StructType\GetSellerDashboardRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerEvents operation/method
 */
if ($get->GetSellerEvents(new \StructType\GetSellerEventsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerList operation/method
 */
if ($get->GetSellerList(new \StructType\GetSellerListRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellerTransactions operation/method
 */
if ($get->GetSellerTransactions(new \StructType\GetSellerTransactionsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerAlerts operation/method
 */
if ($get->GetSellingManagerAlerts(new \StructType\GetSellingManagerAlertsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerEmailLog operation/method
 */
if ($get->GetSellingManagerEmailLog(new \StructType\GetSellingManagerEmailLogRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerInventory operation/method
 */
if ($get->GetSellingManagerInventory(new \StructType\GetSellingManagerInventoryRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerInventoryFolder operation/method
 */
if ($get->GetSellingManagerInventoryFolder(new \StructType\GetSellingManagerInventoryFolderRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerItemAutomationRule operation/method
 */
if ($get->GetSellingManagerItemAutomationRule(new \StructType\GetSellingManagerItemAutomationRuleRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerSaleRecord operation/method
 */
if ($get->GetSellingManagerSaleRecord(new \StructType\GetSellingManagerSaleRecordRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerSoldListings operation/method
 */
if ($get->GetSellingManagerSoldListings(new \StructType\GetSellingManagerSoldListingsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerTemplateAutomationRule operation/method
 */
if ($get->GetSellingManagerTemplateAutomationRule(new \StructType\GetSellingManagerTemplateAutomationRuleRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSellingManagerTemplates operation/method
 */
if ($get->GetSellingManagerTemplates(new \StructType\GetSellingManagerTemplatesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSessionID operation/method
 */
if ($get->GetSessionID(new \StructType\GetSessionIDRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShippingDiscountProfiles operation/method
 */
if ($get->GetShippingDiscountProfiles(new \StructType\GetShippingDiscountProfilesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStore operation/method
 */
if ($get->GetStore(new \StructType\GetStoreRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStoreCategoryUpdateStatus operation/method
 */
if ($get->GetStoreCategoryUpdateStatus(new \StructType\GetStoreCategoryUpdateStatusRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStoreCustomPage operation/method
 */
if ($get->GetStoreCustomPage(new \StructType\GetStoreCustomPageRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStoreOptions operation/method
 */
if ($get->GetStoreOptions(new \StructType\GetStoreOptionsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStorePreferences operation/method
 */
if ($get->GetStorePreferences(new \StructType\GetStorePreferencesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSuggestedCategories operation/method
 */
if ($get->GetSuggestedCategories(new \StructType\GetSuggestedCategoriesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTaxTable operation/method
 */
if ($get->GetTaxTable(new \StructType\GetTaxTableRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTokenStatus operation/method
 */
if ($get->GetTokenStatus(new \StructType\GetTokenStatusRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUser operation/method
 */
if ($get->GetUser(new \StructType\GetUserRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserContactDetails operation/method
 */
if ($get->GetUserContactDetails(new \StructType\GetUserContactDetailsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserDisputes operation/method
 */
if ($get->GetUserDisputes(new \StructType\GetUserDisputesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserPreferences operation/method
 */
if ($get->GetUserPreferences(new \StructType\GetUserPreferencesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetVeROReasonCodeDetails operation/method
 */
if ($get->GetVeROReasonCodeDetails(new \StructType\GetVeROReasonCodeDetailsRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetVeROReportStatus operation/method
 */
if ($get->GetVeROReportStatus(new \StructType\GetVeROReportStatusRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Gete ServiceType
 */
$gete = new \ServiceType\Gete($options);
$gete->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for GeteBayDetails operation/method
 */
if ($gete->GeteBayDetails(new \StructType\GeteBayDetailsRequestType()) !== false) {
    print_r($gete->getResult());
} else {
    print_r($gete->getLastError());
}
/**
 * Sample call for GeteBayOfficialTime operation/method
 */
if ($gete->GeteBayOfficialTime(new \StructType\GeteBayOfficialTimeRequestType()) !== false) {
    print_r($gete->getResult());
} else {
    print_r($gete->getLastError());
}
/**
 * Samples for Leave ServiceType
 */
$leave = new \ServiceType\Leave($options);
$leave->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for LeaveFeedback operation/method
 */
if ($leave->LeaveFeedback(new \StructType\LeaveFeedbackRequestType()) !== false) {
    print_r($leave->getResult());
} else {
    print_r($leave->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \ServiceType\Move($options);
$move->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for MoveSellingManagerInventoryFolder operation/method
 */
if ($move->MoveSellingManagerInventoryFolder(new \StructType\MoveSellingManagerInventoryFolderRequestType()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Place ServiceType
 */
$place = new \ServiceType\Place($options);
$place->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for PlaceOffer operation/method
 */
if ($place->PlaceOffer(new \StructType\PlaceOfferRequestType()) !== false) {
    print_r($place->getResult());
} else {
    print_r($place->getLastError());
}
/**
 * Samples for Relist ServiceType
 */
$relist = new \ServiceType\Relist($options);
$relist->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for RelistFixedPriceItem operation/method
 */
if ($relist->RelistFixedPriceItem(new \StructType\RelistFixedPriceItemRequestType()) !== false) {
    print_r($relist->getResult());
} else {
    print_r($relist->getLastError());
}
/**
 * Sample call for RelistItem operation/method
 */
if ($relist->RelistItem(new \StructType\RelistItemRequestType()) !== false) {
    print_r($relist->getResult());
} else {
    print_r($relist->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \ServiceType\Remove($options);
$remove->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for RemoveFromWatchList operation/method
 */
if ($remove->RemoveFromWatchList(new \StructType\RemoveFromWatchListRequestType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Respond ServiceType
 */
$respond = new \ServiceType\Respond($options);
$respond->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for RespondToBestOffer operation/method
 */
if ($respond->RespondToBestOffer(new \StructType\RespondToBestOfferRequestType()) !== false) {
    print_r($respond->getResult());
} else {
    print_r($respond->getLastError());
}
/**
 * Sample call for RespondToFeedback operation/method
 */
if ($respond->RespondToFeedback(new \StructType\RespondToFeedbackRequestType()) !== false) {
    print_r($respond->getResult());
} else {
    print_r($respond->getLastError());
}
/**
 * Samples for Revise ServiceType
 */
$revise = new \ServiceType\Revise($options);
$revise->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ReviseCheckoutStatus operation/method
 */
if ($revise->ReviseCheckoutStatus(new \StructType\ReviseCheckoutStatusRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseFixedPriceItem operation/method
 */
if ($revise->ReviseFixedPriceItem(new \StructType\ReviseFixedPriceItemRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseInventoryStatus operation/method
 */
if ($revise->ReviseInventoryStatus(new \StructType\ReviseInventoryStatusRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseItem operation/method
 */
if ($revise->ReviseItem(new \StructType\ReviseItemRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseMyMessages operation/method
 */
if ($revise->ReviseMyMessages(new \StructType\ReviseMyMessagesRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseMyMessagesFolders operation/method
 */
if ($revise->ReviseMyMessagesFolders(new \StructType\ReviseMyMessagesFoldersRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseSellingManagerInventoryFolder operation/method
 */
if ($revise->ReviseSellingManagerInventoryFolder(new \StructType\ReviseSellingManagerInventoryFolderRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseSellingManagerProduct operation/method
 */
if ($revise->ReviseSellingManagerProduct(new \StructType\ReviseSellingManagerProductRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseSellingManagerSaleRecord operation/method
 */
if ($revise->ReviseSellingManagerSaleRecord(new \StructType\ReviseSellingManagerSaleRecordRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Sample call for ReviseSellingManagerTemplate operation/method
 */
if ($revise->ReviseSellingManagerTemplate(new \StructType\ReviseSellingManagerTemplateRequestType()) !== false) {
    print_r($revise->getResult());
} else {
    print_r($revise->getLastError());
}
/**
 * Samples for Revoke ServiceType
 */
$revoke = new \ServiceType\Revoke($options);
$revoke->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for RevokeToken operation/method
 */
if ($revoke->RevokeToken(new \StructType\RevokeTokenRequestType()) !== false) {
    print_r($revoke->getResult());
} else {
    print_r($revoke->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \ServiceType\Save($options);
$save->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for SaveItemToSellingManagerTemplate operation/method
 */
if ($save->SaveItemToSellingManagerTemplate(new \StructType\SaveItemToSellingManagerTemplateRequestType()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Seller ServiceType
 */
$seller = new \ServiceType\Seller($options);
$seller->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for SellerReverseDispute operation/method
 */
if ($seller->SellerReverseDispute(new \StructType\SellerReverseDisputeRequestType()) !== false) {
    print_r($seller->getResult());
} else {
    print_r($seller->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
$send->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for SendInvoice operation/method
 */
if ($send->SendInvoice(new \StructType\SendInvoiceRequestType()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
$set->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for SetMessagePreferences operation/method
 */
if ($set->SetMessagePreferences(new \StructType\SetMessagePreferencesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetNotificationPreferences operation/method
 */
if ($set->SetNotificationPreferences(new \StructType\SetNotificationPreferencesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetPromotionalSale operation/method
 */
if ($set->SetPromotionalSale(new \StructType\SetPromotionalSaleRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetPromotionalSaleListings operation/method
 */
if ($set->SetPromotionalSaleListings(new \StructType\SetPromotionalSaleListingsRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSellingManagerFeedbackOptions operation/method
 */
if ($set->SetSellingManagerFeedbackOptions(new \StructType\SetSellingManagerFeedbackOptionsRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSellingManagerItemAutomationRule operation/method
 */
if ($set->SetSellingManagerItemAutomationRule(new \StructType\SetSellingManagerItemAutomationRuleRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSellingManagerTemplateAutomationRule operation/method
 */
if ($set->SetSellingManagerTemplateAutomationRule(new \StructType\SetSellingManagerTemplateAutomationRuleRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetShippingDiscountProfiles operation/method
 */
if ($set->SetShippingDiscountProfiles(new \StructType\SetShippingDiscountProfilesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetStore operation/method
 */
if ($set->SetStore(new \StructType\SetStoreRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetStoreCategories operation/method
 */
if ($set->SetStoreCategories(new \StructType\SetStoreCategoriesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetStoreCustomPage operation/method
 */
if ($set->SetStoreCustomPage(new \StructType\SetStoreCustomPageRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetStorePreferences operation/method
 */
if ($set->SetStorePreferences(new \StructType\SetStorePreferencesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetTaxTable operation/method
 */
if ($set->SetTaxTable(new \StructType\SetTaxTableRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetUserNotes operation/method
 */
if ($set->SetUserNotes(new \StructType\SetUserNotesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetUserPreferences operation/method
 */
if ($set->SetUserPreferences(new \StructType\SetUserPreferencesRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \ServiceType\Upload($options);
$upload->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for UploadSiteHostedPictures operation/method
 */
if ($upload->UploadSiteHostedPictures(new \StructType\UploadSiteHostedPicturesRequestType()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \ServiceType\Validate($options);
$validate->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for ValidateChallengeInput operation/method
 */
if ($validate->ValidateChallengeInput(new \StructType\ValidateChallengeInputRequestType()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for ValidateTestUserRegistration operation/method
 */
if ($validate->ValidateTestUserRegistration(new \StructType\ValidateTestUserRegistrationRequestType()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Ve ServiceType
 */
$ve = new \ServiceType\Ve($options);
$ve->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for VeROReportItems operation/method
 */
if ($ve->VeROReportItems(new \StructType\VeROReportItemsRequestType()) !== false) {
    print_r($ve->getResult());
} else {
    print_r($ve->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \ServiceType\Verify($options);
$verify->setSoapHeaderRequesterCredentials($RequesterCredentials);
/**
 * Sample call for VerifyAddFixedPriceItem operation/method
 */
if ($verify->VerifyAddFixedPriceItem(new \StructType\VerifyAddFixedPriceItemRequestType()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Sample call for VerifyAddItem operation/method
 */
if ($verify->VerifyAddItem(new \StructType\VerifyAddItemRequestType()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Sample call for VerifyAddSecondChanceItem operation/method
 */
if ($verify->VerifyAddSecondChanceItem(new \StructType\VerifyAddSecondChanceItemRequestType()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Sample call for VerifyRelistItem operation/method
 */
if ($verify->VerifyRelistItem(new \StructType\VerifyRelistItemRequestType()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
