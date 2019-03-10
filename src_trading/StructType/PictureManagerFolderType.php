<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerFolderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerFolderType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Picture
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[]
     */
    public $Picture;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerFolderType
     * @uses PictureManagerFolderType::setFolderID()
     * @uses PictureManagerFolderType::setName()
     * @uses PictureManagerFolderType::setPicture()
     * @uses PictureManagerFolderType::setAny()
     * @param int $folderID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[] $picture
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $name = null, array $picture = array(), \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setName($name)
            ->setPicture($picture)
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Picture value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[]|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[] $picture
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function setPicture(array $picture = array())
    {
        foreach ($picture as $pictureManagerFolderTypePictureItem) {
            // validation for constraint: itemType
            if (!$pictureManagerFolderTypePictureItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureType) {
                throw new \InvalidArgumentException(sprintf('The Picture property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerPictureType, "%s" given', is_object($pictureManagerFolderTypePictureItem) ? get_class($pictureManagerFolderTypePictureItem) : gettype($pictureManagerFolderTypePictureItem)), __LINE__);
            }
        }
        $this->Picture = $picture;
        return $this;
    }
    /**
     * Add item to Picture value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function addToPicture(\macropage\ebaysdk\trading\StructType\PictureManagerPictureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureType) {
            throw new \InvalidArgumentException(sprintf('The Picture property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerPictureType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Picture[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureManagerFolderType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
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
