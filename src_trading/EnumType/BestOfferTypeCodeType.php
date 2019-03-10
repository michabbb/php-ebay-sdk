<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BestOfferTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible offer types for the Best Offer feature.
 * @subpackage Enumerations
 */
class BestOfferTypeCodeType
{
    /**
     * Constant for value 'BuyerBestOffer'
     * @return string 'BuyerBestOffer'
     */
    const VALUE_BUYER_BEST_OFFER = 'BuyerBestOffer';
    /**
     * Constant for value 'BuyerCounterOffer'
     * @return string 'BuyerCounterOffer'
     */
    const VALUE_BUYER_COUNTER_OFFER = 'BuyerCounterOffer';
    /**
     * Constant for value 'SellerCounterOffer'
     * @return string 'SellerCounterOffer'
     */
    const VALUE_SELLER_COUNTER_OFFER = 'SellerCounterOffer';
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
     * @uses self::VALUE_BUYER_BEST_OFFER
     * @uses self::VALUE_BUYER_COUNTER_OFFER
     * @uses self::VALUE_SELLER_COUNTER_OFFER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER_BEST_OFFER,
            self::VALUE_BUYER_COUNTER_OFFER,
            self::VALUE_SELLER_COUNTER_OFFER,
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
