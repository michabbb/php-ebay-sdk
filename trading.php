<?php

namespace macropage\ebaysdk\trading;


use macropage\ebaysdk\base\base;
use macropage\ebaysdk\trading\ClassMap as ClassMapTradingService;
use macropage\ebaysdk\trading\ServiceType as EbayTradingSerice;
use macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType;
use macropage\ebaysdk\trading\StructType\UserIdPasswordType;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as AbstractSoapClientBaseAlias;

/**
 * Class tradingservice
 * @package macropage\sdk_ebay_soap
 *
 * @method AddDispute(\macropage\ebaysdk\trading\StructType\AddDisputeRequestType $addDisputeRequest)
 * @method AddDisputeResponse(\macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest)
 * @method AddFixedPriceItem(\macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
 * @method AddItem(\macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest)
 * @method AddItemFromSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType $addItemFromSellingManagerTemplateRequest)
 * @method AddItems(\macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest)
 * @method AddMemberMessageAAQToPartner(\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest)
 * @method AddMemberMessageRTQ(\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest)
 * @method AddMemberMessagesAAQToBidder(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest)
 * @method AddOrder(\macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest)
 * @method AddSecondChanceItem(\macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest)
 * @method AddSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType $addSellingManagerInventoryFolderRequest)
 * @method AddSellingManagerProduct(\macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType $addSellingManagerProductRequest)
 * @method AddSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType $addSellingManagerTemplateRequest)
 * @method AddToItemDescription(\macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest)
 * @method AddToWatchList(\macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest)
 * @method AddTransactionConfirmationItem(\macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest)
 * @method CompleteSale(\macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest)
 * @method ConfirmIdentity(\macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest)
 * @method DeleteMyMessages(\macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest)
 * @method DeleteSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderRequestType $deleteSellingManagerInventoryFolderRequest)
 * @method DeleteSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType $deleteSellingManagerItemAutomationRuleRequest)
 * @method DeleteSellingManagerProduct(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductRequestType $deleteSellingManagerProductRequest)
 * @method DeleteSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateRequestType $deleteSellingManagerTemplateRequest)
 * @method DeleteSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType $deleteSellingManagerTemplateAutomationRuleRequest)
 * @method DisableUnpaidItemAssistance(\macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceRequestType $disableUnpaidItemAssistanceRequest)
 * @method EndFixedPriceItem(\macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
 * @method EndItem(\macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest)
 * @method EndItems(\macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest)
 * @method ExtendSiteHostedPictures(\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest)
 * @method FetchToken(\macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest)
 * @method GetAccount(\macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest)
 * @method GetAdFormatLeads(\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest)
 * @method GetAllBidders(\macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest)
 * @method GetApiAccessRules(\macropage\ebaysdk\trading\StructType\GetApiAccessRulesRequestType $getApiAccessRulesRequest)
 * @method GetBestOffers(\macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest)
 * @method GetBidderList(\macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest)
 * @method GetCategories(\macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest)
 * @method GetCategoryFeatures(\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest)
 * @method GetCategoryMappings(\macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest)
 * @method GetCategorySpecifics(\macropage\ebaysdk\trading\StructType\GetCategorySpecificsRequestType $getCategorySpecificsRequest)
 * @method GetChallengeToken(\macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest)
 * @method GetCharities(\macropage\ebaysdk\trading\StructType\GetCharitiesRequestType $getCharitiesRequest)
 * @method GetClientAlertsAuthToken(\macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest)
 * @method GetContextualKeywords(\macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType $getContextualKeywordsRequest)
 * @method GetDescriptionTemplates(\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest)
 * @method GetDispute(\macropage\ebaysdk\trading\StructType\GetDisputeRequestType $getDisputeRequest)
 * @method GetFeedback(\macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest)
 * @method GetItem(\macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest)
 * @method GetItemShipping(\macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest)
 * @method GetItemTransactions(\macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest)
 * @method GetItemsAwaitingFeedback(\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest)
 * @method GetMemberMessages(\macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest)
 * @method GetMessagePreferences(\macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest)
 * @method GetMyMessages(\macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest)
 * @method GetMyeBayBuying(\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest)
 * @method GetMyeBayReminders(\macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest)
 * @method GetMyeBaySelling(\macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest)
 * @method GetNotificationPreferences(\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest)
 * @method GetNotificationsUsage(\macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest)
 * @method GetOrderTransactions(\macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest)
 * @method GetOrders(\macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest)
 * @method GetPromotionalSaleDetails(\macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType $getPromotionalSaleDetailsRequest)
 * @method GetSellerDashboard(\macropage\ebaysdk\trading\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest)
 * @method GetSellerEvents(\macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest)
 * @method GetSellerList(\macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest)
 * @method GetSellerTransactions(\macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest)
 * @method GetSellingManagerAlerts(\macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsRequestType $getSellingManagerAlertsRequest)
 * @method GetSellingManagerEmailLog(\macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType $getSellingManagerEmailLogRequest)
 * @method GetSellingManagerInventory(\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryRequestType $getSellingManagerInventoryRequest)
 * @method GetSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType $getSellingManagerInventoryFolderRequest)
 * @method GetSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleRequestType $getSellingManagerItemAutomationRuleRequest)
 * @method GetSellingManagerSaleRecord(\macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType $getSellingManagerSaleRecordRequest)
 * @method GetSellingManagerSoldListings(\macropage\ebaysdk\trading\StructType\GetSellingManagerSoldListingsRequestType $getSellingManagerSoldListingsRequest)
 * @method GetSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleRequestType $getSellingManagerTemplateAutomationRuleRequest)
 * @method GetSellingManagerTemplates(\macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType $getSellingManagerTemplatesRequest)
 * @method GetSessionID(\macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest)
 * @method GetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest)
 * @method GetStore(\macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest)
 * @method GetStoreCategoryUpdateStatus(\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest)
 * @method GetStoreCustomPage(\macropage\ebaysdk\trading\StructType\GetStoreCustomPageRequestType $getStoreCustomPageRequest)
 * @method GetStoreOptions(\macropage\ebaysdk\trading\StructType\GetStoreOptionsRequestType $getStoreOptionsRequest)
 * @method GetStorePreferences(\macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType $getStorePreferencesRequest)
 * @method GetSuggestedCategories(\macropage\ebaysdk\trading\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest)
 * @method GetTaxTable(\macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest)
 * @method GetTokenStatus(\macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest)
 * @method GetUser(\macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest)
 * @method GetUserContactDetails(\macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest)
 * @method GetUserDisputes(\macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType $getUserDisputesRequest)
 * @method GetUserPreferences(\macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest)
 * @method GetVeROReasonCodeDetails(\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest)
 * @method GetVeROReportStatus(\macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest)
 * @method GeteBayDetails(\macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest)
 * @method GeteBayOfficialTime(\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest)
 * @method LeaveFeedback(\macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest)
 * @method MoveSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType $moveSellingManagerInventoryFolderRequest)
 * @method PlaceOffer(\macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest)
 * @method RelistFixedPriceItem(\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
 * @method RelistItem(\macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest)
 * @method RemoveFromWatchList(\macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest)
 * @method RespondToBestOffer(\macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest)
 * @method RespondToFeedback(\macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest)
 * @method ReviseCheckoutStatus(\macropage\ebaysdk\trading\StructType\ReviseCheckoutStatusRequestType $reviseCheckoutStatusRequest)
 * @method ReviseFixedPriceItem(\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
 * @method ReviseInventoryStatus(\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
 * @method ReviseItem(\macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest)
 * @method ReviseMyMessages(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest)
 * @method ReviseMyMessagesFolders(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest)
 * @method ReviseSellingManagerInventoryFolder(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType $reviseSellingManagerInventoryFolderRequest)
 * @method ReviseSellingManagerProduct(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType $reviseSellingManagerProductRequest)
 * @method ReviseSellingManagerSaleRecord(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType $reviseSellingManagerSaleRecordRequest)
 * @method ReviseSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType $reviseSellingManagerTemplateRequest)
 * @method RevokeToken(\macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest)
 * @method SaveItemToSellingManagerTemplate(\macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType $saveItemToSellingManagerTemplateRequest)
 * @method SellerReverseDispute(\macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType $sellerReverseDisputeRequest)
 * @method SendInvoice(\macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest)
 * @method SetMessagePreferences(\macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest)
 * @method SetNotificationPreferences(\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest)
 * @method SetPromotionalSale(\macropage\ebaysdk\trading\StructType\SetPromotionalSaleRequestType $setPromotionalSaleRequest)
 * @method SetPromotionalSaleListings(\macropage\ebaysdk\trading\StructType\SetPromotionalSaleListingsRequestType $setPromotionalSaleListingsRequest)
 * @method SetSellingManagerFeedbackOptions(\macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsRequestType $setSellingManagerFeedbackOptionsRequest)
 * @method SetSellingManagerItemAutomationRule(\macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType $setSellingManagerItemAutomationRuleRequest)
 * @method SetSellingManagerTemplateAutomationRule(\macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType $setSellingManagerTemplateAutomationRuleRequest)
 * @method SetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest)
 * @method SetStore(\macropage\ebaysdk\trading\StructType\SetStoreRequestType $setStoreRequest)
 * @method SetStoreCategories(\macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest)
 * @method SetStoreCustomPage(\macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType $setStoreCustomPageRequest)
 * @method SetStorePreferences(\macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType $setStorePreferencesRequest)
 * @method SetTaxTable(\macropage\ebaysdk\trading\StructType\SetTaxTableRequestType $setTaxTableRequest)
 * @method SetUserNotes(\macropage\ebaysdk\trading\StructType\SetUserNotesRequestType $setUserNotesRequest)
 * @method SetUserPreferences(\macropage\ebaysdk\trading\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest)
 * @method UploadSiteHostedPictures(\macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest)
 * @method ValidateChallengeInput(\macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType $validateChallengeInputRequest)
 * @method ValidateTestUserRegistration(\macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType $validateTestUserRegistrationRequest)
 * @method VeROReportItems(\macropage\ebaysdk\trading\StructType\VeROReportItemsRequestType $veROReportItemsRequest)
 * @method VerifyAddFixedPriceItem(\macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
 * @method VerifyAddItem(\macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType $verifyAddItemRequest)
 * @method VerifyAddSecondChanceItem(\macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType $verifyAddSecondChanceItemRequest)
 * @method VerifyRelistItem(\macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType $verifyRelistItemRequest)
 * @method setSoapHeaderRequesterCredentials(CustomSecurityHeaderType $CustomSecurityHeader)
 */
