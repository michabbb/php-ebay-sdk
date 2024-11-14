<?php
declare(strict_types=1);

namespace macropage\ebaysdk\trading;


use macropage\ebaysdk\base\base;
use macropage\ebaysdk\trading\ClassMap as ClassMapTradingService;
use macropage\ebaysdk\trading\ServiceType\Service as EbayTradingService;
use macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType;
use macropage\ebaysdk\trading\StructType\UserIdPasswordType;
use SoapFault;
use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * Class tradingservice
 * @package macropage\sdk_ebay_soap
 *
 * @see grep --color=never "public function" src_trading/ServiceType/* -R |grep --color=never Request |cut -d ":" -f 2|sed -E 's/\s+//'|sed 's/public function/* @method/' > tradingmethos
 *
 * @method AddFixedPriceItem(\macropage\ebaysdk\trading\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
 * @method AddItem(\macropage\ebaysdk\trading\StructType\AddItemRequestType $addItemRequest)
 * @method AddItems(\macropage\ebaysdk\trading\StructType\AddItemsRequestType $addItemsRequest)
 * @method AddMemberMessageAAQToPartner(\macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest)
 * @method AddMemberMessageRTQ(\macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest)
 * @method AddMemberMessagesAAQToBidder(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest)
 * @method AddOrder(\macropage\ebaysdk\trading\StructType\AddOrderRequestType $addOrderRequest)
 * @method AddSecondChanceItem(\macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest)
 * @method AddToItemDescription(\macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest)
 * @method AddToWatchList(\macropage\ebaysdk\trading\StructType\AddToWatchListRequestType $addToWatchListRequest)
 * @method CompleteSale(\macropage\ebaysdk\trading\StructType\CompleteSaleRequestType $completeSaleRequest)
 * @method ConfirmIdentity(\macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType $confirmIdentityRequest)
 * @method DeleteMyMessages(\macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType $deleteMyMessagesRequest)
 * @method EndFixedPriceItem(\macropage\ebaysdk\trading\StructType\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
 * @method EndItem(\macropage\ebaysdk\trading\StructType\EndItemRequestType $endItemRequest)
 * @method EndItems(\macropage\ebaysdk\trading\StructType\EndItemsRequestType $endItemsRequest)
 * @method ExtendSiteHostedPictures(\macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType $extendSiteHostedPicturesRequest)
 * @method FetchToken(\macropage\ebaysdk\trading\StructType\FetchTokenRequestType $fetchTokenRequest)
 * @method GetAccount(\macropage\ebaysdk\trading\StructType\GetAccountRequestType $getAccountRequest)
 * @method GetAdFormatLeads(\macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest)
 * @method GetAllBidders(\macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType $getAllBiddersRequest)
 * @method GetBestOffers(\macropage\ebaysdk\trading\StructType\GetBestOffersRequestType $getBestOffersRequest)
 * @method GetBidderList(\macropage\ebaysdk\trading\StructType\GetBidderListRequestType $getBidderListRequest)
 * @method GetCategories(\macropage\ebaysdk\trading\StructType\GetCategoriesRequestType $getCategoriesRequest)
 * @method GetCategoryFeatures(\macropage\ebaysdk\trading\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest)
 * @method GetCategoryMappings(\macropage\ebaysdk\trading\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest)
 * @method GetChallengeToken(\macropage\ebaysdk\trading\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest)
 * @method GetDescriptionTemplates(\macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest)
 * @method GetFeedback(\macropage\ebaysdk\trading\StructType\GetFeedbackRequestType $getFeedbackRequest)
 * @method GetItem(\macropage\ebaysdk\trading\StructType\GetItemRequestType $getItemRequest)
 * @method GetItemShipping(\macropage\ebaysdk\trading\StructType\GetItemShippingRequestType $getItemShippingRequest)
 * @method GetItemTransactions(\macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest)
 * @method GetItemsAwaitingFeedback(\macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest)
 * @method GetMemberMessages(\macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest)
 * @method GetMessagePreferences(\macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest)
 * @method GetMyMessages(\macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType $getMyMessagesRequest)
 * @method GetMyeBayBuying(\macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest)
 * @method GetMyeBaySelling(\macropage\ebaysdk\trading\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest)
 * @method GetNotificationPreferences(\macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest)
 * @method GetNotificationsUsage(\macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest)
 * @method GetOrders(\macropage\ebaysdk\trading\StructType\GetOrdersRequestType $getOrdersRequest)
 * @method GetSellerEvents(\macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType $getSellerEventsRequest)
 * @method GetSellerList(\macropage\ebaysdk\trading\StructType\GetSellerListRequestType $getSellerListRequest)
 * @method GetSellerTransactions(\macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest)
 * @method GetSessionID(\macropage\ebaysdk\trading\StructType\GetSessionIDRequestType $getSessionIDRequest)
 * @method GetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest)
 * @method GetStore(\macropage\ebaysdk\trading\StructType\GetStoreRequestType $getStoreRequest)
 * @method GetStoreCategoryUpdateStatus(\macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest)
 * @method GetTaxTable(\macropage\ebaysdk\trading\StructType\GetTaxTableRequestType $getTaxTableRequest)
 * @method GetTokenStatus(\macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType $getTokenStatusRequest)
 * @method GetUser(\macropage\ebaysdk\trading\StructType\GetUserRequestType $getUserRequest)
 * @method GetUserContactDetails(\macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest)
 * @method GetUserPreferences(\macropage\ebaysdk\trading\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest)
 * @method GetVeROReasonCodeDetails(\macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest)
 * @method GetVeROReportStatus(\macropage\ebaysdk\trading\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest)
 * @method GeteBayDetails(\macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType $geteBayDetailsRequest)
 * @method GeteBayOfficialTime(\macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeRequestType $geteBayOfficialTimeRequest)
 * @method LeaveFeedback(\macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType $leaveFeedbackRequest)
 * @method PlaceOffer(\macropage\ebaysdk\trading\StructType\PlaceOfferRequestType $placeOfferRequest)
 * @method RelistFixedPriceItem(\macropage\ebaysdk\trading\StructType\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
 * @method RelistItem(\macropage\ebaysdk\trading\StructType\RelistItemRequestType $relistItemRequest)
 * @method RemoveFromWatchList(\macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType $removeFromWatchListRequest)
 * @method RespondToBestOffer(\macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType $respondToBestOfferRequest)
 * @method RespondToFeedback(\macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType $respondToFeedbackRequest)
 * @method ReviseFixedPriceItem(\macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
 * @method ReviseInventoryStatus(\macropage\ebaysdk\trading\StructType\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
 * @method ReviseItem(\macropage\ebaysdk\trading\StructType\ReviseItemRequestType $reviseItemRequest)
 * @method ReviseMyMessages(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType $reviseMyMessagesRequest)
 * @method ReviseMyMessagesFolders(\macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType $reviseMyMessagesFoldersRequest)
 * @method RevokeToken(\macropage\ebaysdk\trading\StructType\RevokeTokenRequestType $revokeTokenRequest)
 * @method SendInvoice(\macropage\ebaysdk\trading\StructType\SendInvoiceRequestType $sendInvoiceRequest)
 * @method SetMessagePreferences(\macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest)
 * @method SetNotificationPreferences(\macropage\ebaysdk\trading\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest)
 * @method SetShippingDiscountProfiles(\macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest)
 * @method SetStoreCategories(\macropage\ebaysdk\trading\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest)
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

	private array $api_endpoints = [
		'live'    => 'https://api.ebay.com/wsapi',
		'sandbox' => 'https://api.sandbox.ebay.com/wsapi'
	];

    /**
     * @throws SoapFault
     */
    public function __construct(array $wsdlOptions = [], $api_endpoint='live') {

        $streamContext = stream_context_create([
                                  'ssl' => [
                                      'verify_peer'       => false,
                                      'verify_host'       => false,
                                      'allow_self_signed' => true,
                                  ],
                                  /*'filters' => [
                                      'dechunk' => [],
                                  ],
                                  'http' => array(
                                      'protocol_version' => 1.0,
                                  ),*/
                              ]);

		$SoapServicoptions = [
            SoapClientInterface::WSDL_URL                => __DIR__ . DIRECTORY_SEPARATOR . 'wsdl' . DIRECTORY_SEPARATOR . 'trading.wsdl',
            SoapClientInterface::WSDL_CLASSMAP           => ClassMapTradingService::get(),
            SoapClientInterface::WSDL_TRACE              => true,
            SoapClientInterface::WSDL_CACHE_WSDL         => WSDL_CACHE_BOTH,
            SoapClientInterface::WSDL_CONNECTION_TIMEOUT => 180,
            SoapClientInterface::WSDL_COMPRESSION        => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
            SoapClientInterface::WSDL_STREAM_CONTEXT     => $streamContext
        ];

		$wsdlOptions = $this->overrideSoapWsdlOptions($SoapServicoptions,$wsdlOptions);

		$this->Service = new EbayTradingService($wsdlOptions);

        $this->Service->setSoapClient((new CustomSoapClient($SoapServicoptions[SoapClientInterface::WSDL_URL], $wsdlOptions)));

		if (array_key_exists($api_endpoint,$this->api_endpoints)) {
			$this->api_endpoint = $this->api_endpoints[$api_endpoint];
		} else {
			throw new \RuntimeException('unknown endpoint: '.$api_endpoint.' available: '.implode(',',array_keys($this->api_endpoints)));
		}
	}

    /**
     * @throws SoapFault
     */
    public function __call(string $name, $arguments) {
		return $this->call($name,$arguments);
	}

	public function setCredentials(string $appid, string $devid, string $certid, string $authtoken): void
    {
		$this->appid                         = $appid;
		$CustomSecurityHeader                = new CustomSecurityHeaderType();
		$CustomSecurityHeader->setEBayAuthToken($authtoken);
		$Credentials                         = new UserIdPasswordType(
			$appid,
			$devid
		);
		$Credentials->setAuthCert($certid);
		$CustomSecurityHeader->setCredentials($Credentials);
		$this->Service->setSoapHeaderRequesterCredentials($CustomSecurityHeader);
	}

	public function setApiEndpoint(string $api_endpoint): void
    {
		$this->api_endpoint = $api_endpoint;
	}

}
