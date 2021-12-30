<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. The <b>OrderIDArray</b> container is used to specify one or more orders to retrieve in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call.
 * @subpackage Arrays
 */
class OrderIDArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored. <br><br> <span
     * class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new
     * format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the
     * new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an
     * unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> and <b>GetOrderTransactions</b> calls, will support the identifiers for both unpaid and paid
     * orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller,
     * these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field
     * in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay order. <br><br> <span class="tablenote"><b>Note:
     * </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the
     * past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading
     * API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a
     * single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a
     * transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b>
     * HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be
     * announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers
     * integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the
     * <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a
     * <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $OrderID = null;
    /**
     * Constructor method for OrderIDArrayType
     * @uses OrderIDArrayType::setOrderID()
     * @param string[] $orderID
     */
    public function __construct(?array $orderID = null)
    {
        $this
            ->setOrderID($orderID);
    }
    /**
     * Get OrderID value
     * @return string[]
     */
    public function getOrderID(): ?array
    {
        return $this->OrderID;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderIDForArrayConstraintsFromSetOrderID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderIDArrayTypeOrderIDItem) {
            // validation for constraint: itemType
            if (!is_string($orderIDArrayTypeOrderIDItem)) {
                $invalidValues[] = is_object($orderIDArrayTypeOrderIDItem) ? get_class($orderIDArrayTypeOrderIDItem) : sprintf('%s(%s)', gettype($orderIDArrayTypeOrderIDItem), var_export($orderIDArrayTypeOrderIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderID value
     * @throws InvalidArgumentException
     * @param string[] $orderID
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function setOrderID(?array $orderID = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderIDArrayErrorMessage = self::validateOrderIDForArrayConstraintsFromSetOrderID($orderID))) {
            throw new InvalidArgumentException($orderIDArrayErrorMessage, __LINE__);
        }
        $this->OrderID = $orderID;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OrderID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderID
     */
    public function getAttributeName(): string
    {
        return 'OrderID';
    }
}
