<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to a domestic shipping service that is available to ship an item to the shipping destination specified in the <b>GetShippingCosts</b> call request.
 * @subpackage Structs
 */
class ShippingServiceOptionType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The ShippingServiceName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a domestic shipping service option available to ship the item to specified domestic shipping destination. This field is always returned with each <b>ShippingServiceOption</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceName;
    /**
     * The LogisticPlanType
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticPlanType;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping
     * service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to
     * <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of
     * the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should
     * always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the
     * value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple
     * quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the
     * <b>QuantitySold</b> of the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingServicePriority
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the seller-preferred presentation order of the domestic shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears
     * in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to four domestic
     * shipping service options. This field should always be returned with each <b>ShippingServiceOption</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ExpeditedService
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is an expedited shipping service.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpeditedService;
    /**
     * The ShippingTimeMin
     * Meta informations extracted from the WSDL
     * - documentation: The integer value indicates the minimum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the minimum
     * transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to
     * receive their item in about five business days after payment has been made.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: The integer value indicates the maximum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the maximum
     * transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to
     * receive their item in about five business days after payment has been made.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The ShippingSurcharge
     * Meta informations extracted from the WSDL
     * - documentation: This field is only applicable and returned if the corresponding shipping service charges a shipping surcharge to the shipping destination. For example, a shipping surcharge may apply if a buyer from Alaska or Hawaii ordered an item
     * from the Continental US, and the seller is using UPS to ship the item. If a shipping surcharge is applicable, the <b>ShippingServiceCost</b> field will account for this additional charge.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingSurcharge;
    /**
     * The ShipsTo
     * Meta informations extracted from the WSDL
     * - documentation: A domestic location or region to which the item may be shipped via this particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled
     * through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if
     * the shipping service option serves multiple countries.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipsTo;
    /**
     * The EstimatedDeliveryMinTime
     * Meta informations extracted from the WSDL
     * - documentation: The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated minimum transit time (specified in the <b>ShippingTimeMin</b> field in
     * business days). <br/><br/> <span class="tablenote"><b>Note: </b> Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate
     * because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryMinTime;
    /**
     * The EstimatedDeliveryMaxTime
     * Meta informations extracted from the WSDL
     * - documentation: The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated maximum transit time (specified in the <b>ShippingTimeMax</b> field in
     * business days). <br/><br/> <span class="tablenote"><b>Note: </b> Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate
     * because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryMaxTime;
    /**
     * The FastAndFree
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is a 'Fast and Free' shipping service. With a 'Fast and Free' shipping service, a buyer in the specified destination can expect to
     * receive their item within four business days at no cost (and the <b>ShippingServiceCost</b> value should be <code>0.0</code>).
     * - minOccurs: 0
     * @var bool
     */
    public $FastAndFree;
    /**
     * The ShippingServiceCutOffTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be returned for any international shipping service option.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCutOffTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceOptionType
     * @uses ShippingServiceOptionType::setShippingInsuranceCost()
     * @uses ShippingServiceOptionType::setShippingServiceName()
     * @uses ShippingServiceOptionType::setLogisticPlanType()
     * @uses ShippingServiceOptionType::setShippingServiceCost()
     * @uses ShippingServiceOptionType::setShippingServiceAdditionalCost()
     * @uses ShippingServiceOptionType::setShippingServicePriority()
     * @uses ShippingServiceOptionType::setExpeditedService()
     * @uses ShippingServiceOptionType::setShippingTimeMin()
     * @uses ShippingServiceOptionType::setShippingTimeMax()
     * @uses ShippingServiceOptionType::setShippingSurcharge()
     * @uses ShippingServiceOptionType::setShipsTo()
     * @uses ShippingServiceOptionType::setEstimatedDeliveryMinTime()
     * @uses ShippingServiceOptionType::setEstimatedDeliveryMaxTime()
     * @uses ShippingServiceOptionType::setFastAndFree()
     * @uses ShippingServiceOptionType::setShippingServiceCutOffTime()
     * @uses ShippingServiceOptionType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost
     * @param string $shippingServiceName
     * @param string $logisticPlanType
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost
     * @param int $shippingServicePriority
     * @param bool $expeditedService
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge
     * @param string[] $shipsTo
     * @param string $estimatedDeliveryMinTime
     * @param string $estimatedDeliveryMaxTime
     * @param bool $fastAndFree
     * @param string $shippingServiceCutOffTime
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null, $shippingServiceName = null, $logisticPlanType = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null, $shippingServicePriority = null, $expeditedService = null, $shippingTimeMin = null, $shippingTimeMax = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge = null, array $shipsTo = array(), $estimatedDeliveryMinTime = null, $estimatedDeliveryMaxTime = null, $fastAndFree = null, $shippingServiceCutOffTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setShippingServiceName($shippingServiceName)
            ->setLogisticPlanType($logisticPlanType)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingServicePriority($shippingServicePriority)
            ->setExpeditedService($expeditedService)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setShippingSurcharge($shippingSurcharge)
            ->setShipsTo($shipsTo)
            ->setEstimatedDeliveryMinTime($estimatedDeliveryMinTime)
            ->setEstimatedDeliveryMaxTime($estimatedDeliveryMaxTime)
            ->setFastAndFree($fastAndFree)
            ->setShippingServiceCutOffTime($shippingServiceCutOffTime)
            ->setAny($any);
    }
    /**
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingInsuranceCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get ShippingServiceName value
     * @return string|null
     */
    public function getShippingServiceName()
    {
        return $this->ShippingServiceName;
    }
    /**
     * Set ShippingServiceName value
     * @param string $shippingServiceName
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceName($shippingServiceName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceName) && !is_string($shippingServiceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceName)), __LINE__);
        }
        $this->ShippingServiceName = $shippingServiceName;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceAdditionalCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null)
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingSurcharge()
    {
        return $this->ShippingSurcharge;
    }
    /**
     * Set ShippingSurcharge value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingSurcharge(\macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge = null)
    {
        $this->ShippingSurcharge = $shippingSurcharge;
        return $this;
    }
    /**
     * Get ShipsTo value
     * @return string[]|null
     */
    public function getShipsTo()
    {
        return $this->ShipsTo;
    }
    /**
     * Set ShipsTo value
     * @throws \InvalidArgumentException
     * @param string[] $shipsTo
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShipsTo(array $shipsTo = array())
    {
        foreach ($shipsTo as $shippingServiceOptionTypeShipsToItem) {
            // validation for constraint: itemType
            if (!is_string($shippingServiceOptionTypeShipsToItem)) {
                throw new \InvalidArgumentException(sprintf('The ShipsTo property can only contain items of string, "%s" given', is_object($shippingServiceOptionTypeShipsToItem) ? get_class($shippingServiceOptionTypeShipsToItem) : gettype($shippingServiceOptionTypeShipsToItem)), __LINE__);
            }
        }
        $this->ShipsTo = $shipsTo;
        return $this;
    }
    /**
     * Add item to ShipsTo value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function addToShipsTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ShipsTo property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipsTo[] = $item;
        return $this;
    }
    /**
     * Get EstimatedDeliveryMinTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMinTime()
    {
        return $this->EstimatedDeliveryMinTime;
    }
    /**
     * Set EstimatedDeliveryMinTime value
     * @param string $estimatedDeliveryMinTime
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setEstimatedDeliveryMinTime($estimatedDeliveryMinTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMinTime) && !is_string($estimatedDeliveryMinTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryMinTime)), __LINE__);
        }
        $this->EstimatedDeliveryMinTime = $estimatedDeliveryMinTime;
        return $this;
    }
    /**
     * Get EstimatedDeliveryMaxTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMaxTime()
    {
        return $this->EstimatedDeliveryMaxTime;
    }
    /**
     * Set EstimatedDeliveryMaxTime value
     * @param string $estimatedDeliveryMaxTime
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setEstimatedDeliveryMaxTime($estimatedDeliveryMaxTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMaxTime) && !is_string($estimatedDeliveryMaxTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryMaxTime)), __LINE__);
        }
        $this->EstimatedDeliveryMaxTime = $estimatedDeliveryMaxTime;
        return $this;
    }
    /**
     * Get FastAndFree value
     * @return bool|null
     */
    public function getFastAndFree()
    {
        return $this->FastAndFree;
    }
    /**
     * Set FastAndFree value
     * @param bool $fastAndFree
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setFastAndFree($fastAndFree = null)
    {
        // validation for constraint: boolean
        if (!is_null($fastAndFree) && !is_bool($fastAndFree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fastAndFree)), __LINE__);
        }
        $this->FastAndFree = $fastAndFree;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
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
