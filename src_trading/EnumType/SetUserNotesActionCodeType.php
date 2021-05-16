<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SetUserNotesActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the action to take for an item's My eBay notes.
 * @subpackage Enumerations
 */
class SetUserNotesActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AddOrUpdate'
     * Meta information extracted from the WSDL
     * - documentation: Creates or replaces an item's My eBay notes. Note that if the specified item already has notes in My eBay, the new notes will completely replace the existing notes. They will not be appended.
     * @return string 'AddOrUpdate'
     */
    const VALUE_ADD_OR_UPDATE = 'AddOrUpdate';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: Deletes any existing My eBay notes for the specified item. Specifying Delete when no notes exist does nothing, but does not return an error.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD_OR_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD_OR_UPDATE,
            self::VALUE_DELETE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
