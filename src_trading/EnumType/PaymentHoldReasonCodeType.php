<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentHoldReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains all possible reasons why the buyer's payment for the order is being held by PayPal instead of being distributed to the seller's account. A seller's funds for an order can be held by PayPal for as little
 * as three days after the buyer receives the order, but the hold can be up to 21 days based on the scenario, and in some cases, the seller's lack of action in helping to expedite the release of funds.
 * @subpackage Enumerations
 */
class PaymentHoldReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NewSeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because the seller is new to selling on eBay. Sellers are considered "new" until they have met all three criteria below: <ul> <li>More than 90 days
     * have passed since first successful sale</li> <li>More than 25 domestic sales</li> <li>More than $250.00 in total sales</li> </ul>
     * @return string 'NewSeller'
     */
    const VALUE_NEW_SELLER = 'NewSeller';
    /**
     * Constant for value 'BelowStandardSeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because the seller has been classified as a Below Standard seller.
     * @return string 'BelowStandardSeller'
     */
    const VALUE_BELOW_STANDARD_SELLER = 'BelowStandardSeller';
    /**
     * Constant for value 'EbpCaseOpen'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because an eBay Money Back Guarantee case has been filed against the order. If this value is returned, the seller can expedite the release of PayPal
     * funds into their account by resolving the eBay Money Back Guarantee case, as indicated by a value of 'ResolveeBPCase' returned in a <b>PaymentHoldDetails.RequiredSellerActionArray.RequiredSellerAction</b> field.
     * @return string 'EbpCaseOpen'
     */
    const VALUE_EBP_CASE_OPEN = 'EbpCaseOpen';
    /**
     * Constant for value 'ReinstatementAfterSuspension'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because the seller has recently been reinstated as an active eBay seller after their account went through a suspension/restricted period. <br/><br/>
     * After a seller's account is suspended and then reinstated, that seller is treated as a new seller, and must meet the same requirements that a new seller must meet to get beyong the "New Seller" status.
     * @return string 'ReinstatementAfterSuspension'
     */
    const VALUE_REINSTATEMENT_AFTER_SUSPENSION = 'ReinstatementAfterSuspension';
    /**
     * Constant for value 'CasualSeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because the seller is classified as a casual seller on eBay.
     * @return string 'CasualSeller'
     */
    const VALUE_CASUAL_SELLER = 'CasualSeller';
    /**
     * Constant for value 'NewPaypalAccountAdded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order is being held by PayPal because the seller's PayPal account (identified in <b>Transaction.PayPalEmailAddress</b>) is new and is not fully set up to receive funds.
     * @return string 'NewPaypalAccountAdded'
     */
    const VALUE_NEW_PAYPAL_ACCOUNT_ADDED = 'NewPaypalAccountAdded';
    /**
     * Constant for value 'NotAvailable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the reason for the buyer's payment for the order being held by PayPal is not known.
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'SellerIsOnBlackList'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'SellerIsOnBlackList'
     */
    const VALUE_SELLER_IS_ON_BLACK_LIST = 'SellerIsOnBlackList';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This value is returned if the reason for the buyer's payment for the order being held by PayPal cannot be classified by any of the other enumeration values.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
