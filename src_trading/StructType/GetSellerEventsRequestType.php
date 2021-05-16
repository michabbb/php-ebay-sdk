<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerEventsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used by a seller to retrieve changes to their own listings that have occurred within the last 48 hours, including price changes, available quantity, and other revisions to listing. <br/><br/> One of the available date
 * range filters must be used with this call.
 * @subpackage Structs
 */
class GetSellerEventsRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field should no longer be used, and will be ignored if it is included in a <b>GetSellerEvents</b> request. There are plans to remove this field from the public WSDL. The only eBay
     * user ID that can be used is the one associated with the authentication token. </span> | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The StartTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Describes the earliest (oldest) time to use in a time range filter based on item start time. Must be specified if <b>StartTimeTo</b> is specified. <br/><br/> Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b>
     * filter must be specified. <br/><br/> If you do not specify the corresponding <b>To</b> filter, it is set to the time you make the call. <br/><br/> For better results, the time period you use should be less than 48 hours. If 3000 or more items are
     * found, use a smaller time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>StartTimeTo</b> was 6:58 in a prior request, the current request should use 6:56 in <b>StartTimeFrom</b> (e.g., use ranges like
     * 5:56-6:58, 6:56-7:58, 7:56-8:58).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeFrom = null;
    /**
     * The StartTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Describes the latest (most recent) date to use in a time range filter based on item start time. If you specify the corresponding <b>From</b> filter, but you do not include <b>StartTimeTo</b>, the <b>StartTimeTo</b> is set to the time
     * you make the call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeTo = null;
    /**
     * The EndTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Describes the earliest (oldest) date to use in a time range filter based on item end time. Must be specified if <b>EndTimeTo</b> is specified. <br/><br/> Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b>
     * filter must be specified. If you do not specify the corresponding To filter, it is set to the time you make the call.<br> <br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller
     * time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>EndTimeTo</b> was 6:58 in a prior request, the current request should use 6:56 in <b>EndTimeFrom</b> (e.g., use ranges like 5:56-6:58, 6:56-7:58,
     * 7:56-8:58).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeFrom = null;
    /**
     * The EndTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Describes the latest (most recent) date to use in a time range filter based on item end time. <br/><br/> If you specify the corresponding <b>From</b> filter, but you do not include <b>EndTimeTo</b>, then <b>EndTimeTo</b> is set to
     * the time you make the call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeTo = null;
    /**
     * The ModTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Describes the earliest (oldest) date to use in a time range filter based on item modification time. Must be specified if <b>ModTimeTo</b> is specified. Either the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter
     * must be specified. If you do not specify the corresponding To filter, it is set to the time you make the call.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if <b>ModTimeTo</b> was 6:58 in a prior request, the current
     * request should use 6:56 in <b>ModTimeFrom</b> (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58). <br><br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller time range.
     * <br><br> If an unexpected item is returned (including an old item or an unchanged active item), please ignore the item. Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeFrom = null;
    /**
     * The ModTimeTo
     * Meta information extracted from the WSDL
     * - documentation: Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding <b>From</b> filter, but you do not include <b>ModTimeTo</b> , then
     * <b>ModTimeTo</b> is set to the time you make the call. Include a 2-minute buffer between the current time and the <b>ModTimeTo</b> filter.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeTo = null;
    /**
     * The NewItemFilter
     * Meta information extracted from the WSDL
     * - documentation: If true, response includes only items that have been modified within the <b>ModTime</b> range. If false, response includes all items.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NewItemFilter = null;
    /**
     * The IncludeWatchCount
     * Meta information extracted from the WSDL
     * - documentation: The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have an item added to their Watch Lists. The Watch count is returned in the
     * <b>WatchCount</b> field for each item in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeWatchCount = null;
    /**
     * The IncludeVariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to force the response to include variation specifics for multiple-variation listings. <br> <br> If false (or not specified), eBay keeps the response as small as possible by not returning
     * <b>Variation.VariationSpecifics</b>. It only returns <b>Variation.SKU</b> as an identifier (along with the variation price and other selling details). If the variation has no SKU, then <b>Variation.VariationSpecifics</b> is returned as the
     * variation's unique identifier.<br> <br> If true, <b>Variation.VariationSpecifics</b> is returned. (<b>Variation.SKU</b> is also returned, if the variation has a SKU.) This may be useful for applications that don't track variations by SKU.<br> <br>
     * Ignored when <b>HideVariations</b> is set to <b>true</b>. <br> <br> <b>Note:</b> If the seller includes a large number of variations in many listings, using this flag may degrade the call's performance. Therefore, when you use this flag, you may need
     * to reduce the total number of items you're requesting at once. For example, you may need to use shorter time ranges in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filters.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeVariationSpecifics = null;
    /**
     * The HideVariations
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to force the response to hide variation details for multiple-variation listings.<br> <br> If false (or not specified), eBay returns variation details (if any). In this case, the amount of detail can be controlled by
     * using <b>IncludeVariationSpecifics</b>.<br> <br> If true, variation details are not returned (and <b>IncludeVariationSpecifics</b> has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track
     * price and quantity details.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HideVariations = null;
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
    public function __construct(?string $userID = null, ?string $startTimeFrom = null, ?string $startTimeTo = null, ?string $endTimeFrom = null, ?string $endTimeTo = null, ?string $modTimeFrom = null, ?string $modTimeTo = null, ?bool $newItemFilter = null, ?bool $includeWatchCount = null, ?bool $includeVariationSpecifics = null, ?bool $hideVariations = null)
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
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom(): ?string
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setModTimeFrom(?string $modTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeFrom, true), gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo(): ?string
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setModTimeTo(?string $modTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeTo, true), gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
        
        return $this;
    }
    /**
     * Get NewItemFilter value
     * @return bool|null
     */
    public function getNewItemFilter(): ?bool
    {
        return $this->NewItemFilter;
    }
    /**
     * Set NewItemFilter value
     * @param bool $newItemFilter
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setNewItemFilter(?bool $newItemFilter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newItemFilter) && !is_bool($newItemFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newItemFilter, true), gettype($newItemFilter)), __LINE__);
        }
        $this->NewItemFilter = $newItemFilter;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
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
     * Get IncludeVariationSpecifics value
     * @return bool|null
     */
    public function getIncludeVariationSpecifics(): ?bool
    {
        return $this->IncludeVariationSpecifics;
    }
    /**
     * Set IncludeVariationSpecifics value
     * @param bool $includeVariationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setIncludeVariationSpecifics(?bool $includeVariationSpecifics = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeVariationSpecifics) && !is_bool($includeVariationSpecifics)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeVariationSpecifics, true), gettype($includeVariationSpecifics)), __LINE__);
        }
        $this->IncludeVariationSpecifics = $includeVariationSpecifics;
        
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations(): ?bool
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsRequestType
     */
    public function setHideVariations(?bool $hideVariations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideVariations, true), gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        
        return $this;
    }
}
