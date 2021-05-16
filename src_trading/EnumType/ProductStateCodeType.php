<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductStateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ProductStateCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Update'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'UpdateMajor'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'UpdateMajor'
     */
    const VALUE_UPDATE_MAJOR = 'UpdateMajor';
    /**
     * Constant for value 'UpdateNoDetails'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'UpdateNoDetails'
     */
    const VALUE_UPDATE_NO_DETAILS = 'UpdateNoDetails';
    /**
     * Constant for value 'Merge'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Merge'
     */
    const VALUE_MERGE = 'Merge';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_UPDATE_MAJOR
     * @uses self::VALUE_UPDATE_NO_DETAILS
     * @uses self::VALUE_MERGE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPDATE,
            self::VALUE_UPDATE_MAJOR,
            self::VALUE_UPDATE_NO_DETAILS,
            self::VALUE_MERGE,
            self::VALUE_DELETE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
