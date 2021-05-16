<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DigitalStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type lists the possible states of a purchased digital delivery card.
 * @subpackage Enumerations
 */
class DigitalStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Inactive'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the digital gift card has yet to be activated by the buyer or recipient of gift card.
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Activated'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the digital gift card has been activated by the buyer or recipient of gift card.
     * @return string 'Activated'
     */
    const VALUE_ACTIVATED = 'Activated';
    /**
     * Constant for value 'Downloaded'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the digital gift card has been downloaded by the buyer or recipient of gift card. The next step would be to activate the gift card.
     * @return string 'Downloaded'
     */
    const VALUE_DOWNLOADED = 'Downloaded';
    /**
     * Constant for value 'Deactivated'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the digital gift card has been deactivated.
     * @return string 'Deactivated'
     */
    const VALUE_DEACTIVATED = 'Deactivated';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_ACTIVATED
     * @uses self::VALUE_DOWNLOADED
     * @uses self::VALUE_DEACTIVATED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INACTIVE,
            self::VALUE_ACTIVATED,
            self::VALUE_DOWNLOADED,
            self::VALUE_DEACTIVATED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
