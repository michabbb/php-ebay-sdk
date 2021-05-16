<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCostSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type used by the <b>ShippingCostSummary</b> container, that is used to express a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's
 * location and the destination location are considered when calculating the shipping cost.
 * @subpackage Structs
 */
class ShippingCostSummaryType extends AbstractStructBase
{
    /**
     * The ShippingServiceName
     * Meta information extracted from the WSDL
     * - documentation: This field shows the name of the lowest-priced shipping service option that is available to the eBay user making the call. An example of a shipping service option is <b>USPS First Class Package</b>. <br/><br/> This field is only
     * returned by the <b>GetShippingCosts</b> call (and not <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceName = null;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: This field shows the base shipping cost using the lowest-priced shipping service option that is available to the eBay user making the call. <br/><br/> For <b>GetShippingCosts</b> call, this is base shipping cost to ship the item
     * using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost. <br/><br/> For <b>GetSingleItem</b> and
     * <b>GetMultipleItems</b> calls, this is base shipping cost of the cheapest available domestic shipping service option. The name of the shipping service option is not returned for these calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ShippingServiceCost = null;
    /**
     * The InsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $InsuranceCost = null;
    /**
     * The ShippingType
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the shipping cost model associated with the lowest-priced shipping service option that is available to the eBay user making the call. Examples of shipping cost models include flat-rate and calculated
     * shipping. <br/><br/> For <b>GetShippingCosts</b> call, this is the shipping cost model associated with the shipping service option in the <b>ShippingServiceName</b> field. The name of the shipping service option is not returned for the
     * <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls calls.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingType = null;
    /**
     * The LocalPickup
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned (as <code>true</code>) if 'Local Pickup' is the only available logistic option (no shipping options). With 'Local Pickup', the seller and buyer arrange the pickup location and time (off of the eBay
     * platform).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalPickup = null;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceOption = null;
    /**
     * The ListedShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: This is the localized cost to ship the item using the cheapest available domestic or international shipping service option. If the item is located in Germany, but the shipping destination is the US, this field will show the cost in
     * Euros (EUR) and the <b>ShippingServiceCost</b> will show the cost in US dollars (USD). <br/><br/> For <b>GetShippingCosts</b> call, this is the localized base shipping cost to ship the item using the shipping service option in the
     * <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost. <br/><br/> For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is the
     * localized base shipping cost of the cheapest available shipping service option to the country specified in the Site-ID header. The name of the shipping service option is not returned for these calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ListedShippingServiceCost = null;
    /**
     * The ImportCharge
     * Meta information extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ImportCharge = null;
    /**
     * The LogisticPlanType
     * Meta information extracted from the WSDL
     * - documentation: This field is for future use.
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
     * Constructor method for ShippingCostSummaryType
     * @uses ShippingCostSummaryType::setShippingServiceName()
     * @uses ShippingCostSummaryType::setShippingServiceCost()
     * @uses ShippingCostSummaryType::setInsuranceCost()
     * @uses ShippingCostSummaryType::setShippingType()
     * @uses ShippingCostSummaryType::setLocalPickup()
     * @uses ShippingCostSummaryType::setInsuranceOption()
     * @uses ShippingCostSummaryType::setListedShippingServiceCost()
     * @uses ShippingCostSummaryType::setImportCharge()
     * @uses ShippingCostSummaryType::setLogisticPlanType()
     * @uses ShippingCostSummaryType::setAny()
     * @param string $shippingServiceName
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost
     * @param string $shippingType
     * @param bool $localPickup
     * @param string $insuranceOption
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $importCharge
     * @param string $logisticPlanType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shippingServiceName = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null, ?string $shippingType = null, ?bool $localPickup = null, ?string $insuranceOption = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null, ?string $logisticPlanType = null, $any = null)
    {
        $this
            ->setShippingServiceName($shippingServiceName)
            ->setShippingServiceCost($shippingServiceCost)
            ->setInsuranceCost($insuranceCost)
            ->setShippingType($shippingType)
            ->setLocalPickup($localPickup)
            ->setInsuranceOption($insuranceOption)
            ->setListedShippingServiceCost($listedShippingServiceCost)
            ->setImportCharge($importCharge)
            ->setLogisticPlanType($logisticPlanType)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setShippingServiceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null): self
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getInsuranceCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setInsuranceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null): self
    {
        $this->InsuranceCost = $insuranceCost;
        
        return $this;
    }
    /**
     * Get ShippingType value
     * @return string|null
     */
    public function getShippingType(): ?string
    {
        return $this->ShippingType;
    }
    /**
     * Set ShippingType value
     * @uses \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingType
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setShippingType(?string $shippingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::valueIsValid($shippingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType', is_array($shippingType) ? implode(', ', $shippingType) : var_export($shippingType, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingType = $shippingType;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption(): ?string
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setInsuranceOption(?string $insuranceOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        
        return $this;
    }
    /**
     * Get ListedShippingServiceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getListedShippingServiceCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ListedShippingServiceCost;
    }
    /**
     * Set ListedShippingServiceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setListedShippingServiceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost = null): self
    {
        $this->ListedShippingServiceCost = $listedShippingServiceCost;
        
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getImportCharge(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setImportCharge(?\macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null): self
    {
        $this->ImportCharge = $importCharge;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
