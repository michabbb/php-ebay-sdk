<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyMessagesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves information about the messages sent to a given user.
 * @subpackage Structs
 */
class GetMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The AlertIDs
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $AlertIDs = null;
    /**
     * The MessageIDs
     * Meta information extracted from the WSDL
     * - documentation: This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $MessageIDs = null;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a My Messages folder. If a <b>FolderID</b> value is provided, only messages from the specified folder are returned in the response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: The beginning of the date-range filter. Filtering takes into account the entire timestamp of when messages were sent. Messages expire after one year.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: The end of the date-range filter. See StartTime (which is the beginning of the date-range filter).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The ExternalMessageIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is currently available on the US site. A container for IDs that uniquely identify messages for a given user. If provided at the time of message creation, this ID can be used to retrieve messages and will take precedence
     * over message ID.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $ExternalMessageIDs = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Specifies how to create virtual pages in the returned list (such as total number of entries and total number of pages to return). Default value for <b>EntriesPerPage</b> with <b>GetMyMessages</b> is 25.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The IncludeHighPriorityMessageOnly
     * Meta information extracted from the WSDL
     * - documentation: If this field is included in the request and set to <code>true</code>, only High Priority messages are returned in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeHighPriorityMessageOnly = null;
    /**
     * Constructor method for GetMyMessagesRequestType
     * @uses GetMyMessagesRequestType::setAlertIDs()
     * @uses GetMyMessagesRequestType::setMessageIDs()
     * @uses GetMyMessagesRequestType::setFolderID()
     * @uses GetMyMessagesRequestType::setStartTime()
     * @uses GetMyMessagesRequestType::setEndTime()
     * @uses GetMyMessagesRequestType::setExternalMessageIDs()
     * @uses GetMyMessagesRequestType::setPagination()
     * @uses GetMyMessagesRequestType::setIncludeHighPriorityMessageOnly()
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @param int $folderID
     * @param string $startTime
     * @param string $endTime
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param bool $includeHighPriorityMessageOnly
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null, ?int $folderID = null, ?string $startTime = null, ?string $endTime = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?bool $includeHighPriorityMessageOnly = null)
    {
        $this
            ->setAlertIDs($alertIDs)
            ->setMessageIDs($messageIDs)
            ->setFolderID($folderID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setExternalMessageIDs($externalMessageIDs)
            ->setPagination($pagination)
            ->setIncludeHighPriorityMessageOnly($includeHighPriorityMessageOnly);
    }
    /**
     * Get AlertIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    public function getAlertIDs(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
    {
        return $this->AlertIDs;
    }
    /**
     * Set AlertIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setAlertIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null): self
    {
        $this->AlertIDs = $alertIDs;
        
        return $this;
    }
    /**
     * Get MessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    public function getMessageIDs(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setMessageIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null): self
    {
        $this->MessageIDs = $messageIDs;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
     * Get ExternalMessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType|null
     */
    public function getExternalMessageIDs(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
    {
        return $this->ExternalMessageIDs;
    }
    /**
     * Set ExternalMessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setExternalMessageIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs = null): self
    {
        $this->ExternalMessageIDs = $externalMessageIDs;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get IncludeHighPriorityMessageOnly value
     * @return bool|null
     */
    public function getIncludeHighPriorityMessageOnly(): ?bool
    {
        return $this->IncludeHighPriorityMessageOnly;
    }
    /**
     * Set IncludeHighPriorityMessageOnly value
     * @param bool $includeHighPriorityMessageOnly
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setIncludeHighPriorityMessageOnly(?bool $includeHighPriorityMessageOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeHighPriorityMessageOnly) && !is_bool($includeHighPriorityMessageOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeHighPriorityMessageOnly, true), gettype($includeHighPriorityMessageOnly)), __LINE__);
        }
        $this->IncludeHighPriorityMessageOnly = $includeHighPriorityMessageOnly;
        
        return $this;
    }
}
