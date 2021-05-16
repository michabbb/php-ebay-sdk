<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerGeneralPropertyTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Container for other alerts for Selling Manager.
 * @subpackage Enumerations
 */
class SellingManagerGeneralPropertyTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NegativeFeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: Items that received negative feeback.
     * @return string 'NegativeFeedbackReceived'
     */
    const VALUE_NEGATIVE_FEEDBACK_RECEIVED = 'NegativeFeedbackReceived';
    /**
     * Constant for value 'UnpaidItemDispute'
     * Meta information extracted from the WSDL
     * - documentation: Unpaid item disputes require your response.
     * @return string 'UnpaidItemDispute'
     */
    const VALUE_UNPAID_ITEM_DISPUTE = 'UnpaidItemDispute';
    /**
     * Constant for value 'BadEmailTemplate'
     * Meta information extracted from the WSDL
     * - documentation: Emails not set because of HTML or active content.
     * @return string 'BadEmailTemplate'
     */
    const VALUE_BAD_EMAIL_TEMPLATE = 'BadEmailTemplate';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NEGATIVE_FEEDBACK_RECEIVED
     * @uses self::VALUE_UNPAID_ITEM_DISPUTE
     * @uses self::VALUE_BAD_EMAIL_TEMPLATE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEGATIVE_FEEDBACK_RECEIVED,
            self::VALUE_UNPAID_ITEM_DISPUTE,
            self::VALUE_BAD_EMAIL_TEMPLATE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
