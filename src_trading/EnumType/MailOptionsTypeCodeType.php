<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MailOptionsTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MailOptionsTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DoNotSendEmail'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'DoNotSendEmail'
     */
    const VALUE_DO_NOT_SEND_EMAIL = 'DoNotSendEmail';
    /**
     * Constant for value 'EmailCopyToSender'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'EmailCopyToSender'
     */
    const VALUE_EMAIL_COPY_TO_SENDER = 'EmailCopyToSender';
    /**
     * Constant for value 'HideSenderEmailAddress'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'HideSenderEmailAddress'
     */
    const VALUE_HIDE_SENDER_EMAIL_ADDRESS = 'HideSenderEmailAddress';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DO_NOT_SEND_EMAIL
     * @uses self::VALUE_EMAIL_COPY_TO_SENDER
     * @uses self::VALUE_HIDE_SENDER_EMAIL_ADDRESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DO_NOT_SEND_EMAIL,
            self::VALUE_EMAIL_COPY_TO_SENDER,
            self::VALUE_HIDE_SENDER_EMAIL_ADDRESS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
