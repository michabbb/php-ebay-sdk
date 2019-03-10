<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddSecondChanceItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Simulates the creation of a new Second Chance Offer listing of an item without actually creating a listing.
 * @subpackage Structs
 */
class VerifyAddSecondChanceItemRequestType extends AbstractRequestType
{
    /**
     * The RecipientBidderUserID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the bidder from the original, ended listing to whom the seller is extending the second chance offer. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     * <b>RecipientBidderUserID</b> node), only the last one specified receives the offer. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientBidderUserID;
    /**
     * The BuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount the offer recipient must pay to purchase the item from the Second Chance Offer listing. Use only when the original item was an eBay Motors (or in some categories on U.S. and international sites for high-priced
     * items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Call fails with an error for any other item conditions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BuyItNowPrice;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the length of time the Second Chance Offer listing will be active. The recipient bidder has that much time to purchase the item or the listing expires.
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the item ID for the original, ended listing from which the second chance offer item comes. A new <b>ItemID</b> is returned for the Second Chance Offer item. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The SellerMessage
     * Meta informations extracted from the WSDL
     * - documentation: Message content. Cannot contain HTML, asterisks, or quotes. This content is included in the Second Chance Offer email sent to the recipient, which can be retrieved with <b>GetMyMessages</b>.
     * - minOccurs: 0
     * @var string
     */
    public $SellerMessage;
    /**
     * Constructor method for VerifyAddSecondChanceItemRequestType
     * @uses VerifyAddSecondChanceItemRequestType::setRecipientBidderUserID()
     * @uses VerifyAddSecondChanceItemRequestType::setBuyItNowPrice()
     * @uses VerifyAddSecondChanceItemRequestType::setDuration()
     * @uses VerifyAddSecondChanceItemRequestType::setItemID()
     * @uses VerifyAddSecondChanceItemRequestType::setSellerMessage()
     * @param string $recipientBidderUserID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @param string $duration
     * @param string $itemID
     * @param string $sellerMessage
     */
    public function __construct($recipientBidderUserID = null, \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null, $duration = null, $itemID = null, $sellerMessage = null)
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
    public function getRecipientBidderUserID()
    {
        return $this->RecipientBidderUserID;
    }
    /**
     * Set RecipientBidderUserID value
     * @param string $recipientBidderUserID
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setRecipientBidderUserID($recipientBidderUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientBidderUserID) && !is_string($recipientBidderUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientBidderUserID)), __LINE__);
        }
        $this->RecipientBidderUserID = $recipientBidderUserID;
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBuyItNowPrice()
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setBuyItNowPrice(\macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null)
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $duration
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $duration, implode(', ', \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
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
     * Get SellerMessage value
     * @return string|null
     */
    public function getSellerMessage()
    {
        return $this->SellerMessage;
    }
    /**
     * Set SellerMessage value
     * @param string $sellerMessage
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
     */
    public function setSellerMessage($sellerMessage = null)
    {
        // validation for constraint: string
        if (!is_null($sellerMessage) && !is_string($sellerMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerMessage)), __LINE__);
        }
        $this->SellerMessage = $sellerMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemRequestType
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
