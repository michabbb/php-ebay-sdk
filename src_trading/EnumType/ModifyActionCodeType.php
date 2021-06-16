<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModifyActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the values that can be used when adding, modiying, or deleting a shipping discount profile (through the <b>ModifyActionCode</b> field in <b>SetShippingDiscountProfiles</b>).
 * @subpackage Enumerations
 */
class ModifyActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>SetShippingDiscountProfiles</b> request to create a new shipping discount profile.
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>SetShippingDiscountProfiles</b> request to delete an existing shipping discount profile.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Update'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>SetShippingDiscountProfiles</b> request to modify an existing shipping discount profile.
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_DELETE,
            self::VALUE_UPDATE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
