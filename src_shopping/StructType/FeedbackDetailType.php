<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>FeedbackDetails</b> containers that are returned in the <b>GetUserProfile</b> response. Each <b>FeedbackDetails</b> container consists of detailed information on one Feedback entry for the specified eBay user.
 * <b>FeedbackDetails</b> containers are only returned if an <b>IncludeSelector</b> field is included in the request with a value set to <code>FeedbackDetails</code>.
 * @subpackage Structs
 */
class FeedbackDetailType extends AbstractStructBase
{
    /**
     * The FeedbackRatingStar
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value provides the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback
     * Rating Stars, and the Feedback score ranges associated with those stars.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackRatingStar = null;
    /**
     * The CommentingUser
     * Meta information extracted from the WSDL
     * - documentation: The eBay User ID of the user who left the Feedback entry.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentingUser = null;
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
     * - documentation: This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field. <br><br> A <b>Positive</b> rating increases a user's Feedback score by a value of 1, a <b>Negative</b> rating decreases a
     * user's Feedback score by a value of 1, and a <b>Neutral</b> rating does not affect a user's Feedback score. <br><br> Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentType = null;
    /**
     * The FeedbackResponse
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag
     * if no response to the Feedback entry has been submitted.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackResponse = null;
    /**
     * The FollowUp
     * Meta information extracted from the WSDL
     * - documentation: This free-form text is the explanation that a user can give to a submitted Feedback response. Follow-ups to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no Follow-Up to the
     * Feedback response has been submitted.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FollowUp = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing associated with the Feedback entry. For Feedback entries that were left for the buyer by the seller, an <b>ItemID</b> value will not be returned to a user that was not involved in the transaction
     * as either the buyer or seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether the specified eBay user (and recipient of the Feedback entry) was the buyer or the seller for the corresponding order line item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Role = null;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the listing for which Feedback was provided. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will
     * not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemTitle = null;
    /**
     * The ItemPrice
     * Meta information extracted from the WSDL
     * - documentation: The purchase price for the order line item associated with the Feedback entry. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an
     * <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $ItemPrice = null;
    /**
     * The FeedbackID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the Feedback entry. This identifier is auto-generated by eBay at the time of Feedback submittal.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the order line item for which the Feedback entry was left. The value of this field is always '0' for auction listings since auctions only have one winner/buyer, and only the <b>ItemID</b> value is needed to
     * identify the transaction. For Feedback entries that were left for the buyer by the seller, a <b>TransactionID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * - documentation: This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Countable = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FeedbackDetailType
     * @uses FeedbackDetailType::setFeedbackRatingStar()
     * @uses FeedbackDetailType::setCommentingUser()
     * @uses FeedbackDetailType::setCommentingUserScore()
     * @uses FeedbackDetailType::setCommentText()
     * @uses FeedbackDetailType::setCommentTime()
     * @uses FeedbackDetailType::setCommentType()
     * @uses FeedbackDetailType::setFeedbackResponse()
     * @uses FeedbackDetailType::setFollowUp()
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
     * @uses FeedbackDetailType::setAny()
     * @param string $feedbackRatingStar
     * @param string $commentingUser
     * @param int $commentingUserScore
     * @param string $commentText
     * @param string $commentTime
     * @param string $commentType
     * @param string $feedbackResponse
     * @param string $followUp
     * @param string $itemID
     * @param string $role
     * @param string $itemTitle
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $itemPrice
     * @param string $feedbackID
     * @param string $transactionID
     * @param bool $commentReplaced
     * @param bool $responseReplaced
     * @param bool $followUpReplaced
     * @param bool $countable
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $feedbackRatingStar = null, ?string $commentingUser = null, ?int $commentingUserScore = null, ?string $commentText = null, ?string $commentTime = null, ?string $commentType = null, ?string $feedbackResponse = null, ?string $followUp = null, ?string $itemID = null, ?string $role = null, ?string $itemTitle = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $itemPrice = null, ?string $feedbackID = null, ?string $transactionID = null, ?bool $commentReplaced = null, ?bool $responseReplaced = null, ?bool $followUpReplaced = null, ?bool $countable = null, $any = null)
    {
        $this
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setCommentingUser($commentingUser)
            ->setCommentingUserScore($commentingUserScore)
            ->setCommentText($commentText)
            ->setCommentTime($commentTime)
            ->setCommentType($commentType)
            ->setFeedbackResponse($feedbackResponse)
            ->setFollowUp($followUp)
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
            ->setAny($any);
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
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
     */
    public function setFeedbackRatingStar(?string $feedbackRatingStar = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType', is_array($feedbackRatingStar) ? implode(', ', $feedbackRatingStar) : var_export($feedbackRatingStar, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @uses \macropage\ebaysdk\shopping\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CommentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $commentType
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
     */
    public function setCommentType(?string $commentType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CommentTypeCodeType::valueIsValid($commentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\CommentTypeCodeType', is_array($commentType) ? implode(', ', $commentType) : var_export($commentType, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * Get FollowUp value
     * @return string|null
     */
    public function getFollowUp(): ?string
    {
        return $this->FollowUp;
    }
    /**
     * Set FollowUp value
     * @param string $followUp
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
     */
    public function setFollowUp(?string $followUp = null): self
    {
        // validation for constraint: string
        if (!is_null($followUp) && !is_string($followUp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($followUp, true), gettype($followUp)), __LINE__);
        }
        $this->FollowUp = $followUp;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @uses \macropage\ebaysdk\shopping\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\TradingRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $role
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\TradingRoleCodeType', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getItemPrice(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $itemPrice
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
     */
    public function setItemPrice(?\macropage\ebaysdk\shopping\StructType\AmountType $itemPrice = null): self
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType
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
