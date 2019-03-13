<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCostSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type used by the <b>ShippingCostSummary</b> container, that is used to express a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's
 * location and the destination location are considered when calculating the shipping cost.
 * @subpackage Structs
 */
class ShippingCostSummaryType extends AbstractStructBase
{
    /**
     * The ShippingServiceName
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the name of the lowest-priced shipping service option that is available to the eBay user making the call. An example of a shipping service option is <b>USPS First Class Package</b>. <br/><br/> This field is only
     * returned by the <b>GetShippingCosts</b> call (and not <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls).
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceName;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the base shipping cost using the lowest-priced shipping service option that is available to the eBay user making the call. <br/><br/> For <b>GetShippingCosts</b> call, this is base shipping cost to ship the item
     * using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost. <br/><br/> For <b>GetSingleItem</b> and
     * <b>GetMultipleItems</b> calls, this is base shipping cost of the cheapest available domestic shipping service option. The name of the shipping service option is not returned for these calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The InsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $InsuranceCost;
    /**
     * The ShippingType
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the shipping cost model associated with the lowest-priced shipping service option that is available to the eBay user making the call. Examples of shipping cost models include flat-rate and calculated
     * shipping. <br/><br/> For <b>GetShippingCosts</b> call, this is the shipping cost model associated with the shipping service option in the <b>ShippingServiceName</b> field. The name of the shipping service option is not returned for the
     * <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls calls.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingType;
    /**
     * The LocalPickup
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned (as <code>true</code>) if 'Local Pickup' is the only available logistic option (no shipping options). With 'Local Pickup', the seller and buyer arrange the pickup location and time (off of the eBay
     * platform).
     * - minOccurs: 0
     * @var bool
     */
    public $LocalPickup;
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The ListedShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: This is the localized cost to ship the item using the cheapest available domestic or international shipping service option. If the item is located in Germany, but the shipping destination is the US, this field will show the cost in
     * Euros (EUR) and the <b>ShippingServiceCost</b> will show the cost in US dollars (USD). <br/><br/> For <b>GetShippingCosts</b> call, this is the localized base shipping cost to ship the item using the shipping service option in the
     * <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost. <br/><br/> For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is the
     * localized base shipping cost of the cheapest available shipping service option to the country specified in the Site-ID header. The name of the shipping service option is not returned for these calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ListedShippingServiceCost;
    /**
     * The ImportCharge
     * Meta informations extracted from the WSDL
     * - documentation: The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the
     * item properties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ImportCharge;
    /**
     * The LogisticPlanType
     * Meta informations extracted from the WSDL
     * - documentation: This field is for future use.
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
     * @param \DOMDocument $any
     */
    public function __construct($shippingServiceName = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null, \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null, $shippingType = null, $localPickup = null, $insuranceOption = null, \macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost = null, \macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null, $logisticPlanType = null, \DOMDocument $any = null)
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
    public function getShippingServiceName()
    {
        return $this->ShippingServiceName;
    }
    /**
     * Set ShippingServiceName value
     * @param string $shippingServiceName
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getInsuranceCost()
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setInsuranceCost(\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null)
    {
        $this->InsuranceCost = $insuranceCost;
        return $this;
    }
    /**
     * Get ShippingType value
     * @return string|null
     */
    public function getShippingType()
    {
        return $this->ShippingType;
    }
    /**
     * Set ShippingType value
     * @uses \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingType
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setShippingType($shippingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::valueIsValid($shippingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingType, implode(', ', \macropage\ebaysdk\shopping\EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingType = $shippingType;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceOption, implode(', ', \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get ListedShippingServiceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getListedShippingServiceCost()
    {
        return $this->ListedShippingServiceCost;
    }
    /**
     * Set ListedShippingServiceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setListedShippingServiceCost(\macropage\ebaysdk\shopping\StructType\AmountType $listedShippingServiceCost = null)
    {
        $this->ListedShippingServiceCost = $listedShippingServiceCost;
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getImportCharge()
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public function setImportCharge(\macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null)
    {
        $this->ImportCharge = $importCharge;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * @uses \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
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
