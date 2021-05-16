<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CharityStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type defining the possible states for a nonprofit charity organization registered with the PayPal Giving Fund.
 * @subpackage Enumerations
 */
class CharityStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Valid'
     * Meta information extracted from the WSDL
     * - documentation: The specified nonprofit charity organization is a valid nonprofit charity organization according to the requirements of the PayPal Giving Fund.
     * @return string 'Valid'
     */
    const VALUE_VALID = 'Valid';
    /**
     * Constant for value 'NoLongerValid'
     * Meta information extracted from the WSDL
     * - documentation: The specified nonprofit charity organization is no longer a valid nonprofit charity organization according to the requirements of the PayPal Giving Fund.
     * @return string 'NoLongerValid'
     */
    const VALUE_NO_LONGER_VALID = 'NoLongerValid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_VALID
     * @uses self::VALUE_NO_LONGER_VALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VALID,
            self::VALUE_NO_LONGER_VALID,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
