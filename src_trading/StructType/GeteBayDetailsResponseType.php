<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a specified site in response to <b>GeteBayDetailsRequest</b>. If no <b>DetailName</b> field is identified in the request, all elements of <b>GeteBayDetailsResponse</b> are returned. Otherwise, eBay returns only the
 * elements corresponding to the specified <b>DetailName</b> fields. <b>UpdateTime</b> gives the time of modification of the most recently modified <b>DetailName</b>.
 * @subpackage Structs
 */
class GeteBayDetailsResponseType extends AbstractResponseType
{
    /**
     * The CountryDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the country code and associated name of the countries supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if
     * <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CountryDetailsType[]
     */
    protected ?array $CountryDetails = null;
    /**
     * The CurrencyDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the currencies supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>CurrencyDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[]
     */
    protected ?array $CurrencyDetails = null;
    /**
     * The DispatchTimeMaxDetails
     * Meta information extracted from the WSDL
     * - documentation: A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified
     * in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     * </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[]
     */
    protected ?array $DispatchTimeMaxDetails = null;
    /**
     * The PaymentOptionDetails
     * Meta information extracted from the WSDL
     * - documentation: Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     * <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[]
     */
    protected ?array $PaymentOptionDetails = null;
    /**
     * The RegionDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the cities and other domestic regions for the specified site's country. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegionDetailsType[]
     */
    protected ?array $RegionDetails = null;
    /**
     * The ShippingLocationDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the worldwide regions that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingLocationDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[]
     */
    protected ?array $ShippingLocationDetails = null;
    /**
     * The ShippingServiceDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only
     * returned if <b>ShippingServiceDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[]
     */
    protected ?array $ShippingServiceDetails = null;
    /**
     * The SiteDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists all available eBay sites and their associated <b>SiteID</b> numbers. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>SiteDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteDetailsType[]
     */
    protected ?array $SiteDetails = null;
    /**
     * The TaxJurisdiction
     * Meta information extracted from the WSDL
     * - documentation: Details the different tax jurisdictions or tax regions applicable to the site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay
     * Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if
     * <b>TaxJurisdiction</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    protected ?array $TaxJurisdiction = null;
    /**
     * The URLDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists eBay URLs that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>URLDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\URLDetailsType[]
     */
    protected ?array $URLDetails = null;
    /**
     * The TimeZoneDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the details of the time zones supported by the eBay system. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>TimeZoneDetails</b> is included as a <b>DetailName</b> filter in the request, or
     * if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[]
     */
    protected ?array $TimeZoneDetails = null;
    /**
     * The ItemSpecificDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the site's maximum thresholds for specifying Item Specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ItemSpecificDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[]
     */
    protected ?array $ItemSpecificDetails = null;
    /**
     * The UnitOfMeasurementDetails
     * Meta information extracted from the WSDL
     * - documentation: Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[]
     */
    protected ?array $UnitOfMeasurementDetails = null;
    /**
     * The RegionOfOriginDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionOfOriginDetails</b>
     * is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[]
     */
    protected ?array $RegionOfOriginDetails = null;
    /**
     * The ShippingPackageDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the various shipping packages supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingPackageDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[]
     */
    protected ?array $ShippingPackageDetails = null;
    /**
     * The ShippingCarrierDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the shipping carriers supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingCarrierDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[]
     */
    protected ?array $ShippingCarrierDetails = null;
    /**
     * The ReturnPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options. <br/><br/> <span class="tablenote"><b>Note: </b> This container is
     * only returned if <b>ReturnPolicyDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span> <span class="tablenote"><b>Note: </b> This container has been staged for
     * deprecation. Although domestic return policy metadata is still getting returned at the moment, it is recommended that users start making plans to use the <b>GetCategoryFeatures</b> call instead to retrieve category-level, domestic return policy
     * metadata. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $ReturnPolicyDetails = null;
    /**
     * The InternationalReturnPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container has been deprecated. The <b>GetCategoryFeatures</b> call must be used instead to retrieve category-level, international return policy metadata. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $InternationalReturnPolicyDetails = null;
    /**
     * The ListingStartPriceDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the minimum starting prices for the supported types of eBay listings. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingStartPriceDetails</b> is included as a <b>DetailName</b> filter
     * in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[]
     */
    protected ?array $ListingStartPriceDetails = null;
    /**
     * The BuyerRequirementDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy
     * violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that
     * container will override values set at the account level. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> filter in the request, or if no
     * <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[]
     */
    protected ?array $BuyerRequirementDetails = null;
    /**
     * The ListingFeatureDetails
     * Meta information extracted from the WSDL
     * - documentation: Details the listing features available for the eBay site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingFeatureDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[]
     */
    protected ?array $ListingFeatureDetails = null;
    /**
     * The VariationDetails
     * Meta information extracted from the WSDL
     * - documentation: Site-level validation rules for multi-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations. Use
     * <b>GetCategorySpecifics</b> for rules related to recommended or required variation specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VariationDetailsType $VariationDetails = null;
    /**
     * The ExcludeShippingLocationDetails
     * Meta information extracted from the WSDL
     * - documentation: Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are locations that a seller can list as areas where they will not ship an item. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only
     * returned if <b>ExcludeShippingLocationDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[]
     */
    protected ?array $ExcludeShippingLocationDetails = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: The time of the most recent modification to any feature detail. If specific feature details are passed in the request, gives the most recent modification time of those feature details.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The RecoupmentPolicyDetails
     * Meta information extracted from the WSDL
     * - documentation: Details the recoupment policies for the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a <b>DetailName</b> filter in
     * the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[]
     */
    protected ?array $RecoupmentPolicyDetails = null;
    /**
     * The ShippingCategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: A shipping service category supported for the site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingCategoryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no
     * <b>DetailName</b> filters are used in the request. </span> Each shipping service supported for a site is automatically categorized by eBay into one of the shipping categories available for that site depending on how the shipping service shipping time
     * aligns with the shipping times specified by eBay for each category. <br><br> Notice that you cannot specify a <b>ShippingCategory</b> as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     * that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the Give buyers
     * shipping details form in the eBay Sell Your Item flow.) <br><br> One way to populate the picklist would be to call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>. Then sort these results by <b>ShippingCategory</b>
     * and populate the picklist.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[]
     */
    protected ?array $ShippingCategoryDetails = null;
    /**
     * The ProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The <b>ProductDetails.ProductIdentifierUnavailableText</b> field contains the actual text that should be passed into the relevant product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is prompting/expecting one of these
     * fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist
     * for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ProductDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductDetailsType $ProductDetails = null;
    /**
     * Constructor method for GeteBayDetailsResponseType
     * @uses GeteBayDetailsResponseType::setCountryDetails()
     * @uses GeteBayDetailsResponseType::setCurrencyDetails()
     * @uses GeteBayDetailsResponseType::setDispatchTimeMaxDetails()
     * @uses GeteBayDetailsResponseType::setPaymentOptionDetails()
     * @uses GeteBayDetailsResponseType::setRegionDetails()
     * @uses GeteBayDetailsResponseType::setShippingLocationDetails()
     * @uses GeteBayDetailsResponseType::setShippingServiceDetails()
     * @uses GeteBayDetailsResponseType::setSiteDetails()
     * @uses GeteBayDetailsResponseType::setTaxJurisdiction()
     * @uses GeteBayDetailsResponseType::setURLDetails()
     * @uses GeteBayDetailsResponseType::setTimeZoneDetails()
     * @uses GeteBayDetailsResponseType::setItemSpecificDetails()
     * @uses GeteBayDetailsResponseType::setUnitOfMeasurementDetails()
     * @uses GeteBayDetailsResponseType::setRegionOfOriginDetails()
     * @uses GeteBayDetailsResponseType::setShippingPackageDetails()
     * @uses GeteBayDetailsResponseType::setShippingCarrierDetails()
     * @uses GeteBayDetailsResponseType::setReturnPolicyDetails()
     * @uses GeteBayDetailsResponseType::setInternationalReturnPolicyDetails()
     * @uses GeteBayDetailsResponseType::setListingStartPriceDetails()
     * @uses GeteBayDetailsResponseType::setBuyerRequirementDetails()
     * @uses GeteBayDetailsResponseType::setListingFeatureDetails()
     * @uses GeteBayDetailsResponseType::setVariationDetails()
     * @uses GeteBayDetailsResponseType::setExcludeShippingLocationDetails()
     * @uses GeteBayDetailsResponseType::setUpdateTime()
     * @uses GeteBayDetailsResponseType::setRecoupmentPolicyDetails()
     * @uses GeteBayDetailsResponseType::setShippingCategoryDetails()
     * @uses GeteBayDetailsResponseType::setProductDetails()
     * @param \macropage\ebaysdk\trading\StructType\CountryDetailsType[] $countryDetails
     * @param \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[] $currencyDetails
     * @param \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[] $paymentOptionDetails
     * @param \macropage\ebaysdk\trading\StructType\RegionDetailsType[] $regionDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[] $shippingLocationDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[] $shippingServiceDetails
     * @param \macropage\ebaysdk\trading\StructType\SiteDetailsType[] $siteDetails
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @param \macropage\ebaysdk\trading\StructType\URLDetailsType[] $uRLDetails
     * @param \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[] $timeZoneDetails
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[] $itemSpecificDetails
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @param \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[] $shippingPackageDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @param \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @param \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @param \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[] $listingFeatureDetails
     * @param \macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails
     * @param \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @param string $updateTime
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @param \macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails
     */
    public function __construct(?array $countryDetails = null, ?array $currencyDetails = null, ?array $dispatchTimeMaxDetails = null, ?array $paymentOptionDetails = null, ?array $regionDetails = null, ?array $shippingLocationDetails = null, ?array $shippingServiceDetails = null, ?array $siteDetails = null, ?array $taxJurisdiction = null, ?array $uRLDetails = null, ?array $timeZoneDetails = null, ?array $itemSpecificDetails = null, ?array $unitOfMeasurementDetails = null, ?array $regionOfOriginDetails = null, ?array $shippingPackageDetails = null, ?array $shippingCarrierDetails = null, ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails = null, ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null, ?array $listingStartPriceDetails = null, ?array $buyerRequirementDetails = null, ?array $listingFeatureDetails = null, ?\macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails = null, ?array $excludeShippingLocationDetails = null, ?string $updateTime = null, ?array $recoupmentPolicyDetails = null, ?array $shippingCategoryDetails = null, ?\macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails = null)
    {
        $this
            ->setCountryDetails($countryDetails)
            ->setCurrencyDetails($currencyDetails)
            ->setDispatchTimeMaxDetails($dispatchTimeMaxDetails)
            ->setPaymentOptionDetails($paymentOptionDetails)
            ->setRegionDetails($regionDetails)
            ->setShippingLocationDetails($shippingLocationDetails)
            ->setShippingServiceDetails($shippingServiceDetails)
            ->setSiteDetails($siteDetails)
            ->setTaxJurisdiction($taxJurisdiction)
            ->setURLDetails($uRLDetails)
            ->setTimeZoneDetails($timeZoneDetails)
            ->setItemSpecificDetails($itemSpecificDetails)
            ->setUnitOfMeasurementDetails($unitOfMeasurementDetails)
            ->setRegionOfOriginDetails($regionOfOriginDetails)
            ->setShippingPackageDetails($shippingPackageDetails)
            ->setShippingCarrierDetails($shippingCarrierDetails)
            ->setReturnPolicyDetails($returnPolicyDetails)
            ->setInternationalReturnPolicyDetails($internationalReturnPolicyDetails)
            ->setListingStartPriceDetails($listingStartPriceDetails)
            ->setBuyerRequirementDetails($buyerRequirementDetails)
            ->setListingFeatureDetails($listingFeatureDetails)
            ->setVariationDetails($variationDetails)
            ->setExcludeShippingLocationDetails($excludeShippingLocationDetails)
            ->setUpdateTime($updateTime)
            ->setRecoupmentPolicyDetails($recoupmentPolicyDetails)
            ->setShippingCategoryDetails($shippingCategoryDetails)
            ->setProductDetails($productDetails);
    }
    /**
     * Get CountryDetails value
     * @return \macropage\ebaysdk\trading\StructType\CountryDetailsType[]
     */
    public function getCountryDetails(): ?array
    {
        return $this->CountryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCountryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryDetailsForArrayConstraintsFromSetCountryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeCountryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCountryDetailsItem instanceof \macropage\ebaysdk\trading\StructType\CountryDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeCountryDetailsItem) ? get_class($geteBayDetailsResponseTypeCountryDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeCountryDetailsItem), var_export($geteBayDetailsResponseTypeCountryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\CountryDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CountryDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryDetailsType[] $countryDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setCountryDetails(?array $countryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($countryDetailsArrayErrorMessage = self::validateCountryDetailsForArrayConstraintsFromSetCountryDetails($countryDetails))) {
            throw new InvalidArgumentException($countryDetailsArrayErrorMessage, __LINE__);
        }
        $this->CountryDetails = $countryDetails;
        
        return $this;
    }
    /**
     * Add item to CountryDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToCountryDetails(\macropage\ebaysdk\trading\StructType\CountryDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CountryDetailsType) {
            throw new InvalidArgumentException(sprintf('The CountryDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\CountryDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CountryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get CurrencyDetails value
     * @return \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[]
     */
    public function getCurrencyDetails(): ?array
    {
        return $this->CurrencyDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCurrencyDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyDetailsForArrayConstraintsFromSetCurrencyDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeCurrencyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCurrencyDetailsItem instanceof \macropage\ebaysdk\trading\StructType\CurrencyDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeCurrencyDetailsItem) ? get_class($geteBayDetailsResponseTypeCurrencyDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeCurrencyDetailsItem), var_export($geteBayDetailsResponseTypeCurrencyDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\CurrencyDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CurrencyDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[] $currencyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setCurrencyDetails(?array $currencyDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($currencyDetailsArrayErrorMessage = self::validateCurrencyDetailsForArrayConstraintsFromSetCurrencyDetails($currencyDetails))) {
            throw new InvalidArgumentException($currencyDetailsArrayErrorMessage, __LINE__);
        }
        $this->CurrencyDetails = $currencyDetails;
        
        return $this;
    }
    /**
     * Add item to CurrencyDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CurrencyDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToCurrencyDetails(\macropage\ebaysdk\trading\StructType\CurrencyDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CurrencyDetailsType) {
            throw new InvalidArgumentException(sprintf('The CurrencyDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\CurrencyDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CurrencyDetails[] = $item;
        
        return $this;
    }
    /**
     * Get DispatchTimeMaxDetails value
     * @return \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[]
     */
    public function getDispatchTimeMaxDetails(): ?array
    {
        return $this->DispatchTimeMaxDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setDispatchTimeMaxDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDispatchTimeMaxDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDispatchTimeMaxDetailsForArrayConstraintsFromSetDispatchTimeMaxDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem instanceof \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) ? get_class($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem), var_export($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DispatchTimeMaxDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DispatchTimeMaxDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setDispatchTimeMaxDetails(?array $dispatchTimeMaxDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($dispatchTimeMaxDetailsArrayErrorMessage = self::validateDispatchTimeMaxDetailsForArrayConstraintsFromSetDispatchTimeMaxDetails($dispatchTimeMaxDetails))) {
            throw new InvalidArgumentException($dispatchTimeMaxDetailsArrayErrorMessage, __LINE__);
        }
        $this->DispatchTimeMaxDetails = $dispatchTimeMaxDetails;
        
        return $this;
    }
    /**
     * Add item to DispatchTimeMaxDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToDispatchTimeMaxDetails(\macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType) {
            throw new InvalidArgumentException(sprintf('The DispatchTimeMaxDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DispatchTimeMaxDetails[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentOptionDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[]
     */
    public function getPaymentOptionDetails(): ?array
    {
        return $this->PaymentOptionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentOptionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentOptionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentOptionDetailsForArrayConstraintsFromSetPaymentOptionDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypePaymentOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypePaymentOptionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypePaymentOptionDetailsItem) ? get_class($geteBayDetailsResponseTypePaymentOptionDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypePaymentOptionDetailsItem), var_export($geteBayDetailsResponseTypePaymentOptionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentOptionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentOptionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[] $paymentOptionDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setPaymentOptionDetails(?array $paymentOptionDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentOptionDetailsArrayErrorMessage = self::validatePaymentOptionDetailsForArrayConstraintsFromSetPaymentOptionDetails($paymentOptionDetails))) {
            throw new InvalidArgumentException($paymentOptionDetailsArrayErrorMessage, __LINE__);
        }
        $this->PaymentOptionDetails = $paymentOptionDetails;
        
