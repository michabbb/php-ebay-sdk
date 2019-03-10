<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReasonHideFromSearchCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible reasons why an auction listing is being hidden from search on the eBay site.
 * @subpackage Enumerations
 */
class ReasonHideFromSearchCodeType
{
    /**
     * Constant for value 'DuplicateListing'
     * @return string 'DuplicateListing'
     */
    const VALUE_DUPLICATE_LISTING = 'DuplicateListing';
    /**
     * Constant for value 'OutOfStock'
     * @return string 'OutOfStock'
     */
    const VALUE_OUT_OF_STOCK = 'OutOfStock';
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
     * @uses self::VALUE_DUPLICATE_LISTING
     * @uses self::VALUE_OUT_OF_STOCK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DUPLICATE_LISTING,
            self::VALUE_OUT_OF_STOCK,
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
