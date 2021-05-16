<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VeROItemStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The VeRO reporting status for an item.
 * @subpackage Enumerations
 */
class VeROItemStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Received'
     * Meta information extracted from the WSDL
     * - documentation: (out) The VeRO report request for the item has been received by eBay.
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Submitted'
     * Meta information extracted from the WSDL
     * - documentation: (out) The VeRO report request for the item has been submitted to eBay.
     * @return string 'Submitted'
     */
    const VALUE_SUBMITTED = 'Submitted';
    /**
     * Constant for value 'Removed'
     * Meta information extracted from the WSDL
     * - documentation: (out) The reported item has been ended by eBay.
     * @return string 'Removed'
     */
    const VALUE_REMOVED = 'Removed';
    /**
     * Constant for value 'SubmissionFailed'
     * Meta information extracted from the WSDL
     * - documentation: (out) The VeRO report request for the item failed.
     * @return string 'SubmissionFailed'
     */
    const VALUE_SUBMISSION_FAILED = 'SubmissionFailed';
    /**
     * Constant for value 'ClarificationRequired'
     * Meta information extracted from the WSDL
     * - documentation: (out) The VeRO report request for the item has been received by eBay, but additional clarification is needed before eBay can end the item.
     * @return string 'ClarificationRequired'
     */
    const VALUE_CLARIFICATION_REQUIRED = 'ClarificationRequired';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_SUBMITTED
     * @uses self::VALUE_REMOVED
     * @uses self::VALUE_SUBMISSION_FAILED
     * @uses self::VALUE_CLARIFICATION_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RECEIVED,
            self::VALUE_SUBMITTED,
            self::VALUE_REMOVED,
            self::VALUE_SUBMISSION_FAILED,
            self::VALUE_CLARIFICATION_REQUIRED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