        return $this;
    }
    /**
     * Add item to PaymentOptionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToPaymentOptionDetails(\macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType) {
            throw new InvalidArgumentException(sprintf('The PaymentOptionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentOptionDetails[] = $item;
        
        return $this;
    }
    /**
     * Get RegionDetails value
     * @return \macropage\ebaysdk\trading\StructType\RegionDetailsType[]
     */
    public function getRegionDetails(): ?array
    {
        return $this->RegionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRegionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegionDetailsForArrayConstraintsFromSetRegionDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRegionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RegionDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRegionDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRegionDetailsItem), var_export($geteBayDetailsResponseTypeRegionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RegionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RegionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionDetailsType[] $regionDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRegionDetails(?array $regionDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($regionDetailsArrayErrorMessage = self::validateRegionDetailsForArrayConstraintsFromSetRegionDetails($regionDetails))) {
            throw new InvalidArgumentException($regionDetailsArrayErrorMessage, __LINE__);
        }
        $this->RegionDetails = $regionDetails;
        
        return $this;
    }
    /**
     * Add item to RegionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRegionDetails(\macropage\ebaysdk\trading\StructType\RegionDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RegionDetailsType) {
            throw new InvalidArgumentException(sprintf('The RegionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RegionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegionDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingLocationDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[]
     */
    public function getShippingLocationDetails(): ?array
    {
        return $this->ShippingLocationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingLocationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingLocationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingLocationDetailsForArrayConstraintsFromSetShippingLocationDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingLocationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingLocationDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingLocationDetailsItem), var_export($geteBayDetailsResponseTypeShippingLocationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingLocationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingLocationDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[] $shippingLocationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingLocationDetails(?array $shippingLocationDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingLocationDetailsArrayErrorMessage = self::validateShippingLocationDetailsForArrayConstraintsFromSetShippingLocationDetails($shippingLocationDetails))) {
            throw new InvalidArgumentException($shippingLocationDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingLocationDetails = $shippingLocationDetails;
        
        return $this;
    }
    /**
     * Add item to ShippingLocationDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingLocationDetails(\macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingLocationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingLocationDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingServiceDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[]
     */
    public function getShippingServiceDetails(): ?array
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceDetailsForArrayConstraintsFromSetShippingServiceDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingServiceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingServiceDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingServiceDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingServiceDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingServiceDetailsItem), var_export($geteBayDetailsResponseTypeShippingServiceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingServiceDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[] $shippingServiceDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingServiceDetails(?array $shippingServiceDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceDetailsArrayErrorMessage = self::validateShippingServiceDetailsForArrayConstraintsFromSetShippingServiceDetails($shippingServiceDetails))) {
            throw new InvalidArgumentException($shippingServiceDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceDetails = $shippingServiceDetails;
        
        return $this;
    }
    /**
     * Add item to ShippingServiceDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingServiceDetails(\macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingServiceDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceDetails[] = $item;
        
        return $this;
    }
    /**
     * Get SiteDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteDetailsType[]
     */
    public function getSiteDetails(): ?array
    {
        return $this->SiteDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setSiteDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSiteDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSiteDetailsForArrayConstraintsFromSetSiteDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeSiteDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeSiteDetailsItem instanceof \macropage\ebaysdk\trading\StructType\SiteDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeSiteDetailsItem) ? get_class($geteBayDetailsResponseTypeSiteDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeSiteDetailsItem), var_export($geteBayDetailsResponseTypeSiteDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SiteDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\SiteDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SiteDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteDetailsType[] $siteDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setSiteDetails(?array $siteDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($siteDetailsArrayErrorMessage = self::validateSiteDetailsForArrayConstraintsFromSetSiteDetails($siteDetails))) {
            throw new InvalidArgumentException($siteDetailsArrayErrorMessage, __LINE__);
        }
        $this->SiteDetails = $siteDetails;
        
        return $this;
    }
    /**
     * Add item to SiteDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToSiteDetails(\macropage\ebaysdk\trading\StructType\SiteDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SiteDetailsType) {
            throw new InvalidArgumentException(sprintf('The SiteDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\SiteDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SiteDetails[] = $item;
        
        return $this;
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction(): ?array
    {
        return $this->TaxJurisdiction;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxJurisdiction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxJurisdiction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeTaxJurisdictionItem) ? get_class($geteBayDetailsResponseTypeTaxJurisdictionItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeTaxJurisdictionItem), var_export($geteBayDetailsResponseTypeTaxJurisdictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxJurisdiction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setTaxJurisdiction(?array $taxJurisdiction = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxJurisdictionArrayErrorMessage = self::validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction($taxJurisdiction))) {
            throw new InvalidArgumentException($taxJurisdictionArrayErrorMessage, __LINE__);
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
            throw new InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        
        return $this;
    }
    /**
     * Get URLDetails value
     * @return \macropage\ebaysdk\trading\StructType\URLDetailsType[]
     */
    public function getURLDetails(): ?array
    {
        return $this->URLDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setURLDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURLDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateURLDetailsForArrayConstraintsFromSetURLDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeURLDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeURLDetailsItem instanceof \macropage\ebaysdk\trading\StructType\URLDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeURLDetailsItem) ? get_class($geteBayDetailsResponseTypeURLDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeURLDetailsItem), var_export($geteBayDetailsResponseTypeURLDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The URLDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\URLDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set URLDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\URLDetailsType[] $uRLDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setURLDetails(?array $uRLDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($uRLDetailsArrayErrorMessage = self::validateURLDetailsForArrayConstraintsFromSetURLDetails($uRLDetails))) {
            throw new InvalidArgumentException($uRLDetailsArrayErrorMessage, __LINE__);
        }
        $this->URLDetails = $uRLDetails;
        
        return $this;
    }
    /**
     * Add item to URLDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\URLDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToURLDetails(\macropage\ebaysdk\trading\StructType\URLDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\URLDetailsType) {
            throw new InvalidArgumentException(sprintf('The URLDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\URLDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->URLDetails[] = $item;
        
        return $this;
    }
    /**
     * Get TimeZoneDetails value
     * @return \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[]
     */
    public function getTimeZoneDetails(): ?array
    {
        return $this->TimeZoneDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTimeZoneDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeZoneDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeZoneDetailsForArrayConstraintsFromSetTimeZoneDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeTimeZoneDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTimeZoneDetailsItem instanceof \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeTimeZoneDetailsItem) ? get_class($geteBayDetailsResponseTypeTimeZoneDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeTimeZoneDetailsItem), var_export($geteBayDetailsResponseTypeTimeZoneDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeZoneDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TimeZoneDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[] $timeZoneDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setTimeZoneDetails(?array $timeZoneDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($timeZoneDetailsArrayErrorMessage = self::validateTimeZoneDetailsForArrayConstraintsFromSetTimeZoneDetails($timeZoneDetails))) {
            throw new InvalidArgumentException($timeZoneDetailsArrayErrorMessage, __LINE__);
        }
        $this->TimeZoneDetails = $timeZoneDetails;
        
        return $this;
    }
    /**
     * Add item to TimeZoneDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToTimeZoneDetails(\macropage\ebaysdk\trading\StructType\TimeZoneDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType) {
            throw new InvalidArgumentException(sprintf('The TimeZoneDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TimeZoneDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ItemSpecificDetails value
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[]
     */
    public function getItemSpecificDetails(): ?array
    {
        return $this->ItemSpecificDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setItemSpecificDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemSpecificDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemSpecificDetailsForArrayConstraintsFromSetItemSpecificDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeItemSpecificDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeItemSpecificDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeItemSpecificDetailsItem) ? get_class($geteBayDetailsResponseTypeItemSpecificDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeItemSpecificDetailsItem), var_export($geteBayDetailsResponseTypeItemSpecificDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemSpecificDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemSpecificDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[] $itemSpecificDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setItemSpecificDetails(?array $itemSpecificDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemSpecificDetailsArrayErrorMessage = self::validateItemSpecificDetailsForArrayConstraintsFromSetItemSpecificDetails($itemSpecificDetails))) {
            throw new InvalidArgumentException($itemSpecificDetailsArrayErrorMessage, __LINE__);
        }
        $this->ItemSpecificDetails = $itemSpecificDetails;
        
        return $this;
    }
    /**
     * Add item to ItemSpecificDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToItemSpecificDetails(\macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType) {
            throw new InvalidArgumentException(sprintf('The ItemSpecificDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemSpecificDetails[] = $item;
        
        return $this;
    }
    /**
     * Get UnitOfMeasurementDetails value
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[]
     */
    public function getUnitOfMeasurementDetails(): ?array
    {
        return $this->UnitOfMeasurementDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitOfMeasurementDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitOfMeasurementDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitOfMeasurementDetailsForArrayConstraintsFromSetUnitOfMeasurementDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) ? get_class($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem), var_export($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitOfMeasurementDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitOfMeasurementDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setUnitOfMeasurementDetails(?array $unitOfMeasurementDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitOfMeasurementDetailsArrayErrorMessage = self::validateUnitOfMeasurementDetailsForArrayConstraintsFromSetUnitOfMeasurementDetails($unitOfMeasurementDetails))) {
            throw new InvalidArgumentException($unitOfMeasurementDetailsArrayErrorMessage, __LINE__);
        }
        $this->UnitOfMeasurementDetails = $unitOfMeasurementDetails;
        
        return $this;
    }
    /**
     * Add item to UnitOfMeasurementDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToUnitOfMeasurementDetails(\macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType) {
            throw new InvalidArgumentException(sprintf('The UnitOfMeasurementDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitOfMeasurementDetails[] = $item;
        
        return $this;
    }
    /**
     * Get RegionOfOriginDetails value
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[]
     */
    public function getRegionOfOriginDetails(): ?array
    {
        return $this->RegionOfOriginDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRegionOfOriginDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegionOfOriginDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegionOfOriginDetailsForArrayConstraintsFromSetRegionOfOriginDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRegionOfOriginDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionOfOriginDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRegionOfOriginDetailsItem), var_export($geteBayDetailsResponseTypeRegionOfOriginDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegionOfOriginDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RegionOfOriginDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRegionOfOriginDetails(?array $regionOfOriginDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($regionOfOriginDetailsArrayErrorMessage = self::validateRegionOfOriginDetailsForArrayConstraintsFromSetRegionOfOriginDetails($regionOfOriginDetails))) {
            throw new InvalidArgumentException($regionOfOriginDetailsArrayErrorMessage, __LINE__);
        }
        $this->RegionOfOriginDetails = $regionOfOriginDetails;
        
        return $this;
    }
    /**
     * Add item to RegionOfOriginDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRegionOfOriginDetails(\macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType) {
            throw new InvalidArgumentException(sprintf('The RegionOfOriginDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegionOfOriginDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingPackageDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[]
     */
    public function getShippingPackageDetails(): ?array
    {
        return $this->ShippingPackageDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingPackageDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingPackageDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingPackageDetailsForArrayConstraintsFromSetShippingPackageDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingPackageDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingPackageDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingPackageDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingPackageDetailsItem), var_export($geteBayDetailsResponseTypeShippingPackageDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingPackageDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingPackageDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[] $shippingPackageDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingPackageDetails(?array $shippingPackageDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingPackageDetailsArrayErrorMessage = self::validateShippingPackageDetailsForArrayConstraintsFromSetShippingPackageDetails($shippingPackageDetails))) {
            throw new InvalidArgumentException($shippingPackageDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingPackageDetails = $shippingPackageDetails;
        
        return $this;
    }
    /**
     * Add item to ShippingPackageDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingPackageDetails(\macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingPackageDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingPackageDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingCarrierDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[]
     */
    public function getShippingCarrierDetails(): ?array
    {
        return $this->ShippingCarrierDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCarrierDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCarrierDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCarrierDetailsForArrayConstraintsFromSetShippingCarrierDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingCarrierDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCarrierDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingCarrierDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCarrierDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingCarrierDetailsItem), var_export($geteBayDetailsResponseTypeShippingCarrierDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingCarrierDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingCarrierDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingCarrierDetails(?array $shippingCarrierDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingCarrierDetailsArrayErrorMessage = self::validateShippingCarrierDetailsForArrayConstraintsFromSetShippingCarrierDetails($shippingCarrierDetails))) {
            throw new InvalidArgumentException($shippingCarrierDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingCarrierDetails = $shippingCarrierDetails;
        
        return $this;
    }
    /**
     * Add item to ShippingCarrierDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCarrierDetails(\macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingCarrierDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingCarrierDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    public function getReturnPolicyDetails(): ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
    {
        return $this->ReturnPolicyDetails;
    }
    /**
     * Set ReturnPolicyDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setReturnPolicyDetails(?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails = null): self
    {
        $this->ReturnPolicyDetails = $returnPolicyDetails;
        
        return $this;
    }
    /**
     * Get InternationalReturnPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    public function getInternationalReturnPolicyDetails(): ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
    {
        return $this->InternationalReturnPolicyDetails;
    }
    /**
     * Set InternationalReturnPolicyDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setInternationalReturnPolicyDetails(?\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null): self
    {
        $this->InternationalReturnPolicyDetails = $internationalReturnPolicyDetails;
        
        return $this;
    }
    /**
     * Get ListingStartPriceDetails value
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[]
     */
    public function getListingStartPriceDetails(): ?array
    {
        return $this->ListingStartPriceDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setListingStartPriceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingStartPriceDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingStartPriceDetailsForArrayConstraintsFromSetListingStartPriceDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeListingStartPriceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingStartPriceDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeListingStartPriceDetailsItem) ? get_class($geteBayDetailsResponseTypeListingStartPriceDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeListingStartPriceDetailsItem), var_export($geteBayDetailsResponseTypeListingStartPriceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingStartPriceDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListingStartPriceDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setListingStartPriceDetails(?array $listingStartPriceDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($listingStartPriceDetailsArrayErrorMessage = self::validateListingStartPriceDetailsForArrayConstraintsFromSetListingStartPriceDetails($listingStartPriceDetails))) {
            throw new InvalidArgumentException($listingStartPriceDetailsArrayErrorMessage, __LINE__);
        }
        $this->ListingStartPriceDetails = $listingStartPriceDetails;
        
        return $this;
    }
    /**
     * Add item to ListingStartPriceDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToListingStartPriceDetails(\macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType) {
            throw new InvalidArgumentException(sprintf('The ListingStartPriceDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingStartPriceDetails[] = $item;
        
        return $this;
    }
    /**
     * Get BuyerRequirementDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[]
     */
    public function getBuyerRequirementDetails(): ?array
    {
        return $this->BuyerRequirementDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerRequirementDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerRequirementDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerRequirementDetailsForArrayConstraintsFromSetBuyerRequirementDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeBuyerRequirementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeBuyerRequirementDetailsItem instanceof \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) ? get_class($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeBuyerRequirementDetailsItem), var_export($geteBayDetailsResponseTypeBuyerRequirementDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerRequirementDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BuyerRequirementDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setBuyerRequirementDetails(?array $buyerRequirementDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($buyerRequirementDetailsArrayErrorMessage = self::validateBuyerRequirementDetailsForArrayConstraintsFromSetBuyerRequirementDetails($buyerRequirementDetails))) {
            throw new InvalidArgumentException($buyerRequirementDetailsArrayErrorMessage, __LINE__);
        }
        $this->BuyerRequirementDetails = $buyerRequirementDetails;
        
        return $this;
    }
    /**
     * Add item to BuyerRequirementDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToBuyerRequirementDetails(\macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType) {
            throw new InvalidArgumentException(sprintf('The BuyerRequirementDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerRequirementDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ListingFeatureDetails value
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[]
     */
    public function getListingFeatureDetails(): ?array
    {
        return $this->ListingFeatureDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setListingFeatureDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingFeatureDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingFeatureDetailsForArrayConstraintsFromSetListingFeatureDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeListingFeatureDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingFeatureDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeListingFeatureDetailsItem) ? get_class($geteBayDetailsResponseTypeListingFeatureDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeListingFeatureDetailsItem), var_export($geteBayDetailsResponseTypeListingFeatureDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingFeatureDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListingFeatureDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[] $listingFeatureDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setListingFeatureDetails(?array $listingFeatureDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($listingFeatureDetailsArrayErrorMessage = self::validateListingFeatureDetailsForArrayConstraintsFromSetListingFeatureDetails($listingFeatureDetails))) {
            throw new InvalidArgumentException($listingFeatureDetailsArrayErrorMessage, __LINE__);
        }
        $this->ListingFeatureDetails = $listingFeatureDetails;
        
        return $this;
    }
    /**
     * Add item to ListingFeatureDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToListingFeatureDetails(\macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType) {
            throw new InvalidArgumentException(sprintf('The ListingFeatureDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingFeatureDetails[] = $item;
        
        return $this;
    }
    /**
     * Get VariationDetails value
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType|null
     */
    public function getVariationDetails(): ?\macropage\ebaysdk\trading\StructType\VariationDetailsType
    {
        return $this->VariationDetails;
    }
    /**
     * Set VariationDetails value
     * @param \macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setVariationDetails(?\macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails = null): self
    {
        $this->VariationDetails = $variationDetails;
        
        return $this;
    }
    /**
     * Get ExcludeShippingLocationDetails value
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[]
     */
    public function getExcludeShippingLocationDetails(): ?array
    {
        return $this->ExcludeShippingLocationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeShippingLocationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeShippingLocationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeShippingLocationDetailsForArrayConstraintsFromSetExcludeShippingLocationDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem), var_export($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeShippingLocationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExcludeShippingLocationDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setExcludeShippingLocationDetails(?array $excludeShippingLocationDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($excludeShippingLocationDetailsArrayErrorMessage = self::validateExcludeShippingLocationDetailsForArrayConstraintsFromSetExcludeShippingLocationDetails($excludeShippingLocationDetails))) {
            throw new InvalidArgumentException($excludeShippingLocationDetailsArrayErrorMessage, __LINE__);
        }
        $this->ExcludeShippingLocationDetails = $excludeShippingLocationDetails;
        
        return $this;
    }
    /**
     * Add item to ExcludeShippingLocationDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToExcludeShippingLocationDetails(\macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType) {
            throw new InvalidArgumentException(sprintf('The ExcludeShippingLocationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeShippingLocationDetails[] = $item;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
        return $this;
    }
    /**
     * Get RecoupmentPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[]
     */
    public function getRecoupmentPolicyDetails(): ?array
    {
        return $this->RecoupmentPolicyDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRecoupmentPolicyDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecoupmentPolicyDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecoupmentPolicyDetailsForArrayConstraintsFromSetRecoupmentPolicyDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) ? get_class($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem), var_export($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecoupmentPolicyDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RecoupmentPolicyDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRecoupmentPolicyDetails(?array $recoupmentPolicyDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($recoupmentPolicyDetailsArrayErrorMessage = self::validateRecoupmentPolicyDetailsForArrayConstraintsFromSetRecoupmentPolicyDetails($recoupmentPolicyDetails))) {
            throw new InvalidArgumentException($recoupmentPolicyDetailsArrayErrorMessage, __LINE__);
        }
        $this->RecoupmentPolicyDetails = $recoupmentPolicyDetails;
        
        return $this;
    }
    /**
     * Add item to RecoupmentPolicyDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRecoupmentPolicyDetails(\macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType) {
            throw new InvalidArgumentException(sprintf('The RecoupmentPolicyDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecoupmentPolicyDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingCategoryDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[]
     */
    public function getShippingCategoryDetails(): ?array
    {
        return $this->ShippingCategoryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCategoryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCategoryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCategoryDetailsForArrayConstraintsFromSetShippingCategoryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsResponseTypeShippingCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCategoryDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType) {
                $invalidValues[] = is_object($geteBayDetailsResponseTypeShippingCategoryDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCategoryDetailsItem) : sprintf('%s(%s)', gettype($geteBayDetailsResponseTypeShippingCategoryDetailsItem), var_export($geteBayDetailsResponseTypeShippingCategoryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingCategoryDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingCategoryDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingCategoryDetails(?array $shippingCategoryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingCategoryDetailsArrayErrorMessage = self::validateShippingCategoryDetailsForArrayConstraintsFromSetShippingCategoryDetails($shippingCategoryDetails))) {
            throw new InvalidArgumentException($shippingCategoryDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShippingCategoryDetails = $shippingCategoryDetails;
        
        return $this;
    }
    /**
     * Add item to ShippingCategoryDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCategoryDetails(\macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingCategoryDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingCategoryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType|null
     */
    public function getProductDetails(): ?\macropage\ebaysdk\trading\StructType\ProductDetailsType
    {
        return $this->ProductDetails;
    }
    /**
     * Set ProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setProductDetails(?\macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails = null): self
    {
        $this->ProductDetails = $productDetails;
        
        return $this;
    }
}
