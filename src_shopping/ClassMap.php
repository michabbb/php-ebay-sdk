<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'AbstractRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\AbstractRequestType',
            'AbstractResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\AbstractResponseType',
            'AmountType' => '\\macropage\\ebaysdk\\shopping\\StructType\\AmountType',
            'ErrorParameterType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ErrorParameterType',
            'ErrorType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ErrorType',
            'SimpleUserType' => '\\macropage\\ebaysdk\\shopping\\StructType\\SimpleUserType',
            'AddressType' => '\\macropage\\ebaysdk\\shopping\\StructType\\AddressType',
            'AverageRatingDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\AverageRatingDetailsType',
            'BusinessSellerDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\BusinessSellerDetailsType',
            'BuyingGuideDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\BuyingGuideDetailsType',
            'BuyingGuideType' => '\\macropage\\ebaysdk\\shopping\\StructType\\BuyingGuideType',
            'CatalogProductType' => '\\macropage\\ebaysdk\\shopping\\StructType\\CatalogProductType',
            'CategoryArrayType' => '\\macropage\\ebaysdk\\shopping\\ArrayType\\CategoryArrayType',
            'CategoryType' => '\\macropage\\ebaysdk\\shopping\\StructType\\CategoryType',
            'CharityType' => '\\macropage\\ebaysdk\\shopping\\StructType\\CharityType',
            'DiscountPriceInfoType' => '\\macropage\\ebaysdk\\shopping\\StructType\\DiscountPriceInfoType',
            'DistanceType' => '\\macropage\\ebaysdk\\shopping\\StructType\\DistanceType',
            'DomainHistogramType' => '\\macropage\\ebaysdk\\shopping\\StructType\\DomainHistogramType',
            'ExternalProductIDType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ExternalProductIDType',
            'FeedbackDetailType' => '\\macropage\\ebaysdk\\shopping\\StructType\\FeedbackDetailType',
            'FeedbackHistoryType' => '\\macropage\\ebaysdk\\shopping\\StructType\\FeedbackHistoryType',
            'FeedbackPeriodType' => '\\macropage\\ebaysdk\\shopping\\StructType\\FeedbackPeriodType',
            'FindProductsRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\FindProductsRequestType',
            'FindProductsResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\FindProductsResponseType',
            'GetCategoryInfoRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetCategoryInfoRequestType',
            'GetCategoryInfoResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetCategoryInfoResponseType',
            'GetItemStatusRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetItemStatusRequestType',
            'GetItemStatusResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetItemStatusResponseType',
            'GetMultipleItemsRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetMultipleItemsRequestType',
            'GetMultipleItemsResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetMultipleItemsResponseType',
            'GetShippingCostsRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetShippingCostsRequestType',
            'GetShippingCostsResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetShippingCostsResponseType',
            'GetSingleItemRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetSingleItemRequestType',
            'GetSingleItemResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetSingleItemResponseType',
            'GetUserProfileRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetUserProfileRequestType',
            'GetUserProfileResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GetUserProfileResponseType',
            'GeteBayTimeRequestType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GeteBayTimeRequestType',
            'GeteBayTimeResponseType' => '\\macropage\\ebaysdk\\shopping\\StructType\\GeteBayTimeResponseType',
            'HistogramEntryType' => '\\macropage\\ebaysdk\\shopping\\StructType\\HistogramEntryType',
            'InternationalShippingServiceOptionType' => '\\macropage\\ebaysdk\\shopping\\StructType\\InternationalShippingServiceOptionType',
            'ItemCompatibilityListType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ItemCompatibilityListType',
            'ItemCompatibilityType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ItemCompatibilityType',
            'NameValueListArrayType' => '\\macropage\\ebaysdk\\shopping\\ArrayType\\NameValueListArrayType',
            'NameValueListType' => '\\macropage\\ebaysdk\\shopping\\StructType\\NameValueListType',
            'PickUpInStoreDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\PickUpInStoreDetailsType',
            'PicturesType' => '\\macropage\\ebaysdk\\shopping\\StructType\\PicturesType',
            'ProductIDType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ProductIDType',
            'QuantityInfo' => '\\macropage\\ebaysdk\\shopping\\StructType\\QuantityInfo',
            'ReturnPolicyType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ReturnPolicyType',
            'SalesTaxType' => '\\macropage\\ebaysdk\\shopping\\StructType\\SalesTaxType',
            'SellingStatusType' => '\\macropage\\ebaysdk\\shopping\\StructType\\SellingStatusType',
            'ShippingCostSummaryType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ShippingCostSummaryType',
            'ShippingDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ShippingDetailsType',
            'ShippingServiceOptionType' => '\\macropage\\ebaysdk\\shopping\\StructType\\ShippingServiceOptionType',
            'SimpleItemType' => '\\macropage\\ebaysdk\\shopping\\StructType\\SimpleItemType',
            'StorefrontType' => '\\macropage\\ebaysdk\\shopping\\StructType\\StorefrontType',
            'TaxJurisdictionType' => '\\macropage\\ebaysdk\\shopping\\StructType\\TaxJurisdictionType',
            'TaxTableType' => '\\macropage\\ebaysdk\\shopping\\StructType\\TaxTableType',
            'UnitInfoType' => '\\macropage\\ebaysdk\\shopping\\StructType\\UnitInfoType',
            'VATDetailsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\VATDetailsType',
            'VariationSpecificPictureSetType' => '\\macropage\\ebaysdk\\shopping\\StructType\\VariationSpecificPictureSetType',
            'VariationType' => '\\macropage\\ebaysdk\\shopping\\StructType\\VariationType',
            'VariationsType' => '\\macropage\\ebaysdk\\shopping\\StructType\\VariationsType',
        ];
    }
}
