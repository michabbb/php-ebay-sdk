<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RequiredSellerActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the list of possible actions that a seller can take to expedite the release of funds for an order into their account.
 * @subpackage Enumerations
 */
class RequiredSellerActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ResolveeBPCase'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that there is an open eBay Money Back Guarantee case involving the seller and the order. The seller must address and get the case resolved before the funds can be scheduled for release to the seller's account.
     * @return string 'ResolveeBPCase'
     */
    const VALUE_RESOLVEE_BPCASE = 'ResolveeBPCase';
    /**
     * Constant for value 'MarkAsShipped'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller must mark the order line item as shipped to expedite the release of funds into their account. The seller can use the <b>CompleteSale</b> call or My eBay to mark an item as shipped.
     * @return string 'MarkAsShipped'
     */
    const VALUE_MARK_AS_SHIPPED = 'MarkAsShipped';
    /**
     * Constant for value 'ContacteBayCS'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller should contact eBay Customer Support to discover the next required action to expedite the release of funds into their account.
     * @return string 'ContacteBayCS'
     */
    const VALUE_CONTACTE_BAY_CS = 'ContacteBayCS';
    /**
     * Constant for value 'ResolvePPPIcase'
     * Meta information extracted from the WSDL
     * - documentation: This value should no longer get returned as eBay buyers no longer have the option of creating Item not Received (INR) or Significantly not as Described (SNAD) disputes through PayPal's system.
     * @return string 'ResolvePPPIcase'
     */
    const VALUE_RESOLVE_PPPICASE = 'ResolvePPPIcase';
    /**
     * Constant for value 'SetupPayoutMethod'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer used.
     * @return string 'SetupPayoutMethod'
     */
    const VALUE_SETUP_PAYOUT_METHOD = 'SetupPayoutMethod';
    /**
     * Constant for value 'UpdatePayoutMethod'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer used.
     * @return string 'UpdatePayoutMethod'
     */
    const VALUE_UPDATE_PAYOUT_METHOD = 'UpdatePayoutMethod';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer used.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'UploadTrackingInfo'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller must provide shipment tracking information for the order line item to expedite the release of funds into their account. The seller can use the <b>CompleteSale</b> call to provide tracking
     * information for an order line item.
     * @return string 'UploadTrackingInfo'
     */
    const VALUE_UPLOAD_TRACKING_INFO = 'UploadTrackingInfo';
    /**
     * Constant for value 'ResolveBuyerMessageInr'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not received the order, and the buyer has contacted the seller through the eBay system in an effort to resolve the issue with the seller. The seller must make it right with the buyer in order
     * to expedite the release of funds into their account.
     * @return string 'ResolveBuyerMessageInr'
     */
    const VALUE_RESOLVE_BUYER_MESSAGE_INR = 'ResolveBuyerMessageInr';
    /**
     * Constant for value 'ResolveBuyerMessageSnad'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has received the order, but the item is not as described in the listing; hence, the buyer has contacted the seller through the eBay system in an effort to resolve the issue with the seller. The
     * seller must make it right with the buyer in order to expedite the release of funds into their account.
     * @return string 'ResolveBuyerMessageSnad'
     */
    const VALUE_RESOLVE_BUYER_MESSAGE_SNAD = 'ResolveBuyerMessageSnad';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ResolveReturn'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer is returning the item through eBay's return process. Upon receiving the returned item from the buyer, the seller must issue a refund to the buyer within five business days, and shortly after this
     * happens, eBay will credit the seller's account with the Final Value Fee that was originally assessed on the sale of the item.
     * @return string 'ResolveReturn'
     */
    const VALUE_RESOLVE_RETURN = 'ResolveReturn';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
