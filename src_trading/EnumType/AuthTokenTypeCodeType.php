<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AuthTokenTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the types of user authentication tokens that can be used to access/use eBay APIs.
 * @subpackage Enumerations
 */
class AuthTokenTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ClientAlertsToken'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a Client Alerts token is required.
     * @return string 'ClientAlertsToken'
     */
    const VALUE_CLIENT_ALERTS_TOKEN = 'ClientAlertsToken';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CLIENT_ALERTS_TOKEN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLIENT_ALERTS_TOKEN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
