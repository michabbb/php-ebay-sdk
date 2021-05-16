<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QuantityAvailableHintCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: eBay allows sellers to control messaging on the View Item page about the quantity available for an order line item. <b>QuantityAvailableHintCodeType</b> is an enumerated type that indicates the quantity message that the seller has
 * decided to display on the View Item page.
 * @subpackage Enumerations
 */
class QuantityAvailableHintCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Limited'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, the message on the View Item page is "Limited quantity available", based on a quantity threshold.
     * @return string 'Limited'
     */
    const VALUE_LIMITED = 'Limited';
    /**
     * Constant for value 'MoreThan'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, the message on the View Item page is "More than 10 available", as long as there is more than a quantity of 10 order line items available.
     * @return string 'MoreThan'
     */
    const VALUE_MORE_THAN = 'MoreThan';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LIMITED
     * @uses self::VALUE_MORE_THAN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIMITED,
            self::VALUE_MORE_THAN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
