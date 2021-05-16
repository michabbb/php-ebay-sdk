<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FlatShippingRateOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class FlatShippingRateOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ChargeAmountForEachAdditionalItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ChargeAmountForEachAdditionalItem'
     */
    const VALUE_CHARGE_AMOUNT_FOR_EACH_ADDITIONAL_ITEM = 'ChargeAmountForEachAdditionalItem';
    /**
     * Constant for value 'DeductAmountFromEachAdditionalItem'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DeductAmountFromEachAdditionalItem'
     */
    const VALUE_DEDUCT_AMOUNT_FROM_EACH_ADDITIONAL_ITEM = 'DeductAmountFromEachAdditionalItem';
    /**
     * Constant for value 'ShipAdditionalItemsFree'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShipAdditionalItemsFree'
     */
    const VALUE_SHIP_ADDITIONAL_ITEMS_FREE = 'ShipAdditionalItemsFree';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CHARGE_AMOUNT_FOR_EACH_ADDITIONAL_ITEM
     * @uses self::VALUE_DEDUCT_AMOUNT_FROM_EACH_ADDITIONAL_ITEM
     * @uses self::VALUE_SHIP_ADDITIONAL_ITEMS_FREE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHARGE_AMOUNT_FOR_EACH_ADDITIONAL_ITEM,
            self::VALUE_DEDUCT_AMOUNT_FROM_EACH_ADDITIONAL_ITEM,
            self::VALUE_SHIP_ADDITIONAL_ITEMS_FREE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
