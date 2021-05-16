<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSoldTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a single line item (transaction) in an order created through Selling Manager.
 * @subpackage Structs
 */
class SellingManagerSoldTransactionType extends AbstractStructBase
{
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Seller's customized invoice number.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceNumber = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TransactionID = null;
    /**
     * The SaleRecordID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a Selling Manager sale record. This field is created at the same time as the order line item (transaction). A sale record is displayed in the Sold view in Selling Manager and contains information on the buyer
     * and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     * <br/><br/> For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     * must also be used, passing in a date range that includes the date on which the specific sale occurred.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleRecordID = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: Total number of identical items sold in the order line item.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySold = null;
    /**
     * The ItemPrice
     * Meta information extracted from the WSDL
     * - documentation: Price per item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ItemPrice = null;
    /**
     * The SubtotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is calculated by multplying the <b>ItemPrice</b> value by the <b>QuantitySold</b> value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $SubtotalAmount = null;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the item listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemTitle = null;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: The item listing type.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingType = null;
    /**
     * The Relisted
     * Meta information extracted from the WSDL
     * - documentation: Boolean value indicating whether the item is a relisted item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Relisted = null;
    /**
     * The WatchCount
     * Meta information extracted from the WSDL
     * - documentation: Number of users watching the item.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $WatchCount = null;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: Start price of the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $StartPrice = null;
    /**
     * The ReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Reserve Price of the item (if a Reserve Price was set for the item).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ReservePrice = null;
    /**
     * The SecondChanceOfferSent
     * Meta information extracted from the WSDL
     * - documentation: Boolean value indicating whether or not a Second Chance offer was sent by the seller to an eligible bidder.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SecondChanceOfferSent = null;
    /**
     * The CustomLabel
     * Meta information extracted from the WSDL
     * - documentation: Custom label associated with this order line item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomLabel = null;
    /**
     * The SoldOn
     * Meta information extracted from the WSDL
     * - documentation: The platform on which the item was sold.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SoldOn = null;
    /**
     * The ListedOn
     * Meta information extracted from the WSDL
     * - documentation: The platform on which the item was listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ListedOn = [];
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of tracking information for the shipment.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShipmentType $Shipment = null;
    /**
     * The CharityListing
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as 'true' if the item is listed as a charity item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CharityListing = null;
    /**
     * The Variation
     * Meta information extracted from the WSDL
     * - documentation: In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color
     * and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the
     * same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process order
     * line items should always check to see if this node is present.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VariationType $Variation = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. .
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $invoiceNumber = null, ?int $transactionID = null, ?int $saleRecordID = null, ?string $itemID = null, ?int $quantitySold = null, ?\macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount = null, ?string $itemTitle = null, ?string $listingType = null, ?bool $relisted = null, ?int $watchCount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null, ?bool $secondChanceOfferSent = null, ?string $customLabel = null, ?string $soldOn = null, array $listedOn = [], ?\macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null, ?bool $charityListing = null, ?\macropage\ebaysdk\trading\StructType\VariationType $variation = null, ?string $orderLineItemID = null, $any = null)
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
    public function getInvoiceNumber(): ?string
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int|null
     */
    public function getTransactionID(): ?int
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setTransactionID(?int $transactionID = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get SaleRecordID value
     * @return int|null
     */
    public function getSaleRecordID(): ?int
    {
        return $this->SaleRecordID;
    }
    /**
     * Set SaleRecordID value
     * @param int $saleRecordID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSaleRecordID(?int $saleRecordID = null): self
    {
        // validation for constraint: int
        if (!is_null($saleRecordID) && !(is_int($saleRecordID) || ctype_digit($saleRecordID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleRecordID, true), gettype($saleRecordID)), __LINE__);
        }
        $this->SaleRecordID = $saleRecordID;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold(): ?int
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setQuantitySold(?int $quantitySold = null): self
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getItemPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setItemPrice(?\macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null): self
    {
        $this->ItemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get SubtotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSubtotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->SubtotalAmount;
    }
    /**
     * Set SubtotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSubtotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $subtotalAmount = null): self
    {
        $this->SubtotalAmount = $subtotalAmount;
        
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle(): ?string
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setItemTitle(?string $itemTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType(): ?string
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setListingType(?string $listingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        
        return $this;
    }
    /**
     * Get Relisted value
     * @return bool|null
     */
    public function getRelisted(): ?bool
    {
        return $this->Relisted;
    }
    /**
     * Set Relisted value
     * @param bool $relisted
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setRelisted(?bool $relisted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($relisted) && !is_bool($relisted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($relisted, true), gettype($relisted)), __LINE__);
        }
        $this->Relisted = $relisted;
        
        return $this;
    }
    /**
     * Get WatchCount value
     * @return int|null
     */
    public function getWatchCount(): ?int
    {
        return $this->WatchCount;
    }
    /**
     * Set WatchCount value
     * @param int $watchCount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setWatchCount(?int $watchCount = null): self
    {
        // validation for constraint: int
        if (!is_null($watchCount) && !(is_int($watchCount) || ctype_digit($watchCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($watchCount, true), gettype($watchCount)), __LINE__);
        }
        $this->WatchCount = $watchCount;
        
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setStartPrice(?\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null): self
    {
        $this->StartPrice = $startPrice;
        
        return $this;
    }
    /**
     * Get ReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getReservePrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ReservePrice;
    }
    /**
     * Set ReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $reservePrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setReservePrice(?\macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null): self
    {
        $this->ReservePrice = $reservePrice;
        
        return $this;
    }
    /**
     * Get SecondChanceOfferSent value
     * @return bool|null
     */
    public function getSecondChanceOfferSent(): ?bool
    {
        return $this->SecondChanceOfferSent;
    }
    /**
     * Set SecondChanceOfferSent value
     * @param bool $secondChanceOfferSent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSecondChanceOfferSent(?bool $secondChanceOfferSent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceOfferSent) && !is_bool($secondChanceOfferSent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secondChanceOfferSent, true), gettype($secondChanceOfferSent)), __LINE__);
        }
        $this->SecondChanceOfferSent = $secondChanceOfferSent;
        
        return $this;
    }
    /**
     * Get CustomLabel value
     * @return string|null
     */
    public function getCustomLabel(): ?string
    {
        return $this->CustomLabel;
    }
    /**
     * Set CustomLabel value
     * @param string $customLabel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setCustomLabel(?string $customLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($customLabel) && !is_string($customLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabel, true), gettype($customLabel)), __LINE__);
        }
        $this->CustomLabel = $customLabel;
        
        return $this;
    }
    /**
     * Get SoldOn value
     * @return string|null
     */
    public function getSoldOn(): ?string
    {
        return $this->SoldOn;
    }
    /**
     * Set SoldOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $soldOn
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setSoldOn(?string $soldOn = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($soldOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType', is_array($soldOn) ? implode(', ', $soldOn) : var_export($soldOn, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->SoldOn = $soldOn;
        
        return $this;
    }
    /**
     * Get ListedOn value
     * @return string[]
     */
    public function getListedOn(): array
    {
        return $this->ListedOn;
    }
    /**
     * This method is responsible for validating the values passed to the setListedOn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListedOn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListedOnForArrayConstraintsFromSetListedOn(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerSoldTransactionTypeListedOnItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($sellingManagerSoldTransactionTypeListedOnItem)) {
                $invalidValues[] = is_object($sellingManagerSoldTransactionTypeListedOnItem) ? get_class($sellingManagerSoldTransactionTypeListedOnItem) : sprintf('%s(%s)', gettype($sellingManagerSoldTransactionTypeListedOnItem), var_export($sellingManagerSoldTransactionTypeListedOnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListedOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $listedOn
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setListedOn(array $listedOn = []): self
    {
        // validation for constraint: array
        if ('' !== ($listedOnArrayErrorMessage = self::validateListedOnForArrayConstraintsFromSetListedOn($listedOn))) {
            throw new InvalidArgumentException($listedOnArrayErrorMessage, __LINE__);
        }
        $this->ListedOn = $listedOn;
        
        return $this;
    }
    /**
     * Add item to ListedOn value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function addToListedOn(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->ListedOn[] = $item;
        
        return $this;
    }
    /**
     * Get Shipment value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType|null
     */
    public function getShipment(): ?\macropage\ebaysdk\trading\StructType\ShipmentType
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \macropage\ebaysdk\trading\StructType\ShipmentType $shipment
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setShipment(?\macropage\ebaysdk\trading\StructType\ShipmentType $shipment = null): self
    {
        $this->Shipment = $shipment;
        
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing(): ?bool
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setCharityListing(?bool $charityListing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($charityListing, true), gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
        
        return $this;
    }
    /**
     * Get Variation value
     * @return \macropage\ebaysdk\trading\StructType\VariationType|null
     */
    public function getVariation(): ?\macropage\ebaysdk\trading\StructType\VariationType
    {
        return $this->Variation;
    }
    /**
     * Set Variation value
     * @param \macropage\ebaysdk\trading\StructType\VariationType $variation
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
     */
    public function setVariation(?\macropage\ebaysdk\trading\StructType\VariationType $variation = null): self
    {
        $this->Variation = $variation;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldTransactionType
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
