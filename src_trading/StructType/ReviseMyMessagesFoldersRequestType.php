<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseMyMessagesFoldersRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call can rename, remove, or restore My Messages folders for a given user.
 * @subpackage Structs
 */
class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of operation to perform on a specified My Messages folder. Operations include creating, renaming, removing, and restoring folders. Operations cannot be performed on the Inbox and Sent folders.
     * - minOccurs: 0
     * @var string
     */
    public $Operation;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: An eBay-generated unique identifier for a user's My Messages folder. The <b>FolderID</b> value for the folder to perform the operation on in passed into this field. <b>FolderID</b> values can be retrieved by calling
     * <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $FolderID;
    /**
     * The FolderName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a specified My Messages folder. Depending on the specified Operation, the value is an existing folder name or a new folder name. Retrieve existing FolderNames by calling GetMyMessages with a DetailLevel of ReturnSummary.
     * Inbox is FolderID = 0, and Sent is FolderID = 1.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FolderName;
    /**
     * Constructor method for ReviseMyMessagesFoldersRequestType
     * @uses ReviseMyMessagesFoldersRequestType::setOperation()
     * @uses ReviseMyMessagesFoldersRequestType::setFolderID()
     * @uses ReviseMyMessagesFoldersRequestType::setFolderName()
     * @param string $operation
     * @param int[] $folderID
     * @param string[] $folderName
     */
    public function __construct($operation = null, array $folderID = array(), array $folderName = array())
    {
        $this
            ->setOperation($operation)
            ->setFolderID($folderID)
            ->setFolderName($folderName);
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operation
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::valueIsValid($operation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operation, implode(', ', \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::getValidValues())), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int[]|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @throws \InvalidArgumentException
     * @param int[] $folderID
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderID(array $folderID = array())
    {
        foreach ($folderID as $reviseMyMessagesFoldersRequestTypeFolderIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($reviseMyMessagesFoldersRequestTypeFolderIDItem)) {
                throw new \InvalidArgumentException(sprintf('The FolderID property can only contain items of long, "%s" given', is_object($reviseMyMessagesFoldersRequestTypeFolderIDItem) ? get_class($reviseMyMessagesFoldersRequestTypeFolderIDItem) : gettype($reviseMyMessagesFoldersRequestTypeFolderIDItem)), __LINE__);
            }
        }
        $this->FolderID = $folderID;
        return $this;
    }
    /**
     * Add item to FolderID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function addToFolderID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The FolderID property can only contain items of long, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FolderID[] = $item;
        return $this;
    }
    /**
     * Get FolderName value
     * @return string[]|null
     */
    public function getFolderName()
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @throws \InvalidArgumentException
     * @param string[] $folderName
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderName(array $folderName = array())
    {
        foreach ($folderName as $reviseMyMessagesFoldersRequestTypeFolderNameItem) {
            // validation for constraint: itemType
            if (!is_string($reviseMyMessagesFoldersRequestTypeFolderNameItem)) {
                throw new \InvalidArgumentException(sprintf('The FolderName property can only contain items of string, "%s" given', is_object($reviseMyMessagesFoldersRequestTypeFolderNameItem) ? get_class($reviseMyMessagesFoldersRequestTypeFolderNameItem) : gettype($reviseMyMessagesFoldersRequestTypeFolderNameItem)), __LINE__);
            }
        }
        $this->FolderName = $folderName;
        return $this;
    }
    /**
     * Add item to FolderName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function addToFolderName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FolderName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FolderName[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
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
