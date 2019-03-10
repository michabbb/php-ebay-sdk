<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayDetailsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about a specified site in response to <b>GeteBayDetailsRequest</b>. If no <b>DetailName</b> field is identified in the request, all elements of <b>GeteBayDetailsResponse</b> are returned. Otherwise, eBay returns only the
 * elements corresponding to the specified <b>DetailName</b> fields. <b>UpdateTime</b> gives the time of modification of the most recently modified <b>DetailName</b>.
 * @subpackage Structs
 */
class GeteBayDetailsResponseType extends AbstractResponseType
{
    /**
     * The CountryDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the country code and associated name of the countries supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if
     * <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CountryDetailsType[]
     */
    public $CountryDetails;
    /**
     * The CurrencyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the currencies supported by the eBay system, regardless of the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>CurrencyDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[]
     */
    public $CurrencyDetails;
    /**
     * The DispatchTimeMaxDetails
     * Meta informations extracted from the WSDL
     * - documentation: A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified
     * in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     * </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[]
     */
    public $DispatchTimeMaxDetails;
    /**
     * The PaymentOptionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[]
     */
    public $PaymentOptionDetails;
    /**
     * The RegionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the cities and other domestic regions for the specified site's country. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegionDetailsType[]
     */
    public $RegionDetails;
    /**
     * The ShippingLocationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the worldwide regions that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingLocationDetails</b> is included as a
     * <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[]
     */
    public $ShippingLocationDetails;
    /**
     * The ShippingServiceDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only
     * returned if <b>ShippingServiceDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[]
     */
    public $ShippingServiceDetails;
    /**
     * The SiteDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists all available eBay sites and their associated <b>SiteID</b> numbers. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>SiteDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteDetailsType[]
     */
    public $SiteDetails;
    /**
     * The TaxJurisdiction
     * Meta informations extracted from the WSDL
     * - documentation: Details the different tax jurisdictions or tax regions applicable to the site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay US Motors (Site ID 100),
     * eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header. <br/><br/> <span class="tablenote"><b>Note: </b> This container is
     * only returned if <b>TaxJurisdiction</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    public $TaxJurisdiction;
    /**
     * The URLDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists eBay URLs that are applicable to the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>URLDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\URLDetailsType[]
     */
    public $URLDetails;
    /**
     * The TimeZoneDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the details of the time zones supported by the eBay system. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>TimeZoneDetails</b> is included as a <b>DetailName</b> filter in the request, or
     * if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[]
     */
    public $TimeZoneDetails;
    /**
     * The ItemSpecificDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the site's maximum thresholds for specifying Item Specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ItemSpecificDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[]
     */
    public $ItemSpecificDetails;
    /**
     * The UnitOfMeasurementDetails
     * Meta informations extracted from the WSDL
     * - documentation: Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[]
     */
    public $UnitOfMeasurementDetails;
    /**
     * The RegionOfOriginDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RegionOfOriginDetails</b>
     * is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[]
     */
    public $RegionOfOriginDetails;
    /**
     * The ShippingPackageDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the various shipping packages supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingPackageDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[]
     */
    public $ShippingPackageDetails;
    /**
     * The ShippingCarrierDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the shipping carriers supported by the specified site. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ShippingCarrierDetails</b> is included as a <b>DetailName</b> filter in the request,
     * or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[]
     */
    public $ShippingCarrierDetails;
    /**
     * The ReturnPolicyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options. <br/><br/> <span class="tablenote"><b>Note: </b> This container is
     * only returned if <b>ReturnPolicyDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public $ReturnPolicyDetails;
    /**
     * The InternationalReturnPolicyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the international return policies supported by the eBay marketplace specified in the request, such as the return periods supported by the marketplace.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public $InternationalReturnPolicyDetails;
    /**
     * The ListingStartPriceDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the minimum starting prices for the supported types of eBay listings. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingStartPriceDetails</b> is included as a <b>DetailName</b> filter
     * in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[]
     */
    public $ListingStartPriceDetails;
    /**
     * The BuyerRequirementDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy
     * violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that
     * container will override values set at the account level. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> filter in the request, or if no
     * <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[]
     */
    public $BuyerRequirementDetails;
    /**
     * The ListingFeatureDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details the listing features available for the eBay site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ListingFeatureDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[]
     */
    public $ListingFeatureDetails;
    /**
     * The VariationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Site-level validation rules for multi-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations. Use
     * <b>GetCategorySpecifics</b> for rules related to recommended or required variation specifics. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the
     * request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public $VariationDetails;
    /**
     * The ExcludeShippingLocationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are locations that a seller can list as areas where they will not ship an item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[]
     */
    public $ExcludeShippingLocationDetails;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: The time of the most recent modification to any feature detail. If specific feature details are passed in the request, gives the most recent modification time of those feature details.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The RecoupmentPolicyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details the recoupment policies for the site specified in the request. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a <b>DetailName</b> filter in
     * the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[]
     */
    public $RecoupmentPolicyDetails;
    /**
     * The ShippingCategoryDetails
     * Meta informations extracted from the WSDL
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
    public $ShippingCategoryDetails;
    /**
     * The ProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ProductDetails.ProductIdentifierUnavailableText</b> field contains the actual text that should be passed into the relevant product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is prompting/expecting one of these
     * fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist
     * for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search. <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>ProductDetails</b> is included as a <b>DetailName</b>
     * filter in the request, or if no <b>DetailName</b> filters are used in the request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductDetailsType
     */
    public $ProductDetails;
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
    public function __construct(array $countryDetails = array(), array $currencyDetails = array(), array $dispatchTimeMaxDetails = array(), array $paymentOptionDetails = array(), array $regionDetails = array(), array $shippingLocationDetails = array(), array $shippingServiceDetails = array(), array $siteDetails = array(), array $taxJurisdiction = array(), array $uRLDetails = array(), array $timeZoneDetails = array(), array $itemSpecificDetails = array(), array $unitOfMeasurementDetails = array(), array $regionOfOriginDetails = array(), array $shippingPackageDetails = array(), array $shippingCarrierDetails = array(), \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails = null, \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null, array $listingStartPriceDetails = array(), array $buyerRequirementDetails = array(), array $listingFeatureDetails = array(), \macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails = null, array $excludeShippingLocationDetails = array(), $updateTime = null, array $recoupmentPolicyDetails = array(), array $shippingCategoryDetails = array(), \macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails = null)
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
     * @return \macropage\ebaysdk\trading\StructType\CountryDetailsType[]|null
     */
    public function getCountryDetails()
    {
        return $this->CountryDetails;
    }
    /**
     * Set CountryDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryDetailsType[] $countryDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setCountryDetails(array $countryDetails = array())
    {
        foreach ($countryDetails as $geteBayDetailsResponseTypeCountryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCountryDetailsItem instanceof \macropage\ebaysdk\trading\StructType\CountryDetailsType) {
                throw new \InvalidArgumentException(sprintf('The CountryDetails property can only contain items of \macropage\ebaysdk\trading\StructType\CountryDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeCountryDetailsItem) ? get_class($geteBayDetailsResponseTypeCountryDetailsItem) : gettype($geteBayDetailsResponseTypeCountryDetailsItem)), __LINE__);
            }
        }
        $this->CountryDetails = $countryDetails;
        return $this;
    }
    /**
     * Add item to CountryDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CountryDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToCountryDetails(\macropage\ebaysdk\trading\StructType\CountryDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CountryDetailsType) {
            throw new \InvalidArgumentException(sprintf('The CountryDetails property can only contain items of \macropage\ebaysdk\trading\StructType\CountryDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CountryDetails[] = $item;
        return $this;
    }
    /**
     * Get CurrencyDetails value
     * @return \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[]|null
     */
    public function getCurrencyDetails()
    {
        return $this->CurrencyDetails;
    }
    /**
     * Set CurrencyDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CurrencyDetailsType[] $currencyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setCurrencyDetails(array $currencyDetails = array())
    {
        foreach ($currencyDetails as $geteBayDetailsResponseTypeCurrencyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeCurrencyDetailsItem instanceof \macropage\ebaysdk\trading\StructType\CurrencyDetailsType) {
                throw new \InvalidArgumentException(sprintf('The CurrencyDetails property can only contain items of \macropage\ebaysdk\trading\StructType\CurrencyDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeCurrencyDetailsItem) ? get_class($geteBayDetailsResponseTypeCurrencyDetailsItem) : gettype($geteBayDetailsResponseTypeCurrencyDetailsItem)), __LINE__);
            }
        }
        $this->CurrencyDetails = $currencyDetails;
        return $this;
    }
    /**
     * Add item to CurrencyDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CurrencyDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToCurrencyDetails(\macropage\ebaysdk\trading\StructType\CurrencyDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CurrencyDetailsType) {
            throw new \InvalidArgumentException(sprintf('The CurrencyDetails property can only contain items of \macropage\ebaysdk\trading\StructType\CurrencyDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CurrencyDetails[] = $item;
        return $this;
    }
    /**
     * Get DispatchTimeMaxDetails value
     * @return \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[]|null
     */
    public function getDispatchTimeMaxDetails()
    {
        return $this->DispatchTimeMaxDetails;
    }
    /**
     * Set DispatchTimeMaxDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setDispatchTimeMaxDetails(array $dispatchTimeMaxDetails = array())
    {
        foreach ($dispatchTimeMaxDetails as $geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem instanceof \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType) {
                throw new \InvalidArgumentException(sprintf('The DispatchTimeMaxDetails property can only contain items of \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) ? get_class($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem) : gettype($geteBayDetailsResponseTypeDispatchTimeMaxDetailsItem)), __LINE__);
            }
        }
        $this->DispatchTimeMaxDetails = $dispatchTimeMaxDetails;
        return $this;
    }
    /**
     * Add item to DispatchTimeMaxDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToDispatchTimeMaxDetails(\macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType) {
            throw new \InvalidArgumentException(sprintf('The DispatchTimeMaxDetails property can only contain items of \macropage\ebaysdk\trading\StructType\DispatchTimeMaxDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DispatchTimeMaxDetails[] = $item;
        return $this;
    }
    /**
     * Get PaymentOptionDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[]|null
     */
    public function getPaymentOptionDetails()
    {
        return $this->PaymentOptionDetails;
    }
    /**
     * Set PaymentOptionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType[] $paymentOptionDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setPaymentOptionDetails(array $paymentOptionDetails = array())
    {
        foreach ($paymentOptionDetails as $geteBayDetailsResponseTypePaymentOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypePaymentOptionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PaymentOptionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType, "%s" given', is_object($geteBayDetailsResponseTypePaymentOptionDetailsItem) ? get_class($geteBayDetailsResponseTypePaymentOptionDetailsItem) : gettype($geteBayDetailsResponseTypePaymentOptionDetailsItem)), __LINE__);
            }
        }
        $this->PaymentOptionDetails = $paymentOptionDetails;
        return $this;
    }
    /**
     * Add item to PaymentOptionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToPaymentOptionDetails(\macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentOptionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentOptionDetails[] = $item;
        return $this;
    }
    /**
     * Get RegionDetails value
     * @return \macropage\ebaysdk\trading\StructType\RegionDetailsType[]|null
     */
    public function getRegionDetails()
    {
        return $this->RegionDetails;
    }
    /**
     * Set RegionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionDetailsType[] $regionDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRegionDetails(array $regionDetails = array())
    {
        foreach ($regionDetails as $geteBayDetailsResponseTypeRegionDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RegionDetailsType) {
                throw new \InvalidArgumentException(sprintf('The RegionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RegionDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeRegionDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionDetailsItem) : gettype($geteBayDetailsResponseTypeRegionDetailsItem)), __LINE__);
            }
        }
        $this->RegionDetails = $regionDetails;
        return $this;
    }
    /**
     * Add item to RegionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRegionDetails(\macropage\ebaysdk\trading\StructType\RegionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RegionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RegionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RegionDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegionDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingLocationDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[]|null
     */
    public function getShippingLocationDetails()
    {
        return $this->ShippingLocationDetails;
    }
    /**
     * Set ShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType[] $shippingLocationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingLocationDetails(array $shippingLocationDetails = array())
    {
        foreach ($shippingLocationDetails as $geteBayDetailsResponseTypeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingLocationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingLocationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingLocationDetailsItem) : gettype($geteBayDetailsResponseTypeShippingLocationDetailsItem)), __LINE__);
            }
        }
        $this->ShippingLocationDetails = $shippingLocationDetails;
        return $this;
    }
    /**
     * Add item to ShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingLocationDetails(\macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingLocationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingLocationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingLocationDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[]|null
     */
    public function getShippingServiceDetails()
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * Set ShippingServiceDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType[] $shippingServiceDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingServiceDetails(array $shippingServiceDetails = array())
    {
        foreach ($shippingServiceDetails as $geteBayDetailsResponseTypeShippingServiceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingServiceDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingServiceDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeShippingServiceDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingServiceDetailsItem) : gettype($geteBayDetailsResponseTypeShippingServiceDetailsItem)), __LINE__);
            }
        }
        $this->ShippingServiceDetails = $shippingServiceDetails;
        return $this;
    }
    /**
     * Add item to ShippingServiceDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingServiceDetails(\macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingServiceDetails[] = $item;
        return $this;
    }
    /**
     * Get SiteDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteDetailsType[]|null
     */
    public function getSiteDetails()
    {
        return $this->SiteDetails;
    }
    /**
     * Set SiteDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteDetailsType[] $siteDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setSiteDetails(array $siteDetails = array())
    {
        foreach ($siteDetails as $geteBayDetailsResponseTypeSiteDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeSiteDetailsItem instanceof \macropage\ebaysdk\trading\StructType\SiteDetailsType) {
                throw new \InvalidArgumentException(sprintf('The SiteDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SiteDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeSiteDetailsItem) ? get_class($geteBayDetailsResponseTypeSiteDetailsItem) : gettype($geteBayDetailsResponseTypeSiteDetailsItem)), __LINE__);
            }
        }
        $this->SiteDetails = $siteDetails;
        return $this;
    }
    /**
     * Add item to SiteDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToSiteDetails(\macropage\ebaysdk\trading\StructType\SiteDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SiteDetailsType) {
            throw new \InvalidArgumentException(sprintf('The SiteDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SiteDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SiteDetails[] = $item;
        return $this;
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]|null
     */
    public function getTaxJurisdiction()
    {
        return $this->TaxJurisdiction;
    }
    /**
     * Set TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = array())
    {
        foreach ($taxJurisdiction as $geteBayDetailsResponseTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
                throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, "%s" given', is_object($geteBayDetailsResponseTypeTaxJurisdictionItem) ? get_class($geteBayDetailsResponseTypeTaxJurisdictionItem) : gettype($geteBayDetailsResponseTypeTaxJurisdictionItem)), __LINE__);
            }
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
            throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        return $this;
    }
    /**
     * Get URLDetails value
     * @return \macropage\ebaysdk\trading\StructType\URLDetailsType[]|null
     */
    public function getURLDetails()
    {
        return $this->URLDetails;
    }
    /**
     * Set URLDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\URLDetailsType[] $uRLDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setURLDetails(array $uRLDetails = array())
    {
        foreach ($uRLDetails as $geteBayDetailsResponseTypeURLDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeURLDetailsItem instanceof \macropage\ebaysdk\trading\StructType\URLDetailsType) {
                throw new \InvalidArgumentException(sprintf('The URLDetails property can only contain items of \macropage\ebaysdk\trading\StructType\URLDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeURLDetailsItem) ? get_class($geteBayDetailsResponseTypeURLDetailsItem) : gettype($geteBayDetailsResponseTypeURLDetailsItem)), __LINE__);
            }
        }
        $this->URLDetails = $uRLDetails;
        return $this;
    }
    /**
     * Add item to URLDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\URLDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToURLDetails(\macropage\ebaysdk\trading\StructType\URLDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\URLDetailsType) {
            throw new \InvalidArgumentException(sprintf('The URLDetails property can only contain items of \macropage\ebaysdk\trading\StructType\URLDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URLDetails[] = $item;
        return $this;
    }
    /**
     * Get TimeZoneDetails value
     * @return \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[]|null
     */
    public function getTimeZoneDetails()
    {
        return $this->TimeZoneDetails;
    }
    /**
     * Set TimeZoneDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType[] $timeZoneDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setTimeZoneDetails(array $timeZoneDetails = array())
    {
        foreach ($timeZoneDetails as $geteBayDetailsResponseTypeTimeZoneDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeTimeZoneDetailsItem instanceof \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType) {
                throw new \InvalidArgumentException(sprintf('The TimeZoneDetails property can only contain items of \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeTimeZoneDetailsItem) ? get_class($geteBayDetailsResponseTypeTimeZoneDetailsItem) : gettype($geteBayDetailsResponseTypeTimeZoneDetailsItem)), __LINE__);
            }
        }
        $this->TimeZoneDetails = $timeZoneDetails;
        return $this;
    }
    /**
     * Add item to TimeZoneDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToTimeZoneDetails(\macropage\ebaysdk\trading\StructType\TimeZoneDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TimeZoneDetails property can only contain items of \macropage\ebaysdk\trading\StructType\TimeZoneDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TimeZoneDetails[] = $item;
        return $this;
    }
    /**
     * Get ItemSpecificDetails value
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[]|null
     */
    public function getItemSpecificDetails()
    {
        return $this->ItemSpecificDetails;
    }
    /**
     * Set ItemSpecificDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType[] $itemSpecificDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setItemSpecificDetails(array $itemSpecificDetails = array())
    {
        foreach ($itemSpecificDetails as $geteBayDetailsResponseTypeItemSpecificDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeItemSpecificDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ItemSpecificDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeItemSpecificDetailsItem) ? get_class($geteBayDetailsResponseTypeItemSpecificDetailsItem) : gettype($geteBayDetailsResponseTypeItemSpecificDetailsItem)), __LINE__);
            }
        }
        $this->ItemSpecificDetails = $itemSpecificDetails;
        return $this;
    }
    /**
     * Add item to ItemSpecificDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToItemSpecificDetails(\macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemSpecificDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemSpecificDetails[] = $item;
        return $this;
    }
    /**
     * Get UnitOfMeasurementDetails value
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[]|null
     */
    public function getUnitOfMeasurementDetails()
    {
        return $this->UnitOfMeasurementDetails;
    }
    /**
     * Set UnitOfMeasurementDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setUnitOfMeasurementDetails(array $unitOfMeasurementDetails = array())
    {
        foreach ($unitOfMeasurementDetails as $geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType) {
                throw new \InvalidArgumentException(sprintf('The UnitOfMeasurementDetails property can only contain items of \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) ? get_class($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem) : gettype($geteBayDetailsResponseTypeUnitOfMeasurementDetailsItem)), __LINE__);
            }
        }
        $this->UnitOfMeasurementDetails = $unitOfMeasurementDetails;
        return $this;
    }
    /**
     * Add item to UnitOfMeasurementDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToUnitOfMeasurementDetails(\macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType) {
            throw new \InvalidArgumentException(sprintf('The UnitOfMeasurementDetails property can only contain items of \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnitOfMeasurementDetails[] = $item;
        return $this;
    }
    /**
     * Get RegionOfOriginDetails value
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[]|null
     */
    public function getRegionOfOriginDetails()
    {
        return $this->RegionOfOriginDetails;
    }
    /**
     * Set RegionOfOriginDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRegionOfOriginDetails(array $regionOfOriginDetails = array())
    {
        foreach ($regionOfOriginDetails as $geteBayDetailsResponseTypeRegionOfOriginDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRegionOfOriginDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType) {
                throw new \InvalidArgumentException(sprintf('The RegionOfOriginDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) ? get_class($geteBayDetailsResponseTypeRegionOfOriginDetailsItem) : gettype($geteBayDetailsResponseTypeRegionOfOriginDetailsItem)), __LINE__);
            }
        }
        $this->RegionOfOriginDetails = $regionOfOriginDetails;
        return $this;
    }
    /**
     * Add item to RegionOfOriginDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRegionOfOriginDetails(\macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RegionOfOriginDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegionOfOriginDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackageDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[]|null
     */
    public function getShippingPackageDetails()
    {
        return $this->ShippingPackageDetails;
    }
    /**
     * Set ShippingPackageDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType[] $shippingPackageDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingPackageDetails(array $shippingPackageDetails = array())
    {
        foreach ($shippingPackageDetails as $geteBayDetailsResponseTypeShippingPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingPackageDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingPackageDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeShippingPackageDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingPackageDetailsItem) : gettype($geteBayDetailsResponseTypeShippingPackageDetailsItem)), __LINE__);
            }
        }
        $this->ShippingPackageDetails = $shippingPackageDetails;
        return $this;
    }
    /**
     * Add item to ShippingPackageDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingPackageDetails(\macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingPackageDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingPackageDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingCarrierDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[]|null
     */
    public function getShippingCarrierDetails()
    {
        return $this->ShippingCarrierDetails;
    }
    /**
     * Set ShippingCarrierDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingCarrierDetails(array $shippingCarrierDetails = array())
    {
        foreach ($shippingCarrierDetails as $geteBayDetailsResponseTypeShippingCarrierDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCarrierDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingCarrierDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeShippingCarrierDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCarrierDetailsItem) : gettype($geteBayDetailsResponseTypeShippingCarrierDetailsItem)), __LINE__);
            }
        }
        $this->ShippingCarrierDetails = $shippingCarrierDetails;
        return $this;
    }
    /**
     * Add item to ShippingCarrierDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCarrierDetails(\macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingCarrierDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingCarrierDetails[] = $item;
        return $this;
    }
    /**
     * Get ReturnPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    public function getReturnPolicyDetails()
    {
        return $this->ReturnPolicyDetails;
    }
    /**
     * Set ReturnPolicyDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setReturnPolicyDetails(\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $returnPolicyDetails = null)
    {
        $this->ReturnPolicyDetails = $returnPolicyDetails;
        return $this;
    }
    /**
     * Get InternationalReturnPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType|null
     */
    public function getInternationalReturnPolicyDetails()
    {
        return $this->InternationalReturnPolicyDetails;
    }
    /**
     * Set InternationalReturnPolicyDetails value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setInternationalReturnPolicyDetails(\macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType $internationalReturnPolicyDetails = null)
    {
        $this->InternationalReturnPolicyDetails = $internationalReturnPolicyDetails;
        return $this;
    }
    /**
     * Get ListingStartPriceDetails value
     * @return \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[]|null
     */
    public function getListingStartPriceDetails()
    {
        return $this->ListingStartPriceDetails;
    }
    /**
     * Set ListingStartPriceDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setListingStartPriceDetails(array $listingStartPriceDetails = array())
    {
        foreach ($listingStartPriceDetails as $geteBayDetailsResponseTypeListingStartPriceDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingStartPriceDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ListingStartPriceDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeListingStartPriceDetailsItem) ? get_class($geteBayDetailsResponseTypeListingStartPriceDetailsItem) : gettype($geteBayDetailsResponseTypeListingStartPriceDetailsItem)), __LINE__);
            }
        }
        $this->ListingStartPriceDetails = $listingStartPriceDetails;
        return $this;
    }
    /**
     * Add item to ListingStartPriceDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToListingStartPriceDetails(\macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ListingStartPriceDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ListingStartPriceDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListingStartPriceDetails[] = $item;
        return $this;
    }
    /**
     * Get BuyerRequirementDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[]|null
     */
    public function getBuyerRequirementDetails()
    {
        return $this->BuyerRequirementDetails;
    }
    /**
     * Set BuyerRequirementDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setBuyerRequirementDetails(array $buyerRequirementDetails = array())
    {
        foreach ($buyerRequirementDetails as $geteBayDetailsResponseTypeBuyerRequirementDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeBuyerRequirementDetailsItem instanceof \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType) {
                throw new \InvalidArgumentException(sprintf('The BuyerRequirementDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) ? get_class($geteBayDetailsResponseTypeBuyerRequirementDetailsItem) : gettype($geteBayDetailsResponseTypeBuyerRequirementDetailsItem)), __LINE__);
            }
        }
        $this->BuyerRequirementDetails = $buyerRequirementDetails;
        return $this;
    }
    /**
     * Add item to BuyerRequirementDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToBuyerRequirementDetails(\macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType) {
            throw new \InvalidArgumentException(sprintf('The BuyerRequirementDetails property can only contain items of \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BuyerRequirementDetails[] = $item;
        return $this;
    }
    /**
     * Get ListingFeatureDetails value
     * @return \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[]|null
     */
    public function getListingFeatureDetails()
    {
        return $this->ListingFeatureDetails;
    }
    /**
     * Set ListingFeatureDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType[] $listingFeatureDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setListingFeatureDetails(array $listingFeatureDetails = array())
    {
        foreach ($listingFeatureDetails as $geteBayDetailsResponseTypeListingFeatureDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeListingFeatureDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ListingFeatureDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeListingFeatureDetailsItem) ? get_class($geteBayDetailsResponseTypeListingFeatureDetailsItem) : gettype($geteBayDetailsResponseTypeListingFeatureDetailsItem)), __LINE__);
            }
        }
        $this->ListingFeatureDetails = $listingFeatureDetails;
        return $this;
    }
    /**
     * Add item to ListingFeatureDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToListingFeatureDetails(\macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ListingFeatureDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ListingFeatureDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListingFeatureDetails[] = $item;
        return $this;
    }
    /**
     * Get VariationDetails value
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType|null
     */
    public function getVariationDetails()
    {
        return $this->VariationDetails;
    }
    /**
     * Set VariationDetails value
     * @param \macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setVariationDetails(\macropage\ebaysdk\trading\StructType\VariationDetailsType $variationDetails = null)
    {
        $this->VariationDetails = $variationDetails;
        return $this;
    }
    /**
     * Get ExcludeShippingLocationDetails value
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[]|null
     */
    public function getExcludeShippingLocationDetails()
    {
        return $this->ExcludeShippingLocationDetails;
    }
    /**
     * Set ExcludeShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setExcludeShippingLocationDetails(array $excludeShippingLocationDetails = array())
    {
        foreach ($excludeShippingLocationDetails as $geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ExcludeShippingLocationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) ? get_class($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem) : gettype($geteBayDetailsResponseTypeExcludeShippingLocationDetailsItem)), __LINE__);
            }
        }
        $this->ExcludeShippingLocationDetails = $excludeShippingLocationDetails;
        return $this;
    }
    /**
     * Add item to ExcludeShippingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToExcludeShippingLocationDetails(\macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ExcludeShippingLocationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExcludeShippingLocationDetails[] = $item;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get RecoupmentPolicyDetails value
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[]|null
     */
    public function getRecoupmentPolicyDetails()
    {
        return $this->RecoupmentPolicyDetails;
    }
    /**
     * Set RecoupmentPolicyDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setRecoupmentPolicyDetails(array $recoupmentPolicyDetails = array())
    {
        foreach ($recoupmentPolicyDetails as $geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem instanceof \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType) {
                throw new \InvalidArgumentException(sprintf('The RecoupmentPolicyDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) ? get_class($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem) : gettype($geteBayDetailsResponseTypeRecoupmentPolicyDetailsItem)), __LINE__);
            }
        }
        $this->RecoupmentPolicyDetails = $recoupmentPolicyDetails;
        return $this;
    }
    /**
     * Add item to RecoupmentPolicyDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToRecoupmentPolicyDetails(\macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RecoupmentPolicyDetails property can only contain items of \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecoupmentPolicyDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingCategoryDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[]|null
     */
    public function getShippingCategoryDetails()
    {
        return $this->ShippingCategoryDetails;
    }
    /**
     * Set ShippingCategoryDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setShippingCategoryDetails(array $shippingCategoryDetails = array())
    {
        foreach ($shippingCategoryDetails as $geteBayDetailsResponseTypeShippingCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$geteBayDetailsResponseTypeShippingCategoryDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingCategoryDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType, "%s" given', is_object($geteBayDetailsResponseTypeShippingCategoryDetailsItem) ? get_class($geteBayDetailsResponseTypeShippingCategoryDetailsItem) : gettype($geteBayDetailsResponseTypeShippingCategoryDetailsItem)), __LINE__);
            }
        }
        $this->ShippingCategoryDetails = $shippingCategoryDetails;
        return $this;
    }
    /**
     * Add item to ShippingCategoryDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function addToShippingCategoryDetails(\macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingCategoryDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingCategoryDetails[] = $item;
        return $this;
    }
    /**
     * Get ProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType|null
     */
    public function getProductDetails()
    {
        return $this->ProductDetails;
    }
    /**
     * Set ProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
     */
    public function setProductDetails(\macropage\ebaysdk\trading\StructType\ProductDetailsType $productDetails = null)
    {
        $this->ProductDetails = $productDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsResponseType
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
