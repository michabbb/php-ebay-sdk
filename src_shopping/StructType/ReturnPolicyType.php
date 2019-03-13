<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used to express the details of the Return Policy that the seller has defined for the listing.
 * @subpackage Structs
 */
class ReturnPolicyType extends AbstractStructBase
{
    /**
     * The Refund
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates how the seller compensates domestic buyers for <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay
     * marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers
     * that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     * - minOccurs: 0
     * @var string
     */
    public $Refund;
    /**
     * The ReturnsWithin
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates the number of days that a domestic buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and
     * categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>).
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsWithin;
    /**
     * The ReturnsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: This field is always returned with the <b>ReturnPolicy</b> container, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept domestic returns
     * (except in the case of a defective item or 'significantly not as described' item), and this field may be the only field returned under the <b>ReturnPolicy</b> container. If the value of this field is <code>ReturnsAccepted</code>, the seller does
     * accept domestic returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the return period, the refund method, and order partner that is responsible for return shipping costs.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAccepted;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the seller's detailed explanation for their Return Policy. This same description is displayed in the Return Policy section of the View Item page. A Return Policy description (and this field) is only supported in
     * the following marketplaces: <ul> <li>Germany (DE)</li> <li>Spain (ES)</li> <li>France (FR)</li> <li>Italy (IT)</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The WarrantyOffered
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOffered;
    /**
     * The WarrantyType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyType;
    /**
     * The WarrantyDuration
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDuration;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - documentation: The EAN (European Article Number) value is no longer a part of the Return Policy, so this field is deprecated. Instead, any EAN for a listing is returned in Item Specifics (if <b>IncludeSelector</b> value is set to
     * <code>ItemSpecifics</code>).
     * - minOccurs: 0
     * @var string
     */
    public $EAN;
    /**
     * The ShippingCostPaidBy
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies either the 'Buyer' or the 'Seller' as the party who pays for domestic return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have
     * an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs. <br><br> Note that the seller is always responsible for return shipping costs for
     * SNAD-related issues, including defective items.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidBy;
    /**
     * The RestockingFeeValue
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValue;
    /**
     * The RestockingFeeValueOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValueOption;
    /**
     * The InternationalRefund
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates how the seller compensates international buyers for <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many
     * eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and
     * prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalRefund;
    /**
     * The InternationalReturnsWithin
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates the number of days that an international buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and
     * categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts international returns from countries they ship to (<b>InternationalReturnsAcceptedOption=ReturnsAccepted</b>).
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsWithin;
    /**
     * The InternationalReturnsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: This field is always returned with the <b>ReturnPolicy</b> container if the seller ships items to other countries, even if the seller does not accept returns for the item. If the value of this field is
     * <code>ReturnsNotAccepted</code>, the seller does not accept international returns (except in the case of a defective item or 'significantly not as described' item). If the value of this field is <code>ReturnsAccepted</code>, the seller does accept
     * international returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the international return period, the refund method, and order partner that is responsible for return shipping costs.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsAccepted;
    /**
     * The InternationalShippingCostPaidBy
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies either the 'Buyer' or the 'Seller' as the party who pays for international return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does
     * have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs. <br><br> Note that the seller is always responsible for return shipping costs
     * for SNAD-related issues, including defective items.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalShippingCostPaidBy;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReturnPolicyType
     * @uses ReturnPolicyType::setRefund()
     * @uses ReturnPolicyType::setReturnsWithin()
     * @uses ReturnPolicyType::setReturnsAccepted()
     * @uses ReturnPolicyType::setDescription()
     * @uses ReturnPolicyType::setWarrantyOffered()
     * @uses ReturnPolicyType::setWarrantyType()
     * @uses ReturnPolicyType::setWarrantyDuration()
     * @uses ReturnPolicyType::setEAN()
     * @uses ReturnPolicyType::setShippingCostPaidBy()
     * @uses ReturnPolicyType::setRestockingFeeValue()
     * @uses ReturnPolicyType::setRestockingFeeValueOption()
     * @uses ReturnPolicyType::setInternationalRefund()
     * @uses ReturnPolicyType::setInternationalReturnsWithin()
     * @uses ReturnPolicyType::setInternationalReturnsAccepted()
     * @uses ReturnPolicyType::setInternationalShippingCostPaidBy()
     * @uses ReturnPolicyType::setAny()
     * @param string $refund
     * @param string $returnsWithin
     * @param string $returnsAccepted
     * @param string $description
     * @param string $warrantyOffered
     * @param string $warrantyType
     * @param string $warrantyDuration
     * @param string $eAN
     * @param string $shippingCostPaidBy
     * @param string $restockingFeeValue
     * @param string $restockingFeeValueOption
     * @param string $internationalRefund
     * @param string $internationalReturnsWithin
     * @param string $internationalReturnsAccepted
     * @param string $internationalShippingCostPaidBy
     * @param \DOMDocument $any
     */
    public function __construct($refund = null, $returnsWithin = null, $returnsAccepted = null, $description = null, $warrantyOffered = null, $warrantyType = null, $warrantyDuration = null, $eAN = null, $shippingCostPaidBy = null, $restockingFeeValue = null, $restockingFeeValueOption = null, $internationalRefund = null, $internationalReturnsWithin = null, $internationalReturnsAccepted = null, $internationalShippingCostPaidBy = null, \DOMDocument $any = null)
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
            ->setRestockingFeeValueOption($restockingFeeValueOption)
            ->setInternationalRefund($internationalRefund)
            ->setInternationalReturnsWithin($internationalReturnsWithin)
            ->setInternationalReturnsAccepted($internationalReturnsAccepted)
            ->setInternationalShippingCostPaidBy($internationalShippingCostPaidBy)
            ->setAny($any);
    }
    /**
     * Get Refund value
     * @return string|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param string $refund
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRefund($refund = null)
    {
        // validation for constraint: string
        if (!is_null($refund) && !is_string($refund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refund)), __LINE__);
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Get ReturnsWithin value
     * @return string|null
     */
    public function getReturnsWithin()
    {
        return $this->ReturnsWithin;
    }
    /**
     * Set ReturnsWithin value
     * @param string $returnsWithin
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setReturnsWithin($returnsWithin = null)
    {
        // validation for constraint: string
        if (!is_null($returnsWithin) && !is_string($returnsWithin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnsWithin)), __LINE__);
        }
        $this->ReturnsWithin = $returnsWithin;
        return $this;
    }
    /**
     * Get ReturnsAccepted value
     * @return string|null
     */
    public function getReturnsAccepted()
    {
        return $this->ReturnsAccepted;
    }
    /**
     * Set ReturnsAccepted value
     * @param string $returnsAccepted
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setReturnsAccepted($returnsAccepted = null)
    {
        // validation for constraint: string
        if (!is_null($returnsAccepted) && !is_string($returnsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnsAccepted)), __LINE__);
        }
        $this->ReturnsAccepted = $returnsAccepted;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get WarrantyOffered value
     * @return string|null
     */
    public function getWarrantyOffered()
    {
        return $this->WarrantyOffered;
    }
    /**
     * Set WarrantyOffered value
     * @param string $warrantyOffered
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyOffered($warrantyOffered = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOffered) && !is_string($warrantyOffered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyOffered)), __LINE__);
        }
        $this->WarrantyOffered = $warrantyOffered;
        return $this;
    }
    /**
     * Get WarrantyType value
     * @return string|null
     */
    public function getWarrantyType()
    {
        return $this->WarrantyType;
    }
    /**
     * Set WarrantyType value
     * @param string $warrantyType
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyType($warrantyType = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyType) && !is_string($warrantyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyType)), __LINE__);
        }
        $this->WarrantyType = $warrantyType;
        return $this;
    }
    /**
     * Get WarrantyDuration value
     * @return string|null
     */
    public function getWarrantyDuration()
    {
        return $this->WarrantyDuration;
    }
    /**
     * Set WarrantyDuration value
     * @param string $warrantyDuration
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyDuration($warrantyDuration = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyDuration) && !is_string($warrantyDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyDuration)), __LINE__);
        }
        $this->WarrantyDuration = $warrantyDuration;
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get ShippingCostPaidBy value
     * @return string|null
     */
    public function getShippingCostPaidBy()
    {
        return $this->ShippingCostPaidBy;
    }
    /**
     * Set ShippingCostPaidBy value
     * @param string $shippingCostPaidBy
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setShippingCostPaidBy($shippingCostPaidBy = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidBy) && !is_string($shippingCostPaidBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCostPaidBy)), __LINE__);
        }
        $this->ShippingCostPaidBy = $shippingCostPaidBy;
        return $this;
    }
    /**
     * Get RestockingFeeValue value
     * @return string|null
     */
    public function getRestockingFeeValue()
    {
        return $this->RestockingFeeValue;
    }
    /**
     * Set RestockingFeeValue value
     * @param string $restockingFeeValue
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRestockingFeeValue($restockingFeeValue = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValue) && !is_string($restockingFeeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restockingFeeValue)), __LINE__);
        }
        $this->RestockingFeeValue = $restockingFeeValue;
        return $this;
    }
    /**
     * Get RestockingFeeValueOption value
     * @return string|null
     */
    public function getRestockingFeeValueOption()
    {
        return $this->RestockingFeeValueOption;
    }
    /**
     * Set RestockingFeeValueOption value
     * @param string $restockingFeeValueOption
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValueOption) && !is_string($restockingFeeValueOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restockingFeeValueOption)), __LINE__);
        }
        $this->RestockingFeeValueOption = $restockingFeeValueOption;
        return $this;
    }
    /**
     * Get InternationalRefund value
     * @return string|null
     */
    public function getInternationalRefund()
    {
        return $this->InternationalRefund;
    }
    /**
     * Set InternationalRefund value
     * @param string $internationalRefund
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalRefund($internationalRefund = null)
    {
        // validation for constraint: string
        if (!is_null($internationalRefund) && !is_string($internationalRefund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalRefund)), __LINE__);
        }
        $this->InternationalRefund = $internationalRefund;
        return $this;
    }
    /**
     * Get InternationalReturnsWithin value
     * @return string|null
     */
    public function getInternationalReturnsWithin()
    {
        return $this->InternationalReturnsWithin;
    }
    /**
     * Set InternationalReturnsWithin value
     * @param string $internationalReturnsWithin
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsWithin($internationalReturnsWithin = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsWithin) && !is_string($internationalReturnsWithin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalReturnsWithin)), __LINE__);
        }
        $this->InternationalReturnsWithin = $internationalReturnsWithin;
        return $this;
    }
    /**
     * Get InternationalReturnsAccepted value
     * @return string|null
     */
    public function getInternationalReturnsAccepted()
    {
        return $this->InternationalReturnsAccepted;
    }
    /**
     * Set InternationalReturnsAccepted value
     * @param string $internationalReturnsAccepted
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsAccepted($internationalReturnsAccepted = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsAccepted) && !is_string($internationalReturnsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalReturnsAccepted)), __LINE__);
        }
        $this->InternationalReturnsAccepted = $internationalReturnsAccepted;
        return $this;
    }
    /**
     * Get InternationalShippingCostPaidBy value
     * @return string|null
     */
    public function getInternationalShippingCostPaidBy()
    {
        return $this->InternationalShippingCostPaidBy;
    }
    /**
     * Set InternationalShippingCostPaidBy value
     * @param string $internationalShippingCostPaidBy
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalShippingCostPaidBy($internationalShippingCostPaidBy = null)
    {
        // validation for constraint: string
        if (!is_null($internationalShippingCostPaidBy) && !is_string($internationalShippingCostPaidBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalShippingCostPaidBy)), __LINE__);
        }
        $this->InternationalShippingCostPaidBy = $internationalShippingCostPaidBy;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ReturnPolicyType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
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
