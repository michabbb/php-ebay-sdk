<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RequiredSellerActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the list of possible actions that a seller can take to expedite the release of funds for an order into their account.
 * @subpackage Enumerations
 */
class RequiredSellerActionCodeType
{
    /**
     * Constant for value 'ResolveeBPCase'
     * @return string 'ResolveeBPCase'
     */
    const VALUE_RESOLVEE_BPCASE = 'ResolveeBPCase';
    /**
     * Constant for value 'MarkAsShipped'
     * @return string 'MarkAsShipped'
     */
    const VALUE_MARK_AS_SHIPPED = 'MarkAsShipped';
    /**
     * Constant for value 'ContacteBayCS'
     * @return string 'ContacteBayCS'
     */
    const VALUE_CONTACTE_BAY_CS = 'ContacteBayCS';
    /**
     * Constant for value 'ResolvePPPIcase'
     * @return string 'ResolvePPPIcase'
     */
    const VALUE_RESOLVE_PPPICASE = 'ResolvePPPIcase';
    /**
     * Constant for value 'SetupPayoutMethod'
     * @return string 'SetupPayoutMethod'
     */
    const VALUE_SETUP_PAYOUT_METHOD = 'SetupPayoutMethod';
    /**
     * Constant for value 'UpdatePayoutMethod'
     * @return string 'UpdatePayoutMethod'
     */
    const VALUE_UPDATE_PAYOUT_METHOD = 'UpdatePayoutMethod';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'UploadTrackingInfo'
     * @return string 'UploadTrackingInfo'
     */
    const VALUE_UPLOAD_TRACKING_INFO = 'UploadTrackingInfo';
    /**
     * Constant for value 'ResolveBuyerMessageInr'
     * @return string 'ResolveBuyerMessageInr'
     */
    const VALUE_RESOLVE_BUYER_MESSAGE_INR = 'ResolveBuyerMessageInr';
    /**
     * Constant for value 'ResolveBuyerMessageSnad'
     * @return string 'ResolveBuyerMessageSnad'
     */
    const VALUE_RESOLVE_BUYER_MESSAGE_SNAD = 'ResolveBuyerMessageSnad';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ResolveReturn'
     * @return string 'ResolveReturn'
     */
    const VALUE_RESOLVE_RETURN = 'ResolveReturn';
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
     * @uses self::VALUE_RESOLVEE_BPCASE
     * @uses self::VALUE_MARK_AS_SHIPPED
     * @uses self::VALUE_CONTACTE_BAY_CS
     * @uses self::VALUE_RESOLVE_PPPICASE
     * @uses self::VALUE_SETUP_PAYOUT_METHOD
     * @uses self::VALUE_UPDATE_PAYOUT_METHOD
     * @uses self::VALUE_NONE
     * @uses self::VALUE_UPLOAD_TRACKING_INFO
     * @uses self::VALUE_RESOLVE_BUYER_MESSAGE_INR
     * @uses self::VALUE_RESOLVE_BUYER_MESSAGE_SNAD
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_RESOLVE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RESOLVEE_BPCASE,
            self::VALUE_MARK_AS_SHIPPED,
            self::VALUE_CONTACTE_BAY_CS,
            self::VALUE_RESOLVE_PPPICASE,
            self::VALUE_SETUP_PAYOUT_METHOD,
            self::VALUE_UPDATE_PAYOUT_METHOD,
            self::VALUE_NONE,
            self::VALUE_UPLOAD_TRACKING_INFO,
            self::VALUE_RESOLVE_BUYER_MESSAGE_INR,
            self::VALUE_RESOLVE_BUYER_MESSAGE_SNAD,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_RESOLVE_RETURN,
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
