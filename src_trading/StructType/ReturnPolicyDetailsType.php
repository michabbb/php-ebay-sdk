<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyDetailsType StructType
 * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in
     * <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call. <br/><br/> <span class="tablenote"><b>Note: </b> To discover what refund options that a particular category supports, call
     * <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     * </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundDetailsType[]
     */
    public $Refund;
    /**
     * The ReturnsWithin
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the
     * <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call. <br/><br/> <span class="tablenote"><b>Note: </b> To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include
     * <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[]
     */
    public $ReturnsWithin;
    /**
     * The ReturnsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the
     * buyer to return the item. <br/><br/> <span class="tablenote"><b>Note: </b> To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or
     * <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns,
     * respectively. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[]
     */
    public $ReturnsAccepted;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned with a value of <code>true</code> if the site supports a text description of the seller's Return Policy in listings. If the site does support a text description of the seller's Return Policy, it is set through
     * the <b>ReturnPolicy.Description</b> field in an Add/Revise/Relist API call. Currently, the only eBay sites that support Return Policy descriptions are Germany, Austria, France, Italy, and Spain. <br/><br/> <span class="tablenote"><b>Note: </b> To
     * discover if a Return Policy desciption is supported by a particular category, call <b>GetCategoryFeatures</b> and include <code>ReturnPolicyDescriptionEnabled</code> as a <b>FeatureID</b> value to see if the category supports the use of a Return
     * Policy description. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Description;
    /**
     * The WarrantyOffered
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[]
     */
    public $WarrantyOffered;
    /**
     * The WarrantyType
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[]
     */
    public $WarrantyType;
    /**
     * The WarrantyDuration
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to offer any type of warranty through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[]
     */
    public $WarrantyDuration;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as sellers are no longer allowed to specify a European Article Number (EAN) through a listings's return policy.
     * - minOccurs: 0
     * @var bool
     */
    public $EAN;
    /**
     * The ShippingCostPaidBy
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call.
     * This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[]
     */
    public $ShippingCostPaidBy;
    /**
     * The RestockingFeeValue
     * Meta informations extracted from the WSDL
     * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[]
     */
    public $RestockingFeeValue;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for the Return Policy Details metadata set. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp in GMT indicate when the Return Policy Details metadata were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(array $refund = array(), array $returnsWithin = array(), array $returnsAccepted = array(), $description = null, array $warrantyOffered = array(), array $warrantyType = array(), array $warrantyDuration = array(), $eAN = null, array $shippingCostPaidBy = array(), array $restockingFeeValue = array(), $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\RefundDetailsType[]|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundDetailsType[] $refund
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setRefund(array $refund = array())
    {
        foreach ($refund as $returnPolicyDetailsTypeRefundItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeRefundItem instanceof \macropage\ebaysdk\trading\StructType\RefundDetailsType) {
                throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundDetailsType, "%s" given', is_object($returnPolicyDetailsTypeRefundItem) ? get_class($returnPolicyDetailsTypeRefundItem) : gettype($returnPolicyDetailsTypeRefundItem)), __LINE__);
            }
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToRefund(\macropage\ebaysdk\trading\StructType\RefundDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundDetailsType) {
            throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Refund[] = $item;
        return $this;
    }
    /**
     * Get ReturnsWithin value
     * @return \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[]|null
     */
    public function getReturnsWithin()
    {
        return $this->ReturnsWithin;
    }
    /**
     * Set ReturnsWithin value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType[] $returnsWithin
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setReturnsWithin(array $returnsWithin = array())
    {
        foreach ($returnsWithin as $returnPolicyDetailsTypeReturnsWithinItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeReturnsWithinItem instanceof \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ReturnsWithin property can only contain items of \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType, "%s" given', is_object($returnPolicyDetailsTypeReturnsWithinItem) ? get_class($returnPolicyDetailsTypeReturnsWithinItem) : gettype($returnPolicyDetailsTypeReturnsWithinItem)), __LINE__);
            }
        }
        $this->ReturnsWithin = $returnsWithin;
        return $this;
    }
    /**
     * Add item to ReturnsWithin value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToReturnsWithin(\macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ReturnsWithin property can only contain items of \macropage\ebaysdk\trading\StructType\ReturnsWithinDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReturnsWithin[] = $item;
        return $this;
    }
    /**
     * Get ReturnsAccepted value
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[]|null
     */
    public function getReturnsAccepted()
    {
        return $this->ReturnsAccepted;
    }
    /**
     * Set ReturnsAccepted value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType[] $returnsAccepted
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setReturnsAccepted(array $returnsAccepted = array())
    {
        foreach ($returnsAccepted as $returnPolicyDetailsTypeReturnsAcceptedItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeReturnsAcceptedItem instanceof \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ReturnsAccepted property can only contain items of \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType, "%s" given', is_object($returnPolicyDetailsTypeReturnsAcceptedItem) ? get_class($returnPolicyDetailsTypeReturnsAcceptedItem) : gettype($returnPolicyDetailsTypeReturnsAcceptedItem)), __LINE__);
            }
        }
        $this->ReturnsAccepted = $returnsAccepted;
        return $this;
    }
    /**
     * Add item to ReturnsAccepted value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToReturnsAccepted(\macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ReturnsAccepted property can only contain items of \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReturnsAccepted[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return bool|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param bool $description
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: boolean
        if (!is_null($description) && !is_bool($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get WarrantyOffered value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[]|null
     */
    public function getWarrantyOffered()
    {
        return $this->WarrantyOffered;
    }
    /**
     * Set WarrantyOffered value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType[] $warrantyOffered
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyOffered(array $warrantyOffered = array())
    {
        foreach ($warrantyOffered as $returnPolicyDetailsTypeWarrantyOfferedItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyOfferedItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType) {
                throw new \InvalidArgumentException(sprintf('The WarrantyOffered property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType, "%s" given', is_object($returnPolicyDetailsTypeWarrantyOfferedItem) ? get_class($returnPolicyDetailsTypeWarrantyOfferedItem) : gettype($returnPolicyDetailsTypeWarrantyOfferedItem)), __LINE__);
            }
        }
        $this->WarrantyOffered = $warrantyOffered;
        return $this;
    }
    /**
     * Add item to WarrantyOffered value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyOffered(\macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType) {
            throw new \InvalidArgumentException(sprintf('The WarrantyOffered property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WarrantyOffered[] = $item;
        return $this;
    }
    /**
     * Get WarrantyType value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[]|null
     */
    public function getWarrantyType()
    {
        return $this->WarrantyType;
    }
    /**
     * Set WarrantyType value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType[] $warrantyType
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyType(array $warrantyType = array())
    {
        foreach ($warrantyType as $returnPolicyDetailsTypeWarrantyTypeItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyTypeItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType) {
                throw new \InvalidArgumentException(sprintf('The WarrantyType property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType, "%s" given', is_object($returnPolicyDetailsTypeWarrantyTypeItem) ? get_class($returnPolicyDetailsTypeWarrantyTypeItem) : gettype($returnPolicyDetailsTypeWarrantyTypeItem)), __LINE__);
            }
        }
        $this->WarrantyType = $warrantyType;
        return $this;
    }
    /**
     * Add item to WarrantyType value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyType(\macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType) {
            throw new \InvalidArgumentException(sprintf('The WarrantyType property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyTypeDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WarrantyType[] = $item;
        return $this;
    }
    /**
     * Get WarrantyDuration value
     * @return \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[]|null
     */
    public function getWarrantyDuration()
    {
        return $this->WarrantyDuration;
    }
    /**
     * Set WarrantyDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType[] $warrantyDuration
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setWarrantyDuration(array $warrantyDuration = array())
    {
        foreach ($warrantyDuration as $returnPolicyDetailsTypeWarrantyDurationItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeWarrantyDurationItem instanceof \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The WarrantyDuration property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType, "%s" given', is_object($returnPolicyDetailsTypeWarrantyDurationItem) ? get_class($returnPolicyDetailsTypeWarrantyDurationItem) : gettype($returnPolicyDetailsTypeWarrantyDurationItem)), __LINE__);
            }
        }
        $this->WarrantyDuration = $warrantyDuration;
        return $this;
    }
    /**
     * Add item to WarrantyDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToWarrantyDuration(\macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The WarrantyDuration property can only contain items of \macropage\ebaysdk\trading\StructType\WarrantyDurationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WarrantyDuration[] = $item;
        return $this;
    }
    /**
     * Get EAN value
     * @return bool|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param bool $eAN
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: boolean
        if (!is_null($eAN) && !is_bool($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get ShippingCostPaidBy value
     * @return \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[]|null
     */
    public function getShippingCostPaidBy()
    {
        return $this->ShippingCostPaidBy;
    }
    /**
     * Set ShippingCostPaidBy value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType[] $shippingCostPaidBy
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setShippingCostPaidBy(array $shippingCostPaidBy = array())
    {
        foreach ($shippingCostPaidBy as $returnPolicyDetailsTypeShippingCostPaidByItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeShippingCostPaidByItem instanceof \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingCostPaidBy property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType, "%s" given', is_object($returnPolicyDetailsTypeShippingCostPaidByItem) ? get_class($returnPolicyDetailsTypeShippingCostPaidByItem) : gettype($returnPolicyDetailsTypeShippingCostPaidByItem)), __LINE__);
            }
        }
        $this->ShippingCostPaidBy = $shippingCostPaidBy;
        return $this;
    }
    /**
     * Add item to ShippingCostPaidBy value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToShippingCostPaidBy(\macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingCostPaidBy property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingCostPaidBy[] = $item;
        return $this;
    }
    /**
     * Get RestockingFeeValue value
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[]|null
     */
    public function getRestockingFeeValue()
    {
        return $this->RestockingFeeValue;
    }
    /**
     * Set RestockingFeeValue value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType[] $restockingFeeValue
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setRestockingFeeValue(array $restockingFeeValue = array())
    {
        foreach ($restockingFeeValue as $returnPolicyDetailsTypeRestockingFeeValueItem) {
            // validation for constraint: itemType
            if (!$returnPolicyDetailsTypeRestockingFeeValueItem instanceof \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType) {
                throw new \InvalidArgumentException(sprintf('The RestockingFeeValue property can only contain items of \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType, "%s" given', is_object($returnPolicyDetailsTypeRestockingFeeValueItem) ? get_class($returnPolicyDetailsTypeRestockingFeeValueItem) : gettype($returnPolicyDetailsTypeRestockingFeeValueItem)), __LINE__);
            }
        }
        $this->RestockingFeeValue = $restockingFeeValue;
        return $this;
    }
    /**
     * Add item to RestockingFeeValue value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function addToRestockingFeeValue(\macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType) {
            throw new \InvalidArgumentException(sprintf('The RestockingFeeValue property can only contain items of \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RestockingFeeValue[] = $item;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDetailsType
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
