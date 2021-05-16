<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PolicyComplianceStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PolicyComplianceStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Good'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'Fair'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Fair'
     */
    const VALUE_FAIR = 'Fair';
    /**
     * Constant for value 'Poor'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Poor'
     */
    const VALUE_POOR = 'Poor';
    /**
     * Constant for value 'Failing'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Failing'
     */
    const VALUE_FAILING = 'Failing';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_FAIR
     * @uses self::VALUE_POOR
     * @uses self::VALUE_FAILING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GOOD,
            self::VALUE_FAIR,
            self::VALUE_POOR,
            self::VALUE_FAILING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
