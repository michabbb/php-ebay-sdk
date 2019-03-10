<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnsShipmentPayeeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying the return shipment payee.
 * @subpackage Enumerations
 */
class ReturnsShipmentPayeeCodeType
{
    /**
     * Constant for value 'Buyer'
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
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
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER,
            self::VALUE_SELLER,
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
