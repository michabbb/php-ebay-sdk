<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserProfileResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>GetUserProfile</b> call, which contains detailed information about an eBay user, including their Feedback data.
 * @subpackage Structs
 */
class GetUserProfileResponseType extends AbstractResponseType
{
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of various details about the eBay user, including Feedback rating, Seller Level, link to profile page, and other information. This container is always returned, but more fields will be returned under this
     * container if the user includes the <b>IncludeSelector</b> field in the request and sets its value to <code>Details</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public $User;
    /**
     * The FeedbackHistory
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of numerous statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral, and Negative Feedback entries for predefined time periods (last week, last month, last 6
     * months, and last year). For the <b>FeedbackHistory</b> container to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackHistory</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType
     */
    public $FeedbackHistory;
    /**
     * The FeedbackDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field
     * in the request and set its value to <code>FeedbackDetails</code>. <br/><br/> The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned
     * if the eBay user does not have five recent Feedback entries.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[]
     */
    public $FeedbackDetails;
    /**
     * Constructor method for GetUserProfileResponseType
     * @uses GetUserProfileResponseType::setUser()
     * @uses GetUserProfileResponseType::setFeedbackHistory()
     * @uses GetUserProfileResponseType::setFeedbackDetails()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $user
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[] $feedbackDetails
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\SimpleUserType $user = null, \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory = null, array $feedbackDetails = array())
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
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $user
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setUser(\macropage\ebaysdk\shopping\StructType\SimpleUserType $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Get FeedbackHistory value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType|null
     */
    public function getFeedbackHistory()
    {
        return $this->FeedbackHistory;
    }
    /**
     * Set FeedbackHistory value
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setFeedbackHistory(\macropage\ebaysdk\shopping\StructType\FeedbackHistoryType $feedbackHistory = null)
    {
        $this->FeedbackHistory = $feedbackHistory;
        return $this;
    }
    /**
     * Get FeedbackDetails value
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[]|null
     */
    public function getFeedbackDetails()
    {
        return $this->FeedbackDetails;
    }
    /**
     * Set FeedbackDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType[] $feedbackDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function setFeedbackDetails(array $feedbackDetails = array())
    {
        foreach ($feedbackDetails as $getUserProfileResponseTypeFeedbackDetailsItem) {
            // validation for constraint: itemType
            if (!$getUserProfileResponseTypeFeedbackDetailsItem instanceof \macropage\ebaysdk\shopping\StructType\FeedbackDetailType) {
                throw new \InvalidArgumentException(sprintf('The FeedbackDetails property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackDetailType, "%s" given', is_object($getUserProfileResponseTypeFeedbackDetailsItem) ? get_class($getUserProfileResponseTypeFeedbackDetailsItem) : gettype($getUserProfileResponseTypeFeedbackDetailsItem)), __LINE__);
            }
        }
        $this->FeedbackDetails = $feedbackDetails;
        return $this;
    }
    /**
     * Add item to FeedbackDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\FeedbackDetailType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
     */
    public function addToFeedbackDetails(\macropage\ebaysdk\shopping\StructType\FeedbackDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\FeedbackDetailType) {
            throw new \InvalidArgumentException(sprintf('The FeedbackDetails property can only contain items of \macropage\ebaysdk\shopping\StructType\FeedbackDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeedbackDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileResponseType
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
