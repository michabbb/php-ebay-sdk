<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingTrackingEventCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is no longer applicable as it only pertained to eBay Now orders, and eBay Now has been discontinued.
 * @subpackage Enumerations
 */
class ShippingTrackingEventCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ValetReadyForPickup'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Now order is ready for pickup by the eBay Now valet at the store.
     * @return string 'ValetReadyForPickup'
     */
    const VALUE_VALET_READY_FOR_PICKUP = 'ValetReadyForPickup';
    /**
     * Constant for value 'ValetPickedUpOrder'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Now order was picked up by the eBay Now valet.
     * @return string 'ValetPickedUpOrder'
     */
    const VALUE_VALET_PICKED_UP_ORDER = 'ValetPickedUpOrder';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_VALET_READY_FOR_PICKUP
     * @uses self::VALUE_VALET_PICKED_UP_ORDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VALET_READY_FOR_PICKUP,
            self::VALUE_VALET_PICKED_UP_ORDER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
