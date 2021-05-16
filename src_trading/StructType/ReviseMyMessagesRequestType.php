<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseMyMessagesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call can be used to mark one or more messages as 'Read', to flag one or more messages, and/or to move one or more messages to another My Messages folder. Any of these actions can be applied on up to 10 messages with one call.
 * @subpackage Structs
 */
class ReviseMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The MessageIDs
     * Meta information extracted from the WSDL
     * - documentation: This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values
     * can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>. <br> <br> <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or
     * flagged. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $MessageIDs = null;
    /**
     * The AlertIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $AlertIDs = null;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is used to change the 'Read' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will mark all messages in the <b>MessageIDs</b> container as
     * 'Read'. Conversely, including this field and setting its value to <code>false</code> will mark all messages in the <b>MessageIDs</b> container as 'Unread'. The 'Read' status of a message can be retrieved by looking at the <b>Message.Read</b> boolean
     * field of the <b>GetMyMessages</b> call response. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>. <br> <br> <span
     * class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Read = null;
    /**
     * The Flagged
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is used to change the 'Flagged' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will flag all messages in the <b>MessageIDs</b>
     * container. Conversely, including this field and setting its value to <code>false</code> will unflag all messages in the <b>MessageIDs</b> container. The 'Flagged' status of a message can be retrieved by looking at the <b>Message.Flagged</b> boolean
     * field of the <b>GetMyMessages</b> call response. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>. <br> <br> <span
     * class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Flagged = null;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier of My Messages folder. A <b>FolderID</b> value is supplied if the user want to move the message(s) in the <b>MessageIDs</b> container to a different folder. <b>FolderID</b> values can be retrieved with the
     * <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnSummary</code>. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and
     * <b>FolderID</b>. <br> <br> <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * Constructor method for ReviseMyMessagesRequestType
     * @uses ReviseMyMessagesRequestType::setMessageIDs()
     * @uses ReviseMyMessagesRequestType::setAlertIDs()
     * @uses ReviseMyMessagesRequestType::setRead()
     * @uses ReviseMyMessagesRequestType::setFlagged()
     * @uses ReviseMyMessagesRequestType::setFolderID()
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @param bool $read
     * @param bool $flagged
     * @param int $folderID
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, ?bool $read = null, ?bool $flagged = null, ?int $folderID = null)
    {
        $this
            ->setMessageIDs($messageIDs)
            ->setAlertIDs($alertIDs)
            ->setRead($read)
            ->setFlagged($flagged)
            ->setFolderID($folderID);
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setMessageIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null): self
    {
        $this->MessageIDs = $messageIDs;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setAlertIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null): self
    {
        $this->AlertIDs = $alertIDs;
        
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead(): ?bool
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setRead(?bool $read = null): self
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        
        return $this;
    }
    /**
     * Get Flagged value
     * @return bool|null
     */
    public function getFlagged(): ?bool
    {
        return $this->Flagged;
    }
    /**
     * Set Flagged value
     * @param bool $flagged
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setFlagged(?bool $flagged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagged) && !is_bool($flagged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagged, true), gettype($flagged)), __LINE__);
        }
        $this->Flagged = $flagged;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
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
}
