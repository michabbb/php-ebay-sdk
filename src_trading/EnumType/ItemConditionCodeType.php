<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemConditionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies a predefined subset of item conditions. The predefined set of fields can vary for different calls.
 * @subpackage Enumerations
 */
class ItemConditionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified the Item Condition as New, or did not specify a condition. (Excludes items that the seller listed as Used.)
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Used'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified the Item Condition as Used, or did not specify a condition. (Excludes items that the seller listed as New.)
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_USED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW,
            self::VALUE_USED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
