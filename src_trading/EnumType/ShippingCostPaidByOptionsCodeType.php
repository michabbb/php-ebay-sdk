<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShippingCostPaidByOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the values that specify the party (seller/buyer) who will be responsible for paying the return shipping cost if an item is returned. One of these values is set by the seller when establishing/setting a
 * return policy for an item. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the
 * same, but there a few exceptions. To discover what return shipping 'payee' values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsShipmentPayeeValues</code> and/or
 * <code>InternationalReturnsShipmentPayeeValues</code> as <b>FeatureID</b> values to see the return shipping 'payee' values available for domestic and international returns, respectively. </span>
 * @subpackage Enumerations
 */
class ShippingCostPaidByOptionsCodeType
{
    /**
     * Constant for value 'Buyer'
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'EUSeller_ReturnRights'
     * @return string 'EUSeller_ReturnRights'
     */
    const VALUE_EUSELLER_RETURN_RIGHTS = 'EUSeller_ReturnRights';
    /**
     * Constant for value 'EUSeller_CancelRights'
     * @return string 'EUSeller_CancelRights'
     */
    const VALUE_EUSELLER_CANCEL_RIGHTS = 'EUSeller_CancelRights';
    /**
     * Constant for value 'EUBuyer_CancelRightsUnder40'
     * @return string 'EUBuyer_CancelRightsUnder40'
     */
    const VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40 = 'EUBuyer_CancelRightsUnder40';
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
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_EUSELLER_RETURN_RIGHTS
     * @uses self::VALUE_EUSELLER_CANCEL_RIGHTS
     * @uses self::VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER,
            self::VALUE_SELLER,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_EUSELLER_RETURN_RIGHTS,
            self::VALUE_EUSELLER_CANCEL_RIGHTS,
            self::VALUE_EUBUYER_CANCEL_RIGHTS_UNDER_40,
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
