<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesFolderSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Summary details for a specified My Messages folder.
 * @subpackage Structs
 */
class MyMessagesFolderSummaryType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies a My Messages folder. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: The name of a specified My Messages folder. For GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1) are not returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FolderName = null;
    /**
     * The NewAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewAlertCount = null;
    /**
     * The NewMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new messages in a given folder. Always returned for detail level ReturnSummary.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewMessageCount = null;
    /**
     * The TotalAlertCount
     * Meta information extracted from the WSDL
     * - documentation: This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAlertCount = null;
    /**
     * The TotalMessageCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of messages in a given folder. Always returned for detail level ReturnSummary.
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
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyMessagesFolderSummaryType
     * @uses MyMessagesFolderSummaryType::setFolderID()
     * @uses MyMessagesFolderSummaryType::setFolderName()
     * @uses MyMessagesFolderSummaryType::setNewAlertCount()
     * @uses MyMessagesFolderSummaryType::setNewMessageCount()
     * @uses MyMessagesFolderSummaryType::setTotalAlertCount()
     * @uses MyMessagesFolderSummaryType::setTotalMessageCount()
     * @uses MyMessagesFolderSummaryType::setNewHighPriorityCount()
     * @uses MyMessagesFolderSummaryType::setTotalHighPriorityCount()
     * @uses MyMessagesFolderSummaryType::setAny()
     * @param int $folderID
     * @param string $folderName
     * @param int $newAlertCount
     * @param int $newMessageCount
     * @param int $totalAlertCount
     * @param int $totalMessageCount
     * @param int $newHighPriorityCount
     * @param int $totalHighPriorityCount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $folderID = null, ?string $folderName = null, ?int $newAlertCount = null, ?int $newMessageCount = null, ?int $totalAlertCount = null, ?int $totalMessageCount = null, ?int $newHighPriorityCount = null, ?int $totalHighPriorityCount = null, $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setFolderName($folderName)
            ->setNewAlertCount($newAlertCount)
            ->setNewMessageCount($newMessageCount)
            ->setTotalAlertCount($totalAlertCount)
            ->setTotalMessageCount($totalMessageCount)
            ->setNewHighPriorityCount($newHighPriorityCount)
            ->setTotalHighPriorityCount($totalHighPriorityCount)
            ->setAny($any);
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID(): ?int
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
     */
    public function setFolderID(?int $folderID = null): self
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        
        return $this;
    }
    /**
     * Get FolderName value
     * @return string|null
     */
    public function getFolderName(): ?string
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @param string $folderName
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
     */
    public function setFolderName(?string $folderName = null): self
    {
        // validation for constraint: string
        if (!is_null($folderName) && !is_string($folderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderName, true), gettype($folderName)), __LINE__);
        }
        $this->FolderName = $folderName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderSummaryType
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
