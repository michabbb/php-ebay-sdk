<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TradingRoleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type listing the possible roles an eBay user may have in regards to an eBay order.
 * @subpackage Enumerations
 */
class TradingRoleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: The eBay user is acting as the buyer for the order(s). In <b>GetOrders</b>, this value should be passed into the <b>OrderRole</b> field in the request to retrieve orders in which the calling eBay user is the buyer in the order.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: The eBay user is acting as the seller for the order(s). In <b>GetOrders</b>, this value should be passed into the <b>OrderRole</b> field in the request to retrieve orders in which the calling eBay user is the seller in the order.
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUYER,
            self::VALUE_SELLER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
