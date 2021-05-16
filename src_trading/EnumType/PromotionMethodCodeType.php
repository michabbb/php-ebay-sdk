<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PromotionMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CrossSell'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CrossSell'
     */
    const VALUE_CROSS_SELL = 'CrossSell';
    /**
     * Constant for value 'UpSell'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'UpSell'
     */
    const VALUE_UP_SELL = 'UpSell';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CROSS_SELL
     * @uses self::VALUE_UP_SELL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CROSS_SELL,
            self::VALUE_UP_SELL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
