<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyMessagesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves information about the messages sent to a given user.
 * @subpackage Structs
 */
class GetMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The AlertIDs
     * Meta informations extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public $AlertIDs;
    /**
     * The MessageIDs
     * Meta informations extracted from the WSDL
     * - documentation: This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
     */
    public $MessageIDs;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for a My Messages folder. If a <b>FolderID</b> value is provided, only messages from the specified folder are returned in the response.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: The beginning of the date-range filter. Filtering takes into account the entire timestamp of when messages were sent. Messages expire after one year.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: The end of the date-range filter. See StartTime (which is the beginning of the date-range filter).
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The ExternalMessageIDs
     * Meta informations extracted from the WSDL
     * - documentation: This field is currently available on the US site. A container for IDs that uniquely identify messages for a given user. If provided at the time of message creation, this ID can be used to retrieve messages and will take precedence
     * over message ID.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
     */
    public $ExternalMessageIDs;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create virtual pages in the returned list (such as total number of entries and total number of pages to return). Default value for <b>EntriesPerPage</b> with <b>GetMyMessages</b> is 25.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The IncludeHighPriorityMessageOnly
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included in the request and set to <code>true</code>, only High Priority messages are returned in the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeHighPriorityMessageOnly;
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
    public function __construct(\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null, $folderID = null, $startTime = null, $endTime = null, \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $includeHighPriorityMessageOnly = null)
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
    public function getAlertIDs()
    {
        return $this->AlertIDs;
    }
    /**
     * Set AlertIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setAlertIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null)
    {
        $this->AlertIDs = $alertIDs;
        return $this;
    }
    /**
     * Get MessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    public function getMessageIDs()
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setMessageIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this->MessageIDs = $messageIDs;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !is_numeric($folderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
     * Get ExternalMessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType|null
     */
    public function getExternalMessageIDs()
    {
        return $this->ExternalMessageIDs;
    }
    /**
     * Set ExternalMessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setExternalMessageIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType $externalMessageIDs = null)
    {
        $this->ExternalMessageIDs = $externalMessageIDs;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get IncludeHighPriorityMessageOnly value
     * @return bool|null
     */
    public function getIncludeHighPriorityMessageOnly()
    {
        return $this->IncludeHighPriorityMessageOnly;
    }
    /**
     * Set IncludeHighPriorityMessageOnly value
     * @param bool $includeHighPriorityMessageOnly
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
     */
    public function setIncludeHighPriorityMessageOnly($includeHighPriorityMessageOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeHighPriorityMessageOnly) && !is_bool($includeHighPriorityMessageOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeHighPriorityMessageOnly)), __LINE__);
        }
        $this->IncludeHighPriorityMessageOnly = $includeHighPriorityMessageOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesRequestType
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
