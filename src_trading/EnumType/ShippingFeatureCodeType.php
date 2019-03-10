<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShippingFeatureCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Miscellaneous details of the shipment.
 * @subpackage Enumerations
 */
class ShippingFeatureCodeType
{
    /**
     * Constant for value 'DeliveryConfirmation'
     * @return string 'DeliveryConfirmation'
     */
    const VALUE_DELIVERY_CONFIRMATION = 'DeliveryConfirmation';
    /**
     * Constant for value 'SignatureConfirmation'
     * @return string 'SignatureConfirmation'
     */
    const VALUE_SIGNATURE_CONFIRMATION = 'SignatureConfirmation';
    /**
     * Constant for value 'StealthPostage'
     * @return string 'StealthPostage'
     */
    const VALUE_STEALTH_POSTAGE = 'StealthPostage';
    /**
     * Constant for value 'SaturdayDelivery'
     * @return string 'SaturdayDelivery'
     */
    const VALUE_SATURDAY_DELIVERY = 'SaturdayDelivery';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'NotDefined'
     * @return string 'NotDefined'
     */
    const VALUE_NOT_DEFINED = 'NotDefined';
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
     * @uses self::VALUE_DELIVERY_CONFIRMATION
     * @uses self::VALUE_SIGNATURE_CONFIRMATION
     * @uses self::VALUE_STEALTH_POSTAGE
     * @uses self::VALUE_SATURDAY_DELIVERY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_NOT_DEFINED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELIVERY_CONFIRMATION,
            self::VALUE_SIGNATURE_CONFIRMATION,
            self::VALUE_STEALTH_POSTAGE,
            self::VALUE_SATURDAY_DELIVERY,
            self::VALUE_OTHER,
            self::VALUE_NOT_DEFINED,
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
