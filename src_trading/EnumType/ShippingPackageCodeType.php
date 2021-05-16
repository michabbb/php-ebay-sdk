<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingPackageCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The nature of the package used to ship the item(s). Required for calculated shipping only. Not all package types are supported by a specific shipping service (ShippingServiceCodeType).
 * @subpackage Enumerations
 */
class ShippingPackageCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: None
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Letter'
     * Meta information extracted from the WSDL
     * - documentation: Letter
     * @return string 'Letter'
     */
    const VALUE_LETTER = 'Letter';
    /**
     * Constant for value 'LargeEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: LargeEnvelope
     * @return string 'LargeEnvelope'
     */
    const VALUE_LARGE_ENVELOPE = 'LargeEnvelope';
    /**
     * Constant for value 'USPSLargePack'
     * Meta information extracted from the WSDL
     * - documentation: USPS Large Package/Oversize 1
     * @return string 'USPSLargePack'
     */
    const VALUE_USPSLARGE_PACK = 'USPSLargePack';
    /**
     * Constant for value 'VeryLargePack'
     * Meta information extracted from the WSDL
     * - documentation: Very Large Package/Oversize 2
     * @return string 'VeryLargePack'
     */
    const VALUE_VERY_LARGE_PACK = 'VeryLargePack';
    /**
     * Constant for value 'ExtraLargePack'
     * Meta information extracted from the WSDL
     * - documentation: Extra Large Package/Oversize 3
     * @return string 'ExtraLargePack'
     */
    const VALUE_EXTRA_LARGE_PACK = 'ExtraLargePack';
    /**
     * Constant for value 'UPSLetter'
     * Meta information extracted from the WSDL
     * - documentation: UPS Letter
     * @return string 'UPSLetter'
     */
    const VALUE_UPSLETTER = 'UPSLetter';
    /**
     * Constant for value 'USPSFlatRateEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: USPS Flat Rate Envelope
     * @return string 'USPSFlatRateEnvelope'
     */
    const VALUE_USPSFLAT_RATE_ENVELOPE = 'USPSFlatRateEnvelope';
    /**
     * Constant for value 'PackageThickEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: Package/thick envelope
     * @return string 'PackageThickEnvelope'
     */
    const VALUE_PACKAGE_THICK_ENVELOPE = 'PackageThickEnvelope';
    /**
     * Constant for value 'Roll'
     * Meta information extracted from the WSDL
     * - documentation: Roll
     * @return string 'Roll'
     */
    const VALUE_ROLL = 'Roll';
    /**
     * Constant for value 'Europallet'
     * Meta information extracted from the WSDL
     * - documentation: Europallet
     * @return string 'Europallet'
     */
    const VALUE_EUROPALLET = 'Europallet';
    /**
     * Constant for value 'OneWayPallet'
     * Meta information extracted from the WSDL
     * - documentation: Onewaypallet
     * @return string 'OneWayPallet'
     */
    const VALUE_ONE_WAY_PALLET = 'OneWayPallet';
    /**
     * Constant for value 'BulkyGoods'
     * Meta information extracted from the WSDL
     * - documentation: Bulky goods
     * @return string 'BulkyGoods'
     */
    const VALUE_BULKY_GOODS = 'BulkyGoods';
    /**
     * Constant for value 'Furniture'
     * Meta information extracted from the WSDL
     * - documentation: Furniture
     * @return string 'Furniture'
     */
    const VALUE_FURNITURE = 'Furniture';
    /**
     * Constant for value 'Cars'
     * Meta information extracted from the WSDL
     * - documentation: Cars
     * @return string 'Cars'
     */
    const VALUE_CARS = 'Cars';
    /**
     * Constant for value 'Motorbikes'
     * Meta information extracted from the WSDL
     * - documentation: Motorbikes
     * @return string 'Motorbikes'
     */
    const VALUE_MOTORBIKES = 'Motorbikes';
    /**
     * Constant for value 'Caravan'
     * Meta information extracted from the WSDL
     * - documentation: Caravan
     * @return string 'Caravan'
     */
    const VALUE_CARAVAN = 'Caravan';
    /**
     * Constant for value 'IndustryVehicles'
     * Meta information extracted from the WSDL
     * - documentation: Industry vehicles
     * @return string 'IndustryVehicles'
     */
    const VALUE_INDUSTRY_VEHICLES = 'IndustryVehicles';
    /**
     * Constant for value 'ParcelOrPaddedEnvelope'
     * Meta information extracted from the WSDL
     * - documentation: Parcel or padded Envelope
     * @return string 'ParcelOrPaddedEnvelope'
     */
    const VALUE_PARCEL_OR_PADDED_ENVELOPE = 'ParcelOrPaddedEnvelope';
    /**
     * Constant for value 'SmallCanadaPostBox'
     * Meta information extracted from the WSDL
     * - documentation: Small Canada Post Box
     * @return string 'SmallCanadaPostBox'
     */
    const VALUE_SMALL_CANADA_POST_BOX = 'SmallCanadaPostBox';
    /**
     * Constant for value 'MediumCanadaPostBox'
     * Meta information extracted from the WSDL
     * - documentation: Medium Canada Post Box
     * @return string 'MediumCanadaPostBox'
     */
    const VALUE_MEDIUM_CANADA_POST_BOX = 'MediumCanadaPostBox';
    /**
     * Constant for value 'LargeCanadaPostBox'
     * Meta information extracted from the WSDL
     * - documentation: Large Canada Post Box
     * @return string 'LargeCanadaPostBox'
     */
    const VALUE_LARGE_CANADA_POST_BOX = 'LargeCanadaPostBox';
    /**
     * Constant for value 'SmallCanadaPostBubbleMailer'
     * Meta information extracted from the WSDL
     * - documentation: Small Canada Post Bubble Mailer
     * @return string 'SmallCanadaPostBubbleMailer'
     */
    const VALUE_SMALL_CANADA_POST_BUBBLE_MAILER = 'SmallCanadaPostBubbleMailer';
    /**
     * Constant for value 'MediumCanadaPostBubbleMailer'
     * Meta information extracted from the WSDL
     * - documentation: Medium Canada Post Bubble Mailer
     * @return string 'MediumCanadaPostBubbleMailer'
     */
    const VALUE_MEDIUM_CANADA_POST_BUBBLE_MAILER = 'MediumCanadaPostBubbleMailer';
    /**
     * Constant for value 'LargeCanadaPostBubbleMailer'
     * Meta information extracted from the WSDL
     * - documentation: Large Canada Post Bubble Mailer
     * @return string 'LargeCanadaPostBubbleMailer'
     */
    const VALUE_LARGE_CANADA_POST_BUBBLE_MAILER = 'LargeCanadaPostBubbleMailer';
    /**
     * Constant for value 'PaddedBags'
     * Meta information extracted from the WSDL
     * - documentation: Padded Bags
     * @return string 'PaddedBags'
     */
    const VALUE_PADDED_BAGS = 'PaddedBags';
    /**
     * Constant for value 'ToughBags'
     * Meta information extracted from the WSDL
     * - documentation: Tough Bags
     * @return string 'ToughBags'
     */
    const VALUE_TOUGH_BAGS = 'ToughBags';
    /**
     * Constant for value 'ExpandableToughBags'
     * Meta information extracted from the WSDL
     * - documentation: Expandable Tough Bags
     * @return string 'ExpandableToughBags'
     */
    const VALUE_EXPANDABLE_TOUGH_BAGS = 'ExpandableToughBags';
    /**
     * Constant for value 'MailingBoxes'
     * Meta information extracted from the WSDL
     * - documentation: Mailing Boxes
     * @return string 'MailingBoxes'
     */
    const VALUE_MAILING_BOXES = 'MailingBoxes';
    /**
     * Constant for value 'Winepak'
     * Meta information extracted from the WSDL
     * - documentation: Winepak
     * @return string 'Winepak'
     */
    const VALUE_WINEPAK = 'Winepak';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
