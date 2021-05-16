<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingRateTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: A shipping rate scale for shipping through UPS that affects the shipping cost calculated for UPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). For calculated shipping only.
 * @subpackage Enumerations
 */
class ShippingRateTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OnDemand'
     * Meta information extracted from the WSDL
     * - documentation: "On-demand" shipping rate scale.
     * @return string 'OnDemand'
     */
    const VALUE_ON_DEMAND = 'OnDemand';
    /**
     * Constant for value 'DailyPickup'
     * Meta information extracted from the WSDL
     * - documentation: "Daily pickup" shipping rate scale.
     * @return string 'DailyPickup'
     */
    const VALUE_DAILY_PICKUP = 'DailyPickup';
    /**
     * Constant for value 'StandardList'
     * Meta information extracted from the WSDL
     * - documentation: "Standard List" shipping rate scale.
     * @return string 'StandardList'
     */
    const VALUE_STANDARD_LIST = 'StandardList';
    /**
     * Constant for value 'Counter'
     * Meta information extracted from the WSDL
     * - documentation: "Counter" shipping rate scale.
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
    /**
     * Constant for value 'Discounted'
     * Meta information extracted from the WSDL
     * - documentation: "Discounted" shipping rate scale.
     * @return string 'Discounted'
     */
    const VALUE_DISCOUNTED = 'Discounted';
    /**
     * Constant for value 'CommercialPlus'
     * Meta information extracted from the WSDL
     * - documentation: "Commercial Plus" shipping rate scale.
     * @return string 'CommercialPlus'
     */
    const VALUE_COMMERCIAL_PLUS = 'CommercialPlus';
    /**
     * Constant for value 'GoldSilver'
     * Meta information extracted from the WSDL
     * - documentation: "Commercial Plus Discounted Rate1" shipping rate scale.
     * @return string 'GoldSilver'
     */
    const VALUE_GOLD_SILVER = 'GoldSilver';
    /**
     * Constant for value 'PlatTitanium'
     * Meta information extracted from the WSDL
     * - documentation: "Commercial Plus Discounted Rate2" shipping rate scale.
     * @return string 'PlatTitanium'
     */
    const VALUE_PLAT_TITANIUM = 'PlatTitanium';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ON_DEMAND
     * @uses self::VALUE_DAILY_PICKUP
     * @uses self::VALUE_STANDARD_LIST
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_DISCOUNTED
     * @uses self::VALUE_COMMERCIAL_PLUS
     * @uses self::VALUE_GOLD_SILVER
     * @uses self::VALUE_PLAT_TITANIUM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ON_DEMAND,
            self::VALUE_DAILY_PICKUP,
            self::VALUE_STANDARD_LIST,
            self::VALUE_COUNTER,
            self::VALUE_DISCOUNTED,
            self::VALUE_COMMERCIAL_PLUS,
            self::VALUE_GOLD_SILVER,
            self::VALUE_PLAT_TITANIUM,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
