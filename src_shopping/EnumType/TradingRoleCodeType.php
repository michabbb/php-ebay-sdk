<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TradingRoleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to specify whether an eBay user was the buyer or seller in an eBay transaction.
 * @subpackage Enumerations
 */
class TradingRoleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay user was the buyer in the correponding transaction.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay user was the seller in the correponding transaction.
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
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
