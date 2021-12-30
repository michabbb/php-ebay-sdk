<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReturnPolicyDetails</b> container, which is returned in <b>GeteBayDetails</b>, and provides the seller with the Return Policy features (and applicable values) that are supported by the listing site. This
 * container is only returned if <b>ReturnPolicyDetails</b> is included as a <b>DetailName</b> filter in the call request, or if no <b>DetailName</b> filters are used in the request. <br/><br/> <span class="tablenote"><b>Note: </b> The
 * <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what Return Policy
 * features/settings that a particular category supports, call <b>GetCategoryFeatures</b> and include any or all of the domestic and or international Return Policy-related <b>FeatureID</b> values to see the Return Policy features/settings available for
 * domestic and international returns, respectively. </span>
 * @subpackage Structs
 */
class ReturnPolicyDetailsType extends AbstractStructBase
{
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in
     * <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call. <br/><br/> <span class="tablenote"><b>Note: </b> To discover what refund options that a particular category supports, call
     * <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     * </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundDetailsType[]
     */
    protected ?array $Refund = null;
    /**
     * The ReturnsWithin
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the
     * <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call. <br/><br/> <span class="tablenote"><b>Note: </b> To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include
     * <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[]
     */
    protected ?array $ReturnsWithin = null;
    /**
     * The ReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the
     * buyer to return the item. <br/><br/> <span class="tablenote"><b>Note: </b> To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or
     * <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns,
     * respectively. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[]
     */
    protected ?array $ReturnsAccepted = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is returned with a value of <code>true</code> if the site supports a text description of the seller's Return Policy in listings. If the site does support a text description of the seller's Return Policy, it is set through
     * the <b>ReturnPolicy.Description</b> field in an Add/Revise/Relist API call. Currently, the only eBay sites that support Return Policy descriptions are Germany, Austria, France, Italy, and Spain. <br/><br/> <span class="tablenote"><b>Note: </b> To
     * discover if a Return Policy desciption is supported by a particular category, call <b>GetCategoryFeatures</b> and include <code>ReturnPolicyDescriptionEnabled</code> as a <b>FeatureID</b> value to see if the category supports the use of a Return
     * Policy description. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Description = null;
    /**
     * The WarrantyOffered
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[]
     */
    protected ?array $WarrantyOffered = null;
    /**
     * The WarrantyType
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[]
     */
    protected ?array $WarrantyType = null;
    /**
     * The WarrantyDuration
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[]
     */
    protected ?array $WarrantyDuration = null;
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to specify a European Article Number (EAN) through a listings's return policy.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EAN = null;
    /**
     * The ShippingCostPaidBy
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call.
     * This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[]
     */
    protected ?array $ShippingCostPaidBy = null;
    /**
     * The RestockingFeeValue
     * Meta information extracted from the WSDL
     * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[]
     */
    protected ?array $RestockingFeeValue = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for the Return Policy Details metadata set. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp in GMT indicate when the Return Policy Details metadata were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ReturnPolicyDetailsType
     * @uses ReturnPolicyDetailsType::setRefund()
     * @uses ReturnPolicyDetailsType::setReturnsWithin()
     * @uses ReturnPolicyDetailsType::setReturnsAccepted()
     * @uses ReturnPolicyDetailsType::setDescription()
     * @uses ReturnPolicyDetailsType::setWarrantyOffered()
     * @uses ReturnPolicyDetailsType::setWarrantyType()
     * @uses ReturnPolicyDetailsType::setWarrantyDuration()
     * @uses ReturnPolicyDetailsType::setEAN()
     * @uses ReturnPolicyDetailsType::setShippingCostPaidBy()
     * @uses ReturnPolicyDetailsType::setRestockingFeeValue()
     * @uses ReturnPolicyDetailsType::setDetailVersion()
     * @uses ReturnPolicyDetailsType::setUpdateTime()
     * @uses ReturnPolicyDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundDetailsType[] $refund
     * @param \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[] $returnsWithin
     * @param \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[] $returnsAccepted
     * @param bool $description
     * @param \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[] $warrantyOffered
     * @param \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[] $warrantyType
     * @param \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[] $warrantyDuration
     * @param bool $eAN
     * @param \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[] $shippingCostPaidBy
     * @param \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[] $restockingFeeValue
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $refund = null, ?array $returnsWithin = null, ?array $returnsAccepted = null, ?bool $description = null, ?array $warrantyOffered = null, ?array $warrantyType = null, ?array $warrantyDuration = null, ?bool $eAN = null, ?array $shippingCostPaidBy = null, ?array $restockingFeeValue = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setRefund($refund)
            ->setReturnsWithin($returnsWithin)
            ->setReturnsAccepted($returnsAccepted)
            ->setDescription($description)
            ->setWarrantyOffered($warrantyOffered)
            ->setWarrantyType($warrantyType)
            ->setWarrantyDuration($warrantyDuration)
            ->setEAN($eAN)
            ->setShippingCostPaidBy($shippingCostPaidBy)
            ->setRestockingFeeValue($restockingFeeValue)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get Refund value
     * @return \macropage\ebaysdk\trading\StructType\RefundDetailsType[]
     */
    public function getRefund(): ?array
    {
        return $this->Refund;
    }
    /**
     * This method is responsible for validating the values passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundForArrayConstraintsFromSetRefund(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeRefundItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeRefundItem instanceof \macropage\ebaysdk\trading\StructType\RefundDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeRefundItem) ? get_class($returnPolicyDetailsTypeRefundItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeRefundItem), var_export($returnPolicyDetailsTypeRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Refund property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Refund value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundDetailsType[] $refund
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setRefund(?array $refund = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintsFromSetRefund($refund))) {
            throw new InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        $this->Refund = $refund;
        
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToRefund(\macropage\ebaysdk\trading\StructType\RefundDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundDetailsType) {
            throw new InvalidArgumentException(sprintf('The Refund property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Refund[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnsWithin value
     * @return \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[]
     */
    public function getReturnsWithin(): ?array
    {
        return $this->ReturnsWithin;
    }
    /**
     * This method is responsible for validating the values passed to the setReturnsWithin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturnsWithin method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnsWithinForArrayConstraintsFromSetReturnsWithin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeReturnsWithinItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeReturnsWithinItem instanceof \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeReturnsWithinItem) ? get_class($returnPolicyDetailsTypeReturnsWithinItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeReturnsWithinItem), var_export($returnPolicyDetailsTypeReturnsWithinItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReturnsWithin property can only contain items of type \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReturnsWithin value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[] $returnsWithin
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setReturnsWithin(?array $returnsWithin = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnsWithinArrayErrorMessage = self::validateReturnsWithinForArrayConstraintsFromSetReturnsWithin($returnsWithin))) {
            throw new InvalidArgumentException($returnsWithinArrayErrorMessage, __LINE__);
        }
        $this->ReturnsWithin = $returnsWithin;
        
        return $this;
    }
    /**
     * Add item to ReturnsWithin value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToReturnsWithin(\macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType) {
            throw new InvalidArgumentException(sprintf('The ReturnsWithin property can only contain items of type \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReturnsWithin[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnsAccepted value
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[]
     */
    public function getReturnsAccepted(): ?array
    {
        return $this->ReturnsAccepted;
    }
    /**
     * This method is responsible for validating the values passed to the setReturnsAccepted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturnsAccepted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnsAcceptedForArrayConstraintsFromSetReturnsAccepted(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeReturnsAcceptedItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeReturnsAcceptedItem instanceof \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeReturnsAcceptedItem) ? get_class($returnPolicyDetailsTypeReturnsAcceptedItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeReturnsAcceptedItem), var_export($returnPolicyDetailsTypeReturnsAcceptedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReturnsAccepted property can only contain items of type \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReturnsAccepted value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[] $returnsAccepted
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setReturnsAccepted(?array $returnsAccepted = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnsAcceptedArrayErrorMessage = self::validateReturnsAcceptedForArrayConstraintsFromSetReturnsAccepted($returnsAccepted))) {
            throw new InvalidArgumentException($returnsAcceptedArrayErrorMessage, __LINE__);
        }
        $this->ReturnsAccepted = $returnsAccepted;
        
        return $this;
    }
    /**
     * Add item to ReturnsAccepted value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToReturnsAccepted(\macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType) {
            throw new InvalidArgumentException(sprintf('The ReturnsAccepted property can only contain items of type \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReturnsAccepted[] = $item;
        
        return $this;
    }
    /**
     * Get Description value
     * @return bool|null
     */
    public function getDescription(): ?bool
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param bool $description
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setDescription(?bool $description = null): self
    {
        // validation for constraint: boolean
        if (!is_null($description) && !is_bool($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get WarrantyOffered value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[]
     */
    public function getWarrantyOffered(): ?array
    {
        return $this->WarrantyOffered;
    }
    /**
     * This method is responsible for validating the values passed to the setWarrantyOffered method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarrantyOffered method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarrantyOfferedForArrayConstraintsFromSetWarrantyOffered(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeWarrantyOfferedItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyOfferedItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeWarrantyOfferedItem) ? get_class($returnPolicyDetailsTypeWarrantyOfferedItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeWarrantyOfferedItem), var_export($returnPolicyDetailsTypeWarrantyOfferedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WarrantyOffered property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WarrantyOffered value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[] $warrantyOffered
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyOffered(?array $warrantyOffered = null): self
    {
        // validation for constraint: array
        if ('' !== ($warrantyOfferedArrayErrorMessage = self::validateWarrantyOfferedForArrayConstraintsFromSetWarrantyOffered($warrantyOffered))) {
            throw new InvalidArgumentException($warrantyOfferedArrayErrorMessage, __LINE__);
        }
        $this->WarrantyOffered = $warrantyOffered;
        
        return $this;
    }
    /**
     * Add item to WarrantyOffered value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyOffered(\macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType) {
            throw new InvalidArgumentException(sprintf('The WarrantyOffered property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WarrantyOffered[] = $item;
        
        return $this;
    }
    /**
     * Get WarrantyType value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[]
     */
    public function getWarrantyType(): ?array
    {
        return $this->WarrantyType;
    }
    /**
     * This method is responsible for validating the values passed to the setWarrantyType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarrantyType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarrantyTypeForArrayConstraintsFromSetWarrantyType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeWarrantyTypeItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyTypeItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeWarrantyTypeItem) ? get_class($returnPolicyDetailsTypeWarrantyTypeItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeWarrantyTypeItem), var_export($returnPolicyDetailsTypeWarrantyTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WarrantyType property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WarrantyType value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[] $warrantyType
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyType(?array $warrantyType = null): self
    {
        // validation for constraint: array
        if ('' !== ($warrantyTypeArrayErrorMessage = self::validateWarrantyTypeForArrayConstraintsFromSetWarrantyType($warrantyType))) {
            throw new InvalidArgumentException($warrantyTypeArrayErrorMessage, __LINE__);
        }
        $this->WarrantyType = $warrantyType;
        
        return $this;
    }
    /**
     * Add item to WarrantyType value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyType(\macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType) {
            throw new InvalidArgumentException(sprintf('The WarrantyType property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WarrantyType[] = $item;
        
        return $this;
    }
    /**
     * Get WarrantyDuration value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[]
     */
    public function getWarrantyDuration(): ?array
    {
        return $this->WarrantyDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setWarrantyDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarrantyDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarrantyDurationForArrayConstraintsFromSetWarrantyDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeWarrantyDurationItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyDurationItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeWarrantyDurationItem) ? get_class($returnPolicyDetailsTypeWarrantyDurationItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeWarrantyDurationItem), var_export($returnPolicyDetailsTypeWarrantyDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WarrantyDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WarrantyDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[] $warrantyDuration
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyDuration(?array $warrantyDuration = null): self
    {
        // validation for constraint: array
        if ('' !== ($warrantyDurationArrayErrorMessage = self::validateWarrantyDurationForArrayConstraintsFromSetWarrantyDuration($warrantyDuration))) {
            throw new InvalidArgumentException($warrantyDurationArrayErrorMessage, __LINE__);
        }
        $this->WarrantyDuration = $warrantyDuration;
        
        return $this;
    }
    /**
     * Add item to WarrantyDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyDuration(\macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType) {
            throw new InvalidArgumentException(sprintf('The WarrantyDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WarrantyDuration[] = $item;
        
        return $this;
    }
    /**
     * Get EAN value
     * @return bool|null
     */
    public function getEAN(): ?bool
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param bool $eAN
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setEAN(?bool $eAN = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eAN) && !is_bool($eAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eAN, true), gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        
        return $this;
    }
    /**
     * Get ShippingCostPaidBy value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[]
     */
    public function getShippingCostPaidBy(): ?array
    {
        return $this->ShippingCostPaidBy;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingCostPaidBy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingCostPaidBy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingCostPaidByForArrayConstraintsFromSetShippingCostPaidBy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeShippingCostPaidByItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeShippingCostPaidByItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeShippingCostPaidByItem) ? get_class($returnPolicyDetailsTypeShippingCostPaidByItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeShippingCostPaidByItem), var_export($returnPolicyDetailsTypeShippingCostPaidByItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingCostPaidBy property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingCostPaidBy value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[] $shippingCostPaidBy
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setShippingCostPaidBy(?array $shippingCostPaidBy = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingCostPaidByArrayErrorMessage = self::validateShippingCostPaidByForArrayConstraintsFromSetShippingCostPaidBy($shippingCostPaidBy))) {
            throw new InvalidArgumentException($shippingCostPaidByArrayErrorMessage, __LINE__);
        }
        $this->ShippingCostPaidBy = $shippingCostPaidBy;
        
        return $this;
    }
    /**
     * Add item to ShippingCostPaidBy value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToShippingCostPaidBy(\macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShippingCostPaidBy property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingCostPaidBy[] = $item;
        
        return $this;
    }
    /**
     * Get RestockingFeeValue value
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[]
     */
    public function getRestockingFeeValue(): ?array
    {
        return $this->RestockingFeeValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRestockingFeeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestockingFeeValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestockingFeeValueForArrayConstraintsFromSetRestockingFeeValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $returnPolicyDetailsTypeRestockingFeeValueItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeRestockingFeeValueItem instanceof \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType) {
                $invalidValues[] = is_object($returnPolicyDetailsTypeRestockingFeeValueItem) ? get_class($returnPolicyDetailsTypeRestockingFeeValueItem) : sprintf('%s(%s)', gettype($returnPolicyDetailsTypeRestockingFeeValueItem), var_export($returnPolicyDetailsTypeRestockingFeeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RestockingFeeValue property can only contain items of type \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RestockingFeeValue value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[] $restockingFeeValue
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setRestockingFeeValue(?array $restockingFeeValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($restockingFeeValueArrayErrorMessage = self::validateRestockingFeeValueForArrayConstraintsFromSetRestockingFeeValue($restockingFeeValue))) {
            throw new InvalidArgumentException($restockingFeeValueArrayErrorMessage, __LINE__);
        }
        $this->RestockingFeeValue = $restockingFeeValue;
        
        return $this;
    }
    /**
     * Add item to RestockingFeeValue value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToRestockingFeeValue(\macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType) {
            throw new InvalidArgumentException(sprintf('The RestockingFeeValue property can only contain items of type \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RestockingFeeValue[] = $item;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
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
