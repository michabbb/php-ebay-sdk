<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves Selling Manager Inventory folders. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a Selling Manager Inventory folder. The <b>FolderID</b> is used if the seller wants to retrieve a specific folder.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The MaxDepth
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the number of levels of subfolders to be returned in the response. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders
     * are returned. Ignored if the <b>FullRecursion</b> field is included and set to <code>True</code>. <br/>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxDepth = null;
    /**
     * The FullRecursion
     * Meta information extracted from the WSDL
     * - documentation: Displays the entire tree of a user's Selling Manager Inventory folders. If this is provided, the <b>FolderID</b> and <b>MaxDepth</b> fields are no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FullRecursion = null;
    /**
     * Constructor method for GetSellingManagerInventoryFolderRequestType
     * @uses GetSellingManagerInventoryFolderRequestType::setFolderID()
     * @uses GetSellingManagerInventoryFolderRequestType::setMaxDepth()
     * @uses GetSellingManagerInventoryFolderRequestType::setFullRecursion()
     * @param int $folderID
     * @param int $maxDepth
     * @param bool $fullRecursion
     */
    public function __construct(?int $folderID = null, ?int $maxDepth = null, ?bool $fullRecursion = null)
    {
        $this
            ->setFolderID($folderID)
            ->setMaxDepth($maxDepth)
            ->setFullRecursion($fullRecursion);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
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
     * Get MaxDepth value
     * @return int|null
     */
    public function getMaxDepth(): ?int
    {
        return $this->MaxDepth;
    }
    /**
     * Set MaxDepth value
     * @param int $maxDepth
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
     */
    public function setMaxDepth(?int $maxDepth = null): self
    {
        // validation for constraint: int
        if (!is_null($maxDepth) && !(is_int($maxDepth) || ctype_digit($maxDepth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDepth, true), gettype($maxDepth)), __LINE__);
        }
        $this->MaxDepth = $maxDepth;
        
        return $this;
    }
    /**
     * Get FullRecursion value
     * @return bool|null
     */
    public function getFullRecursion(): ?bool
    {
        return $this->FullRecursion;
    }
    /**
     * Set FullRecursion value
     * @param bool $fullRecursion
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
     */
    public function setFullRecursion(?bool $fullRecursion = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fullRecursion) && !is_bool($fullRecursion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fullRecursion, true), gettype($fullRecursion)), __LINE__);
        }
        $this->FullRecursion = $fullRecursion;
        
        return $this;
    }
}
