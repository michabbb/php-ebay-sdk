<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information pertaining to an offer made on an item listing and the current bidding or purchase state of the listing.
 * @subpackage Structs
 */
class OfferType extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of offer being made on the specified listing. If the item is Best Offer-enabled and the buyer makes a Best Offer (or a counter offer), then after the <b>PlaceOffer</b> call, the buyer can get the status of the Best
     * Offer (and of a possible seller-counter-offer, etc.) using the <b>GetBestOffers</b> call. See the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Feature-BestOffer.html">eBay Features Guide</a> for information about Best
     * Offer-enabled listings and about <b>GetBestOffers</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Three-digit currency code for the currency used for the auction. Valid values can be viewed in the <b>CurrencyCodeType</b> code list.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an item listed on the eBay site. Returned by eBay when the item is created. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The MaxBid
     * Meta informations extracted from the WSDL
     * - documentation: Amount of the offer placed. For auction listings, the amount bid on the item (subject to outbid by other buyers). For fixed-price listings, the fixed sale price at which the item is purchased. For auction listings with an active Buy
     * It Now option, this amount will be either the Buy It Now price for purchase or the amount of a bid, depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>, the <b>CurrencyID</b> attribute is ignored if provided. Regarding
     * Value-Added Tax (VAT): Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value. If VAT applies to the listing, the seller can specify a VAT percent value when they list the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxBid;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the quantity of items from the specified listing that the user tendering the offer intends to purchase, bid on, or make a Best Offer on. For auctions, the value is always <b>1. For multiple-quantity listings, this value
     * must be greater than zero but not exceeding the quantity available for sale in the listing.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The SecondChanceEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the user's preference to accept second chance offers. If <code>true</code>, the user is willing to be the recipient of second chance offers.
     * - minOccurs: 0
     * @var bool
     */
    public $SecondChanceEnabled;
    /**
     * The SiteCurrency
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID identifying the currency in which the localized offer amounts are expressed.
     * - minOccurs: 0
     * @var string
     */
    public $SiteCurrency;
    /**
     * The TimeBid
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating the date and time that the bid was placed.
     * - minOccurs: 0
     * @var string
     */
    public $TimeBid;
    /**
     * The HighestBid
     * Meta informations extracted from the WSDL
     * - documentation: This amount indicates the highest bid that the corresponding bidder has made on the auction item. If that specific bidder has only made one bid on the auction listing, this value will be the same value as in the <b>MaxBid</b> field,
     * but if the bidder has made multiple bids on the auction item, the <b>HighestBid</b> will show the highest of the bidder's bids, but <b>MaxBid</b> will show the value of the corresponding bid.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $HighestBid;
    /**
     * The ConvertedPrice
     * Meta informations extracted from the WSDL
     * - documentation: Dollar amount of the bid in the user's currency. This field is always returned but its amount will be the same as the value in the <b>MaxBid</b> field, unless currency conversion was actually performed.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedPrice;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the order line item (transaction). An order line item is created when a winning bidder commits to purchasing an item.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information on the user that made the bid. Some information in this container will be masked unless the call is made by the owner of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $User;
    /**
     * The UserConsent
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, confirms that the bidder read and agrees to eBay's privacy policy. Applies if the subject item is in a category that requires user consent. If user consent, which is confirmation that a bidder read and agrees to
     * eBay's privacy policy, is required for a category that the subject item is in, this value must be <code>true</code> for a bid to occur.
     * - minOccurs: 0
     * @var bool
     */
    public $UserConsent;
    /**
     * The BidCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: A message from the buyer to the seller. Applies if the buyer is using <b>PlaceOffer</b> to perform a Best Offer-related action (Best Offer, Counter Offer, etc.).
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The BestOfferID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Best Offer on an item. This value must be specified as input to <b>PlaceOffer</b> if a buyer is performing any action against a Best Offer or Counter Offer. | Unique identifier for a Best Offer. This
     * identifier is created once a prospective buyer makes a Best Offer on an item.
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferID;
    /**
     * The MyMaxBid
     * Meta informations extracted from the WSDL
     * - documentation: The maximum bid placed by the user making the call. This field is only returned if the corresponding bid was made by the user making the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MyMaxBid;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OfferType
     * @uses OfferType::setAction()
     * @uses OfferType::setCurrency()
     * @uses OfferType::setItemID()
     * @uses OfferType::setMaxBid()
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
     * @param \DOMDocument $any
     */
    public function __construct($action = null, $currency = null, $itemID = null, \macropage\ebaysdk\trading\StructType\AmountType $maxBid = null, $quantity = null, $secondChanceEnabled = null, $siteCurrency = null, $timeBid = null, \macropage\ebaysdk\trading\StructType\AmountType $highestBid = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedPrice = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\UserType $user = null, $userConsent = null, $bidCount = null, $message = null, $bestOfferID = null, \macropage\ebaysdk\trading\StructType\AmountType $myMaxBid = null, \DOMDocument $any = null)
    {
        $this
            ->setAction($action)
            ->setCurrency($currency)
            ->setItemID($itemID)
            ->setMaxBid($maxBid)
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
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\BidActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \macropage\ebaysdk\trading\EnumType\BidActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
     * Get MaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBid()
    {
        return $this->MaxBid;
    }
    /**
     * Set MaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMaxBid(\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null)
    {
        $this->MaxBid = $maxBid;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get SecondChanceEnabled value
     * @return bool|null
     */
    public function getSecondChanceEnabled()
    {
        return $this->SecondChanceEnabled;
    }
    /**
     * Set SecondChanceEnabled value
     * @param bool $secondChanceEnabled
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setSecondChanceEnabled($secondChanceEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceEnabled) && !is_bool($secondChanceEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($secondChanceEnabled)), __LINE__);
        }
        $this->SecondChanceEnabled = $secondChanceEnabled;
        return $this;
    }
    /**
     * Get SiteCurrency value
     * @return string|null
     */
    public function getSiteCurrency()
    {
        return $this->SiteCurrency;
    }
    /**
     * Set SiteCurrency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteCurrency
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setSiteCurrency($siteCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($siteCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $siteCurrency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->SiteCurrency = $siteCurrency;
        return $this;
    }
    /**
     * Get TimeBid value
     * @return string|null
     */
    public function getTimeBid()
    {
        return $this->TimeBid;
    }
    /**
     * Set TimeBid value
     * @param string $timeBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setTimeBid($timeBid = null)
    {
        // validation for constraint: string
        if (!is_null($timeBid) && !is_string($timeBid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeBid)), __LINE__);
        }
        $this->TimeBid = $timeBid;
        return $this;
    }
    /**
     * Get HighestBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getHighestBid()
    {
        return $this->HighestBid;
    }
    /**
     * Set HighestBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $highestBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setHighestBid(\macropage\ebaysdk\trading\StructType\AmountType $highestBid = null)
    {
        $this->HighestBid = $highestBid;
        return $this;
    }
    /**
     * Get ConvertedPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedPrice()
    {
        return $this->ConvertedPrice;
    }
    /**
     * Set ConvertedPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPrice
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setConvertedPrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedPrice = null)
    {
        $this->ConvertedPrice = $convertedPrice;
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
     * Get User value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setUser(\macropage\ebaysdk\trading\StructType\UserType $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Get UserConsent value
     * @return bool|null
     */
    public function getUserConsent()
    {
        return $this->UserConsent;
    }
    /**
     * Set UserConsent value
     * @param bool $userConsent
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setUserConsent($userConsent = null)
    {
        // validation for constraint: boolean
        if (!is_null($userConsent) && !is_bool($userConsent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userConsent)), __LINE__);
        }
        $this->UserConsent = $userConsent;
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !is_numeric($bidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get BestOfferID value
     * @return string|null
     */
    public function getBestOfferID()
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @param string $bestOfferID
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setBestOfferID($bestOfferID = null)
    {
        // validation for constraint: string
        if (!is_null($bestOfferID) && !is_string($bestOfferID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bestOfferID)), __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        return $this;
    }
    /**
     * Get MyMaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMyMaxBid()
    {
        return $this->MyMaxBid;
    }
    /**
     * Set MyMaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $myMaxBid
     * @return \macropage\ebaysdk\trading\StructType\OfferType
     */
    public function setMyMaxBid(\macropage\ebaysdk\trading\StructType\AmountType $myMaxBid = null)
    {
        $this->MyMaxBid = $myMaxBid;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\OfferType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
     * @return \macropage\ebaysdk\trading\StructType\OfferType
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
