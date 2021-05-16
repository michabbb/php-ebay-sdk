<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalculatedShippingChargeOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CalculatedShippingChargeOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ChargeEachItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ChargeEachItem'
     */
    const VALUE_CHARGE_EACH_ITEM = 'ChargeEachItem';
    /**
     * Constant for value 'ChargeEntireOrder'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ChargeEntireOrder'
     */
    const VALUE_CHARGE_ENTIRE_ORDER = 'ChargeEntireOrder';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CHARGE_EACH_ITEM
     * @uses self::VALUE_CHARGE_ENTIRE_ORDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHARGE_EACH_ITEM,
            self::VALUE_CHARGE_ENTIRE_ORDER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
