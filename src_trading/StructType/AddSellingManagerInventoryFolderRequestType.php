<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Adds a new product folder to a user's Selling Manager account.
 * @subpackage Structs
 */
class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: Name of the new Selling Manager inventory folder.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FolderName = null;
    /**
     * The ParentFolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the parent Selling Manager inventory folder. If no <b>ParentFolderID</b> is submitted, the folder is added at the root level.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ParentFolderID = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Contains comments that will be associated with this folder.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * Constructor method for AddSellingManagerInventoryFolderRequestType
     * @uses AddSellingManagerInventoryFolderRequestType::setFolderName()
     * @uses AddSellingManagerInventoryFolderRequestType::setParentFolderID()
     * @uses AddSellingManagerInventoryFolderRequestType::setComment()
     * @param string $folderName
     * @param int $parentFolderID
     * @param string $comment
     */
    public function __construct(?string $folderName = null, ?int $parentFolderID = null, ?string $comment = null)
    {
        $this
            ->setFolderName($folderName)
            ->setParentFolderID($parentFolderID)
            ->setComment($comment);
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
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
     * Get ParentFolderID value
     * @return int|null
     */
    public function getParentFolderID(): ?int
    {
        return $this->ParentFolderID;
    }
    /**
     * Set ParentFolderID value
     * @param int $parentFolderID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
     */
    public function setParentFolderID(?int $parentFolderID = null): self
    {
        // validation for constraint: int
        if (!is_null($parentFolderID) && !(is_int($parentFolderID) || ctype_digit($parentFolderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentFolderID, true), gettype($parentFolderID)), __LINE__);
        }
        $this->ParentFolderID = $parentFolderID;
        
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        
        return $this;
    }
}
