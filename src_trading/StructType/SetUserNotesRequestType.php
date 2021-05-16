<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserNotesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables users to add, modify, or delete a pinned note for any item that is being tracked in the My eBay All Selling and All Buying areas.
 * @subpackage Structs
 */
class SetUserNotesRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the listing to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: The seller must include this field and set it to 'AddOrUpdate' to add a new user note or update an existing user note, or set it to 'Delete' to delete an existing user note.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The NoteText
     * Meta information extracted from the WSDL
     * - documentation: This field is needed if the <b>Action</b> is <code>AddOrUpdate</code>. The text supplied in this field will completely replace any existing My eBay note for the specified item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NoteText = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the order line item to which the My eBay note will be attached. Notes can only be added to order line items that are currently being tracked in My eBay. Buyers can view user notes made on order line items in the
     * <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in
     * <b>GetMyeBaySellinging</b>. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of name-value pairs that identify (match) one variation within a fixed-price, multiple-variation listing. The specified name-value pair(s) must exist in the listing specified by either the <b>ItemID</b> or
     * <b>SKU</b> values specified in the request. If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified <b>VariationSpecifics</b> container is ignored by
     * the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $VariationSpecifics = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: SKU value of the item variation to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay. A SKU (stock keeping unit) value is defined by and used by the seller to
     * identify a variation within a fixed-price, multiple- variation listing. The SKU value is assigned to a variation of an item through the <b>Variations.Variation.SKU</b> element. <br> <br> This field can only be used if the
     * <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to SKU. <br> <br> If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair
     * or an <b>OrderLineItemID</b> value, any specified <b>SKU</b> is ignored by the call. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields
     * that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller. <b>OrderLineItemID</b> can be used in the input instead of an <b>ItemID</b>/<b>TransactionID</b> pair to
     * identify an order line item. <br> <br> Notes can only be added to order line items that are currently being tracked in My eBay. Buyers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>WonList</b> container in
     * <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in <b>GetMyeBaySellinging</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
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
    public function __construct(?string $itemID = null, ?string $action = null, ?string $noteText = null, ?string $transactionID = null, ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null, ?string $sKU = null, ?string $orderLineItemID = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SetUserNotesActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get NoteText value
     * @return string|null
     */
    public function getNoteText(): ?string
    {
        return $this->NoteText;
    }
    /**
     * Set NoteText value
     * @param string $noteText
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setNoteText(?string $noteText = null): self
    {
        // validation for constraint: string
        if (!is_null($noteText) && !is_string($noteText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteText, true), gettype($noteText)), __LINE__);
        }
        $this->NoteText = $noteText;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setVariationSpecifics(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null): self
    {
        $this->VariationSpecifics = $variationSpecifics;
        
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID(): ?string
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\SetUserNotesRequestType
     */
    public function setOrderLineItemID(?string $orderLineItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        
        return $this;
    }
}
