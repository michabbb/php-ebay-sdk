<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBidderListRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves all items that the user is currently bidding on, and the ones they have won or purchased.
 * @subpackage Structs
 */
class GetBidderListRequestType extends AbstractRequestType
{
    /**
     * The ActiveItemsOnly
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not to limit the result set to active items. If <code>true</code>, only active items are returned and the <b>EndTimeFrom</b> and <b>EndTimeTo</b> filters are ignored. If <code>false</code> (or not sent), both
     * active and ended items are returned.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ActiveItemsOnly = null;
    /**
     * The EndTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Used in conjunction with <b>EndTimeTo</b>. Limits returned items to only those for which the item's end date is on or after the date/time specified. Specify an end date within 30 days prior to today. Items that ended more than 30
     * days ago are omitted from the results. If specified, <b>EndTimeTo</b> must also be specified. Express date/time in the format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeFrom = null;
    /**
     * The EndTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Used in conjunction with <b>EndTimeFrom</b>. Limits returned items to only those for which the item's end date is on or before the date/time specified. If specified, <b>EndTimeFrom</b> must also be specified. Express date/time in the
     * format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>. Note that for GTC items, whose end times automatically increment by 30 days every 30 days, an <b>EndTimeTo</b> value
     * within the first 30 days of a listing will refer to the listing's initial end time. <br><br> <span class="tablenote"><b>Note: </b> Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per
     * calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in
     * the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeTo = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay user. <br><br> This field is generally not required unless there are multiple User IDs tied to the requester credentials that are specified through the <b>RequesterCredentials</b> header. If there are
     * multiple User IDs tied to the requester credentials, this field allows you to specify the User ID for which you wish to retrieves bids and purchases. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several
     * other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this
     * API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized
     * userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The GranularityLevel
     * Meta information extracted from the WSDL
     * - documentation: You can control some of the fields returned in the response by specifying one of two values in the <b>GranularityLevel</b> field: <code>Fine</code> or <code>Medium</code>. <code>Fine</code> returns more fields than the default, while
     * setting this field to <code>Medium</code> returns an abbreviated set of results.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GranularityLevel = null;
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
    public function __construct(?bool $activeItemsOnly = null, ?string $endTimeFrom = null, ?string $endTimeTo = null, ?string $userID = null, ?string $granularityLevel = null)
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
    public function getActiveItemsOnly(): ?bool
    {
        return $this->ActiveItemsOnly;
    }
    /**
     * Set ActiveItemsOnly value
     * @param bool $activeItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setActiveItemsOnly(?bool $activeItemsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activeItemsOnly) && !is_bool($activeItemsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activeItemsOnly, true), gettype($activeItemsOnly)), __LINE__);
        }
        $this->ActiveItemsOnly = $activeItemsOnly;
        
        return $this;
    }
    /**
     * Get EndTimeFrom value
     * @return string|null
     */
    public function getEndTimeFrom(): ?string
    {
        return $this->EndTimeFrom;
    }
    /**
     * Set EndTimeFrom value
     * @param string $endTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setEndTimeFrom(?string $endTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeFrom) && !is_string($endTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeFrom, true), gettype($endTimeFrom)), __LINE__);
        }
        $this->EndTimeFrom = $endTimeFrom;
        
        return $this;
    }
    /**
     * Get EndTimeTo value
     * @return string|null
     */
    public function getEndTimeTo(): ?string
    {
        return $this->EndTimeTo;
    }
    /**
     * Set EndTimeTo value
     * @param string $endTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setEndTimeTo(?string $endTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeTo) && !is_string($endTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeTo, true), gettype($endTimeTo)), __LINE__);
        }
        $this->EndTimeTo = $endTimeTo;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
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
     * Get GranularityLevel value
     * @return string|null
     */
    public function getGranularityLevel(): ?string
    {
        return $this->GranularityLevel;
    }
    /**
     * Set GranularityLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $granularityLevel
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListRequestType
     */
    public function setGranularityLevel(?string $granularityLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::valueIsValid($granularityLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType', is_array($granularityLevel) ? implode(', ', $granularityLevel) : var_export($granularityLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GranularityLevelCodeType::getValidValues())), __LINE__);
        }
        $this->GranularityLevel = $granularityLevel;
        
        return $this;
    }
}
