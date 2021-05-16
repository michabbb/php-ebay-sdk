<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaveFeedbackRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a buyer and seller to leave Feedback for their order partner at the conclusion of a successful order.
 * @subpackage Structs
 */
class LeaveFeedbackRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> is specified in the <b>LeaveFeedback</b> request, the <b>ItemID</b> is required along
     * with the <b>TargetUser</b> to identify an order line item existing between the caller and the <b>TargetUser</b> that requires feedback. A Feedback comment will be posted for this order line item. If there are multiple order line items between the two
     * order partners that still require feedback, the <b>TransactionID</b> will also be required to isolate the targeted order line item. Feedback cannot be left for order line items with creation dates more than 60 days in the past. | Type that represents
     * the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The CommentText
     * Meta information extracted from the WSDL
     * - documentation: Textual comment that explains, clarifies, or justifies the feedback score specified in <b>CommentType</b>. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentText = null;
    /**
     * The CommentType
     * Meta information extracted from the WSDL
     * - documentation: Score for the Feedback being left. May be Positive, Neutral, or Negative. <br><br> <span class="tablenote"><b>Note:</b> Sellers can not leave neutral or negative feedback for buyers. In addition, buyers can not leave neutral or
     * negative feedback within 7 days from the completion of the order for active Power Sellers who have been on eBay for 12 months. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommentType = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. If there are multiple order line items between the two order partners that still require Feedback, the <b>TransactionID</b> is required along with the corresponding <b>ItemID</b> and
     * <b>TargetUser</b> to isolate the targeted order line item. If an <b>OrderLineItemID</b> is included in the response to identify a specific order line item, none of the preceding fields (<b>ItemID</b>, <b>TransactionID</b>, <b>TargetUser</b>) are
     * needed. Feedback cannot be left for order line items with creation dates more than 60 days in the past. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an
     * auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The TargetUser
     * Meta information extracted from the WSDL
     * - documentation: Specifies the recipient user about whom the Feedback is being left. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TargetUser = null;
    /**
     * The SellerItemRatingDetailArray
     * Meta information extracted from the WSDL
     * - documentation: Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received
     * in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType $SellerItemRatingDetailArray = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>TargetUser</b> fields are not required. Feedback
     * cannot be left for order line items with creation dates more than 60 days in the past. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The ItemArrivedWithinEDDType
     * Meta information extracted from the WSDL
     * - documentation: This field or the <b>ItemDeliveredWithinEDD</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated
     * delivery date, which is established once a buyer purchases or commits to buy an item. <br> <br> <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time
     * shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a
     * seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemArrivedWithinEDDType = null;
    /**
     * The ItemDeliveredWithinEDD
     * Meta information extracted from the WSDL
     * - documentation: This field or the <b>ItemArrivedWithinEDDType</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the
     * estimated delivery date window, which is established once a buyer purchases or commits to buy an item. The value of this field is set to <code>true</code> if the item did arrive within the estimated delivery date, or <code>false</code> if the item
     * arrived past the estimated delivery date. <br> <br> <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item
     * before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting
     * a low rating for the "shippping time" Detailed Seller Rating. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ItemDeliveredWithinEDD = null;
    /**
     * Constructor method for LeaveFeedbackRequestType
     * @uses LeaveFeedbackRequestType::setItemID()
     * @uses LeaveFeedbackRequestType::setCommentText()
     * @uses LeaveFeedbackRequestType::setCommentType()
     * @uses LeaveFeedbackRequestType::setTransactionID()
     * @uses LeaveFeedbackRequestType::setTargetUser()
     * @uses LeaveFeedbackRequestType::setSellerItemRatingDetailArray()
     * @uses LeaveFeedbackRequestType::setOrderLineItemID()
     * @uses LeaveFeedbackRequestType::setItemArrivedWithinEDDType()
     * @uses LeaveFeedbackRequestType::setItemDeliveredWithinEDD()
     * @param string $itemID
     * @param string $commentText
     * @param string $commentType
     * @param string $transactionID
     * @param string $targetUser
     * @param \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType $sellerItemRatingDetailArray
     * @param string $orderLineItemID
     * @param string $itemArrivedWithinEDDType
     * @param bool $itemDeliveredWithinEDD
     */
    public function __construct(?string $itemID = null, ?string $commentText = null, ?string $commentType = null, ?string $transactionID = null, ?string $targetUser = null, ?\macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType $sellerItemRatingDetailArray = null, ?string $orderLineItemID = null, ?string $itemArrivedWithinEDDType = null, ?bool $itemDeliveredWithinEDD = null)
    {
        $this
            ->setItemID($itemID)
            ->setCommentText($commentText)
            ->setCommentType($commentType)
            ->setTransactionID($transactionID)
            ->setTargetUser($targetUser)
            ->setSellerItemRatingDetailArray($sellerItemRatingDetailArray)
            ->setOrderLineItemID($orderLineItemID)
            ->setItemArrivedWithinEDDType($itemArrivedWithinEDDType)
            ->setItemDeliveredWithinEDD($itemDeliveredWithinEDD);
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
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
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
     * Get TargetUser value
     * @return string|null
     */
    public function getTargetUser(): ?string
    {
        return $this->TargetUser;
    }
    /**
     * Set TargetUser value
     * @param string $targetUser
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
     */
    public function setTargetUser(?string $targetUser = null): self
    {
        // validation for constraint: string
        if (!is_null($targetUser) && !is_string($targetUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUser, true), gettype($targetUser)), __LINE__);
        }
        $this->TargetUser = $targetUser;
        
        return $this;
    }
    /**
     * Get SellerItemRatingDetailArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType|null
     */
    public function getSellerItemRatingDetailArray(): ?\macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
    {
        return $this->SellerItemRatingDetailArray;
    }
    /**
     * Set SellerItemRatingDetailArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType $sellerItemRatingDetailArray
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
     */
    public function setSellerItemRatingDetailArray(?\macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType $sellerItemRatingDetailArray = null): self
    {
        $this->SellerItemRatingDetailArray = $sellerItemRatingDetailArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
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
     * Get ItemArrivedWithinEDDType value
     * @return string|null
     */
    public function getItemArrivedWithinEDDType(): ?string
    {
        return $this->ItemArrivedWithinEDDType;
    }
    /**
     * Set ItemArrivedWithinEDDType value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemArrivedWithinEDDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemArrivedWithinEDDCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemArrivedWithinEDDType
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
     */
    public function setItemArrivedWithinEDDType(?string $itemArrivedWithinEDDType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemArrivedWithinEDDCodeType::valueIsValid($itemArrivedWithinEDDType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemArrivedWithinEDDCodeType', is_array($itemArrivedWithinEDDType) ? implode(', ', $itemArrivedWithinEDDType) : var_export($itemArrivedWithinEDDType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemArrivedWithinEDDCodeType::getValidValues())), __LINE__);
        }
        $this->ItemArrivedWithinEDDType = $itemArrivedWithinEDDType;
        
        return $this;
    }
    /**
     * Get ItemDeliveredWithinEDD value
     * @return bool|null
     */
    public function getItemDeliveredWithinEDD(): ?bool
    {
        return $this->ItemDeliveredWithinEDD;
    }
    /**
     * Set ItemDeliveredWithinEDD value
     * @param bool $itemDeliveredWithinEDD
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackRequestType
     */
    public function setItemDeliveredWithinEDD(?bool $itemDeliveredWithinEDD = null): self
    {
        // validation for constraint: boolean
        if (!is_null($itemDeliveredWithinEDD) && !is_bool($itemDeliveredWithinEDD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itemDeliveredWithinEDD, true), gettype($itemDeliveredWithinEDD)), __LINE__);
        }
        $this->ItemDeliveredWithinEDD = $itemDeliveredWithinEDD;
        
        return $this;
    }
}
