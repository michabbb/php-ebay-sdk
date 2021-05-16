<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureUploadPolicyCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Values to be used in choosing that an uploaded picture is added to the available pictures on the eBay site.
 * @subpackage Enumerations
 */
class PictureUploadPolicyCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * Meta information extracted from the WSDL
     * - documentation: Specifies that an uploaded picture is added to the pictures available to a seller on the eBay site.
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'ClearAndAdd'
     * Meta information extracted from the WSDL
     * - documentation: Specifies, first, that all pictures available to a seller on the eBay site are removed, and then second, that the currently uploaded picture is made available to the seller.
     * @return string 'ClearAndAdd'
     */
    const VALUE_CLEAR_AND_ADD = 'ClearAndAdd';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use ONLY.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_CLEAR_AND_ADD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_CLEAR_AND_ADD,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
