<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TokenReturnMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates how the application wants eBay to handle the user's token after the user signs in.
 * @subpackage Enumerations
 */
class TokenReturnMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Redirect'
     * Meta information extracted from the WSDL
     * - documentation: Return the token in the HTTP redirect to the application-specified accept URL.
     * @return string 'Redirect'
     */
    const VALUE_REDIRECT = 'Redirect';
    /**
     * Constant for value 'FetchToken'
     * Meta information extracted from the WSDL
     * - documentation: Leave the token at eBay so that the application can get the token through the FetchToken API call (SecretId required).
     * @return string 'FetchToken'
     */
    const VALUE_FETCH_TOKEN = 'FetchToken';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REDIRECT
     * @uses self::VALUE_FETCH_TOKEN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REDIRECT,
            self::VALUE_FETCH_TOKEN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
