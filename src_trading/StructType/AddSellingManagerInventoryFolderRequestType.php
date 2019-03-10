<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerInventoryFolderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Adds a new product folder to a user's Selling Manager account.
 * @subpackage Structs
 */
class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The FolderName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the new Selling Manager inventory folder.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The ParentFolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the parent Selling Manager inventory folder. If no <b>ParentFolderID</b> is submitted, the folder is added at the root level.
     * - minOccurs: 0
     * @var int
     */
    public $ParentFolderID;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Contains comments that will be associated with this folder.
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for AddSellingManagerInventoryFolderRequestType
     * @uses AddSellingManagerInventoryFolderRequestType::setFolderName()
     * @uses AddSellingManagerInventoryFolderRequestType::setParentFolderID()
     * @uses AddSellingManagerInventoryFolderRequestType::setComment()
     * @param string $folderName
     * @param int $parentFolderID
     * @param string $comment
     */
    public function __construct($folderName = null, $parentFolderID = null, $comment = null)
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
    public function getFolderName()
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @param string $folderName
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
     */
    public function setFolderName($folderName = null)
    {
        // validation for constraint: string
        if (!is_null($folderName) && !is_string($folderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderName)), __LINE__);
        }
        $this->FolderName = $folderName;
        return $this;
    }
    /**
     * Get ParentFolderID value
     * @return int|null
     */
    public function getParentFolderID()
    {
        return $this->ParentFolderID;
    }
    /**
     * Set ParentFolderID value
     * @param int $parentFolderID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
     */
    public function setParentFolderID($parentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($parentFolderID) && !is_numeric($parentFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parentFolderID)), __LINE__);
        }
        $this->ParentFolderID = $parentFolderID;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerInventoryFolderRequestType
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
