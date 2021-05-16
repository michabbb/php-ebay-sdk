<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EndOfAuctionLogoTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type is used to indicate the type of logo that will be included in the customized email that will be sent by the seller to the winning bidder in an auction listing.
 * @subpackage Enumerations
 */
class EndOfAuctionLogoTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WinningBidderNotice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the PayPal Winning Bidder Notice logo will be used in the end of auction email to winning bidder.
     * @return string 'WinningBidderNotice'
     */
    const VALUE_WINNING_BIDDER_NOTICE = 'WinningBidderNotice';
    /**
     * Constant for value 'Store'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay seller's Store logo will be used in the end of auction email to winning bidder.
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'Customized'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a custom logo will be used in the end of auction email to winning bidder. The location (URL) of this custom logo is specified in the <b>LogoURL</b> field.
     * @return string 'Customized'
     */
    const VALUE_CUSTOMIZED = 'Customized';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that no logo will be used in the end of auction email to winning bidder.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Return allowed values
     * @uses self::VALUE_WINNING_BIDDER_NOTICE
     * @uses self::VALUE_STORE
     * @uses self::VALUE_CUSTOMIZED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WINNING_BIDDER_NOTICE,
            self::VALUE_STORE,
            self::VALUE_CUSTOMIZED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_NONE,
        ];
    }
}
