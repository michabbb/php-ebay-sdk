<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationStatisticsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary information about notifications delivered, failed, errors, queued for a given application ID and time period.
 * @subpackage Structs
 */
class NotificationStatisticsType extends AbstractStructBase
{
    /**
     * The DeliveredCount
     * Meta informations extracted from the WSDL
     * - documentation: Returns the number of notifications delivered successfully during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $DeliveredCount;
    /**
     * The QueuedNewCount
     * Meta informations extracted from the WSDL
     * - documentation: Returns the number of new notifications that were queued during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $QueuedNewCount;
    /**
     * The QueuedPendingCount
     * Meta informations extracted from the WSDL
     * - documentation: Returns the number of pending notifications in the queue during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $QueuedPendingCount;
    /**
     * The ExpiredCount
     * Meta informations extracted from the WSDL
     * - documentation: Returns the number of notifications that permanently failed during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $ExpiredCount;
    /**
     * The ErrorCount
     * Meta informations extracted from the WSDL
     * - documentation: Returns the number of notifications for which there were delivery errors during the given time period.
     * - minOccurs: 0
     * @var int
     */
    public $ErrorCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationStatisticsType
     * @uses NotificationStatisticsType::setDeliveredCount()
     * @uses NotificationStatisticsType::setQueuedNewCount()
     * @uses NotificationStatisticsType::setQueuedPendingCount()
     * @uses NotificationStatisticsType::setExpiredCount()
     * @uses NotificationStatisticsType::setErrorCount()
     * @uses NotificationStatisticsType::setAny()
     * @param int $deliveredCount
     * @param int $queuedNewCount
     * @param int $queuedPendingCount
     * @param int $expiredCount
     * @param int $errorCount
     * @param \DOMDocument $any
     */
    public function __construct($deliveredCount = null, $queuedNewCount = null, $queuedPendingCount = null, $expiredCount = null, $errorCount = null, \DOMDocument $any = null)
    {
        $this
            ->setDeliveredCount($deliveredCount)
            ->setQueuedNewCount($queuedNewCount)
            ->setQueuedPendingCount($queuedPendingCount)
            ->setExpiredCount($expiredCount)
            ->setErrorCount($errorCount)
            ->setAny($any);
    }
    /**
     * Get DeliveredCount value
     * @return int|null
     */
    public function getDeliveredCount()
    {
        return $this->DeliveredCount;
    }
    /**
     * Set DeliveredCount value
     * @param int $deliveredCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setDeliveredCount($deliveredCount = null)
    {
        // validation for constraint: int
        if (!is_null($deliveredCount) && !is_numeric($deliveredCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deliveredCount)), __LINE__);
        }
        $this->DeliveredCount = $deliveredCount;
        return $this;
    }
    /**
     * Get QueuedNewCount value
     * @return int|null
     */
    public function getQueuedNewCount()
    {
        return $this->QueuedNewCount;
    }
    /**
     * Set QueuedNewCount value
     * @param int $queuedNewCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setQueuedNewCount($queuedNewCount = null)
    {
        // validation for constraint: int
        if (!is_null($queuedNewCount) && !is_numeric($queuedNewCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queuedNewCount)), __LINE__);
        }
        $this->QueuedNewCount = $queuedNewCount;
        return $this;
    }
    /**
     * Get QueuedPendingCount value
     * @return int|null
     */
    public function getQueuedPendingCount()
    {
        return $this->QueuedPendingCount;
    }
    /**
     * Set QueuedPendingCount value
     * @param int $queuedPendingCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setQueuedPendingCount($queuedPendingCount = null)
    {
        // validation for constraint: int
        if (!is_null($queuedPendingCount) && !is_numeric($queuedPendingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queuedPendingCount)), __LINE__);
        }
        $this->QueuedPendingCount = $queuedPendingCount;
        return $this;
    }
    /**
     * Get ExpiredCount value
     * @return int|null
     */
    public function getExpiredCount()
    {
        return $this->ExpiredCount;
    }
    /**
     * Set ExpiredCount value
     * @param int $expiredCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setExpiredCount($expiredCount = null)
    {
        // validation for constraint: int
        if (!is_null($expiredCount) && !is_numeric($expiredCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expiredCount)), __LINE__);
        }
        $this->ExpiredCount = $expiredCount;
        return $this;
    }
    /**
     * Get ErrorCount value
     * @return int|null
     */
    public function getErrorCount()
    {
        return $this->ErrorCount;
    }
    /**
     * Set ErrorCount value
     * @param int $errorCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setErrorCount($errorCount = null)
    {
        // validation for constraint: int
        if (!is_null($errorCount) && !is_numeric($errorCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCount)), __LINE__);
        }
        $this->ErrorCount = $errorCount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NotificationStatisticsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
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
