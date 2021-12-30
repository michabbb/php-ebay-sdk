<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceOptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to a domestic shipping service that is available to ship an item to the shipping destination specified in the <b>GetShippingCosts</b> call request.
 * @subpackage Structs
 */
class ShippingServiceOptionType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ShippingInsuranceCost = null;
    /**
     * The ShippingServiceName
     * Meta information extracted from the WSDL
     * - documentation: The name of a domestic shipping service option available to ship the item to specified domestic shipping destination. This field is always returned with each <b>ShippingServiceOption</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceName = null;
    /**
     * The LogisticPlanType
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogisticPlanType = null;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping
     * service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to
     * <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of
     * the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ShippingServiceCost = null;
    /**
     * The ShippingServiceAdditionalCost
     * Meta information extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should
     * always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the
     * value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple
     * quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the
     * <b>QuantitySold</b> of the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ShippingServiceAdditionalCost = null;
    /**
     * The ShippingServicePriority
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the seller-preferred presentation order of the domestic shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears
     * in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to four domestic
     * shipping service options. This field should always be returned with each <b>ShippingServiceOption</b> container.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingServicePriority = null;
    /**
     * The ExpeditedService
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is an expedited shipping service.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpeditedService = null;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value indicates the minimum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the minimum
     * transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to
     * receive their item in about five business days after payment has been made.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMin = null;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value indicates the maximum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the maximum
     * transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to
     * receive their item in about five business days after payment has been made.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMax = null;
    /**
     * The ShippingSurcharge
     * Meta information extracted from the WSDL
     * - documentation: This field is only applicable and returned if the corresponding shipping service charges a shipping surcharge to the shipping destination. For example, a shipping surcharge may apply if a buyer from Alaska or Hawaii ordered an item
     * from the Continental US, and the seller is using UPS to ship the item. If a shipping surcharge is applicable, the <b>ShippingServiceCost</b> field will account for this additional charge.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ShippingSurcharge = null;
    /**
     * The ShipsTo
     * Meta information extracted from the WSDL
     * - documentation: A domestic location or region to which the item may be shipped via this particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled
     * through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if
     * the shipping service option serves multiple countries.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ShipsTo = null;
    /**
     * The EstimatedDeliveryMinTime
     * Meta information extracted from the WSDL
     * - documentation: The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated minimum transit time (specified in the <b>ShippingTimeMin</b> field in
     * business days). <br/><br/> <span class="tablenote"><b>Note: </b> Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate
     * because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryMinTime = null;
    /**
     * The EstimatedDeliveryMaxTime
     * Meta information extracted from the WSDL
     * - documentation: The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated maximum transit time (specified in the <b>ShippingTimeMax</b> field in
     * business days). <br/><br/> <span class="tablenote"><b>Note: </b> Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate
     * because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryMaxTime = null;
    /**
     * The FastAndFree
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is a 'Fast and Free' shipping service. With a 'Fast and Free' shipping service, a buyer in the specified destination can expect to
     * receive their item within four business days at no cost (and the <b>ShippingServiceCost</b> value should be <code>0.0</code>).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FastAndFree = null;
    /**
     * The ShippingServiceCutOffTime
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be returned for any international shipping service option.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceCutOffTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null, ?string $shippingServiceName = null, ?string $logisticPlanType = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null, ?int $shippingServicePriority = null, ?bool $expeditedService = null, ?int $shippingTimeMin = null, ?int $shippingTimeMax = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge = null, ?array $shipsTo = null, ?string $estimatedDeliveryMinTime = null, ?string $estimatedDeliveryMaxTime = null, ?bool $fastAndFree = null, ?string $shippingServiceCutOffTime = null, $any = null)
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
    public function getShippingInsuranceCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingInsuranceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null): self
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        
        return $this;
    }
    /**
     * Get ShippingServiceName value
     * @return string|null
     */
    public function getShippingServiceName(): ?string
    {
        return $this->ShippingServiceName;
    }
    /**
     * Set ShippingServiceName value
     * @param string $shippingServiceName
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceName(?string $shippingServiceName = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingServiceName) && !is_string($shippingServiceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceName, true), gettype($shippingServiceName)), __LINE__);
        }
        $this->ShippingServiceName = $shippingServiceName;
        
        return $this;
    }
    /**
     * Get LogisticPlanType value
     * @return string|null
     */
    public function getLogisticPlanType(): ?string
    {
        return $this->LogisticPlanType;
    }
    /**
     * Set LogisticPlanType value
     * @param string $logisticPlanType
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setLogisticPlanType(?string $logisticPlanType = null): self
    {
        // validation for constraint: string
        if (!is_null($logisticPlanType) && !is_string($logisticPlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logisticPlanType, true), gettype($logisticPlanType)), __LINE__);
        }
        $this->LogisticPlanType = $logisticPlanType;
        
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null): self
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceAdditionalCost(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null): self
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        
        return $this;
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority(): ?int
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServicePriority(?int $shippingServicePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !(is_int($shippingServicePriority) || ctype_digit($shippingServicePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingServicePriority, true), gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        
        return $this;
    }
    /**
     * Get ExpeditedService value
     * @return bool|null
     */
    public function getExpeditedService(): ?bool
    {
        return $this->ExpeditedService;
    }
    /**
     * Set ExpeditedService value
     * @param bool $expeditedService
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setExpeditedService(?bool $expeditedService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expeditedService) && !is_bool($expeditedService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expeditedService, true), gettype($expeditedService)), __LINE__);
        }
        $this->ExpeditedService = $expeditedService;
        
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin(): ?int
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingTimeMin(?int $shippingTimeMin = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !(is_int($shippingTimeMin) || ctype_digit($shippingTimeMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMin, true), gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax(): ?int
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingTimeMax(?int $shippingTimeMax = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !(is_int($shippingTimeMax) || ctype_digit($shippingTimeMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMax, true), gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
        
        return $this;
    }
    /**
     * Get ShippingSurcharge value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingSurcharge(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ShippingSurcharge;
    }
    /**
     * Set ShippingSurcharge value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingSurcharge(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingSurcharge = null): self
    {
        $this->ShippingSurcharge = $shippingSurcharge;
        
        return $this;
    }
    /**
     * Get ShipsTo value
     * @return string[]
     */
    public function getShipsTo(): ?array
    {
        return $this->ShipsTo;
    }
    /**
     * This method is responsible for validating the values passed to the setShipsTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipsTo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipsToForArrayConstraintsFromSetShipsTo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceOptionTypeShipsToItem) {
            // validation for constraint: itemType
            if (!is_string($shippingServiceOptionTypeShipsToItem)) {
                $invalidValues[] = is_object($shippingServiceOptionTypeShipsToItem) ? get_class($shippingServiceOptionTypeShipsToItem) : sprintf('%s(%s)', gettype($shippingServiceOptionTypeShipsToItem), var_export($shippingServiceOptionTypeShipsToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipsTo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShipsTo value
     * @throws InvalidArgumentException
     * @param string[] $shipsTo
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShipsTo(?array $shipsTo = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipsToArrayErrorMessage = self::validateShipsToForArrayConstraintsFromSetShipsTo($shipsTo))) {
            throw new InvalidArgumentException($shipsToArrayErrorMessage, __LINE__);
        }
        $this->ShipsTo = $shipsTo;
        
        return $this;
    }
    /**
     * Add item to ShipsTo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function addToShipsTo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ShipsTo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipsTo[] = $item;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryMinTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMinTime(): ?string
    {
        return $this->EstimatedDeliveryMinTime;
    }
    /**
     * Set EstimatedDeliveryMinTime value
     * @param string $estimatedDeliveryMinTime
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setEstimatedDeliveryMinTime(?string $estimatedDeliveryMinTime = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMinTime) && !is_string($estimatedDeliveryMinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryMinTime, true), gettype($estimatedDeliveryMinTime)), __LINE__);
        }
        $this->EstimatedDeliveryMinTime = $estimatedDeliveryMinTime;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryMaxTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMaxTime(): ?string
    {
        return $this->EstimatedDeliveryMaxTime;
    }
    /**
     * Set EstimatedDeliveryMaxTime value
     * @param string $estimatedDeliveryMaxTime
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setEstimatedDeliveryMaxTime(?string $estimatedDeliveryMaxTime = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMaxTime) && !is_string($estimatedDeliveryMaxTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryMaxTime, true), gettype($estimatedDeliveryMaxTime)), __LINE__);
        }
        $this->EstimatedDeliveryMaxTime = $estimatedDeliveryMaxTime;
        
        return $this;
    }
    /**
     * Get FastAndFree value
     * @return bool|null
     */
    public function getFastAndFree(): ?bool
    {
        return $this->FastAndFree;
    }
    /**
     * Set FastAndFree value
     * @param bool $fastAndFree
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setFastAndFree(?bool $fastAndFree = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fastAndFree) && !is_bool($fastAndFree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fastAndFree, true), gettype($fastAndFree)), __LINE__);
        }
        $this->FastAndFree = $fastAndFree;
        
        return $this;
    }
    /**
     * Get ShippingServiceCutOffTime value
     * @return string|null
     */
    public function getShippingServiceCutOffTime(): ?string
    {
        return $this->ShippingServiceCutOffTime;
    }
    /**
     * Set ShippingServiceCutOffTime value
     * @param string $shippingServiceCutOffTime
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setShippingServiceCutOffTime(?string $shippingServiceCutOffTime = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingServiceCutOffTime) && !is_string($shippingServiceCutOffTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceCutOffTime, true), gettype($shippingServiceCutOffTime)), __LINE__);
        }
        $this->ShippingServiceCutOffTime = $shippingServiceCutOffTime;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
