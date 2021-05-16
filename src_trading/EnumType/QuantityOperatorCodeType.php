<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QuantityOperatorCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type used by the <b>QuantityOperator</b> field that is returned under the <b>FavoriteSearch</b> container in a <b>GetMyeBayBuying</b> call. The values in this type indicate how the quantity of the item that the prospective
 * desires compares to the quantity available.
 * @subpackage Enumerations
 */
class QuantityOperatorCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LessThan'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the quantity sought (specified in <b>Quantity</b> field) is less than the quantity available (specified in <b>TotalAvailable</b> field).
     * @return string 'LessThan'
     */
    const VALUE_LESS_THAN = 'LessThan';
    /**
     * Constant for value 'LessThanOrEqual'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the quantity sought (specified in <b>Quantity</b> field) is less than or equal to the quantity available (specified in <b>TotalAvailable</b> field).
     * @return string 'LessThanOrEqual'
     */
    const VALUE_LESS_THAN_OR_EQUAL = 'LessThanOrEqual';
    /**
     * Constant for value 'Equal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the quantity sought (specified in <b>Quantity</b> field) is equal to the quantity available (specified in <b>TotalAvailable</b> field).
     * @return string 'Equal'
     */
    const VALUE_EQUAL = 'Equal';
    /**
     * Constant for value 'GreaterThan'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the quantity sought (specified in <b>Quantity</b> field) is greater than the quantity available (specified in <b>TotalAvailable</b> field).
     * @return string 'GreaterThan'
     */
    const VALUE_GREATER_THAN = 'GreaterThan';
    /**
     * Constant for value 'GreaterThanOrEqual'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the quantity sought (specified in <b>Quantity</b> field) is greater than or equal to the quantity available (specified in <b>TotalAvailable</b> field).
     * @return string 'GreaterThanOrEqual'
     */
    const VALUE_GREATER_THAN_OR_EQUAL = 'GreaterThanOrEqual';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LESS_THAN
     * @uses self::VALUE_LESS_THAN_OR_EQUAL
     * @uses self::VALUE_EQUAL
     * @uses self::VALUE_GREATER_THAN
     * @uses self::VALUE_GREATER_THAN_OR_EQUAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LESS_THAN,
            self::VALUE_LESS_THAN_OR_EQUAL,
            self::VALUE_EQUAL,
            self::VALUE_GREATER_THAN,
            self::VALUE_GREATER_THAN_OR_EQUAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
