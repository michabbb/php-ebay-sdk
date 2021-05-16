<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerEmailSentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the Selling Manager email status.
 * @subpackage Enumerations
 */
class SellingManagerEmailSentStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Successful'
     * Meta information extracted from the WSDL
     * - documentation: Email sent successfully.
     * @return string 'Successful'
     */
    const VALUE_SUCCESSFUL = 'Successful';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: Sending of email failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: Email is not yet sent and is in Queue.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESSFUL
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESSFUL,
            self::VALUE_FAILED,
            self::VALUE_PENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
