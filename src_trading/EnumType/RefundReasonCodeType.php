<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable. </span>
 * @subpackage Enumerations
 */
class RefundReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CannotShipProduct'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> Seller is unable to ship the product to the buyer.
     * @return string 'CannotShipProduct'
     */
    const VALUE_CANNOT_SHIP_PRODUCT = 'CannotShipProduct';
    /**
     * Constant for value 'WrongItemShipped'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> Seller shipped the wrong item to the buyer.
     * @return string 'WrongItemShipped'
     */
    const VALUE_WRONG_ITEM_SHIPPED = 'WrongItemShipped';
    /**
     * Constant for value 'ItemBadQuality'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The buyer returned the item due to its quality.
     * @return string 'ItemBadQuality'
     */
    const VALUE_ITEM_BAD_QUALITY = 'ItemBadQuality';
    /**
     * Constant for value 'ItemDamaged'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The buyer returned the item due to damage.
     * @return string 'ItemDamaged'
     */
    const VALUE_ITEM_DAMAGED = 'ItemDamaged';
    /**
     * Constant for value 'BuyerRemorse'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The buyer decided they did not want the item.
     * @return string 'BuyerRemorse'
     */
    const VALUE_BUYER_REMORSE = 'BuyerRemorse';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> The seller has another reason for issuing a Half.com refund.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its values are no longer applicable since the Half.com site has been shut down. </span> (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CANNOT_SHIP_PRODUCT
     * @uses self::VALUE_WRONG_ITEM_SHIPPED
     * @uses self::VALUE_ITEM_BAD_QUALITY
     * @uses self::VALUE_ITEM_DAMAGED
     * @uses self::VALUE_BUYER_REMORSE
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CANNOT_SHIP_PRODUCT,
            self::VALUE_WRONG_ITEM_SHIPPED,
            self::VALUE_ITEM_BAD_QUALITY,
            self::VALUE_ITEM_DAMAGED,
            self::VALUE_BUYER_REMORSE,
            self::VALUE_OTHER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
