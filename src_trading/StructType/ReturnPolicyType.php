<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to express the details of the return policy for an item. <br><br> Historically, the <b>GeteBayDetails</b> call has been used to retrieve site-level return policy metadata. However, the <b>GetCategoryFeatures</b> call is now
 * recommended instead because this call now returns category-level metadata for both domestic and international return policies. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings
 * in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
 * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. </span>
 * @subpackage Structs
 */
class ReturnPolicyType extends AbstractStructBase
{
    /**
     * The RefundOption
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates buyers for returns</a>. <code>MoneyBack</code> is the only supported value for all marketplaces except for the US. On the US marketplace, you can set this value to either
     * <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. <code>MoneyBackOrReplacement</code> can be used by sellers that have the depth of inventory to support an exchange for an identical item. However, ultimately, it is up to the buyer on
     * whether they want money back or a replacement item. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international equivalent of this field is the <b>InternationalRefundOption</b>
     * field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundOption = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If
     * necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> This field is applicable to only the US marketplace and is not applicable as input to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Refund = null;
    /**
     * The ReturnsWithinOption
     * Meta information extracted from the WSDL
     * - documentation: Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return
     * periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> <b>Applicable
     * values:</b> Retrieve the values supported by a marketplace and category by calling <b>GetCategoryFeatures</b> with <b>FeatureID</b> set to <code>DomesticReturnsDurationValues</code>, then see the values returned under the
     * <b>Category.DomesticReturnsDurationValues</b> container in the response. <br/><br/> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see
     * the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international equivalent of this field is the
     * <b>InternationalReturnsWithinOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsWithinOption = null;
    /**
     * The ReturnsWithin
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     * <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsWithinOption</b> instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsWithin = null;
    /**
     * The ReturnsAcceptedOption
     * Meta information extracted from the WSDL
     * - documentation: This required field indicates whether or not the seller accepts returns. <br><br> Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates
     * the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for a listing if returns are not accepted. <br><br> On the eBay DE, IE, and UK marketplaces, registered business sellers must accept returns for fixed-price items (including
     * auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call
     * <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response. <br> <br> <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive
     * a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling
     * time (in days) using the <b>Item.DispatchTimeMax</b> field.</span> <br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the
     * <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international equivalent of this field is the
     * <b>InternationalReturnsAcceptedOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsAcceptedOption = null;
    /**
     * The ReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain
     * spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsAcceptedOption</b> instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnsAccepted = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise
     * ignored): <ul> <li>Germany (DE)</li> <li>Austria (AT)</li> <li>France (FR)</li> <li>Italy (IT)</li> <li>Spain (ES)</li> </ul> Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the
     * additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character
     * (e.g. &#163;). <!-- Do NOT attempt to "fix" the above character entity references. They are INTENTIONALLY showing markup this way in the resulting docs. Do NOT change them. [LT] --> <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the
     * seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this as an empty node. <br><br> <b>For ReviseItem only:</b> You cannot change the value
     * of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: This option specifies whether the buyer or the seller pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and
     * sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the seller's return policy and the specifics of a return, either the buyer or the
     * seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues or for late shipments. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this
     * field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a
     * separate international returns policy, the international equivalent of this field is the <b>InternationalShippingCostPaidByOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCostPaidByOption = null;
    /**
     * The ShippingCostPaidBy
     * Meta information extracted from the WSDL
     * - documentation: This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can
     * contain spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ShippingCostPaidByOption</b> instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCostPaidBy = null;
    /**
     * The InternationalRefundOption
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates international buyers for returns</a>. <code>MoneyBack</code> is the only supported value for all marketplaces except for the US. On the US marketplace, you can set this value to either
     * <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. <code>MoneyBackOrReplacement</code> can be used by sellers that have the depth of inventory to support an exchange for an identical item. However, ultimately, it is up to the buyer on
     * whether they want money back or a replacement item. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call,
     * the refund option(s) for international returns will default to the value specified in the <b>RefundOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalRefundOption = null;
    /**
     * The InternationalReturnsAcceptedOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller wants to use a separate return policy for international returns. The value in this field indicates whether or not the seller accepts returns from international buyers. <br><br>
     * Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international buyers to return items. Specify <b>ReturnsNotAccepted</b> for a
     * listing if returns are not accepted from international buyers. <br><br> On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when
     * the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE,
     * and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more
     * details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not
     * used in an add/revise/relist call, the return accepted value for international returns will default to the value specified in the <b>ReturnsAcceptedOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalReturnsAcceptedOption = null;
    /**
     * The InternationalReturnsWithinOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller is using a separate return policy for international returns, and is accepting international returns. The value in this field indicates the number of days that an international buyer
     * has to return an item. The time period begins on the day that the buyer receives the item. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are
     * obligated to honor the values that are set for a listing. <br><br> <b>Applicable values:</b> Retrieve the values supported by a marketplace and category by calling <b>GetCategoryFeatures</b> with <b>FeatureID</b> set to
     * <code>InternationalReturnsDurationValues</code>, then see the values returned under the <b>Category.InternationalReturnsDurationValues</b> container in the response. <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts
     * international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting. <br><br> <b>For
     * ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a
     * seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call, the return period for international returns will default to the
     * value specified in the <b>ReturnsWithinOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalReturnsWithinOption = null;
    /**
     * The InternationalShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller is using a separate return policy for international returns, and is accepting international returns. The value in this field specifies whether the buyer or the seller pays for
     * international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a
     * listing. <br><br> Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for
     * SNAD-related issues or for late shipments. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call,
     * return shipping cost payee for international returns will default to the value specified in the <b>ShippingCostPaidByOption</b> field.</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalShippingCostPaidByOption = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ReturnPolicyType
     * @uses ReturnPolicyType::setRefundOption()
     * @uses ReturnPolicyType::setRefund()
     * @uses ReturnPolicyType::setReturnsWithinOption()
     * @uses ReturnPolicyType::setReturnsWithin()
     * @uses ReturnPolicyType::setReturnsAcceptedOption()
     * @uses ReturnPolicyType::setReturnsAccepted()
     * @uses ReturnPolicyType::setDescription()
     * @uses ReturnPolicyType::setShippingCostPaidByOption()
     * @uses ReturnPolicyType::setShippingCostPaidBy()
     * @uses ReturnPolicyType::setInternationalRefundOption()
     * @uses ReturnPolicyType::setInternationalReturnsAcceptedOption()
     * @uses ReturnPolicyType::setInternationalReturnsWithinOption()
     * @uses ReturnPolicyType::setInternationalShippingCostPaidByOption()
     * @uses ReturnPolicyType::setAny()
     * @param string $refundOption
     * @param string $refund
     * @param string $returnsWithinOption
     * @param string $returnsWithin
     * @param string $returnsAcceptedOption
     * @param string $returnsAccepted
     * @param string $description
     * @param string $shippingCostPaidByOption
     * @param string $shippingCostPaidBy
     * @param string $internationalRefundOption
     * @param string $internationalReturnsAcceptedOption
     * @param string $internationalReturnsWithinOption
     * @param string $internationalShippingCostPaidByOption
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $refundOption = null, ?string $refund = null, ?string $returnsWithinOption = null, ?string $returnsWithin = null, ?string $returnsAcceptedOption = null, ?string $returnsAccepted = null, ?string $description = null, ?string $shippingCostPaidByOption = null, ?string $shippingCostPaidBy = null, ?string $internationalRefundOption = null, ?string $internationalReturnsAcceptedOption = null, ?string $internationalReturnsWithinOption = null, ?string $internationalShippingCostPaidByOption = null, $any = null)
    {
        $this
            ->setRefundOption($refundOption)
            ->setRefund($refund)
            ->setReturnsWithinOption($returnsWithinOption)
            ->setReturnsWithin($returnsWithin)
            ->setReturnsAcceptedOption($returnsAcceptedOption)
            ->setReturnsAccepted($returnsAccepted)
            ->setDescription($description)
            ->setShippingCostPaidByOption($shippingCostPaidByOption)
            ->setShippingCostPaidBy($shippingCostPaidBy)
            ->setInternationalRefundOption($internationalRefundOption)
            ->setInternationalReturnsAcceptedOption($internationalReturnsAcceptedOption)
            ->setInternationalReturnsWithinOption($internationalReturnsWithinOption)
            ->setInternationalShippingCostPaidByOption($internationalShippingCostPaidByOption)
            ->setAny($any);
    }
    /**
     * Get RefundOption value
     * @return string|null
     */
    public function getRefundOption(): ?string
    {
        return $this->RefundOption;
    }
    /**
     * Set RefundOption value
     * @param string $refundOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setRefundOption(?string $refundOption = null): self
    {
        // validation for constraint: string
        if (!is_null($refundOption) && !is_string($refundOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundOption, true), gettype($refundOption)), __LINE__);
        }
        $this->RefundOption = $refundOption;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ReturnsWithinOption value
     * @return string|null
     */
    public function getReturnsWithinOption(): ?string
    {
        return $this->ReturnsWithinOption;
    }
    /**
     * Set ReturnsWithinOption value
     * @param string $returnsWithinOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setReturnsWithinOption(?string $returnsWithinOption = null): self
    {
        // validation for constraint: string
        if (!is_null($returnsWithinOption) && !is_string($returnsWithinOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsWithinOption, true), gettype($returnsWithinOption)), __LINE__);
        }
        $this->ReturnsWithinOption = $returnsWithinOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ReturnsAcceptedOption value
     * @return string|null
     */
    public function getReturnsAcceptedOption(): ?string
    {
        return $this->ReturnsAcceptedOption;
    }
    /**
     * Set ReturnsAcceptedOption value
     * @param string $returnsAcceptedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setReturnsAcceptedOption(?string $returnsAcceptedOption = null): self
    {
        // validation for constraint: string
        if (!is_null($returnsAcceptedOption) && !is_string($returnsAcceptedOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsAcceptedOption, true), gettype($returnsAcceptedOption)), __LINE__);
        }
        $this->ReturnsAcceptedOption = $returnsAcceptedOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ShippingCostPaidByOption value
     * @return string|null
     */
    public function getShippingCostPaidByOption(): ?string
    {
        return $this->ShippingCostPaidByOption;
    }
    /**
     * Set ShippingCostPaidByOption value
     * @param string $shippingCostPaidByOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setShippingCostPaidByOption(?string $shippingCostPaidByOption = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidByOption) && !is_string($shippingCostPaidByOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidByOption, true), gettype($shippingCostPaidByOption)), __LINE__);
        }
        $this->ShippingCostPaidByOption = $shippingCostPaidByOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get InternationalRefundOption value
     * @return string|null
     */
    public function getInternationalRefundOption(): ?string
    {
        return $this->InternationalRefundOption;
    }
    /**
     * Set InternationalRefundOption value
     * @param string $internationalRefundOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalRefundOption(?string $internationalRefundOption = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalRefundOption) && !is_string($internationalRefundOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalRefundOption, true), gettype($internationalRefundOption)), __LINE__);
        }
        $this->InternationalRefundOption = $internationalRefundOption;
        
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedOption value
     * @return string|null
     */
    public function getInternationalReturnsAcceptedOption(): ?string
    {
        return $this->InternationalReturnsAcceptedOption;
    }
    /**
     * Set InternationalReturnsAcceptedOption value
     * @param string $internationalReturnsAcceptedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsAcceptedOption(?string $internationalReturnsAcceptedOption = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsAcceptedOption) && !is_string($internationalReturnsAcceptedOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsAcceptedOption, true), gettype($internationalReturnsAcceptedOption)), __LINE__);
        }
        $this->InternationalReturnsAcceptedOption = $internationalReturnsAcceptedOption;
        
        return $this;
    }
    /**
     * Get InternationalReturnsWithinOption value
     * @return string|null
     */
    public function getInternationalReturnsWithinOption(): ?string
    {
        return $this->InternationalReturnsWithinOption;
    }
    /**
     * Set InternationalReturnsWithinOption value
     * @param string $internationalReturnsWithinOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsWithinOption(?string $internationalReturnsWithinOption = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsWithinOption) && !is_string($internationalReturnsWithinOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsWithinOption, true), gettype($internationalReturnsWithinOption)), __LINE__);
        }
        $this->InternationalReturnsWithinOption = $internationalReturnsWithinOption;
        
        return $this;
    }
    /**
     * Get InternationalShippingCostPaidByOption value
     * @return string|null
     */
    public function getInternationalShippingCostPaidByOption(): ?string
    {
        return $this->InternationalShippingCostPaidByOption;
    }
    /**
     * Set InternationalShippingCostPaidByOption value
     * @param string $internationalShippingCostPaidByOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalShippingCostPaidByOption(?string $internationalShippingCostPaidByOption = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalShippingCostPaidByOption) && !is_string($internationalShippingCostPaidByOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalShippingCostPaidByOption, true), gettype($internationalShippingCostPaidByOption)), __LINE__);
        }
        $this->InternationalShippingCostPaidByOption = $internationalShippingCostPaidByOption;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
