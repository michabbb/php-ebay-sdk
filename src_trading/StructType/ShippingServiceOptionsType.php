<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceOptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to a domestic shipping service. An exception to the domestic shipping service rule is seen in the <b>ShippingServiceSelected</b> container returned under the
 * <b>Order</b> and <b>Transaction</b> containers in order and order line item retrieval calls such as <b>GetOrders</b> or <b>GetItemTransactions</b>. In this scenario, the <b>SelectedShippingService</b> container consists of either domestic or
 * international shipping service data, based on the selected service according to the buyer's shipping address. <br/><br/> If one or more international shipping services are provided, the seller must specify at least one domestic shipping service as
 * well. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For <b>GetItemTransactions</b> and <b>GetSellerTransactions</b>, this container does not return accurate shipping service and cost information for multiple line item orders. Use
 * <b>GetOrders</b> instead, and provide the order's combined <strong>OrderID</strong> to retrieve this information. </span>
 * @subpackage Structs
 */
class ShippingServiceOptionsType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: The insurance cost associated with shipping a single item with this shipping service. <br/><br/> <b>Exception</b>: For <b>GetItemShipping</b>, this is proportional to <b>QuantitySold</b>. If the item has not yet been sold, insurance
     * information cannot be calculated and the value is 0.00. For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The ShippingService
     * Meta informations extracted from the WSDL
     * - documentation: A shipping service option being offered by the seller to ship an item to a buyer. For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     * <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br><br> To view the full list of domestic shipping
     * service options in the response, look for the <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the
     * <b>ShippingService</b> value is an International shipping service option. <br><br> For flat and calculated shipping. <br><br> If there are two or more services and one is "pickup", "pickup" must not be specified as the first service.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: The base cost of shipping the item using the shipping service specified in the <b>ShippingService</b> field. In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field shows the cost to
     * ship each additional item if the buyer purchases multiple quantity of the same line item. <br> <br> When returned by <b>GetItemShipping</b>, it includes the packaging and handling cost. For flat and calculated shipping. <br> <br> If a shipping
     * service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns the shipping service cost, even if the cost is zero. Otherwise, cost is not returned. <br> <br> If this is for calculated shipping for a listing that has not yet ended, note
     * that the cost cannot be determined until the listing has ended and the buyer has specified a postal code. <br> <br> For <b>GetItemShipping</b>, promotional shipping savings is reflected in the cost, if applicable. <b></b> <ul> <li>If the promotional
     * shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost. The shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the
     * shipping services.</li> <li>If the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list. (The LOWEST shipping service cost is always presented first, regardless of whether there
     * is promotional shipping.) </li> </ul>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a
     * shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> if the seller wants
     * to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not
     * applicable for single-quantity listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingServicePriority
     * Meta informations extracted from the WSDL
     * - documentation: Controls the order (relative to other shipping services) in which the corresponding <b>ShippingService</b> will appear in the View Item and Checkout page. <br/><br/> Sellers can specify up to four domestic shipping services (with
     * four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top. Conversely, a shipping service with a <b>ShippingServicePriority</b> value of
     * 4 appears at the bottom of a list of four shipping service options. <br><br> This field is applicable to Flat and Calculated shipping.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ExpeditedService
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the service is an expedited shipping service.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpeditedService;
    /**
     * The ShippingTimeMin
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This minimum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This maximum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The ShippingSurcharge
     * Meta informations extracted from the WSDL
     * - documentation: An additional fee to charge US buyers who have the item shipped via UPS or FedEx to Alaska, Hawaii or Puerto Rico. Can only be assigned a value for the eBay US site and for items in the Parts and Accessories category of the eBay
     * Motors site. Only returned if set. If some line items in an order have a surcharge, surcharge is added only for those line items. Flat rate shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingSurcharge;
    /**
     * The FreeShipping
     * Meta informations extracted from the WSDL
     * - documentation: Specifies that the seller wants to offer free shipping. This applies only to the first specified domestic shipping service and is ignored if set for any other shipping service. <br/><br/> If the seller specifies <b>FreeShipping</b>
     * but requires shipping insurance (<b>InsuranceOption</b> = <code>Require</code>), eBay sets the insurance cost to 0.00. However, if shipping insurance is optional and the buyer chooses shipping insurance, eBay preserves the cost of shipping insurance.
     * It is up to the buyer whether to buy shipping insurance, regardless of whether the seller specified <b>FreeShipping</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $FreeShipping;
    /**
     * The LocalPickup
     * Meta informations extracted from the WSDL
     * - documentation: The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first
     * shipping option. The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup. <br/><br/> For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and
     * <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalPickup;
    /**
     * The ImportCharge
     * Meta informations extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ImportCharge;
    /**
     * The ShippingPackageInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned in order management calls. <br/><br/> If the order is being delivered through eBay On Demand Delivery, it contains information on the status of the order, the unique identifier of the store where the order
     * is originating from, and the expected and actual delivery times. <br/><br/> For other orders, this container only returns an estimated delivery window. <br/><br/> <span class="tablenote"><strong>Note:</strong> eBay Now has been officially retired in
     * all US locations, so this field is no longer applicable for US listings. However, a feature similar to eBay Now, called 'eBay On Demand Delivery', is available in some parts of London, so this field is still applicable on the eBay UK site. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[]
     */
    public $ShippingPackageInfo;
    /**
     * The ShippingServiceCutOffTime
     * Meta informations extracted from the WSDL
     * - documentation: The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains
     * the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>. <br/><br/> The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCutOffTime;
    /**
     * The LogisticPlanType
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticPlanType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceOptionsType
     * @uses ShippingServiceOptionsType::setShippingInsuranceCost()
     * @uses ShippingServiceOptionsType::setShippingService()
     * @uses ShippingServiceOptionsType::setShippingServiceCost()
     * @uses ShippingServiceOptionsType::setShippingServiceAdditionalCost()
     * @uses ShippingServiceOptionsType::setShippingServicePriority()
     * @uses ShippingServiceOptionsType::setExpeditedService()
     * @uses ShippingServiceOptionsType::setShippingTimeMin()
     * @uses ShippingServiceOptionsType::setShippingTimeMax()
     * @uses ShippingServiceOptionsType::setShippingSurcharge()
     * @uses ShippingServiceOptionsType::setFreeShipping()
     * @uses ShippingServiceOptionsType::setLocalPickup()
     * @uses ShippingServiceOptionsType::setImportCharge()
     * @uses ShippingServiceOptionsType::setShippingPackageInfo()
     * @uses ShippingServiceOptionsType::setShippingServiceCutOffTime()
     * @uses ShippingServiceOptionsType::setLogisticPlanType()
     * @uses ShippingServiceOptionsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @param string $shippingService
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @param int $shippingServicePriority
     * @param bool $expeditedService
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge
     * @param bool $freeShipping
     * @param bool $localPickup
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @param string $shippingServiceCutOffTime
     * @param string $logisticPlanType
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null, $shippingService = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null, $shippingServicePriority = null, $expeditedService = null, $shippingTimeMin = null, $shippingTimeMax = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge = null, $freeShipping = null, $localPickup = null, \macropage\ebaysdk\trading\StructType\AmountType $importCharge = null, array $shippingPackageInfo = array(), $shippingServiceCutOffTime = null, $logisticPlanType = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setShippingService($shippingService)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingServicePriority($shippingServicePriority)
            ->setExpeditedService($expeditedService)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setShippingSurcharge($shippingSurcharge)
            ->setFreeShipping($freeShipping)
            ->setLocalPickup($localPickup)
            ->setImportCharge($importCharge)
            ->setShippingPackageInfo($shippingPackageInfo)
            ->setShippingServiceCutOffTime($shippingServiceCutOffTime)
            ->setLogisticPlanType($logisticPlanType)
            ->setAny($any);
    }
    /**
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingInsuranceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceAdditionalCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority()
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServicePriority($shippingServicePriority = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !is_numeric($shippingServicePriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        return $this;
    }
    /**
     * Get ExpeditedService value
     * @return bool|null
     */
    public function getExpeditedService()
    {
        return $this->ExpeditedService;
    }
    /**
     * Set ExpeditedService value
     * @param bool $expeditedService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setExpeditedService($expeditedService = null)
    {
        // validation for constraint: boolean
        if (!is_null($expeditedService) && !is_bool($expeditedService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expeditedService)), __LINE__);
        }
        $this->ExpeditedService = $expeditedService;
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin()
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingTimeMin($shippingTimeMin = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !is_numeric($shippingTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax()
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingTimeMax($shippingTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !is_numeric($shippingTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
        return $this;
    }
    /**
     * Get ShippingSurcharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingSurcharge()
    {
        return $this->ShippingSurcharge;
    }
    /**
     * Set ShippingSurcharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingSurcharge(\macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge = null)
    {
        $this->ShippingSurcharge = $shippingSurcharge;
        return $this;
    }
    /**
     * Get FreeShipping value
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->FreeShipping;
    }
    /**
     * Set FreeShipping value
     * @param bool $freeShipping
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setFreeShipping($freeShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeShipping) && !is_bool($freeShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeShipping)), __LINE__);
        }
        $this->FreeShipping = $freeShipping;
        return $this;
    }
    /**
     * Get LocalPickup value
     * @return bool|null
     */
    public function getLocalPickup()
    {
        return $this->LocalPickup;
    }
    /**
     * Set LocalPickup value
     * @param bool $localPickup
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setLocalPickup($localPickup = null)
    {
        // validation for constraint: boolean
        if (!is_null($localPickup) && !is_bool($localPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localPickup)), __LINE__);
        }
        $this->LocalPickup = $localPickup;
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getImportCharge()
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setImportCharge(\macropage\ebaysdk\trading\StructType\AmountType $importCharge = null)
    {
        $this->ImportCharge = $importCharge;
        return $this;
    }
    /**
     * Get ShippingPackageInfo value
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[]|null
     */
    public function getShippingPackageInfo()
    {
        return $this->ShippingPackageInfo;
    }
    /**
     * Set ShippingPackageInfo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingPackageInfo(array $shippingPackageInfo = array())
    {
        foreach ($shippingPackageInfo as $shippingServiceOptionsTypeShippingPackageInfoItem) {
            // validation for constraint: itemType
            if (!$shippingServiceOptionsTypeShippingPackageInfoItem instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType) {
                throw new \InvalidArgumentException(sprintf('The ShippingPackageInfo property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType, "%s" given', is_object($shippingServiceOptionsTypeShippingPackageInfoItem) ? get_class($shippingServiceOptionsTypeShippingPackageInfoItem) : gettype($shippingServiceOptionsTypeShippingPackageInfoItem)), __LINE__);
            }
        }
        $this->ShippingPackageInfo = $shippingPackageInfo;
        return $this;
    }
    /**
     * Add item to ShippingPackageInfo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function addToShippingPackageInfo(\macropage\ebaysdk\trading\StructType\ShippingPackageInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType) {
            throw new \InvalidArgumentException(sprintf('The ShippingPackageInfo property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingPackageInfo[] = $item;
        return $this;
    }
    /**
     * Get ShippingServiceCutOffTime value
     * @return string|null
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->ShippingServiceCutOffTime;
    }
    /**
     * Set ShippingServiceCutOffTime value
     * @param string $shippingServiceCutOffTime
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceCutOffTime($shippingServiceCutOffTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceCutOffTime) && !is_string($shippingServiceCutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceCutOffTime)), __LINE__);
        }
        $this->ShippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }
    /**
     * Get LogisticPlanType value
     * @return string|null
     */
    public function getLogisticPlanType()
    {
        return $this->LogisticPlanType;
    }
    /**
     * Set LogisticPlanType value
     * @param string $logisticPlanType
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setLogisticPlanType($logisticPlanType = null)
    {
        // validation for constraint: string
        if (!is_null($logisticPlanType) && !is_string($logisticPlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logisticPlanType)), __LINE__);
        }
        $this->LogisticPlanType = $logisticPlanType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
