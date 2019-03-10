<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShippingPackageCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The nature of the package used to ship the item(s). Required for calculated shipping only. Not all package types are supported by a specific shipping service (ShippingServiceCodeType).
 * @subpackage Enumerations
 */
class ShippingPackageCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Letter'
     * @return string 'Letter'
     */
    const VALUE_LETTER = 'Letter';
    /**
     * Constant for value 'LargeEnvelope'
     * @return string 'LargeEnvelope'
     */
    const VALUE_LARGE_ENVELOPE = 'LargeEnvelope';
    /**
     * Constant for value 'USPSLargePack'
     * @return string 'USPSLargePack'
     */
    const VALUE_USPSLARGE_PACK = 'USPSLargePack';
    /**
     * Constant for value 'VeryLargePack'
     * @return string 'VeryLargePack'
     */
    const VALUE_VERY_LARGE_PACK = 'VeryLargePack';
    /**
     * Constant for value 'ExtraLargePack'
     * @return string 'ExtraLargePack'
     */
    const VALUE_EXTRA_LARGE_PACK = 'ExtraLargePack';
    /**
     * Constant for value 'UPSLetter'
     * @return string 'UPSLetter'
     */
    const VALUE_UPSLETTER = 'UPSLetter';
    /**
     * Constant for value 'USPSFlatRateEnvelope'
     * @return string 'USPSFlatRateEnvelope'
     */
    const VALUE_USPSFLAT_RATE_ENVELOPE = 'USPSFlatRateEnvelope';
    /**
     * Constant for value 'PackageThickEnvelope'
     * @return string 'PackageThickEnvelope'
     */
    const VALUE_PACKAGE_THICK_ENVELOPE = 'PackageThickEnvelope';
    /**
     * Constant for value 'Roll'
     * @return string 'Roll'
     */
    const VALUE_ROLL = 'Roll';
    /**
     * Constant for value 'Europallet'
     * @return string 'Europallet'
     */
    const VALUE_EUROPALLET = 'Europallet';
    /**
     * Constant for value 'OneWayPallet'
     * @return string 'OneWayPallet'
     */
    const VALUE_ONE_WAY_PALLET = 'OneWayPallet';
    /**
     * Constant for value 'BulkyGoods'
     * @return string 'BulkyGoods'
     */
    const VALUE_BULKY_GOODS = 'BulkyGoods';
    /**
     * Constant for value 'Furniture'
     * @return string 'Furniture'
     */
    const VALUE_FURNITURE = 'Furniture';
    /**
     * Constant for value 'Cars'
     * @return string 'Cars'
     */
    const VALUE_CARS = 'Cars';
    /**
     * Constant for value 'Motorbikes'
     * @return string 'Motorbikes'
     */
    const VALUE_MOTORBIKES = 'Motorbikes';
    /**
     * Constant for value 'Caravan'
     * @return string 'Caravan'
     */
    const VALUE_CARAVAN = 'Caravan';
    /**
     * Constant for value 'IndustryVehicles'
     * @return string 'IndustryVehicles'
     */
    const VALUE_INDUSTRY_VEHICLES = 'IndustryVehicles';
    /**
     * Constant for value 'ParcelOrPaddedEnvelope'
     * @return string 'ParcelOrPaddedEnvelope'
     */
    const VALUE_PARCEL_OR_PADDED_ENVELOPE = 'ParcelOrPaddedEnvelope';
    /**
     * Constant for value 'SmallCanadaPostBox'
     * @return string 'SmallCanadaPostBox'
     */
    const VALUE_SMALL_CANADA_POST_BOX = 'SmallCanadaPostBox';
    /**
     * Constant for value 'MediumCanadaPostBox'
     * @return string 'MediumCanadaPostBox'
     */
    const VALUE_MEDIUM_CANADA_POST_BOX = 'MediumCanadaPostBox';
    /**
     * Constant for value 'LargeCanadaPostBox'
     * @return string 'LargeCanadaPostBox'
     */
    const VALUE_LARGE_CANADA_POST_BOX = 'LargeCanadaPostBox';
    /**
     * Constant for value 'SmallCanadaPostBubbleMailer'
     * @return string 'SmallCanadaPostBubbleMailer'
     */
    const VALUE_SMALL_CANADA_POST_BUBBLE_MAILER = 'SmallCanadaPostBubbleMailer';
    /**
     * Constant for value 'MediumCanadaPostBubbleMailer'
     * @return string 'MediumCanadaPostBubbleMailer'
     */
    const VALUE_MEDIUM_CANADA_POST_BUBBLE_MAILER = 'MediumCanadaPostBubbleMailer';
    /**
     * Constant for value 'LargeCanadaPostBubbleMailer'
     * @return string 'LargeCanadaPostBubbleMailer'
     */
    const VALUE_LARGE_CANADA_POST_BUBBLE_MAILER = 'LargeCanadaPostBubbleMailer';
    /**
     * Constant for value 'PaddedBags'
     * @return string 'PaddedBags'
     */
    const VALUE_PADDED_BAGS = 'PaddedBags';
    /**
     * Constant for value 'ToughBags'
     * @return string 'ToughBags'
     */
    const VALUE_TOUGH_BAGS = 'ToughBags';
    /**
     * Constant for value 'ExpandableToughBags'
     * @return string 'ExpandableToughBags'
     */
    const VALUE_EXPANDABLE_TOUGH_BAGS = 'ExpandableToughBags';
    /**
     * Constant for value 'MailingBoxes'
     * @return string 'MailingBoxes'
     */
    const VALUE_MAILING_BOXES = 'MailingBoxes';
    /**
     * Constant for value 'Winepak'
     * @return string 'Winepak'
     */
    const VALUE_WINEPAK = 'Winepak';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LETTER
     * @uses self::VALUE_LARGE_ENVELOPE
     * @uses self::VALUE_USPSLARGE_PACK
     * @uses self::VALUE_VERY_LARGE_PACK
     * @uses self::VALUE_EXTRA_LARGE_PACK
     * @uses self::VALUE_UPSLETTER
     * @uses self::VALUE_USPSFLAT_RATE_ENVELOPE
     * @uses self::VALUE_PACKAGE_THICK_ENVELOPE
     * @uses self::VALUE_ROLL
     * @uses self::VALUE_EUROPALLET
     * @uses self::VALUE_ONE_WAY_PALLET
     * @uses self::VALUE_BULKY_GOODS
     * @uses self::VALUE_FURNITURE
     * @uses self::VALUE_CARS
     * @uses self::VALUE_MOTORBIKES
     * @uses self::VALUE_CARAVAN
     * @uses self::VALUE_INDUSTRY_VEHICLES
     * @uses self::VALUE_PARCEL_OR_PADDED_ENVELOPE
     * @uses self::VALUE_SMALL_CANADA_POST_BOX
     * @uses self::VALUE_MEDIUM_CANADA_POST_BOX
     * @uses self::VALUE_LARGE_CANADA_POST_BOX
     * @uses self::VALUE_SMALL_CANADA_POST_BUBBLE_MAILER
     * @uses self::VALUE_MEDIUM_CANADA_POST_BUBBLE_MAILER
     * @uses self::VALUE_LARGE_CANADA_POST_BUBBLE_MAILER
     * @uses self::VALUE_PADDED_BAGS
     * @uses self::VALUE_TOUGH_BAGS
     * @uses self::VALUE_EXPANDABLE_TOUGH_BAGS
     * @uses self::VALUE_MAILING_BOXES
     * @uses self::VALUE_WINEPAK
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LETTER,
            self::VALUE_LARGE_ENVELOPE,
            self::VALUE_USPSLARGE_PACK,
            self::VALUE_VERY_LARGE_PACK,
            self::VALUE_EXTRA_LARGE_PACK,
            self::VALUE_UPSLETTER,
            self::VALUE_USPSFLAT_RATE_ENVELOPE,
            self::VALUE_PACKAGE_THICK_ENVELOPE,
            self::VALUE_ROLL,
            self::VALUE_EUROPALLET,
            self::VALUE_ONE_WAY_PALLET,
            self::VALUE_BULKY_GOODS,
            self::VALUE_FURNITURE,
            self::VALUE_CARS,
            self::VALUE_MOTORBIKES,
            self::VALUE_CARAVAN,
            self::VALUE_INDUSTRY_VEHICLES,
            self::VALUE_PARCEL_OR_PADDED_ENVELOPE,
            self::VALUE_SMALL_CANADA_POST_BOX,
            self::VALUE_MEDIUM_CANADA_POST_BOX,
            self::VALUE_LARGE_CANADA_POST_BOX,
            self::VALUE_SMALL_CANADA_POST_BUBBLE_MAILER,
            self::VALUE_MEDIUM_CANADA_POST_BUBBLE_MAILER,
            self::VALUE_LARGE_CANADA_POST_BUBBLE_MAILER,
            self::VALUE_PADDED_BAGS,
            self::VALUE_TOUGH_BAGS,
            self::VALUE_EXPANDABLE_TOUGH_BAGS,
            self::VALUE_MAILING_BOXES,
            self::VALUE_WINEPAK,
            self::VALUE_CUSTOM_CODE,
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
