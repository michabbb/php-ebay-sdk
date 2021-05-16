<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransactionPlatformCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> Currently, the only supported value for this enumeration type is <code>eBay</code>. Half.com listings will no longer be supported in APIs. </span> Specifies the site on which the purchase was
 * made.
 * @subpackage Enumerations
 */
class TransactionPlatformCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the purchase occurred on an eBay marketplace site.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'Express'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> eBay Express no longer exists. </span> The order line item was created on the eBay Express site.
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'Half'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> Half.com listings will no longer be supported in APIs. </span> The order line item was created on Half.com site.
     * @return string 'Half'
     */
    const VALUE_HALF = 'Half';
    /**
     * Constant for value 'Shopping'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> Shopping.com listings are no longer supported in APIs. </span> The order line item was created on the Shopping.com site.
     * @return string 'Shopping'
     */
    const VALUE_SHOPPING = 'Shopping';
    /**
     * Constant for value 'WorldOfGood'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> World Of Good is no longer associated with eBay. </span> The order line item was created on the WorldOfGood site.
     * @return string 'WorldOfGood'
     */
    const VALUE_WORLD_OF_GOOD = 'WorldOfGood';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_HALF
     * @uses self::VALUE_SHOPPING
     * @uses self::VALUE_WORLD_OF_GOOD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_E_BAY,
            self::VALUE_EXPRESS,
            self::VALUE_HALF,
            self::VALUE_SHOPPING,
            self::VALUE_WORLD_OF_GOOD,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
