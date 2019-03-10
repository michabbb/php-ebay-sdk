<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerInventoryFolderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Removes an inventory folder when a user deletes it in My eBay. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of the Selling Manager Inventory folder to be deleted.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * Constructor method for DeleteSellingManagerInventoryFolderRequestType
     * @uses DeleteSellingManagerInventoryFolderRequestType::setFolderID()
     * @param int $folderID
     */
    public function __construct($folderID = null)
    {
        $this
            ->setFolderID($folderID);
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerInventoryFolderRequestType
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
