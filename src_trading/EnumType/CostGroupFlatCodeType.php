<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CostGroupFlatCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate which flat-rate shipping cost group that a shipping service option belongs to.
 * @subpackage Enumerations
 */
class CostGroupFlatCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Group1MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 1.
     * @return string 'Group1MaxFlatShippingCost'
     */
    const VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';
    /**
     * Constant for value 'Group2MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 2.
     * @return string 'Group2MaxFlatShippingCost'
     */
    const VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';
    /**
     * Constant for value 'Group3MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 3.
     * @return string 'Group3MaxFlatShippingCost'
     */
    const VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
