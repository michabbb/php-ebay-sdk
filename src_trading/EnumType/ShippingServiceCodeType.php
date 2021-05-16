<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingServiceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: A shipping service used to ship an item. Applications should not depend on the completeness of <strong>ShippingServiceCodeType</strong>. Instead, applications should call GeteBayDetails, with a <strong>DetailName</strong> value of
 * <code>ShippingServiceDetails</code>, to return the complete list of shipping services. To check for the shipping services available for a specific site, specify the site ID in the header. <br/><br/> <span class="tablenote"> <strong>Note:</strong> It
 * is possible that some of the returned shipping services can no longer be used in the AddItem family of calls. To distinguish between the valid and invalid shipping services, look for the <strong>ValidForSellingFlow</strong> flag in the
 * <strong>ShippingServiceDetails</strong> node. If this flag is not returned for a specific shipping service, that shipping service can no longer be used in the AddItem family of calls. </span>
 * @subpackage Enumerations
 */
class ShippingServiceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UPSGround'
     * Meta information extracted from the WSDL
     * - documentation: UPS Ground
     * @return string 'UPSGround'
     */
    const VALUE_UPSGROUND = 'UPSGround';
    /**
     * Constant for value 'UPS3rdDay'
     * Meta information extracted from the WSDL
     * - documentation: UPS 3rd Day
     * @return string 'UPS3rdDay'
     */
    const VALUE_UPS_3_RD_DAY = 'UPS3rdDay';
    /**
     * Constant for value 'UPS2ndDay'
     * Meta information extracted from the WSDL
     * - documentation: UPS 2nd Day
     * @return string 'UPS2ndDay'
     */
    const VALUE_UPS_2_ND_DAY = 'UPS2ndDay';
    /**
     * Constant for value 'UPSNextDay'
     * Meta information extracted from the WSDL
     * - documentation: UPS Next Day
     * @return string 'UPSNextDay'
     */
    const VALUE_UPSNEXT_DAY = 'UPSNextDay';
    /**
     * Constant for value 'USPSPriority'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority
     * @return string 'USPSPriority'
     */
    const VALUE_USPSPRIORITY = 'USPSPriority';
    /**
     * Constant for value 'USPSParcel'
     * Meta information extracted from the WSDL
     * - documentation: USPS Parcel Select Non-Presort
     * @return string 'USPSParcel'
     */
    const VALUE_USPSPARCEL = 'USPSParcel';
    /**
     * Constant for value 'USPSStandardPost'
     * Meta information extracted from the WSDL
     * - documentation: USPS Standard Post
     * @return string 'USPSStandardPost'
     */
    const VALUE_USPSSTANDARD_POST = 'USPSStandardPost';
    /**
     * Constant for value 'USPSMedia'
     * Meta information extracted from the WSDL
     * - documentation: USPS Media
     * @return string 'USPSMedia'
     */
    const VALUE_USPSMEDIA = 'USPSMedia';
    /**
     * Constant for value 'USPSFirstClass'
     * Meta information extracted from the WSDL
     * - documentation: USPS First Class
     * @return string 'USPSFirstClass'
     */
    const VALUE_USPSFIRST_CLASS = 'USPSFirstClass';
    /**
     * Constant for value 'ShippingMethodStandard'
     * Meta information extracted from the WSDL
     * - documentation: Standard shipping method
     * @return string 'ShippingMethodStandard'
     */
    const VALUE_SHIPPING_METHOD_STANDARD = 'ShippingMethodStandard';
    /**
     * Constant for value 'ShippingMethodExpress'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'ShippingMethodExpress'
     */
    const VALUE_SHIPPING_METHOD_EXPRESS = 'ShippingMethodExpress';
    /**
     * Constant for value 'USPSExpressMail'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express
     * @return string 'USPSExpressMail'
     */
    const VALUE_USPSEXPRESS_MAIL = 'USPSExpressMail';
    /**
     * Constant for value 'UPSNextDayAir'
     * Meta information extracted from the WSDL
     * - documentation: UPS Next Day Air
     * @return string 'UPSNextDayAir'
     */
    const VALUE_UPSNEXT_DAY_AIR = 'UPSNextDayAir';
    /**
     * Constant for value 'UPS2DayAirAM'
     * Meta information extracted from the WSDL
     * - documentation: UPS Next Day Air
     * @return string 'UPS2DayAirAM'
     */
    const VALUE_UPS_2_DAY_AIR_AM = 'UPS2DayAirAM';
    /**
     * Constant for value 'USPSExpressMailFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package
     * size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSExpressMailFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_FLAT_RATE_ENVELOPE = 'USPSExpressMailFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailPaddedFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a
     * package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSExpressMailPaddedFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of
     * Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailSmallFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Small Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size
     * of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailSmallFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailSmallFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a package size of
     * Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_FLAT_RATE_BOX = 'USPSPriorityMailFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailLargeFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Large Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailLargeFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailLargeFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailPaddedFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailPaddedFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailLegalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailLegalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailLegalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSExpressMailLegalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxA'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Regional Box A To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailRegionalBoxA'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_A = 'USPSPriorityMailRegionalBoxA';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxB'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Regional Box B To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailRegionalBoxB'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_B = 'USPSPriorityMailRegionalBoxB';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxC'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Regional Box C To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailRegionalBoxC'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_C = 'USPSPriorityMailRegionalBoxC';
    /**
     * Constant for value 'USPSExpressMailFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSExpressMailFlatRateBox'
     */
    const VALUE_USPSEXPRESS_MAIL_FLAT_RATE_BOX = 'USPSExpressMailFlatRateBox';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Other (see description)
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'LocalDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Local Delivery/Pickup
     * @return string 'LocalDelivery'
     */
    const VALUE_LOCAL_DELIVERY = 'LocalDelivery';
    /**
     * Constant for value 'NotSelected'
     * Meta information extracted from the WSDL
     * - documentation: Not Selected
     * @return string 'NotSelected'
     */
    const VALUE_NOT_SELECTED = 'NotSelected';
    /**
     * Constant for value 'InternationalNotSelected'
     * Meta information extracted from the WSDL
     * - documentation: International Not Selected
     * @return string 'InternationalNotSelected'
     */
    const VALUE_INTERNATIONAL_NOT_SELECTED = 'InternationalNotSelected';
    /**
     * Constant for value 'StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standard International Flat Rate Shipping
     * @return string 'StandardInternational'
     */
    const VALUE_STANDARD_INTERNATIONAL = 'StandardInternational';
    /**
     * Constant for value 'ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedited International Flat Rate Shipping
     * @return string 'ExpeditedInternational'
     */
    const VALUE_EXPEDITED_INTERNATIONAL = 'ExpeditedInternational';
    /**
     * Constant for value 'USPSGlobalExpress'
     * Meta information extracted from the WSDL
     * - documentation: USPS Global Express Mail
     * @return string 'USPSGlobalExpress'
     */
    const VALUE_USPSGLOBAL_EXPRESS = 'USPSGlobalExpress';
    /**
     * Constant for value 'USPSGlobalPriority'
     * Meta information extracted from the WSDL
     * - documentation: USPS Global Priority Mail
     * @return string 'USPSGlobalPriority'
     */
    const VALUE_USPSGLOBAL_PRIORITY = 'USPSGlobalPriority';
    /**
     * Constant for value 'USPSEconomyParcel'
     * Meta information extracted from the WSDL
     * - documentation: USPS Economy Parcel Post
     * @return string 'USPSEconomyParcel'
     */
    const VALUE_USPSECONOMY_PARCEL = 'USPSEconomyParcel';
    /**
     * Constant for value 'USPSEconomyLetter'
     * Meta information extracted from the WSDL
     * - documentation: USPS Economy Letter Post
     * @return string 'USPSEconomyLetter'
     */
    const VALUE_USPSECONOMY_LETTER = 'USPSEconomyLetter';
    /**
     * Constant for value 'USPSAirmailLetter'
     * Meta information extracted from the WSDL
     * - documentation: USPS Airmail Letter Post
     * @return string 'USPSAirmailLetter'
     */
    const VALUE_USPSAIRMAIL_LETTER = 'USPSAirmailLetter';
    /**
     * Constant for value 'USPSAirmailParcel'
     * Meta information extracted from the WSDL
     * - documentation: USPS Airmail Parcel Post
     * @return string 'USPSAirmailParcel'
     */
    const VALUE_USPSAIRMAIL_PARCEL = 'USPSAirmailParcel';
    /**
     * Constant for value 'UPSWorldWideExpressPlus'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Plus
     * @return string 'UPSWorldWideExpressPlus'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS = 'UPSWorldWideExpressPlus';
    /**
     * Constant for value 'UPSWorldWideExpress'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express
     * @return string 'UPSWorldWideExpress'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS = 'UPSWorldWideExpress';
    /**
     * Constant for value 'UPSWorldWideExpedited'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Expedited
     * @return string 'UPSWorldWideExpedited'
     */
    const VALUE_UPSWORLD_WIDE_EXPEDITED = 'UPSWorldWideExpedited';
    /**
     * Constant for value 'UPSWorldwideSaver'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Saver
     * @return string 'UPSWorldwideSaver'
     */
    const VALUE_UPSWORLDWIDE_SAVER = 'UPSWorldwideSaver';
    /**
     * Constant for value 'UPSStandardToCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard To Canada
     * @return string 'UPSStandardToCanada'
     */
    const VALUE_UPSSTANDARD_TO_CANADA = 'UPSStandardToCanada';
    /**
     * Constant for value 'USPSExpressMailInternationalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express International Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also
     * specify a package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSExpressMailInternationalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalPaddedFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express International Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must
     * also specify a package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSExpressMailInternationalPaddedFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a
     * package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailInternationalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalSmallFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Small Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a
     * package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailInternationalSmallFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalSmallFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service. The seller must also specify a
     * package size of Package/Thick Envelope when using a calculated shipping service.
     * @return string 'USPSPriorityMailInternationalFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalLargeFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Large Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailInternationalLargeFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailInternationalLargeFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Padded Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalLegalFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express International Legal Flat Rate Envelope To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSExpressMailInternationalLegalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express International Flat Rate Box To use this service, a seller must specify the package weight so that eBay can validate the weight against the maximum weight limit for the service.
     * @return string 'USPSExpressMailInternationalFlatRateBox'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSExpressMailInternationalFlatRateBox';
    /**
     * Constant for value 'OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other International Shipping (see description)
     * @return string 'OtherInternational'
     */
    const VALUE_OTHER_INTERNATIONAL = 'OtherInternational';
    /**
     * Constant for value 'AT_StandardDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand (unversichert)
     * @return string 'AT_StandardDispatch'
     */
    const VALUE_AT_STANDARD_DISPATCH = 'AT_StandardDispatch';
    /**
     * Constant for value 'AT_InsuredDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand
     * @return string 'AT_InsuredDispatch'
     */
    const VALUE_AT_INSURED_DISPATCH = 'AT_InsuredDispatch';
    /**
     * Constant for value 'AT_Writing'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'AT_Writing'
     */
    const VALUE_AT_WRITING = 'AT_Writing';
    /**
     * Constant for value 'AT_COD'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'AT_COD'
     */
    const VALUE_AT_COD = 'AT_COD';
    /**
     * Constant for value 'AT_ExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'AT_ExpressOrCourier'
     */
    const VALUE_AT_EXPRESS_OR_COURIER = 'AT_ExpressOrCourier';
    /**
     * Constant for value 'AT_InsuredExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'AT_InsuredExpressOrCourier'
     */
    const VALUE_AT_INSURED_EXPRESS_OR_COURIER = 'AT_InsuredExpressOrCourier';
    /**
     * Constant for value 'AT_SpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     * @return string 'AT_SpecialDispatch'
     */
    const VALUE_AT_SPECIAL_DISPATCH = 'AT_SpecialDispatch';
    /**
     * Constant for value 'AT_InsuredSpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     * @return string 'AT_InsuredSpecialDispatch'
     */
    const VALUE_AT_INSURED_SPECIAL_DISPATCH = 'AT_InsuredSpecialDispatch';
    /**
     * Constant for value 'AT_Sonstige'
     * Meta information extracted from the WSDL
     * - documentation: Sonstige (Siehe Artikelbeschreibung)
     * @return string 'AT_Sonstige'
     */
    const VALUE_AT_SONSTIGE = 'AT_Sonstige';
    /**
     * Constant for value 'AT_UnversicherterVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Versand International
     * @return string 'AT_UnversicherterVersandInternational'
     */
    const VALUE_AT_UNVERSICHERTER_VERSAND_INTERNATIONAL = 'AT_UnversicherterVersandInternational';
    /**
     * Constant for value 'AT_VersicherterVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand International
     * @return string 'AT_VersicherterVersandInternational'
     */
    const VALUE_AT_VERSICHERTER_VERSAND_INTERNATIONAL = 'AT_VersicherterVersandInternational';
    /**
     * Constant for value 'AT_SonstigerVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sonstiger Versand International
     * @return string 'AT_SonstigerVersandInternational'
     */
    const VALUE_AT_SONSTIGER_VERSAND_INTERNATIONAL = 'AT_SonstigerVersandInternational';
    /**
     * Constant for value 'AT_UnversicherterExpressVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Express Versand International
     * @return string 'AT_UnversicherterExpressVersandInternational'
     */
    const VALUE_AT_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_UnversicherterExpressVersandInternational';
    /**
     * Constant for value 'AT_VersicherterExpressVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express Versand International
     * @return string 'AT_VersicherterExpressVersandInternational'
     */
    const VALUE_AT_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_VersicherterExpressVersandInternational';
    /**
     * Constant for value 'AT_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Sparversand aus dem Ausland
     * @return string 'AT_EconomyDeliveryFromAbroad'
     */
    const VALUE_AT_ECONOMY_DELIVERY_FROM_ABROAD = 'AT_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'AT_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand aus dem Ausland
     * @return string 'AT_StandardDeliveryFromAbroad'
     */
    const VALUE_AT_STANDARD_DELIVERY_FROM_ABROAD = 'AT_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'AT_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Expressversand aus dem Ausland
     * @return string 'AT_ExpressDeliveryFromAbroad'
     */
    const VALUE_AT_EXPRESS_DELIVERY_FROM_ABROAD = 'AT_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'AT_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Versand mit Nachverfolgung aus dem Ausland
     * @return string 'AT_TrackedDeliveryFromAbroad'
     */
    const VALUE_AT_TRACKED_DELIVERY_FROM_ABROAD = 'AT_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'AU_Regular'
     * Meta information extracted from the WSDL
     * - documentation: Regular
     * @return string 'AU_Regular'
     */
    const VALUE_AU_REGULAR = 'AU_Regular';
    /**
     * Constant for value 'AU_Express'
     * Meta information extracted from the WSDL
     * - documentation: Express
     * @return string 'AU_Express'
     */
    const VALUE_AU_EXPRESS = 'AU_Express';
    /**
     * Constant for value 'AU_Registered'
     * Meta information extracted from the WSDL
     * - documentation: Registered
     * @return string 'AU_Registered'
     */
    const VALUE_AU_REGISTERED = 'AU_Registered';
    /**
     * Constant for value 'AU_Courier'
     * Meta information extracted from the WSDL
     * - documentation: Courier
     * @return string 'AU_Courier'
     */
    const VALUE_AU_COURIER = 'AU_Courier';
    /**
     * Constant for value 'AU_Other'
     * Meta information extracted from the WSDL
     * - documentation: Other
     * @return string 'AU_Other'
     */
    const VALUE_AU_OTHER = 'AU_Other';
    /**
     * Constant for value 'AU_EMSInternationalCourierParcels'
     * Meta information extracted from the WSDL
     * - documentation: EMS International Courier - Parcels
     * @return string 'AU_EMSInternationalCourierParcels'
     */
    const VALUE_AU_EMSINTERNATIONAL_COURIER_PARCELS = 'AU_EMSInternationalCourierParcels';
    /**
     * Constant for value 'AU_EMSInternationalCourierDocuments'
     * Meta information extracted from the WSDL
     * - documentation: EMS International Courier - Documents
     * @return string 'AU_EMSInternationalCourierDocuments'
     */
    const VALUE_AU_EMSINTERNATIONAL_COURIER_DOCUMENTS = 'AU_EMSInternationalCourierDocuments';
    /**
     * Constant for value 'AU_ExpressPostInternationalDocuments'
     * Meta information extracted from the WSDL
     * - documentation: Express Post International - Documents
     * @return string 'AU_ExpressPostInternationalDocuments'
     */
    const VALUE_AU_EXPRESS_POST_INTERNATIONAL_DOCUMENTS = 'AU_ExpressPostInternationalDocuments';
    /**
     * Constant for value 'AU_AirMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: Air Mail
     * @return string 'AU_AirMailInternational'
     */
    const VALUE_AU_AIR_MAIL_INTERNATIONAL = 'AU_AirMailInternational';
    /**
     * Constant for value 'AU_EconomyAirInternational'
     * Meta information extracted from the WSDL
     * - documentation: Economy Air
     * @return string 'AU_EconomyAirInternational'
     */
    const VALUE_AU_ECONOMY_AIR_INTERNATIONAL = 'AU_EconomyAirInternational';
    /**
     * Constant for value 'AU_SeaMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sea Mail
     * @return string 'AU_SeaMailInternational'
     */
    const VALUE_AU_SEA_MAIL_INTERNATIONAL = 'AU_SeaMailInternational';
    /**
     * Constant for value 'AU_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standard International Flat Rate Postage
     * @return string 'AU_StandardInternational'
     */
    const VALUE_AU_STANDARD_INTERNATIONAL = 'AU_StandardInternational';
    /**
     * Constant for value 'AU_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedited international flat rate postage
     * @return string 'AU_ExpeditedInternational'
     */
    const VALUE_AU_EXPEDITED_INTERNATIONAL = 'AU_ExpeditedInternational';
    /**
     * Constant for value 'AU_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other international postage
     * @return string 'AU_OtherInternational'
     */
    const VALUE_AU_OTHER_INTERNATIONAL = 'AU_OtherInternational';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
     * Meta information extracted from the WSDL
     * - documentation: Australia Post Registered Post International Padded Bag 1 kg
     * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_1_KG = 'AU_AusPostRegisteredPostInternationalPaddedBag1kg';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
     * Meta information extracted from the WSDL
     * - documentation: Australia Post Registered Post International Padded Bag 500 g
     * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_500_G = 'AU_AusPostRegisteredPostInternationalPaddedBag500g';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalParcel'
     * Meta information extracted from the WSDL
     * - documentation: Australia Post Registered Post International Parcel
     * @return string 'AU_AusPostRegisteredPostInternationalParcel'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PARCEL = 'AU_AusPostRegisteredPostInternationalParcel';
    /**
     * Constant for value 'AU_ExpeditedDeliveryFromOutsideAU'
     * Meta information extracted from the WSDL
     * - documentation: Expedited delivery from outside Australia
     * @return string 'AU_ExpeditedDeliveryFromOutsideAU'
     */
    const VALUE_AU_EXPEDITED_DELIVERY_FROM_OUTSIDE_AU = 'AU_ExpeditedDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_EconomyDeliveryFromOutsideAU'
     * Meta information extracted from the WSDL
     * - documentation: Economy delivery from outside Australia
     * @return string 'AU_EconomyDeliveryFromOutsideAU'
     */
    const VALUE_AU_ECONOMY_DELIVERY_FROM_OUTSIDE_AU = 'AU_EconomyDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_StandardDeliveryFromOutsideAU'
     * Meta information extracted from the WSDL
     * - documentation: Standard Delivery From Outside AU
     * @return string 'AU_StandardDeliveryFromOutsideAU'
     */
    const VALUE_AU_STANDARD_DELIVERY_FROM_OUTSIDE_AU = 'AU_StandardDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_AustralianAirExpressMetro15kg'
     * Meta information extracted from the WSDL
     * - documentation: Australian Air Express Metro 15 kg
     * @return string 'AU_AustralianAirExpressMetro15kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_METRO_15_KG = 'AU_AustralianAirExpressMetro15kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate5kg'
     * Meta information extracted from the WSDL
     * - documentation: Australian Air Express Flat Rate 5 kg
     * @return string 'AU_AustralianAirExpressFlatRate5kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_5_KG = 'AU_AustralianAirExpressFlatRate5kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate3kg'
     * Meta information extracted from the WSDL
     * - documentation: Australian Air Express Flat Rate 3 kg
     * @return string 'AU_AustralianAirExpressFlatRate3kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_3_KG = 'AU_AustralianAirExpressFlatRate3kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate1kg'
     * Meta information extracted from the WSDL
     * - documentation: Australian Air Express Flat Rate 1 kg
     * @return string 'AU_AustralianAirExpressFlatRate1kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_1_KG = 'AU_AustralianAirExpressFlatRate1kg';
    /**
     * Constant for value 'AU_ExpressDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Express delivery (1-3 business days) in Australia
     * @return string 'AU_ExpressDelivery'
     */
    const VALUE_AU_EXPRESS_DELIVERY = 'AU_ExpressDelivery';
    /**
     * Constant for value 'AU_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Standard delivery (1-6 business days) in Australia
     * @return string 'AU_StandardDelivery'
     */
    const VALUE_AU_STANDARD_DELIVERY = 'AU_StandardDelivery';
    /**
     * Constant for value 'AU_eBayAusPost3kgFlatRateSatchel'
     * Meta information extracted from the WSDL
     * - documentation: eBay/Australian Post 3 kg Flat Rate Satchel
     * @return string 'AU_eBayAusPost3kgFlatRateSatchel'
     */
    const VALUE_AU_E_BAY_AUS_POST_3_KG_FLAT_RATE_SATCHEL = 'AU_eBayAusPost3kgFlatRateSatchel';
    /**
     * Constant for value 'AU_eBayAusPost500gFlatRateSatchel'
     * Meta information extracted from the WSDL
     * - documentation: eBay/Australian Post 500 g Flat Rate Satchel
     * @return string 'AU_eBayAusPost500gFlatRateSatchel'
     */
    const VALUE_AU_E_BAY_AUS_POST_500_G_FLAT_RATE_SATCHEL = 'AU_eBayAusPost500gFlatRateSatchel';
    /**
     * Constant for value 'AU_Freight'
     * Meta information extracted from the WSDL
     * - documentation: Freight delivery in Australia. Used for heavy and bulky items.
     * @return string 'AU_Freight'
     */
    const VALUE_AU_FREIGHT = 'AU_Freight';
    /**
     * Constant for value 'BEFR_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Livraison standard a partir de l'etranger
     * @return string 'BEFR_StandardDelivery'
     */
    const VALUE_BEFR_STANDARD_DELIVERY = 'BEFR_StandardDelivery';
    /**
     * Constant for value 'BEFR_PriorityDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Livraison express
     * @return string 'BEFR_PriorityDelivery'
     */
    const VALUE_BEFR_PRIORITY_DELIVERY = 'BEFR_PriorityDelivery';
    /**
     * Constant for value 'BEFR_ParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Colis
     * @return string 'BEFR_ParcelPost'
     */
    const VALUE_BEFR_PARCEL_POST = 'BEFR_ParcelPost';
    /**
     * Constant for value 'BEFR_RegisteredMail'
     * Meta information extracted from the WSDL
     * - documentation: Courrier en recommande
     * @return string 'BEFR_RegisteredMail'
     */
    const VALUE_BEFR_REGISTERED_MAIL = 'BEFR_RegisteredMail';
    /**
     * Constant for value 'BEFR_Other'
     * Meta information extracted from the WSDL
     * - documentation: Autre service de livraison
     * @return string 'BEFR_Other'
     */
    const VALUE_BEFR_OTHER = 'BEFR_Other';
    /**
     * Constant for value 'BEFR_DePostInternational'
     * Meta information extracted from the WSDL
     * - documentation: De Post
     * @return string 'BEFR_DePostInternational'
     */
    const VALUE_BEFR_DE_POST_INTERNATIONAL = 'BEFR_DePostInternational';
    /**
     * Constant for value 'BEFR_UPSInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS
     * @return string 'BEFR_UPSInternational'
     */
    const VALUE_BEFR_UPSINTERNATIONAL = 'BEFR_UPSInternational';
    /**
     * Constant for value 'BEFR_FedExInternational'
     * Meta information extracted from the WSDL
     * - documentation: FedEx
     * @return string 'BEFR_FedExInternational'
     */
    const VALUE_BEFR_FED_EX_INTERNATIONAL = 'BEFR_FedExInternational';
    /**
     * Constant for value 'BEFR_DHLInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL
     * @return string 'BEFR_DHLInternational'
     */
    const VALUE_BEFR_DHLINTERNATIONAL = 'BEFR_DHLInternational';
    /**
     * Constant for value 'BEFR_TPGPostTNTInternational'
     * Meta information extracted from the WSDL
     * - documentation: TPG Post/TNT (Netherlands)
     * @return string 'BEFR_TPGPostTNTInternational'
     */
    const VALUE_BEFR_TPGPOST_TNTINTERNATIONAL = 'BEFR_TPGPostTNTInternational';
    /**
     * Constant for value 'BEFR_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Frais de livraison internationale fixes
     * @return string 'BEFR_StandardInternational'
     */
    const VALUE_BEFR_STANDARD_INTERNATIONAL = 'BEFR_StandardInternational';
    /**
     * Constant for value 'BEFR_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Frais fixes pour livraison internationale express
     * @return string 'BEFR_ExpeditedInternational'
     */
    const VALUE_BEFR_EXPEDITED_INTERNATIONAL = 'BEFR_ExpeditedInternational';
    /**
     * Constant for value 'BEFR_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Autres livraisons internationales (voir description)
     * @return string 'BEFR_OtherInternational'
     */
    const VALUE_BEFR_OTHER_INTERNATIONAL = 'BEFR_OtherInternational';
    /**
     * Constant for value 'BEFR_LaPosteInternational'
     * Meta information extracted from the WSDL
     * - documentation: La Poste (France)
     * @return string 'BEFR_LaPosteInternational'
     */
    const VALUE_BEFR_LA_POSTE_INTERNATIONAL = 'BEFR_LaPosteInternational';
    /**
     * Constant for value 'BEFR_LaPosteStandardShipping'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - livraison standard (1 a 2 jours ouvrables)
     * @return string 'BEFR_LaPosteStandardShipping'
     */
    const VALUE_BEFR_LA_POSTE_STANDARD_SHIPPING = 'BEFR_LaPosteStandardShipping';
    /**
     * Constant for value 'BEFR_LaPosteCertifiedShipping'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - envoi recommande (1 jour ouvrable)
     * @return string 'BEFR_LaPosteCertifiedShipping'
     */
    const VALUE_BEFR_LA_POSTE_CERTIFIED_SHIPPING = 'BEFR_LaPosteCertifiedShipping';
    /**
     * Constant for value 'BEFR_LaPosteTaxipostLLS'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Taxipost LLS (2 jours ouvrables)
     * @return string 'BEFR_LaPosteTaxipostLLS'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_LLS = 'BEFR_LaPosteTaxipostLLS';
    /**
     * Constant for value 'BEFR_LaPosteTaxipost24h'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Taxipost 24h (1 jour ouvrable)
     * @return string 'BEFR_LaPosteTaxipost24h'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_24_H = 'BEFR_LaPosteTaxipost24h';
    /**
     * Constant for value 'BEFR_LaPosteTaxipostSecur'
     * Meta information extracted from the WSDL
     * - documentation: Autres livraisons
     * @return string 'BEFR_LaPosteTaxipostSecur'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_SECUR = 'BEFR_LaPosteTaxipostSecur';
    /**
     * Constant for value 'BEFR_PostInternationalStandard'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - livraison standard
     * @return string 'BEFR_PostInternationalStandard'
     */
    const VALUE_BEFR_POST_INTERNATIONAL_STANDARD = 'BEFR_PostInternationalStandard';
    /**
     * Constant for value 'BEFR_PostInternationalRegistered'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - envoi recommande
     * @return string 'BEFR_PostInternationalRegistered'
     */
    const VALUE_BEFR_POST_INTERNATIONAL_REGISTERED = 'BEFR_PostInternationalRegistered';
    /**
     * Constant for value 'BEFR_TNTInternational'
     * Meta information extracted from the WSDL
     * - documentation: TNT
     * @return string 'BEFR_TNTInternational'
     */
    const VALUE_BEFR_TNTINTERNATIONAL = 'BEFR_TNTInternational';
    /**
     * Constant for value 'BEFR_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Livraison economique a partir de l'etranger
     * @return string 'BEFR_EconomyDeliveryFromAbroad'
     */
    const VALUE_BEFR_ECONOMY_DELIVERY_FROM_ABROAD = 'BEFR_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Livraison standard a partir de l'etranger
     * @return string 'BEFR_StandardDeliveryFromAbroad'
     */
    const VALUE_BEFR_STANDARD_DELIVERY_FROM_ABROAD = 'BEFR_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Livraison express a partir de l'etranger
     * @return string 'BEFR_ExpressDeliveryFromAbroad'
     */
    const VALUE_BEFR_EXPRESS_DELIVERY_FROM_ABROAD = 'BEFR_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Livraison a partir de l'etranger avec suivi de commande
     * @return string 'BEFR_TrackedDeliveryFromAbroad'
     */
    const VALUE_BEFR_TRACKED_DELIVERY_FROM_ABROAD = 'BEFR_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Standard Delivery
     * @return string 'BENL_StandardDelivery'
     */
    const VALUE_BENL_STANDARD_DELIVERY = 'BENL_StandardDelivery';
    /**
     * Constant for value 'BENL_PriorityDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Priority Delivery
     * @return string 'BENL_PriorityDelivery'
     */
    const VALUE_BENL_PRIORITY_DELIVERY = 'BENL_PriorityDelivery';
    /**
     * Constant for value 'BENL_ParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Parcel Post
     * @return string 'BENL_ParcelPost'
     */
    const VALUE_BENL_PARCEL_POST = 'BENL_ParcelPost';
    /**
     * Constant for value 'BENL_RegisteredMail'
     * Meta information extracted from the WSDL
     * - documentation: Registered Mail
     * @return string 'BENL_RegisteredMail'
     */
    const VALUE_BENL_REGISTERED_MAIL = 'BENL_RegisteredMail';
    /**
     * Constant for value 'BENL_Other'
     * Meta information extracted from the WSDL
     * - documentation: Other Shipping Service
     * @return string 'BENL_Other'
     */
    const VALUE_BENL_OTHER = 'BENL_Other';
    /**
     * Constant for value 'BENL_DePostInternational'
     * Meta information extracted from the WSDL
     * - documentation: De Post
     * @return string 'BENL_DePostInternational'
     */
    const VALUE_BENL_DE_POST_INTERNATIONAL = 'BENL_DePostInternational';
    /**
     * Constant for value 'BENL_UPSInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS
     * @return string 'BENL_UPSInternational'
     */
    const VALUE_BENL_UPSINTERNATIONAL = 'BENL_UPSInternational';
    /**
     * Constant for value 'BENL_FedExInternational'
     * Meta information extracted from the WSDL
     * - documentation: FedEx
     * @return string 'BENL_FedExInternational'
     */
    const VALUE_BENL_FED_EX_INTERNATIONAL = 'BENL_FedExInternational';
    /**
     * Constant for value 'BENL_DHLInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL
     * @return string 'BENL_DHLInternational'
     */
    const VALUE_BENL_DHLINTERNATIONAL = 'BENL_DHLInternational';
    /**
     * Constant for value 'BENL_TPGPostTNTInternational'
     * Meta information extracted from the WSDL
     * - documentation: TPG Post/TNT (Netherlands)
     * @return string 'BENL_TPGPostTNTInternational'
     */
    const VALUE_BENL_TPGPOST_TNTINTERNATIONAL = 'BENL_TPGPostTNTInternational';
    /**
     * Constant for value 'BENL_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standard International
     * @return string 'BENL_StandardInternational'
     */
    const VALUE_BENL_STANDARD_INTERNATIONAL = 'BENL_StandardInternational';
    /**
     * Constant for value 'BENL_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedited International
     * @return string 'BENL_ExpeditedInternational'
     */
    const VALUE_BENL_EXPEDITED_INTERNATIONAL = 'BENL_ExpeditedInternational';
    /**
     * Constant for value 'BENL_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other International Shipping Services
     * @return string 'BENL_OtherInternational'
     */
    const VALUE_BENL_OTHER_INTERNATIONAL = 'BENL_OtherInternational';
    /**
     * Constant for value 'BENL_LaPosteInternational'
     * Meta information extracted from the WSDL
     * - documentation: La Poste (France)
     * @return string 'BENL_LaPosteInternational'
     */
    const VALUE_BENL_LA_POSTE_INTERNATIONAL = 'BENL_LaPosteInternational';
    /**
     * Constant for value 'BENL_DePostStandardShipping'
     * Meta information extracted from the WSDL
     * - documentation: De Post - standaardverzending (1 tot 2 werkdagen)
     * @return string 'BENL_DePostStandardShipping'
     */
    const VALUE_BENL_DE_POST_STANDARD_SHIPPING = 'BENL_DePostStandardShipping';
    /**
     * Constant for value 'BENL_DePostCertifiedShipping'
     * Meta information extracted from the WSDL
     * - documentation: De Post - aangetekende zending (1 werkdag)
     * @return string 'BENL_DePostCertifiedShipping'
     */
    const VALUE_BENL_DE_POST_CERTIFIED_SHIPPING = 'BENL_DePostCertifiedShipping';
    /**
     * Constant for value 'BENL_DePostTaxipostLLS'
     * Meta information extracted from the WSDL
     * - documentation: De Post - Taxipost LLS (2 werkdagen)
     * @return string 'BENL_DePostTaxipostLLS'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_LLS = 'BENL_DePostTaxipostLLS';
    /**
     * Constant for value 'BENL_DePostTaxipost24h'
     * Meta information extracted from the WSDL
     * - documentation: De Post - Taxipost 24u (1 werkdag)
     * @return string 'BENL_DePostTaxipost24h'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_24_H = 'BENL_DePostTaxipost24h';
    /**
     * Constant for value 'BENL_DePostTaxipostSecur'
     * Meta information extracted from the WSDL
     * - documentation: De Post - Taxipost Secur (1 werkdag)
     * @return string 'BENL_DePostTaxipostSecur'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_SECUR = 'BENL_DePostTaxipostSecur';
    /**
     * Constant for value 'BENL_OtherShippingMethods'
     * Meta information extracted from the WSDL
     * - documentation: Andere verzending
     * @return string 'BENL_OtherShippingMethods'
     */
    const VALUE_BENL_OTHER_SHIPPING_METHODS = 'BENL_OtherShippingMethods';
    /**
     * Constant for value 'BENL_PostInternationalStandard'
     * Meta information extracted from the WSDL
     * - documentation: De Post - standaardverzending
     * @return string 'BENL_PostInternationalStandard'
     */
    const VALUE_BENL_POST_INTERNATIONAL_STANDARD = 'BENL_PostInternationalStandard';
    /**
     * Constant for value 'BENL_PostInternationalRegistered'
     * Meta information extracted from the WSDL
     * - documentation: De Post - aangetekende zending
     * @return string 'BENL_PostInternationalRegistered'
     */
    const VALUE_BENL_POST_INTERNATIONAL_REGISTERED = 'BENL_PostInternationalRegistered';
    /**
     * Constant for value 'BENL_TNTInternational'
     * Meta information extracted from the WSDL
     * - documentation: TNT
     * @return string 'BENL_TNTInternational'
     */
    const VALUE_BENL_TNTINTERNATIONAL = 'BENL_TNTInternational';
    /**
     * Constant for value 'BENL_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Voordelige verzending uit het buitenland
     * @return string 'BENL_EconomyDeliveryFromAbroad'
     */
    const VALUE_BENL_ECONOMY_DELIVERY_FROM_ABROAD = 'BENL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Standaardverzending uit het buitenland
     * @return string 'BENL_StandardDeliveryFromAbroad'
     */
    const VALUE_BENL_STANDARD_DELIVERY_FROM_ABROAD = 'BENL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Express verzending uit het buitenland
     * @return string 'BENL_ExpressDeliveryFromAbroad'
     */
    const VALUE_BENL_EXPRESS_DELIVERY_FROM_ABROAD = 'BENL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Verzending uit het buitenland met internationale tracking
     * @return string 'BENL_TrackedDeliveryFromAbroad'
     */
    const VALUE_BENL_TRACKED_DELIVERY_FROM_ABROAD = 'BENL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'CA_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Standard Delivery
     * @return string 'CA_StandardDelivery'
     */
    const VALUE_CA_STANDARD_DELIVERY = 'CA_StandardDelivery';
    /**
     * Constant for value 'CA_ExpeditedDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Expedited delivery
     * @return string 'CA_ExpeditedDelivery'
     */
    const VALUE_CA_EXPEDITED_DELIVERY = 'CA_ExpeditedDelivery';
    /**
     * Constant for value 'CA_PostLettermail'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Lettermail
     * @return string 'CA_PostLettermail'
     */
    const VALUE_CA_POST_LETTERMAIL = 'CA_PostLettermail';
    /**
     * Constant for value 'CA_PostRegularParcel'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Regular Parcel
     * @return string 'CA_PostRegularParcel'
     */
    const VALUE_CA_POST_REGULAR_PARCEL = 'CA_PostRegularParcel';
    /**
     * Constant for value 'CA_PostExpeditedParcel'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Expedited Parcel
     * @return string 'CA_PostExpeditedParcel'
     */
    const VALUE_CA_POST_EXPEDITED_PARCEL = 'CA_PostExpeditedParcel';
    /**
     * Constant for value 'CA_PostXpresspost'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Xpresspost - International
     * @return string 'CA_PostXpresspost'
     */
    const VALUE_CA_POST_XPRESSPOST = 'CA_PostXpresspost';
    /**
     * Constant for value 'CA_PostPriorityCourier'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Priority Courier
     * @return string 'CA_PostPriorityCourier'
     */
    const VALUE_CA_POST_PRIORITY_COURIER = 'CA_PostPriorityCourier';
    /**
     * Constant for value 'CanadaPostExpeditedFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Expedited Flat Rate Box
     * @return string 'CanadaPostExpeditedFlatRateBox'
     */
    const VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX = 'CanadaPostExpeditedFlatRateBox';
    /**
     * Constant for value 'CA_PostExpeditedFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: (This value is no longer used.)
     * @return string 'CA_PostExpeditedFlatRateBox'
     */
    const VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX = 'CA_PostExpeditedFlatRateBox';
    /**
     * Constant for value 'CA_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standard International Flat Rate Shipping
     * @return string 'CA_StandardInternational'
     */
    const VALUE_CA_STANDARD_INTERNATIONAL = 'CA_StandardInternational';
    /**
     * Constant for value 'CA_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedited International Flat Rate Shipping
     * @return string 'CA_ExpeditedInternational'
     */
    const VALUE_CA_EXPEDITED_INTERNATIONAL = 'CA_ExpeditedInternational';
    /**
     * Constant for value 'CA_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other International Shipping (see description)
     * @return string 'CA_OtherInternational'
     */
    const VALUE_CA_OTHER_INTERNATIONAL = 'CA_OtherInternational';
    /**
     * Constant for value 'CA_PostExpeditedParcelUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Expedited Parcel - USA
     * @return string 'CA_PostExpeditedParcelUSA'
     */
    const VALUE_CA_POST_EXPEDITED_PARCEL_USA = 'CA_PostExpeditedParcelUSA';
    /**
     * Constant for value 'CA_PostSmallPacketsUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Small Packets - USA
     * @return string 'CA_PostSmallPacketsUSA'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USA = 'CA_PostSmallPacketsUSA';
    /**
     * Constant for value 'CA_PostXpresspostUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Xpresspost - USA
     * @return string 'CA_PostXpresspostUSA'
     */
    const VALUE_CA_POST_XPRESSPOST_USA = 'CA_PostXpresspostUSA';
    /**
     * Constant for value 'CA_PostXpresspostInternational'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Xpresspost - International
     * @return string 'CA_PostXpresspostInternational'
     */
    const VALUE_CA_POST_XPRESSPOST_INTERNATIONAL = 'CA_PostXpresspostInternational';
    /**
     * Constant for value 'CA_PostInternationalParcelSurface'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post International Parcel - Surface
     * @return string 'CA_PostInternationalParcelSurface'
     */
    const VALUE_CA_POST_INTERNATIONAL_PARCEL_SURFACE = 'CA_PostInternationalParcelSurface';
    /**
     * Constant for value 'CA_PostInternationalParcelAir'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post International Parcel - Air
     * @return string 'CA_PostInternationalParcelAir'
     */
    const VALUE_CA_POST_INTERNATIONAL_PARCEL_AIR = 'CA_PostInternationalParcelAir';
    /**
     * Constant for value 'CA_SmallPacketsInternational'
     * Meta information extracted from the WSDL
     * - documentation: Small Packets - International
     * @return string 'CA_SmallPacketsInternational'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL = 'CA_SmallPacketsInternational';
    /**
     * Constant for value 'CA_PurolatorInternational'
     * Meta information extracted from the WSDL
     * - documentation: Purolator International
     * @return string 'CA_PurolatorInternational'
     */
    const VALUE_CA_PUROLATOR_INTERNATIONAL = 'CA_PurolatorInternational';
    /**
     * Constant for value 'CA_PostSmallPacketsUSAGround'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Small Packets - USA - Ground
     * @return string 'CA_PostSmallPacketsUSAGround'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USAGROUND = 'CA_PostSmallPacketsUSAGround';
    /**
     * Constant for value 'CA_PostSmallPacketsUSAAir'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Small Packets - USA - Air
     * @return string 'CA_PostSmallPacketsUSAAir'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USAAIR = 'CA_PostSmallPacketsUSAAir';
    /**
     * Constant for value 'CA_SmallPacketsInternationalGround'
     * Meta information extracted from the WSDL
     * - documentation: Small Packets - International - Ground
     * @return string 'CA_SmallPacketsInternationalGround'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL_GROUND = 'CA_SmallPacketsInternationalGround';
    /**
     * Constant for value 'CA_SmallPacketsInternationalAir'
     * Meta information extracted from the WSDL
     * - documentation: Small Packets - International - Air
     * @return string 'CA_SmallPacketsInternationalAir'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL_AIR = 'CA_SmallPacketsInternationalAir';
    /**
     * Constant for value 'CA_PostUSALetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post USA Letter-post
     * @return string 'CA_PostUSALetterPost'
     */
    const VALUE_CA_POST_USALETTER_POST = 'CA_PostUSALetterPost';
    /**
     * Constant for value 'CA_PostInternationalLetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post International Letter-post
     * @return string 'CA_PostInternationalLetterPost'
     */
    const VALUE_CA_POST_INTERNATIONAL_LETTER_POST = 'CA_PostInternationalLetterPost';
    /**
     * Constant for value 'CA_PostExpeditedFlatRateBoxUSA'
     * Meta information extracted from the WSDL
     * - documentation: (This value is no longer used.)
     * @return string 'CA_PostExpeditedFlatRateBoxUSA'
     */
    const VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CA_PostExpeditedFlatRateBoxUSA';
    /**
     * Constant for value 'CA_UPSExpressCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express Canada
     * @return string 'CA_UPSExpressCanada'
     */
    const VALUE_CA_UPSEXPRESS_CANADA = 'CA_UPSExpressCanada';
    /**
     * Constant for value 'CA_UPSExpressSaverCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express Saver Canada
     * @return string 'CA_UPSExpressSaverCanada'
     */
    const VALUE_CA_UPSEXPRESS_SAVER_CANADA = 'CA_UPSExpressSaverCanada';
    /**
     * Constant for value 'CA_UPSExpeditedCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Expedited Canada
     * @return string 'CA_UPSExpeditedCanada'
     */
    const VALUE_CA_UPSEXPEDITED_CANADA = 'CA_UPSExpeditedCanada';
    /**
     * Constant for value 'CA_UPSStandardCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard Canada
     * @return string 'CA_UPSStandardCanada'
     */
    const VALUE_CA_UPSSTANDARD_CANADA = 'CA_UPSStandardCanada';
    /**
     * Constant for value 'CA_UPSExpressUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express United States
     * @return string 'CA_UPSExpressUnitedStates'
     */
    const VALUE_CA_UPSEXPRESS_UNITED_STATES = 'CA_UPSExpressUnitedStates';
    /**
     * Constant for value 'CA_UPSExpeditedUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Expedited United States
     * @return string 'CA_UPSExpeditedUnitedStates'
     */
    const VALUE_CA_UPSEXPEDITED_UNITED_STATES = 'CA_UPSExpeditedUnitedStates';
    /**
     * Constant for value 'CA_UPS3DaySelectUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS 3 Day Select United States
     * @return string 'CA_UPS3DaySelectUnitedStates'
     */
    const VALUE_CA_UPS_3_DAY_SELECT_UNITED_STATES = 'CA_UPS3DaySelectUnitedStates';
    /**
     * Constant for value 'CA_UPSStandardUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard United States
     * @return string 'CA_UPSStandardUnitedStates'
     */
    const VALUE_CA_UPSSTANDARD_UNITED_STATES = 'CA_UPSStandardUnitedStates';
    /**
     * Constant for value 'CA_UPSWorldWideExpress'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express
     * @return string 'CA_UPSWorldWideExpress'
     */
    const VALUE_CA_UPSWORLD_WIDE_EXPRESS = 'CA_UPSWorldWideExpress';
    /**
     * Constant for value 'CA_UPSWorldWideExpedited'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Expedited
     * @return string 'CA_UPSWorldWideExpedited'
     */
    const VALUE_CA_UPSWORLD_WIDE_EXPEDITED = 'CA_UPSWorldWideExpedited';
    /**
     * Constant for value 'CA_PriorityWorldwide'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Priority Worldwide
     * @return string 'CA_PriorityWorldwide'
     */
    const VALUE_CA_PRIORITY_WORLDWIDE = 'CA_PriorityWorldwide';
    /**
     * Constant for value 'CanadaPostExpeditedFlatRateBoxUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Expedited Flat Rate Box USA
     * @return string 'CanadaPostExpeditedFlatRateBoxUSA'
     */
    const VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CanadaPostExpeditedFlatRateBoxUSA';
    /**
     * Constant for value 'CA_PostTrackedPacketsUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Tracked Packet - USA
     * @return string 'CA_PostTrackedPacketsUSA'
     */
    const VALUE_CA_POST_TRACKED_PACKETS_USA = 'CA_PostTrackedPacketsUSA';
    /**
     * Constant for value 'CA_PostTrackedPacketsInternational'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Tracked Packet - International
     * @return string 'CA_PostTrackedPacketsInternational'
     */
    const VALUE_CA_POST_TRACKED_PACKETS_INTERNATIONAL = 'CA_PostTrackedPacketsInternational';
    /**
     * Constant for value 'CA_Freight'
     * Meta information extracted from the WSDL
     * - documentation: Freight
     * @return string 'CA_Freight'
     */
    const VALUE_CA_FREIGHT = 'CA_Freight';
    /**
     * Constant for value 'CH_StandardDispatchAPost'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand (A-Post/Priority)
     * @return string 'CH_StandardDispatchAPost'
     */
    const VALUE_CH_STANDARD_DISPATCH_APOST = 'CH_StandardDispatchAPost';
    /**
     * Constant for value 'CH_StandardDispatchBPost'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand (B-Post/Economy)
     * @return string 'CH_StandardDispatchBPost'
     */
    const VALUE_CH_STANDARD_DISPATCH_BPOST = 'CH_StandardDispatchBPost';
    /**
     * Constant for value 'CH_InsuredDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand (z.B. Assurance/Fragile)
     * @return string 'CH_InsuredDispatch'
     */
    const VALUE_CH_INSURED_DISPATCH = 'CH_InsuredDispatch';
    /**
     * Constant for value 'CH_Writing'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'CH_Writing'
     */
    const VALUE_CH_WRITING = 'CH_Writing';
    /**
     * Constant for value 'CH_COD'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'CH_COD'
     */
    const VALUE_CH_COD = 'CH_COD';
    /**
     * Constant for value 'CH_ExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'CH_ExpressOrCourier'
     */
    const VALUE_CH_EXPRESS_OR_COURIER = 'CH_ExpressOrCourier';
    /**
     * Constant for value 'CH_InsuredExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'CH_InsuredExpressOrCourier'
     */
    const VALUE_CH_INSURED_EXPRESS_OR_COURIER = 'CH_InsuredExpressOrCourier';
    /**
     * Constant for value 'CH_SpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     * @return string 'CH_SpecialDispatch'
     */
    const VALUE_CH_SPECIAL_DISPATCH = 'CH_SpecialDispatch';
    /**
     * Constant for value 'CH_InsuredSpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     * @return string 'CH_InsuredSpecialDispatch'
     */
    const VALUE_CH_INSURED_SPECIAL_DISPATCH = 'CH_InsuredSpecialDispatch';
    /**
     * Constant for value 'CH_Sonstige'
     * Meta information extracted from the WSDL
     * - documentation: Sonstige (Siehe Artikelbeschreibung)
     * @return string 'CH_Sonstige'
     */
    const VALUE_CH_SONSTIGE = 'CH_Sonstige';
    /**
     * Constant for value 'CH_SonstigerVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sonstiger Versand (Siehe Artikelbeschreibung)
     * @return string 'CH_SonstigerVersandInternational'
     */
    const VALUE_CH_SONSTIGER_VERSAND_INTERNATIONAL = 'CH_SonstigerVersandInternational';
    /**
     * Constant for value 'CH_EconomySendungenInternational'
     * Meta information extracted from the WSDL
     * - documentation: ECONOMY Sendungen
     * @return string 'CH_EconomySendungenInternational'
     */
    const VALUE_CH_ECONOMY_SENDUNGEN_INTERNATIONAL = 'CH_EconomySendungenInternational';
    /**
     * Constant for value 'CH_PrioritySendungenInternational'
     * Meta information extracted from the WSDL
     * - documentation: PRIORITY Sendungen
     * @return string 'CH_PrioritySendungenInternational'
     */
    const VALUE_CH_PRIORITY_SENDUNGEN_INTERNATIONAL = 'CH_PrioritySendungenInternational';
    /**
     * Constant for value 'CH_UrgentSendungenInternational'
     * Meta information extracted from the WSDL
     * - documentation: URGENT Sendungen
     * @return string 'CH_UrgentSendungenInternational'
     */
    const VALUE_CH_URGENT_SENDUNGEN_INTERNATIONAL = 'CH_UrgentSendungenInternational';
    /**
     * Constant for value 'CH_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Sparversand aus dem Ausland
     * @return string 'CH_EconomyDeliveryFromAbroad'
     */
    const VALUE_CH_ECONOMY_DELIVERY_FROM_ABROAD = 'CH_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'CH_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand aus dem Ausland
     * @return string 'CH_StandardDeliveryFromAbroad'
     */
    const VALUE_CH_STANDARD_DELIVERY_FROM_ABROAD = 'CH_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'CH_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Expressversand aus dem Ausland
     * @return string 'CH_ExpressDeliveryFromAbroad'
     */
    const VALUE_CH_EXPRESS_DELIVERY_FROM_ABROAD = 'CH_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'CH_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Versand mit Nachverfolgung aus dem Ausland
     * @return string 'CH_TrackedDeliveryFromAbroad'
     */
    const VALUE_CH_TRACKED_DELIVERY_FROM_ABROAD = 'CH_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'CN_PersonalDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Seller door delivery (limited to the city)
     * @return string 'CN_PersonalDelivery'
     */
    const VALUE_CN_PERSONAL_DELIVERY = 'CN_PersonalDelivery';
    /**
     * Constant for value 'CN_RegularPackage'
     * Meta information extracted from the WSDL
     * - documentation: China Post Post Office
     * @return string 'CN_RegularPackage'
     */
    const VALUE_CN_REGULAR_PACKAGE = 'CN_RegularPackage';
    /**
     * Constant for value 'CN_DeliveryCompanyExpress'
     * Meta information extracted from the WSDL
     * - documentation: Logistics company express
     * @return string 'CN_DeliveryCompanyExpress'
     */
    const VALUE_CN_DELIVERY_COMPANY_EXPRESS = 'CN_DeliveryCompanyExpress';
    /**
     * Constant for value 'CN_PostOfficeExpress'
     * Meta information extracted from the WSDL
     * - documentation: EMS Express
     * @return string 'CN_PostOfficeExpress'
     */
    const VALUE_CN_POST_OFFICE_EXPRESS = 'CN_PostOfficeExpress';
    /**
     * Constant for value 'CN_Others'
     * Meta information extracted from the WSDL
     * - documentation: Other (see item description)
     * @return string 'CN_Others'
     */
    const VALUE_CN_OTHERS = 'CN_Others';
    /**
     * Constant for value 'CN_FastPostOffice'
     * Meta information extracted from the WSDL
     * - documentation: China Post Express Mail
     * @return string 'CN_FastPostOffice'
     */
    const VALUE_CN_FAST_POST_OFFICE = 'CN_FastPostOffice';
    /**
     * Constant for value 'CN_ExpressDeliverySameCity'
     * Meta information extracted from the WSDL
     * - documentation: City Express
     * @return string 'CN_ExpressDeliverySameCity'
     */
    const VALUE_CN_EXPRESS_DELIVERY_SAME_CITY = 'CN_ExpressDeliverySameCity';
    /**
     * Constant for value 'CN_ExpressDeliveryOtherCities'
     * Meta information extracted from the WSDL
     * - documentation: Off-site delivery
     * @return string 'CN_ExpressDeliveryOtherCities'
     */
    const VALUE_CN_EXPRESS_DELIVERY_OTHER_CITIES = 'CN_ExpressDeliveryOtherCities';
    /**
     * Constant for value 'CN_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: International Standard Fixed Freight
     * @return string 'CN_StandardInternational'
     */
    const VALUE_CN_STANDARD_INTERNATIONAL = 'CN_StandardInternational';
    /**
     * Constant for value 'CN_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: International courier fixed freight
     * @return string 'CN_ExpeditedInternational'
     */
    const VALUE_CN_EXPEDITED_INTERNATIONAL = 'CN_ExpeditedInternational';
    /**
     * Constant for value 'CN_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other international shipping charges (see note)
     * @return string 'CN_OtherInternational'
     */
    const VALUE_CN_OTHER_INTERNATIONAL = 'CN_OtherInternational';
    /**
     * Constant for value 'CN_CODInternational'
     * Meta information extracted from the WSDL
     * - documentation: COD (same city only)
     * @return string 'CN_CODInternational'
     */
    const VALUE_CN_CODINTERNATIONAL = 'CN_CODInternational';
    /**
     * Constant for value 'CN_StandardMailingInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standard Mailing
     * @return string 'CN_StandardMailingInternational'
     */
    const VALUE_CN_STANDARD_MAILING_INTERNATIONAL = 'CN_StandardMailingInternational';
    /**
     * Constant for value 'CN_RegularLogisticsInternational'
     * Meta information extracted from the WSDL
     * - documentation: Regular logistics
     * @return string 'CN_RegularLogisticsInternational'
     */
    const VALUE_CN_REGULAR_LOGISTICS_INTERNATIONAL = 'CN_RegularLogisticsInternational';
    /**
     * Constant for value 'CN_EMSInternational'
     * Meta information extracted from the WSDL
     * - documentation: EMS
     * @return string 'CN_EMSInternational'
     */
    const VALUE_CN_EMSINTERNATIONAL = 'CN_EMSInternational';
    /**
     * Constant for value 'CN_OthersInternational'
     * Meta information extracted from the WSDL
     * - documentation: Others (see description)
     * @return string 'CN_OthersInternational'
     */
    const VALUE_CN_OTHERS_INTERNATIONAL = 'CN_OthersInternational';
    /**
     * Constant for value 'DE_StandardDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Versand
     * @return string 'DE_StandardDispatch'
     */
    const VALUE_DE_STANDARD_DISPATCH = 'DE_StandardDispatch';
    /**
     * Constant for value 'DE_InsuredDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand
     * @return string 'DE_InsuredDispatch'
     */
    const VALUE_DE_INSURED_DISPATCH = 'DE_InsuredDispatch';
    /**
     * Constant for value 'DE_Writing'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'DE_Writing'
     */
    const VALUE_DE_WRITING = 'DE_Writing';
    /**
     * Constant for value 'DE_COD'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'DE_COD'
     */
    const VALUE_DE_COD = 'DE_COD';
    /**
     * Constant for value 'DE_ExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'DE_ExpressOrCourier'
     */
    const VALUE_DE_EXPRESS_OR_COURIER = 'DE_ExpressOrCourier';
    /**
     * Constant for value 'DE_InsuredExpressOrCourier'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'DE_InsuredExpressOrCourier'
     */
    const VALUE_DE_INSURED_EXPRESS_OR_COURIER = 'DE_InsuredExpressOrCourier';
    /**
     * Constant for value 'DE_SpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Sonderversand (z.B. Mobel, KFZ)DE_DHLPackchen
     * @return string 'DE_SpecialDispatch'
     */
    const VALUE_DE_SPECIAL_DISPATCH = 'DE_SpecialDispatch';
    /**
     * Constant for value 'DE_InsuredSpecialDispatch'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonderversand (z.B. Mobel, KFZ)
     * @return string 'DE_InsuredSpecialDispatch'
     */
    const VALUE_DE_INSURED_SPECIAL_DISPATCH = 'DE_InsuredSpecialDispatch';
    /**
     * Constant for value 'DE_UnversicherterVersand'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Versand
     * @return string 'DE_UnversicherterVersand'
     */
    const VALUE_DE_UNVERSICHERTER_VERSAND = 'DE_UnversicherterVersand';
    /**
     * Constant for value 'DE_DeutschePostBrief'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Brief
     * @return string 'DE_DeutschePostBrief'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF = 'DE_DeutschePostBrief';
    /**
     * Constant for value 'DE_eBayDHLPaket24x7'
     * Meta information extracted from the WSDL
     * - documentation: eBay DHL Paket 24/7 (Abgabe und Lieferung an Packstation)
     * @return string 'DE_eBayDHLPaket24x7'
     */
    const VALUE_DE_E_BAY_DHLPAKET_24_X_7 = 'DE_eBayDHLPaket24x7';
    /**
     * Constant for value 'DE_DHLPostpaket'
     * Meta information extracted from the WSDL
     * - documentation: DHL Postpaket
     * @return string 'DE_DHLPostpaket'
     */
    const VALUE_DE_DHLPOSTPAKET = 'DE_DHLPostpaket';
    /**
     * Constant for value 'DE_DHLPackchen'
     * Meta information extracted from the WSDL
     * - documentation: DHL Packchen International
     * @return string 'DE_DHLPackchen'
     */
    const VALUE_DE_DHLPACKCHEN = 'DE_DHLPackchen';
    /**
     * Constant for value 'DE_DeutschePostWarensendung'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Warensendung
     * @return string 'DE_DeutschePostWarensendung'
     */
    const VALUE_DE_DEUTSCHE_POST_WARENSENDUNG = 'DE_DeutschePostWarensendung';
    /**
     * Constant for value 'DE_DeutschePostBuchersendung'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Buchersendung
     * @return string 'DE_DeutschePostBuchersendung'
     */
    const VALUE_DE_DEUTSCHE_POST_BUCHERSENDUNG = 'DE_DeutschePostBuchersendung';
    /**
     * Constant for value 'DE_HermesPaketUnversichert'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket (unversichert)
     * @return string 'DE_HermesPaketUnversichert'
     */
    const VALUE_DE_HERMES_PAKET_UNVERSICHERT = 'DE_HermesPaketUnversichert';
    /**
     * Constant for value 'DE_HermesPaketVersichert'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket (versichert)
     * @return string 'DE_HermesPaketVersichert'
     */
    const VALUE_DE_HERMES_PAKET_VERSICHERT = 'DE_HermesPaketVersichert';
    /**
     * Constant for value 'DE_IloxxTransportXXL'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Transport XXL
     * @return string 'DE_IloxxTransportXXL'
     */
    const VALUE_DE_ILOXX_TRANSPORT_XXL = 'DE_IloxxTransportXXL';
    /**
     * Constant for value 'DE_IloxxUbernachtExpress'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Express
     * @return string 'DE_IloxxUbernachtExpress'
     */
    const VALUE_DE_ILOXX_UBERNACHT_EXPRESS = 'DE_IloxxUbernachtExpress';
    /**
     * Constant for value 'DE_IloxxStandard'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Standard
     * @return string 'DE_IloxxStandard'
     */
    const VALUE_DE_ILOXX_STANDARD = 'DE_IloxxStandard';
    /**
     * Constant for value 'DE_Sonstige'
     * Meta information extracted from the WSDL
     * - documentation: Sonstige (Siehe Artikelbeschreibung)
     * @return string 'DE_Sonstige'
     */
    const VALUE_DE_SONSTIGE = 'DE_Sonstige';
    /**
     * Constant for value 'DE_UnversicherterVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Versand
     * @return string 'DE_UnversicherterVersandInternational'
     */
    const VALUE_DE_UNVERSICHERTER_VERSAND_INTERNATIONAL = 'DE_UnversicherterVersandInternational';
    /**
     * Constant for value 'DE_VersicherterVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand
     * @return string 'DE_VersicherterVersandInternational'
     */
    const VALUE_DE_VERSICHERTER_VERSAND_INTERNATIONAL = 'DE_VersicherterVersandInternational';
    /**
     * Constant for value 'DE_DHLPostpaketInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL Postpaket International
     * @return string 'DE_DHLPostpaketInternational'
     */
    const VALUE_DE_DHLPOSTPAKET_INTERNATIONAL = 'DE_DHLPostpaketInternational';
    /**
     * Constant for value 'DE_DHLPackchenInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL Packchen International
     * @return string 'DE_DHLPackchenInternational'
     */
    const VALUE_DE_DHLPACKCHEN_INTERNATIONAL = 'DE_DHLPackchenInternational';
    /**
     * Constant for value 'DE_SonstigerVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sonstiger Versand (Siehe Artikelbeschreibung)
     * @return string 'DE_SonstigerVersandInternational'
     */
    const VALUE_DE_SONSTIGER_VERSAND_INTERNATIONAL = 'DE_SonstigerVersandInternational';
    /**
     * Constant for value 'DE_UnversicherterExpressVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Express - Versand
     * @return string 'DE_UnversicherterExpressVersandInternational'
     */
    const VALUE_DE_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_UnversicherterExpressVersandInternational';
    /**
     * Constant for value 'DE_VersicherterExpressVersandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express - Versand
     * @return string 'DE_VersicherterExpressVersandInternational'
     */
    const VALUE_DE_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_VersicherterExpressVersandInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefLandInternational'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Brief (Land)
     * @return string 'DE_DeutschePostBriefLandInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_LAND_INTERNATIONAL = 'DE_DeutschePostBriefLandInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefLuftInternational'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Brief (Luft)
     * @return string 'DE_DeutschePostBriefLuftInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_LUFT_INTERNATIONAL = 'DE_DeutschePostBriefLuftInternational';
    /**
     * Constant for value 'DE_IloxxEuropaInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Europa
     * @return string 'DE_IloxxEuropaInternational'
     */
    const VALUE_DE_ILOXX_EUROPA_INTERNATIONAL = 'DE_IloxxEuropaInternational';
    /**
     * Constant for value 'DE_IloxxWorldWideInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx World Wide
     * @return string 'DE_IloxxWorldWideInternational'
     */
    const VALUE_DE_ILOXX_WORLD_WIDE_INTERNATIONAL = 'DE_IloxxWorldWideInternational';
    /**
     * Constant for value 'DE_Paket'
     * Meta information extracted from the WSDL
     * - documentation: Paketversand
     * @return string 'DE_Paket'
     */
    const VALUE_DE_PAKET = 'DE_Paket';
    /**
     * Constant for value 'DE_Express'
     * Meta information extracted from the WSDL
     * - documentation: Expressversand
     * @return string 'DE_Express'
     */
    const VALUE_DE_EXPRESS = 'DE_Express';
    /**
     * Constant for value 'DE_DHLPaket'
     * Meta information extracted from the WSDL
     * - documentation: DHL Paket
     * @return string 'DE_DHLPaket'
     */
    const VALUE_DE_DHLPAKET = 'DE_DHLPaket';
    /**
     * Constant for value 'DE_DPBuecherWarensendung'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Buecher-/Warensendung
     * @return string 'DE_DPBuecherWarensendung'
     */
    const VALUE_DE_DPBUECHER_WARENSENDUNG = 'DE_DPBuecherWarensendung';
    /**
     * Constant for value 'DE_HermesPaket'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket
     * @return string 'DE_HermesPaket'
     */
    const VALUE_DE_HERMES_PAKET = 'DE_HermesPaket';
    /**
     * Constant for value 'DE_IloxxTransport'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Transport
     * @return string 'DE_IloxxTransport'
     */
    const VALUE_DE_ILOXX_TRANSPORT = 'DE_IloxxTransport';
    /**
     * Constant for value 'DE_SonstigeDomestic'
     * Meta information extracted from the WSDL
     * - documentation: Sonstige
     * @return string 'DE_SonstigeDomestic'
     */
    const VALUE_DE_SONSTIGE_DOMESTIC = 'DE_SonstigeDomestic';
    /**
     * Constant for value 'DE_Einschreiben'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (inkl. aller Gebuehren)
     * @return string 'DE_Einschreiben'
     */
    const VALUE_DE_EINSCHREIBEN = 'DE_Einschreiben';
    /**
     * Constant for value 'DE_Nachname'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (inkl. aller Gebuehren)
     * @return string 'DE_Nachname'
     */
    const VALUE_DE_NACHNAME = 'DE_Nachname';
    /**
     * Constant for value 'DE_SpecialDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Sonderversand
     * @return string 'DE_SpecialDelivery'
     */
    const VALUE_DE_SPECIAL_DELIVERY = 'DE_SpecialDelivery';
    /**
     * Constant for value 'DE_UPS'
     * Meta information extracted from the WSDL
     * - documentation: UPS
     * @return string 'DE_UPS'
     */
    const VALUE_DE_UPS = 'DE_UPS';
    /**
     * Constant for value 'DE_DPD'
     * Meta information extracted from the WSDL
     * - documentation: DPD
     * @return string 'DE_DPD'
     */
    const VALUE_DE_DPD = 'DE_DPD';
    /**
     * Constant for value 'DE_GLS'
     * Meta information extracted from the WSDL
     * - documentation: GLS
     * @return string 'DE_GLS'
     */
    const VALUE_DE_GLS = 'DE_GLS';
    /**
     * Constant for value 'DE_PaketInternational'
     * Meta information extracted from the WSDL
     * - documentation: Paketversand
     * @return string 'DE_PaketInternational'
     */
    const VALUE_DE_PAKET_INTERNATIONAL = 'DE_PaketInternational';
    /**
     * Constant for value 'DE_DHLPaketInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL Paket International
     * @return string 'DE_DHLPaketInternational'
     */
    const VALUE_DE_DHLPAKET_INTERNATIONAL = 'DE_DHLPaketInternational';
    /**
     * Constant for value 'DE_DHLPaketIntlExpress'
     * Meta information extracted from the WSDL
     * - documentation: DHL Paket International Express
     * @return string 'DE_DHLPaketIntlExpress'
     */
    const VALUE_DE_DHLPAKET_INTL_EXPRESS = 'DE_DHLPaketIntlExpress';
    /**
     * Constant for value 'DE_SonstigeInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sonstige
     * @return string 'DE_SonstigeInternational'
     */
    const VALUE_DE_SONSTIGE_INTERNATIONAL = 'DE_SonstigeInternational';
    /**
     * Constant for value 'DE_ExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expressversand
     * @return string 'DE_ExpressInternational'
     */
    const VALUE_DE_EXPRESS_INTERNATIONAL = 'DE_ExpressInternational';
    /**
     * Constant for value 'DE_DPBriefInternational'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Brief
     * @return string 'DE_DPBriefInternational'
     */
    const VALUE_DE_DPBRIEF_INTERNATIONAL = 'DE_DPBriefInternational';
    /**
     * Constant for value 'DE_IloxxTransportInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Transport International
     * @return string 'DE_IloxxTransportInternational'
     */
    const VALUE_DE_ILOXX_TRANSPORT_INTERNATIONAL = 'DE_IloxxTransportInternational';
    /**
     * Constant for value 'DE_HermesPaketInternational'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket International
     * @return string 'DE_HermesPaketInternational'
     */
    const VALUE_DE_HERMES_PAKET_INTERNATIONAL = 'DE_HermesPaketInternational';
    /**
     * Constant for value 'DE_UPSInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS International
     * @return string 'DE_UPSInternational'
     */
    const VALUE_DE_UPSINTERNATIONAL = 'DE_UPSInternational';
    /**
     * Constant for value 'DE_DPDInternational'
     * Meta information extracted from the WSDL
     * - documentation: DPD International
     * @return string 'DE_DPDInternational'
     */
    const VALUE_DE_DPDINTERNATIONAL = 'DE_DPDInternational';
    /**
     * Constant for value 'DE_GLSInternational'
     * Meta information extracted from the WSDL
     * - documentation: GLS International
     * @return string 'DE_GLSInternational'
     */
    const VALUE_DE_GLSINTERNATIONAL = 'DE_GLSInternational';
    /**
     * Constant for value 'DE_eBayHermesPaketShop2ShopKaeufer'
     * Meta information extracted from the WSDL
     * - documentation: eBay Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     * @return string 'DE_eBayHermesPaketShop2ShopKaeufer'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_eBayHermesPaketShop2ShopKaeufer';
    /**
     * Constant for value 'DE_HermesPaketShop2ShopKaeufer'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     * @return string 'DE_HermesPaketShop2ShopKaeufer'
     */
    const VALUE_DE_HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_HermesPaketShop2ShopKaeufer';
    /**
     * Constant for value 'DE_eBayHermesPaketShop2Shop'
     * Meta information extracted from the WSDL
     * - documentation: eBay Hermes Paket Shop2Shop
     * @return string 'DE_eBayHermesPaketShop2Shop'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP = 'DE_eBayHermesPaketShop2Shop';
    /**
     * Constant for value 'DE_HermesPaketShop2Shop'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket Shop2Shop
     * @return string 'DE_HermesPaketShop2Shop'
     */
    const VALUE_DE_HERMES_PAKET_SHOP_2_SHOP = 'DE_HermesPaketShop2Shop';
    /**
     * Constant for value 'DE_HermesPaketSperrgut'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket Sperrgut
     * @return string 'DE_HermesPaketSperrgut'
     */
    const VALUE_DE_HERMES_PAKET_SPERRGUT = 'DE_HermesPaketSperrgut';
    /**
     * Constant for value 'DE_eBayHermesPaketSperrgutShop2Shop'
     * Meta information extracted from the WSDL
     * - documentation: eBay Hermes Paket Sperrgut Shop2Shop (Abgabe und Zustellung im Paketshop)
     * @return string 'DE_eBayHermesPaketSperrgutShop2Shop'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SPERRGUT_SHOP_2_SHOP = 'DE_eBayHermesPaketSperrgutShop2Shop';
    /**
     * Constant for value 'DE_DHLPaeckchenPackstation'
     * Meta information extracted from the WSDL
     * - documentation: DHL Paeckchen Packstation
     * @return string 'DE_DHLPaeckchenPackstation'
     */
    const VALUE_DE_DHLPAECKCHEN_PACKSTATION = 'DE_DHLPaeckchenPackstation';
    /**
     * Constant for value 'DE_DHLPaketPackstation'
     * Meta information extracted from the WSDL
     * - documentation: DHL Paket Packstation
     * @return string 'DE_DHLPaketPackstation'
     */
    const VALUE_DE_DHLPAKET_PACKSTATION = 'DE_DHLPaketPackstation';
    /**
     * Constant for value 'DE_eBayDHLPaeckchen'
     * Meta information extracted from the WSDL
     * - documentation: eBay DHL Paeckchen
     * @return string 'DE_eBayDHLPaeckchen'
     */
    const VALUE_DE_E_BAY_DHLPAECKCHEN = 'DE_eBayDHLPaeckchen';
    /**
     * Constant for value 'DE_DHLStarPaeckchen'
     * Meta information extracted from the WSDL
     * - documentation: DHL Star-Paeckchen
     * @return string 'DE_DHLStarPaeckchen'
     */
    const VALUE_DE_DHLSTAR_PAECKCHEN = 'DE_DHLStarPaeckchen';
    /**
     * Constant for value 'DE_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Versand mit Nachverfolgung aus dem Ausland
     * @return string 'DE_TrackedDeliveryFromAbroad'
     */
    const VALUE_DE_TRACKED_DELIVERY_FROM_ABROAD = 'DE_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'ES_CartasNacionalesHasta20'
     * Meta information extracted from the WSDL
     * - documentation: Cartas nacionales hasta 20 gr
     * @return string 'ES_CartasNacionalesHasta20'
     */
    const VALUE_ES_CARTAS_NACIONALES_HASTA_20 = 'ES_CartasNacionalesHasta20';
    /**
     * Constant for value 'ES_CartasNacionalesDeMas20'
     * Meta information extracted from the WSDL
     * - documentation: Correos: cartas ordinarias
     * @return string 'ES_CartasNacionalesDeMas20'
     */
    const VALUE_ES_CARTAS_NACIONALES_DE_MAS_20 = 'ES_CartasNacionalesDeMas20';
    /**
     * Constant for value 'ES_CartasInternacionalesHasta20'
     * Meta information extracted from the WSDL
     * - documentation: Cartas internacionales hasta 20 gr
     * @return string 'ES_CartasInternacionalesHasta20'
     */
    const VALUE_ES_CARTAS_INTERNACIONALES_HASTA_20 = 'ES_CartasInternacionalesHasta20';
    /**
     * Constant for value 'ES_CartasInternacionalesDeMas20'
     * Meta information extracted from the WSDL
     * - documentation: Cartas internacionales de mas de 20 gr
     * @return string 'ES_CartasInternacionalesDeMas20'
     */
    const VALUE_ES_CARTAS_INTERNACIONALES_DE_MAS_20 = 'ES_CartasInternacionalesDeMas20';
    /**
     * Constant for value 'ES_PaqueteAzulHasta2kg'
     * Meta information extracted from the WSDL
     * - documentation: Paquete Azul (nacional) hasta 2 kg
     * @return string 'ES_PaqueteAzulHasta2kg'
     */
    const VALUE_ES_PAQUETE_AZUL_HASTA_2_KG = 'ES_PaqueteAzulHasta2kg';
    /**
     * Constant for value 'ES_PaqueteAzulDeMas2kg'
     * Meta information extracted from the WSDL
     * - documentation: Correos: Postal Expres
     * @return string 'ES_PaqueteAzulDeMas2kg'
     */
    const VALUE_ES_PAQUETE_AZUL_DE_MAS_2_KG = 'ES_PaqueteAzulDeMas2kg';
    /**
     * Constant for value 'ES_PaqueteInternacionalEconomico'
     * Meta information extracted from the WSDL
     * - documentation: Paquete Internacional Economico
     * @return string 'ES_PaqueteInternacionalEconomico'
     */
    const VALUE_ES_PAQUETE_INTERNACIONAL_ECONOMICO = 'ES_PaqueteInternacionalEconomico';
    /**
     * Constant for value 'ES_Urgente'
     * Meta information extracted from the WSDL
     * - documentation: Otro courier 24 horas
     * @return string 'ES_Urgente'
     */
    const VALUE_ES_URGENTE = 'ES_Urgente';
    /**
     * Constant for value 'ES_Otros'
     * Meta information extracted from the WSDL
     * - documentation: Otros (ver descripcion)
     * @return string 'ES_Otros'
     */
    const VALUE_ES_OTROS = 'ES_Otros';
    /**
     * Constant for value 'ES_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Envio internacional estandar
     * @return string 'ES_StandardInternational'
     */
    const VALUE_ES_STANDARD_INTERNATIONAL = 'ES_StandardInternational';
    /**
     * Constant for value 'ES_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Envio internacional urgente
     * @return string 'ES_ExpeditedInternational'
     */
    const VALUE_ES_EXPEDITED_INTERNATIONAL = 'ES_ExpeditedInternational';
    /**
     * Constant for value 'ES_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Envio internacional economico
     * @return string 'ES_OtherInternational'
     */
    const VALUE_ES_OTHER_INTERNATIONAL = 'ES_OtherInternational';
    /**
     * Constant for value 'ES_CartasPostalInternational'
     * Meta information extracted from the WSDL
     * - documentation: Cartas y tarjetas postales internacionales
     * @return string 'ES_CartasPostalInternational'
     */
    const VALUE_ES_CARTAS_POSTAL_INTERNATIONAL = 'ES_CartasPostalInternational';
    /**
     * Constant for value 'ES_EmsPostalExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: Ems postal expres internacional
     * @return string 'ES_EmsPostalExpressInternational'
     */
    const VALUE_ES_EMS_POSTAL_EXPRESS_INTERNATIONAL = 'ES_EmsPostalExpressInternational';
    /**
     * Constant for value 'ES_EconomyPacketInternational'
     * Meta information extracted from the WSDL
     * - documentation: Paquete internacional economico
     * @return string 'ES_EconomyPacketInternational'
     */
    const VALUE_ES_ECONOMY_PACKET_INTERNATIONAL = 'ES_EconomyPacketInternational';
    /**
     * Constant for value 'ES_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Envio economico desde el extranjero
     * @return string 'ES_EconomyDeliveryFromAbroad'
     */
    const VALUE_ES_ECONOMY_DELIVERY_FROM_ABROAD = 'ES_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'ES_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Envio estandar desde el extranjero
     * @return string 'ES_StandardDeliveryFromAbroad'
     */
    const VALUE_ES_STANDARD_DELIVERY_FROM_ABROAD = 'ES_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'ES_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Envio urgente desde el extranjero
     * @return string 'ES_ExpressDeliveryFromAbroad'
     */
    const VALUE_ES_EXPRESS_DELIVERY_FROM_ABROAD = 'ES_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'ES_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Envio desde el extranjero con seguimiento
     * @return string 'ES_TrackedDeliveryFromAbroad'
     */
    const VALUE_ES_TRACKED_DELIVERY_FROM_ABROAD = 'ES_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'ES_ENTREGA_KIALA_8KG'
     * Meta information extracted from the WSDL
     * - documentation: Entrega a un Kiala point hasta 8 kg
     * @return string 'ES_ENTREGA_KIALA_8KG'
     */
    const VALUE_ES_ENTREGA_KIALA_8_KG = 'ES_ENTREGA_KIALA_8KG';
    /**
     * Constant for value 'FR_ChronoposteInternationalClassic'
     * Meta information extracted from the WSDL
     * - documentation: Chronoposte International Classic
     * @return string 'FR_ChronoposteInternationalClassic'
     */
    const VALUE_FR_CHRONOPOSTE_INTERNATIONAL_CLASSIC = 'FR_ChronoposteInternationalClassic';
    /**
     * Constant for value 'FR_ColiposteColissimoDirect'
     * Meta information extracted from the WSDL
     * - documentation: Coliposte Colissimo Direct
     * @return string 'FR_ColiposteColissimoDirect'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO_DIRECT = 'FR_ColiposteColissimoDirect';
    /**
     * Constant for value 'FR_DHLExpressEuropack'
     * Meta information extracted from the WSDL
     * - documentation: DHL Express Europack
     * @return string 'FR_DHLExpressEuropack'
     */
    const VALUE_FR_DHLEXPRESS_EUROPACK = 'FR_DHLExpressEuropack';
    /**
     * Constant for value 'FR_UPSStandard'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard
     * @return string 'FR_UPSStandard'
     */
    const VALUE_FR_UPSSTANDARD = 'FR_UPSStandard';
    /**
     * Constant for value 'FR_PostOfficeLetter'
     * Meta information extracted from the WSDL
     * - documentation: Lettre
     * @return string 'FR_PostOfficeLetter'
     */
    const VALUE_FR_POST_OFFICE_LETTER = 'FR_PostOfficeLetter';
    /**
     * Constant for value 'FR_PostOfficeLetterFollowed'
     * Meta information extracted from the WSDL
     * - documentation: Lettre avec suivi
     * @return string 'FR_PostOfficeLetterFollowed'
     */
    const VALUE_FR_POST_OFFICE_LETTER_FOLLOWED = 'FR_PostOfficeLetterFollowed';
    /**
     * Constant for value 'FR_PostOfficeLetterRecommended'
     * Meta information extracted from the WSDL
     * - documentation: Lettre recommandee
     * @return string 'FR_PostOfficeLetterRecommended'
     */
    const VALUE_FR_POST_OFFICE_LETTER_RECOMMENDED = 'FR_PostOfficeLetterRecommended';
    /**
     * Constant for value 'FR_ColiposteColissimo'
     * Meta information extracted from the WSDL
     * - documentation: Colissimo
     * @return string 'FR_ColiposteColissimo'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO = 'FR_ColiposteColissimo';
    /**
     * Constant for value 'FR_ColiposteColissimoRecommended'
     * Meta information extracted from the WSDL
     * - documentation: Colissimo Recommande
     * @return string 'FR_ColiposteColissimoRecommended'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO_RECOMMENDED = 'FR_ColiposteColissimoRecommended';
    /**
     * Constant for value 'FR_UPSStandardAgainstRefund'
     * Meta information extracted from the WSDL
     * - documentation: Contre remboursement
     * @return string 'FR_UPSStandardAgainstRefund'
     */
    const VALUE_FR_UPSSTANDARD_AGAINST_REFUND = 'FR_UPSStandardAgainstRefund';
    /**
     * Constant for value 'FR_Autre'
     * Meta information extracted from the WSDL
     * - documentation: Autre mode d'envoi de courrier
     * @return string 'FR_Autre'
     */
    const VALUE_FR_AUTRE = 'FR_Autre';
    /**
     * Constant for value 'FR_Ecopli'
     * Meta information extracted from the WSDL
     * - documentation: Ecopli
     * @return string 'FR_Ecopli'
     */
    const VALUE_FR_ECOPLI = 'FR_Ecopli';
    /**
     * Constant for value 'FR_Colieco'
     * Meta information extracted from the WSDL
     * - documentation: Colieco
     * @return string 'FR_Colieco'
     */
    const VALUE_FR_COLIECO = 'FR_Colieco';
    /**
     * Constant for value 'FR_AuteModeDenvoiDeColis'
     * Meta information extracted from the WSDL
     * - documentation: Autre mode d'envoi de colis
     * @return string 'FR_AuteModeDenvoiDeColis'
     */
    const VALUE_FR_AUTE_MODE_DENVOI_DE_COLIS = 'FR_AuteModeDenvoiDeColis';
    /**
     * Constant for value 'FR_RemiseEnMainPropre'
     * Meta information extracted from the WSDL
     * - documentation: Remise en main propre
     * @return string 'FR_RemiseEnMainPropre'
     */
    const VALUE_FR_REMISE_EN_MAIN_PROPRE = 'FR_RemiseEnMainPropre';
    /**
     * Constant for value 'FR_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Autre livraison internationale standard
     * @return string 'FR_StandardInternational'
     */
    const VALUE_FR_STANDARD_INTERNATIONAL = 'FR_StandardInternational';
    /**
     * Constant for value 'FR_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Autre livraison internationale express
     * @return string 'FR_ExpeditedInternational'
     */
    const VALUE_FR_EXPEDITED_INTERNATIONAL = 'FR_ExpeditedInternational';
    /**
     * Constant for value 'FR_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Autre livraison internationale economique
     * @return string 'FR_OtherInternational'
     */
    const VALUE_FR_OTHER_INTERNATIONAL = 'FR_OtherInternational';
    /**
     * Constant for value 'FR_LaPosteInternationalPriorityCourier'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Courrier International Prioritaire
     * @return string 'FR_LaPosteInternationalPriorityCourier'
     */
    const VALUE_FR_LA_POSTE_INTERNATIONAL_PRIORITY_COURIER = 'FR_LaPosteInternationalPriorityCourier';
    /**
     * Constant for value 'FR_LaPosteInternationalEconomyCourier'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Courrier International Economique
     * @return string 'FR_LaPosteInternationalEconomyCourier'
     */
    const VALUE_FR_LA_POSTE_INTERNATIONAL_ECONOMY_COURIER = 'FR_LaPosteInternationalEconomyCourier';
    /**
     * Constant for value 'FR_LaPosteColissimoInternational'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Colissimo International
     * @return string 'FR_LaPosteColissimoInternational'
     */
    const VALUE_FR_LA_POSTE_COLISSIMO_INTERNATIONAL = 'FR_LaPosteColissimoInternational';
    /**
     * Constant for value 'FR_LaPosteColisEconomiqueInternational'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Colis Economique International
     * @return string 'FR_LaPosteColisEconomiqueInternational'
     */
    const VALUE_FR_LA_POSTE_COLIS_ECONOMIQUE_INTERNATIONAL = 'FR_LaPosteColisEconomiqueInternational';
    /**
     * Constant for value 'FR_LaPosteColissimoEmballageInternational'
     * Meta information extracted from the WSDL
     * - documentation: La Poste - Colissimo Emballage International
     * @return string 'FR_LaPosteColissimoEmballageInternational'
     */
    const VALUE_FR_LA_POSTE_COLISSIMO_EMBALLAGE_INTERNATIONAL = 'FR_LaPosteColissimoEmballageInternational';
    /**
     * Constant for value 'FR_ChronopostClassicInternational'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost Classic International
     * @return string 'FR_ChronopostClassicInternational'
     */
    const VALUE_FR_CHRONOPOST_CLASSIC_INTERNATIONAL = 'FR_ChronopostClassicInternational';
    /**
     * Constant for value 'FR_ChronopostPremiumInternational'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost Premium International
     * @return string 'FR_ChronopostPremiumInternational'
     */
    const VALUE_FR_CHRONOPOST_PREMIUM_INTERNATIONAL = 'FR_ChronopostPremiumInternational';
    /**
     * Constant for value 'FR_UPSStandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard
     * @return string 'FR_UPSStandardInternational'
     */
    const VALUE_FR_UPSSTANDARD_INTERNATIONAL = 'FR_UPSStandardInternational';
    /**
     * Constant for value 'FR_UPSExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express
     * @return string 'FR_UPSExpressInternational'
     */
    const VALUE_FR_UPSEXPRESS_INTERNATIONAL = 'FR_UPSExpressInternational';
    /**
     * Constant for value 'FR_DHLInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL
     * @return string 'FR_DHLInternational'
     */
    const VALUE_FR_DHLINTERNATIONAL = 'FR_DHLInternational';
    /**
     * Constant for value 'FR_LaPosteLetterMax'
     * Meta information extracted from the WSDL
     * - documentation: La Poste Lettre Max
     * @return string 'FR_LaPosteLetterMax'
     */
    const VALUE_FR_LA_POSTE_LETTER_MAX = 'FR_LaPosteLetterMax';
    /**
     * Constant for value 'FR_KIALA_DELIVERY'
     * Meta information extracted from the WSDL
     * - documentation: Livraison en Relais Kiala
     * @return string 'FR_KIALA_DELIVERY'
     */
    const VALUE_FR_KIALA_DELIVERY = 'FR_KIALA_DELIVERY';
    /**
     * Constant for value 'FR_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Livraison a partir de l'etranger avec suivi de commande
     * @return string 'FR_TrackedDeliveryFromAbroad'
     */
    const VALUE_FR_TRACKED_DELIVERY_FROM_ABROAD = 'FR_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'IN_Regular'
     * Meta information extracted from the WSDL
     * - documentation: National - Regular
     * @return string 'IN_Regular'
     */
    const VALUE_IN_REGULAR = 'IN_Regular';
    /**
     * Constant for value 'IN_Express'
     * Meta information extracted from the WSDL
     * - documentation: National - Express
     * @return string 'IN_Express'
     */
    const VALUE_IN_EXPRESS = 'IN_Express';
    /**
     * Constant for value 'IN_NationalCOD'
     * Meta information extracted from the WSDL
     * - documentation: National - COD
     * @return string 'IN_NationalCOD'
     */
    const VALUE_IN_NATIONAL_COD = 'IN_NationalCOD';
    /**
     * Constant for value 'IN_Courier'
     * Meta information extracted from the WSDL
     * - documentation: Local - Courier
     * @return string 'IN_Courier'
     */
    const VALUE_IN_COURIER = 'IN_Courier';
    /**
     * Constant for value 'IN_LocalCOD'
     * Meta information extracted from the WSDL
     * - documentation: Local - COD
     * @return string 'IN_LocalCOD'
     */
    const VALUE_IN_LOCAL_COD = 'IN_LocalCOD';
    /**
     * Constant for value 'IN_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: International - Standard
     * @return string 'IN_StandardInternational'
     */
    const VALUE_IN_STANDARD_INTERNATIONAL = 'IN_StandardInternational';
    /**
     * Constant for value 'IN_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: International - Expedited
     * @return string 'IN_ExpeditedInternational'
     */
    const VALUE_IN_EXPEDITED_INTERNATIONAL = 'IN_ExpeditedInternational';
    /**
     * Constant for value 'IN_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: International - other
     * @return string 'IN_OtherInternational'
     */
    const VALUE_IN_OTHER_INTERNATIONAL = 'IN_OtherInternational';
    /**
     * Constant for value 'IN_FlatRateCOD'
     * Meta information extracted from the WSDL
     * - documentation: Flat Rate COD
     * @return string 'IN_FlatRateCOD'
     */
    const VALUE_IN_FLAT_RATE_COD = 'IN_FlatRateCOD';
    /**
     * Constant for value 'IN_BuyerPicksUpAndPays'
     * Meta information extracted from the WSDL
     * - documentation: Buyer picks up and pays
     * @return string 'IN_BuyerPicksUpAndPays'
     */
    const VALUE_IN_BUYER_PICKS_UP_AND_PAYS = 'IN_BuyerPicksUpAndPays';
    /**
     * Constant for value 'IT_RegularMail'
     * Meta information extracted from the WSDL
     * - documentation: Posta ordinaria
     * @return string 'IT_RegularMail'
     */
    const VALUE_IT_REGULAR_MAIL = 'IT_RegularMail';
    /**
     * Constant for value 'IT_PriorityMail'
     * Meta information extracted from the WSDL
     * - documentation: Posta prioritaria
     * @return string 'IT_PriorityMail'
     */
    const VALUE_IT_PRIORITY_MAIL = 'IT_PriorityMail';
    /**
     * Constant for value 'IT_MailRegisteredLetter'
     * Meta information extracted from the WSDL
     * - documentation: Posta raccomandata
     * @return string 'IT_MailRegisteredLetter'
     */
    const VALUE_IT_MAIL_REGISTERED_LETTER = 'IT_MailRegisteredLetter';
    /**
     * Constant for value 'IT_MailRegisteredLetterWithMark'
     * Meta information extracted from the WSDL
     * - documentation: Posta raccomandata con contrassegno
     * @return string 'IT_MailRegisteredLetterWithMark'
     */
    const VALUE_IT_MAIL_REGISTERED_LETTER_WITH_MARK = 'IT_MailRegisteredLetterWithMark';
    /**
     * Constant for value 'IT_InsuredMail'
     * Meta information extracted from the WSDL
     * - documentation: Posta assicurata
     * @return string 'IT_InsuredMail'
     */
    const VALUE_IT_INSURED_MAIL = 'IT_InsuredMail';
    /**
     * Constant for value 'IT_QuickMail'
     * Meta information extracted from the WSDL
     * - documentation: Posta celere
     * @return string 'IT_QuickMail'
     */
    const VALUE_IT_QUICK_MAIL = 'IT_QuickMail';
    /**
     * Constant for value 'IT_RegularPackage'
     * Meta information extracted from the WSDL
     * - documentation: Pacco ordinario
     * @return string 'IT_RegularPackage'
     */
    const VALUE_IT_REGULAR_PACKAGE = 'IT_RegularPackage';
    /**
     * Constant for value 'IT_QuickPackage1'
     * Meta information extracted from the WSDL
     * - documentation: Pacco celere 1
     * @return string 'IT_QuickPackage1'
     */
    const VALUE_IT_QUICK_PACKAGE_1 = 'IT_QuickPackage1';
    /**
     * Constant for value 'IT_QuickPackage3'
     * Meta information extracted from the WSDL
     * - documentation: Pacco celere 3
     * @return string 'IT_QuickPackage3'
     */
    const VALUE_IT_QUICK_PACKAGE_3 = 'IT_QuickPackage3';
    /**
     * Constant for value 'IT_ExpressCourier'
     * Meta information extracted from the WSDL
     * - documentation: Corriere espresso
     * @return string 'IT_ExpressCourier'
     */
    const VALUE_IT_EXPRESS_COURIER = 'IT_ExpressCourier';
    /**
     * Constant for value 'IT_ExpressPackageMaxi'
     * Meta information extracted from the WSDL
     * - documentation: Paccocelere Maxi
     * @return string 'IT_ExpressPackageMaxi'
     */
    const VALUE_IT_EXPRESS_PACKAGE_MAXI = 'IT_ExpressPackageMaxi';
    /**
     * Constant for value 'IT_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Spedizione internazionale standard a prezzo fisso
     * @return string 'IT_StandardInternational'
     */
    const VALUE_IT_STANDARD_INTERNATIONAL = 'IT_StandardInternational';
    /**
     * Constant for value 'IT_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Spedizione internazionale celere a prezzo fisso
     * @return string 'IT_ExpeditedInternational'
     */
    const VALUE_IT_EXPEDITED_INTERNATIONAL = 'IT_ExpeditedInternational';
    /**
     * Constant for value 'IT_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Altre spedizioni internazionali (vedi descrizione)
     * @return string 'IT_OtherInternational'
     */
    const VALUE_IT_OTHER_INTERNATIONAL = 'IT_OtherInternational';
    /**
     * Constant for value 'IT_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Spedizione tracciata dall estero
     * @return string 'IT_TrackedDeliveryFromAbroad'
     */
    const VALUE_IT_TRACKED_DELIVERY_FROM_ABROAD = 'IT_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'NL_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Standaardverzending
     * @return string 'NL_StandardDelivery'
     */
    const VALUE_NL_STANDARD_DELIVERY = 'NL_StandardDelivery';
    /**
     * Constant for value 'NL_ParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Pakketpost
     * @return string 'NL_ParcelPost'
     */
    const VALUE_NL_PARCEL_POST = 'NL_ParcelPost';
    /**
     * Constant for value 'NL_RegisteredMail'
     * Meta information extracted from the WSDL
     * - documentation: Verzending met ontvangstbevestiging
     * @return string 'NL_RegisteredMail'
     */
    const VALUE_NL_REGISTERED_MAIL = 'NL_RegisteredMail';
    /**
     * Constant for value 'NL_Other'
     * Meta information extracted from the WSDL
     * - documentation: Andere verzendservice
     * @return string 'NL_Other'
     */
    const VALUE_NL_OTHER = 'NL_Other';
    /**
     * Constant for value 'NL_TPGPostTNTInternational'
     * Meta information extracted from the WSDL
     * - documentation: TPG Post/TNT
     * @return string 'NL_TPGPostTNTInternational'
     */
    const VALUE_NL_TPGPOST_TNTINTERNATIONAL = 'NL_TPGPostTNTInternational';
    /**
     * Constant for value 'NL_UPSInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS
     * @return string 'NL_UPSInternational'
     */
    const VALUE_NL_UPSINTERNATIONAL = 'NL_UPSInternational';
    /**
     * Constant for value 'NL_FedExInternational'
     * Meta information extracted from the WSDL
     * - documentation: FedEx
     * @return string 'NL_FedExInternational'
     */
    const VALUE_NL_FED_EX_INTERNATIONAL = 'NL_FedExInternational';
    /**
     * Constant for value 'NL_DHLInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL
     * @return string 'NL_DHLInternational'
     */
    const VALUE_NL_DHLINTERNATIONAL = 'NL_DHLInternational';
    /**
     * Constant for value 'NL_DPDGBRInternational'
     * Meta information extracted from the WSDL
     * - documentation: DPD (Germany)
     * @return string 'NL_DPDGBRInternational'
     */
    const VALUE_NL_DPDGBRINTERNATIONAL = 'NL_DPDGBRInternational';
    /**
     * Constant for value 'NL_GLSBusinessInternational'
     * Meta information extracted from the WSDL
     * - documentation: GLS (Business only)
     * @return string 'NL_GLSBusinessInternational'
     */
    const VALUE_NL_GLSBUSINESS_INTERNATIONAL = 'NL_GLSBusinessInternational';
    /**
     * Constant for value 'NL_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Vaste kosten standaard internationale verzending
     * @return string 'NL_StandardInternational'
     */
    const VALUE_NL_STANDARD_INTERNATIONAL = 'NL_StandardInternational';
    /**
     * Constant for value 'NL_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Vaste kosten versnelde internationale verzending
     * @return string 'NL_ExpeditedInternational'
     */
    const VALUE_NL_EXPEDITED_INTERNATIONAL = 'NL_ExpeditedInternational';
    /**
     * Constant for value 'NL_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Andere internationale verzending (zie beschrijving)
     * @return string 'NL_OtherInternational'
     */
    const VALUE_NL_OTHER_INTERNATIONAL = 'NL_OtherInternational';
    /**
     * Constant for value 'NL_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Voordelige verzending uit het buitenland
     * @return string 'NL_EconomyDeliveryFromAbroad'
     */
    const VALUE_NL_ECONOMY_DELIVERY_FROM_ABROAD = 'NL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'NL_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Standaardverzending uit het buitenland
     * @return string 'NL_StandardDeliveryFromAbroad'
     */
    const VALUE_NL_STANDARD_DELIVERY_FROM_ABROAD = 'NL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'NL_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Verzending per expresse uit het buitenland
     * @return string 'NL_ExpressDeliveryFromAbroad'
     */
    const VALUE_NL_EXPRESS_DELIVERY_FROM_ABROAD = 'NL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'NL_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Verzending met internationale tracering uit het buitenland
     * @return string 'NL_TrackedDeliveryFromAbroad'
     */
    const VALUE_NL_TRACKED_DELIVERY_FROM_ABROAD = 'NL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'TW_RegisteredMail'
     * Meta information extracted from the WSDL
     * - documentation: Post office plus registration
     * @return string 'TW_RegisteredMail'
     */
    const VALUE_TW_REGISTERED_MAIL = 'TW_RegisteredMail';
    /**
     * Constant for value 'TW_UnregisteredMail'
     * Meta information extracted from the WSDL
     * - documentation: Post office without registration
     * @return string 'TW_UnregisteredMail'
     */
    const VALUE_TW_UNREGISTERED_MAIL = 'TW_UnregisteredMail';
    /**
     * Constant for value 'TW_COD'
     * Meta information extracted from the WSDL
     * - documentation: Post office cash on delivery
     * @return string 'TW_COD'
     */
    const VALUE_TW_COD = 'TW_COD';
    /**
     * Constant for value 'TW_DwellingMatchPost'
     * Meta information extracted from the WSDL
     * - documentation: Home delivery
     * @return string 'TW_DwellingMatchPost'
     */
    const VALUE_TW_DWELLING_MATCH_POST = 'TW_DwellingMatchPost';
    /**
     * Constant for value 'TW_DwellingMatchCOD'
     * Meta information extracted from the WSDL
     * - documentation: Home delivery cash on delivery
     * @return string 'TW_DwellingMatchCOD'
     */
    const VALUE_TW_DWELLING_MATCH_COD = 'TW_DwellingMatchCOD';
    /**
     * Constant for value 'TW_SelfPickup'
     * Meta information extracted from the WSDL
     * - documentation: Face to face
     * @return string 'TW_SelfPickup'
     */
    const VALUE_TW_SELF_PICKUP = 'TW_SelfPickup';
    /**
     * Constant for value 'TW_ParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Freight delivery
     * @return string 'TW_ParcelPost'
     */
    const VALUE_TW_PARCEL_POST = 'TW_ParcelPost';
    /**
     * Constant for value 'TW_ExpressMail'
     * Meta information extracted from the WSDL
     * - documentation: Express delivery
     * @return string 'TW_ExpressMail'
     */
    const VALUE_TW_EXPRESS_MAIL = 'TW_ExpressMail';
    /**
     * Constant for value 'TW_Other'
     * Meta information extracted from the WSDL
     * - documentation: Other
     * @return string 'TW_Other'
     */
    const VALUE_TW_OTHER = 'TW_Other';
    /**
     * Constant for value 'TW_CPInternationalLetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Post Office Airbag
     * @return string 'TW_CPInternationalLetterPost'
     */
    const VALUE_TW_CPINTERNATIONAL_LETTER_POST = 'TW_CPInternationalLetterPost';
    /**
     * Constant for value 'TW_CPInternationalParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Post office air parcel
     * @return string 'TW_CPInternationalParcelPost'
     */
    const VALUE_TW_CPINTERNATIONAL_PARCEL_POST = 'TW_CPInternationalParcelPost';
    /**
     * Constant for value 'TW_CPInternationalRegisteredLetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Post office aviation registered packet
     * @return string 'TW_CPInternationalRegisteredLetterPost'
     */
    const VALUE_TW_CPINTERNATIONAL_REGISTERED_LETTER_POST = 'TW_CPInternationalRegisteredLetterPost';
    /**
     * Constant for value 'TW_CPInternationalRegisteredParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Post office aviation registration package
     * @return string 'TW_CPInternationalRegisteredParcelPost'
     */
    const VALUE_TW_CPINTERNATIONAL_REGISTERED_PARCEL_POST = 'TW_CPInternationalRegisteredParcelPost';
    /**
     * Constant for value 'TW_CPInternationalEMS'
     * Meta information extracted from the WSDL
     * - documentation: Post Office International Express EMS
     * @return string 'TW_CPInternationalEMS'
     */
    const VALUE_TW_CPINTERNATIONAL_EMS = 'TW_CPInternationalEMS';
    /**
     * Constant for value 'TW_CPInternationalOceanShippingParcel'
     * Meta information extracted from the WSDL
     * - documentation: Post office international land and water package
     * @return string 'TW_CPInternationalOceanShippingParcel'
     */
    const VALUE_TW_CPINTERNATIONAL_OCEAN_SHIPPING_PARCEL = 'TW_CPInternationalOceanShippingParcel';
    /**
     * Constant for value 'TW_FedExInternationalPriority'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International Priority
     * @return string 'TW_FedExInternationalPriority'
     */
    const VALUE_TW_FED_EX_INTERNATIONAL_PRIORITY = 'TW_FedExInternationalPriority';
    /**
     * Constant for value 'TW_FedExInternationalEconomy'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International Economy
     * @return string 'TW_FedExInternationalEconomy'
     */
    const VALUE_TW_FED_EX_INTERNATIONAL_ECONOMY = 'TW_FedExInternationalEconomy';
    /**
     * Constant for value 'TW_UPSWorldwideExpedited'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Expedited
     * @return string 'TW_UPSWorldwideExpedited'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPEDITED = 'TW_UPSWorldwideExpedited';
    /**
     * Constant for value 'TW_UPSWorldwideExpress'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express
     * @return string 'TW_UPSWorldwideExpress'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPRESS = 'TW_UPSWorldwideExpress';
    /**
     * Constant for value 'TW_UPSWorldwideExpressPlus'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Plus
     * @return string 'TW_UPSWorldwideExpressPlus'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPRESS_PLUS = 'TW_UPSWorldwideExpressPlus';
    /**
     * Constant for value 'TW_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other international shipping charges (see description)
     * @return string 'TW_OtherInternational'
     */
    const VALUE_TW_OTHER_INTERNATIONAL = 'TW_OtherInternational';
    /**
     * Constant for value 'UK_RoyalMailFirstClassStandard'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail 1st Class
     * @return string 'UK_RoyalMailFirstClassStandard'
     */
    const VALUE_UK_ROYAL_MAIL_FIRST_CLASS_STANDARD = 'UK_RoyalMailFirstClassStandard';
    /**
     * Constant for value 'UK_RoyalMailSecondClassStandard'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail 2nd Class
     * @return string 'UK_RoyalMailSecondClassStandard'
     */
    const VALUE_UK_ROYAL_MAIL_SECOND_CLASS_STANDARD = 'UK_RoyalMailSecondClassStandard';
    /**
     * Constant for value 'UK_RoyalMailFirstClassRecorded'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail 1st Class Signed For
     * @return string 'UK_RoyalMailFirstClassRecorded'
     */
    const VALUE_UK_ROYAL_MAIL_FIRST_CLASS_RECORDED = 'UK_RoyalMailFirstClassRecorded';
    /**
     * Constant for value 'UK_RoyalMailSecondClassRecorded'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail 2nd Class Signed For
     * @return string 'UK_RoyalMailSecondClassRecorded'
     */
    const VALUE_UK_ROYAL_MAIL_SECOND_CLASS_RECORDED = 'UK_RoyalMailSecondClassRecorded';
    /**
     * Constant for value 'UK_RoyalMailSpecialDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Special Delivery
     * @return string 'UK_RoyalMailSpecialDelivery'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY = 'UK_RoyalMailSpecialDelivery';
    /**
     * Constant for value 'UK_RoyalMailStandardParcel'
     * Meta information extracted from the WSDL
     * - documentation: (This value is no longer used.)
     * @return string 'UK_RoyalMailStandardParcel'
     */
    const VALUE_UK_ROYAL_MAIL_STANDARD_PARCEL = 'UK_RoyalMailStandardParcel';
    /**
     * Constant for value 'UK_Parcelforce24'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce 24
     * @return string 'UK_Parcelforce24'
     */
    const VALUE_UK_PARCELFORCE_24 = 'UK_Parcelforce24';
    /**
     * Constant for value 'UK_Parcelforce48'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce 48
     * @return string 'UK_Parcelforce48'
     */
    const VALUE_UK_PARCELFORCE_48 = 'UK_Parcelforce48';
    /**
     * Constant for value 'UK_OtherCourier'
     * Meta information extracted from the WSDL
     * - documentation: Other Courier
     * @return string 'UK_OtherCourier'
     */
    const VALUE_UK_OTHER_COURIER = 'UK_OtherCourier';
    /**
     * Constant for value 'UK_myHermesDoorToDoorService'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Tracked
     * @return string 'UK_myHermesDoorToDoorService'
     */
    const VALUE_UK_MY_HERMES_DOOR_TO_DOOR_SERVICE = 'UK_myHermesDoorToDoorService';
    /**
     * Constant for value 'UK_CollectDropAtStoreDeliveryToDoor'
     * Meta information extracted from the WSDL
     * - documentation: Collect+ : drop at store-delivery to door
     * @return string 'UK_CollectDropAtStoreDeliveryToDoor'
     */
    const VALUE_UK_COLLECT_DROP_AT_STORE_DELIVERY_TO_DOOR = 'UK_CollectDropAtStoreDeliveryToDoor';
    /**
     * Constant for value 'UK_SellersStandardRate'
     * Meta information extracted from the WSDL
     * - documentation: Seller's Standard Rate
     * @return string 'UK_SellersStandardRate'
     */
    const VALUE_UK_SELLERS_STANDARD_RATE = 'UK_SellersStandardRate';
    /**
     * Constant for value 'UK_CollectInPerson'
     * Meta information extracted from the WSDL
     * - documentation: Collection in Person
     * @return string 'UK_CollectInPerson'
     */
    const VALUE_UK_COLLECT_IN_PERSON = 'UK_CollectInPerson';
    /**
     * Constant for value 'UK_SellersStandardInternationalRate'
     * Meta information extracted from the WSDL
     * - documentation: Sellers Standard International Rate
     * @return string 'UK_SellersStandardInternationalRate'
     */
    const VALUE_UK_SELLERS_STANDARD_INTERNATIONAL_RATE = 'UK_SellersStandardInternationalRate';
    /**
     * Constant for value 'UK_RoyalMailAirmailInternational'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Airmail
     * @return string 'UK_RoyalMailAirmailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_AIRMAIL_INTERNATIONAL = 'UK_RoyalMailAirmailInternational';
    /**
     * Constant for value 'UK_RoyalMailAirsureInternational'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Airsure
     * @return string 'UK_RoyalMailAirsureInternational'
     */
    const VALUE_UK_ROYAL_MAIL_AIRSURE_INTERNATIONAL = 'UK_RoyalMailAirsureInternational';
    /**
     * Constant for value 'UK_RoyalMailSurfaceMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Surface Mail
     * @return string 'UK_RoyalMailSurfaceMailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_SURFACE_MAIL_INTERNATIONAL = 'UK_RoyalMailSurfaceMailInternational';
    /**
     * Constant for value 'UK_RoyalMailInternationalSignedFor'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail International Signed-for
     * @return string 'UK_RoyalMailInternationalSignedFor'
     */
    const VALUE_UK_ROYAL_MAIL_INTERNATIONAL_SIGNED_FOR = 'UK_RoyalMailInternationalSignedFor';
    /**
     * Constant for value 'UK_RoyalMailHMForcesMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail HM Forces Mail
     * @return string 'UK_RoyalMailHMForcesMailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_HMFORCES_MAIL_INTERNATIONAL = 'UK_RoyalMailHMForcesMailInternational';
    /**
     * Constant for value 'UK_ParcelForceInternationalDatapost'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce International Datapost
     * @return string 'UK_ParcelForceInternationalDatapost'
     */
    const VALUE_UK_PARCEL_FORCE_INTERNATIONAL_DATAPOST = 'UK_ParcelForceInternationalDatapost';
    /**
     * Constant for value 'UK_ParcelForceIreland24International'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce Ireland 24
     * @return string 'UK_ParcelForceIreland24International'
     */
    const VALUE_UK_PARCEL_FORCE_IRELAND_24_INTERNATIONAL = 'UK_ParcelForceIreland24International';
    /**
     * Constant for value 'UK_ParcelForceEuro48International'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce Euro 48
     * @return string 'UK_ParcelForceEuro48International'
     */
    const VALUE_UK_PARCEL_FORCE_EURO_48_INTERNATIONAL = 'UK_ParcelForceEuro48International';
    /**
     * Constant for value 'UK_ParcelForceInternationalScheduled'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce International Scheduled
     * @return string 'UK_ParcelForceInternationalScheduled'
     */
    const VALUE_UK_PARCEL_FORCE_INTERNATIONAL_SCHEDULED = 'UK_ParcelForceInternationalScheduled';
    /**
     * Constant for value 'UK_OtherCourierOrDeliveryInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other courier or delivery service
     * @return string 'UK_OtherCourierOrDeliveryInternational'
     */
    const VALUE_UK_OTHER_COURIER_OR_DELIVERY_INTERNATIONAL = 'UK_OtherCourierOrDeliveryInternational';
    /**
     * Constant for value 'UK_CollectInPersonInternational'
     * Meta information extracted from the WSDL
     * - documentation: Collect in person
     * @return string 'UK_CollectInPersonInternational'
     */
    const VALUE_UK_COLLECT_IN_PERSON_INTERNATIONAL = 'UK_CollectInPersonInternational';
    /**
     * Constant for value 'UK_ParcelForceIntlExpress'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce Global Express
     * @return string 'UK_ParcelForceIntlExpress'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_EXPRESS = 'UK_ParcelForceIntlExpress';
    /**
     * Constant for value 'UK_ParcelForceIntlValue'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce Global Value
     * @return string 'UK_ParcelForceIntlValue'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_VALUE = 'UK_ParcelForceIntlValue';
    /**
     * Constant for value 'UK_ParcelForceIntlEconomy'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce Global Economy (Not available for destinations in Europe)
     * @return string 'UK_ParcelForceIntlEconomy'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_ECONOMY = 'UK_ParcelForceIntlEconomy';
    /**
     * Constant for value 'UK_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Tracked delivery from outside abroad
     * @return string 'UK_TrackedDeliveryFromAbroad'
     */
    const VALUE_UK_TRACKED_DELIVERY_FROM_ABROAD = 'UK_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'UK_IntlTrackedPostage'
     * Meta information extracted from the WSDL
     * - documentation: International tracked postage
     * @return string 'UK_IntlTrackedPostage'
     */
    const VALUE_UK_INTL_TRACKED_POSTAGE = 'UK_IntlTrackedPostage';
    /**
     * Constant for value 'IE_SellersStandardRate'
     * Meta information extracted from the WSDL
     * - documentation: Seller's standard rate
     * @return string 'IE_SellersStandardRate'
     */
    const VALUE_IE_SELLERS_STANDARD_RATE = 'IE_SellersStandardRate';
    /**
     * Constant for value 'IE_FirstClassLetterService'
     * Meta information extracted from the WSDL
     * - documentation: First Class Letter Service
     * @return string 'IE_FirstClassLetterService'
     */
    const VALUE_IE_FIRST_CLASS_LETTER_SERVICE = 'IE_FirstClassLetterService';
    /**
     * Constant for value 'IE_SwiftPostNational'
     * Meta information extracted from the WSDL
     * - documentation: SwiftPost National
     * @return string 'IE_SwiftPostNational'
     */
    const VALUE_IE_SWIFT_POST_NATIONAL = 'IE_SwiftPostNational';
    /**
     * Constant for value 'IE_RegisteredPost'
     * Meta information extracted from the WSDL
     * - documentation: Registered Post
     * @return string 'IE_RegisteredPost'
     */
    const VALUE_IE_REGISTERED_POST = 'IE_RegisteredPost';
    /**
     * Constant for value 'IE_EMSSDSCourier'
     * Meta information extracted from the WSDL
     * - documentation: EMS SDS Courier
     * @return string 'IE_EMSSDSCourier'
     */
    const VALUE_IE_EMSSDSCOURIER = 'IE_EMSSDSCourier';
    /**
     * Constant for value 'IE_EconomySDSCourier'
     * Meta information extracted from the WSDL
     * - documentation: Economy SDS Courier
     * @return string 'IE_EconomySDSCourier'
     */
    const VALUE_IE_ECONOMY_SDSCOURIER = 'IE_EconomySDSCourier';
    /**
     * Constant for value 'IE_OtherCourier'
     * Meta information extracted from the WSDL
     * - documentation: Other courier
     * @return string 'IE_OtherCourier'
     */
    const VALUE_IE_OTHER_COURIER = 'IE_OtherCourier';
    /**
     * Constant for value 'IE_CollectionInPerson'
     * Meta information extracted from the WSDL
     * - documentation: Collection in person
     * @return string 'IE_CollectionInPerson'
     */
    const VALUE_IE_COLLECTION_IN_PERSON = 'IE_CollectionInPerson';
    /**
     * Constant for value 'IE_SellersStandardRateInternational'
     * Meta information extracted from the WSDL
     * - documentation: Seller's Standard International Rate
     * @return string 'IE_SellersStandardRateInternational'
     */
    const VALUE_IE_SELLERS_STANDARD_RATE_INTERNATIONAL = 'IE_SellersStandardRateInternational';
    /**
     * Constant for value 'IE_InternationalEconomyService'
     * Meta information extracted from the WSDL
     * - documentation: International Economy Service
     * @return string 'IE_InternationalEconomyService'
     */
    const VALUE_IE_INTERNATIONAL_ECONOMY_SERVICE = 'IE_InternationalEconomyService';
    /**
     * Constant for value 'IE_InternationalPriorityService'
     * Meta information extracted from the WSDL
     * - documentation: International Priority Service
     * @return string 'IE_InternationalPriorityService'
     */
    const VALUE_IE_INTERNATIONAL_PRIORITY_SERVICE = 'IE_InternationalPriorityService';
    /**
     * Constant for value 'IE_SwiftPostExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: SwiftPost Express
     * @return string 'IE_SwiftPostExpressInternational'
     */
    const VALUE_IE_SWIFT_POST_EXPRESS_INTERNATIONAL = 'IE_SwiftPostExpressInternational';
    /**
     * Constant for value 'IE_SwiftPostInternational'
     * Meta information extracted from the WSDL
     * - documentation: SwiftPost International
     * @return string 'IE_SwiftPostInternational'
     */
    const VALUE_IE_SWIFT_POST_INTERNATIONAL = 'IE_SwiftPostInternational';
    /**
     * Constant for value 'IE_EMSSDSCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: EMS SDS Courier
     * @return string 'IE_EMSSDSCourierInternational'
     */
    const VALUE_IE_EMSSDSCOURIER_INTERNATIONAL = 'IE_EMSSDSCourierInternational';
    /**
     * Constant for value 'IE_EconomySDSCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Economy SDS Courier
     * @return string 'IE_EconomySDSCourierInternational'
     */
    const VALUE_IE_ECONOMY_SDSCOURIER_INTERNATIONAL = 'IE_EconomySDSCourierInternational';
    /**
     * Constant for value 'IE_OtherCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Other courier or delivery service
     * @return string 'IE_OtherCourierInternational'
     */
    const VALUE_IE_OTHER_COURIER_INTERNATIONAL = 'IE_OtherCourierInternational';
    /**
     * Constant for value 'IE_CollectionInPersonInternational'
     * Meta information extracted from the WSDL
     * - documentation: International collection in person
     * @return string 'IE_CollectionInPersonInternational'
     */
    const VALUE_IE_COLLECTION_IN_PERSON_INTERNATIONAL = 'IE_CollectionInPersonInternational';
    /**
     * Constant for value 'IE_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Economy delivery from abroad
     * @return string 'IE_EconomyDeliveryFromAbroad'
     */
    const VALUE_IE_ECONOMY_DELIVERY_FROM_ABROAD = 'IE_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'IE_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Standard delivery from abroad
     * @return string 'IE_StandardDeliveryFromAbroad'
     */
    const VALUE_IE_STANDARD_DELIVERY_FROM_ABROAD = 'IE_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'IE_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Express delivery from abroad
     * @return string 'IE_ExpressDeliveryFromAbroad'
     */
    const VALUE_IE_EXPRESS_DELIVERY_FROM_ABROAD = 'IE_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'IE_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Tracked delivery from abroad
     * @return string 'IE_TrackedDeliveryFromAbroad'
     */
    const VALUE_IE_TRACKED_DELIVERY_FROM_ABROAD = 'IE_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'PL_DomesticRegular'
     * Meta information extracted from the WSDL
     * - documentation: Domestic Regular shipping
     * @return string 'PL_DomesticRegular'
     */
    const VALUE_PL_DOMESTIC_REGULAR = 'PL_DomesticRegular';
    /**
     * Constant for value 'PL_DomesticSpecial'
     * Meta information extracted from the WSDL
     * - documentation: Domestic Special shipping
     * @return string 'PL_DomesticSpecial'
     */
    const VALUE_PL_DOMESTIC_SPECIAL = 'PL_DomesticSpecial';
    /**
     * Constant for value 'PL_EconomyDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka z zagranicy - ekonomiczna
     * @return string 'PL_EconomyDeliveryFromAbroad'
     */
    const VALUE_PL_ECONOMY_DELIVERY_FROM_ABROAD = 'PL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'PL_StandardDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka z zagranicy - standardowa
     * @return string 'PL_StandardDeliveryFromAbroad'
     */
    const VALUE_PL_STANDARD_DELIVERY_FROM_ABROAD = 'PL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'PL_ExpressDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka z zagranicy - ekspresowa
     * @return string 'PL_ExpressDeliveryFromAbroad'
     */
    const VALUE_PL_EXPRESS_DELIVERY_FROM_ABROAD = 'PL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'PL_TrackedDeliveryFromAbroad'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka z zagranicy - ze sledzeniem
     * @return string 'PL_TrackedDeliveryFromAbroad'
     */
    const VALUE_PL_TRACKED_DELIVERY_FROM_ABROAD = 'PL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'FreightShipping'
     * Meta information extracted from the WSDL
     * - documentation: Service associated with FreightQuote.com
     * @return string 'FreightShipping'
     */
    const VALUE_FREIGHT_SHIPPING = 'FreightShipping';
    /**
     * Constant for value 'FreightOtherShipping'
     * Meta information extracted from the WSDL
     * - documentation: (This value is no longer used.)
     * @return string 'FreightOtherShipping'
     */
    const VALUE_FREIGHT_OTHER_SHIPPING = 'FreightOtherShipping';
    /**
     * Constant for value 'Freight'
     * Meta information extracted from the WSDL
     * - documentation: Service associated with any freight service other than FreightQuote.com
     * @return string 'Freight'
     */
    const VALUE_FREIGHT = 'Freight';
    /**
     * Constant for value 'FreightShippingInternational'
     * Meta information extracted from the WSDL
     * - documentation: Freight Shipping International
     * @return string 'FreightShippingInternational'
     */
    const VALUE_FREIGHT_SHIPPING_INTERNATIONAL = 'FreightShippingInternational';
    /**
     * Constant for value 'USPSGround'
     * Meta information extracted from the WSDL
     * - documentation: US Postal Service Ground
     * @return string 'USPSGround'
     */
    const VALUE_USPSGROUND = 'USPSGround';
    /**
     * Constant for value 'ShippingMethodOvernight'
     * Meta information extracted from the WSDL
     * - documentation: Overnight flat rate shipping service (domestic only)
     * @return string 'ShippingMethodOvernight'
     */
    const VALUE_SHIPPING_METHOD_OVERNIGHT = 'ShippingMethodOvernight';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'USPSPriorityFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Flat Rate Envelope
     * @return string 'USPSPriorityFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_FLAT_RATE_ENVELOPE = 'USPSPriorityFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityFlatRateBox'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Flat Rate Box
     * @return string 'USPSPriorityFlatRateBox'
     */
    const VALUE_USPSPRIORITY_FLAT_RATE_BOX = 'USPSPriorityFlatRateBox';
    /**
     * Constant for value 'USPSGlobalPrioritySmallEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Global Priority Mail Small Envelope
     * @return string 'USPSGlobalPrioritySmallEnvelope'
     */
    const VALUE_USPSGLOBAL_PRIORITY_SMALL_ENVELOPE = 'USPSGlobalPrioritySmallEnvelope';
    /**
     * Constant for value 'USPSGlobalPriorityLargeEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Global Priority Mail Large Envelope
     * @return string 'USPSGlobalPriorityLargeEnvelope'
     */
    const VALUE_USPSGLOBAL_PRIORITY_LARGE_ENVELOPE = 'USPSGlobalPriorityLargeEnvelope';
    /**
     * Constant for value 'USPSExpressFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express Flat Rate Envelope
     * @return string 'USPSExpressFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_FLAT_RATE_ENVELOPE = 'USPSExpressFlatRateEnvelope';
    /**
     * Constant for value 'UPSWorldWideExpressBox10kg'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Box 10 Kg
     * @return string 'UPSWorldWideExpressBox10kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_BOX_10_KG = 'UPSWorldWideExpressBox10kg';
    /**
     * Constant for value 'UPSWorldWideExpressBox25kg'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Box 25 Kg
     * @return string 'UPSWorldWideExpressBox25kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_BOX_25_KG = 'UPSWorldWideExpressBox25kg';
    /**
     * Constant for value 'UPSWorldWideExpressPlusBox10kg'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Plus Box 10 Kg
     * @return string 'UPSWorldWideExpressPlusBox10kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_10_KG = 'UPSWorldWideExpressPlusBox10kg';
    /**
     * Constant for value 'UPSWorldWideExpressPlusBox25kg'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worldwide Express Plus box 25 Kg
     * @return string 'UPSWorldWideExpressPlusBox25kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_25_KG = 'UPSWorldWideExpressPlusBox25kg';
    /**
     * Constant for value 'HK_LocalPickUpOnly'
     * Meta information extracted from the WSDL
     * - documentation: Local pick up only
     * @return string 'HK_LocalPickUpOnly'
     */
    const VALUE_HK_LOCAL_PICK_UP_ONLY = 'HK_LocalPickUpOnly';
    /**
     * Constant for value 'HK_LocalCourier'
     * Meta information extracted from the WSDL
     * - documentation: Local courier
     * @return string 'HK_LocalCourier'
     */
    const VALUE_HK_LOCAL_COURIER = 'HK_LocalCourier';
    /**
     * Constant for value 'HK_DomesticRegularShipping'
     * Meta information extracted from the WSDL
     * - documentation: Domestic regular shipping
     * @return string 'HK_DomesticRegularShipping'
     */
    const VALUE_HK_DOMESTIC_REGULAR_SHIPPING = 'HK_DomesticRegularShipping';
    /**
     * Constant for value 'HK_DomesticSpecialShipping'
     * Meta information extracted from the WSDL
     * - documentation: Domestic special shipping
     * @return string 'HK_DomesticSpecialShipping'
     */
    const VALUE_HK_DOMESTIC_SPECIAL_SHIPPING = 'HK_DomesticSpecialShipping';
    /**
     * Constant for value 'HK_InternationalRegularShipping'
     * Meta information extracted from the WSDL
     * - documentation: International regular shipping
     * @return string 'HK_InternationalRegularShipping'
     */
    const VALUE_HK_INTERNATIONAL_REGULAR_SHIPPING = 'HK_InternationalRegularShipping';
    /**
     * Constant for value 'HK_InternationalSpecialShipping'
     * Meta information extracted from the WSDL
     * - documentation: International special shipping
     * @return string 'HK_InternationalSpecialShipping'
     */
    const VALUE_HK_INTERNATIONAL_SPECIAL_SHIPPING = 'HK_InternationalSpecialShipping';
    /**
     * Constant for value 'SG_LocalPickUpOnly'
     * Meta information extracted from the WSDL
     * - documentation: Local pick up only
     * @return string 'SG_LocalPickUpOnly'
     */
    const VALUE_SG_LOCAL_PICK_UP_ONLY = 'SG_LocalPickUpOnly';
    /**
     * Constant for value 'SG_LocalCourier'
     * Meta information extracted from the WSDL
     * - documentation: Local courier
     * @return string 'SG_LocalCourier'
     */
    const VALUE_SG_LOCAL_COURIER = 'SG_LocalCourier';
    /**
     * Constant for value 'SG_DomesticStandardMail'
     * Meta information extracted from the WSDL
     * - documentation: Domestic standard mail
     * @return string 'SG_DomesticStandardMail'
     */
    const VALUE_SG_DOMESTIC_STANDARD_MAIL = 'SG_DomesticStandardMail';
    /**
     * Constant for value 'SG_DomesticNonStandardMail'
     * Meta information extracted from the WSDL
     * - documentation: Domestic non standard mail
     * @return string 'SG_DomesticNonStandardMail'
     */
    const VALUE_SG_DOMESTIC_NON_STANDARD_MAIL = 'SG_DomesticNonStandardMail';
    /**
     * Constant for value 'SG_DomesticSpeedpostIslandwide'
     * Meta information extracted from the WSDL
     * - documentation: Domestic Speedpost Islandwide
     * @return string 'SG_DomesticSpeedpostIslandwide'
     */
    const VALUE_SG_DOMESTIC_SPEEDPOST_ISLANDWIDE = 'SG_DomesticSpeedpostIslandwide';
    /**
     * Constant for value 'SG_InternationalStandardMail'
     * Meta information extracted from the WSDL
     * - documentation: International standard mail
     * @return string 'SG_InternationalStandardMail'
     */
    const VALUE_SG_INTERNATIONAL_STANDARD_MAIL = 'SG_InternationalStandardMail';
    /**
     * Constant for value 'SG_InternationalExpressMailService'
     * Meta information extracted from the WSDL
     * - documentation: International Express Mail Service (EMS)
     * @return string 'SG_InternationalExpressMailService'
     */
    const VALUE_SG_INTERNATIONAL_EXPRESS_MAIL_SERVICE = 'SG_InternationalExpressMailService';
    /**
     * Constant for value 'SG_InternationalCourier'
     * Meta information extracted from the WSDL
     * - documentation: International courier (DHL, FedEx, UPS)
     * @return string 'SG_InternationalCourier'
     */
    const VALUE_SG_INTERNATIONAL_COURIER = 'SG_InternationalCourier';
    /**
     * Constant for value 'BENL_DePostZendingNONPRIOR'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - NON PRIOR (2 werkdagen)
     * @return string 'BENL_DePostZendingNONPRIOR'
     */
    const VALUE_BENL_DE_POST_ZENDING_NONPRIOR = 'BENL_DePostZendingNONPRIOR';
    /**
     * Constant for value 'BENL_DePostZendingPRIOR'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - PRIOR (1 werkdag)
     * @return string 'BENL_DePostZendingPRIOR'
     */
    const VALUE_BENL_DE_POST_ZENDING_PRIOR = 'BENL_DePostZendingPRIOR';
    /**
     * Constant for value 'BENL_DePostZendingAangetekend'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - aangetekend (1 werkdag)
     * @return string 'BENL_DePostZendingAangetekend'
     */
    const VALUE_BENL_DE_POST_ZENDING_AANGETEKEND = 'BENL_DePostZendingAangetekend';
    /**
     * Constant for value 'BENL_KilopostPakje'
     * Meta information extracted from the WSDL
     * - documentation: Kilopost pakje (2 werkdagen)
     * @return string 'BENL_KilopostPakje'
     */
    const VALUE_BENL_KILOPOST_PAKJE = 'BENL_KilopostPakje';
    /**
     * Constant for value 'BENL_Taxipost'
     * Meta information extracted from the WSDL
     * - documentation: Taxipost (express)
     * @return string 'BENL_Taxipost'
     */
    const VALUE_BENL_TAXIPOST = 'BENL_Taxipost';
    /**
     * Constant for value 'BENL_KialaAfhaalpunt'
     * Meta information extracted from the WSDL
     * - documentation: Kiala afhaalpunt (1 tot 4 werkdagen)
     * @return string 'BENL_KialaAfhaalpunt'
     */
    const VALUE_BENL_KIALA_AFHAALPUNT = 'BENL_KialaAfhaalpunt';
    /**
     * Constant for value 'BENL_VasteKostenStandaardVerzending'
     * Meta information extracted from the WSDL
     * - documentation: Vaste kosten standaard verzending
     * @return string 'BENL_VasteKostenStandaardVerzending'
     */
    const VALUE_BENL_VASTE_KOSTEN_STANDAARD_VERZENDING = 'BENL_VasteKostenStandaardVerzending';
    /**
     * Constant for value 'BENL_VasteKostenVersneldeVerzending'
     * Meta information extracted from the WSDL
     * - documentation: Vaste kosten versnelde verzending
     * @return string 'BENL_VasteKostenVersneldeVerzending'
     */
    const VALUE_BENL_VASTE_KOSTEN_VERSNELDE_VERZENDING = 'BENL_VasteKostenVersneldeVerzending';
    /**
     * Constant for value 'BENL_VerzekerdeVerzending'
     * Meta information extracted from the WSDL
     * - documentation: Verzekerde verzending
     * @return string 'BENL_VerzekerdeVerzending'
     */
    const VALUE_BENL_VERZEKERDE_VERZENDING = 'BENL_VerzekerdeVerzending';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiNONPRIOR'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoi NON PRIOR (2 jours ouvrables)
     * @return string 'BEFR_LaPosteEnvoiNONPRIOR'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_NONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiPRIOR'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoi PRIOR (1 jour ouvrable)
     * @return string 'BEFR_LaPosteEnvoiPRIOR'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_PRIOR = 'BEFR_LaPosteEnvoiPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiRecommande'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoi recommande (1 jour ouvrable)
     * @return string 'BEFR_LaPosteEnvoiRecommande'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_RECOMMANDE = 'BEFR_LaPosteEnvoiRecommande';
    /**
     * Constant for value 'BEFR_PaquetKilopost'
     * Meta information extracted from the WSDL
     * - documentation: Paquet Kilopost (2 jours ouvrables)
     * @return string 'BEFR_PaquetKilopost'
     */
    const VALUE_BEFR_PAQUET_KILOPOST = 'BEFR_PaquetKilopost';
    /**
     * Constant for value 'BEFR_Taxipost'
     * Meta information extracted from the WSDL
     * - documentation: Taxipost (express)
     * @return string 'BEFR_Taxipost'
     */
    const VALUE_BEFR_TAXIPOST = 'BEFR_Taxipost';
    /**
     * Constant for value 'BEFR_PointRetraitKiala'
     * Meta information extracted from the WSDL
     * - documentation: Point retrait Kiala (1 a 4 jours ouvrables)
     * @return string 'BEFR_PointRetraitKiala'
     */
    const VALUE_BEFR_POINT_RETRAIT_KIALA = 'BEFR_PointRetraitKiala';
    /**
     * Constant for value 'BEFR_LivraisonStandardPrixforFaitaire'
     * Meta information extracted from the WSDL
     * - documentation: Livraison standard - prix forfaitaire
     * @return string 'BEFR_LivraisonStandardPrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_STANDARD_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardPrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonExpressPrixforFaitaire'
     * Meta information extracted from the WSDL
     * - documentation: Livraison express - prix forfaitaire
     * @return string 'BEFR_LivraisonExpressPrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_EXPRESS_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressPrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonSecurise'
     * Meta information extracted from the WSDL
     * - documentation: Livraison securisee
     * @return string 'BEFR_LivraisonSecurise'
     */
    const VALUE_BEFR_LIVRAISON_SECURISE = 'BEFR_LivraisonSecurise';
    /**
     * Constant for value 'BENL_DePostZendingPRIORInternational'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - PRIOR
     * @return string 'BENL_DePostZendingPRIORInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_PRIORINTERNATIONAL = 'BENL_DePostZendingPRIORInternational';
    /**
     * Constant for value 'BENL_DePostZendingNONPRIORInternational'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - NON PRIOR
     * @return string 'BENL_DePostZendingNONPRIORInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_NONPRIORINTERNATIONAL = 'BENL_DePostZendingNONPRIORInternational';
    /**
     * Constant for value 'BENL_DePostZendingAangetekendInternational'
     * Meta information extracted from the WSDL
     * - documentation: De Post zending - aangetekend
     * @return string 'BENL_DePostZendingAangetekendInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_AANGETEKEND_INTERNATIONAL = 'BENL_DePostZendingAangetekendInternational';
    /**
     * Constant for value 'BENL_KilopostPakjeInternational'
     * Meta information extracted from the WSDL
     * - documentation: Kilopost pakje Internationaal
     * @return string 'BENL_KilopostPakjeInternational'
     */
    const VALUE_BENL_KILOPOST_PAKJE_INTERNATIONAL = 'BENL_KilopostPakjeInternational';
    /**
     * Constant for value 'BENL_TaxipostExpressverzending'
     * Meta information extracted from the WSDL
     * - documentation: Taxipost expressverzending
     * @return string 'BENL_TaxipostExpressverzending'
     */
    const VALUE_BENL_TAXIPOST_EXPRESSVERZENDING = 'BENL_TaxipostExpressverzending';
    /**
     * Constant for value 'BENL_VerzekerdeVerzendingInternational'
     * Meta information extracted from the WSDL
     * - documentation: Verzekerde verzending
     * @return string 'BENL_VerzekerdeVerzendingInternational'
     */
    const VALUE_BENL_VERZEKERDE_VERZENDING_INTERNATIONAL = 'BENL_VerzekerdeVerzendingInternational';
    /**
     * Constant for value 'BEFR_LaPosteenvoiePRIOR'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoie PRIOR
     * @return string 'BEFR_LaPosteenvoiePRIOR'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_PRIOR = 'BEFR_LaPosteenvoiePRIOR';
    /**
     * Constant for value 'BEFR_LaPosteenvoieNONPRIOR'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoie NON PRIOR
     * @return string 'BEFR_LaPosteenvoieNONPRIOR'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_NONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteenvoieRecommande'
     * Meta information extracted from the WSDL
     * - documentation: La Poste envoie recommande
     * @return string 'BEFR_LaPosteenvoieRecommande'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_RECOMMANDE = 'BEFR_LaPosteenvoieRecommande';
    /**
     * Constant for value 'BEFR_PaquetKilopostInternationale'
     * Meta information extracted from the WSDL
     * - documentation: Paquet Kilopost Internationale
     * @return string 'BEFR_PaquetKilopostInternationale'
     */
    const VALUE_BEFR_PAQUET_KILOPOST_INTERNATIONALE = 'BEFR_PaquetKilopostInternationale';
    /**
     * Constant for value 'BEFR_ExpressTaxipost'
     * Meta information extracted from the WSDL
     * - documentation: BEFR_Express Taxipost
     * @return string 'BEFR_ExpressTaxipost'
     */
    const VALUE_BEFR_EXPRESS_TAXIPOST = 'BEFR_ExpressTaxipost';
    /**
     * Constant for value 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
     * Meta information extracted from the WSDL
     * - documentation: Livraison standard internationale - prix forfaitaire
     * @return string 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_STANDARD_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
     * Meta information extracted from the WSDL
     * - documentation: Livraison express internationale - prix forfaitaire
     * @return string 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_EXPRESS_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonSecuriseInternational'
     * Meta information extracted from the WSDL
     * - documentation: Livraison securisee
     * @return string 'BEFR_LivraisonSecuriseInternational'
     */
    const VALUE_BEFR_LIVRAISON_SECURISE_INTERNATIONAL = 'BEFR_LivraisonSecuriseInternational';
    /**
     * Constant for value 'FR_Chronopost'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost
     * @return string 'FR_Chronopost'
     */
    const VALUE_FR_CHRONOPOST = 'FR_Chronopost';
    /**
     * Constant for value 'UK_RoyalMailSpecialDeliveryNextDay'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Special Delivery; 1:00 pm
     * @return string 'UK_RoyalMailSpecialDeliveryNextDay'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_NEXT_DAY = 'UK_RoyalMailSpecialDeliveryNextDay';
    /**
     * Constant for value 'CA_PostLightPacketInternational'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Light Packet International
     * @return string 'CA_PostLightPacketInternational'
     */
    const VALUE_CA_POST_LIGHT_PACKET_INTERNATIONAL = 'CA_PostLightPacketInternational';
    /**
     * Constant for value 'CA_PostLightPacketUSA'
     * Meta information extracted from the WSDL
     * - documentation: Canada Post Light Packet USA
     * @return string 'CA_PostLightPacketUSA'
     */
    const VALUE_CA_POST_LIGHT_PACKET_USA = 'CA_PostLightPacketUSA';
    /**
     * Constant for value 'PL_DHLInternational'
     * Meta information extracted from the WSDL
     * - documentation: DHL
     * @return string 'PL_DHLInternational'
     */
    const VALUE_PL_DHLINTERNATIONAL = 'PL_DHLInternational';
    /**
     * Constant for value 'PL_InternationalRegular'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka zagraniczna - zwykla
     * @return string 'PL_InternationalRegular'
     */
    const VALUE_PL_INTERNATIONAL_REGULAR = 'PL_InternationalRegular';
    /**
     * Constant for value 'PL_InternationalSpecial'
     * Meta information extracted from the WSDL
     * - documentation: Przesylka zagraniczna - priorytetowa
     * @return string 'PL_InternationalSpecial'
     */
    const VALUE_PL_INTERNATIONAL_SPECIAL = 'PL_InternationalSpecial';
    /**
     * Constant for value 'PL_UPSInternational'
     * Meta information extracted from the WSDL
     * - documentation: UPS
     * @return string 'PL_UPSInternational'
     */
    const VALUE_PL_UPSINTERNATIONAL = 'PL_UPSInternational';
    /**
     * Constant for value 'CAFR_StandardDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Normes de livraison postale
     * @return string 'CAFR_StandardDelivery'
     */
    const VALUE_CAFR_STANDARD_DELIVERY = 'CAFR_StandardDelivery';
    /**
     * Constant for value 'CAFR_ExpeditedDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Expedition acceleree
     * @return string 'CAFR_ExpeditedDelivery'
     */
    const VALUE_CAFR_EXPEDITED_DELIVERY = 'CAFR_ExpeditedDelivery';
    /**
     * Constant for value 'CAFR_PostLettermail'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Poste-lettres
     * @return string 'CAFR_PostLettermail'
     */
    const VALUE_CAFR_POST_LETTERMAIL = 'CAFR_PostLettermail';
    /**
     * Constant for value 'CAFR_PostRegularParcel'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Colis standard
     * @return string 'CAFR_PostRegularParcel'
     */
    const VALUE_CAFR_POST_REGULAR_PARCEL = 'CAFR_PostRegularParcel';
    /**
     * Constant for value 'CAFR_PostExpeditedParcel'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Colis acceleres
     * @return string 'CAFR_PostExpeditedParcel'
     */
    const VALUE_CAFR_POST_EXPEDITED_PARCEL = 'CAFR_PostExpeditedParcel';
    /**
     * Constant for value 'CAFR_PostXpresspost'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Xpresspost
     * @return string 'CAFR_PostXpresspost'
     */
    const VALUE_CAFR_POST_XPRESSPOST = 'CAFR_PostXpresspost';
    /**
     * Constant for value 'CAFR_PostPriorityCourier'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Messageries prioritaires
     * @return string 'CAFR_PostPriorityCourier'
     */
    const VALUE_CAFR_POST_PRIORITY_COURIER = 'CAFR_PostPriorityCourier';
    /**
     * Constant for value 'CAFR_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedition standard - International, tarif fixe
     * @return string 'CAFR_StandardInternational'
     */
    const VALUE_CAFR_STANDARD_INTERNATIONAL = 'CAFR_StandardInternational';
    /**
     * Constant for value 'CAFR_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expedition acceleree - International, tarif fixe
     * @return string 'CAFR_ExpeditedInternational'
     */
    const VALUE_CAFR_EXPEDITED_INTERNATIONAL = 'CAFR_ExpeditedInternational';
    /**
     * Constant for value 'CAFR_OtherInternational'
     * Meta information extracted from the WSDL
     * - documentation: Autres services d'expedition internationale (voir description)
     * @return string 'CAFR_OtherInternational'
     */
    const VALUE_CAFR_OTHER_INTERNATIONAL = 'CAFR_OtherInternational';
    /**
     * Constant for value 'CAFR_PostExpeditedParcelUSA'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Colis acceleres - E.U.
     * @return string 'CAFR_PostExpeditedParcelUSA'
     */
    const VALUE_CAFR_POST_EXPEDITED_PARCEL_USA = 'CAFR_PostExpeditedParcelUSA';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSA'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Petits paquets - E.U.
     * @return string 'CAFR_PostSmallPacketsUSA'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USA = 'CAFR_PostSmallPacketsUSA';
    /**
     * Constant for value 'CAFR_PostXpresspostUSA'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Xpresspost - E.U.
     * @return string 'CAFR_PostXpresspostUSA'
     */
    const VALUE_CAFR_POST_XPRESSPOST_USA = 'CAFR_PostXpresspostUSA';
    /**
     * Constant for value 'CAFR_PostXpresspostInternational'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Xpresspost - International
     * @return string 'CAFR_PostXpresspostInternational'
     */
    const VALUE_CAFR_POST_XPRESSPOST_INTERNATIONAL = 'CAFR_PostXpresspostInternational';
    /**
     * Constant for value 'CAFR_PostInternationalParcelSurface'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Colis international de surface
     * @return string 'CAFR_PostInternationalParcelSurface'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_PARCEL_SURFACE = 'CAFR_PostInternationalParcelSurface';
    /**
     * Constant for value 'CAFR_PostInternationalParcelAir'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Colis-avion - International
     * @return string 'CAFR_PostInternationalParcelAir'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_PARCEL_AIR = 'CAFR_PostInternationalParcelAir';
    /**
     * Constant for value 'CAFR_SmallPacketsInternational'
     * Meta information extracted from the WSDL
     * - documentation: Petits paquets - International
     * @return string 'CAFR_SmallPacketsInternational'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL = 'CAFR_SmallPacketsInternational';
    /**
     * Constant for value 'CAFR_PurolatorInternational'
     * Meta information extracted from the WSDL
     * - documentation: Purolator International
     * @return string 'CAFR_PurolatorInternational'
     */
    const VALUE_CAFR_PUROLATOR_INTERNATIONAL = 'CAFR_PurolatorInternational';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSAGround'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Petits paquets - E.U. service de surface
     * @return string 'CAFR_PostSmallPacketsUSAGround'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USAGROUND = 'CAFR_PostSmallPacketsUSAGround';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSAAir'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Petits paquets - E.U. par avion
     * @return string 'CAFR_PostSmallPacketsUSAAir'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USAAIR = 'CAFR_PostSmallPacketsUSAAir';
    /**
     * Constant for value 'CAFR_SmallPacketsInternationalGround'
     * Meta information extracted from the WSDL
     * - documentation: Petits paquets - International, courrier-surface
     * @return string 'CAFR_SmallPacketsInternationalGround'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_GROUND = 'CAFR_SmallPacketsInternationalGround';
    /**
     * Constant for value 'CAFR_SmallPacketsInternationalAir'
     * Meta information extracted from the WSDL
     * - documentation: Petits paquets - International, courrier-avion
     * @return string 'CAFR_SmallPacketsInternationalAir'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_AIR = 'CAFR_SmallPacketsInternationalAir';
    /**
     * Constant for value 'CAFR_PostUSALetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Poste aux lettres - E.U.
     * @return string 'CAFR_PostUSALetterPost'
     */
    const VALUE_CAFR_POST_USALETTER_POST = 'CAFR_PostUSALetterPost';
    /**
     * Constant for value 'CAFR_PostInternationalLetterPost'
     * Meta information extracted from the WSDL
     * - documentation: Postes Canada, Poste aux lettres - International
     * @return string 'CAFR_PostInternationalLetterPost'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_LETTER_POST = 'CAFR_PostInternationalLetterPost';
    /**
     * Constant for value 'CAFR_UPSExpressCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express Saver
     * @return string 'CAFR_UPSExpressCanada'
     */
    const VALUE_CAFR_UPSEXPRESS_CANADA = 'CAFR_UPSExpressCanada';
    /**
     * Constant for value 'CAFR_UPSExpressSaverCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express Saver Canada
     * @return string 'CAFR_UPSExpressSaverCanada'
     */
    const VALUE_CAFR_UPSEXPRESS_SAVER_CANADA = 'CAFR_UPSExpressSaverCanada';
    /**
     * Constant for value 'CAFR_UPSExpeditedCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Expedited Canada
     * @return string 'CAFR_UPSExpeditedCanada'
     */
    const VALUE_CAFR_UPSEXPEDITED_CANADA = 'CAFR_UPSExpeditedCanada';
    /**
     * Constant for value 'CAFR_UPSStandardCanada'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard au Canada
     * @return string 'CAFR_UPSStandardCanada'
     */
    const VALUE_CAFR_UPSSTANDARD_CANADA = 'CAFR_UPSStandardCanada';
    /**
     * Constant for value 'CAFR_UPSExpressUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Express Etats-Unis
     * @return string 'CAFR_UPSExpressUnitedStates'
     */
    const VALUE_CAFR_UPSEXPRESS_UNITED_STATES = 'CAFR_UPSExpressUnitedStates';
    /**
     * Constant for value 'CAFR_UPSExpeditedUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Expedited Etats-Unis
     * @return string 'CAFR_UPSExpeditedUnitedStates'
     */
    const VALUE_CAFR_UPSEXPEDITED_UNITED_STATES = 'CAFR_UPSExpeditedUnitedStates';
    /**
     * Constant for value 'CAFR_UPS3DaySelectUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: 3Day Select aux Etats-Unis
     * @return string 'CAFR_UPS3DaySelectUnitedStates'
     */
    const VALUE_CAFR_UPS_3_DAY_SELECT_UNITED_STATES = 'CAFR_UPS3DaySelectUnitedStates';
    /**
     * Constant for value 'CAFR_UPSStandardUnitedStates'
     * Meta information extracted from the WSDL
     * - documentation: UPS Standard aux Etats-Unis
     * @return string 'CAFR_UPSStandardUnitedStates'
     */
    const VALUE_CAFR_UPSSTANDARD_UNITED_STATES = 'CAFR_UPSStandardUnitedStates';
    /**
     * Constant for value 'CAFR_UPSWorldWideExpress'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worlwide Express
     * @return string 'CAFR_UPSWorldWideExpress'
     */
    const VALUE_CAFR_UPSWORLD_WIDE_EXPRESS = 'CAFR_UPSWorldWideExpress';
    /**
     * Constant for value 'CAFR_UPSWorldWideExpedited'
     * Meta information extracted from the WSDL
     * - documentation: UPS Worlwide Expedited
     * @return string 'CAFR_UPSWorldWideExpedited'
     */
    const VALUE_CAFR_UPSWORLD_WIDE_EXPEDITED = 'CAFR_UPSWorldWideExpedited';
    /**
     * Constant for value 'UK_RoyalMailSpecialDelivery9am'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Special Delivery 9:00 am
     * @return string 'UK_RoyalMailSpecialDelivery9am'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_9_AM = 'UK_RoyalMailSpecialDelivery9am';
    /**
     * Constant for value 'USPSFirstClassMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: USPS First Class Mail Intl / First Class Package Intl Service
     * @return string 'USPSFirstClassMailInternational'
     */
    const VALUE_USPSFIRST_CLASS_MAIL_INTERNATIONAL = 'USPSFirstClassMailInternational';
    /**
     * Constant for value 'USPSPriorityMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International
     * @return string 'USPSPriorityMailInternational'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL = 'USPSPriorityMailInternational';
    /**
     * Constant for value 'USPSExpressMailInternational'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail Express International
     * @return string 'USPSExpressMailInternational'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL = 'USPSExpressMailInternational';
    /**
     * Constant for value 'CH_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standardpauschale fur internationalen Versand
     * @return string 'CH_StandardInternational'
     */
    const VALUE_CH_STANDARD_INTERNATIONAL = 'CH_StandardInternational';
    /**
     * Constant for value 'CH_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expresspauschale fur internationalen Versand
     * @return string 'CH_ExpeditedInternational'
     */
    const VALUE_CH_EXPEDITED_INTERNATIONAL = 'CH_ExpeditedInternational';
    /**
     * Constant for value 'CH_SonstigerVersandSieheArtikelbeschreibung'
     * Meta information extracted from the WSDL
     * - documentation: Sonstiger Versand (Siehe Artikelbeschreibung)
     * @return string 'CH_SonstigerVersandSieheArtikelbeschreibung'
     */
    const VALUE_CH_SONSTIGER_VERSAND_SIEHE_ARTIKELBESCHREIBUNG = 'CH_SonstigerVersandSieheArtikelbeschreibung';
    /**
     * Constant for value 'TW_StandardInternationalFixedRate'
     * Meta information extracted from the WSDL
     * - documentation: International Standard Fixed Rate for Taiwan
     * @return string 'TW_StandardInternationalFixedRate'
     */
    const VALUE_TW_STANDARD_INTERNATIONAL_FIXED_RATE = 'TW_StandardInternationalFixedRate';
    /**
     * Constant for value 'TW_ExpeditedInternationalFixedRate'
     * Meta information extracted from the WSDL
     * - documentation: International Express Fixed Rate for Taiwan
     * @return string 'TW_ExpeditedInternationalFixedRate'
     */
    const VALUE_TW_EXPEDITED_INTERNATIONAL_FIXED_RATE = 'TW_ExpeditedInternationalFixedRate';
    /**
     * Constant for value 'USPSGlobalExpressGuaranteed'
     * Meta information extracted from the WSDL
     * - documentation: USPS Global Express Guaranteed
     * @return string 'USPSGlobalExpressGuaranteed'
     */
    const VALUE_USPSGLOBAL_EXPRESS_GUARANTEED = 'USPSGlobalExpressGuaranteed';
    /**
     * Constant for value 'AU_RegularWithInsurance'
     * Meta information extracted from the WSDL
     * - documentation: Regular with Insurance
     * @return string 'AU_RegularWithInsurance'
     */
    const VALUE_AU_REGULAR_WITH_INSURANCE = 'AU_RegularWithInsurance';
    /**
     * Constant for value 'AU_ExpressWithInsurance'
     * Meta information extracted from the WSDL
     * - documentation: Express with Insurance
     * @return string 'AU_ExpressWithInsurance'
     */
    const VALUE_AU_EXPRESS_WITH_INSURANCE = 'AU_ExpressWithInsurance';
    /**
     * Constant for value 'DE_DeutschePostWarensendungInternational'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Warensendung
     * @return string 'DE_DeutschePostWarensendungInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_WARENSENDUNG_INTERNATIONAL = 'DE_DeutschePostWarensendungInternational';
    /**
     * Constant for value 'DE_DeutschePostByendung'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Byendung
     * @return string 'DE_DeutschePostByendung'
     */
    const VALUE_DE_DEUTSCHE_POST_BYENDUNG = 'DE_DeutschePostByendung';
    /**
     * Constant for value 'DE_HermesPaketUnversichertInternational'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket (unversichert)
     * @return string 'DE_HermesPaketUnversichertInternational'
     */
    const VALUE_DE_HERMES_PAKET_UNVERSICHERT_INTERNATIONAL = 'DE_HermesPaketUnversichertInternational';
    /**
     * Constant for value 'DE_HermesPaketVersichertInternational'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Paket (versichert)
     * @return string 'DE_HermesPaketVersichertInternational'
     */
    const VALUE_DE_HERMES_PAKET_VERSICHERT_INTERNATIONAL = 'DE_HermesPaketVersichertInternational';
    /**
     * Constant for value 'DE_iLoxxTransportXXLInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Transport XXL
     * @return string 'DE_iLoxxTransportXXLInternational'
     */
    const VALUE_DE_I_LOXX_TRANSPORT_XXLINTERNATIONAL = 'DE_iLoxxTransportXXLInternational';
    /**
     * Constant for value 'DE_iLoxxUbernachtExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Ubernacht Express
     * @return string 'DE_iLoxxUbernachtExpressInternational'
     */
    const VALUE_DE_I_LOXX_UBERNACHT_EXPRESS_INTERNATIONAL = 'DE_iLoxxUbernachtExpressInternational';
    /**
     * Constant for value 'DE_iLoxxStandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: iloxx Standard
     * @return string 'DE_iLoxxStandardInternational'
     */
    const VALUE_DE_I_LOXX_STANDARD_INTERNATIONAL = 'DE_iLoxxStandardInternational';
    /**
     * Constant for value 'DE_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standardpauschale fur internationalen Versand
     * @return string 'DE_StandardInternational'
     */
    const VALUE_DE_STANDARD_INTERNATIONAL = 'DE_StandardInternational';
    /**
     * Constant for value 'DE_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expresspauschale fur internationalen Versand
     * @return string 'DE_ExpeditedInternational'
     */
    const VALUE_DE_EXPEDITED_INTERNATIONAL = 'DE_ExpeditedInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefIntlEcon'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Presse & Bucher Economy
     * @return string 'DE_DeutschePostBriefIntlEcon'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_ECON = 'DE_DeutschePostBriefIntlEcon';
    /**
     * Constant for value 'DE_DeutschePostBriefIntlPri'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Presse & Bucher Priority
     * @return string 'DE_DeutschePostBriefIntlPri'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_PRI = 'DE_DeutschePostBriefIntlPri';
    /**
     * Constant for value 'AT_BitteTreffenSieEineAuswahl'
     * Meta information extracted from the WSDL
     * - documentation: AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @return string 'AT_BitteTreffenSieEineAuswahl'
     */
    const VALUE_AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'AT_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'AT_EinschreibenVersandInklEinschreibengebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'AT_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_AT_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'AT_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'AT_NachnahmeVersandInklNachnahmegebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'AT_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_AT_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'AT_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'AT_ExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'AT_ExpressOrCourierInternational'
     */
    const VALUE_AT_EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_ExpressOrCourierInternational';
    /**
     * Constant for value 'AT_InsuredExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'AT_InsuredExpressOrCourierInternational'
     */
    const VALUE_AT_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'AT_SpecialDispatchInternational'
     * Meta information extracted from the WSDL
     * - documentation: Sonderversand (z.B. Sperrgut, KFZ)
     * @return string 'AT_SpecialDispatchInternational'
     */
    const VALUE_AT_SPECIAL_DISPATCH_INTERNATIONAL = 'AT_SpecialDispatchInternational';
    /**
     * Constant for value 'AT_InsuredSpecialDispatchInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     * @return string 'AT_InsuredSpecialDispatchInternational'
     */
    const VALUE_AT_INSURED_SPECIAL_DISPATCH_INTERNATIONAL = 'AT_InsuredSpecialDispatchInternational';
    /**
     * Constant for value 'AT_StandardInternational'
     * Meta information extracted from the WSDL
     * - documentation: Standardpauschale fur internationalen Versand
     * @return string 'AT_StandardInternational'
     */
    const VALUE_AT_STANDARD_INTERNATIONAL = 'AT_StandardInternational';
    /**
     * Constant for value 'AT_ExpeditedInternational'
     * Meta information extracted from the WSDL
     * - documentation: Expresspauschale fur internationalen Versand
     * @return string 'AT_ExpeditedInternational'
     */
    const VALUE_AT_EXPEDITED_INTERNATIONAL = 'AT_ExpeditedInternational';
    /**
     * Constant for value 'AT_OtherInternationalShipping'
     * Meta information extracted from the WSDL
     * - documentation: Sonstiger Versand (Siehe Artikelbeschreibung)
     * @return string 'AT_OtherInternationalShipping'
     */
    const VALUE_AT_OTHER_INTERNATIONAL_SHIPPING = 'AT_OtherInternationalShipping';
    /**
     * Constant for value 'CH_BitteTreffenSieEineAuswahl'
     * Meta information extracted from the WSDL
     * - documentation: CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @return string 'CH_BitteTreffenSieEineAuswahl'
     */
    const VALUE_CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'CH_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'CH_UnversicherterVersand'
     * Meta information extracted from the WSDL
     * - documentation: Unversicherter Versand
     * @return string 'CH_UnversicherterVersand'
     */
    const VALUE_CH_UNVERSICHERTER_VERSAND = 'CH_UnversicherterVersand';
    /**
     * Constant for value 'CH_VersicherterVersand'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Versand
     * @return string 'CH_VersicherterVersand'
     */
    const VALUE_CH_VERSICHERTER_VERSAND = 'CH_VersicherterVersand';
    /**
     * Constant for value 'CH_EinschreibenVersandInklEinschreibengebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'CH_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_CH_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'CH_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'CH_NachnahmeVersandInklNachnahmegebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'CH_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_CH_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'CH_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'CH_ExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'CH_ExpressOrCourierInternational'
     */
    const VALUE_CH_EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_ExpressOrCourierInternational';
    /**
     * Constant for value 'CH_InsuredExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'CH_InsuredExpressOrCourierInternational'
     */
    const VALUE_CH_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'CH_SonderversandZBSperrgutKFZ'
     * Meta information extracted from the WSDL
     * - documentation: Sonderversand (z.B. Sperrgut, KFZ)
     * @return string 'CH_SonderversandZBSperrgutKFZ'
     */
    const VALUE_CH_SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_SonderversandZBSperrgutKFZ';
    /**
     * Constant for value 'CH_VersicherterSonderversandZBSperrgutKFZ'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     * @return string 'CH_VersicherterSonderversandZBSperrgutKFZ'
     */
    const VALUE_CH_VERSICHERTER_SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_VersicherterSonderversandZBSperrgutKFZ';
    /**
     * Constant for value 'CH_StandardversandAPostPriority'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand (A-Post/Priority)
     * @return string 'CH_StandardversandAPostPriority'
     */
    const VALUE_CH_STANDARDVERSAND_APOST_PRIORITY = 'CH_StandardversandAPostPriority';
    /**
     * Constant for value 'CH_StandardversandBPostEconomy'
     * Meta information extracted from the WSDL
     * - documentation: Standardversand (B-Post/Economy)
     * @return string 'CH_StandardversandBPostEconomy'
     */
    const VALUE_CH_STANDARDVERSAND_BPOST_ECONOMY = 'CH_StandardversandBPostEconomy';
    /**
     * Constant for value 'DE_BitteTreffenSieEineAuswahl'
     * Meta information extracted from the WSDL
     * - documentation: DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @return string 'DE_BitteTreffenSieEineAuswahl'
     */
    const VALUE_DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'DE_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'DE_EinschreibenVersandInklEinschreibengebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Einschreiben (Versand inkl. Einschreibengebuhr)
     * @return string 'DE_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_DE_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'DE_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'DE_NachnahmeVersandInklNachnahmegebuhr'
     * Meta information extracted from the WSDL
     * - documentation: Nachnahme (Versand inkl. Nachnahmegebuhr)
     * @return string 'DE_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_DE_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'DE_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'DE_ExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Express- oder Kurierversand
     * @return string 'DE_ExpressOrCourierInternational'
     */
    const VALUE_DE_EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_ExpressOrCourierInternational';
    /**
     * Constant for value 'DE_InsuredExpressOrCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Express- oder Kurierversand
     * @return string 'DE_InsuredExpressOrCourierInternational'
     */
    const VALUE_DE_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'DE_SonderversandZBMobelKFZ'
     * Meta information extracted from the WSDL
     * - documentation: Sonderversand (z.B. Mobel, KFZ)
     * @return string 'DE_SonderversandZBMobelKFZ'
     */
    const VALUE_DE_SONDERVERSAND_ZBMOBEL_KFZ = 'DE_SonderversandZBMobelKFZ';
    /**
     * Constant for value 'DE_VersicherterSonderversandZBMobelKFZ'
     * Meta information extracted from the WSDL
     * - documentation: Versicherter Sonderversand (z.B. Mobel, KFZ)
     * @return string 'DE_VersicherterSonderversandZBMobelKFZ'
     */
    const VALUE_DE_VERSICHERTER_SONDERVERSAND_ZBMOBEL_KFZ = 'DE_VersicherterSonderversandZBMobelKFZ';
    /**
     * Constant for value 'DE_DeutschePostBriefInternational'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post Brief
     * @return string 'DE_DeutschePostBriefInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTERNATIONAL = 'DE_DeutschePostBriefInternational';
    /**
     * Constant for value 'IE_StandardInternationalFlatRatePostage'
     * Meta information extracted from the WSDL
     * - documentation: Standard Int'l Flat Rate Postage
     * @return string 'IE_StandardInternationalFlatRatePostage'
     */
    const VALUE_IE_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_StandardInternationalFlatRatePostage';
    /**
     * Constant for value 'IE_ExpeditedInternationalFlatRatePostage'
     * Meta information extracted from the WSDL
     * - documentation: Expedited Int'l Flat Rate Postage
     * @return string 'IE_ExpeditedInternationalFlatRatePostage'
     */
    const VALUE_IE_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_ExpeditedInternationalFlatRatePostage';
    /**
     * Constant for value 'IE_OtherInternationalPostage'
     * Meta information extracted from the WSDL
     * - documentation: Other Int'l Postage (see description)
     * @return string 'IE_OtherInternationalPostage'
     */
    const VALUE_IE_OTHER_INTERNATIONAL_POSTAGE = 'IE_OtherInternationalPostage';
    /**
     * Constant for value 'UK_StandardInternationalFlatRatePostage'
     * Meta information extracted from the WSDL
     * - documentation: Standard Int'l Flat Rate Postage
     * @return string 'UK_StandardInternationalFlatRatePostage'
     */
    const VALUE_UK_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_StandardInternationalFlatRatePostage';
    /**
     * Constant for value 'UK_ExpeditedInternationalFlatRatePostage'
     * Meta information extracted from the WSDL
     * - documentation: Expedited Int'l Flat Rate Postage
     * @return string 'UK_ExpeditedInternationalFlatRatePostage'
     */
    const VALUE_UK_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_ExpeditedInternationalFlatRatePostage';
    /**
     * Constant for value 'UK_OtherInternationalPostage'
     * Meta information extracted from the WSDL
     * - documentation: Other Int'l Postage (see description)
     * @return string 'UK_OtherInternationalPostage'
     */
    const VALUE_UK_OTHER_INTERNATIONAL_POSTAGE = 'UK_OtherInternationalPostage';
    /**
     * Constant for value 'FR_ChronopostChronoRelais'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost - Chrono Relais
     * @return string 'FR_ChronopostChronoRelais'
     */
    const VALUE_FR_CHRONOPOST_CHRONO_RELAIS = 'FR_ChronopostChronoRelais';
    /**
     * Constant for value 'FR_Chrono10'
     * Meta information extracted from the WSDL
     * - documentation: Chrono 10
     * @return string 'FR_Chrono10'
     */
    const VALUE_FR_CHRONO_10 = 'FR_Chrono10';
    /**
     * Constant for value 'FR_Chrono13'
     * Meta information extracted from the WSDL
     * - documentation: Chrono 13
     * @return string 'FR_Chrono13'
     */
    const VALUE_FR_CHRONO_13 = 'FR_Chrono13';
    /**
     * Constant for value 'FR_Chrono18'
     * Meta information extracted from the WSDL
     * - documentation: Chrono 18
     * @return string 'FR_Chrono18'
     */
    const VALUE_FR_CHRONO_18 = 'FR_Chrono18';
    /**
     * Constant for value 'FR_ChronopostExpressInternational'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost Express International
     * @return string 'FR_ChronopostExpressInternational'
     */
    const VALUE_FR_CHRONOPOST_EXPRESS_INTERNATIONAL = 'FR_ChronopostExpressInternational';
    /**
     * Constant for value 'Pickup'
     * Meta information extracted from the WSDL
     * - documentation: PickUp Only Service
     * @return string 'Pickup'
     */
    const VALUE_PICKUP = 'Pickup';
    /**
     * Constant for value 'Delivery'
     * Meta information extracted from the WSDL
     * - documentation: Delivery
     * @return string 'Delivery'
     */
    const VALUE_DELIVERY = 'Delivery';
    /**
     * Constant for value 'CA_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup Only Service
     * @return string 'CA_Pickup'
     */
    const VALUE_CA_PICKUP = 'CA_Pickup';
    /**
     * Constant for value 'DE_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Abholung
     * @return string 'DE_Pickup'
     */
    const VALUE_DE_PICKUP = 'DE_Pickup';
    /**
     * Constant for value 'AU_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'AU_Pickup'
     */
    const VALUE_AU_PICKUP = 'AU_Pickup';
    /**
     * Constant for value 'AU_SmallParcels'
     * Meta information extracted from the WSDL
     * - documentation: Small Parcels
     * @return string 'AU_SmallParcels'
     */
    const VALUE_AU_SMALL_PARCELS = 'AU_SmallParcels';
    /**
     * Constant for value 'AU_SmallParcelWithTracking'
     * Meta information extracted from the WSDL
     * - documentation: Small Parcel With Tracking
     * @return string 'AU_SmallParcelWithTracking'
     */
    const VALUE_AU_SMALL_PARCEL_WITH_TRACKING = 'AU_SmallParcelWithTracking';
    /**
     * Constant for value 'AU_SmallParcelWithTrackingAndSignature'
     * Meta information extracted from the WSDL
     * - documentation: Small Parcel With Tracking And Signature
     * @return string 'AU_SmallParcelWithTrackingAndSignature'
     */
    const VALUE_AU_SMALL_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_SmallParcelWithTrackingAndSignature';
    /**
     * Constant for value 'AU_RegularParcelWithTracking'
     * Meta information extracted from the WSDL
     * - documentation: Regular Parcel With Tracking
     * @return string 'AU_RegularParcelWithTracking'
     */
    const VALUE_AU_REGULAR_PARCEL_WITH_TRACKING = 'AU_RegularParcelWithTracking';
    /**
     * Constant for value 'AU_RegularParcelWithTrackingAndSignature'
     * Meta information extracted from the WSDL
     * - documentation: Regular Parcel With Tracking And Signature
     * @return string 'AU_RegularParcelWithTrackingAndSignature'
     */
    const VALUE_AU_REGULAR_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_RegularParcelWithTrackingAndSignature';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel5kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post Satchel 5kg
     * @return string 'AU_PrePaidExpressPostSatchel5kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_5_KG = 'AU_PrePaidExpressPostSatchel5kg';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels500g'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Parcel Post Satchels 500g
     * @return string 'AU_PrePaidParcelPostSatchels500g'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_500_G = 'AU_PrePaidParcelPostSatchels500g';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels3kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Parcel Post Satchels 3kg
     * @return string 'AU_PrePaidParcelPostSatchels3kg'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_3_KG = 'AU_PrePaidParcelPostSatchels3kg';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels5kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Parcel Post Satchels 5kg
     * @return string 'AU_PrePaidParcelPostSatchels5kg'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_5_KG = 'AU_PrePaidParcelPostSatchels5kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel500g'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post Satchel 500g
     * @return string 'AU_PrePaidExpressPostSatchel500g'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_500_G = 'AU_PrePaidExpressPostSatchel500g';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel3kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post Satchel 3kg
     * @return string 'AU_PrePaidExpressPostSatchel3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_3_KG = 'AU_PrePaidExpressPostSatchel3kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostPlatinum500g'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post Platinum 500g
     * @return string 'AU_PrePaidExpressPostPlatinum500g'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_500_G = 'AU_PrePaidExpressPostPlatinum500g';
    /**
     * Constant for value 'AU_PrePaidExpressPostPlatinum3kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post Platinum 3kg
     * @return string 'AU_PrePaidExpressPostPlatinum3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_3_KG = 'AU_PrePaidExpressPostPlatinum3kg';
    /**
     * Constant for value 'AU_ExpressCourierInternational'
     * Meta information extracted from the WSDL
     * - documentation: Express Courier International
     * @return string 'AU_ExpressCourierInternational'
     */
    const VALUE_AU_EXPRESS_COURIER_INTERNATIONAL = 'AU_ExpressCourierInternational';
    /**
     * Constant for value 'AU_ExpressPostInternational'
     * Meta information extracted from the WSDL
     * - documentation: Express Post International
     * @return string 'AU_ExpressPostInternational'
     */
    const VALUE_AU_EXPRESS_POST_INTERNATIONAL = 'AU_ExpressPostInternational';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeC5'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Envelope C5
     * @return string 'AU_PrePaidExpressPostInternationalEnvelopeC5'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_C_5 = 'AU_PrePaidExpressPostInternationalEnvelopeC5';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeB4'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Envelope B4
     * @return string 'AU_PrePaidExpressPostInternationalEnvelopeB4'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_B_4 = 'AU_PrePaidExpressPostInternationalEnvelopeB4';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalSatchels2kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Satchels 2kg
     * @return string 'AU_PrePaidExpressPostInternationalSatchels2kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_2_KG = 'AU_PrePaidExpressPostInternationalSatchels2kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalSatchels3kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Satchels 3kg
     * @return string 'AU_PrePaidExpressPostInternationalSatchels3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_3_KG = 'AU_PrePaidExpressPostInternationalSatchels3kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox5kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Box 5kg
     * @return string 'AU_PrePaidExpressPostInternationalBox5kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_5_KG = 'AU_PrePaidExpressPostInternationalBox5kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox10kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Box 10kg
     * @return string 'AU_PrePaidExpressPostInternationalBox10kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_10_KG = 'AU_PrePaidExpressPostInternationalBox10kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox20kg'
     * Meta information extracted from the WSDL
     * - documentation: PrePaid Express Post International Box 20kg
     * @return string 'AU_PrePaidExpressPostInternationalBox20kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_20_KG = 'AU_PrePaidExpressPostInternationalBox20kg';
    /**
     * Constant for value 'AU_RegisteredParcelPost'
     * Meta information extracted from the WSDL
     * - documentation: Registered Parcel Post
     * @return string 'AU_RegisteredParcelPost'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST = 'AU_RegisteredParcelPost';
    /**
     * Constant for value 'AU_RegisteredSmallParcel'
     * Meta information extracted from the WSDL
     * - documentation: Registered Small Parcel
     * @return string 'AU_RegisteredSmallParcel'
     */
    const VALUE_AU_REGISTERED_SMALL_PARCEL = 'AU_RegisteredSmallParcel';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel500g'
     * Meta information extracted from the WSDL
     * - documentation: Registered Parcel Post Prepaid Satchel 500g
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel500g'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_500_G = 'AU_RegisteredParcelPostPrepaidSatchel500g';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel3kg'
     * Meta information extracted from the WSDL
     * - documentation: Registered Parcel Post Prepaid Satchel 3kg
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel3kg'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_3_KG = 'AU_RegisteredParcelPostPrepaidSatchel3kg';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel5kg'
     * Meta information extracted from the WSDL
     * - documentation: Registered Parcel Post Prepaid Satchel 5kg
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel5kg'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_5_KG = 'AU_RegisteredParcelPostPrepaidSatchel5kg';
    /**
     * Constant for value 'AU_ExpressPostSatchel500g'
     * Meta information extracted from the WSDL
     * - documentation: eBay Australia Post Express Post 500g Satchel
     * @return string 'AU_ExpressPostSatchel500g'
     */
    const VALUE_AU_EXPRESS_POST_SATCHEL_500_G = 'AU_ExpressPostSatchel500g';
    /**
     * Constant for value 'AU_ExpressPostSatchel3kg'
     * Meta information extracted from the WSDL
     * - documentation: eBay Australia Post Express Post 3kg Satchel
     * @return string 'AU_ExpressPostSatchel3kg'
     */
    const VALUE_AU_EXPRESS_POST_SATCHEL_3_KG = 'AU_ExpressPostSatchel3kg';
    /**
     * Constant for value 'FR_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Enlevement
     * @return string 'FR_Pickup'
     */
    const VALUE_FR_PICKUP = 'FR_Pickup';
    /**
     * Constant for value 'AT_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'AT_Pickup'
     */
    const VALUE_AT_PICKUP = 'AT_Pickup';
    /**
     * Constant for value 'BENL_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Afhalen
     * @return string 'BENL_Pickup'
     */
    const VALUE_BENL_PICKUP = 'BENL_Pickup';
    /**
     * Constant for value 'BEFR_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'BEFR_Pickup'
     */
    const VALUE_BEFR_PICKUP = 'BEFR_Pickup';
    /**
     * Constant for value 'CH_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'CH_Pickup'
     */
    const VALUE_CH_PICKUP = 'CH_Pickup';
    /**
     * Constant for value 'IT_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'IT_Pickup'
     */
    const VALUE_IT_PICKUP = 'IT_Pickup';
    /**
     * Constant for value 'NL_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'NL_Pickup'
     */
    const VALUE_NL_PICKUP = 'NL_Pickup';
    /**
     * Constant for value 'PL_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'PL_Pickup'
     */
    const VALUE_PL_PICKUP = 'PL_Pickup';
    /**
     * Constant for value 'ES_Pickup'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'ES_Pickup'
     */
    const VALUE_ES_PICKUP = 'ES_Pickup';
    /**
     * Constant for value 'SG_Delivery'
     * Meta information extracted from the WSDL
     * - documentation: Pickup
     * @return string 'SG_Delivery'
     */
    const VALUE_SG_DELIVERY = 'SG_Delivery';
    /**
     * Constant for value 'UK_OtherCourier24'
     * Meta information extracted from the WSDL
     * - documentation: Other 24 Hour Courier
     * @return string 'UK_OtherCourier24'
     */
    const VALUE_UK_OTHER_COURIER_24 = 'UK_OtherCourier24';
    /**
     * Constant for value 'UK_OtherCourier48'
     * Meta information extracted from the WSDL
     * - documentation: Other 48 Hour Courier
     * @return string 'UK_OtherCourier48'
     */
    const VALUE_UK_OTHER_COURIER_48 = 'UK_OtherCourier48';
    /**
     * Constant for value 'UK_OtherCourier3Days'
     * Meta information extracted from the WSDL
     * - documentation: Other Courier 3 days
     * @return string 'UK_OtherCourier3Days'
     */
    const VALUE_UK_OTHER_COURIER_3_DAYS = 'UK_OtherCourier3Days';
    /**
     * Constant for value 'UK_OtherCourier5Days'
     * Meta information extracted from the WSDL
     * - documentation: Other Courier 5 days
     * @return string 'UK_OtherCourier5Days'
     */
    const VALUE_UK_OTHER_COURIER_5_DAYS = 'UK_OtherCourier5Days';
    /**
     * Constant for value 'Courier'
     * Meta information extracted from the WSDL
     * - documentation: Courier Shipping
     * @return string 'Courier'
     */
    const VALUE_COURIER = 'Courier';
    /**
     * Constant for value 'FedExPriorityOvernight'
     * Meta information extracted from the WSDL
     * - documentation: FedEx Priority Overnight
     * @return string 'FedExPriorityOvernight'
     */
    const VALUE_FED_EX_PRIORITY_OVERNIGHT = 'FedExPriorityOvernight';
    /**
     * Constant for value 'FedExStandardOvernight'
     * Meta information extracted from the WSDL
     * - documentation: FedEx Standard Overnight
     * @return string 'FedExStandardOvernight'
     */
    const VALUE_FED_EX_STANDARD_OVERNIGHT = 'FedExStandardOvernight';
    /**
     * Constant for value 'FedEx2Day'
     * Meta information extracted from the WSDL
     * - documentation: FedEx 2Day
     * @return string 'FedEx2Day'
     */
    const VALUE_FED_EX_2_DAY = 'FedEx2Day';
    /**
     * Constant for value 'FedExGround'
     * Meta information extracted from the WSDL
     * - documentation: FedEx Ground
     * @return string 'FedExGround'
     */
    const VALUE_FED_EX_GROUND = 'FedExGround';
    /**
     * Constant for value 'FedExHomeDelivery'
     * Meta information extracted from the WSDL
     * - documentation: FedEx Home Delivery
     * @return string 'FedExHomeDelivery'
     */
    const VALUE_FED_EX_HOME_DELIVERY = 'FedExHomeDelivery';
    /**
     * Constant for value 'FedExExpressSaver'
     * Meta information extracted from the WSDL
     * - documentation: FedEx Express Saver
     * @return string 'FedExExpressSaver'
     */
    const VALUE_FED_EX_EXPRESS_SAVER = 'FedExExpressSaver';
    /**
     * Constant for value 'FedExGroundDisabled'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'FedExGroundDisabled'
     */
    const VALUE_FED_EX_GROUND_DISABLED = 'FedExGroundDisabled';
    /**
     * Constant for value 'FedExHomeDeliveryDisabled'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'FedExHomeDeliveryDisabled'
     */
    const VALUE_FED_EX_HOME_DELIVERY_DISABLED = 'FedExHomeDeliveryDisabled';
    /**
     * Constant for value 'FedExInternationalFirst'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International First
     * @return string 'FedExInternationalFirst'
     */
    const VALUE_FED_EX_INTERNATIONAL_FIRST = 'FedExInternationalFirst';
    /**
     * Constant for value 'FedExInternationalPriority'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International Priority
     * @return string 'FedExInternationalPriority'
     */
    const VALUE_FED_EX_INTERNATIONAL_PRIORITY = 'FedExInternationalPriority';
    /**
     * Constant for value 'FedExInternationalEconomy'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International Economy
     * @return string 'FedExInternationalEconomy'
     */
    const VALUE_FED_EX_INTERNATIONAL_ECONOMY = 'FedExInternationalEconomy';
    /**
     * Constant for value 'FedExInternationalGround'
     * Meta information extracted from the WSDL
     * - documentation: FedEx International Ground
     * @return string 'FedExInternationalGround'
     */
    const VALUE_FED_EX_INTERNATIONAL_GROUND = 'FedExInternationalGround';
    /**
     * Constant for value 'EconomyShippingFromOutsideUS'
     * Meta information extracted from the WSDL
     * - documentation: Economy shipping from outside US
     * @return string 'EconomyShippingFromOutsideUS'
     */
    const VALUE_ECONOMY_SHIPPING_FROM_OUTSIDE_US = 'EconomyShippingFromOutsideUS';
    /**
     * Constant for value 'ExpeditedShippingFromOutsideUS'
     * Meta information extracted from the WSDL
     * - documentation: Expedited shipping from outside US
     * @return string 'ExpeditedShippingFromOutsideUS'
     */
    const VALUE_EXPEDITED_SHIPPING_FROM_OUTSIDE_US = 'ExpeditedShippingFromOutsideUS';
    /**
     * Constant for value 'StandardShippingFromOutsideUS'
     * Meta information extracted from the WSDL
     * - documentation: Standard shipping from outside US
     * @return string 'StandardShippingFromOutsideUS'
     */
    const VALUE_STANDARD_SHIPPING_FROM_OUTSIDE_US = 'StandardShippingFromOutsideUS';
    /**
     * Constant for value 'UK_EconomyShippingFromOutside'
     * Meta information extracted from the WSDL
     * - documentation: Economy postage from outside UK
     * @return string 'UK_EconomyShippingFromOutside'
     */
    const VALUE_UK_ECONOMY_SHIPPING_FROM_OUTSIDE = 'UK_EconomyShippingFromOutside';
    /**
     * Constant for value 'UK_ExpeditedShippingFromOutside'
     * Meta information extracted from the WSDL
     * - documentation: Express postage from outside UK
     * @return string 'UK_ExpeditedShippingFromOutside'
     */
    const VALUE_UK_EXPEDITED_SHIPPING_FROM_OUTSIDE = 'UK_ExpeditedShippingFromOutside';
    /**
     * Constant for value 'UK_StandardShippingFromOutside'
     * Meta information extracted from the WSDL
     * - documentation: Standard postage from outside UK
     * @return string 'UK_StandardShippingFromOutside'
     */
    const VALUE_UK_STANDARD_SHIPPING_FROM_OUTSIDE = 'UK_StandardShippingFromOutside';
    /**
     * Constant for value 'DE_SparversandAusDemAusland'
     * Meta information extracted from the WSDL
     * - documentation: Economy postage from outside DE
     * @return string 'DE_SparversandAusDemAusland'
     */
    const VALUE_DE_SPARVERSAND_AUS_DEM_AUSLAND = 'DE_SparversandAusDemAusland';
    /**
     * Constant for value 'DE_StandardversandAusDemAusland'
     * Meta information extracted from the WSDL
     * - documentation: Standard postage from outside DE
     * @return string 'DE_StandardversandAusDemAusland'
     */
    const VALUE_DE_STANDARDVERSAND_AUS_DEM_AUSLAND = 'DE_StandardversandAusDemAusland';
    /**
     * Constant for value 'DE_ExpressversandAusDemAusland'
     * Meta information extracted from the WSDL
     * - documentation: Express postage from outside DE
     * @return string 'DE_ExpressversandAusDemAusland'
     */
    const VALUE_DE_EXPRESSVERSAND_AUS_DEM_AUSLAND = 'DE_ExpressversandAusDemAusland';
    /**
     * Constant for value 'DE_DHL2KGPaket'
     * Meta information extracted from the WSDL
     * - documentation: DHL 2kg Paket (nur fuer kurze Zeit)
     * @return string 'DE_DHL2KGPaket'
     */
    const VALUE_DE_DHL_2_KGPAKET = 'DE_DHL2KGPaket';
    /**
     * Constant for value 'InternationalPriorityShipping'
     * Meta information extracted from the WSDL
     * - documentation: Global Shipping Program <br/> This shipping service must be selected for the international leg of the shipment.
     * @return string 'InternationalPriorityShipping'
     */
    const VALUE_INTERNATIONAL_PRIORITY_SHIPPING = 'InternationalPriorityShipping';
    /**
     * Constant for value 'SameDayShipping'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'SameDayShipping'
     */
    const VALUE_SAME_DAY_SHIPPING = 'SameDayShipping';
    /**
     * Constant for value 'UK_RoyalMailNextDay'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Tracked 24
     * @return string 'UK_RoyalMailNextDay'
     */
    const VALUE_UK_ROYAL_MAIL_NEXT_DAY = 'UK_RoyalMailNextDay';
    /**
     * Constant for value 'UK_RoyalMailTracked'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail Tracked 48
     * @return string 'UK_RoyalMailTracked'
     */
    const VALUE_UK_ROYAL_MAIL_TRACKED = 'UK_RoyalMailTracked';
    /**
     * Constant for value 'eBayNowImmediateDelivery'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order will be delivered by an eBay On Demand valet through the eBay On Demand Delivery program.
     * @return string 'eBayNowImmediateDelivery'
     */
    const VALUE_E_BAY_NOW_IMMEDIATE_DELIVERY = 'eBayNowImmediateDelivery';
    /**
     * Return allowed values
     * @uses self::VALUE_UPSGROUND
     * @uses self::VALUE_UPS_3_RD_DAY
     * @uses self::VALUE_UPS_2_ND_DAY
     * @uses self::VALUE_UPSNEXT_DAY
     * @uses self::VALUE_USPSPRIORITY
     * @uses self::VALUE_USPSPARCEL
     * @uses self::VALUE_USPSSTANDARD_POST
     * @uses self::VALUE_USPSMEDIA
     * @uses self::VALUE_USPSFIRST_CLASS
     * @uses self::VALUE_SHIPPING_METHOD_STANDARD
     * @uses self::VALUE_SHIPPING_METHOD_EXPRESS
     * @uses self::VALUE_USPSEXPRESS_MAIL
     * @uses self::VALUE_UPSNEXT_DAY_AIR
     * @uses self::VALUE_UPS_2_DAY_AIR_AM
     * @uses self::VALUE_USPSEXPRESS_MAIL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_MAIL_PADDED_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_PADDED_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_LEGAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_MAIL_LEGAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_A
     * @uses self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_B
     * @uses self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_C
     * @uses self::VALUE_USPSEXPRESS_MAIL_FLAT_RATE_BOX
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_LOCAL_DELIVERY
     * @uses self::VALUE_NOT_SELECTED
     * @uses self::VALUE_INTERNATIONAL_NOT_SELECTED
     * @uses self::VALUE_STANDARD_INTERNATIONAL
     * @uses self::VALUE_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_USPSGLOBAL_EXPRESS
     * @uses self::VALUE_USPSGLOBAL_PRIORITY
     * @uses self::VALUE_USPSECONOMY_PARCEL
     * @uses self::VALUE_USPSECONOMY_LETTER
     * @uses self::VALUE_USPSAIRMAIL_LETTER
     * @uses self::VALUE_USPSAIRMAIL_PARCEL
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS
     * @uses self::VALUE_UPSWORLD_WIDE_EXPEDITED
     * @uses self::VALUE_UPSWORLDWIDE_SAVER
     * @uses self::VALUE_UPSSTANDARD_TO_CANADA
     * @uses self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_SMALL_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LARGE_FLAT_RATE_BOX
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_BOX
     * @uses self::VALUE_OTHER_INTERNATIONAL
     * @uses self::VALUE_AT_STANDARD_DISPATCH
     * @uses self::VALUE_AT_INSURED_DISPATCH
     * @uses self::VALUE_AT_WRITING
     * @uses self::VALUE_AT_COD
     * @uses self::VALUE_AT_EXPRESS_OR_COURIER
     * @uses self::VALUE_AT_INSURED_EXPRESS_OR_COURIER
     * @uses self::VALUE_AT_SPECIAL_DISPATCH
     * @uses self::VALUE_AT_INSURED_SPECIAL_DISPATCH
     * @uses self::VALUE_AT_SONSTIGE
     * @uses self::VALUE_AT_UNVERSICHERTER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_AT_VERSICHERTER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_AT_SONSTIGER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_AT_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL
     * @uses self::VALUE_AT_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL
     * @uses self::VALUE_AT_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_AT_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_AT_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_AT_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_AU_REGULAR
     * @uses self::VALUE_AU_EXPRESS
     * @uses self::VALUE_AU_REGISTERED
     * @uses self::VALUE_AU_COURIER
     * @uses self::VALUE_AU_OTHER
     * @uses self::VALUE_AU_EMSINTERNATIONAL_COURIER_PARCELS
     * @uses self::VALUE_AU_EMSINTERNATIONAL_COURIER_DOCUMENTS
     * @uses self::VALUE_AU_EXPRESS_POST_INTERNATIONAL_DOCUMENTS
     * @uses self::VALUE_AU_AIR_MAIL_INTERNATIONAL
     * @uses self::VALUE_AU_ECONOMY_AIR_INTERNATIONAL
     * @uses self::VALUE_AU_SEA_MAIL_INTERNATIONAL
     * @uses self::VALUE_AU_STANDARD_INTERNATIONAL
     * @uses self::VALUE_AU_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_AU_OTHER_INTERNATIONAL
     * @uses self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_1_KG
     * @uses self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_500_G
     * @uses self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PARCEL
     * @uses self::VALUE_AU_EXPEDITED_DELIVERY_FROM_OUTSIDE_AU
     * @uses self::VALUE_AU_ECONOMY_DELIVERY_FROM_OUTSIDE_AU
     * @uses self::VALUE_AU_STANDARD_DELIVERY_FROM_OUTSIDE_AU
     * @uses self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_METRO_15_KG
     * @uses self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_5_KG
     * @uses self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_3_KG
     * @uses self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_1_KG
     * @uses self::VALUE_AU_EXPRESS_DELIVERY
     * @uses self::VALUE_AU_STANDARD_DELIVERY
     * @uses self::VALUE_AU_E_BAY_AUS_POST_3_KG_FLAT_RATE_SATCHEL
     * @uses self::VALUE_AU_E_BAY_AUS_POST_500_G_FLAT_RATE_SATCHEL
     * @uses self::VALUE_AU_FREIGHT
     * @uses self::VALUE_BEFR_STANDARD_DELIVERY
     * @uses self::VALUE_BEFR_PRIORITY_DELIVERY
     * @uses self::VALUE_BEFR_PARCEL_POST
     * @uses self::VALUE_BEFR_REGISTERED_MAIL
     * @uses self::VALUE_BEFR_OTHER
     * @uses self::VALUE_BEFR_DE_POST_INTERNATIONAL
     * @uses self::VALUE_BEFR_UPSINTERNATIONAL
     * @uses self::VALUE_BEFR_FED_EX_INTERNATIONAL
     * @uses self::VALUE_BEFR_DHLINTERNATIONAL
     * @uses self::VALUE_BEFR_TPGPOST_TNTINTERNATIONAL
     * @uses self::VALUE_BEFR_STANDARD_INTERNATIONAL
     * @uses self::VALUE_BEFR_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_BEFR_OTHER_INTERNATIONAL
     * @uses self::VALUE_BEFR_LA_POSTE_INTERNATIONAL
     * @uses self::VALUE_BEFR_LA_POSTE_STANDARD_SHIPPING
     * @uses self::VALUE_BEFR_LA_POSTE_CERTIFIED_SHIPPING
     * @uses self::VALUE_BEFR_LA_POSTE_TAXIPOST_LLS
     * @uses self::VALUE_BEFR_LA_POSTE_TAXIPOST_24_H
     * @uses self::VALUE_BEFR_LA_POSTE_TAXIPOST_SECUR
     * @uses self::VALUE_BEFR_POST_INTERNATIONAL_STANDARD
     * @uses self::VALUE_BEFR_POST_INTERNATIONAL_REGISTERED
     * @uses self::VALUE_BEFR_TNTINTERNATIONAL
     * @uses self::VALUE_BEFR_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BEFR_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BEFR_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BEFR_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BENL_STANDARD_DELIVERY
     * @uses self::VALUE_BENL_PRIORITY_DELIVERY
     * @uses self::VALUE_BENL_PARCEL_POST
     * @uses self::VALUE_BENL_REGISTERED_MAIL
     * @uses self::VALUE_BENL_OTHER
     * @uses self::VALUE_BENL_DE_POST_INTERNATIONAL
     * @uses self::VALUE_BENL_UPSINTERNATIONAL
     * @uses self::VALUE_BENL_FED_EX_INTERNATIONAL
     * @uses self::VALUE_BENL_DHLINTERNATIONAL
     * @uses self::VALUE_BENL_TPGPOST_TNTINTERNATIONAL
     * @uses self::VALUE_BENL_STANDARD_INTERNATIONAL
     * @uses self::VALUE_BENL_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_BENL_OTHER_INTERNATIONAL
     * @uses self::VALUE_BENL_LA_POSTE_INTERNATIONAL
     * @uses self::VALUE_BENL_DE_POST_STANDARD_SHIPPING
     * @uses self::VALUE_BENL_DE_POST_CERTIFIED_SHIPPING
     * @uses self::VALUE_BENL_DE_POST_TAXIPOST_LLS
     * @uses self::VALUE_BENL_DE_POST_TAXIPOST_24_H
     * @uses self::VALUE_BENL_DE_POST_TAXIPOST_SECUR
     * @uses self::VALUE_BENL_OTHER_SHIPPING_METHODS
     * @uses self::VALUE_BENL_POST_INTERNATIONAL_STANDARD
     * @uses self::VALUE_BENL_POST_INTERNATIONAL_REGISTERED
     * @uses self::VALUE_BENL_TNTINTERNATIONAL
     * @uses self::VALUE_BENL_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BENL_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BENL_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_BENL_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_CA_STANDARD_DELIVERY
     * @uses self::VALUE_CA_EXPEDITED_DELIVERY
     * @uses self::VALUE_CA_POST_LETTERMAIL
     * @uses self::VALUE_CA_POST_REGULAR_PARCEL
     * @uses self::VALUE_CA_POST_EXPEDITED_PARCEL
     * @uses self::VALUE_CA_POST_XPRESSPOST
     * @uses self::VALUE_CA_POST_PRIORITY_COURIER
     * @uses self::VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX
     * @uses self::VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX
     * @uses self::VALUE_CA_STANDARD_INTERNATIONAL
     * @uses self::VALUE_CA_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_CA_OTHER_INTERNATIONAL
     * @uses self::VALUE_CA_POST_EXPEDITED_PARCEL_USA
     * @uses self::VALUE_CA_POST_SMALL_PACKETS_USA
     * @uses self::VALUE_CA_POST_XPRESSPOST_USA
     * @uses self::VALUE_CA_POST_XPRESSPOST_INTERNATIONAL
     * @uses self::VALUE_CA_POST_INTERNATIONAL_PARCEL_SURFACE
     * @uses self::VALUE_CA_POST_INTERNATIONAL_PARCEL_AIR
     * @uses self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL
     * @uses self::VALUE_CA_PUROLATOR_INTERNATIONAL
     * @uses self::VALUE_CA_POST_SMALL_PACKETS_USAGROUND
     * @uses self::VALUE_CA_POST_SMALL_PACKETS_USAAIR
     * @uses self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL_GROUND
     * @uses self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL_AIR
     * @uses self::VALUE_CA_POST_USALETTER_POST
     * @uses self::VALUE_CA_POST_INTERNATIONAL_LETTER_POST
     * @uses self::VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX_USA
     * @uses self::VALUE_CA_UPSEXPRESS_CANADA
     * @uses self::VALUE_CA_UPSEXPRESS_SAVER_CANADA
     * @uses self::VALUE_CA_UPSEXPEDITED_CANADA
     * @uses self::VALUE_CA_UPSSTANDARD_CANADA
     * @uses self::VALUE_CA_UPSEXPRESS_UNITED_STATES
     * @uses self::VALUE_CA_UPSEXPEDITED_UNITED_STATES
     * @uses self::VALUE_CA_UPS_3_DAY_SELECT_UNITED_STATES
     * @uses self::VALUE_CA_UPSSTANDARD_UNITED_STATES
     * @uses self::VALUE_CA_UPSWORLD_WIDE_EXPRESS
     * @uses self::VALUE_CA_UPSWORLD_WIDE_EXPEDITED
     * @uses self::VALUE_CA_PRIORITY_WORLDWIDE
     * @uses self::VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX_USA
     * @uses self::VALUE_CA_POST_TRACKED_PACKETS_USA
     * @uses self::VALUE_CA_POST_TRACKED_PACKETS_INTERNATIONAL
     * @uses self::VALUE_CA_FREIGHT
     * @uses self::VALUE_CH_STANDARD_DISPATCH_APOST
     * @uses self::VALUE_CH_STANDARD_DISPATCH_BPOST
     * @uses self::VALUE_CH_INSURED_DISPATCH
     * @uses self::VALUE_CH_WRITING
     * @uses self::VALUE_CH_COD
     * @uses self::VALUE_CH_EXPRESS_OR_COURIER
     * @uses self::VALUE_CH_INSURED_EXPRESS_OR_COURIER
     * @uses self::VALUE_CH_SPECIAL_DISPATCH
     * @uses self::VALUE_CH_INSURED_SPECIAL_DISPATCH
     * @uses self::VALUE_CH_SONSTIGE
     * @uses self::VALUE_CH_SONSTIGER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_CH_ECONOMY_SENDUNGEN_INTERNATIONAL
     * @uses self::VALUE_CH_PRIORITY_SENDUNGEN_INTERNATIONAL
     * @uses self::VALUE_CH_URGENT_SENDUNGEN_INTERNATIONAL
     * @uses self::VALUE_CH_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_CH_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_CH_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_CH_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_CN_PERSONAL_DELIVERY
     * @uses self::VALUE_CN_REGULAR_PACKAGE
     * @uses self::VALUE_CN_DELIVERY_COMPANY_EXPRESS
     * @uses self::VALUE_CN_POST_OFFICE_EXPRESS
     * @uses self::VALUE_CN_OTHERS
     * @uses self::VALUE_CN_FAST_POST_OFFICE
     * @uses self::VALUE_CN_EXPRESS_DELIVERY_SAME_CITY
     * @uses self::VALUE_CN_EXPRESS_DELIVERY_OTHER_CITIES
     * @uses self::VALUE_CN_STANDARD_INTERNATIONAL
     * @uses self::VALUE_CN_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_CN_OTHER_INTERNATIONAL
     * @uses self::VALUE_CN_CODINTERNATIONAL
     * @uses self::VALUE_CN_STANDARD_MAILING_INTERNATIONAL
     * @uses self::VALUE_CN_REGULAR_LOGISTICS_INTERNATIONAL
     * @uses self::VALUE_CN_EMSINTERNATIONAL
     * @uses self::VALUE_CN_OTHERS_INTERNATIONAL
     * @uses self::VALUE_DE_STANDARD_DISPATCH
     * @uses self::VALUE_DE_INSURED_DISPATCH
     * @uses self::VALUE_DE_WRITING
     * @uses self::VALUE_DE_COD
     * @uses self::VALUE_DE_EXPRESS_OR_COURIER
     * @uses self::VALUE_DE_INSURED_EXPRESS_OR_COURIER
     * @uses self::VALUE_DE_SPECIAL_DISPATCH
     * @uses self::VALUE_DE_INSURED_SPECIAL_DISPATCH
     * @uses self::VALUE_DE_UNVERSICHERTER_VERSAND
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF
     * @uses self::VALUE_DE_E_BAY_DHLPAKET_24_X_7
     * @uses self::VALUE_DE_DHLPOSTPAKET
     * @uses self::VALUE_DE_DHLPACKCHEN
     * @uses self::VALUE_DE_DEUTSCHE_POST_WARENSENDUNG
     * @uses self::VALUE_DE_DEUTSCHE_POST_BUCHERSENDUNG
     * @uses self::VALUE_DE_HERMES_PAKET_UNVERSICHERT
     * @uses self::VALUE_DE_HERMES_PAKET_VERSICHERT
     * @uses self::VALUE_DE_ILOXX_TRANSPORT_XXL
     * @uses self::VALUE_DE_ILOXX_UBERNACHT_EXPRESS
     * @uses self::VALUE_DE_ILOXX_STANDARD
     * @uses self::VALUE_DE_SONSTIGE
     * @uses self::VALUE_DE_UNVERSICHERTER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_DE_VERSICHERTER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_DE_DHLPOSTPAKET_INTERNATIONAL
     * @uses self::VALUE_DE_DHLPACKCHEN_INTERNATIONAL
     * @uses self::VALUE_DE_SONSTIGER_VERSAND_INTERNATIONAL
     * @uses self::VALUE_DE_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL
     * @uses self::VALUE_DE_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF_LAND_INTERNATIONAL
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF_LUFT_INTERNATIONAL
     * @uses self::VALUE_DE_ILOXX_EUROPA_INTERNATIONAL
     * @uses self::VALUE_DE_ILOXX_WORLD_WIDE_INTERNATIONAL
     * @uses self::VALUE_DE_PAKET
     * @uses self::VALUE_DE_EXPRESS
     * @uses self::VALUE_DE_DHLPAKET
     * @uses self::VALUE_DE_DPBUECHER_WARENSENDUNG
     * @uses self::VALUE_DE_HERMES_PAKET
     * @uses self::VALUE_DE_ILOXX_TRANSPORT
     * @uses self::VALUE_DE_SONSTIGE_DOMESTIC
     * @uses self::VALUE_DE_EINSCHREIBEN
     * @uses self::VALUE_DE_NACHNAME
     * @uses self::VALUE_DE_SPECIAL_DELIVERY
     * @uses self::VALUE_DE_UPS
     * @uses self::VALUE_DE_DPD
     * @uses self::VALUE_DE_GLS
     * @uses self::VALUE_DE_PAKET_INTERNATIONAL
     * @uses self::VALUE_DE_DHLPAKET_INTERNATIONAL
     * @uses self::VALUE_DE_DHLPAKET_INTL_EXPRESS
     * @uses self::VALUE_DE_SONSTIGE_INTERNATIONAL
     * @uses self::VALUE_DE_EXPRESS_INTERNATIONAL
     * @uses self::VALUE_DE_DPBRIEF_INTERNATIONAL
     * @uses self::VALUE_DE_ILOXX_TRANSPORT_INTERNATIONAL
     * @uses self::VALUE_DE_HERMES_PAKET_INTERNATIONAL
     * @uses self::VALUE_DE_UPSINTERNATIONAL
     * @uses self::VALUE_DE_DPDINTERNATIONAL
     * @uses self::VALUE_DE_GLSINTERNATIONAL
     * @uses self::VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP_KAEUFER
     * @uses self::VALUE_DE_HERMES_PAKET_SHOP_2_SHOP_KAEUFER
     * @uses self::VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP
     * @uses self::VALUE_DE_HERMES_PAKET_SHOP_2_SHOP
     * @uses self::VALUE_DE_HERMES_PAKET_SPERRGUT
     * @uses self::VALUE_DE_E_BAY_HERMES_PAKET_SPERRGUT_SHOP_2_SHOP
     * @uses self::VALUE_DE_DHLPAECKCHEN_PACKSTATION
     * @uses self::VALUE_DE_DHLPAKET_PACKSTATION
     * @uses self::VALUE_DE_E_BAY_DHLPAECKCHEN
     * @uses self::VALUE_DE_DHLSTAR_PAECKCHEN
     * @uses self::VALUE_DE_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_ES_CARTAS_NACIONALES_HASTA_20
     * @uses self::VALUE_ES_CARTAS_NACIONALES_DE_MAS_20
     * @uses self::VALUE_ES_CARTAS_INTERNACIONALES_HASTA_20
     * @uses self::VALUE_ES_CARTAS_INTERNACIONALES_DE_MAS_20
     * @uses self::VALUE_ES_PAQUETE_AZUL_HASTA_2_KG
     * @uses self::VALUE_ES_PAQUETE_AZUL_DE_MAS_2_KG
     * @uses self::VALUE_ES_PAQUETE_INTERNACIONAL_ECONOMICO
     * @uses self::VALUE_ES_URGENTE
     * @uses self::VALUE_ES_OTROS
     * @uses self::VALUE_ES_STANDARD_INTERNATIONAL
     * @uses self::VALUE_ES_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_ES_OTHER_INTERNATIONAL
     * @uses self::VALUE_ES_CARTAS_POSTAL_INTERNATIONAL
     * @uses self::VALUE_ES_EMS_POSTAL_EXPRESS_INTERNATIONAL
     * @uses self::VALUE_ES_ECONOMY_PACKET_INTERNATIONAL
     * @uses self::VALUE_ES_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_ES_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_ES_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_ES_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_ES_ENTREGA_KIALA_8_KG
     * @uses self::VALUE_FR_CHRONOPOSTE_INTERNATIONAL_CLASSIC
     * @uses self::VALUE_FR_COLIPOSTE_COLISSIMO_DIRECT
     * @uses self::VALUE_FR_DHLEXPRESS_EUROPACK
     * @uses self::VALUE_FR_UPSSTANDARD
     * @uses self::VALUE_FR_POST_OFFICE_LETTER
     * @uses self::VALUE_FR_POST_OFFICE_LETTER_FOLLOWED
     * @uses self::VALUE_FR_POST_OFFICE_LETTER_RECOMMENDED
     * @uses self::VALUE_FR_COLIPOSTE_COLISSIMO
     * @uses self::VALUE_FR_COLIPOSTE_COLISSIMO_RECOMMENDED
     * @uses self::VALUE_FR_UPSSTANDARD_AGAINST_REFUND
     * @uses self::VALUE_FR_AUTRE
     * @uses self::VALUE_FR_ECOPLI
     * @uses self::VALUE_FR_COLIECO
     * @uses self::VALUE_FR_AUTE_MODE_DENVOI_DE_COLIS
     * @uses self::VALUE_FR_REMISE_EN_MAIN_PROPRE
     * @uses self::VALUE_FR_STANDARD_INTERNATIONAL
     * @uses self::VALUE_FR_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_FR_OTHER_INTERNATIONAL
     * @uses self::VALUE_FR_LA_POSTE_INTERNATIONAL_PRIORITY_COURIER
     * @uses self::VALUE_FR_LA_POSTE_INTERNATIONAL_ECONOMY_COURIER
     * @uses self::VALUE_FR_LA_POSTE_COLISSIMO_INTERNATIONAL
     * @uses self::VALUE_FR_LA_POSTE_COLIS_ECONOMIQUE_INTERNATIONAL
     * @uses self::VALUE_FR_LA_POSTE_COLISSIMO_EMBALLAGE_INTERNATIONAL
     * @uses self::VALUE_FR_CHRONOPOST_CLASSIC_INTERNATIONAL
     * @uses self::VALUE_FR_CHRONOPOST_PREMIUM_INTERNATIONAL
     * @uses self::VALUE_FR_UPSSTANDARD_INTERNATIONAL
     * @uses self::VALUE_FR_UPSEXPRESS_INTERNATIONAL
     * @uses self::VALUE_FR_DHLINTERNATIONAL
     * @uses self::VALUE_FR_LA_POSTE_LETTER_MAX
     * @uses self::VALUE_FR_KIALA_DELIVERY
     * @uses self::VALUE_FR_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_IN_REGULAR
     * @uses self::VALUE_IN_EXPRESS
     * @uses self::VALUE_IN_NATIONAL_COD
     * @uses self::VALUE_IN_COURIER
     * @uses self::VALUE_IN_LOCAL_COD
     * @uses self::VALUE_IN_STANDARD_INTERNATIONAL
     * @uses self::VALUE_IN_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_IN_OTHER_INTERNATIONAL
     * @uses self::VALUE_IN_FLAT_RATE_COD
     * @uses self::VALUE_IN_BUYER_PICKS_UP_AND_PAYS
     * @uses self::VALUE_IT_REGULAR_MAIL
     * @uses self::VALUE_IT_PRIORITY_MAIL
     * @uses self::VALUE_IT_MAIL_REGISTERED_LETTER
     * @uses self::VALUE_IT_MAIL_REGISTERED_LETTER_WITH_MARK
     * @uses self::VALUE_IT_INSURED_MAIL
     * @uses self::VALUE_IT_QUICK_MAIL
     * @uses self::VALUE_IT_REGULAR_PACKAGE
     * @uses self::VALUE_IT_QUICK_PACKAGE_1
     * @uses self::VALUE_IT_QUICK_PACKAGE_3
     * @uses self::VALUE_IT_EXPRESS_COURIER
     * @uses self::VALUE_IT_EXPRESS_PACKAGE_MAXI
     * @uses self::VALUE_IT_STANDARD_INTERNATIONAL
     * @uses self::VALUE_IT_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_IT_OTHER_INTERNATIONAL
     * @uses self::VALUE_IT_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_NL_STANDARD_DELIVERY
     * @uses self::VALUE_NL_PARCEL_POST
     * @uses self::VALUE_NL_REGISTERED_MAIL
     * @uses self::VALUE_NL_OTHER
     * @uses self::VALUE_NL_TPGPOST_TNTINTERNATIONAL
     * @uses self::VALUE_NL_UPSINTERNATIONAL
     * @uses self::VALUE_NL_FED_EX_INTERNATIONAL
     * @uses self::VALUE_NL_DHLINTERNATIONAL
     * @uses self::VALUE_NL_DPDGBRINTERNATIONAL
     * @uses self::VALUE_NL_GLSBUSINESS_INTERNATIONAL
     * @uses self::VALUE_NL_STANDARD_INTERNATIONAL
     * @uses self::VALUE_NL_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_NL_OTHER_INTERNATIONAL
     * @uses self::VALUE_NL_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_NL_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_NL_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_NL_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_TW_REGISTERED_MAIL
     * @uses self::VALUE_TW_UNREGISTERED_MAIL
     * @uses self::VALUE_TW_COD
     * @uses self::VALUE_TW_DWELLING_MATCH_POST
     * @uses self::VALUE_TW_DWELLING_MATCH_COD
     * @uses self::VALUE_TW_SELF_PICKUP
     * @uses self::VALUE_TW_PARCEL_POST
     * @uses self::VALUE_TW_EXPRESS_MAIL
     * @uses self::VALUE_TW_OTHER
     * @uses self::VALUE_TW_CPINTERNATIONAL_LETTER_POST
     * @uses self::VALUE_TW_CPINTERNATIONAL_PARCEL_POST
     * @uses self::VALUE_TW_CPINTERNATIONAL_REGISTERED_LETTER_POST
     * @uses self::VALUE_TW_CPINTERNATIONAL_REGISTERED_PARCEL_POST
     * @uses self::VALUE_TW_CPINTERNATIONAL_EMS
     * @uses self::VALUE_TW_CPINTERNATIONAL_OCEAN_SHIPPING_PARCEL
     * @uses self::VALUE_TW_FED_EX_INTERNATIONAL_PRIORITY
     * @uses self::VALUE_TW_FED_EX_INTERNATIONAL_ECONOMY
     * @uses self::VALUE_TW_UPSWORLDWIDE_EXPEDITED
     * @uses self::VALUE_TW_UPSWORLDWIDE_EXPRESS
     * @uses self::VALUE_TW_UPSWORLDWIDE_EXPRESS_PLUS
     * @uses self::VALUE_TW_OTHER_INTERNATIONAL
     * @uses self::VALUE_UK_ROYAL_MAIL_FIRST_CLASS_STANDARD
     * @uses self::VALUE_UK_ROYAL_MAIL_SECOND_CLASS_STANDARD
     * @uses self::VALUE_UK_ROYAL_MAIL_FIRST_CLASS_RECORDED
     * @uses self::VALUE_UK_ROYAL_MAIL_SECOND_CLASS_RECORDED
     * @uses self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY
     * @uses self::VALUE_UK_ROYAL_MAIL_STANDARD_PARCEL
     * @uses self::VALUE_UK_PARCELFORCE_24
     * @uses self::VALUE_UK_PARCELFORCE_48
     * @uses self::VALUE_UK_OTHER_COURIER
     * @uses self::VALUE_UK_MY_HERMES_DOOR_TO_DOOR_SERVICE
     * @uses self::VALUE_UK_COLLECT_DROP_AT_STORE_DELIVERY_TO_DOOR
     * @uses self::VALUE_UK_SELLERS_STANDARD_RATE
     * @uses self::VALUE_UK_COLLECT_IN_PERSON
     * @uses self::VALUE_UK_SELLERS_STANDARD_INTERNATIONAL_RATE
     * @uses self::VALUE_UK_ROYAL_MAIL_AIRMAIL_INTERNATIONAL
     * @uses self::VALUE_UK_ROYAL_MAIL_AIRSURE_INTERNATIONAL
     * @uses self::VALUE_UK_ROYAL_MAIL_SURFACE_MAIL_INTERNATIONAL
     * @uses self::VALUE_UK_ROYAL_MAIL_INTERNATIONAL_SIGNED_FOR
     * @uses self::VALUE_UK_ROYAL_MAIL_HMFORCES_MAIL_INTERNATIONAL
     * @uses self::VALUE_UK_PARCEL_FORCE_INTERNATIONAL_DATAPOST
     * @uses self::VALUE_UK_PARCEL_FORCE_IRELAND_24_INTERNATIONAL
     * @uses self::VALUE_UK_PARCEL_FORCE_EURO_48_INTERNATIONAL
     * @uses self::VALUE_UK_PARCEL_FORCE_INTERNATIONAL_SCHEDULED
     * @uses self::VALUE_UK_OTHER_COURIER_OR_DELIVERY_INTERNATIONAL
     * @uses self::VALUE_UK_COLLECT_IN_PERSON_INTERNATIONAL
     * @uses self::VALUE_UK_PARCEL_FORCE_INTL_EXPRESS
     * @uses self::VALUE_UK_PARCEL_FORCE_INTL_VALUE
     * @uses self::VALUE_UK_PARCEL_FORCE_INTL_ECONOMY
     * @uses self::VALUE_UK_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_UK_INTL_TRACKED_POSTAGE
     * @uses self::VALUE_IE_SELLERS_STANDARD_RATE
     * @uses self::VALUE_IE_FIRST_CLASS_LETTER_SERVICE
     * @uses self::VALUE_IE_SWIFT_POST_NATIONAL
     * @uses self::VALUE_IE_REGISTERED_POST
     * @uses self::VALUE_IE_EMSSDSCOURIER
     * @uses self::VALUE_IE_ECONOMY_SDSCOURIER
     * @uses self::VALUE_IE_OTHER_COURIER
     * @uses self::VALUE_IE_COLLECTION_IN_PERSON
     * @uses self::VALUE_IE_SELLERS_STANDARD_RATE_INTERNATIONAL
     * @uses self::VALUE_IE_INTERNATIONAL_ECONOMY_SERVICE
     * @uses self::VALUE_IE_INTERNATIONAL_PRIORITY_SERVICE
     * @uses self::VALUE_IE_SWIFT_POST_EXPRESS_INTERNATIONAL
     * @uses self::VALUE_IE_SWIFT_POST_INTERNATIONAL
     * @uses self::VALUE_IE_EMSSDSCOURIER_INTERNATIONAL
     * @uses self::VALUE_IE_ECONOMY_SDSCOURIER_INTERNATIONAL
     * @uses self::VALUE_IE_OTHER_COURIER_INTERNATIONAL
     * @uses self::VALUE_IE_COLLECTION_IN_PERSON_INTERNATIONAL
     * @uses self::VALUE_IE_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_IE_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_IE_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_IE_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_PL_DOMESTIC_REGULAR
     * @uses self::VALUE_PL_DOMESTIC_SPECIAL
     * @uses self::VALUE_PL_ECONOMY_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_PL_STANDARD_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_PL_EXPRESS_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_PL_TRACKED_DELIVERY_FROM_ABROAD
     * @uses self::VALUE_FREIGHT_SHIPPING
     * @uses self::VALUE_FREIGHT_OTHER_SHIPPING
     * @uses self::VALUE_FREIGHT
     * @uses self::VALUE_FREIGHT_SHIPPING_INTERNATIONAL
     * @uses self::VALUE_USPSGROUND
     * @uses self::VALUE_SHIPPING_METHOD_OVERNIGHT
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_USPSPRIORITY_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_USPSPRIORITY_FLAT_RATE_BOX
     * @uses self::VALUE_USPSGLOBAL_PRIORITY_SMALL_ENVELOPE
     * @uses self::VALUE_USPSGLOBAL_PRIORITY_LARGE_ENVELOPE
     * @uses self::VALUE_USPSEXPRESS_FLAT_RATE_ENVELOPE
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS_BOX_10_KG
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS_BOX_25_KG
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_10_KG
     * @uses self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_25_KG
     * @uses self::VALUE_HK_LOCAL_PICK_UP_ONLY
     * @uses self::VALUE_HK_LOCAL_COURIER
     * @uses self::VALUE_HK_DOMESTIC_REGULAR_SHIPPING
     * @uses self::VALUE_HK_DOMESTIC_SPECIAL_SHIPPING
     * @uses self::VALUE_HK_INTERNATIONAL_REGULAR_SHIPPING
     * @uses self::VALUE_HK_INTERNATIONAL_SPECIAL_SHIPPING
     * @uses self::VALUE_SG_LOCAL_PICK_UP_ONLY
     * @uses self::VALUE_SG_LOCAL_COURIER
     * @uses self::VALUE_SG_DOMESTIC_STANDARD_MAIL
     * @uses self::VALUE_SG_DOMESTIC_NON_STANDARD_MAIL
     * @uses self::VALUE_SG_DOMESTIC_SPEEDPOST_ISLANDWIDE
     * @uses self::VALUE_SG_INTERNATIONAL_STANDARD_MAIL
     * @uses self::VALUE_SG_INTERNATIONAL_EXPRESS_MAIL_SERVICE
     * @uses self::VALUE_SG_INTERNATIONAL_COURIER
     * @uses self::VALUE_BENL_DE_POST_ZENDING_NONPRIOR
     * @uses self::VALUE_BENL_DE_POST_ZENDING_PRIOR
     * @uses self::VALUE_BENL_DE_POST_ZENDING_AANGETEKEND
     * @uses self::VALUE_BENL_KILOPOST_PAKJE
     * @uses self::VALUE_BENL_TAXIPOST
     * @uses self::VALUE_BENL_KIALA_AFHAALPUNT
     * @uses self::VALUE_BENL_VASTE_KOSTEN_STANDAARD_VERZENDING
     * @uses self::VALUE_BENL_VASTE_KOSTEN_VERSNELDE_VERZENDING
     * @uses self::VALUE_BENL_VERZEKERDE_VERZENDING
     * @uses self::VALUE_BEFR_LA_POSTE_ENVOI_NONPRIOR
     * @uses self::VALUE_BEFR_LA_POSTE_ENVOI_PRIOR
     * @uses self::VALUE_BEFR_LA_POSTE_ENVOI_RECOMMANDE
     * @uses self::VALUE_BEFR_PAQUET_KILOPOST
     * @uses self::VALUE_BEFR_TAXIPOST
     * @uses self::VALUE_BEFR_POINT_RETRAIT_KIALA
     * @uses self::VALUE_BEFR_LIVRAISON_STANDARD_PRIXFOR_FAITAIRE
     * @uses self::VALUE_BEFR_LIVRAISON_EXPRESS_PRIXFOR_FAITAIRE
     * @uses self::VALUE_BEFR_LIVRAISON_SECURISE
     * @uses self::VALUE_BENL_DE_POST_ZENDING_PRIORINTERNATIONAL
     * @uses self::VALUE_BENL_DE_POST_ZENDING_NONPRIORINTERNATIONAL
     * @uses self::VALUE_BENL_DE_POST_ZENDING_AANGETEKEND_INTERNATIONAL
     * @uses self::VALUE_BENL_KILOPOST_PAKJE_INTERNATIONAL
     * @uses self::VALUE_BENL_TAXIPOST_EXPRESSVERZENDING
     * @uses self::VALUE_BENL_VERZEKERDE_VERZENDING_INTERNATIONAL
     * @uses self::VALUE_BEFR_LA_POSTEENVOIE_PRIOR
     * @uses self::VALUE_BEFR_LA_POSTEENVOIE_NONPRIOR
     * @uses self::VALUE_BEFR_LA_POSTEENVOIE_RECOMMANDE
     * @uses self::VALUE_BEFR_PAQUET_KILOPOST_INTERNATIONALE
     * @uses self::VALUE_BEFR_EXPRESS_TAXIPOST
     * @uses self::VALUE_BEFR_LIVRAISON_STANDARD_INTERNATIONALE_PRIXFOR_FAITAIRE
     * @uses self::VALUE_BEFR_LIVRAISON_EXPRESS_INTERNATIONALE_PRIXFOR_FAITAIRE
     * @uses self::VALUE_BEFR_LIVRAISON_SECURISE_INTERNATIONAL
     * @uses self::VALUE_FR_CHRONOPOST
     * @uses self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_NEXT_DAY
     * @uses self::VALUE_CA_POST_LIGHT_PACKET_INTERNATIONAL
     * @uses self::VALUE_CA_POST_LIGHT_PACKET_USA
     * @uses self::VALUE_PL_DHLINTERNATIONAL
     * @uses self::VALUE_PL_INTERNATIONAL_REGULAR
     * @uses self::VALUE_PL_INTERNATIONAL_SPECIAL
     * @uses self::VALUE_PL_UPSINTERNATIONAL
     * @uses self::VALUE_CAFR_STANDARD_DELIVERY
     * @uses self::VALUE_CAFR_EXPEDITED_DELIVERY
     * @uses self::VALUE_CAFR_POST_LETTERMAIL
     * @uses self::VALUE_CAFR_POST_REGULAR_PARCEL
     * @uses self::VALUE_CAFR_POST_EXPEDITED_PARCEL
     * @uses self::VALUE_CAFR_POST_XPRESSPOST
     * @uses self::VALUE_CAFR_POST_PRIORITY_COURIER
     * @uses self::VALUE_CAFR_STANDARD_INTERNATIONAL
     * @uses self::VALUE_CAFR_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_CAFR_OTHER_INTERNATIONAL
     * @uses self::VALUE_CAFR_POST_EXPEDITED_PARCEL_USA
     * @uses self::VALUE_CAFR_POST_SMALL_PACKETS_USA
     * @uses self::VALUE_CAFR_POST_XPRESSPOST_USA
     * @uses self::VALUE_CAFR_POST_XPRESSPOST_INTERNATIONAL
     * @uses self::VALUE_CAFR_POST_INTERNATIONAL_PARCEL_SURFACE
     * @uses self::VALUE_CAFR_POST_INTERNATIONAL_PARCEL_AIR
     * @uses self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL
     * @uses self::VALUE_CAFR_PUROLATOR_INTERNATIONAL
     * @uses self::VALUE_CAFR_POST_SMALL_PACKETS_USAGROUND
     * @uses self::VALUE_CAFR_POST_SMALL_PACKETS_USAAIR
     * @uses self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_GROUND
     * @uses self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_AIR
     * @uses self::VALUE_CAFR_POST_USALETTER_POST
     * @uses self::VALUE_CAFR_POST_INTERNATIONAL_LETTER_POST
     * @uses self::VALUE_CAFR_UPSEXPRESS_CANADA
     * @uses self::VALUE_CAFR_UPSEXPRESS_SAVER_CANADA
     * @uses self::VALUE_CAFR_UPSEXPEDITED_CANADA
     * @uses self::VALUE_CAFR_UPSSTANDARD_CANADA
     * @uses self::VALUE_CAFR_UPSEXPRESS_UNITED_STATES
     * @uses self::VALUE_CAFR_UPSEXPEDITED_UNITED_STATES
     * @uses self::VALUE_CAFR_UPS_3_DAY_SELECT_UNITED_STATES
     * @uses self::VALUE_CAFR_UPSSTANDARD_UNITED_STATES
     * @uses self::VALUE_CAFR_UPSWORLD_WIDE_EXPRESS
     * @uses self::VALUE_CAFR_UPSWORLD_WIDE_EXPEDITED
     * @uses self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_9_AM
     * @uses self::VALUE_USPSFIRST_CLASS_MAIL_INTERNATIONAL
     * @uses self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL
     * @uses self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL
     * @uses self::VALUE_CH_STANDARD_INTERNATIONAL
     * @uses self::VALUE_CH_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_CH_SONSTIGER_VERSAND_SIEHE_ARTIKELBESCHREIBUNG
     * @uses self::VALUE_TW_STANDARD_INTERNATIONAL_FIXED_RATE
     * @uses self::VALUE_TW_EXPEDITED_INTERNATIONAL_FIXED_RATE
     * @uses self::VALUE_USPSGLOBAL_EXPRESS_GUARANTEED
     * @uses self::VALUE_AU_REGULAR_WITH_INSURANCE
     * @uses self::VALUE_AU_EXPRESS_WITH_INSURANCE
     * @uses self::VALUE_DE_DEUTSCHE_POST_WARENSENDUNG_INTERNATIONAL
     * @uses self::VALUE_DE_DEUTSCHE_POST_BYENDUNG
     * @uses self::VALUE_DE_HERMES_PAKET_UNVERSICHERT_INTERNATIONAL
     * @uses self::VALUE_DE_HERMES_PAKET_VERSICHERT_INTERNATIONAL
     * @uses self::VALUE_DE_I_LOXX_TRANSPORT_XXLINTERNATIONAL
     * @uses self::VALUE_DE_I_LOXX_UBERNACHT_EXPRESS_INTERNATIONAL
     * @uses self::VALUE_DE_I_LOXX_STANDARD_INTERNATIONAL
     * @uses self::VALUE_DE_STANDARD_INTERNATIONAL
     * @uses self::VALUE_DE_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_ECON
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_PRI
     * @uses self::VALUE_AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @uses self::VALUE_AT_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR
     * @uses self::VALUE_AT_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR
     * @uses self::VALUE_AT_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_AT_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_AT_SPECIAL_DISPATCH_INTERNATIONAL
     * @uses self::VALUE_AT_INSURED_SPECIAL_DISPATCH_INTERNATIONAL
     * @uses self::VALUE_AT_STANDARD_INTERNATIONAL
     * @uses self::VALUE_AT_EXPEDITED_INTERNATIONAL
     * @uses self::VALUE_AT_OTHER_INTERNATIONAL_SHIPPING
     * @uses self::VALUE_CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @uses self::VALUE_CH_UNVERSICHERTER_VERSAND
     * @uses self::VALUE_CH_VERSICHERTER_VERSAND
     * @uses self::VALUE_CH_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR
     * @uses self::VALUE_CH_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR
     * @uses self::VALUE_CH_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_CH_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_CH_SONDERVERSAND_ZBSPERRGUT_KFZ
     * @uses self::VALUE_CH_VERSICHERTER_SONDERVERSAND_ZBSPERRGUT_KFZ
     * @uses self::VALUE_CH_STANDARDVERSAND_APOST_PRIORITY
     * @uses self::VALUE_CH_STANDARDVERSAND_BPOST_ECONOMY
     * @uses self::VALUE_DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     * @uses self::VALUE_DE_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR
     * @uses self::VALUE_DE_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR
     * @uses self::VALUE_DE_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_DE_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL
     * @uses self::VALUE_DE_SONDERVERSAND_ZBMOBEL_KFZ
     * @uses self::VALUE_DE_VERSICHERTER_SONDERVERSAND_ZBMOBEL_KFZ
     * @uses self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTERNATIONAL
     * @uses self::VALUE_IE_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE
     * @uses self::VALUE_IE_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE
     * @uses self::VALUE_IE_OTHER_INTERNATIONAL_POSTAGE
     * @uses self::VALUE_UK_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE
     * @uses self::VALUE_UK_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE
     * @uses self::VALUE_UK_OTHER_INTERNATIONAL_POSTAGE
     * @uses self::VALUE_FR_CHRONOPOST_CHRONO_RELAIS
     * @uses self::VALUE_FR_CHRONO_10
     * @uses self::VALUE_FR_CHRONO_13
     * @uses self::VALUE_FR_CHRONO_18
     * @uses self::VALUE_FR_CHRONOPOST_EXPRESS_INTERNATIONAL
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_DELIVERY
     * @uses self::VALUE_CA_PICKUP
     * @uses self::VALUE_DE_PICKUP
     * @uses self::VALUE_AU_PICKUP
     * @uses self::VALUE_AU_SMALL_PARCELS
     * @uses self::VALUE_AU_SMALL_PARCEL_WITH_TRACKING
     * @uses self::VALUE_AU_SMALL_PARCEL_WITH_TRACKING_AND_SIGNATURE
     * @uses self::VALUE_AU_REGULAR_PARCEL_WITH_TRACKING
     * @uses self::VALUE_AU_REGULAR_PARCEL_WITH_TRACKING_AND_SIGNATURE
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_5_KG
     * @uses self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_500_G
     * @uses self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_3_KG
     * @uses self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_5_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_500_G
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_3_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_500_G
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_3_KG
     * @uses self::VALUE_AU_EXPRESS_COURIER_INTERNATIONAL
     * @uses self::VALUE_AU_EXPRESS_POST_INTERNATIONAL
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_C_5
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_B_4
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_2_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_3_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_5_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_10_KG
     * @uses self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_20_KG
     * @uses self::VALUE_AU_REGISTERED_PARCEL_POST
     * @uses self::VALUE_AU_REGISTERED_SMALL_PARCEL
     * @uses self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_500_G
     * @uses self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_3_KG
     * @uses self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_5_KG
     * @uses self::VALUE_AU_EXPRESS_POST_SATCHEL_500_G
     * @uses self::VALUE_AU_EXPRESS_POST_SATCHEL_3_KG
     * @uses self::VALUE_FR_PICKUP
     * @uses self::VALUE_AT_PICKUP
     * @uses self::VALUE_BENL_PICKUP
     * @uses self::VALUE_BEFR_PICKUP
     * @uses self::VALUE_CH_PICKUP
     * @uses self::VALUE_IT_PICKUP
     * @uses self::VALUE_NL_PICKUP
     * @uses self::VALUE_PL_PICKUP
     * @uses self::VALUE_ES_PICKUP
     * @uses self::VALUE_SG_DELIVERY
     * @uses self::VALUE_UK_OTHER_COURIER_24
     * @uses self::VALUE_UK_OTHER_COURIER_48
     * @uses self::VALUE_UK_OTHER_COURIER_3_DAYS
     * @uses self::VALUE_UK_OTHER_COURIER_5_DAYS
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_FED_EX_PRIORITY_OVERNIGHT
     * @uses self::VALUE_FED_EX_STANDARD_OVERNIGHT
     * @uses self::VALUE_FED_EX_2_DAY
     * @uses self::VALUE_FED_EX_GROUND
     * @uses self::VALUE_FED_EX_HOME_DELIVERY
     * @uses self::VALUE_FED_EX_EXPRESS_SAVER
     * @uses self::VALUE_FED_EX_GROUND_DISABLED
     * @uses self::VALUE_FED_EX_HOME_DELIVERY_DISABLED
     * @uses self::VALUE_FED_EX_INTERNATIONAL_FIRST
     * @uses self::VALUE_FED_EX_INTERNATIONAL_PRIORITY
     * @uses self::VALUE_FED_EX_INTERNATIONAL_ECONOMY
     * @uses self::VALUE_FED_EX_INTERNATIONAL_GROUND
     * @uses self::VALUE_ECONOMY_SHIPPING_FROM_OUTSIDE_US
     * @uses self::VALUE_EXPEDITED_SHIPPING_FROM_OUTSIDE_US
     * @uses self::VALUE_STANDARD_SHIPPING_FROM_OUTSIDE_US
     * @uses self::VALUE_UK_ECONOMY_SHIPPING_FROM_OUTSIDE
     * @uses self::VALUE_UK_EXPEDITED_SHIPPING_FROM_OUTSIDE
     * @uses self::VALUE_UK_STANDARD_SHIPPING_FROM_OUTSIDE
     * @uses self::VALUE_DE_SPARVERSAND_AUS_DEM_AUSLAND
     * @uses self::VALUE_DE_STANDARDVERSAND_AUS_DEM_AUSLAND
     * @uses self::VALUE_DE_EXPRESSVERSAND_AUS_DEM_AUSLAND
     * @uses self::VALUE_DE_DHL_2_KGPAKET
     * @uses self::VALUE_INTERNATIONAL_PRIORITY_SHIPPING
     * @uses self::VALUE_SAME_DAY_SHIPPING
     * @uses self::VALUE_UK_ROYAL_MAIL_NEXT_DAY
     * @uses self::VALUE_UK_ROYAL_MAIL_TRACKED
     * @uses self::VALUE_E_BAY_NOW_IMMEDIATE_DELIVERY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPSGROUND,
            self::VALUE_UPS_3_RD_DAY,
            self::VALUE_UPS_2_ND_DAY,
            self::VALUE_UPSNEXT_DAY,
            self::VALUE_USPSPRIORITY,
            self::VALUE_USPSPARCEL,
            self::VALUE_USPSSTANDARD_POST,
            self::VALUE_USPSMEDIA,
            self::VALUE_USPSFIRST_CLASS,
            self::VALUE_SHIPPING_METHOD_STANDARD,
            self::VALUE_SHIPPING_METHOD_EXPRESS,
            self::VALUE_USPSEXPRESS_MAIL,
            self::VALUE_UPSNEXT_DAY_AIR,
            self::VALUE_UPS_2_DAY_AIR_AM,
            self::VALUE_USPSEXPRESS_MAIL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSEXPRESS_MAIL_PADDED_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_PADDED_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_LEGAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSEXPRESS_MAIL_LEGAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_A,
            self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_B,
            self::VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_C,
            self::VALUE_USPSEXPRESS_MAIL_FLAT_RATE_BOX,
            self::VALUE_OTHER,
            self::VALUE_LOCAL_DELIVERY,
            self::VALUE_NOT_SELECTED,
            self::VALUE_INTERNATIONAL_NOT_SELECTED,
            self::VALUE_STANDARD_INTERNATIONAL,
            self::VALUE_EXPEDITED_INTERNATIONAL,
            self::VALUE_USPSGLOBAL_EXPRESS,
            self::VALUE_USPSGLOBAL_PRIORITY,
            self::VALUE_USPSECONOMY_PARCEL,
            self::VALUE_USPSECONOMY_LETTER,
            self::VALUE_USPSAIRMAIL_LETTER,
            self::VALUE_USPSAIRMAIL_PARCEL,
            self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS,
            self::VALUE_UPSWORLD_WIDE_EXPRESS,
            self::VALUE_UPSWORLD_WIDE_EXPEDITED,
            self::VALUE_UPSWORLDWIDE_SAVER,
            self::VALUE_UPSSTANDARD_TO_CANADA,
            self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_SMALL_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LARGE_FLAT_RATE_BOX,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_BOX,
            self::VALUE_OTHER_INTERNATIONAL,
            self::VALUE_AT_STANDARD_DISPATCH,
            self::VALUE_AT_INSURED_DISPATCH,
            self::VALUE_AT_WRITING,
            self::VALUE_AT_COD,
            self::VALUE_AT_EXPRESS_OR_COURIER,
            self::VALUE_AT_INSURED_EXPRESS_OR_COURIER,
            self::VALUE_AT_SPECIAL_DISPATCH,
            self::VALUE_AT_INSURED_SPECIAL_DISPATCH,
            self::VALUE_AT_SONSTIGE,
            self::VALUE_AT_UNVERSICHERTER_VERSAND_INTERNATIONAL,
            self::VALUE_AT_VERSICHERTER_VERSAND_INTERNATIONAL,
            self::VALUE_AT_SONSTIGER_VERSAND_INTERNATIONAL,
            self::VALUE_AT_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL,
            self::VALUE_AT_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL,
            self::VALUE_AT_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_AT_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_AT_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_AT_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_AU_REGULAR,
            self::VALUE_AU_EXPRESS,
            self::VALUE_AU_REGISTERED,
            self::VALUE_AU_COURIER,
            self::VALUE_AU_OTHER,
            self::VALUE_AU_EMSINTERNATIONAL_COURIER_PARCELS,
            self::VALUE_AU_EMSINTERNATIONAL_COURIER_DOCUMENTS,
            self::VALUE_AU_EXPRESS_POST_INTERNATIONAL_DOCUMENTS,
            self::VALUE_AU_AIR_MAIL_INTERNATIONAL,
            self::VALUE_AU_ECONOMY_AIR_INTERNATIONAL,
            self::VALUE_AU_SEA_MAIL_INTERNATIONAL,
            self::VALUE_AU_STANDARD_INTERNATIONAL,
            self::VALUE_AU_EXPEDITED_INTERNATIONAL,
            self::VALUE_AU_OTHER_INTERNATIONAL,
            self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_1_KG,
            self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_500_G,
            self::VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PARCEL,
            self::VALUE_AU_EXPEDITED_DELIVERY_FROM_OUTSIDE_AU,
            self::VALUE_AU_ECONOMY_DELIVERY_FROM_OUTSIDE_AU,
            self::VALUE_AU_STANDARD_DELIVERY_FROM_OUTSIDE_AU,
            self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_METRO_15_KG,
            self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_5_KG,
            self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_3_KG,
            self::VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_1_KG,
            self::VALUE_AU_EXPRESS_DELIVERY,
            self::VALUE_AU_STANDARD_DELIVERY,
            self::VALUE_AU_E_BAY_AUS_POST_3_KG_FLAT_RATE_SATCHEL,
            self::VALUE_AU_E_BAY_AUS_POST_500_G_FLAT_RATE_SATCHEL,
            self::VALUE_AU_FREIGHT,
            self::VALUE_BEFR_STANDARD_DELIVERY,
            self::VALUE_BEFR_PRIORITY_DELIVERY,
            self::VALUE_BEFR_PARCEL_POST,
            self::VALUE_BEFR_REGISTERED_MAIL,
            self::VALUE_BEFR_OTHER,
            self::VALUE_BEFR_DE_POST_INTERNATIONAL,
            self::VALUE_BEFR_UPSINTERNATIONAL,
            self::VALUE_BEFR_FED_EX_INTERNATIONAL,
            self::VALUE_BEFR_DHLINTERNATIONAL,
            self::VALUE_BEFR_TPGPOST_TNTINTERNATIONAL,
            self::VALUE_BEFR_STANDARD_INTERNATIONAL,
            self::VALUE_BEFR_EXPEDITED_INTERNATIONAL,
            self::VALUE_BEFR_OTHER_INTERNATIONAL,
            self::VALUE_BEFR_LA_POSTE_INTERNATIONAL,
            self::VALUE_BEFR_LA_POSTE_STANDARD_SHIPPING,
            self::VALUE_BEFR_LA_POSTE_CERTIFIED_SHIPPING,
            self::VALUE_BEFR_LA_POSTE_TAXIPOST_LLS,
            self::VALUE_BEFR_LA_POSTE_TAXIPOST_24_H,
            self::VALUE_BEFR_LA_POSTE_TAXIPOST_SECUR,
            self::VALUE_BEFR_POST_INTERNATIONAL_STANDARD,
            self::VALUE_BEFR_POST_INTERNATIONAL_REGISTERED,
            self::VALUE_BEFR_TNTINTERNATIONAL,
            self::VALUE_BEFR_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_BEFR_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_BEFR_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_BEFR_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_BENL_STANDARD_DELIVERY,
            self::VALUE_BENL_PRIORITY_DELIVERY,
            self::VALUE_BENL_PARCEL_POST,
            self::VALUE_BENL_REGISTERED_MAIL,
            self::VALUE_BENL_OTHER,
            self::VALUE_BENL_DE_POST_INTERNATIONAL,
            self::VALUE_BENL_UPSINTERNATIONAL,
            self::VALUE_BENL_FED_EX_INTERNATIONAL,
            self::VALUE_BENL_DHLINTERNATIONAL,
            self::VALUE_BENL_TPGPOST_TNTINTERNATIONAL,
            self::VALUE_BENL_STANDARD_INTERNATIONAL,
            self::VALUE_BENL_EXPEDITED_INTERNATIONAL,
            self::VALUE_BENL_OTHER_INTERNATIONAL,
            self::VALUE_BENL_LA_POSTE_INTERNATIONAL,
            self::VALUE_BENL_DE_POST_STANDARD_SHIPPING,
            self::VALUE_BENL_DE_POST_CERTIFIED_SHIPPING,
            self::VALUE_BENL_DE_POST_TAXIPOST_LLS,
            self::VALUE_BENL_DE_POST_TAXIPOST_24_H,
            self::VALUE_BENL_DE_POST_TAXIPOST_SECUR,
            self::VALUE_BENL_OTHER_SHIPPING_METHODS,
            self::VALUE_BENL_POST_INTERNATIONAL_STANDARD,
            self::VALUE_BENL_POST_INTERNATIONAL_REGISTERED,
            self::VALUE_BENL_TNTINTERNATIONAL,
            self::VALUE_BENL_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_BENL_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_BENL_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_BENL_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_CA_STANDARD_DELIVERY,
            self::VALUE_CA_EXPEDITED_DELIVERY,
            self::VALUE_CA_POST_LETTERMAIL,
            self::VALUE_CA_POST_REGULAR_PARCEL,
            self::VALUE_CA_POST_EXPEDITED_PARCEL,
            self::VALUE_CA_POST_XPRESSPOST,
            self::VALUE_CA_POST_PRIORITY_COURIER,
            self::VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX,
            self::VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX,
            self::VALUE_CA_STANDARD_INTERNATIONAL,
            self::VALUE_CA_EXPEDITED_INTERNATIONAL,
            self::VALUE_CA_OTHER_INTERNATIONAL,
            self::VALUE_CA_POST_EXPEDITED_PARCEL_USA,
            self::VALUE_CA_POST_SMALL_PACKETS_USA,
            self::VALUE_CA_POST_XPRESSPOST_USA,
            self::VALUE_CA_POST_XPRESSPOST_INTERNATIONAL,
            self::VALUE_CA_POST_INTERNATIONAL_PARCEL_SURFACE,
            self::VALUE_CA_POST_INTERNATIONAL_PARCEL_AIR,
            self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL,
            self::VALUE_CA_PUROLATOR_INTERNATIONAL,
            self::VALUE_CA_POST_SMALL_PACKETS_USAGROUND,
            self::VALUE_CA_POST_SMALL_PACKETS_USAAIR,
            self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL_GROUND,
            self::VALUE_CA_SMALL_PACKETS_INTERNATIONAL_AIR,
            self::VALUE_CA_POST_USALETTER_POST,
            self::VALUE_CA_POST_INTERNATIONAL_LETTER_POST,
            self::VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX_USA,
            self::VALUE_CA_UPSEXPRESS_CANADA,
            self::VALUE_CA_UPSEXPRESS_SAVER_CANADA,
            self::VALUE_CA_UPSEXPEDITED_CANADA,
            self::VALUE_CA_UPSSTANDARD_CANADA,
            self::VALUE_CA_UPSEXPRESS_UNITED_STATES,
            self::VALUE_CA_UPSEXPEDITED_UNITED_STATES,
            self::VALUE_CA_UPS_3_DAY_SELECT_UNITED_STATES,
            self::VALUE_CA_UPSSTANDARD_UNITED_STATES,
            self::VALUE_CA_UPSWORLD_WIDE_EXPRESS,
            self::VALUE_CA_UPSWORLD_WIDE_EXPEDITED,
            self::VALUE_CA_PRIORITY_WORLDWIDE,
            self::VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX_USA,
            self::VALUE_CA_POST_TRACKED_PACKETS_USA,
            self::VALUE_CA_POST_TRACKED_PACKETS_INTERNATIONAL,
            self::VALUE_CA_FREIGHT,
            self::VALUE_CH_STANDARD_DISPATCH_APOST,
            self::VALUE_CH_STANDARD_DISPATCH_BPOST,
            self::VALUE_CH_INSURED_DISPATCH,
            self::VALUE_CH_WRITING,
            self::VALUE_CH_COD,
            self::VALUE_CH_EXPRESS_OR_COURIER,
            self::VALUE_CH_INSURED_EXPRESS_OR_COURIER,
            self::VALUE_CH_SPECIAL_DISPATCH,
            self::VALUE_CH_INSURED_SPECIAL_DISPATCH,
            self::VALUE_CH_SONSTIGE,
            self::VALUE_CH_SONSTIGER_VERSAND_INTERNATIONAL,
            self::VALUE_CH_ECONOMY_SENDUNGEN_INTERNATIONAL,
            self::VALUE_CH_PRIORITY_SENDUNGEN_INTERNATIONAL,
            self::VALUE_CH_URGENT_SENDUNGEN_INTERNATIONAL,
            self::VALUE_CH_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_CH_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_CH_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_CH_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_CN_PERSONAL_DELIVERY,
            self::VALUE_CN_REGULAR_PACKAGE,
            self::VALUE_CN_DELIVERY_COMPANY_EXPRESS,
            self::VALUE_CN_POST_OFFICE_EXPRESS,
            self::VALUE_CN_OTHERS,
            self::VALUE_CN_FAST_POST_OFFICE,
            self::VALUE_CN_EXPRESS_DELIVERY_SAME_CITY,
            self::VALUE_CN_EXPRESS_DELIVERY_OTHER_CITIES,
            self::VALUE_CN_STANDARD_INTERNATIONAL,
            self::VALUE_CN_EXPEDITED_INTERNATIONAL,
            self::VALUE_CN_OTHER_INTERNATIONAL,
            self::VALUE_CN_CODINTERNATIONAL,
            self::VALUE_CN_STANDARD_MAILING_INTERNATIONAL,
            self::VALUE_CN_REGULAR_LOGISTICS_INTERNATIONAL,
            self::VALUE_CN_EMSINTERNATIONAL,
            self::VALUE_CN_OTHERS_INTERNATIONAL,
            self::VALUE_DE_STANDARD_DISPATCH,
            self::VALUE_DE_INSURED_DISPATCH,
            self::VALUE_DE_WRITING,
            self::VALUE_DE_COD,
            self::VALUE_DE_EXPRESS_OR_COURIER,
            self::VALUE_DE_INSURED_EXPRESS_OR_COURIER,
            self::VALUE_DE_SPECIAL_DISPATCH,
            self::VALUE_DE_INSURED_SPECIAL_DISPATCH,
            self::VALUE_DE_UNVERSICHERTER_VERSAND,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF,
            self::VALUE_DE_E_BAY_DHLPAKET_24_X_7,
            self::VALUE_DE_DHLPOSTPAKET,
            self::VALUE_DE_DHLPACKCHEN,
            self::VALUE_DE_DEUTSCHE_POST_WARENSENDUNG,
            self::VALUE_DE_DEUTSCHE_POST_BUCHERSENDUNG,
            self::VALUE_DE_HERMES_PAKET_UNVERSICHERT,
            self::VALUE_DE_HERMES_PAKET_VERSICHERT,
            self::VALUE_DE_ILOXX_TRANSPORT_XXL,
            self::VALUE_DE_ILOXX_UBERNACHT_EXPRESS,
            self::VALUE_DE_ILOXX_STANDARD,
            self::VALUE_DE_SONSTIGE,
            self::VALUE_DE_UNVERSICHERTER_VERSAND_INTERNATIONAL,
            self::VALUE_DE_VERSICHERTER_VERSAND_INTERNATIONAL,
            self::VALUE_DE_DHLPOSTPAKET_INTERNATIONAL,
            self::VALUE_DE_DHLPACKCHEN_INTERNATIONAL,
            self::VALUE_DE_SONSTIGER_VERSAND_INTERNATIONAL,
            self::VALUE_DE_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL,
            self::VALUE_DE_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF_LAND_INTERNATIONAL,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF_LUFT_INTERNATIONAL,
            self::VALUE_DE_ILOXX_EUROPA_INTERNATIONAL,
            self::VALUE_DE_ILOXX_WORLD_WIDE_INTERNATIONAL,
            self::VALUE_DE_PAKET,
            self::VALUE_DE_EXPRESS,
            self::VALUE_DE_DHLPAKET,
            self::VALUE_DE_DPBUECHER_WARENSENDUNG,
            self::VALUE_DE_HERMES_PAKET,
            self::VALUE_DE_ILOXX_TRANSPORT,
            self::VALUE_DE_SONSTIGE_DOMESTIC,
            self::VALUE_DE_EINSCHREIBEN,
            self::VALUE_DE_NACHNAME,
            self::VALUE_DE_SPECIAL_DELIVERY,
            self::VALUE_DE_UPS,
            self::VALUE_DE_DPD,
            self::VALUE_DE_GLS,
            self::VALUE_DE_PAKET_INTERNATIONAL,
            self::VALUE_DE_DHLPAKET_INTERNATIONAL,
            self::VALUE_DE_DHLPAKET_INTL_EXPRESS,
            self::VALUE_DE_SONSTIGE_INTERNATIONAL,
            self::VALUE_DE_EXPRESS_INTERNATIONAL,
            self::VALUE_DE_DPBRIEF_INTERNATIONAL,
            self::VALUE_DE_ILOXX_TRANSPORT_INTERNATIONAL,
            self::VALUE_DE_HERMES_PAKET_INTERNATIONAL,
            self::VALUE_DE_UPSINTERNATIONAL,
            self::VALUE_DE_DPDINTERNATIONAL,
            self::VALUE_DE_GLSINTERNATIONAL,
            self::VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP_KAEUFER,
            self::VALUE_DE_HERMES_PAKET_SHOP_2_SHOP_KAEUFER,
            self::VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP,
            self::VALUE_DE_HERMES_PAKET_SHOP_2_SHOP,
            self::VALUE_DE_HERMES_PAKET_SPERRGUT,
            self::VALUE_DE_E_BAY_HERMES_PAKET_SPERRGUT_SHOP_2_SHOP,
            self::VALUE_DE_DHLPAECKCHEN_PACKSTATION,
            self::VALUE_DE_DHLPAKET_PACKSTATION,
            self::VALUE_DE_E_BAY_DHLPAECKCHEN,
            self::VALUE_DE_DHLSTAR_PAECKCHEN,
            self::VALUE_DE_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_ES_CARTAS_NACIONALES_HASTA_20,
            self::VALUE_ES_CARTAS_NACIONALES_DE_MAS_20,
            self::VALUE_ES_CARTAS_INTERNACIONALES_HASTA_20,
            self::VALUE_ES_CARTAS_INTERNACIONALES_DE_MAS_20,
            self::VALUE_ES_PAQUETE_AZUL_HASTA_2_KG,
            self::VALUE_ES_PAQUETE_AZUL_DE_MAS_2_KG,
            self::VALUE_ES_PAQUETE_INTERNACIONAL_ECONOMICO,
            self::VALUE_ES_URGENTE,
            self::VALUE_ES_OTROS,
            self::VALUE_ES_STANDARD_INTERNATIONAL,
            self::VALUE_ES_EXPEDITED_INTERNATIONAL,
            self::VALUE_ES_OTHER_INTERNATIONAL,
            self::VALUE_ES_CARTAS_POSTAL_INTERNATIONAL,
            self::VALUE_ES_EMS_POSTAL_EXPRESS_INTERNATIONAL,
            self::VALUE_ES_ECONOMY_PACKET_INTERNATIONAL,
            self::VALUE_ES_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_ES_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_ES_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_ES_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_ES_ENTREGA_KIALA_8_KG,
            self::VALUE_FR_CHRONOPOSTE_INTERNATIONAL_CLASSIC,
            self::VALUE_FR_COLIPOSTE_COLISSIMO_DIRECT,
            self::VALUE_FR_DHLEXPRESS_EUROPACK,
            self::VALUE_FR_UPSSTANDARD,
            self::VALUE_FR_POST_OFFICE_LETTER,
            self::VALUE_FR_POST_OFFICE_LETTER_FOLLOWED,
            self::VALUE_FR_POST_OFFICE_LETTER_RECOMMENDED,
            self::VALUE_FR_COLIPOSTE_COLISSIMO,
            self::VALUE_FR_COLIPOSTE_COLISSIMO_RECOMMENDED,
            self::VALUE_FR_UPSSTANDARD_AGAINST_REFUND,
            self::VALUE_FR_AUTRE,
            self::VALUE_FR_ECOPLI,
            self::VALUE_FR_COLIECO,
            self::VALUE_FR_AUTE_MODE_DENVOI_DE_COLIS,
            self::VALUE_FR_REMISE_EN_MAIN_PROPRE,
            self::VALUE_FR_STANDARD_INTERNATIONAL,
            self::VALUE_FR_EXPEDITED_INTERNATIONAL,
            self::VALUE_FR_OTHER_INTERNATIONAL,
            self::VALUE_FR_LA_POSTE_INTERNATIONAL_PRIORITY_COURIER,
            self::VALUE_FR_LA_POSTE_INTERNATIONAL_ECONOMY_COURIER,
            self::VALUE_FR_LA_POSTE_COLISSIMO_INTERNATIONAL,
            self::VALUE_FR_LA_POSTE_COLIS_ECONOMIQUE_INTERNATIONAL,
            self::VALUE_FR_LA_POSTE_COLISSIMO_EMBALLAGE_INTERNATIONAL,
            self::VALUE_FR_CHRONOPOST_CLASSIC_INTERNATIONAL,
            self::VALUE_FR_CHRONOPOST_PREMIUM_INTERNATIONAL,
            self::VALUE_FR_UPSSTANDARD_INTERNATIONAL,
            self::VALUE_FR_UPSEXPRESS_INTERNATIONAL,
            self::VALUE_FR_DHLINTERNATIONAL,
            self::VALUE_FR_LA_POSTE_LETTER_MAX,
            self::VALUE_FR_KIALA_DELIVERY,
            self::VALUE_FR_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_IN_REGULAR,
            self::VALUE_IN_EXPRESS,
            self::VALUE_IN_NATIONAL_COD,
            self::VALUE_IN_COURIER,
            self::VALUE_IN_LOCAL_COD,
            self::VALUE_IN_STANDARD_INTERNATIONAL,
            self::VALUE_IN_EXPEDITED_INTERNATIONAL,
            self::VALUE_IN_OTHER_INTERNATIONAL,
            self::VALUE_IN_FLAT_RATE_COD,
            self::VALUE_IN_BUYER_PICKS_UP_AND_PAYS,
            self::VALUE_IT_REGULAR_MAIL,
            self::VALUE_IT_PRIORITY_MAIL,
            self::VALUE_IT_MAIL_REGISTERED_LETTER,
            self::VALUE_IT_MAIL_REGISTERED_LETTER_WITH_MARK,
            self::VALUE_IT_INSURED_MAIL,
            self::VALUE_IT_QUICK_MAIL,
            self::VALUE_IT_REGULAR_PACKAGE,
            self::VALUE_IT_QUICK_PACKAGE_1,
            self::VALUE_IT_QUICK_PACKAGE_3,
            self::VALUE_IT_EXPRESS_COURIER,
            self::VALUE_IT_EXPRESS_PACKAGE_MAXI,
            self::VALUE_IT_STANDARD_INTERNATIONAL,
            self::VALUE_IT_EXPEDITED_INTERNATIONAL,
            self::VALUE_IT_OTHER_INTERNATIONAL,
            self::VALUE_IT_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_NL_STANDARD_DELIVERY,
            self::VALUE_NL_PARCEL_POST,
            self::VALUE_NL_REGISTERED_MAIL,
            self::VALUE_NL_OTHER,
            self::VALUE_NL_TPGPOST_TNTINTERNATIONAL,
            self::VALUE_NL_UPSINTERNATIONAL,
            self::VALUE_NL_FED_EX_INTERNATIONAL,
            self::VALUE_NL_DHLINTERNATIONAL,
            self::VALUE_NL_DPDGBRINTERNATIONAL,
            self::VALUE_NL_GLSBUSINESS_INTERNATIONAL,
            self::VALUE_NL_STANDARD_INTERNATIONAL,
            self::VALUE_NL_EXPEDITED_INTERNATIONAL,
            self::VALUE_NL_OTHER_INTERNATIONAL,
            self::VALUE_NL_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_NL_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_NL_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_NL_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_TW_REGISTERED_MAIL,
            self::VALUE_TW_UNREGISTERED_MAIL,
            self::VALUE_TW_COD,
            self::VALUE_TW_DWELLING_MATCH_POST,
            self::VALUE_TW_DWELLING_MATCH_COD,
            self::VALUE_TW_SELF_PICKUP,
            self::VALUE_TW_PARCEL_POST,
            self::VALUE_TW_EXPRESS_MAIL,
            self::VALUE_TW_OTHER,
            self::VALUE_TW_CPINTERNATIONAL_LETTER_POST,
            self::VALUE_TW_CPINTERNATIONAL_PARCEL_POST,
            self::VALUE_TW_CPINTERNATIONAL_REGISTERED_LETTER_POST,
            self::VALUE_TW_CPINTERNATIONAL_REGISTERED_PARCEL_POST,
            self::VALUE_TW_CPINTERNATIONAL_EMS,
            self::VALUE_TW_CPINTERNATIONAL_OCEAN_SHIPPING_PARCEL,
            self::VALUE_TW_FED_EX_INTERNATIONAL_PRIORITY,
            self::VALUE_TW_FED_EX_INTERNATIONAL_ECONOMY,
            self::VALUE_TW_UPSWORLDWIDE_EXPEDITED,
            self::VALUE_TW_UPSWORLDWIDE_EXPRESS,
            self::VALUE_TW_UPSWORLDWIDE_EXPRESS_PLUS,
            self::VALUE_TW_OTHER_INTERNATIONAL,
            self::VALUE_UK_ROYAL_MAIL_FIRST_CLASS_STANDARD,
            self::VALUE_UK_ROYAL_MAIL_SECOND_CLASS_STANDARD,
            self::VALUE_UK_ROYAL_MAIL_FIRST_CLASS_RECORDED,
            self::VALUE_UK_ROYAL_MAIL_SECOND_CLASS_RECORDED,
            self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY,
            self::VALUE_UK_ROYAL_MAIL_STANDARD_PARCEL,
            self::VALUE_UK_PARCELFORCE_24,
            self::VALUE_UK_PARCELFORCE_48,
            self::VALUE_UK_OTHER_COURIER,
            self::VALUE_UK_MY_HERMES_DOOR_TO_DOOR_SERVICE,
            self::VALUE_UK_COLLECT_DROP_AT_STORE_DELIVERY_TO_DOOR,
            self::VALUE_UK_SELLERS_STANDARD_RATE,
            self::VALUE_UK_COLLECT_IN_PERSON,
            self::VALUE_UK_SELLERS_STANDARD_INTERNATIONAL_RATE,
            self::VALUE_UK_ROYAL_MAIL_AIRMAIL_INTERNATIONAL,
            self::VALUE_UK_ROYAL_MAIL_AIRSURE_INTERNATIONAL,
            self::VALUE_UK_ROYAL_MAIL_SURFACE_MAIL_INTERNATIONAL,
            self::VALUE_UK_ROYAL_MAIL_INTERNATIONAL_SIGNED_FOR,
            self::VALUE_UK_ROYAL_MAIL_HMFORCES_MAIL_INTERNATIONAL,
            self::VALUE_UK_PARCEL_FORCE_INTERNATIONAL_DATAPOST,
            self::VALUE_UK_PARCEL_FORCE_IRELAND_24_INTERNATIONAL,
            self::VALUE_UK_PARCEL_FORCE_EURO_48_INTERNATIONAL,
            self::VALUE_UK_PARCEL_FORCE_INTERNATIONAL_SCHEDULED,
            self::VALUE_UK_OTHER_COURIER_OR_DELIVERY_INTERNATIONAL,
            self::VALUE_UK_COLLECT_IN_PERSON_INTERNATIONAL,
            self::VALUE_UK_PARCEL_FORCE_INTL_EXPRESS,
            self::VALUE_UK_PARCEL_FORCE_INTL_VALUE,
            self::VALUE_UK_PARCEL_FORCE_INTL_ECONOMY,
            self::VALUE_UK_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_UK_INTL_TRACKED_POSTAGE,
            self::VALUE_IE_SELLERS_STANDARD_RATE,
            self::VALUE_IE_FIRST_CLASS_LETTER_SERVICE,
            self::VALUE_IE_SWIFT_POST_NATIONAL,
            self::VALUE_IE_REGISTERED_POST,
            self::VALUE_IE_EMSSDSCOURIER,
            self::VALUE_IE_ECONOMY_SDSCOURIER,
            self::VALUE_IE_OTHER_COURIER,
            self::VALUE_IE_COLLECTION_IN_PERSON,
            self::VALUE_IE_SELLERS_STANDARD_RATE_INTERNATIONAL,
            self::VALUE_IE_INTERNATIONAL_ECONOMY_SERVICE,
            self::VALUE_IE_INTERNATIONAL_PRIORITY_SERVICE,
            self::VALUE_IE_SWIFT_POST_EXPRESS_INTERNATIONAL,
            self::VALUE_IE_SWIFT_POST_INTERNATIONAL,
            self::VALUE_IE_EMSSDSCOURIER_INTERNATIONAL,
            self::VALUE_IE_ECONOMY_SDSCOURIER_INTERNATIONAL,
            self::VALUE_IE_OTHER_COURIER_INTERNATIONAL,
            self::VALUE_IE_COLLECTION_IN_PERSON_INTERNATIONAL,
            self::VALUE_IE_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_IE_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_IE_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_IE_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_PL_DOMESTIC_REGULAR,
            self::VALUE_PL_DOMESTIC_SPECIAL,
            self::VALUE_PL_ECONOMY_DELIVERY_FROM_ABROAD,
            self::VALUE_PL_STANDARD_DELIVERY_FROM_ABROAD,
            self::VALUE_PL_EXPRESS_DELIVERY_FROM_ABROAD,
            self::VALUE_PL_TRACKED_DELIVERY_FROM_ABROAD,
            self::VALUE_FREIGHT_SHIPPING,
            self::VALUE_FREIGHT_OTHER_SHIPPING,
            self::VALUE_FREIGHT,
            self::VALUE_FREIGHT_SHIPPING_INTERNATIONAL,
            self::VALUE_USPSGROUND,
            self::VALUE_SHIPPING_METHOD_OVERNIGHT,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_USPSPRIORITY_FLAT_RATE_ENVELOPE,
            self::VALUE_USPSPRIORITY_FLAT_RATE_BOX,
            self::VALUE_USPSGLOBAL_PRIORITY_SMALL_ENVELOPE,
            self::VALUE_USPSGLOBAL_PRIORITY_LARGE_ENVELOPE,
            self::VALUE_USPSEXPRESS_FLAT_RATE_ENVELOPE,
            self::VALUE_UPSWORLD_WIDE_EXPRESS_BOX_10_KG,
            self::VALUE_UPSWORLD_WIDE_EXPRESS_BOX_25_KG,
            self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_10_KG,
            self::VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_25_KG,
            self::VALUE_HK_LOCAL_PICK_UP_ONLY,
            self::VALUE_HK_LOCAL_COURIER,
            self::VALUE_HK_DOMESTIC_REGULAR_SHIPPING,
            self::VALUE_HK_DOMESTIC_SPECIAL_SHIPPING,
            self::VALUE_HK_INTERNATIONAL_REGULAR_SHIPPING,
            self::VALUE_HK_INTERNATIONAL_SPECIAL_SHIPPING,
            self::VALUE_SG_LOCAL_PICK_UP_ONLY,
            self::VALUE_SG_LOCAL_COURIER,
            self::VALUE_SG_DOMESTIC_STANDARD_MAIL,
            self::VALUE_SG_DOMESTIC_NON_STANDARD_MAIL,
            self::VALUE_SG_DOMESTIC_SPEEDPOST_ISLANDWIDE,
            self::VALUE_SG_INTERNATIONAL_STANDARD_MAIL,
            self::VALUE_SG_INTERNATIONAL_EXPRESS_MAIL_SERVICE,
            self::VALUE_SG_INTERNATIONAL_COURIER,
            self::VALUE_BENL_DE_POST_ZENDING_NONPRIOR,
            self::VALUE_BENL_DE_POST_ZENDING_PRIOR,
            self::VALUE_BENL_DE_POST_ZENDING_AANGETEKEND,
            self::VALUE_BENL_KILOPOST_PAKJE,
            self::VALUE_BENL_TAXIPOST,
            self::VALUE_BENL_KIALA_AFHAALPUNT,
            self::VALUE_BENL_VASTE_KOSTEN_STANDAARD_VERZENDING,
            self::VALUE_BENL_VASTE_KOSTEN_VERSNELDE_VERZENDING,
            self::VALUE_BENL_VERZEKERDE_VERZENDING,
            self::VALUE_BEFR_LA_POSTE_ENVOI_NONPRIOR,
            self::VALUE_BEFR_LA_POSTE_ENVOI_PRIOR,
            self::VALUE_BEFR_LA_POSTE_ENVOI_RECOMMANDE,
            self::VALUE_BEFR_PAQUET_KILOPOST,
            self::VALUE_BEFR_TAXIPOST,
            self::VALUE_BEFR_POINT_RETRAIT_KIALA,
            self::VALUE_BEFR_LIVRAISON_STANDARD_PRIXFOR_FAITAIRE,
            self::VALUE_BEFR_LIVRAISON_EXPRESS_PRIXFOR_FAITAIRE,
            self::VALUE_BEFR_LIVRAISON_SECURISE,
            self::VALUE_BENL_DE_POST_ZENDING_PRIORINTERNATIONAL,
            self::VALUE_BENL_DE_POST_ZENDING_NONPRIORINTERNATIONAL,
            self::VALUE_BENL_DE_POST_ZENDING_AANGETEKEND_INTERNATIONAL,
            self::VALUE_BENL_KILOPOST_PAKJE_INTERNATIONAL,
            self::VALUE_BENL_TAXIPOST_EXPRESSVERZENDING,
            self::VALUE_BENL_VERZEKERDE_VERZENDING_INTERNATIONAL,
            self::VALUE_BEFR_LA_POSTEENVOIE_PRIOR,
            self::VALUE_BEFR_LA_POSTEENVOIE_NONPRIOR,
            self::VALUE_BEFR_LA_POSTEENVOIE_RECOMMANDE,
            self::VALUE_BEFR_PAQUET_KILOPOST_INTERNATIONALE,
            self::VALUE_BEFR_EXPRESS_TAXIPOST,
            self::VALUE_BEFR_LIVRAISON_STANDARD_INTERNATIONALE_PRIXFOR_FAITAIRE,
            self::VALUE_BEFR_LIVRAISON_EXPRESS_INTERNATIONALE_PRIXFOR_FAITAIRE,
            self::VALUE_BEFR_LIVRAISON_SECURISE_INTERNATIONAL,
            self::VALUE_FR_CHRONOPOST,
            self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_NEXT_DAY,
            self::VALUE_CA_POST_LIGHT_PACKET_INTERNATIONAL,
            self::VALUE_CA_POST_LIGHT_PACKET_USA,
            self::VALUE_PL_DHLINTERNATIONAL,
            self::VALUE_PL_INTERNATIONAL_REGULAR,
            self::VALUE_PL_INTERNATIONAL_SPECIAL,
            self::VALUE_PL_UPSINTERNATIONAL,
            self::VALUE_CAFR_STANDARD_DELIVERY,
            self::VALUE_CAFR_EXPEDITED_DELIVERY,
            self::VALUE_CAFR_POST_LETTERMAIL,
            self::VALUE_CAFR_POST_REGULAR_PARCEL,
            self::VALUE_CAFR_POST_EXPEDITED_PARCEL,
            self::VALUE_CAFR_POST_XPRESSPOST,
            self::VALUE_CAFR_POST_PRIORITY_COURIER,
            self::VALUE_CAFR_STANDARD_INTERNATIONAL,
            self::VALUE_CAFR_EXPEDITED_INTERNATIONAL,
            self::VALUE_CAFR_OTHER_INTERNATIONAL,
            self::VALUE_CAFR_POST_EXPEDITED_PARCEL_USA,
            self::VALUE_CAFR_POST_SMALL_PACKETS_USA,
            self::VALUE_CAFR_POST_XPRESSPOST_USA,
            self::VALUE_CAFR_POST_XPRESSPOST_INTERNATIONAL,
            self::VALUE_CAFR_POST_INTERNATIONAL_PARCEL_SURFACE,
            self::VALUE_CAFR_POST_INTERNATIONAL_PARCEL_AIR,
            self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL,
            self::VALUE_CAFR_PUROLATOR_INTERNATIONAL,
            self::VALUE_CAFR_POST_SMALL_PACKETS_USAGROUND,
            self::VALUE_CAFR_POST_SMALL_PACKETS_USAAIR,
            self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_GROUND,
            self::VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_AIR,
            self::VALUE_CAFR_POST_USALETTER_POST,
            self::VALUE_CAFR_POST_INTERNATIONAL_LETTER_POST,
            self::VALUE_CAFR_UPSEXPRESS_CANADA,
            self::VALUE_CAFR_UPSEXPRESS_SAVER_CANADA,
            self::VALUE_CAFR_UPSEXPEDITED_CANADA,
            self::VALUE_CAFR_UPSSTANDARD_CANADA,
            self::VALUE_CAFR_UPSEXPRESS_UNITED_STATES,
            self::VALUE_CAFR_UPSEXPEDITED_UNITED_STATES,
            self::VALUE_CAFR_UPS_3_DAY_SELECT_UNITED_STATES,
            self::VALUE_CAFR_UPSSTANDARD_UNITED_STATES,
            self::VALUE_CAFR_UPSWORLD_WIDE_EXPRESS,
            self::VALUE_CAFR_UPSWORLD_WIDE_EXPEDITED,
            self::VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_9_AM,
            self::VALUE_USPSFIRST_CLASS_MAIL_INTERNATIONAL,
            self::VALUE_USPSPRIORITY_MAIL_INTERNATIONAL,
            self::VALUE_USPSEXPRESS_MAIL_INTERNATIONAL,
            self::VALUE_CH_STANDARD_INTERNATIONAL,
            self::VALUE_CH_EXPEDITED_INTERNATIONAL,
            self::VALUE_CH_SONSTIGER_VERSAND_SIEHE_ARTIKELBESCHREIBUNG,
            self::VALUE_TW_STANDARD_INTERNATIONAL_FIXED_RATE,
            self::VALUE_TW_EXPEDITED_INTERNATIONAL_FIXED_RATE,
            self::VALUE_USPSGLOBAL_EXPRESS_GUARANTEED,
            self::VALUE_AU_REGULAR_WITH_INSURANCE,
            self::VALUE_AU_EXPRESS_WITH_INSURANCE,
            self::VALUE_DE_DEUTSCHE_POST_WARENSENDUNG_INTERNATIONAL,
            self::VALUE_DE_DEUTSCHE_POST_BYENDUNG,
            self::VALUE_DE_HERMES_PAKET_UNVERSICHERT_INTERNATIONAL,
            self::VALUE_DE_HERMES_PAKET_VERSICHERT_INTERNATIONAL,
            self::VALUE_DE_I_LOXX_TRANSPORT_XXLINTERNATIONAL,
            self::VALUE_DE_I_LOXX_UBERNACHT_EXPRESS_INTERNATIONAL,
            self::VALUE_DE_I_LOXX_STANDARD_INTERNATIONAL,
            self::VALUE_DE_STANDARD_INTERNATIONAL,
            self::VALUE_DE_EXPEDITED_INTERNATIONAL,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_ECON,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_PRI,
            self::VALUE_AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL,
            self::VALUE_AT_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR,
            self::VALUE_AT_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR,
            self::VALUE_AT_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_AT_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_AT_SPECIAL_DISPATCH_INTERNATIONAL,
            self::VALUE_AT_INSURED_SPECIAL_DISPATCH_INTERNATIONAL,
            self::VALUE_AT_STANDARD_INTERNATIONAL,
            self::VALUE_AT_EXPEDITED_INTERNATIONAL,
            self::VALUE_AT_OTHER_INTERNATIONAL_SHIPPING,
            self::VALUE_CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL,
            self::VALUE_CH_UNVERSICHERTER_VERSAND,
            self::VALUE_CH_VERSICHERTER_VERSAND,
            self::VALUE_CH_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR,
            self::VALUE_CH_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR,
            self::VALUE_CH_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_CH_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_CH_SONDERVERSAND_ZBSPERRGUT_KFZ,
            self::VALUE_CH_VERSICHERTER_SONDERVERSAND_ZBSPERRGUT_KFZ,
            self::VALUE_CH_STANDARDVERSAND_APOST_PRIORITY,
            self::VALUE_CH_STANDARDVERSAND_BPOST_ECONOMY,
            self::VALUE_DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL,
            self::VALUE_DE_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR,
            self::VALUE_DE_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR,
            self::VALUE_DE_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_DE_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL,
            self::VALUE_DE_SONDERVERSAND_ZBMOBEL_KFZ,
            self::VALUE_DE_VERSICHERTER_SONDERVERSAND_ZBMOBEL_KFZ,
            self::VALUE_DE_DEUTSCHE_POST_BRIEF_INTERNATIONAL,
            self::VALUE_IE_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE,
            self::VALUE_IE_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE,
            self::VALUE_IE_OTHER_INTERNATIONAL_POSTAGE,
            self::VALUE_UK_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE,
            self::VALUE_UK_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE,
            self::VALUE_UK_OTHER_INTERNATIONAL_POSTAGE,
            self::VALUE_FR_CHRONOPOST_CHRONO_RELAIS,
            self::VALUE_FR_CHRONO_10,
            self::VALUE_FR_CHRONO_13,
            self::VALUE_FR_CHRONO_18,
            self::VALUE_FR_CHRONOPOST_EXPRESS_INTERNATIONAL,
            self::VALUE_PICKUP,
            self::VALUE_DELIVERY,
            self::VALUE_CA_PICKUP,
            self::VALUE_DE_PICKUP,
            self::VALUE_AU_PICKUP,
            self::VALUE_AU_SMALL_PARCELS,
            self::VALUE_AU_SMALL_PARCEL_WITH_TRACKING,
            self::VALUE_AU_SMALL_PARCEL_WITH_TRACKING_AND_SIGNATURE,
            self::VALUE_AU_REGULAR_PARCEL_WITH_TRACKING,
            self::VALUE_AU_REGULAR_PARCEL_WITH_TRACKING_AND_SIGNATURE,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_5_KG,
            self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_500_G,
            self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_3_KG,
            self::VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_5_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_500_G,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_3_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_500_G,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_3_KG,
            self::VALUE_AU_EXPRESS_COURIER_INTERNATIONAL,
            self::VALUE_AU_EXPRESS_POST_INTERNATIONAL,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_C_5,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_B_4,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_2_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_3_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_5_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_10_KG,
            self::VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_20_KG,
            self::VALUE_AU_REGISTERED_PARCEL_POST,
            self::VALUE_AU_REGISTERED_SMALL_PARCEL,
            self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_500_G,
            self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_3_KG,
            self::VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_5_KG,
            self::VALUE_AU_EXPRESS_POST_SATCHEL_500_G,
            self::VALUE_AU_EXPRESS_POST_SATCHEL_3_KG,
            self::VALUE_FR_PICKUP,
            self::VALUE_AT_PICKUP,
            self::VALUE_BENL_PICKUP,
            self::VALUE_BEFR_PICKUP,
            self::VALUE_CH_PICKUP,
            self::VALUE_IT_PICKUP,
            self::VALUE_NL_PICKUP,
            self::VALUE_PL_PICKUP,
            self::VALUE_ES_PICKUP,
            self::VALUE_SG_DELIVERY,
            self::VALUE_UK_OTHER_COURIER_24,
            self::VALUE_UK_OTHER_COURIER_48,
            self::VALUE_UK_OTHER_COURIER_3_DAYS,
            self::VALUE_UK_OTHER_COURIER_5_DAYS,
            self::VALUE_COURIER,
            self::VALUE_FED_EX_PRIORITY_OVERNIGHT,
            self::VALUE_FED_EX_STANDARD_OVERNIGHT,
            self::VALUE_FED_EX_2_DAY,
            self::VALUE_FED_EX_GROUND,
            self::VALUE_FED_EX_HOME_DELIVERY,
            self::VALUE_FED_EX_EXPRESS_SAVER,
            self::VALUE_FED_EX_GROUND_DISABLED,
            self::VALUE_FED_EX_HOME_DELIVERY_DISABLED,
            self::VALUE_FED_EX_INTERNATIONAL_FIRST,
            self::VALUE_FED_EX_INTERNATIONAL_PRIORITY,
            self::VALUE_FED_EX_INTERNATIONAL_ECONOMY,
            self::VALUE_FED_EX_INTERNATIONAL_GROUND,
            self::VALUE_ECONOMY_SHIPPING_FROM_OUTSIDE_US,
            self::VALUE_EXPEDITED_SHIPPING_FROM_OUTSIDE_US,
            self::VALUE_STANDARD_SHIPPING_FROM_OUTSIDE_US,
            self::VALUE_UK_ECONOMY_SHIPPING_FROM_OUTSIDE,
            self::VALUE_UK_EXPEDITED_SHIPPING_FROM_OUTSIDE,
            self::VALUE_UK_STANDARD_SHIPPING_FROM_OUTSIDE,
            self::VALUE_DE_SPARVERSAND_AUS_DEM_AUSLAND,
            self::VALUE_DE_STANDARDVERSAND_AUS_DEM_AUSLAND,
            self::VALUE_DE_EXPRESSVERSAND_AUS_DEM_AUSLAND,
            self::VALUE_DE_DHL_2_KGPAKET,
            self::VALUE_INTERNATIONAL_PRIORITY_SHIPPING,
            self::VALUE_SAME_DAY_SHIPPING,
            self::VALUE_UK_ROYAL_MAIL_NEXT_DAY,
            self::VALUE_UK_ROYAL_MAIL_TRACKED,
            self::VALUE_E_BAY_NOW_IMMEDIATE_DELIVERY,
        ];
    }
}
