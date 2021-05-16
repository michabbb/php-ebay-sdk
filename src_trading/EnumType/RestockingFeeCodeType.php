<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RestockingFeeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * @subpackage Enumerations
 */
class RestockingFeeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoRestockingFee'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller will not charge a restocking fee to the buyer if the item is returned.
     * @return string 'NoRestockingFee'
     */
    const VALUE_NO_RESTOCKING_FEE = 'NoRestockingFee';
    /**
     * Constant for value 'Percent_10'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller charges the buyer a restocking fee of 10 percent of the item's purchase price if the item is returned.
     * @return string 'Percent_10'
     */
    const VALUE_PERCENT_10 = 'Percent_10';
    /**
     * Constant for value 'Percent_15'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller charges the buyer a restocking fee of 15 percent of the item's purchase price if the item is returned.
     * @return string 'Percent_15'
     */
    const VALUE_PERCENT_15 = 'Percent_15';
    /**
     * Constant for value 'Percent_20'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller charges the buyer a restocking fee of up to 20 percent of the item's purchase price if the item is returned.
     * @return string 'Percent_20'
     */
    const VALUE_PERCENT_20 = 'Percent_20';
    /**
     * Constant for value 'Percent_25'
     * Meta information extracted from the WSDL
     * - documentation: This is no longer a valid value.
     * @return string 'Percent_25'
     */
    const VALUE_PERCENT_25 = 'Percent_25';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_RESTOCKING_FEE
     * @uses self::VALUE_PERCENT_10
     * @uses self::VALUE_PERCENT_15
     * @uses self::VALUE_PERCENT_20
     * @uses self::VALUE_PERCENT_25
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_RESTOCKING_FEE,
            self::VALUE_PERCENT_10,
            self::VALUE_PERCENT_15,
            self::VALUE_PERCENT_20,
            self::VALUE_PERCENT_25,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
