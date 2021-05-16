<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductIdentiferEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type contains the values that may be returned in the <b>EANEnabled</b>, <b>ISBNEnabled</b>, and <b>UPCEnabled</b> fields at the site level (<b>SiteDefaults</b> container) and category level (<b>Category</b> nodes) to
 * indicate which sites and categories support, require, or do not support the use of product identifiers to help create a listing.
 * @subpackage Enumerations
 */
class ProductIdentiferEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may not be used to help create a listing. If returned at the site level (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) do not support the use of product identifiers. If returned at the category level (<b>Category</b> nodes), that specific category does not support the use of product identifiers.
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may be used to help create a listing. If returned at the site level (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) support the use of product identifiers. If returned at the category level (<b>Category</b> nodes), that specific category supports the use of product identifiers.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a product identifier (EAN, ISBN, UPC) is required when creating a listing. If returned at the site level (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) require the use of product identifiers. If returned at the category level (<b>Category</b> nodes), that specific category requires the use of product identifiers when creating a listing.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_REQUIRED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
