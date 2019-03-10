<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary data for a given user's alerts and messages. This includes the numbers of new alerts and messages, unresolved alerts, flagged messages, and total alerts and messages.
 * @subpackage Structs
 */
class MyMessagesSummaryType extends AbstractStructBase
{
    /**
     * The FolderSummary
     * Meta informations extracted from the WSDL
     * - documentation: Folder summary for each folder. Always returned for detail level ReturnSummary.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[]
     */
    public $FolderSummary;
    /**
     * The NewAlertCount
     * Meta informations extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $NewAlertCount;
    /**
     * The NewMessageCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $NewMessageCount;
    /**
     * The UnresolvedAlertCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $UnresolvedAlertCount;
    /**
     * The FlaggedMessageCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of messages that have been flagged. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $FlaggedMessageCount;
    /**
     * The TotalAlertCount
     * Meta informations extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAlertCount;
    /**
     * The TotalMessageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of messages for a given user. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int
     */
    public $TotalMessageCount;
    /**
     * The NewHighPriorityCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of new high priority messages that a given user has.
     * - minOccurs: 0
     * @var int
     */
    public $NewHighPriorityCount;
    /**
     * The TotalHighPriorityCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of high priority messages that a given user has.
     * - minOccurs: 0
     * @var int
     */
    public $TotalHighPriorityCount;
    /**
     * Constructor method for MyMessagesSummaryType
     * @uses MyMessagesSummaryType::setFolderSummary()
     * @uses MyMessagesSummaryType::setNewAlertCount()
     * @uses MyMessagesSummaryType::setNewMessageCount()
     * @uses MyMessagesSummaryType::setUnresolvedAlertCount()
     * @uses MyMessagesSummaryType::setFlaggedMessageCount()
     * @uses MyMessagesSummaryType::setTotalAlertCount()
     * @uses MyMessagesSummaryType::setTotalMessageCount()
     * @uses MyMessagesSummaryType::setNewHighPriorityCount()
     * @uses MyMessagesSummaryType::setTotalHighPriorityCount()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[] $folderSummary
     * @param int $newAlertCount
     * @param int $newMessageCount
     * @param int $unresolvedAlertCount
     * @param int $flaggedMessageCount
     * @param int $totalAlertCount
     * @param int $totalMessageCount
     * @param int $newHighPriorityCount
     * @param int $totalHighPriorityCount
     */
    public function __construct(array $folderSummary = array(), $newAlertCount = null, $newMessageCount = null, $unresolvedAlertCount = null, $flaggedMessageCount = null, $totalAlertCount = null, $totalMessageCount = null, $newHighPriorityCount = null, $totalHighPriorityCount = null)
    {
        $this
            ->setFolderSummary($folderSummary)
            ->setNewAlertCount($newAlertCount)
            ->setNewMessageCount($newMessageCount)
            ->setUnresolvedAlertCount($unresolvedAlertCount)
            ->setFlaggedMessageCount($flaggedMessageCount)
            ->setTotalAlertCount($totalAlertCount)
            ->setTotalMessageCount($totalMessageCount)
            ->setNewHighPriorityCount($newHighPriorityCount)
            ->setTotalHighPriorityCount($totalHighPriorityCount);
    }
    /**
     * Get FolderSummary value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[]|null
     */
    public function getFolderSummary()
    {
        return $this->FolderSummary;
    }
    /**
     * Set FolderSummary value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[] $folderSummary
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setFolderSummary(array $folderSummary = array())
    {
        foreach ($folderSummary as $myMessagesSummaryTypeFolderSummaryItem) {
            // validation for constraint: itemType
            if (!$myMessagesSummaryTypeFolderSummaryItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType) {
                throw new \InvalidArgumentException(sprintf('The FolderSummary property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType, "%s" given', is_object($myMessagesSummaryTypeFolderSummaryItem) ? get_class($myMessagesSummaryTypeFolderSummaryItem) : gettype($myMessagesSummaryTypeFolderSummaryItem)), __LINE__);
            }
        }
        $this->FolderSummary = $folderSummary;
        return $this;
    }
    /**
     * Add item to FolderSummary value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType $item
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function addToFolderSummary(\macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType) {
            throw new \InvalidArgumentException(sprintf('The FolderSummary property can only contain items of \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FolderSummary[] = $item;
        return $this;
    }
    /**
     * Get NewAlertCount value
     * @return int|null
     */
    public function getNewAlertCount()
    {
        return $this->NewAlertCount;
    }
    /**
     * Set NewAlertCount value
     * @param int $newAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewAlertCount($newAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($newAlertCount) && !is_numeric($newAlertCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newAlertCount)), __LINE__);
        }
        $this->NewAlertCount = $newAlertCount;
        return $this;
    }
    /**
     * Get NewMessageCount value
     * @return int|null
     */
    public function getNewMessageCount()
    {
        return $this->NewMessageCount;
    }
    /**
     * Set NewMessageCount value
     * @param int $newMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewMessageCount($newMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($newMessageCount) && !is_numeric($newMessageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newMessageCount)), __LINE__);
        }
        $this->NewMessageCount = $newMessageCount;
        return $this;
    }
    /**
     * Get UnresolvedAlertCount value
     * @return int|null
     */
    public function getUnresolvedAlertCount()
    {
        return $this->UnresolvedAlertCount;
    }
    /**
     * Set UnresolvedAlertCount value
     * @param int $unresolvedAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setUnresolvedAlertCount($unresolvedAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($unresolvedAlertCount) && !is_numeric($unresolvedAlertCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unresolvedAlertCount)), __LINE__);
        }
        $this->UnresolvedAlertCount = $unresolvedAlertCount;
        return $this;
    }
    /**
     * Get FlaggedMessageCount value
     * @return int|null
     */
    public function getFlaggedMessageCount()
    {
        return $this->FlaggedMessageCount;
    }
    /**
     * Set FlaggedMessageCount value
     * @param int $flaggedMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setFlaggedMessageCount($flaggedMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($flaggedMessageCount) && !is_numeric($flaggedMessageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($flaggedMessageCount)), __LINE__);
        }
        $this->FlaggedMessageCount = $flaggedMessageCount;
        return $this;
    }
    /**
     * Get TotalAlertCount value
     * @return int|null
     */
    public function getTotalAlertCount()
    {
        return $this->TotalAlertCount;
    }
    /**
     * Set TotalAlertCount value
     * @param int $totalAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalAlertCount($totalAlertCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalAlertCount) && !is_numeric($totalAlertCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalAlertCount)), __LINE__);
        }
        $this->TotalAlertCount = $totalAlertCount;
        return $this;
    }
    /**
     * Get TotalMessageCount value
     * @return int|null
     */
    public function getTotalMessageCount()
    {
        return $this->TotalMessageCount;
    }
    /**
     * Set TotalMessageCount value
     * @param int $totalMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalMessageCount($totalMessageCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalMessageCount) && !is_numeric($totalMessageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalMessageCount)), __LINE__);
        }
        $this->TotalMessageCount = $totalMessageCount;
        return $this;
    }
    /**
     * Get NewHighPriorityCount value
     * @return int|null
     */
    public function getNewHighPriorityCount()
    {
        return $this->NewHighPriorityCount;
    }
    /**
     * Set NewHighPriorityCount value
     * @param int $newHighPriorityCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewHighPriorityCount($newHighPriorityCount = null)
    {
        // validation for constraint: int
        if (!is_null($newHighPriorityCount) && !is_numeric($newHighPriorityCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newHighPriorityCount)), __LINE__);
        }
        $this->NewHighPriorityCount = $newHighPriorityCount;
        return $this;
    }
    /**
     * Get TotalHighPriorityCount value
     * @return int|null
     */
    public function getTotalHighPriorityCount()
    {
        return $this->TotalHighPriorityCount;
    }
    /**
     * Set TotalHighPriorityCount value
     * @param int $totalHighPriorityCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalHighPriorityCount($totalHighPriorityCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalHighPriorityCount) && !is_numeric($totalHighPriorityCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalHighPriorityCount)), __LINE__);
        }
        $this->TotalHighPriorityCount = $totalHighPriorityCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
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
