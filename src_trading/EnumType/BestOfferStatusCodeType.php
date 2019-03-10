<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BestOfferStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values for the status of a Best Offer or a buyer's/seller's counter offer.
 * @subpackage Enumerations
 */
class BestOfferStatusCodeType
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Accepted'
     * @return string 'Accepted'
     */
    const VALUE_ACCEPTED = 'Accepted';
    /**
     * Constant for value 'Declined'
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Expired'
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Constant for value 'Retracted'
     * @return string 'Retracted'
     */
    const VALUE_RETRACTED = 'Retracted';
    /**
     * Constant for value 'AdminEnded'
     * @return string 'AdminEnded'
     */
    const VALUE_ADMIN_ENDED = 'AdminEnded';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Countered'
     * @return string 'Countered'
     */
    const VALUE_COUNTERED = 'Countered';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'PendingBuyerPayment'
     * @return string 'PendingBuyerPayment'
     */
    const VALUE_PENDING_BUYER_PAYMENT = 'PendingBuyerPayment';
    /**
     * Constant for value 'PendingBuyerConfirmation'
     * @return string 'PendingBuyerConfirmation'
     */
    const VALUE_PENDING_BUYER_CONFIRMATION = 'PendingBuyerConfirmation';
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
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_RETRACTED
     * @uses self::VALUE_ADMIN_ENDED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_COUNTERED
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PENDING_BUYER_PAYMENT
     * @uses self::VALUE_PENDING_BUYER_CONFIRMATION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_ACCEPTED,
            self::VALUE_DECLINED,
            self::VALUE_EXPIRED,
            self::VALUE_RETRACTED,
            self::VALUE_ADMIN_ENDED,
            self::VALUE_ACTIVE,
            self::VALUE_COUNTERED,
            self::VALUE_ALL,
            self::VALUE_PENDING_BUYER_PAYMENT,
            self::VALUE_PENDING_BUYER_CONFIRMATION,
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
