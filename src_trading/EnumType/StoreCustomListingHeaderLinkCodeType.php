<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreCustomListingHeaderLinkCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the type of link in the custom listing header.
 * @subpackage Enumerations
 */
class StoreCustomListingHeaderLinkCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No type.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AboutMePage'
     * Meta information extracted from the WSDL
     * - documentation: Link is to an About Me page.
     * @return string 'AboutMePage'
     */
    const VALUE_ABOUT_ME_PAGE = 'AboutMePage';
    /**
     * Constant for value 'CustomPage'
     * Meta information extracted from the WSDL
     * - documentation: Link is to a custom page.
     * @return string 'CustomPage'
     */
    const VALUE_CUSTOM_PAGE = 'CustomPage';
    /**
     * Constant for value 'CustomCategory'
     * Meta information extracted from the WSDL
     * - documentation: Link is to a custom category.
     * @return string 'CustomCategory'
     */
    const VALUE_CUSTOM_CATEGORY = 'CustomCategory';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ABOUT_ME_PAGE
     * @uses self::VALUE_CUSTOM_PAGE
     * @uses self::VALUE_CUSTOM_CATEGORY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ABOUT_ME_PAGE,
            self::VALUE_CUSTOM_PAGE,
            self::VALUE_CUSTOM_CATEGORY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
