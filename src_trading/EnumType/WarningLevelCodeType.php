<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarningLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be passed in through the <b>WarningLevel</b> field of a call request.
 * @subpackage Enumerations
 */
class WarningLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Low'
     * Meta information extracted from the WSDL
     * - documentation: The <b>WarningLevel</b> value is set to <code>Low</code> if the user does not wish to receive warnings when the application passes unrecognized or deprecated elements in an API call request. This is the default value if
     * <b>WarningLevel</b> is not specified in the call request.
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'High'
     * Meta information extracted from the WSDL
     * - documentation: The <b>WarningLevel</b> value is set to <code>High</code> if the user wishes to receive warnings when the application passes unrecognized or deprecated elements in an API call request. Setting the <b>WarningLevel</b> value to
     * <code>High</code> is not recommended in a production environment. Instead, it should only be used during the development/debugging stage.
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Return allowed values
     * @uses self::VALUE_LOW
     * @uses self::VALUE_HIGH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOW,
            self::VALUE_HIGH,
        ];
    }
}
