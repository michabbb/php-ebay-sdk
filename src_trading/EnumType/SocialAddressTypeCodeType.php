<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SocialAddressTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the social networking sites that are supported by PayPal Giving Fund.
 * @subpackage Enumerations
 */
class SocialAddressTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Facebook'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Facebook account.
     * @return string 'Facebook'
     */
    const VALUE_FACEBOOK = 'Facebook';
    /**
     * Constant for value 'Twitter'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Twitter account.
     * @return string 'Twitter'
     */
    const VALUE_TWITTER = 'Twitter';
    /**
     * Constant for value 'Linkedin'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's LinkedIn account.
     * @return string 'Linkedin'
     */
    const VALUE_LINKEDIN = 'Linkedin';
    /**
     * Constant for value 'GooglePlus'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Google+ account.
     * @return string 'GooglePlus'
     */
    const VALUE_GOOGLE_PLUS = 'GooglePlus';
    /**
     * Constant for value 'Myspace'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's MySpace account.
     * @return string 'Myspace'
     */
    const VALUE_MYSPACE = 'Myspace';
    /**
     * Constant for value 'Orkut'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the <b>Charity.NonProfitSocialAddress.SocialAddressId</b> is associated with the nonprofit company's Orkut account.
     * @return string 'Orkut'
     */
    const VALUE_ORKUT = 'Orkut';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FACEBOOK
     * @uses self::VALUE_TWITTER
     * @uses self::VALUE_LINKEDIN
     * @uses self::VALUE_GOOGLE_PLUS
     * @uses self::VALUE_MYSPACE
     * @uses self::VALUE_ORKUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FACEBOOK,
            self::VALUE_TWITTER,
            self::VALUE_LINKEDIN,
            self::VALUE_GOOGLE_PLUS,
            self::VALUE_MYSPACE,
            self::VALUE_ORKUT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
