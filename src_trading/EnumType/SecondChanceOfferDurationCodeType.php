<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SecondChanceOfferDurationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the length of time that a Second Chance Offer or a Transaction Confirmation Request will be available to a specific recipient to whom the Second
 * Chance Offer or Transaction Confirmation Request was presented. The recipient must purchase the Second Chance or Transaction Confirmation Request item within this time or the offer will expire. Second Chance Offers are only applicable for closed
 * auction listings and Transaction Confirmation Requests are only applicable for an eBay Motors listing that were closed and converted to a Transaction Confirmation Request.
 * @subpackage Enumerations
 */
class SecondChanceOfferDurationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Days_1'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to make the Second Chance offer available to the bidder for one day. This value will affect the <b>EndTime</b> value returned in the <b>AddSecondChanceItem</b> or <b>AddTransactionConfirmationItem</b>
     * responses.
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to make the Second Chance offer available to the bidder for three days. This value will affect the <b>EndTime</b> value returned in the <b>AddSecondChanceItem</b> or
     * <b>AddTransactionConfirmationItem</b> responses.
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_5'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to make the Second Chance offer available to the bidder for five days. This value will affect the <b>AddSecondChanceItem</b> or <b>AddTransactionConfirmationItem</b> responses.
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: The seller specifies this value to make the Second Chance offer available to the bidder for seven days. This value will affect the <b>EndTime</b> value returned in the <b>AddSecondChanceItem</b> or
     * <b>AddTransactionConfirmationItem</b> responses.
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
