<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemCompatibilityEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Used to indicate whether the parts compatibility feature is enabled for a category.
 * @subpackage Enumerations
 */
class ItemCompatibilityEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: Parts Compatibility is not supported for the given category.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'ByApplication'
     * Meta information extracted from the WSDL
     * - documentation: Parts Compatibility may be entered by application only for the given category. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. Parts
     * compatibility by application can be specified by listing with a catalog product that supports parts compatibility or by specifying parts compatibility by application manually (<b> Item.ItemCompatibilityList</b>).
     * @return string 'ByApplication'
     */
    const VALUE_BY_APPLICATION = 'ByApplication';
    /**
     * Constant for value 'BySpecification'
     * Meta information extracted from the WSDL
     * - documentation: Parts Compatibility may be entered by specification only for the given category. Entering parts compatibility by specification involves specifying the part's relevant dimensions or characteristics (e.g., Section Width, Aspect Ratio,
     * Rim Diammeter, Load Index, and Speed Rating values for a tire) using attributes.
     * @return string 'BySpecification'
     */
    const VALUE_BY_SPECIFICATION = 'BySpecification';
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
     * @uses self::VALUE_BY_APPLICATION
     * @uses self::VALUE_BY_SPECIFICATION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_BY_APPLICATION,
            self::VALUE_BY_SPECIFICATION,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
