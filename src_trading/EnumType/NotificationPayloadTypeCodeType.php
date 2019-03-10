<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationPayloadTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class NotificationPayloadTypeCodeType
{
    /**
     * Constant for value 'eBLSchemaSOAP'
     * @return string 'eBLSchemaSOAP'
     */
    const VALUE_E_BLSCHEMA_SOAP = 'eBLSchemaSOAP';
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
     * @uses self::VALUE_E_BLSCHEMA_SOAP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BLSCHEMA_SOAP,
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
