<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveSellingManagerInventoryFolderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Moves a Selling Manager inventory folder. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. This call is only applicable and accessible by eBay sellers with a Selling
 * Manager Pro subscription.
 * @subpackage Structs
 */
class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder that will be moved. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The NewParentFolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder that will be the new parent folder of the Selling Manager Inventory folder specified in the <b>FolderID</b> field. A user can retrieve <b>FolderID</b> values by using
     * <b>GetSellingManagerInventoryFolder</b>. If this field is omitted, the Selling Manager Inventory folder specified in the <b>FolderID</b> field will be moved to the root level.
     * - minOccurs: 0
     * @var int
     */
    public $NewParentFolderID;
    /**
     * Constructor method for MoveSellingManagerInventoryFolderRequestType
     * @uses MoveSellingManagerInventoryFolderRequestType::setFolderID()
     * @uses MoveSellingManagerInventoryFolderRequestType::setNewParentFolderID()
     * @param int $folderID
     * @param int $newParentFolderID
     */
    public function __construct($folderID = null, $newParentFolderID = null)
    {
        $this
            ->setFolderID($folderID)
            ->setNewParentFolderID($newParentFolderID);
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
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType
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
     * Get NewParentFolderID value
     * @return int|null
     */
    public function getNewParentFolderID()
    {
        return $this->NewParentFolderID;
    }
    /**
     * Set NewParentFolderID value
     * @param int $newParentFolderID
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType
     */
    public function setNewParentFolderID($newParentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($newParentFolderID) && !is_numeric($newParentFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newParentFolderID)), __LINE__);
        }
        $this->NewParentFolderID = $newParentFolderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MoveSellingManagerInventoryFolderRequestType
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
