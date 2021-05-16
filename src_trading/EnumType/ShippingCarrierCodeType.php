<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingCarrierCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Identifies a shipping carrier used to ship an order, and the countries served by that carrier. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can also be found by calling
 * <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingCarrierDetails</b> and examining the returned <strong>ShippingCarrierDetails.ShippingCarrier</strong> field. </span>
 * @subpackage Enumerations
 */
class ShippingCarrierCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UPS'
     * Meta information extracted from the WSDL
     * - documentation: United Parcel Service <br/> In CompleteSale call requests, the value <code>UPS</code> also represents UPS Mail Innovations. Available in US, IE, UK, FR, IT, DE, CH, ES, AT, CN, BE, PL, NL.
     * @return string 'UPS'
     */
    const VALUE_UPS = 'UPS';
    /**
     * Constant for value 'USPS'
     * Meta information extracted from the WSDL
     * - documentation: U.S. Postal Service <br/> &nbsp;&nbsp;Available in US, CN, UK, DE.
     * @return string 'USPS'
     */
    const VALUE_USPS = 'USPS';
    /**
     * Constant for value 'FedEx'
     * Meta information extracted from the WSDL
     * - documentation: FedEx <br/> &nbsp;&nbsp;In CompleteSale call requests, the value <code>FedEx</code> also represents FedEx SmartPost. Available in US, IE, UK, FR, IT, DE, CH, AU, ES, AT, CN, BE, PL, NL.
     * @return string 'FedEx'
     */
    const VALUE_FED_EX = 'FedEx';
    /**
     * Constant for value 'DeutschePost'
     * Meta information extracted from the WSDL
     * - documentation: Deutsche Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'DeutschePost'
     */
    const VALUE_DEUTSCHE_POST = 'DeutschePost';
    /**
     * Constant for value 'DHL'
     * Meta information extracted from the WSDL
     * - documentation: DHL Express <br/> &nbsp;&nbsp;Available in IE, US, ID, MX, MY, CA, UK, FR, IT, HK, TW, DE, CH, KR, AU, ES, AT, CN, SG, BE, TH, NL.
     * @return string 'DHL'
     */
    const VALUE_DHL = 'DHL';
    /**
     * Constant for value 'Hermes'
     * Meta information extracted from the WSDL
     * - documentation: Hermes Group <br/> &nbsp;&nbsp;Available in US, AT, UK, DE.
     * @return string 'Hermes'
     */
    const VALUE_HERMES = 'Hermes';
    /**
     * Constant for value 'iLoxx'
     * Meta information extracted from the WSDL
     * - documentation: iloxx eService <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'iLoxx'
     */
    const VALUE_I_LOXX = 'iLoxx';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Use this code for any carrier not listed here.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'ColiposteDomestic'
     * Meta information extracted from the WSDL
     * - documentation: Coliposte Domestic <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'ColiposteDomestic'
     */
    const VALUE_COLIPOSTE_DOMESTIC = 'ColiposteDomestic';
    /**
     * Constant for value 'ColiposteInternational'
     * Meta information extracted from the WSDL
     * - documentation: Coliposte International <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'ColiposteInternational'
     */
    const VALUE_COLIPOSTE_INTERNATIONAL = 'ColiposteInternational';
    /**
     * Constant for value 'Chronopost'
     * Meta information extracted from the WSDL
     * - documentation: Chronopost <br/> &nbsp;&nbsp;Available in US, FR, UK, DE.
     * @return string 'Chronopost'
     */
    const VALUE_CHRONOPOST = 'Chronopost';
    /**
     * Constant for value 'Correos'
     * Meta information extracted from the WSDL
     * - documentation: Correos <br/> &nbsp;&nbsp;Available in ES, US, UK, DE.
     * @return string 'Correos'
     */
    const VALUE_CORREOS = 'Correos';
    /**
     * Constant for value 'Seur'
     * Meta information extracted from the WSDL
     * - documentation: Seur (reserved for future use).
     * @return string 'Seur'
     */
    const VALUE_SEUR = 'Seur';
    /**
     * Constant for value 'Nacex'
     * Meta information extracted from the WSDL
     * - documentation: Nacex <br/> &nbsp;&nbsp;Available in ES, US, UK, DE.
     * @return string 'Nacex'
     */
    const VALUE_NACEX = 'Nacex';
    /**
     * Constant for value 'FourPX'
     * Meta information extracted from the WSDL
     * - documentation: 4PX <br/> &nbsp;&nbsp;Available in US.
     * @return string 'FourPX'
     */
    const VALUE_FOUR_PX = 'FourPX';
    /**
     * Constant for value 'FourPXCHINA'
     * Meta information extracted from the WSDL
     * - documentation: 4PX China <br/> &nbsp;&nbsp;Available in US, CN, UK.
     * @return string 'FourPXCHINA'
     */
    const VALUE_FOUR_PXCHINA = 'FourPXCHINA';
    /**
     * Constant for value 'FourPXExpress'
     * Meta information extracted from the WSDL
     * - documentation: 4PX Express <br/> &nbsp;&nbsp;Available in UK, DE.
     * @return string 'FourPXExpress'
     */
    const VALUE_FOUR_PXEXPRESS = 'FourPXExpress';
    /**
     * Constant for value 'FourPXLTD'
     * Meta information extracted from the WSDL
     * - documentation: 4PX Express Co. Ltd <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FourPXLTD'
     */
    const VALUE_FOUR_PXLTD = 'FourPXLTD';
    /**
     * Constant for value 'SevenLSP'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'SevenLSP'
     */
    const VALUE_SEVEN_LSP = 'SevenLSP';
    /**
     * Constant for value 'A1CourierServices'
     * Meta information extracted from the WSDL
     * - documentation: A-1 Courier <br/> &nbsp;&nbsp;Available in US.
     * @return string 'A1CourierServices'
     */
    const VALUE_A_1_COURIER_SERVICES = 'A1CourierServices';
    /**
     * Constant for value 'ABF'
     * Meta information extracted from the WSDL
     * - documentation: ABF Freight <br/> &nbsp;&nbsp;Available in US.
     * @return string 'ABF'
     */
    const VALUE_ABF = 'ABF';
    /**
     * Constant for value 'AeroPost'
     * Meta information extracted from the WSDL
     * - documentation: AeroPost <br/> &nbsp;&nbsp;Available in JM, GT, CR, PA, TT, SV, CO, HN, CL, DO.
     * @return string 'AeroPost'
     */
    const VALUE_AERO_POST = 'AeroPost';
    /**
     * Constant for value 'ALLIEDEXPRESS'
     * Meta information extracted from the WSDL
     * - documentation: Allied Express <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'ALLIEDEXPRESS'
     */
    const VALUE_ALLIEDEXPRESS = 'ALLIEDEXPRESS';
    /**
     * Constant for value 'AMWST'
     * Meta information extracted from the WSDL
     * - documentation: AMWST <br/> &nbsp;&nbsp;Available in US.
     * @return string 'AMWST'
     */
    const VALUE_AMWST = 'AMWST';
    /**
     * Constant for value 'AnPost'
     * Meta information extracted from the WSDL
     * - documentation: An Post <br/> &nbsp;&nbsp;Available in IE.
     * @return string 'AnPost'
     */
    const VALUE_AN_POST = 'AnPost';
    /**
     * Constant for value 'APC'
     * Meta information extracted from the WSDL
     * - documentation: APC Postal Logistics <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'APC'
     */
    const VALUE_APC = 'APC';
    /**
     * Constant for value 'ARAMEX'
     * Meta information extracted from the WSDL
     * - documentation: Aramex <br/> &nbsp;&nbsp;Available in US, BH, IL, AE, IN, UA, KW, SA, QA.
     * @return string 'ARAMEX'
     */
    const VALUE_ARAMEX = 'ARAMEX';
    /**
     * Constant for value 'ARVATO'
     * Meta information extracted from the WSDL
     * - documentation: Arvato <br/> &nbsp;&nbsp;Available in US, CA, UK, FR, IT, GR, DE, CH, AT, BE, NL, SI, LT, SK.
     * @return string 'ARVATO'
     */
    const VALUE_ARVATO = 'ARVATO';
    /**
     * Constant for value 'ASM'
     * Meta information extracted from the WSDL
     * - documentation: ASM <br/> &nbsp;&nbsp;Available in ES.
     * @return string 'ASM'
     */
    const VALUE_ASM = 'ASM';
    /**
     * Constant for value 'AustraliaPost'
     * Meta information extracted from the WSDL
     * - documentation: Australia Post <br/> &nbsp;&nbsp;Available in US, UK, DE, AU.
     * @return string 'AustraliaPost'
     */
    const VALUE_AUSTRALIA_POST = 'AustraliaPost';
    /**
     * Constant for value 'AustralianAirExpress'
     * Meta information extracted from the WSDL
     * - documentation: Australian Air Express <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'AustralianAirExpress'
     */
    const VALUE_AUSTRALIAN_AIR_EXPRESS = 'AustralianAirExpress';
    /**
     * Constant for value 'AVRT'
     * Meta information extracted from the WSDL
     * - documentation: Averitt Express <br/> &nbsp;&nbsp;Available in US.
     * @return string 'AVRT'
     */
    const VALUE_AVRT = 'AVRT';
    /**
     * Constant for value 'BPost'
     * Meta information extracted from the WSDL
     * - documentation: bpost <br/> &nbsp;&nbsp;Also coded as <code>BELGIANPOST</code>. Available in US, UK, DE, MO, BE.
     * @return string 'BPost'
     */
    const VALUE_BPOST = 'BPost';
    /**
     * Constant for value 'Bartolini'
     * Meta information extracted from the WSDL
     * - documentation: BRT Bartolini <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'Bartolini'
     */
    const VALUE_BARTOLINI = 'Bartolini';
    /**
     * Constant for value 'BELGIANPOST'
     * Meta information extracted from the WSDL
     * - documentation: Belgian Post Group <br/> &nbsp;&nbsp;Also coded as <code>BPost</code>. Available in US, UK, DE MO, BE.
     * @return string 'BELGIANPOST'
     */
    const VALUE_BELGIANPOST = 'BELGIANPOST';
    /**
     * Constant for value 'BKNS'
     * Meta information extracted from the WSDL
     * - documentation: BKNS <br/> &nbsp;&nbsp;Available in US.
     * @return string 'BKNS'
     */
    const VALUE_BKNS = 'BKNS';
    /**
     * Constant for value 'BluePackage'
     * Meta information extracted from the WSDL
     * - documentation: Blue Package Delivery <br/> &nbsp;&nbsp;Available in US.
     * @return string 'BluePackage'
     */
    const VALUE_BLUE_PACKAGE = 'BluePackage';
    /**
     * Constant for value 'BusinessPost'
     * Meta information extracted from the WSDL
     * - documentation: BusinessPost <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'BusinessPost'
     */
    const VALUE_BUSINESS_POST = 'BusinessPost';
    /**
     * Constant for value 'CanPar'
     * Meta information extracted from the WSDL
     * - documentation: Canpar Courier <br/> &nbsp;&nbsp;Available in US, CA, IT, UK, DE, AU
     * @return string 'CanPar'
     */
    const VALUE_CAN_PAR = 'CanPar';
    /**
     * Constant for value 'CENF'
     * Meta information extracted from the WSDL
     * - documentation: Central Freight Lines <br/> &nbsp;&nbsp;Available in US.
     * @return string 'CENF'
     */
    const VALUE_CENF = 'CENF';
    /**
     * Constant for value 'CEVA'
     * Meta information extracted from the WSDL
     * - documentation: CEVA Logistics <br/> &nbsp;&nbsp;Available in US, IT.
     * @return string 'CEVA'
     */
    const VALUE_CEVA = 'CEVA';
    /**
     * Constant for value 'ChinaPost'
     * Meta information extracted from the WSDL
     * - documentation: China Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'ChinaPost'
     */
    const VALUE_CHINA_POST = 'ChinaPost';
    /**
     * Constant for value 'Chronoexpres'
     * Meta information extracted from the WSDL
     * - documentation: Chronoexpres <br/> &nbsp;&nbsp;Available in ES.
     * @return string 'Chronoexpres'
     */
    const VALUE_CHRONOEXPRES = 'Chronoexpres';
    /**
     * Constant for value 'CHUKOU1'
     * Meta information extracted from the WSDL
     * - documentation: Chukou1 <br/> &nbsp;&nbsp;Available in US.
     * @return string 'CHUKOU1'
     */
    const VALUE_CHUKOU_1 = 'CHUKOU1';
    /**
     * Constant for value 'ChunghwaPost'
     * Meta information extracted from the WSDL
     * - documentation: Chunghwa Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'ChunghwaPost'
     */
    const VALUE_CHUNGHWA_POST = 'ChunghwaPost';
    /**
     * Constant for value 'CitiPost'
     * Meta information extracted from the WSDL
     * - documentation: CitiPost <br/> &nbsp;&nbsp;Available in US, IE, CA, UK, FR, IT, HK, DE, AU, ES, CN, BE, UZ, PL, NL.
     * @return string 'CitiPost'
     */
    const VALUE_CITI_POST = 'CitiPost';
    /**
     * Constant for value 'CityLink'
     * Meta information extracted from the WSDL
     * - documentation: Citylink <br/> &nbsp;&nbsp;Available in IE.
     * @return string 'CityLink'
     */
    const VALUE_CITY_LINK = 'CityLink';
    /**
     * Constant for value 'ClickandQuick'
     * Meta information extracted from the WSDL
     * - documentation: Click & Quick <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'ClickandQuick'
     */
    const VALUE_CLICKAND_QUICK = 'ClickandQuick';
    /**
     * Constant for value 'CNWY'
     * Meta information extracted from the WSDL
     * - documentation: XPO Logistics (formerly Con-way Freight) <br/> &nbsp;&nbsp;Con-way Freight is now part of XPO Logistics. Available in US.
     * @return string 'CNWY'
     */
    const VALUE_CNWY = 'CNWY';
    /**
     * Constant for value 'Colissimo'
     * Meta information extracted from the WSDL
     * - documentation: Colissimo <br/> &nbsp;&nbsp;Available in FR.
     * @return string 'Colissimo'
     */
    const VALUE_COLISSIMO = 'Colissimo';
    /**
     * Constant for value 'CollectPlus'
     * Meta information extracted from the WSDL
     * - documentation: CollectPlus <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'CollectPlus'
     */
    const VALUE_COLLECT_PLUS = 'CollectPlus';
    /**
     * Constant for value 'CPC'
     * Meta information extracted from the WSDL
     * - documentation: CPC Logistics <br/> &nbsp;&nbsp;Available in US, CA, UK, DE.
     * @return string 'CPC'
     */
    const VALUE_CPC = 'CPC';
    /**
     * Constant for value 'DAIPost'
     * Meta information extracted from the WSDL
     * - documentation: DAI Post <br/> &nbsp;&nbsp;Available in UK, AU.
     * @return string 'DAIPost'
     */
    const VALUE_DAIPOST = 'DAIPost';
    /**
     * Constant for value 'DayandRoss'
     * Meta information extracted from the WSDL
     * - documentation: Day & Ross <br/> &nbsp;&nbsp;Available in US, CA, UK, AU.
     * @return string 'DayandRoss'
     */
    const VALUE_DAYAND_ROSS = 'DayandRoss';
    /**
     * Constant for value 'DBSchenker'
     * Meta information extracted from the WSDL
     * - documentation: DB Schenker <br/> &nbsp;&nbsp;Available in US.
     * @return string 'DBSchenker'
     */
    const VALUE_DBSCHENKER = 'DBSchenker';
    /**
     * Constant for value 'DHLEXPRESS'
     * Meta information extracted from the WSDL
     * - documentation: DHL Express <br/> &nbsp;&nbsp;Available in IT, DE.
     * @return string 'DHLEXPRESS'
     */
    const VALUE_DHLEXPRESS = 'DHLEXPRESS';
    /**
     * Constant for value 'DHLGlobalMail'
     * Meta information extracted from the WSDL
     * - documentation: DHL Global Mail <br/> &nbsp;&nbsp;Formerly coded as <code>DHLG</code>. Available in US, UK, DE.
     * @return string 'DHLGlobalMail'
     */
    const VALUE_DHLGLOBAL_MAIL = 'DHLGlobalMail';
    /**
     * Constant for value 'DHLEKB'
     * Meta information extracted from the WSDL
     * - documentation: DHL EKB <br/> &nbsp;&nbsp;Available in US.
     * @return string 'DHLEKB'
     */
    const VALUE_DHLEKB = 'DHLEKB';
    /**
     * Constant for value 'DHLG'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Use <code>DHLGlobalMail</code> instead.
     * @return string 'DHLG'
     */
    const VALUE_DHLG = 'DHLG';
    /**
     * Constant for value 'DieSchweizerischePost'
     * Meta information extracted from the WSDL
     * - documentation: Die Schweizerische Post <br/> &nbsp;&nbsp;Available in CH.
     * @return string 'DieSchweizerischePost'
     */
    const VALUE_DIE_SCHWEIZERISCHE_POST = 'DieSchweizerischePost';
    /**
     * Constant for value 'DPD'
     * Meta information extracted from the WSDL
     * - documentation: DPD (Dynamic Parcel Distribution) <br/> &nbsp;&nbsp;Available in IE, BG, AT, UK, HR, BE, HU, PL, CZ, DE, NL, CH.
     * @return string 'DPD'
     */
    const VALUE_DPD = 'DPD';
    /**
     * Constant for value 'DPXThailand'
     * Meta information extracted from the WSDL
     * - documentation: DPX Thailand <br/> &nbsp;&nbsp;Available in US, TH.
     * @return string 'DPXThailand'
     */
    const VALUE_DPXTHAILAND = 'DPXThailand';
    /**
     * Constant for value 'Ducros'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'Ducros'
     */
    const VALUE_DUCROS = 'Ducros';
    /**
     * Constant for value 'EGO'
     * Meta information extracted from the WSDL
     * - documentation: E-go <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'EGO'
     */
    const VALUE_EGO = 'EGO';
    /**
     * Constant for value 'EMF'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'EMF'
     */
    const VALUE_EMF = 'EMF';
    /**
     * Constant for value 'Exapaq'
     * Meta information extracted from the WSDL
     * - documentation: DPD France (formerly Exapaq) <br/> &nbsp;&nbsp;Exapaq is now part of DPD France. Available in FR.
     * @return string 'Exapaq'
     */
    const VALUE_EXAPAQ = 'Exapaq';
    /**
     * Constant for value 'Fastway'
     * Meta information extracted from the WSDL
     * - documentation: Fastway <br/> &nbsp;&nbsp;Available in IE.
     * @return string 'Fastway'
     */
    const VALUE_FASTWAY = 'Fastway';
    /**
     * Constant for value 'FASTWAYCOURIERS'
     * Meta information extracted from the WSDL
     * - documentation: Fastway Couriers <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'FASTWAYCOURIERS'
     */
    const VALUE_FASTWAYCOURIERS = 'FASTWAYCOURIERS';
    /**
     * Constant for value 'FedExSmartPost'
     * Meta information extracted from the WSDL
     * - documentation: FedEx SmartPost <br/> &nbsp;&nbsp;In CompleteSale call requests only, specify FedEx SmartPost with the value <code>FedEx</code>. Available in US, UK, DE.
     * @return string 'FedExSmartPost'
     */
    const VALUE_FED_EX_SMART_POST = 'FedExSmartPost';
    /**
     * Constant for value 'FLYT'
     * Meta information extracted from the WSDL
     * - documentation: Flyt <br/> &nbsp;&nbsp;Available in US.
     * @return string 'FLYT'
     */
    const VALUE_FLYT = 'FLYT';
    /**
     * Constant for value 'FLYTExpress'
     * Meta information extracted from the WSDL
     * - documentation: Flyt Express <br/> &nbsp;&nbsp;Available in UK, DE.
     * @return string 'FLYTExpress'
     */
    const VALUE_FLYTEXPRESS = 'FLYTExpress';
    /**
     * Constant for value 'FlytExpressUSDirectline'
     * Meta information extracted from the WSDL
     * - documentation: Flyt Express US Direct line <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FlytExpressUSDirectline'
     */
    const VALUE_FLYT_EXPRESS_USDIRECTLINE = 'FlytExpressUSDirectline';
    /**
     * Constant for value 'FTFT'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'FTFT'
     */
    const VALUE_FTFT = 'FTFT';
    /**
     * Constant for value 'FulfilExpressAccStation'
     * Meta information extracted from the WSDL
     * - documentation: FulfilExpress-AccStation <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FulfilExpressAccStation'
     */
    const VALUE_FULFIL_EXPRESS_ACC_STATION = 'FulfilExpressAccStation';
    /**
     * Constant for value 'FulfilExpresseForCity'
     * Meta information extracted from the WSDL
     * - documentation: FulfilExpress-eForCity <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FulfilExpresseForCity'
     */
    const VALUE_FULFIL_EXPRESSE_FOR_CITY = 'FulfilExpresseForCity';
    /**
     * Constant for value 'FulfilExpressEverydaySource'
     * Meta information extracted from the WSDL
     * - documentation: FulfilExpress-EverydaySource <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FulfilExpressEverydaySource'
     */
    const VALUE_FULFIL_EXPRESS_EVERYDAY_SOURCE = 'FulfilExpressEverydaySource';
    /**
     * Constant for value 'FulfilExpressiTrimming'
     * Meta information extracted from the WSDL
     * - documentation: FulfilExpress-iTrimming <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'FulfilExpressiTrimming'
     */
    const VALUE_FULFIL_EXPRESSI_TRIMMING = 'FulfilExpressiTrimming';
    /**
     * Constant for value 'GLS'
     * Meta information extracted from the WSDL
     * - documentation: GLS (General Logistics Systems) <br/> &nbsp;&nbsp;Available in IE, ES, AT, IT, FR, BE, DE, NL.
     * @return string 'GLS'
     */
    const VALUE_GLS = 'GLS';
    /**
     * Constant for value 'HDUSA'
     * Meta information extracted from the WSDL
     * - documentation: MXD Group (formerly Home Direct USA) <br/> &nbsp;&nbsp;Home Direct USA is now part of MXD Group. Available in US.
     * @return string 'HDUSA'
     */
    const VALUE_HDUSA = 'HDUSA';
    /**
     * Constant for value 'HomeDeliveryNetwork'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> Use <code>Yodel</code> instead.
     * @return string 'HomeDeliveryNetwork'
     */
    const VALUE_HOME_DELIVERY_NETWORK = 'HomeDeliveryNetwork';
    /**
     * Constant for value 'HongKongPost'
     * Meta information extracted from the WSDL
     * - documentation: Hong Kong Post <br/> &nbsp;&nbsp;Available in US, UK, DE, AU.
     * @return string 'HongKongPost'
     */
    const VALUE_HONG_KONG_POST = 'HongKongPost';
    /**
     * Constant for value 'HUNTEREXPRESS'
     * Meta information extracted from the WSDL
     * - documentation: Hunter Express <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'HUNTEREXPRESS'
     */
    const VALUE_HUNTEREXPRESS = 'HUNTEREXPRESS';
    /**
     * Constant for value 'IndiaPost'
     * Meta information extracted from the WSDL
     * - documentation: India Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'IndiaPost'
     */
    const VALUE_INDIA_POST = 'IndiaPost';
    /**
     * Constant for value 'IndonesiaPost'
     * Meta information extracted from the WSDL
     * - documentation: Indonesia Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'IndonesiaPost'
     */
    const VALUE_INDONESIA_POST = 'IndonesiaPost';
    /**
     * Constant for value 'Interlink'
     * Meta information extracted from the WSDL
     * - documentation: Interlink Express <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'Interlink'
     */
    const VALUE_INTERLINK = 'Interlink';
    /**
     * Constant for value 'InterPost'
     * Meta information extracted from the WSDL
     * - documentation: InterPost <br/> &nbsp;&nbsp;Available in IE, US, CA, UK, FR, IT, HK, DE, RO, AU, ES, AT, CN, CY, BE, PL, NL.
     * @return string 'InterPost'
     */
    const VALUE_INTER_POST = 'InterPost';
    /**
     * Constant for value 'IoInvio'
     * Meta information extracted from the WSDL
     * - documentation: IoInvio <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'IoInvio'
     */
    const VALUE_IO_INVIO = 'IoInvio';
    /**
     * Constant for value 'Iparcel'
     * Meta information extracted from the WSDL
     * - documentation: UPS i-parcel <br/> &nbsp;&nbsp;Available in US, MX, MY, SG, HK, ZA, TR, CH, JP, BR.
     * @return string 'Iparcel'
     */
    const VALUE_IPARCEL = 'Iparcel';
    /**
     * Constant for value 'IsraelPost'
     * Meta information extracted from the WSDL
     * - documentation: Israel Post <br/> &nbsp;&nbsp;Available in US.
     * @return string 'IsraelPost'
     */
    const VALUE_ISRAEL_POST = 'IsraelPost';
    /**
     * Constant for value 'JapanPost'
     * Meta information extracted from the WSDL
     * - documentation: Japan Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'JapanPost'
     */
    const VALUE_JAPAN_POST = 'JapanPost';
    /**
     * Constant for value 'KIALA'
     * Meta information extracted from the WSDL
     * - documentation: Kiala (UPS Access Point) <br/> &nbsp;&nbsp;Available in ES, US, FR, UK, BE, DE, NL.
     * @return string 'KIALA'
     */
    const VALUE_KIALA = 'KIALA';
    /**
     * Constant for value 'KoreaPost'
     * Meta information extracted from the WSDL
     * - documentation: Korea Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'KoreaPost'
     */
    const VALUE_KOREA_POST = 'KoreaPost';
    /**
     * Constant for value 'LAPOSTE'
     * Meta information extracted from the WSDL
     * - documentation: La Poste <br/> &nbsp;&nbsp;Available in US, FR, UK, DE.
     * @return string 'LAPOSTE'
     */
    const VALUE_LAPOSTE = 'LAPOSTE';
    /**
     * Constant for value 'Landmark'
     * Meta information extracted from the WSDL
     * - documentation: Landmark Global <br/> &nbsp;&nbsp;Available in US, NZ, NO.
     * @return string 'Landmark'
     */
    const VALUE_LANDMARK = 'Landmark';
    /**
     * Constant for value 'LDSO'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'LDSO'
     */
    const VALUE_LDSO = 'LDSO';
    /**
     * Constant for value 'LTL'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'LTL'
     */
    const VALUE_LTL = 'LTL';
    /**
     * Constant for value 'MALAYSIAPOST'
     * Meta information extracted from the WSDL
     * - documentation: Malaysia Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'MALAYSIAPOST'
     */
    const VALUE_MALAYSIAPOST = 'MALAYSIAPOST';
    /**
     * Constant for value 'MannaFreight'
     * Meta information extracted from the WSDL
     * - documentation: Manna Distribution Services <br/> &nbsp;&nbsp;Available in US.
     * @return string 'MannaFreight'
     */
    const VALUE_MANNA_FREIGHT = 'MannaFreight';
    /**
     * Constant for value 'Metapack'
     * Meta information extracted from the WSDL
     * - documentation: Metapack <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'Metapack'
     */
    const VALUE_METAPACK = 'Metapack';
    /**
     * Constant for value 'MNGTurkey'
     * Meta information extracted from the WSDL
     * - documentation: MNG Kargo <br/> &nbsp;&nbsp;Available in US, UK, TR.
     * @return string 'MNGTurkey'
     */
    const VALUE_MNGTURKEY = 'MNGTurkey';
    /**
     * Constant for value 'MondialRelay'
     * Meta information extracted from the WSDL
     * - documentation: Mondial Relay <br/> &nbsp;&nbsp;Available in FR.
     * @return string 'MondialRelay'
     */
    const VALUE_MONDIAL_RELAY = 'MondialRelay';
    /**
     * Constant for value 'MRW'
     * Meta information extracted from the WSDL
     * - documentation: MRW <br/> &nbsp;&nbsp;Available in ES.
     * @return string 'MRW'
     */
    const VALUE_MRW = 'MRW';
    /**
     * Constant for value 'MSI'
     * Meta information extracted from the WSDL
     * - documentation: MSI Transportation <br/> &nbsp;&nbsp;Available in US.
     * @return string 'MSI'
     */
    const VALUE_MSI = 'MSI';
    /**
     * Constant for value 'NEMF'
     * Meta information extracted from the WSDL
     * - documentation: New England Motor Freight <br/> &nbsp;&nbsp;Available in US.
     * @return string 'NEMF'
     */
    const VALUE_NEMF = 'NEMF';
    /**
     * Constant for value 'ODFL'
     * Meta information extracted from the WSDL
     * - documentation: Old Dominion Freight Line <br/> &nbsp;&nbsp;Available in US.
     * @return string 'ODFL'
     */
    const VALUE_ODFL = 'ODFL';
    /**
     * Constant for value 'OFFD'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'OFFD'
     */
    const VALUE_OFFD = 'OFFD';
    /**
     * Constant for value 'ONTRACK'
     * Meta information extracted from the WSDL
     * - documentation: OnTrac Shipping <br/> &nbsp;&nbsp;Available in US.
     * @return string 'ONTRACK'
     */
    const VALUE_ONTRACK = 'ONTRACK';
    /**
     * Constant for value 'OsterreichischePostAG'
     * Meta information extracted from the WSDL
     * - documentation: Osterreichische Post <br/> &nbsp;&nbsp;Available in AT.
     * @return string 'OsterreichischePostAG'
     */
    const VALUE_OSTERREICHISCHE_POST_AG = 'OsterreichischePostAG';
    /**
     * Constant for value 'OVNT'
     * Meta information extracted from the WSDL
     * - documentation: UPS Freight (formerly Overnite) <br/> &nbsp;&nbsp;Overnite is now part of UPS Freight. Available in US.
     * @return string 'OVNT'
     */
    const VALUE_OVNT = 'OVNT';
    /**
     * Constant for value 'ParcelPool'
     * Meta information extracted from the WSDL
     * - documentation: International Bridge Domestic delivery <br/> &nbsp;&nbsp;Available in US.
     * @return string 'ParcelPool'
     */
    const VALUE_PARCEL_POOL = 'ParcelPool';
    /**
     * Constant for value 'Parcelforce'
     * Meta information extracted from the WSDL
     * - documentation: Parcelforce <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'Parcelforce'
     */
    const VALUE_PARCELFORCE = 'Parcelforce';
    /**
     * Constant for value 'Philpost'
     * Meta information extracted from the WSDL
     * - documentation: PHLPost (Philippine Postal Corporation) <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'Philpost'
     */
    const VALUE_PHILPOST = 'Philpost';
    /**
     * Constant for value 'Pilot'
     * Meta information extracted from the WSDL
     * - documentation: Pilot Freight Services <br/> &nbsp;&nbsp;Available in US.
     * @return string 'Pilot'
     */
    const VALUE_PILOT = 'Pilot';
    /**
     * Constant for value 'PITD'
     * Meta information extracted from the WSDL
     * - documentation: PITT OHIO <br/> &nbsp;&nbsp;Available in US.
     * @return string 'PITD'
     */
    const VALUE_PITD = 'PITD';
    /**
     * Constant for value 'PocztaPolska'
     * Meta information extracted from the WSDL
     * - documentation: Poczta Polska <br/> &nbsp;&nbsp;Available in PL.
     * @return string 'PocztaPolska'
     */
    const VALUE_POCZTA_POLSKA = 'PocztaPolska';
    /**
     * Constant for value 'Pocztex'
     * Meta information extracted from the WSDL
     * - documentation: Pocztex <br/> &nbsp;&nbsp;Available in PL.
     * @return string 'Pocztex'
     */
    const VALUE_POCZTEX = 'Pocztex';
    /**
     * Constant for value 'POSTITALIANO'
     * Meta information extracted from the WSDL
     * - documentation: Post Italiano <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'POSTITALIANO'
     */
    const VALUE_POSTITALIANO = 'POSTITALIANO';
    /**
     * Constant for value 'PostNL'
     * Meta information extracted from the WSDL
     * - documentation: PostNL <br/> &nbsp;&nbsp;Available in NL.
     * @return string 'PostNL'
     */
    const VALUE_POST_NL = 'PostNL';
    /**
     * Constant for value 'PostNordNorway'
     * Meta information extracted from the WSDL
     * - documentation: PostNord <br/> &nbsp;&nbsp;Available in UK, NO.
     * @return string 'PostNordNorway'
     */
    const VALUE_POST_NORD_NORWAY = 'PostNordNorway';
    /**
     * Constant for value 'PosteItaliane'
     * Meta information extracted from the WSDL
     * - documentation: Poste Italiane <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'PosteItaliane'
     */
    const VALUE_POSTE_ITALIANE = 'PosteItaliane';
    /**
     * Constant for value 'Prestige'
     * Meta information extracted from the WSDL
     * - documentation: LaserShip (formerly Prestige Expedite) <br/> &nbsp;&nbsp;Prestige Expedite is now part of LaserShip. Available in US.
     * @return string 'Prestige'
     */
    const VALUE_PRESTIGE = 'Prestige';
    /**
     * Constant for value 'Quantium'
     * Meta information extracted from the WSDL
     * - documentation: Quantium Solutions <br/> &nbsp;&nbsp;Available in US, UK, DE, AU.
     * @return string 'Quantium'
     */
    const VALUE_QUANTIUM = 'Quantium';
    /**
     * Constant for value 'RETL'
     * Meta information extracted from the WSDL
     * - documentation: Reddaway <br/> &nbsp;&nbsp;Available in US.
     * @return string 'RETL'
     */
    const VALUE_RETL = 'RETL';
    /**
     * Constant for value 'RoyalMail'
     * Meta information extracted from the WSDL
     * - documentation: Royal Mail <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'RoyalMail'
     */
    const VALUE_ROYAL_MAIL = 'RoyalMail';
    /**
     * Constant for value 'RRUN'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'RRUN'
     */
    const VALUE_RRUN = 'RRUN';
    /**
     * Constant for value 'SAIA'
     * Meta information extracted from the WSDL
     * - documentation: Saia LTL Freight <br/> &nbsp;&nbsp;Available in US.
     * @return string 'SAIA'
     */
    const VALUE_SAIA = 'SAIA';
    /**
     * Constant for value 'SDA'
     * Meta information extracted from the WSDL
     * - documentation: SDA Express Courier <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'SDA'
     */
    const VALUE_SDA = 'SDA';
    /**
     * Constant for value 'SFC'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'SFC'
     */
    const VALUE_SFC = 'SFC';
    /**
     * Constant for value 'SFCExpress'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'SFCExpress'
     */
    const VALUE_SFCEXPRESS = 'SFCExpress';
    /**
     * Constant for value 'SINGAPOREPOST'
     * Meta information extracted from the WSDL
     * - documentation: Singapore Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'SINGAPOREPOST'
     */
    const VALUE_SINGAPOREPOST = 'SINGAPOREPOST';
    /**
     * Constant for value 'Siodemka'
     * Meta information extracted from the WSDL
     * - documentation: Siodemka (DPD Poland) <br/> &nbsp;&nbsp;Available in PL.
     * @return string 'Siodemka'
     */
    const VALUE_SIODEMKA = 'Siodemka';
    /**
     * Constant for value 'SioliandFontana'
     * Meta information extracted from the WSDL
     * - documentation: Sioli & Fontana <br/> &nbsp;&nbsp;Available in US, CA, IT.
     * @return string 'SioliandFontana'
     */
    const VALUE_SIOLIAND_FONTANA = 'SioliandFontana';
    /**
     * Constant for value 'SkynetMalaysia'
     * Meta information extracted from the WSDL
     * - documentation: Skynet (Malaysia) <br/> &nbsp;&nbsp;Available in US, MY.
     * @return string 'SkynetMalaysia'
     */
    const VALUE_SKYNET_MALAYSIA = 'SkynetMalaysia';
    /**
     * Constant for value 'SMARTSEND'
     * Meta information extracted from the WSDL
     * - documentation: Smart Send Courier Service <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'SMARTSEND'
     */
    const VALUE_SMARTSEND = 'SMARTSEND';
    /**
     * Constant for value 'Sogetras'
     * Meta information extracted from the WSDL
     * - documentation: SGT Corriere Espresso <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'Sogetras'
     */
    const VALUE_SOGETRAS = 'Sogetras';
    /**
     * Constant for value 'Spediamo'
     * Meta information extracted from the WSDL
     * - documentation: Spediamo <br/> &nbsp;&nbsp;Available in IT.
     * @return string 'Spediamo'
     */
    const VALUE_SPEDIAMO = 'Spediamo';
    /**
     * Constant for value 'SpeeDee'
     * Meta information extracted from the WSDL
     * - documentation: Spee-Dee Delivery Service <br/> &nbsp;&nbsp;Available in US.
     * @return string 'SpeeDee'
     */
    const VALUE_SPEE_DEE = 'SpeeDee';
    /**
     * Constant for value 'StarTrack'
     * Meta information extracted from the WSDL
     * - documentation: StarTrack <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'StarTrack'
     */
    const VALUE_STAR_TRACK = 'StarTrack';
    /**
     * Constant for value 'SuntekExpressLTD'
     * Meta information extracted from the WSDL
     * - documentation: Suntek Express LTD <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'SuntekExpressLTD'
     */
    const VALUE_SUNTEK_EXPRESS_LTD = 'SuntekExpressLTD';
    /**
     * Constant for value 'SwissPost'
     * Meta information extracted from the WSDL
     * - documentation: Swiss Post <br/> &nbsp;&nbsp;Available in US, UK, CH.
     * @return string 'SwissPost'
     */
    const VALUE_SWISS_POST = 'SwissPost';
    /**
     * Constant for value 'TELE'
     * Meta information extracted from the WSDL
     * - documentation: TELE <br/> &nbsp;&nbsp;Available in US.
     * @return string 'TELE'
     */
    const VALUE_TELE = 'TELE';
    /**
     * Constant for value 'TEMANDO'
     * Meta information extracted from the WSDL
     * - documentation: Temando (shipping broker) <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'TEMANDO'
     */
    const VALUE_TEMANDO = 'TEMANDO';
    /**
     * Constant for value 'THAILANDPOST'
     * Meta information extracted from the WSDL
     * - documentation: Thailand Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'THAILANDPOST'
     */
    const VALUE_THAILANDPOST = 'THAILANDPOST';
    /**
     * Constant for value 'TNT'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'TNT'
     */
    const VALUE_TNT = 'TNT';
    /**
     * Constant for value 'TNTEXPRESS'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'TNTEXPRESS'
     */
    const VALUE_TNTEXPRESS = 'TNTEXPRESS';
    /**
     * Constant for value 'TNTPost'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'TNTPost'
     */
    const VALUE_TNTPOST = 'TNTPost';
    /**
     * Constant for value 'Toll'
     * Meta information extracted from the WSDL
     * - documentation: Toll (Japan Post) <br/> &nbsp;&nbsp;Available in AU.
     * @return string 'Toll'
     */
    const VALUE_TOLL = 'Toll';
    /**
     * Constant for value 'TPG'
     * Meta information extracted from the WSDL
     * - documentation: TPG Logistics <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'TPG'
     */
    const VALUE_TPG = 'TPG';
    /**
     * Constant for value 'TWW'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'TWW'
     */
    const VALUE_TWW = 'TWW';
    /**
     * Constant for value 'UBI'
     * Meta information extracted from the WSDL
     * - documentation: UBI Smart Parcel <br/> &nbsp;&nbsp;Available in US.
     * @return string 'UBI'
     */
    const VALUE_UBI = 'UBI';
    /**
     * Constant for value 'UKMail'
     * Meta information extracted from the WSDL
     * - documentation: UK Mail <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'UKMail'
     */
    const VALUE_UKMAIL = 'UKMail';
    /**
     * Constant for value 'UPSMailInnovations'
     * Meta information extracted from the WSDL
     * - documentation: UPS Mail Innovations <br/> &nbsp;&nbsp;In CompleteSale call requests only, specify UPS Mail Innovations with the value <code>UPS</code>. Available in US, UK, DE.
     * @return string 'UPSMailInnovations'
     */
    const VALUE_UPSMAIL_INNOVATIONS = 'UPSMailInnovations';
    /**
     * Constant for value 'UPSC'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'UPSC'
     */
    const VALUE_UPSC = 'UPSC';
    /**
     * Constant for value 'USFG'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'USFG'
     */
    const VALUE_USFG = 'USFG';
    /**
     * Constant for value 'USPSCeP'
     * Meta information extracted from the WSDL
     * - documentation: USPS Commercial ePacket <br/> &nbsp;&nbsp;Available in US, CA.
     * @return string 'USPSCeP'
     */
    const VALUE_USPSCE_P = 'USPSCeP';
    /**
     * Constant for value 'USPSPMI'
     * Meta information extracted from the WSDL
     * - documentation: USPS Priority Mail International <br/> &nbsp;&nbsp;Available in US, CA.
     * @return string 'USPSPMI'
     */
    const VALUE_USPSPMI = 'USPSPMI';
    /**
     * Constant for value 'VietnamPost'
     * Meta information extracted from the WSDL
     * - documentation: Vietnam Post <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'VietnamPost'
     */
    const VALUE_VIETNAM_POST = 'VietnamPost';
    /**
     * Constant for value 'VITR'
     * Meta information extracted from the WSDL
     * - documentation: Vitran Express <br/> &nbsp;&nbsp;Available in US.
     * @return string 'VITR'
     */
    const VALUE_VITR = 'VITR';
    /**
     * Constant for value 'WATKINS'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'WATKINS'
     */
    const VALUE_WATKINS = 'WATKINS';
    /**
     * Constant for value 'Winit'
     * Meta information extracted from the WSDL
     * - documentation: WIN.IT America <br/> &nbsp;&nbsp;Available in US, UK, DE, AU.
     * @return string 'Winit'
     */
    const VALUE_WINIT = 'Winit';
    /**
     * Constant for value 'Wise'
     * Meta information extracted from the WSDL
     * - documentation: n/a <br/> &nbsp;&nbsp;Not currently supported.
     * @return string 'Wise'
     */
    const VALUE_WISE = 'Wise';
    /**
     * Constant for value 'WNdirect'
     * Meta information extracted from the WSDL
     * - documentation: wnDirect <br/> &nbsp;&nbsp;Available in US, CA, IT, FR, UK, RU, AU.
     * @return string 'WNdirect'
     */
    const VALUE_WNDIRECT = 'WNdirect';
    /**
     * Constant for value 'WPX'
     * Meta information extracted from the WSDL
     * - documentation: WPX Delivery Solutions <br/> &nbsp;&nbsp;Available in US.
     * @return string 'WPX'
     */
    const VALUE_WPX = 'WPX';
    /**
     * Constant for value 'YANWEN'
     * Meta information extracted from the WSDL
     * - documentation: YANWEN Express <br/> &nbsp;&nbsp;Available in US, UK, DE.
     * @return string 'YANWEN'
     */
    const VALUE_YANWEN = 'YANWEN';
    /**
     * Constant for value 'Yodel'
     * Meta information extracted from the WSDL
     * - documentation: Yodel <br/> &nbsp;&nbsp;Available in UK.
     * @return string 'Yodel'
     */
    const VALUE_YODEL = 'Yodel';
    /**
     * Constant for value 'YRC'
     * Meta information extracted from the WSDL
     * - documentation: YRC Freight <br/> &nbsp;&nbsp;Available in US.
     * @return string 'YRC'
     */
    const VALUE_YRC = 'YRC';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UPS
     * @uses self::VALUE_USPS
     * @uses self::VALUE_FED_EX
     * @uses self::VALUE_DEUTSCHE_POST
     * @uses self::VALUE_DHL
     * @uses self::VALUE_HERMES
     * @uses self::VALUE_I_LOXX
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_COLIPOSTE_DOMESTIC
     * @uses self::VALUE_COLIPOSTE_INTERNATIONAL
     * @uses self::VALUE_CHRONOPOST
     * @uses self::VALUE_CORREOS
     * @uses self::VALUE_SEUR
     * @uses self::VALUE_NACEX
     * @uses self::VALUE_FOUR_PX
     * @uses self::VALUE_FOUR_PXCHINA
     * @uses self::VALUE_FOUR_PXEXPRESS
     * @uses self::VALUE_FOUR_PXLTD
     * @uses self::VALUE_SEVEN_LSP
     * @uses self::VALUE_A_1_COURIER_SERVICES
     * @uses self::VALUE_ABF
     * @uses self::VALUE_AERO_POST
     * @uses self::VALUE_ALLIEDEXPRESS
     * @uses self::VALUE_AMWST
     * @uses self::VALUE_AN_POST
     * @uses self::VALUE_APC
     * @uses self::VALUE_ARAMEX
     * @uses self::VALUE_ARVATO
     * @uses self::VALUE_ASM
     * @uses self::VALUE_AUSTRALIA_POST
     * @uses self::VALUE_AUSTRALIAN_AIR_EXPRESS
     * @uses self::VALUE_AVRT
     * @uses self::VALUE_BPOST
     * @uses self::VALUE_BARTOLINI
     * @uses self::VALUE_BELGIANPOST
     * @uses self::VALUE_BKNS
     * @uses self::VALUE_BLUE_PACKAGE
     * @uses self::VALUE_BUSINESS_POST
     * @uses self::VALUE_CAN_PAR
     * @uses self::VALUE_CENF
     * @uses self::VALUE_CEVA
     * @uses self::VALUE_CHINA_POST
     * @uses self::VALUE_CHRONOEXPRES
     * @uses self::VALUE_CHUKOU_1
     * @uses self::VALUE_CHUNGHWA_POST
     * @uses self::VALUE_CITI_POST
     * @uses self::VALUE_CITY_LINK
     * @uses self::VALUE_CLICKAND_QUICK
     * @uses self::VALUE_CNWY
     * @uses self::VALUE_COLISSIMO
     * @uses self::VALUE_COLLECT_PLUS
     * @uses self::VALUE_CPC
     * @uses self::VALUE_DAIPOST
     * @uses self::VALUE_DAYAND_ROSS
     * @uses self::VALUE_DBSCHENKER
     * @uses self::VALUE_DHLEXPRESS
     * @uses self::VALUE_DHLGLOBAL_MAIL
     * @uses self::VALUE_DHLEKB
     * @uses self::VALUE_DHLG
     * @uses self::VALUE_DIE_SCHWEIZERISCHE_POST
     * @uses self::VALUE_DPD
     * @uses self::VALUE_DPXTHAILAND
     * @uses self::VALUE_DUCROS
     * @uses self::VALUE_EGO
     * @uses self::VALUE_EMF
     * @uses self::VALUE_EXAPAQ
     * @uses self::VALUE_FASTWAY
     * @uses self::VALUE_FASTWAYCOURIERS
     * @uses self::VALUE_FED_EX_SMART_POST
     * @uses self::VALUE_FLYT
     * @uses self::VALUE_FLYTEXPRESS
     * @uses self::VALUE_FLYT_EXPRESS_USDIRECTLINE
     * @uses self::VALUE_FTFT
     * @uses self::VALUE_FULFIL_EXPRESS_ACC_STATION
     * @uses self::VALUE_FULFIL_EXPRESSE_FOR_CITY
     * @uses self::VALUE_FULFIL_EXPRESS_EVERYDAY_SOURCE
     * @uses self::VALUE_FULFIL_EXPRESSI_TRIMMING
     * @uses self::VALUE_GLS
     * @uses self::VALUE_HDUSA
     * @uses self::VALUE_HOME_DELIVERY_NETWORK
     * @uses self::VALUE_HONG_KONG_POST
     * @uses self::VALUE_HUNTEREXPRESS
     * @uses self::VALUE_INDIA_POST
     * @uses self::VALUE_INDONESIA_POST
     * @uses self::VALUE_INTERLINK
     * @uses self::VALUE_INTER_POST
     * @uses self::VALUE_IO_INVIO
     * @uses self::VALUE_IPARCEL
     * @uses self::VALUE_ISRAEL_POST
     * @uses self::VALUE_JAPAN_POST
     * @uses self::VALUE_KIALA
     * @uses self::VALUE_KOREA_POST
     * @uses self::VALUE_LAPOSTE
     * @uses self::VALUE_LANDMARK
     * @uses self::VALUE_LDSO
     * @uses self::VALUE_LTL
     * @uses self::VALUE_MALAYSIAPOST
     * @uses self::VALUE_MANNA_FREIGHT
     * @uses self::VALUE_METAPACK
     * @uses self::VALUE_MNGTURKEY
     * @uses self::VALUE_MONDIAL_RELAY
     * @uses self::VALUE_MRW
     * @uses self::VALUE_MSI
     * @uses self::VALUE_NEMF
     * @uses self::VALUE_ODFL
     * @uses self::VALUE_OFFD
     * @uses self::VALUE_ONTRACK
     * @uses self::VALUE_OSTERREICHISCHE_POST_AG
     * @uses self::VALUE_OVNT
     * @uses self::VALUE_PARCEL_POOL
     * @uses self::VALUE_PARCELFORCE
     * @uses self::VALUE_PHILPOST
     * @uses self::VALUE_PILOT
     * @uses self::VALUE_PITD
     * @uses self::VALUE_POCZTA_POLSKA
     * @uses self::VALUE_POCZTEX
     * @uses self::VALUE_POSTITALIANO
     * @uses self::VALUE_POST_NL
     * @uses self::VALUE_POST_NORD_NORWAY
     * @uses self::VALUE_POSTE_ITALIANE
     * @uses self::VALUE_PRESTIGE
     * @uses self::VALUE_QUANTIUM
     * @uses self::VALUE_RETL
     * @uses self::VALUE_ROYAL_MAIL
     * @uses self::VALUE_RRUN
     * @uses self::VALUE_SAIA
     * @uses self::VALUE_SDA
     * @uses self::VALUE_SFC
     * @uses self::VALUE_SFCEXPRESS
     * @uses self::VALUE_SINGAPOREPOST
     * @uses self::VALUE_SIODEMKA
     * @uses self::VALUE_SIOLIAND_FONTANA
     * @uses self::VALUE_SKYNET_MALAYSIA
     * @uses self::VALUE_SMARTSEND
     * @uses self::VALUE_SOGETRAS
     * @uses self::VALUE_SPEDIAMO
     * @uses self::VALUE_SPEE_DEE
     * @uses self::VALUE_STAR_TRACK
     * @uses self::VALUE_SUNTEK_EXPRESS_LTD
     * @uses self::VALUE_SWISS_POST
     * @uses self::VALUE_TELE
     * @uses self::VALUE_TEMANDO
     * @uses self::VALUE_THAILANDPOST
     * @uses self::VALUE_TNT
     * @uses self::VALUE_TNTEXPRESS
     * @uses self::VALUE_TNTPOST
     * @uses self::VALUE_TOLL
     * @uses self::VALUE_TPG
     * @uses self::VALUE_TWW
     * @uses self::VALUE_UBI
     * @uses self::VALUE_UKMAIL
     * @uses self::VALUE_UPSMAIL_INNOVATIONS
     * @uses self::VALUE_UPSC
     * @uses self::VALUE_USFG
     * @uses self::VALUE_USPSCE_P
     * @uses self::VALUE_USPSPMI
     * @uses self::VALUE_VIETNAM_POST
     * @uses self::VALUE_VITR
     * @uses self::VALUE_WATKINS
     * @uses self::VALUE_WINIT
     * @uses self::VALUE_WISE
     * @uses self::VALUE_WNDIRECT
     * @uses self::VALUE_WPX
     * @uses self::VALUE_YANWEN
     * @uses self::VALUE_YODEL
     * @uses self::VALUE_YRC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPS,
            self::VALUE_USPS,
            self::VALUE_FED_EX,
            self::VALUE_DEUTSCHE_POST,
            self::VALUE_DHL,
            self::VALUE_HERMES,
            self::VALUE_I_LOXX,
            self::VALUE_OTHER,
            self::VALUE_COLIPOSTE_DOMESTIC,
            self::VALUE_COLIPOSTE_INTERNATIONAL,
            self::VALUE_CHRONOPOST,
            self::VALUE_CORREOS,
            self::VALUE_SEUR,
            self::VALUE_NACEX,
            self::VALUE_FOUR_PX,
            self::VALUE_FOUR_PXCHINA,
            self::VALUE_FOUR_PXEXPRESS,
            self::VALUE_FOUR_PXLTD,
            self::VALUE_SEVEN_LSP,
            self::VALUE_A_1_COURIER_SERVICES,
            self::VALUE_ABF,
            self::VALUE_AERO_POST,
            self::VALUE_ALLIEDEXPRESS,
            self::VALUE_AMWST,
            self::VALUE_AN_POST,
            self::VALUE_APC,
            self::VALUE_ARAMEX,
            self::VALUE_ARVATO,
            self::VALUE_ASM,
            self::VALUE_AUSTRALIA_POST,
            self::VALUE_AUSTRALIAN_AIR_EXPRESS,
            self::VALUE_AVRT,
            self::VALUE_BPOST,
            self::VALUE_BARTOLINI,
            self::VALUE_BELGIANPOST,
            self::VALUE_BKNS,
            self::VALUE_BLUE_PACKAGE,
            self::VALUE_BUSINESS_POST,
            self::VALUE_CAN_PAR,
            self::VALUE_CENF,
            self::VALUE_CEVA,
            self::VALUE_CHINA_POST,
            self::VALUE_CHRONOEXPRES,
            self::VALUE_CHUKOU_1,
            self::VALUE_CHUNGHWA_POST,
            self::VALUE_CITI_POST,
            self::VALUE_CITY_LINK,
            self::VALUE_CLICKAND_QUICK,
            self::VALUE_CNWY,
            self::VALUE_COLISSIMO,
            self::VALUE_COLLECT_PLUS,
            self::VALUE_CPC,
            self::VALUE_DAIPOST,
            self::VALUE_DAYAND_ROSS,
            self::VALUE_DBSCHENKER,
            self::VALUE_DHLEXPRESS,
            self::VALUE_DHLGLOBAL_MAIL,
            self::VALUE_DHLEKB,
            self::VALUE_DHLG,
            self::VALUE_DIE_SCHWEIZERISCHE_POST,
            self::VALUE_DPD,
            self::VALUE_DPXTHAILAND,
            self::VALUE_DUCROS,
            self::VALUE_EGO,
            self::VALUE_EMF,
            self::VALUE_EXAPAQ,
            self::VALUE_FASTWAY,
            self::VALUE_FASTWAYCOURIERS,
            self::VALUE_FED_EX_SMART_POST,
            self::VALUE_FLYT,
            self::VALUE_FLYTEXPRESS,
            self::VALUE_FLYT_EXPRESS_USDIRECTLINE,
            self::VALUE_FTFT,
            self::VALUE_FULFIL_EXPRESS_ACC_STATION,
            self::VALUE_FULFIL_EXPRESSE_FOR_CITY,
            self::VALUE_FULFIL_EXPRESS_EVERYDAY_SOURCE,
            self::VALUE_FULFIL_EXPRESSI_TRIMMING,
            self::VALUE_GLS,
            self::VALUE_HDUSA,
            self::VALUE_HOME_DELIVERY_NETWORK,
            self::VALUE_HONG_KONG_POST,
            self::VALUE_HUNTEREXPRESS,
            self::VALUE_INDIA_POST,
            self::VALUE_INDONESIA_POST,
            self::VALUE_INTERLINK,
            self::VALUE_INTER_POST,
            self::VALUE_IO_INVIO,
            self::VALUE_IPARCEL,
            self::VALUE_ISRAEL_POST,
            self::VALUE_JAPAN_POST,
            self::VALUE_KIALA,
            self::VALUE_KOREA_POST,
            self::VALUE_LAPOSTE,
            self::VALUE_LANDMARK,
            self::VALUE_LDSO,
            self::VALUE_LTL,
            self::VALUE_MALAYSIAPOST,
            self::VALUE_MANNA_FREIGHT,
            self::VALUE_METAPACK,
            self::VALUE_MNGTURKEY,
            self::VALUE_MONDIAL_RELAY,
            self::VALUE_MRW,
            self::VALUE_MSI,
            self::VALUE_NEMF,
            self::VALUE_ODFL,
            self::VALUE_OFFD,
            self::VALUE_ONTRACK,
            self::VALUE_OSTERREICHISCHE_POST_AG,
            self::VALUE_OVNT,
            self::VALUE_PARCEL_POOL,
            self::VALUE_PARCELFORCE,
            self::VALUE_PHILPOST,
            self::VALUE_PILOT,
            self::VALUE_PITD,
            self::VALUE_POCZTA_POLSKA,
            self::VALUE_POCZTEX,
            self::VALUE_POSTITALIANO,
            self::VALUE_POST_NL,
            self::VALUE_POST_NORD_NORWAY,
            self::VALUE_POSTE_ITALIANE,
            self::VALUE_PRESTIGE,
            self::VALUE_QUANTIUM,
            self::VALUE_RETL,
            self::VALUE_ROYAL_MAIL,
            self::VALUE_RRUN,
            self::VALUE_SAIA,
            self::VALUE_SDA,
            self::VALUE_SFC,
            self::VALUE_SFCEXPRESS,
            self::VALUE_SINGAPOREPOST,
            self::VALUE_SIODEMKA,
            self::VALUE_SIOLIAND_FONTANA,
            self::VALUE_SKYNET_MALAYSIA,
            self::VALUE_SMARTSEND,
            self::VALUE_SOGETRAS,
            self::VALUE_SPEDIAMO,
            self::VALUE_SPEE_DEE,
            self::VALUE_STAR_TRACK,
            self::VALUE_SUNTEK_EXPRESS_LTD,
            self::VALUE_SWISS_POST,
            self::VALUE_TELE,
            self::VALUE_TEMANDO,
            self::VALUE_THAILANDPOST,
            self::VALUE_TNT,
            self::VALUE_TNTEXPRESS,
            self::VALUE_TNTPOST,
            self::VALUE_TOLL,
            self::VALUE_TPG,
            self::VALUE_TWW,
            self::VALUE_UBI,
            self::VALUE_UKMAIL,
            self::VALUE_UPSMAIL_INNOVATIONS,
            self::VALUE_UPSC,
            self::VALUE_USFG,
            self::VALUE_USPSCE_P,
            self::VALUE_USPSPMI,
            self::VALUE_VIETNAM_POST,
            self::VALUE_VITR,
            self::VALUE_WATKINS,
            self::VALUE_WINIT,
            self::VALUE_WISE,
            self::VALUE_WNDIRECT,
            self::VALUE_WPX,
            self::VALUE_YANWEN,
            self::VALUE_YODEL,
            self::VALUE_YRC,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
