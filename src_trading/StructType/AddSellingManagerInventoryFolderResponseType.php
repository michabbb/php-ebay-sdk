<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerInventoryFolderResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type of the <b>AddSellingManagerInventoryFolder</b> call. Along with the standard Trading API response fields, a <b>FolderID</b> field will be returned if the folder creation operation is successful.
 * @subpackage Structs
 */
class AddSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the newly created Selling Manager Inventory Folder. This field will generally be returned unless the call is not successful at creating the new folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * Constructor method for AddSellingManagerInventoryFolderResponseType
     * @uses AddSellingManagerInventoryFolderResponseType::setFolderID()
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderResponseType
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
