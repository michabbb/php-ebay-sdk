<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellerPIStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class SellerPIStatusCodeType
{
    /**
     * Constant for value 'AcceptedUA'
     * @return string 'AcceptedUA'
     */
    const VALUE_ACCEPTED_UA = 'AcceptedUA';
    /**
     * Constant for value 'MustAcceptUA'
     * @return string 'MustAcceptUA'
     */
    const VALUE_MUST_ACCEPT_UA = 'MustAcceptUA';
    /**
     * Constant for value 'PIEnabled'
     * @return string 'PIEnabled'
     */
    const VALUE_PIENABLED = 'PIEnabled';
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
     * @uses self::VALUE_ACCEPTED_UA
     * @uses self::VALUE_MUST_ACCEPT_UA
     * @uses self::VALUE_PIENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPTED_UA,
            self::VALUE_MUST_ACCEPT_UA,
            self::VALUE_PIENABLED,
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
