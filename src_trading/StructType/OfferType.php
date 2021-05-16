<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information pertaining to an offer made on an item listing and the current bidding or purchase state of the listing.
 * @subpackage Structs
 */
class OfferType extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: Indicates the type of offer being made on the specified listing. If the item is Best Offer-enabled and the buyer makes a Best Offer (or a counter offer), then after the <b>PlaceOffer</b> call, the buyer can get the status of the Best
     * Offer (and a seller-counter-offer, etc.) using the <b>GetBestOffers</b> call. See the <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Feature-BestOffer.html">eBay Features Guide</a> for information about Best
     * Offer-enabled listings and about <b>GetBestOffers</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Three-digit currency code for the currency used for the auction. Valid values can be viewed in the <b>CurrencyCodeType</b> code list.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay listing item listed on the eBay site. Returned by eBay when the item is created. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The MaxBid
     * Meta information extracted from the WSDL
     * - documentation: Amount of the offer placed. For auction listings, the amount bid on the item (subject to outbid by other buyers). For fixed-price listings, the fixed sale price at which the item is purchased. For auction listings with an active Buy
     * It Now option, this amount will be either the Buy It Now price for purchase or the amount of a bid, depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>, the <b>CurrencyID</b> attribute is ignored if provided. Regarding
     * Value-Added Tax (VAT): Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value. If VAT applies to the listing, the seller can specify a VAT percent value when they list the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxBid = null;
    /**
     * The Discounts
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferDiscountsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\OfferDiscountsType $Discounts = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Specifies the quantity of items from the specified listing that the user tendering the offer intends to purchase, bid on, or make a Best Offer on. For auctions, the value is always <b>1 </b>. For multiple-quantity listings, this
     * value must be greater than zero but not exceeding the quantity available for sale in the listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The SecondChanceEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates the user's preference to accept second chance offers. If <code>true</code>, the user is willing to be the recipient of second chance offers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SecondChanceEnabled = null;
    /**
     * The SiteCurrency
     * Meta information extracted from the WSDL
     * - documentation: Unique ID identifying the currency in which the localized offer amounts are expressed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SiteCurrency = null;
    /**
     * The TimeBid
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating the date and time that the bid was placed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeBid = null;
    /**
     * The HighestBid
     * Meta information extracted from the WSDL
     * - documentation: This amount indicates the highest bid that the corresponding bidder has made on the auction item. If that specific bidder has only made one bid on the auction listing, this value will be the same value as in the <b>MaxBid</b> field,
     * but if the bidder has made multiple bids on the auction item, the <b>HighestBid</b> will show the highest of the bidder's bids, but <b>MaxBid</b> will show the value of the corresponding bid.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $HighestBid = null;
    /**
     * The ConvertedPrice
     * Meta information extracted from the WSDL
     * - documentation: Dollar amount of the bid in the user's currency. This field is always returned but its amount will be the same as the value in the <b>MaxBid</b> field, unless currency conversion was actually performed.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedPrice = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the order line item (transaction). An order line item is created when a winning bidder commits to purchasing an item. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code>
     * since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on the user that made the bid. Some information in this container will be masked unless the call is made by the owner of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserType $User = null;
    /**
     * The UserConsent
     * Meta information extracted from the WSDL
     * - documentation: If <code>true</code>, confirms that the bidder read and agrees to eBay's privacy policy. Applies if the subject item is in a category that requires user consent. If user consent, which is confirmation that a bidder read and agrees to
     * eBay's privacy policy, is required for a category that the subject item is in, this value must be <code>true</code> for a bid to occur.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserConsent = null;
    /**
     * The BidCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidCount = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: A message from the buyer to the seller. Applies if the buyer is using <b>PlaceOffer</b> to perform a Best Offer-related action (Best Offer, Counter Offer, etc.).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The BestOfferID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Best Offer on an item. This value must be specified as input to <b>PlaceOffer</b> if a buyer is performing any action against a Best Offer or Counter Offer. | Unique identifier for a Best Offer. This
     * identifier is created once a prospective buyer makes a Best Offer on an item.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BestOfferID = null;
    /**
     * The MyMaxBid
     * Meta information extracted from the WSDL
     * - documentation: The maximum bid placed by the user making the call. This field is only returned if the corresponding bid was made by the user making the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MyMaxBid = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for OfferType
     * @uses OfferType::setAction()
     * @uses OfferType::setCurrency()
     * @uses OfferType::setItemID()
     * @uses OfferType::setMaxBid()
     * @uses OfferType::setDiscounts()
     * @uses OfferType::setQuantity()
     * @uses OfferType::setSecondChanceEnabled()
     * @uses OfferType::setSiteCurrency()
     * @uses OfferType::setTimeBid()
     * @uses OfferType::setHighestBid()
     * @uses OfferType::setConvertedPrice()
     * @uses OfferType::setTransactionID()
     * @uses OfferType::setUser()
     * @uses OfferType::setUserConsent()
     * @uses OfferType::setBidCount()
     * @uses OfferType::setMessage()
     * @uses OfferType::setBestOfferID()
     * @uses OfferType::setMyMaxBid()
     * @uses OfferType::setAny()
     * @param string $action
     * @param string $currency
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @param \macropage\ebaysdk\trading\StructType\OfferDiscountsType $discounts
     * @param int $quantity
     * @param bool $secondChanceEnabled
     * @param string $siteCurrency
     * @param string $timeBid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $highestBid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPrice
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     * @param bool $userConsent
     * @param int $bidCount
     * @param string $message
     * @param string $bestOfferID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $myMaxBid
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $action = null, ?string $currency = null, ?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null, ?\macropage\ebaysdk\trading\StructType\OfferDiscountsType $discounts = null, ?int $quantity = null, ?bool $secondChanceEnabled = null, ?string $siteCurrency = null, ?string $timeBid = null, ?\macropage\ebaysdk\trading\StructType\AmountType $highestBid = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedPrice = null, ?string $transactionID = null, ?\macropage\ebaysdk\trading\StructType\UserType $user = null, ?bool $userConsent = null, ?int $bidCount = null, ?string $message = null, ?string $bestOfferID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $myMaxBid = null, $any = null)
    {
        $this
            ->setAction($action)
            ->setCurrency($currency)
            ->setItemID($itemID)
            ->setMaxBid($maxBid)
            ->setDiscounts($discounts)
            ->setQuantity($quantity)
            ->setSecondChanceEnabled($secondChanceEnabled)
            ->setSiteCurrency($siteCurrency)
            ->setTimeBid($timeBid)
            ->setHighestBid($highestBid)
            ->setConvertedPrice($convertedPrice)
            ->setTransactionID($transactionID)
            ->setUser($user)
            ->setUserConsent($userConsent)
            ->setBidCount($bidCount)
            ->setMessage($message)
            ->setBestOfferID($bestOfferID)
            ->setMyMaxBid($myMaxBid)
            ->setAny($any);
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
     * @uses \macropage\ebaysdk\trading\EnumType\BidActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BidActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BidActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
     * Get MaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxBid;
    }
    /**
     * Set MaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMaxBid(?\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null): self
    {
        $this->MaxBid = $maxBid;
        
        return $this;
    }
    /**
     * Get Discounts value
     * @return \macropage\ebaysdk\trading\StructType\OfferDiscountsType|null
     */
    public function getDiscounts(): ?\macropage\ebaysdk\trading\StructType\OfferDiscountsType
    {
        return $this->Discounts;
    }
    /**
     * Set Discounts value
     * @param \macropage\ebaysdk\trading\StructType\OfferDiscountsType $discounts
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setDiscounts(?\macropage\ebaysdk\trading\StructType\OfferDiscountsType $discounts = null): self
    {
        $this->Discounts = $discounts;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get SecondChanceEnabled value
     * @return bool|null
     */
    public function getSecondChanceEnabled(): ?bool
    {
        return $this->SecondChanceEnabled;
    }
    /**
     * Set SecondChanceEnabled value
     * @param bool $secondChanceEnabled
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setSecondChanceEnabled(?bool $secondChanceEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceEnabled) && !is_bool($secondChanceEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secondChanceEnabled, true), gettype($secondChanceEnabled)), __LINE__);
        }
        $this->SecondChanceEnabled = $secondChanceEnabled;
        
        return $this;
    }
    /**
     * Get SiteCurrency value
     * @return string|null
     */
    public function getSiteCurrency(): ?string
    {
        return $this->SiteCurrency;
    }
    /**
     * Set SiteCurrency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $siteCurrency
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setSiteCurrency(?string $siteCurrency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($siteCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CurrencyCodeType', is_array($siteCurrency) ? implode(', ', $siteCurrency) : var_export($siteCurrency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->SiteCurrency = $siteCurrency;
        
        return $this;
    }
    /**
     * Get TimeBid value
     * @return string|null
     */
    public function getTimeBid(): ?string
    {
        return $this->TimeBid;
    }
    /**
     * Set TimeBid value
     * @param string $timeBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setTimeBid(?string $timeBid = null): self
    {
        // validation for constraint: string
        if (!is_null($timeBid) && !is_string($timeBid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeBid, true), gettype($timeBid)), __LINE__);
        }
        $this->TimeBid = $timeBid;
        
        return $this;
    }
    /**
     * Get HighestBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getHighestBid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->HighestBid;
    }
    /**
     * Set HighestBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $highestBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setHighestBid(?\macropage\ebaysdk\trading\StructType\AmountType $highestBid = null): self
    {
        $this->HighestBid = $highestBid;
        
        return $this;
    }
    /**
     * Get ConvertedPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedPrice;
    }
    /**
     * Set ConvertedPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPrice
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setConvertedPrice(?\macropage\ebaysdk\trading\StructType\AmountType $convertedPrice = null): self
    {
        $this->ConvertedPrice = $convertedPrice;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
     * Get User value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getUser(): ?\macropage\ebaysdk\trading\StructType\UserType
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setUser(?\macropage\ebaysdk\trading\StructType\UserType $user = null): self
    {
        $this->User = $user;
        
        return $this;
    }
    /**
     * Get UserConsent value
     * @return bool|null
     */
    public function getUserConsent(): ?bool
    {
        return $this->UserConsent;
    }
    /**
     * Set UserConsent value
     * @param bool $userConsent
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setUserConsent(?bool $userConsent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userConsent) && !is_bool($userConsent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userConsent, true), gettype($userConsent)), __LINE__);
        }
        $this->UserConsent = $userConsent;
        
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount(): ?int
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setBidCount(?int $bidCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !(is_int($bidCount) || ctype_digit($bidCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCount, true), gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get BestOfferID value
     * @return string|null
     */
    public function getBestOfferID(): ?string
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @param string $bestOfferID
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setBestOfferID(?string $bestOfferID = null): self
    {
        // validation for constraint: string
        if (!is_null($bestOfferID) && !is_string($bestOfferID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bestOfferID, true), gettype($bestOfferID)), __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        
        return $this;
    }
    /**
     * Get MyMaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMyMaxBid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MyMaxBid;
    }
    /**
     * Set MyMaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $myMaxBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMyMaxBid(?\macropage\ebaysdk\trading\StructType\AmountType $myMaxBid = null): self
    {
        $this->MyMaxBid = $myMaxBid;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
