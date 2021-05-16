<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>FeedbackDetail</b> containers that are returned in the <b>GetFeedback</b> response. Each <b>FeedbackDetail</b> container consists of detailed information on one Feedback entry for a specific order line item. This
 * container will only be returned if uses the <b>DetailLevel</b> field and sets its value to <code>ReturnAll</code>. <br/><br/> <span class="tablenote"><b>Note: </b> Although it is possible for users to retrieve Feedback entries for order line items in
 * which they are not the buyer or seller, some of the fields of the <b>FeedbackDetail</b> container will not be returned or masked. More details on the fields that will not be returned or masked are discussed in this type's individual fields. </span>
 * @subpackage Structs
 */
class FeedbackDetailType extends AbstractStructBase
{
    /**
     * The CommentingUser
     * Meta information extracted from the WSDL
     * - documentation: The eBay User ID of the user who left the Feedback entry. <br/><br/> <span class="tablenote"><b>Note: </b> This field is returned, but masked to users who are not either the buyer or seller of the order line item. </span> | This is a
     * string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some
     * bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but
     * information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentingUser = null;
    /**
     * The FeedbackRatingStar
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating
     * Stars, and the Feedback score ranges associated with those stars.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackRatingStar = null;
    /**
     * The CommentingUserScore
     * Meta information extracted from the WSDL
     * - documentation: This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CommentingUserScore = null;
    /**
     * The CommentText
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified in the <b>CommentType</b> field.
     * <br><br> The comment is returned as text in the language that the comment was originally left in. This comment will still be displayed even if a submitted Feedback entry is withdrawn.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentText = null;
    /**
     * The CommentTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp (in GMT) indicates the date/time that the Feedback entry was submitted to eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentTime = null;
    /**
     * The CommentType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field. <br><br> A <b>Positive</b> rating increases a user's Feedback score, a <b>Negative</b> rating decreases a user's Feedback
     * score, and a <b>Neutral</b> rating does not affect a user's Feedback score. <br><br> Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentType = null;
    /**
     * The FeedbackResponse
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackResponse = null;
    /**
     * The Followup
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the explanation that a user can give to a response. Follow-ups to Feedback comments cannot be submitted or edited via the API.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Followup = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing associated with the Feedback entry. <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are
     * not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship
     * (as a buyer or seller) to the Feedback entry. </span> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the recipient of the Feedback entry is the buyer or the seller for the corresponding order line item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Role = null;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the item listing for which Feedback was provided. The title is returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For
     * Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemTitle = null;
    /**
     * The ItemPrice
     * Meta information extracted from the WSDL
     * - documentation: The purchase price for the item that was associated with the Feedback entry. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For Feedback entries that
     * were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ItemPrice = null;
    /**
     * The FeedbackID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the Feedback entry.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item for which the Feedback entry was left. This field is not returned if the Feedback entry was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
     * <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be
     * displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The CommentReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the Feedback comment with a message that the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CommentReplaced = null;
    /**
     * The ResponseReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the response to the Feedback comment with a message that the response to the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ResponseReplaced = null;
    /**
     * The FollowUpReplaced
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not eBay replaced the follow-up to the Feedback comment with a message that the follow-up to the Feedback comment was removed.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FollowUpReplaced = null;
    /**
     * The Countable
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score. Only Feedback left by verified users can count toward the aggregate score of another user. If a unverified user leaves a Feedback
     * entry, then later becomes verified, that Feedback entry will still have no affect on the recipient user's Feedback score. Or, if a user is verified and at some later date changes to unverified status, the Feedback entry left while the user was
     * verified remains in effect.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Countable = null;
    /**
     * The FeedbackRevised
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not a Feedback entry was revised (rating was changed).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FeedbackRevised = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for an eBay order line item. For Feedback entries that were left for the buyer by the seller, an <b>OrderLineItemID</b> value will not be returned to a user that was not involved in the transaction as either the
     * buyer or seller. <br/><br/> <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as
     * '11111111-0' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry. </span>
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
     * Constructor method for FeedbackDetailType
     * @uses FeedbackDetailType::setCommentingUser()
     * @uses FeedbackDetailType::setFeedbackRatingStar()
     * @uses FeedbackDetailType::setCommentingUserScore()
     * @uses FeedbackDetailType::setCommentText()
     * @uses FeedbackDetailType::setCommentTime()
     * @uses FeedbackDetailType::setCommentType()
     * @uses FeedbackDetailType::setFeedbackResponse()
     * @uses FeedbackDetailType::setFollowup()
     * @uses FeedbackDetailType::setItemID()
     * @uses FeedbackDetailType::setRole()
     * @uses FeedbackDetailType::setItemTitle()
     * @uses FeedbackDetailType::setItemPrice()
     * @uses FeedbackDetailType::setFeedbackID()
     * @uses FeedbackDetailType::setTransactionID()
     * @uses FeedbackDetailType::setCommentReplaced()
     * @uses FeedbackDetailType::setResponseReplaced()
     * @uses FeedbackDetailType::setFollowUpReplaced()
     * @uses FeedbackDetailType::setCountable()
     * @uses FeedbackDetailType::setFeedbackRevised()
     * @uses FeedbackDetailType::setOrderLineItemID()
     * @uses FeedbackDetailType::setAny()
     * @param string $commentingUser
     * @param string $feedbackRatingStar
     * @param int $commentingUserScore
     * @param string $commentText
     * @param string $commentTime
     * @param string $commentType
     * @param string $feedbackResponse
     * @param string $followup
     * @param string $itemID
     * @param string $role
     * @param string $itemTitle
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemPrice
     * @param string $feedbackID
     * @param string $transactionID
     * @param bool $commentReplaced
     * @param bool $responseReplaced
     * @param bool $followUpReplaced
     * @param bool $countable
     * @param bool $feedbackRevised
     * @param string $orderLineItemID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $commentingUser = null, ?string $feedbackRatingStar = null, ?int $commentingUserScore = null, ?string $commentText = null, ?string $commentTime = null, ?string $commentType = null, ?string $feedbackResponse = null, ?string $followup = null, ?string $itemID = null, ?string $role = null, ?string $itemTitle = null, ?\macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null, ?string $feedbackID = null, ?string $transactionID = null, ?bool $commentReplaced = null, ?bool $responseReplaced = null, ?bool $followUpReplaced = null, ?bool $countable = null, ?bool $feedbackRevised = null, ?string $orderLineItemID = null, $any = null)
    {
        $this
            ->setCommentingUser($commentingUser)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setCommentingUserScore($commentingUserScore)
            ->setCommentText($commentText)
            ->setCommentTime($commentTime)
            ->setCommentType($commentType)
            ->setFeedbackResponse($feedbackResponse)
            ->setFollowup($followup)
            ->setItemID($itemID)
            ->setRole($role)
            ->setItemTitle($itemTitle)
            ->setItemPrice($itemPrice)
            ->setFeedbackID($feedbackID)
            ->setTransactionID($transactionID)
            ->setCommentReplaced($commentReplaced)
            ->setResponseReplaced($responseReplaced)
            ->setFollowUpReplaced($followUpReplaced)
            ->setCountable($countable)
            ->setFeedbackRevised($feedbackRevised)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
    }
    /**
     * Get CommentingUser value
     * @return string|null
     */
    public function getCommentingUser(): ?string
    {
        return $this->CommentingUser;
    }
    /**
     * Set CommentingUser value
     * @param string $commentingUser
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentingUser(?string $commentingUser = null): self
    {
        // validation for constraint: string
        if (!is_null($commentingUser) && !is_string($commentingUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentingUser, true), gettype($commentingUser)), __LINE__);
        }
        $this->CommentingUser = $commentingUser;
        
        return $this;
    }
    /**
     * Get FeedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar(): ?string
    {
        return $this->FeedbackRatingStar;
    }
    /**
     * Set FeedbackRatingStar value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFeedbackRatingStar(?string $feedbackRatingStar = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType', is_array($feedbackRatingStar) ? implode(', ', $feedbackRatingStar) : var_export($feedbackRatingStar, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        
        return $this;
    }
    /**
     * Get CommentingUserScore value
     * @return int|null
     */
    public function getCommentingUserScore(): ?int
    {
        return $this->CommentingUserScore;
    }
    /**
     * Set CommentingUserScore value
     * @param int $commentingUserScore
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentingUserScore(?int $commentingUserScore = null): self
    {
        // validation for constraint: int
        if (!is_null($commentingUserScore) && !(is_int($commentingUserScore) || ctype_digit($commentingUserScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentingUserScore, true), gettype($commentingUserScore)), __LINE__);
        }
        $this->CommentingUserScore = $commentingUserScore;
        
        return $this;
    }
    /**
     * Get CommentText value
     * @return string|null
     */
    public function getCommentText(): ?string
    {
        return $this->CommentText;
    }
    /**
     * Set CommentText value
     * @param string $commentText
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentText(?string $commentText = null): self
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->CommentText = $commentText;
        
        return $this;
    }
    /**
     * Get CommentTime value
     * @return string|null
     */
    public function getCommentTime(): ?string
    {
        return $this->CommentTime;
    }
    /**
     * Set CommentTime value
     * @param string $commentTime
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentTime(?string $commentTime = null): self
    {
        // validation for constraint: string
        if (!is_null($commentTime) && !is_string($commentTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentTime, true), gettype($commentTime)), __LINE__);
        }
        $this->CommentTime = $commentTime;
        
        return $this;
    }
    /**
     * Get CommentType value
     * @return string|null
     */
    public function getCommentType(): ?string
    {
        return $this->CommentType;
    }
    /**
     * Set CommentType value
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $commentType
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentType(?string $commentType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid($commentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType', is_array($commentType) ? implode(', ', $commentType) : var_export($commentType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->CommentType = $commentType;
        
        return $this;
    }
    /**
     * Get FeedbackResponse value
     * @return string|null
     */
    public function getFeedbackResponse(): ?string
    {
        return $this->FeedbackResponse;
    }
    /**
     * Set FeedbackResponse value
     * @param string $feedbackResponse
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFeedbackResponse(?string $feedbackResponse = null): self
    {
        // validation for constraint: string
        if (!is_null($feedbackResponse) && !is_string($feedbackResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedbackResponse, true), gettype($feedbackResponse)), __LINE__);
        }
        $this->FeedbackResponse = $feedbackResponse;
        
        return $this;
    }
    /**
     * Get Followup value
     * @return string|null
     */
    public function getFollowup(): ?string
    {
        return $this->Followup;
    }
    /**
     * Set Followup value
     * @param string $followup
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFollowup(?string $followup = null): self
    {
        // validation for constraint: string
        if (!is_null($followup) && !is_string($followup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($followup, true), gettype($followup)), __LINE__);
        }
        $this->Followup = $followup;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
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
     * Get Role value
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $role
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setItemPrice(?\macropage\ebaysdk\trading\StructType\AmountType $itemPrice = null): self
    {
        $this->ItemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get FeedbackID value
     * @return string|null
     */
    public function getFeedbackID(): ?string
    {
        return $this->FeedbackID;
    }
    /**
     * Set FeedbackID value
     * @param string $feedbackID
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFeedbackID(?string $feedbackID = null): self
    {
        // validation for constraint: string
        if (!is_null($feedbackID) && !is_string($feedbackID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedbackID, true), gettype($feedbackID)), __LINE__);
        }
        $this->FeedbackID = $feedbackID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
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
     * Get CommentReplaced value
     * @return bool|null
     */
    public function getCommentReplaced(): ?bool
    {
        return $this->CommentReplaced;
    }
    /**
     * Set CommentReplaced value
     * @param bool $commentReplaced
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCommentReplaced(?bool $commentReplaced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commentReplaced) && !is_bool($commentReplaced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentReplaced, true), gettype($commentReplaced)), __LINE__);
        }
        $this->CommentReplaced = $commentReplaced;
        
        return $this;
    }
    /**
     * Get ResponseReplaced value
     * @return bool|null
     */
    public function getResponseReplaced(): ?bool
    {
        return $this->ResponseReplaced;
    }
    /**
     * Set ResponseReplaced value
     * @param bool $responseReplaced
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setResponseReplaced(?bool $responseReplaced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($responseReplaced) && !is_bool($responseReplaced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($responseReplaced, true), gettype($responseReplaced)), __LINE__);
        }
        $this->ResponseReplaced = $responseReplaced;
        
        return $this;
    }
    /**
     * Get FollowUpReplaced value
     * @return bool|null
     */
    public function getFollowUpReplaced(): ?bool
    {
        return $this->FollowUpReplaced;
    }
    /**
     * Set FollowUpReplaced value
     * @param bool $followUpReplaced
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFollowUpReplaced(?bool $followUpReplaced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($followUpReplaced) && !is_bool($followUpReplaced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($followUpReplaced, true), gettype($followUpReplaced)), __LINE__);
        }
        $this->FollowUpReplaced = $followUpReplaced;
        
        return $this;
    }
    /**
     * Get Countable value
     * @return bool|null
     */
    public function getCountable(): ?bool
    {
        return $this->Countable;
    }
    /**
     * Set Countable value
     * @param bool $countable
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setCountable(?bool $countable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($countable) && !is_bool($countable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($countable, true), gettype($countable)), __LINE__);
        }
        $this->Countable = $countable;
        
        return $this;
    }
    /**
     * Get FeedbackRevised value
     * @return bool|null
     */
    public function getFeedbackRevised(): ?bool
    {
        return $this->FeedbackRevised;
    }
    /**
     * Set FeedbackRevised value
     * @param bool $feedbackRevised
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
     */
    public function setFeedbackRevised(?bool $feedbackRevised = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feedbackRevised) && !is_bool($feedbackRevised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedbackRevised, true), gettype($feedbackRevised)), __LINE__);
        }
        $this->FeedbackRevised = $feedbackRevised;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType
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
