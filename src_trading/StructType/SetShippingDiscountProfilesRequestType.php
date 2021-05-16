<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShippingDiscountProfilesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call enables a seller to create and manage shipping discounts rules. These are the same shipping discount rules that can be created or managed in My eBay Shipping Preferences. <br/><br/> The types of shipping discount rules that
 * can be created and managed with this call include flat-rate shipping rules, calculated shipping rules, and promotional shipping rules. This call can also be used by sellers to set whether or not they allow buyers to combine separate line items into
 * one Combined Invoice order, and how many days they allow buyers to perform that action. <br/><br/> A seller can only create, update, or delete one discount rule type with each call. The action to take (either <code>Add</code>, <code>Update</code>, or
 * <code>Delete</code>) is set and controlled with the <b>ModifyActionCode</b> field.
 * @subpackage Structs
 */
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{
    /**
     * The CurrencyID
     * Meta information extracted from the WSDL
     * - documentation: The three-digit code of the currency to be used for shipping discounts on Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the
     * <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles. <br><br> Note that There is a <b>currencyID</b> attribute on all <b>SetShippingDiscountProfiles</b>
     * elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrencyID = null;
    /**
     * The CombinedDuration
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the number of days after the purchase of an item that the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes
     * one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CombinedDuration = null;
    /**
     * The ModifyActionCode
     * Meta information extracted from the WSDL
     * - documentation: This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount
     * profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the
     * <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModifyActionCode = null;
    /**
     * The FlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a flat-rate shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $FlatShippingDiscount = null;
    /**
     * The CalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $CalculatedShippingDiscount = null;
    /**
     * The CalculatedHandlingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated handling discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $CalculatedHandlingDiscount = null;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta information extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a promotional shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails = null;
    /**
     * The ShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $ShippingInsurance = null;
    /**
     * The InternationalShippingInsurance
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $InternationalShippingInsurance = null;
    /**
     * Constructor method for SetShippingDiscountProfilesRequestType
     * @uses SetShippingDiscountProfilesRequestType::setCurrencyID()
     * @uses SetShippingDiscountProfilesRequestType::setCombinedDuration()
     * @uses SetShippingDiscountProfilesRequestType::setModifyActionCode()
     * @uses SetShippingDiscountProfilesRequestType::setFlatShippingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setCalculatedShippingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setCalculatedHandlingDiscount()
     * @uses SetShippingDiscountProfilesRequestType::setPromotionalShippingDiscountDetails()
     * @uses SetShippingDiscountProfilesRequestType::setShippingInsurance()
     * @uses SetShippingDiscountProfilesRequestType::setInternationalShippingInsurance()
     * @param string $currencyID
     * @param string $combinedDuration
     * @param string $modifyActionCode
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @param \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance
     */
    public function __construct(?string $currencyID = null, ?string $combinedDuration = null, ?string $modifyActionCode = null, ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null, ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance = null, ?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->setCombinedDuration($combinedDuration)
            ->setModifyActionCode($modifyActionCode)
            ->setFlatShippingDiscount($flatShippingDiscount)
            ->setCalculatedShippingDiscount($calculatedShippingDiscount)
            ->setCalculatedHandlingDiscount($calculatedHandlingDiscount)
            ->setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
            ->setShippingInsurance($shippingInsurance)
            ->setInternationalShippingInsurance($internationalShippingInsurance);
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
    /**
     * Get ModifyActionCode value
     * @return string|null
     */
    public function getModifyActionCode(): ?string
    {
        return $this->ModifyActionCode;
    }
    /**
     * Set ModifyActionCode value
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modifyActionCode
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setModifyActionCode(?string $modifyActionCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid($modifyActionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType', is_array($modifyActionCode) ? implode(', ', $modifyActionCode) : var_export($modifyActionCode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->ModifyActionCode = $modifyActionCode;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedShippingDiscount(?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null): self
    {
        $this->CalculatedShippingDiscount = $calculatedShippingDiscount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setInternationalShippingInsurance(?\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null): self
    {
        $this->InternationalShippingInsurance = $internationalShippingInsurance;
        
        return $this;
    }
}
