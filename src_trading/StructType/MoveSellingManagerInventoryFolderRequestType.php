<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Moves a Selling Manager inventory folder. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. This call is only applicable and accessible by eBay sellers with a Selling
 * Manager Pro subscription.
 * @subpackage Structs
 */
class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder that will be moved. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The NewParentFolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder that will be the new parent folder of the Selling Manager Inventory folder specified in the <b>FolderID</b> field. A user can retrieve <b>FolderID</b> values by using
     * <b>GetSellingManagerInventoryFolder</b>. If this field is omitted, the Selling Manager Inventory folder specified in the <b>FolderID</b> field will be moved to the root level.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NewParentFolderID = null;
    /**
     * Constructor method for MoveSellingManagerInventoryFolderRequestType
     * @uses MoveSellingManagerInventoryFolderRequestType::setFolderID()
     * @uses MoveSellingManagerInventoryFolderRequestType::setNewParentFolderID()
     * @param int $folderID
     * @param int $newParentFolderID
     */
    public function __construct(?int $folderID = null, ?int $newParentFolderID = null)
    {
        $this
            ->setFolderID($folderID)
            ->setNewParentFolderID($newParentFolderID);
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
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType
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
     * Get NewParentFolderID value
     * @return int|null
     */
    public function getNewParentFolderID(): ?int
    {
        return $this->NewParentFolderID;
    }
    /**
     * Set NewParentFolderID value
     * @param int $newParentFolderID
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType
     */
    public function setNewParentFolderID(?int $newParentFolderID = null): self
    {
        // validation for constraint: int
        if (!is_null($newParentFolderID) && !(is_int($newParentFolderID) || ctype_digit($newParentFolderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newParentFolderID, true), gettype($newParentFolderID)), __LINE__);
        }
        $this->NewParentFolderID = $newParentFolderID;
        
        return $this;
    }
}
