<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingCostPaidByOptionsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the values that specify the party (seller/buyer) who will be responsible for paying the return shipping cost if an item is returned. One of these values is set by the seller when establishing/setting a
 * return policy for an item. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the
 * same, but there a few exceptions. To discover what return shipping 'payee' values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsShipmentPayeeValues</code> and/or
 * <code>InternationalReturnsShipmentPayeeValues</code> as <b>FeatureID</b> values to see the return shipping 'payee' values available for domestic and international returns, respectively. </span>
 * @subpackage Enumerations
 */
class ShippingCostPaidByOptionsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer is responsible for paying the return shipping cost. Note that the buyer will not be responsible for return shipping cost if the the buyer's reason for the return is related to the received item not
     * being as described in the listing, or if the item has arrived damaged or with missing parts.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller is responsible for paying the return shipping cost.
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'EUSeller_ReturnRights'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'EUSeller_ReturnRights'
     */
    const VALUE_EUSELLER_RETURN_RIGHTS = 'EUSeller_ReturnRights';
    /**
     * Constant for value 'EUSeller_CancelRights'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'EUSeller_CancelRights'
     */
    const VALUE_EUSELLER_CANCEL_RIGHTS = 'EUSeller_CancelRights';
    /**
     * Constant for value 'EUBuyer_CancelRightsUnder40'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'EUBuyer_CancelRightsUnder40'
     */
    const VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40 = 'EUBuyer_CancelRightsUnder40';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_EUSELLER_RETURN_RIGHTS
     * @uses self::VALUE_EUSELLER_CANCEL_RIGHTS
     * @uses self::VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUYER,
            self::VALUE_SELLER,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_EUSELLER_RETURN_RIGHTS,
            self::VALUE_EUSELLER_CANCEL_RIGHTS,
            self::VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40,
        ];
    }
}
