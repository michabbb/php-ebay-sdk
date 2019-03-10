<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerListRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a list of the items posted by the authenticated user, including the related item data.
 * @subpackage Structs
 */
class GetSellerListRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the seller whose items will be returned. <b>UserID</b> is an optional input. If not specified, retrieves listings for the user identified by the authentication token passed in the request. Note that since user information
     * is anonymous to everyone except the bidder and the seller (during an active auction), only sellers looking for information about their own listings and bidders who know the user IDs of their sellers will be able to make this API call successfully. |
     * This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For
     * GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will
     * be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The MotorsDealerUsers
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the list of Motors Dealer sellers for which a special set of metrics can be requested. Applies to eBay Motors Pro applications only.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIDArrayType
     */
    public $MotorsDealerUsers;
    /**
     * The EndTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to use in a date range filter based on item end time. Specify either an end-time range or a start-time range filter in every call request. Each of the time ranges must be a value less than 120
     * days.
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeFrom;
    /**
     * The EndTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if <b>EndTimeFrom</b> is specified.
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeTo;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the order in which returned items are sorted (based on the end dates of the item listings). Valid values: <br> 0 = No sorting<br> 1 = Sort in descending order<br> 2 = Sort in ascending order<br>
     * - minOccurs: 0
     * @var int
     */
    public $Sort;
    /**
     * The StartTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to use in a date range filter based on item start time. Each of the time ranges must be a value less than 120 days. In all calls, at least one date-range filter must be specified (i.e., you must
     * specify either the end time range or start time range in every request).
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeFrom;
    /**
     * The StartTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if <b>StartTimeFrom</b> is specified.
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeTo;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data controlling the pagination of the returned values. If you set a <b>DetailLevel</b> in this call, you must set pagination values. The <b>Pagination</b> field contains the number of items to be returned per page of
     * data (per call), and the page number to return with the current call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The GranularityLevel
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the subset of item and user fields to return. See <b>GetSellerList</b> for a list of the fields that are returned for each granularity level. For <b>GetSellerLis</b>t, use <b>DetailLevel</b> or <b>GranularityLevel</b> in a
     * request, but not both. For <b>GetSellerList</b>, if <b>GranularityLevel</b> is specified, <b>DetailLevel</b> is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $GranularityLevel;
    /**
     * The SKUArray
     * Meta informations extracted from the WSDL
     * - documentation: Container for a set of SKUs. Filters (reduces) the response to only include active listings that the seller listed with any of the specified SKUs. If multiple listings include the same SKU, they are all returned (assuming they also
     * match the other criteria in the GetSellerList request).<br> <br> SKUArray can be used to retrieve items listed by the user identified in AuthToken or in UserID.<br> <br> <span class="tablenote"><b>Note:</b> Listings with matching SKUs are returned
     * regardless of their Item.InventoryTrackingMethod settings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public $SKUArray;
    /**
     * The IncludeWatchCount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to include <b>WatchCount</b> in Item nodes returned. <b>WatchCount</b> is only returned with <b>DetailLevel ReturnAll</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeWatchCount;
    /**
     * The AdminEndedItemsOnly
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to return only items that were administratively ended based on a policy violation.
     * - minOccurs: 0
     * @var bool
     */
    public $AdminEndedItemsOnly;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The category ID for the items retrieved. If you specify <b>CategoryID</b> in a <b>GetSellerList</b> call, the response contains only items in the category you specify.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryID;
    /**
     * The IncludeVariations
     * Meta informations extracted from the WSDL
     * - documentation: If true, the <b>Variations</b> node is returned for all multi-variation listings in the response.<br> <br> <b>Note:</b> If the seller includes a large number of variations in many listings, using this flag may degrade the call's
     * performance. Therefore, when you use this flag, you may need to reduce the total number of items you're requesting at once. <br/><br/> For example, you may need to use shorter time ranges in the <b>EndTime</b> or <b>StartTime</b> filters, fewer
     * entries per page in <b>Pagination</b>, and/or <b>SKUArray</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeVariations;
    /**
     * Constructor method for GetSellerListRequestType
     * @uses GetSellerListRequestType::setUserID()
     * @uses GetSellerListRequestType::setMotorsDealerUsers()
     * @uses GetSellerListRequestType::setEndTimeFrom()
     * @uses GetSellerListRequestType::setEndTimeTo()
     * @uses GetSellerListRequestType::setSort()
     * @uses GetSellerListRequestType::setStartTimeFrom()
     * @uses GetSellerListRequestType::setStartTimeTo()
     * @uses GetSellerListRequestType::setPagination()
     * @uses GetSellerListRequestType::setGranularityLevel()
     * @uses GetSellerListRequestType::setSKUArray()
     * @uses GetSellerListRequestType::setIncludeWatchCount()
     * @uses GetSellerListRequestType::setAdminEndedItemsOnly()
     * @uses GetSellerListRequestType::setCategoryID()
     * @uses GetSellerListRequestType::setIncludeVariations()
     * @param string $userID
     * @param \macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers
     * @param string $endTimeFrom
     * @param string $endTimeTo
     * @param int $sort
     * @param string $startTimeFrom
     * @param string $startTimeTo
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $granularityLevel
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @param bool $includeWatchCount
     * @param bool $adminEndedItemsOnly
     * @param int $categoryID
     * @param bool $includeVariations
     */
    public function __construct($userID = null, \macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers = null, $endTimeFrom = null, $endTimeTo = null, $sort = null, $startTimeFrom = null, $startTimeTo = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $granularityLevel = null, \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null, $includeWatchCount = null, $adminEndedItemsOnly = null, $categoryID = null, $includeVariations = null)
    {
        $this
            ->setUserID($userID)
            ->setMotorsDealerUsers($motorsDealerUsers)
            ->setEndTimeFrom($endTimeFrom)
            ->setEndTimeTo($endTimeTo)
            ->setSort($sort)
            ->setStartTimeFrom($startTimeFrom)
            ->setStartTimeTo($startTimeTo)
            ->setPagination($pagination)
            ->setGranularityLevel($granularityLevel)
            ->setSKUArray($sKUArray)
            ->setIncludeWatchCount($includeWatchCount)
            ->setAdminEndedItemsOnly($adminEndedItemsOnly)
            ->setCategoryID($categoryID)
            ->setIncludeVariations($includeVariations);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get MotorsDealerUsers value
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType|null
     */
    public function getMotorsDealerUsers()
    {
        return $this->MotorsDealerUsers;
    }
    /**
     * Set MotorsDealerUsers value
     * @param \macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setMotorsDealerUsers(\macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers = null)
    {
        $this->MotorsDealerUsers = $motorsDealerUsers;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get SKUArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    public function getSKUArray()
    {
        return $this->SKUArray;
    }
    /**
     * Set SKUArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setSKUArray(\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null)
    {
        $this->SKUArray = $sKUArray;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get AdminEndedItemsOnly value
     * @return bool|null
     */
    public function getAdminEndedItemsOnly()
    {
        return $this->AdminEndedItemsOnly;
    }
    /**
     * Set AdminEndedItemsOnly value
     * @param bool $adminEndedItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setAdminEndedItemsOnly($adminEndedItemsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($adminEndedItemsOnly) && !is_bool($adminEndedItemsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($adminEndedItemsOnly)), __LINE__);
        }
        $this->AdminEndedItemsOnly = $adminEndedItemsOnly;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !is_numeric($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get IncludeVariations value
     * @return bool|null
     */
    public function getIncludeVariations()
    {
        return $this->IncludeVariations;
    }
    /**
     * Set IncludeVariations value
     * @param bool $includeVariations
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setIncludeVariations($includeVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeVariations) && !is_bool($includeVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeVariations)), __LINE__);
        }
        $this->IncludeVariations = $includeVariations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
