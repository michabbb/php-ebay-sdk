<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used to express the details of the return policy for an item. <br><br> To get the metadata on the values you can use for specific marketplaces, call <b>GeteBayDetails</b> with <b>DetailName</b> set to
 * <code>ReturnPolicyDetails</code>, and then review the <b>ReturnPolicyDetails</b> fields in the response. <br><br> <span class="tablenote"><b>Note:</b> Historically, the <b>GeteBayDetails</b> call has been used to retrieve return policy metadata.
 * However, the <b>GetCategoryFeatures</b> call now returns category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
 * @subpackage Structs
 */
class ReturnPolicyType extends AbstractStructBase
{
    /**
     * The RefundOption
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to
     * <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. <br><br> On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory
     * to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>. <b>For AddItem, VerifyAddItem, and RelistItem (and
     * corresponding FixedPrice calls):</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not supply this field, some eBay sites may set a default value (like MoneyBack) and sellers are obligated to honor the policies set
     * settings on their View Item pages. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $RefundOption;
    /**
     * The Refund
     * Meta informations extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If
     * necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> This field is applicable to only the US marketplace and is not applicable as input to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $Refund;
    /**
     * The ReturnsWithinOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return
     * periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> <b>Applicable
     * values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     * <br/><br/> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br/><br/> <span
     * class="tablenote"><b>Note:</b> In version 1061, the options for this field were reduced. An error will be thrown if you attempt to list an item with this field set to a value that is not accepted by the target marketplace. See the <a
     * href="/devzone/xml/docs/releasenotes.html#1061">Release Notes</a> for details.</span> <br>
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsWithinOption;
    /**
     * The ReturnsWithin
     * Meta informations extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     * <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsWithinOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsWithin;
    /**
     * The ReturnsAcceptedOption
     * Meta informations extracted from the WSDL
     * - documentation: This required field indicates whether or not the seller accepts returns. <br><br> Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates
     * the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns. <br><br> On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction
     * items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to
     * determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response. <br> <br> <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus
     * seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using
     * the <b>Item.DispatchTimeMax</b> field.</span> <br> Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a
     * href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p> <br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the
     * listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAcceptedOption;
    /**
     * The ReturnsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain
     * spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsAcceptedOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAccepted;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise
     * ignored): <ul> <li>Germany (DE)</li> <li>Austria (AT)</li> <li>France (FR)</li> <li>Italy (IT)</li> <li>Spain (ES)</li> </ul> Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the
     * additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character
     * (e.g. &#163;). <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this
     * as an empty node. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The WarrantyOfferedOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOfferedOption;
    /**
     * The WarrantyOffered
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOffered;
    /**
     * The WarrantyTypeOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyTypeOption;
    /**
     * The WarrantyType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyType;
    /**
     * The WarrantyDurationOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDurationOption;
    /**
     * The WarrantyDuration
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDuration;
    /**
     * The ShippingCostPaidByOption
     * Meta informations extracted from the WSDL
     * - documentation: This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for
     * this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the seller's return policy and the specifics of a return, either the
     * buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and
     * review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing
     * ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidByOption;
    /**
     * The ShippingCostPaidBy
     * Meta informations extracted from the WSDL
     * - documentation: This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can
     * contain spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ShippingCostPaidByOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidBy;
    /**
     * The RestockingFeeValue
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValue;
    /**
     * The RestockingFeeValueOption
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValueOption;
    /**
     * The ExtendedHolidayReturns
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports extended holiday returns.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ExtendedHolidayReturns;
    /**
     * The InternationalRefundOption
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to
     * <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. <br><br> On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory
     * to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>. <b>For AddItem, VerifyAddItem, and RelistItem (and
     * corresponding FixedPrice calls):</b> If the seller accepts returns (ReturnsAcceptedOption=ReturnsAccepted) but you do not supply this field, some eBay sites may set a default value (like MoneyBack) and sellers are obligated to honor the policies set
     * settings on their View Item pages. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalRefundOption;
    /**
     * The InternationalReturnsAcceptedOption
     * Meta informations extracted from the WSDL
     * - documentation: This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service). <br><br> Applicable values are <code>ReturnsAccepted</code> or
     * <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>. <br><br> On the
     * eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay
     * Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the
     * response. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsAcceptedOption;
    /**
     * The InternationalReturnsWithinOption
     * Meta informations extracted from the WSDL
     * - documentation: A buyer can return an item that was shipped via an international shipping service to the seller within the period of time specified by this field. The time period begins the day the buyer receives the item. <br><br> <b>Applicable
     * values:</b> To get the applicable <b>ReturnsWithinOption</b> values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>. <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller
     * accepts international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting. <br><br> <b>For
     * ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> The
     * <b>GetCategoryFeatures</b> call now returnins category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsWithinOption;
    /**
     * The InternationalShippingCostPaidByOption
     * Meta informations extracted from the WSDL
     * - documentation: This option specifies either the buyer or the seller as the party who pays for international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the
     * default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the seller's return policy and the specifics of a
     * return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the
     * seller accepts returns (<b>InternationalReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not set this field when listing an item, some eBay sites may set a default value (like Buyer). Because sellers are obligated to honor the
     * policies specified on their View Item pages, be sure this is set to the value desired by the seller. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12
     * hours. For more details, see the <b>ReturnPolicy</b> description.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalShippingCostPaidByOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReturnPolicyType
     * @uses ReturnPolicyType::setRefundOption()
     * @uses ReturnPolicyType::setRefund()
     * @uses ReturnPolicyType::setReturnsWithinOption()
     * @uses ReturnPolicyType::setReturnsWithin()
     * @uses ReturnPolicyType::setReturnsAcceptedOption()
     * @uses ReturnPolicyType::setReturnsAccepted()
     * @uses ReturnPolicyType::setDescription()
     * @uses ReturnPolicyType::setWarrantyOfferedOption()
     * @uses ReturnPolicyType::setWarrantyOffered()
     * @uses ReturnPolicyType::setWarrantyTypeOption()
     * @uses ReturnPolicyType::setWarrantyType()
     * @uses ReturnPolicyType::setWarrantyDurationOption()
     * @uses ReturnPolicyType::setWarrantyDuration()
     * @uses ReturnPolicyType::setShippingCostPaidByOption()
     * @uses ReturnPolicyType::setShippingCostPaidBy()
     * @uses ReturnPolicyType::setRestockingFeeValue()
     * @uses ReturnPolicyType::setRestockingFeeValueOption()
     * @uses ReturnPolicyType::setExtendedHolidayReturns()
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
     * @param string $warrantyOfferedOption
     * @param string $warrantyOffered
     * @param string $warrantyTypeOption
     * @param string $warrantyType
     * @param string $warrantyDurationOption
     * @param string $warrantyDuration
     * @param string $shippingCostPaidByOption
     * @param string $shippingCostPaidBy
     * @param string $restockingFeeValue
     * @param string $restockingFeeValueOption
     * @param bool $extendedHolidayReturns
     * @param string $internationalRefundOption
     * @param string $internationalReturnsAcceptedOption
     * @param string $internationalReturnsWithinOption
     * @param string $internationalShippingCostPaidByOption
     * @param \DOMDocument $any
     */
    public function __construct($refundOption = null, $refund = null, $returnsWithinOption = null, $returnsWithin = null, $returnsAcceptedOption = null, $returnsAccepted = null, $description = null, $warrantyOfferedOption = null, $warrantyOffered = null, $warrantyTypeOption = null, $warrantyType = null, $warrantyDurationOption = null, $warrantyDuration = null, $shippingCostPaidByOption = null, $shippingCostPaidBy = null, $restockingFeeValue = null, $restockingFeeValueOption = null, $extendedHolidayReturns = null, $internationalRefundOption = null, $internationalReturnsAcceptedOption = null, $internationalReturnsWithinOption = null, $internationalShippingCostPaidByOption = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundOption($refundOption)
            ->setRefund($refund)
            ->setReturnsWithinOption($returnsWithinOption)
            ->setReturnsWithin($returnsWithin)
            ->setReturnsAcceptedOption($returnsAcceptedOption)
            ->setReturnsAccepted($returnsAccepted)
            ->setDescription($description)
            ->setWarrantyOfferedOption($warrantyOfferedOption)
            ->setWarrantyOffered($warrantyOffered)
            ->setWarrantyTypeOption($warrantyTypeOption)
            ->setWarrantyType($warrantyType)
            ->setWarrantyDurationOption($warrantyDurationOption)
            ->setWarrantyDuration($warrantyDuration)
            ->setShippingCostPaidByOption($shippingCostPaidByOption)
            ->setShippingCostPaidBy($shippingCostPaidBy)
            ->setRestockingFeeValue($restockingFeeValue)
            ->setRestockingFeeValueOption($restockingFeeValueOption)
            ->setExtendedHolidayReturns($extendedHolidayReturns)
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
    public function getRefundOption()
    {
        return $this->RefundOption;
    }
    /**
     * Set RefundOption value
     * @param string $refundOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setRefundOption($refundOption = null)
    {
        // validation for constraint: string
        if (!is_null($refundOption) && !is_string($refundOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundOption)), __LINE__);
        }
        $this->RefundOption = $refundOption;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ReturnsWithinOption value
     * @return string|null
     */
    public function getReturnsWithinOption()
    {
        return $this->ReturnsWithinOption;
    }
    /**
     * Set ReturnsWithinOption value
     * @param string $returnsWithinOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setReturnsWithinOption($returnsWithinOption = null)
    {
        // validation for constraint: string
        if (!is_null($returnsWithinOption) && !is_string($returnsWithinOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnsWithinOption)), __LINE__);
        }
        $this->ReturnsWithinOption = $returnsWithinOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ReturnsAcceptedOption value
     * @return string|null
     */
    public function getReturnsAcceptedOption()
    {
        return $this->ReturnsAcceptedOption;
    }
    /**
     * Set ReturnsAcceptedOption value
     * @param string $returnsAcceptedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption = null)
    {
        // validation for constraint: string
        if (!is_null($returnsAcceptedOption) && !is_string($returnsAcceptedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnsAcceptedOption)), __LINE__);
        }
        $this->ReturnsAcceptedOption = $returnsAcceptedOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get WarrantyOfferedOption value
     * @return string|null
     */
    public function getWarrantyOfferedOption()
    {
        return $this->WarrantyOfferedOption;
    }
    /**
     * Set WarrantyOfferedOption value
     * @param string $warrantyOfferedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOfferedOption) && !is_string($warrantyOfferedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyOfferedOption)), __LINE__);
        }
        $this->WarrantyOfferedOption = $warrantyOfferedOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get WarrantyTypeOption value
     * @return string|null
     */
    public function getWarrantyTypeOption()
    {
        return $this->WarrantyTypeOption;
    }
    /**
     * Set WarrantyTypeOption value
     * @param string $warrantyTypeOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setWarrantyTypeOption($warrantyTypeOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyTypeOption) && !is_string($warrantyTypeOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyTypeOption)), __LINE__);
        }
        $this->WarrantyTypeOption = $warrantyTypeOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get WarrantyDurationOption value
     * @return string|null
     */
    public function getWarrantyDurationOption()
    {
        return $this->WarrantyDurationOption;
    }
    /**
     * Set WarrantyDurationOption value
     * @param string $warrantyDurationOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setWarrantyDurationOption($warrantyDurationOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyDurationOption) && !is_string($warrantyDurationOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyDurationOption)), __LINE__);
        }
        $this->WarrantyDurationOption = $warrantyDurationOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ShippingCostPaidByOption value
     * @return string|null
     */
    public function getShippingCostPaidByOption()
    {
        return $this->ShippingCostPaidByOption;
    }
    /**
     * Set ShippingCostPaidByOption value
     * @param string $shippingCostPaidByOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidByOption) && !is_string($shippingCostPaidByOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCostPaidByOption)), __LINE__);
        }
        $this->ShippingCostPaidByOption = $shippingCostPaidByOption;
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * Get ExtendedHolidayReturns value
     * @return bool|null
     */
    public function getExtendedHolidayReturns()
    {
        return $this->ExtendedHolidayReturns;
    }
    /**
     * Set ExtendedHolidayReturns value
     * @param bool $extendedHolidayReturns
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setExtendedHolidayReturns($extendedHolidayReturns = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedHolidayReturns) && !is_bool($extendedHolidayReturns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendedHolidayReturns)), __LINE__);
        }
        $this->ExtendedHolidayReturns = $extendedHolidayReturns;
        return $this;
    }
    /**
     * Get InternationalRefundOption value
     * @return string|null
     */
    public function getInternationalRefundOption()
    {
        return $this->InternationalRefundOption;
    }
    /**
     * Set InternationalRefundOption value
     * @param string $internationalRefundOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalRefundOption($internationalRefundOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalRefundOption) && !is_string($internationalRefundOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalRefundOption)), __LINE__);
        }
        $this->InternationalRefundOption = $internationalRefundOption;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedOption value
     * @return string|null
     */
    public function getInternationalReturnsAcceptedOption()
    {
        return $this->InternationalReturnsAcceptedOption;
    }
    /**
     * Set InternationalReturnsAcceptedOption value
     * @param string $internationalReturnsAcceptedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsAcceptedOption($internationalReturnsAcceptedOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsAcceptedOption) && !is_string($internationalReturnsAcceptedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalReturnsAcceptedOption)), __LINE__);
        }
        $this->InternationalReturnsAcceptedOption = $internationalReturnsAcceptedOption;
        return $this;
    }
    /**
     * Get InternationalReturnsWithinOption value
     * @return string|null
     */
    public function getInternationalReturnsWithinOption()
    {
        return $this->InternationalReturnsWithinOption;
    }
    /**
     * Set InternationalReturnsWithinOption value
     * @param string $internationalReturnsWithinOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalReturnsWithinOption($internationalReturnsWithinOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsWithinOption) && !is_string($internationalReturnsWithinOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalReturnsWithinOption)), __LINE__);
        }
        $this->InternationalReturnsWithinOption = $internationalReturnsWithinOption;
        return $this;
    }
    /**
     * Get InternationalShippingCostPaidByOption value
     * @return string|null
     */
    public function getInternationalShippingCostPaidByOption()
    {
        return $this->InternationalShippingCostPaidByOption;
    }
    /**
     * Set InternationalShippingCostPaidByOption value
     * @param string $internationalShippingCostPaidByOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public function setInternationalShippingCostPaidByOption($internationalShippingCostPaidByOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalShippingCostPaidByOption) && !is_string($internationalShippingCostPaidByOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalShippingCostPaidByOption)), __LINE__);
        }
        $this->InternationalShippingCostPaidByOption = $internationalShippingCostPaidByOption;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReturnPolicyType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType
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
