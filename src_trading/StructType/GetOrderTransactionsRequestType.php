<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more orders. All recent orders can be retrieved, or the seller can search based on <b>OrderID</b> value(s),
 * <b>ItemID</b> value(s), <b>OrderLineItemID</b> value(s), or by <b>SKU</b> value(s).
 * @subpackage Structs
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ItemTransactionIDArray
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller wants to search for one or more specific order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified
     * with an <b>ItemID</b>/<b>TransactionID</b> pair, with a <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU exists for the order line item).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
     */
    public $ItemTransactionIDArray;
    /**
     * The OrderIDArray
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller wants to search for one or more specific orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public $OrderIDArray;
    /**
     * The Platform
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field's purpose is to allow the seller to retrieve only eBay listings or only Half.com listings instead of both order types. Since the Half.com site has been shut down, this field is no
     * longer necessary to use since eBay orders will be the only orders that are retrieved. </span> The default behavior of <b>GetOrderTransactions</b> is to retrieve all orders originating from eBay.com and Half.com. If the user wants to retrieve only
     * eBay.com order line items or Half.com order line items, this filter can be used to perform that function. Inserting <code>eBay</code> into this field will restrict retrieved order line items to those originating on eBay.com, and inserting
     * <code>Half</code> into this field will restrict retrieved order line items to those originating on Half.com.
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The IncludeFinalValueFees
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wishes to include the Final Value Fee (FVF) for each order in the response. A Final Value Fee is calculated based on total amount of the sale, including the final
     * price of the item and shipping/handling charges. This fee is charged to a seller's account immediately upon creation of an order line item.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFees;
    /**
     * Constructor method for GetOrderTransactionsRequestType
     * @uses GetOrderTransactionsRequestType::setItemTransactionIDArray()
     * @uses GetOrderTransactionsRequestType::setOrderIDArray()
     * @uses GetOrderTransactionsRequestType::setPlatform()
     * @uses GetOrderTransactionsRequestType::setIncludeFinalValueFees()
     * @param \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray
     * @param \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray
     * @param string $platform
     * @param bool $includeFinalValueFees
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray = null, \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null, $platform = null, $includeFinalValueFees = null)
    {
        $this
            ->setItemTransactionIDArray($itemTransactionIDArray)
            ->setOrderIDArray($orderIDArray)
            ->setPlatform($platform)
            ->setIncludeFinalValueFees($includeFinalValueFees);
    }
    /**
     * Get ItemTransactionIDArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType|null
     */
    public function getItemTransactionIDArray()
    {
        return $this->ItemTransactionIDArray;
    }
    /**
     * Set ItemTransactionIDArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType
     */
    public function setItemTransactionIDArray(\macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray = null)
    {
        $this->ItemTransactionIDArray = $itemTransactionIDArray;
        return $this;
    }
    /**
     * Get OrderIDArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType|null
     */
    public function getOrderIDArray()
    {
        return $this->OrderIDArray;
    }
    /**
     * Set OrderIDArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType
     */
    public function setOrderIDArray(\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null)
    {
        $this->OrderIDArray = $orderIDArray;
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType
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
     * Get IncludeFinalValueFees value
     * @return bool|null
     */
    public function getIncludeFinalValueFees()
    {
        return $this->IncludeFinalValueFees;
    }
    /**
     * Set IncludeFinalValueFees value
     * @param bool $includeFinalValueFees
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType
     */
    public function setIncludeFinalValueFees($includeFinalValueFees = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFinalValueFees) && !is_bool($includeFinalValueFees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeFinalValueFees)), __LINE__);
        }
        $this->IncludeFinalValueFees = $includeFinalValueFees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsRequestType
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
