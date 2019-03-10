<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryFolderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves Selling Manager Inventory folders. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for a Selling Manager Inventory folder. The <b>FolderID</b> is used if the seller wants to retrieve a specific folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The MaxDepth
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the number of levels of subfolders to be returned in the response. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders
     * are returned. Ignored if the <b>FullRecursion</b> field is included and set to <code>True</code>. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $MaxDepth;
    /**
     * The FullRecursion
     * Meta informations extracted from the WSDL
     * - documentation: Displays the entire tree of a user's Selling Manager Inventory folders. If this is provided, the <b>FolderID</b> and <b>MaxDepth</b> fields are no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $FullRecursion;
    /**
     * Constructor method for GetSellingManagerInventoryFolderRequestType
     * @uses GetSellingManagerInventoryFolderRequestType::setFolderID()
     * @uses GetSellingManagerInventoryFolderRequestType::setMaxDepth()
     * @uses GetSellingManagerInventoryFolderRequestType::setFullRecursion()
     * @param int $folderID
     * @param int $maxDepth
     * @param bool $fullRecursion
     */
    public function __construct($folderID = null, $maxDepth = null, $fullRecursion = null)
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
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
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
     * Get MaxDepth value
     * @return int|null
     */
    public function getMaxDepth()
    {
        return $this->MaxDepth;
    }
    /**
     * Set MaxDepth value
     * @param int $maxDepth
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
     */
    public function setMaxDepth($maxDepth = null)
    {
        // validation for constraint: int
        if (!is_null($maxDepth) && !is_numeric($maxDepth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDepth)), __LINE__);
        }
        $this->MaxDepth = $maxDepth;
        return $this;
    }
    /**
     * Get FullRecursion value
     * @return bool|null
     */
    public function getFullRecursion()
    {
        return $this->FullRecursion;
    }
    /**
     * Set FullRecursion value
     * @param bool $fullRecursion
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
     */
    public function setFullRecursion($fullRecursion = null)
    {
        // validation for constraint: boolean
        if (!is_null($fullRecursion) && !is_bool($fullRecursion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fullRecursion)), __LINE__);
        }
        $this->FullRecursion = $fullRecursion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryFolderRequestType
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
