<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesFolderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details relating to a My Messages folder.
 * @subpackage Structs
 */
class MyMessagesFolderType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: An ID that uniquely identifies a My Messages folder.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The FolderName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a specified My Messages folder.
     * - minOccurs: 0
     * @var string
     */
    public $FolderName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesFolderType
     * @uses MyMessagesFolderType::setFolderID()
     * @uses MyMessagesFolderType::setFolderName()
     * @uses MyMessagesFolderType::setAny()
     * @param int $folderID
     * @param string $folderName
     * @param \DOMDocument $any
     */
    public function __construct($folderID = null, $folderName = null, \DOMDocument $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setFolderName($folderName)
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyMessagesFolderType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType
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
