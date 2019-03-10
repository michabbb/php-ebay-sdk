<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SocialAddressTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the social networking sites that are supported by PayPal Giving Fund.
 * @subpackage Enumerations
 */
class SocialAddressTypeCodeType
{
    /**
     * Constant for value 'Facebook'
     * @return string 'Facebook'
     */
    const VALUE_FACEBOOK = 'Facebook';
    /**
     * Constant for value 'Twitter'
     * @return string 'Twitter'
     */
    const VALUE_TWITTER = 'Twitter';
    /**
     * Constant for value 'Linkedin'
     * @return string 'Linkedin'
     */
    const VALUE_LINKEDIN = 'Linkedin';
    /**
     * Constant for value 'GooglePlus'
     * @return string 'GooglePlus'
     */
    const VALUE_GOOGLE_PLUS = 'GooglePlus';
    /**
     * Constant for value 'Myspace'
     * @return string 'Myspace'
     */
    const VALUE_MYSPACE = 'Myspace';
    /**
     * Constant for value 'Orkut'
     * @return string 'Orkut'
     */
    const VALUE_ORKUT = 'Orkut';
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
     * @uses self::VALUE_FACEBOOK
     * @uses self::VALUE_TWITTER
     * @uses self::VALUE_LINKEDIN
     * @uses self::VALUE_GOOGLE_PLUS
     * @uses self::VALUE_MYSPACE
     * @uses self::VALUE_ORKUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FACEBOOK,
            self::VALUE_TWITTER,
            self::VALUE_LINKEDIN,
            self::VALUE_GOOGLE_PLUS,
            self::VALUE_MYSPACE,
            self::VALUE_ORKUT,
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
