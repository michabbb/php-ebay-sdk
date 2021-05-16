<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DescriptionTemplateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines Listing Designer template types.
 * @subpackage Enumerations
 */
class DescriptionTemplateCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Layout'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Listing Designer template is a layout template that controls how pictures and description text are positioned on the View Item page.
     * @return string 'Layout'
     */
    const VALUE_LAYOUT = 'Layout';
    /**
     * Constant for value 'Theme'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Listing Designer template is a theme template that determines which eBay-provided theme (e.g. Valentine's Day) is to be applied for presenting pictures and description text.
     * @return string 'Theme'
     */
    const VALUE_THEME = 'Theme';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LAYOUT
     * @uses self::VALUE_THEME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LAYOUT,
            self::VALUE_THEME,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
