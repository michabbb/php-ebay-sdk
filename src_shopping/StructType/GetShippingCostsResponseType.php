<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingCostsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>GetShippingCosts</b> call.
 * @subpackage Structs
 */
class GetShippingCostsResponseType extends AbstractResponseType
{
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of shipping details related to the specified item and specified shipping destination. This container is only returned if the <b>IncludeDetails</b> field is included and set to <code>true</code> in the call
     * request. If the specified shipping destination is a domestic location, one or more <b>ShippingServiceOption</b> containers are returned - one for each available shipping service option. If the specified shipping destination is an international
     * location, one or more <b>InternationalShippingServiceOption</b> containers are returned - one for each available shipping service option. <br> <br> The available domestic and international shipping service options will contain details such as
     * shipping service name, shipping cost, ship-to locations, and estimated delivery window (which is based on the seller's stated handling time plus the expected shipping time of the shipping service).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ShippingCostSummary
     * Meta informations extracted from the WSDL
     * - documentation: This container returns a few details of the lowest-priced shipping service option that is available to the shipping destination specified in the call request. For Calculated shipping, the item's location and the destination location
     * are considered when calculating the shipping cost. <br> <br> <span class="tablenote"> <strong>Important:</strong> To retrieve detailed information on every shipping service option available to the specified shipping destination, the user must include
     * the <b>IncludeDetails</b> boolean field in the call request, and set its value to <code>true</code>. Shipping details on one or more available domestic shipping service options can be found in the <b>ShippingDetails.ShippingServiceOption</b>
     * container(s), and shipping details on one or more available international shipping service options can be found in the <b>ShippingDetails.InternationalShippingServiceOption</b> container(s). </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public $ShippingCostSummary;
    /**
     * The PickUpInStoreDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is only returned in <b>GetShippingCosts</b> if In-Store Pickup is available for the listing. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The In-Store Pickup feature is only available to a limited number
     * of large retail merchants in the US, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType
     */
    public $PickUpInStoreDetails;
    /**
     * Constructor method for GetShippingCostsResponseType
     * @uses GetShippingCostsResponseType::setShippingDetails()
     * @uses GetShippingCostsResponseType::setShippingCostSummary()
     * @uses GetShippingCostsResponseType::setPickUpInStoreDetails()
     * @param \macropage\ebaysdk\shopping\StructType\ShippingDetailsType $shippingDetails
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @param \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType $pickUpInStoreDetails
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\ShippingDetailsType $shippingDetails = null, \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null, \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType $pickUpInStoreDetails = null)
    {
        $this
            ->setShippingDetails($shippingDetails)
            ->setShippingCostSummary($shippingCostSummary)
            ->setPickUpInStoreDetails($pickUpInStoreDetails);
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\shopping\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType
     */
    public function setShippingDetails(\macropage\ebaysdk\shopping\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get ShippingCostSummary value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType|null
     */
    public function getShippingCostSummary()
    {
        return $this->ShippingCostSummary;
    }
    /**
     * Set ShippingCostSummary value
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType
     */
    public function setShippingCostSummary(\macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null)
    {
        $this->ShippingCostSummary = $shippingCostSummary;
        return $this;
    }
    /**
     * Get PickUpInStoreDetails value
     * @return \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType|null
     */
    public function getPickUpInStoreDetails()
    {
        return $this->PickUpInStoreDetails;
    }
    /**
     * Set PickUpInStoreDetails value
     * @param \macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType $pickUpInStoreDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType
     */
    public function setPickUpInStoreDetails(\macropage\ebaysdk\shopping\StructType\PickUpInStoreDetailsType $pickUpInStoreDetails = null)
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
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsResponseType
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
