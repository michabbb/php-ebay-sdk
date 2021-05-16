<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CommentTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type list the Feedback ratings that can be left by one eBay user for another user regarding that user's experience with the another user during the purchase/checkout flow of an order line item.
 * @subpackage Enumerations
 */
class CommentTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Positive'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the submitting user's experience with the other user (receiving feedback) was rated as a "Positive" experience. If an eBay user receives a Positive rating for an order line item from a Verified User, their
     * overall Feedback score increases by a value of 1.
     * @return string 'Positive'
     */
    const VALUE_POSITIVE = 'Positive';
    /**
     * Constant for value 'Neutral'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the submitting user's experience with the other user (receiving feedback) was rated as a "Neutral" experience. If an eBay user receives a Neutral rating for an order line item from a Verified User, their
     * overall Feedback score remains the same.
     * @return string 'Neutral'
     */
    const VALUE_NEUTRAL = 'Neutral';
    /**
     * Constant for value 'Negative'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the submitting user's experience with the other user (receiving feedback) was rated as a "Negative" experience. If an eBay user receives a Negative rating for an order line item from a Verified User, their
     * overall Feedback score decreases by a value of 1.
     * @return string 'Negative'
     */
    const VALUE_NEGATIVE = 'Negative';
    /**
     * Constant for value 'Withdrawn'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a submitted Feedback entry was withdrawn. If a Feedback entry is withdrawn, the effect of that entry on the overall Feedback score is nullified. However, Feedback comments from the withdrawn entry are still
     * visible.
     * @return string 'Withdrawn'
     */
    const VALUE_WITHDRAWN = 'Withdrawn';
    /**
     * Constant for value 'IndependentlyWithdrawn'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a submitted Feedback entry was withdrawn based on the decision of a third-party (such as eBay). If a Feedback entry is withdrawn, the effect of that entry on the overall Feedback score is nullified. <br><br>
     * This value is only applicable to the eBay Motors site only.
     * @return string 'IndependentlyWithdrawn'
     */
    const VALUE_INDEPENDENTLY_WITHDRAWN = 'IndependentlyWithdrawn';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_POSITIVE
     * @uses self::VALUE_NEUTRAL
     * @uses self::VALUE_NEGATIVE
     * @uses self::VALUE_WITHDRAWN
     * @uses self::VALUE_INDEPENDENTLY_WITHDRAWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POSITIVE,
            self::VALUE_NEUTRAL,
            self::VALUE_NEGATIVE,
            self::VALUE_WITHDRAWN,
            self::VALUE_INDEPENDENTLY_WITHDRAWN,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
