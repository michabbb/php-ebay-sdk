<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureManagerActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Rename'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Rename'
     */
    const VALUE_RENAME = 'Rename';
    /**
     * Constant for value 'Move'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Move'
     */
    const VALUE_MOVE = 'Move';
    /**
     * Constant for value 'Change'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Change'
     */
    const VALUE_CHANGE = 'Change';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_RENAME
     * @uses self::VALUE_MOVE
     * @uses self::VALUE_CHANGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_DELETE,
            self::VALUE_RENAME,
            self::VALUE_MOVE,
            self::VALUE_CHANGE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
