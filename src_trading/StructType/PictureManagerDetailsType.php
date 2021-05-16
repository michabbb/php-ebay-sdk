<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerDetailsType StructType
 * @subpackage Structs
 */
class PictureManagerDetailsType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: This type is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SubscriptionLevel = null;
    /**
     * The StorageUsed
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StorageUsed = null;
    /**
     * The TotalStorageAvailable
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalStorageAvailable = null;
    /**
     * The KeepOriginal
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KeepOriginal = null;
    /**
     * The WatermarkEPS
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $WatermarkEPS = null;
    /**
     * The WatermarkUserID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $WatermarkUserID = null;
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[]
     */
    protected array $Folder = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $subscriptionLevel = null, ?int $storageUsed = null, ?int $totalStorageAvailable = null, ?bool $keepOriginal = null, ?bool $watermarkEPS = null, ?bool $watermarkUserID = null, array $folder = [], $any = null)
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
    public function getSubscriptionLevel(): ?string
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setSubscriptionLevel(?string $subscriptionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        
        return $this;
    }
    /**
     * Get StorageUsed value
     * @return int|null
     */
    public function getStorageUsed(): ?int
    {
        return $this->StorageUsed;
    }
    /**
     * Set StorageUsed value
     * @param int $storageUsed
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setStorageUsed(?int $storageUsed = null): self
    {
        // validation for constraint: int
        if (!is_null($storageUsed) && !(is_int($storageUsed) || ctype_digit($storageUsed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageUsed, true), gettype($storageUsed)), __LINE__);
        }
        $this->StorageUsed = $storageUsed;
        
        return $this;
    }
    /**
     * Get TotalStorageAvailable value
     * @return int|null
     */
    public function getTotalStorageAvailable(): ?int
    {
        return $this->TotalStorageAvailable;
    }
    /**
     * Set TotalStorageAvailable value
     * @param int $totalStorageAvailable
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setTotalStorageAvailable(?int $totalStorageAvailable = null): self
    {
        // validation for constraint: int
        if (!is_null($totalStorageAvailable) && !(is_int($totalStorageAvailable) || ctype_digit($totalStorageAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalStorageAvailable, true), gettype($totalStorageAvailable)), __LINE__);
        }
        $this->TotalStorageAvailable = $totalStorageAvailable;
        
        return $this;
    }
    /**
     * Get KeepOriginal value
     * @return bool|null
     */
    public function getKeepOriginal(): ?bool
    {
        return $this->KeepOriginal;
    }
    /**
     * Set KeepOriginal value
     * @param bool $keepOriginal
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setKeepOriginal(?bool $keepOriginal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keepOriginal) && !is_bool($keepOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepOriginal, true), gettype($keepOriginal)), __LINE__);
        }
        $this->KeepOriginal = $keepOriginal;
        
        return $this;
    }
    /**
     * Get WatermarkEPS value
     * @return bool|null
     */
    public function getWatermarkEPS(): ?bool
    {
        return $this->WatermarkEPS;
    }
    /**
     * Set WatermarkEPS value
     * @param bool $watermarkEPS
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setWatermarkEPS(?bool $watermarkEPS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($watermarkEPS) && !is_bool($watermarkEPS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($watermarkEPS, true), gettype($watermarkEPS)), __LINE__);
        }
        $this->WatermarkEPS = $watermarkEPS;
        
        return $this;
    }
    /**
     * Get WatermarkUserID value
     * @return bool|null
     */
    public function getWatermarkUserID(): ?bool
    {
        return $this->WatermarkUserID;
    }
    /**
     * Set WatermarkUserID value
     * @param bool $watermarkUserID
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setWatermarkUserID(?bool $watermarkUserID = null): self
    {
        // validation for constraint: boolean
        if (!is_null($watermarkUserID) && !is_bool($watermarkUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($watermarkUserID, true), gettype($watermarkUserID)), __LINE__);
        }
        $this->WatermarkUserID = $watermarkUserID;
        
        return $this;
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[]
     */
    public function getFolder(): array
    {
        return $this->Folder;
    }
    /**
     * This method is responsible for validating the values passed to the setFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFolderForArrayConstraintsFromSetFolder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerDetailsTypeFolderItem) {
            // validation for constraint: itemType
            if (!$pictureManagerDetailsTypeFolderItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerFolderType) {
                $invalidValues[] = is_object($pictureManagerDetailsTypeFolderItem) ? get_class($pictureManagerDetailsTypeFolderItem) : sprintf('%s(%s)', gettype($pictureManagerDetailsTypeFolderItem), var_export($pictureManagerDetailsTypeFolderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Folder property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerFolderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Folder value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerFolderType[] $folder
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setFolder(array $folder = []): self
    {
        // validation for constraint: array
        if ('' !== ($folderArrayErrorMessage = self::validateFolderForArrayConstraintsFromSetFolder($folder))) {
            throw new InvalidArgumentException($folderArrayErrorMessage, __LINE__);
        }
        $this->Folder = $folder;
        
        return $this;
    }
    /**
     * Add item to Folder value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerFolderType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function addToFolder(\macropage\ebaysdk\trading\StructType\PictureManagerFolderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerFolderType) {
            throw new InvalidArgumentException(sprintf('The Folder property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerFolderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Folder[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
