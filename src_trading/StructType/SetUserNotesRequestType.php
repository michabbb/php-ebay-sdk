<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserNotesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables users to add, modify, or delete a pinned note for any item that is being tracked in the My eBay All Selling and All Buying areas.
 * @subpackage Structs
 */
class SetUserNotesRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the listing to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: The seller must include this field and set it to 'AddOrUpdate' to add a new user note or update an existing user note, or set it to 'Delete' to delete an existing user note.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The NoteText
     * Meta informations extracted from the WSDL
     * - documentation: This field is needed if the <b>Action</b> is <code>AddOrUpdate</code>. The text supplied in this field will completely replace any existing My eBay note for the specified item.
     * - minOccurs: 0
     * @var string
     */
    public $NoteText;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the order line item to which the My eBay note will be attached. Notes can only be added to order line items that are currently being tracked in My eBay. Buyers can view user notes made on order line items in the
     * <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in
     * <b>GetMyeBaySellinging</b>.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The VariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of name-value pairs that identify (match) one variation within a fixed-price, multiple-variation listing. The specified name-value pair(s) must exist in the listing specified by either the <b>ItemID</b> or
     * <b>SKU</b> values specified in the request. If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified <b>VariationSpecifics</b> container is ignored by
     * the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $VariationSpecifics;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: SKU value of the item variation to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay. A SKU (stock keeping unit) value is defined by and used by the seller to
     * identify a variation within a fixed-price, multiple- variation listing. The SKU value is assigned to a variation of an item through the <b>Variations.Variation.SKU</b> element. <br> <br> This field can only be used if the
     * <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to SKU. <br> <br> If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair
     * or an <b>OrderLineItemID</b> value, any specified <b>SKU</b> is ignored by the call. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields
     * that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in
     * between these two IDs. <b>OrderLineItemID</b> can be used in the input instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item. <br> <br> Notes can only be added to order line items that are currently being tracked in My
     * eBay. Buyers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the
     * <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in <b>GetMyeBaySellinging</b>.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for SetUserNotesRequestType
     * @uses SetUserNotesRequestType::setItemID()
     * @uses SetUserNotesRequestType::setAction()
     * @uses SetUserNotesRequestType::setNoteText()
     * @uses SetUserNotesRequestType::setTransactionID()
     * @uses SetUserNotesRequestType::setVariationSpecifics()
     * @uses SetUserNotesRequestType::setSKU()
     * @uses SetUserNotesRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $action
     * @param string $noteText
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @param string $sKU
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $action = null, $noteText = null, $transactionID = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null, $sKU = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setAction($action)
            ->setNoteText($noteText)
            ->setTransactionID($transactionID)
            ->setVariationSpecifics($variationSpecifics)
            ->setSKU($sKU)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get NoteText value
     * @return string|null
     */
    public function getNoteText()
    {
        return $this->NoteText;
    }
    /**
     * Set NoteText value
     * @param string $noteText
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setNoteText($noteText = null)
    {
        // validation for constraint: string
        if (!is_null($noteText) && !is_string($noteText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noteText)), __LINE__);
        }
        $this->NoteText = $noteText;
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
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
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
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setVariationSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this->VariationSpecifics = $variationSpecifics;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
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
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
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
