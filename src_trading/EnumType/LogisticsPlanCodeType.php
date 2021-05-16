<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogisticsPlanCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by <b>OrderType</b> and <b>TransactionType</b> to indicate which logistics plan was selected by the buyer at the order or order line item level. Currently, this type is only supporting the "Click and
 * Collect" and digital gift card use cases, but more logistics plan types may be added in the future.
 * @subpackage Enumerations
 */
class LogisticsPlanCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PickUpDropOff'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has selected "Click and Collect" as the logistics plan. With the 'Click and Collect' feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by
     * eBay once their items are available. The "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     * @return string 'PickUpDropOff'
     */
    const VALUE_PICK_UP_DROP_OFF = 'PickUpDropOff';
    /**
     * Constant for value 'DigitalDelivery'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order or order line item is a digital gift card that will be delivered to the buyer or the recipient of the gift card by email.
     * @return string 'DigitalDelivery'
     */
    const VALUE_DIGITAL_DELIVERY = 'DigitalDelivery';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PICK_UP_DROP_OFF
     * @uses self::VALUE_DIGITAL_DELIVERY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PICK_UP_DROP_OFF,
            self::VALUE_DIGITAL_DELIVERY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
