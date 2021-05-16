<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseMyMessagesFoldersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call can be used to add, remove, or rename a custom folder in <b>My eBay Messages</b>. Note that the Inbox and Sent folders cannot be removed or renamed in <b>My eBay Messages</b>. <br/><br/> A user can have up to 10 custom
 * folders in <b>My eBay Messages</b>, and it is possible to add, remove, or rename up to 10 custom folders with one <b>ReviseMyMessagesFolders</b> call
 * @subpackage Structs
 */
class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - documentation: This required field is used to indicate the type of operation to perform (add, remove, or rename a folder). See the enumeration descriptions below for more information on the usage, requirements, and limitations on each operation.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Operation = null;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values
     * can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate
     * to that folder in <b>My eBay Messages</b>. <br/><br/> <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay
     * will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name
     * passed into the first <b>FolderName</b> field in the request payload, and so on. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $FolderID = [];
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name
     * passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b>
     * field. <br/><br/> <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you
     * navigate to <b>My eBay Messages</b>. <br/><br/> <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will
     * process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name
     * passed into the first <b>FolderName</b> field in the request payload, and so on. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $FolderName = [];
    /**
     * Constructor method for ReviseMyMessagesFoldersRequestType
     * @uses ReviseMyMessagesFoldersRequestType::setOperation()
     * @uses ReviseMyMessagesFoldersRequestType::setFolderID()
     * @uses ReviseMyMessagesFoldersRequestType::setFolderName()
     * @param string $operation
     * @param int[] $folderID
     * @param string[] $folderName
     */
    public function __construct(?string $operation = null, array $folderID = [], array $folderName = [])
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
    public function getOperation(): ?string
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $operation
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::valueIsValid($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType', is_array($operation) ? implode(', ', $operation) : var_export($operation, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MyMessagesFolderOperationCodeType::getValidValues())), __LINE__);
        }
        $this->Operation = $operation;
        
        return $this;
    }
    /**
     * Get FolderID value
     * @return int[]
     */
    public function getFolderID(): array
    {
        return $this->FolderID;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderIDForArrayConstraintsFromSetFolderID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseMyMessagesFoldersRequestTypeFolderIDItem) {
            // validation for constraint: itemType
            if (!(is_int($reviseMyMessagesFoldersRequestTypeFolderIDItem) || ctype_digit($reviseMyMessagesFoldersRequestTypeFolderIDItem))) {
                $invalidValues[] = is_object($reviseMyMessagesFoldersRequestTypeFolderIDItem) ? get_class($reviseMyMessagesFoldersRequestTypeFolderIDItem) : sprintf('%s(%s)', gettype($reviseMyMessagesFoldersRequestTypeFolderIDItem), var_export($reviseMyMessagesFoldersRequestTypeFolderIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FolderID value
     * @throws InvalidArgumentException
     * @param int[] $folderID
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderID(array $folderID = []): self
    {
        // validation for constraint: array
        if ('' !== ($folderIDArrayErrorMessage = self::validateFolderIDForArrayConstraintsFromSetFolderID($folderID))) {
            throw new InvalidArgumentException($folderIDArrayErrorMessage, __LINE__);
        }
        $this->FolderID = $folderID;
        
        return $this;
    }
    /**
     * Add item to FolderID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function addToFolderID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The FolderID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FolderID[] = $item;
        
        return $this;
    }
    /**
     * Get FolderName value
     * @return string[]
     */
    public function getFolderName(): array
    {
        return $this->FolderName;
    }
    /**
     * This method is responsible for validating the values passed to the setFolderName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderNameForArrayConstraintsFromSetFolderName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseMyMessagesFoldersRequestTypeFolderNameItem) {
            // validation for constraint: itemType
            if (!is_string($reviseMyMessagesFoldersRequestTypeFolderNameItem)) {
                $invalidValues[] = is_object($reviseMyMessagesFoldersRequestTypeFolderNameItem) ? get_class($reviseMyMessagesFoldersRequestTypeFolderNameItem) : sprintf('%s(%s)', gettype($reviseMyMessagesFoldersRequestTypeFolderNameItem), var_export($reviseMyMessagesFoldersRequestTypeFolderNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FolderName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FolderName value
     * @throws InvalidArgumentException
     * @param string[] $folderName
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderName(array $folderName = []): self
    {
        // validation for constraint: array
        if ('' !== ($folderNameArrayErrorMessage = self::validateFolderNameForArrayConstraintsFromSetFolderName($folderName))) {
            throw new InvalidArgumentException($folderNameArrayErrorMessage, __LINE__);
        }
        $this->FolderName = $folderName;
        
        return $this;
    }
    /**
     * Add item to FolderName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseMyMessagesFoldersRequestType
     */
    public function addToFolderName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FolderName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FolderName[] = $item;
        
        return $this;
    }
}
