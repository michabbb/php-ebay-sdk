<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerPIStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class SellerPIStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AcceptedUA'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'AcceptedUA'
     */
    const VALUE_ACCEPTED_UA = 'AcceptedUA';
    /**
     * Constant for value 'MustAcceptUA'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'MustAcceptUA'
     */
    const VALUE_MUST_ACCEPT_UA = 'MustAcceptUA';
    /**
     * Constant for value 'PIEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PIEnabled'
     */
    const VALUE_PIENABLED = 'PIEnabled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ACCEPTED_UA
     * @uses self::VALUE_MUST_ACCEPT_UA
     * @uses self::VALUE_PIENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACCEPTED_UA,
            self::VALUE_MUST_ACCEPT_UA,
            self::VALUE_PIENABLED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
