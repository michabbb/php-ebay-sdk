<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureManagerSubscriptionLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerSubscriptionLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Free'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Level1'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Level1'
     */
    const VALUE_LEVEL_1 = 'Level1';
    /**
     * Constant for value 'Level2'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Level2'
     */
    const VALUE_LEVEL_2 = 'Level2';
    /**
     * Constant for value 'Level3'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Level3'
     */
    const VALUE_LEVEL_3 = 'Level3';
    /**
     * Constant for value 'Level4'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Level4'
     */
    const VALUE_LEVEL_4 = 'Level4';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FREE
     * @uses self::VALUE_LEVEL_1
     * @uses self::VALUE_LEVEL_2
     * @uses self::VALUE_LEVEL_3
     * @uses self::VALUE_LEVEL_4
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FREE,
            self::VALUE_LEVEL_1,
            self::VALUE_LEVEL_2,
            self::VALUE_LEVEL_3,
            self::VALUE_LEVEL_4,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
