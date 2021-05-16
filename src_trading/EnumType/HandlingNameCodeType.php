<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HandlingNameCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: How packaging/handling cost is to be determined for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders.
 * @subpackage Enumerations
 */
class HandlingNameCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EachAdditionalAmount'
     * Meta information extracted from the WSDL
     * - documentation: After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is $n.
     * @return string 'EachAdditionalAmount'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT = 'EachAdditionalAmount';
    /**
     * Constant for value 'EachAdditionalAmountOff'
     * Meta information extracted from the WSDL
     * - documentation: After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is to be reduced by amount N.
     * @return string 'EachAdditionalAmountOff'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT_OFF = 'EachAdditionalAmountOff';
    /**
     * Constant for value 'EachAdditionalPercentOff'
     * Meta information extracted from the WSDL
     * - documentation: After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is to be reduced by N percent.
     * @return string 'EachAdditionalPercentOff'
     */
    const VALUE_EACH_ADDITIONAL_PERCENT_OFF = 'EachAdditionalPercentOff';
    /**
     * Constant for value 'IndividualHandlingFee'
     * Meta information extracted from the WSDL
     * - documentation: The total packaging/handling cost is to be the sum of the packaging/handling costs of the individual items.
     * @return string 'IndividualHandlingFee'
     */
    const VALUE_INDIVIDUAL_HANDLING_FEE = 'IndividualHandlingFee';
    /**
     * Constant for value 'CombinedHandlingFee'
     * Meta information extracted from the WSDL
     * - documentation: The packaging/handling cost is to be N for the entire order.
     * @return string 'CombinedHandlingFee'
     */
    const VALUE_COMBINED_HANDLING_FEE = 'CombinedHandlingFee';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EACH_ADDITIONAL_AMOUNT
     * @uses self::VALUE_EACH_ADDITIONAL_AMOUNT_OFF
     * @uses self::VALUE_EACH_ADDITIONAL_PERCENT_OFF
     * @uses self::VALUE_INDIVIDUAL_HANDLING_FEE
     * @uses self::VALUE_COMBINED_HANDLING_FEE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EACH_ADDITIONAL_AMOUNT,
            self::VALUE_EACH_ADDITIONAL_AMOUNT_OFF,
            self::VALUE_EACH_ADDITIONAL_PERCENT_OFF,
            self::VALUE_INDIVIDUAL_HANDLING_FEE,
            self::VALUE_COMBINED_HANDLING_FEE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
