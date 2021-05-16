<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CurrencyCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type contains a list of standard 3-digit ISO 4217 currency codes for currency used in countries around the world. <br/><br/> When adding an item through <b>AddItem</b> (or related API call), the <b>Item.Currency</b>
 * value will default to the currency used on the listing site. Otherwise, only the following currency types may be specified through an Add/Revise/Relist call, since these are the currencies of all the countries where the Trading API is supported: <ul>
 * <li>USD - US Dollar</li> <li>CAD - Canadian Dollar</li> <li>GBP - British Pound</li> <li>AUD - Australian Dollar</li> <li>EUR - Euro</li> <li>CHF - Swiss Franc</li> <li>CNY - Chinese Renminbi</li> <li>HKD - Hong Kong Dollar</li> <li>PHP - Philippines
 * Peso</li> <li>PLN - Polish Zloty</li> <li>SEK - Sweden Krona</li> <li>SGD - Singapore Dollar</li> <li>TWD - Taiwanese Dollar</li> <li>MYR - Malaysian Ringgit</li> </ul> <br/> Other currency codes in this enumerated type may be returned in
 * <b>GetItem</b> (and other calls) based on the buyer's and/or seller's registration country. However, only the values listed above will be returned if you call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>CurrencyDetails</b>.
 * http://www.xe.com/iso4217.htm
 * @subpackage Enumerations
 */
class CurrencyCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AFA'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Afghan afghani, a currency used in Afghanistan.
     * @return string 'AFA'
     */
    const VALUE_AFA = 'AFA';
    /**
     * Constant for value 'ALL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Albanian lek, a currency used in Albania.
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'DZD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Algerian dinar, a currency used in Algeria.
     * @return string 'DZD'
     */
    const VALUE_DZD = 'DZD';
    /**
     * Constant for value 'ADP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Andorran peseta, a currency used in Andorra.
     * @return string 'ADP'
     */
    const VALUE_ADP = 'ADP';
    /**
     * Constant for value 'AOA'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Angolan kwanza, a currency used in Angola.
     * @return string 'AOA'
     */
    const VALUE_AOA = 'AOA';
    /**
     * Constant for value 'ARS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Argentine peso, a currency used in Argentina.
     * @return string 'ARS'
     */
    const VALUE_ARS = 'ARS';
    /**
     * Constant for value 'AMD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Armenian dram, a currency used in Armenia.
     * @return string 'AMD'
     */
    const VALUE_AMD = 'AMD';
    /**
     * Constant for value 'AWG'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Aruban florin, a currency used in Aruba.
     * @return string 'AWG'
     */
    const VALUE_AWG = 'AWG';
    /**
     * Constant for value 'AZM'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Azerbaijani manat, a currency used in Azerbaijan.
     * @return string 'AZM'
     */
    const VALUE_AZM = 'AZM';
    /**
     * Constant for value 'BSD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bahamian dollar, a currency used in the Bahamas.
     * @return string 'BSD'
     */
    const VALUE_BSD = 'BSD';
    /**
     * Constant for value 'BHD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bahraini dinar, a currency used in the Bahrain.
     * @return string 'BHD'
     */
    const VALUE_BHD = 'BHD';
    /**
     * Constant for value 'BDT'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bangladeshi taka, a currency used in Bangladesh.
     * @return string 'BDT'
     */
    const VALUE_BDT = 'BDT';
    /**
     * Constant for value 'BBD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Barbados dollar, a currency used in Barbados.
     * @return string 'BBD'
     */
    const VALUE_BBD = 'BBD';
    /**
     * Constant for value 'BYR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Belarusian ruble, a currency used in Belarus.
     * @return string 'BYR'
     */
    const VALUE_BYR = 'BYR';
    /**
     * Constant for value 'BZD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Belize dollar, a currency used in Belize.
     * @return string 'BZD'
     */
    const VALUE_BZD = 'BZD';
    /**
     * Constant for value 'BMD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bermudian dollar, a currency used in Bermuda.
     * @return string 'BMD'
     */
    const VALUE_BMD = 'BMD';
    /**
     * Constant for value 'BTN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bhutanese ngultrum, a currency used in Bhutan.
     * @return string 'BTN'
     */
    const VALUE_BTN = 'BTN';
    /**
     * Constant for value 'INR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Indian rupee, a currency used in India.
     * @return string 'INR'
     */
    const VALUE_INR = 'INR';
    /**
     * Constant for value 'BOV'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bolivian Mvdol, a currency used in Bolivia.
     * @return string 'BOV'
     */
    const VALUE_BOV = 'BOV';
    /**
     * Constant for value 'BOB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Boliviano, a currency used in Bolivia.
     * @return string 'BOB'
     */
    const VALUE_BOB = 'BOB';
    /**
     * Constant for value 'BAM'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bosnia and Herzegovina convertible mark, a currency used in Bosnia and Herzegovina.
     * @return string 'BAM'
     */
    const VALUE_BAM = 'BAM';
    /**
     * Constant for value 'BWP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Botswana pula, a currency used in Botswana.
     * @return string 'BWP'
     */
    const VALUE_BWP = 'BWP';
    /**
     * Constant for value 'BRL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Brazilian real, a currency used in Brazil.
     * @return string 'BRL'
     */
    const VALUE_BRL = 'BRL';
    /**
     * Constant for value 'BND'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Brunei dollar, a currency used in Brunei and Singapore.
     * @return string 'BND'
     */
    const VALUE_BND = 'BND';
    /**
     * Constant for value 'BGL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for the old Bulgarian lev, a currency previously used in Bulgaria. This currency has been replaced by the new Bulgarian lev (3-digit code: BGN).
     * @return string 'BGL'
     */
    const VALUE_BGL = 'BGL';
    /**
     * Constant for value 'BGN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Bulgarian lev, a currency used in Bulgaria. This currency replaced the old Bulgarian lev (3-digit code: BGL).
     * @return string 'BGN'
     */
    const VALUE_BGN = 'BGN';
    /**
     * Constant for value 'BIF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Burundian franc, a currency used in Burundi.
     * @return string 'BIF'
     */
    const VALUE_BIF = 'BIF';
    /**
     * Constant for value 'KHR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Cambodian riel, a currency used in Cambodia.
     * @return string 'KHR'
     */
    const VALUE_KHR = 'KHR';
    /**
     * Constant for value 'CAD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Canadian dollar, a currency used in Canada. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Canada site (Site ID 2).
     * @return string 'CAD'
     */
    const VALUE_CAD = 'CAD';
    /**
     * Constant for value 'CVE'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Cape Verde escudo, a currency used in Cape Verde.
     * @return string 'CVE'
     */
    const VALUE_CVE = 'CVE';
    /**
     * Constant for value 'KYD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Cayman Islands dollar, a currency used in the Cayman Islands.
     * @return string 'KYD'
     */
    const VALUE_KYD = 'KYD';
    /**
     * Constant for value 'XAF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Central African CFA franc, a currency used in Cameroon, Central African Republic, Republic of the Congo, Chad, Equatorial Guinea, and Gabon.
     * @return string 'XAF'
     */
    const VALUE_XAF = 'XAF';
    /**
     * Constant for value 'CLF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Unidad de Fomento, a currency used in Chile.
     * @return string 'CLF'
     */
    const VALUE_CLF = 'CLF';
    /**
     * Constant for value 'CLP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Chilean peso, a currency used in Chile.
     * @return string 'CLP'
     */
    const VALUE_CLP = 'CLP';
    /**
     * Constant for value 'CNY'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Chinese yuan (also known as the renminbi), a currency used in China.
     * @return string 'CNY'
     */
    const VALUE_CNY = 'CNY';
    /**
     * Constant for value 'COP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Columbian peso, a currency used in Columbia.
     * @return string 'COP'
     */
    const VALUE_COP = 'COP';
    /**
     * Constant for value 'KMF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Comoro franc, a currency used in Comoros.
     * @return string 'KMF'
     */
    const VALUE_KMF = 'KMF';
    /**
     * Constant for value 'CDF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Congolese franc, a currency used in Democratic Republic of Congo.
     * @return string 'CDF'
     */
    const VALUE_CDF = 'CDF';
    /**
     * Constant for value 'CRC'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Costa Rican colon, a currency used in Costa Rica.
     * @return string 'CRC'
     */
    const VALUE_CRC = 'CRC';
    /**
     * Constant for value 'HRK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Croatian kuna, a currency used in Croatia.
     * @return string 'HRK'
     */
    const VALUE_HRK = 'HRK';
    /**
     * Constant for value 'CUP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Cuban peso, a currency used in Cuba.
     * @return string 'CUP'
     */
    const VALUE_CUP = 'CUP';
    /**
     * Constant for value 'CYP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Cypriot pound, a currency previously used in Cyprus. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'CYP'
     */
    const VALUE_CYP = 'CYP';
    /**
     * Constant for value 'CZK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Czech koruna, a currency used in the Czech Republic.
     * @return string 'CZK'
     */
    const VALUE_CZK = 'CZK';
    /**
     * Constant for value 'DKK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Danish krone, a currency used in Denmark, the Faroe Islands, and Greenland.
     * @return string 'DKK'
     */
    const VALUE_DKK = 'DKK';
    /**
     * Constant for value 'DJF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Djiboutian franc, a currency used in Djibouti.
     * @return string 'DJF'
     */
    const VALUE_DJF = 'DJF';
    /**
     * Constant for value 'DOP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Dominican peso, a currency used in the Dominican Republic.
     * @return string 'DOP'
     */
    const VALUE_DOP = 'DOP';
    /**
     * Constant for value 'TPE'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Portuguese Timorese escudo, a currency previously used in Portuguese Timor.
     * @return string 'TPE'
     */
    const VALUE_TPE = 'TPE';
    /**
     * Constant for value 'ECV'
     * Meta information extracted from the WSDL
     * - documentation: This value is an old 3-digit code for a Cape Verde escudo, a currency used in Cape Verde. The 'ECV' code has been replaced by 'CVE'.
     * @return string 'ECV'
     */
    const VALUE_ECV = 'ECV';
    /**
     * Constant for value 'ECS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Ecuadorian sucre, a currency previously used in Ecuador. This currency has been replaced by the US Dollar (3-digit code: USD).
     * @return string 'ECS'
     */
    const VALUE_ECS = 'ECS';
    /**
     * Constant for value 'EGP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Egyptian pound, a currency used in Egypt.
     * @return string 'EGP'
     */
    const VALUE_EGP = 'EGP';
    /**
     * Constant for value 'SVC'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Salvadoran colon, a currency previously used in El Salvador. This currency has been replaced by the US Dollar (3-digit code: USD).
     * @return string 'SVC'
     */
    const VALUE_SVC = 'SVC';
    /**
     * Constant for value 'ERN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Eritrean nakfa, a currency used in Eritrea.
     * @return string 'ERN'
     */
    const VALUE_ERN = 'ERN';
    /**
     * Constant for value 'EEK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Estonian kroon, a currency previously used in Estonia. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'EEK'
     */
    const VALUE_EEK = 'EEK';
    /**
     * Constant for value 'ETB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Ethiopian birr, a currency used in Ethiopia.
     * @return string 'ETB'
     */
    const VALUE_ETB = 'ETB';
    /**
     * Constant for value 'FKP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Falkland Islands pound, a currency used in the Falkland Islands.
     * @return string 'FKP'
     */
    const VALUE_FKP = 'FKP';
    /**
     * Constant for value 'FJD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Fiji dollar, a currency used in Fiji.
     * @return string 'FJD'
     */
    const VALUE_FJD = 'FJD';
    /**
     * Constant for value 'GMD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Gambian dalasi, a currency used in Gambia.
     * @return string 'GMD'
     */
    const VALUE_GMD = 'GMD';
    /**
     * Constant for value 'GEL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Georgian Iari, a currency used in the country of Georgia.
     * @return string 'GEL'
     */
    const VALUE_GEL = 'GEL';
    /**
     * Constant for value 'GHC'
     * Meta information extracted from the WSDL
     * - documentation: This value is an old 3-digit code for a Ghanaian cedi, a currency used in Ghana. The 'GHC' code has been replaced by 'GHS'.
     * @return string 'GHC'
     */
    const VALUE_GHC = 'GHC';
    /**
     * Constant for value 'GIP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Gibraltar pound, a currency used in Gibraltar.
     * @return string 'GIP'
     */
    const VALUE_GIP = 'GIP';
    /**
     * Constant for value 'GTQ'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Guatemalan quetzal, a currency used in Guatemala.
     * @return string 'GTQ'
     */
    const VALUE_GTQ = 'GTQ';
    /**
     * Constant for value 'GNF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Guinean franc, a currency used in Guinea.
     * @return string 'GNF'
     */
    const VALUE_GNF = 'GNF';
    /**
     * Constant for value 'GWP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Guinea-Bissau peso, a currency previously used in Guinea-Bissau. This currency has been replaced by the West African CFA franc (3-digit code: XOF).
     * @return string 'GWP'
     */
    const VALUE_GWP = 'GWP';
    /**
     * Constant for value 'GYD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Guyanese dollar, a currency used in Guyana.
     * @return string 'GYD'
     */
    const VALUE_GYD = 'GYD';
    /**
     * Constant for value 'HTG'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Haitian gourde, a currency used in Haiti.
     * @return string 'HTG'
     */
    const VALUE_HTG = 'HTG';
    /**
     * Constant for value 'HNL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Honduran lempira, a currency used in Honduras.
     * @return string 'HNL'
     */
    const VALUE_HNL = 'HNL';
    /**
     * Constant for value 'HKD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Hong Kong dollar, a currency used in Hong Kong and Macau. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Hong Kong site
     * (Site ID 201).
     * @return string 'HKD'
     */
    const VALUE_HKD = 'HKD';
    /**
     * Constant for value 'HUF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Hungarian forint, a currency used in Hungary.
     * @return string 'HUF'
     */
    const VALUE_HUF = 'HUF';
    /**
     * Constant for value 'ISK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Icelandic krona, a currency used in Iceland.
     * @return string 'ISK'
     */
    const VALUE_ISK = 'ISK';
    /**
     * Constant for value 'IDR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Indonesian rupiah, a currency used in Indonesia.
     * @return string 'IDR'
     */
    const VALUE_IDR = 'IDR';
    /**
     * Constant for value 'IRR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Iranian rial, a currency used in Iran.
     * @return string 'IRR'
     */
    const VALUE_IRR = 'IRR';
    /**
     * Constant for value 'IQD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Iraqi dinar, a currency used in Iraq.
     * @return string 'IQD'
     */
    const VALUE_IQD = 'IQD';
    /**
     * Constant for value 'ILS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Israeli new shekel, a currency used in Israel and in the Palestinian territories.
     * @return string 'ILS'
     */
    const VALUE_ILS = 'ILS';
    /**
     * Constant for value 'JMD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Jamaican dollar, a currency used in Jamaica.
     * @return string 'JMD'
     */
    const VALUE_JMD = 'JMD';
    /**
     * Constant for value 'JPY'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Japanese yen, a currency used in Japan.
     * @return string 'JPY'
     */
    const VALUE_JPY = 'JPY';
    /**
     * Constant for value 'JOD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Jordanian dinar, a currency used in Jordan.
     * @return string 'JOD'
     */
    const VALUE_JOD = 'JOD';
    /**
     * Constant for value 'KZT'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Kazahhstani tenge, a currency used in Kazakhstan.
     * @return string 'KZT'
     */
    const VALUE_KZT = 'KZT';
    /**
     * Constant for value 'KES'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Kenyan shilling, a currency used in Kenya.
     * @return string 'KES'
     */
    const VALUE_KES = 'KES';
    /**
     * Constant for value 'AUD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Australia dollar, a currency used in Australia. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Australia site (Site ID 15).
     * @return string 'AUD'
     */
    const VALUE_AUD = 'AUD';
    /**
     * Constant for value 'KPW'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a North Korean won, a currency used in North Korea.
     * @return string 'KPW'
     */
    const VALUE_KPW = 'KPW';
    /**
     * Constant for value 'KRW'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a South Korean won, a currency used in South Korea.
     * @return string 'KRW'
     */
    const VALUE_KRW = 'KRW';
    /**
     * Constant for value 'KWD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Kuwaiti dollar, a currency used in Kuwait.
     * @return string 'KWD'
     */
    const VALUE_KWD = 'KWD';
    /**
     * Constant for value 'KGS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Kyrgzstani som, a currency used in Kyrgystan.
     * @return string 'KGS'
     */
    const VALUE_KGS = 'KGS';
    /**
     * Constant for value 'LAK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Lao kip, a currency used in Laos.
     * @return string 'LAK'
     */
    const VALUE_LAK = 'LAK';
    /**
     * Constant for value 'LVL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Latvian lats, a currency used in Latvia.
     * @return string 'LVL'
     */
    const VALUE_LVL = 'LVL';
    /**
     * Constant for value 'LBP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Lebanese pound, a currency used in Lebanon.
     * @return string 'LBP'
     */
    const VALUE_LBP = 'LBP';
    /**
     * Constant for value 'LSL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Lesotho loti, a currency used in Lesotho.
     * @return string 'LSL'
     */
    const VALUE_LSL = 'LSL';
    /**
     * Constant for value 'LRD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Liberian dollar, a currency used in Liberia.
     * @return string 'LRD'
     */
    const VALUE_LRD = 'LRD';
    /**
     * Constant for value 'LYD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Libyan dinar, a currency used in Libya.
     * @return string 'LYD'
     */
    const VALUE_LYD = 'LYD';
    /**
     * Constant for value 'CHF'
     * Meta information extracted from the WSDL
     * - documentation: Swiss Franc. For eBay, you can only specify this currency for listings you submit to the Switzerland site (site ID 193).
     * @return string 'CHF'
     */
    const VALUE_CHF = 'CHF';
    /**
     * Constant for value 'LTL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Lithuanian litas, a currency used in Lithuania.
     * @return string 'LTL'
     */
    const VALUE_LTL = 'LTL';
    /**
     * Constant for value 'MOP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Macanese pataca, a currency used in Macao.
     * @return string 'MOP'
     */
    const VALUE_MOP = 'MOP';
    /**
     * Constant for value 'MKD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Macedonian denar, a currency used in Macedonia.
     * @return string 'MKD'
     */
    const VALUE_MKD = 'MKD';
    /**
     * Constant for value 'MGF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Malagay franc, a currency previously used in Madagascar. This currency has been replaced by the Malagasy ariary (3-digit code: MGA).
     * @return string 'MGF'
     */
    const VALUE_MGF = 'MGF';
    /**
     * Constant for value 'MWK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Malawian kwacha, a currency used in Malawi.
     * @return string 'MWK'
     */
    const VALUE_MWK = 'MWK';
    /**
     * Constant for value 'MYR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Malaysian Ringgit, a currency used in Malaysia. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Malaysia site (Site ID 207).
     * @return string 'MYR'
     */
    const VALUE_MYR = 'MYR';
    /**
     * Constant for value 'MVR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Maldivian rufiyaaa, a currency used in the Maldives.
     * @return string 'MVR'
     */
    const VALUE_MVR = 'MVR';
    /**
     * Constant for value 'MTL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Maltese lira, a currency previously used in Malta. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'MTL'
     */
    const VALUE_MTL = 'MTL';
    /**
     * Constant for value 'EUR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a EURO, a currency used in Andorra, Austria, Belgium, Cyprus, Estonia, Finland, France, Germany, Greece, Ireland, Italy, Kosovo, Luxembourg, Malta, Monaco, Montenegro, Netherlands, Portugal, San
     * Marino, Slovakia, Slovenia, Spain, and Vatican City. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the following sites: Austria (Site ID 16), Belgium_French (Site ID 23), France (Site
     * ID 71), Germany (Site ID 77), Italy (Site ID 101), Belgium_Dutch (Site ID 123), Netherlands (Site ID 146), Spain (Site ID 186), and Ireland (Site ID 205).
     * @return string 'EUR'
     */
    const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'MRO'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Mauritanian ouguiya, a currency used in Mauritania.
     * @return string 'MRO'
     */
    const VALUE_MRO = 'MRO';
    /**
     * Constant for value 'MUR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Mauritian rupee, a currency used in Mauritius.
     * @return string 'MUR'
     */
    const VALUE_MUR = 'MUR';
    /**
     * Constant for value 'MXN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Mexican peso, a currency used in Mexico.
     * @return string 'MXN'
     */
    const VALUE_MXN = 'MXN';
    /**
     * Constant for value 'MXV'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit funds code for a Mexican peso, a currency used in Mexico.
     * @return string 'MXV'
     */
    const VALUE_MXV = 'MXV';
    /**
     * Constant for value 'MDL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Moldovan leu, a currency used in Moldova.
     * @return string 'MDL'
     */
    const VALUE_MDL = 'MDL';
    /**
     * Constant for value 'MNT'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Mongolian tugrik, a currency used in Mongolia.
     * @return string 'MNT'
     */
    const VALUE_MNT = 'MNT';
    /**
     * Constant for value 'XCD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Easy Caribbean dollar, a currency used in Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and Nevis, Saint Lucia, and Saint Vincent and the Grenadines.
     * @return string 'XCD'
     */
    const VALUE_XCD = 'XCD';
    /**
     * Constant for value 'MZM'
     * Meta information extracted from the WSDL
     * - documentation: This value is an old 3-digit code for a Mozambican metical, a currency used in Mozambique. The 'MZM' code has been replaced by 'MZN'.
     * @return string 'MZM'
     */
    const VALUE_MZM = 'MZM';
    /**
     * Constant for value 'MMK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Myanma kyat, a currency used in Myanmar.
     * @return string 'MMK'
     */
    const VALUE_MMK = 'MMK';
    /**
     * Constant for value 'ZAR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a South African rand, a currency used in South Africa.
     * @return string 'ZAR'
     */
    const VALUE_ZAR = 'ZAR';
    /**
     * Constant for value 'NAD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Namibian dollar, a currency used in Namibia.
     * @return string 'NAD'
     */
    const VALUE_NAD = 'NAD';
    /**
     * Constant for value 'NPR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Nepalese rupee, a currency used in Nepal.
     * @return string 'NPR'
     */
    const VALUE_NPR = 'NPR';
    /**
     * Constant for value 'ANG'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Netherlands Antillean guilder, a currency used in Curacao and Sint Maarten.
     * @return string 'ANG'
     */
    const VALUE_ANG = 'ANG';
    /**
     * Constant for value 'XPF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a CFP franc, a currency used in French Polynesia, New Caledonia, and Wallis and Futuna.
     * @return string 'XPF'
     */
    const VALUE_XPF = 'XPF';
    /**
     * Constant for value 'NZD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a New Zealand dollar, a currency used in the Cook Islands, New Zealand, Niue, Pitcairn, and Tokelau, Ross Dependency.
     * @return string 'NZD'
     */
    const VALUE_NZD = 'NZD';
    /**
     * Constant for value 'NIO'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Nicaraguan cordoba, a currency used in Nicaragua.
     * @return string 'NIO'
     */
    const VALUE_NIO = 'NIO';
    /**
     * Constant for value 'NGN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Nigerian naira, a currency used in Nigeria.
     * @return string 'NGN'
     */
    const VALUE_NGN = 'NGN';
    /**
     * Constant for value 'NOK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Norwegian kron, a currency used in Norway, Svalbard, Jan Mayen, Bouvet Island, Queen Maud Land, and Peter I Island.
     * @return string 'NOK'
     */
    const VALUE_NOK = 'NOK';
    /**
     * Constant for value 'OMR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Omani rial, a currency used in Oman.
     * @return string 'OMR'
     */
    const VALUE_OMR = 'OMR';
    /**
     * Constant for value 'PKR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Pakistani rupee, a currency used in Pakistan.
     * @return string 'PKR'
     */
    const VALUE_PKR = 'PKR';
    /**
     * Constant for value 'PAB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Panamanian balboa, a currency used in Panama.
     * @return string 'PAB'
     */
    const VALUE_PAB = 'PAB';
    /**
     * Constant for value 'PGK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Papua New Guinea kina, a currency used in Papua New Guinea.
     * @return string 'PGK'
     */
    const VALUE_PGK = 'PGK';
    /**
     * Constant for value 'PYG'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Paraguayan guarani, a currency used in Paraguay.
     * @return string 'PYG'
     */
    const VALUE_PYG = 'PYG';
    /**
     * Constant for value 'PEN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Peruvian nuevo sol, a currency used in Peru.
     * @return string 'PEN'
     */
    const VALUE_PEN = 'PEN';
    /**
     * Constant for value 'PHP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Philippine peso, a currency used in the Philippines. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Philippines site (Site
     * ID 211).
     * @return string 'PHP'
     */
    const VALUE_PHP = 'PHP';
    /**
     * Constant for value 'PLN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Polish zloty, a currency used in Poland. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Poland site (Site ID 212).
     * @return string 'PLN'
     */
    const VALUE_PLN = 'PLN';
    /**
     * Constant for value 'USD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a US dollar, a currency used in the United States, America Samoa, Barbados, Bermuda, British Indian Ocean Territory, British Virgin Islands, Caribbean Netherlands, Ecuador, El Salvador, Guam, Haiti,
     * Marshall Islands, Federated States of Micronesia, Northern Mariana Islands, Palau, Panama, Puerto Rico, Timor-Leste, Turks and Caicos Islands, US Virgin Islands, and Zimbabwe. This is the value that should be passed in the <b>Item.Currency</b> field
     * by the seller when listing an item on the eBay US or US eBay Motors site (Site ID 0).
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'QAR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Qatari riyal, a currency used in Qatar.
     * @return string 'QAR'
     */
    const VALUE_QAR = 'QAR';
    /**
     * Constant for value 'ROL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for the old Romanian leu, a currency previously used in Romania. This currency has been replaced by the Romanian new leu (3-digit code: RON).
     * @return string 'ROL'
     */
    const VALUE_ROL = 'ROL';
    /**
     * Constant for value 'RUB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Russian rouble, a currency used in Russia, Abkhazia, and South Ossetia. This value replace the old 3-digit code for the Russian rouble, 'RUR'.
     * @return string 'RUB'
     */
    const VALUE_RUB = 'RUB';
    /**
     * Constant for value 'RUR'
     * Meta information extracted from the WSDL
     * - documentation: This value is the old 3-digit code for a Russian rouble, a currency used in Russia. This value was replaced by the new 3-digit code for the Russian rouble, 'RUB'.
     * @return string 'RUR'
     */
    const VALUE_RUR = 'RUR';
    /**
     * Constant for value 'RWF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Rwandan franc, a currency used in Rwanda.
     * @return string 'RWF'
     */
    const VALUE_RWF = 'RWF';
    /**
     * Constant for value 'SHP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Saint Helena pound, a currency used in Saint Helena.
     * @return string 'SHP'
     */
    const VALUE_SHP = 'SHP';
    /**
     * Constant for value 'WST'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Samoan tala, a currency used in Samoa.
     * @return string 'WST'
     */
    const VALUE_WST = 'WST';
    /**
     * Constant for value 'STD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Sao Tome and Principe dobra, a currency used in Sao Tome and Principe.
     * @return string 'STD'
     */
    const VALUE_STD = 'STD';
    /**
     * Constant for value 'SAR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Saudi riyal, a currency used in Saudi Arabia.
     * @return string 'SAR'
     */
    const VALUE_SAR = 'SAR';
    /**
     * Constant for value 'SCR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Seychelles rupee, a currency used in Seychelles.
     * @return string 'SCR'
     */
    const VALUE_SCR = 'SCR';
    /**
     * Constant for value 'SLL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Sierra Leonean leone, a currency used in Sierra Leone.
     * @return string 'SLL'
     */
    const VALUE_SLL = 'SLL';
    /**
     * Constant for value 'SGD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Singapore dollar, a currency used in Singapore and Brunei. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Singapore site
     * (Site ID 216).
     * @return string 'SGD'
     */
    const VALUE_SGD = 'SGD';
    /**
     * Constant for value 'SKK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Slovak koruna, a currency previously used in Slovakia. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'SKK'
     */
    const VALUE_SKK = 'SKK';
    /**
     * Constant for value 'SIT'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Slovenian tolar, a currency previously used in Slovenia. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'SIT'
     */
    const VALUE_SIT = 'SIT';
    /**
     * Constant for value 'SBD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Solomon Islands dollar, a currency used in the Solomon Islands.
     * @return string 'SBD'
     */
    const VALUE_SBD = 'SBD';
    /**
     * Constant for value 'SOS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Somali shilling, a currency used in Somalia.
     * @return string 'SOS'
     */
    const VALUE_SOS = 'SOS';
    /**
     * Constant for value 'LKR'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Sri Lankan rupee, a currency used in Sri Lanka.
     * @return string 'LKR'
     */
    const VALUE_LKR = 'LKR';
    /**
     * Constant for value 'SDD'
     * Meta information extracted from the WSDL
     * - documentation: This value is the 3-digit code for a Sudanese dinar, a currency previously used in Sudan. The Sudanese dinar was replaced by the Sudanese pound, which has a 3-digit code of 'SDG'.
     * @return string 'SDD'
     */
    const VALUE_SDD = 'SDD';
    /**
     * Constant for value 'SRG'
     * Meta information extracted from the WSDL
     * - documentation: This value is the 3-digit code for a Suriname guilder, a currency previously used in Suriname. The Surinam guilder was replaced by the Surinamese dollar, which has a 3-digit code of 'SRD'.
     * @return string 'SRG'
     */
    const VALUE_SRG = 'SRG';
    /**
     * Constant for value 'SZL'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Swazi lilangeni, a currency used in Swaziland.
     * @return string 'SZL'
     */
    const VALUE_SZL = 'SZL';
    /**
     * Constant for value 'SEK'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Swedish krona, a currency used in Swedn. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on the eBay Sweden site (Site ID 218).
     * @return string 'SEK'
     */
    const VALUE_SEK = 'SEK';
    /**
     * Constant for value 'SYP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Syrian pound, a currency used in Syria.
     * @return string 'SYP'
     */
    const VALUE_SYP = 'SYP';
    /**
     * Constant for value 'TWD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for the New Taiwan dollar, a currency used in Taiwan.
     * @return string 'TWD'
     */
    const VALUE_TWD = 'TWD';
    /**
     * Constant for value 'TJS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Tajikistani somoni, a currency used in Tajikistan.
     * @return string 'TJS'
     */
    const VALUE_TJS = 'TJS';
    /**
     * Constant for value 'TZS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Tanzanian shilling, a currency used in Tanzania.
     * @return string 'TZS'
     */
    const VALUE_TZS = 'TZS';
    /**
     * Constant for value 'THB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Thai baht, a currency used in Thailand.
     * @return string 'THB'
     */
    const VALUE_THB = 'THB';
    /**
     * Constant for value 'XOF'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a West African CFA franc, a currency used in Benin, Burkina Faso, Cote d'Ivoire, Guinea-Bissau, Mali, Niger, Senegal, and Togo.
     * @return string 'XOF'
     */
    const VALUE_XOF = 'XOF';
    /**
     * Constant for value 'TOP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Tongan pa'anga, a currency used in Tonga.
     * @return string 'TOP'
     */
    const VALUE_TOP = 'TOP';
    /**
     * Constant for value 'TTD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Trinidad and Tobago dollar, a currency used in Trinidad and Tobago.
     * @return string 'TTD'
     */
    const VALUE_TTD = 'TTD';
    /**
     * Constant for value 'TND'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Tunisian dinar, a currency used in Tunisia.
     * @return string 'TND'
     */
    const VALUE_TND = 'TND';
    /**
     * Constant for value 'TRL'
     * Meta information extracted from the WSDL
     * - documentation: This value is the old 3-digit code for a Turkish lira, a currency used in Turkey and Northern Cyprus. This value was replaced by the new 3-digit code for the Turkish lira, 'TRY'.
     * @return string 'TRL'
     */
    const VALUE_TRL = 'TRL';
    /**
     * Constant for value 'TMM'
     * Meta information extracted from the WSDL
     * - documentation: This value is the old 3-digit code for a Turkmenistani manat, a currency used in Turkmenistan. This value was replaced by the new 3-digit code for the Turkmenistani manat, 'TMT'.
     * @return string 'TMM'
     */
    const VALUE_TMM = 'TMM';
    /**
     * Constant for value 'UGX'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Ugandan shilling, a currency used in Uganda.
     * @return string 'UGX'
     */
    const VALUE_UGX = 'UGX';
    /**
     * Constant for value 'UAH'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Ukrainian hryvnia, a currency used in the Ukraine.
     * @return string 'UAH'
     */
    const VALUE_UAH = 'UAH';
    /**
     * Constant for value 'AED'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an United Arab Emirates dirham, a currency used in the United Arab Emirates.
     * @return string 'AED'
     */
    const VALUE_AED = 'AED';
    /**
     * Constant for value 'GBP'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Pound sterling, a currency used in the United Kingdom and British Crown dependencies. This is the value that should be passed in the <b>Item.Currency</b> field by the seller when listing an item on
     * the eBay UK site (Site ID 3).
     * @return string 'GBP'
     */
    const VALUE_GBP = 'GBP';
    /**
     * Constant for value 'USS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a same-day transaction involving US dollars.
     * @return string 'USS'
     */
    const VALUE_USS = 'USS';
    /**
     * Constant for value 'USN'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a next-day transaction involving US dollars.
     * @return string 'USN'
     */
    const VALUE_USN = 'USN';
    /**
     * Constant for value 'UYU'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Uruguayan peso, a currency used in Uruguay.
     * @return string 'UYU'
     */
    const VALUE_UYU = 'UYU';
    /**
     * Constant for value 'UZS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Uzbekistan som, a currency used in the Uzbekistan.
     * @return string 'UZS'
     */
    const VALUE_UZS = 'UZS';
    /**
     * Constant for value 'VUV'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Vanuatu vatu, a currency used in Vanuatu.
     * @return string 'VUV'
     */
    const VALUE_VUV = 'VUV';
    /**
     * Constant for value 'VEB'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Venezuelan bolivar, a currency previously used in Venezuela. The Venezuela bolivar was replaced by the Venezuelan bolivar fuerte, which has a 3-digit code of 'VEF'.
     * @return string 'VEB'
     */
    const VALUE_VEB = 'VEB';
    /**
     * Constant for value 'VND'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Vietnamese dong, a currency used in Vietnam.
     * @return string 'VND'
     */
    const VALUE_VND = 'VND';
    /**
     * Constant for value 'MAD'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Moroccan dirham, a currency used in Morocco.
     * @return string 'MAD'
     */
    const VALUE_MAD = 'MAD';
    /**
     * Constant for value 'YER'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Yemeni rial, a currency used in Yemen.
     * @return string 'YER'
     */
    const VALUE_YER = 'YER';
    /**
     * Constant for value 'YUM'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for a Yugoslav dinar, a currency previously used in Yugoslavia. The Yugoslav dinar was replaced by the Serbian dinar, which has a 3- digit code of 'RSD'.
     * @return string 'YUM'
     */
    const VALUE_YUM = 'YUM';
    /**
     * Constant for value 'ZMK'
     * Meta information extracted from the WSDL
     * - documentation: This value is the old 3-digit code for a Zambian kwacha, a currency used in Zambia. The 'ZMK' code has been replaced by 'ZMW'.
     * @return string 'ZMK'
     */
    const VALUE_ZMK = 'ZMK';
    /**
     * Constant for value 'ZWD'
     * Meta information extracted from the WSDL
     * - documentation: This value is the old 3-digit code for a Zimbabwean dollar, a currency previously used in Zimbabwe. The US dollar replaced the Zimbabwean dollar as the official currency in Zimbabwe.
     * @return string 'ZWD'
     */
    const VALUE_ZWD = 'ZWD';
    /**
     * Constant for value 'ATS'
     * Meta information extracted from the WSDL
     * - documentation: This value is a 3-digit code for an Austrian schilling, a currency previously used in Austria. This currency has been replaced by the Euro (3-digit code: EUR).
     * @return string 'ATS'
     */
    const VALUE_ATS = 'ATS';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AFA
     * @uses self::VALUE_ALL
     * @uses self::VALUE_DZD
     * @uses self::VALUE_ADP
     * @uses self::VALUE_AOA
     * @uses self::VALUE_ARS
     * @uses self::VALUE_AMD
     * @uses self::VALUE_AWG
     * @uses self::VALUE_AZM
     * @uses self::VALUE_BSD
     * @uses self::VALUE_BHD
     * @uses self::VALUE_BDT
     * @uses self::VALUE_BBD
     * @uses self::VALUE_BYR
     * @uses self::VALUE_BZD
     * @uses self::VALUE_BMD
     * @uses self::VALUE_BTN
     * @uses self::VALUE_INR
     * @uses self::VALUE_BOV
     * @uses self::VALUE_BOB
     * @uses self::VALUE_BAM
     * @uses self::VALUE_BWP
     * @uses self::VALUE_BRL
     * @uses self::VALUE_BND
     * @uses self::VALUE_BGL
     * @uses self::VALUE_BGN
     * @uses self::VALUE_BIF
     * @uses self::VALUE_KHR
     * @uses self::VALUE_CAD
     * @uses self::VALUE_CVE
     * @uses self::VALUE_KYD
     * @uses self::VALUE_XAF
     * @uses self::VALUE_CLF
     * @uses self::VALUE_CLP
     * @uses self::VALUE_CNY
     * @uses self::VALUE_COP
     * @uses self::VALUE_KMF
     * @uses self::VALUE_CDF
     * @uses self::VALUE_CRC
     * @uses self::VALUE_HRK
     * @uses self::VALUE_CUP
     * @uses self::VALUE_CYP
     * @uses self::VALUE_CZK
     * @uses self::VALUE_DKK
     * @uses self::VALUE_DJF
     * @uses self::VALUE_DOP
     * @uses self::VALUE_TPE
     * @uses self::VALUE_ECV
     * @uses self::VALUE_ECS
     * @uses self::VALUE_EGP
     * @uses self::VALUE_SVC
     * @uses self::VALUE_ERN
     * @uses self::VALUE_EEK
     * @uses self::VALUE_ETB
     * @uses self::VALUE_FKP
     * @uses self::VALUE_FJD
     * @uses self::VALUE_GMD
     * @uses self::VALUE_GEL
     * @uses self::VALUE_GHC
     * @uses self::VALUE_GIP
     * @uses self::VALUE_GTQ
     * @uses self::VALUE_GNF
     * @uses self::VALUE_GWP
     * @uses self::VALUE_GYD
     * @uses self::VALUE_HTG
     * @uses self::VALUE_HNL
     * @uses self::VALUE_HKD
     * @uses self::VALUE_HUF
     * @uses self::VALUE_ISK
     * @uses self::VALUE_IDR
     * @uses self::VALUE_IRR
     * @uses self::VALUE_IQD
     * @uses self::VALUE_ILS
     * @uses self::VALUE_JMD
     * @uses self::VALUE_JPY
     * @uses self::VALUE_JOD
     * @uses self::VALUE_KZT
     * @uses self::VALUE_KES
     * @uses self::VALUE_AUD
     * @uses self::VALUE_KPW
     * @uses self::VALUE_KRW
     * @uses self::VALUE_KWD
     * @uses self::VALUE_KGS
     * @uses self::VALUE_LAK
     * @uses self::VALUE_LVL
     * @uses self::VALUE_LBP
     * @uses self::VALUE_LSL
     * @uses self::VALUE_LRD
     * @uses self::VALUE_LYD
     * @uses self::VALUE_CHF
     * @uses self::VALUE_LTL
     * @uses self::VALUE_MOP
     * @uses self::VALUE_MKD
     * @uses self::VALUE_MGF
     * @uses self::VALUE_MWK
     * @uses self::VALUE_MYR
     * @uses self::VALUE_MVR
     * @uses self::VALUE_MTL
     * @uses self::VALUE_EUR
     * @uses self::VALUE_MRO
     * @uses self::VALUE_MUR
     * @uses self::VALUE_MXN
     * @uses self::VALUE_MXV
     * @uses self::VALUE_MDL
     * @uses self::VALUE_MNT
     * @uses self::VALUE_XCD
     * @uses self::VALUE_MZM
     * @uses self::VALUE_MMK
     * @uses self::VALUE_ZAR
     * @uses self::VALUE_NAD
     * @uses self::VALUE_NPR
     * @uses self::VALUE_ANG
     * @uses self::VALUE_XPF
     * @uses self::VALUE_NZD
     * @uses self::VALUE_NIO
     * @uses self::VALUE_NGN
     * @uses self::VALUE_NOK
     * @uses self::VALUE_OMR
     * @uses self::VALUE_PKR
     * @uses self::VALUE_PAB
     * @uses self::VALUE_PGK
     * @uses self::VALUE_PYG
     * @uses self::VALUE_PEN
     * @uses self::VALUE_PHP
     * @uses self::VALUE_PLN
     * @uses self::VALUE_USD
     * @uses self::VALUE_QAR
     * @uses self::VALUE_ROL
     * @uses self::VALUE_RUB
     * @uses self::VALUE_RUR
     * @uses self::VALUE_RWF
     * @uses self::VALUE_SHP
     * @uses self::VALUE_WST
     * @uses self::VALUE_STD
     * @uses self::VALUE_SAR
     * @uses self::VALUE_SCR
     * @uses self::VALUE_SLL
     * @uses self::VALUE_SGD
     * @uses self::VALUE_SKK
     * @uses self::VALUE_SIT
     * @uses self::VALUE_SBD
     * @uses self::VALUE_SOS
     * @uses self::VALUE_LKR
     * @uses self::VALUE_SDD
     * @uses self::VALUE_SRG
     * @uses self::VALUE_SZL
     * @uses self::VALUE_SEK
     * @uses self::VALUE_SYP
     * @uses self::VALUE_TWD
     * @uses self::VALUE_TJS
     * @uses self::VALUE_TZS
     * @uses self::VALUE_THB
     * @uses self::VALUE_XOF
     * @uses self::VALUE_TOP
     * @uses self::VALUE_TTD
     * @uses self::VALUE_TND
     * @uses self::VALUE_TRL
     * @uses self::VALUE_TMM
     * @uses self::VALUE_UGX
     * @uses self::VALUE_UAH
     * @uses self::VALUE_AED
     * @uses self::VALUE_GBP
     * @uses self::VALUE_USS
     * @uses self::VALUE_USN
     * @uses self::VALUE_UYU
     * @uses self::VALUE_UZS
     * @uses self::VALUE_VUV
     * @uses self::VALUE_VEB
     * @uses self::VALUE_VND
     * @uses self::VALUE_MAD
     * @uses self::VALUE_YER
     * @uses self::VALUE_YUM
     * @uses self::VALUE_ZMK
     * @uses self::VALUE_ZWD
     * @uses self::VALUE_ATS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AFA,
            self::VALUE_ALL,
            self::VALUE_DZD,
            self::VALUE_ADP,
            self::VALUE_AOA,
            self::VALUE_ARS,
            self::VALUE_AMD,
            self::VALUE_AWG,
            self::VALUE_AZM,
            self::VALUE_BSD,
            self::VALUE_BHD,
            self::VALUE_BDT,
            self::VALUE_BBD,
            self::VALUE_BYR,
            self::VALUE_BZD,
            self::VALUE_BMD,
            self::VALUE_BTN,
            self::VALUE_INR,
            self::VALUE_BOV,
            self::VALUE_BOB,
            self::VALUE_BAM,
            self::VALUE_BWP,
            self::VALUE_BRL,
            self::VALUE_BND,
            self::VALUE_BGL,
            self::VALUE_BGN,
            self::VALUE_BIF,
            self::VALUE_KHR,
            self::VALUE_CAD,
            self::VALUE_CVE,
            self::VALUE_KYD,
            self::VALUE_XAF,
            self::VALUE_CLF,
            self::VALUE_CLP,
            self::VALUE_CNY,
            self::VALUE_COP,
            self::VALUE_KMF,
            self::VALUE_CDF,
            self::VALUE_CRC,
            self::VALUE_HRK,
            self::VALUE_CUP,
            self::VALUE_CYP,
            self::VALUE_CZK,
            self::VALUE_DKK,
            self::VALUE_DJF,
            self::VALUE_DOP,
            self::VALUE_TPE,
            self::VALUE_ECV,
            self::VALUE_ECS,
            self::VALUE_EGP,
            self::VALUE_SVC,
            self::VALUE_ERN,
            self::VALUE_EEK,
            self::VALUE_ETB,
            self::VALUE_FKP,
            self::VALUE_FJD,
            self::VALUE_GMD,
            self::VALUE_GEL,
            self::VALUE_GHC,
            self::VALUE_GIP,
            self::VALUE_GTQ,
            self::VALUE_GNF,
            self::VALUE_GWP,
            self::VALUE_GYD,
            self::VALUE_HTG,
            self::VALUE_HNL,
            self::VALUE_HKD,
            self::VALUE_HUF,
            self::VALUE_ISK,
            self::VALUE_IDR,
            self::VALUE_IRR,
            self::VALUE_IQD,
            self::VALUE_ILS,
            self::VALUE_JMD,
            self::VALUE_JPY,
            self::VALUE_JOD,
            self::VALUE_KZT,
            self::VALUE_KES,
            self::VALUE_AUD,
            self::VALUE_KPW,
            self::VALUE_KRW,
            self::VALUE_KWD,
            self::VALUE_KGS,
            self::VALUE_LAK,
            self::VALUE_LVL,
            self::VALUE_LBP,
            self::VALUE_LSL,
            self::VALUE_LRD,
            self::VALUE_LYD,
            self::VALUE_CHF,
            self::VALUE_LTL,
            self::VALUE_MOP,
            self::VALUE_MKD,
            self::VALUE_MGF,
            self::VALUE_MWK,
            self::VALUE_MYR,
            self::VALUE_MVR,
            self::VALUE_MTL,
            self::VALUE_EUR,
            self::VALUE_MRO,
            self::VALUE_MUR,
            self::VALUE_MXN,
            self::VALUE_MXV,
            self::VALUE_MDL,
            self::VALUE_MNT,
            self::VALUE_XCD,
            self::VALUE_MZM,
            self::VALUE_MMK,
            self::VALUE_ZAR,
            self::VALUE_NAD,
            self::VALUE_NPR,
            self::VALUE_ANG,
            self::VALUE_XPF,
            self::VALUE_NZD,
            self::VALUE_NIO,
            self::VALUE_NGN,
            self::VALUE_NOK,
            self::VALUE_OMR,
            self::VALUE_PKR,
            self::VALUE_PAB,
            self::VALUE_PGK,
            self::VALUE_PYG,
            self::VALUE_PEN,
            self::VALUE_PHP,
            self::VALUE_PLN,
            self::VALUE_USD,
            self::VALUE_QAR,
            self::VALUE_ROL,
            self::VALUE_RUB,
            self::VALUE_RUR,
            self::VALUE_RWF,
            self::VALUE_SHP,
            self::VALUE_WST,
            self::VALUE_STD,
            self::VALUE_SAR,
            self::VALUE_SCR,
            self::VALUE_SLL,
            self::VALUE_SGD,
            self::VALUE_SKK,
            self::VALUE_SIT,
            self::VALUE_SBD,
            self::VALUE_SOS,
            self::VALUE_LKR,
            self::VALUE_SDD,
            self::VALUE_SRG,
            self::VALUE_SZL,
            self::VALUE_SEK,
            self::VALUE_SYP,
            self::VALUE_TWD,
            self::VALUE_TJS,
            self::VALUE_TZS,
            self::VALUE_THB,
            self::VALUE_XOF,
            self::VALUE_TOP,
            self::VALUE_TTD,
            self::VALUE_TND,
            self::VALUE_TRL,
            self::VALUE_TMM,
            self::VALUE_UGX,
            self::VALUE_UAH,
            self::VALUE_AED,
            self::VALUE_GBP,
            self::VALUE_USS,
            self::VALUE_USN,
            self::VALUE_UYU,
            self::VALUE_UZS,
            self::VALUE_VUV,
            self::VALUE_VEB,
            self::VALUE_VND,
            self::VALUE_MAD,
            self::VALUE_YER,
            self::VALUE_YUM,
            self::VALUE_ZMK,
            self::VALUE_ZWD,
            self::VALUE_ATS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
