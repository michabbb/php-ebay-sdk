<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DiscountNameCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by the seller to set the shipping discount type. Some of these shipping discount types apply to flat-rate shipping and others apply to calculated shipping.
 * @subpackage Enumerations
 */
class DiscountNameCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EachAdditionalAmount'
     * Meta information extracted from the WSDL
     * - documentation: The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set
     * EachAdditionalAmount to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. For flat shipping discount profile only.
     * @return string 'EachAdditionalAmount'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT = 'EachAdditionalAmount';
    /**
     * Constant for value 'EachAdditionalAmountOff'
     * Meta information extracted from the WSDL
     * - documentation: The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8,
     * and the seller set EachAdditionalAmountOff to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be $24 - (two additional items x $2), or $20. For flat shipping discount profile
     * only.
     * @return string 'EachAdditionalAmountOff'
     */
    const VALUE_EACH_ADDITIONAL_AMOUNT_OFF = 'EachAdditionalAmountOff';
    /**
     * Constant for value 'EachAdditionalPercentOff'
     * Meta information extracted from the WSDL
     * - documentation: The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for
     * $8, and the seller set EachAdditionalPercentOff to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of 8), the total shipping cost would be $24 - (two additional items x $2), or $20. For flat rate
     * shipping discount profile only.
     * @return string 'EachAdditionalPercentOff'
     */
    const VALUE_EACH_ADDITIONAL_PERCENT_OFF = 'EachAdditionalPercentOff';
    /**
     * Constant for value 'IndividualItemWeight'
     * Meta information extracted from the WSDL
     * - documentation: Shipping cost is the total of what it would cost to ship each item individually. This is simply a way to define how shipping is to be calculated--there is no discount for the buyer with this selection. For calculated shipping
     * discount profile only.
     * @return string 'IndividualItemWeight'
     */
    const VALUE_INDIVIDUAL_ITEM_WEIGHT = 'IndividualItemWeight';
    /**
     * Constant for value 'CombinedItemWeight'
     * Meta information extracted from the WSDL
     * - documentation: Shipping cost is based on the total weight of all individual items. This is simply a way to define how shipping is to be calculated--there is no discount for the buyer with this selection. For calculated shipping discount profile
     * only.
     * @return string 'CombinedItemWeight'
     */
    const VALUE_COMBINED_ITEM_WEIGHT = 'CombinedItemWeight';
    /**
     * Constant for value 'WeightOff'
     * Meta information extracted from the WSDL
     * - documentation: The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually.
     * Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set WeightOff to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be 30 oz. -
     * (two additional items x 2 oz.), or 26 oz. For calculated shipping discount profile only.
     * @return string 'WeightOff'
     */
    const VALUE_WEIGHT_OFF = 'WeightOff';
    /**
     * Constant for value 'ShippingCostXForAmountY'
     * Meta information extracted from the WSDL
     * - documentation: Shipping cost X applies if the total cost of items purchased is Y. For promotional discount only.
     * @return string 'ShippingCostXForAmountY'
     */
    const VALUE_SHIPPING_COST_XFOR_AMOUNT_Y = 'ShippingCostXForAmountY';
    /**
     * Constant for value 'ShippingCostXForItemCountN'
     * Meta information extracted from the WSDL
     * - documentation: Shipping cost X applies if the total number of items purchased is N. For promotional discount only.
     * @return string 'ShippingCostXForItemCountN'
     */
    const VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N = 'ShippingCostXForItemCountN';
    /**
     * Constant for value 'MaximumShippingCostPerOrder'
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost will not exceed this. For promotional discount only.
     * @return string 'MaximumShippingCostPerOrder'
     */
    const VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER = 'MaximumShippingCostPerOrder';
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
     * @uses self::VALUE_INDIVIDUAL_ITEM_WEIGHT
     * @uses self::VALUE_COMBINED_ITEM_WEIGHT
     * @uses self::VALUE_WEIGHT_OFF
     * @uses self::VALUE_SHIPPING_COST_XFOR_AMOUNT_Y
     * @uses self::VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N
     * @uses self::VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EACH_ADDITIONAL_AMOUNT,
            self::VALUE_EACH_ADDITIONAL_AMOUNT_OFF,
            self::VALUE_EACH_ADDITIONAL_PERCENT_OFF,
            self::VALUE_INDIVIDUAL_ITEM_WEIGHT,
            self::VALUE_COMBINED_ITEM_WEIGHT,
            self::VALUE_WEIGHT_OFF,
            self::VALUE_SHIPPING_COST_XFOR_AMOUNT_Y,
            self::VALUE_SHIPPING_COST_XFOR_ITEM_COUNT_N,
            self::VALUE_MAXIMUM_SHIPPING_COST_PER_ORDER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
