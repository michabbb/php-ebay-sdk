<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DescriptionReviseModeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type containing the list of values that can be used when revising the item description of an active listing through the Revise API calls.
 * @subpackage Enumerations
 */
class DescriptionReviseModeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Replace'
     * Meta information extracted from the WSDL
     * - documentation: Use this value in the <b>Item.DescriptionReviseMode</b> field if you want to completely replace (overwrite) the item description of the active listing.
     * @return string 'Replace'
     */
    const VALUE_REPLACE = 'Replace';
    /**
     * Constant for value 'Prepend'
     * Meta information extracted from the WSDL
     * - documentation: Use this value in the <b>Item.DescriptionReviseMode</b> field if you want to prepend text to the item description of the active listing.
     * @return string 'Prepend'
     */
    const VALUE_PREPEND = 'Prepend';
    /**
     * Constant for value 'Append'
     * Meta information extracted from the WSDL
     * - documentation: Use this value in the <b>Item.DescriptionReviseMode</b> field if you want to append text to the item description of the active listing.
     * @return string 'Append'
     */
    const VALUE_APPEND = 'Append';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REPLACE
     * @uses self::VALUE_PREPEND
     * @uses self::VALUE_APPEND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REPLACE,
            self::VALUE_PREPEND,
            self::VALUE_APPEND,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
