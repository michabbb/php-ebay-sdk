<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a single order line item (transaction). An order line item contains information about the sale of one or multiple items from a single listing to a single buyer. The eBay system creates an order line item
 * when a buyer has committed to make a purchase in an auction or fixed-price listing. A fixed-priced listing (with multiple identical items or a similar item with variations) can spawn one or more order line items. Auction listings and single-quantity,
 * fixed-price listings can only spawn one order line item.
 * @subpackage Structs
 */
class TransactionType extends AbstractStructBase
{
    /**
     * The AmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: The total amount the buyer paid for the order line item. This amount includes all costs such as shipping, handling, or sales tax. If the seller allowed the buyer to change the total for an order, the buyer is able to change the total
     * up until the time when Checkout status is Complete. Determine whether the buyer changed the amount by retrieving the order line item data and comparing the <b>AmountPaid</b> value to what the seller expected. If multiple order line items between the
     * same buyer and seller have been combined into a Combined Invoice order, the <b>AmountPaid</b> value returned in <b>GetSellerTransactions</b> and <b>GetItemTransactions</b> reflects the amount paid for the Combined Invoice order and not the individual
     * order line item. You can determine the order line items that belong to the same Combined Invoice order by checking to see if the <b>ContainingOrder.OrderID</b> value is the same. For Motors items, <b>AmountPaid</b> is the amount paid by the buyer for
     * the deposit.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The AdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: Adjustment amount entered by the buyer. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AdjustmentAmount;
    /**
     * The ConvertedAdjustmentAmount
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedAdjustmentAmount;
    /**
     * The Buyer
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of user and shipping details for the buyer. See <b>UserType</b> for its child elements. Returned by <b>GetItemsAwaitingFeedback</b> if Seller is making the request. <br><br> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than
     * Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $Buyer;
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of shipping-related details for an order. Shipping details include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, shipping insurance
     * information, sales tax information (if applicable), and shipment tracking details (if shipped). <br><br> For <b>GetSellerTransactions</b> and <b>GetItemTransactions</b>, the <b>ShippingDetails</b> container is returned in the <b>Transaction</b>
     * container. For <b>GetOrders</b> and <b>GetOrderTransactions</b>, the <b>ShippingDetails</b> container is returned at the Order level.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ConvertedAmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedAmountPaid;
    /**
     * The ConvertedTransactionPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedTransactionPrice;
    /**
     * The CreatedDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the creation time of the order line item. For auction listings, an order line item is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a
     * Buy It Now auction listing, an order line item is created once the buyer clicks the Buy button.
     * - minOccurs: 0
     * @var string
     */
    public $CreatedDate;
    /**
     * The DepositType
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates whether or not the seller requires a deposit for the vehicle. This field is only applicable to US eBay Motors listings. Otherwise, this field is returned as an empty value.
     * - minOccurs: 0
     * @var string
     */
    public $DepositType;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details about an item in a listing. The child fields return are dependent on the call, the type of item or listing, and the listing site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The QuantityPurchased
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the number of identical items purchased at the same time by the same buyer from one listing. For auction listings, this value is always 1. For fixed-price, non-variation listings, this value can be greater than
     * 1. In either case, this field is tied to the same order line item.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityPurchased;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of status details of an order line item, including payment information. Several of these fields change values during the checkout flow. See <b>TransactionStatusType</b> for its child elements. <br><br> For
     * <b>GetOrders</b>, only the <b>IntegratedMerchantCreditCardEnabled</b>, and <b>PaymentHoldStatus</b> child elements are returned. The fields indicating the status of the order are actually found in the <b>OrderArray.Order.CheckoutStatus</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionStatusType
     */
    public $Status;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. <br><br> <b>For GetOrders,
     * GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer, seller, or PayPal (if payment method is PayPal), and no longer returned at all to third parties
     * (except for PayPal). If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer, seller or PayPal, and a dummy value of <code>10000000000000</code> will be returned to all third parties (except for PayPal).
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The TransactionPrice
     * Meta informations extracted from the WSDL
     * - documentation: The sale price for one unit of the order line item. This price does not include any other costs like shipping charges or sales tax, and its value will remain the same before and after payment. If multiple units were purchased through
     * a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br> For a motor vehicle listing that required a
     * deposit/down payment, the amount in the <b>TransactionPrice</b> is actually the deposit amount. <br><br> <strong>For GetMyeBaySelling</strong>: this field is only returned if the transaction came as a result of a buyer's Best Offer accepted by the
     * seller. Otherwise, the <b>Transaction.TotalPrice</b> field should be viewed instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TransactionPrice;
    /**
     * The BestOfferSale
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the order line item was created as the result of the seller accepting a Best Offer from a buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferSale;
    /**
     * The VATPercent
     * Meta informations extracted from the WSDL
     * - documentation: VAT rate for the item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent,
     * VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must
     * have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the
     * full value you send in is stored.
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The ExternalTransaction
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details for a PayPal transaction that relates to the eBay order. PayPal transactions may include a buyer payment or refund, or a fee or credit applied to the seller's account. This field is only returned if a
     * PayPal transaction related to order has occurred. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If
     * using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExternalTransactionType[]
     */
    public $ExternalTransaction;
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of Selling Manager product details and is only returned if the item was listed through Selling Manager.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The ShippingServiceSelected
     * Meta informations extracted from the WSDL
     * - documentation: The shipping service selected by the buyer from the services offered by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType
     */
    public $ShippingServiceSelected;
    /**
     * The BuyerMessage
     * Meta informations extracted from the WSDL
     * - documentation: Display message from buyer. This field holds transient data that is only being returned in Checkout related notifications.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerMessage;
    /**
     * The DutchAuctionBid
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $DutchAuctionBid;
    /**
     * The BuyerPaidStatus
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the paid status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerPaidStatus;
    /**
     * The SellerPaidStatus
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the paid status of the order.
     * - minOccurs: 0
     * @var string
     */
    public $SellerPaidStatus;
    /**
     * The PaidTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the time when the order was marked paid. This field is not returned until payment has been made by the buyer. This field will not be returned for orders where the buyer has received partial or full refunds. <br><br> This
     * value will only be visible to the user on either side of the order. An order can be marked as paid in the following ways: <ul> <li>Automatically when a payment is made via PayPal </li> <li>Seller marks the item as paid in My eBay or through Selling
     * Manager Pro </li> <li>Programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $PaidTime;
    /**
     * The ShippedTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the time when the item(s) associated with the order were marked as shipped. This value will only be visible to the user on either side of the order. An order can be marked as shipped in My eBay or through Selling Manager
     * Pro, or programmatically by the seller through the <b>CompleteSale</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the total price for an order line item. Before payment, this dollar value will be the price before a shipping service option is selected. Once a shipping service option is selected, the price in this field will
     * be updated to reflect the shipping and handling costs associated with that shipping service option.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalPrice;
    /**
     * The FeedbackLeft
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of Feedback left by the caller for their order partner. This container is only returned if the order is complete and feedback on the order line item has been left by the caller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public $FeedbackLeft;
    /**
     * The FeedbackReceived
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of Feedback received by the caller from their order partner. This container is only returned if the order is complete and feedback on the order line item has been received by the caller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public $FeedbackReceived;
    /**
     * The ContainingOrder
     * Meta informations extracted from the WSDL
     * - documentation: The Combined Invoice order to which the order line item belongs. This container is only returned if <b>IncludeContainingOrder</b> is included and set to true in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType
     */
    public $ContainingOrder;
    /**
     * The FinalValueFee
     * Meta informations extracted from the WSDL
     * - documentation: A Final Value Fee is calculated and charged to a seller's account immediately upon creation of an order line item. Note that this fee is created before the buyer makes a payment.The Final Value Fee for each order line item is
     * returned by <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b>, regardless of the checkout status. <br><br> If a seller requests a Final Value Fee credit, the value of
     * <b>Transaction.FinalValueFee</b> will not change if a credit is issued. The credit only appears in the seller's account data.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $FinalValueFee;
    /**
     * The ListingCheckoutRedirectPreference
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
     */
    public $ListingCheckoutRedirectPreference;
    /**
     * The RefundArray
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable. </span> Container consisting of one or more
     * refund transactions to Half.com buyers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public $RefundArray;
    /**
     * The TransactionSiteID
     * Meta informations extracted from the WSDL
     * - documentation: The site upon which the order line item (transaction) was created.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionSiteID;
    /**
     * The Platform
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the site on which the order line item originated. <br><br> <span class="tablenote"><b>Note: </b> Currently, the only value that should be returned in this field is <code>eBay</code>, as Half.com listings will no
     * longer be supported in APIs. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The CartID
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     * - minOccurs: 0
     * @var string
     */
    public $CartID;
    /**
     * The SellerContactBuyerByEmail
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerContactBuyerByEmail;
    /**
     * The PayPalEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: The seller's PayPal email address. This value is only revealed if it is the seller making the call.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The PaisaPayID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a <b>PaisaPay</b> transaction. Only applicable for the India site (203) if <b>PaisaPay</b> was the payment method used.
     * - minOccurs: 0
     * @var string
     */
    public $PaisaPayID;
    /**
     * The BuyerGuaranteePrice
     * Meta informations extracted from the WSDL
     * - documentation: For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage, offered for the item at the time of purchase. Details of coverage are in the following sections of the View Item page: the Buy Safely section
     * and the Payment Details section.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BuyerGuaranteePrice;
    /**
     * The Variation
     * Meta informations extracted from the WSDL
     * - documentation: In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color
     * and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the
     * same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process orders
     * should always check to see if this node is present.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationType
     */
    public $Variation;
    /**
     * The BuyerCheckoutMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if a buyer left a comment for the seller during the left by buyer during the checkout flow. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be
     * returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to
     * all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerCheckoutMessage;
    /**
     * The TotalTransactionPrice
     * Meta informations extracted from the WSDL
     * - documentation: The sale price of the order line item. This amount does not take into account shipping and handling charges, sales tax, or any other costs related to the order line item. If multiple units were purchased through a non- variation,
     * fixed-price listing, this value will reflect that. So, if the base cost of the order line item was $15.00, and a quantity of two were purchased (<b>Transaction.QuantityPurchased</b>) the value in this field would show as <code>30.00</code>. <br><br>
     * To see the full price of the order line item, including any shipping and handling charges, and any sales tax, the (<b>Transaction.TotalPrice</b>) field value should be viewed instead. However, note that the <b>TotalPrice</b> field value is only
     * updated after a shipping service option is selected and payment is made. And if the seller is offering free shipping, the values in the <b>TotalTransactionPrice</b> and the <b>TotalPrice</b> fields may be the same.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalTransactionPrice;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: A container consisting of detailed tax information (sales tax, Goods and Services tax, or VAT) for an order line item. The <b>Taxes</b> container is only returned if the order line item is subject to a tax on the buyer's purchase.
     * The information in this container supercedes/overrides any sales tax information in the <b>ShippingDetails.SalesTax</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public $Taxes;
    /**
     * The BundlePurchase
     * Meta informations extracted from the WSDL
     * - documentation: Boolean value indicating whether or not an order line item is part of a bundle purchase using Product Configurator.
     * - minOccurs: 0
     * @var bool
     */
    public $BundlePurchase;
    /**
     * The ActualShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: The shipping cost paid by the buyer for the order line item. This field is only returned after checkout is complete.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ActualShippingCost;
    /**
     * The ActualHandlingCost
     * Meta informations extracted from the WSDL
     * - documentation: The handling cost that the seller has charged for the order line item. This field is only returned after checkout is complete. <br><br> The value of this field is returned as zero dollars (0.0) if the seller did not specify a
     * handling cost for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ActualHandlingCost;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in
     * between these two IDs. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third
     * parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The eBayPaymentID
     * Meta informations extracted from the WSDL
     * - documentation: The generated eBay payment ID used by the buyer when he/she chooses electronic transfer as payment method for paying the seller. This field is only applicable to the eBay Germany site (Site ID 77).
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentID;
    /**
     * The PaymentHoldDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of information related to the payment hold on the order line item, including the reason why the buyer's payment for the order line item is being held, the expected release date of the funds into the seller's
     * account, and possible action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if PayPal has placed a payment hold on the order line item. <br/><br/> An American seller (selling on US or US
     * Motors sites) and a Canadian seller (selling on CA and CA- FR sites) may be subject to PayPal payment holds (that last from three to 21 days) if that seller is new to selling on eBay or is classified as a "Below Standard" seller. For other reasons
     * why a seller's funds may be held by PayPal, see the <b>PaymentHoldReason</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public $PaymentHoldDetails;
    /**
     * The SellerDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public $SellerDiscounts;
    /**
     * The RefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $RefundAmount;
    /**
     * The RefundStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The CodiceFiscale
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time. <br/><br/> This field is only applicable to buyers on
     * the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     * - minOccurs: 0
     * @var string
     */
    public $CodiceFiscale;
    /**
     * The IsMultiLegShipping
     * Meta informations extracted from the WSDL
     * - documentation: If <strong>IsMultilegShipping</strong> is true, the Global Shipping Program (GSP) will be used to ship the order line item to an international buyer. A GSP shipment has a domestic leg and an international leg. The buyer's shipping
     * address is in a country other than the country where the item was listed, and the seller has specified 'InternationalPriorityShipping' as the default international shipping service in the listing. <br/><br/> If <strong>IsMultilegShipping</strong> is
     * false, the order line item will not be shipped with the Global Shipping Program. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IsMultiLegShipping;
    /**
     * The MultiLegShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains details about the domestic leg of a Global Shipping Program shipment. <br/><br/> This container is not returned if <strong>IsMultilegShipping</strong> is false.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public $MultiLegShippingDetails;
    /**
     * The InvoiceSentTime
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the date/time that an order invoice was sent from the seller to the buyer. This field is only returned if an invoice (containing the order line item) was sent to the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceSentTime;
    /**
     * The UnpaidItem
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details related to the type and status of an Unpaid Item case. This container is only returned if there is an open or closed Unpaid Item case associated with the order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnpaidItemType
     */
    public $UnpaidItem;
    /**
     * The IntangibleItem
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether or not the order line item is an intangible good such as an MP3 track or a mobile phone ringtone. Intangible items are not eligible for PayPal's Seller Protection program, so the seller will not be able to
     * open an Unpaid Item case against the buyer.
     * - minOccurs: 0
     * @var bool
     */
    public $IntangibleItem;
    /**
     * The MonetaryDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about how funds exchanged for an order line item are allocated to payees. <br/><br/> For example, for an order line item using eBay's Global Shipping Program, users can see the portion of the buyer's payment that
     * is allocated as shipping and import charges remitted to the international shipping provider. Currently, only payment information is returned. <br/><br/> <span class="tablenote"> <strong>Note:</strong> In an upcoming release,
     * <strong>MonetaryDetails</strong> will replace the <strong>ExternalTransaction</strong> container, so you are encouraged to start using <strong>MonetaryDetails</strong> now. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public $MonetaryDetails;
    /**
     * The PickupDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order
     * (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. With this initial version of In-Store Pickup, the only pickup method is 'InStorePickup'. <br/><br/> For
     * <strong>GetOrders</strong> and <strong>GetOrderTransactions</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> flag in the call request
     * set to 'true'. If and when the In-Store pickup method is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong>
     * container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only
     * available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupDetailsType
     */
    public $PickupDetails;
    /**
     * The PickupMethodSelected
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of details related to the selected In-Store pickup method, including the pickup method, the merchant's store ID, the status of the In-Store pickup, and the pickup reference code (if provided by merchant).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public $PickupMethodSelected;
    /**
     * The ShippingConvenienceCharge
     * Meta informations extracted from the WSDL
     * - documentation: The dollar value in this field indicates the amount that the seller is being charged (at line item level) for the convenience of an eBay Scheduled Delivery. eBay Scheduled Delivery is currently only available in the London (UK) area.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingConvenienceCharge;
    /**
     * The LogisticsPlanType
     * Meta informations extracted from the WSDL
     * - documentation: This field will be returned at the order line item level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature. <br/><br/>
     * Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers
     * on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK, Australia, and Germaany
     * sites; or, <code>DigitalDelivery</code>, which indicates that the order line item is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     * - minOccurs: 0
     * @var string
     */
    public $LogisticsPlanType;
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
     * The InventoryReservationID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the inventory reservation.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryReservationID;
    /**
     * The ExtendedOrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. <b>ExtendedOrderID</b> values will be used to identify order line items in the Post-Order API. For Trading API Get calls, <b>OrderLineItemID</b> values should still be used. <br><br>
     * <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL
     * older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $ExtendedOrderID;
    /**
     * The eBayPlusTransaction
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, this transaction is for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on
     * selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is
     * available only to buyers in Germany, Austria, and Australia. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayPlusTransaction;
    /**
     * The GiftSummary
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift, and has left a message for the recipient. The
     * <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card. A digital gift card line item is indicated if the <b>DigitalDeliverySelected</b> container is returned in the response, and if the
     * digital gift card is sent to another individual as a gift, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\GiftSummaryType
     */
    public $GiftSummary;
    /**
     * The DigitalDeliverySelected
     * Meta informations extracted from the WSDL
     * - documentation: This container is only returned by <b>GetOrders</b> and other order management calls if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift (in this case, the
     * <b>Gift</b> boolean field will be returned with a value of <code>true</code>). The <b>DigitalDeliverySelected</b> container consists of information related to the digital gift card order line item, including the delivery method, delivery status, and
     * recipient of the gift card (either the buyer, or another individual that is receiving the gift card as a gift from the buyer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public $DigitalDeliverySelected;
    /**
     * The Gift
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the seller is giving a digital gift card to another individual as a gift. This field is only applicable for digital gift card order line items.
     * - minOccurs: 0
     * @var bool
     */
    public $Gift;
    /**
     * The GuaranteedShipping
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is for future use, as the eBay Guaranteed Shipping feature has been put on hold. eBay Guaranteed Shipping should not be confused with eBay Guaranteed Delivery, which is a completely
     * different feature. </span> This field is returned as <code>true</code> if the seller chose to use eBay's Guaranteed Shipping feature at listing time. With eBay's Guaranteed Shipping, the seller will never pay more for shipping than what is charged to
     * the buyer. eBay recommends the shipping service option for the seller to use based on the dimensions and weight of the shipping package.
     * - minOccurs: 0
     * @var bool
     */
    public $GuaranteedShipping;
    /**
     * The GuaranteedDelivery
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. At this time, eBay Guaranteed Delivery is only available to a select number of
     * sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. <br/><br/>Only domestic shipments are available for eBay Guaranteed Delivery. For an order line item to be qualified for eBay Guaranteed Delivery, the
     * following must be true: <ul> <li>The eBay Guaranteed Delivery feature must be available to the seller</li> <li>That seller must be opted in to one of the two eBay Guaranteed Delivery programs</li> <li>If the seller is opted into the "Door-to-Door"
     * program, a domestic shipping rate table must be applied to the listing, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less; </li> <li>If the seller is opted into
     * the "Handling Time" program, the handling time plus the max shipping time must equal 3 business days or less, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or
     * less</li> <li>The listing must have a return policy</li> </ul> With eBay Guaranteed Delivery, the sellers are committed to getting the order line item to the buyer within 3 business days. The seller's defined "Order Cutoff" time will control what is
     * considered 3 business days. If a buyer wanted to get an order by Friday, that buyer would have to purchase that item on Monday before the seller's "Order Cutoff" time. The seller's "Order Cutoff" time is generally set in their timezone, so the buyer
     * should take this into account before the purchase.
     * - minOccurs: 0
     * @var bool
     */
    public $GuaranteedDelivery;
    /**
     * The eBayCollectAndRemitTax
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if eBay will collect tax (sales tax, Goods and Services tax, or VAT) on the order line item and remit the tax to the taxing authority of the buyer's residence. If this field is
     * returned as <code>true</code>, an <b>eBayCollectAndRemitTaxes</b> container will also be returned, and the type of amount of this tax will be displayed in this container.the seller should search for one or more ebayCollectAndRemitTaxes containers at
     * the line item level to get more information about the type of tax and the amount. <br/><br/> This field is not returned if <code>false</code>. <br/><br/> <span class="tablenote"><b>Note: </b> If eBay will collect and remit a sales tax for a state or
     * jurisdiction, the seller does not have to take any action regarding the buyer's sales tax. If a sales tax percent for the buyer's state or jurisdiction is set on the listing or through the seller's tax table, this rate will essentially be ignored,
     * since the calculation of sales tax (based on the sales tax rate) will be handled by the state/jurisdiction and eBay. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayCollectAndRemitTax;
    /**
     * The eBayCollectAndRemitTaxes
     * Meta informations extracted from the WSDL
     * - documentation: This container will be returned if the order line item is subject to a tax (sales tax, Goods and Services tax, or VAT) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be
     * shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field. <br/><br/> <span class="tablenote"><b>Note: </b> If eBay will collect and
     * remit a sales tax for a state or jurisdiction, the seller does not have to take any action regarding the buyer's sales tax. If a sales tax percent for the buyer's state or jurisdiction is set on the listing or through the seller's tax table, this
     * rate will essentially be ignored, since the calculation of sales tax (based on the sales tax rate) will be handled by the state/jurisdiction and eBay. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public $eBayCollectAndRemitTaxes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAmountPaid()
     * @uses TransactionType::setAdjustmentAmount()
     * @uses TransactionType::setConvertedAdjustmentAmount()
     * @uses TransactionType::setBuyer()
     * @uses TransactionType::setShippingDetails()
     * @uses TransactionType::setConvertedAmountPaid()
     * @uses TransactionType::setConvertedTransactionPrice()
     * @uses TransactionType::setCreatedDate()
     * @uses TransactionType::setDepositType()
     * @uses TransactionType::setItem()
     * @uses TransactionType::setQuantityPurchased()
     * @uses TransactionType::setStatus()
     * @uses TransactionType::setTransactionID()
     * @uses TransactionType::setTransactionPrice()
     * @uses TransactionType::setBestOfferSale()
     * @uses TransactionType::setVATPercent()
     * @uses TransactionType::setExternalTransaction()
     * @uses TransactionType::setSellingManagerProductDetails()
     * @uses TransactionType::setShippingServiceSelected()
     * @uses TransactionType::setBuyerMessage()
     * @uses TransactionType::setDutchAuctionBid()
     * @uses TransactionType::setBuyerPaidStatus()
     * @uses TransactionType::setSellerPaidStatus()
     * @uses TransactionType::setPaidTime()
     * @uses TransactionType::setShippedTime()
     * @uses TransactionType::setTotalPrice()
     * @uses TransactionType::setFeedbackLeft()
     * @uses TransactionType::setFeedbackReceived()
     * @uses TransactionType::setContainingOrder()
     * @uses TransactionType::setFinalValueFee()
     * @uses TransactionType::setListingCheckoutRedirectPreference()
     * @uses TransactionType::setRefundArray()
     * @uses TransactionType::setTransactionSiteID()
     * @uses TransactionType::setPlatform()
     * @uses TransactionType::setCartID()
     * @uses TransactionType::setSellerContactBuyerByEmail()
     * @uses TransactionType::setPayPalEmailAddress()
     * @uses TransactionType::setPaisaPayID()
     * @uses TransactionType::setBuyerGuaranteePrice()
     * @uses TransactionType::setVariation()
     * @uses TransactionType::setBuyerCheckoutMessage()
     * @uses TransactionType::setTotalTransactionPrice()
     * @uses TransactionType::setTaxes()
     * @uses TransactionType::setBundlePurchase()
     * @uses TransactionType::setActualShippingCost()
     * @uses TransactionType::setActualHandlingCost()
     * @uses TransactionType::setOrderLineItemID()
     * @uses TransactionType::setEBayPaymentID()
     * @uses TransactionType::setPaymentHoldDetails()
     * @uses TransactionType::setSellerDiscounts()
     * @uses TransactionType::setRefundAmount()
     * @uses TransactionType::setRefundStatus()
     * @uses TransactionType::setCodiceFiscale()
     * @uses TransactionType::setIsMultiLegShipping()
     * @uses TransactionType::setMultiLegShippingDetails()
     * @uses TransactionType::setInvoiceSentTime()
     * @uses TransactionType::setUnpaidItem()
     * @uses TransactionType::setIntangibleItem()
     * @uses TransactionType::setMonetaryDetails()
     * @uses TransactionType::setPickupDetails()
     * @uses TransactionType::setPickupMethodSelected()
     * @uses TransactionType::setShippingConvenienceCharge()
     * @uses TransactionType::setLogisticsPlanType()
     * @uses TransactionType::setBuyerPackageEnclosures()
     * @uses TransactionType::setInventoryReservationID()
     * @uses TransactionType::setExtendedOrderID()
     * @uses TransactionType::setEBayPlusTransaction()
     * @uses TransactionType::setGiftSummary()
     * @uses TransactionType::setDigitalDeliverySelected()
     * @uses TransactionType::setGift()
     * @uses TransactionType::setGuaranteedShipping()
     * @uses TransactionType::setGuaranteedDelivery()
     * @uses TransactionType::setEBayCollectAndRemitTax()
     * @uses TransactionType::setEBayCollectAndRemitTaxes()
     * @uses TransactionType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amountPaid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedAdjustmentAmount
     * @param \macropage\ebaysdk\trading\StructType\UserType $buyer
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedAmountPaid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedTransactionPrice
     * @param string $createdDate
     * @param string $depositType
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param int $quantityPurchased
     * @param \macropage\ebaysdk\trading\StructType\TransactionStatusType $status
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice
     * @param bool $bestOfferSale
     * @param float $vATPercent
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType[] $externalTransaction
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected
     * @param string $buyerMessage
     * @param \macropage\ebaysdk\trading\StructType\AmountType $dutchAuctionBid
     * @param string $buyerPaidStatus
     * @param string $sellerPaidStatus
     * @param string $paidTime
     * @param string $shippedTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalPrice
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackLeft
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackReceived
     * @param \macropage\ebaysdk\trading\StructType\OrderType $containingOrder
     * @param \macropage\ebaysdk\trading\StructType\AmountType $finalValueFee
     * @param \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     * @param \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray
     * @param string $transactionSiteID
     * @param string $platform
     * @param string $cartID
     * @param bool $sellerContactBuyerByEmail
     * @param string $payPalEmailAddress
     * @param string $paisaPayID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice
     * @param \macropage\ebaysdk\trading\StructType\VariationType $variation
     * @param string $buyerCheckoutMessage
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTransactionPrice
     * @param \macropage\ebaysdk\trading\StructType\TaxesType $taxes
     * @param bool $bundlePurchase
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualHandlingCost
     * @param string $orderLineItemID
     * @param string $eBayPaymentID
     * @param \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountsType $sellerDiscounts
     * @param \macropage\ebaysdk\trading\StructType\AmountType $refundAmount
     * @param string $refundStatus
     * @param string $codiceFiscale
     * @param bool $isMultiLegShipping
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails
     * @param string $invoiceSentTime
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemType $unpaidItem
     * @param bool $intangibleItem
     * @param \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails
     * @param \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails
     * @param \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge
     * @param string $logisticsPlanType
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures
     * @param string $inventoryReservationID
     * @param string $extendedOrderID
     * @param bool $eBayPlusTransaction
     * @param \macropage\ebaysdk\trading\StructType\GiftSummaryType $giftSummary
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType $digitalDeliverySelected
     * @param bool $gift
     * @param bool $guaranteedShipping
     * @param bool $guaranteedDelivery
     * @param bool $eBayCollectAndRemitTax
     * @param \macropage\ebaysdk\trading\StructType\TaxesType $eBayCollectAndRemitTaxes
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null, \macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedAdjustmentAmount = null, \macropage\ebaysdk\trading\StructType\UserType $buyer = null, \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedAmountPaid = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedTransactionPrice = null, $createdDate = null, $depositType = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, $quantityPurchased = null, \macropage\ebaysdk\trading\StructType\TransactionStatusType $status = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null, $bestOfferSale = null, $vATPercent = null, array $externalTransaction = array(), \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null, $buyerMessage = null, \macropage\ebaysdk\trading\StructType\AmountType $dutchAuctionBid = null, $buyerPaidStatus = null, $sellerPaidStatus = null, $paidTime = null, $shippedTime = null, \macropage\ebaysdk\trading\StructType\AmountType $totalPrice = null, \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackLeft = null, \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackReceived = null, \macropage\ebaysdk\trading\StructType\OrderType $containingOrder = null, \macropage\ebaysdk\trading\StructType\AmountType $finalValueFee = null, \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference = null, \macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null, $transactionSiteID = null, $platform = null, $cartID = null, $sellerContactBuyerByEmail = null, $payPalEmailAddress = null, $paisaPayID = null, \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice = null, \macropage\ebaysdk\trading\StructType\VariationType $variation = null, $buyerCheckoutMessage = null, \macropage\ebaysdk\trading\StructType\AmountType $totalTransactionPrice = null, \macropage\ebaysdk\trading\StructType\TaxesType $taxes = null, $bundlePurchase = null, \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $actualHandlingCost = null, $orderLineItemID = null, $eBayPaymentID = null, \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null, \macropage\ebaysdk\trading\StructType\SellerDiscountsType $sellerDiscounts = null, \macropage\ebaysdk\trading\StructType\AmountType $refundAmount = null, $refundStatus = null, $codiceFiscale = null, $isMultiLegShipping = null, \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null, $invoiceSentTime = null, \macropage\ebaysdk\trading\StructType\UnpaidItemType $unpaidItem = null, $intangibleItem = null, \macropage\ebaysdk\trading\StructType\PaymentsInformationType $monetaryDetails = null, \macropage\ebaysdk\trading\StructType\PickupDetailsType $pickupDetails = null, \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null, $logisticsPlanType = null, \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null, $inventoryReservationID = null, $extendedOrderID = null, $eBayPlusTransaction = null, \macropage\ebaysdk\trading\StructType\GiftSummaryType $giftSummary = null, \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType $digitalDeliverySelected = null, $gift = null, $guaranteedShipping = null, $guaranteedDelivery = null, $eBayCollectAndRemitTax = null, \macropage\ebaysdk\trading\StructType\TaxesType $eBayCollectAndRemitTaxes = null, \DOMDocument $any = null)
    {
        $this
            ->setAmountPaid($amountPaid)
            ->setAdjustmentAmount($adjustmentAmount)
            ->setConvertedAdjustmentAmount($convertedAdjustmentAmount)
            ->setBuyer($buyer)
            ->setShippingDetails($shippingDetails)
            ->setConvertedAmountPaid($convertedAmountPaid)
            ->setConvertedTransactionPrice($convertedTransactionPrice)
            ->setCreatedDate($createdDate)
            ->setDepositType($depositType)
            ->setItem($item)
            ->setQuantityPurchased($quantityPurchased)
            ->setStatus($status)
            ->setTransactionID($transactionID)
            ->setTransactionPrice($transactionPrice)
            ->setBestOfferSale($bestOfferSale)
            ->setVATPercent($vATPercent)
            ->setExternalTransaction($externalTransaction)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setShippingServiceSelected($shippingServiceSelected)
            ->setBuyerMessage($buyerMessage)
            ->setDutchAuctionBid($dutchAuctionBid)
            ->setBuyerPaidStatus($buyerPaidStatus)
            ->setSellerPaidStatus($sellerPaidStatus)
            ->setPaidTime($paidTime)
            ->setShippedTime($shippedTime)
            ->setTotalPrice($totalPrice)
            ->setFeedbackLeft($feedbackLeft)
            ->setFeedbackReceived($feedbackReceived)
            ->setContainingOrder($containingOrder)
            ->setFinalValueFee($finalValueFee)
            ->setListingCheckoutRedirectPreference($listingCheckoutRedirectPreference)
            ->setRefundArray($refundArray)
            ->setTransactionSiteID($transactionSiteID)
            ->setPlatform($platform)
            ->setCartID($cartID)
            ->setSellerContactBuyerByEmail($sellerContactBuyerByEmail)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setPaisaPayID($paisaPayID)
            ->setBuyerGuaranteePrice($buyerGuaranteePrice)
            ->setVariation($variation)
            ->setBuyerCheckoutMessage($buyerCheckoutMessage)
            ->setTotalTransactionPrice($totalTransactionPrice)
            ->setTaxes($taxes)
            ->setBundlePurchase($bundlePurchase)
            ->setActualShippingCost($actualShippingCost)
            ->setActualHandlingCost($actualHandlingCost)
            ->setOrderLineItemID($orderLineItemID)
            ->setEBayPaymentID($eBayPaymentID)
            ->setPaymentHoldDetails($paymentHoldDetails)
            ->setSellerDiscounts($sellerDiscounts)
            ->setRefundAmount($refundAmount)
            ->setRefundStatus($refundStatus)
            ->setCodiceFiscale($codiceFiscale)
            ->setIsMultiLegShipping($isMultiLegShipping)
            ->setMultiLegShippingDetails($multiLegShippingDetails)
            ->setInvoiceSentTime($invoiceSentTime)
            ->setUnpaidItem($unpaidItem)
            ->setIntangibleItem($intangibleItem)
            ->setMonetaryDetails($monetaryDetails)
            ->setPickupDetails($pickupDetails)
            ->setPickupMethodSelected($pickupMethodSelected)
            ->setShippingConvenienceCharge($shippingConvenienceCharge)
            ->setLogisticsPlanType($logisticsPlanType)
            ->setBuyerPackageEnclosures($buyerPackageEnclosures)
            ->setInventoryReservationID($inventoryReservationID)
            ->setExtendedOrderID($extendedOrderID)
            ->setEBayPlusTransaction($eBayPlusTransaction)
            ->setGiftSummary($giftSummary)
            ->setDigitalDeliverySelected($digitalDeliverySelected)
            ->setGift($gift)
            ->setGuaranteedShipping($guaranteedShipping)
            ->setGuaranteedDelivery($guaranteedDelivery)
            ->setEBayCollectAndRemitTax($eBayCollectAndRemitTax)
            ->setEBayCollectAndRemitTaxes($eBayCollectAndRemitTaxes)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $adjustmentAmount = null)
    {
        $this->AdjustmentAmount = $adjustmentAmount;
        return $this;
    }
    /**
     * Get ConvertedAdjustmentAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedAdjustmentAmount()
    {
        return $this->ConvertedAdjustmentAmount;
    }
    /**
     * Set ConvertedAdjustmentAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedAdjustmentAmount
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setConvertedAdjustmentAmount(\macropage\ebaysdk\trading\StructType\AmountType $convertedAdjustmentAmount = null)
    {
        $this->ConvertedAdjustmentAmount = $convertedAdjustmentAmount;
        return $this;
    }
    /**
     * Get Buyer value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \macropage\ebaysdk\trading\StructType\UserType $buyer
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBuyer(\macropage\ebaysdk\trading\StructType\UserType $buyer = null)
    {
        $this->Buyer = $buyer;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setShippingDetails(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get ConvertedAmountPaid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedAmountPaid()
    {
        return $this->ConvertedAmountPaid;
    }
    /**
     * Set ConvertedAmountPaid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedAmountPaid
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setConvertedAmountPaid(\macropage\ebaysdk\trading\StructType\AmountType $convertedAmountPaid = null)
    {
        $this->ConvertedAmountPaid = $convertedAmountPaid;
        return $this;
    }
    /**
     * Get ConvertedTransactionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedTransactionPrice()
    {
        return $this->ConvertedTransactionPrice;
    }
    /**
     * Set ConvertedTransactionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedTransactionPrice
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setConvertedTransactionPrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedTransactionPrice = null)
    {
        $this->ConvertedTransactionPrice = $convertedTransactionPrice;
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositType
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setDepositType($depositType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $depositType, implode(', ', \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get QuantityPurchased value
     * @return int|null
     */
    public function getQuantityPurchased()
    {
        return $this->QuantityPurchased;
    }
    /**
     * Set QuantityPurchased value
     * @param int $quantityPurchased
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setQuantityPurchased($quantityPurchased = null)
    {
        // validation for constraint: int
        if (!is_null($quantityPurchased) && !is_numeric($quantityPurchased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityPurchased)), __LINE__);
        }
        $this->QuantityPurchased = $quantityPurchased;
        return $this;
    }
    /**
     * Get Status value
     * @return \macropage\ebaysdk\trading\StructType\TransactionStatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \macropage\ebaysdk\trading\StructType\TransactionStatusType $status
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setStatus(\macropage\ebaysdk\trading\StructType\TransactionStatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get TransactionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTransactionPrice()
    {
        return $this->TransactionPrice;
    }
    /**
     * Set TransactionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $transactionPrice
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTransactionPrice(\macropage\ebaysdk\trading\StructType\AmountType $transactionPrice = null)
    {
        $this->TransactionPrice = $transactionPrice;
        return $this;
    }
    /**
     * Get BestOfferSale value
     * @return bool|null
     */
    public function getBestOfferSale()
    {
        return $this->BestOfferSale;
    }
    /**
     * Set BestOfferSale value
     * @param bool $bestOfferSale
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBestOfferSale($bestOfferSale = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferSale) && !is_bool($bestOfferSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferSale)), __LINE__);
        }
        $this->BestOfferSale = $bestOfferSale;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setVATPercent($vATPercent = null)
    {
        $this->VATPercent = $vATPercent;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setExternalTransaction(array $externalTransaction = array())
    {
        foreach ($externalTransaction as $transactionTypeExternalTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionTypeExternalTransactionItem instanceof \macropage\ebaysdk\trading\StructType\ExternalTransactionType) {
                throw new \InvalidArgumentException(sprintf('The ExternalTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\ExternalTransactionType, "%s" given', is_object($transactionTypeExternalTransactionItem) ? get_class($transactionTypeExternalTransactionItem) : gettype($transactionTypeExternalTransactionItem)), __LINE__);
            }
        }
        $this->ExternalTransaction = $externalTransaction;
        return $this;
    }
    /**
     * Add item to ExternalTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ExternalTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setShippingServiceSelected(\macropage\ebaysdk\trading\StructType\ShippingServiceOptionsType $shippingServiceSelected = null)
    {
        $this->ShippingServiceSelected = $shippingServiceSelected;
        return $this;
    }
    /**
     * Get BuyerMessage value
     * @return string|null
     */
    public function getBuyerMessage()
    {
        return $this->BuyerMessage;
    }
    /**
     * Set BuyerMessage value
     * @param string $buyerMessage
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBuyerMessage($buyerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($buyerMessage) && !is_string($buyerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerMessage)), __LINE__);
        }
        $this->BuyerMessage = $buyerMessage;
        return $this;
    }
    /**
     * Get DutchAuctionBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDutchAuctionBid()
    {
        return $this->DutchAuctionBid;
    }
    /**
     * Set DutchAuctionBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $dutchAuctionBid
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setDutchAuctionBid(\macropage\ebaysdk\trading\StructType\AmountType $dutchAuctionBid = null)
    {
        $this->DutchAuctionBid = $dutchAuctionBid;
        return $this;
    }
    /**
     * Get BuyerPaidStatus value
     * @return string|null
     */
    public function getBuyerPaidStatus()
    {
        return $this->BuyerPaidStatus;
    }
    /**
     * Set BuyerPaidStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerPaidStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBuyerPaidStatus($buyerPaidStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::valueIsValid($buyerPaidStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyerPaidStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerPaidStatus = $buyerPaidStatus;
        return $this;
    }
    /**
     * Get SellerPaidStatus value
     * @return string|null
     */
    public function getSellerPaidStatus()
    {
        return $this->SellerPaidStatus;
    }
    /**
     * Set SellerPaidStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerPaidStatus
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setSellerPaidStatus($sellerPaidStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::valueIsValid($sellerPaidStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerPaidStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PaidStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellerPaidStatus = $sellerPaidStatus;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get TotalPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalPrice
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTotalPrice(\macropage\ebaysdk\trading\StructType\AmountType $totalPrice = null)
    {
        $this->TotalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get FeedbackLeft value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType|null
     */
    public function getFeedbackLeft()
    {
        return $this->FeedbackLeft;
    }
    /**
     * Set FeedbackLeft value
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackLeft
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setFeedbackLeft(\macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackLeft = null)
    {
        $this->FeedbackLeft = $feedbackLeft;
        return $this;
    }
    /**
     * Get FeedbackReceived value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType|null
     */
    public function getFeedbackReceived()
    {
        return $this->FeedbackReceived;
    }
    /**
     * Set FeedbackReceived value
     * @param \macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackReceived
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setFeedbackReceived(\macropage\ebaysdk\trading\StructType\FeedbackInfoType $feedbackReceived = null)
    {
        $this->FeedbackReceived = $feedbackReceived;
        return $this;
    }
    /**
     * Get ContainingOrder value
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function getContainingOrder()
    {
        return $this->ContainingOrder;
    }
    /**
     * Set ContainingOrder value
     * @param \macropage\ebaysdk\trading\StructType\OrderType $containingOrder
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setContainingOrder(\macropage\ebaysdk\trading\StructType\OrderType $containingOrder = null)
    {
        $this->ContainingOrder = $containingOrder;
        return $this;
    }
    /**
     * Get FinalValueFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFinalValueFee()
    {
        return $this->FinalValueFee;
    }
    /**
     * Set FinalValueFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $finalValueFee
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setFinalValueFee(\macropage\ebaysdk\trading\StructType\AmountType $finalValueFee = null)
    {
        $this->FinalValueFee = $finalValueFee;
        return $this;
    }
    /**
     * Get ListingCheckoutRedirectPreference value
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType|null
     */
    public function getListingCheckoutRedirectPreference()
    {
        return $this->ListingCheckoutRedirectPreference;
    }
    /**
     * Set ListingCheckoutRedirectPreference value
     * @param \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setListingCheckoutRedirectPreference(\macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference = null)
    {
        $this->ListingCheckoutRedirectPreference = $listingCheckoutRedirectPreference;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setRefundArray(\macropage\ebaysdk\trading\ArrayType\RefundArrayType $refundArray = null)
    {
        $this->RefundArray = $refundArray;
        return $this;
    }
    /**
     * Get TransactionSiteID value
     * @return string|null
     */
    public function getTransactionSiteID()
    {
        return $this->TransactionSiteID;
    }
    /**
     * Set TransactionSiteID value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionSiteID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTransactionSiteID($transactionSiteID = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($transactionSiteID)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transactionSiteID, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->TransactionSiteID = $transactionSiteID;
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $platform
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setPlatform($platform = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $platform, implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        return $this;
    }
    /**
     * Get CartID value
     * @return string|null
     */
    public function getCartID()
    {
        return $this->CartID;
    }
    /**
     * Set CartID value
     * @param string $cartID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setCartID($cartID = null)
    {
        // validation for constraint: string
        if (!is_null($cartID) && !is_string($cartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cartID)), __LINE__);
        }
        $this->CartID = $cartID;
        return $this;
    }
    /**
     * Get SellerContactBuyerByEmail value
     * @return bool|null
     */
    public function getSellerContactBuyerByEmail()
    {
        return $this->SellerContactBuyerByEmail;
    }
    /**
     * Set SellerContactBuyerByEmail value
     * @param bool $sellerContactBuyerByEmail
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setSellerContactBuyerByEmail($sellerContactBuyerByEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerContactBuyerByEmail) && !is_bool($sellerContactBuyerByEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerContactBuyerByEmail)), __LINE__);
        }
        $this->SellerContactBuyerByEmail = $sellerContactBuyerByEmail;
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress()
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setPayPalEmailAddress($payPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        return $this;
    }
    /**
     * Get PaisaPayID value
     * @return string|null
     */
    public function getPaisaPayID()
    {
        return $this->PaisaPayID;
    }
    /**
     * Set PaisaPayID value
     * @param string $paisaPayID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setPaisaPayID($paisaPayID = null)
    {
        // validation for constraint: string
        if (!is_null($paisaPayID) && !is_string($paisaPayID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paisaPayID)), __LINE__);
        }
        $this->PaisaPayID = $paisaPayID;
        return $this;
    }
    /**
     * Get BuyerGuaranteePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->BuyerGuaranteePrice;
    }
    /**
     * Set BuyerGuaranteePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBuyerGuaranteePrice(\macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice = null)
    {
        $this->BuyerGuaranteePrice = $buyerGuaranteePrice;
        return $this;
    }
    /**
     * Get Variation value
     * @return \macropage\ebaysdk\trading\StructType\VariationType|null
     */
    public function getVariation()
    {
        return $this->Variation;
    }
    /**
     * Set Variation value
     * @param \macropage\ebaysdk\trading\StructType\VariationType $variation
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setVariation(\macropage\ebaysdk\trading\StructType\VariationType $variation = null)
    {
        $this->Variation = $variation;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get TotalTransactionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalTransactionPrice()
    {
        return $this->TotalTransactionPrice;
    }
    /**
     * Set TotalTransactionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTransactionPrice
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTotalTransactionPrice(\macropage\ebaysdk\trading\StructType\AmountType $totalTransactionPrice = null)
    {
        $this->TotalTransactionPrice = $totalTransactionPrice;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \macropage\ebaysdk\trading\StructType\TaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \macropage\ebaysdk\trading\StructType\TaxesType $taxes
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setTaxes(\macropage\ebaysdk\trading\StructType\TaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get ActualShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getActualShippingCost()
    {
        return $this->ActualShippingCost;
    }
    /**
     * Set ActualShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setActualShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $actualShippingCost = null)
    {
        $this->ActualShippingCost = $actualShippingCost;
        return $this;
    }
    /**
     * Get ActualHandlingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getActualHandlingCost()
    {
        return $this->ActualHandlingCost;
    }
    /**
     * Set ActualHandlingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $actualHandlingCost
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setActualHandlingCost(\macropage\ebaysdk\trading\StructType\AmountType $actualHandlingCost = null)
    {
        $this->ActualHandlingCost = $actualHandlingCost;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Get eBayPaymentID value
     * @return string|null
     */
    public function getEBayPaymentID()
    {
        return $this->eBayPaymentID;
    }
    /**
     * Set eBayPaymentID value
     * @param string $eBayPaymentID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setEBayPaymentID($eBayPaymentID = null)
    {
        // validation for constraint: string
        if (!is_null($eBayPaymentID) && !is_string($eBayPaymentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayPaymentID)), __LINE__);
        }
        $this->eBayPaymentID = $eBayPaymentID;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setPaymentHoldDetails(\macropage\ebaysdk\trading\StructType\PaymentHoldDetailType $paymentHoldDetails = null)
    {
        $this->PaymentHoldDetails = $paymentHoldDetails;
        return $this;
    }
    /**
     * Get SellerDiscounts value
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType|null
     */
    public function getSellerDiscounts()
    {
        return $this->SellerDiscounts;
    }
    /**
     * Set SellerDiscounts value
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountsType $sellerDiscounts
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setSellerDiscounts(\macropage\ebaysdk\trading\StructType\SellerDiscountsType $sellerDiscounts = null)
    {
        $this->SellerDiscounts = $sellerDiscounts;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get CodiceFiscale value
     * @return string|null
     */
    public function getCodiceFiscale()
    {
        return $this->CodiceFiscale;
    }
    /**
     * Set CodiceFiscale value
     * @param string $codiceFiscale
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setCodiceFiscale($codiceFiscale = null)
    {
        // validation for constraint: string
        if (!is_null($codiceFiscale) && !is_string($codiceFiscale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codiceFiscale)), __LINE__);
        }
        $this->CodiceFiscale = $codiceFiscale;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setMultiLegShippingDetails(\macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType $multiLegShippingDetails = null)
    {
        $this->MultiLegShippingDetails = $multiLegShippingDetails;
        return $this;
    }
    /**
     * Get InvoiceSentTime value
     * @return string|null
     */
    public function getInvoiceSentTime()
    {
        return $this->InvoiceSentTime;
    }
    /**
     * Set InvoiceSentTime value
     * @param string $invoiceSentTime
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setInvoiceSentTime($invoiceSentTime = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceSentTime) && !is_string($invoiceSentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceSentTime)), __LINE__);
        }
        $this->InvoiceSentTime = $invoiceSentTime;
        return $this;
    }
    /**
     * Get UnpaidItem value
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType|null
     */
    public function getUnpaidItem()
    {
        return $this->UnpaidItem;
    }
    /**
     * Set UnpaidItem value
     * @param \macropage\ebaysdk\trading\StructType\UnpaidItemType $unpaidItem
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setUnpaidItem(\macropage\ebaysdk\trading\StructType\UnpaidItemType $unpaidItem = null)
    {
        $this->UnpaidItem = $unpaidItem;
        return $this;
    }
    /**
     * Get IntangibleItem value
     * @return bool|null
     */
    public function getIntangibleItem()
    {
        return $this->IntangibleItem;
    }
    /**
     * Set IntangibleItem value
     * @param bool $intangibleItem
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setIntangibleItem($intangibleItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($intangibleItem) && !is_bool($intangibleItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($intangibleItem)), __LINE__);
        }
        $this->IntangibleItem = $intangibleItem;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setPickupMethodSelected(\macropage\ebaysdk\trading\StructType\PickupMethodSelectedType $pickupMethodSelected = null)
    {
        $this->PickupMethodSelected = $pickupMethodSelected;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setShippingConvenienceCharge(\macropage\ebaysdk\trading\StructType\AmountType $shippingConvenienceCharge = null)
    {
        $this->ShippingConvenienceCharge = $shippingConvenienceCharge;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setBuyerPackageEnclosures(\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType $buyerPackageEnclosures = null)
    {
        $this->BuyerPackageEnclosures = $buyerPackageEnclosures;
        return $this;
    }
    /**
     * Get InventoryReservationID value
     * @return string|null
     */
    public function getInventoryReservationID()
    {
        return $this->InventoryReservationID;
    }
    /**
     * Set InventoryReservationID value
     * @param string $inventoryReservationID
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setInventoryReservationID($inventoryReservationID = null)
    {
        // validation for constraint: string
        if (!is_null($inventoryReservationID) && !is_string($inventoryReservationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventoryReservationID)), __LINE__);
        }
        $this->InventoryReservationID = $inventoryReservationID;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get eBayPlusTransaction value
     * @return bool|null
     */
    public function getEBayPlusTransaction()
    {
        return $this->eBayPlusTransaction;
    }
    /**
     * Set eBayPlusTransaction value
     * @param bool $eBayPlusTransaction
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setEBayPlusTransaction($eBayPlusTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayPlusTransaction) && !is_bool($eBayPlusTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayPlusTransaction)), __LINE__);
        }
        $this->eBayPlusTransaction = $eBayPlusTransaction;
        return $this;
    }
    /**
     * Get GiftSummary value
     * @return \macropage\ebaysdk\trading\StructType\GiftSummaryType|null
     */
    public function getGiftSummary()
    {
        return $this->GiftSummary;
    }
    /**
     * Set GiftSummary value
     * @param \macropage\ebaysdk\trading\StructType\GiftSummaryType $giftSummary
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setGiftSummary(\macropage\ebaysdk\trading\StructType\GiftSummaryType $giftSummary = null)
    {
        $this->GiftSummary = $giftSummary;
        return $this;
    }
    /**
     * Get DigitalDeliverySelected value
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType|null
     */
    public function getDigitalDeliverySelected()
    {
        return $this->DigitalDeliverySelected;
    }
    /**
     * Set DigitalDeliverySelected value
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType $digitalDeliverySelected
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setDigitalDeliverySelected(\macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType $digitalDeliverySelected = null)
    {
        $this->DigitalDeliverySelected = $digitalDeliverySelected;
        return $this;
    }
    /**
     * Get Gift value
     * @return bool|null
     */
    public function getGift()
    {
        return $this->Gift;
    }
    /**
     * Set Gift value
     * @param bool $gift
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setGift($gift = null)
    {
        // validation for constraint: boolean
        if (!is_null($gift) && !is_bool($gift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gift)), __LINE__);
        }
        $this->Gift = $gift;
        return $this;
    }
    /**
     * Get GuaranteedShipping value
     * @return bool|null
     */
    public function getGuaranteedShipping()
    {
        return $this->GuaranteedShipping;
    }
    /**
     * Set GuaranteedShipping value
     * @param bool $guaranteedShipping
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setGuaranteedShipping($guaranteedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedShipping) && !is_bool($guaranteedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteedShipping)), __LINE__);
        }
        $this->GuaranteedShipping = $guaranteedShipping;
        return $this;
    }
    /**
     * Get GuaranteedDelivery value
     * @return bool|null
     */
    public function getGuaranteedDelivery()
    {
        return $this->GuaranteedDelivery;
    }
    /**
     * Set GuaranteedDelivery value
     * @param bool $guaranteedDelivery
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setGuaranteedDelivery($guaranteedDelivery = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedDelivery) && !is_bool($guaranteedDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteedDelivery)), __LINE__);
        }
        $this->GuaranteedDelivery = $guaranteedDelivery;
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * Get eBayCollectAndRemitTaxes value
     * @return \macropage\ebaysdk\trading\StructType\TaxesType|null
     */
    public function getEBayCollectAndRemitTaxes()
    {
        return $this->eBayCollectAndRemitTaxes;
    }
    /**
     * Set eBayCollectAndRemitTaxes value
     * @param \macropage\ebaysdk\trading\StructType\TaxesType $eBayCollectAndRemitTaxes
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public function setEBayCollectAndRemitTaxes(\macropage\ebaysdk\trading\StructType\TaxesType $eBayCollectAndRemitTaxes = null)
    {
        $this->eBayCollectAndRemitTaxes = $eBayCollectAndRemitTaxes;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TransactionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionType
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
