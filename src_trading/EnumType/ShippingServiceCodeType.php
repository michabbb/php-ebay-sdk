<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShippingServiceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A shipping service used to ship an item. Applications should not depend on the completeness of <strong>ShippingServiceCodeType</strong>. Instead, applications should call GeteBayDetails, with a <strong>DetailName</strong> value of
 * <code>ShippingServiceDetails</code>, to return the complete list of shipping services. To check for the shipping services available for a specific site, specify the site ID in the header. <br/><br/> <span class="tablenote"> <strong>Note:</strong> It
 * is possible that some of the returned shipping services can no longer be used in the AddItem family of calls. To distinguish between the valid and invalid shipping services, look for the <strong>ValidForSellingFlow</strong> flag in the
 * <strong>ShippingServiceDetails</strong> node. If this flag is not returned for a specific shipping service, that shipping service can no longer be used in the AddItem family of calls. </span>
 * @subpackage Enumerations
 */
class ShippingServiceCodeType
{
    /**
     * Constant for value 'UPSGround'
     * @return string 'UPSGround'
     */
    const VALUE_UPSGROUND = 'UPSGround';
    /**
     * Constant for value 'UPS3rdDay'
     * @return string 'UPS3rdDay'
     */
    const VALUE_UPS_3_RD_DAY = 'UPS3rdDay';
    /**
     * Constant for value 'UPS2ndDay'
     * @return string 'UPS2ndDay'
     */
    const VALUE_UPS_2_ND_DAY = 'UPS2ndDay';
    /**
     * Constant for value 'UPSNextDay'
     * @return string 'UPSNextDay'
     */
    const VALUE_UPSNEXT_DAY = 'UPSNextDay';
    /**
     * Constant for value 'USPSPriority'
     * @return string 'USPSPriority'
     */
    const VALUE_USPSPRIORITY = 'USPSPriority';
    /**
     * Constant for value 'USPSParcel'
     * @return string 'USPSParcel'
     */
    const VALUE_USPSPARCEL = 'USPSParcel';
    /**
     * Constant for value 'USPSStandardPost'
     * @return string 'USPSStandardPost'
     */
    const VALUE_USPSSTANDARD_POST = 'USPSStandardPost';
    /**
     * Constant for value 'USPSMedia'
     * @return string 'USPSMedia'
     */
    const VALUE_USPSMEDIA = 'USPSMedia';
    /**
     * Constant for value 'USPSFirstClass'
     * @return string 'USPSFirstClass'
     */
    const VALUE_USPSFIRST_CLASS = 'USPSFirstClass';
    /**
     * Constant for value 'ShippingMethodStandard'
     * @return string 'ShippingMethodStandard'
     */
    const VALUE_SHIPPING_METHOD_STANDARD = 'ShippingMethodStandard';
    /**
     * Constant for value 'ShippingMethodExpress'
     * @return string 'ShippingMethodExpress'
     */
    const VALUE_SHIPPING_METHOD_EXPRESS = 'ShippingMethodExpress';
    /**
     * Constant for value 'USPSExpressMail'
     * @return string 'USPSExpressMail'
     */
    const VALUE_USPSEXPRESS_MAIL = 'USPSExpressMail';
    /**
     * Constant for value 'UPSNextDayAir'
     * @return string 'UPSNextDayAir'
     */
    const VALUE_UPSNEXT_DAY_AIR = 'UPSNextDayAir';
    /**
     * Constant for value 'UPS2DayAirAM'
     * @return string 'UPS2DayAirAM'
     */
    const VALUE_UPS_2_DAY_AIR_AM = 'UPS2DayAirAM';
    /**
     * Constant for value 'USPSExpressMailFlatRateEnvelope'
     * @return string 'USPSExpressMailFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_FLAT_RATE_ENVELOPE = 'USPSExpressMailFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailPaddedFlatRateEnvelope'
     * @return string 'USPSExpressMailPaddedFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailFlatRateEnvelope'
     * @return string 'USPSPriorityMailFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailSmallFlatRateBox'
     * @return string 'USPSPriorityMailSmallFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailSmallFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailFlatRateBox'
     * @return string 'USPSPriorityMailFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_FLAT_RATE_BOX = 'USPSPriorityMailFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailLargeFlatRateBox'
     * @return string 'USPSPriorityMailLargeFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailLargeFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailPaddedFlatRateEnvelope'
     * @return string 'USPSPriorityMailPaddedFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailLegalFlatRateEnvelope'
     * @return string 'USPSPriorityMailLegalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailLegalFlatRateEnvelope'
     * @return string 'USPSExpressMailLegalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxA'
     * @return string 'USPSPriorityMailRegionalBoxA'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_A = 'USPSPriorityMailRegionalBoxA';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxB'
     * @return string 'USPSPriorityMailRegionalBoxB'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_B = 'USPSPriorityMailRegionalBoxB';
    /**
     * Constant for value 'USPSPriorityMailRegionalBoxC'
     * @return string 'USPSPriorityMailRegionalBoxC'
     */
    const VALUE_USPSPRIORITY_MAIL_REGIONAL_BOX_C = 'USPSPriorityMailRegionalBoxC';
    /**
     * Constant for value 'USPSExpressMailFlatRateBox'
     * @return string 'USPSExpressMailFlatRateBox'
     */
    const VALUE_USPSEXPRESS_MAIL_FLAT_RATE_BOX = 'USPSExpressMailFlatRateBox';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'LocalDelivery'
     * @return string 'LocalDelivery'
     */
    const VALUE_LOCAL_DELIVERY = 'LocalDelivery';
    /**
     * Constant for value 'NotSelected'
     * @return string 'NotSelected'
     */
    const VALUE_NOT_SELECTED = 'NotSelected';
    /**
     * Constant for value 'InternationalNotSelected'
     * @return string 'InternationalNotSelected'
     */
    const VALUE_INTERNATIONAL_NOT_SELECTED = 'InternationalNotSelected';
    /**
     * Constant for value 'StandardInternational'
     * @return string 'StandardInternational'
     */
    const VALUE_STANDARD_INTERNATIONAL = 'StandardInternational';
    /**
     * Constant for value 'ExpeditedInternational'
     * @return string 'ExpeditedInternational'
     */
    const VALUE_EXPEDITED_INTERNATIONAL = 'ExpeditedInternational';
    /**
     * Constant for value 'USPSGlobalExpress'
     * @return string 'USPSGlobalExpress'
     */
    const VALUE_USPSGLOBAL_EXPRESS = 'USPSGlobalExpress';
    /**
     * Constant for value 'USPSGlobalPriority'
     * @return string 'USPSGlobalPriority'
     */
    const VALUE_USPSGLOBAL_PRIORITY = 'USPSGlobalPriority';
    /**
     * Constant for value 'USPSEconomyParcel'
     * @return string 'USPSEconomyParcel'
     */
    const VALUE_USPSECONOMY_PARCEL = 'USPSEconomyParcel';
    /**
     * Constant for value 'USPSEconomyLetter'
     * @return string 'USPSEconomyLetter'
     */
    const VALUE_USPSECONOMY_LETTER = 'USPSEconomyLetter';
    /**
     * Constant for value 'USPSAirmailLetter'
     * @return string 'USPSAirmailLetter'
     */
    const VALUE_USPSAIRMAIL_LETTER = 'USPSAirmailLetter';
    /**
     * Constant for value 'USPSAirmailParcel'
     * @return string 'USPSAirmailParcel'
     */
    const VALUE_USPSAIRMAIL_PARCEL = 'USPSAirmailParcel';
    /**
     * Constant for value 'UPSWorldWideExpressPlus'
     * @return string 'UPSWorldWideExpressPlus'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS = 'UPSWorldWideExpressPlus';
    /**
     * Constant for value 'UPSWorldWideExpress'
     * @return string 'UPSWorldWideExpress'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS = 'UPSWorldWideExpress';
    /**
     * Constant for value 'UPSWorldWideExpedited'
     * @return string 'UPSWorldWideExpedited'
     */
    const VALUE_UPSWORLD_WIDE_EXPEDITED = 'UPSWorldWideExpedited';
    /**
     * Constant for value 'UPSWorldwideSaver'
     * @return string 'UPSWorldwideSaver'
     */
    const VALUE_UPSWORLDWIDE_SAVER = 'UPSWorldwideSaver';
    /**
     * Constant for value 'UPSStandardToCanada'
     * @return string 'UPSStandardToCanada'
     */
    const VALUE_UPSSTANDARD_TO_CANADA = 'UPSStandardToCanada';
    /**
     * Constant for value 'USPSExpressMailInternationalFlatRateEnvelope'
     * @return string 'USPSExpressMailInternationalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalPaddedFlatRateEnvelope'
     * @return string 'USPSExpressMailInternationalPaddedFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalFlatRateEnvelope'
     * @return string 'USPSPriorityMailInternationalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalSmallFlatRateBox'
     * @return string 'USPSPriorityMailInternationalSmallFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalSmallFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalFlatRateBox'
     * @return string 'USPSPriorityMailInternationalFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalLargeFlatRateBox'
     * @return string 'USPSPriorityMailInternationalLargeFlatRateBox'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailInternationalLargeFlatRateBox';
    /**
     * Constant for value 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
     * @return string 'USPSPriorityMailInternationalPaddedFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalPaddedFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
     * @return string 'USPSPriorityMailInternationalLegalFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalLegalFlatRateEnvelope'
     * @return string 'USPSExpressMailInternationalLegalFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalLegalFlatRateEnvelope';
    /**
     * Constant for value 'USPSExpressMailInternationalFlatRateBox'
     * @return string 'USPSExpressMailInternationalFlatRateBox'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSExpressMailInternationalFlatRateBox';
    /**
     * Constant for value 'OtherInternational'
     * @return string 'OtherInternational'
     */
    const VALUE_OTHER_INTERNATIONAL = 'OtherInternational';
    /**
     * Constant for value 'AT_StandardDispatch'
     * @return string 'AT_StandardDispatch'
     */
    const VALUE_AT_STANDARD_DISPATCH = 'AT_StandardDispatch';
    /**
     * Constant for value 'AT_InsuredDispatch'
     * @return string 'AT_InsuredDispatch'
     */
    const VALUE_AT_INSURED_DISPATCH = 'AT_InsuredDispatch';
    /**
     * Constant for value 'AT_Writing'
     * @return string 'AT_Writing'
     */
    const VALUE_AT_WRITING = 'AT_Writing';
    /**
     * Constant for value 'AT_COD'
     * @return string 'AT_COD'
     */
    const VALUE_AT_COD = 'AT_COD';
    /**
     * Constant for value 'AT_ExpressOrCourier'
     * @return string 'AT_ExpressOrCourier'
     */
    const VALUE_AT_EXPRESS_OR_COURIER = 'AT_ExpressOrCourier';
    /**
     * Constant for value 'AT_InsuredExpressOrCourier'
     * @return string 'AT_InsuredExpressOrCourier'
     */
    const VALUE_AT_INSURED_EXPRESS_OR_COURIER = 'AT_InsuredExpressOrCourier';
    /**
     * Constant for value 'AT_SpecialDispatch'
     * @return string 'AT_SpecialDispatch'
     */
    const VALUE_AT_SPECIAL_DISPATCH = 'AT_SpecialDispatch';
    /**
     * Constant for value 'AT_InsuredSpecialDispatch'
     * @return string 'AT_InsuredSpecialDispatch'
     */
    const VALUE_AT_INSURED_SPECIAL_DISPATCH = 'AT_InsuredSpecialDispatch';
    /**
     * Constant for value 'AT_Sonstige'
     * @return string 'AT_Sonstige'
     */
    const VALUE_AT_SONSTIGE = 'AT_Sonstige';
    /**
     * Constant for value 'AT_UnversicherterVersandInternational'
     * @return string 'AT_UnversicherterVersandInternational'
     */
    const VALUE_AT_UNVERSICHERTER_VERSAND_INTERNATIONAL = 'AT_UnversicherterVersandInternational';
    /**
     * Constant for value 'AT_VersicherterVersandInternational'
     * @return string 'AT_VersicherterVersandInternational'
     */
    const VALUE_AT_VERSICHERTER_VERSAND_INTERNATIONAL = 'AT_VersicherterVersandInternational';
    /**
     * Constant for value 'AT_SonstigerVersandInternational'
     * @return string 'AT_SonstigerVersandInternational'
     */
    const VALUE_AT_SONSTIGER_VERSAND_INTERNATIONAL = 'AT_SonstigerVersandInternational';
    /**
     * Constant for value 'AT_UnversicherterExpressVersandInternational'
     * @return string 'AT_UnversicherterExpressVersandInternational'
     */
    const VALUE_AT_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_UnversicherterExpressVersandInternational';
    /**
     * Constant for value 'AT_VersicherterExpressVersandInternational'
     * @return string 'AT_VersicherterExpressVersandInternational'
     */
    const VALUE_AT_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_VersicherterExpressVersandInternational';
    /**
     * Constant for value 'AT_EconomyDeliveryFromAbroad'
     * @return string 'AT_EconomyDeliveryFromAbroad'
     */
    const VALUE_AT_ECONOMY_DELIVERY_FROM_ABROAD = 'AT_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'AT_StandardDeliveryFromAbroad'
     * @return string 'AT_StandardDeliveryFromAbroad'
     */
    const VALUE_AT_STANDARD_DELIVERY_FROM_ABROAD = 'AT_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'AT_ExpressDeliveryFromAbroad'
     * @return string 'AT_ExpressDeliveryFromAbroad'
     */
    const VALUE_AT_EXPRESS_DELIVERY_FROM_ABROAD = 'AT_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'AT_TrackedDeliveryFromAbroad'
     * @return string 'AT_TrackedDeliveryFromAbroad'
     */
    const VALUE_AT_TRACKED_DELIVERY_FROM_ABROAD = 'AT_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'AU_Regular'
     * @return string 'AU_Regular'
     */
    const VALUE_AU_REGULAR = 'AU_Regular';
    /**
     * Constant for value 'AU_Express'
     * @return string 'AU_Express'
     */
    const VALUE_AU_EXPRESS = 'AU_Express';
    /**
     * Constant for value 'AU_Registered'
     * @return string 'AU_Registered'
     */
    const VALUE_AU_REGISTERED = 'AU_Registered';
    /**
     * Constant for value 'AU_Courier'
     * @return string 'AU_Courier'
     */
    const VALUE_AU_COURIER = 'AU_Courier';
    /**
     * Constant for value 'AU_Other'
     * @return string 'AU_Other'
     */
    const VALUE_AU_OTHER = 'AU_Other';
    /**
     * Constant for value 'AU_EMSInternationalCourierParcels'
     * @return string 'AU_EMSInternationalCourierParcels'
     */
    const VALUE_AU_EMSINTERNATIONAL_COURIER_PARCELS = 'AU_EMSInternationalCourierParcels';
    /**
     * Constant for value 'AU_EMSInternationalCourierDocuments'
     * @return string 'AU_EMSInternationalCourierDocuments'
     */
    const VALUE_AU_EMSINTERNATIONAL_COURIER_DOCUMENTS = 'AU_EMSInternationalCourierDocuments';
    /**
     * Constant for value 'AU_ExpressPostInternationalDocuments'
     * @return string 'AU_ExpressPostInternationalDocuments'
     */
    const VALUE_AU_EXPRESS_POST_INTERNATIONAL_DOCUMENTS = 'AU_ExpressPostInternationalDocuments';
    /**
     * Constant for value 'AU_AirMailInternational'
     * @return string 'AU_AirMailInternational'
     */
    const VALUE_AU_AIR_MAIL_INTERNATIONAL = 'AU_AirMailInternational';
    /**
     * Constant for value 'AU_EconomyAirInternational'
     * @return string 'AU_EconomyAirInternational'
     */
    const VALUE_AU_ECONOMY_AIR_INTERNATIONAL = 'AU_EconomyAirInternational';
    /**
     * Constant for value 'AU_SeaMailInternational'
     * @return string 'AU_SeaMailInternational'
     */
    const VALUE_AU_SEA_MAIL_INTERNATIONAL = 'AU_SeaMailInternational';
    /**
     * Constant for value 'AU_StandardInternational'
     * @return string 'AU_StandardInternational'
     */
    const VALUE_AU_STANDARD_INTERNATIONAL = 'AU_StandardInternational';
    /**
     * Constant for value 'AU_ExpeditedInternational'
     * @return string 'AU_ExpeditedInternational'
     */
    const VALUE_AU_EXPEDITED_INTERNATIONAL = 'AU_ExpeditedInternational';
    /**
     * Constant for value 'AU_OtherInternational'
     * @return string 'AU_OtherInternational'
     */
    const VALUE_AU_OTHER_INTERNATIONAL = 'AU_OtherInternational';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
     * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag1kg'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_1_KG = 'AU_AusPostRegisteredPostInternationalPaddedBag1kg';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
     * @return string 'AU_AusPostRegisteredPostInternationalPaddedBag500g'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_500_G = 'AU_AusPostRegisteredPostInternationalPaddedBag500g';
    /**
     * Constant for value 'AU_AusPostRegisteredPostInternationalParcel'
     * @return string 'AU_AusPostRegisteredPostInternationalParcel'
     */
    const VALUE_AU_AUS_POST_REGISTERED_POST_INTERNATIONAL_PARCEL = 'AU_AusPostRegisteredPostInternationalParcel';
    /**
     * Constant for value 'AU_ExpeditedDeliveryFromOutsideAU'
     * @return string 'AU_ExpeditedDeliveryFromOutsideAU'
     */
    const VALUE_AU_EXPEDITED_DELIVERY_FROM_OUTSIDE_AU = 'AU_ExpeditedDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_EconomyDeliveryFromOutsideAU'
     * @return string 'AU_EconomyDeliveryFromOutsideAU'
     */
    const VALUE_AU_ECONOMY_DELIVERY_FROM_OUTSIDE_AU = 'AU_EconomyDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_StandardDeliveryFromOutsideAU'
     * @return string 'AU_StandardDeliveryFromOutsideAU'
     */
    const VALUE_AU_STANDARD_DELIVERY_FROM_OUTSIDE_AU = 'AU_StandardDeliveryFromOutsideAU';
    /**
     * Constant for value 'AU_AustralianAirExpressMetro15kg'
     * @return string 'AU_AustralianAirExpressMetro15kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_METRO_15_KG = 'AU_AustralianAirExpressMetro15kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate5kg'
     * @return string 'AU_AustralianAirExpressFlatRate5kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_5_KG = 'AU_AustralianAirExpressFlatRate5kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate3kg'
     * @return string 'AU_AustralianAirExpressFlatRate3kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_3_KG = 'AU_AustralianAirExpressFlatRate3kg';
    /**
     * Constant for value 'AU_AustralianAirExpressFlatRate1kg'
     * @return string 'AU_AustralianAirExpressFlatRate1kg'
     */
    const VALUE_AU_AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_1_KG = 'AU_AustralianAirExpressFlatRate1kg';
    /**
     * Constant for value 'AU_ExpressDelivery'
     * @return string 'AU_ExpressDelivery'
     */
    const VALUE_AU_EXPRESS_DELIVERY = 'AU_ExpressDelivery';
    /**
     * Constant for value 'AU_StandardDelivery'
     * @return string 'AU_StandardDelivery'
     */
    const VALUE_AU_STANDARD_DELIVERY = 'AU_StandardDelivery';
    /**
     * Constant for value 'AU_eBayAusPost3kgFlatRateSatchel'
     * @return string 'AU_eBayAusPost3kgFlatRateSatchel'
     */
    const VALUE_AU_E_BAY_AUS_POST_3_KG_FLAT_RATE_SATCHEL = 'AU_eBayAusPost3kgFlatRateSatchel';
    /**
     * Constant for value 'AU_eBayAusPost500gFlatRateSatchel'
     * @return string 'AU_eBayAusPost500gFlatRateSatchel'
     */
    const VALUE_AU_E_BAY_AUS_POST_500_G_FLAT_RATE_SATCHEL = 'AU_eBayAusPost500gFlatRateSatchel';
    /**
     * Constant for value 'AU_Freight'
     * @return string 'AU_Freight'
     */
    const VALUE_AU_FREIGHT = 'AU_Freight';
    /**
     * Constant for value 'BEFR_StandardDelivery'
     * @return string 'BEFR_StandardDelivery'
     */
    const VALUE_BEFR_STANDARD_DELIVERY = 'BEFR_StandardDelivery';
    /**
     * Constant for value 'BEFR_PriorityDelivery'
     * @return string 'BEFR_PriorityDelivery'
     */
    const VALUE_BEFR_PRIORITY_DELIVERY = 'BEFR_PriorityDelivery';
    /**
     * Constant for value 'BEFR_ParcelPost'
     * @return string 'BEFR_ParcelPost'
     */
    const VALUE_BEFR_PARCEL_POST = 'BEFR_ParcelPost';
    /**
     * Constant for value 'BEFR_RegisteredMail'
     * @return string 'BEFR_RegisteredMail'
     */
    const VALUE_BEFR_REGISTERED_MAIL = 'BEFR_RegisteredMail';
    /**
     * Constant for value 'BEFR_Other'
     * @return string 'BEFR_Other'
     */
    const VALUE_BEFR_OTHER = 'BEFR_Other';
    /**
     * Constant for value 'BEFR_DePostInternational'
     * @return string 'BEFR_DePostInternational'
     */
    const VALUE_BEFR_DE_POST_INTERNATIONAL = 'BEFR_DePostInternational';
    /**
     * Constant for value 'BEFR_UPSInternational'
     * @return string 'BEFR_UPSInternational'
     */
    const VALUE_BEFR_UPSINTERNATIONAL = 'BEFR_UPSInternational';
    /**
     * Constant for value 'BEFR_FedExInternational'
     * @return string 'BEFR_FedExInternational'
     */
    const VALUE_BEFR_FED_EX_INTERNATIONAL = 'BEFR_FedExInternational';
    /**
     * Constant for value 'BEFR_DHLInternational'
     * @return string 'BEFR_DHLInternational'
     */
    const VALUE_BEFR_DHLINTERNATIONAL = 'BEFR_DHLInternational';
    /**
     * Constant for value 'BEFR_TPGPostTNTInternational'
     * @return string 'BEFR_TPGPostTNTInternational'
     */
    const VALUE_BEFR_TPGPOST_TNTINTERNATIONAL = 'BEFR_TPGPostTNTInternational';
    /**
     * Constant for value 'BEFR_StandardInternational'
     * @return string 'BEFR_StandardInternational'
     */
    const VALUE_BEFR_STANDARD_INTERNATIONAL = 'BEFR_StandardInternational';
    /**
     * Constant for value 'BEFR_ExpeditedInternational'
     * @return string 'BEFR_ExpeditedInternational'
     */
    const VALUE_BEFR_EXPEDITED_INTERNATIONAL = 'BEFR_ExpeditedInternational';
    /**
     * Constant for value 'BEFR_OtherInternational'
     * @return string 'BEFR_OtherInternational'
     */
    const VALUE_BEFR_OTHER_INTERNATIONAL = 'BEFR_OtherInternational';
    /**
     * Constant for value 'BEFR_LaPosteInternational'
     * @return string 'BEFR_LaPosteInternational'
     */
    const VALUE_BEFR_LA_POSTE_INTERNATIONAL = 'BEFR_LaPosteInternational';
    /**
     * Constant for value 'BEFR_LaPosteStandardShipping'
     * @return string 'BEFR_LaPosteStandardShipping'
     */
    const VALUE_BEFR_LA_POSTE_STANDARD_SHIPPING = 'BEFR_LaPosteStandardShipping';
    /**
     * Constant for value 'BEFR_LaPosteCertifiedShipping'
     * @return string 'BEFR_LaPosteCertifiedShipping'
     */
    const VALUE_BEFR_LA_POSTE_CERTIFIED_SHIPPING = 'BEFR_LaPosteCertifiedShipping';
    /**
     * Constant for value 'BEFR_LaPosteTaxipostLLS'
     * @return string 'BEFR_LaPosteTaxipostLLS'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_LLS = 'BEFR_LaPosteTaxipostLLS';
    /**
     * Constant for value 'BEFR_LaPosteTaxipost24h'
     * @return string 'BEFR_LaPosteTaxipost24h'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_24_H = 'BEFR_LaPosteTaxipost24h';
    /**
     * Constant for value 'BEFR_LaPosteTaxipostSecur'
     * @return string 'BEFR_LaPosteTaxipostSecur'
     */
    const VALUE_BEFR_LA_POSTE_TAXIPOST_SECUR = 'BEFR_LaPosteTaxipostSecur';
    /**
     * Constant for value 'BEFR_PostInternationalStandard'
     * @return string 'BEFR_PostInternationalStandard'
     */
    const VALUE_BEFR_POST_INTERNATIONAL_STANDARD = 'BEFR_PostInternationalStandard';
    /**
     * Constant for value 'BEFR_PostInternationalRegistered'
     * @return string 'BEFR_PostInternationalRegistered'
     */
    const VALUE_BEFR_POST_INTERNATIONAL_REGISTERED = 'BEFR_PostInternationalRegistered';
    /**
     * Constant for value 'BEFR_TNTInternational'
     * @return string 'BEFR_TNTInternational'
     */
    const VALUE_BEFR_TNTINTERNATIONAL = 'BEFR_TNTInternational';
    /**
     * Constant for value 'BEFR_EconomyDeliveryFromAbroad'
     * @return string 'BEFR_EconomyDeliveryFromAbroad'
     */
    const VALUE_BEFR_ECONOMY_DELIVERY_FROM_ABROAD = 'BEFR_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_StandardDeliveryFromAbroad'
     * @return string 'BEFR_StandardDeliveryFromAbroad'
     */
    const VALUE_BEFR_STANDARD_DELIVERY_FROM_ABROAD = 'BEFR_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_ExpressDeliveryFromAbroad'
     * @return string 'BEFR_ExpressDeliveryFromAbroad'
     */
    const VALUE_BEFR_EXPRESS_DELIVERY_FROM_ABROAD = 'BEFR_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'BEFR_TrackedDeliveryFromAbroad'
     * @return string 'BEFR_TrackedDeliveryFromAbroad'
     */
    const VALUE_BEFR_TRACKED_DELIVERY_FROM_ABROAD = 'BEFR_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_StandardDelivery'
     * @return string 'BENL_StandardDelivery'
     */
    const VALUE_BENL_STANDARD_DELIVERY = 'BENL_StandardDelivery';
    /**
     * Constant for value 'BENL_PriorityDelivery'
     * @return string 'BENL_PriorityDelivery'
     */
    const VALUE_BENL_PRIORITY_DELIVERY = 'BENL_PriorityDelivery';
    /**
     * Constant for value 'BENL_ParcelPost'
     * @return string 'BENL_ParcelPost'
     */
    const VALUE_BENL_PARCEL_POST = 'BENL_ParcelPost';
    /**
     * Constant for value 'BENL_RegisteredMail'
     * @return string 'BENL_RegisteredMail'
     */
    const VALUE_BENL_REGISTERED_MAIL = 'BENL_RegisteredMail';
    /**
     * Constant for value 'BENL_Other'
     * @return string 'BENL_Other'
     */
    const VALUE_BENL_OTHER = 'BENL_Other';
    /**
     * Constant for value 'BENL_DePostInternational'
     * @return string 'BENL_DePostInternational'
     */
    const VALUE_BENL_DE_POST_INTERNATIONAL = 'BENL_DePostInternational';
    /**
     * Constant for value 'BENL_UPSInternational'
     * @return string 'BENL_UPSInternational'
     */
    const VALUE_BENL_UPSINTERNATIONAL = 'BENL_UPSInternational';
    /**
     * Constant for value 'BENL_FedExInternational'
     * @return string 'BENL_FedExInternational'
     */
    const VALUE_BENL_FED_EX_INTERNATIONAL = 'BENL_FedExInternational';
    /**
     * Constant for value 'BENL_DHLInternational'
     * @return string 'BENL_DHLInternational'
     */
    const VALUE_BENL_DHLINTERNATIONAL = 'BENL_DHLInternational';
    /**
     * Constant for value 'BENL_TPGPostTNTInternational'
     * @return string 'BENL_TPGPostTNTInternational'
     */
    const VALUE_BENL_TPGPOST_TNTINTERNATIONAL = 'BENL_TPGPostTNTInternational';
    /**
     * Constant for value 'BENL_StandardInternational'
     * @return string 'BENL_StandardInternational'
     */
    const VALUE_BENL_STANDARD_INTERNATIONAL = 'BENL_StandardInternational';
    /**
     * Constant for value 'BENL_ExpeditedInternational'
     * @return string 'BENL_ExpeditedInternational'
     */
    const VALUE_BENL_EXPEDITED_INTERNATIONAL = 'BENL_ExpeditedInternational';
    /**
     * Constant for value 'BENL_OtherInternational'
     * @return string 'BENL_OtherInternational'
     */
    const VALUE_BENL_OTHER_INTERNATIONAL = 'BENL_OtherInternational';
    /**
     * Constant for value 'BENL_LaPosteInternational'
     * @return string 'BENL_LaPosteInternational'
     */
    const VALUE_BENL_LA_POSTE_INTERNATIONAL = 'BENL_LaPosteInternational';
    /**
     * Constant for value 'BENL_DePostStandardShipping'
     * @return string 'BENL_DePostStandardShipping'
     */
    const VALUE_BENL_DE_POST_STANDARD_SHIPPING = 'BENL_DePostStandardShipping';
    /**
     * Constant for value 'BENL_DePostCertifiedShipping'
     * @return string 'BENL_DePostCertifiedShipping'
     */
    const VALUE_BENL_DE_POST_CERTIFIED_SHIPPING = 'BENL_DePostCertifiedShipping';
    /**
     * Constant for value 'BENL_DePostTaxipostLLS'
     * @return string 'BENL_DePostTaxipostLLS'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_LLS = 'BENL_DePostTaxipostLLS';
    /**
     * Constant for value 'BENL_DePostTaxipost24h'
     * @return string 'BENL_DePostTaxipost24h'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_24_H = 'BENL_DePostTaxipost24h';
    /**
     * Constant for value 'BENL_DePostTaxipostSecur'
     * @return string 'BENL_DePostTaxipostSecur'
     */
    const VALUE_BENL_DE_POST_TAXIPOST_SECUR = 'BENL_DePostTaxipostSecur';
    /**
     * Constant for value 'BENL_OtherShippingMethods'
     * @return string 'BENL_OtherShippingMethods'
     */
    const VALUE_BENL_OTHER_SHIPPING_METHODS = 'BENL_OtherShippingMethods';
    /**
     * Constant for value 'BENL_PostInternationalStandard'
     * @return string 'BENL_PostInternationalStandard'
     */
    const VALUE_BENL_POST_INTERNATIONAL_STANDARD = 'BENL_PostInternationalStandard';
    /**
     * Constant for value 'BENL_PostInternationalRegistered'
     * @return string 'BENL_PostInternationalRegistered'
     */
    const VALUE_BENL_POST_INTERNATIONAL_REGISTERED = 'BENL_PostInternationalRegistered';
    /**
     * Constant for value 'BENL_TNTInternational'
     * @return string 'BENL_TNTInternational'
     */
    const VALUE_BENL_TNTINTERNATIONAL = 'BENL_TNTInternational';
    /**
     * Constant for value 'BENL_EconomyDeliveryFromAbroad'
     * @return string 'BENL_EconomyDeliveryFromAbroad'
     */
    const VALUE_BENL_ECONOMY_DELIVERY_FROM_ABROAD = 'BENL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_StandardDeliveryFromAbroad'
     * @return string 'BENL_StandardDeliveryFromAbroad'
     */
    const VALUE_BENL_STANDARD_DELIVERY_FROM_ABROAD = 'BENL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_ExpressDeliveryFromAbroad'
     * @return string 'BENL_ExpressDeliveryFromAbroad'
     */
    const VALUE_BENL_EXPRESS_DELIVERY_FROM_ABROAD = 'BENL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'BENL_TrackedDeliveryFromAbroad'
     * @return string 'BENL_TrackedDeliveryFromAbroad'
     */
    const VALUE_BENL_TRACKED_DELIVERY_FROM_ABROAD = 'BENL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'CA_StandardDelivery'
     * @return string 'CA_StandardDelivery'
     */
    const VALUE_CA_STANDARD_DELIVERY = 'CA_StandardDelivery';
    /**
     * Constant for value 'CA_ExpeditedDelivery'
     * @return string 'CA_ExpeditedDelivery'
     */
    const VALUE_CA_EXPEDITED_DELIVERY = 'CA_ExpeditedDelivery';
    /**
     * Constant for value 'CA_PostLettermail'
     * @return string 'CA_PostLettermail'
     */
    const VALUE_CA_POST_LETTERMAIL = 'CA_PostLettermail';
    /**
     * Constant for value 'CA_PostRegularParcel'
     * @return string 'CA_PostRegularParcel'
     */
    const VALUE_CA_POST_REGULAR_PARCEL = 'CA_PostRegularParcel';
    /**
     * Constant for value 'CA_PostExpeditedParcel'
     * @return string 'CA_PostExpeditedParcel'
     */
    const VALUE_CA_POST_EXPEDITED_PARCEL = 'CA_PostExpeditedParcel';
    /**
     * Constant for value 'CA_PostXpresspost'
     * @return string 'CA_PostXpresspost'
     */
    const VALUE_CA_POST_XPRESSPOST = 'CA_PostXpresspost';
    /**
     * Constant for value 'CA_PostPriorityCourier'
     * @return string 'CA_PostPriorityCourier'
     */
    const VALUE_CA_POST_PRIORITY_COURIER = 'CA_PostPriorityCourier';
    /**
     * Constant for value 'CanadaPostExpeditedFlatRateBox'
     * @return string 'CanadaPostExpeditedFlatRateBox'
     */
    const VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX = 'CanadaPostExpeditedFlatRateBox';
    /**
     * Constant for value 'CA_PostExpeditedFlatRateBox'
     * @return string 'CA_PostExpeditedFlatRateBox'
     */
    const VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX = 'CA_PostExpeditedFlatRateBox';
    /**
     * Constant for value 'CA_StandardInternational'
     * @return string 'CA_StandardInternational'
     */
    const VALUE_CA_STANDARD_INTERNATIONAL = 'CA_StandardInternational';
    /**
     * Constant for value 'CA_ExpeditedInternational'
     * @return string 'CA_ExpeditedInternational'
     */
    const VALUE_CA_EXPEDITED_INTERNATIONAL = 'CA_ExpeditedInternational';
    /**
     * Constant for value 'CA_OtherInternational'
     * @return string 'CA_OtherInternational'
     */
    const VALUE_CA_OTHER_INTERNATIONAL = 'CA_OtherInternational';
    /**
     * Constant for value 'CA_PostExpeditedParcelUSA'
     * @return string 'CA_PostExpeditedParcelUSA'
     */
    const VALUE_CA_POST_EXPEDITED_PARCEL_USA = 'CA_PostExpeditedParcelUSA';
    /**
     * Constant for value 'CA_PostSmallPacketsUSA'
     * @return string 'CA_PostSmallPacketsUSA'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USA = 'CA_PostSmallPacketsUSA';
    /**
     * Constant for value 'CA_PostXpresspostUSA'
     * @return string 'CA_PostXpresspostUSA'
     */
    const VALUE_CA_POST_XPRESSPOST_USA = 'CA_PostXpresspostUSA';
    /**
     * Constant for value 'CA_PostXpresspostInternational'
     * @return string 'CA_PostXpresspostInternational'
     */
    const VALUE_CA_POST_XPRESSPOST_INTERNATIONAL = 'CA_PostXpresspostInternational';
    /**
     * Constant for value 'CA_PostInternationalParcelSurface'
     * @return string 'CA_PostInternationalParcelSurface'
     */
    const VALUE_CA_POST_INTERNATIONAL_PARCEL_SURFACE = 'CA_PostInternationalParcelSurface';
    /**
     * Constant for value 'CA_PostInternationalParcelAir'
     * @return string 'CA_PostInternationalParcelAir'
     */
    const VALUE_CA_POST_INTERNATIONAL_PARCEL_AIR = 'CA_PostInternationalParcelAir';
    /**
     * Constant for value 'CA_SmallPacketsInternational'
     * @return string 'CA_SmallPacketsInternational'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL = 'CA_SmallPacketsInternational';
    /**
     * Constant for value 'CA_PurolatorInternational'
     * @return string 'CA_PurolatorInternational'
     */
    const VALUE_CA_PUROLATOR_INTERNATIONAL = 'CA_PurolatorInternational';
    /**
     * Constant for value 'CA_PostSmallPacketsUSAGround'
     * @return string 'CA_PostSmallPacketsUSAGround'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USAGROUND = 'CA_PostSmallPacketsUSAGround';
    /**
     * Constant for value 'CA_PostSmallPacketsUSAAir'
     * @return string 'CA_PostSmallPacketsUSAAir'
     */
    const VALUE_CA_POST_SMALL_PACKETS_USAAIR = 'CA_PostSmallPacketsUSAAir';
    /**
     * Constant for value 'CA_SmallPacketsInternationalGround'
     * @return string 'CA_SmallPacketsInternationalGround'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL_GROUND = 'CA_SmallPacketsInternationalGround';
    /**
     * Constant for value 'CA_SmallPacketsInternationalAir'
     * @return string 'CA_SmallPacketsInternationalAir'
     */
    const VALUE_CA_SMALL_PACKETS_INTERNATIONAL_AIR = 'CA_SmallPacketsInternationalAir';
    /**
     * Constant for value 'CA_PostUSALetterPost'
     * @return string 'CA_PostUSALetterPost'
     */
    const VALUE_CA_POST_USALETTER_POST = 'CA_PostUSALetterPost';
    /**
     * Constant for value 'CA_PostInternationalLetterPost'
     * @return string 'CA_PostInternationalLetterPost'
     */
    const VALUE_CA_POST_INTERNATIONAL_LETTER_POST = 'CA_PostInternationalLetterPost';
    /**
     * Constant for value 'CA_PostExpeditedFlatRateBoxUSA'
     * @return string 'CA_PostExpeditedFlatRateBoxUSA'
     */
    const VALUE_CA_POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CA_PostExpeditedFlatRateBoxUSA';
    /**
     * Constant for value 'CA_UPSExpressCanada'
     * @return string 'CA_UPSExpressCanada'
     */
    const VALUE_CA_UPSEXPRESS_CANADA = 'CA_UPSExpressCanada';
    /**
     * Constant for value 'CA_UPSExpressSaverCanada'
     * @return string 'CA_UPSExpressSaverCanada'
     */
    const VALUE_CA_UPSEXPRESS_SAVER_CANADA = 'CA_UPSExpressSaverCanada';
    /**
     * Constant for value 'CA_UPSExpeditedCanada'
     * @return string 'CA_UPSExpeditedCanada'
     */
    const VALUE_CA_UPSEXPEDITED_CANADA = 'CA_UPSExpeditedCanada';
    /**
     * Constant for value 'CA_UPSStandardCanada'
     * @return string 'CA_UPSStandardCanada'
     */
    const VALUE_CA_UPSSTANDARD_CANADA = 'CA_UPSStandardCanada';
    /**
     * Constant for value 'CA_UPSExpressUnitedStates'
     * @return string 'CA_UPSExpressUnitedStates'
     */
    const VALUE_CA_UPSEXPRESS_UNITED_STATES = 'CA_UPSExpressUnitedStates';
    /**
     * Constant for value 'CA_UPSExpeditedUnitedStates'
     * @return string 'CA_UPSExpeditedUnitedStates'
     */
    const VALUE_CA_UPSEXPEDITED_UNITED_STATES = 'CA_UPSExpeditedUnitedStates';
    /**
     * Constant for value 'CA_UPS3DaySelectUnitedStates'
     * @return string 'CA_UPS3DaySelectUnitedStates'
     */
    const VALUE_CA_UPS_3_DAY_SELECT_UNITED_STATES = 'CA_UPS3DaySelectUnitedStates';
    /**
     * Constant for value 'CA_UPSStandardUnitedStates'
     * @return string 'CA_UPSStandardUnitedStates'
     */
    const VALUE_CA_UPSSTANDARD_UNITED_STATES = 'CA_UPSStandardUnitedStates';
    /**
     * Constant for value 'CA_UPSWorldWideExpress'
     * @return string 'CA_UPSWorldWideExpress'
     */
    const VALUE_CA_UPSWORLD_WIDE_EXPRESS = 'CA_UPSWorldWideExpress';
    /**
     * Constant for value 'CA_UPSWorldWideExpedited'
     * @return string 'CA_UPSWorldWideExpedited'
     */
    const VALUE_CA_UPSWORLD_WIDE_EXPEDITED = 'CA_UPSWorldWideExpedited';
    /**
     * Constant for value 'CA_PriorityWorldwide'
     * @return string 'CA_PriorityWorldwide'
     */
    const VALUE_CA_PRIORITY_WORLDWIDE = 'CA_PriorityWorldwide';
    /**
     * Constant for value 'CanadaPostExpeditedFlatRateBoxUSA'
     * @return string 'CanadaPostExpeditedFlatRateBoxUSA'
     */
    const VALUE_CANADA_POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CanadaPostExpeditedFlatRateBoxUSA';
    /**
     * Constant for value 'CA_PostTrackedPacketsUSA'
     * @return string 'CA_PostTrackedPacketsUSA'
     */
    const VALUE_CA_POST_TRACKED_PACKETS_USA = 'CA_PostTrackedPacketsUSA';
    /**
     * Constant for value 'CA_PostTrackedPacketsInternational'
     * @return string 'CA_PostTrackedPacketsInternational'
     */
    const VALUE_CA_POST_TRACKED_PACKETS_INTERNATIONAL = 'CA_PostTrackedPacketsInternational';
    /**
     * Constant for value 'CA_Freight'
     * @return string 'CA_Freight'
     */
    const VALUE_CA_FREIGHT = 'CA_Freight';
    /**
     * Constant for value 'CH_StandardDispatchAPost'
     * @return string 'CH_StandardDispatchAPost'
     */
    const VALUE_CH_STANDARD_DISPATCH_APOST = 'CH_StandardDispatchAPost';
    /**
     * Constant for value 'CH_StandardDispatchBPost'
     * @return string 'CH_StandardDispatchBPost'
     */
    const VALUE_CH_STANDARD_DISPATCH_BPOST = 'CH_StandardDispatchBPost';
    /**
     * Constant for value 'CH_InsuredDispatch'
     * @return string 'CH_InsuredDispatch'
     */
    const VALUE_CH_INSURED_DISPATCH = 'CH_InsuredDispatch';
    /**
     * Constant for value 'CH_Writing'
     * @return string 'CH_Writing'
     */
    const VALUE_CH_WRITING = 'CH_Writing';
    /**
     * Constant for value 'CH_COD'
     * @return string 'CH_COD'
     */
    const VALUE_CH_COD = 'CH_COD';
    /**
     * Constant for value 'CH_ExpressOrCourier'
     * @return string 'CH_ExpressOrCourier'
     */
    const VALUE_CH_EXPRESS_OR_COURIER = 'CH_ExpressOrCourier';
    /**
     * Constant for value 'CH_InsuredExpressOrCourier'
     * @return string 'CH_InsuredExpressOrCourier'
     */
    const VALUE_CH_INSURED_EXPRESS_OR_COURIER = 'CH_InsuredExpressOrCourier';
    /**
     * Constant for value 'CH_SpecialDispatch'
     * @return string 'CH_SpecialDispatch'
     */
    const VALUE_CH_SPECIAL_DISPATCH = 'CH_SpecialDispatch';
    /**
     * Constant for value 'CH_InsuredSpecialDispatch'
     * @return string 'CH_InsuredSpecialDispatch'
     */
    const VALUE_CH_INSURED_SPECIAL_DISPATCH = 'CH_InsuredSpecialDispatch';
    /**
     * Constant for value 'CH_Sonstige'
     * @return string 'CH_Sonstige'
     */
    const VALUE_CH_SONSTIGE = 'CH_Sonstige';
    /**
     * Constant for value 'CH_SonstigerVersandInternational'
     * @return string 'CH_SonstigerVersandInternational'
     */
    const VALUE_CH_SONSTIGER_VERSAND_INTERNATIONAL = 'CH_SonstigerVersandInternational';
    /**
     * Constant for value 'CH_EconomySendungenInternational'
     * @return string 'CH_EconomySendungenInternational'
     */
    const VALUE_CH_ECONOMY_SENDUNGEN_INTERNATIONAL = 'CH_EconomySendungenInternational';
    /**
     * Constant for value 'CH_PrioritySendungenInternational'
     * @return string 'CH_PrioritySendungenInternational'
     */
    const VALUE_CH_PRIORITY_SENDUNGEN_INTERNATIONAL = 'CH_PrioritySendungenInternational';
    /**
     * Constant for value 'CH_UrgentSendungenInternational'
     * @return string 'CH_UrgentSendungenInternational'
     */
    const VALUE_CH_URGENT_SENDUNGEN_INTERNATIONAL = 'CH_UrgentSendungenInternational';
    /**
     * Constant for value 'CH_EconomyDeliveryFromAbroad'
     * @return string 'CH_EconomyDeliveryFromAbroad'
     */
    const VALUE_CH_ECONOMY_DELIVERY_FROM_ABROAD = 'CH_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'CH_StandardDeliveryFromAbroad'
     * @return string 'CH_StandardDeliveryFromAbroad'
     */
    const VALUE_CH_STANDARD_DELIVERY_FROM_ABROAD = 'CH_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'CH_ExpressDeliveryFromAbroad'
     * @return string 'CH_ExpressDeliveryFromAbroad'
     */
    const VALUE_CH_EXPRESS_DELIVERY_FROM_ABROAD = 'CH_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'CH_TrackedDeliveryFromAbroad'
     * @return string 'CH_TrackedDeliveryFromAbroad'
     */
    const VALUE_CH_TRACKED_DELIVERY_FROM_ABROAD = 'CH_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'CN_PersonalDelivery'
     * @return string 'CN_PersonalDelivery'
     */
    const VALUE_CN_PERSONAL_DELIVERY = 'CN_PersonalDelivery';
    /**
     * Constant for value 'CN_RegularPackage'
     * @return string 'CN_RegularPackage'
     */
    const VALUE_CN_REGULAR_PACKAGE = 'CN_RegularPackage';
    /**
     * Constant for value 'CN_DeliveryCompanyExpress'
     * @return string 'CN_DeliveryCompanyExpress'
     */
    const VALUE_CN_DELIVERY_COMPANY_EXPRESS = 'CN_DeliveryCompanyExpress';
    /**
     * Constant for value 'CN_PostOfficeExpress'
     * @return string 'CN_PostOfficeExpress'
     */
    const VALUE_CN_POST_OFFICE_EXPRESS = 'CN_PostOfficeExpress';
    /**
     * Constant for value 'CN_Others'
     * @return string 'CN_Others'
     */
    const VALUE_CN_OTHERS = 'CN_Others';
    /**
     * Constant for value 'CN_FastPostOffice'
     * @return string 'CN_FastPostOffice'
     */
    const VALUE_CN_FAST_POST_OFFICE = 'CN_FastPostOffice';
    /**
     * Constant for value 'CN_ExpressDeliverySameCity'
     * @return string 'CN_ExpressDeliverySameCity'
     */
    const VALUE_CN_EXPRESS_DELIVERY_SAME_CITY = 'CN_ExpressDeliverySameCity';
    /**
     * Constant for value 'CN_ExpressDeliveryOtherCities'
     * @return string 'CN_ExpressDeliveryOtherCities'
     */
    const VALUE_CN_EXPRESS_DELIVERY_OTHER_CITIES = 'CN_ExpressDeliveryOtherCities';
    /**
     * Constant for value 'CN_StandardInternational'
     * @return string 'CN_StandardInternational'
     */
    const VALUE_CN_STANDARD_INTERNATIONAL = 'CN_StandardInternational';
    /**
     * Constant for value 'CN_ExpeditedInternational'
     * @return string 'CN_ExpeditedInternational'
     */
    const VALUE_CN_EXPEDITED_INTERNATIONAL = 'CN_ExpeditedInternational';
    /**
     * Constant for value 'CN_OtherInternational'
     * @return string 'CN_OtherInternational'
     */
    const VALUE_CN_OTHER_INTERNATIONAL = 'CN_OtherInternational';
    /**
     * Constant for value 'CN_CODInternational'
     * @return string 'CN_CODInternational'
     */
    const VALUE_CN_CODINTERNATIONAL = 'CN_CODInternational';
    /**
     * Constant for value 'CN_StandardMailingInternational'
     * @return string 'CN_StandardMailingInternational'
     */
    const VALUE_CN_STANDARD_MAILING_INTERNATIONAL = 'CN_StandardMailingInternational';
    /**
     * Constant for value 'CN_RegularLogisticsInternational'
     * @return string 'CN_RegularLogisticsInternational'
     */
    const VALUE_CN_REGULAR_LOGISTICS_INTERNATIONAL = 'CN_RegularLogisticsInternational';
    /**
     * Constant for value 'CN_EMSInternational'
     * @return string 'CN_EMSInternational'
     */
    const VALUE_CN_EMSINTERNATIONAL = 'CN_EMSInternational';
    /**
     * Constant for value 'CN_OthersInternational'
     * @return string 'CN_OthersInternational'
     */
    const VALUE_CN_OTHERS_INTERNATIONAL = 'CN_OthersInternational';
    /**
     * Constant for value 'DE_StandardDispatch'
     * @return string 'DE_StandardDispatch'
     */
    const VALUE_DE_STANDARD_DISPATCH = 'DE_StandardDispatch';
    /**
     * Constant for value 'DE_InsuredDispatch'
     * @return string 'DE_InsuredDispatch'
     */
    const VALUE_DE_INSURED_DISPATCH = 'DE_InsuredDispatch';
    /**
     * Constant for value 'DE_Writing'
     * @return string 'DE_Writing'
     */
    const VALUE_DE_WRITING = 'DE_Writing';
    /**
     * Constant for value 'DE_COD'
     * @return string 'DE_COD'
     */
    const VALUE_DE_COD = 'DE_COD';
    /**
     * Constant for value 'DE_ExpressOrCourier'
     * @return string 'DE_ExpressOrCourier'
     */
    const VALUE_DE_EXPRESS_OR_COURIER = 'DE_ExpressOrCourier';
    /**
     * Constant for value 'DE_InsuredExpressOrCourier'
     * @return string 'DE_InsuredExpressOrCourier'
     */
    const VALUE_DE_INSURED_EXPRESS_OR_COURIER = 'DE_InsuredExpressOrCourier';
    /**
     * Constant for value 'DE_SpecialDispatch'
     * @return string 'DE_SpecialDispatch'
     */
    const VALUE_DE_SPECIAL_DISPATCH = 'DE_SpecialDispatch';
    /**
     * Constant for value 'DE_InsuredSpecialDispatch'
     * @return string 'DE_InsuredSpecialDispatch'
     */
    const VALUE_DE_INSURED_SPECIAL_DISPATCH = 'DE_InsuredSpecialDispatch';
    /**
     * Constant for value 'DE_UnversicherterVersand'
     * @return string 'DE_UnversicherterVersand'
     */
    const VALUE_DE_UNVERSICHERTER_VERSAND = 'DE_UnversicherterVersand';
    /**
     * Constant for value 'DE_DeutschePostBrief'
     * @return string 'DE_DeutschePostBrief'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF = 'DE_DeutschePostBrief';
    /**
     * Constant for value 'DE_eBayDHLPaket24x7'
     * @return string 'DE_eBayDHLPaket24x7'
     */
    const VALUE_DE_E_BAY_DHLPAKET_24_X_7 = 'DE_eBayDHLPaket24x7';
    /**
     * Constant for value 'DE_DHLPostpaket'
     * @return string 'DE_DHLPostpaket'
     */
    const VALUE_DE_DHLPOSTPAKET = 'DE_DHLPostpaket';
    /**
     * Constant for value 'DE_DHLPackchen'
     * @return string 'DE_DHLPackchen'
     */
    const VALUE_DE_DHLPACKCHEN = 'DE_DHLPackchen';
    /**
     * Constant for value 'DE_DeutschePostWarensendung'
     * @return string 'DE_DeutschePostWarensendung'
     */
    const VALUE_DE_DEUTSCHE_POST_WARENSENDUNG = 'DE_DeutschePostWarensendung';
    /**
     * Constant for value 'DE_DeutschePostBuchersendung'
     * @return string 'DE_DeutschePostBuchersendung'
     */
    const VALUE_DE_DEUTSCHE_POST_BUCHERSENDUNG = 'DE_DeutschePostBuchersendung';
    /**
     * Constant for value 'DE_HermesPaketUnversichert'
     * @return string 'DE_HermesPaketUnversichert'
     */
    const VALUE_DE_HERMES_PAKET_UNVERSICHERT = 'DE_HermesPaketUnversichert';
    /**
     * Constant for value 'DE_HermesPaketVersichert'
     * @return string 'DE_HermesPaketVersichert'
     */
    const VALUE_DE_HERMES_PAKET_VERSICHERT = 'DE_HermesPaketVersichert';
    /**
     * Constant for value 'DE_IloxxTransportXXL'
     * @return string 'DE_IloxxTransportXXL'
     */
    const VALUE_DE_ILOXX_TRANSPORT_XXL = 'DE_IloxxTransportXXL';
    /**
     * Constant for value 'DE_IloxxUbernachtExpress'
     * @return string 'DE_IloxxUbernachtExpress'
     */
    const VALUE_DE_ILOXX_UBERNACHT_EXPRESS = 'DE_IloxxUbernachtExpress';
    /**
     * Constant for value 'DE_IloxxStandard'
     * @return string 'DE_IloxxStandard'
     */
    const VALUE_DE_ILOXX_STANDARD = 'DE_IloxxStandard';
    /**
     * Constant for value 'DE_Sonstige'
     * @return string 'DE_Sonstige'
     */
    const VALUE_DE_SONSTIGE = 'DE_Sonstige';
    /**
     * Constant for value 'DE_UnversicherterVersandInternational'
     * @return string 'DE_UnversicherterVersandInternational'
     */
    const VALUE_DE_UNVERSICHERTER_VERSAND_INTERNATIONAL = 'DE_UnversicherterVersandInternational';
    /**
     * Constant for value 'DE_VersicherterVersandInternational'
     * @return string 'DE_VersicherterVersandInternational'
     */
    const VALUE_DE_VERSICHERTER_VERSAND_INTERNATIONAL = 'DE_VersicherterVersandInternational';
    /**
     * Constant for value 'DE_DHLPostpaketInternational'
     * @return string 'DE_DHLPostpaketInternational'
     */
    const VALUE_DE_DHLPOSTPAKET_INTERNATIONAL = 'DE_DHLPostpaketInternational';
    /**
     * Constant for value 'DE_DHLPackchenInternational'
     * @return string 'DE_DHLPackchenInternational'
     */
    const VALUE_DE_DHLPACKCHEN_INTERNATIONAL = 'DE_DHLPackchenInternational';
    /**
     * Constant for value 'DE_SonstigerVersandInternational'
     * @return string 'DE_SonstigerVersandInternational'
     */
    const VALUE_DE_SONSTIGER_VERSAND_INTERNATIONAL = 'DE_SonstigerVersandInternational';
    /**
     * Constant for value 'DE_UnversicherterExpressVersandInternational'
     * @return string 'DE_UnversicherterExpressVersandInternational'
     */
    const VALUE_DE_UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_UnversicherterExpressVersandInternational';
    /**
     * Constant for value 'DE_VersicherterExpressVersandInternational'
     * @return string 'DE_VersicherterExpressVersandInternational'
     */
    const VALUE_DE_VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_VersicherterExpressVersandInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefLandInternational'
     * @return string 'DE_DeutschePostBriefLandInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_LAND_INTERNATIONAL = 'DE_DeutschePostBriefLandInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefLuftInternational'
     * @return string 'DE_DeutschePostBriefLuftInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_LUFT_INTERNATIONAL = 'DE_DeutschePostBriefLuftInternational';
    /**
     * Constant for value 'DE_IloxxEuropaInternational'
     * @return string 'DE_IloxxEuropaInternational'
     */
    const VALUE_DE_ILOXX_EUROPA_INTERNATIONAL = 'DE_IloxxEuropaInternational';
    /**
     * Constant for value 'DE_IloxxWorldWideInternational'
     * @return string 'DE_IloxxWorldWideInternational'
     */
    const VALUE_DE_ILOXX_WORLD_WIDE_INTERNATIONAL = 'DE_IloxxWorldWideInternational';
    /**
     * Constant for value 'DE_Paket'
     * @return string 'DE_Paket'
     */
    const VALUE_DE_PAKET = 'DE_Paket';
    /**
     * Constant for value 'DE_Express'
     * @return string 'DE_Express'
     */
    const VALUE_DE_EXPRESS = 'DE_Express';
    /**
     * Constant for value 'DE_DHLPaket'
     * @return string 'DE_DHLPaket'
     */
    const VALUE_DE_DHLPAKET = 'DE_DHLPaket';
    /**
     * Constant for value 'DE_DPBuecherWarensendung'
     * @return string 'DE_DPBuecherWarensendung'
     */
    const VALUE_DE_DPBUECHER_WARENSENDUNG = 'DE_DPBuecherWarensendung';
    /**
     * Constant for value 'DE_HermesPaket'
     * @return string 'DE_HermesPaket'
     */
    const VALUE_DE_HERMES_PAKET = 'DE_HermesPaket';
    /**
     * Constant for value 'DE_IloxxTransport'
     * @return string 'DE_IloxxTransport'
     */
    const VALUE_DE_ILOXX_TRANSPORT = 'DE_IloxxTransport';
    /**
     * Constant for value 'DE_SonstigeDomestic'
     * @return string 'DE_SonstigeDomestic'
     */
    const VALUE_DE_SONSTIGE_DOMESTIC = 'DE_SonstigeDomestic';
    /**
     * Constant for value 'DE_Einschreiben'
     * @return string 'DE_Einschreiben'
     */
    const VALUE_DE_EINSCHREIBEN = 'DE_Einschreiben';
    /**
     * Constant for value 'DE_Nachname'
     * @return string 'DE_Nachname'
     */
    const VALUE_DE_NACHNAME = 'DE_Nachname';
    /**
     * Constant for value 'DE_SpecialDelivery'
     * @return string 'DE_SpecialDelivery'
     */
    const VALUE_DE_SPECIAL_DELIVERY = 'DE_SpecialDelivery';
    /**
     * Constant for value 'DE_UPS'
     * @return string 'DE_UPS'
     */
    const VALUE_DE_UPS = 'DE_UPS';
    /**
     * Constant for value 'DE_DPD'
     * @return string 'DE_DPD'
     */
    const VALUE_DE_DPD = 'DE_DPD';
    /**
     * Constant for value 'DE_GLS'
     * @return string 'DE_GLS'
     */
    const VALUE_DE_GLS = 'DE_GLS';
    /**
     * Constant for value 'DE_PaketInternational'
     * @return string 'DE_PaketInternational'
     */
    const VALUE_DE_PAKET_INTERNATIONAL = 'DE_PaketInternational';
    /**
     * Constant for value 'DE_DHLPaketInternational'
     * @return string 'DE_DHLPaketInternational'
     */
    const VALUE_DE_DHLPAKET_INTERNATIONAL = 'DE_DHLPaketInternational';
    /**
     * Constant for value 'DE_DHLPaketIntlExpress'
     * @return string 'DE_DHLPaketIntlExpress'
     */
    const VALUE_DE_DHLPAKET_INTL_EXPRESS = 'DE_DHLPaketIntlExpress';
    /**
     * Constant for value 'DE_SonstigeInternational'
     * @return string 'DE_SonstigeInternational'
     */
    const VALUE_DE_SONSTIGE_INTERNATIONAL = 'DE_SonstigeInternational';
    /**
     * Constant for value 'DE_ExpressInternational'
     * @return string 'DE_ExpressInternational'
     */
    const VALUE_DE_EXPRESS_INTERNATIONAL = 'DE_ExpressInternational';
    /**
     * Constant for value 'DE_DPBriefInternational'
     * @return string 'DE_DPBriefInternational'
     */
    const VALUE_DE_DPBRIEF_INTERNATIONAL = 'DE_DPBriefInternational';
    /**
     * Constant for value 'DE_IloxxTransportInternational'
     * @return string 'DE_IloxxTransportInternational'
     */
    const VALUE_DE_ILOXX_TRANSPORT_INTERNATIONAL = 'DE_IloxxTransportInternational';
    /**
     * Constant for value 'DE_HermesPaketInternational'
     * @return string 'DE_HermesPaketInternational'
     */
    const VALUE_DE_HERMES_PAKET_INTERNATIONAL = 'DE_HermesPaketInternational';
    /**
     * Constant for value 'DE_UPSInternational'
     * @return string 'DE_UPSInternational'
     */
    const VALUE_DE_UPSINTERNATIONAL = 'DE_UPSInternational';
    /**
     * Constant for value 'DE_DPDInternational'
     * @return string 'DE_DPDInternational'
     */
    const VALUE_DE_DPDINTERNATIONAL = 'DE_DPDInternational';
    /**
     * Constant for value 'DE_GLSInternational'
     * @return string 'DE_GLSInternational'
     */
    const VALUE_DE_GLSINTERNATIONAL = 'DE_GLSInternational';
    /**
     * Constant for value 'DE_eBayHermesPaketShop2ShopKaeufer'
     * @return string 'DE_eBayHermesPaketShop2ShopKaeufer'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_eBayHermesPaketShop2ShopKaeufer';
    /**
     * Constant for value 'DE_HermesPaketShop2ShopKaeufer'
     * @return string 'DE_HermesPaketShop2ShopKaeufer'
     */
    const VALUE_DE_HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_HermesPaketShop2ShopKaeufer';
    /**
     * Constant for value 'DE_eBayHermesPaketShop2Shop'
     * @return string 'DE_eBayHermesPaketShop2Shop'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SHOP_2_SHOP = 'DE_eBayHermesPaketShop2Shop';
    /**
     * Constant for value 'DE_HermesPaketShop2Shop'
     * @return string 'DE_HermesPaketShop2Shop'
     */
    const VALUE_DE_HERMES_PAKET_SHOP_2_SHOP = 'DE_HermesPaketShop2Shop';
    /**
     * Constant for value 'DE_HermesPaketSperrgut'
     * @return string 'DE_HermesPaketSperrgut'
     */
    const VALUE_DE_HERMES_PAKET_SPERRGUT = 'DE_HermesPaketSperrgut';
    /**
     * Constant for value 'DE_eBayHermesPaketSperrgutShop2Shop'
     * @return string 'DE_eBayHermesPaketSperrgutShop2Shop'
     */
    const VALUE_DE_E_BAY_HERMES_PAKET_SPERRGUT_SHOP_2_SHOP = 'DE_eBayHermesPaketSperrgutShop2Shop';
    /**
     * Constant for value 'DE_DHLPaeckchenPackstation'
     * @return string 'DE_DHLPaeckchenPackstation'
     */
    const VALUE_DE_DHLPAECKCHEN_PACKSTATION = 'DE_DHLPaeckchenPackstation';
    /**
     * Constant for value 'DE_DHLPaketPackstation'
     * @return string 'DE_DHLPaketPackstation'
     */
    const VALUE_DE_DHLPAKET_PACKSTATION = 'DE_DHLPaketPackstation';
    /**
     * Constant for value 'DE_eBayDHLPaeckchen'
     * @return string 'DE_eBayDHLPaeckchen'
     */
    const VALUE_DE_E_BAY_DHLPAECKCHEN = 'DE_eBayDHLPaeckchen';
    /**
     * Constant for value 'DE_DHLStarPaeckchen'
     * @return string 'DE_DHLStarPaeckchen'
     */
    const VALUE_DE_DHLSTAR_PAECKCHEN = 'DE_DHLStarPaeckchen';
    /**
     * Constant for value 'DE_TrackedDeliveryFromAbroad'
     * @return string 'DE_TrackedDeliveryFromAbroad'
     */
    const VALUE_DE_TRACKED_DELIVERY_FROM_ABROAD = 'DE_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'ES_CartasNacionalesHasta20'
     * @return string 'ES_CartasNacionalesHasta20'
     */
    const VALUE_ES_CARTAS_NACIONALES_HASTA_20 = 'ES_CartasNacionalesHasta20';
    /**
     * Constant for value 'ES_CartasNacionalesDeMas20'
     * @return string 'ES_CartasNacionalesDeMas20'
     */
    const VALUE_ES_CARTAS_NACIONALES_DE_MAS_20 = 'ES_CartasNacionalesDeMas20';
    /**
     * Constant for value 'ES_CartasInternacionalesHasta20'
     * @return string 'ES_CartasInternacionalesHasta20'
     */
    const VALUE_ES_CARTAS_INTERNACIONALES_HASTA_20 = 'ES_CartasInternacionalesHasta20';
    /**
     * Constant for value 'ES_CartasInternacionalesDeMas20'
     * @return string 'ES_CartasInternacionalesDeMas20'
     */
    const VALUE_ES_CARTAS_INTERNACIONALES_DE_MAS_20 = 'ES_CartasInternacionalesDeMas20';
    /**
     * Constant for value 'ES_PaqueteAzulHasta2kg'
     * @return string 'ES_PaqueteAzulHasta2kg'
     */
    const VALUE_ES_PAQUETE_AZUL_HASTA_2_KG = 'ES_PaqueteAzulHasta2kg';
    /**
     * Constant for value 'ES_PaqueteAzulDeMas2kg'
     * @return string 'ES_PaqueteAzulDeMas2kg'
     */
    const VALUE_ES_PAQUETE_AZUL_DE_MAS_2_KG = 'ES_PaqueteAzulDeMas2kg';
    /**
     * Constant for value 'ES_PaqueteInternacionalEconomico'
     * @return string 'ES_PaqueteInternacionalEconomico'
     */
    const VALUE_ES_PAQUETE_INTERNACIONAL_ECONOMICO = 'ES_PaqueteInternacionalEconomico';
    /**
     * Constant for value 'ES_Urgente'
     * @return string 'ES_Urgente'
     */
    const VALUE_ES_URGENTE = 'ES_Urgente';
    /**
     * Constant for value 'ES_Otros'
     * @return string 'ES_Otros'
     */
    const VALUE_ES_OTROS = 'ES_Otros';
    /**
     * Constant for value 'ES_StandardInternational'
     * @return string 'ES_StandardInternational'
     */
    const VALUE_ES_STANDARD_INTERNATIONAL = 'ES_StandardInternational';
    /**
     * Constant for value 'ES_ExpeditedInternational'
     * @return string 'ES_ExpeditedInternational'
     */
    const VALUE_ES_EXPEDITED_INTERNATIONAL = 'ES_ExpeditedInternational';
    /**
     * Constant for value 'ES_OtherInternational'
     * @return string 'ES_OtherInternational'
     */
    const VALUE_ES_OTHER_INTERNATIONAL = 'ES_OtherInternational';
    /**
     * Constant for value 'ES_CartasPostalInternational'
     * @return string 'ES_CartasPostalInternational'
     */
    const VALUE_ES_CARTAS_POSTAL_INTERNATIONAL = 'ES_CartasPostalInternational';
    /**
     * Constant for value 'ES_EmsPostalExpressInternational'
     * @return string 'ES_EmsPostalExpressInternational'
     */
    const VALUE_ES_EMS_POSTAL_EXPRESS_INTERNATIONAL = 'ES_EmsPostalExpressInternational';
    /**
     * Constant for value 'ES_EconomyPacketInternational'
     * @return string 'ES_EconomyPacketInternational'
     */
    const VALUE_ES_ECONOMY_PACKET_INTERNATIONAL = 'ES_EconomyPacketInternational';
    /**
     * Constant for value 'ES_EconomyDeliveryFromAbroad'
     * @return string 'ES_EconomyDeliveryFromAbroad'
     */
    const VALUE_ES_ECONOMY_DELIVERY_FROM_ABROAD = 'ES_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'ES_StandardDeliveryFromAbroad'
     * @return string 'ES_StandardDeliveryFromAbroad'
     */
    const VALUE_ES_STANDARD_DELIVERY_FROM_ABROAD = 'ES_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'ES_ExpressDeliveryFromAbroad'
     * @return string 'ES_ExpressDeliveryFromAbroad'
     */
    const VALUE_ES_EXPRESS_DELIVERY_FROM_ABROAD = 'ES_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'ES_TrackedDeliveryFromAbroad'
     * @return string 'ES_TrackedDeliveryFromAbroad'
     */
    const VALUE_ES_TRACKED_DELIVERY_FROM_ABROAD = 'ES_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'ES_ENTREGA_KIALA_8KG'
     * @return string 'ES_ENTREGA_KIALA_8KG'
     */
    const VALUE_ES_ENTREGA_KIALA_8_KG = 'ES_ENTREGA_KIALA_8KG';
    /**
     * Constant for value 'FR_ChronoposteInternationalClassic'
     * @return string 'FR_ChronoposteInternationalClassic'
     */
    const VALUE_FR_CHRONOPOSTE_INTERNATIONAL_CLASSIC = 'FR_ChronoposteInternationalClassic';
    /**
     * Constant for value 'FR_ColiposteColissimoDirect'
     * @return string 'FR_ColiposteColissimoDirect'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO_DIRECT = 'FR_ColiposteColissimoDirect';
    /**
     * Constant for value 'FR_DHLExpressEuropack'
     * @return string 'FR_DHLExpressEuropack'
     */
    const VALUE_FR_DHLEXPRESS_EUROPACK = 'FR_DHLExpressEuropack';
    /**
     * Constant for value 'FR_UPSStandard'
     * @return string 'FR_UPSStandard'
     */
    const VALUE_FR_UPSSTANDARD = 'FR_UPSStandard';
    /**
     * Constant for value 'FR_PostOfficeLetter'
     * @return string 'FR_PostOfficeLetter'
     */
    const VALUE_FR_POST_OFFICE_LETTER = 'FR_PostOfficeLetter';
    /**
     * Constant for value 'FR_PostOfficeLetterFollowed'
     * @return string 'FR_PostOfficeLetterFollowed'
     */
    const VALUE_FR_POST_OFFICE_LETTER_FOLLOWED = 'FR_PostOfficeLetterFollowed';
    /**
     * Constant for value 'FR_PostOfficeLetterRecommended'
     * @return string 'FR_PostOfficeLetterRecommended'
     */
    const VALUE_FR_POST_OFFICE_LETTER_RECOMMENDED = 'FR_PostOfficeLetterRecommended';
    /**
     * Constant for value 'FR_ColiposteColissimo'
     * @return string 'FR_ColiposteColissimo'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO = 'FR_ColiposteColissimo';
    /**
     * Constant for value 'FR_ColiposteColissimoRecommended'
     * @return string 'FR_ColiposteColissimoRecommended'
     */
    const VALUE_FR_COLIPOSTE_COLISSIMO_RECOMMENDED = 'FR_ColiposteColissimoRecommended';
    /**
     * Constant for value 'FR_UPSStandardAgainstRefund'
     * @return string 'FR_UPSStandardAgainstRefund'
     */
    const VALUE_FR_UPSSTANDARD_AGAINST_REFUND = 'FR_UPSStandardAgainstRefund';
    /**
     * Constant for value 'FR_Autre'
     * @return string 'FR_Autre'
     */
    const VALUE_FR_AUTRE = 'FR_Autre';
    /**
     * Constant for value 'FR_Ecopli'
     * @return string 'FR_Ecopli'
     */
    const VALUE_FR_ECOPLI = 'FR_Ecopli';
    /**
     * Constant for value 'FR_Colieco'
     * @return string 'FR_Colieco'
     */
    const VALUE_FR_COLIECO = 'FR_Colieco';
    /**
     * Constant for value 'FR_AuteModeDenvoiDeColis'
     * @return string 'FR_AuteModeDenvoiDeColis'
     */
    const VALUE_FR_AUTE_MODE_DENVOI_DE_COLIS = 'FR_AuteModeDenvoiDeColis';
    /**
     * Constant for value 'FR_RemiseEnMainPropre'
     * @return string 'FR_RemiseEnMainPropre'
     */
    const VALUE_FR_REMISE_EN_MAIN_PROPRE = 'FR_RemiseEnMainPropre';
    /**
     * Constant for value 'FR_StandardInternational'
     * @return string 'FR_StandardInternational'
     */
    const VALUE_FR_STANDARD_INTERNATIONAL = 'FR_StandardInternational';
    /**
     * Constant for value 'FR_ExpeditedInternational'
     * @return string 'FR_ExpeditedInternational'
     */
    const VALUE_FR_EXPEDITED_INTERNATIONAL = 'FR_ExpeditedInternational';
    /**
     * Constant for value 'FR_OtherInternational'
     * @return string 'FR_OtherInternational'
     */
    const VALUE_FR_OTHER_INTERNATIONAL = 'FR_OtherInternational';
    /**
     * Constant for value 'FR_LaPosteInternationalPriorityCourier'
     * @return string 'FR_LaPosteInternationalPriorityCourier'
     */
    const VALUE_FR_LA_POSTE_INTERNATIONAL_PRIORITY_COURIER = 'FR_LaPosteInternationalPriorityCourier';
    /**
     * Constant for value 'FR_LaPosteInternationalEconomyCourier'
     * @return string 'FR_LaPosteInternationalEconomyCourier'
     */
    const VALUE_FR_LA_POSTE_INTERNATIONAL_ECONOMY_COURIER = 'FR_LaPosteInternationalEconomyCourier';
    /**
     * Constant for value 'FR_LaPosteColissimoInternational'
     * @return string 'FR_LaPosteColissimoInternational'
     */
    const VALUE_FR_LA_POSTE_COLISSIMO_INTERNATIONAL = 'FR_LaPosteColissimoInternational';
    /**
     * Constant for value 'FR_LaPosteColisEconomiqueInternational'
     * @return string 'FR_LaPosteColisEconomiqueInternational'
     */
    const VALUE_FR_LA_POSTE_COLIS_ECONOMIQUE_INTERNATIONAL = 'FR_LaPosteColisEconomiqueInternational';
    /**
     * Constant for value 'FR_LaPosteColissimoEmballageInternational'
     * @return string 'FR_LaPosteColissimoEmballageInternational'
     */
    const VALUE_FR_LA_POSTE_COLISSIMO_EMBALLAGE_INTERNATIONAL = 'FR_LaPosteColissimoEmballageInternational';
    /**
     * Constant for value 'FR_ChronopostClassicInternational'
     * @return string 'FR_ChronopostClassicInternational'
     */
    const VALUE_FR_CHRONOPOST_CLASSIC_INTERNATIONAL = 'FR_ChronopostClassicInternational';
    /**
     * Constant for value 'FR_ChronopostPremiumInternational'
     * @return string 'FR_ChronopostPremiumInternational'
     */
    const VALUE_FR_CHRONOPOST_PREMIUM_INTERNATIONAL = 'FR_ChronopostPremiumInternational';
    /**
     * Constant for value 'FR_UPSStandardInternational'
     * @return string 'FR_UPSStandardInternational'
     */
    const VALUE_FR_UPSSTANDARD_INTERNATIONAL = 'FR_UPSStandardInternational';
    /**
     * Constant for value 'FR_UPSExpressInternational'
     * @return string 'FR_UPSExpressInternational'
     */
    const VALUE_FR_UPSEXPRESS_INTERNATIONAL = 'FR_UPSExpressInternational';
    /**
     * Constant for value 'FR_DHLInternational'
     * @return string 'FR_DHLInternational'
     */
    const VALUE_FR_DHLINTERNATIONAL = 'FR_DHLInternational';
    /**
     * Constant for value 'FR_LaPosteLetterMax'
     * @return string 'FR_LaPosteLetterMax'
     */
    const VALUE_FR_LA_POSTE_LETTER_MAX = 'FR_LaPosteLetterMax';
    /**
     * Constant for value 'FR_KIALA_DELIVERY'
     * @return string 'FR_KIALA_DELIVERY'
     */
    const VALUE_FR_KIALA_DELIVERY = 'FR_KIALA_DELIVERY';
    /**
     * Constant for value 'FR_TrackedDeliveryFromAbroad'
     * @return string 'FR_TrackedDeliveryFromAbroad'
     */
    const VALUE_FR_TRACKED_DELIVERY_FROM_ABROAD = 'FR_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'IN_Regular'
     * @return string 'IN_Regular'
     */
    const VALUE_IN_REGULAR = 'IN_Regular';
    /**
     * Constant for value 'IN_Express'
     * @return string 'IN_Express'
     */
    const VALUE_IN_EXPRESS = 'IN_Express';
    /**
     * Constant for value 'IN_NationalCOD'
     * @return string 'IN_NationalCOD'
     */
    const VALUE_IN_NATIONAL_COD = 'IN_NationalCOD';
    /**
     * Constant for value 'IN_Courier'
     * @return string 'IN_Courier'
     */
    const VALUE_IN_COURIER = 'IN_Courier';
    /**
     * Constant for value 'IN_LocalCOD'
     * @return string 'IN_LocalCOD'
     */
    const VALUE_IN_LOCAL_COD = 'IN_LocalCOD';
    /**
     * Constant for value 'IN_StandardInternational'
     * @return string 'IN_StandardInternational'
     */
    const VALUE_IN_STANDARD_INTERNATIONAL = 'IN_StandardInternational';
    /**
     * Constant for value 'IN_ExpeditedInternational'
     * @return string 'IN_ExpeditedInternational'
     */
    const VALUE_IN_EXPEDITED_INTERNATIONAL = 'IN_ExpeditedInternational';
    /**
     * Constant for value 'IN_OtherInternational'
     * @return string 'IN_OtherInternational'
     */
    const VALUE_IN_OTHER_INTERNATIONAL = 'IN_OtherInternational';
    /**
     * Constant for value 'IN_FlatRateCOD'
     * @return string 'IN_FlatRateCOD'
     */
    const VALUE_IN_FLAT_RATE_COD = 'IN_FlatRateCOD';
    /**
     * Constant for value 'IN_BuyerPicksUpAndPays'
     * @return string 'IN_BuyerPicksUpAndPays'
     */
    const VALUE_IN_BUYER_PICKS_UP_AND_PAYS = 'IN_BuyerPicksUpAndPays';
    /**
     * Constant for value 'IT_RegularMail'
     * @return string 'IT_RegularMail'
     */
    const VALUE_IT_REGULAR_MAIL = 'IT_RegularMail';
    /**
     * Constant for value 'IT_PriorityMail'
     * @return string 'IT_PriorityMail'
     */
    const VALUE_IT_PRIORITY_MAIL = 'IT_PriorityMail';
    /**
     * Constant for value 'IT_MailRegisteredLetter'
     * @return string 'IT_MailRegisteredLetter'
     */
    const VALUE_IT_MAIL_REGISTERED_LETTER = 'IT_MailRegisteredLetter';
    /**
     * Constant for value 'IT_MailRegisteredLetterWithMark'
     * @return string 'IT_MailRegisteredLetterWithMark'
     */
    const VALUE_IT_MAIL_REGISTERED_LETTER_WITH_MARK = 'IT_MailRegisteredLetterWithMark';
    /**
     * Constant for value 'IT_InsuredMail'
     * @return string 'IT_InsuredMail'
     */
    const VALUE_IT_INSURED_MAIL = 'IT_InsuredMail';
    /**
     * Constant for value 'IT_QuickMail'
     * @return string 'IT_QuickMail'
     */
    const VALUE_IT_QUICK_MAIL = 'IT_QuickMail';
    /**
     * Constant for value 'IT_RegularPackage'
     * @return string 'IT_RegularPackage'
     */
    const VALUE_IT_REGULAR_PACKAGE = 'IT_RegularPackage';
    /**
     * Constant for value 'IT_QuickPackage1'
     * @return string 'IT_QuickPackage1'
     */
    const VALUE_IT_QUICK_PACKAGE_1 = 'IT_QuickPackage1';
    /**
     * Constant for value 'IT_QuickPackage3'
     * @return string 'IT_QuickPackage3'
     */
    const VALUE_IT_QUICK_PACKAGE_3 = 'IT_QuickPackage3';
    /**
     * Constant for value 'IT_ExpressCourier'
     * @return string 'IT_ExpressCourier'
     */
    const VALUE_IT_EXPRESS_COURIER = 'IT_ExpressCourier';
    /**
     * Constant for value 'IT_ExpressPackageMaxi'
     * @return string 'IT_ExpressPackageMaxi'
     */
    const VALUE_IT_EXPRESS_PACKAGE_MAXI = 'IT_ExpressPackageMaxi';
    /**
     * Constant for value 'IT_StandardInternational'
     * @return string 'IT_StandardInternational'
     */
    const VALUE_IT_STANDARD_INTERNATIONAL = 'IT_StandardInternational';
    /**
     * Constant for value 'IT_ExpeditedInternational'
     * @return string 'IT_ExpeditedInternational'
     */
    const VALUE_IT_EXPEDITED_INTERNATIONAL = 'IT_ExpeditedInternational';
    /**
     * Constant for value 'IT_OtherInternational'
     * @return string 'IT_OtherInternational'
     */
    const VALUE_IT_OTHER_INTERNATIONAL = 'IT_OtherInternational';
    /**
     * Constant for value 'IT_TrackedDeliveryFromAbroad'
     * @return string 'IT_TrackedDeliveryFromAbroad'
     */
    const VALUE_IT_TRACKED_DELIVERY_FROM_ABROAD = 'IT_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'NL_StandardDelivery'
     * @return string 'NL_StandardDelivery'
     */
    const VALUE_NL_STANDARD_DELIVERY = 'NL_StandardDelivery';
    /**
     * Constant for value 'NL_ParcelPost'
     * @return string 'NL_ParcelPost'
     */
    const VALUE_NL_PARCEL_POST = 'NL_ParcelPost';
    /**
     * Constant for value 'NL_RegisteredMail'
     * @return string 'NL_RegisteredMail'
     */
    const VALUE_NL_REGISTERED_MAIL = 'NL_RegisteredMail';
    /**
     * Constant for value 'NL_Other'
     * @return string 'NL_Other'
     */
    const VALUE_NL_OTHER = 'NL_Other';
    /**
     * Constant for value 'NL_TPGPostTNTInternational'
     * @return string 'NL_TPGPostTNTInternational'
     */
    const VALUE_NL_TPGPOST_TNTINTERNATIONAL = 'NL_TPGPostTNTInternational';
    /**
     * Constant for value 'NL_UPSInternational'
     * @return string 'NL_UPSInternational'
     */
    const VALUE_NL_UPSINTERNATIONAL = 'NL_UPSInternational';
    /**
     * Constant for value 'NL_FedExInternational'
     * @return string 'NL_FedExInternational'
     */
    const VALUE_NL_FED_EX_INTERNATIONAL = 'NL_FedExInternational';
    /**
     * Constant for value 'NL_DHLInternational'
     * @return string 'NL_DHLInternational'
     */
    const VALUE_NL_DHLINTERNATIONAL = 'NL_DHLInternational';
    /**
     * Constant for value 'NL_DPDGBRInternational'
     * @return string 'NL_DPDGBRInternational'
     */
    const VALUE_NL_DPDGBRINTERNATIONAL = 'NL_DPDGBRInternational';
    /**
     * Constant for value 'NL_GLSBusinessInternational'
     * @return string 'NL_GLSBusinessInternational'
     */
    const VALUE_NL_GLSBUSINESS_INTERNATIONAL = 'NL_GLSBusinessInternational';
    /**
     * Constant for value 'NL_StandardInternational'
     * @return string 'NL_StandardInternational'
     */
    const VALUE_NL_STANDARD_INTERNATIONAL = 'NL_StandardInternational';
    /**
     * Constant for value 'NL_ExpeditedInternational'
     * @return string 'NL_ExpeditedInternational'
     */
    const VALUE_NL_EXPEDITED_INTERNATIONAL = 'NL_ExpeditedInternational';
    /**
     * Constant for value 'NL_OtherInternational'
     * @return string 'NL_OtherInternational'
     */
    const VALUE_NL_OTHER_INTERNATIONAL = 'NL_OtherInternational';
    /**
     * Constant for value 'NL_EconomyDeliveryFromAbroad'
     * @return string 'NL_EconomyDeliveryFromAbroad'
     */
    const VALUE_NL_ECONOMY_DELIVERY_FROM_ABROAD = 'NL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'NL_StandardDeliveryFromAbroad'
     * @return string 'NL_StandardDeliveryFromAbroad'
     */
    const VALUE_NL_STANDARD_DELIVERY_FROM_ABROAD = 'NL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'NL_ExpressDeliveryFromAbroad'
     * @return string 'NL_ExpressDeliveryFromAbroad'
     */
    const VALUE_NL_EXPRESS_DELIVERY_FROM_ABROAD = 'NL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'NL_TrackedDeliveryFromAbroad'
     * @return string 'NL_TrackedDeliveryFromAbroad'
     */
    const VALUE_NL_TRACKED_DELIVERY_FROM_ABROAD = 'NL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'TW_RegisteredMail'
     * @return string 'TW_RegisteredMail'
     */
    const VALUE_TW_REGISTERED_MAIL = 'TW_RegisteredMail';
    /**
     * Constant for value 'TW_UnregisteredMail'
     * @return string 'TW_UnregisteredMail'
     */
    const VALUE_TW_UNREGISTERED_MAIL = 'TW_UnregisteredMail';
    /**
     * Constant for value 'TW_COD'
     * @return string 'TW_COD'
     */
    const VALUE_TW_COD = 'TW_COD';
    /**
     * Constant for value 'TW_DwellingMatchPost'
     * @return string 'TW_DwellingMatchPost'
     */
    const VALUE_TW_DWELLING_MATCH_POST = 'TW_DwellingMatchPost';
    /**
     * Constant for value 'TW_DwellingMatchCOD'
     * @return string 'TW_DwellingMatchCOD'
     */
    const VALUE_TW_DWELLING_MATCH_COD = 'TW_DwellingMatchCOD';
    /**
     * Constant for value 'TW_SelfPickup'
     * @return string 'TW_SelfPickup'
     */
    const VALUE_TW_SELF_PICKUP = 'TW_SelfPickup';
    /**
     * Constant for value 'TW_ParcelPost'
     * @return string 'TW_ParcelPost'
     */
    const VALUE_TW_PARCEL_POST = 'TW_ParcelPost';
    /**
     * Constant for value 'TW_ExpressMail'
     * @return string 'TW_ExpressMail'
     */
    const VALUE_TW_EXPRESS_MAIL = 'TW_ExpressMail';
    /**
     * Constant for value 'TW_Other'
     * @return string 'TW_Other'
     */
    const VALUE_TW_OTHER = 'TW_Other';
    /**
     * Constant for value 'TW_CPInternationalLetterPost'
     * @return string 'TW_CPInternationalLetterPost'
     */
    const VALUE_TW_CPINTERNATIONAL_LETTER_POST = 'TW_CPInternationalLetterPost';
    /**
     * Constant for value 'TW_CPInternationalParcelPost'
     * @return string 'TW_CPInternationalParcelPost'
     */
    const VALUE_TW_CPINTERNATIONAL_PARCEL_POST = 'TW_CPInternationalParcelPost';
    /**
     * Constant for value 'TW_CPInternationalRegisteredLetterPost'
     * @return string 'TW_CPInternationalRegisteredLetterPost'
     */
    const VALUE_TW_CPINTERNATIONAL_REGISTERED_LETTER_POST = 'TW_CPInternationalRegisteredLetterPost';
    /**
     * Constant for value 'TW_CPInternationalRegisteredParcelPost'
     * @return string 'TW_CPInternationalRegisteredParcelPost'
     */
    const VALUE_TW_CPINTERNATIONAL_REGISTERED_PARCEL_POST = 'TW_CPInternationalRegisteredParcelPost';
    /**
     * Constant for value 'TW_CPInternationalEMS'
     * @return string 'TW_CPInternationalEMS'
     */
    const VALUE_TW_CPINTERNATIONAL_EMS = 'TW_CPInternationalEMS';
    /**
     * Constant for value 'TW_CPInternationalOceanShippingParcel'
     * @return string 'TW_CPInternationalOceanShippingParcel'
     */
    const VALUE_TW_CPINTERNATIONAL_OCEAN_SHIPPING_PARCEL = 'TW_CPInternationalOceanShippingParcel';
    /**
     * Constant for value 'TW_FedExInternationalPriority'
     * @return string 'TW_FedExInternationalPriority'
     */
    const VALUE_TW_FED_EX_INTERNATIONAL_PRIORITY = 'TW_FedExInternationalPriority';
    /**
     * Constant for value 'TW_FedExInternationalEconomy'
     * @return string 'TW_FedExInternationalEconomy'
     */
    const VALUE_TW_FED_EX_INTERNATIONAL_ECONOMY = 'TW_FedExInternationalEconomy';
    /**
     * Constant for value 'TW_UPSWorldwideExpedited'
     * @return string 'TW_UPSWorldwideExpedited'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPEDITED = 'TW_UPSWorldwideExpedited';
    /**
     * Constant for value 'TW_UPSWorldwideExpress'
     * @return string 'TW_UPSWorldwideExpress'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPRESS = 'TW_UPSWorldwideExpress';
    /**
     * Constant for value 'TW_UPSWorldwideExpressPlus'
     * @return string 'TW_UPSWorldwideExpressPlus'
     */
    const VALUE_TW_UPSWORLDWIDE_EXPRESS_PLUS = 'TW_UPSWorldwideExpressPlus';
    /**
     * Constant for value 'TW_OtherInternational'
     * @return string 'TW_OtherInternational'
     */
    const VALUE_TW_OTHER_INTERNATIONAL = 'TW_OtherInternational';
    /**
     * Constant for value 'UK_RoyalMailFirstClassStandard'
     * @return string 'UK_RoyalMailFirstClassStandard'
     */
    const VALUE_UK_ROYAL_MAIL_FIRST_CLASS_STANDARD = 'UK_RoyalMailFirstClassStandard';
    /**
     * Constant for value 'UK_RoyalMailSecondClassStandard'
     * @return string 'UK_RoyalMailSecondClassStandard'
     */
    const VALUE_UK_ROYAL_MAIL_SECOND_CLASS_STANDARD = 'UK_RoyalMailSecondClassStandard';
    /**
     * Constant for value 'UK_RoyalMailFirstClassRecorded'
     * @return string 'UK_RoyalMailFirstClassRecorded'
     */
    const VALUE_UK_ROYAL_MAIL_FIRST_CLASS_RECORDED = 'UK_RoyalMailFirstClassRecorded';
    /**
     * Constant for value 'UK_RoyalMailSecondClassRecorded'
     * @return string 'UK_RoyalMailSecondClassRecorded'
     */
    const VALUE_UK_ROYAL_MAIL_SECOND_CLASS_RECORDED = 'UK_RoyalMailSecondClassRecorded';
    /**
     * Constant for value 'UK_RoyalMailSpecialDelivery'
     * @return string 'UK_RoyalMailSpecialDelivery'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY = 'UK_RoyalMailSpecialDelivery';
    /**
     * Constant for value 'UK_RoyalMailStandardParcel'
     * @return string 'UK_RoyalMailStandardParcel'
     */
    const VALUE_UK_ROYAL_MAIL_STANDARD_PARCEL = 'UK_RoyalMailStandardParcel';
    /**
     * Constant for value 'UK_Parcelforce24'
     * @return string 'UK_Parcelforce24'
     */
    const VALUE_UK_PARCELFORCE_24 = 'UK_Parcelforce24';
    /**
     * Constant for value 'UK_Parcelforce48'
     * @return string 'UK_Parcelforce48'
     */
    const VALUE_UK_PARCELFORCE_48 = 'UK_Parcelforce48';
    /**
     * Constant for value 'UK_OtherCourier'
     * @return string 'UK_OtherCourier'
     */
    const VALUE_UK_OTHER_COURIER = 'UK_OtherCourier';
    /**
     * Constant for value 'UK_myHermesDoorToDoorService'
     * @return string 'UK_myHermesDoorToDoorService'
     */
    const VALUE_UK_MY_HERMES_DOOR_TO_DOOR_SERVICE = 'UK_myHermesDoorToDoorService';
    /**
     * Constant for value 'UK_CollectDropAtStoreDeliveryToDoor'
     * @return string 'UK_CollectDropAtStoreDeliveryToDoor'
     */
    const VALUE_UK_COLLECT_DROP_AT_STORE_DELIVERY_TO_DOOR = 'UK_CollectDropAtStoreDeliveryToDoor';
    /**
     * Constant for value 'UK_SellersStandardRate'
     * @return string 'UK_SellersStandardRate'
     */
    const VALUE_UK_SELLERS_STANDARD_RATE = 'UK_SellersStandardRate';
    /**
     * Constant for value 'UK_CollectInPerson'
     * @return string 'UK_CollectInPerson'
     */
    const VALUE_UK_COLLECT_IN_PERSON = 'UK_CollectInPerson';
    /**
     * Constant for value 'UK_SellersStandardInternationalRate'
     * @return string 'UK_SellersStandardInternationalRate'
     */
    const VALUE_UK_SELLERS_STANDARD_INTERNATIONAL_RATE = 'UK_SellersStandardInternationalRate';
    /**
     * Constant for value 'UK_RoyalMailAirmailInternational'
     * @return string 'UK_RoyalMailAirmailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_AIRMAIL_INTERNATIONAL = 'UK_RoyalMailAirmailInternational';
    /**
     * Constant for value 'UK_RoyalMailAirsureInternational'
     * @return string 'UK_RoyalMailAirsureInternational'
     */
    const VALUE_UK_ROYAL_MAIL_AIRSURE_INTERNATIONAL = 'UK_RoyalMailAirsureInternational';
    /**
     * Constant for value 'UK_RoyalMailSurfaceMailInternational'
     * @return string 'UK_RoyalMailSurfaceMailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_SURFACE_MAIL_INTERNATIONAL = 'UK_RoyalMailSurfaceMailInternational';
    /**
     * Constant for value 'UK_RoyalMailInternationalSignedFor'
     * @return string 'UK_RoyalMailInternationalSignedFor'
     */
    const VALUE_UK_ROYAL_MAIL_INTERNATIONAL_SIGNED_FOR = 'UK_RoyalMailInternationalSignedFor';
    /**
     * Constant for value 'UK_RoyalMailHMForcesMailInternational'
     * @return string 'UK_RoyalMailHMForcesMailInternational'
     */
    const VALUE_UK_ROYAL_MAIL_HMFORCES_MAIL_INTERNATIONAL = 'UK_RoyalMailHMForcesMailInternational';
    /**
     * Constant for value 'UK_ParcelForceInternationalDatapost'
     * @return string 'UK_ParcelForceInternationalDatapost'
     */
    const VALUE_UK_PARCEL_FORCE_INTERNATIONAL_DATAPOST = 'UK_ParcelForceInternationalDatapost';
    /**
     * Constant for value 'UK_ParcelForceIreland24International'
     * @return string 'UK_ParcelForceIreland24International'
     */
    const VALUE_UK_PARCEL_FORCE_IRELAND_24_INTERNATIONAL = 'UK_ParcelForceIreland24International';
    /**
     * Constant for value 'UK_ParcelForceEuro48International'
     * @return string 'UK_ParcelForceEuro48International'
     */
    const VALUE_UK_PARCEL_FORCE_EURO_48_INTERNATIONAL = 'UK_ParcelForceEuro48International';
    /**
     * Constant for value 'UK_ParcelForceInternationalScheduled'
     * @return string 'UK_ParcelForceInternationalScheduled'
     */
    const VALUE_UK_PARCEL_FORCE_INTERNATIONAL_SCHEDULED = 'UK_ParcelForceInternationalScheduled';
    /**
     * Constant for value 'UK_OtherCourierOrDeliveryInternational'
     * @return string 'UK_OtherCourierOrDeliveryInternational'
     */
    const VALUE_UK_OTHER_COURIER_OR_DELIVERY_INTERNATIONAL = 'UK_OtherCourierOrDeliveryInternational';
    /**
     * Constant for value 'UK_CollectInPersonInternational'
     * @return string 'UK_CollectInPersonInternational'
     */
    const VALUE_UK_COLLECT_IN_PERSON_INTERNATIONAL = 'UK_CollectInPersonInternational';
    /**
     * Constant for value 'UK_ParcelForceIntlExpress'
     * @return string 'UK_ParcelForceIntlExpress'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_EXPRESS = 'UK_ParcelForceIntlExpress';
    /**
     * Constant for value 'UK_ParcelForceIntlValue'
     * @return string 'UK_ParcelForceIntlValue'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_VALUE = 'UK_ParcelForceIntlValue';
    /**
     * Constant for value 'UK_ParcelForceIntlEconomy'
     * @return string 'UK_ParcelForceIntlEconomy'
     */
    const VALUE_UK_PARCEL_FORCE_INTL_ECONOMY = 'UK_ParcelForceIntlEconomy';
    /**
     * Constant for value 'UK_TrackedDeliveryFromAbroad'
     * @return string 'UK_TrackedDeliveryFromAbroad'
     */
    const VALUE_UK_TRACKED_DELIVERY_FROM_ABROAD = 'UK_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'UK_IntlTrackedPostage'
     * @return string 'UK_IntlTrackedPostage'
     */
    const VALUE_UK_INTL_TRACKED_POSTAGE = 'UK_IntlTrackedPostage';
    /**
     * Constant for value 'IE_SellersStandardRate'
     * @return string 'IE_SellersStandardRate'
     */
    const VALUE_IE_SELLERS_STANDARD_RATE = 'IE_SellersStandardRate';
    /**
     * Constant for value 'IE_FirstClassLetterService'
     * @return string 'IE_FirstClassLetterService'
     */
    const VALUE_IE_FIRST_CLASS_LETTER_SERVICE = 'IE_FirstClassLetterService';
    /**
     * Constant for value 'IE_SwiftPostNational'
     * @return string 'IE_SwiftPostNational'
     */
    const VALUE_IE_SWIFT_POST_NATIONAL = 'IE_SwiftPostNational';
    /**
     * Constant for value 'IE_RegisteredPost'
     * @return string 'IE_RegisteredPost'
     */
    const VALUE_IE_REGISTERED_POST = 'IE_RegisteredPost';
    /**
     * Constant for value 'IE_EMSSDSCourier'
     * @return string 'IE_EMSSDSCourier'
     */
    const VALUE_IE_EMSSDSCOURIER = 'IE_EMSSDSCourier';
    /**
     * Constant for value 'IE_EconomySDSCourier'
     * @return string 'IE_EconomySDSCourier'
     */
    const VALUE_IE_ECONOMY_SDSCOURIER = 'IE_EconomySDSCourier';
    /**
     * Constant for value 'IE_OtherCourier'
     * @return string 'IE_OtherCourier'
     */
    const VALUE_IE_OTHER_COURIER = 'IE_OtherCourier';
    /**
     * Constant for value 'IE_CollectionInPerson'
     * @return string 'IE_CollectionInPerson'
     */
    const VALUE_IE_COLLECTION_IN_PERSON = 'IE_CollectionInPerson';
    /**
     * Constant for value 'IE_SellersStandardRateInternational'
     * @return string 'IE_SellersStandardRateInternational'
     */
    const VALUE_IE_SELLERS_STANDARD_RATE_INTERNATIONAL = 'IE_SellersStandardRateInternational';
    /**
     * Constant for value 'IE_InternationalEconomyService'
     * @return string 'IE_InternationalEconomyService'
     */
    const VALUE_IE_INTERNATIONAL_ECONOMY_SERVICE = 'IE_InternationalEconomyService';
    /**
     * Constant for value 'IE_InternationalPriorityService'
     * @return string 'IE_InternationalPriorityService'
     */
    const VALUE_IE_INTERNATIONAL_PRIORITY_SERVICE = 'IE_InternationalPriorityService';
    /**
     * Constant for value 'IE_SwiftPostExpressInternational'
     * @return string 'IE_SwiftPostExpressInternational'
     */
    const VALUE_IE_SWIFT_POST_EXPRESS_INTERNATIONAL = 'IE_SwiftPostExpressInternational';
    /**
     * Constant for value 'IE_SwiftPostInternational'
     * @return string 'IE_SwiftPostInternational'
     */
    const VALUE_IE_SWIFT_POST_INTERNATIONAL = 'IE_SwiftPostInternational';
    /**
     * Constant for value 'IE_EMSSDSCourierInternational'
     * @return string 'IE_EMSSDSCourierInternational'
     */
    const VALUE_IE_EMSSDSCOURIER_INTERNATIONAL = 'IE_EMSSDSCourierInternational';
    /**
     * Constant for value 'IE_EconomySDSCourierInternational'
     * @return string 'IE_EconomySDSCourierInternational'
     */
    const VALUE_IE_ECONOMY_SDSCOURIER_INTERNATIONAL = 'IE_EconomySDSCourierInternational';
    /**
     * Constant for value 'IE_OtherCourierInternational'
     * @return string 'IE_OtherCourierInternational'
     */
    const VALUE_IE_OTHER_COURIER_INTERNATIONAL = 'IE_OtherCourierInternational';
    /**
     * Constant for value 'IE_CollectionInPersonInternational'
     * @return string 'IE_CollectionInPersonInternational'
     */
    const VALUE_IE_COLLECTION_IN_PERSON_INTERNATIONAL = 'IE_CollectionInPersonInternational';
    /**
     * Constant for value 'IE_EconomyDeliveryFromAbroad'
     * @return string 'IE_EconomyDeliveryFromAbroad'
     */
    const VALUE_IE_ECONOMY_DELIVERY_FROM_ABROAD = 'IE_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'IE_StandardDeliveryFromAbroad'
     * @return string 'IE_StandardDeliveryFromAbroad'
     */
    const VALUE_IE_STANDARD_DELIVERY_FROM_ABROAD = 'IE_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'IE_ExpressDeliveryFromAbroad'
     * @return string 'IE_ExpressDeliveryFromAbroad'
     */
    const VALUE_IE_EXPRESS_DELIVERY_FROM_ABROAD = 'IE_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'IE_TrackedDeliveryFromAbroad'
     * @return string 'IE_TrackedDeliveryFromAbroad'
     */
    const VALUE_IE_TRACKED_DELIVERY_FROM_ABROAD = 'IE_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'PL_DomesticRegular'
     * @return string 'PL_DomesticRegular'
     */
    const VALUE_PL_DOMESTIC_REGULAR = 'PL_DomesticRegular';
    /**
     * Constant for value 'PL_DomesticSpecial'
     * @return string 'PL_DomesticSpecial'
     */
    const VALUE_PL_DOMESTIC_SPECIAL = 'PL_DomesticSpecial';
    /**
     * Constant for value 'PL_EconomyDeliveryFromAbroad'
     * @return string 'PL_EconomyDeliveryFromAbroad'
     */
    const VALUE_PL_ECONOMY_DELIVERY_FROM_ABROAD = 'PL_EconomyDeliveryFromAbroad';
    /**
     * Constant for value 'PL_StandardDeliveryFromAbroad'
     * @return string 'PL_StandardDeliveryFromAbroad'
     */
    const VALUE_PL_STANDARD_DELIVERY_FROM_ABROAD = 'PL_StandardDeliveryFromAbroad';
    /**
     * Constant for value 'PL_ExpressDeliveryFromAbroad'
     * @return string 'PL_ExpressDeliveryFromAbroad'
     */
    const VALUE_PL_EXPRESS_DELIVERY_FROM_ABROAD = 'PL_ExpressDeliveryFromAbroad';
    /**
     * Constant for value 'PL_TrackedDeliveryFromAbroad'
     * @return string 'PL_TrackedDeliveryFromAbroad'
     */
    const VALUE_PL_TRACKED_DELIVERY_FROM_ABROAD = 'PL_TrackedDeliveryFromAbroad';
    /**
     * Constant for value 'FreightShipping'
     * @return string 'FreightShipping'
     */
    const VALUE_FREIGHT_SHIPPING = 'FreightShipping';
    /**
     * Constant for value 'FreightOtherShipping'
     * @return string 'FreightOtherShipping'
     */
    const VALUE_FREIGHT_OTHER_SHIPPING = 'FreightOtherShipping';
    /**
     * Constant for value 'Freight'
     * @return string 'Freight'
     */
    const VALUE_FREIGHT = 'Freight';
    /**
     * Constant for value 'FreightShippingInternational'
     * @return string 'FreightShippingInternational'
     */
    const VALUE_FREIGHT_SHIPPING_INTERNATIONAL = 'FreightShippingInternational';
    /**
     * Constant for value 'USPSGround'
     * @return string 'USPSGround'
     */
    const VALUE_USPSGROUND = 'USPSGround';
    /**
     * Constant for value 'ShippingMethodOvernight'
     * @return string 'ShippingMethodOvernight'
     */
    const VALUE_SHIPPING_METHOD_OVERNIGHT = 'ShippingMethodOvernight';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'USPSPriorityFlatRateEnvelope'
     * @return string 'USPSPriorityFlatRateEnvelope'
     */
    const VALUE_USPSPRIORITY_FLAT_RATE_ENVELOPE = 'USPSPriorityFlatRateEnvelope';
    /**
     * Constant for value 'USPSPriorityFlatRateBox'
     * @return string 'USPSPriorityFlatRateBox'
     */
    const VALUE_USPSPRIORITY_FLAT_RATE_BOX = 'USPSPriorityFlatRateBox';
    /**
     * Constant for value 'USPSGlobalPrioritySmallEnvelope'
     * @return string 'USPSGlobalPrioritySmallEnvelope'
     */
    const VALUE_USPSGLOBAL_PRIORITY_SMALL_ENVELOPE = 'USPSGlobalPrioritySmallEnvelope';
    /**
     * Constant for value 'USPSGlobalPriorityLargeEnvelope'
     * @return string 'USPSGlobalPriorityLargeEnvelope'
     */
    const VALUE_USPSGLOBAL_PRIORITY_LARGE_ENVELOPE = 'USPSGlobalPriorityLargeEnvelope';
    /**
     * Constant for value 'USPSExpressFlatRateEnvelope'
     * @return string 'USPSExpressFlatRateEnvelope'
     */
    const VALUE_USPSEXPRESS_FLAT_RATE_ENVELOPE = 'USPSExpressFlatRateEnvelope';
    /**
     * Constant for value 'UPSWorldWideExpressBox10kg'
     * @return string 'UPSWorldWideExpressBox10kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_BOX_10_KG = 'UPSWorldWideExpressBox10kg';
    /**
     * Constant for value 'UPSWorldWideExpressBox25kg'
     * @return string 'UPSWorldWideExpressBox25kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_BOX_25_KG = 'UPSWorldWideExpressBox25kg';
    /**
     * Constant for value 'UPSWorldWideExpressPlusBox10kg'
     * @return string 'UPSWorldWideExpressPlusBox10kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_10_KG = 'UPSWorldWideExpressPlusBox10kg';
    /**
     * Constant for value 'UPSWorldWideExpressPlusBox25kg'
     * @return string 'UPSWorldWideExpressPlusBox25kg'
     */
    const VALUE_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_25_KG = 'UPSWorldWideExpressPlusBox25kg';
    /**
     * Constant for value 'HK_LocalPickUpOnly'
     * @return string 'HK_LocalPickUpOnly'
     */
    const VALUE_HK_LOCAL_PICK_UP_ONLY = 'HK_LocalPickUpOnly';
    /**
     * Constant for value 'HK_LocalCourier'
     * @return string 'HK_LocalCourier'
     */
    const VALUE_HK_LOCAL_COURIER = 'HK_LocalCourier';
    /**
     * Constant for value 'HK_DomesticRegularShipping'
     * @return string 'HK_DomesticRegularShipping'
     */
    const VALUE_HK_DOMESTIC_REGULAR_SHIPPING = 'HK_DomesticRegularShipping';
    /**
     * Constant for value 'HK_DomesticSpecialShipping'
     * @return string 'HK_DomesticSpecialShipping'
     */
    const VALUE_HK_DOMESTIC_SPECIAL_SHIPPING = 'HK_DomesticSpecialShipping';
    /**
     * Constant for value 'HK_InternationalRegularShipping'
     * @return string 'HK_InternationalRegularShipping'
     */
    const VALUE_HK_INTERNATIONAL_REGULAR_SHIPPING = 'HK_InternationalRegularShipping';
    /**
     * Constant for value 'HK_InternationalSpecialShipping'
     * @return string 'HK_InternationalSpecialShipping'
     */
    const VALUE_HK_INTERNATIONAL_SPECIAL_SHIPPING = 'HK_InternationalSpecialShipping';
    /**
     * Constant for value 'SG_LocalPickUpOnly'
     * @return string 'SG_LocalPickUpOnly'
     */
    const VALUE_SG_LOCAL_PICK_UP_ONLY = 'SG_LocalPickUpOnly';
    /**
     * Constant for value 'SG_LocalCourier'
     * @return string 'SG_LocalCourier'
     */
    const VALUE_SG_LOCAL_COURIER = 'SG_LocalCourier';
    /**
     * Constant for value 'SG_DomesticStandardMail'
     * @return string 'SG_DomesticStandardMail'
     */
    const VALUE_SG_DOMESTIC_STANDARD_MAIL = 'SG_DomesticStandardMail';
    /**
     * Constant for value 'SG_DomesticNonStandardMail'
     * @return string 'SG_DomesticNonStandardMail'
     */
    const VALUE_SG_DOMESTIC_NON_STANDARD_MAIL = 'SG_DomesticNonStandardMail';
    /**
     * Constant for value 'SG_DomesticSpeedpostIslandwide'
     * @return string 'SG_DomesticSpeedpostIslandwide'
     */
    const VALUE_SG_DOMESTIC_SPEEDPOST_ISLANDWIDE = 'SG_DomesticSpeedpostIslandwide';
    /**
     * Constant for value 'SG_InternationalStandardMail'
     * @return string 'SG_InternationalStandardMail'
     */
    const VALUE_SG_INTERNATIONAL_STANDARD_MAIL = 'SG_InternationalStandardMail';
    /**
     * Constant for value 'SG_InternationalExpressMailService'
     * @return string 'SG_InternationalExpressMailService'
     */
    const VALUE_SG_INTERNATIONAL_EXPRESS_MAIL_SERVICE = 'SG_InternationalExpressMailService';
    /**
     * Constant for value 'SG_InternationalCourier'
     * @return string 'SG_InternationalCourier'
     */
    const VALUE_SG_INTERNATIONAL_COURIER = 'SG_InternationalCourier';
    /**
     * Constant for value 'BENL_DePostZendingNONPRIOR'
     * @return string 'BENL_DePostZendingNONPRIOR'
     */
    const VALUE_BENL_DE_POST_ZENDING_NONPRIOR = 'BENL_DePostZendingNONPRIOR';
    /**
     * Constant for value 'BENL_DePostZendingPRIOR'
     * @return string 'BENL_DePostZendingPRIOR'
     */
    const VALUE_BENL_DE_POST_ZENDING_PRIOR = 'BENL_DePostZendingPRIOR';
    /**
     * Constant for value 'BENL_DePostZendingAangetekend'
     * @return string 'BENL_DePostZendingAangetekend'
     */
    const VALUE_BENL_DE_POST_ZENDING_AANGETEKEND = 'BENL_DePostZendingAangetekend';
    /**
     * Constant for value 'BENL_KilopostPakje'
     * @return string 'BENL_KilopostPakje'
     */
    const VALUE_BENL_KILOPOST_PAKJE = 'BENL_KilopostPakje';
    /**
     * Constant for value 'BENL_Taxipost'
     * @return string 'BENL_Taxipost'
     */
    const VALUE_BENL_TAXIPOST = 'BENL_Taxipost';
    /**
     * Constant for value 'BENL_KialaAfhaalpunt'
     * @return string 'BENL_KialaAfhaalpunt'
     */
    const VALUE_BENL_KIALA_AFHAALPUNT = 'BENL_KialaAfhaalpunt';
    /**
     * Constant for value 'BENL_VasteKostenStandaardVerzending'
     * @return string 'BENL_VasteKostenStandaardVerzending'
     */
    const VALUE_BENL_VASTE_KOSTEN_STANDAARD_VERZENDING = 'BENL_VasteKostenStandaardVerzending';
    /**
     * Constant for value 'BENL_VasteKostenVersneldeVerzending'
     * @return string 'BENL_VasteKostenVersneldeVerzending'
     */
    const VALUE_BENL_VASTE_KOSTEN_VERSNELDE_VERZENDING = 'BENL_VasteKostenVersneldeVerzending';
    /**
     * Constant for value 'BENL_VerzekerdeVerzending'
     * @return string 'BENL_VerzekerdeVerzending'
     */
    const VALUE_BENL_VERZEKERDE_VERZENDING = 'BENL_VerzekerdeVerzending';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiNONPRIOR'
     * @return string 'BEFR_LaPosteEnvoiNONPRIOR'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_NONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiPRIOR'
     * @return string 'BEFR_LaPosteEnvoiPRIOR'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_PRIOR = 'BEFR_LaPosteEnvoiPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteEnvoiRecommande'
     * @return string 'BEFR_LaPosteEnvoiRecommande'
     */
    const VALUE_BEFR_LA_POSTE_ENVOI_RECOMMANDE = 'BEFR_LaPosteEnvoiRecommande';
    /**
     * Constant for value 'BEFR_PaquetKilopost'
     * @return string 'BEFR_PaquetKilopost'
     */
    const VALUE_BEFR_PAQUET_KILOPOST = 'BEFR_PaquetKilopost';
    /**
     * Constant for value 'BEFR_Taxipost'
     * @return string 'BEFR_Taxipost'
     */
    const VALUE_BEFR_TAXIPOST = 'BEFR_Taxipost';
    /**
     * Constant for value 'BEFR_PointRetraitKiala'
     * @return string 'BEFR_PointRetraitKiala'
     */
    const VALUE_BEFR_POINT_RETRAIT_KIALA = 'BEFR_PointRetraitKiala';
    /**
     * Constant for value 'BEFR_LivraisonStandardPrixforFaitaire'
     * @return string 'BEFR_LivraisonStandardPrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_STANDARD_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardPrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonExpressPrixforFaitaire'
     * @return string 'BEFR_LivraisonExpressPrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_EXPRESS_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressPrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonSecurise'
     * @return string 'BEFR_LivraisonSecurise'
     */
    const VALUE_BEFR_LIVRAISON_SECURISE = 'BEFR_LivraisonSecurise';
    /**
     * Constant for value 'BENL_DePostZendingPRIORInternational'
     * @return string 'BENL_DePostZendingPRIORInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_PRIORINTERNATIONAL = 'BENL_DePostZendingPRIORInternational';
    /**
     * Constant for value 'BENL_DePostZendingNONPRIORInternational'
     * @return string 'BENL_DePostZendingNONPRIORInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_NONPRIORINTERNATIONAL = 'BENL_DePostZendingNONPRIORInternational';
    /**
     * Constant for value 'BENL_DePostZendingAangetekendInternational'
     * @return string 'BENL_DePostZendingAangetekendInternational'
     */
    const VALUE_BENL_DE_POST_ZENDING_AANGETEKEND_INTERNATIONAL = 'BENL_DePostZendingAangetekendInternational';
    /**
     * Constant for value 'BENL_KilopostPakjeInternational'
     * @return string 'BENL_KilopostPakjeInternational'
     */
    const VALUE_BENL_KILOPOST_PAKJE_INTERNATIONAL = 'BENL_KilopostPakjeInternational';
    /**
     * Constant for value 'BENL_TaxipostExpressverzending'
     * @return string 'BENL_TaxipostExpressverzending'
     */
    const VALUE_BENL_TAXIPOST_EXPRESSVERZENDING = 'BENL_TaxipostExpressverzending';
    /**
     * Constant for value 'BENL_VerzekerdeVerzendingInternational'
     * @return string 'BENL_VerzekerdeVerzendingInternational'
     */
    const VALUE_BENL_VERZEKERDE_VERZENDING_INTERNATIONAL = 'BENL_VerzekerdeVerzendingInternational';
    /**
     * Constant for value 'BEFR_LaPosteenvoiePRIOR'
     * @return string 'BEFR_LaPosteenvoiePRIOR'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_PRIOR = 'BEFR_LaPosteenvoiePRIOR';
    /**
     * Constant for value 'BEFR_LaPosteenvoieNONPRIOR'
     * @return string 'BEFR_LaPosteenvoieNONPRIOR'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_NONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';
    /**
     * Constant for value 'BEFR_LaPosteenvoieRecommande'
     * @return string 'BEFR_LaPosteenvoieRecommande'
     */
    const VALUE_BEFR_LA_POSTEENVOIE_RECOMMANDE = 'BEFR_LaPosteenvoieRecommande';
    /**
     * Constant for value 'BEFR_PaquetKilopostInternationale'
     * @return string 'BEFR_PaquetKilopostInternationale'
     */
    const VALUE_BEFR_PAQUET_KILOPOST_INTERNATIONALE = 'BEFR_PaquetKilopostInternationale';
    /**
     * Constant for value 'BEFR_ExpressTaxipost'
     * @return string 'BEFR_ExpressTaxipost'
     */
    const VALUE_BEFR_EXPRESS_TAXIPOST = 'BEFR_ExpressTaxipost';
    /**
     * Constant for value 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
     * @return string 'BEFR_LivraisonStandardInternationalePrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_STANDARD_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
     * @return string 'BEFR_LivraisonExpressInternationalePrixforFaitaire'
     */
    const VALUE_BEFR_LIVRAISON_EXPRESS_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';
    /**
     * Constant for value 'BEFR_LivraisonSecuriseInternational'
     * @return string 'BEFR_LivraisonSecuriseInternational'
     */
    const VALUE_BEFR_LIVRAISON_SECURISE_INTERNATIONAL = 'BEFR_LivraisonSecuriseInternational';
    /**
     * Constant for value 'FR_Chronopost'
     * @return string 'FR_Chronopost'
     */
    const VALUE_FR_CHRONOPOST = 'FR_Chronopost';
    /**
     * Constant for value 'UK_RoyalMailSpecialDeliveryNextDay'
     * @return string 'UK_RoyalMailSpecialDeliveryNextDay'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_NEXT_DAY = 'UK_RoyalMailSpecialDeliveryNextDay';
    /**
     * Constant for value 'CA_PostLightPacketInternational'
     * @return string 'CA_PostLightPacketInternational'
     */
    const VALUE_CA_POST_LIGHT_PACKET_INTERNATIONAL = 'CA_PostLightPacketInternational';
    /**
     * Constant for value 'CA_PostLightPacketUSA'
     * @return string 'CA_PostLightPacketUSA'
     */
    const VALUE_CA_POST_LIGHT_PACKET_USA = 'CA_PostLightPacketUSA';
    /**
     * Constant for value 'PL_DHLInternational'
     * @return string 'PL_DHLInternational'
     */
    const VALUE_PL_DHLINTERNATIONAL = 'PL_DHLInternational';
    /**
     * Constant for value 'PL_InternationalRegular'
     * @return string 'PL_InternationalRegular'
     */
    const VALUE_PL_INTERNATIONAL_REGULAR = 'PL_InternationalRegular';
    /**
     * Constant for value 'PL_InternationalSpecial'
     * @return string 'PL_InternationalSpecial'
     */
    const VALUE_PL_INTERNATIONAL_SPECIAL = 'PL_InternationalSpecial';
    /**
     * Constant for value 'PL_UPSInternational'
     * @return string 'PL_UPSInternational'
     */
    const VALUE_PL_UPSINTERNATIONAL = 'PL_UPSInternational';
    /**
     * Constant for value 'CAFR_StandardDelivery'
     * @return string 'CAFR_StandardDelivery'
     */
    const VALUE_CAFR_STANDARD_DELIVERY = 'CAFR_StandardDelivery';
    /**
     * Constant for value 'CAFR_ExpeditedDelivery'
     * @return string 'CAFR_ExpeditedDelivery'
     */
    const VALUE_CAFR_EXPEDITED_DELIVERY = 'CAFR_ExpeditedDelivery';
    /**
     * Constant for value 'CAFR_PostLettermail'
     * @return string 'CAFR_PostLettermail'
     */
    const VALUE_CAFR_POST_LETTERMAIL = 'CAFR_PostLettermail';
    /**
     * Constant for value 'CAFR_PostRegularParcel'
     * @return string 'CAFR_PostRegularParcel'
     */
    const VALUE_CAFR_POST_REGULAR_PARCEL = 'CAFR_PostRegularParcel';
    /**
     * Constant for value 'CAFR_PostExpeditedParcel'
     * @return string 'CAFR_PostExpeditedParcel'
     */
    const VALUE_CAFR_POST_EXPEDITED_PARCEL = 'CAFR_PostExpeditedParcel';
    /**
     * Constant for value 'CAFR_PostXpresspost'
     * @return string 'CAFR_PostXpresspost'
     */
    const VALUE_CAFR_POST_XPRESSPOST = 'CAFR_PostXpresspost';
    /**
     * Constant for value 'CAFR_PostPriorityCourier'
     * @return string 'CAFR_PostPriorityCourier'
     */
    const VALUE_CAFR_POST_PRIORITY_COURIER = 'CAFR_PostPriorityCourier';
    /**
     * Constant for value 'CAFR_StandardInternational'
     * @return string 'CAFR_StandardInternational'
     */
    const VALUE_CAFR_STANDARD_INTERNATIONAL = 'CAFR_StandardInternational';
    /**
     * Constant for value 'CAFR_ExpeditedInternational'
     * @return string 'CAFR_ExpeditedInternational'
     */
    const VALUE_CAFR_EXPEDITED_INTERNATIONAL = 'CAFR_ExpeditedInternational';
    /**
     * Constant for value 'CAFR_OtherInternational'
     * @return string 'CAFR_OtherInternational'
     */
    const VALUE_CAFR_OTHER_INTERNATIONAL = 'CAFR_OtherInternational';
    /**
     * Constant for value 'CAFR_PostExpeditedParcelUSA'
     * @return string 'CAFR_PostExpeditedParcelUSA'
     */
    const VALUE_CAFR_POST_EXPEDITED_PARCEL_USA = 'CAFR_PostExpeditedParcelUSA';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSA'
     * @return string 'CAFR_PostSmallPacketsUSA'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USA = 'CAFR_PostSmallPacketsUSA';
    /**
     * Constant for value 'CAFR_PostXpresspostUSA'
     * @return string 'CAFR_PostXpresspostUSA'
     */
    const VALUE_CAFR_POST_XPRESSPOST_USA = 'CAFR_PostXpresspostUSA';
    /**
     * Constant for value 'CAFR_PostXpresspostInternational'
     * @return string 'CAFR_PostXpresspostInternational'
     */
    const VALUE_CAFR_POST_XPRESSPOST_INTERNATIONAL = 'CAFR_PostXpresspostInternational';
    /**
     * Constant for value 'CAFR_PostInternationalParcelSurface'
     * @return string 'CAFR_PostInternationalParcelSurface'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_PARCEL_SURFACE = 'CAFR_PostInternationalParcelSurface';
    /**
     * Constant for value 'CAFR_PostInternationalParcelAir'
     * @return string 'CAFR_PostInternationalParcelAir'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_PARCEL_AIR = 'CAFR_PostInternationalParcelAir';
    /**
     * Constant for value 'CAFR_SmallPacketsInternational'
     * @return string 'CAFR_SmallPacketsInternational'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL = 'CAFR_SmallPacketsInternational';
    /**
     * Constant for value 'CAFR_PurolatorInternational'
     * @return string 'CAFR_PurolatorInternational'
     */
    const VALUE_CAFR_PUROLATOR_INTERNATIONAL = 'CAFR_PurolatorInternational';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSAGround'
     * @return string 'CAFR_PostSmallPacketsUSAGround'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USAGROUND = 'CAFR_PostSmallPacketsUSAGround';
    /**
     * Constant for value 'CAFR_PostSmallPacketsUSAAir'
     * @return string 'CAFR_PostSmallPacketsUSAAir'
     */
    const VALUE_CAFR_POST_SMALL_PACKETS_USAAIR = 'CAFR_PostSmallPacketsUSAAir';
    /**
     * Constant for value 'CAFR_SmallPacketsInternationalGround'
     * @return string 'CAFR_SmallPacketsInternationalGround'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_GROUND = 'CAFR_SmallPacketsInternationalGround';
    /**
     * Constant for value 'CAFR_SmallPacketsInternationalAir'
     * @return string 'CAFR_SmallPacketsInternationalAir'
     */
    const VALUE_CAFR_SMALL_PACKETS_INTERNATIONAL_AIR = 'CAFR_SmallPacketsInternationalAir';
    /**
     * Constant for value 'CAFR_PostUSALetterPost'
     * @return string 'CAFR_PostUSALetterPost'
     */
    const VALUE_CAFR_POST_USALETTER_POST = 'CAFR_PostUSALetterPost';
    /**
     * Constant for value 'CAFR_PostInternationalLetterPost'
     * @return string 'CAFR_PostInternationalLetterPost'
     */
    const VALUE_CAFR_POST_INTERNATIONAL_LETTER_POST = 'CAFR_PostInternationalLetterPost';
    /**
     * Constant for value 'CAFR_UPSExpressCanada'
     * @return string 'CAFR_UPSExpressCanada'
     */
    const VALUE_CAFR_UPSEXPRESS_CANADA = 'CAFR_UPSExpressCanada';
    /**
     * Constant for value 'CAFR_UPSExpressSaverCanada'
     * @return string 'CAFR_UPSExpressSaverCanada'
     */
    const VALUE_CAFR_UPSEXPRESS_SAVER_CANADA = 'CAFR_UPSExpressSaverCanada';
    /**
     * Constant for value 'CAFR_UPSExpeditedCanada'
     * @return string 'CAFR_UPSExpeditedCanada'
     */
    const VALUE_CAFR_UPSEXPEDITED_CANADA = 'CAFR_UPSExpeditedCanada';
    /**
     * Constant for value 'CAFR_UPSStandardCanada'
     * @return string 'CAFR_UPSStandardCanada'
     */
    const VALUE_CAFR_UPSSTANDARD_CANADA = 'CAFR_UPSStandardCanada';
    /**
     * Constant for value 'CAFR_UPSExpressUnitedStates'
     * @return string 'CAFR_UPSExpressUnitedStates'
     */
    const VALUE_CAFR_UPSEXPRESS_UNITED_STATES = 'CAFR_UPSExpressUnitedStates';
    /**
     * Constant for value 'CAFR_UPSExpeditedUnitedStates'
     * @return string 'CAFR_UPSExpeditedUnitedStates'
     */
    const VALUE_CAFR_UPSEXPEDITED_UNITED_STATES = 'CAFR_UPSExpeditedUnitedStates';
    /**
     * Constant for value 'CAFR_UPS3DaySelectUnitedStates'
     * @return string 'CAFR_UPS3DaySelectUnitedStates'
     */
    const VALUE_CAFR_UPS_3_DAY_SELECT_UNITED_STATES = 'CAFR_UPS3DaySelectUnitedStates';
    /**
     * Constant for value 'CAFR_UPSStandardUnitedStates'
     * @return string 'CAFR_UPSStandardUnitedStates'
     */
    const VALUE_CAFR_UPSSTANDARD_UNITED_STATES = 'CAFR_UPSStandardUnitedStates';
    /**
     * Constant for value 'CAFR_UPSWorldWideExpress'
     * @return string 'CAFR_UPSWorldWideExpress'
     */
    const VALUE_CAFR_UPSWORLD_WIDE_EXPRESS = 'CAFR_UPSWorldWideExpress';
    /**
     * Constant for value 'CAFR_UPSWorldWideExpedited'
     * @return string 'CAFR_UPSWorldWideExpedited'
     */
    const VALUE_CAFR_UPSWORLD_WIDE_EXPEDITED = 'CAFR_UPSWorldWideExpedited';
    /**
     * Constant for value 'UK_RoyalMailSpecialDelivery9am'
     * @return string 'UK_RoyalMailSpecialDelivery9am'
     */
    const VALUE_UK_ROYAL_MAIL_SPECIAL_DELIVERY_9_AM = 'UK_RoyalMailSpecialDelivery9am';
    /**
     * Constant for value 'USPSFirstClassMailInternational'
     * @return string 'USPSFirstClassMailInternational'
     */
    const VALUE_USPSFIRST_CLASS_MAIL_INTERNATIONAL = 'USPSFirstClassMailInternational';
    /**
     * Constant for value 'USPSPriorityMailInternational'
     * @return string 'USPSPriorityMailInternational'
     */
    const VALUE_USPSPRIORITY_MAIL_INTERNATIONAL = 'USPSPriorityMailInternational';
    /**
     * Constant for value 'USPSExpressMailInternational'
     * @return string 'USPSExpressMailInternational'
     */
    const VALUE_USPSEXPRESS_MAIL_INTERNATIONAL = 'USPSExpressMailInternational';
    /**
     * Constant for value 'CH_StandardInternational'
     * @return string 'CH_StandardInternational'
     */
    const VALUE_CH_STANDARD_INTERNATIONAL = 'CH_StandardInternational';
    /**
     * Constant for value 'CH_ExpeditedInternational'
     * @return string 'CH_ExpeditedInternational'
     */
    const VALUE_CH_EXPEDITED_INTERNATIONAL = 'CH_ExpeditedInternational';
    /**
     * Constant for value 'CH_SonstigerVersandSieheArtikelbeschreibung'
     * @return string 'CH_SonstigerVersandSieheArtikelbeschreibung'
     */
    const VALUE_CH_SONSTIGER_VERSAND_SIEHE_ARTIKELBESCHREIBUNG = 'CH_SonstigerVersandSieheArtikelbeschreibung';
    /**
     * Constant for value 'TW_StandardInternationalFixedRate'
     * @return string 'TW_StandardInternationalFixedRate'
     */
    const VALUE_TW_STANDARD_INTERNATIONAL_FIXED_RATE = 'TW_StandardInternationalFixedRate';
    /**
     * Constant for value 'TW_ExpeditedInternationalFixedRate'
     * @return string 'TW_ExpeditedInternationalFixedRate'
     */
    const VALUE_TW_EXPEDITED_INTERNATIONAL_FIXED_RATE = 'TW_ExpeditedInternationalFixedRate';
    /**
     * Constant for value 'USPSGlobalExpressGuaranteed'
     * @return string 'USPSGlobalExpressGuaranteed'
     */
    const VALUE_USPSGLOBAL_EXPRESS_GUARANTEED = 'USPSGlobalExpressGuaranteed';
    /**
     * Constant for value 'AU_RegularWithInsurance'
     * @return string 'AU_RegularWithInsurance'
     */
    const VALUE_AU_REGULAR_WITH_INSURANCE = 'AU_RegularWithInsurance';
    /**
     * Constant for value 'AU_ExpressWithInsurance'
     * @return string 'AU_ExpressWithInsurance'
     */
    const VALUE_AU_EXPRESS_WITH_INSURANCE = 'AU_ExpressWithInsurance';
    /**
     * Constant for value 'DE_DeutschePostWarensendungInternational'
     * @return string 'DE_DeutschePostWarensendungInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_WARENSENDUNG_INTERNATIONAL = 'DE_DeutschePostWarensendungInternational';
    /**
     * Constant for value 'DE_DeutschePostByendung'
     * @return string 'DE_DeutschePostByendung'
     */
    const VALUE_DE_DEUTSCHE_POST_BYENDUNG = 'DE_DeutschePostByendung';
    /**
     * Constant for value 'DE_HermesPaketUnversichertInternational'
     * @return string 'DE_HermesPaketUnversichertInternational'
     */
    const VALUE_DE_HERMES_PAKET_UNVERSICHERT_INTERNATIONAL = 'DE_HermesPaketUnversichertInternational';
    /**
     * Constant for value 'DE_HermesPaketVersichertInternational'
     * @return string 'DE_HermesPaketVersichertInternational'
     */
    const VALUE_DE_HERMES_PAKET_VERSICHERT_INTERNATIONAL = 'DE_HermesPaketVersichertInternational';
    /**
     * Constant for value 'DE_iLoxxTransportXXLInternational'
     * @return string 'DE_iLoxxTransportXXLInternational'
     */
    const VALUE_DE_I_LOXX_TRANSPORT_XXLINTERNATIONAL = 'DE_iLoxxTransportXXLInternational';
    /**
     * Constant for value 'DE_iLoxxUbernachtExpressInternational'
     * @return string 'DE_iLoxxUbernachtExpressInternational'
     */
    const VALUE_DE_I_LOXX_UBERNACHT_EXPRESS_INTERNATIONAL = 'DE_iLoxxUbernachtExpressInternational';
    /**
     * Constant for value 'DE_iLoxxStandardInternational'
     * @return string 'DE_iLoxxStandardInternational'
     */
    const VALUE_DE_I_LOXX_STANDARD_INTERNATIONAL = 'DE_iLoxxStandardInternational';
    /**
     * Constant for value 'DE_StandardInternational'
     * @return string 'DE_StandardInternational'
     */
    const VALUE_DE_STANDARD_INTERNATIONAL = 'DE_StandardInternational';
    /**
     * Constant for value 'DE_ExpeditedInternational'
     * @return string 'DE_ExpeditedInternational'
     */
    const VALUE_DE_EXPEDITED_INTERNATIONAL = 'DE_ExpeditedInternational';
    /**
     * Constant for value 'DE_DeutschePostBriefIntlEcon'
     * @return string 'DE_DeutschePostBriefIntlEcon'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_ECON = 'DE_DeutschePostBriefIntlEcon';
    /**
     * Constant for value 'DE_DeutschePostBriefIntlPri'
     * @return string 'DE_DeutschePostBriefIntlPri'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTL_PRI = 'DE_DeutschePostBriefIntlPri';
    /**
     * Constant for value 'AT_BitteTreffenSieEineAuswahl'
     * @return string 'AT_BitteTreffenSieEineAuswahl'
     */
    const VALUE_AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'AT_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'AT_EinschreibenVersandInklEinschreibengebuhr'
     * @return string 'AT_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_AT_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'AT_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'AT_NachnahmeVersandInklNachnahmegebuhr'
     * @return string 'AT_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_AT_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'AT_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'AT_ExpressOrCourierInternational'
     * @return string 'AT_ExpressOrCourierInternational'
     */
    const VALUE_AT_EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_ExpressOrCourierInternational';
    /**
     * Constant for value 'AT_InsuredExpressOrCourierInternational'
     * @return string 'AT_InsuredExpressOrCourierInternational'
     */
    const VALUE_AT_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'AT_SpecialDispatchInternational'
     * @return string 'AT_SpecialDispatchInternational'
     */
    const VALUE_AT_SPECIAL_DISPATCH_INTERNATIONAL = 'AT_SpecialDispatchInternational';
    /**
     * Constant for value 'AT_InsuredSpecialDispatchInternational'
     * @return string 'AT_InsuredSpecialDispatchInternational'
     */
    const VALUE_AT_INSURED_SPECIAL_DISPATCH_INTERNATIONAL = 'AT_InsuredSpecialDispatchInternational';
    /**
     * Constant for value 'AT_StandardInternational'
     * @return string 'AT_StandardInternational'
     */
    const VALUE_AT_STANDARD_INTERNATIONAL = 'AT_StandardInternational';
    /**
     * Constant for value 'AT_ExpeditedInternational'
     * @return string 'AT_ExpeditedInternational'
     */
    const VALUE_AT_EXPEDITED_INTERNATIONAL = 'AT_ExpeditedInternational';
    /**
     * Constant for value 'AT_OtherInternationalShipping'
     * @return string 'AT_OtherInternationalShipping'
     */
    const VALUE_AT_OTHER_INTERNATIONAL_SHIPPING = 'AT_OtherInternationalShipping';
    /**
     * Constant for value 'CH_BitteTreffenSieEineAuswahl'
     * @return string 'CH_BitteTreffenSieEineAuswahl'
     */
    const VALUE_CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'CH_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'CH_UnversicherterVersand'
     * @return string 'CH_UnversicherterVersand'
     */
    const VALUE_CH_UNVERSICHERTER_VERSAND = 'CH_UnversicherterVersand';
    /**
     * Constant for value 'CH_VersicherterVersand'
     * @return string 'CH_VersicherterVersand'
     */
    const VALUE_CH_VERSICHERTER_VERSAND = 'CH_VersicherterVersand';
    /**
     * Constant for value 'CH_EinschreibenVersandInklEinschreibengebuhr'
     * @return string 'CH_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_CH_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'CH_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'CH_NachnahmeVersandInklNachnahmegebuhr'
     * @return string 'CH_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_CH_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'CH_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'CH_ExpressOrCourierInternational'
     * @return string 'CH_ExpressOrCourierInternational'
     */
    const VALUE_CH_EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_ExpressOrCourierInternational';
    /**
     * Constant for value 'CH_InsuredExpressOrCourierInternational'
     * @return string 'CH_InsuredExpressOrCourierInternational'
     */
    const VALUE_CH_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'CH_SonderversandZBSperrgutKFZ'
     * @return string 'CH_SonderversandZBSperrgutKFZ'
     */
    const VALUE_CH_SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_SonderversandZBSperrgutKFZ';
    /**
     * Constant for value 'CH_VersicherterSonderversandZBSperrgutKFZ'
     * @return string 'CH_VersicherterSonderversandZBSperrgutKFZ'
     */
    const VALUE_CH_VERSICHERTER_SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_VersicherterSonderversandZBSperrgutKFZ';
    /**
     * Constant for value 'CH_StandardversandAPostPriority'
     * @return string 'CH_StandardversandAPostPriority'
     */
    const VALUE_CH_STANDARDVERSAND_APOST_PRIORITY = 'CH_StandardversandAPostPriority';
    /**
     * Constant for value 'CH_StandardversandBPostEconomy'
     * @return string 'CH_StandardversandBPostEconomy'
     */
    const VALUE_CH_STANDARDVERSAND_BPOST_ECONOMY = 'CH_StandardversandBPostEconomy';
    /**
     * Constant for value 'DE_BitteTreffenSieEineAuswahl'
     * @return string 'DE_BitteTreffenSieEineAuswahl'
     */
    const VALUE_DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'DE_BitteTreffenSieEineAuswahl';
    /**
     * Constant for value 'DE_EinschreibenVersandInklEinschreibengebuhr'
     * @return string 'DE_EinschreibenVersandInklEinschreibengebuhr'
     */
    const VALUE_DE_EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'DE_EinschreibenVersandInklEinschreibengebuhr';
    /**
     * Constant for value 'DE_NachnahmeVersandInklNachnahmegebuhr'
     * @return string 'DE_NachnahmeVersandInklNachnahmegebuhr'
     */
    const VALUE_DE_NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'DE_NachnahmeVersandInklNachnahmegebuhr';
    /**
     * Constant for value 'DE_ExpressOrCourierInternational'
     * @return string 'DE_ExpressOrCourierInternational'
     */
    const VALUE_DE_EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_ExpressOrCourierInternational';
    /**
     * Constant for value 'DE_InsuredExpressOrCourierInternational'
     * @return string 'DE_InsuredExpressOrCourierInternational'
     */
    const VALUE_DE_INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_InsuredExpressOrCourierInternational';
    /**
     * Constant for value 'DE_SonderversandZBMobelKFZ'
     * @return string 'DE_SonderversandZBMobelKFZ'
     */
    const VALUE_DE_SONDERVERSAND_ZBMOBEL_KFZ = 'DE_SonderversandZBMobelKFZ';
    /**
     * Constant for value 'DE_VersicherterSonderversandZBMobelKFZ'
     * @return string 'DE_VersicherterSonderversandZBMobelKFZ'
     */
    const VALUE_DE_VERSICHERTER_SONDERVERSAND_ZBMOBEL_KFZ = 'DE_VersicherterSonderversandZBMobelKFZ';
    /**
     * Constant for value 'DE_DeutschePostBriefInternational'
     * @return string 'DE_DeutschePostBriefInternational'
     */
    const VALUE_DE_DEUTSCHE_POST_BRIEF_INTERNATIONAL = 'DE_DeutschePostBriefInternational';
    /**
     * Constant for value 'IE_StandardInternationalFlatRatePostage'
     * @return string 'IE_StandardInternationalFlatRatePostage'
     */
    const VALUE_IE_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_StandardInternationalFlatRatePostage';
    /**
     * Constant for value 'IE_ExpeditedInternationalFlatRatePostage'
     * @return string 'IE_ExpeditedInternationalFlatRatePostage'
     */
    const VALUE_IE_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_ExpeditedInternationalFlatRatePostage';
    /**
     * Constant for value 'IE_OtherInternationalPostage'
     * @return string 'IE_OtherInternationalPostage'
     */
    const VALUE_IE_OTHER_INTERNATIONAL_POSTAGE = 'IE_OtherInternationalPostage';
    /**
     * Constant for value 'UK_StandardInternationalFlatRatePostage'
     * @return string 'UK_StandardInternationalFlatRatePostage'
     */
    const VALUE_UK_STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_StandardInternationalFlatRatePostage';
    /**
     * Constant for value 'UK_ExpeditedInternationalFlatRatePostage'
     * @return string 'UK_ExpeditedInternationalFlatRatePostage'
     */
    const VALUE_UK_EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_ExpeditedInternationalFlatRatePostage';
    /**
     * Constant for value 'UK_OtherInternationalPostage'
     * @return string 'UK_OtherInternationalPostage'
     */
    const VALUE_UK_OTHER_INTERNATIONAL_POSTAGE = 'UK_OtherInternationalPostage';
    /**
     * Constant for value 'FR_ChronopostChronoRelais'
     * @return string 'FR_ChronopostChronoRelais'
     */
    const VALUE_FR_CHRONOPOST_CHRONO_RELAIS = 'FR_ChronopostChronoRelais';
    /**
     * Constant for value 'FR_Chrono10'
     * @return string 'FR_Chrono10'
     */
    const VALUE_FR_CHRONO_10 = 'FR_Chrono10';
    /**
     * Constant for value 'FR_Chrono13'
     * @return string 'FR_Chrono13'
     */
    const VALUE_FR_CHRONO_13 = 'FR_Chrono13';
    /**
     * Constant for value 'FR_Chrono18'
     * @return string 'FR_Chrono18'
     */
    const VALUE_FR_CHRONO_18 = 'FR_Chrono18';
    /**
     * Constant for value 'FR_ChronopostExpressInternational'
     * @return string 'FR_ChronopostExpressInternational'
     */
    const VALUE_FR_CHRONOPOST_EXPRESS_INTERNATIONAL = 'FR_ChronopostExpressInternational';
    /**
     * Constant for value 'Pickup'
     * @return string 'Pickup'
     */
    const VALUE_PICKUP = 'Pickup';
    /**
     * Constant for value 'Delivery'
     * @return string 'Delivery'
     */
    const VALUE_DELIVERY = 'Delivery';
    /**
     * Constant for value 'CA_Pickup'
     * @return string 'CA_Pickup'
     */
    const VALUE_CA_PICKUP = 'CA_Pickup';
    /**
     * Constant for value 'DE_Pickup'
     * @return string 'DE_Pickup'
     */
    const VALUE_DE_PICKUP = 'DE_Pickup';
    /**
     * Constant for value 'AU_Pickup'
     * @return string 'AU_Pickup'
     */
    const VALUE_AU_PICKUP = 'AU_Pickup';
    /**
     * Constant for value 'AU_SmallParcels'
     * @return string 'AU_SmallParcels'
     */
    const VALUE_AU_SMALL_PARCELS = 'AU_SmallParcels';
    /**
     * Constant for value 'AU_SmallParcelWithTracking'
     * @return string 'AU_SmallParcelWithTracking'
     */
    const VALUE_AU_SMALL_PARCEL_WITH_TRACKING = 'AU_SmallParcelWithTracking';
    /**
     * Constant for value 'AU_SmallParcelWithTrackingAndSignature'
     * @return string 'AU_SmallParcelWithTrackingAndSignature'
     */
    const VALUE_AU_SMALL_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_SmallParcelWithTrackingAndSignature';
    /**
     * Constant for value 'AU_RegularParcelWithTracking'
     * @return string 'AU_RegularParcelWithTracking'
     */
    const VALUE_AU_REGULAR_PARCEL_WITH_TRACKING = 'AU_RegularParcelWithTracking';
    /**
     * Constant for value 'AU_RegularParcelWithTrackingAndSignature'
     * @return string 'AU_RegularParcelWithTrackingAndSignature'
     */
    const VALUE_AU_REGULAR_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_RegularParcelWithTrackingAndSignature';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel5kg'
     * @return string 'AU_PrePaidExpressPostSatchel5kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_5_KG = 'AU_PrePaidExpressPostSatchel5kg';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels500g'
     * @return string 'AU_PrePaidParcelPostSatchels500g'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_500_G = 'AU_PrePaidParcelPostSatchels500g';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels3kg'
     * @return string 'AU_PrePaidParcelPostSatchels3kg'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_3_KG = 'AU_PrePaidParcelPostSatchels3kg';
    /**
     * Constant for value 'AU_PrePaidParcelPostSatchels5kg'
     * @return string 'AU_PrePaidParcelPostSatchels5kg'
     */
    const VALUE_AU_PRE_PAID_PARCEL_POST_SATCHELS_5_KG = 'AU_PrePaidParcelPostSatchels5kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel500g'
     * @return string 'AU_PrePaidExpressPostSatchel500g'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_500_G = 'AU_PrePaidExpressPostSatchel500g';
    /**
     * Constant for value 'AU_PrePaidExpressPostSatchel3kg'
     * @return string 'AU_PrePaidExpressPostSatchel3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_SATCHEL_3_KG = 'AU_PrePaidExpressPostSatchel3kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostPlatinum500g'
     * @return string 'AU_PrePaidExpressPostPlatinum500g'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_500_G = 'AU_PrePaidExpressPostPlatinum500g';
    /**
     * Constant for value 'AU_PrePaidExpressPostPlatinum3kg'
     * @return string 'AU_PrePaidExpressPostPlatinum3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_PLATINUM_3_KG = 'AU_PrePaidExpressPostPlatinum3kg';
    /**
     * Constant for value 'AU_ExpressCourierInternational'
     * @return string 'AU_ExpressCourierInternational'
     */
    const VALUE_AU_EXPRESS_COURIER_INTERNATIONAL = 'AU_ExpressCourierInternational';
    /**
     * Constant for value 'AU_ExpressPostInternational'
     * @return string 'AU_ExpressPostInternational'
     */
    const VALUE_AU_EXPRESS_POST_INTERNATIONAL = 'AU_ExpressPostInternational';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeC5'
     * @return string 'AU_PrePaidExpressPostInternationalEnvelopeC5'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_C_5 = 'AU_PrePaidExpressPostInternationalEnvelopeC5';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalEnvelopeB4'
     * @return string 'AU_PrePaidExpressPostInternationalEnvelopeB4'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_B_4 = 'AU_PrePaidExpressPostInternationalEnvelopeB4';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalSatchels2kg'
     * @return string 'AU_PrePaidExpressPostInternationalSatchels2kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_2_KG = 'AU_PrePaidExpressPostInternationalSatchels2kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalSatchels3kg'
     * @return string 'AU_PrePaidExpressPostInternationalSatchels3kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_3_KG = 'AU_PrePaidExpressPostInternationalSatchels3kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox5kg'
     * @return string 'AU_PrePaidExpressPostInternationalBox5kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_5_KG = 'AU_PrePaidExpressPostInternationalBox5kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox10kg'
     * @return string 'AU_PrePaidExpressPostInternationalBox10kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_10_KG = 'AU_PrePaidExpressPostInternationalBox10kg';
    /**
     * Constant for value 'AU_PrePaidExpressPostInternationalBox20kg'
     * @return string 'AU_PrePaidExpressPostInternationalBox20kg'
     */
    const VALUE_AU_PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_20_KG = 'AU_PrePaidExpressPostInternationalBox20kg';
    /**
     * Constant for value 'AU_RegisteredParcelPost'
     * @return string 'AU_RegisteredParcelPost'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST = 'AU_RegisteredParcelPost';
    /**
     * Constant for value 'AU_RegisteredSmallParcel'
     * @return string 'AU_RegisteredSmallParcel'
     */
    const VALUE_AU_REGISTERED_SMALL_PARCEL = 'AU_RegisteredSmallParcel';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel500g'
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel500g'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_500_G = 'AU_RegisteredParcelPostPrepaidSatchel500g';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel3kg'
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel3kg'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_3_KG = 'AU_RegisteredParcelPostPrepaidSatchel3kg';
    /**
     * Constant for value 'AU_RegisteredParcelPostPrepaidSatchel5kg'
     * @return string 'AU_RegisteredParcelPostPrepaidSatchel5kg'
     */
    const VALUE_AU_REGISTERED_PARCEL_POST_PREPAID_SATCHEL_5_KG = 'AU_RegisteredParcelPostPrepaidSatchel5kg';
    /**
     * Constant for value 'AU_ExpressPostSatchel500g'
     * @return string 'AU_ExpressPostSatchel500g'
     */
    const VALUE_AU_EXPRESS_POST_SATCHEL_500_G = 'AU_ExpressPostSatchel500g';
    /**
     * Constant for value 'AU_ExpressPostSatchel3kg'
     * @return string 'AU_ExpressPostSatchel3kg'
     */
    const VALUE_AU_EXPRESS_POST_SATCHEL_3_KG = 'AU_ExpressPostSatchel3kg';
    /**
     * Constant for value 'FR_Pickup'
     * @return string 'FR_Pickup'
     */
    const VALUE_FR_PICKUP = 'FR_Pickup';
    /**
     * Constant for value 'AT_Pickup'
     * @return string 'AT_Pickup'
     */
    const VALUE_AT_PICKUP = 'AT_Pickup';
    /**
     * Constant for value 'BENL_Pickup'
     * @return string 'BENL_Pickup'
     */
    const VALUE_BENL_PICKUP = 'BENL_Pickup';
    /**
     * Constant for value 'BEFR_Pickup'
     * @return string 'BEFR_Pickup'
     */
    const VALUE_BEFR_PICKUP = 'BEFR_Pickup';
    /**
     * Constant for value 'CH_Pickup'
     * @return string 'CH_Pickup'
     */
    const VALUE_CH_PICKUP = 'CH_Pickup';
    /**
     * Constant for value 'IT_Pickup'
     * @return string 'IT_Pickup'
     */
    const VALUE_IT_PICKUP = 'IT_Pickup';
    /**
     * Constant for value 'NL_Pickup'
     * @return string 'NL_Pickup'
     */
    const VALUE_NL_PICKUP = 'NL_Pickup';
    /**
     * Constant for value 'PL_Pickup'
     * @return string 'PL_Pickup'
     */
    const VALUE_PL_PICKUP = 'PL_Pickup';
    /**
     * Constant for value 'ES_Pickup'
     * @return string 'ES_Pickup'
     */
    const VALUE_ES_PICKUP = 'ES_Pickup';
    /**
     * Constant for value 'SG_Delivery'
     * @return string 'SG_Delivery'
     */
    const VALUE_SG_DELIVERY = 'SG_Delivery';
    /**
     * Constant for value 'UK_OtherCourier24'
     * @return string 'UK_OtherCourier24'
     */
    const VALUE_UK_OTHER_COURIER_24 = 'UK_OtherCourier24';
    /**
     * Constant for value 'UK_OtherCourier48'
     * @return string 'UK_OtherCourier48'
     */
    const VALUE_UK_OTHER_COURIER_48 = 'UK_OtherCourier48';
    /**
     * Constant for value 'UK_OtherCourier3Days'
     * @return string 'UK_OtherCourier3Days'
     */
    const VALUE_UK_OTHER_COURIER_3_DAYS = 'UK_OtherCourier3Days';
    /**
     * Constant for value 'UK_OtherCourier5Days'
     * @return string 'UK_OtherCourier5Days'
     */
    const VALUE_UK_OTHER_COURIER_5_DAYS = 'UK_OtherCourier5Days';
    /**
     * Constant for value 'Courier'
     * @return string 'Courier'
     */
    const VALUE_COURIER = 'Courier';
    /**
     * Constant for value 'FedExPriorityOvernight'
     * @return string 'FedExPriorityOvernight'
     */
    const VALUE_FED_EX_PRIORITY_OVERNIGHT = 'FedExPriorityOvernight';
    /**
     * Constant for value 'FedExStandardOvernight'
     * @return string 'FedExStandardOvernight'
     */
    const VALUE_FED_EX_STANDARD_OVERNIGHT = 'FedExStandardOvernight';
    /**
     * Constant for value 'FedEx2Day'
     * @return string 'FedEx2Day'
     */
    const VALUE_FED_EX_2_DAY = 'FedEx2Day';
    /**
     * Constant for value 'FedExGround'
     * @return string 'FedExGround'
     */
    const VALUE_FED_EX_GROUND = 'FedExGround';
    /**
     * Constant for value 'FedExHomeDelivery'
     * @return string 'FedExHomeDelivery'
     */
    const VALUE_FED_EX_HOME_DELIVERY = 'FedExHomeDelivery';
    /**
     * Constant for value 'FedExExpressSaver'
     * @return string 'FedExExpressSaver'
     */
    const VALUE_FED_EX_EXPRESS_SAVER = 'FedExExpressSaver';
    /**
     * Constant for value 'FedExGroundDisabled'
     * @return string 'FedExGroundDisabled'
     */
    const VALUE_FED_EX_GROUND_DISABLED = 'FedExGroundDisabled';
    /**
     * Constant for value 'FedExHomeDeliveryDisabled'
     * @return string 'FedExHomeDeliveryDisabled'
     */
    const VALUE_FED_EX_HOME_DELIVERY_DISABLED = 'FedExHomeDeliveryDisabled';
    /**
     * Constant for value 'FedExInternationalFirst'
     * @return string 'FedExInternationalFirst'
     */
    const VALUE_FED_EX_INTERNATIONAL_FIRST = 'FedExInternationalFirst';
    /**
     * Constant for value 'FedExInternationalPriority'
     * @return string 'FedExInternationalPriority'
     */
    const VALUE_FED_EX_INTERNATIONAL_PRIORITY = 'FedExInternationalPriority';
    /**
     * Constant for value 'FedExInternationalEconomy'
     * @return string 'FedExInternationalEconomy'
     */
    const VALUE_FED_EX_INTERNATIONAL_ECONOMY = 'FedExInternationalEconomy';
    /**
     * Constant for value 'FedExInternationalGround'
     * @return string 'FedExInternationalGround'
     */
    const VALUE_FED_EX_INTERNATIONAL_GROUND = 'FedExInternationalGround';
    /**
     * Constant for value 'EconomyShippingFromOutsideUS'
     * @return string 'EconomyShippingFromOutsideUS'
     */
    const VALUE_ECONOMY_SHIPPING_FROM_OUTSIDE_US = 'EconomyShippingFromOutsideUS';
    /**
     * Constant for value 'ExpeditedShippingFromOutsideUS'
     * @return string 'ExpeditedShippingFromOutsideUS'
     */
    const VALUE_EXPEDITED_SHIPPING_FROM_OUTSIDE_US = 'ExpeditedShippingFromOutsideUS';
    /**
     * Constant for value 'StandardShippingFromOutsideUS'
     * @return string 'StandardShippingFromOutsideUS'
     */
    const VALUE_STANDARD_SHIPPING_FROM_OUTSIDE_US = 'StandardShippingFromOutsideUS';
    /**
     * Constant for value 'UK_EconomyShippingFromOutside'
     * @return string 'UK_EconomyShippingFromOutside'
     */
    const VALUE_UK_ECONOMY_SHIPPING_FROM_OUTSIDE = 'UK_EconomyShippingFromOutside';
    /**
     * Constant for value 'UK_ExpeditedShippingFromOutside'
     * @return string 'UK_ExpeditedShippingFromOutside'
     */
    const VALUE_UK_EXPEDITED_SHIPPING_FROM_OUTSIDE = 'UK_ExpeditedShippingFromOutside';
    /**
     * Constant for value 'UK_StandardShippingFromOutside'
     * @return string 'UK_StandardShippingFromOutside'
     */
    const VALUE_UK_STANDARD_SHIPPING_FROM_OUTSIDE = 'UK_StandardShippingFromOutside';
    /**
     * Constant for value 'DE_SparversandAusDemAusland'
     * @return string 'DE_SparversandAusDemAusland'
     */
    const VALUE_DE_SPARVERSAND_AUS_DEM_AUSLAND = 'DE_SparversandAusDemAusland';
    /**
     * Constant for value 'DE_StandardversandAusDemAusland'
     * @return string 'DE_StandardversandAusDemAusland'
     */
    const VALUE_DE_STANDARDVERSAND_AUS_DEM_AUSLAND = 'DE_StandardversandAusDemAusland';
    /**
     * Constant for value 'DE_ExpressversandAusDemAusland'
     * @return string 'DE_ExpressversandAusDemAusland'
     */
    const VALUE_DE_EXPRESSVERSAND_AUS_DEM_AUSLAND = 'DE_ExpressversandAusDemAusland';
    /**
     * Constant for value 'DE_DHL2KGPaket'
     * @return string 'DE_DHL2KGPaket'
     */
    const VALUE_DE_DHL_2_KGPAKET = 'DE_DHL2KGPaket';
    /**
     * Constant for value 'InternationalPriorityShipping'
     * @return string 'InternationalPriorityShipping'
     */
    const VALUE_INTERNATIONAL_PRIORITY_SHIPPING = 'InternationalPriorityShipping';
    /**
     * Constant for value 'SameDayShipping'
     * @return string 'SameDayShipping'
     */
    const VALUE_SAME_DAY_SHIPPING = 'SameDayShipping';
    /**
     * Constant for value 'UK_RoyalMailNextDay'
     * @return string 'UK_RoyalMailNextDay'
     */
    const VALUE_UK_ROYAL_MAIL_NEXT_DAY = 'UK_RoyalMailNextDay';
    /**
     * Constant for value 'UK_RoyalMailTracked'
     * @return string 'UK_RoyalMailTracked'
     */
    const VALUE_UK_ROYAL_MAIL_TRACKED = 'UK_RoyalMailTracked';
    /**
     * Constant for value 'eBayNowImmediateDelivery'
     * @return string 'eBayNowImmediateDelivery'
     */
    const VALUE_E_BAY_NOW_IMMEDIATE_DELIVERY = 'eBayNowImmediateDelivery';
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
    public static function getValidValues()
    {
        return array(
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
