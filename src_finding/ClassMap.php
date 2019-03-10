<?php

namespace macropage\ebaysdk\finding;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetVersionRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\GetVersionRequest',
            'GetVersionResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\GetVersionResponse',
            'FindItemsForFavoriteSearchRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsForFavoriteSearchRequest',
            'FindItemsForFavoriteSearchResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsForFavoriteSearchResponse',
            'FindCompletedItemsRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindCompletedItemsRequest',
            'FindCompletedItemsResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindCompletedItemsResponse',
            'GetSearchKeywordsRecommendationRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\GetSearchKeywordsRecommendationRequest',
            'GetSearchKeywordsRecommendationResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\GetSearchKeywordsRecommendationResponse',
            'FindItemsByKeywordsRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByKeywordsRequest',
            'FindItemsByKeywordsResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByKeywordsResponse',
            'FindItemsByCategoryRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByCategoryRequest',
            'FindItemsByCategoryResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByCategoryResponse',
            'FindItemsAdvancedRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsAdvancedRequest',
            'FindItemsAdvancedResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsAdvancedResponse',
            'FindItemsByProductRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByProductRequest',
            'FindItemsByProductResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByProductResponse',
            'FindItemsIneBayStoresRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsIneBayStoresRequest',
            'FindItemsIneBayStoresResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsIneBayStoresResponse',
            'FindItemsByImageRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByImageRequest',
            'FindItemsByImageResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\FindItemsByImageResponse',
            'GetHistogramsRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\GetHistogramsRequest',
            'GetHistogramsResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\GetHistogramsResponse',
            'BestMatchFindingServiceRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\BestMatchFindingServiceRequest',
            'BaseFindingServiceRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\BaseFindingServiceRequest',
            'BaseFindingServiceResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\BaseFindingServiceResponse',
            'ExtensionType' => '\\macropage\\ebaysdk\\finding\\StructType\\ExtensionType',
            'Affiliate' => '\\macropage\\ebaysdk\\finding\\StructType\\Affiliate',
            'CategoryHistogram' => '\\macropage\\ebaysdk\\finding\\StructType\\CategoryHistogram',
            'CategoryHistogramContainer' => '\\macropage\\ebaysdk\\finding\\StructType\\CategoryHistogramContainer',
            'AspectValueHistogram' => '\\macropage\\ebaysdk\\finding\\StructType\\AspectValueHistogram',
            'AspectHistogramContainer' => '\\macropage\\ebaysdk\\finding\\StructType\\AspectHistogramContainer',
            'Aspect' => '\\macropage\\ebaysdk\\finding\\StructType\\Aspect',
            'AspectFilter' => '\\macropage\\ebaysdk\\finding\\StructType\\AspectFilter',
            'SearchResult' => '\\macropage\\ebaysdk\\finding\\StructType\\SearchResult',
            'DiscountPriceInfo' => '\\macropage\\ebaysdk\\finding\\StructType\\DiscountPriceInfo',
            'DomainFilter' => '\\macropage\\ebaysdk\\finding\\StructType\\DomainFilter',
            'ProductId' => '\\macropage\\ebaysdk\\finding\\StructType\\ProductId',
            'ItemFilter' => '\\macropage\\ebaysdk\\finding\\StructType\\ItemFilter',
            'ConditionHistogramContainer' => '\\macropage\\ebaysdk\\finding\\StructType\\ConditionHistogramContainer',
            'ConditionHistogram' => '\\macropage\\ebaysdk\\finding\\StructType\\ConditionHistogram',
            'BaseServiceResponse' => '\\macropage\\ebaysdk\\finding\\StructType\\BaseServiceResponse',
            'ErrorMessage' => '\\macropage\\ebaysdk\\finding\\StructType\\ErrorMessage',
            'ErrorData' => '\\macropage\\ebaysdk\\finding\\StructType\\ErrorData',
            'ErrorParameter' => '\\macropage\\ebaysdk\\finding\\StructType\\ErrorParameter',
            'BaseServiceRequest' => '\\macropage\\ebaysdk\\finding\\StructType\\BaseServiceRequest',
            'PaginationInput' => '\\macropage\\ebaysdk\\finding\\StructType\\PaginationInput',
            'PaginationOutput' => '\\macropage\\ebaysdk\\finding\\StructType\\PaginationOutput',
            'UnitPriceInfo' => '\\macropage\\ebaysdk\\finding\\StructType\\UnitPriceInfo',
            'Amount' => '\\macropage\\ebaysdk\\finding\\StructType\\Amount',
            'Category' => '\\macropage\\ebaysdk\\finding\\StructType\\Category',
            'Condition' => '\\macropage\\ebaysdk\\finding\\StructType\\Condition',
            'Distance' => '\\macropage\\ebaysdk\\finding\\StructType\\Distance',
            'GalleryInfoContainer' => '\\macropage\\ebaysdk\\finding\\StructType\\GalleryInfoContainer',
            'GalleryURL' => '\\macropage\\ebaysdk\\finding\\StructType\\GalleryURL',
            'ListingInfo' => '\\macropage\\ebaysdk\\finding\\StructType\\ListingInfo',
            'SearchItem' => '\\macropage\\ebaysdk\\finding\\StructType\\SearchItem',
            'SellerInfo' => '\\macropage\\ebaysdk\\finding\\StructType\\SellerInfo',
            'SellingStatus' => '\\macropage\\ebaysdk\\finding\\StructType\\SellingStatus',
            'ShippingInfo' => '\\macropage\\ebaysdk\\finding\\StructType\\ShippingInfo',
            'Storefront' => '\\macropage\\ebaysdk\\finding\\StructType\\Storefront',
            'ItemAttribute' => '\\macropage\\ebaysdk\\finding\\StructType\\ItemAttribute',
        );
    }
}
