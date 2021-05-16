<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReturnsAcceptedCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying whether or not the seller accepts returns.
 * @subpackage Enumerations
 */
class ReturnsAcceptedCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReturnsAccepted'
     * Meta information extracted from the WSDL
     * - documentation: <code>ReturnsAccepted</code> indicates the seller does accept returns.
     * @return string 'ReturnsAccepted'
     */
    const VALUE_RETURNS_ACCEPTED = 'ReturnsAccepted';
    /**
     * Constant for value 'ReturnsNotAccepted'
     * Meta information extracted from the WSDL
     * - documentation: <code>ReturnsNotAccepted</code> indicates the seller does <i>not</i> accept returns.
     * @return string 'ReturnsNotAccepted'
     */
    const VALUE_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';
    /**
     * Return allowed values
     * @uses self::VALUE_RETURNS_ACCEPTED
     * @uses self::VALUE_RETURNS_NOT_ACCEPTED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RETURNS_ACCEPTED,
            self::VALUE_RETURNS_NOT_ACCEPTED,
        ];
    }
}
