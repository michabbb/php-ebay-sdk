<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationsUsageRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves usage information about platform notifications for a given application. You can use this notification information to troubleshoot issues with platform notifications. You can call this up to 50 times per hour for a given
 * application.
 * @subpackage Structs
 */
class GetNotificationsUsageRequestType extends AbstractRequestType
{
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the start date and time for which notification information will be retrieved. <b>StartTime</b> is optional. If no <b>StartTime</b> is specified, the default value of 24 hours prior to the call time is used. If no
     * <b>StartTime</b> is specified or if an invalid <b>StartTime</b> is specified, date range errors are returned in the response. For a <b>StartTime</b> to be valid, it must be no more than 72 hours before the time of the call, it cannot be more recent
     * than the <b>EndTime</b>, and it cannot be later than the time of the call. If an invalid <b>StartTime</b> is specified, the default value is used.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the end date and time for which notification information will be retrieved. <b>EndTime</b> is optional. <br/><br/> If no <b>EndTime</b> is specified, the current time (the time the call is made) is used. If no
     * <b>EndTime</b> is specified or if an invalid <b>EndTime</b> is specified, date range errors are returned in the response. For an <b>EndTime</b> to be valid, it must be no more than 72 hours before the time the of the call, it cannot be before the
     * <b>StartTime</b>, and it cannot be later than the time of the call. If an invalid <b>EndTime</b> is specified, the current time is used.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an item ID for which detailed notification information will be retrieved. <b>ItemID</b> is optional. If no <b>ItemID</b> is specified, the response will not include any individual notification details. | Type that
     * represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * Constructor method for GetNotificationsUsageRequestType
     * @uses GetNotificationsUsageRequestType::setStartTime()
     * @uses GetNotificationsUsageRequestType::setEndTime()
     * @uses GetNotificationsUsageRequestType::setItemID()
     * @param string $startTime
     * @param string $endTime
     * @param string $itemID
     */
    public function __construct($startTime = null, $endTime = null, $itemID = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setItemID($itemID);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationsUsageRequestType
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
