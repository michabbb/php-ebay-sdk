<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AutomatedLeaveFeedbackEventCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible settings for the automated feedback mechanism embedded in the <b>SetSellingManagerFeedbackOptions</b> API call. This type is only applicable to Selling Manager Pro users.
 * @subpackage Enumerations
 */
class AutomatedLeaveFeedbackEventCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PositiveFeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the automated feedback mechanism will automatically leave feedback for the buyer once that buyer leaves positive feedback for the seller.
     * @return string 'PositiveFeedbackReceived'
     */
    const VALUE_POSITIVE_FEEDBACK_RECEIVED = 'PositiveFeedbackReceived';
    /**
     * Constant for value 'PaymentReceived'
     * Meta information extracted from the WSDL
     * - documentation: If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the automated feedback mechanism will automatically leave feedback for the buyer once that buyer pays for the line item.
     * @return string 'PaymentReceived'
     */
    const VALUE_PAYMENT_RECEIVED = 'PaymentReceived';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the automated feedback mechanism will essentially be turned off. Automated feedback will not occur.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_POSITIVE_FEEDBACK_RECEIVED
     * @uses self::VALUE_PAYMENT_RECEIVED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POSITIVE_FEEDBACK_RECEIVED,
            self::VALUE_PAYMENT_RECEIVED,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
