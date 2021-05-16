<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSecondChanceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Used by the seller of an auction listing to provide a Second Chance Offer to one of that auction item's non-winning bidders. A Second Chance Offer is used by sellers whenever the seller was unable to complete the sale with the
 * winning bidder because the bidder didn't pay, or if the auction listing ended without the Reserve Price being met, or if that seller has multiple identical items for sale and wants to give other bidders a chance to purchase the item. <br> <br> To get
 * information on the bidders for a recently-ended auction listing, the seller can use the <b>GetAllBidders</b> call and pass the corresponding <b>ItemID</b> value into the call request. <br> <br> For more information on the specifics of Second Chance
 * Offers, see the <a href="https://pages.ebay.com/help/sell/second_chance_offer.html" target="_blank">Making a Second Chance Offer</a> help page.
 * @subpackage Structs
 */
class AddSecondChanceItemRequestType extends AbstractRequestType
{
    /**
     * The RecipientBidderUserID
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the bidder that is being offered the Second Chance Offer. The eBay User ID of the bidder is used in this field. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified,
     * only the last one specified receives the offer. User ID values will be returned in the <b>Offer.User.UserID</b> field of the <b>GetAllBidders</b> call response. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used
     * by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller
     * makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as
     * anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecipientBidderUserID = null;
    /**
     * The BuyItNowPrice
     * Meta information extracted from the WSDL
     * - documentation: The amount the offer recipient must pay to purchase the item as a Second Chance Offer. This field should only be used when the original item was listed in an eBay Motors vehicle category (or in some categories on U.S. and
     * international sites for high-priced items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Otherwise, eBay establishes the price and no price should be submitted.
     * The price offered to the Second Chance Offer recipient is generally the highest bid that the user made on the original listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $BuyItNowPrice = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the length of time (in days) that the Second Chance Offer will be available to the recipient. Upon receiving the Second Chance Offer, the recipient bidder will have this many days to accept the offer
     * before the offer expires. One of the values in <b>SecondChanceOfferDurationCodeType</b> must be used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Duration = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is used to identify the original auction listing through its unique identifier (Item ID). Upon a successful call, the Second Chance Offer will be identified by a new <b>ItemID</b> in the response. | Type that represents
     * the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The SellerMessage
     * Meta information extracted from the WSDL
     * - documentation: This optional field is used to provide a message to the recipient of the Second Chance Offer. This message cannot contain HTML, asterisks, or quotes. The content in this field will be included in the Second Chance Offer email that is
     * sent to the recipient.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerMessage = null;
    /**
     * Constructor method for AddSecondChanceItemRequestType
     * @uses AddSecondChanceItemRequestType::setRecipientBidderUserID()
     * @uses AddSecondChanceItemRequestType::setBuyItNowPrice()
     * @uses AddSecondChanceItemRequestType::setDuration()
     * @uses AddSecondChanceItemRequestType::setItemID()
     * @uses AddSecondChanceItemRequestType::setSellerMessage()
     * @param string $recipientBidderUserID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @param string $duration
     * @param string $itemID
     * @param string $sellerMessage
     */
    public function __construct(?string $recipientBidderUserID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null, ?string $duration = null, ?string $itemID = null, ?string $sellerMessage = null)
    {
        $this
            ->setRecipientBidderUserID($recipientBidderUserID)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setDuration($duration)
            ->setItemID($itemID)
            ->setSellerMessage($sellerMessage);
    }
    /**
     * Get RecipientBidderUserID value
     * @return string|null
     */
    public function getRecipientBidderUserID(): ?string
    {
        return $this->RecipientBidderUserID;
    }
    /**
     * Set RecipientBidderUserID value
     * @param string $recipientBidderUserID
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType
     */
    public function setRecipientBidderUserID(?string $recipientBidderUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientBidderUserID) && !is_string($recipientBidderUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientBidderUserID, true), gettype($recipientBidderUserID)), __LINE__);
        }
        $this->RecipientBidderUserID = $recipientBidderUserID;
        
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBuyItNowPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType
     */
    public function setBuyItNowPrice(?\macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null): self
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $duration
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType
     */
    public function setDuration(?string $duration = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType', is_array($duration) ? implode(', ', $duration) : var_export($duration, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType
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
     * Get SellerMessage value
     * @return string|null
     */
    public function getSellerMessage(): ?string
    {
        return $this->SellerMessage;
    }
    /**
     * Set SellerMessage value
     * @param string $sellerMessage
     * @return \macropage\ebaysdk\trading\StructType\AddSecondChanceItemRequestType
     */
    public function setSellerMessage(?string $sellerMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerMessage) && !is_string($sellerMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerMessage, true), gettype($sellerMessage)), __LINE__);
        }
        $this->SellerMessage = $sellerMessage;
        
        return $this;
    }
}
