<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QuestionTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type used by the member messaging calls to indicate the type of question that was asked.
 * @subpackage Enumerations
 */
class QuestionTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'General'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a general question was asked about the order line item.
     * @return string 'General'
     */
    const VALUE_GENERAL = 'General';
    /**
     * Constant for value 'Shipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a question about shipping the order line item was asked.
     * @return string 'Shipping'
     */
    const VALUE_SHIPPING = 'Shipping';
    /**
     * Constant for value 'Payment'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a payment question was asked about the order line item.
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
    /**
     * Constant for value 'MultipleItemShipping'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a question was asked about a shipment that involves multiple packages.
     * @return string 'MultipleItemShipping'
     */
    const VALUE_MULTIPLE_ITEM_SHIPPING = 'MultipleItemShipping';
    /**
     * Constant for value 'CustomizedSubject'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that question was asked about a customized subject.
     * @return string 'CustomizedSubject'
     */
    const VALUE_CUSTOMIZED_SUBJECT = 'CustomizedSubject';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that question does not have a subject.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_GENERAL
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_PAYMENT
     * @uses self::VALUE_MULTIPLE_ITEM_SHIPPING
     * @uses self::VALUE_CUSTOMIZED_SUBJECT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GENERAL,
            self::VALUE_SHIPPING,
            self::VALUE_PAYMENT,
            self::VALUE_MULTIPLE_ITEM_SHIPPING,
            self::VALUE_CUSTOMIZED_SUBJECT,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
