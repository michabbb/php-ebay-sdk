<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaymentHoldReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains all possible reasons why the buyer's payment for the order is being held by PayPal instead of being distributed to the seller's account. A seller's funds for an order can be held by PayPal for as little
 * as three days after the buyer receives the order, but the hold can be up to 21 days based on the scenario, and in some cases, the seller's lack of action in helping to expedite the release of funds.
 * @subpackage Enumerations
 */
class PaymentHoldReasonCodeType
{
    /**
     * Constant for value 'NewSeller'
     * @return string 'NewSeller'
     */
    const VALUE_NEW_SELLER = 'NewSeller';
    /**
     * Constant for value 'BelowStandardSeller'
     * @return string 'BelowStandardSeller'
     */
    const VALUE_BELOW_STANDARD_SELLER = 'BelowStandardSeller';
    /**
     * Constant for value 'EbpCaseOpen'
     * @return string 'EbpCaseOpen'
     */
    const VALUE_EBP_CASE_OPEN = 'EbpCaseOpen';
    /**
     * Constant for value 'ReinstatementAfterSuspension'
     * @return string 'ReinstatementAfterSuspension'
     */
    const VALUE_REINSTATEMENT_AFTER_SUSPENSION = 'ReinstatementAfterSuspension';
    /**
     * Constant for value 'CasualSeller'
     * @return string 'CasualSeller'
     */
    const VALUE_CASUAL_SELLER = 'CasualSeller';
    /**
     * Constant for value 'NewPaypalAccountAdded'
     * @return string 'NewPaypalAccountAdded'
     */
    const VALUE_NEW_PAYPAL_ACCOUNT_ADDED = 'NewPaypalAccountAdded';
    /**
     * Constant for value 'NotAvailable'
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'SellerIsOnBlackList'
     * @return string 'SellerIsOnBlackList'
     */
    const VALUE_SELLER_IS_ON_BLACK_LIST = 'SellerIsOnBlackList';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_NEW_SELLER
     * @uses self::VALUE_BELOW_STANDARD_SELLER
     * @uses self::VALUE_EBP_CASE_OPEN
     * @uses self::VALUE_REINSTATEMENT_AFTER_SUSPENSION
     * @uses self::VALUE_CASUAL_SELLER
     * @uses self::VALUE_NEW_PAYPAL_ACCOUNT_ADDED
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_SELLER_IS_ON_BLACK_LIST
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW_SELLER,
            self::VALUE_BELOW_STANDARD_SELLER,
            self::VALUE_EBP_CASE_OPEN,
            self::VALUE_REINSTATEMENT_AFTER_SUSPENSION,
            self::VALUE_CASUAL_SELLER,
            self::VALUE_NEW_PAYPAL_ACCOUNT_ADDED,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_SELLER_IS_ON_BLACK_LIST,
            self::VALUE_OTHER,
            self::VALUE_NONE,
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
