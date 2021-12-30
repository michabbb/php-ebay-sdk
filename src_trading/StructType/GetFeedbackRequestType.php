<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeedbackRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves one, many, or all Feedback records for a specific eBay user. There is a filter option in the call request to limit Feedback records to those that are received, or to those that are left for other buyers, as well as a filter
 * option to limit Feedback records to those that are received as a buyer or seller.
 * @subpackage Structs
 */
class GetFeedbackRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The user's eBay User ID is specified in this field. If this field is used, all retrieved Feedback data will be for this eBay user. Specifies the user whose feedback data is to be returned. If this field is omitted in the call
     * request, all retrieved Feedback records will be for the eBay user making the call. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The FeedbackID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Feedback record. This field is used if the user wants to retrieve a specific Feedback record. If <b>FeedbackID</b> is specified in the call request, all other input fields are ignored.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackID = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. If <b>ItemID</b> is specified in the <b>GetFeedback</b> request, the returned Feedback record(s) are restricted to the
     * specified <b>ItemID</b>. The maximum number of Feedback records that can be returned is 100. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. A <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as an input filter in the <b>GetFeedback</b> request. If an <b>ItemID</b>/<b>TransactionID</b> pair
     * or an <b>OrderLineItemID</b> value is used to retrieve a feedback record on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored. <br> <br> The <b>TransactionID</b> value for auction listings is
     * always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The CommentType
     * Meta information extracted from the WSDL
     * - documentation: This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value
     * is specified, Feedback records of all types are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $CommentType = null;
    /**
     * The FeedbackType
     * Meta information extracted from the WSDL
     * - documentation: This field is used to restrict retrieved Feedback records to those that the user left for other buyers, Feedback records received as a seller, Feedback records received as a buyer, or Feedback records received as a buyer and seller.
     * The default value is <b>FeedbackReceived</b>, so if the <b>FeedbackType</b> field is omitted in the request, all Feedback records received by the user as a buyer and seller are returned in the response. "Feedback Left" data will not be returned in
     * the call response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FeedbackType = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Controls the pagination of the result set. Child elements, <b>EntriesPerPage</b> and <b>PageNumber</b>, specify the maximum number of individual feedback records to return per call and which page of data to return. Only applicable if
     * <b>DetailLevel</b> is set to <b>ReturnAll</b> and the call is returning feedback for a <b>UserID</b>. Feedback summary data is not paginated, but when pagination is used, it is returned after the last feedback detail entry. <br><br> Accepted values
     * for <b>Pagination.EntriesPerPage</b> for GetFeedback is 25 (the default), 50, 100, and 200. If you specify a value of zero, or a value greater than 200, the call fails with an error. If you specify a value between one and twenty-four, the value is
     * rounded up to 25. Values between 26 and 199 that are not one of the accepted values are rounded down to the nearest accepted value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. An <b>OrderLineItemID</b> can be used as an input filter in the <b>GetFeedback</b> request. If an <b>OrderLineItemID</b> value is used to retrieve a feedback
     * record on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * Constructor method for GetFeedbackRequestType
     * @uses GetFeedbackRequestType::setUserID()
     * @uses GetFeedbackRequestType::setFeedbackID()
     * @uses GetFeedbackRequestType::setItemID()
     * @uses GetFeedbackRequestType::setTransactionID()
     * @uses GetFeedbackRequestType::setCommentType()
     * @uses GetFeedbackRequestType::setFeedbackType()
     * @uses GetFeedbackRequestType::setPagination()
     * @uses GetFeedbackRequestType::setOrderLineItemID()
     * @param string $userID
     * @param string $feedbackID
     * @param string $itemID
     * @param string $transactionID
     * @param string[] $commentType
     * @param string $feedbackType
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $orderLineItemID
     */
    public function __construct(?string $userID = null, ?string $feedbackID = null, ?string $itemID = null, ?string $transactionID = null, ?array $commentType = null, ?string $feedbackType = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $orderLineItemID = null)
    {
        $this
            ->setUserID($userID)
            ->setFeedbackID($feedbackID)
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setCommentType($commentType)
            ->setFeedbackType($feedbackType)
            ->setPagination($pagination)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
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
     * Get CommentType value
     * @return string[]
     */
    public function getCommentType(): ?array
    {
        return $this->CommentType;
    }
    /**
     * This method is responsible for validating the values passed to the setCommentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommentTypeForArrayConstraintsFromSetCommentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeedbackRequestTypeCommentTypeItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid($getFeedbackRequestTypeCommentTypeItem)) {
                $invalidValues[] = is_object($getFeedbackRequestTypeCommentTypeItem) ? get_class($getFeedbackRequestTypeCommentTypeItem) : sprintf('%s(%s)', gettype($getFeedbackRequestTypeCommentTypeItem), var_export($getFeedbackRequestTypeCommentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CommentType value
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $commentType
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
     */
    public function setCommentType(?array $commentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($commentTypeArrayErrorMessage = self::validateCommentTypeForArrayConstraintsFromSetCommentType($commentType))) {
            throw new InvalidArgumentException($commentTypeArrayErrorMessage, __LINE__);
        }
        $this->CommentType = $commentType;
        
        return $this;
    }
    /**
     * Add item to CommentType value
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
     */
    public function addToCommentType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->CommentType[] = $item;
        
        return $this;
    }
    /**
     * Get FeedbackType value
     * @return string|null
     */
    public function getFeedbackType(): ?string
    {
        return $this->FeedbackType;
    }
    /**
     * Set FeedbackType value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $feedbackType
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
     */
    public function setFeedbackType(?string $feedbackType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackTypeCodeType::valueIsValid($feedbackType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeedbackTypeCodeType', is_array($feedbackType) ? implode(', ', $feedbackType) : var_export($feedbackType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackTypeCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackType = $feedbackType;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetFeedbackRequestType
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
