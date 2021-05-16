<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationStatisticsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary information about notifications delivered, failed, errors, queued for a given application ID and time period.
 * @subpackage Structs
 */
class NotificationStatisticsType extends AbstractStructBase
{
    /**
     * The DeliveredCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications delivered successfully during the given time period.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DeliveredCount = null;
    /**
     * The QueuedNewCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of new notifications that were queued during the given time period.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QueuedNewCount = null;
    /**
     * The QueuedPendingCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of pending notifications in the queue during the given time period.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QueuedPendingCount = null;
    /**
     * The ExpiredCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications that permanently failed during the given time period.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ExpiredCount = null;
    /**
     * The ErrorCount
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of notifications for which there were delivery errors during the given time period.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ErrorCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $deliveredCount = null, ?int $queuedNewCount = null, ?int $queuedPendingCount = null, ?int $expiredCount = null, ?int $errorCount = null, $any = null)
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
    public function getDeliveredCount(): ?int
    {
        return $this->DeliveredCount;
    }
    /**
     * Set DeliveredCount value
     * @param int $deliveredCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setDeliveredCount(?int $deliveredCount = null): self
    {
        // validation for constraint: int
        if (!is_null($deliveredCount) && !(is_int($deliveredCount) || ctype_digit($deliveredCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveredCount, true), gettype($deliveredCount)), __LINE__);
        }
        $this->DeliveredCount = $deliveredCount;
        
        return $this;
    }
    /**
     * Get QueuedNewCount value
     * @return int|null
     */
    public function getQueuedNewCount(): ?int
    {
        return $this->QueuedNewCount;
    }
    /**
     * Set QueuedNewCount value
     * @param int $queuedNewCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setQueuedNewCount(?int $queuedNewCount = null): self
    {
        // validation for constraint: int
        if (!is_null($queuedNewCount) && !(is_int($queuedNewCount) || ctype_digit($queuedNewCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queuedNewCount, true), gettype($queuedNewCount)), __LINE__);
        }
        $this->QueuedNewCount = $queuedNewCount;
        
        return $this;
    }
    /**
     * Get QueuedPendingCount value
     * @return int|null
     */
    public function getQueuedPendingCount(): ?int
    {
        return $this->QueuedPendingCount;
    }
    /**
     * Set QueuedPendingCount value
     * @param int $queuedPendingCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setQueuedPendingCount(?int $queuedPendingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($queuedPendingCount) && !(is_int($queuedPendingCount) || ctype_digit($queuedPendingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queuedPendingCount, true), gettype($queuedPendingCount)), __LINE__);
        }
        $this->QueuedPendingCount = $queuedPendingCount;
        
        return $this;
    }
    /**
     * Get ExpiredCount value
     * @return int|null
     */
    public function getExpiredCount(): ?int
    {
        return $this->ExpiredCount;
    }
    /**
     * Set ExpiredCount value
     * @param int $expiredCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setExpiredCount(?int $expiredCount = null): self
    {
        // validation for constraint: int
        if (!is_null($expiredCount) && !(is_int($expiredCount) || ctype_digit($expiredCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expiredCount, true), gettype($expiredCount)), __LINE__);
        }
        $this->ExpiredCount = $expiredCount;
        
        return $this;
    }
    /**
     * Get ErrorCount value
     * @return int|null
     */
    public function getErrorCount(): ?int
    {
        return $this->ErrorCount;
    }
    /**
     * Set ErrorCount value
     * @param int $errorCount
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setErrorCount(?int $errorCount = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCount) && !(is_int($errorCount) || ctype_digit($errorCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCount, true), gettype($errorCount)), __LINE__);
        }
        $this->ErrorCount = $errorCount;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\NotificationStatisticsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
