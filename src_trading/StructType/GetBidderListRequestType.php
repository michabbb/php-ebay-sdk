<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBidderListRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves all items the user is currently bidding on, and the ones they have won or purchased. | Retrieves all items the user is currently bidding on, and the ones they have won or purchased.
 * @subpackage Structs
 */
class GetBidderListRequestType extends AbstractRequestType
{
    /**
     * The ActiveItemsOnly
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not to limit the result set to active items. If <code>true</code>, only active items are returned and the <b>EndTimeFrom</b> and <b>EndTimeTo</b> filters are ignored. If <code>false</code> (or not sent), both
     * active and ended items are returned.
     * - minOccurs: 0
     * @var bool
     */
    public $ActiveItemsOnly;
    /**
     * The EndTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with <b>EndTimeTo</b>. Limits returned items to only those for which the item's end date is on or after the date/time specified. Specify an end date within 30 days prior to today. Items that ended more than 30
     * days ago are omitted from the results. If specified, <b>EndTimeTo</b> must also be specified. Express date/time in the format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>.
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeFrom;
    /**
     * The EndTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with <b>EndTimeFrom</b>. Limits returned items to only those for which the item's end date is on or before the date/time specified. If specified, <b>EndTimeFrom</b> must also be specified. Express date/time in the
     * format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>. Note that for GTC items, whose end times automatically increment by 30 days every 30 days, an <b>EndTimeTo</b> value
     * within the first 30 days of a listing will refer to the listing's initial end time.
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeTo;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: The user for whom information should be returned. If provided, overrides any user ID specified through the <b>RequesterCredentials</b> header. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used
     * by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller
     * makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as
     * anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The GranularityLevel
     * Meta informations extracted from the WSDL
     * - documentation: You can control some of the fields returned in the response by specifying one of two values in the <b>GranularityLevel</b> field: <code>Fine</code> or <code>Medium</code>. <code>Fine</code> returns more fields than the default, while
     * setting this field to <code>Medium</code> returns an abbreviated set of results.
     * - minOccurs: 0
     * @var string
     */
    public $GranularityLevel;
    /**
     * Constructor method for GetBidderListRequestType
     * @uses GetBidderListRequestType::setActiveItemsOnly()
     * @uses GetBidderListRequestType::setEndTimeFrom()
     * @uses GetBidderListRequestType::setEndTimeTo()
     * @uses GetBidderListRequestType::setUserID()
     * @uses GetBidderListRequestType::setGranularityLevel()
     * @param bool $activeItemsOnly
     * @param string $endTimeFrom
     * @param string $endTimeTo
     * @param string $userID
     * @param string $granularityLevel
     */
    public function __construct($activeItemsOnly = null, $endTimeFrom = null, $endTimeTo = null, $userID = null, $granularityLevel = null)
    {
        $this
            ->setActiveItemsOnly($activeItemsOnly)
            ->setEndTimeFrom($endTimeFrom)
            ->setEndTimeTo($endTimeTo)
            ->setUserID($userID)
            ->setGranularityLevel($granularityLevel);
    }
    /**
     * Get ActiveItemsOnly value
     * @return bool|null
     */
    public function getActiveItemsOnly()
    {
        return $this->ActiveItemsOnly;
    }
    /**
     * Set ActiveItemsOnly value
     * @param bool $activeItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setActiveItemsOnly($activeItemsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($activeItemsOnly) && !is_bool($activeItemsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($activeItemsOnly)), __LINE__);
        }
        $this->ActiveItemsOnly = $activeItemsOnly;
        return $this;
    }
    /**
     * Get EndTimeFrom value
     * @return string|null
     */
    public function getEndTimeFrom()
    {
        return $this->EndTimeFrom;
    }
    /**
     * Set EndTimeFrom value
     * @param string $endTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setEndTimeFrom($endTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($endTimeFrom) && !is_string($endTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTimeFrom)), __LINE__);
        }
        $this->EndTimeFrom = $endTimeFrom;
        return $this;
    }
    /**
     * Get EndTimeTo value
     * @return string|null
     */
    public function getEndTimeTo()
    {
        return $this->EndTimeTo;
    }
    /**
     * Set EndTimeTo value
     * @param string $endTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setEndTimeTo($endTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($endTimeTo) && !is_string($endTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTimeTo)), __LINE__);
        }
        $this->EndTimeTo = $endTimeTo;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get GranularityLevel value
     * @return string|null
     */
    public function getGranularityLevel()
    {
        return $this->GranularityLevel;
    }
    /**
     * Set GranularityLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $granularityLevel
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setGranularityLevel($granularityLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::valueIsValid($granularityLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $granularityLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::getValidValues())), __LINE__);
        }
        $this->GranularityLevel = $granularityLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
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
