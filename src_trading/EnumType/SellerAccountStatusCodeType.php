<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerAccountStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the different states of a seller's account.
 * @subpackage Enumerations
 */
class SellerAccountStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Current'
     * Meta information extracted from the WSDL
     * - documentation: Your account is current.
     * @return string 'Current'
     */
    const VALUE_CURRENT = 'Current';
    /**
     * Constant for value 'PastDue'
     * Meta information extracted from the WSDL
     * - documentation: Your account is past due.
     * @return string 'PastDue'
     */
    const VALUE_PAST_DUE = 'PastDue';
    /**
     * Constant for value 'OnHold'
     * Meta information extracted from the WSDL
     * - documentation: Your account is on hold and risking suspension.
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CURRENT
     * @uses self::VALUE_PAST_DUE
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CURRENT,
            self::VALUE_PAST_DUE,
            self::VALUE_ON_HOLD,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
