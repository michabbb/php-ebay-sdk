<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemSpecificsEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate whether an eBay marketplace and/or category supports the use of Item Specifics when creating, revising, or relisting an item.
 * @subpackage Enumerations
 */
class ItemSpecificsEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller may not use Item Specifics for the specified eBay marketplace or corresponding category.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller may use Item Specifics for the specified eBay marketplace or corresponding category.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
