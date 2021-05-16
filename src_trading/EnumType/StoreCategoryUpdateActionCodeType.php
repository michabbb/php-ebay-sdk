<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreCategoryUpdateActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the type of action to carry out with SetStoreCategories.
 * @subpackage Enumerations
 */
class StoreCategoryUpdateActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * Meta information extracted from the WSDL
     * - documentation: (in) Add the listed categories to the store.
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: (in) Delete the listed categories from the store.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Move'
     * Meta information extracted from the WSDL
     * - documentation: (in) Move the listed categories from one place in the store category structure to another.
     * @return string 'Move'
     */
    const VALUE_MOVE = 'Move';
    /**
     * Constant for value 'Rename'
     * Meta information extracted from the WSDL
     * - documentation: (in) Rename the listed store categories to the names provided.
     * @return string 'Rename'
     */
    const VALUE_RENAME = 'Rename';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_MOVE
     * @uses self::VALUE_RENAME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_DELETE,
            self::VALUE_MOVE,
            self::VALUE_RENAME,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
