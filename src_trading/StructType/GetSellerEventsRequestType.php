<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerEventsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves price changes, item revisions, description revisions, and other changes that have occurred within the last 48 hours related to a seller's eBay listings.
 * @subpackage Structs
 */
class GetSellerEventsRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: eBay user ID for the seller whose events are to be returned. If not specified, retrieves events for the user identified by the authentication token passed in the request. <br/><br/> <b>Note:</b> Since user information is anonymous to
     * everyone except the bidder and the seller (during an active auction), only sellers looking for information about their own listings and bidders who know the user IDs of their sellers will be able to make this API call successfully. | This is a string
     * wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder
     * information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information
     * for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The StartTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Describes the earliest (oldest) time to use in a time range filter based on item start time. Must be specified if <b>StartTimeTo</b> is specified. <br/><br/> Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b>
     * filter must be specified. <br/><br/> If you do not specify the corresponding <b>To</b> filter, it is set to the time you make the call. <br/><br/> For better results, the time period you use should be less than 48 hours. If 3000 or more items are
     * found, use a smaller time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>StartTimeTo</b> was 6:58 in a prior request, the current request should use 6:56 in <b>StartTimeFrom</b> (e.g., use ranges like
     * 5:56-6:58, 6:56-7:58, 7:56-8:58).
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeFrom;
    /**
     * The StartTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Describes the latest (most recent) date to use in a time range filter based on item start time. If you specify the corresponding <b>From</b> filter, but you do not include <b>StartTimeTo</b>, the <b>StartTimeTo</b> is set to the time
     * you make the call.
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeTo;
    /**
     * The EndTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Describes the earliest (oldest) date to use in a time range filter based on item end time. Must be specified if <b>EndTimeTo</b> is specified. <br/><br/> Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b>
     * filter must be specified. If you do not specify the corresponding To filter, it is set to the time you make the call.<br> <br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller
     * time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>EndTimeTo</b> was 6:58 in a prior request, the current request should use 6:56 in <b>EndTimeFrom</b> (e.g., use ranges like 5:56-6:58, 6:56-7:58,
     * 7:56-8:58).
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeFrom;
    /**
     * The EndTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Describes the latest (most recent) date to use in a time range filter based on item end time. <br/><br/> If you specify the corresponding <b>From</b> filter, but you do not include <b>EndTimeTo</b>, then <b>EndTimeTo</b> is set to
     * the time you make the call.
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeTo;
    /**
     * The ModTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Describes the earliest (oldest) date to use in a time range filter based on item modification time. Must be specified if <b>ModTimeTo</b> is specified. Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter
     * must be specified. If you do not specify the corresponding To filter, it is set to the time you make the call.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>ModTimeTo</b> was 6:58 in a prior request, the current
     * request should use 6:56 in <b>ModTimeFrom</b> (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58). <br><br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller time range.
     * <br><br> If an unexpected item is returned (including an old item or an unchanged active item), please ignore the item. Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding <b>From</b> filter, but you do not include <b>ModTimeTo</b> , then
     * <b>ModTimeTo</b> is set to the time you make the call. Include a 2-minute buffer between the current time and the <b>ModTimeTo</b> filter.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The NewItemFilter
     * Meta informations extracted from the WSDL
     * - documentation: If true, response includes only items that have been modified within the <b>ModTime</b> range. If false, response includes all items.
     * - minOccurs: 0
     * @var bool
     */
    public $NewItemFilter;
    /**
     * The IncludeWatchCount
     * Meta informations extracted from the WSDL
     * - documentation: The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have an item added to their Watch Lists. The Watch count is returned in the
     * <b>WatchCount</b> field for each item in the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeWatchCount;
    /**
     * The IncludeVariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to force the response to include variation specifics for multiple-variation listings. <br> <br> If false (or not specified), eBay keeps the response as small as possible by not returning
     * <b>Variation.VariationSpecifics</b>. It only returns <b>Variation.SKU</b> as an identifier (along with the variation price and other selling details). If the variation has no SKU, then <b>Variation.VariationSpecifics</b> is returned as the
     * variation's unique identifier.<br> <br> If true, <b>Variation.VariationSpecifics</b> is returned. (<b>Variation.SKU</b> is also returned, if the variation has a SKU.) This may be useful for applications that don't track variations by SKU.<br> <br>
     * Ignored when <b>HideVariations</b> is set to <b>true</b>. <br> <br> <b>Note:</b> If the seller includes a large number of variations in many listings, using this flag may degrade the call's performance. Therefore, when you use this flag, you may need
     * to reduce the total number of items you're requesting at once. For example, you may need to use shorter time ranges in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filters.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeVariationSpecifics;
    /**
     * The HideVariations
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to force the response to hide variation details for multiple-variation listings.<br> <br> If false (or not specified), eBay returns variation details (if any). In this case, the amount of detail can be controlled by
     * using <b>IncludeVariationSpecifics</b>.<br> <br> If true, variation details are not returned (and <b>IncludeVariationSpecifics</b> has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track
     * price and quantity details.
     * - minOccurs: 0
     * @var bool
     */
    public $HideVariations;
    /**
     * Constructor method for GetSellerEventsRequestType
     * @uses GetSellerEventsRequestType::setUserID()
     * @uses GetSellerEventsRequestType::setStartTimeFrom()
     * @uses GetSellerEventsRequestType::setStartTimeTo()
     * @uses GetSellerEventsRequestType::setEndTimeFrom()
     * @uses GetSellerEventsRequestType::setEndTimeTo()
     * @uses GetSellerEventsRequestType::setModTimeFrom()
     * @uses GetSellerEventsRequestType::setModTimeTo()
     * @uses GetSellerEventsRequestType::setNewItemFilter()
     * @uses GetSellerEventsRequestType::setIncludeWatchCount()
     * @uses GetSellerEventsRequestType::setIncludeVariationSpecifics()
     * @uses GetSellerEventsRequestType::setHideVariations()
     * @param string $userID
     * @param string $startTimeFrom
     * @param string $startTimeTo
     * @param string $endTimeFrom
     * @param string $endTimeTo
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param bool $newItemFilter
     * @param bool $includeWatchCount
     * @param bool $includeVariationSpecifics
     * @param bool $hideVariations
     */
    public function __construct($userID = null, $startTimeFrom = null, $startTimeTo = null, $endTimeFrom = null, $endTimeTo = null, $modTimeFrom = null, $modTimeTo = null, $newItemFilter = null, $includeWatchCount = null, $includeVariationSpecifics = null, $hideVariations = null)
    {
        $this
            ->setUserID($userID)
            ->setStartTimeFrom($startTimeFrom)
            ->setStartTimeTo($startTimeTo)
            ->setEndTimeFrom($endTimeFrom)
            ->setEndTimeTo($endTimeTo)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setNewItemFilter($newItemFilter)
            ->setIncludeWatchCount($includeWatchCount)
            ->setIncludeVariationSpecifics($includeVariationSpecifics)
            ->setHideVariations($hideVariations);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * Get StartTimeFrom value
     * @return string|null
     */
    public function getStartTimeFrom()
    {
        return $this->StartTimeFrom;
    }
    /**
     * Set StartTimeFrom value
     * @param string $startTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setStartTimeFrom($startTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom) && !is_string($startTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTimeFrom)), __LINE__);
        }
        $this->StartTimeFrom = $startTimeFrom;
        return $this;
    }
    /**
     * Get StartTimeTo value
     * @return string|null
     */
    public function getStartTimeTo()
    {
        return $this->StartTimeTo;
    }
    /**
     * Set StartTimeTo value
     * @param string $startTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setStartTimeTo($startTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeTo) && !is_string($startTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTimeTo)), __LINE__);
        }
        $this->StartTimeTo = $startTimeTo;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom()
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setModTimeFrom($modTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo()
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setModTimeTo($modTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
        return $this;
    }
    /**
     * Get NewItemFilter value
     * @return bool|null
     */
    public function getNewItemFilter()
    {
        return $this->NewItemFilter;
    }
    /**
     * Set NewItemFilter value
     * @param bool $newItemFilter
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setNewItemFilter($newItemFilter = null)
    {
        // validation for constraint: boolean
        if (!is_null($newItemFilter) && !is_bool($newItemFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newItemFilter)), __LINE__);
        }
        $this->NewItemFilter = $newItemFilter;
        return $this;
    }
    /**
     * Get IncludeWatchCount value
     * @return bool|null
     */
    public function getIncludeWatchCount()
    {
        return $this->IncludeWatchCount;
    }
    /**
     * Set IncludeWatchCount value
     * @param bool $includeWatchCount
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setIncludeWatchCount($includeWatchCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeWatchCount) && !is_bool($includeWatchCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeWatchCount)), __LINE__);
        }
        $this->IncludeWatchCount = $includeWatchCount;
        return $this;
    }
    /**
     * Get IncludeVariationSpecifics value
     * @return bool|null
     */
    public function getIncludeVariationSpecifics()
    {
        return $this->IncludeVariationSpecifics;
    }
    /**
     * Set IncludeVariationSpecifics value
     * @param bool $includeVariationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setIncludeVariationSpecifics($includeVariationSpecifics = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeVariationSpecifics) && !is_bool($includeVariationSpecifics)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeVariationSpecifics)), __LINE__);
        }
        $this->IncludeVariationSpecifics = $includeVariationSpecifics;
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations()
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setHideVariations($hideVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
