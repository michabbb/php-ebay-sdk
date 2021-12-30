<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to express the details of the Return Policy that the seller has defined for the listing. Sellers have the ability to create separate return policies for domestic and international returns, but if a seller (who ships
 * internationally) does not set up a separate international return policy, the settings in the domestic return policy fields will also apply to international returns.
 * @subpackage Structs
 */
class ReturnPolicyType extends AbstractStructBase
{
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates domestic buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay
     * marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers
     * that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts. <br><br> <span class="tablenote"><b>Note:</b> If the seller ships
     * internationally, but did not specify a separate international return policy for the listing, the refund method in this field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Refund = null;
    /**
     * The ReturnsWithin
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the number of days that a domestic buyer has to return an item. The return period begins when the item is marked 'delivered' at the buyer's specified ship-to location. Most marketplaces and
     * categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>). <br><br> <span class="tablenote"><b>Note:</b> If the seller ships
     * internationally, but did not specify a separate international return policy for the listing, the return period in this field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsWithin = null;
    /**
     * The ReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: This field is always returned with the <b>ReturnPolicy</b> container, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept domestic returns
     * (except in the case of a defective item or 'significantly not as described' item), and this field may be the only field returned under the <b>ReturnPolicy</b> container. If the value of this field is <code>ReturnsAccepted</code>, the seller does
     * accept domestic returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the return period, the refund method, and order partner that is responsible for return shipping costs. <br><br> <span
     * class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the 'returns accepted' value in this field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsAccepted = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field contains the seller's detailed explanation for their Return Policy. This same description is displayed in the Return Policy section of the View Item page. A Return Policy description (and this field) is only supported in
     * the following marketplaces: <ul> <li>Germany (DE)</li> <li>Spain (ES)</li> <li>France (FR)</li> <li>Italy (IT)</li> </ul>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The WarrantyOffered
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WarrantyOffered = null;
    /**
     * The WarrantyType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WarrantyType = null;
    /**
     * The WarrantyDuration
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WarrantyDuration = null;
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - documentation: The EAN (European Article Number) value is no longer a part of the Return Policy, so this field is deprecated. Instead, any EAN for a listing is returned in Item Specifics (if <b>IncludeSelector</b> value is set to
     * <code>ItemSpecifics</code>).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EAN = null;
    /**
     * The ShippingCostPaidBy
     * Meta information extracted from the WSDL
     * - documentation: This field specifies either the 'Buyer' or the 'Seller' as the party who pays for domestic return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have
     * an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs. <br><br> Note that the seller is always responsible for return shipping costs for
     * SNAD-related issues, including defective items. <br><br> <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return shipping cost payee in this
     * field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCostPaidBy = null;
    /**
     * The RestockingFeeValue
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061, and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RestockingFeeValue = null;
    /**
     * The RestockingFeeValueOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RestockingFeeValueOption = null;
    /**
     * The InternationalRefund
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates international buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many
     * eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and
     * prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts. <br><br> <span class="tablenote"><b>Note:</b> If the seller ships
     * internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the refund method in the <b>Refund</b> field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalRefund = null;
    /**
     * The InternationalReturnsWithin
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates the number of days that an international buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and
     * categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts international returns from countries they ship to (<b>InternationalReturnsAcceptedOption=ReturnsAccepted</b>). <br><br>
     * <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return period in the <b>ReturnsWithin</b> field will also apply
     * for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalReturnsWithin = null;
    /**
     * The InternationalReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: This field is always returned with the <b>ReturnPolicy</b> container if the seller ships items to other countries, even if the seller does not accept returns for the item. If the value of this field is
     * <code>ReturnsNotAccepted</code>, the seller does not accept international returns (except in the case of a defective item or 'significantly not as described' item). If the value of this field is <code>ReturnsAccepted</code>, the seller does accept
     * international returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the international return period, the refund method, and order partner that is responsible for return shipping costs. <br><br> <span
     * class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the 'returns accepted' value in the <b>ReturnsAccepted</b> field will also
     * apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalReturnsAccepted = null;
    /**
     * The InternationalShippingCostPaidBy
     * Meta information extracted from the WSDL
     * - documentation: This field specifies either the 'Buyer' or the 'Seller' as the party who pays for international return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does
     * have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs. <br><br> Note that the seller is always responsible for return shipping costs
     * for SNAD-related issues, including defective items. <br><br> <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the
     * return shipping cost payee in the <b>ShippingCostPaidBy</b> field will also apply for international returns. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalShippingCostPaidBy = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $refund = null, ?string $returnsWithin = null, ?string $returnsAccepted = null, ?string $description = null, ?string $warrantyOffered = null, ?string $warrantyType = null, ?string $warrantyDuration = null, ?string $eAN = null, ?string $shippingCostPaidBy = null, ?string $restockingFeeValue = null, ?string $restockingFeeValueOption = null, ?string $internationalRefund = null, ?string $internationalReturnsWithin = null, ?string $internationalReturnsAccepted = null, ?string $internationalShippingCostPaidBy = null, $any = null)
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
    public function getRefund(): ?string
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param string $refund
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRefund(?string $refund = null): self
    {
        // validation for constraint: string
        if (!is_null($refund) && !is_string($refund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refund, true), gettype($refund)), __LINE__);
        }
        $this->Refund = $refund;
        
        return $this;
    }
    /**
     * Get ReturnsWithin value
     * @return string|null
     */
    public function getReturnsWithin(): ?string
    {
        return $this->ReturnsWithin;
    }
    /**
     * Set ReturnsWithin value
     * @param string $returnsWithin
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setReturnsWithin(?string $returnsWithin = null): self
    {
        // validation for constraint: string
        if (!is_null($returnsWithin) && !is_string($returnsWithin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsWithin, true), gettype($returnsWithin)), __LINE__);
        }
        $this->ReturnsWithin = $returnsWithin;
        
        return $this;
    }
    /**
     * Get ReturnsAccepted value
     * @return string|null
     */
    public function getReturnsAccepted(): ?string
    {
        return $this->ReturnsAccepted;
    }
    /**
     * Set ReturnsAccepted value
     * @param string $returnsAccepted
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setReturnsAccepted(?string $returnsAccepted = null): self
    {
        // validation for constraint: string
        if (!is_null($returnsAccepted) && !is_string($returnsAccepted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsAccepted, true), gettype($returnsAccepted)), __LINE__);
        }
        $this->ReturnsAccepted = $returnsAccepted;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get WarrantyOffered value
     * @return string|null
     */
    public function getWarrantyOffered(): ?string
    {
        return $this->WarrantyOffered;
    }
    /**
     * Set WarrantyOffered value
     * @param string $warrantyOffered
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyOffered(?string $warrantyOffered = null): self
    {
        // validation for constraint: string
        if (!is_null($warrantyOffered) && !is_string($warrantyOffered)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyOffered, true), gettype($warrantyOffered)), __LINE__);
        }
        $this->WarrantyOffered = $warrantyOffered;
        
        return $this;
    }
    /**
     * Get WarrantyType value
     * @return string|null
     */
    public function getWarrantyType(): ?string
    {
        return $this->WarrantyType;
    }
    /**
     * Set WarrantyType value
     * @param string $warrantyType
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyType(?string $warrantyType = null): self
    {
        // validation for constraint: string
        if (!is_null($warrantyType) && !is_string($warrantyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyType, true), gettype($warrantyType)), __LINE__);
        }
        $this->WarrantyType = $warrantyType;
        
        return $this;
    }
    /**
     * Get WarrantyDuration value
     * @return string|null
     */
    public function getWarrantyDuration(): ?string
    {
        return $this->WarrantyDuration;
    }
    /**
     * Set WarrantyDuration value
     * @param string $warrantyDuration
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setWarrantyDuration(?string $warrantyDuration = null): self
    {
        // validation for constraint: string
        if (!is_null($warrantyDuration) && !is_string($warrantyDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyDuration, true), gettype($warrantyDuration)), __LINE__);
        }
        $this->WarrantyDuration = $warrantyDuration;
        
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN(): ?string
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setEAN(?string $eAN = null): self
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eAN, true), gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        
        return $this;
    }
    /**
     * Get ShippingCostPaidBy value
     * @return string|null
     */
    public function getShippingCostPaidBy(): ?string
    {
        return $this->ShippingCostPaidBy;
    }
    /**
     * Set ShippingCostPaidBy value
     * @param string $shippingCostPaidBy
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setShippingCostPaidBy(?string $shippingCostPaidBy = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidBy) && !is_string($shippingCostPaidBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidBy, true), gettype($shippingCostPaidBy)), __LINE__);
        }
        $this->ShippingCostPaidBy = $shippingCostPaidBy;
        
        return $this;
    }
    /**
     * Get RestockingFeeValue value
     * @return string|null
     */
    public function getRestockingFeeValue(): ?string
    {
        return $this->RestockingFeeValue;
    }
    /**
     * Set RestockingFeeValue value
     * @param string $restockingFeeValue
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRestockingFeeValue(?string $restockingFeeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValue) && !is_string($restockingFeeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restockingFeeValue, true), gettype($restockingFeeValue)), __LINE__);
        }
        $this->RestockingFeeValue = $restockingFeeValue;
        
        return $this;
    }
    /**
     * Get RestockingFeeValueOption value
     * @return string|null
     */
    public function getRestockingFeeValueOption(): ?string
    {
        return $this->RestockingFeeValueOption;
    }
    /**
     * Set RestockingFeeValueOption value
     * @param string $restockingFeeValueOption
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setRestockingFeeValueOption(?string $restockingFeeValueOption = null): self
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValueOption) && !is_string($restockingFeeValueOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restockingFeeValueOption, true), gettype($restockingFeeValueOption)), __LINE__);
        }
        $this->RestockingFeeValueOption = $restockingFeeValueOption;
        
        return $this;
    }
    /**
     * Get InternationalRefund value
     * @return string|null
     */
    public function getInternationalRefund(): ?string
    {
        return $this->InternationalRefund;
    }
    /**
     * Set InternationalRefund value
     * @param string $internationalRefund
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalRefund(?string $internationalRefund = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalRefund) && !is_string($internationalRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalRefund, true), gettype($internationalRefund)), __LINE__);
        }
        $this->InternationalRefund = $internationalRefund;
        
        return $this;
    }
    /**
     * Get InternationalReturnsWithin value
     * @return string|null
     */
    public function getInternationalReturnsWithin(): ?string
    {
        return $this->InternationalReturnsWithin;
    }
    /**
     * Set InternationalReturnsWithin value
     * @param string $internationalReturnsWithin
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsWithin(?string $internationalReturnsWithin = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsWithin) && !is_string($internationalReturnsWithin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsWithin, true), gettype($internationalReturnsWithin)), __LINE__);
        }
        $this->InternationalReturnsWithin = $internationalReturnsWithin;
        
        return $this;
    }
    /**
     * Get InternationalReturnsAccepted value
     * @return string|null
     */
    public function getInternationalReturnsAccepted(): ?string
    {
        return $this->InternationalReturnsAccepted;
    }
    /**
     * Set InternationalReturnsAccepted value
     * @param string $internationalReturnsAccepted
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsAccepted(?string $internationalReturnsAccepted = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsAccepted) && !is_string($internationalReturnsAccepted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsAccepted, true), gettype($internationalReturnsAccepted)), __LINE__);
        }
        $this->InternationalReturnsAccepted = $internationalReturnsAccepted;
        
        return $this;
    }
    /**
     * Get InternationalShippingCostPaidBy value
     * @return string|null
     */
    public function getInternationalShippingCostPaidBy(): ?string
    {
        return $this->InternationalShippingCostPaidBy;
    }
    /**
     * Set InternationalShippingCostPaidBy value
     * @param string $internationalShippingCostPaidBy
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public function setInternationalShippingCostPaidBy(?string $internationalShippingCostPaidBy = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalShippingCostPaidBy) && !is_string($internationalShippingCostPaidBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalShippingCostPaidBy, true), gettype($internationalShippingCostPaidBy)), __LINE__);
        }
        $this->InternationalShippingCostPaidBy = $internationalShippingCostPaidBy;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
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
