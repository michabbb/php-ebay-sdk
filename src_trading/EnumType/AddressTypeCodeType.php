<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AddressTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that indicates whether or not a nonprofit charity organization is registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help
 * topic for more information on registering with the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
 * @subpackage Enumerations
 */
class AddressTypeCodeType
{
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'Registered'
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
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
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTACT,
            self::VALUE_REGISTERED,
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
