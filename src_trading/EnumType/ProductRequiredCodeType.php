<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductRequiredCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the values that indicate whether or not a product brand within an eBay category requires association with an eBay catalog product. <br> <br> <span class="tablenote"><b>Note:</b> Due to the rollback of
 * the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned for any brands within any eBay category. Due to this fact, the
 * <b>ProductRequiredCodeType</b> is currently not applicable. </span>
 * @subpackage Enumerations
 */
class ProductRequiredCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned for a product brand within a category, the eBay seller is not expected to use an eBay catalog product when creating or revising their listing in this category for this product brand.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned for a product brand within a category, the eBay seller should use an eBay catalog product when creating or revising their listing in this category for this product brand. Using an eBay catalog
     * product for the specific category/brand to create/revise the listing is not a hard mandate, but it is necessary if the seller would like the listing to appear in product-based listing search results.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
