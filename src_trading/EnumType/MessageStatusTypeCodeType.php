<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MessageStatusTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used to indicate whether or not a question has been answered.
 * @subpackage Enumerations
 */
class MessageStatusTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Answered'
     * Meta information extracted from the WSDL
     * - documentation: The question has been answered at least once.
     * @return string 'Answered'
     */
    const VALUE_ANSWERED = 'Answered';
    /**
     * Constant for value 'Unanswered'
     * Meta information extracted from the WSDL
     * - documentation: The question has not yet been answered.
     * @return string 'Unanswered'
     */
    const VALUE_UNANSWERED = 'Unanswered';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ANSWERED
     * @uses self::VALUE_UNANSWERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ANSWERED,
            self::VALUE_UNANSWERED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
