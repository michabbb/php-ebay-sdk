<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShippingDiscountProfilesRequestType StructType
 * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - documentation: The three-digit code of the currency to be used for shipping discounts and insurance for Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the
     * <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles. <br><br> <br><br> Note that There is a <b>currencyID</b> attribute on all
     * <b>SetShippingDiscountProfiles</b> elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyID;
    /**
     * The CombinedDuration
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the number of days after the purchase of an item that the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes
     * one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     * - minOccurs: 0
     * @var string
     */
    public $CombinedDuration;
    /**
     * The ModifyActionCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount
     * profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the
     * <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     * - minOccurs: 0
     * @var string
     */
    public $ModifyActionCode;
    /**
     * The FlatShippingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a flat-rate shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public $FlatShippingDiscount;
    /**
     * The CalculatedShippingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
     */
    public $CalculatedShippingDiscount;
    /**
     * The CalculatedHandlingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a calculated handling discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public $CalculatedHandlingDiscount;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container allows you to create, update, or delete a promotional shipping discount profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public $PromotionalShippingDiscountDetails;
    /**
     * The ShippingInsurance
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public $ShippingInsurance;
    /**
     * The InternationalShippingInsurance
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingInsuranceType
     */
    public $InternationalShippingInsurance;
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
    public function __construct($currencyID = null, $combinedDuration = null, $modifyActionCode = null, \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null, \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null, \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance = null, \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null)
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
    public function getCurrencyID()
    {
        return $this->CurrencyID;
    }
    /**
     * Set CurrencyID value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyID
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCurrencyID($currencyID = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currencyID, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->CurrencyID = $currencyID;
        return $this;
    }
    /**
     * Get CombinedDuration value
     * @return string|null
     */
    public function getCombinedDuration()
    {
        return $this->CombinedDuration;
    }
    /**
     * Set CombinedDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combinedDuration
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCombinedDuration($combinedDuration = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedDuration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $combinedDuration, implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedDuration = $combinedDuration;
        return $this;
    }
    /**
     * Get ModifyActionCode value
     * @return string|null
     */
    public function getModifyActionCode()
    {
        return $this->ModifyActionCode;
    }
    /**
     * Set ModifyActionCode value
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modifyActionCode
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setModifyActionCode($modifyActionCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid($modifyActionCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $modifyActionCode, implode(', ', \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->ModifyActionCode = $modifyActionCode;
        return $this;
    }
    /**
     * Get FlatShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    public function getFlatShippingDiscount()
    {
        return $this->FlatShippingDiscount;
    }
    /**
     * Set FlatShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setFlatShippingDiscount(\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null)
    {
        $this->FlatShippingDiscount = $flatShippingDiscount;
        return $this;
    }
    /**
     * Get CalculatedShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->CalculatedShippingDiscount;
    }
    /**
     * Set CalculatedShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedShippingDiscount(\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null)
    {
        $this->CalculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }
    /**
     * Get CalculatedHandlingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType|null
     */
    public function getCalculatedHandlingDiscount()
    {
        return $this->CalculatedHandlingDiscount;
    }
    /**
     * Set CalculatedHandlingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedHandlingDiscount(\macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType $calculatedHandlingDiscount = null)
    {
        $this->CalculatedHandlingDiscount = $calculatedHandlingDiscount;
        return $this;
    }
    /**
     * Get PromotionalShippingDiscountDetails value
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType|null
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->PromotionalShippingDiscountDetails;
    }
    /**
     * Set PromotionalShippingDiscountDetails value
     * @param \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setPromotionalShippingDiscountDetails(\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null)
    {
        $this->PromotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }
    /**
     * Get ShippingInsurance value
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    public function getShippingInsurance()
    {
        return $this->ShippingInsurance;
    }
    /**
     * Set ShippingInsurance value
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setShippingInsurance(\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $shippingInsurance = null)
    {
        $this->ShippingInsurance = $shippingInsurance;
        return $this;
    }
    /**
     * Get InternationalShippingInsurance value
     * @return \macropage\ebaysdk\trading\StructType\ShippingInsuranceType|null
     */
    public function getInternationalShippingInsurance()
    {
        return $this->InternationalShippingInsurance;
    }
    /**
     * Set InternationalShippingInsurance value
     * @param \macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
     */
    public function setInternationalShippingInsurance(\macropage\ebaysdk\trading\StructType\ShippingInsuranceType $internationalShippingInsurance = null)
    {
        $this->InternationalShippingInsurance = $internationalShippingInsurance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetShippingDiscountProfilesRequestType
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
