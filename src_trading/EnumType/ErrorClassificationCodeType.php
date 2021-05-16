<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ErrorClassificationCodeType EnumType
 * @subpackage Enumerations
 */
class ErrorClassificationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'RequestError'
     * Meta information extracted from the WSDL
     * - documentation: An error has occurred either as a result of a problem in the sending application or because the application's end-user has attempted to submit invalid data (or missing data). In these cases, do not retry the request. The problem must
     * be corrected before the request can be made again. If the problem is due to something in the application (such as a missing required field), the application must be changed. If the problem is a result of end-user data, the application must alert the
     * end-user to the problem and provide the means for the end-user to correct the data. Once the problem in the application or data is resolved, resend the request to eBay with the corrected data.
     * @return string 'RequestError'
     */
    const VALUE_REQUEST_ERROR = 'RequestError';
    /**
     * Constant for value 'SystemError'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that an error has occurred on the eBay system side, such as a database or server down. An application can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact
     * Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.
     * @return string 'SystemError'
     */
    const VALUE_SYSTEM_ERROR = 'SystemError';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REQUEST_ERROR
     * @uses self::VALUE_SYSTEM_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REQUEST_ERROR,
            self::VALUE_SYSTEM_ERROR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
