<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingEnhancementDurationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> This enumerated type is no longer applicable, as the Featured First listing feature is deprecated for all sites. If a seller attempts to add Featured First as a listing enhancement (including
 * <b>ListingEnhancement</b> field in an <b>AddItem</b> call and setting its value to <code>Featured</code>), it is allowed, but a warning will be returned announcing the deprecation of the feature. This feature was officially wired off in September
 * 2019. </span> <br> This enumerated type contains the list of values that can be used by the seller to set the duration of a Featured Gallery in a fixed-price listing. Once set for a listing, the Featured Gallery duration can be increased from
 * 'Days_7' to 'Lifetime' (throughout life of listing), but the duration cannot be decreased from 'Lifetime' to 'Days_7'.
 * @subpackage Enumerations
 */
class ListingEnhancementDurationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_1'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to one day. This value is deprecated.
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_2'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to two days. This value is deprecated.
     * @return string 'Days_2'
     */
    const VALUE_DAYS_2 = 'Days_2';
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to three days. This value is deprecated.
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_4'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to four days. This value is deprecated.
     * @return string 'Days_4'
     */
    const VALUE_DAYS_4 = 'Days_4';
    /**
     * Constant for value 'Days_5'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to five days. This value is deprecated.
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
    /**
     * Constant for value 'Days_6'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to six days. This value is deprecated.
     * @return string 'Days_6'
     */
    const VALUE_DAYS_6 = 'Days_6';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to seven days. If a listing has a Featured Gallery duration of seven days, it is possible to revise that item and set the Featured Gallery duration to 'Lifetime' (throughout life of
     * listing) (
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_8'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to eight days. This value is deprecated.
     * @return string 'Days_8'
     */
    const VALUE_DAYS_8 = 'Days_8';
    /**
     * Constant for value 'Days_9'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to nine days. This value is deprecated.
     * @return string 'Days_9'
     */
    const VALUE_DAYS_9 = 'Days_9';
    /**
     * Constant for value 'Days_10'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 10 days. This value is deprecated.
     * @return string 'Days_10'
     */
    const VALUE_DAYS_10 = 'Days_10';
    /**
     * Constant for value 'Days_11'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 11 days. This value is deprecated.
     * @return string 'Days_11'
     */
    const VALUE_DAYS_11 = 'Days_11';
    /**
     * Constant for value 'Days_12'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 12 days. This value is deprecated.
     * @return string 'Days_12'
     */
    const VALUE_DAYS_12 = 'Days_12';
    /**
     * Constant for value 'Days_13'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 13 days. This value is deprecated.
     * @return string 'Days_13'
     */
    const VALUE_DAYS_13 = 'Days_13';
    /**
     * Constant for value 'Days_14'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 14 days. This value is deprecated.
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_15'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 15 days. This value is deprecated.
     * @return string 'Days_15'
     */
    const VALUE_DAYS_15 = 'Days_15';
    /**
     * Constant for value 'Days_16'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 16 days. This value is deprecated.
     * @return string 'Days_16'
     */
    const VALUE_DAYS_16 = 'Days_16';
    /**
     * Constant for value 'Days_17'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 17 days. This value is deprecated.
     * @return string 'Days_17'
     */
    const VALUE_DAYS_17 = 'Days_17';
    /**
     * Constant for value 'Days_18'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 18 days. This value is deprecated.
     * @return string 'Days_18'
     */
    const VALUE_DAYS_18 = 'Days_18';
    /**
     * Constant for value 'Days_19'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 19 days. This value is deprecated.
     * @return string 'Days_19'
     */
    const VALUE_DAYS_19 = 'Days_19';
    /**
     * Constant for value 'Days_20'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 20 days. This value is deprecated.
     * @return string 'Days_20'
     */
    const VALUE_DAYS_20 = 'Days_20';
    /**
     * Constant for value 'Days_21'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 21 days. This value is deprecated.
     * @return string 'Days_21'
     */
    const VALUE_DAYS_21 = 'Days_21';
    /**
     * Constant for value 'Days_22'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 22 days. This value is deprecated.
     * @return string 'Days_22'
     */
    const VALUE_DAYS_22 = 'Days_22';
    /**
     * Constant for value 'Days_23'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 23 days. This value is deprecated.
     * @return string 'Days_23'
     */
    const VALUE_DAYS_23 = 'Days_23';
    /**
     * Constant for value 'Days_24'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 24 days. This value is deprecated.
     * @return string 'Days_24'
     */
    const VALUE_DAYS_24 = 'Days_24';
    /**
     * Constant for value 'Days_25'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 25 days. This value is deprecated.
     * @return string 'Days_25'
     */
    const VALUE_DAYS_25 = 'Days_25';
    /**
     * Constant for value 'Days_26'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 26 days. This value is deprecated.
     * @return string 'Days_26'
     */
    const VALUE_DAYS_26 = 'Days_26';
    /**
     * Constant for value 'Days_27'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 27 days. This value is deprecated.
     * @return string 'Days_27'
     */
    const VALUE_DAYS_27 = 'Days_27';
    /**
     * Constant for value 'Days_28'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 28 days. This value is deprecated.
     * @return string 'Days_28'
     */
    const VALUE_DAYS_28 = 'Days_28';
    /**
     * Constant for value 'Days_29'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 29 days. This value is deprecated.
     * @return string 'Days_29'
     */
    const VALUE_DAYS_29 = 'Days_29';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 30 days. This value is deprecated.
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_31'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 31 days. This value is deprecated.
     * @return string 'Days_31'
     */
    const VALUE_DAYS_31 = 'Days_31';
    /**
     * Constant for value 'Days_32'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 32 days. This value is deprecated.
     * @return string 'Days_32'
     */
    const VALUE_DAYS_32 = 'Days_32';
    /**
     * Constant for value 'Days_33'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 33 days. This value is deprecated.
     * @return string 'Days_33'
     */
    const VALUE_DAYS_33 = 'Days_33';
    /**
     * Constant for value 'Days_34'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 34 days. This value is deprecated.
     * @return string 'Days_34'
     */
    const VALUE_DAYS_34 = 'Days_34';
    /**
     * Constant for value 'Days_35'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 35 days. This value is deprecated.
     * @return string 'Days_35'
     */
    const VALUE_DAYS_35 = 'Days_35';
    /**
     * Constant for value 'Days_36'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 36 days. This value is deprecated.
     * @return string 'Days_36'
     */
    const VALUE_DAYS_36 = 'Days_36';
    /**
     * Constant for value 'Days_37'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 37 days. This value is deprecated.
     * @return string 'Days_37'
     */
    const VALUE_DAYS_37 = 'Days_37';
    /**
     * Constant for value 'Days_38'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 38 days. This value is deprecated.
     * @return string 'Days_38'
     */
    const VALUE_DAYS_38 = 'Days_38';
    /**
     * Constant for value 'Days_39'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 39 days. This value is deprecated.
     * @return string 'Days_39'
     */
    const VALUE_DAYS_39 = 'Days_39';
    /**
     * Constant for value 'Days_40'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 40 days. This value is deprecated.
     * @return string 'Days_40'
     */
    const VALUE_DAYS_40 = 'Days_40';
    /**
     * Constant for value 'Days_41'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 41 days. This value is deprecated.
     * @return string 'Days_41'
     */
    const VALUE_DAYS_41 = 'Days_41';
    /**
     * Constant for value 'Days_42'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 42 days. This value is deprecated.
     * @return string 'Days_42'
     */
    const VALUE_DAYS_42 = 'Days_42';
    /**
     * Constant for value 'Days_43'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 43 days. This value is deprecated.
     * @return string 'Days_43'
     */
    const VALUE_DAYS_43 = 'Days_43';
    /**
     * Constant for value 'Days_44'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 44 days. This value is deprecated.
     * @return string 'Days_44'
     */
    const VALUE_DAYS_44 = 'Days_44';
    /**
     * Constant for value 'Days_45'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 45 days. This value is deprecated.
     * @return string 'Days_45'
     */
    const VALUE_DAYS_45 = 'Days_45';
    /**
     * Constant for value 'Days_46'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 46 days. This value is deprecated.
     * @return string 'Days_46'
     */
    const VALUE_DAYS_46 = 'Days_46';
    /**
     * Constant for value 'Days_47'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 47 days. This value is deprecated.
     * @return string 'Days_47'
     */
    const VALUE_DAYS_47 = 'Days_47';
    /**
     * Constant for value 'Days_48'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 48 days. This value is deprecated.
     * @return string 'Days_48'
     */
    const VALUE_DAYS_48 = 'Days_48';
    /**
     * Constant for value 'Days_49'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 49 days. This value is deprecated.
     * @return string 'Days_49'
     */
    const VALUE_DAYS_49 = 'Days_49';
    /**
     * Constant for value 'Days_50'
     * Meta information extracted from the WSDL
     * - documentation: This value sets the Featured Gallery duration to 50 days. This value is deprecated.
     * @return string 'Days_50'
     */
    const VALUE_DAYS_50 = 'Days_50';
    /**
     * Constant for value 'Lifetime'
     * Meta information extracted from the WSDL
     * - documentation: This duration enables the Featured Gallery feature for the life of the listing. Once the Featured Gallery duration is set to 'Lifetime' for a listing, it cannot be changed.
     * @return string 'Lifetime'
     */
    const VALUE_LIFETIME = 'Lifetime';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_2
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_4
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_6
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_8
     * @uses self::VALUE_DAYS_9
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_11
     * @uses self::VALUE_DAYS_12
     * @uses self::VALUE_DAYS_13
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_15
     * @uses self::VALUE_DAYS_16
     * @uses self::VALUE_DAYS_17
     * @uses self::VALUE_DAYS_18
     * @uses self::VALUE_DAYS_19
     * @uses self::VALUE_DAYS_20
     * @uses self::VALUE_DAYS_21
     * @uses self::VALUE_DAYS_22
     * @uses self::VALUE_DAYS_23
     * @uses self::VALUE_DAYS_24
     * @uses self::VALUE_DAYS_25
     * @uses self::VALUE_DAYS_26
     * @uses self::VALUE_DAYS_27
     * @uses self::VALUE_DAYS_28
     * @uses self::VALUE_DAYS_29
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_31
     * @uses self::VALUE_DAYS_32
     * @uses self::VALUE_DAYS_33
     * @uses self::VALUE_DAYS_34
     * @uses self::VALUE_DAYS_35
     * @uses self::VALUE_DAYS_36
     * @uses self::VALUE_DAYS_37
     * @uses self::VALUE_DAYS_38
     * @uses self::VALUE_DAYS_39
     * @uses self::VALUE_DAYS_40
     * @uses self::VALUE_DAYS_41
     * @uses self::VALUE_DAYS_42
     * @uses self::VALUE_DAYS_43
     * @uses self::VALUE_DAYS_44
     * @uses self::VALUE_DAYS_45
     * @uses self::VALUE_DAYS_46
     * @uses self::VALUE_DAYS_47
     * @uses self::VALUE_DAYS_48
     * @uses self::VALUE_DAYS_49
     * @uses self::VALUE_DAYS_50
     * @uses self::VALUE_LIFETIME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_2,
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_4,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_6,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_8,
            self::VALUE_DAYS_9,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_11,
            self::VALUE_DAYS_12,
            self::VALUE_DAYS_13,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_15,
            self::VALUE_DAYS_16,
            self::VALUE_DAYS_17,
            self::VALUE_DAYS_18,
            self::VALUE_DAYS_19,
            self::VALUE_DAYS_20,
            self::VALUE_DAYS_21,
            self::VALUE_DAYS_22,
            self::VALUE_DAYS_23,
            self::VALUE_DAYS_24,
            self::VALUE_DAYS_25,
            self::VALUE_DAYS_26,
            self::VALUE_DAYS_27,
            self::VALUE_DAYS_28,
            self::VALUE_DAYS_29,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_31,
            self::VALUE_DAYS_32,
            self::VALUE_DAYS_33,
            self::VALUE_DAYS_34,
            self::VALUE_DAYS_35,
            self::VALUE_DAYS_36,
            self::VALUE_DAYS_37,
            self::VALUE_DAYS_38,
            self::VALUE_DAYS_39,
            self::VALUE_DAYS_40,
            self::VALUE_DAYS_41,
            self::VALUE_DAYS_42,
            self::VALUE_DAYS_43,
            self::VALUE_DAYS_44,
            self::VALUE_DAYS_45,
            self::VALUE_DAYS_46,
            self::VALUE_DAYS_47,
            self::VALUE_DAYS_48,
            self::VALUE_DAYS_49,
            self::VALUE_DAYS_50,
            self::VALUE_LIFETIME,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
