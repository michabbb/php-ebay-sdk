<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to express the details of an order. An order may contain one or more line items (purchases) from the same buyer. Regardless of how many line items an order has, only one payment is made for the order. <br><br> The
 * <b>GetOrders</b> and <b>GetOrderTransactions</b> calls return many of the fields of this type. <br><br> The <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls will only return order-level details if the <b>IncludeContainingOrder</b>
 * boolean field is included in the call request and set to <code>true</code>. <br><br> The <b>AddOrder</b> call is used to combine two or more unpaid order line items (between the same seller and buyer) into a 'Combined Invoice' order. While combining
 * these order line items into one 'Combined Invoice' order, the seller can make adjustments to accepted payment methods, shipping details (including costs), and the total cost of the order. Sometimes, sellers will reduce the cost of shipping if one or
 * more order line items can be shipped together in the same package. <br><br> The <b>GetMyeBaySelling</b> call returns order details if the seller wishes to view listings that have sold, and the <b>GetMyeBayBuying</b> call returns order details if the
 * buyer wishes to view items they have won or purchased.
 * @subpackage Structs
 */
class OrderType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a single or multiple line item eBay order. In the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response, this identifier identifies the parent order of the
     * order line item. A single buyer payment is made for each order. <br/><br/> <b>For order management calls only:</b> This field is returned with the correct order ID only to the buyer and the seller. For third parties: <ul> <li>If using Trading WSDL
     * version 1019 or newer (or Compatibility Level is set to '1019' or newer), the Order ID will be returned to third parties as an empty field (<code>&lt;OrderID/&gt;</code>).</li> <li>If using a Trading WSDL older than version 1019, the Order ID will be
     * returned to third parties as dummy data in the form of <code>1000000000000</code> or <code>1000000000000-1000000000000</code>.</li> </ul> <br> <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change
     * as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> and <b>GetOrderTransactions</b> calls, will support the identifiers for
     * both unpaid and paid orders. The revised order ID format (introduced in June 2019) is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past,
     * instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of
     * 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>
     * call. Sellers should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay order. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order
     * identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the
     * seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't
     * impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item
     * order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before
     * applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to
     * control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the
     * transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be
     * returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that
     * the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or
     * <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific
     * order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderStatus = null;
    /**
     * The AdjustmentAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an
     * extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AdjustmentAmount = null;
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total amount paid by the buyer for the order. This amount includes the sale price of each line item, shipping and handling charges, additional services, and any sales tax that the seller has applied towards
     * the order. This value is only returned after the buyer has paid for the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountPaid = null;
    /**
     * The AmountSaved
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the amount that the buyer saved on the order due to any discounts (item, shipping, promotional) applied to the purchase, or if the seller 'manually' reduced the order total. This field is always returned even
     * when it is '0.0'.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AmountSaved = null;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: This container indicates the current status of the order, including a timestamp that indicates the last time that the status of the order changed. For orders that have been paid for, the <b>Status</b> value will show as
     * <code>Complete</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CheckoutStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CheckoutStatusType $CheckoutStatus = null;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of order-level shipping details. More shipping-related details can be found at the line item level for each line item in the order. <br><br> In an <b>AddOrder</b> call, the seller can use the
     * <b>ShippingDetails</b> container to make adjustments to shipping details, including the available shipping service options and shipping cost. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together
     * in the same package.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $ShippingDetails = null;
    /**
     * The CreatingUserRole
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether a 'Combined Invoice' order was initiated/created by the buyer or by the seller. This field is only returned for Combined Invoice orders. <br><br> An <b>AddOrder</b> call can be used by a seller or buyer
     * to combine two or more unpaid order line items into a 'Combined Invoice' order. Once two or more line items are successfully combined into one order, the buyer only needs to make one payment (instead of multiple payments - one for each order line
     * item). The <b>CreatingUserRole</b> field is required in the <b>AddOrder</b> call request. <br><br> <span class="tablenote"><b>Note: </b> Except for listings that required immediate payment, buyers also may have the opportunity to combine multiple
     * line items (from the same seller) into a 'Combined Invoice' order through the buy/checkout flow. This may include accepted Best Offers or auctions that the buyer wins. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatingUserRole = null;
    /**
     * The CreatedTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the date and time that the order was created. <br><br> <span class="tablenote"><b>Note: </b> For single line item orders, this timestamp value is often the same as the <b>CreatedDate</b> field in the
     * corresponding <b>Transaction</b> container. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedTime = null;
    /**
     * The PaymentMethods
     * Meta information extracted from the WSDL
     * - documentation: In <b>GetOrders</b>, <b>GetOrderTransactions</b>, and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order,
     * any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container. <br> <br> In an <b>AddOrder</b> call,
     * the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item. <br> <br> <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only
     * specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $PaymentMethods = null;
    /**
     * The SellerEmail
     * Meta information extracted from the WSDL
     * - documentation: The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.<br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetOrders</strong> and
     * <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the order; this field is not returned to the buyer or to a third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerEmail = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: This container shows the shipping address for the order. <br> <br> <span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is
     * responsible for delivery to the buyer's shipping address. </span> <span class="tablenote"><b>Note:</b> For GetOrderTransactions, the buyer's shipping address may also be returned at the order line item level in the
     * <b>Transaction.Buyer.BuyerInfo.ShippingAddress</b> container. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The ShippingServiceSelected
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details about the domestic or international shipping service selected by the buyer for delivery of the order. Note that more shipping service information may be returned at the order line item level in the
     * <strong>Transaction.ShippingServiceSelected</strong> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $ShippingServiceSelected = null;
    /**
     * The Subtotal
     * Meta information extracted from the WSDL
     * - documentation: The cumulative item cost for all line items in the order. This value does not take into account any shipping/handling costs, sales tax costs, or any discounts. For a single line item order, the amount in this field should be the same
     * as the amount in the <strong>Transaction.TransactionPrice</strong> field. For a multiple line item order, the amount in this field should equal the cumulative amount of each <strong>Transaction.TransactionPrice</strong> fields for each order line
     * item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Subtotal = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: The <b>Total</b> amount shows the total cost for the order, including total item cost (shown in <b>Subtotal</b> field), shipping charges (shown in <b>ShippingServiceSelected.ShippingServiceCost</b> field), and seller-applied sales
     * tax (shown in <b>SalesTax.SalesTaxAmount</b> field). <br><br> In an <b>AddOrder</b> call, the seller can pass in the <b>Total</b> amount for the 'Combined Invoice' order, and this is what the buyer will be expected to pay for the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Total = null;
    /**
     * The ExternalTransaction
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of payment details for an eBay order, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment
     * for the order has occurred. <br><br> <span class="tablenote"> <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the
     * <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExternalTransactionType[]
     */
    protected ?array $ExternalTransaction = null;
    /**
     * The TransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container. <br><br> Under the <b>TransactionArray</b> container in an
     * <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $TransactionArray = null;
    /**
     * The BuyerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the order's buyer. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd,
     * GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder
     * makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerUserID = null;
    /**
     * The PaidTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order payment. This field is not returned until payment has been made by the buyer. <br><br> This time is specified in GMT (not Pacific time). See <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/DataTypes.html#ConvertingBetweenUTCGMTandLocalTime"> eBay Features Guide</a> for information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaidTime = null;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time of order shipment. This field is not returned until shipment tracking is provided for all line items in the order, or if the order has been marked as 'shipped' by the seller. <br><br> This time
     * is specified in GMT (not Pacific time). See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/DataTypes.html"> eBay Features Guide</a> for information about converting between GMT and other time zones.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippedTime = null;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IntegratedMerchantCreditCardEnabled = null;
    /**
     * The BundlePurchase
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BundlePurchase = null;
    /**
     * The BuyerCheckoutMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if the buyer left a message for the seller during checkout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerCheckoutMessage = null;
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user. <br><br> Since a bidder's user info is
     * anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EIASToken = null;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item. It is always returned for <b>GetOrders</b> and <b>GetOrderTransactions</b>, even if there are no payment holds (in which case, an enumeration value of
     * <code>None</code> is shown). <br> <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the
     * order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentHoldStatus = null;
    /**
     * The PaymentHoldDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of information related to the payment hold on the order, including the reason why the buyer's payment for the order is being held, the expected release date of the funds into the seller's account, and possible
     * action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has placed on the order. <br><br> See <b>PaymentHoldReasonCodeType</b> for some details on why/when a seller's funds
     * may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold policies.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $PaymentHoldDetails = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the refund due to, or already issued to the buyer for the order. This field is only returned in <b>GetMyeBaySelling</b> if a buyer refund is due, or was issued for the order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $RefundAmount = null;
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned in <b>GetMyeBaySelling</b> if the buyer has received a refund from the seller, or
     * is due to receive a refund.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundStatus = null;
    /**
     * The RefundArray
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container was only used for Half.com orders, and since the Half.com site was taken down, this container is no longer applicable. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\RefundArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\RefundArrayType $RefundArray = null;
    /**
     * The IsMultiLegShipping
     * Meta information extracted from the WSDL
     * - documentation: If <strong>IsMultilegShipping</strong> is <code>true</code>, at least one order line item in the order will not be shipped directly to the buyer. Instead, the item(s) may be shipped to eBay's Global Shipping Program (GSP) partner who
     * will handle the international leg of shipment, or the item may be shipped to eBay's Authenticity Guarantee service partner if the item is subject to the Authenticity Guarantee service program. In both cases, the partner's shipping address can be
     * found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. <br><br> If an order line item is subject to the Authenticity Guarantee service, the <b>Transaction.Program</b> container will be
     * returned.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMultiLegShipping = null;
    /**
     * The MultiLegShippingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment or shipment to eBay's Authenticity Guarantee service partner. With GSP, the shipment has a domestic leg and an international leg.
     * In the domestic leg, the seller ships the item to eBay's shipping partner. In the Authenticity Guarantee service, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner
     * ships it directly to the buyer. <br/><br/> This container is only returned if the order has one or more order line items that require shipping through GSP or shipment to an Authenticity Guarantee service partner. It is not returned if
     * <strong>IsMultilegShipping</strong> is <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $MultiLegShippingDetails = null;
    /**
     * The MonetaryDetails
     * Meta information extracted from the WSDL
     * - documentation: Contains information about each monetary transaction that occurs for the order, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentsInformationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentsInformationType $MonetaryDetails = null;
    /**
     * The PickupDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order
     * (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. <br/><br/> For <strong>GetOrders</strong> and <strong>GetOrderTransactions</strong>, this container is always returned prior
     * to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US
     * only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the
     * <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or
     * Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PickupDetailsType $PickupDetails = null;
    /**
     * The PickupMethodSelected
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant). <br/><br/> This
     * container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the
     * <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the
     * In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to
     * multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $PickupMethodSelected = null;
    /**
     * The SellerUserID
     * Meta information extracted from the WSDL
     * - documentation: This is the eBay user ID of the order's seller. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerUserID = null;
    /**
     * The SellerEIASToken
     * Meta information extracted from the WSDL
     * - documentation: This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user. <br> <br> <span
     * class="tablenote"><b>Note:</b> For the <strong>GetOrders</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerEIASToken = null;
    /**
     * The CancelReason
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include
     * 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is
     * cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. See <a
     * href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and
     * <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a
     * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more details on a cancelled order. If the seller does use this method, they can use the
     * Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelReason = null;
    /**
     * The CancelStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status for the order cancellation request (if it exists for the order). This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation
     * process, or if the order has already been cancelled. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the
     * <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more
     * details on a cancelled order. If the seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelStatus = null;
    /**
     * The CancelReasonDetails
     * Meta information extracted from the WSDL
     * - documentation: The detailed reason for the cancellation of an eBay order. This field is only returned if it is available when a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or
     * if the order has already been cancelled. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are
     * no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of the Post-Order API to retrieve more details on a cancelled order. If the
     * seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelReasonDetails = null;
    /**
     * The ShippingConvenienceCharge
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingConvenienceCharge = null;
    /**
     * The CancelDetail
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled. Order cancellation requests can be viewed and managed with the cancellation API calls that are
     * available in the <a href="https://developer.ebay.com/Devzone/post-order/index.html#CallIndex">Post Order API</a>. <br><br> <span class="tablenote"><strong>Note:</strong> Only the <b>CancelReason</b> and <b>CancelStatus</b> fields are returned. The
     * <b>CancelDetail</b> container and the <b>CancelReasonDetails</b> field are no longer returned. A seller can use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html">Search Cancellations</a> method of
     * the Post-Order API to retrieve more details on a cancelled order. If the seller does use this method, they can use the Order ID or Item ID as a filter in the request to retrieve the correct cancellation request. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CancelDetailType[]
     */
    protected ?array $CancelDetail = null;
    /**
     * The LogisticsPlanType
     * Meta information extracted from the WSDL
     * - documentation: This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature. <br/><br/>
     * Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers
     * on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or,
     * <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogisticsPlanType = null;
    /**
     * The BuyerTaxIdentifier
     * Meta information extracted from the WSDL
     * - documentation: This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer. <br/><br/> It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the
     * Social Security Number for US citizens) before buying an item on the Italy site. <br/><br/> On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is
     * set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all
     * eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout. <br/><br/> This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier
     * information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]
     */
    protected ?array $BuyerTaxIdentifier = null;
    /**
     * The BuyerPackageEnclosures
     * Meta information extracted from the WSDL
     * - documentation: This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the
     * order. The 'Pay Upon Invoice' option is only available on the Germany site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $BuyerPackageEnclosures = null;
    /**
     * The ExtendedOrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order in the eBay REST API model. <b>ExtendedOrderID</b> values will be used to identify orders in REST-based APIs, including the Post-Order API and the Fulfillment API. <br><br> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version
     * 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format
     * of order identifier values, and this new format is relevant to both legacy and REST API-based order ID fields. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and
     * multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExtendedOrderID = null;
    /**
     * The ContainseBayPlusTransaction
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free
     * returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay
     * Plus is available only to buyers in Germany and Australia. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ContainseBayPlusTransaction = null;
    /**
     * The eBayCollectAndRemitTax
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if one or more line items in the order are subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on
     * the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). A <b>Transaction.eBayCollectAndRemitTaxes</b> container is returned for any order line items subject to such a tax, and the type and amount
     * of this tax is displayed in the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> container. <br/><br/> Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay
     * Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a
     * href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic. <br/><br/> As of November 2021, buyers in all US states except for Missouri (and several US territories), will
     * automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayCollectAndRemitTax = null;
    /**
     * The OrderLineItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the total number of line items in the order. This field is returned under the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. In order for the
     * <b>ContainingOrder</b> container to be returned, a user must include the <b>IncludeContainingOrder</b> field in the call request and set its value to <b>true</b>. <br/><br/> <span class="tablenote"><b>Note:</b> This field is automatically returned if
     * the user is using Version 1113 of the Trading WSDL (or newer), or if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code> (or newer). If a user is using a Trading WSDL older than 1113 (or is
     * not setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to 1113 or newer), this field will not be returned. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderLineItemCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @uses OrderType::setOrderLineItemCount()
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
     * @param int $orderLineItemCount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $orderID = null, ?string $orderStatus = null, ?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amountSaved = null, ?\macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus = null, ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, ?string $creatingUserRole = null, ?string $createdTime = null, ?array $paymentMethods = null, ?string $sellerEmail = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null, ?\macropage\ebaysdk\trading\StructType\AmountType $subtotal = null, ?\macropage\ebaysdk\trading\StructType\AmountType $total = null, ?array $externalTransaction = null, ?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null, ?string $buyerUserID = null, ?string $paidTime = null, ?string $shippedTime = null, ?bool $integratedMerchantCreditCardEnabled = null, ?bool $bundlePurchase = null, ?string $buyerCheckoutMessage = null, ?string $eIASToken = null, ?string $paymentHoldStatus = null, ?\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null, ?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, ?string $refundStatus = null, ?\macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null, ?bool $isMultiLegShipping = null, ?\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null, ?\macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails = null, ?\macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails = null, ?\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null, ?string $sellerUserID = null, ?string $sellerEIASToken = null, ?string $cancelReason = null, ?string $cancelStatus = null, ?string $cancelReasonDetails = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null, ?array $cancelDetail = null, ?string $logisticsPlanType = null, ?array $buyerTaxIdentifier = null, ?\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null, ?string $extendedOrderID = null, ?bool $containseBayPlusTransaction = null, ?bool $eBayCollectAndRemitTax = null, ?int $orderLineItemCount = null, $any = null)
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
            ->setOrderLineItemCount($orderLineItemCount)
            ->setAny($any);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus(): ?string
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setOrderStatus(?string $orderStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid($orderStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType', is_array($orderStatus) ? implode(', ', $orderStatus) : var_export($orderStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
        
        return $this;
    }
    /**
     * Get AdjustmentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAdjustmentAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AdjustmentAmount;
    }
    /**
     * Set AdjustmentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAdjustmentAmount(?\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null): self
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        
        return $this;
    }
    /**
     * Get AmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountPaid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAmountPaid(?\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null): self
    {
        $this->AmountPaid = $amountPaid;
        
        return $this;
    }
    /**
     * Get AmountSaved value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmountSaved(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AmountSaved;
    }
    /**
     * Set AmountSaved value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountSaved
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setAmountSaved(?\macropage\ebaysdk\trading\StructType\AmountType $amountSaved = null): self
    {
        $this->AmountSaved = $amountSaved;
        
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return \macropage\ebaysdk\trading\StructType\CheckoutStatusType|null
     */
    public function getCheckoutStatus(): ?\macropage\ebaysdk\trading\StructType\CheckoutStatusType
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @param \macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCheckoutStatus(?\macropage\ebaysdk\trading\StructType\CheckoutStatusType $checkoutStatus = null): self
    {
        $this->CheckoutStatus = $checkoutStatus;
        
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails(): ?\macropage\ebaysdk\trading\StructType\ShippingDetailsType
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingDetails(?\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null): self
    {
        $this->ShippingDetails = $shippingDetails;
        
        return $this;
    }
    /**
     * Get CreatingUserRole value
     * @return string|null
     */
    public function getCreatingUserRole(): ?string
    {
        return $this->CreatingUserRole;
    }
    /**
     * Set CreatingUserRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $creatingUserRole
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCreatingUserRole(?string $creatingUserRole = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($creatingUserRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType', is_array($creatingUserRole) ? implode(', ', $creatingUserRole) : var_export($creatingUserRole, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->CreatingUserRole = $creatingUserRole;
        
        return $this;
    }
    /**
     * Get CreatedTime value
     * @return string|null
     */
    public function getCreatedTime(): ?string
    {
        return $this->CreatedTime;
    }
    /**
     * Set CreatedTime value
     * @param string $createdTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCreatedTime(?string $createdTime = null): self
    {
        // validation for constraint: string
        if (!is_null($createdTime) && !is_string($createdTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdTime, true), gettype($createdTime)), __LINE__);
        }
        $this->CreatedTime = $createdTime;
        
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]
     */
    public function getPaymentMethods(): ?array
    {
        return $this->PaymentMethods;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypePaymentMethodsItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($orderTypePaymentMethodsItem)) {
                $invalidValues[] = is_object($orderTypePaymentMethodsItem) ? get_class($orderTypePaymentMethodsItem) : sprintf('%s(%s)', gettype($orderTypePaymentMethodsItem), var_export($orderTypePaymentMethodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentMethods(?array $paymentMethods = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodsArrayErrorMessage = self::validatePaymentMethodsForArrayConstraintsFromSetPaymentMethods($paymentMethods))) {
            throw new InvalidArgumentException($paymentMethodsArrayErrorMessage, __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToPaymentMethods(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        
        return $this;
    }
    /**
     * Get SellerEmail value
     * @return string|null
     */
    public function getSellerEmail(): ?string
    {
        return $this->SellerEmail;
    }
    /**
     * Set SellerEmail value
     * @param string $sellerEmail
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerEmail(?string $sellerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerEmail) && !is_string($sellerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerEmail, true), gettype($sellerEmail)), __LINE__);
        }
        $this->SellerEmail = $sellerEmail;
        
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get ShippingServiceSelected value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType|null
     */
    public function getShippingServiceSelected(): ?\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
    {
        return $this->ShippingServiceSelected;
    }
    /**
     * Set ShippingServiceSelected value
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingServiceSelected(?\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null): self
    {
        $this->ShippingServiceSelected = $shippingServiceSelected;
        
        return $this;
    }
    /**
     * Get Subtotal value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSubtotal(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Subtotal;
    }
    /**
     * Set Subtotal value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotal
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSubtotal(?\macropage\ebaysdk\trading\StructType\AmountType $subtotal = null): self
    {
        $this->Subtotal = $subtotal;
        
        return $this;
    }
    /**
     * Get Total value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotal(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $total
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setTotal(?\macropage\ebaysdk\trading\StructType\AmountType $total = null): self
    {
        $this->Total = $total;
        
        return $this;
    }
    /**
     * Get ExternalTransaction value
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType[]
     */
    public function getExternalTransaction(): ?array
    {
        return $this->ExternalTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalTransactionForArrayConstraintsFromSetExternalTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeExternalTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTypeExternalTransactionItem instanceof \macropage\ebaysdk\trading\StructType\ExternalTransactionType) {
                $invalidValues[] = is_object($orderTypeExternalTransactionItem) ? get_class($orderTypeExternalTransactionItem) : sprintf('%s(%s)', gettype($orderTypeExternalTransactionItem), var_export($orderTypeExternalTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\ExternalTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType[] $externalTransaction
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setExternalTransaction(?array $externalTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalTransactionArrayErrorMessage = self::validateExternalTransactionForArrayConstraintsFromSetExternalTransaction($externalTransaction))) {
            throw new InvalidArgumentException($externalTransactionArrayErrorMessage, __LINE__);
        }
        $this->ExternalTransaction = $externalTransaction;
        
        return $this;
    }
    /**
     * Add item to ExternalTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToExternalTransaction(\macropage\ebaysdk\trading\StructType\ExternalTransactionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ExternalTransactionType) {
            throw new InvalidArgumentException(sprintf('The ExternalTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\ExternalTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalTransaction[] = $item;
        
        return $this;
    }
    /**
     * Get TransactionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray(): ?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setTransactionArray(?\macropage\ebaysdk\trading\ArrayType\TransactionArrayType $transactionArray = null): self
    {
        $this->TransactionArray = $transactionArray;
        
        return $this;
    }
    /**
     * Get BuyerUserID value
     * @return string|null
     */
    public function getBuyerUserID(): ?string
    {
        return $this->BuyerUserID;
    }
    /**
     * Set BuyerUserID value
     * @param string $buyerUserID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerUserID(?string $buyerUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerUserID) && !is_string($buyerUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerUserID, true), gettype($buyerUserID)), __LINE__);
        }
        $this->BuyerUserID = $buyerUserID;
        
        return $this;
    }
    /**
     * Get PaidTime value
     * @return string|null
     */
    public function getPaidTime(): ?string
    {
        return $this->PaidTime;
    }
    /**
     * Set PaidTime value
     * @param string $paidTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaidTime(?string $paidTime = null): self
    {
        // validation for constraint: string
        if (!is_null($paidTime) && !is_string($paidTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidTime, true), gettype($paidTime)), __LINE__);
        }
        $this->PaidTime = $paidTime;
        
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime(): ?string
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippedTime(?string $shippedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippedTime, true), gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled(): ?bool
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setIntegratedMerchantCreditCardEnabled(?bool $integratedMerchantCreditCardEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($integratedMerchantCreditCardEnabled, true), gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        
        return $this;
    }
    /**
     * Get BundlePurchase value
     * @return bool|null
     */
    public function getBundlePurchase(): ?bool
    {
        return $this->BundlePurchase;
    }
    /**
     * Set BundlePurchase value
     * @param bool $bundlePurchase
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBundlePurchase(?bool $bundlePurchase = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bundlePurchase) && !is_bool($bundlePurchase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bundlePurchase, true), gettype($bundlePurchase)), __LINE__);
        }
        $this->BundlePurchase = $bundlePurchase;
        
        return $this;
    }
    /**
     * Get BuyerCheckoutMessage value
     * @return string|null
     */
    public function getBuyerCheckoutMessage(): ?string
    {
        return $this->BuyerCheckoutMessage;
    }
    /**
     * Set BuyerCheckoutMessage value
     * @param string $buyerCheckoutMessage
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerCheckoutMessage(?string $buyerCheckoutMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerCheckoutMessage) && !is_string($buyerCheckoutMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerCheckoutMessage, true), gettype($buyerCheckoutMessage)), __LINE__);
        }
        $this->BuyerCheckoutMessage = $buyerCheckoutMessage;
        
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken(): ?string
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setEIASToken(?string $eIASToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus(): ?string
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentHoldStatus(?string $paymentHoldStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType', is_array($paymentHoldStatus) ? implode(', ', $paymentHoldStatus) : var_export($paymentHoldStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        
        return $this;
    }
    /**
     * Get PaymentHoldDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType|null
     */
    public function getPaymentHoldDetails(): ?\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
    {
        return $this->PaymentHoldDetails;
    }
    /**
     * Set PaymentHoldDetails value
     * @param \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPaymentHoldDetails(?\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null): self
    {
        $this->PaymentHoldDetails = $paymentHoldDetails;
        
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getRefundAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus(): ?string
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @param string $refundStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundStatus(?string $refundStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($refundStatus) && !is_string($refundStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundStatus, true), gettype($refundStatus)), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
        
        return $this;
    }
    /**
     * Get RefundArray value
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType|null
     */
    public function getRefundArray(): ?\macropage\ebaysdk\trading\ArrayType\RefundArrayType
    {
        return $this->RefundArray;
    }
    /**
     * Set RefundArray value
     * @param \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setRefundArray(?\macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null): self
    {
        $this->RefundArray = $refundArray;
        
        return $this;
    }
    /**
     * Get IsMultiLegShipping value
     * @return bool|null
     */
    public function getIsMultiLegShipping(): ?bool
    {
        return $this->IsMultiLegShipping;
    }
    /**
     * Set IsMultiLegShipping value
     * @param bool $isMultiLegShipping
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setIsMultiLegShipping(?bool $isMultiLegShipping = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMultiLegShipping) && !is_bool($isMultiLegShipping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMultiLegShipping, true), gettype($isMultiLegShipping)), __LINE__);
        }
        $this->IsMultiLegShipping = $isMultiLegShipping;
        
        return $this;
    }
    /**
     * Get MultiLegShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType|null
     */
    public function getMultiLegShippingDetails(): ?\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
    {
        return $this->MultiLegShippingDetails;
    }
    /**
     * Set MultiLegShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setMultiLegShippingDetails(?\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null): self
    {
        $this->MultiLegShippingDetails = $multiLegShippingDetails;
        
        return $this;
    }
    /**
     * Get MonetaryDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType|null
     */
    public function getMonetaryDetails(): ?\macropage\ebaysdk\trading\StructType\PaymentsInformationType
    {
        return $this->MonetaryDetails;
    }
    /**
     * Set MonetaryDetails value
     * @param \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setMonetaryDetails(?\macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails = null): self
    {
        $this->MonetaryDetails = $monetaryDetails;
        
        return $this;
    }
    /**
     * Get PickupDetails value
     * @return \macropage\ebaysdk\trading\StructType\PickupDetailsType|null
     */
    public function getPickupDetails(): ?\macropage\ebaysdk\trading\StructType\PickupDetailsType
    {
        return $this->PickupDetails;
    }
    /**
     * Set PickupDetails value
     * @param \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPickupDetails(?\macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails = null): self
    {
        $this->PickupDetails = $pickupDetails;
        
        return $this;
    }
    /**
     * Get PickupMethodSelected value
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType|null
     */
    public function getPickupMethodSelected(): ?\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
    {
        return $this->PickupMethodSelected;
    }
    /**
     * Set PickupMethodSelected value
     * @param \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setPickupMethodSelected(?\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null): self
    {
        $this->PickupMethodSelected = $pickupMethodSelected;
        
        return $this;
    }
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID(): ?string
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerUserID(?string $sellerUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserID, true), gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        
        return $this;
    }
    /**
     * Get SellerEIASToken value
     * @return string|null
     */
    public function getSellerEIASToken(): ?string
    {
        return $this->SellerEIASToken;
    }
    /**
     * Set SellerEIASToken value
     * @param string $sellerEIASToken
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setSellerEIASToken(?string $sellerEIASToken = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerEIASToken) && !is_string($sellerEIASToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerEIASToken, true), gettype($sellerEIASToken)), __LINE__);
        }
        $this->SellerEIASToken = $sellerEIASToken;
        
        return $this;
    }
    /**
     * Get CancelReason value
     * @return string|null
     */
    public function getCancelReason(): ?string
    {
        return $this->CancelReason;
    }
    /**
     * Set CancelReason value
     * @param string $cancelReason
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelReason(?string $cancelReason = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReason, true), gettype($cancelReason)), __LINE__);
        }
        $this->CancelReason = $cancelReason;
        
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus(): ?string
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cancelStatus
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelStatus(?string $cancelStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType', is_array($cancelStatus) ? implode(', ', $cancelStatus) : var_export($cancelStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        
        return $this;
    }
    /**
     * Get CancelReasonDetails value
     * @return string|null
     */
    public function getCancelReasonDetails(): ?string
    {
        return $this->CancelReasonDetails;
    }
    /**
     * Set CancelReasonDetails value
     * @param string $cancelReasonDetails
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelReasonDetails(?string $cancelReasonDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelReasonDetails) && !is_string($cancelReasonDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReasonDetails, true), gettype($cancelReasonDetails)), __LINE__);
        }
        $this->CancelReasonDetails = $cancelReasonDetails;
        
        return $this;
    }
    /**
     * Get ShippingConvenienceCharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingConvenienceCharge(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingConvenienceCharge;
    }
    /**
     * Set ShippingConvenienceCharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setShippingConvenienceCharge(?\macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null): self
    {
        $this->ShippingConvenienceCharge = $shippingConvenienceCharge;
        
        return $this;
    }
    /**
     * Get CancelDetail value
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType[]
     */
    public function getCancelDetail(): ?array
    {
        return $this->CancelDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelDetailForArrayConstraintsFromSetCancelDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeCancelDetailItem) {
            // validation for constraint: itemType
            if (!$orderTypeCancelDetailItem instanceof \macropage\ebaysdk\trading\StructType\CancelDetailType) {
                $invalidValues[] = is_object($orderTypeCancelDetailItem) ? get_class($orderTypeCancelDetailItem) : sprintf('%s(%s)', gettype($orderTypeCancelDetailItem), var_export($orderTypeCancelDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancelDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\CancelDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CancelDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelDetailType[] $cancelDetail
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setCancelDetail(?array $cancelDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($cancelDetailArrayErrorMessage = self::validateCancelDetailForArrayConstraintsFromSetCancelDetail($cancelDetail))) {
            throw new InvalidArgumentException($cancelDetailArrayErrorMessage, __LINE__);
        }
        $this->CancelDetail = $cancelDetail;
        
        return $this;
    }
    /**
     * Add item to CancelDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToCancelDetail(\macropage\ebaysdk\trading\StructType\CancelDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CancelDetailType) {
            throw new InvalidArgumentException(sprintf('The CancelDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\CancelDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CancelDetail[] = $item;
        
        return $this;
    }
    /**
     * Get LogisticsPlanType value
     * @return string|null
     */
    public function getLogisticsPlanType(): ?string
    {
        return $this->LogisticsPlanType;
    }
    /**
     * Set LogisticsPlanType value
     * @param string $logisticsPlanType
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setLogisticsPlanType(?string $logisticsPlanType = null): self
    {
        // validation for constraint: string
        if (!is_null($logisticsPlanType) && !is_string($logisticsPlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logisticsPlanType, true), gettype($logisticsPlanType)), __LINE__);
        }
        $this->LogisticsPlanType = $logisticsPlanType;
        
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]
     */
    public function getBuyerTaxIdentifier(): ?array
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerTaxIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerTaxIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$orderTypeBuyerTaxIdentifierItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
                $invalidValues[] = is_object($orderTypeBuyerTaxIdentifierItem) ? get_class($orderTypeBuyerTaxIdentifierItem) : sprintf('%s(%s)', gettype($orderTypeBuyerTaxIdentifierItem), var_export($orderTypeBuyerTaxIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerTaxIdentifier property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerTaxIdentifier(?array $buyerTaxIdentifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($buyerTaxIdentifierArrayErrorMessage = self::validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier($buyerTaxIdentifier))) {
            throw new InvalidArgumentException($buyerTaxIdentifierArrayErrorMessage, __LINE__);
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function addToBuyerTaxIdentifier(\macropage\ebaysdk\trading\StructType\TaxIdentifierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
            throw new InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
        
        return $this;
    }
    /**
     * Get BuyerPackageEnclosures value
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType|null
     */
    public function getBuyerPackageEnclosures(): ?\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
    {
        return $this->BuyerPackageEnclosures;
    }
    /**
     * Set BuyerPackageEnclosures value
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setBuyerPackageEnclosures(?\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null): self
    {
        $this->BuyerPackageEnclosures = $buyerPackageEnclosures;
        
        return $this;
    }
    /**
     * Get ExtendedOrderID value
     * @return string|null
     */
    public function getExtendedOrderID(): ?string
    {
        return $this->ExtendedOrderID;
    }
    /**
     * Set ExtendedOrderID value
     * @param string $extendedOrderID
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setExtendedOrderID(?string $extendedOrderID = null): self
    {
        // validation for constraint: string
        if (!is_null($extendedOrderID) && !is_string($extendedOrderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extendedOrderID, true), gettype($extendedOrderID)), __LINE__);
        }
        $this->ExtendedOrderID = $extendedOrderID;
        
        return $this;
    }
    /**
     * Get ContainseBayPlusTransaction value
     * @return bool|null
     */
    public function getContainseBayPlusTransaction(): ?bool
    {
        return $this->ContainseBayPlusTransaction;
    }
    /**
     * Set ContainseBayPlusTransaction value
     * @param bool $containseBayPlusTransaction
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setContainseBayPlusTransaction(?bool $containseBayPlusTransaction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containseBayPlusTransaction) && !is_bool($containseBayPlusTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containseBayPlusTransaction, true), gettype($containseBayPlusTransaction)), __LINE__);
        }
        $this->ContainseBayPlusTransaction = $containseBayPlusTransaction;
        
        return $this;
    }
    /**
     * Get eBayCollectAndRemitTax value
     * @return bool|null
     */
    public function getEBayCollectAndRemitTax(): ?bool
    {
        return $this->eBayCollectAndRemitTax;
    }
    /**
     * Set eBayCollectAndRemitTax value
     * @param bool $eBayCollectAndRemitTax
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setEBayCollectAndRemitTax(?bool $eBayCollectAndRemitTax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayCollectAndRemitTax) && !is_bool($eBayCollectAndRemitTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayCollectAndRemitTax, true), gettype($eBayCollectAndRemitTax)), __LINE__);
        }
        $this->eBayCollectAndRemitTax = $eBayCollectAndRemitTax;
        
        return $this;
    }
    /**
     * Get OrderLineItemCount value
     * @return int|null
     */
    public function getOrderLineItemCount(): ?int
    {
        return $this->OrderLineItemCount;
    }
    /**
     * Set OrderLineItemCount value
     * @param int $orderLineItemCount
     * @return \macropage\ebaysdk\trading\StructType\OrderType
     */
    public function setOrderLineItemCount(?int $orderLineItemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($orderLineItemCount) && !(is_int($orderLineItemCount) || ctype_digit($orderLineItemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderLineItemCount, true), gettype($orderLineItemCount)), __LINE__);
        }
        $this->OrderLineItemCount = $orderLineItemCount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OrderType
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
