<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a single line item (transaction) in an order created through Selling Manager.
 * @subpackage Structs
 */
class SellingManagerSoldTransactionType extends AbstractStructBase
{
    /**
     * The InvoiceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Seller's customized invoice number.
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceNumber;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of
     * the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionID;
    /**
     * The SaleRecordID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a Selling Manager sale record. This field is created at the same time as the order line item (transaction). A sale record is displayed in the Sold view in Selling Manager and contains information on the buyer
     * and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     * <br/><br/> For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     * must also be used, passing in a date range that includes the date on which the specific sale occurred.
     * - minOccurs: 0
     * @var int
     */
    public $SaleRecordID;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay item listing. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: Total number of identical items sold in the order line item.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The ItemPrice
     * Meta informations extracted from the WSDL
     * - documentation: Price per item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ItemPrice;
    /**
     * The SubtotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value is calculated by multplying the <b>ItemPrice</b> value by the <b>QuantitySold</b> value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $SubtotalAmount;
    /**
     * The ItemTitle
     * Meta informations extracted from the WSDL
     * - documentation: The title of the item listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemTitle;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: The item listing type.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Relisted
     * Meta informations extracted from the WSDL
     * - documentation: Boolean value indicating whether the item is a relisted item.
     * - minOccurs: 0
     * @var bool
     */
    public $Relisted;
    /**
     * The WatchCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of users watching the item.
     * - minOccurs: 0
     * @var int
     */
    public $WatchCount;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: Start price of the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The ReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: Reserve Price of the item (if a Reserve Price was set for the item).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ReservePrice;
    /**
     * The SecondChanceOfferSent
     * Meta informations extracted from the WSDL
     * - documentation: Boolean value indicating whether or not a Second Chance offer was sent by the seller to an eligible bidder.
     * - minOccurs: 0
     * @var bool
     */
    public $SecondChanceOfferSent;
    /**
     * The CustomLabel
     * Meta informations extracted from the WSDL
     * - documentation: Custom label associated with this order line item.
     * - minOccurs: 0
     * @var string
     */
    public $CustomLabel;
    /**
     * The SoldOn
     * Meta informations extracted from the WSDL
     * - documentation: The platform on which the item was sold.
     * - minOccurs: 0
     * @var string
     */
    public $SoldOn;
    /**
     * The ListedOn
     * Meta informations extracted from the WSDL
     * - documentation: The platform on which the item was listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ListedOn;
    /**
     * The Shipment
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of tracking information for the shipment.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public $Shipment;
    /**
     * The CharityListing
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as 'true' if the item is listed as a charity item.
     * - minOccurs: 0
     * @var bool
     */
    public $CharityListing;
    /**
     * The Variation
     * Meta informations extracted from the WSDL
     * - documentation: In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color
     * and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the
     * same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process order
     * line items should always check to see if this node is present.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationType
     */
    public $Variation;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in
     * between these two IDs.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSoldTransactionType
     * @uses SellingManagerSoldTransactionType::setInvoiceNumber()
     * @uses SellingManagerSoldTransactionType::setTransactionID()
     * @uses SellingManagerSoldTransactionType::setSaleRecordID()
     * @uses SellingManagerSoldTransactionType::setItemID()
     * @uses SellingManagerSoldTransactionType::setQuantitySold()
     * @uses SellingManagerSoldTransactionType::setItemPrice()
     * @uses SellingManagerSoldTransactionType::setSubtotalAmount()
     * @uses SellingManagerSoldTransactionType::setItemTitle()
     * @uses SellingManagerSoldTransactionType::setListingType()
     * @uses SellingManagerSoldTransactionType::setRelisted()
     * @uses SellingManagerSoldTransactionType::setWatchCount()
     * @uses SellingManagerSoldTransactionType::setStartPrice()
     * @uses SellingManagerSoldTransactionType::setReservePrice()
     * @uses SellingManagerSoldTransactionType::setSecondChanceOfferSent()
     * @uses SellingManagerSoldTransactionType::setCustomLabel()
     * @uses SellingManagerSoldTransactionType::setSoldOn()
     * @uses SellingManagerSoldTransactionType::setListedOn()
     * @uses SellingManagerSoldTransactionType::setShipment()
     * @uses SellingManagerSoldTransactionType::setCharityListing()
     * @uses SellingManagerSoldTransactionType::setVariation()
     * @uses SellingManagerSoldTransactionType::setOrderLineItemID()
     * @uses SellingManagerSoldTransactionType::setAny()
     * @param string $invoiceNumber
     * @param int $transactionID
     * @param int $saleRecordID
     * @param string $itemID
     * @param int $quantitySold
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount
     * @param string $itemTitle
     * @param string $listingType
     * @param bool $relisted
     * @param int $watchCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $reservePrice
     * @param bool $secondChanceOfferSent
     * @param string $customLabel
     * @param string $soldOn
     * @param string[] $listedOn
     * @param \macropage\ebaysdk\trading\StructType\ShipmentType $shipment
     * @param bool $charityListing
     * @param \macropage\ebaysdk\trading\StructType\VariationType $variation
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($invoiceNumber = null, $transactionID = null, $saleRecordID = null, $itemID = null, $quantitySold = null, \macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount = null, $itemTitle = null, $listingType = null, $relisted = null, $watchCount = null, \macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null, $secondChanceOfferSent = null, $customLabel = null, $soldOn = null, array $listedOn = array(), \macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null, $charityListing = null, \macropage\ebaysdk\trading\StructType\VariationType $variation = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setInvoiceNumber($invoiceNumber)
            ->setTransactionID($transactionID)
            ->setSaleRecordID($saleRecordID)
            ->setItemID($itemID)
            ->setQuantitySold($quantitySold)
            ->setItemPrice($itemPrice)
            ->setSubtotalAmount($subtotalAmount)
            ->setItemTitle($itemTitle)
            ->setListingType($listingType)
            ->setRelisted($relisted)
            ->setWatchCount($watchCount)
            ->setStartPrice($startPrice)
            ->setReservePrice($reservePrice)
            ->setSecondChanceOfferSent($secondChanceOfferSent)
            ->setCustomLabel($customLabel)
            ->setSoldOn($soldOn)
            ->setListedOn($listedOn)
            ->setShipment($shipment)
            ->setCharityListing($charityListing)
            ->setVariation($variation)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
    }
    /**
     * Get InvoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !is_numeric($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID()
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSaleRecordID($saleRecordID = null)
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !is_numeric($saleRecordID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !is_numeric($quantitySold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setItemPrice(\macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Get SubtotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSubtotalAmount()
    {
        return $this->SubtotalAmount;
    }
    /**
     * Set SubtotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSubtotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount = null)
    {
        $this->SubtotalAmount = $subtotalAmount;
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setItemTitle($itemTitle = null)
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Relisted value
     * @return bool|null
     */
    public function getRelisted()
    {
        return $this->Relisted;
    }
    /**
     * Set Relisted value
     * @param bool $relisted
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setRelisted($relisted = null)
    {
        // validation for constraint: boolean
        if (!is_null($relisted) && !is_bool($relisted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($relisted)), __LINE__);
        }
        $this->Relisted = $relisted;
        return $this;
    }
    /**
     * Get WatchCount value
     * @return int|null
     */
    public function getWatchCount()
    {
        return $this->WatchCount;
    }
    /**
     * Set WatchCount value
     * @param int $watchCount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setWatchCount($watchCount = null)
    {
        // validation for constraint: int
        if (!is_null($watchCount) && !is_numeric($watchCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($watchCount)), __LINE__);
        }
        $this->WatchCount = $watchCount;
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get ReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getReservePrice()
    {
        return $this->ReservePrice;
    }
    /**
     * Set ReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $reservePrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setReservePrice(\macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null)
    {
        $this->ReservePrice = $reservePrice;
        return $this;
    }
    /**
     * Get SecondChanceOfferSent value
     * @return bool|null
     */
    public function getSecondChanceOfferSent()
    {
        return $this->SecondChanceOfferSent;
    }
    /**
     * Set SecondChanceOfferSent value
     * @param bool $secondChanceOfferSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSecondChanceOfferSent($secondChanceOfferSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceOfferSent) && !is_bool($secondChanceOfferSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($secondChanceOfferSent)), __LINE__);
        }
        $this->SecondChanceOfferSent = $secondChanceOfferSent;
        return $this;
    }
    /**
     * Get CustomLabel value
     * @return string|null
     */
    public function getCustomLabel()
    {
        return $this->CustomLabel;
    }
    /**
     * Set CustomLabel value
     * @param string $customLabel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setCustomLabel($customLabel = null)
    {
        // validation for constraint: string
        if (!is_null($customLabel) && !is_string($customLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customLabel)), __LINE__);
        }
        $this->CustomLabel = $customLabel;
        return $this;
    }
    /**
     * Get SoldOn value
     * @return string|null
     */
    public function getSoldOn()
    {
        return $this->SoldOn;
    }
    /**
     * Set SoldOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soldOn
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSoldOn($soldOn = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($soldOn)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $soldOn, implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->SoldOn = $soldOn;
        return $this;
    }
    /**
     * Get ListedOn value
     * @return string[]|null
     */
    public function getListedOn()
    {
        return $this->ListedOn;
    }
    /**
     * Set ListedOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $listedOn
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setListedOn(array $listedOn = array())
    {
        $invalidValues = array();
        foreach ($listedOn as $sellingManagerSoldTransactionTypeListedOnItem) {
            if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($sellingManagerSoldTransactionTypeListedOnItem)) {
                $invalidValues[] = var_export($sellingManagerSoldTransactionTypeListedOnItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->ListedOn = $listedOn;
        return $this;
    }
    /**
     * Add item to ListedOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function addToListedOn($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->ListedOn[] = $item;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \macropage\ebaysdk\trading\StructType\ShipmentType $shipment
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setShipment(\macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing()
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setCharityListing($charityListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setVariation(\macropage\ebaysdk\trading\StructType\VariationType $variation = null)
    {
        $this->Variation = $variation;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
