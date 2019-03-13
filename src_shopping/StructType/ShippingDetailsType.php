<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used to express the shipping-related details for an order line item.
 * @subpackage Structs
 */
class ShippingDetailsType extends AbstractStructBase
{
    /**
     * The GetItFast
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $GetItFast;
    /**
     * The InsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $InsuranceCost;
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOption;
    /**
     * The InternationalShippingServiceOption
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A
     * <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay
     * listing. <br/><br/> No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the
     * <b>ShippingServiceOption</b> container instead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[]
     */
    public $InternationalShippingServiceOption;
    /**
     * The SalesTax
     * Meta informations extracted from the WSDL
     * - documentation: This container is only returned if sales tax is applicable to the specified shipping destination.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public $SalesTax;
    /**
     * The ShippingRateErrorMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if an unexpected error occurs during the attempted calculation of shipping costs.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingRateErrorMessage;
    /**
     * The ShippingServiceOption
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is
     * returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing. <br/><br/> No <b>ShippingServiceOption</b> containers are returned if the shipping destination
     * specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[]
     */
    public $ShippingServiceOption;
    /**
     * The TaxTable
     * Meta informations extracted from the WSDL
     * - documentation: This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax
     * Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\TaxTableType
     */
    public $TaxTable;
    /**
     * The InternationalInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $InternationalInsuranceCost;
    /**
     * The InternationalInsuranceOption
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalInsuranceOption;
    /**
     * The CODCost
     * Meta informations extracted from the WSDL
     * - documentation: This field returns the cost of cash-on-delivery for the listing. This field is only applicable to the Italy site (site ID 101), and is only returned if cash-on-delivery is the only available logistics type for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $CODCost;
    /**
     * The ExcludeShipToLocation
     * Meta informations extracted from the WSDL
     * - documentation: One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries,
     * individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of
     * <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of
     * <code>Middle East</code> for each international shipping service option. <br/><br/> 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy
     * associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludeShipToLocation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingDetailsType
     * @uses ShippingDetailsType::setGetItFast()
     * @uses ShippingDetailsType::setInsuranceCost()
     * @uses ShippingDetailsType::setInsuranceOption()
     * @uses ShippingDetailsType::setInternationalShippingServiceOption()
     * @uses ShippingDetailsType::setSalesTax()
     * @uses ShippingDetailsType::setShippingRateErrorMessage()
     * @uses ShippingDetailsType::setShippingServiceOption()
     * @uses ShippingDetailsType::setTaxTable()
     * @uses ShippingDetailsType::setInternationalInsuranceCost()
     * @uses ShippingDetailsType::setInternationalInsuranceOption()
     * @uses ShippingDetailsType::setCODCost()
     * @uses ShippingDetailsType::setExcludeShipToLocation()
     * @uses ShippingDetailsType::setAny()
     * @param bool $getItFast
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost
     * @param string $insuranceOption
     * @param \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[] $internationalShippingServiceOption
     * @param \macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax
     * @param string $shippingRateErrorMessage
     * @param \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[] $shippingServiceOption
     * @param \macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost
     * @param string $internationalInsuranceOption
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $cODCost
     * @param string[] $excludeShipToLocation
     * @param \DOMDocument $any
     */
    public function __construct($getItFast = null, \macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null, $insuranceOption = null, array $internationalShippingServiceOption = array(), \macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax = null, $shippingRateErrorMessage = null, array $shippingServiceOption = array(), \macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable = null, \macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost = null, $internationalInsuranceOption = null, \macropage\ebaysdk\shopping\StructType\AmountType $cODCost = null, array $excludeShipToLocation = array(), \DOMDocument $any = null)
    {
        $this
            ->setGetItFast($getItFast)
            ->setInsuranceCost($insuranceCost)
            ->setInsuranceOption($insuranceOption)
            ->setInternationalShippingServiceOption($internationalShippingServiceOption)
            ->setSalesTax($salesTax)
            ->setShippingRateErrorMessage($shippingRateErrorMessage)
            ->setShippingServiceOption($shippingServiceOption)
            ->setTaxTable($taxTable)
            ->setInternationalInsuranceCost($internationalInsuranceCost)
            ->setInternationalInsuranceOption($internationalInsuranceOption)
            ->setCODCost($cODCost)
            ->setExcludeShipToLocation($excludeShipToLocation)
            ->setAny($any);
    }
    /**
     * Get GetItFast value
     * @return bool|null
     */
    public function getGetItFast()
    {
        return $this->GetItFast;
    }
    /**
     * Set GetItFast value
     * @param bool $getItFast
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setGetItFast($getItFast = null)
    {
        // validation for constraint: boolean
        if (!is_null($getItFast) && !is_bool($getItFast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($getItFast)), __LINE__);
        }
        $this->GetItFast = $getItFast;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInsuranceCost(\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null)
    {
        $this->InsuranceCost = $insuranceCost;
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
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
     * Get InternationalShippingServiceOption value
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[]|null
     */
    public function getInternationalShippingServiceOption()
    {
        return $this->InternationalShippingServiceOption;
    }
    /**
     * Set InternationalShippingServiceOption value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[] $internationalShippingServiceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalShippingServiceOption(array $internationalShippingServiceOption = array())
    {
        foreach ($internationalShippingServiceOption as $shippingDetailsTypeInternationalShippingServiceOptionItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeInternationalShippingServiceOptionItem instanceof \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType) {
                throw new \InvalidArgumentException(sprintf('The InternationalShippingServiceOption property can only contain items of \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType, "%s" given', is_object($shippingDetailsTypeInternationalShippingServiceOptionItem) ? get_class($shippingDetailsTypeInternationalShippingServiceOptionItem) : gettype($shippingDetailsTypeInternationalShippingServiceOptionItem)), __LINE__);
            }
        }
        $this->InternationalShippingServiceOption = $internationalShippingServiceOption;
        return $this;
    }
    /**
     * Add item to InternationalShippingServiceOption value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToInternationalShippingServiceOption(\macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType) {
            throw new \InvalidArgumentException(sprintf('The InternationalShippingServiceOption property can only contain items of \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InternationalShippingServiceOption[] = $item;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setSalesTax(\macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax = null)
    {
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get ShippingRateErrorMessage value
     * @return string|null
     */
    public function getShippingRateErrorMessage()
    {
        return $this->ShippingRateErrorMessage;
    }
    /**
     * Set ShippingRateErrorMessage value
     * @param string $shippingRateErrorMessage
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setShippingRateErrorMessage($shippingRateErrorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shippingRateErrorMessage) && !is_string($shippingRateErrorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingRateErrorMessage)), __LINE__);
        }
        $this->ShippingRateErrorMessage = $shippingRateErrorMessage;
        return $this;
    }
    /**
     * Get ShippingServiceOption value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[]|null
     */
    public function getShippingServiceOption()
    {
        return $this->ShippingServiceOption;
    }
    /**
     * Set ShippingServiceOption value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[] $shippingServiceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setShippingServiceOption(array $shippingServiceOption = array())
    {
        foreach ($shippingServiceOption as $shippingDetailsTypeShippingServiceOptionItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeShippingServiceOptionItem instanceof \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType) {
                throw new \InvalidArgumentException(sprintf('The ShippingServiceOption property can only contain items of \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType, "%s" given', is_object($shippingDetailsTypeShippingServiceOptionItem) ? get_class($shippingDetailsTypeShippingServiceOptionItem) : gettype($shippingDetailsTypeShippingServiceOptionItem)), __LINE__);
            }
        }
        $this->ShippingServiceOption = $shippingServiceOption;
        return $this;
    }
    /**
     * Add item to ShippingServiceOption value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToShippingServiceOption(\macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceOption property can only contain items of \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingServiceOption[] = $item;
        return $this;
    }
    /**
     * Get TaxTable value
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType|null
     */
    public function getTaxTable()
    {
        return $this->TaxTable;
    }
    /**
     * Set TaxTable value
     * @param \macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setTaxTable(\macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable = null)
    {
        $this->TaxTable = $taxTable;
        return $this;
    }
    /**
     * Get InternationalInsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getInternationalInsuranceCost()
    {
        return $this->InternationalInsuranceCost;
    }
    /**
     * Set InternationalInsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalInsuranceCost(\macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost = null)
    {
        $this->InternationalInsuranceCost = $internationalInsuranceCost;
        return $this;
    }
    /**
     * Get InternationalInsuranceOption value
     * @return string|null
     */
    public function getInternationalInsuranceOption()
    {
        return $this->InternationalInsuranceOption;
    }
    /**
     * Set InternationalInsuranceOption value
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $internationalInsuranceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalInsuranceOption($internationalInsuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid($internationalInsuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $internationalInsuranceOption, implode(', ', \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalInsuranceOption = $internationalInsuranceOption;
        return $this;
    }
    /**
     * Get CODCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getCODCost()
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $cODCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setCODCost(\macropage\ebaysdk\shopping\StructType\AmountType $cODCost = null)
    {
        $this->CODCost = $cODCost;
        return $this;
    }
    /**
     * Get ExcludeShipToLocation value
     * @return string[]|null
     */
    public function getExcludeShipToLocation()
    {
        return $this->ExcludeShipToLocation;
    }
    /**
     * Set ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string[] $excludeShipToLocation
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation = array())
    {
        foreach ($excludeShipToLocation as $shippingDetailsTypeExcludeShipToLocationItem) {
            // validation for constraint: itemType
            if (!is_string($shippingDetailsTypeExcludeShipToLocationItem)) {
                throw new \InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of string, "%s" given', is_object($shippingDetailsTypeExcludeShipToLocationItem) ? get_class($shippingDetailsTypeExcludeShipToLocationItem) : gettype($shippingDetailsTypeExcludeShipToLocationItem)), __LINE__);
            }
        }
        $this->ExcludeShipToLocation = $excludeShipToLocation;
        return $this;
    }
    /**
     * Add item to ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToExcludeShipToLocation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExcludeShipToLocation[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ShippingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
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
