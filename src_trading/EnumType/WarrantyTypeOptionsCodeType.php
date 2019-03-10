<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for WarrantyTypeOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyTypeOptionsCodeType
{
    /**
     * Constant for value 'ReplacementWarranty'
     * @return string 'ReplacementWarranty'
     */
    const VALUE_REPLACEMENT_WARRANTY = 'ReplacementWarranty';
    /**
     * Constant for value 'DealerWarranty'
     * @return string 'DealerWarranty'
     */
    const VALUE_DEALER_WARRANTY = 'DealerWarranty';
    /**
     * Constant for value 'ManufacturerWarranty'
     * @return string 'ManufacturerWarranty'
     */
    const VALUE_MANUFACTURER_WARRANTY = 'ManufacturerWarranty';
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
     * @uses self::VALUE_REPLACEMENT_WARRANTY
     * @uses self::VALUE_DEALER_WARRANTY
     * @uses self::VALUE_MANUFACTURER_WARRANTY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REPLACEMENT_WARRANTY,
            self::VALUE_DEALER_WARRANTY,
            self::VALUE_MANUFACTURER_WARRANTY,
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
