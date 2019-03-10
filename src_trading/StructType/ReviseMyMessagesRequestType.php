<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseMyMessagesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call can be used to mark one or more messages as 'Read', to flag one or more messages, and/or to move one or more messages to another My Messages folder. Any of these actions can be applied on up to 10 messages with one call.
 * @subpackage Structs
 */
class ReviseMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The MessageIDs
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values
     * can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>. <br> <br> <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or
     * flagged. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
     */
    public $MessageIDs;
    /**
     * The AlertIDs
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public $AlertIDs;
    /**
     * The Read
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is used to change the 'Read' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will mark all messages in the <b>MessageIDs</b> container as
     * 'Read'. Conversely, including this field and setting its value to <code>false</code> will mark all messages in the <b>MessageIDs</b> container as 'Unread'. The 'Read' status of a message can be retrieved by looking at the <b>Message.Read</b> boolean
     * field of the <b>GetMyMessages</b> call response. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>. <br> <br> <span
     * class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Read;
    /**
     * The Flagged
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is used to change the 'Flagged' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will flag all messages in the <b>MessageIDs</b>
     * container. Conversely, including this field and setting its value to <code>false</code> will unflag all messages in the <b>MessageIDs</b> container. The 'Flagged' status of a message can be retrieved by looking at the <b>Message.Flagged</b> boolean
     * field of the <b>GetMyMessages</b> call response. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>. <br> <br> <span
     * class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Flagged;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier of My Messages folder. A <b>FolderID</b> value is supplied if the user want to move the message(s) in the <b>MessageIDs</b> container to a different folder. <b>FolderID</b> values can be retrieved with the
     * <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnSummary</code>. <br> <br> In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and
     * <b>FolderID</b>. <br> <br> <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
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
    public function __construct(\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null, \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, $read = null, $flagged = null, $folderID = null)
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
    public function getMessageIDs()
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setMessageIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this->MessageIDs = $messageIDs;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setAlertIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null)
    {
        $this->AlertIDs = $alertIDs;
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setRead($read = null)
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($read)), __LINE__);
        }
        $this->Read = $read;
        return $this;
    }
    /**
     * Get Flagged value
     * @return bool|null
     */
    public function getFlagged()
    {
        return $this->Flagged;
    }
    /**
     * Set Flagged value
     * @param bool $flagged
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
     */
    public function setFlagged($flagged = null)
    {
        // validation for constraint: boolean
        if (!is_null($flagged) && !is_bool($flagged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($flagged)), __LINE__);
        }
        $this->Flagged = $flagged;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesRequestType
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