class trading extends base {

	/**
	 * @var array
	 */
	private $SoapServicoptions;

	private $api_endpoints = [
		'live'    => 'https://api.ebay.com/wsapi',
		'sandbox' => 'https://api.sandbox.ebay.com/wsapi'
	];

	public function __construct(array $wsdlOptions = [],$api_endpoint='live') {
		$this->SoapServicoptions = [
			AbstractSoapClientBaseAlias::WSDL_URL        => 'http://developer.ebay.com/webservices/latest/ebaysvc.wsdl',
			AbstractSoapClientBaseAlias::WSDL_CLASSMAP   => ClassMapTradingService::get(),
			AbstractSoapClientBaseAlias::WSDL_TRACE      => true,
			AbstractSoapClientBaseAlias::WSDL_CACHE_WSDL => WSDL_CACHE_BOTH,
		];

		$wsdlOptions = $this->overrideSoapWsdlOptions($this->SoapServicoptions,$wsdlOptions);

		$this->Service = new EbayTradingSerice\Service($wsdlOptions);
		if (array_key_exists($api_endpoint,$this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: '.$api_endpoint.' available: '.implode(',',array_keys($this->api_endpoints)));
		}
	}

	public function __call($name, $arguments) {
		return $this->call($name,$arguments);
	}

	/**
	 * @param $appid
	 * @param $devid
	 * @param $authtoken
	 */
	public function setCredentials($appid, $devid, $authtoken) {
		$this->appid                         = $appid;
		$CustomSecurityHeader                = new CustomSecurityHeaderType();
		$CustomSecurityHeader->eBayAuthToken = $authtoken;
		$Credentials                         = new UserIdPasswordType(
			$appid,
			$devid
		);
		$CustomSecurityHeader->Credentials   = $Credentials;
		$this->Service->setSoapHeaderRequesterCredentials($CustomSecurityHeader);
	}

	/**
	 * @param mixed $api_endpoint
	 */
	public function setApiEndpoint($api_endpoint) {
		$this->api_endpoint = $api_endpoint;
	}

}