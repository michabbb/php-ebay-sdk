<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerInventoryFolderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is uses to rename and/or move a Selling Manager Inventory folder. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The Folder
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public $Folder;
    /**
     * Constructor method for ReviseSellingManagerInventoryFolderRequestType
     * @uses ReviseSellingManagerInventoryFolderRequestType::setFolder()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this
            ->setFolder($folder);
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType
     */
    public function setFolder(\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType
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
