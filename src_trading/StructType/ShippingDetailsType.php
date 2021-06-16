<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ShippingDetails</b> container, which contains the shipping-related details for an order line item (pre-checkout) or order (post-checkout). <br/><br/> <span class="tablenote"> <strong>IMPORTANT:</strong> To avoid
 * loss of shipping details when revising a listing, you must include all <strong>ShippingDetails</strong> fields that were originally provided. Do not omit any tag, even if its value does not change. Omitting a shipping field when revising an item will
 * remove that detail from the listing. </span>
 * @subpackage Structs
 */
class ShippingDetailsType extends AbstractStructBase
{
    /**
     * The AllowPaymentEdit
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated and has been replaced by the <b>ShippingDetails.PaymentEdited</b> field.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AllowPaymentEdit = null;
    /**
     * The ApplyShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ApplyShippingDiscount = null;
    /**
     * The GlobalShipping
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether eBay's Global Shipping Program is offered for the listing. If the value of <strong>GlobalShipping</strong> is <code>True</code>, international shipping through the Global Shipping Program is available for the
     * listing, and eBay automatically sets one of the available shipping service options to <code>International Priority Shipping</code>. If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or
     * more international shipping service options if the seller is willing to ship internationally. <br/><br/> When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or
     * <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change. <br/><br/> Before using this field for a listing, ensure that the seller and the item being listed are eligible for the Global Shipping Program.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalShipping = null;
    /**
     * The CalculatedShippingRate
     * Meta information extracted from the WSDL
     * - documentation: Details pertinent to one or more items for which calculated shipping has been offered by the seller, such as package dimension and weight and packaging/handling costs. If your call specifies a large-dimension item listed with UPS,
     * see <a href= "https://ebaydts.com/eBayKBDetails?KBid=1159" >Dimensional Weight limit on UPS shipping services results in failure of shipping calculator</a>. <br><br> <span class="tablenote"><strong>Note:</strong> The
     * <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The
     * rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingRateType $CalculatedShippingRate = null;
    /**
     * The ChangePaymentInstructions
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller specified payment and shipping instructions during checkout (for example, to update the details of an order). Valid for flat and calculated shipping.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ChangePaymentInstructions = null;
    /**
     * The InsuranceWanted
     * Meta information extracted from the WSDL
     * - documentation: Whether or not the buyer selected to pay for insurance as an option offered by the seller. This only has a value after the buyer has gone through checkout and selected the insurance preference. <br><br> Valid only on the following
     * sites: FR and IT
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InsuranceWanted = null;
    /**
     * The PaymentEdited
     * Meta information extracted from the WSDL
     * - documentation: Whether the seller allows the buyer to edit the payment amount for the order. (Sellers enable this property in their My eBay user preferences on the eBay site.)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PaymentEdited = null;
    /**
     * The PaymentInstructions
     * Meta information extracted from the WSDL
     * - documentation: This free-form string field gives sellers the ability add detailed payment instructions to their listings. The payment instructions appear on eBay's View Item and Checkout pages. <br><br> Sellers can use this field to specify payment
     * instructions, how soon the item will shipped, feedback instructions, and other items that the buyer should be aware of when they bid on or buy an item. eBay recommends sellers use this field to clarify payment policies for motor vehicle listings on
     * eBay Motors. For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle. <br><br> The field allows only 500 characters as input, but due to the way the eBay web
     * site UI treats characters, this field can return more than 500 characters in the response. For example, characters like & and ' (ampersand and single quote) count as 5 characters each. <br><br> This field can be specified regardless of the shipping
     * type. Use <b>DeletedField</b> to remove this value when revising or relisting an item. <br><br> Applicable to eBay Motors (usually used to elaborate on the return policy). <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentInstructions = null;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: This container shows sales tax information for an item in a specific tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites. <br><br> This container can be used in an
     * Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A
     * seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax
     * jurisdictions. <br><br> This container is only returned in order management 'Get' calls if sales tax is applicable to the order line item. For eBay Collect and Remit states, the sales tax information is displayed in the <b>Transaction.Taxes</b>
     * container instead. <br><br> <span class="tablenote"><b>Note: </b> As of September 1, 2020, buyers in over 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing
     * authority on the buyer's behalf. So, if a sales tax rate is applied by the seller for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay during checkout process. For a list of the US states that are
     * currently subject to 'eBay Collect and Remit', see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span> <br> <span class="tablenote"><b>Note:
     * </b> For eBay managed payment orders that are subject to 'Collect and Remit' taxes, these taxes will only be shown in the <b>eBayCollectAndRemitTaxes</b> container for line items, and the <b>SalesTax</b> will not be returned at all. For non-eBay
     * managed payment orders, the 'Collect and Remit' taxes will be shown in both the <b>eBayCollectAndRemitTaxes</b> and <b>SalesTax</b> containers. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SalesTaxType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SalesTaxType $SalesTax = null;
    /**
     * The ShippingRateErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: For most applicable calls, returns the words No Error or returns an error message related to an attempt to calculate shipping rates. For calculated shipping only. <br><br> The message text explains that a postal code is needed to
     * calculate shipping. Only returned when <b>ItemDetails</b> is set to <code>Fine</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingRateErrorMessage = null;
    /**
     * The ShippingRateType
     * Meta information extracted from the WSDL
     * - documentation: A shipping rate scale for shipping through USPS that affects the shipping cost calculated for USPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). <strong>ShippingRateType</strong> is returned only if the
     * value of <strong>ShippingService</strong> is one of the USPS shipping services. For calculated shipping only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingRateType = null;
    /**
     * The ShippingServiceOptions
     * Meta information extracted from the WSDL
     * - documentation: This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate
     * <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be
     * required. <br><br> If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes after a list of repeating
     * <b>ShippingServiceOptions</b> nodes, but not between them: <br><br> <code> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     * &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     * </code> <br><br> If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the listing. This may also have unintended side effects, as other
     * fields that depend on this data may be dropped as well. <br/><br/> To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in
     * the listing. <br><br> A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be
     * offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated). <br/><br/> <span
     * class="tablenote"><b>Note: </b> If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b>
     * container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local
     * Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic
     * shipping service, other than or in addition to Local Pickup.</em> </span> <br> For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a
     * warning is returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]
     */
    protected array $ShippingServiceOptions = [];
    /**
     * The InternationalShippingServiceOption
     * Meta information extracted from the WSDL
     * - documentation: Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>. <br><br> If you specify multiple
     * <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes. <br><br> All specified domestic and international shipping
     * services must be the same shipping type (for example, Flat versus Calculated). <br><br> A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping
     * Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). <br><br> If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     * <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped
     * as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing. <br><br> For <b>GetItemShipping</b>, results
     * are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]
     */
    protected array $InternationalShippingServiceOption = [];
    /**
     * The ShippingType
     * Meta information extracted from the WSDL
     * - documentation: The shipping cost model offered by the seller. This is not returned for various calls since shipping type can be deduced: if a <b>CalculatedShippingRate</b> structure is returned by the call, the shipping type is Calculated.
     * Otherwise, it is one of the other non-Calculated shipping types. <br><br> <b>GetItemShipping and GetItemTransactions</b>: If the type was a mix of flat and calculated services, this is set simply to Flat or Calculated because it is the buyer's
     * selection that results in one of these. <br><br> <b>GetMyeBayBuying</b>: If the seller has set the <b>ShipToLocation</b> to <code>Worldwide</code> for an item, but has not specified any international shipping service options,
     * <code>NotSpecified</code> is returned as the <b>ShippingType</b> value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingType = null;
    /**
     * The SellingManagerSalesRecordNumber
     * Meta information extracted from the WSDL
     * - documentation: The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold
     * view in Selling Manager. Each sale record has a sale record ID. <br/><br/> In the following calls, the value for the sale record ID is in the <b>SellingManagerSalesRecordNumber</b> field: <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>,
     * <b>GetOrders</b>, <b>GetOrderTransactions</b>. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer
     * returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties. <br/><br/> The sale record
     * ID can be for a single or a multiple line item order. <br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only
     * returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SellingManagerSalesRecordNumber = null;
    /**
     * The ThirdPartyCheckout
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ThirdPartyCheckout = null;
    /**
     * The TaxTable
     * Meta information extracted from the WSDL
     * - documentation: Tax details for a jurisdiction, such as a state or province. If no tax table is associated with the item, a tax table is not returned. <br><br> For <b>GetItem</b>, a tax table is returned if it exists when: <ul>
     * <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case, the value of <b>IncludeTaxTable</b> does not matter)</li> <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set
     * or it is set to <code>ItemReturnAttributes</code></li> </ul>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxTableType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TaxTableType $TaxTable = null;
    /**
     * The GetItFast
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GetItFast = null;
    /**
     * The ShippingServiceUsed
     * Meta information extracted from the WSDL
     * - documentation: The shipping service actually used by the seller to ship the item(s) to the buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceUsed = null;
    /**
     * The DefaultShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $DefaultShippingCost = null;
    /**
     * The ShippingDiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: On input, this is the ID of the shipping discount to offer for the domestic shipping services (where the shipping discount is either of type <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>). <br/><br/> On output,
     * this is the ID of the shipping discount offered and corresponds to whichever is returned: <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>. Only returned if the calling user is the seller. <br/><br/> If the user created a shipping
     * discount profile, use the <b>ShippingDiscountProfileID</b>. <br><br> In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing <b>ShippingDiscountProfileID</b> associated with the item by supplying a value of 0
     * (zero). <br><br> Only returned if the calling user is the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingDiscountProfileID = null;
    /**
     * The FlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: If a flat rate shipping discount was offered for the domestic shipping services, this contains the details of the flat rate shipping discount. Otherwise, it is not returned. Only returned if the calling user is the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $FlatShippingDiscount = null;
    /**
     * The CalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: If a calculated shipping discount was offered for the domestic shipping services, this contains the details of the calculated shipping discount. Otherwise, it is not returned. Only returned if the calling user is the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $CalculatedShippingDiscount = null;
    /**
     * The PromotionalShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: On input, this specifies whether to offer the promotional shipping discount for the domestic shipping services of this listing (only applicable if the seller has a promotional shipping discount in effect at the moment). <br><br>
     * Returned on output only if the seller is making the call. This indicates whether the promotional shipping discount is being offered for the domestic shipping services of this listing (if the listing is still active&#8212;this is only possible if the
     * seller has a promotional shipping discount in effect at the moment) or whether the discount was offered at the time the listing ended.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PromotionalShippingDiscount = null;
    /**
     * The InternationalShippingDiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: On input, this is the ID of the shipping discount to offer for the international shipping services (where the shipping discount is either of type <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>). <br><br> In the
     * <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing <b>InternationalShippingDiscountProfileID</b> associated with the item by supplying a value of 0 (zero). <br><br> Returned on output only if the seller is making the
     * call. The value is the ID of the shipping discount offered and corresponds to whichever is returned: <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>. <br><br> If the user created a shipping discount profile, use
     * <b>InternationalShippingDiscountProfileID</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalShippingDiscountProfileID = null;
    /**
     * The InternationalFlatShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This value is returned only if the seller is making the call. If a flat rate shipping discount was offered for the international shipping services, this contains the details of the flat rate shipping discount. Otherwise, it is not
     * returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $InternationalFlatShippingDiscount = null;
    /**
     * The InternationalCalculatedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This value is returned only if the seller is making the call. If a calculated shipping discount was offered for the international shipping services, this contains the details of the calculated shipping discount. Otherwise, it is not
     * returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount = null;
    /**
     * The InternationalPromotionalShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: On input, this specifies whether to offer the promotional shipping discount for the listing's international shipping services (only applicable if the seller has a promotional shipping discount in effect at the moment). <br><br>
     * Returned on output only if the seller is making the call. This value indicates whether the promotional shipping discount is being offered for the international shipping services of this listing (if the listing is still active&#8212;this is only
     * possible if the seller has a promotional shipping discount in effect at the moment) or whether the discount was offered at the time the listing ended.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InternationalPromotionalShippingDiscount = null;
    /**
     * The PromotionalShippingDiscountDetails
     * Meta information extracted from the WSDL
     * - documentation: This value is returned only if the seller is making the call. Contains details of the promotional shipping discount, if such is being offered while the listing is active or if it was offered at the time the listing ended.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails = null;
    /**
     * The CODCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the money due from the buyer upon delivery of the item. <br><br> This field should only be specified in the request if 'COD' (cash-on-delivery) is a valid payment method for the site and listing category,
     * and it is included as a <b>PaymentMethods</b> value in the same request. <br><br> This field is only returned if set for the listing. <br><br> To see if 'COD' is a supported payment method for a site and category, call <b>GetCategoryFeatures</b>,
     * specifying the listing category ID, and including the <b>FeatureID</b> field set to <b>PaymentMethods</b>. Look for a value of 'CashOnPickup' in one of the <b>Category.PaymentMethod</b> fields in the response. For some eBay sites, the 'COD' enum may
     * also get returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CODCost = null;
    /**
     * The ExcludeShipToLocation
     * Meta information extracted from the WSDL
     * - documentation: Use this field to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request
     * for each location that you want to exclude as a shipping destination for your item. <br><br> Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b> settings applied to your listing. The locations you have
     * excluded display in the Shipping and Handling section of your item listing. <br><br> If a buyer's primary ship-to location is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location),
     * they will receive an error message if they attempt to buy or place a bid on your item. <br><br> The exclude ship-to location values are eBay regions and countries. To see the valid exclude ship-to locations for a specified site, call
     * <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>, and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response. Repeat <b>GeteBayDetails</b> for each site on which you list.
     * <br><br> This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of international countries and regions to where you will, and will not, ship. You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     * countries within that region with this field (for example, you can specify Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b> setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can
     * use this field to specify both regions and countries that you want to exclude from your shipping destinations. <br><br> You can specify a default set of locations to where you will not ship in My eBay. If you create an Exclude Ship-To List, it is, by
     * default, in effect when you list items. However, if you specify any value in this field on input, it nullifies the default settings in your Exclude Ship-To List. (If you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     * all the locations to where you will not ship the associated item, regardless of the default settings in your Exclude Ship-To List.) <br><br> Specify <code>none</code> in this field to override the default Exclude Ship-To List you might have set up in
     * My eBay and indicate that you do not want to exclude any shipping locations from the respective item listing. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you must enable Exclude Shipping
     * Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href= "https://ebaydts.com/eBayKBDetails?KBid=1495" >HowTo: ExcludeShipToLocation</a>. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ExcludeShipToLocation = [];
    /**
     * The SellerExcludeShipToLocationsPreference
     * Meta information extracted from the WSDL
     * - documentation: Sellers can set up a global Exclude Ship-To List through their My eBay account. The Exclude Ship-To List defines the countries to where the seller does not ship, by default. <br><br> This flag returns true if the Exclude Ship-To List
     * is enabled by the seller for the associated item. If <code>false</code>, the seller's Exclude Ship-To List is either not set up, or it has been overridden by the seller when they listed the item with ExcludeShipToLocation fields. <br><br> In the
     * response, <b>ExcludeShipToLocation</b> fields detail the locations to where the seller will not ship the item, regardless of the value returned in this field.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerExcludeShipToLocationsPreference = null;
    /**
     * The ShipmentTrackingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container for the shipping carrier and tracking information associated with the shipment of an order. <br><br> As each package has a unique tracking number, this container should be repeated for each package in the order. <br> <br>
     * <span class="tablenote"><b>Note:</b> Top-rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 90 percent of their order line items (purchased by U.S. buyers) to keep their status as
     * Top-rated sellers. For more information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page. </span> <br> <span
     * class="tablenote"><b>Note:</b> Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered
     * acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    protected array $ShipmentTrackingDetails = [];
    /**
     * The RateTableDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is used to reference and apply a seller's domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and
     * level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For
     * example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others. <br><br> Sellers
     * configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables to a listing, the shipping cost type must be flat-rate. <br><br> For domestic shipping rate tables, the three supported domestic
     * regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level,
     * the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can
     * be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account,
     * details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs. <br><br> For international
     * shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on
     * the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look
     * for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate
     * table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs. <br/><br/> If you are applying a domestic or
     * international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate
     * shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case. <br><br> This container is only returned in the 'Get' calls if one or more shipping rate tables have
     * been applied to the listing, and if the call is being made by the seller who listed the item. <br/><br/> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per
     * seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old
     * default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that
     * will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping
     * rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields
     * (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as
     * Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RateTableDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RateTableDetailsType $RateTableDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShippingDetailsType
     * @uses ShippingDetailsType::setAllowPaymentEdit()
     * @uses ShippingDetailsType::setApplyShippingDiscount()
     * @uses ShippingDetailsType::setGlobalShipping()
     * @uses ShippingDetailsType::setCalculatedShippingRate()
     * @uses ShippingDetailsType::setChangePaymentInstructions()
     * @uses ShippingDetailsType::setInsuranceWanted()
     * @uses ShippingDetailsType::setPaymentEdited()
     * @uses ShippingDetailsType::setPaymentInstructions()
     * @uses ShippingDetailsType::setSalesTax()
     * @uses ShippingDetailsType::setShippingRateErrorMessage()
     * @uses ShippingDetailsType::setShippingRateType()
     * @uses ShippingDetailsType::setShippingServiceOptions()
     * @uses ShippingDetailsType::setInternationalShippingServiceOption()
     * @uses ShippingDetailsType::setShippingType()
     * @uses ShippingDetailsType::setSellingManagerSalesRecordNumber()
     * @uses ShippingDetailsType::setThirdPartyCheckout()
     * @uses ShippingDetailsType::setTaxTable()
     * @uses ShippingDetailsType::setGetItFast()
     * @uses ShippingDetailsType::setShippingServiceUsed()
     * @uses ShippingDetailsType::setDefaultShippingCost()
     * @uses ShippingDetailsType::setShippingDiscountProfileID()
     * @uses ShippingDetailsType::setFlatShippingDiscount()
     * @uses ShippingDetailsType::setCalculatedShippingDiscount()
     * @uses ShippingDetailsType::setPromotionalShippingDiscount()
     * @uses ShippingDetailsType::setInternationalShippingDiscountProfileID()
     * @uses ShippingDetailsType::setInternationalFlatShippingDiscount()
     * @uses ShippingDetailsType::setInternationalCalculatedShippingDiscount()
     * @uses ShippingDetailsType::setInternationalPromotionalShippingDiscount()
     * @uses ShippingDetailsType::setPromotionalShippingDiscountDetails()
     * @uses ShippingDetailsType::setCODCost()
     * @uses ShippingDetailsType::setExcludeShipToLocation()
     * @uses ShippingDetailsType::setSellerExcludeShipToLocationsPreference()
     * @uses ShippingDetailsType::setShipmentTrackingDetails()
     * @uses ShippingDetailsType::setRateTableDetails()
     * @uses ShippingDetailsType::setAny()
     * @param bool $allowPaymentEdit
     * @param bool $applyShippingDiscount
     * @param bool $globalShipping
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType $calculatedShippingRate
     * @param bool $changePaymentInstructions
     * @param bool $insuranceWanted
     * @param bool $paymentEdited
     * @param string $paymentInstructions
     * @param \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax
     * @param string $shippingRateErrorMessage
     * @param string $shippingRateType
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
     * @param string $shippingType
     * @param int $sellingManagerSalesRecordNumber
     * @param bool $thirdPartyCheckout
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     * @param bool $getItFast
     * @param string $shippingServiceUsed
     * @param \macropage\ebaysdk\trading\StructType\AmountType $defaultShippingCost
     * @param string $shippingDiscountProfileID
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @param bool $promotionalShippingDiscount
     * @param string $internationalShippingDiscountProfileID
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $internationalFlatShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
     * @param bool $internationalPromotionalShippingDiscount
     * @param \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @param string[] $excludeShipToLocation
     * @param bool $sellerExcludeShipToLocationsPreference
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @param \macropage\ebaysdk\trading\StructType\RateTableDetailsType $rateTableDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $allowPaymentEdit = null, ?bool $applyShippingDiscount = null, ?bool $globalShipping = null, ?\macropage\ebaysdk\trading\StructType\CalculatedShippingRateType $calculatedShippingRate = null, ?bool $changePaymentInstructions = null, ?bool $insuranceWanted = null, ?bool $paymentEdited = null, ?string $paymentInstructions = null, ?\macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null, ?string $shippingRateErrorMessage = null, ?string $shippingRateType = null, array $shippingServiceOptions = [], array $internationalShippingServiceOption = [], ?string $shippingType = null, ?int $sellingManagerSalesRecordNumber = null, ?bool $thirdPartyCheckout = null, ?\macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null, ?bool $getItFast = null, ?string $shippingServiceUsed = null, ?\macropage\ebaysdk\trading\StructType\AmountType $defaultShippingCost = null, ?string $shippingDiscountProfileID = null, ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $flatShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $calculatedShippingDiscount = null, ?bool $promotionalShippingDiscount = null, ?string $internationalShippingDiscountProfileID = null, ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $internationalFlatShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount = null, ?bool $internationalPromotionalShippingDiscount = null, ?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null, ?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null, array $excludeShipToLocation = [], ?bool $sellerExcludeShipToLocationsPreference = null, array $shipmentTrackingDetails = [], ?\macropage\ebaysdk\trading\StructType\RateTableDetailsType $rateTableDetails = null, $any = null)
    {
        $this
            ->setAllowPaymentEdit($allowPaymentEdit)
            ->setApplyShippingDiscount($applyShippingDiscount)
            ->setGlobalShipping($globalShipping)
            ->setCalculatedShippingRate($calculatedShippingRate)
            ->setChangePaymentInstructions($changePaymentInstructions)
            ->setInsuranceWanted($insuranceWanted)
            ->setPaymentEdited($paymentEdited)
            ->setPaymentInstructions($paymentInstructions)
            ->setSalesTax($salesTax)
            ->setShippingRateErrorMessage($shippingRateErrorMessage)
            ->setShippingRateType($shippingRateType)
            ->setShippingServiceOptions($shippingServiceOptions)
            ->setInternationalShippingServiceOption($internationalShippingServiceOption)
            ->setShippingType($shippingType)
            ->setSellingManagerSalesRecordNumber($sellingManagerSalesRecordNumber)
            ->setThirdPartyCheckout($thirdPartyCheckout)
            ->setTaxTable($taxTable)
            ->setGetItFast($getItFast)
            ->setShippingServiceUsed($shippingServiceUsed)
            ->setDefaultShippingCost($defaultShippingCost)
            ->setShippingDiscountProfileID($shippingDiscountProfileID)
            ->setFlatShippingDiscount($flatShippingDiscount)
            ->setCalculatedShippingDiscount($calculatedShippingDiscount)
            ->setPromotionalShippingDiscount($promotionalShippingDiscount)
            ->setInternationalShippingDiscountProfileID($internationalShippingDiscountProfileID)
            ->setInternationalFlatShippingDiscount($internationalFlatShippingDiscount)
            ->setInternationalCalculatedShippingDiscount($internationalCalculatedShippingDiscount)
            ->setInternationalPromotionalShippingDiscount($internationalPromotionalShippingDiscount)
            ->setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
            ->setCODCost($cODCost)
            ->setExcludeShipToLocation($excludeShipToLocation)
            ->setSellerExcludeShipToLocationsPreference($sellerExcludeShipToLocationsPreference)
            ->setShipmentTrackingDetails($shipmentTrackingDetails)
            ->setRateTableDetails($rateTableDetails)
            ->setAny($any);
    }
    /**
     * Get AllowPaymentEdit value
     * @return bool|null
     */
    public function getAllowPaymentEdit(): ?bool
    {
        return $this->AllowPaymentEdit;
    }
    /**
     * Set AllowPaymentEdit value
     * @param bool $allowPaymentEdit
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setAllowPaymentEdit(?bool $allowPaymentEdit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPaymentEdit) && !is_bool($allowPaymentEdit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPaymentEdit, true), gettype($allowPaymentEdit)), __LINE__);
        }
        $this->AllowPaymentEdit = $allowPaymentEdit;
        
        return $this;
    }
    /**
     * Get ApplyShippingDiscount value
     * @return bool|null
     */
    public function getApplyShippingDiscount(): ?bool
    {
        return $this->ApplyShippingDiscount;
    }
    /**
     * Set ApplyShippingDiscount value
     * @param bool $applyShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setApplyShippingDiscount(?bool $applyShippingDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($applyShippingDiscount) && !is_bool($applyShippingDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applyShippingDiscount, true), gettype($applyShippingDiscount)), __LINE__);
        }
        $this->ApplyShippingDiscount = $applyShippingDiscount;
        
        return $this;
    }
    /**
     * Get GlobalShipping value
     * @return bool|null
     */
    public function getGlobalShipping(): ?bool
    {
        return $this->GlobalShipping;
    }
    /**
     * Set GlobalShipping value
     * @param bool $globalShipping
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setGlobalShipping(?bool $globalShipping = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalShipping) && !is_bool($globalShipping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalShipping, true), gettype($globalShipping)), __LINE__);
        }
        $this->GlobalShipping = $globalShipping;
        
        return $this;
    }
    /**
     * Get CalculatedShippingRate value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType|null
     */
    public function getCalculatedShippingRate(): ?\macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
    {
        return $this->CalculatedShippingRate;
    }
    /**
     * Set CalculatedShippingRate value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType $calculatedShippingRate
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setCalculatedShippingRate(?\macropage\ebaysdk\trading\StructType\CalculatedShippingRateType $calculatedShippingRate = null): self
    {
        $this->CalculatedShippingRate = $calculatedShippingRate;
        
        return $this;
    }
    /**
     * Get ChangePaymentInstructions value
     * @return bool|null
     */
    public function getChangePaymentInstructions(): ?bool
    {
        return $this->ChangePaymentInstructions;
    }
    /**
     * Set ChangePaymentInstructions value
     * @param bool $changePaymentInstructions
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setChangePaymentInstructions(?bool $changePaymentInstructions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($changePaymentInstructions) && !is_bool($changePaymentInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changePaymentInstructions, true), gettype($changePaymentInstructions)), __LINE__);
        }
        $this->ChangePaymentInstructions = $changePaymentInstructions;
        
        return $this;
    }
    /**
     * Get InsuranceWanted value
     * @return bool|null
     */
    public function getInsuranceWanted(): ?bool
    {
        return $this->InsuranceWanted;
    }
    /**
     * Set InsuranceWanted value
     * @param bool $insuranceWanted
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setInsuranceWanted(?bool $insuranceWanted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($insuranceWanted) && !is_bool($insuranceWanted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insuranceWanted, true), gettype($insuranceWanted)), __LINE__);
        }
        $this->InsuranceWanted = $insuranceWanted;
        
        return $this;
    }
    /**
     * Get PaymentEdited value
     * @return bool|null
     */
    public function getPaymentEdited(): ?bool
    {
        return $this->PaymentEdited;
    }
    /**
     * Set PaymentEdited value
     * @param bool $paymentEdited
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setPaymentEdited(?bool $paymentEdited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paymentEdited) && !is_bool($paymentEdited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paymentEdited, true), gettype($paymentEdited)), __LINE__);
        }
        $this->PaymentEdited = $paymentEdited;
        
        return $this;
    }
    /**
     * Get PaymentInstructions value
     * @return string|null
     */
    public function getPaymentInstructions(): ?string
    {
        return $this->PaymentInstructions;
    }
    /**
     * Set PaymentInstructions value
     * @param string $paymentInstructions
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setPaymentInstructions(?string $paymentInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentInstructions) && !is_string($paymentInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentInstructions, true), gettype($paymentInstructions)), __LINE__);
        }
        $this->PaymentInstructions = $paymentInstructions;
        
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType|null
     */
    public function getSalesTax(): ?\macropage\ebaysdk\trading\StructType\SalesTaxType
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setSalesTax(?\macropage\ebaysdk\trading\StructType\SalesTaxType $salesTax = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * Get ShippingRateType value
     * @return string|null
     */
    public function getShippingRateType(): ?string
    {
        return $this->ShippingRateType;
    }
    /**
     * Set ShippingRateType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRateTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRateTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingRateType
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShippingRateType(?string $shippingRateType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingRateTypeCodeType::valueIsValid($shippingRateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingRateTypeCodeType', is_array($shippingRateType) ? implode(', ', $shippingRateType) : var_export($shippingRateType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingRateTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingRateType = $shippingRateType;
        
        return $this;
    }
    /**
     * Get ShippingServiceOptions value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions(): array
    {
        return $this->ShippingServiceOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingServiceOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingServiceOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingDetailsTypeShippingServiceOptionsItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeShippingServiceOptionsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
                $invalidValues[] = is_object($shippingDetailsTypeShippingServiceOptionsItem) ? get_class($shippingDetailsTypeShippingServiceOptionsItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeShippingServiceOptionsItem), var_export($shippingDetailsTypeShippingServiceOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShippingServiceOptions(array $shippingServiceOptions = []): self
    {
        // validation for constraint: array
        if ('' !== ($shippingServiceOptionsArrayErrorMessage = self::validateShippingServiceOptionsForArrayConstraintsFromSetShippingServiceOptions($shippingServiceOptions))) {
            throw new InvalidArgumentException($shippingServiceOptionsArrayErrorMessage, __LINE__);
        }
        $this->ShippingServiceOptions = $shippingServiceOptions;
        
        return $this;
    }
    /**
     * Add item to ShippingServiceOptions value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function addToShippingServiceOptions(\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType) {
            throw new InvalidArgumentException(sprintf('The ShippingServiceOptions property can only contain items of type \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShippingServiceOptions[] = $item;
        
        return $this;
    }
    /**
     * Get InternationalShippingServiceOption value
     * @return \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[]
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
            if (!$shippingDetailsTypeInternationalShippingServiceOptionItem instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
                $invalidValues[] = is_object($shippingDetailsTypeInternationalShippingServiceOptionItem) ? get_class($shippingDetailsTypeInternationalShippingServiceOptionItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeInternationalShippingServiceOptionItem), var_export($shippingDetailsTypeInternationalShippingServiceOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InternationalShippingServiceOption property can only contain items of type \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalShippingServiceOption value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * @param \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function addToInternationalShippingServiceOption(\macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType) {
            throw new InvalidArgumentException(sprintf('The InternationalShippingServiceOption property can only contain items of type \macropage\ebaysdk\trading\StructType\InternationalShippingServiceOptionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InternationalShippingServiceOption[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingType value
     * @return string|null
     */
    public function getShippingType(): ?string
    {
        return $this->ShippingType;
    }
    /**
     * Set ShippingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingType
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShippingType(?string $shippingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid($shippingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType', is_array($shippingType) ? implode(', ', $shippingType) : var_export($shippingType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingType = $shippingType;
        
        return $this;
    }
    /**
     * Get SellingManagerSalesRecordNumber value
     * @return int|null
     */
    public function getSellingManagerSalesRecordNumber(): ?int
    {
        return $this->SellingManagerSalesRecordNumber;
    }
    /**
     * Set SellingManagerSalesRecordNumber value
     * @param int $sellingManagerSalesRecordNumber
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setSellingManagerSalesRecordNumber(?int $sellingManagerSalesRecordNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingManagerSalesRecordNumber) && !(is_int($sellingManagerSalesRecordNumber) || ctype_digit($sellingManagerSalesRecordNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingManagerSalesRecordNumber, true), gettype($sellingManagerSalesRecordNumber)), __LINE__);
        }
        $this->SellingManagerSalesRecordNumber = $sellingManagerSalesRecordNumber;
        
        return $this;
    }
    /**
     * Get ThirdPartyCheckout value
     * @return bool|null
     */
    public function getThirdPartyCheckout(): ?bool
    {
        return $this->ThirdPartyCheckout;
    }
    /**
     * Set ThirdPartyCheckout value
     * @param bool $thirdPartyCheckout
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setThirdPartyCheckout(?bool $thirdPartyCheckout = null): self
    {
        // validation for constraint: boolean
        if (!is_null($thirdPartyCheckout) && !is_bool($thirdPartyCheckout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thirdPartyCheckout, true), gettype($thirdPartyCheckout)), __LINE__);
        }
        $this->ThirdPartyCheckout = $thirdPartyCheckout;
        
        return $this;
    }
    /**
     * Get TaxTable value
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType|null
     */
    public function getTaxTable(): ?\macropage\ebaysdk\trading\StructType\TaxTableType
    {
        return $this->TaxTable;
    }
    /**
     * Set TaxTable value
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setTaxTable(?\macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null): self
    {
        $this->TaxTable = $taxTable;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * Get ShippingServiceUsed value
     * @return string|null
     */
    public function getShippingServiceUsed(): ?string
    {
        return $this->ShippingServiceUsed;
    }
    /**
     * Set ShippingServiceUsed value
     * @param string $shippingServiceUsed
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShippingServiceUsed(?string $shippingServiceUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingServiceUsed) && !is_string($shippingServiceUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceUsed, true), gettype($shippingServiceUsed)), __LINE__);
        }
        $this->ShippingServiceUsed = $shippingServiceUsed;
        
        return $this;
    }
    /**
     * Get DefaultShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDefaultShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->DefaultShippingCost;
    }
    /**
     * Set DefaultShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $defaultShippingCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setDefaultShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $defaultShippingCost = null): self
    {
        $this->DefaultShippingCost = $defaultShippingCost;
        
        return $this;
    }
    /**
     * Get ShippingDiscountProfileID value
     * @return string|null
     */
    public function getShippingDiscountProfileID(): ?string
    {
        return $this->ShippingDiscountProfileID;
    }
    /**
     * Set ShippingDiscountProfileID value
     * @param string $shippingDiscountProfileID
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShippingDiscountProfileID(?string $shippingDiscountProfileID = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDiscountProfileID) && !is_string($shippingDiscountProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDiscountProfileID, true), gettype($shippingDiscountProfileID)), __LINE__);
        }
        $this->ShippingDiscountProfileID = $shippingDiscountProfileID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * Get InternationalShippingDiscountProfileID value
     * @return string|null
     */
    public function getInternationalShippingDiscountProfileID(): ?string
    {
        return $this->InternationalShippingDiscountProfileID;
    }
    /**
     * Set InternationalShippingDiscountProfileID value
     * @param string $internationalShippingDiscountProfileID
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setInternationalShippingDiscountProfileID(?string $internationalShippingDiscountProfileID = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalShippingDiscountProfileID) && !is_string($internationalShippingDiscountProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalShippingDiscountProfileID, true), gettype($internationalShippingDiscountProfileID)), __LINE__);
        }
        $this->InternationalShippingDiscountProfileID = $internationalShippingDiscountProfileID;
        
        return $this;
    }
    /**
     * Get InternationalFlatShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType|null
     */
    public function getInternationalFlatShippingDiscount(): ?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
    {
        return $this->InternationalFlatShippingDiscount;
    }
    /**
     * Set InternationalFlatShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $internationalFlatShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setInternationalFlatShippingDiscount(?\macropage\ebaysdk\trading\StructType\FlatShippingDiscountType $internationalFlatShippingDiscount = null): self
    {
        $this->InternationalFlatShippingDiscount = $internationalFlatShippingDiscount;
        
        return $this;
    }
    /**
     * Get InternationalCalculatedShippingDiscount value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType|null
     */
    public function getInternationalCalculatedShippingDiscount(): ?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
    {
        return $this->InternationalCalculatedShippingDiscount;
    }
    /**
     * Set InternationalCalculatedShippingDiscount value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setInternationalCalculatedShippingDiscount(?\macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount = null): self
    {
        $this->InternationalCalculatedShippingDiscount = $internationalCalculatedShippingDiscount;
        
        return $this;
    }
    /**
     * Get InternationalPromotionalShippingDiscount value
     * @return bool|null
     */
    public function getInternationalPromotionalShippingDiscount(): ?bool
    {
        return $this->InternationalPromotionalShippingDiscount;
    }
    /**
     * Set InternationalPromotionalShippingDiscount value
     * @param bool $internationalPromotionalShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setInternationalPromotionalShippingDiscount(?bool $internationalPromotionalShippingDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($internationalPromotionalShippingDiscount) && !is_bool($internationalPromotionalShippingDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($internationalPromotionalShippingDiscount, true), gettype($internationalPromotionalShippingDiscount)), __LINE__);
        }
        $this->InternationalPromotionalShippingDiscount = $internationalPromotionalShippingDiscount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setPromotionalShippingDiscountDetails(?\macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails = null): self
    {
        $this->PromotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        
        return $this;
    }
    /**
     * Get CODCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCODCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CODCost;
    }
    /**
     * Set CODCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $cODCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setCODCost(?\macropage\ebaysdk\trading\StructType\AmountType $cODCost = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
     * Get SellerExcludeShipToLocationsPreference value
     * @return bool|null
     */
    public function getSellerExcludeShipToLocationsPreference(): ?bool
    {
        return $this->SellerExcludeShipToLocationsPreference;
    }
    /**
     * Set SellerExcludeShipToLocationsPreference value
     * @param bool $sellerExcludeShipToLocationsPreference
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setSellerExcludeShipToLocationsPreference(?bool $sellerExcludeShipToLocationsPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerExcludeShipToLocationsPreference) && !is_bool($sellerExcludeShipToLocationsPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerExcludeShipToLocationsPreference, true), gettype($sellerExcludeShipToLocationsPreference)), __LINE__);
        }
        $this->SellerExcludeShipToLocationsPreference = $sellerExcludeShipToLocationsPreference;
        
        return $this;
    }
    /**
     * Get ShipmentTrackingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails(): array
    {
        return $this->ShipmentTrackingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentTrackingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrackingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingDetailsTypeShipmentTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeShipmentTrackingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
                $invalidValues[] = is_object($shippingDetailsTypeShipmentTrackingDetailsItem) ? get_class($shippingDetailsTypeShipmentTrackingDetailsItem) : sprintf('%s(%s)', gettype($shippingDetailsTypeShipmentTrackingDetailsItem), var_export($shippingDetailsTypeShipmentTrackingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentTrackingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShipmentTrackingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentTrackingDetailsArrayErrorMessage = self::validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails($shipmentTrackingDetails))) {
            throw new InvalidArgumentException($shipmentTrackingDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShipmentTrackingDetails = $shipmentTrackingDetails;
        
        return $this;
    }
    /**
     * Add item to ShipmentTrackingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function addToShipmentTrackingDetails(\macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShipmentTrackingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipmentTrackingDetails[] = $item;
        
        return $this;
    }
    /**
     * Get RateTableDetails value
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType|null
     */
    public function getRateTableDetails(): ?\macropage\ebaysdk\trading\StructType\RateTableDetailsType
    {
        return $this->RateTableDetails;
    }
    /**
     * Set RateTableDetails value
     * @param \macropage\ebaysdk\trading\StructType\RateTableDetailsType $rateTableDetails
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public function setRateTableDetails(?\macropage\ebaysdk\trading\StructType\RateTableDetailsType $rateTableDetails = null): self
    {
        $this->RateTableDetails = $rateTableDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType
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
