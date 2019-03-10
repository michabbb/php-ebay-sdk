<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: There are single line item and multiple line item orders. A single payment is made for both order types. <br> <br> We strongly recommend that you avoid mixing digital and non-digital listings in the same <a
 * href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> order.
 * @subpackage Structs
 */
class OrderType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. For a single line item order, this value is actually the <b>OrderLineItemID</b> value, which is a concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two
     * values, such as <code>121124971073-1094989827002</code> for a fixed-price listing, or <code>121124971074-0</code> for an auction listing. For a multiple line item order (known as a Combined Invoice order), the <b>OrderID</b> value is created by eBay
     * when the buyer/seller combines multiple line items into one order, and the buyer makes one payment for all line items from the same seller. "Combined Invoice" orders are created through the Web flow, or when the buyer or seller creates a "Combined
     * Invoice" order by using the <a href="AddOrder.html">AddOrder</a> call. An example of "Combined Invoice" order ID is <code>155643809010</code>. <br><br> An <b>OrderID</b> value overrides an <b>OrderLineItemID</b> value or an
     * <b>ItemID/TransactionID</b> pair if these fields are also specified in the same request. <br/><br/> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> This field is returned with the correct order ID only to the buyer, the
     * seller, or PayPal (if PayPal is the payment method). For third parties (except PayPal): <ul> <li>If using a Trading WSDL older than version 1019, the Order ID will be returned to third parties as dummy data in the form of <code>1000000000000</code>
     * or <code>1000000000000-1000000000000</code>.</li> <li>If using Trading WSDL version 1019 or newer, the Order ID will be returned to third parties as an empty field (<code>&lt;OrderID/&gt;</code>).</li> </ul> | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderStatus
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatus;
    /**
     * The AdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, shipping insurance, buyer discounts, or added services. A positive amount indicates
     * the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The AmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the total amount of the order. This amount includes the sale price of each line item, shipping and handling charges, shipping insurance (if offered and selected by the buyer), additional services, and any applied
     * sales tax. This value is returned after the buyer has completed checkout (the <b>CheckoutStatus.Status</b> output field reads 'Complete'). <br><br> <span class="tablenote"><strong>Note:</strong> For auction listings on North American sites and on
     * eBay Motors Parts and Accessories, the <b>AmountPaid</b> value minus any applied sales tax is the amount subject to the final value fee calculation. The sales tax amount is returned in the <b>ShippingDetails.SalesTax.SalesTaxAmount</b> field. For
     * more information on how final value fees are calculated, see the <a href="http://pages.ebay.com/help/sell/fvf.html">final value fees</a> help page. </span><br> <span class="tablenote"><b>Note: </b> The amount in this field will not include any
     * Australia import tax charged to the buyer for one or more order line items. Australia import tax is only applicable to the Australia site. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The AmountSaved
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the shipping discount experienced by the buyer as a result of creating a Combined Invoice order. This value is returned as 0.00 for single line item orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountSaved;
    /**
     * The CheckoutStatus
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details related to the current checkout status of the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CheckoutStatusType
     */
    public $CheckoutStatus;
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of all shipping-related details for an order, including domestic and international shipping service options, shipment tracking information, and shipping insurance information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The CreatingUserRole
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates whether a Combined Invoice order was created by the buyer or by the seller. This field is only returned for Combined Invoice orders.
     * - minOccurs: 0
     * @var string
     */
    public $CreatingUserRole;
    /**
     * The CreatedTime
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp that indicates the date and time that the order was created. For single line item orders, this value is the same as <b>CreatedDate</b> in the <b>Transaction</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CreatedTime;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates a payment method available to the buyer to pay for the order. There will be a <b>PaymentMethods</b> field for each payment method available to the buyer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The SellerEmail
     * Meta informations extracted from the WSDL
     * - documentation: The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.
     * - minOccurs: 0
     * @var string
     */
    public $SellerEmail;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: Container holding the shipping address of the buyer involved in the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingServiceSelected
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details about the domestic or international shipping service selected by the buyer. <br/><br/> <span class="tablenote"> <strong>Note:</strong> If one or more <strong>OrderID</strong> values are used in the
     * call request, the "Combined Invoice" Order ID value must be specified for multiple line item orders to ensure that the shipping service and cost information is accurate. If the individual <strong>OrderLineItemID</strong> values for each line item are
     * specified in the <strong>OrderID</strong> field instead, the shipping service and cost information will not be accurate. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public $ShippingServiceSelected;
    /**
     * The Subtotal
     * Meta informations extracted from the WSDL
     * - documentation: The subtotal amount for the order is the total cost of all order line items. This value does not include any shipping/handling, shipping insurance, or sales tax costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Subtotal;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The <b>Total</b> amount equals the <b>Subtotal</b> value plus the shipping/handling, shipping insurance, and sales tax costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Total;
    /**
     * The ExternalTransaction
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of payment details for an eBay order. PayPal transactions may include a buyer payment or refund, or a fee or credit applied to the seller's account. This field is only returned after payment for the order has
     * occurred. <br/><br/> For orders in which the seller's funds are being held by PayPal, the <b>PaymentHoldDetails</b> container and <b>PaymentHoldStatus</b> field will be returned instead of the <b>ExternalTransaction</b> container. <br><br> <span
     * class="tablenote"> <strong>Note:</strong> In an upcoming release, <strong>ExternalTransaction</strong> will be replaced by the more versatile <strong>MonetaryDetails</strong> container, so you are encouraged to start using
     * <strong>MonetaryDetails</strong> now. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExternalTransactionType[]
     */
    public $ExternalTransaction;
    /**
     * The TransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more line items that comprise an order. The data for an order line item is stored in the <b>Transaction</b> container. For the <b>AddOrder</b> call, there will always be at least two order line items in
     * the container, but no more than 40. <br><br> We strongly recommend that you avoid mixing transactions for digital and non-digital listings in the same Combined Invoice order. (In the future, <b>AddOrder</b> may enforce this recommendation.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The BuyerUserID
     * Meta informations extracted from the WSDL
     * - documentation: eBay user ID of the order's buyer. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd,
     * GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder
     * makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerUserID;
    /**
     * The PaidTime
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order payment. This field is not returned until payment has been made by the buyer. This field will not be returned for orders where the buyer has received partial or full refunds. <br><br>
     * This time is specified in GMT (not Pacific time). See <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Basics/DataTypes.html#ConvertingBetweenUTCGMTandLocalTime"> eBay Features Guide</a> for information about converting between GMT and
     * other time zones.
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The ShippedTime
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order shipment. This field is not returned until the order has been marked as shipped. Note that sellers have the ability to set the shipped time up to three calendar days in the future.
     * <br><br> This time is specified in GMT (not Pacific time). See <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Basics/DataTypes.html"> eBay Features Guide</a> for information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item can be paid for through a payment gateway (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller
     * has a payment gateway account. Therefore, if <b>IntegratedMerchantCreditCardEnabled</b> is true, and 'AmEx', 'Discover', or 'VisaMC' is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway
     * account.
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The BundlePurchase
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var bool
     */
    public $BundlePurchase;
    /**
     * The BuyerCheckoutMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if the buyer left a message for the seller during checkout.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerCheckoutMessage;
    /**
     * The EIASToken
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user. <br><br> Since a bidder's user info is
     * anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The PaymentHoldStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldStatus;
    /**
     * The PaymentHoldDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of information related to the payment hold on the order, including the reason why the buyer's payment for the order is being held, the expected release date of the funds into the seller's account, and possible
     * action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if PayPal has placed a payment hold on the order. <br><br> An American seller (selling on US or US Motors sites) and a Canadian seller
     * (selling on CA and CA- FR sites) may be subject to PayPal payment holds (that last from three to 21 days) if that seller is new to selling on eBay or is classified as a "Below Standard" seller. For other reasons why a seller's funds may be held by
     * PayPal, see the <b>PaymentHoldReason</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public $PaymentHoldDetails;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of the refund issued to the buyer. This field is only returned if the buyer has received a refund from the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta informations extracted from the WSDL
     * - documentation: This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned if the buyer has received a refund from the seller, or is due to receive a refund.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The RefundArray
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container was only used for Half.com orders, and since the Half.com site was taken down, this container is no longer applicable. </span> Container consisting of one or more refunds for
     * Half.com orders. This container is returned only if a refund to a Half.com buyer has occurred.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public $RefundArray;
    /**
     * The IsMultiLegShipping
     * Meta informations extracted from the WSDL
     * - documentation: If <strong>IsMultilegShipping</strong> is true, the order or transaction uses the Global Shipping Program, in which the shipment has a domestic leg and an international leg. The buyer's shipping address is in a country other than the
     * country where the items were listed, and the seller has specified InternationalPriorityShipping as the default international shipping service in the listings of all the items in the shipment. <br/><br/> If <strong>IsMultilegShipping</strong> is
     * false, the order or transaction doesn't use the Global Shipping Program. The shipment might use a different international shipping service, or it might be domestic. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IsMultiLegShipping;
    /**
     * The MultiLegShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains details about the domestic leg of a Global Shipping Program shipment. <br/><br/> This information is not returned if <strong>IsMultilegShipping</strong> is false.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public $MultiLegShippingDetails;
    /**
     * The MonetaryDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about how funds exchanged for an order are allocated to payees. <br/><br/> For example, for an order made under eBay's Global Shipping Program, users can see the portion of the buyer's payment that is allocated
     * as shipping and import charges remitted to the international shipping provider. Currently, only payment information is returned. <br/><br/> <span class="tablenote"> <strong>Note:</strong> In an upcoming release, <strong>MonetaryDetails</strong> will
     * replace the <strong>ExternalTransaction</strong> container, so you are encouraged to start using <strong>MonetaryDetails</strong> now. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public $MonetaryDetails;
    /**
     * The PickupDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order
     * (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. <br/><br/> For <strong>GetOrders</strong> and <strong>GetOrderTransactions</strong>, this container is always returned prior
     * to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US
     * only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the
     * <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or
     * Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup
     * or Click and Collect functionality in the Sandbox environment, including listing items enabled with these features, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of pickup status
     * changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupDetailsType
     */
    public $PickupDetails;
    /**
     * The PickupMethodSelected
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant). <br/><br/> This
     * container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the
     * <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the
     * In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to
     * multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these
     * stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public $PickupMethodSelected;
    /**
     * The SellerUserID
     * Meta informations extracted from the WSDL
     * - documentation: This is the eBay user ID of the order's seller. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserID;
    /**
     * The SellerEIASToken
     * Meta informations extracted from the WSDL
     * - documentation: This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user.
     * - minOccurs: 0
     * @var string
     */
    public $SellerEIASToken;
    /**
     * The CancelReason
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include
     * 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is
     * cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other order
     * cancellation reasons are specific to eBay On Demand Delivery orders. eBay On Demand Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See CancelReasonCodeType for the complete list of enumeration
     * values that can be returned in this field. <br><br> <span class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReason</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there
     * are plans to deprecate this field from <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReason;
    /**
     * The CancelStatus
     * Meta informations extracted from the WSDL
     * - documentation: The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or if the
     * order has already been cancelled.
     * - minOccurs: 0
     * @var string
     */
    public $CancelStatus;
    /**
     * The CancelReasonDetails
     * Meta informations extracted from the WSDL
     * - documentation: The detailed reason for the cancellation of an eBay order. This field is only returned if it is available when a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or
     * if the order has already been cancelled. <br><br> <span class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However,
     * there are plans to deprecate this field from <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReasonDetails;
    /**
     * The ShippingConvenienceCharge
     * Meta informations extracted from the WSDL
     * - documentation: The dollar value in this field indicates the amount that the seller is being charged (at order level) for the convenience of an eBay On Demand Delivery. <br><br> <span class="tablenote"><strong>Note:</strong> This field was first
     * created for eBay Now, but eBay Now has been officially retired in all US locations. However, a feature similar to eBay Now, called 'eBay On Demand Delivery', is available in some parts of London, so this field is still applicable on the eBay UK site.
     * </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingConvenienceCharge;
    /**
     * The CancelDetail
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled. Order cancellation requests can be viewed and managed with the cancellation API calls that are
     * available in the <a href="https://developer.ebay.com/Devzone/post-order/index.html#CallIndex">Post Order API</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CancelDetailType[]
     */
    public $CancelDetail;
    /**
     * The LogisticsPlanType
     * Meta informations extracted from the WSDL
     * - documentation: This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature. <br/><br/>
     * Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers
     * on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or,
     * <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticsPlanType;
    /**
     * The BuyerTaxIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID
     * of the buyer. <br/><br/> It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site. <br/><br/> On the Spain site, a
     * Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with
     * his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during
     * checkout. <br/><br/> This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that
     * is associated with the buyer's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]
     */
    public $BuyerTaxIdentifier;
    /**
     * The BuyerPackageEnclosures
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the
     * order. The 'Pay Upon Invoice' option is only available on the German site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
     */
    public $BuyerPackageEnclosures;
    /**
     * The ExtendedOrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. Unlike the <b>OrderID</b> field, the format for this field is the same for both single and multiple line item orders. <b>ExtendedOrderID</b> values will be used to identify orders in the
     * Post-Order APIs. For Trading API Get calls, <b>OrderID</b> values should still be used. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned
     * to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be
     * returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $ExtendedOrderID;
    /**
     * The ContainseBayPlusTransaction
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free
     * returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay
     * Plus is available only to buyers in Germany, Austria, and Australia. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $ContainseBayPlusTransaction;
    /**
     * The eBayCollectAndRemitTax
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the order was subject to Australian import tax charged to the buyer. This field is not returned if <code>false</code>. Australian import tax charged to the buyer is collected by
     * eBay and remitted to the Australian government. A <b>Transaction.eBayCollectAndRemitTaxes</b> container will be returned for any order line items subject to the import tax charged to the buyer, and the amount of this tax will be displayed in the
     * <b>TaxDetails.TaxAmount</b> field under this container. <br/><br/> <span class="tablenote"><b>Note: </b> At this time, this field is only applicable to the Australia site. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayCollectAndRemitTax;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OrderType
     * @uses OrderType::setOrderID()
     * @uses OrderType::setOrderStatus()
     * @uses OrderType::setAdjustmentAmount()
     * @uses OrderType::setAmountPaid()
     * @uses OrderType::setAmountSaved()
     * @uses OrderType::setCheckoutStatus()
     * @uses OrderType::setShippingDetails()
     * @uses OrderType::setCreatingUserRole()
     * @uses OrderType::setCreatedTime()
     * @uses OrderType::setPaymentMethods()
     * @uses OrderType::setSellerEmail()
     * @uses OrderType::setShippingAddress()
     * @uses OrderType::setShippingServiceSelected()
     * @uses OrderType::setSubtotal()
     * @uses OrderType::setTotal()
     * @uses OrderType::setExternalTransaction()
     * @uses OrderType::setTransactionArray()
     * @uses OrderType::setBuyerUserID()
     * @uses OrderType::setPaidTime()
     * @uses OrderType::setShippedTime()
     * @uses OrderType::setIntegratedMerchantCreditCardEnabled()
     * @uses OrderType::setBundlePurchase()
     * @uses OrderType::setBuyerCheckoutMessage()
     * @uses OrderType::setEIASToken()
     * @uses OrderType::setPaymentHoldStatus()
     * @uses OrderType::setPaymentHoldDetails()
     * @uses OrderType::setRefundAmount()
     * @uses OrderType::setRefundStatus()
     * @uses OrderType::setRefundArray()
     * @uses OrderType::setIsMultiLegShipping()
     * @uses OrderType::setMultiLegShippingDetails()
     * @uses OrderType::setMonetaryDetails()
     * @uses OrderType::setPickupDetails()
     * @uses OrderType::setPickupMethodSelected()
     * @uses OrderType::setSellerUserID()
     * @uses OrderType::setSellerEIASToken()
     * @uses OrderType::setCancelReason()
     * @uses OrderType::setCancelStatus()
     * @uses OrderType::setCancelReasonDetails()
     * @uses OrderType::setShippingConvenienceCharge()
     * @uses OrderType::setCancelDetail()
     * @uses OrderType::setLogisticsPlanType()
     * @uses OrderType::setBuyerTaxIdentifier()
     * @uses OrderType::setBuyerPackageEnclosures()
     * @uses OrderType::setExtendedOrderID()
     * @uses OrderType::setContainseBayPlusTransaction()
     * @uses OrderType::setEBayCollectAndRemitTax()
     * @uses OrderType::setAny()
     * @param string $orderID
     * @param string $orderStatus
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountSaved
     * @param \macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @param string $creatingUserRole
     * @param string $createdTime
     * @param string[] $paymentMethods
     * @param string $sellerEmail
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotal
     * @param \macropage\ebaysdk\trading\StructType\AmountType $total
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType[] $externalTransaction
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @param string $buyerUserID
     * @param string $paidTime
     * @param string $shippedTime
     * @param bool $integratedMerchantCreditCardEnabled
     * @param bool $bundlePurchase
     * @param string $buyerCheckoutMessage
     * @param string $eIASToken
     * @param string $paymentHoldStatus
     * @param \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray
     * @param bool $isMultiLegShipping
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @param \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails
     * @param \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails
     * @param \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected
     * @param string $sellerUserID
     * @param string $sellerEIASToken
     * @param string $cancelReason
     * @param string $cancelStatus
     * @param string $cancelReasonDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge
     * @param \macropage\ebaysdk\trading\StructType\CancelDetailType[] $cancelDetail
     * @param string $logisticsPlanType
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @param string $extendedOrderID
     * @param bool $containseBayPlusTransaction
     * @param bool $eBayCollectAndRemitTax
     * @param \DOMDocument $any
     */
    public function __construct($orderID = null, $orderStatus = null, \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, \macropage\ebaysdk\trading\StructType\AmountType $amountSaved = null, \macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus = null, \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, $creatingUserRole = null, $createdTime = null, array $paymentMethods = array(), $sellerEmail = null, \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null, \macropage\ebaysdk\trading\StructType\AmountType $subtotal = null, \macropage\ebaysdk\trading\StructType\AmountType $total = null, array $externalTransaction = array(), \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, $buyerUserID = null, $paidTime = null, $shippedTime = null, $integratedMerchantCreditCardEnabled = null, $bundlePurchase = null, $buyerCheckoutMessage = null, $eIASToken = null, $paymentHoldStatus = null, \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, $refundStatus = null, \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null, $isMultiLegShipping = null, \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null, \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails = null, \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails = null, \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null, $sellerUserID = null, $sellerEIASToken = null, $cancelReason = null, $cancelStatus = null, $cancelReasonDetails = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null, array $cancelDetail = array(), $logisticsPlanType = null, array $buyerTaxIdentifier = array(), \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null, $extendedOrderID = null, $containseBayPlusTransaction = null, $eBayCollectAndRemitTax = null, \DOMDocument $any = null)
    {
        $this
            ->setOrderID($orderID)
            ->setOrderStatus($orderStatus)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setAmountPaid($amountPaid)
            ->setAmountSaved($amountSaved)
            ->setCheckoutStatus($checkoutStatus)
            ->setShippingDetails($shippingDetails)
            ->setCreatingUserRole($creatingUserRole)
            ->setCreatedTime($createdTime)
            ->setPaymentMethods($paymentMethods)
            ->setSellerEmail($sellerEmail)
            ->setShippingAddress($shippingAddress)
            ->setShippingServiceSelected($shippingServiceSelected)
            ->setSubtotal($subtotal)
            ->setTotal($total)
            ->setExternalTransaction($externalTransaction)
            ->setTransactionArray($transactionArray)
            ->setBuyerUserID($buyerUserID)
            ->setPaidTime($paidTime)
            ->setShippedTime($shippedTime)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setBundlePurchase($bundlePurchase)
            ->setBuyerCheckoutMessage($buyerCheckoutMessage)
            ->setEIASToken($eIASToken)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setPaymentHoldDetails($paymentHoldDetails)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setRefundArray($refundArray)
            ->setIsMultiLegShipping($isMultiLegShipping)
            ->setMultiLegShippingDetails($multiLegShippingDetails)
            ->setMonetaryDetails($monetaryDetails)
            ->setPickupDetails($pickupDetails)
            ->setPickupMethodSelected($pickupMethodSelected)
            ->setSellerUserID($sellerUserID)
            ->setSellerEIASToken($sellerEIASToken)
            ->setCancelReason($cancelReason)
            ->setCancelStatus($cancelStatus)
            ->setCancelReasonDetails($cancelReasonDetails)
            ->setShippingConvenienceCharge($shippingConvenienceCharge)
            ->setCancelDetail($cancelDetail)
            ->setLogisticsPlanType($logisticsPlanType)
            ->setBuyerTaxIdentifier($buyerTaxIdentifier)
            ->setBuyerPackageEnclosures($buyerPackageEnclosures)
            ->setExtendedOrderID($extendedOrderID)
            ->setContainseBayPlusTransaction($containseBayPlusTransaction)
            ->setEBayCollectAndRemitTax($eBayCollectAndRemitTax)
            ->setAny($any);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setOrderStatus($orderStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid($orderStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orderStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
        return $this;
    }
    /**
     * Get AdjustmentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAdjustmentAmount()
    {
        return $this->AdjustmentAmount;
    }
    /**
     * Set AdjustmentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get AmountSaved value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountSaved()
    {
        return $this->AmountSaved;
    }
    /**
     * Set AmountSaved value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountSaved
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAmountSaved(\macropage\ebaysdk\trading\StructType\AmountType $amountSaved = null)
    {
        $this->AmountSaved = $amountSaved;
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @param \macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCheckoutStatus(\macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus = null)
    {
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingDetails(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get CreatingUserRole value
     * @return string|null
     */
    public function getCreatingUserRole()
    {
        return $this->CreatingUserRole;
    }
    /**
     * Set CreatingUserRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $creatingUserRole
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCreatingUserRole($creatingUserRole = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($creatingUserRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $creatingUserRole, implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->CreatingUserRole = $creatingUserRole;
        return $this;
    }
    /**
     * Get CreatedTime value
     * @return string|null
     */
    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param string $createdTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCreatedTime($createdTime = null)
    {
        // validation for constraint: string
        if (!is_null($createdTime) && !is_string($createdTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdTime)), __LINE__);
        }
        $this->CreatedTime = $createdTime;
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        $invalidValues = array();
        foreach ($paymentMethods as $orderTypePaymentMethodsItem) {
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($orderTypePaymentMethodsItem)) {
                $invalidValues[] = var_export($orderTypePaymentMethodsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get SellerEmail value
     * @return string|null
     */
    public function getSellerEmail()
    {
        return $this->SellerEmail;
    }
    /**
     * Set SellerEmail value
     * @param string $sellerEmail
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerEmail($sellerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($sellerEmail) && !is_string($sellerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerEmail)), __LINE__);
        }
        $this->SellerEmail = $sellerEmail;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get ShippingServiceSelected value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType|null
     */
    public function getShippingServiceSelected()
    {
        return $this->ShippingServiceSelected;
    }
    /**
     * Set ShippingServiceSelected value
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingServiceSelected(\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null)
    {
        $this->ShippingServiceSelected = $shippingServiceSelected;
        return $this;
    }
    /**
     * Get Subtotal value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }
    /**
     * Set Subtotal value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotal
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSubtotal(\macropage\ebaysdk\trading\StructType\AmountType $subtotal = null)
    {
        $this->Subtotal = $subtotal;
        return $this;
    }
    /**
     * Get Total value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $total
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setTotal(\macropage\ebaysdk\trading\StructType\AmountType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get ExternalTransaction value
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType[]|null
     */
    public function getExternalTransaction()
    {
        return $this->ExternalTransaction;
    }
    /**
     * Set ExternalTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType[] $externalTransaction
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setExternalTransaction(array $externalTransaction = array())
    {
        foreach ($externalTransaction as $orderTypeExternalTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTypeExternalTransactionItem instanceof \macropage\ebaysdk\trading\StructType\ExternalTransactionType) {
                throw new \InvalidArgumentException(sprintf('The ExternalTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\ExternalTransactionType, "%s" given', is_object($orderTypeExternalTransactionItem) ? get_class($orderTypeExternalTransactionItem) : gettype($orderTypeExternalTransactionItem)), __LINE__);
            }
        }
        $this->ExternalTransaction = $externalTransaction;
        return $this;
    }
    /**
     * Add item to ExternalTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToExternalTransaction(\macropage\ebaysdk\trading\StructType\ExternalTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ExternalTransactionType) {
            throw new \InvalidArgumentException(sprintf('The ExternalTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\ExternalTransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExternalTransaction[] = $item;
        return $this;
    }
    /**
     * Get TransactionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray()
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setTransactionArray(\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
        return $this;
    }
    /**
     * Get BuyerUserID value
     * @return string|null
     */
    public function getBuyerUserID()
    {
        return $this->BuyerUserID;
    }
    /**
     * Set BuyerUserID value
     * @param string $buyerUserID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerUserID($buyerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerUserID) && !is_string($buyerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerUserID)), __LINE__);
        }
        $this->BuyerUserID = $buyerUserID;
        return $this;
    }
    /**
     * Get PaidTime value
     * @return string|null
     */
    public function getPaidTime()
    {
        return $this->PaidTime;
    }
    /**
     * Set PaidTime value
     * @param string $paidTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaidTime($paidTime = null)
    {
        // validation for constraint: string
        if (!is_null($paidTime) && !is_string($paidTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paidTime)), __LINE__);
        }
        $this->PaidTime = $paidTime;
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime()
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippedTime($shippedTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }
    /**
     * Get BundlePurchase value
     * @return bool|null
     */
    public function getBundlePurchase()
    {
        return $this->BundlePurchase;
    }
    /**
     * Set BundlePurchase value
     * @param bool $bundlePurchase
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBundlePurchase($bundlePurchase = null)
    {
        // validation for constraint: boolean
        if (!is_null($bundlePurchase) && !is_bool($bundlePurchase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bundlePurchase)), __LINE__);
        }
        $this->BundlePurchase = $bundlePurchase;
        return $this;
    }
    /**
     * Get BuyerCheckoutMessage value
     * @return string|null
     */
    public function getBuyerCheckoutMessage()
    {
        return $this->BuyerCheckoutMessage;
    }
    /**
     * Set BuyerCheckoutMessage value
     * @param string $buyerCheckoutMessage
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerCheckoutMessage($buyerCheckoutMessage = null)
    {
        // validation for constraint: string
        if (!is_null($buyerCheckoutMessage) && !is_string($buyerCheckoutMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerCheckoutMessage)), __LINE__);
        }
        $this->BuyerCheckoutMessage = $buyerCheckoutMessage;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus()
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentHoldStatus($paymentHoldStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentHoldStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        return $this;
    }
    /**
     * Get PaymentHoldDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType|null
     */
    public function getPaymentHoldDetails()
    {
        return $this->PaymentHoldDetails;
    }
    /**
     * Set PaymentHoldDetails value
     * @param \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentHoldDetails(\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null)
    {
        $this->PaymentHoldDetails = $paymentHoldDetails;
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount()
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundAmount(\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null)
    {
        $this->RefundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: string
        if (!is_null($refundStatus) && !is_string($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundStatus)), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        return $this;
    }
    /**
     * Get RefundArray value
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType|null
     */
    public function getRefundArray()
    {
        return $this->RefundArray;
    }
    /**
     * Set RefundArray value
     * @param \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundArray(\macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null)
    {
        $this->RefundArray = $refundArray;
        return $this;
    }
    /**
     * Get IsMultiLegShipping value
     * @return bool|null
     */
    public function getIsMultiLegShipping()
    {
        return $this->IsMultiLegShipping;
    }
    /**
     * Set IsMultiLegShipping value
     * @param bool $isMultiLegShipping
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setIsMultiLegShipping($isMultiLegShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMultiLegShipping) && !is_bool($isMultiLegShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMultiLegShipping)), __LINE__);
        }
        $this->IsMultiLegShipping = $isMultiLegShipping;
        return $this;
    }
    /**
     * Get MultiLegShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType|null
     */
    public function getMultiLegShippingDetails()
    {
        return $this->MultiLegShippingDetails;
    }
    /**
     * Set MultiLegShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setMultiLegShippingDetails(\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null)
    {
        $this->MultiLegShippingDetails = $multiLegShippingDetails;
        return $this;
    }
    /**
     * Get MonetaryDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType|null
     */
    public function getMonetaryDetails()
    {
        return $this->MonetaryDetails;
    }
    /**
     * Set MonetaryDetails value
     * @param \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setMonetaryDetails(\macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails = null)
    {
        $this->MonetaryDetails = $monetaryDetails;
        return $this;
    }
    /**
     * Get PickupDetails value
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType|null
     */
    public function getPickupDetails()
    {
        return $this->PickupDetails;
    }
    /**
     * Set PickupDetails value
     * @param \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPickupDetails(\macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails = null)
    {
        $this->PickupDetails = $pickupDetails;
        return $this;
    }
    /**
     * Get PickupMethodSelected value
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType|null
     */
    public function getPickupMethodSelected()
    {
        return $this->PickupMethodSelected;
    }
    /**
     * Set PickupMethodSelected value
     * @param \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPickupMethodSelected(\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null)
    {
        $this->PickupMethodSelected = $pickupMethodSelected;
        return $this;
    }
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID()
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerUserID($sellerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        return $this;
    }
    /**
     * Get SellerEIASToken value
     * @return string|null
     */
    public function getSellerEIASToken()
    {
        return $this->SellerEIASToken;
    }
    /**
     * Set SellerEIASToken value
     * @param string $sellerEIASToken
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerEIASToken($sellerEIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($sellerEIASToken) && !is_string($sellerEIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerEIASToken)), __LINE__);
        }
        $this->SellerEIASToken = $sellerEIASToken;
        return $this;
    }
    /**
     * Get CancelReason value
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->CancelReason;
    }
    /**
     * Set CancelReason value
     * @param string $cancelReason
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelReason($cancelReason = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelReason)), __LINE__);
        }
        $this->CancelReason = $cancelReason;
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus()
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cancelStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelStatus($cancelStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cancelStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        return $this;
    }
    /**
     * Get CancelReasonDetails value
     * @return string|null
     */
    public function getCancelReasonDetails()
    {
        return $this->CancelReasonDetails;
    }
    /**
     * Set CancelReasonDetails value
     * @param string $cancelReasonDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelReasonDetails($cancelReasonDetails = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReasonDetails) && !is_string($cancelReasonDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelReasonDetails)), __LINE__);
        }
        $this->CancelReasonDetails = $cancelReasonDetails;
        return $this;
    }
    /**
     * Get ShippingConvenienceCharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingConvenienceCharge()
    {
        return $this->ShippingConvenienceCharge;
    }
    /**
     * Set ShippingConvenienceCharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingConvenienceCharge(\macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null)
    {
        $this->ShippingConvenienceCharge = $shippingConvenienceCharge;
        return $this;
    }
    /**
     * Get CancelDetail value
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType[]|null
     */
    public function getCancelDetail()
    {
        return $this->CancelDetail;
    }
    /**
     * Set CancelDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelDetailType[] $cancelDetail
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelDetail(array $cancelDetail = array())
    {
        foreach ($cancelDetail as $orderTypeCancelDetailItem) {
            // validation for constraint: itemType
            if (!$orderTypeCancelDetailItem instanceof \macropage\ebaysdk\trading\StructType\CancelDetailType) {
                throw new \InvalidArgumentException(sprintf('The CancelDetail property can only contain items of \macropage\ebaysdk\trading\StructType\CancelDetailType, "%s" given', is_object($orderTypeCancelDetailItem) ? get_class($orderTypeCancelDetailItem) : gettype($orderTypeCancelDetailItem)), __LINE__);
            }
        }
        $this->CancelDetail = $cancelDetail;
        return $this;
    }
    /**
     * Add item to CancelDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToCancelDetail(\macropage\ebaysdk\trading\StructType\CancelDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CancelDetailType) {
            throw new \InvalidArgumentException(sprintf('The CancelDetail property can only contain items of \macropage\ebaysdk\trading\StructType\CancelDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelDetail[] = $item;
        return $this;
    }
    /**
     * Get LogisticsPlanType value
     * @return string|null
     */
    public function getLogisticsPlanType()
    {
        return $this->LogisticsPlanType;
    }
    /**
     * Set LogisticsPlanType value
     * @param string $logisticsPlanType
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setLogisticsPlanType($logisticsPlanType = null)
    {
        // validation for constraint: string
        if (!is_null($logisticsPlanType) && !is_string($logisticsPlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logisticsPlanType)), __LINE__);
        }
        $this->LogisticsPlanType = $logisticsPlanType;
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]|null
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier = array())
    {
        foreach ($buyerTaxIdentifier as $orderTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$orderTypeBuyerTaxIdentifierItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
                throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierType, "%s" given', is_object($orderTypeBuyerTaxIdentifierItem) ? get_class($orderTypeBuyerTaxIdentifierItem) : gettype($orderTypeBuyerTaxIdentifierItem)), __LINE__);
            }
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToBuyerTaxIdentifier(\macropage\ebaysdk\trading\StructType\TaxIdentifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
            throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
        return $this;
    }
    /**
     * Get BuyerPackageEnclosures value
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType|null
     */
    public function getBuyerPackageEnclosures()
    {
        return $this->BuyerPackageEnclosures;
    }
    /**
     * Set BuyerPackageEnclosures value
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerPackageEnclosures(\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null)
    {
        $this->BuyerPackageEnclosures = $buyerPackageEnclosures;
        return $this;
    }
    /**
     * Get ExtendedOrderID value
     * @return string|null
     */
    public function getExtendedOrderID()
    {
        return $this->ExtendedOrderID;
    }
    /**
     * Set ExtendedOrderID value
     * @param string $extendedOrderID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setExtendedOrderID($extendedOrderID = null)
    {
        // validation for constraint: string
        if (!is_null($extendedOrderID) && !is_string($extendedOrderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedOrderID)), __LINE__);
        }
        $this->ExtendedOrderID = $extendedOrderID;
        return $this;
    }
    /**
     * Get ContainseBayPlusTransaction value
     * @return bool|null
     */
    public function getContainseBayPlusTransaction()
    {
        return $this->ContainseBayPlusTransaction;
    }
    /**
     * Set ContainseBayPlusTransaction value
     * @param bool $containseBayPlusTransaction
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setContainseBayPlusTransaction($containseBayPlusTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($containseBayPlusTransaction) && !is_bool($containseBayPlusTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($containseBayPlusTransaction)), __LINE__);
        }
        $this->ContainseBayPlusTransaction = $containseBayPlusTransaction;
        return $this;
    }
    /**
     * Get eBayCollectAndRemitTax value
     * @return bool|null
     */
    public function getEBayCollectAndRemitTax()
    {
        return $this->eBayCollectAndRemitTax;
    }
    /**
     * Set eBayCollectAndRemitTax value
     * @param bool $eBayCollectAndRemitTax
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setEBayCollectAndRemitTax($eBayCollectAndRemitTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayCollectAndRemitTax) && !is_bool($eBayCollectAndRemitTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayCollectAndRemitTax)), __LINE__);
        }
        $this->eBayCollectAndRemitTax = $eBayCollectAndRemitTax;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\OrderType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\OrderType
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
     * @return \macropage\ebaysdk\trading\StructType\OrderType
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
