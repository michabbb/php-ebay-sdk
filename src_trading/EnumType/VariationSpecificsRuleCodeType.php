<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VariationSpecificsRuleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate if an Item Specific can be used at the variation level of a listing. This type is only applicable to categories that support multiple-variation listings. If an Item Specific cannot be used at
 * the variation level, it usually indicates that the particular Item Specific should only be specified at the listing-level, as it is a product aspect that should be shared by all variations in the multiple-variation listing.
 * @subpackage Enumerations
 */
class VariationSpecificsRuleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the corresponding Item Specific can be specified at the variation level. In the <b>AddFixedPriceItem</b> call, variation-specific name-value pairs are specified under the
     * <b>Variation.VariationSpecifics.NameValueList</b> container.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the corresponding Item Specific cannot be specified at the variation level. If an Item Specific cannot be used at the variation level, it usually indicates that the particular Item Specific should only be
     * specified at the listing-level, as it is a product aspect that should be shared by all variations in the multiple-variation listing.
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
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
