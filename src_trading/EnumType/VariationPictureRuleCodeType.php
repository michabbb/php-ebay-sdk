<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VariationPictureRuleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that indicates if a specific Item Specific can be used to classify pictures in a multiple-variation listing. For example, in a multiple-variation listing that featured t-shirts of numerous colors and sizes, the
 * 'Color' Item Specific would most likely be 'Enabled', and would be a good candidate value for the <b>Variations.Pictures.VariationSpecificName</b> field in a 'FixedPriceItem' call when creating, revising, or relisting an item. Then, the seller would
 * provide URLs to multiple pictures showcasing the available colors of the shirts. These URLs are specified through multiple <b>Variations.Pictures.VariationSpecificPictureSet.PictureURL</b> fields.
 * @subpackage Enumerations
 */
class VariationPictureRuleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the corresponding Item Specific name must be used in the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a 'FixedPriceItem' call when creating, revising, or relisting an item.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the corresponding Item Specific name can be used in the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a 'FixedPriceItem' call when creating, revising, or relisting an item. Unlike the 'Required' value, 'Enabled' indicates that corresponding Item Specific name is just one option, and
     * they may be other options to use as a <b>VariationSpecificName</b> value.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the corresponding Item Specific name cannot be used in the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a 'FixedPriceItem' call when creating, revising, or relisting an item. The seller will have to find an Item Specific that is either 'Enabled' or 'Required' to use as a
     * <b>VariationSpecificName</b> value.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REQUIRED,
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
