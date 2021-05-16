<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserProfileResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type of the <b>GetUserProfile</b> call, which contains detailed information about an eBay user, including their Feedback data.
 * @subpackage Structs
 */
class GetUserProfileResponseType extends AbstractResponseType
{
    /**
     * The User
     * Meta information extracted from the WSDL
     * - documentation: This container consists of various details about the eBay user, including Feedback rating, Seller Level, link to profile page, and other information. This container is always returned, but more fields will be returned under this
     * container if the user includes the <b>IncludeSelector</b> field in the request and sets its value to <code>Details</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleUserType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\SimpleUserType $User = null;
    /**
     * The FeedbackHistory
     * Meta information extracted from the WSDL
     * - documentation: This container consists of numerous statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral, and Negative Feedback entries for predefined time periods (last week, last month, last 6
     * months, and last year). For the <b>FeedbackHistory</b> container to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackHistory</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $FeedbackHistory = null;
    /**
     * The FeedbackDetails
     * Meta information extracted from the WSDL
     * - documentation: Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field
     * in the request and set its value to <code>FeedbackDetails</code>. <br/><br/> The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned
     * if the eBay user does not have five recent Feedback entries.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[]
     */
    protected array $FeedbackDetails = [];
    /**
     * Constructor method for GetUserProfileResponseType
     * @uses GetUserProfileResponseType::setUser()
     * @uses GetUserProfileResponseType::setFeedbackHistory()
     * @uses GetUserProfileResponseType::setFeedbackDetails()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $user
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[] $feedbackDetails
     */
    public function __construct(?\macropage\ebaysdk\shopping\StructType\SimpleUserType $user = null, ?\macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory = null, array $feedbackDetails = [])
    {
        $this
            ->setUser($user)
            ->setFeedbackHistory($feedbackHistory)
            ->setFeedbackDetails($feedbackDetails);
    }
    /**
     * Get User value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType|null
     */
    public function getUser(): ?\macropage\ebaysdk\shopping\StructType\SimpleUserType
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $user
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setUser(?\macropage\ebaysdk\shopping\StructType\SimpleUserType $user = null): self
    {
        $this->User = $user;
        
        return $this;
    }
    /**
     * Get FeedbackHistory value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType|null
     */
    public function getFeedbackHistory(): ?\macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
    {
        return $this->FeedbackHistory;
    }
    /**
     * Set FeedbackHistory value
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setFeedbackHistory(?\macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory = null): self
    {
        $this->FeedbackHistory = $feedbackHistory;
        
        return $this;
    }
    /**
     * Get FeedbackDetails value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[]
     */
    public function getFeedbackDetails(): array
    {
        return $this->FeedbackDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackDetailsForArrayConstraintsFromSetFeedbackDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserProfileResponseTypeFeedbackDetailsItem) {
            // validation for constraint: itemType
            if (!$getUserProfileResponseTypeFeedbackDetailsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackDetailType) {
                $invalidValues[] = is_object($getUserProfileResponseTypeFeedbackDetailsItem) ? get_class($getUserProfileResponseTypeFeedbackDetailsItem) : sprintf('%s(%s)', gettype($getUserProfileResponseTypeFeedbackDetailsItem), var_export($getUserProfileResponseTypeFeedbackDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackDetails property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeedbackDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[] $feedbackDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setFeedbackDetails(array $feedbackDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($feedbackDetailsArrayErrorMessage = self::validateFeedbackDetailsForArrayConstraintsFromSetFeedbackDetails($feedbackDetails))) {
            throw new InvalidArgumentException($feedbackDetailsArrayErrorMessage, __LINE__);
        }
        $this->FeedbackDetails = $feedbackDetails;
        
        return $this;
    }
    /**
     * Add item to FeedbackDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function addToFeedbackDetails(\macropage\ebaysdk\shopping\StructType\FeedbackDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackDetailType) {
            throw new InvalidArgumentException(sprintf('The FeedbackDetails property can only contain items of type \macropage\ebaysdk\shopping\StructType\FeedbackDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeedbackDetails[] = $item;
        
        return $this;
    }
}
