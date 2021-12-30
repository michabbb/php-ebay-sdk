<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the possible refund, exchange, or store credit options that a seller may offer the buyer as part of the return policy.
 * @subpackage Enumerations
 */
class RefundOptionsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MoneyBack'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller will refund the buyer the cost of the item, excluding shipping and handling costs.
     * @return string 'MoneyBack'
     */
    const VALUE_MONEY_BACK = 'MoneyBack';
    /**
     * Constant for value 'Exchange'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated since receiving money back must always be one of the options in a return policy and not just exchanging the item. If a seller wants to make an exchange one of the options, the <code>MoneyBackOrExchange</code>
     * option should be used.
     * @return string 'Exchange'
     */
    const VALUE_EXCHANGE = 'Exchange';
    /**
     * Constant for value 'MerchandiseCredit'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated since receiving money back must always be one of the options in a return policy and not just store credit.
     * @return string 'MerchandiseCredit'
     */
    const VALUE_MERCHANDISE_CREDIT = 'MerchandiseCredit';
    /**
     * Constant for value 'MoneyBackOrExchange'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> This value has been deprecated and US sellers that are willing to refund buyers or offer an identical replacement item should use the <code>MoneyBackOrReplacement</code> value instead. </span>
     * @return string 'MoneyBackOrExchange'
     */
    const VALUE_MONEY_BACK_OR_EXCHANGE = 'MoneyBackOrExchange';
    /**
     * Constant for value 'MoneyBackOrReplacement'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> This value is only available on the US site. US sellers should use this value if they are willing to refund buyers or offer an identical replacement item. </span> This value indicates that the
     * seller will refund the buyer the cost of the item (excluding shipping and handling costs) through eBay returns, or the seller will replace the returned item with another identical item if the buyer prefers this.
     * @return string 'MoneyBackOrReplacement'
     */
    const VALUE_MONEY_BACK_OR_REPLACEMENT = 'MoneyBackOrReplacement';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_MONEY_BACK
     * @uses self::VALUE_EXCHANGE
     * @uses self::VALUE_MERCHANDISE_CREDIT
     * @uses self::VALUE_MONEY_BACK_OR_EXCHANGE
     * @uses self::VALUE_MONEY_BACK_OR_REPLACEMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MONEY_BACK,
            self::VALUE_EXCHANGE,
            self::VALUE_MERCHANDISE_CREDIT,
            self::VALUE_MONEY_BACK_OR_EXCHANGE,
            self::VALUE_MONEY_BACK_OR_REPLACEMENT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
