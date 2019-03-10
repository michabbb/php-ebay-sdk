<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for MapExposureEnum EnumType
 * Meta informations extracted from the WSDL
 * - documentation: If a seller offers an item for less than the Minimum Advertised Price (MAP) of that item, the seller cannot show the actual discounted price on the view item page. The buyer must open a pop-up on view item page or the discount price
 * will be shown during checkout. MinimumAdvertisedPriceExposure provides enums for specifying how the buyer is to view the discounted price, either PreCheckout or DuringCheckout. This is applicable for MAP items only.
 * @subpackage Enumerations
 */
class MapExposureEnum
{
    /**
     * Constant for value 'PreCheckout'
     * @return string 'PreCheckout'
     */
    const VALUE_PRE_CHECKOUT = 'PreCheckout';
    /**
     * Constant for value 'DuringCheckout'
     * @return string 'DuringCheckout'
     */
    const VALUE_DURING_CHECKOUT = 'DuringCheckout';
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
     * @uses self::VALUE_PRE_CHECKOUT
     * @uses self::VALUE_DURING_CHECKOUT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRE_CHECKOUT,
            self::VALUE_DURING_CHECKOUT,
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
