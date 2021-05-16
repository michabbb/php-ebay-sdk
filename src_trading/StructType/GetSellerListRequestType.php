<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerListRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve an array of listings for the seller. The seller must be associated with the user/application token being used to make the call. <br/><br/> This call requires that either the 'Start Time' or 'End Time'
 * date range filters be used. The date range specified by either of these filters can not exceed 120 days or an error will occur. <br/><br/> This call also requires that pagination be used.
 * @subpackage Structs
 */
class GetSellerListRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field should no longer be used, and will be ignored if it is included in a <b>GetSellerList</b> request. There are plans to remove this field from the public WSDL. The only eBay
     * user ID that can be used is the one associated with the authentication token. </span> | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The MotorsDealerUsers
     * Meta information extracted from the WSDL
     * - documentation: Specifies the list of Motors Dealer sellers for which a special set of metrics can be requested. Applies to eBay Motors Pro applications only.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserIDArrayType $MotorsDealerUsers = null;
    /**
     * The EndTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to use in a date range filter based on item end time. Specify either an end-time range or a start-time range filter in every call request. Each of the time ranges must be a value less than 120
     * days.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeFrom = null;
    /**
     * The EndTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if <b>EndTimeFrom</b> is specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeTo = null;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field can be used to control the order in which returned listings are sorted (based on the listings' actual/scheduled end dates). Valid values are as follows: <ul> <li><code>1</code> (descending order)</li> <li>code>2</code>
     * (ascending order)</li> </ul>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Sort = null;
    /**
     * The StartTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to use in a date range filter based on item start time. Each of the time ranges must be a value less than 120 days. In all calls, at least one date-range filter must be specified (i.e., you must
     * specify either the end time range or start time range in every request).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeFrom = null;
    /**
     * The StartTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if <b>StartTimeFrom</b> is specified.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeTo = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container controls the maximum number of listings that can appear on one page of the result set, as well as the page number of the result to return. <br><br> The <b>GetSellerList</b> call requires that the <b>EntriesPerPage</b>
     * value be set. The <b>PageNumber</b> field is not required but will default to <code>1</code> if not included.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The GranularityLevel
     * Meta information extracted from the WSDL
     * - documentation: This field allows the user to control the amount of data that is returned in the response. See the <a href="#GranularityLevel">Granularity Level</a> table on this page for a list of the fields that are returned for each granularity
     * level. Either <b>GranularityLevel</b> or <b>DetailLevel</b> can be used in a <b>GetSellerList</b> call, but not both. If both are specified, <b>DetailLevel</b> is ignored. If neither are used, the response fields will be the ones shown for 'Coarse'
     * granularity.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GranularityLevel = null;
    /**
     * The SKUArray
     * Meta information extracted from the WSDL
     * - documentation: This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified. <br> <br>
     * <span class="tablenote"><b>Note:</b> Listings with matching SKUs are returned regardless of their <b>Item.InventoryTrackingMethod</b> setting. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $SKUArray = null;
    /**
     * The IncludeWatchCount
     * Meta information extracted from the WSDL
     * - documentation: This field may be included and set to <code>true</code> if the seller wishes to see the number of eBay users that are watching each listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeWatchCount = null;
    /**
     * The AdminEndedItemsOnly
     * Meta information extracted from the WSDL
     * - documentation: This boolean field can be included and set to <code>true</code> if the seller would like to retrieve any listings that were administratively ended by eBay due to a listing policy violation.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AdminEndedItemsOnly = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: If you specify a <b>CategoryID</b> value, the response will only contain listings in the category you specify.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryID = null;
    /**
     * The IncludeVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node is returned for all multi-variation listings in the response. <br> <br> <span class="tablenote"><b>Note: </b> If the seller has many
     * multiple-variation listings, that seller may not want to include variations in the <b>GetSellerList</b> response. Or, a seller can include variations data, but possibly limit the response by specifying shorter date ranges with the date range filters,
     * or by reducing the number of listings returned per results (decreasing the <b>Pagination.EntriesPerPage</b> value). </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeVariations = null;
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
    public function __construct(?string $userID = null, ?\macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers = null, ?string $endTimeFrom = null, ?string $endTimeTo = null, ?int $sort = null, ?string $startTimeFrom = null, ?string $startTimeTo = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $granularityLevel = null, ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null, ?bool $includeWatchCount = null, ?bool $adminEndedItemsOnly = null, ?int $categoryID = null, ?bool $includeVariations = null)
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
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get MotorsDealerUsers value
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType|null
     */
    public function getMotorsDealerUsers(): ?\macropage\ebaysdk\trading\StructType\UserIDArrayType
    {
        return $this->MotorsDealerUsers;
    }
    /**
     * Set MotorsDealerUsers value
     * @param \macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setMotorsDealerUsers(?\macropage\ebaysdk\trading\StructType\UserIDArrayType $motorsDealerUsers = null): self
    {
        $this->MotorsDealerUsers = $motorsDealerUsers;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
     * Get Sort value
     * @return int|null
     */
    public function getSort(): ?int
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setSort(?int $sort = null): self
    {
        // validation for constraint: int
        if (!is_null($sort) && !(is_int($sort) || ctype_digit($sort))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sort, true), gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        
        return $this;
    }
    /**
     * Get StartTimeFrom value
     * @return string|null
     */
    public function getStartTimeFrom(): ?string
    {
        return $this->StartTimeFrom;
    }
    /**
     * Set StartTimeFrom value
     * @param string $startTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setStartTimeFrom(?string $startTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom) && !is_string($startTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeFrom, true), gettype($startTimeFrom)), __LINE__);
        }
        $this->StartTimeFrom = $startTimeFrom;
        
        return $this;
    }
    /**
     * Get StartTimeTo value
     * @return string|null
     */
    public function getStartTimeTo(): ?string
    {
        return $this->StartTimeTo;
    }
    /**
     * Set StartTimeTo value
     * @param string $startTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setStartTimeTo(?string $startTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeTo) && !is_string($startTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeTo, true), gettype($startTimeTo)), __LINE__);
        }
        $this->StartTimeTo = $startTimeTo;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
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
    /**
     * Get SKUArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    public function getSKUArray(): ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType
    {
        return $this->SKUArray;
    }
    /**
     * Set SKUArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setSKUArray(?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null): self
    {
        $this->SKUArray = $sKUArray;
        
        return $this;
    }
    /**
     * Get IncludeWatchCount value
     * @return bool|null
     */
    public function getIncludeWatchCount(): ?bool
    {
        return $this->IncludeWatchCount;
    }
    /**
     * Set IncludeWatchCount value
     * @param bool $includeWatchCount
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setIncludeWatchCount(?bool $includeWatchCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeWatchCount) && !is_bool($includeWatchCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeWatchCount, true), gettype($includeWatchCount)), __LINE__);
        }
        $this->IncludeWatchCount = $includeWatchCount;
        
        return $this;
    }
    /**
     * Get AdminEndedItemsOnly value
     * @return bool|null
     */
    public function getAdminEndedItemsOnly(): ?bool
    {
        return $this->AdminEndedItemsOnly;
    }
    /**
     * Set AdminEndedItemsOnly value
     * @param bool $adminEndedItemsOnly
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setAdminEndedItemsOnly(?bool $adminEndedItemsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($adminEndedItemsOnly) && !is_bool($adminEndedItemsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adminEndedItemsOnly, true), gettype($adminEndedItemsOnly)), __LINE__);
        }
        $this->AdminEndedItemsOnly = $adminEndedItemsOnly;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setCategoryID(?int $categoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !(is_int($categoryID) || ctype_digit($categoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get IncludeVariations value
     * @return bool|null
     */
    public function getIncludeVariations(): ?bool
    {
        return $this->IncludeVariations;
    }
    /**
     * Set IncludeVariations value
     * @param bool $includeVariations
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListRequestType
     */
    public function setIncludeVariations(?bool $includeVariations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeVariations) && !is_bool($includeVariations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeVariations, true), gettype($includeVariations)), __LINE__);
        }
        $this->IncludeVariations = $includeVariations;
        
        return $this;
    }
}
