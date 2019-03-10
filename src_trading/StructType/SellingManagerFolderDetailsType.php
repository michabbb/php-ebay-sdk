<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerFolderDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a Selling Manager folder.
 * @subpackage Structs
 */
class SellingManagerFolderDetailsType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The ParentFolderID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of the parent folder. If it exists, it is returned.
     * - minOccurs: 0
     * @var int
     */
    public $ParentFolderID;
    /**
     * The FolderLevel
     * Meta informations extracted from the WSDL
     * - documentation: Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     * - minOccurs: 0
     * @var int
     */
    public $FolderLevel;
    /**
     * The FolderName
     * Meta informations extracted from the WSDL
     * - documentation: Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or the ReviseSellingManagerInventoryFolder call.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The FolderComment
     * Meta informations extracted from the WSDL
     * - documentation: Comments associated with the folder. Returned if it exists.
     * - minOccurs: 0
     * @var string
     */
    public $FolderComment;
    /**
     * The ChildFolder
     * Meta informations extracted from the WSDL
     * - documentation: Container for sub-folder information. Returned if requested.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[]
     */
    public $ChildFolder;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - documentation: Date when this folder was created.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerFolderDetailsType
     * @uses SellingManagerFolderDetailsType::setFolderID()
     * @uses SellingManagerFolderDetailsType::setParentFolderID()
     * @uses SellingManagerFolderDetailsType::setFolderLevel()
     * @uses SellingManagerFolderDetailsType::setFolderName()
     * @uses SellingManagerFolderDetailsType::setFolderComment()
     * @uses SellingManagerFolderDetailsType::setChildFolder()
     * @uses SellingManagerFolderDetailsType::setCreationTime()
     * @uses SellingManagerFolderDetailsType::setAny()
     * @param int $folderID
     * @param int $parentFolderID
     * @param int $folderLevel
     * @param string $folderName
     * @param string $folderComment
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[] $childFolder
     * @param string $creationTime
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $parentFolderID = null, $folderLevel = null, $folderName = null, $folderComment = null, array $childFolder = array(), $creationTime = null, \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setParentFolderID($parentFolderID)
            ->setFolderLevel($folderLevel)
            ->setFolderName($folderName)
            ->setFolderComment($folderComment)
            ->setChildFolder($childFolder)
            ->setCreationTime($creationTime)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
     * Get FolderLevel value
     * @return int|null
     */
    public function getFolderLevel()
    {
        return $this->FolderLevel;
    }
    /**
     * Set FolderLevel value
     * @param int $folderLevel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setFolderLevel($folderLevel = null)
    {
        // validation for constraint: int
        if (!is_null($folderLevel) && !is_numeric($folderLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folderLevel)), __LINE__);
        }
        $this->FolderLevel = $folderLevel;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
     * Get FolderComment value
     * @return string|null
     */
    public function getFolderComment()
    {
        return $this->FolderComment;
    }
    /**
     * Set FolderComment value
     * @param string $folderComment
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setFolderComment($folderComment = null)
    {
        // validation for constraint: string
        if (!is_null($folderComment) && !is_string($folderComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderComment)), __LINE__);
        }
        $this->FolderComment = $folderComment;
        return $this;
    }
    /**
     * Get ChildFolder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[]|null
     */
    public function getChildFolder()
    {
        return $this->ChildFolder;
    }
    /**
     * Set ChildFolder value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[] $childFolder
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setChildFolder(array $childFolder = array())
    {
        foreach ($childFolder as $sellingManagerFolderDetailsTypeChildFolderItem) {
            // validation for constraint: itemType
            if (!$sellingManagerFolderDetailsTypeChildFolderItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ChildFolder property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType, "%s" given', is_object($sellingManagerFolderDetailsTypeChildFolderItem) ? get_class($sellingManagerFolderDetailsTypeChildFolderItem) : gettype($sellingManagerFolderDetailsTypeChildFolderItem)), __LINE__);
            }
        }
        $this->ChildFolder = $childFolder;
        return $this;
    }
    /**
     * Add item to ChildFolder value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function addToChildFolder(\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ChildFolder property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ChildFolder[] = $item;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
