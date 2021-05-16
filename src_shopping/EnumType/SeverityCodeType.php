<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SeverityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that is used to show the severity of the API call issue, either an error, or a warning.
 * @subpackage Enumerations
 */
class SeverityCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Warning'
     * Meta information extracted from the WSDL
     * - documentation: The request was processed successfully, but something occurred that may affect your application or the user. For example, eBay may have changed a value the user sent in. In this case, eBay returns a normal, successful response and
     * also returns the warning.
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'Error'
     * Meta information extracted from the WSDL
     * - documentation: The request that triggered the error was not processed successfully. When a serious application-level error occurs, the error is returned instead of the business data.
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WARNING,
            self::VALUE_ERROR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
