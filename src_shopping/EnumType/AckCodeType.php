<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AckCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type identifies the possible values that can be returned in the <b>Ack</b> field in call responses. The <b>Ack</b> value will indicate if the call was completely successful, if the called failed, or if the call was
 * partially successful, but with minor errors or warnings.
 * @subpackage Enumerations
 */
class AckCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Success'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the call request was processed successfully without any issues.
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Failure'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the call request processing failed.
     * @return string 'Failure'
     */
    const VALUE_FAILURE = 'Failure';
    /**
     * Constant for value 'Warning'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the call request was successful, but processing was not without any issues. These issues can be checked in the <b>Errors</b> container, that will also be returned when one or more known issues occur with the
     * call request.
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'PartialFailure'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the call request partially failed. One or more issues that may be responsible for this partial failure can be checked in the <b>Errors</b> container, that will also be returned when one or more known issues
     * occur with the call request.
     * @return string 'PartialFailure'
     */
    const VALUE_PARTIAL_FAILURE = 'PartialFailure';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_PARTIAL_FAILURE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESS,
            self::VALUE_FAILURE,
            self::VALUE_WARNING,
            self::VALUE_PARTIAL_FAILURE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
