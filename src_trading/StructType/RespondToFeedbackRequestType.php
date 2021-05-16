<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToFeedbackRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to reply to Feedback that has been left for a user, or to post a follow-up comment to a Feedback comment the user has left for someone else.
 * @subpackage Structs
 */
class RespondToFeedbackRequestType extends AbstractRequestType
{
    /**
     * The FeedbackID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a Feedback record. Buying and selling partners leave feedback for one another after the completion of an order. Feedback is left at the order line item level, so a Feedback comment for each order line item in
     * a Combined Payment order is expected from the buyer and seller. A unique <b>FeedbackID</b> is created whenever a buyer leaves feedback for a seller, and vice versa. A <b>FeedbackID</b> is created by eBay when feedback is left through the eBay site,
     * or through the <b>LeaveFeedback</b> call. <b>FeedbackIDs</b> can be retrieved with the <b>GetFeedback</b> call. In the <b>RespondToFeedback</b> call, <b>FeedbackID</b> can be used as an input filter to respond to a specific Feedback comment. Since
     * Feedback is always linked to a unique order line item, an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> can also be used to respond to a Feedback comment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackID = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the eBay listing to which the user will be responding to Feedback. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be paired up with a corresponding
     * <b>TransactionID</b> and used as an input filter to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless the specific Feedback record is identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an
     * <b>ItemID</b>/<b>TransactionID</b> pair is required. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. A <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as an input filter to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless the
     * specific Feedback record is identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is required. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code>
     * since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The TargetUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the caller's order partner. The caller is either replyting to or following up on this user's Feedback comment. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several
     * other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this
     * API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized
     * userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TargetUserID = null;
    /**
     * The ResponseType
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the response is a reply or a follow-up to a Feedback comment left by the user identified in the <b>TargetUserID</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseType = null;
    /**
     * The ResponseText
     * Meta information extracted from the WSDL
     * - documentation: Textual comment that the user who is subject of feedback may leave in response or rebuttal to the Feedback comment. Alternatively, when the <b>ResponseType</b> is <b>FollowUp</b>, this value contains the text of the follow-up
     * comment. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseText = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. Since Feedback is always linked to a unique order line item, an <b>OrderLineItemID</b> can be used to respond to a Feedback comment. <br><br> Unless an
     * <b>ItemID</b>/<b>TransactionID</b> pair or a <b>FeedbackID</b> is used to identify a Feedback record, the <b>OrderLineItemID</b> must be specified. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * Constructor method for RespondToFeedbackRequestType
     * @uses RespondToFeedbackRequestType::setFeedbackID()
     * @uses RespondToFeedbackRequestType::setItemID()
     * @uses RespondToFeedbackRequestType::setTransactionID()
     * @uses RespondToFeedbackRequestType::setTargetUserID()
     * @uses RespondToFeedbackRequestType::setResponseType()
     * @uses RespondToFeedbackRequestType::setResponseText()
     * @uses RespondToFeedbackRequestType::setOrderLineItemID()
     * @param string $feedbackID
     * @param string $itemID
     * @param string $transactionID
     * @param string $targetUserID
     * @param string $responseType
     * @param string $responseText
     * @param string $orderLineItemID
     */
    public function __construct(?string $feedbackID = null, ?string $itemID = null, ?string $transactionID = null, ?string $targetUserID = null, ?string $responseType = null, ?string $responseText = null, ?string $orderLineItemID = null)
    {
        $this
            ->setFeedbackID($feedbackID)
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setTargetUserID($targetUserID)
            ->setResponseType($responseType)
            ->setResponseText($responseText)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
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
     * Get TargetUserID value
     * @return string|null
     */
    public function getTargetUserID(): ?string
    {
        return $this->TargetUserID;
    }
    /**
     * Set TargetUserID value
     * @param string $targetUserID
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
     */
    public function setTargetUserID(?string $targetUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($targetUserID) && !is_string($targetUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUserID, true), gettype($targetUserID)), __LINE__);
        }
        $this->TargetUserID = $targetUserID;
        
        return $this;
    }
    /**
     * Get ResponseType value
     * @return string|null
     */
    public function getResponseType(): ?string
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackResponseCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackResponseCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseType
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
     */
    public function setResponseType(?string $responseType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackResponseCodeType::valueIsValid($responseType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeedbackResponseCodeType', is_array($responseType) ? implode(', ', $responseType) : var_export($responseType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackResponseCodeType::getValidValues())), __LINE__);
        }
        $this->ResponseType = $responseType;
        
        return $this;
    }
    /**
     * Get ResponseText value
     * @return string|null
     */
    public function getResponseText(): ?string
    {
        return $this->ResponseText;
    }
    /**
     * Set ResponseText value
     * @param string $responseText
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
     */
    public function setResponseText(?string $responseText = null): self
    {
        // validation for constraint: string
        if (!is_null($responseText) && !is_string($responseText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseText, true), gettype($responseText)), __LINE__);
        }
        $this->ResponseText = $responseText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackRequestType
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
