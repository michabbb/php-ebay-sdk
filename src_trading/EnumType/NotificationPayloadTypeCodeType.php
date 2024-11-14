<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationPayloadTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type contains the payloads to use for delivering platform notifications. <br> <br> <span class="tablenote"><strong>Note:</strong> The notification payload type defaults to <code>eBLSchemaSOAP</code>, so the
 * <strong>NotificationPayloadType</strong> field no longer has to be included in a <strong>SetNotificationPreferences</strong> call. </span>
 * @subpackage Enumerations
 */
class NotificationPayloadTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'eBLSchemaSOAP'
     * Meta information extracted from the WSDL
     * - documentation: The only schema format supported for both standard XML and SOAP API payloads.
     * @return string 'eBLSchemaSOAP'
     */
    const VALUE_E_BLSCHEMA_SOAP = 'eBLSchemaSOAP';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_E_BLSCHEMA_SOAP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_E_BLSCHEMA_SOAP,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
