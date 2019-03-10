<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerDetailsType StructType
 * @subpackage Structs
 */
class PictureManagerDetailsType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta informations extracted from the WSDL
     * - documentation: This type is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The StorageUsed
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $StorageUsed;
    /**
     * The TotalStorageAvailable
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $TotalStorageAvailable;
    /**
     * The KeepOriginal
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $KeepOriginal;
    /**
     * The WatermarkEPS
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $WatermarkEPS;
    /**
     * The WatermarkUserID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $WatermarkUserID;
    /**
     * The Folder
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[]
     */
    public $Folder;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerDetailsType
     * @uses PictureManagerDetailsType::setSubscriptionLevel()
     * @uses PictureManagerDetailsType::setStorageUsed()
     * @uses PictureManagerDetailsType::setTotalStorageAvailable()
     * @uses PictureManagerDetailsType::setKeepOriginal()
     * @uses PictureManagerDetailsType::setWatermarkEPS()
     * @uses PictureManagerDetailsType::setWatermarkUserID()
     * @uses PictureManagerDetailsType::setFolder()
     * @uses PictureManagerDetailsType::setAny()
     * @param string $subscriptionLevel
     * @param int $storageUsed
     * @param int $totalStorageAvailable
     * @param bool $keepOriginal
     * @param bool $watermarkEPS
     * @param bool $watermarkUserID
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[] $folder
     * @param \DOMDocument $any
     */
    public function __construct($subscriptionLevel = null, $storageUsed = null, $totalStorageAvailable = null, $keepOriginal = null, $watermarkEPS = null, $watermarkUserID = null, array $folder = array(), \DOMDocument $any = null)
    {
        $this
            ->setSubscriptionLevel($subscriptionLevel)
            ->setStorageUsed($storageUsed)
            ->setTotalStorageAvailable($totalStorageAvailable)
            ->setKeepOriginal($keepOriginal)
            ->setWatermarkEPS($watermarkEPS)
            ->setWatermarkUserID($watermarkUserID)
            ->setFolder($folder)
            ->setAny($any);
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscriptionLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * Get StorageUsed value
     * @return int|null
     */
    public function getStorageUsed()
    {
        return $this->StorageUsed;
    }
    /**
     * Set StorageUsed value
     * @param int $storageUsed
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setStorageUsed($storageUsed = null)
    {
        // validation for constraint: int
        if (!is_null($storageUsed) && !is_numeric($storageUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($storageUsed)), __LINE__);
        }
        $this->StorageUsed = $storageUsed;
        return $this;
    }
    /**
     * Get TotalStorageAvailable value
     * @return int|null
     */
    public function getTotalStorageAvailable()
    {
        return $this->TotalStorageAvailable;
    }
    /**
     * Set TotalStorageAvailable value
     * @param int $totalStorageAvailable
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setTotalStorageAvailable($totalStorageAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalStorageAvailable) && !is_numeric($totalStorageAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalStorageAvailable)), __LINE__);
        }
        $this->TotalStorageAvailable = $totalStorageAvailable;
        return $this;
    }
    /**
     * Get KeepOriginal value
     * @return bool|null
     */
    public function getKeepOriginal()
    {
        return $this->KeepOriginal;
    }
    /**
     * Set KeepOriginal value
     * @param bool $keepOriginal
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setKeepOriginal($keepOriginal = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepOriginal) && !is_bool($keepOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepOriginal)), __LINE__);
        }
        $this->KeepOriginal = $keepOriginal;
        return $this;
    }
    /**
     * Get WatermarkEPS value
     * @return bool|null
     */
    public function getWatermarkEPS()
    {
        return $this->WatermarkEPS;
    }
    /**
     * Set WatermarkEPS value
     * @param bool $watermarkEPS
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setWatermarkEPS($watermarkEPS = null)
    {
        // validation for constraint: boolean
        if (!is_null($watermarkEPS) && !is_bool($watermarkEPS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($watermarkEPS)), __LINE__);
        }
        $this->WatermarkEPS = $watermarkEPS;
        return $this;
    }
    /**
     * Get WatermarkUserID value
     * @return bool|null
     */
    public function getWatermarkUserID()
    {
        return $this->WatermarkUserID;
    }
    /**
     * Set WatermarkUserID value
     * @param bool $watermarkUserID
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setWatermarkUserID($watermarkUserID = null)
    {
        // validation for constraint: boolean
        if (!is_null($watermarkUserID) && !is_bool($watermarkUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($watermarkUserID)), __LINE__);
        }
        $this->WatermarkUserID = $watermarkUserID;
        return $this;
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[]|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[] $folder
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setFolder(array $folder = array())
    {
        foreach ($folder as $pictureManagerDetailsTypeFolderItem) {
            // validation for constraint: itemType
            if (!$pictureManagerDetailsTypeFolderItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerFolderType) {
                throw new \InvalidArgumentException(sprintf('The Folder property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerFolderType, "%s" given', is_object($pictureManagerDetailsTypeFolderItem) ? get_class($pictureManagerDetailsTypeFolderItem) : gettype($pictureManagerDetailsTypeFolderItem)), __LINE__);
            }
        }
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Add item to Folder value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerFolderType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function addToFolder(\macropage\ebaysdk\trading\StructType\PictureManagerFolderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerFolderType) {
            throw new \InvalidArgumentException(sprintf('The Folder property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerFolderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Folder[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
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
