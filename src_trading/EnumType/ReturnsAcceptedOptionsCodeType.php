<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReturnsAcceptedOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specified whether returns are accepted.
 * @subpackage Enumerations
 */
class ReturnsAcceptedOptionsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReturnsAccepted'
     * Meta information extracted from the WSDL
     * - documentation: The seller accepts returns, subject to other details specified in the policy.
     * @return string 'ReturnsAccepted'
     */
    const VALUE_RETURNS_ACCEPTED = 'ReturnsAccepted';
    /**
     * Constant for value 'ReturnsNotAccepted'
     * Meta information extracted from the WSDL
     * - documentation: The seller does not accept returns.
     * @return string 'ReturnsNotAccepted'
     */
    const VALUE_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RETURNS_ACCEPTED
     * @uses self::VALUE_RETURNS_NOT_ACCEPTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RETURNS_ACCEPTED,
            self::VALUE_RETURNS_NOT_ACCEPTED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
