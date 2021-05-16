<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackResponseCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate the type of response to a Feedback entry.
 * @subpackage Enumerations
 */
class FeedbackResponseCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Reply'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used in the <b>ResponseType</b> field of a <b>RespondToFeedback</b> call if the user is replying to a Feedback entry left by another user.
     * @return string 'Reply'
     */
    const VALUE_REPLY = 'Reply';
    /**
     * Constant for value 'FollowUp'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used in the <b>ResponseType</b> field of a <b>RespondToFeedback</b> call if the user is following up on a Feedback entry comment left by another user.
     * @return string 'FollowUp'
     */
    const VALUE_FOLLOW_UP = 'FollowUp';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_REPLY
     * @uses self::VALUE_FOLLOW_UP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REPLY,
            self::VALUE_FOLLOW_UP,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
