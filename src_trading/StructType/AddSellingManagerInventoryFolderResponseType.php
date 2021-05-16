<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerInventoryFolderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type of the <b>AddSellingManagerInventoryFolder</b> call. Along with the standard Trading API response fields, a <b>FolderID</b> field will be returned if the folder creation operation is successful.
 * @subpackage Structs
 */
class AddSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the newly created Selling Manager Inventory Folder. This field will generally be returned unless the call is not successful at creating the new folder.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * Constructor method for AddSellingManagerInventoryFolderResponseType
     * @uses AddSellingManagerInventoryFolderResponseType::setFolderID()
     * @param int $folderID
     */
    public function __construct(?int $folderID = null)
    {
        $this
            ->setFolderID($folderID);
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderResponseType
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
