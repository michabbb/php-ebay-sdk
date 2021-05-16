<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundLineTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundLineTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PurchasePrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PurchasePrice'
     */
    const VALUE_PURCHASE_PRICE = 'PurchasePrice';
    /**
     * Constant for value 'ShippingPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShippingPrice'
     */
    const VALUE_SHIPPING_PRICE = 'ShippingPrice';
    /**
     * Constant for value 'Additional'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Additional'
     */
    const VALUE_ADDITIONAL = 'Additional';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PURCHASE_PRICE
     * @uses self::VALUE_SHIPPING_PRICE
     * @uses self::VALUE_ADDITIONAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PURCHASE_PRICE,
            self::VALUE_SHIPPING_PRICE,
            self::VALUE_ADDITIONAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
