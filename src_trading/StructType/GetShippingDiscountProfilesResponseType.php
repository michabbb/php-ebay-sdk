<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingDiscountProfilesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetShippingDiscountProfiles</b> call.
 * @subpackage Structs
 */
class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
    /**
     * The CurrencyID
     * Meta information extracted from the WSDL
     * - documentation: The three-digit code of the currency to be used for shipping cost discounts. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a
     * listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrencyID = null;
    /**
     * The FlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more flat-rate shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no flat-rate shipping discount rules are currently set for the
     * seller's account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $FlatShippingDiscount = null;
    /**
     * The CalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more calculated shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no calculated shipping discount rules are currently set for the
     * seller's account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $CalculatedShippingDiscount = null;
    /**
     * The PromotionalShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not a seller has set up a promotional shipping discount rule in the seller's account. Only one promotional shipping discount may be defined for a seller's account at any given time. This field is
     * returned whether <code>false</code> or <code>true</code>. If <code>true</code>, details of the rule can be found in the <b>PromotionalShippingDiscountDetails</b> container.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PromotionalShippingDiscount = null;
    /**
     * The CalculatedHandlingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the handling discount applicable to a calculated shipping discount rule that is set up for a seller's account. This container is not returned if no calculated shipping discount rules are currently set for
     * the seller's account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $CalculatedHandlingDiscount = null;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of information related to the promotional shipping discount rule that is set up for a seller's account. This container is not returned if no promotional shipping discount rule is set up for the seller's
     * account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails = null;
    /**
     * The ShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $ShippingInsurance = null;
    /**
     * The InternationalShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $InternationalShippingInsurance = null;
    /**
     * The CombinedDuration
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes one payment
     * for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CombinedDuration = null;
    /**
     * Constructor method for GetShippingDiscountProfilesResponseType
     * @uses GetShippingDiscountProfilesResponseType::setCurrencyID()
     * @uses GetShippingDiscountProfilesResponseType::setFlatShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setCalculatedShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setPromotionalShippingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setCalculatedHandlingDiscount()
     * @uses GetShippingDiscountProfilesResponseType::setPromotionalShippingDiscountDetails()
     * @uses GetShippingDiscountProfilesResponseType::setShippingInsurance()
     * @uses GetShippingDiscountProfilesResponseType::setInternationalShippingInsurance()
     * @uses GetShippingDiscountProfilesResponseType::setCombinedDuration()
     * @param string $currencyID
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @param bool $promotionalShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @param \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance
     * @param string $combinedDuration
     */
    public function __construct(?string $currencyID = null, ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, ?bool $promotionalShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null, ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance = null, ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null, ?string $combinedDuration = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->setFlatShippingDiscount($flatShippingDiscount)
            ->setCalculatedShippingDiscount($calculatedShippingDiscount)
            ->setPromotionalShippingDiscount($promotionalShippingDiscount)
            ->setCalculatedHandlingDiscount($calculatedHandlingDiscount)
            ->setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
            ->setShippingInsurance($shippingInsurance)
            ->setInternationalShippingInsurance($internationalShippingInsurance)
            ->setCombinedDuration($combinedDuration);
    }
    /**
     * Get CurrencyID value
     * @return string|null
     */
    public function getCurrencyID(): ?string
    {
        return $this->CurrencyID;
    }
    /**
     * Set CurrencyID value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currencyID
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setCurrencyID(?string $currencyID = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->CurrencyID = $currencyID;
        
        return $this;
    }
    /**
     * Get FlatShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    public function getFlatShippingDiscount(): ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
    {
        return $this->FlatShippingDiscount;
    }
    /**
     * Set FlatShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setFlatShippingDiscount(?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null): self
    {
        $this->FlatShippingDiscount = $flatShippingDiscount;
        
        return $this;
    }
    /**
     * Get CalculatedShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    public function getCalculatedShippingDiscount(): ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
    {
        return $this->CalculatedShippingDiscount;
    }
    /**
     * Set CalculatedShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setCalculatedShippingDiscount(?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null): self
    {
        $this->CalculatedShippingDiscount = $calculatedShippingDiscount;
        
        return $this;
    }
    /**
     * Get PromotionalShippingDiscount value
     * @return bool|null
     */
    public function getPromotionalShippingDiscount(): ?bool
    {
        return $this->PromotionalShippingDiscount;
    }
    /**
     * Set PromotionalShippingDiscount value
     * @param bool $promotionalShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setPromotionalShippingDiscount(?bool $promotionalShippingDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promotionalShippingDiscount) && !is_bool($promotionalShippingDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promotionalShippingDiscount, true), gettype($promotionalShippingDiscount)), __LINE__);
        }
        $this->PromotionalShippingDiscount = $promotionalShippingDiscount;
        
        return $this;
    }
    /**
     * Get CalculatedHandlingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType|null
     */
    public function getCalculatedHandlingDiscount(): ?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
    {
        return $this->CalculatedHandlingDiscount;
    }
    /**
     * Set CalculatedHandlingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setCalculatedHandlingDiscount(?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null): self
    {
        $this->CalculatedHandlingDiscount = $calculatedHandlingDiscount;
        
        return $this;
    }
    /**
     * Get PromotionalShippingDiscountDetails value
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType|null
     */
    public function getPromotionalShippingDiscountDetails(): ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
    {
        return $this->PromotionalShippingDiscountDetails;
    }
    /**
     * Set PromotionalShippingDiscountDetails value
     * @param \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setPromotionalShippingDiscountDetails(?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null): self
    {
        $this->PromotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        
        return $this;
    }
    /**
     * Get ShippingInsurance value
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    public function getShippingInsurance(): ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType
    {
        return $this->ShippingInsurance;
    }
    /**
     * Set ShippingInsurance value
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setShippingInsurance(?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance = null): self
    {
        $this->ShippingInsurance = $shippingInsurance;
        
        return $this;
    }
    /**
     * Get InternationalShippingInsurance value
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    public function getInternationalShippingInsurance(): ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType
    {
        return $this->InternationalShippingInsurance;
    }
    /**
     * Set InternationalShippingInsurance value
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setInternationalShippingInsurance(?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null): self
    {
        $this->InternationalShippingInsurance = $internationalShippingInsurance;
        
        return $this;
    }
    /**
     * Get CombinedDuration value
     * @return string|null
     */
    public function getCombinedDuration(): ?string
    {
        return $this->CombinedDuration;
    }
    /**
     * Set CombinedDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $combinedDuration
     * @return \macropage\ebaysdk\trading\StructType\GetShippingDiscountProfilesResponseType
     */
    public function setCombinedDuration(?string $combinedDuration = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType', is_array($combinedDuration) ? implode(', ', $combinedDuration) : var_export($combinedDuration, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedDuration = $combinedDuration;
        
        return $this;
    }
}
