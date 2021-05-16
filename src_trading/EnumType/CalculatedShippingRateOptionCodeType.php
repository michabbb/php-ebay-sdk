<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalculatedShippingRateOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CalculatedShippingRateOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CombinedItemWeight'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CombinedItemWeight'
     */
    const VALUE_COMBINED_ITEM_WEIGHT = 'CombinedItemWeight';
    /**
     * Constant for value 'IndividualItemWeight'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'IndividualItemWeight'
     */
    const VALUE_INDIVIDUAL_ITEM_WEIGHT = 'IndividualItemWeight';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_COMBINED_ITEM_WEIGHT
     * @uses self::VALUE_INDIVIDUAL_ITEM_WEIGHT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMBINED_ITEM_WEIGHT,
            self::VALUE_INDIVIDUAL_ITEM_WEIGHT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
