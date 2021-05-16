<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemArrivedWithinEDDCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type list the possible status values regarding whether or not a buyer received an order line item within the estimated delivery date timeframe.
 * @subpackage Enumerations
 */
class ItemArrivedWithinEDDCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EddQuestionWasNotAsked'
     * Meta information extracted from the WSDL
     * - documentation: <b>This value is for internal use only.<b>
     * @return string 'EddQuestionWasNotAsked'
     */
    const VALUE_EDD_QUESTION_WAS_NOT_ASKED = 'EddQuestionWasNotAsked';
    /**
     * Constant for value 'BuyerDidntProvideAnswer'
     * Meta information extracted from the WSDL
     * - documentation: <b>This value is for internal use only.<b>
     * @return string 'BuyerDidntProvideAnswer'
     */
    const VALUE_BUYER_DIDNT_PROVIDE_ANSWER = 'BuyerDidntProvideAnswer';
    /**
     * Constant for value 'BuyerIndicatedItemArrivedWithinEDDRange'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer indicated that the order line item did arrive within the estimated delivery date when they left feedback for the transaction.
     * @return string 'BuyerIndicatedItemArrivedWithinEDDRange'
     */
    const VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemArrivedWithinEDDRange';
    /**
     * Constant for value 'BuyerIndicatedItemNotArrivedWithinEDDRange'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer indicated that the order line item did not arrive within the estimated delivery date when they left feedback for the transaction.
     * @return string 'BuyerIndicatedItemNotArrivedWithinEDDRange'
     */
    const VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemNotArrivedWithinEDDRange';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EDD_QUESTION_WAS_NOT_ASKED
     * @uses self::VALUE_BUYER_DIDNT_PROVIDE_ANSWER
     * @uses self::VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE
     * @uses self::VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EDD_QUESTION_WAS_NOT_ASKED,
            self::VALUE_BUYER_DIDNT_PROVIDE_ANSWER,
            self::VALUE_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE,
            self::VALUE_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
