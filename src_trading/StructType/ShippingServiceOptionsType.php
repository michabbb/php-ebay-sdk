<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceOptionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to a domestic shipping service. A <b>ShippingServiceOptions</b> container is required for each domestic shipping service option that the seller will make available to
 * buyers in an Add/Revise/Relist call. Up to four domestic shipping service options can be offered per listing.
 * @subpackage Structs
 */
class ShippingServiceOptionsType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingInsuranceCost = null;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates a specific domestic shipping service option being offered by the seller to ship an item to a buyer who is located within the same country as the item. This field is required to identify each domestic
     * shipping service option that is specified with a <b>ShippingServiceOptions</b> container. <br><br> For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     * <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br><br> To view the full list of domestic shipping
     * service options in the response, look for the <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the
     * <b>ShippingService</b> value is an International shipping service option.<br> <br> <span class="tablenote"><strong>Note:</strong> The eBay standard envelope (eSE) is a domestic envelope service with tracking through eBay. This service applies to
     * specific sub-categories of Trading Cards categories, and to Coins & Paper Money, Postcards, and Stamps. To use this service, send envelopes using the USPS mail and set the <b>ShippingService</b> field to <code>US_eBayStandardEnvelope</code>. See <a
     * href="https://pages.ebay.com/seller-center/shipping/ebay-standard-envelope.html#lower-cost-way">eBay standard envelope</a> for details and restrictions. For the REST equivalent, see <a href="
     * https://edp.qa.ebay.com/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html" target=/"_blank/">Using eBay standard envelope (eSE) service</a>. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingService = null;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: The base cost of shipping one unit of the item using the shipping service specified in the corresponding <b>ShippingService</b> field. <br> <br> In the case of a multiple-quantity, fixed-price listing, the
     * <b>ShippingServiceAdditionalCost</b> field also becomes applicable, and shows the cost to ship each additional unit of the item if the buyer purchases multiple quantity of the same line item. <br> <br> <span class="tablenote"><strong>Note:</strong>
     * If the corresponding shipping service option is set as a 'free shipping' option (<b>FreeShipping=true</b>), the seller still needs to include this <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this
     * automatically. </span> When returned by <b>GetItemShipping</b>, it includes the packaging and handling cost. <br> <br> Note that if <b>ShippingService</b> is set to <code>LocalPickup</code>, <b>ShippingServiceCost</b> must be set to <code>0.0</code>.
     * Also, if a shipping service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns the shipping service cost, even if the cost is zero. <br> <br> If this is for calculated shipping for a listing that has not yet ended, note that the
     * cost cannot be determined until the listing has ended and the buyer has specified a postal code.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingServiceCost = null;
    /**
     * The ShippingServiceAdditionalCost
     * Meta information extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a
     * shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> if the seller wants
     * to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not
     * applicable for single-quantity listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingServiceAdditionalCost = null;
    /**
     * The ShippingServicePriority
     * Meta information extracted from the WSDL
     * - documentation: Controls the order (relative to other shipping services) in which the corresponding <b>ShippingService</b> will appear in the View Item and Checkout page. <br/><br/> Sellers can specify up to four domestic shipping services (with
     * four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top. Conversely, a shipping service with a <b>ShippingServicePriority</b> value of
     * 4 appears at the bottom of a list of four shipping service options. <br><br> If this field is omitted from domestic shipping service options, the order of the shipping service options in View Item and Checkout pages will be determined by the order
     * that these shipping service options are presented in the request payload of an Add/Revise/Relist call.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingServicePriority = null;
    /**
     * The ExpeditedService
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the domestic shipping service is considered an expedited shipping service. An expedited service is typically a shipping service that can ship an order that will arrive at the buyer's
     * location within one to two business days.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpeditedService = null;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This minimum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMin = null;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer. <br><br> This maximum
     * shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by
     * country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMax = null;
    /**
     * The FreeShipping
     * Meta information extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the corresponding domestic shipping service option is free to the buyer. In an Add/Revise/Relist call, free shipping can only be offered for the first specified shipping service (so, the
     * corresponding <b>ShippingServicePriority</b> value should be <code>1</code> or included first in the call request). If 'free shipping' is for any other shipping service, this field is ignored. <br/><br/> For 'Get' calls, including <b>GetItem</b>,
     * this field is only returned if <code>1</code>. <br/><br/> <span class="tablenote"><strong>Note:</strong> If a seller is specifying a shipping service option as 'free shipping', in addition to this <b>FreeShipping</b> boolean field, the seller will
     * also need to include the corresponding <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FreeShipping = null;
    /**
     * The LocalPickup
     * Meta information extracted from the WSDL
     * - documentation: The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first
     * shipping option. The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup. <br/><br/> For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and
     * <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalPickup = null;
    /**
     * The ImportCharge
     * Meta information extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ImportCharge = null;
    /**
     * The ShippingPackageInfo
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[]
     */
    protected ?array $ShippingPackageInfo = null;
    /**
     * The ShippingServiceCutOffTime
     * Meta information extracted from the WSDL
     * - documentation: The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains
     * the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>. <br/><br/> The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceCutOffTime = null;
    /**
     * The LogisticPlanType
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogisticPlanType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param bool $freeShipping
     * @param bool $localPickup
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @param string $shippingServiceCutOffTime
     * @param string $logisticPlanType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null, ?string $shippingService = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null, ?int $shippingServicePriority = null, ?bool $expeditedService = null, ?int $shippingTimeMin = null, ?int $shippingTimeMax = null, ?bool $freeShipping = null, ?bool $localPickup = null, ?\macropage\ebaysdk\trading\StructType\AmountType $importCharge = null, ?array $shippingPackageInfo = null, ?string $shippingServiceCutOffTime = null, ?string $logisticPlanType = null, $any = null)
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
    public function getShippingInsuranceCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingInsuranceCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingInsuranceCost = null): self
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService(): ?string
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingService(?string $shippingService = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingService, true), gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null): self
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingServiceAdditionalCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * Get FreeShipping value
     * @return bool|null
     */
    public function getFreeShipping(): ?bool
    {
        return $this->FreeShipping;
    }
    /**
     * Set FreeShipping value
     * @param bool $freeShipping
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setFreeShipping(?bool $freeShipping = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freeShipping) && !is_bool($freeShipping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeShipping, true), gettype($freeShipping)), __LINE__);
        }
        $this->FreeShipping = $freeShipping;
        
        return $this;
    }
    /**
     * Get LocalPickup value
     * @return bool|null
     */
    public function getLocalPickup(): ?bool
    {
        return $this->LocalPickup;
    }
    /**
     * Set LocalPickup value
     * @param bool $localPickup
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setLocalPickup(?bool $localPickup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localPickup) && !is_bool($localPickup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localPickup, true), gettype($localPickup)), __LINE__);
        }
        $this->LocalPickup = $localPickup;
        
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getImportCharge(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setImportCharge(?\macropage\ebaysdk\trading\StructType\AmountType $importCharge = null): self
    {
        $this->ImportCharge = $importCharge;
        
        return $this;
    }
    /**
     * Get ShippingPackageInfo value
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[]
     */
    public function getShippingPackageInfo(): ?array
    {
        return $this->ShippingPackageInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingPackageInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingPackageInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingPackageInfoForArrayConstraintsFromSetShippingPackageInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingServiceOptionsTypeShippingPackageInfoItem) {
            // validation for constraint: itemType
            if (!$shippingServiceOptionsTypeShippingPackageInfoItem instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType) {
                $invalidValues[] = is_object($shippingServiceOptionsTypeShippingPackageInfoItem) ? get_class($shippingServiceOptionsTypeShippingPackageInfoItem) : sprintf('%s(%s)', gettype($shippingServiceOptionsTypeShippingPackageInfoItem), var_export($shippingServiceOptionsTypeShippingPackageInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingPackageInfo property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingPackageInfo value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType[] $shippingPackageInfo
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function setShippingPackageInfo(?array $shippingPackageInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingPackageInfoArrayErrorMessage = self::validateShippingPackageInfoForArrayConstraintsFromSetShippingPackageInfo($shippingPackageInfo))) {
            throw new InvalidArgumentException($shippingPackageInfoArrayErrorMessage, __LINE__);
        }
        $this->ShippingPackageInfo = $shippingPackageInfo;
        
        return $this;
    }
    /**
     * Add item to ShippingPackageInfo value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public function addToShippingPackageInfo(\macropage\ebaysdk\trading\StructType\ShippingPackageInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType) {
            throw new InvalidArgumentException(sprintf('The ShippingPackageInfo property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingPackageInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingPackageInfo[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
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
