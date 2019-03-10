<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemShippingResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller
 * has offered with the listing. This call will also return <b>PickUpInStoreDetails.EligibleForPickupDropOff</b> and <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flags if the item is available for buyer pick-up through the In-Store Pickup or
 * Click and Collect features.
 * @subpackage Structs
 */
class GetItemShippingResponseType extends AbstractResponseType
{
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container will be returned if at least one domestic or international shipping service option is available for the item. A <b>ShippingServiceOptions</b> (for domestic shipping) and/or an <b>InternationalShippingServiceOptions</b>
     * container (for international shipping) is returned for each available calculated shipping service option. These shipping service option containers consists of estimated shipping cost and estimated shipping times. <br> <br> Any error about shipping
     * services (returned by a vendor of eBay's who calculates shipping costs) is returned in <b>ShippingRateErrorMessage</b>. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the
     * selected shipping method not supported by a particular shipping service.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The PickUpInStoreDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned in <b>GetItemShipping</b> if In-Store Pickup or Click and Collect is enabled for the listing. <br/><br/> In a future release, a fulfillment duration element will be added to this container and will be used
     * to determine when the item will be ready for pickup in a store (immediately, two hours after sale, two days after sale, etc.). <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features
     * are generally only available to large retail merchants in the US, and can only be applied to multiple-quantity, fixed-price listings. In-Store Pickup is only available in the US, and Click and Collect is only available on eBay UK, Australia, and
     * Germany sites. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
     */
    public $PickUpInStoreDetails;
    /**
     * Constructor method for GetItemShippingResponseType
     * @uses GetItemShippingResponseType::setShippingDetails()
     * @uses GetItemShippingResponseType::setPickUpInStoreDetails()
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @param \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickUpInStoreDetails
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickUpInStoreDetails = null)
    {
        $this
            ->setShippingDetails($shippingDetails)
            ->setPickUpInStoreDetails($pickUpInStoreDetails);
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingResponseType
     */
    public function setShippingDetails(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get PickUpInStoreDetails value
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType|null
     */
    public function getPickUpInStoreDetails()
    {
        return $this->PickUpInStoreDetails;
    }
    /**
     * Set PickUpInStoreDetails value
     * @param \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickUpInStoreDetails
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingResponseType
     */
    public function setPickUpInStoreDetails(\macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickUpInStoreDetails = null)
    {
        $this->PickUpInStoreDetails = $pickUpInStoreDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
