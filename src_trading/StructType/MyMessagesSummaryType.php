<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary data for a given user's alerts and messages. This includes the numbers of new alerts and messages, unresolved alerts, flagged messages, and total alerts and messages.
 * @subpackage Structs
 */
class MyMessagesSummaryType extends AbstractStructBase
{
    /**
     * The FolderSummary
     * Meta information extracted from the WSDL
     * - documentation: Folder summary for each folder. Always returned for detail level ReturnSummary.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[]
     */
    protected ?array $FolderSummary = null;
    /**
     * The NewAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewAlertCount = null;
    /**
     * The NewMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewMessageCount = null;
    /**
     * The UnresolvedAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UnresolvedAlertCount = null;
    /**
     * The FlaggedMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of messages that have been flagged. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FlaggedMessageCount = null;
    /**
     * The TotalAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAlertCount = null;
    /**
     * The TotalMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of messages for a given user. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalMessageCount = null;
    /**
     * The NewHighPriorityCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of new high priority messages that a given user has.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewHighPriorityCount = null;
    /**
     * The TotalHighPriorityCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of high priority messages that a given user has.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalHighPriorityCount = null;
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
    public function __construct(?array $folderSummary = null, ?int $newAlertCount = null, ?int $newMessageCount = null, ?int $unresolvedAlertCount = null, ?int $flaggedMessageCount = null, ?int $totalAlertCount = null, ?int $totalMessageCount = null, ?int $newHighPriorityCount = null, ?int $totalHighPriorityCount = null)
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[]
     */
    public function getFolderSummary(): ?array
    {
        return $this->FolderSummary;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderSummary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderSummaryForArrayConstraintsFromSetFolderSummary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesSummaryTypeFolderSummaryItem) {
            // validation for constraint: itemType
            if (!$myMessagesSummaryTypeFolderSummaryItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType) {
                $invalidValues[] = is_object($myMessagesSummaryTypeFolderSummaryItem) ? get_class($myMessagesSummaryTypeFolderSummaryItem) : sprintf('%s(%s)', gettype($myMessagesSummaryTypeFolderSummaryItem), var_export($myMessagesSummaryTypeFolderSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderSummary property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FolderSummary value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType[] $folderSummary
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setFolderSummary(?array $folderSummary = null): self
    {
        // validation for constraint: array
        if ('' !== ($folderSummaryArrayErrorMessage = self::validateFolderSummaryForArrayConstraintsFromSetFolderSummary($folderSummary))) {
            throw new InvalidArgumentException($folderSummaryArrayErrorMessage, __LINE__);
        }
        $this->FolderSummary = $folderSummary;
        
        return $this;
    }
    /**
     * Add item to FolderSummary value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType $item
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function addToFolderSummary(\macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType) {
            throw new InvalidArgumentException(sprintf('The FolderSummary property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FolderSummary[] = $item;
        
        return $this;
    }
    /**
     * Get NewAlertCount value
     * @return int|null
     */
    public function getNewAlertCount(): ?int
    {
        return $this->NewAlertCount;
    }
    /**
     * Set NewAlertCount value
     * @param int $newAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewAlertCount(?int $newAlertCount = null): self
    {
        // validation for constraint: int
        if (!is_null($newAlertCount) && !(is_int($newAlertCount) || ctype_digit($newAlertCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newAlertCount, true), gettype($newAlertCount)), __LINE__);
        }
        $this->NewAlertCount = $newAlertCount;
        
        return $this;
    }
    /**
     * Get NewMessageCount value
     * @return int|null
     */
    public function getNewMessageCount(): ?int
    {
        return $this->NewMessageCount;
    }
    /**
     * Set NewMessageCount value
     * @param int $newMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewMessageCount(?int $newMessageCount = null): self
    {
        // validation for constraint: int
        if (!is_null($newMessageCount) && !(is_int($newMessageCount) || ctype_digit($newMessageCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newMessageCount, true), gettype($newMessageCount)), __LINE__);
        }
        $this->NewMessageCount = $newMessageCount;
        
        return $this;
    }
    /**
     * Get UnresolvedAlertCount value
     * @return int|null
     */
    public function getUnresolvedAlertCount(): ?int
    {
        return $this->UnresolvedAlertCount;
    }
    /**
     * Set UnresolvedAlertCount value
     * @param int $unresolvedAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setUnresolvedAlertCount(?int $unresolvedAlertCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unresolvedAlertCount) && !(is_int($unresolvedAlertCount) || ctype_digit($unresolvedAlertCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unresolvedAlertCount, true), gettype($unresolvedAlertCount)), __LINE__);
        }
        $this->UnresolvedAlertCount = $unresolvedAlertCount;
        
        return $this;
    }
    /**
     * Get FlaggedMessageCount value
     * @return int|null
     */
    public function getFlaggedMessageCount(): ?int
    {
        return $this->FlaggedMessageCount;
    }
    /**
     * Set FlaggedMessageCount value
     * @param int $flaggedMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setFlaggedMessageCount(?int $flaggedMessageCount = null): self
    {
        // validation for constraint: int
        if (!is_null($flaggedMessageCount) && !(is_int($flaggedMessageCount) || ctype_digit($flaggedMessageCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flaggedMessageCount, true), gettype($flaggedMessageCount)), __LINE__);
        }
        $this->FlaggedMessageCount = $flaggedMessageCount;
        
        return $this;
    }
    /**
     * Get TotalAlertCount value
     * @return int|null
     */
    public function getTotalAlertCount(): ?int
    {
        return $this->TotalAlertCount;
    }
    /**
     * Set TotalAlertCount value
     * @param int $totalAlertCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalAlertCount(?int $totalAlertCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalAlertCount) && !(is_int($totalAlertCount) || ctype_digit($totalAlertCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAlertCount, true), gettype($totalAlertCount)), __LINE__);
        }
        $this->TotalAlertCount = $totalAlertCount;
        
        return $this;
    }
    /**
     * Get TotalMessageCount value
     * @return int|null
     */
    public function getTotalMessageCount(): ?int
    {
        return $this->TotalMessageCount;
    }
    /**
     * Set TotalMessageCount value
     * @param int $totalMessageCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalMessageCount(?int $totalMessageCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalMessageCount) && !(is_int($totalMessageCount) || ctype_digit($totalMessageCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMessageCount, true), gettype($totalMessageCount)), __LINE__);
        }
        $this->TotalMessageCount = $totalMessageCount;
        
        return $this;
    }
    /**
     * Get NewHighPriorityCount value
     * @return int|null
     */
    public function getNewHighPriorityCount(): ?int
    {
        return $this->NewHighPriorityCount;
    }
    /**
     * Set NewHighPriorityCount value
     * @param int $newHighPriorityCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setNewHighPriorityCount(?int $newHighPriorityCount = null): self
    {
        // validation for constraint: int
        if (!is_null($newHighPriorityCount) && !(is_int($newHighPriorityCount) || ctype_digit($newHighPriorityCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newHighPriorityCount, true), gettype($newHighPriorityCount)), __LINE__);
        }
        $this->NewHighPriorityCount = $newHighPriorityCount;
        
        return $this;
    }
    /**
     * Get TotalHighPriorityCount value
     * @return int|null
     */
    public function getTotalHighPriorityCount(): ?int
    {
        return $this->TotalHighPriorityCount;
    }
    /**
     * Set TotalHighPriorityCount value
     * @param int $totalHighPriorityCount
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
     */
    public function setTotalHighPriorityCount(?int $totalHighPriorityCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalHighPriorityCount) && !(is_int($totalHighPriorityCount) || ctype_digit($totalHighPriorityCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalHighPriorityCount, true), gettype($totalHighPriorityCount)), __LINE__);
        }
        $this->TotalHighPriorityCount = $totalHighPriorityCount;
        
        return $this;
    }
}
