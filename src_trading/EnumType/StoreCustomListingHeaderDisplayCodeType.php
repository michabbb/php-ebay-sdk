<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreCustomListingHeaderDisplayCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies how the custom listing header will be displayed.
 * @subpackage Enumerations
 */
class StoreCustomListingHeaderDisplayCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No custom listing header is displayed.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Full'
     * Meta information extracted from the WSDL
     * - documentation: The full custom listing header is displayed.
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'FullAndLeftNavigationBar'
     * Meta information extracted from the WSDL
     * - documentation: The full custom listing header and the left navigation bar is displayed.
     * @return string 'FullAndLeftNavigationBar'
     */
    const VALUE_FULL_AND_LEFT_NAVIGATION_BAR = 'FullAndLeftNavigationBar';
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
     * @uses self::VALUE_FULL
     * @uses self::VALUE_FULL_AND_LEFT_NAVIGATION_BAR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_FULL,
            self::VALUE_FULL_AND_LEFT_NAVIGATION_BAR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
