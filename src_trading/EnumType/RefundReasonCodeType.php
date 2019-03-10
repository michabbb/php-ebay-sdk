<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RefundReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated. </span> Explanation of the reason that the refund is being
 * issued. Applicable to Half.com refunds only.
 * @subpackage Enumerations
 */
class RefundReasonCodeType
{
    /**
     * Constant for value 'CannotShipProduct'
     * @return string 'CannotShipProduct'
     */
    const VALUE_CANNOT_SHIP_PRODUCT = 'CannotShipProduct';
    /**
     * Constant for value 'WrongItemShipped'
     * @return string 'WrongItemShipped'
     */
    const VALUE_WRONG_ITEM_SHIPPED = 'WrongItemShipped';
    /**
     * Constant for value 'ItemBadQuality'
     * @return string 'ItemBadQuality'
     */
    const VALUE_ITEM_BAD_QUALITY = 'ItemBadQuality';
    /**
     * Constant for value 'ItemDamaged'
     * @return string 'ItemDamaged'
     */
    const VALUE_ITEM_DAMAGED = 'ItemDamaged';
    /**
     * Constant for value 'BuyerRemorse'
     * @return string 'BuyerRemorse'
     */
    const VALUE_BUYER_REMORSE = 'BuyerRemorse';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANNOT_SHIP_PRODUCT,
            self::VALUE_WRONG_ITEM_SHIPPED,
            self::VALUE_ITEM_BAD_QUALITY,
            self::VALUE_ITEM_DAMAGED,
            self::VALUE_BUYER_REMORSE,
            self::VALUE_OTHER,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
