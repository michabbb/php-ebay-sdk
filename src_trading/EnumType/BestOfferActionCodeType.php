<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BestOfferActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values that can be passed in to the <b>Action</b> field in a <b>RespondToBestOffer</b> request.
 * @subpackage Enumerations
 */
class BestOfferActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Accept'
     * Meta information extracted from the WSDL
     * - documentation: This value should be passed in to the <b>Action</b> field to accept the Best Offer identified in the <b>BestOfferID</b> field. Note that only one Best Offer may be accepted in a single <b>RespondToBestOffer</b> call.
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Decline'
     * Meta information extracted from the WSDL
     * - documentation: This value should be passed in to the <b>Action</b> field to decline one or more Best Offers identified by one or more <b>BestOfferID</b> fields. Note that multiple Best Offers may be declined in a single <b>RespondToBestOffer</b>
     * call.
     * @return string 'Decline'
     */
    const VALUE_DECLINE = 'Decline';
    /**
     * Constant for value 'Counter'
     * Meta information extracted from the WSDL
     * - documentation: This value should be passed in to the <b>Action</b> field to counter a buyer's Best Offer or Counter Offer. Note that a seller may only counter one Best Offer in a single <b>RespondToBestOffer</b> call. If a seller is using the
     * <b>RespondToBestOffer</b> call to counter a Best Offer, the counter offer price must be specified in the <b>CounterOfferPrice</b> field, and the quantity of items in the Best Offer must be specified in the <b>CounterOfferQuantity</b> field.
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DECLINE
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACCEPT,
            self::VALUE_DECLINE,
            self::VALUE_COUNTER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
