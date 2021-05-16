<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReturnsRefundMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enum defines the different options that are available for specifying the available refund methods.
 * @subpackage Enumerations
 */
class ReturnsRefundMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MoneyBack'
     * Meta information extracted from the WSDL
     * - documentation: <code>MoneyBack</code> indicates the seller will refund the cost of the item returned.
     * @return string 'MoneyBack'
     */
    const VALUE_MONEY_BACK = 'MoneyBack';
    /**
     * Constant for value 'MoneyBackorReplacement'
     * Meta information extracted from the WSDL
     * - documentation: Available on the US marketplace only, <code>MoneyBackorReplacement</code> indicates the seller will refund the cost of the item returned or they will replace the returned item.
     * @return string 'MoneyBackorReplacement'
     */
    const VALUE_MONEY_BACKOR_REPLACEMENT = 'MoneyBackorReplacement';
    /**
     * Return allowed values
     * @uses self::VALUE_MONEY_BACK
     * @uses self::VALUE_MONEY_BACKOR_REPLACEMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MONEY_BACK,
            self::VALUE_MONEY_BACKOR_REPLACEMENT,
        ];
    }
}
