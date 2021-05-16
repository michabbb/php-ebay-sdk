<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationsUsageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns an array of notifications sent to a given application identified by the appID (comes in the credentials). The result can be used by third-party developers troubleshoot issues with notifications. <br/><br/> Zero, one or many
 * notifications can be returned in the array. The set of notifications returned is limited to those that were sent between the <b>StartTime</b> and <b>EndTime</b> specified in the request. <br/><br/> If <b>StartTime</b> or <b>EndTime</b> filters were
 * not found in the request, then the response will contain the data for only one day (Now-1day). By default, maximum duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to <b>Notifications</b>,
 * <b>MarkDownMarkUpHistory</b> and <b>NotificationStatistics</b>. <br/><br/> Notifications are sent only if the <b>ItemID</b> is included in the request. If there is no <b>ItemID</b>, then only <b>Statistics</b> and <b>MarkDownMarkUpHistory</b>
 * information is included.
 * @subpackage Structs
 */
class GetNotificationsUsageResponseType extends AbstractResponseType
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the start date and time for the notification information that is returned by this call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the end date and time for the notification information that is returned by this call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The NotificationDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: List of notification objects representing the notifications sent to an application for the given time period. It will only be returned if ItemID was specified in the input request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType $NotificationDetailsArray = null;
    /**
     * The MarkUpMarkDownHistory
     * Meta information extracted from the WSDL
     * - documentation: List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType $MarkUpMarkDownHistory = null;
    /**
     * The NotificationStatistics
     * Meta information extracted from the WSDL
     * - documentation: Summary information about number of notifications that were successfully delivered, queued, failed, connection attempts made, connection timeouts, http errors for the given appID and given time period. By default, statistics for only
     * one day (Now-1day) is included. Maximum time duration allowed is 3 days (Now-3days).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationStatisticsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NotificationStatisticsType $NotificationStatistics = null;
    /**
     * Constructor method for GetNotificationsUsageResponseType
     * @uses GetNotificationsUsageResponseType::setStartTime()
     * @uses GetNotificationsUsageResponseType::setEndTime()
     * @uses GetNotificationsUsageResponseType::setNotificationDetailsArray()
     * @uses GetNotificationsUsageResponseType::setMarkUpMarkDownHistory()
     * @uses GetNotificationsUsageResponseType::setNotificationStatistics()
     * @param string $startTime
     * @param string $endTime
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType $notificationDetailsArray
     * @param \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory
     * @param \macropage\ebaysdk\trading\StructType\NotificationStatisticsType $notificationStatistics
     */
    public function __construct(?string $startTime = null, ?string $endTime = null, ?\macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType $notificationDetailsArray = null, ?\macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory = null, ?\macropage\ebaysdk\trading\StructType\NotificationStatisticsType $notificationStatistics = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setNotificationDetailsArray($notificationDetailsArray)
            ->setMarkUpMarkDownHistory($markUpMarkDownHistory)
            ->setNotificationStatistics($notificationStatistics);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get NotificationDetailsArray value
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType|null
     */
    public function getNotificationDetailsArray(): ?\macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
    {
        return $this->NotificationDetailsArray;
    }
    /**
     * Set NotificationDetailsArray value
     * @param \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType $notificationDetailsArray
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType
     */
    public function setNotificationDetailsArray(?\macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType $notificationDetailsArray = null): self
    {
        $this->NotificationDetailsArray = $notificationDetailsArray;
        
        return $this;
    }
    /**
     * Get MarkUpMarkDownHistory value
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType|null
     */
    public function getMarkUpMarkDownHistory(): ?\macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType
    {
        return $this->MarkUpMarkDownHistory;
    }
    /**
     * Set MarkUpMarkDownHistory value
     * @param \macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType
     */
    public function setMarkUpMarkDownHistory(?\macropage\ebaysdk\trading\StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory = null): self
    {
        $this->MarkUpMarkDownHistory = $markUpMarkDownHistory;
        
        return $this;
    }
    /**
     * Get NotificationStatistics value
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType|null
     */
    public function getNotificationStatistics(): ?\macropage\ebaysdk\trading\StructType\NotificationStatisticsType
    {
        return $this->NotificationStatistics;
    }
    /**
     * Set NotificationStatistics value
     * @param \macropage\ebaysdk\trading\StructType\NotificationStatisticsType $notificationStatistics
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageResponseType
     */
    public function setNotificationStatistics(?\macropage\ebaysdk\trading\StructType\NotificationStatisticsType $notificationStatistics = null): self
    {
        $this->NotificationStatistics = $notificationStatistics;
        
        return $this;
    }
}
