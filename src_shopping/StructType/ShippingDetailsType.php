<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to express the shipping-related details for an order line item.
 * @subpackage Structs
 */
class ShippingDetailsType extends AbstractStructBase
{
    /**
     * The GetItFast
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GetItFast = null;
    /**
     * The InsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $InsuranceCost = null;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsuranceOption = null;
    /**
     * The InternationalShippingServiceOption
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A
     * <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay
     * listing. <br/><br/> No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the
     * <b>ShippingServiceOption</b> container instead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[]
     */
    protected array $InternationalShippingServiceOption = [];
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: This container is only returned if sales tax is applicable to the specified shipping destination.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SalesTaxType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\SalesTaxType $SalesTax = null;
    /**
     * The ShippingRateErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if an unexpected error occurs during the attempted calculation of shipping costs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingRateErrorMessage = null;
    /**
     * The ShippingServiceOption
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is
     * returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing. <br/><br/> No <b>ShippingServiceOption</b> containers are returned if the shipping destination
     * specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[]
     */
    protected array $ShippingServiceOption = [];
    /**
     * The TaxTable
     * Meta information extracted from the WSDL
     * - documentation: This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax
     * Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\TaxTableType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\TaxTableType $TaxTable = null;
    /**
     * The InternationalInsuranceCost
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $InternationalInsuranceCost = null;
    /**
     * The InternationalInsuranceOption
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalInsuranceOption = null;
    /**
     * The CODCost
     * Meta information extracted from the WSDL
     * - documentation: This field returns the cost of cash-on-delivery for the listing. This field is only applicable to the Italy site (site ID 101), and is only returned if cash-on-delivery is the only available logistics type for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $CODCost = null;
    /**
     * The ExcludeShipToLocation
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries,
     * individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of
     * <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of
     * <code>Middle East</code> for each international shipping service option. <br/><br/> 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy
     * associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ExcludeShipToLocation = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $getItFast = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null, ?string $insuranceOption = null, array $internationalShippingServiceOption = [], ?\macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax = null, ?string $shippingRateErrorMessage = null, array $shippingServiceOption = [], ?\macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost = null, ?string $internationalInsuranceOption = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $cODCost = null, array $excludeShipToLocation = [], $any = null)
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
    public function getGetItFast(): ?bool
    {
        return $this->GetItFast;
    }
    /**
     * Set GetItFast value
     * @param bool $getItFast
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setGetItFast(?bool $getItFast = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getItFast) && !is_bool($getItFast)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getItFast, true), gettype($getItFast)), __LINE__);
        }
        $this->GetItFast = $getItFast;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInsuranceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $insuranceCost = null): self
    {
        $this->InsuranceCost = $insuranceCost;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
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
     * Get InternationalShippingServiceOption value
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[]
     */
    public function getInternationalShippingServiceOption(): array
    {
        return $this->InternationalShippingServiceOption;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalShippingServiceOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalShippingServiceOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalShippingServiceOptionForArrayConstraintsFromSetInternationalShippingServiceOption(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingDetailsTypeInternationalShippingServiceOptionItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeInternationalShippingServiceOptionItem instanceof \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType) {
                $invalidValues[] = is_object($shippingDetailsTypeInternationalShippingServiceOptionItem) ? get_class($shippingDetailsTypeInternationalShippingServiceOptionItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeInternationalShippingServiceOptionItem), var_export($shippingDetailsTypeInternationalShippingServiceOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InternationalShippingServiceOption property can only contain items of type \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalShippingServiceOption value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType[] $internationalShippingServiceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalShippingServiceOption(array $internationalShippingServiceOption = []): self
    {
        // validation for constraint: array
        if ('' !== ($internationalShippingServiceOptionArrayErrorMessage = self::validateInternationalShippingServiceOptionForArrayConstraintsFromSetInternationalShippingServiceOption($internationalShippingServiceOption))) {
            throw new InvalidArgumentException($internationalShippingServiceOptionArrayErrorMessage, __LINE__);
        }
        $this->InternationalShippingServiceOption = $internationalShippingServiceOption;
        
        return $this;
    }
    /**
     * Add item to InternationalShippingServiceOption value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToInternationalShippingServiceOption(\macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType) {
            throw new InvalidArgumentException(sprintf('The InternationalShippingServiceOption property can only contain items of type \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InternationalShippingServiceOption[] = $item;
        
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType|null
     */
    public function getSalesTax(): ?\macropage\ebaysdk\shopping\StructType\SalesTaxType
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setSalesTax(?\macropage\ebaysdk\shopping\StructType\SalesTaxType $salesTax = null): self
    {
        $this->SalesTax = $salesTax;
        
        return $this;
    }
    /**
     * Get ShippingRateErrorMessage value
     * @return string|null
     */
    public function getShippingRateErrorMessage(): ?string
    {
        return $this->ShippingRateErrorMessage;
    }
    /**
     * Set ShippingRateErrorMessage value
     * @param string $shippingRateErrorMessage
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setShippingRateErrorMessage(?string $shippingRateErrorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingRateErrorMessage) && !is_string($shippingRateErrorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingRateErrorMessage, true), gettype($shippingRateErrorMessage)), __LINE__);
        }
        $this->ShippingRateErrorMessage = $shippingRateErrorMessage;
        
        return $this;
    }
    /**
     * Get ShippingServiceOption value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[]
     */
    public function getShippingServiceOption(): array
    {
        return $this->ShippingServiceOption;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceOptionForArrayConstraintsFromSetShippingServiceOption(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingDetailsTypeShippingServiceOptionItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeShippingServiceOptionItem instanceof \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType) {
                $invalidValues[] = is_object($shippingDetailsTypeShippingServiceOptionItem) ? get_class($shippingDetailsTypeShippingServiceOptionItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeShippingServiceOptionItem), var_export($shippingDetailsTypeShippingServiceOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceOption property can only contain items of type \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingServiceOption value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType[] $shippingServiceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setShippingServiceOption(array $shippingServiceOption = []): self
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceOptionArrayErrorMessage = self::validateShippingServiceOptionForArrayConstraintsFromSetShippingServiceOption($shippingServiceOption))) {
            throw new InvalidArgumentException($shippingServiceOptionArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceOption = $shippingServiceOption;
        
        return $this;
    }
    /**
     * Add item to ShippingServiceOption value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToShippingServiceOption(\macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType) {
            throw new InvalidArgumentException(sprintf('The ShippingServiceOption property can only contain items of type \macropage\ebaysdk\shopping\StructType\ShippingServiceOptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceOption[] = $item;
        
        return $this;
    }
    /**
     * Get TaxTable value
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType|null
     */
    public function getTaxTable(): ?\macropage\ebaysdk\shopping\StructType\TaxTableType
    {
        return $this->TaxTable;
    }
    /**
     * Set TaxTable value
     * @param \macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setTaxTable(?\macropage\ebaysdk\shopping\StructType\TaxTableType $taxTable = null): self
    {
        $this->TaxTable = $taxTable;
        
        return $this;
    }
    /**
     * Get InternationalInsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getInternationalInsuranceCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->InternationalInsuranceCost;
    }
    /**
     * Set InternationalInsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalInsuranceCost(?\macropage\ebaysdk\shopping\StructType\AmountType $internationalInsuranceCost = null): self
    {
        $this->InternationalInsuranceCost = $internationalInsuranceCost;
        
        return $this;
    }
    /**
     * Get InternationalInsuranceOption value
     * @return string|null
     */
    public function getInternationalInsuranceOption(): ?string
    {
        return $this->InternationalInsuranceOption;
    }
    /**
     * Set InternationalInsuranceOption value
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $internationalInsuranceOption
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setInternationalInsuranceOption(?string $internationalInsuranceOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::valueIsValid($internationalInsuranceOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType', is_array($internationalInsuranceOption) ? implode(', ', $internationalInsuranceOption) : var_export($internationalInsuranceOption, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalInsuranceOption = $internationalInsuranceOption;
        
        return $this;
    }
    /**
     * Get CODCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getCODCost(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $cODCost
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setCODCost(?\macropage\ebaysdk\shopping\StructType\AmountType $cODCost = null): self
    {
        $this->CODCost = $cODCost;
        
        return $this;
    }
    /**
     * Get ExcludeShipToLocation value
     * @return string[]
     */
    public function getExcludeShipToLocation(): array
    {
        return $this->ExcludeShipToLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeShipToLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeShipToLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeShipToLocationForArrayConstraintsFromSetExcludeShipToLocation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingDetailsTypeExcludeShipToLocationItem) {
            // validation for constraint: itemType
            if (!is_string($shippingDetailsTypeExcludeShipToLocationItem)) {
                $invalidValues[] = is_object($shippingDetailsTypeExcludeShipToLocationItem) ? get_class($shippingDetailsTypeExcludeShipToLocationItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeExcludeShipToLocationItem), var_export($shippingDetailsTypeExcludeShipToLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeShipToLocation property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExcludeShipToLocation value
     * @throws InvalidArgumentException
     * @param string[] $excludeShipToLocation
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation = []): self
    {
        // validation for constraint: array
        if ('' !== ($excludeShipToLocationArrayErrorMessage = self::validateExcludeShipToLocationForArrayConstraintsFromSetExcludeShipToLocation($excludeShipToLocation))) {
            throw new InvalidArgumentException($excludeShipToLocationArrayErrorMessage, __LINE__);
        }
        $this->ExcludeShipToLocation = $excludeShipToLocation;
        
        return $this;
    }
    /**
     * Add item to ExcludeShipToLocation value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
     */
    public function addToExcludeShipToLocation(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeShipToLocation[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ShippingDetailsType
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
